<?php
require_once('core/class.formulaire.php');
//On appelle la methode d'export dans un if pour vérifier si on a un post
$formulaire = new Formulaire(array('method' => 'POST', 'action'=>'index.php','name'=>'formeval','id' => 'form'));
//<form name="testform" action="action.php">
//<input type="text" name="nom" placeholder="Votre nom" class="test" id="titi">
//On fait le texte
$formulaire -> setId('texte');
$formulaire -> setName('texte');
$formulaire -> setPlaceholder('Votretexte');
$formulaire -> setType('text');
$formulaire -> inputTexte();
//On fait le mail
$formulaire -> setId('email');
$formulaire -> setName('email');
$formulaire -> setType('email');
$formulaire -> setPlaceholder('VotreEmail');
$formulaire -> inputTexte();
//On fait le tel
$formulaire -> setId('tel');
$formulaire -> setName('tel');
$formulaire -> setType('tel');
$formulaire -> setPlaceholder('Votretel');
$formulaire -> inputTexte();
//On fait la date
$formulaire -> setId('date');
$formulaire -> setName('date');
$formulaire ->setType('date');
$formulaire -> inputTexte();
//On fait le radio
$formulaire -> setId('radio');
$formulaire -> setName('radio');
$formulaire ->setType('radio');
$formulaire -> inputTexte();
//On fait la checkbox
$formulaire -> setId('checkbox');
$formulaire -> setName('checkbox');
$formulaire ->setType('checkbox');
$formulaire -> inputTexte();
//On fait le select
$formulaire -> setId('age');
$formulaire -> setName('age');
$formulaire -> selectMultiple();
//On fait le bouton d'envoie
$formulaire -> setType('submit');
$formulaire -> setName('submit');
$formulaire -> buttonSubmint();
//Cet algo traite et exporte le formulaire via csv frace a evalCSV()
if(isset($_POST['submit']))
{
    $formulaire -> evalCSV();
}
?>