

<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Authentification</title>
    <link rel='stylesheet' href="src/style.css"></link>
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="Skeleton/css/normalize.css">
    <link rel="stylesheet" href="Skeleton/css/skeleton.css">
    <?php
        $team = $_GET['t'];
        $wrong_pass = false;
        if (isset($_POST['pass'])) {
            if (hash('md5', $_POST['pass']) == '3a8e8b3c91150fded1e49ef03639b992') {
                echo '<meta http-equiv = "refresh" content = "0; url = modif.php?t='.$team.'" />';
            } else {
                $wrong_pass = true;
            }
        }
    ?>
</head>
<body>
    <div class='container'>
        <div class='row'>
            <div class='one-half column' style='margin-top: 40vh; margin-left: 22vw'>
                <form action='connect.php?t=<?php echo $team;?>' method='post'>
                    <?php
                    if ($wrong_pass) {
                        echo '<p><b>MAUVAIS MOT DE PASSE.</b></p>';
                    }
                    ?>
                    <label for="pass">Authentification</label>
                    <input id='pass' type='password' name='pass' placeholder='Mot de passe'>
                    <input class='button-primary' type='submit' value='connexion'>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
