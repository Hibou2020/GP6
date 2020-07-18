 
 <?php
 
 
        
        
    try
        {
            
           $connexion = new PDO('mysql:host=localhost; dbname=id14368008_domino', 'id14368008_root','');
        }
            
    catch(Exception $e)
    {
            
       die('Erreur :'.$e->getMessage());
    }
            
    $pdoconnect = $connexion->prepare('INSERT INTO contact(nom,mel,mesg) VALUES ( :nom, :mel, :mesg)');
            
    $pdoconnect->execute(array('nom'=>$_POST['Name'], 'mel'=>$_POST['mail'],'mesg'=>$_POST['mssg'],));

    $insertIsOk = $pdoconnect;
    if ($insertIsOk)
        {
            $message = 'Votre requete a été bien éfectué. ';
        }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" /> 
    <title></title>
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
