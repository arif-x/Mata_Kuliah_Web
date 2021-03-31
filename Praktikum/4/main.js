function modified(){
	document.getElementById("modified").innerHTML = "Dimodifikasi terakhir pada " + document.lastModified;
}

function tambah(){
	var input1 = document.getElementById("input1").value;
	var input2 = document.getElementById("input2").value;
	document.getElementById('hasilTambah').style.display = "block";
	document.getElementById('hasilTambah').innerHTML = "Hasil Tambah: " + (parseFloat("0" + input1) + parseFloat("0" + input2));
	document.getElementById('hasilKurang').style.display = "none";
	document.getElementById('hasilKali').style.display = "none";
	document.getElementById('hasilBagi').style.display = "none";
	modified();
}

function kurang(){
	var input1 = document.getElementById("input1").value;
	var input2 = document.getElementById("input2").value;
	document.getElementById('hasilKurang').style.display = "block";
	document.getElementById('hasilKurang').innerHTML = "Hasil Kurang: " + (parseFloat("0" + input1) - parseFloat("0" + input2));
	document.getElementById('hasilTambah').style.display = "none";
	document.getElementById('hasilKali').style.display = "none";
	document.getElementById('hasilBagi').style.display = "none";
	modified();
}

function kali(){
	var input1 = document.getElementById("input1").value;
	var input2 = document.getElementById("input2").value;
	document.getElementById('hasilKali').style.display = "block";
	document.getElementById('hasilKali').innerHTML = "Hasil Kali: " + (parseFloat("0" + input1) * parseFloat("0" + input2));
	document.getElementById('hasilKurang').style.display = "none";
	document.getElementById('hasilTambah').style.display = "none";
	document.getElementById('hasilBagi').style.display = "none";
	modified();
}

function bagi(){
	var input1 = document.getElementById("input1").value;
	var input2 = document.getElementById("input2").value;
	document.getElementById('hasilBagi').style.display = "block";
	document.getElementById('hasilBagi').innerHTML = "Hasil Bagi: " + (parseFloat("0" + input1) / parseFloat("0" + input2));
	document.getElementById('hasilKurang').style.display = "none";
	document.getElementById('hasilTambah').style.display = "none";
	document.getElementById('hasilKali').style.display = "none";
	modified();
}

function getAll(){
	var input1 = document.getElementById("input1").value;
	var input2 = document.getElementById("input2").value;
	document.getElementById('hasilTambah').style.display = "block";
	document.getElementById('hasilKurang').style.display = "block";
	document.getElementById('hasilKali').style.display = "block";
	document.getElementById('hasilBagi').style.display = "block";
	document.getElementById('hasilTambah').innerHTML = "Hasil Tambah: " + (parseFloat("0" + input1) + parseFloat("0" + input2));
	document.getElementById('hasilKurang').innerHTML = "Hasil Kurang: " + (parseFloat("0" + input1) - parseFloat("0" + input2));
	document.getElementById('hasilKali').innerHTML = "Hasil Kali: " + (parseFloat("0" + input1) * parseFloat("0" + input2));
	document.getElementById('hasilBagi').innerHTML = "Hasil Bagi: " + (parseFloat("0" + input1) / parseFloat("0" + input2));
	modified();
}

function nilai(){
	var input = parseFloat("0" + document.getElementById("input").value);
	if (input > 0){
		if (input <= 100 && input >= 81)
			document.getElementById("predikat").innerHTML = "Predikat A";
		else if (input <= 80 && input >= 71) 
			document.getElementById("predikat").innerHTML = "Predikat AB";
		else if (input <= 70 && input >= 66) 
			document.getElementById("predikat").innerHTML = "Predikat B";
		else if (input <= 65 && input >= 61) 
			document.getElementById("predikat").innerHTML = "Predikat BC";
		else if (input <= 60 && input >= 56) 
			document.getElementById("predikat").innerHTML = "Predikat C";
		else if (input <= 55 && input >= 41) 
			document.getElementById("predikat").innerHTML = "Predikat D";
		else if (input <= 40 && input >= 0) 
			document.getElementById("predikat").innerHTML = "Predikat E";
		else if (input >= 101) 
			document.getElementById("predikat").innerHTML = "Field Tidak Boleh Melebihi 100";
	} else {
		document.getElementById("predikat").innerHTML = "Field Tidak Boleh Bernilai Negatif";		
	}
	modified();
}
