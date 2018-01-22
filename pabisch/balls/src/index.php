<?php

include_once "ballMain.php";
include_once "BallInterface.php";
include_once "createBall.php";

use Pabisch\Balls\CreateBall;

$ball = new Pabisch\Balls\CreateBall(
    "Spezialball",
    "30cm",
    "Leder"
);

$ball1 = new Pabisch\Balls\CreateBall(
    "Blauer Ball",
    "25cm",
    "Stoff"
);

$ball2 = new Pabisch\Balls\CreateBall(
    "Oranger Ball",
    "10cm",
    "Stoff"
);

$ball3 = new Pabisch\Balls\CreateBall(
    "Roter Ball",
    "40cm",
    "Baumwolle",
    "Baumwolle"
);

$ball4 = new Pabisch\Balls\CreateBall(
    "Gelber Ball",
    "30cm",
    "Leder"
);


if (isset($_GET['format'])) {
    if ($_GET['format'] == "json") {
        header("Content-Type: application/json");
        echo outputJSON($ball)."<br>";
    } else {
        echo outputHTML($ball)."<br>";
    }
} else {
    echo outputHTML($ball)."<br>";
}

function outputJSON(Ball $ball1): string
{
    return "{ \"name\":\"" . $ball1->getName() . "\" }";
}

function outputHTML($ball): string
{
    return $ball;
}

echo $ball1."<br>\n";
echo $ball2."<br>\n";
echo $ball3."<br>\n";
echo $ball4."<br>\n";