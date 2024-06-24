function searchEntry(str) {
	var defaultList = document.getElementById("tableContainer");
	if (str.length == null) {
		document.getElementById("filterTable").innerHTML = "";
		defaultList.style.display = "flex";
		return;
	} else {
		defaultList.style.display = "none";
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("filterTable").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "ajaxEntryPatient.php?risk=" + str, true);
		xmlhttp.send();
	}
}

var modal = document.getElementById("windowModal");
var btnModals = document.querySelectorAll("#btnModal");
modal.style.display = "none";

btnModals.forEach(function(btnModal) {
	btnModal.onclick = function() {
		modal.style.display = "flex";
		var cpf = this.getAttribute("data-user-id");


	    var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	      if (this.readyState == 4 && this.status == 200) {
	        document.getElementById("modalContainer").innerHTML = this.responseText;
	      }
	    }
	    xmlhttp.open("GET", "../menuPatient/ajaxPatientExit.php?cpf="+cpf, true);
	    xmlhttp.send();
	    }
});

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}