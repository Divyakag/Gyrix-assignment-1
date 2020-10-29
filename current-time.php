<?php
function currentTime($country){
    $IN="india";
    $NZ="newzealand";
    $Aus="australia";
    $Ger="germany";
    $USA="america";

    if($country==$IN)
    {
        date_default_timezone_set("IN");
        echo "<p style='color:red'>Current  time in India is </p>".  date("h:i:sa");
    }
    else if($country==$NZ)
    {
        date_default_timezone_set("NZ");
        echo "<p style='color:green'>Current time in Newzealand is </p>" . date("h:i:sa");
    }
    else if($country==$Aus)
    {
        date_default_timezone_set("Australia/Sydney");
        echo "<p style='color:blue'>Current time in Australia is </p> " . date("h:i:sa");
    }
    else if($country==$USA)
    {
        date_default_timezone_set("America/New_York");
        echo "<p style='color: red'>Current time in America is </p>" . date("h:i:sa");
    }
    else if($country==$Ger)
    {
        date_default_timezone_set("IST");
        echo "<p style='color: yellow'>Current time in Germany is </p> " . date("h:i:sa");
    }

}
currentTime("germany");

?>