<?php

 if (isset($_POST['nama'])) {
 	$nama = $_POST['nama'];
 	$nik = $_POST['nik'];
 	$email = $_POST['email'];
 	$alamat = $_POST['alamat'];
 	$usiaa = $_POST['usia'];
 	$jenisKelamin = $_POST['gender'];
 	$selected_status = $_POST['status'];
 	$selected_keahlian = $_POST['keahlian'];
 	$status = array(
 		'Tersedia' => 'Tersedia',
 		'Tidak Tersedia' => 'Tidak Tersedia',
 		'Siaga' => 'Siaga',
 		'Berhenti' => 'Berhenti'
 	);
 	$keahlian = array(
		01 => 'RHA',
		02 => 'Medis',
		03 => 'Perawat'
	);

	echo "DATA RELAWAN KESEHATAN<br/>";
 	echo "Nama 			: $nama <br/>";
 	echo "NIK			: $nik <br/>";
 	echo "Email 		: $email <br/>";
 	echo "Alamat 		: $alamat <br/>";
 	echo "Usia 			: $usiaa <br/>";
 	echo "Jenis Kelamin : $jenisKelamin <br/>";
 	foreach($keahlian as $kode => $keahlian)
 	{
 		if ($selected_keahlian==$kode)
 			echo " Keahlian : $keahlian <br/>";
 	}

 	foreach ($status as $key => $status)
 	{
 		if ($selected_status==$key)
 			echo " Status : $status <br/>";
 		
 	}
 	$folder = "photos";
 	$i = 1;  
	$handle = opendir('C:\Users\dina\Documents');
 	echo '<table cellspacing="2" cellpadding="5">';  
	echo '<tr>';  
	$fileGambar = array('png', 'jpg', 'jpeg', 'gif');  
	while (($file = readdir($handle)) !== false)
	{  
    $fileAndExt = explode('.', $file);  
    	if(in_array(end($fileAndExt), $fileGambar))
    	{  
        	echo '<td style="border:1px solid #000000;" align="center">
        	<img src="photos/'.$file.'" width="100"/><br/>'.$file.'</td>';
    	}    
	echo '</tr>';  
	echo '</table>'; 
	}
}

?>