<?php 

require 'Config.php';

$id = $_GET["id"];



if (hapus($id) > 0 ) {
	
	echo "<script>
			alert('data berhasil dihapus!');
			document.location.href = 'daftar_pasien.php';
			</script>
			";
            
	} else { 

	echo "<script>
			alert('data berhasil dihapus!');
			document.location.href = 'daftar_pasien.php';
			</script>
			";
            
	}
 


 ?> 


