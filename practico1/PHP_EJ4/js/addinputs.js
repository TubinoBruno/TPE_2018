$('#agregaInputs').on('click', function () {
    var cantidad = $('#cantidadInputs').val();
    var contador = 1;
    for (var i = 0; i < cantidad; i++) {
      $('.agregarInputs').append('<input type="text" name="valor'+contador+'" value="">');
      contador++;
    }
    $('.agregarInputs').append('<input type="submit" name="send" value="SUMAR">');
})
