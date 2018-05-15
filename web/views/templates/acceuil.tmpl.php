<!DOCTYPE html>
<h1>Ton perso et le questionaire commencer</h1>
<div>
    <div> </div>
    <div>
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
</div>
