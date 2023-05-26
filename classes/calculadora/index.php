<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="calcular.php" method="post">

        <label for="">
            Primeiro número: 
            <input type="text" name="numero1">
        </label>

        <label for="">
            Segundo número: 
            <input type="text" name="numero2">
        </label>

        <br>
        <p>Operacao:</p>
        <label for="">
            <input type="radio" name="operacao" value="somar">
            Somar
        </label>
        <br>
        <label for="">
            <input type="radio" name="operacao" value="subtrair">
            Subtrair
        </label>
        <br>
        <label for="">
            <input type="radio" name="operacao" value="multiplicar">
            Multiplicar
        </label>
        <br>
        <label for="">
            <input type="radio" name="operacao" value="dividir">
            Dividir
        </label>

        <br>
        <input type="submit" value="Calcular">
        

    </form>

</body>
</html>