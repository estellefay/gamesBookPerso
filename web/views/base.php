<!DOCTYPE html>

<?php 
// Session start


session_start();

// detruire ma session
if(isset($_GET['action']) && $_GET['action'] == 'logoff') {
    session_destroy();
    header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
}

// Information à stocker
if (isset($_POST['username']) && isset($_POST['classOfPersonage']) && isset($_POST['armsOfPersonage']) && isset($_POST['defenceOfPersonage']) && isset($_POST['potionOfPersonage'])) {
    $_SESSION['player1']['username'] = $_POST['username'];
    $_SESSION['player1']['classOfPersonage'] = $_POST['classOfPersonage'];
    $_SESSION['player1']['armsOfPersonage'] = $_POST['armsOfPersonage'];
    $_SESSION['player1']['defenceOfPersonage'] = $_POST['defenceOfPersonage'];
    $_SESSION['player1']['potionOfPersonage'] = $_POST['potionOfPersonage'];
    $_SESSION['player1']['PDV'] = 100;
    $_SESSION['player1']['money'] = 50;
    $_SESSION['player1']['food'] = ['pommme','salade','viande','eau'];    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php include('./views/templates/header.tmpl.php'); ?>
<?php var_dump($_SESSION); ?>

<?php if (isset($_GET['acceuil'])) {
        include('./views/templates/acceuil.tmpl.php');
} elseif (isset($_GET['characters'])) {
    include('./views/templates/characters.tmpl.php');
} else {
    include('./views/templates/form.tmpl.php');
}
?>
<label><a href="/?action=logoff">Log out</a></label>
<?php include('./views/templates/footer.tmpl.php'); ?>   
</body>
</html>
