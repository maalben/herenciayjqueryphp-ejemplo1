<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Ejemplo POO herencia básica en php y Jquery</title>
    
        <script>
        
            function proceso(txtnumero1, txtnumero2, boton){
                switch(boton){
                    case "+":
                        var parametros = {
                            "txtnumero1" : txtnumero1,
                            "txtnumero2" : txtnumero2,
                            "btnsumar" : boton
                        };
                    break;
                    case "-":
                        var parametros = {
                            "txtnumero1" : txtnumero1,
                            "txtnumero2" : txtnumero2,
                            "btnrestar" : boton
                        };
                    break;

                }
                $.ajax({
                    data: parametros,
                    url: 'calcular.php',
                    type: 'post',
                    beforeSend:
                        function(){
                            $('#resultado').html('Cargando!...');
                        },
                    success:
                        function(response){
                            $('#resultado').html(response);
                        }
                });
            }
        </script>

    </head>
<body>
    <h1>Ejemplo POO herencia básica en php y Jquery</h1>
    <form name="form1" method="POST">
        Número 1: <input type="text" name="txtnumero1" id="txtnumero1">
        <br>
        Número 2: <input type="text" name="txtnumero2" id="txtnumero2">
        <br>
        <input type="button" name="btnsumar" id="btnsumar" value="+"
        onclick="proceso($('#txtnumero1').val(), $('#txtnumero2').val(), $('#btnsumar').val() );">
        <br>
        <input type="button" name="btnrestar" id="btnrestar" value="-"
        onclick="proceso($('#txtnumero1').val(), $('#txtnumero2').val(), $('#btnrestar').val() );">
    </form>
    <br>
    <span id="resultado"></span>

    <script src="jquery-3.4.1.js"></script>
</body>
</html>