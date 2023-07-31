// script.js

// JavaScript para verificar o status do IP e colorir a célula de acordo
function pingIP(ip, cell) {
    $.ajax({
      type: "GET",
      url: "ping.php",
      data: { ip: ip },
      dataType: "json",
      success: function (response) {
        if (response.status === "online") {
          cell.css("background-color", "green");
          cell.text("Online");
        } else {
          cell.css("background-color", "red");
          cell.text("Offline");
        }
      },
      error: function () {
        cell.css("background-color", "red");
        cell.text("Offline");
      }
    });
  }
  
  $(document).ready(function () {
    $(".status").each(function () {
      var ip = $(this).attr("id").replace("status_", "");
      var cell = $(this);
      pingIP(ip, cell);
    });
  });
  