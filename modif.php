<!DOCTYPE html>
<html>
<head>
    <?php
        $team = $_GET['t'];
        if (isset($_POST['type']) && isset($_POST['html'])){
            $type = $_POST['type'];
            $html = $_POST['html'];
            if ($type=="article"){
                $old_articles = file_get_contents($team.'/articles.html');
                $new_articles = $old_articles.'\n'.$html;
                file_put_contents($team.'/articles.html',$new_articles);
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
                <input hidden name='type' value='article'>
            	<input style='margin-left:2.5%;margin-top: 10%; width:200px; height: 50px' type="submit" value="Envoyer" />

            </form>
        </div>
        <div class='preview' id='articlePreview'>
            <?php
                echo file_get_contents ('article_exemple.html');
            ?>
        </div>

    </div>
    <script src='realTimeEdit.js'></script>

</body>
</html>
