<!DOCTYPE html>
<h1>Bonjour, <?= $_SESSION['player1']['username'] ?></h1>
<h1>Tu es presque prêt à commencer l'aventure !</h1>
<p>Je suis ravi d'aceuillir un nouveau <?= $_SESSION['player1']['classOfPersonage']?>, jespère que tu fera honneur à ta class et que tu deviera un grand  <?= $_SESSION['player1']['classOfPersonage']?></p>
<p>Un conseil pour toi</p>
<?php 
 if ($_SESSION['player1']['classOfPersonage'] == 'Aventurier') {
    echo("<p>Les aventurier sont très pour observateur, ne l'oublie pas</p> ");
}
elseif ($_SESSION['player1']["classOfPersonage"] == 'Voleur') {
    echo("<p>Les Voleurs sont particulièrement douer pour se fondre dans la masse</p>");
}
elseif ($_SESSION['player1']["classOfPersonage"] == 'Mage') {
    echo("<p>Les Mage sont doter d'une forte intéligence et d'une grande sagesse, faite en bonne usage</p>");
}

elseif ($_SESSION['player1']["classOfPersonage"] == 'Geurrier') {
    echo("<p>Votre Force n'as dégale que votre puissance</p>");
}
?>

<div class="flex-center">
    <div class="resumate-perso flex-center">
        <div>
        <p>Nom :<?= $_SESSION['player1']['username']?></p>
        <p>Class :<?= $_SESSION['player1']['classOfPersonage']?></p>
        <p>Armes attaque : <?= $_SESSION['player1']['armsOfPersonage'] ?></p>
        <p>Armes Défences: <?= $_SESSION['player1']['defenceOfPersonage'] ?></p>    
        <p>Potions : <?= $_SESSION['player1']['potionOfPersonage'] ?></p>
        <p>Point de vie : <?= $_SESSION['player1']['PDV'] ?></p>
        </div>

        <div>
        <p>Money : <?= $_SESSION['player1']['money'] ?></p>
            <div class="flex-center">
                <div><p>Food :</p></div>
                <div>
                    <?php $listFood = $_SESSION['player1']['food']; foreach ($listFood as $food):  ?>
                    <p><?= ($food) ?></p>
                    <?php endforeach ; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<label><a href="/?acceuil=ok">Pour commencer l'aventure cliquer ici.</a></label>
<br>