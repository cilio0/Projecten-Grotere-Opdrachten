<?php

session_start()


?>

<html lang="en">

<head>
    <title>Steen Papier Schaar</title>
</head>
<body>
<style type="text/css">
    /* Dit zorgt ervoor dat de positie van uitslag/buttons op het midden tevoorschijn komt. */
    input{
        margin-top: 11%;
    }
    label{
        margin-left: 29%;
    }
    p{
        text-align: center;
    }
    h1{
        text-align: center;
    }


</style>

<form method="post" action="Eindopdracht%20steen%20papier%20schaar%20SWITCH%20versie.php">
    <label>
        <input type="submit" name="steen" value="steen">
        <?php echo str_repeat("&nbsp;&nbsp;", 13); ?> <!-- Zorgt voor spaties -->
        <input type="submit" name="papier" value="papier">
        <?php echo str_repeat("&nbsp;&nbsp;", 13); ?>
        <input type="submit" name="schaar" value="Schaar">
        <?php echo str_repeat("&nbsp;&nbsp;", 13); ?>
        <input type="submit" name="hagedis" value="hagedis">
        <?php echo str_repeat("&nbsp;&nbsp;", 13); ?>
        <input type="submit" name="spock" value="spock">
    </label>
</form>

<?php


if (isset($_SESSION["computer"])){ // als session computer geen waarde heeft dan geeft het de waarde 0
    $_SESSION["computer"];
}else{
    $_SESSION["computer"] = 0;
} if (isset($_SESSION["player"])){ // als session player geen waarde heeft dan geeft het de waarde 0
    $_SESSION["player"];
}else{
    $_SESSION["player"] = 0;
}

$computerchoice = rand(1,5);

$computer1 = $_SESSION["computer"];
$player1 = $_SESSION["player"];

echo "<h1> Steen, Papier, Schaar</h1>";

echo "<p> Je hebt $player1 keer/keren gewonnen! </p>";
echo "<p> De computer heeft $computer1 keer/keren gewonnen.</p>";
if ($player1 >= $computer1){
    echo "<p> Je bent aan het winnen!</p>"; // geeft aan dat je aan het winnen bent als je meer punten dan de computer hebt
}elseif($computer1 >= $player1){
    echo "<p>Je bent aan het verliezen!</p>"; // geeft aan dat je aan het verliezen bent als je minder punten dan de computer hebt.
}elseif($computer1 == 0 AND $player1 == 0){
    echo "<p> Begin met spelen en zie wie wint! </p>";
}else{
    echo "<p> het is gelijkspel </p>";
}

/*
Computerchoice de manier die ik gebruik gaat zo. Er zijn 5 getallen waaronder de computerchoice kan komen
er is een andere volgorde om er voor te zorgen (hoop ik) de kans te verkleinen om dezelfde uitkomst te krijgen.
 computer == 1 / schaar
 computer == 2 / steen
 computer == 3 / papier
 computer == 4 / spock
 computer == 5 / hagedis
 ----
 het is ook mogelijk om een switch statement te maken voor dit opdracht maar ik maak gebruik van beide om meer inzicht
 te krijgen op de switch/case functions.
 */

switch ($computerchoice){
    case(isset($_POST["steen"]) AND $computerchoice == 3 ): // steen verliest van papier
        echo "<p> Je hebt steen gekozen en de computer heeft papier.</p>";
        echo "<br>";
        echo "<p> Je hebt verloren </p>";
        $_SESSION["computer"]+=1; // geeft punt aan computer omdat je verloren hebt.
        break;
    case(isset($_POST["steen"]) AND $computerchoice == 4 ): // steen verliest van spock
        echo "<p> Je hebt steen gekozen en de computer heeft spock.</p>";
        echo "<br>";
        echo "<p> Je hebt verloren </p>";
        $_SESSION["computer"]+=1;
        break;
    case(isset($_POST["papier"]) AND $computerchoice == 1): // papier verliest van schaar
        echo "<p> Je hebt papier gekozen en de computer heeft schaar</p>";
        echo "<br>";
        echo "<p> Je hebt verloren </p>";
        $_SESSION["computer"]+=1;
        break;
    case(isset($_POST["papier"]) AND $computerchoice == 5): // papier verliest van hagedis
        echo "<p> Je hebt papier gekozen en de computer heeft hagedis</p>";
        echo "<br>";
        echo "<p> Je hebt verloren </p>";
        $_SESSION["computer"]+=1;
        break;
    case(isset($_POST["schaar"]) AND $computerchoice == 2): // schaar verliest van steen
        echo "<p>Je hebt schaar gekozen en de computer heeft steen.</p>";
        echo "<br>";
        echo "<p>Je hebt verloren!</p>";
        $_SESSION["computer"]+=1;
        break;
    case(isset($_POST["schaar"]) AND $computerchoice == 4): // schaar verliest van spock
        echo "<p>Je hebt schaar gekozen en de computer heeft spock</p>";
        echo "<br>";
        echo "<p>Je hebt verloren!</p>";
        $_SESSION["computer"]+=1;
        break;
    case(isset($_POST["spock"]) AND $computerchoice == 5): // spock verliest van hagedis
        echo "<p>Je hebt spock gekozen en de computer heeft hagedis</p>";
        echo "<br>";
        echo "<p>Je hebt verloren!</p>";
        $_SESSION["computer"]+=1;
        break;
    case(isset($_POST["spock"]) AND $computerchoice == 3): // spock verliest van papier
        echo "<p>Je hebt spock gekozen en de computer heeft papier</p>";
        echo "<br>";
        echo "<p>Je hebt verloren!</p>";
        $_SESSION["computer"]+=1;
        break;
    case(isset($_POST["hagedis"]) AND $computerchoice == 2): // hagedis verliest van steen
        echo "<p>Je hebt hagedis gekozen en de computer heeft steen</p>";
        echo "<br>";
        echo "<p>Je hebt verloren!</p>";
        $_SESSION["computer"]+=1;
        break;
    case(isset($_POST["hagedis"]) AND $computerchoice == 1): // hagedis verliest van schaar
        echo "<p>Je hebt hagedis gekozen en de computer heeft schaar</p>";
        echo "<br>";
        echo "<p>Je hebt verloren!</p>";
        $_SESSION["computer"]+=1;
        break;
/*
-------------------------------
   bovenaan verloren cases onderaan gewonnen cases
-------------------------------
*/


    case(isset($_POST["steen"]) AND $computerchoice == 5 ): // steen wint van hagedis
        echo "<p> Je hebt steen gekozen en de computer heeft hagedis</p>";
        echo "<br>";
        echo "<p> Je hebt gewonnen! </p>";
        $_SESSION["player"]+=1; // geeft speler een punt omdat hij heeft gewonnen
        break;
    case(isset($_POST["steen"]) AND $computerchoice == 1 ): // steen wint van schaar
        echo "<p> Je hebt steen gekozen en de computer heeft schaar</p>";
        echo "<br>";
        echo "<p> Je hebt gewonnen! </p>";
        $_SESSION["player"]+=1;
        break;
    case(isset($_POST["papier"]) AND $computerchoice == 2): // papier wint van steen
        echo "<p> Je hebt papier gekozen en de computer heeft steen</p>";
        echo "<br>";
        echo "<p> Je hebt gewonnen! </p>";
        $_SESSION["player"]+=1;
        break;
    case(isset($_POST["papier"]) AND $computerchoice == 3): // papier wint van spock
        echo "<p> Je hebt papier gekozen en de computer heeft spock</p>";
        echo "<br>";
        echo "<p> Je hebt gewonnen! </p>";
        $_SESSION["player"]+=1;
        break;
    case(isset($_POST["schaar"]) AND $computerchoice == 5): // schaar wint van papier
        echo "<p>Je hebt schaar gekozen en de computer heeft papier</p>";
        echo "<br>";
        echo "<p> Je hebt gewonnen! </p>";
        $_SESSION["player"]+=1;
        break;
    case(isset($_POST["schaar"]) AND  $computerchoice == 4): // schaar wint van hagedis
        echo "<p>Je hebt schaar gekozen en de computer heeft hagedis</p>";
        echo "<br>";
        echo "<p> Je hebt gewonnen! </p>";
        $_SESSION["player"]+=1;
        break;
    case(isset($_POST["spock"]) AND $computerchoice == 2): // spock wint van steen
        echo "<p>Je hebt spock gekozen en de computer heeft steen</p>";
        echo "<br>";
        echo "<p> Je hebt gewonnen! </p>";
        $_SESSION["player"]+=1;
        break;
    case(isset($_POST["spock"]) AND $computerchoice == 1): // spock wint van schaar
        echo "<p>Je hebt spock gekozen en de computer heeft schaar</p>";
        echo "<br>";
        echo "<p> Je hebt gewonnen! </p>";
        $_SESSION["player"]+=1;
        break;
    case(isset($_POST["hagedis"]) AND $computerchoice == 4): //  hagedis wint van spock
        echo "<p>Je hebt hagedis gekozen en de computer heeft spock</p>";
        echo "<br>";
        echo "<p> Je hebt gewonnen! </p>";
        $_SESSION["player"]+=1;
        break;
    case(isset($_POST["hagedis"]) AND $computerchoice == 3): // hagedis wint van papier
        echo "<p>Je hebt hagedis gekozen en de computer heeft papier</p>";
        echo "<br>";
        echo "<p> Je hebt gewonnen! </p>";
        $_SESSION["player"]+=1;
        break;

/*
------------------------------
bovenaan verloren cases onderaan gelijkspel cases
-------------------------------
*/

    case(isset($_POST["steen"]) AND $computerchoice == 2 ): // steen en steen vormt gelijkspel
        echo "<p> Je hebt steen gekozen en de computer heeft steen</p>";
        echo "<br>";
        echo "<p> het is gelijkspel!</p>";
        break;

    case(isset($_POST["papier"]) AND  $computerchoice == 3): // papier en papier vormt gelijkspel
        echo "<p> Je hebt papier gekozen en de computer heeft papier</p>";
        echo "<br>";
        echo "<p> het is gelijkspel!</p>";
        break;

    case(isset($_POST["schaar"]) AND $computerchoice == 1): // schaar en schaar vormt gelijkspel
        echo "<p>Je hebt schaar gekozen en de computer heeft schaar</p>";
        echo "<br>";
        echo "<p> het is gelijkspel!</p>";
        break;

    case(isset($_POST["spock"]) AND $computerchoice == 4): // spock en spock vormt gelijkspel
        echo "<p>Je hebt spock gekozen en de computer heeft spock</p>";
        echo "<br>";

               echo "<p> het is gelijkspel!</p>";
        break;

    case(isset($_POST["hagedis"]) AND $computerchoice == 5): // hagedis en hagedis vormt gelijkspel
        echo "<p>Je hebt hagedis gekozen en de computer heeft hagedis</p>";
        echo "<br>";
        echo "<p> het is gelijkspel!</p>";
        break;
}


?>

</body>
</html>


