 
 <?php
 
 
        
        
    try
        {
            
           $connexion = new PDO('mysql:host=localhost; dbname=id14368008_domino', 'id14368008_root','');
        }
            
    catch(Exception $e)
    {
            
       die('Erreur :'.$e->getMessage());
    }
            
    $pdoconnect = $connexion->prepare('INSERT INTO user(nom, prenom,mel,address,tel) VALUES ( :nom, :prenom, :mel, :address, :tel)');
            
    $pdoconnect->execute(array('nom'=>$_POST['Name'], 'prenom'=>$_POST['seudo'], 'mel'=>$_POST['mail'], 'address'=>$_POST['adresse'],'tel'=>$_POST['phone'],));

    $insertIsOk = $pdoconnect;
    if ($insertIsOk)
        {
            $message = 'Votre formulaire a été bien enregistrer.';
        }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title></title>
 <meta http-equiv="X-UA-Compstible" content="ie-edge">
</head>
<body>
    <h1>INSCRIPTION</h1>
    <p>
        <?php
            echo $message;
        ?>
    </p>

</body>
</html>
