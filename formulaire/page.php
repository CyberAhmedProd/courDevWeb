<?php
    /*if (ISSET($_POST['sexe']))
    {
        $sexe = $_POST['sexe'];
    } */
    // @ $sexe = $_POST['sexe']; si la valeur n existe pas alors on va prendre la valeur comme null 
    //$nom = $_GET['nom'];
    $nom = $_POST['nom'];
    //$nom = $_REQUEST['nom'];
    $pays = $_REQUEST['pays'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $lien = $_POST['lien'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $com = $_POST['com'];
    if( ISSET($_POST['tab']))
    {
        $tab = $_POST['tab'];
    }
    if( ISSET($_POST['lang']))
    {
        $lang = $_POST['lang'];
    }
    echo "votre nom est $nom <br>";
    print "votre email est $mail<br>";
    print "votre email est $lien<br>";
    print "votre email est $age<br>";
    print "votre sexe est $sexe<br>";
    print "votre pays est $pays<br>";
    foreach($lang as $l)
    {
        echo "vous parlez $l<br>";
    }
    print "les loisir sont : <br>";
    foreach($tab AS $v)
    {
        echo "$v <br>";

    }
    print "votre commentaire est :<br>";
    print "$com<br>";
?>
<b>ceci est un text en HTML</b>