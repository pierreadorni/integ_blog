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

        <div id="topnav">

            <a class='navelem' href='index.html' onmouseover='onHomeHover(this);' onmouseout='onHomeUnHover(this);'>
                <img id='homeimg' width=45px style='display:inline-block'src='src/home.png'></img>
                <h2 style='display:inline-block; position:relative;top:-10px'>Home</h2>
            </a>

            <a class='navelem' href='modif.php?t=<?php echo $team;?>' onmouseover='onEditHover(this);' onmouseout='onEditUnHover(this);'>
                <img width=45px style='display:inline-block; margin-top:1px;'src='src/edit.png'></img>
                <h2 style='display:inline-block; position:relative;top:-10px'>Edit</h2>
            </a>

        </div>

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
        <script src='hover.js'></script>
</body>
</html>
