<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $nascimento = $_POST["nascimento"];
    $valor = $_POST["valor"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    
    echo "Dados recebidos com sucesso!<br>";
    echo "Nome: $nome<br>";
    echo "Nascimento: $nascimento<br>";
    echo "Salario: R$ $valor<br>";
    echo "Email: $email<br>";
    echo "Mensagem: $mensagem<br>";

} else {
    echo "Ocorreu um erro no envio do formulário.";
}


include "time.php";


?>