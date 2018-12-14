function submitFunction() {
			var nama = document.getElementById("nama").value;
			var nik = document.getElementById("nik").value;
			var email = document.getElementById("email").value;
			var alamat = document.getElementById("alamat").value;
			var usia = document.getElementById("usia").value;
			var noHp = document.getElementById("noHp").value;

			var gender = document.getElementsByName("gender");
    			if(gender[0].checked){
		           gender = "Perempuan";
		        } else {
		           gender = "Laki-Laki";
		        }
		        document.getElementById("hasilGender").innerHTML = gender;
			var keahlian = document.getElementById("keahlian").value;
			var status = document.getElementById("status").value;

	if(nama==""){
		alert("Masukkan Nama")
		return false;
	}
	else if (nik==""){
		return false;
	}
	else if (email==""){
		return false;
	}
	else if(alamat==""){
		alert("Masukkan Alamat")
		return false;
	}  
	else if(usia==""){
		alert("Masukkan Usia")
		return false;
	}
	else if(noHp==""){
		alert("Masukkan Nomer Telepon")
		return false;
	}
	else if(keahlian==""){
		alert("Masukkan Keahlian")
		return false;
	}
	else if(status==""){
		alert("Masukkan Status")
		return false;
	}
	else{
		return true;
	}
}