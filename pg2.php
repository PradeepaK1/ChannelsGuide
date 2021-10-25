<?php
if ($_POST){

$name = $_POST['name'];
$content = $_POST['commentContent'];
$handle = fopen("comments.html","a");
fwrite ($handle,"<b>" . $name . "</b></br>" . $content . "</br>");
fclose ($handle);}

?>

<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CLW46MQ16W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CLW46MQ16W');
</script>
        <style>
            body{
                font-size:40px;
                color:white;
                background-image:url("bgg.jpg");
            }
            .ip{
                font-size:35px;
            }
        </style>
    </head>
<body>

<form action="" method="POST">
    Name: <br><br><input type = "text" name = "name" style="height:60px; width:800px; font-size:35px"></br>
<br><br>
Suggestion:<br><br> <textarea rows ="10" cols ="30" name="commentContent" style="width:800px; font-size:35px"></textarea></br><br><center>
<input class="ip" type="submit" value="Post" style="height:60px; width:500px; font-size:45px; font-weight:bold"></center>
</form>

<?php include "comments.html"; ?>
</body>
</html>
