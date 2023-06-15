<?php
/*
    Créer un petit programme qui permet de saisir un prix HT
    et d'afficher le prix TTC correspondant

    // INFORMATIONS
    - Le prix HT, doit être renseigné directement sur le formulaire sur la page (get)

    - Vous allez faire le calcul et stocker le montant TTC sur une variable

    - Vous allez faire un echo affichant :
        Le prix HT est = (ajouter la variable du prixHT), le prix TTC est = (ajouter la variable du prix TTC), le montant total de la TVA est = (ajoutez le montant de la TVA)

    - Taux TVA = 20%

    // EXEMPLE
    Si le prix HT est 10, vous devez afficher :
    Le prix HT est = 10€, le prix TTC est = 12€, le montant total de la TVA est = 2€

*/

// Le prix HT doit être récupéré directement sur le formulaire
$TVA = 20;
?>
<form action="#" method="get">
    <label for="texte">Entrez un prix HT</label>
    <input type="text" id="texte" name="prix" placeholder="Tapez le prix ici">

    <button type="submit">Envoyer</button>
</form>
<?php
    if (!empty($_GET['prix'])) {
        $pxHT = $_GET['prix'];
        $montantTVA = $pxHT * $TVA / 100;
        $pxTTC = $pxHT + $montantTVA;
        echo "Le prix HT est = $pxHT €, le prix TTC est = $pxTTC €, le montant total de la TVA est = $montantTVA €";
    }
?>
