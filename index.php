<?php 

if(isset($_POST['submit'])) {

    // if(isset($_POST['nome'])) {
    //     print_r($_POST['nome']);
    // }
    // print_r('<br>');
    // if(isset($_POST['email'])) {
    //     print_r($_POST['email']);
    // }
    // print_r('<br>');
    // if(isset($_POST['fone'])) {
    //     print_r($_POST['fone']);
    // }
    // print_r('<br>');

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $fone = $_POST['fone'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, fone, data_nascimento) VALUES('$nome', '$email', '$data_nascimento', '$fone')");

}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Form</title>
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <main>
            <form action="index.php" class="form-container" method="post">
                <h2>Cadastro usuário</h2>
                <input type="text" name="nome" placeholder="Digite seu nome" />
                <input
                    type="email"
                    name="email"
                    placeholder="Digite seu E-mail"
                />
                <label for="data_nascimento">Data de nascimento:</label>
                <input type="date" name="data_nascimento" />
                <input type="tel" name="fone" placeholder="Telefone" />
                <button type="submit" name="submit">Cadastrar</button>
            </form>
        </main>
    </body>
</html>
