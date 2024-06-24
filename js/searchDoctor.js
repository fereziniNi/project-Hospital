  function searchHour() {
      var crm = document.getElementById("selectDoctor").value;
      var date = document.getElementById("date").value;
      var btn = document.getElementById("btn");
      btn.style.display = "none";
      const xmlhttp = new XMLHttpRequest();
      xmlhttp.onload = function() {
          document.getElementById("div-form-DoctorDate").innerHTML = this.responseText;
      };
      xmlhttp.open("get","ajaxListHour.php?name="+crm+"&date="+date);
      xmlhttp.send();

    }