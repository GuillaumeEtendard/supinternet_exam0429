<?php
if(isset($_POST)){
        if($_POST['id'] == 1){//si l'utilisateur s'inscrit
            $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $passwordHash = $passwordHash."\n";
            if(!file_exists('exo4/login@supmail.fr')){//créé le fichier s'il n'existe pas en ajoutant le mot de passe encrypté et le md5
                $md5 = md5('abcd');
                $md5 = $md5."\n";
                $content = $passwordHash.$md5;
                file_put_contents('exo4/login@supmail.fr',$content);
            }else{//si le fichier existe, ajoute à la ligne le mot de passe encrypté et le md5
                $file = fopen('exo4/login@supmail.fr', 'r+');
                $md5 = md5('abcd');
                $md5 = $md5."\n";
                $getFile = fgets($file);
                fputs($file, $passwordHash);
                fclose($file);
            }
        }elseif($_POST['id'] == 2){//si l'utilisateur se connecte
            $filename = "exo4/login@supmail.fr";
            $handle = fopen($filename, 'rb');//récupère le contenu du fichier pour véririer les informations
            $login = [];
            while (($data = fgetcsv($handle)) !== FALSE) {
                $login[] = $data;
            }
            $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);

        }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
Inscription :
<form method="post" name="register">
    login<input type="text" name="login">
    password<input type="password" name="password">
    <input type="hidden" name="id" value="1">
    <input type="submit" value="Envoyer">
</form>

Login :
<form method="post" name="login">
    login<input type="text" name="login">
    password<input type="password" name="password">
    <input type="hidden" name="id" value="2">
    <input type="submit" value="Envoyer">
</form>
</body>
</html>
