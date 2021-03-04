<!DOCTYPE html>
<html>
<head>
    <?php
        $team = $_GET['t'];
        if (isset($_POST['type']) && isset($_POST['html'])){
            $type = $_POST['type'];
            $html = $_POST['html'];

            if ($type == 'articles'){
                $old_articles = file_get_contents($team.'/'.$type.'.html');
                $new_articles = $old_articles.'\n'.$html;
                file_put_contents($team.'/'.$type.'.html',$new_articles);
            }else{
                file_put_contents($team.'/'.$type.'.html',$html);
            }



        }
    ?>
    <meta charset='utf-8'></meta>
    <title>Modification du blog de la team <?php echo $team;?></title>
    <link rel='stylesheet' href="src/style.css"></link>

    <link rel="stylesheet" href="codemirror/lib/codemirror.css">

    <script src="codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src="codemirror/mode/xml/xml.js"></script>
    <script src="codemirror/mode/htmlmixed/htmlmixed.js"></script>


</head>
<body>
    <a href='feed.php?t=<?php echo $team;?>'>
        <img width=50px style='position:fixed; top:0; left:0;'src='https://i.pinimg.com/originals/81/6b/0a/816b0ac0aff866ec3a155995811b2a24.png'></img>
    </a>

    <div class="header">
      <h2>Modification blog <?php echo 'Team '.$team;?></h2></h2>
    </div>

    <div class='card'>
        <h2> Ajout d'un article </h2>
        <div class='formulaire'>
            <form method="post" action="modif.php?t=<?php echo $team;?>">
                <div id='areaWrapper' style="float:left;width:80%;border:1px solid blue">

            	<textarea id='articleTextArea' rows="20" cols="130" wrap="physique" name="html">
                    <?php
                        echo file_get_contents ('article_exemple.html');
                    ?>
                </textarea>
                </div>
                <input hidden name='type' value='articles'>
            	<input style='margin-left:2.5%;margin-top: 10%; width:200px; height: 50px' type="submit" value="Envoyer" />

            </form>
        </div>
        <div class='preview' id='articlePreview'>
            <?php
                echo file_get_contents ('article_exemple.html');
            ?>
        </div>

    </div>

    <div class='card' style='height:600px;'>
        <h2> Modification du premier cadre </h2>
        <div class='form-little' style='margin-left:4%;'>
            <form method="post" action="modif.php?t=<?php echo $team;?>">
                <div id='areaWrapper' style="float:left;width:100%;border:1px solid blue">

                <textarea id='objectifsTextArea' name="html">
                    <?php
                        echo file_get_contents ($team.'/objectifs.html');
                    ?>
                </textarea>
                </div>
                <input hidden name='type' value='objectifs'>
                <input style='margin-left:37%;margin-top: 2%; width:200px; height: 50px' type="submit" value="Envoyer" />

            </form>
        </div>

        <div class='form-little' id='objectifsPreview' style='width:25%; overflow:scroll; margin-left: 5%'>
            <?php
                echo file_get_contents ($team.'/objectifs.html');
            ?>
        </div>
    </div>

    <div class='card' style='height:600px;'>
        <h2> Modification du deuxième cadre </h2>
        <div class='form-little' style='margin-left:4%;'>
            <form method="post" action="modif.php?t=<?php echo $team;?>">
                <div id='areaWrapper' style="float:left;width:100%;border:1px solid blue">

                <textarea id='membresTextArea' name="html">
                    <?php
                        echo file_get_contents ($team.'/membres.html');
                    ?>
                </textarea>
                </div>
                <input hidden name='type' value='membres'>
                <input style='margin-left:37%;margin-top: 2%; width:200px; height: 50px' type="submit" value="Envoyer" />

            </form>
        </div>

        <div class='form-little' id='membresPreview' style='width:25%; overflow:scroll; margin-left: 5%'>
            <?php
                echo file_get_contents ($team.'/membres.html');
            ?>
        </div>
    </div>
    <script src='realTimeEdit.js'></script>

</body>
</html>
