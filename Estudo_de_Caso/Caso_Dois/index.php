<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


<div class="container">
    <h1>Contacto</h1>
    <form action="" method="POST">

        <label for="">Nome:</label>
        <input type="text" name="nome" placeholder="Digite o seu nome" class="form-control">

        <label for="">Assunto:</label>
        <input type="text" name="assunto" placeholder="Digite o assunto" class="form-control">

        <label for="">Mensagem:</label>
        <textarea name="mensagem" placeholder="Digite a mensagem" class="form-control"></textarea>

        <input type="submit" name="submit" value="Enviar" class="btn btn-success">
    </form>


   <?php
        $nome = $_POST['nome'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        if(isset($_POST['submit'])){
            echo "Nome: $nome <br /><br />";
            echo "Assunto: $assunto <br /><br />";
            echo "Mensagem: $mensagem <br /><br />";
        }

    ?>




</div>