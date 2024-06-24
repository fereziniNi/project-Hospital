	var modal = document.getElementById("windowModal");
	var btnModals = document.querySelectorAll("#btnModal");
	modal.style.display = "none";

	btnModals.forEach(function(btnModal) {
		btnModal.onclick = function() {
			modal.style.display = "flex";
			var crm = this.getAttribute("data-user-id");

			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("modalContainer").innerHTML = this.responseText;
				}
			}
			xmlhttp.open("GET", "../menuMain/ajaxL	ist.php?crm=" + crm, true);
			xmlhttp.send();
		}

	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none"; // Esconde o modal quando se clica fora dele
		}
	}
});

function searchMembers(str) {
	var defaultList = document.getElementById("tableContainer");
	if (str.length == 0) { 
	  document.getElementById("specificList").innerHTML = "";
	  defaultList.style.display = "flex";
	  return;
	} else {
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  defaultList.style.display = "none";
		  document.getElementById("specificList").innerHTML = this.responseText;
		}
	  }
	  xmlhttp.open("GET", "ajaxNameMember.php?crm="+str, true);
	  xmlhttp.send();
	}
  }