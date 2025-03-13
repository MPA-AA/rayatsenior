<?php
// Replace with your real receiving email address
$to = 'contato@rayatsenior.com'; // Updated to your desired email

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Set email subject
    $subject = "Novo Contato de $name";

    // Compose the email body
    $body = "Nome: $name\n";
    $body .= "Email: $email\n";
    $body .= "Telefone: $phone\n";
    $body .= "Mensagem:\n$message";

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p class='sent-message'>Mensagem enviada com sucesso!</p>";
    } else {
        echo "<p class='error-message'>Erro ao enviar a mensagem. Por favor, tente novamente.</p>";
    }
} else {
    echo "<p class='error-message'>Método de requisição inválido.</p>";
}
?>