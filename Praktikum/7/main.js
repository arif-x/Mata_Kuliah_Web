document.getElementById("hitungForm").addEventListener("keyup", function() {
	var nilai = document.getElementById('nilai').value;
	if (nilai !== '') {
		document.getElementById('btnSubmit').removeAttribute("disabled");
	} else {
		document.getElementById('btnSubmit').setAttribute("disabled", null);
	}  
});