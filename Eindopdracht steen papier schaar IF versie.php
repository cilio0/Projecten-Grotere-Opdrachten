<?php session_start(); ?>
<html lang="en">

<head>
    <title>Steen Papier Schaar</title>
</head>
<body>
<style type="text/css">

    input{
        margin-top: 11%;
    }
    label{
        margin-left: 43.5%;
    }
    p{
        text-align: center;
    }
    h1{
        text-align: center;
    }
</style>

<?php
$computerchoice = rand(1,5);
$computer = $_SESSION["computer"];
$player = $_SESSION["player"];

// ----------------------------------
echo "<h1> Steen, Papier, Schaar</h1>";

echo "<p> Je hebt $player keer/keren gewonnen! </p>";
echo "<p> De computer heeft $computer keer/keren gewonnen.</p>";
if ($player > $computer){
    echo "<p> Je bent aan het winnen!</p>";
}elseif($computer > $player){
    echo "<p>Je bent aan het verliezen!</p>";
}else{
    echo "<p> Het is gelijk!</p>";
}
/* --------------------------------------------------- */

echo "<form method=\"post\" action=\"\">
    <label>
        <input type=\"submit\" name=\"steen\" value=\"steen\">
        <?php echo str_repeat(\"&nbsp;&nbsp;\", 13); ?>
        <input type=\"submit\" name=\"papier\" value=\"papier\">
        <?php echo str_repeat(\"&nbsp;&nbsp;\", 13); ?>
        <input type=\"submit\" name=\"schaar\" value=\"Schaar\">
    </label>
</form>";
/*
 computer == 1 / schaar
 computer == 2 / steen
 computer == 3 / papier
*/
/* ------------------------------------ */
/*
Computerchoice de manier die ik gebruik gaat zo. Er zijn 3 getallen waaronder de computerchoice kan komen
er is een andere volgorde om er voor te zorgen (hoop ik) de kans te verkleinen om dezelfde uitkomst te krijgen.
1 == schaar 2 == steen 3 == papier
 ----
het is ook mogelijk om een switch statement (veel makkelijker)
te maken voor dit opdracht maar ik maak gebruik van beide om meer inzicht
 te krijgen op de switch/case functions.
 */

if (isset($_POST["steen"]) AND $computerchoice == 3 ) {  // steen wordt verslagen door papier
    echo "<p> Je hebt steen gekozen en de computer heeft papier.</p>";
    echo "<br>";
    echo "<p> Je hebt verloren </p>";
    $_SESSION["computer"]++;

} elseif(isset($_POST["papier"]) AND $computerchoice == 1) { // papier wordt verslagen door schaar
    echo "<p> Je hebt papier gekozen en de computer heeft schaar.</p>";
    echo "<br>";
    echo "<p> Uitslag is je hebt verloren! </p>";
    $_SESSION["computer"]++;
} elseif(isset($_POST["schaar"]) AND $computerchoice == 2) { // schaar wordt verslagen door steen
    echo "<p>Je hebt schaar gekozen en de computer heeft steen.</p>";
    echo "<br>";
    echo "<p>Uitslag is je hebt verloren!</p>";
    $_SESSION["computer"]++;

}
// ---------------------------- boven verloren elseif statements beneden gewonnen elseif statements

elseif(isset($_POST["steen"]) AND $computerchoice == 1) {
    echo "<p>Je hebt steen gekozen en de computer heeft schaar.</p>";
    echo "<br>";
    echo "<p>Uitslag is je hebt gewonnen!</p>";
    $_SESSION["player"]++;
} elseif(isset($_POST["papier"]) AND $computerchoice == 2) {
    echo "<p>Je hebt papier gekozen en de computer heeft steen.</p>";
    echo "<br>";
    echo "<p>Uitslag is je hebt gewonnen!</p>";
    $_SESSION["player"]++;
} elseif(isset($_POST["schaar"]) AND $computerchoice == 3) {
    echo "<p>Je hebt schaar gekozen en de computer heeft papier.</p> ";
    echo "<br>";
    echo "<p> Uitslag is je hebt gewonnen! </p>";
    $_SESSION["player"]++;
}
// -------------------------------- boven gewonnen elseif statements beneden gelijkspel elseif statements

elseif(isset($_POST["steen"]) AND $computerchoice == 2) {
    echo "<p>Je hebt steen gekozen en de computer heeft papier.</p>";
    echo "<br>";
    echo "<p> Uitslag is, het is gelijkspel! </p>";
}
elseif(isset($_POST["papier"]) AND $computerchoice == 3) {
    echo "<p> Je hebt papier gekozen en de computer heeft papier. </p>";
    echo "<br>";
    echo "<p> Uitslag is, het is gelijkspel! </p>";
}
elseif(isset($_POST["schaar"]) AND $computerchoice == 1) {
    echo "<p> Je hebt schaar gekozen en de computer heeft schaar. </p>";
    echo "<br>";
    echo "<p> Uitslag is, het is gelijkspel!</p>";
}







?>

</body>
</html>

