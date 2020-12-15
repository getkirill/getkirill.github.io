<head>
    <title>Meme Generator</title>
    <style>
        body {
            background-color: #000000;
            color: #FFFFFF;
            text-align: center;
            vertical-align: middle;
        }
        body img {
            border: 3px solid white;
        }
        h1, h2, h3, h4, h5, h6 {
            margin: 5px;
        }
    </style>
</head>
<body>
<?php
//echo $_GET['q'];
//echo $_GET['t'];
$url = "https://steamcdn-a.akamaihd.net/steam/apps/322170/capsule_616x353.jpg?t=1577384776";
if($_GET['q'] != "") $url = $_GET['q'];
$text = "aka Attempt 100";
if($_GET['t'] != "") $text = $_GET['t'];
$subtext = "Total attempts: 3564";
if($_GET['t'] != "") $subtext = $_GET['s'];
echo "<img src=\"".$url."\">";
echo "<h1>".$text."</h1>";
echo "<h3>".$subtext."</h3>";
echo "<div style=\"font-family: system-ui;\">
<h1 style=\"margin-top: 20px;\">Generate that meme for free!</h1>
<form action=\"/meme.php\">
  <label for=\"q\">Image url:</label><br>
  <input type=\"text\" id=\"q\" name=\"q\" value=\"".$url."\" required><br>
  <label for=\"lname\">Text:</label><br>
  <input type=\"text\" id=\"t\" name=\"t\" value=\"".$text."\" required><br>
  <label for=\"lname\">SubText:</label><br>
  <input type=\"text\" id=\"s\" name=\"s\" value=\"".$subtext."\" required><br><br>
  <input type=\"submit\" value=\"Submit\">
</form>
</div>";
?>

</body>