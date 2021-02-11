
<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>  
<?php
echo "Oggi è " . date("Y/m/d") . "<br>";   //Oggi è 2020/11/03
echo "Oggi è " . date("Y.m.d") . "<br>";   //Oggi è 2020.11.03
echo "Oggi è " . date("Y-m-d") . "<br>";   //Oggi è 2020-11-03
echo "Oggi è " . date("l");                //Oggi è Giovedi
echo date("Y");                            //2021


//H - 24-hour format of an hour (00 to 23)
//h - 12-hour format of an hour with leading zeros (01 to 12) 
//i - Minutes with leading zeros (00 to 59)
//s - Seconds with leading zeros (00 to 59)
//a - Lowercase Ante meridiem and Post meridiem (am or pm)
echo "L'orario è " . date("h:i:sa");


date_default_timezone_set("America/New_York");    //impostare il timezone
echo "L'ora a New York è " . date("h:i:sa");



$d=mktime(11, 14, 54, 8, 12, 2014);                    //creare una data
echo "La data creata è " . date("Y-m-d h:i:sa", $d);
                                                       //oppure                                             
$d=strtotime("10:30pm April 15 2014");
echo "La data creata è " . date("Y-m-d h:i:sa", $d);




$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";             //la data sara il tomorrow di oggi

$d=strtotime("next Saturday");                      //la data sara sabato prossimo
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");                          //la data sara fra tre mesi
echo date("Y-m-d h:i:sa", $d) . "<br>";




//stampa i sabati fino al settimo successivo a start date
$startdate=strtotime("Saturday");                      
$enddate=strtotime("+7 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}


//stampa il numero di giorno fino al 4 Luglio
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "Ci sono " . $d2 ." giorni fino al 4 giugno .";
?>
</body>
</html>
