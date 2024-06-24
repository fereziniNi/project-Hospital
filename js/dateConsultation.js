function takeHour() {
    var crm = document.getElementById("crm").value;
    var date = document.getElementById("dt").value;

    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        document.getElementById("Calendar").innerHTML = this.responseText;
    };
    xmlhttp.open("get","ajaxNamePatient.php?crm="+crm+"&date="+date);
    xmlhttp.send();
  }