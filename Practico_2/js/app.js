$("#boton").on("click" ,function () {

    $.ajax({
      url: 'comentarios.php',
      method:"POST",
      dataType:"json",
      data:{nombre:$("")},
      success: function (response) {
        $("#comments").html(response);

                    }
    });
});

  /*$.ajax({
    url: 'dibujarComentario.php',
    success: renderComments
  });*/
