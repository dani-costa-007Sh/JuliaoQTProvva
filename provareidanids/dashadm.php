<?php
session_start();
include ("seguranca.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
</head>

<body>
    <?php
       echo "Seja bem vindo(a)" .  $_SESSION['nome'];
    ?>
    <a href="sair.php">Sair</a>
    <h1>CRUD de usuarios</h1>
    <form action="">
        <input type="text" placeholder="Digite o nome" name="nome">
        <input type="email" name="login" placeholder="Digite seu email">
        <input type="password" name="senha" placeholder="Digite sua senha">
        <select name="" id="">
            <option value="admin">admin</option>
            <option value="cliente">cliente</option>
        </select>
        <input type="submit" value="Entrar">
    </form>
    <h1>Listar usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Login</th>
                <th>Senha</th>
                <th>Nivel</th>
                <th>Acao</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>fei</td>
                <td>feiquedoi@gmail.com</td>
                <td>mesalvapfv</td>
                <td>admin</td>
                <td>
                    <button>Editar</button>
                    <button>Deletar</button>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>