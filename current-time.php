<?php
function currentTime($country)// create function
    //start function body
{
    $IN="india";
    $NZ="newzealand";
    $Aus="australia";
    $Ger="germany";
    $USA="america";

    if($country==$IN)// check if parameter is equal to variable print india current time
    {
        date_default_timezone_set("IN");
        echo "<p style='color:red'>Current  time in India is </p>".  date("h:i:sa");
    }
    else if($country==$NZ)//newzealand
    {
        date_default_timezone_set("NZ");
        echo "<p style='color:green'>Current time in Newzealand is </p>" . date("h:i:sa");
    }
    else if($country==$Aus)//australia
    {
        date_default_timezone_set("Australia/Sydney");
        echo "<p style='color:blue'>Current time in Australia is </p> " . date("h:i:sa");
    }
    else if($country==$USA)//america
    {
        date_default_timezone_set("America/New_York");
        echo "<p style='color: red'>Current time in America is </p>" . date("h:i:sa");
    }
    else if($country==$Ger)//germany
    {
        date_default_timezone_set("IST");
        echo "<p style='color: yellow'>Current time in Germany is </p> " . date("h:i:sa");
    }

}
currentTime("india");

?>
