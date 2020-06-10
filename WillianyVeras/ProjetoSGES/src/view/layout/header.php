<?php
session_start();
?>

<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGES - Sistema de Gerênciamento de Estágio Supervisionado</title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<?php
if(isset($_SESSION['message'])){
    echo "<p>". $_SESSION['message'] . "</p>";
    unset($_SESSION['message']);
}
?>