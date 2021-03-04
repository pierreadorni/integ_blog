<!DOCTYPE html>
<html>
<head>
    <?php
        $team = $_GET['t'];
    ?>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href="src/style.css"></link>
    <title><?php echo 'Blog de la Team '.$team; ?></title>
</head>
<body>
        <a href='modif.php?t=<?php echo $team;?>'>
            <img width=50px style='position:fixed; top:0; left:0;'src='https://image.flaticon.com/icons/png/512/84/84380.png'></img>
        </a>
        <div class="header">
          <h2><?php echo 'Team '.$team;?></h2></h2>
        </div>

        <div class="row">
          <div class="leftcolumn">
            <!-- ARTICLES -->
            <?php
                echo file_get_contents ($team.'/articles.html');
            ?>
          </div>
          <div class="rightcolumn">

              <!-- OBJECTIFS ET MEMBRES -->
            <?php
                echo file_get_contents ($team.'/objectifs.html');
                echo file_get_contents ($team.'/membres.html');
            ?>

            <!-- CONTACT -->
            <div class="card">
              <h3>contactez le resp !</h3>
                <?php
                    $raw_file = file_get_contents('src/fb_ids.json');
                    $fb_ids = json_decode($raw_file,true);
                    $fb_id = $fb_ids[$team];
                ?>
              <a href='https://m.me/<?php echo $fb_id;?>'>
                  <img style='width:80%; margin-left: 10%; padding-top:10%;padding-bottom:10%'id="fb_msg_icon" src="src/contact_us.png">
              </a>
            </div>

          </div>
        </div>

        <div class="footer">
          <h2>Liens des autres blogs de team à insérer ici</h2>
        </div>

</body>
</html>
