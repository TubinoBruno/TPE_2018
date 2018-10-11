$('#enviar').on('click', function (ev) {
              ev.preventDefault();
              $.ajax({
                method: "GET",
                  url:   'practico.php',
                  dataType :  "HTML",
                  data:{numero1: $("#num1").val(),numero2: $("#num2").val(),operacion: $("#operacion").val()},
                  success:  function (response) {
                          $("#resultado").html(response);
                        }
              })
  })
