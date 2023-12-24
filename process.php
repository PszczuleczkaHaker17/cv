<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobierz dane z formularza
    $name = $_POST["name"];
    $phone = $_POST["phone2"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adres e-mail, na który ma zostać wysłana wiadomość
    $to = "antekrog1@gmail.com";

    // Temat wiadomości
    $subject = "Nowa wiadomość z formularza kontaktowego";

    // Treść wiadomości
    $body = "Imię: $name\n";
    $body .= "Telefon: $phone\n";
    $body .= "Email: $email\n\n";
    $body .= "Wiadomość:\n$message";

    // Nagłówki wiadomości
    $headers = "From: $email";

    // Użyj funkcji mail() do wysłania wiadomości e-mail
    mail($to, $subject, $body, $headers);

    // Przekieruj użytkownika po wysłaniu wiadomości
    header("Location: thank-you-page.html");
    exit();
}
?>
