<?php

if (isset($_POST['submit'])) {
    
    // 1. Ajuste do caminho do banco de dados (sai de views, entra em config)
    include_once('../config/database.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    
    // 2. SEGURANÇA: Criptografar a senha antes de salvar
    $senha = $_POST['senha'];
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // 3. SEGURANÇA: Usando Prepared Statements para evitar SQL Injection
    $sql = "INSERT INTO usuarios (nome, senha, email, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conexao->prepare($sql);
    
    // "sssssssss" indica que são 9 Strings
    $stmt->bind_param("sssssssss", $nome, $senhaHash, $email, $telefone, $sexo, $data_nasc, $cidade, $estado, $endereco);

    if ($stmt->execute()) {
        // Redirecionar para a página de Login correta
        header('Location: login.php');
        exit;
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }
    
    $stmt->close();
    $conexao->close();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/aps-primeiro-semestre/assets/css/cadastro.css" />
    
    <title>Cadastro | Music Hub</title>
</head>

<body>
    <div class="gradient-bg">
        <div class="gradients-container">
            <div class="g1"></div>
            <div class="g2"></div>
            <div class="g3"></div>
            <div class="g4"></div>
            <div class="g5"></div>
            <div class="interactive"></div>
        </div>
        
        <div class="box">
            <form action="" method="POST">
                <fieldset>
                    <legend><b>Formulário de Clientes</b></legend>
                    <br>
                    
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br><br>
                    
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    
                    <div class="inputBox">
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br><br>
                    
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>
                    
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                    <br><br><br>
                    
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br><br>
                    
                    <div class="inputBox">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="estado" class="labelInput">Estado</label>
                    </div>
                    <br><br>
                    
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>
                    <br><br>
                    
                    <input type="submit" name="submit" id="submit" value="Cadastrar">
                    
                    <br><br>
                    <div style="text-align: center;">
                        <a href="login.php" style="color: white; text-decoration: none;">Já tem conta? Faça Login</a>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>