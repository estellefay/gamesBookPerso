<!DOCTYPE html>
<h1>Inscrit toi</h1>
<form action="/?characters=ok" method="POST">
<h3>Crée ton personnage, chacun de tes choix seras determinant</h3>

<h4>Le nom de ton personnage</h4>
<input type="text" name="username" placeholder="Nom du personnage">


<div>
    <div><h4 class="color">Choisie ta classe de personnage</h4></div>
    <div> 
        <label><input type="radio" name="classOfPersonage" value="Aventurier">Aventurier</label> 
        <label><input type="radio" name="classOfPersonage" value="Voleur"> Voleur</label> 
        <label><input type="radio" name="classOfPersonage" value="Geurrier"> Geurrier</label> 
        <label><input type="radio" name="classOfPersonage" value="Mage"> Mage</label> 
    </div>
</div>

<div>
    <h4>Choisie ton armes d'attaque</h4>
    <div>
        <label><input type="radio" name="armsOfPersonage" value="Arc">Arc</label> 
        <label><input type="radio" name="armsOfPersonage" value="Épée">Épée</label> 
        <label><input type="radio" name="armsOfPersonage" value="Dague"> Dague</label> 
        <label><input type="radio" name="armsOfPersonage" value="BatonMagique">Baton Magique</label> 
    </div>
</div>

<div>
    <h4>Choisie ton accessoire de défence</h4>
    <div>
        <label><input type="radio" name="defenceOfPersonage" value="Bouclier">Bouclier</label> 
        <label><input type="radio" name="defenceOfPersonage" value="KitCamouflage">Kit de camouflage</label> 
        <label><input type="radio" name="defenceOfPersonage" value="CoteMaille"> Cote de maille</label> 
        <label><input type="radio" name="defenceOfPersonage" value="BombeFumer">Bombe de fumer dispersante</label> 
    </div>
</div>

<div>
    <h4>Choisie ta première potion</h4>
    <div>
        <label><input type="radio" name="potionOfPersonage" value="PotionTeleportation">Potion de teleportation</label> 
        <label><input type="radio" name="potionOfPersonage" value="PotionInvisibilité">Potion d'invisibilité</label> 
        <label><input type="radio" name="potionOfPersonage" value="PotionForce"> Potion de Force</label> 
        <label><input type="radio" name="potionOfPersonage" value="PotionSoin">Potion de Soin</label> 
    </div>
</div>

<div>
    <input type="submit" name="Envoyer">
</div>



</form>