

<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'></meta>
    <title>Connexion à la page de modification</title>
    <link rel='stylesheet' href="src/style.css"></link>
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
    <form action='connect.php?t=<?php echo $team;?>' method='post'>
        <?php
        if ($wrong_pass) {
            echo '<p><b>MAUVAIS MOT DE PASSE.</b></p>';
        }
        ?>
        <input type='password' name='pass'>
        <input type='submit' value='connexion'>
    </form>
</body>
</html>
