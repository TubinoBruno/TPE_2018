$( document ).ready(function(){
  $('#enviarCadena').on("click", function(){
    event.preventDefault();
    $.ajax({
        method: "POST",
        url:   'practico.php',
        data: $('#formulario').serialize(),
        dataType :  "HTML",
        success:  function (response) {
                $("#resultado").html(response);
              }
    })
  });


})
