	<?php 

// ambil data pasien dari object result
// mysqli_fetch_row() // menge
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()

//while ($psn = mysqli_fetch_assoc($result) ) {
    //var_dump($psn);
//}

//Koneksi ke Database

$conn = mysqli_connect("localhost", "root","","phpdasar");



function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;

	
}


function totalData($query){
    global $conn;
    $totaldata = mysqli_query($conn, $query);
    $totaldata =  mysqli_num_rows($totaldata);

    return $totaldata;

}




function tambah($data) {
	global $conn;

	$nama_pasien = htmlspecialchars($data["nama_pasien"]);
    $umur_pasien = htmlspecialchars($data["umur_pasien"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $no_telepon = htmlspecialchars($data["no_telepon"]);
    $alamat = htmlspecialchars($data["alamat"]);


    // upload photo
    $photo = upload();
    if (!$photo){
        return false;
    }


    // query insert data

    $query = "INSERT INTO pasien
                VALUES 
                ('', '$nama_pasien', '$umur_pasien', '$jenis_kelamin', '$no_telepon', '$alamat', '$photo')
                ";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {


    $namaFile = $_FILES['photo']['name']; 
    $ukuranFile = $_FILES['photo']['size'];
    $error = $_FILES['photo']['error'];
    
    $tmpName = $_FILES['photo']['tmp_name'];


    // cek gambar sudah di upload atau belum

    if ( $error === 4 ) {
        echo "
            <script>
                    alert('Pilih Gambar Terlebih dahulu');
            </script>
        ";

        return false;

    }

    // cek ekstensi dile 
    $ektensigambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $namaFile);
    $ekstensigambar = strtolower(end($ekstensigambar));

    if (!in_array($ekstensigambar, $ektensigambarvalid)){
        echo "
            <script>
                    alert('pilih file yang tepat untuk diupload');
            </script>
        ";
        return false;


    }

    // cek ukuran file yang besar
    if ($ukuranFile > 1000000 ) {

        echo 
        "<script>
            alert('file yang anda masukkan terlalu besar');
        </script>";

         return false;
    }
   

    // jika sudah dilewati semua, gambar bisa diupdate

    $namafileBaru = uniqid();
    $namafileBaru .= '.';
    $namafileBaru .= $ekstensigambar;


    move_uploaded_file($tmpName, 'img/' . $namafileBaru);

    return $namafileBaru;

}

function hapus($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM pasien WHERE id_pasien = $id");
	
	return mysqli_affected_rows($conn);


}



function ubah($data) {

	global $conn;

	$id_pasien = $data["id_pasien"];
	$nama_pasien = htmlspecialchars($data["nama_pasien"]);
    $umur_pasien = htmlspecialchars($data["umur_pasien"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $no_telepon = htmlspecialchars($data["no_telepon"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $photolama = htmlspecialchars($data['photolama']);


    // cek apakah file baru telah diupload  
    if ($_FILES['photo']['error'] === 4 ) {

        $photo = $photolama;
    } else {

        $photo = upload();
    }


    // query insert data

    $query = "UPDATE pasien SET 
    			nama_pasien = '$nama_pasien',
    			umur_pasien = '$umur_pasien',
    			jenis_kelamin = '$jenis_kelamin',
    			no_telepon = '$no_telepon', 
    			alamat = '$no_telepon', 
                photo = '$photo' WHERE id_pasien = '$id_pasien'
     ";


    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function cari($keyword) {
    global $conn;
    $query = "SELECT * FROM pasien 
            WHERE 
            nama_pasien LIKE '%$keyword%' 
            OR 
            umur_pasien LIKE '%$keyword%' 
            OR
            jenis_kelamin LIKE '%$keyword%'
            OR
            no_telepon LIKE '%$keyword%'
            OR
            alamat LIKE '%$keyword%'
            ";

    return query($query);
    
}

?>