<?php


// <!-- Trouvez le numéro de semaine de la date suivante : 14/07/2019. -->
$date_test = "2019-07-14";
$good_format=strtotime ($date_test);
echo date('W',$good_format);

echo '<br><br><br><br><br>';

// <!-- Combien reste-t-il de jours avant la fin de votre formation ? -->

$Start =  new \DateTime();
$End = new \DateTime("2023-06-02");
$Delais = $Start->diff($End)->format('%a');
echo 'Il reste ' . $Delais . ' jours avant la fin de votre formation';

echo '<br><br><br><br><br>';

// <!-- Comment déterminer si une année est bissextile ? -->



// --------------------------------------------------------------------------------------------------------------------------------------------------

// function IsLeapYear($Year) {
//     return ((($Year & 3) == 0) && (($Year % 100 != 0) || ($Year % 400 == 0)));
//    }
    
//    for($I=1900;$I<=2009;$I++) {
//     if(IsLeapYear($I)) echo strval($I)." est une année bissextile<BR>";}

// on obtiendra le résultat suivant :

// 1904 est une année bissextile
// 1908 est une année bissextile
// 1912 est une année bissextile
// 1916 est une année bissextile
// 1920 est une année bissextile
// 1924 est une année bissextile
// 1928 est une année bissextile
// 1932 est une année bissextile
// 1936 est une année bissextile
// 1940 est une année bissextile
// 1944 est une année bissextile
// 1948 est une année bissextile
// 1952 est une année bissextile
// 1956 est une année bissextile
// 1960 est une année bissextile
// 1964 est une année bissextile
// 1968 est une année bissextile
// 1972 est une année bissextile
// 1976 est une année bissextile
// 1980 est une année bissextile
// 1984 est une année bissextile
// 1988 est une année bissextile
// 1992 est une année bissextile
// 1996 est une année bissextile
// 2000 est une année bissextile
// 2004 est une année bissextile
// 2008 est une année bissextile


echo (date('L', strtotime("1996-01-01")) ? 'Bissextile' : 'pas bissextile');

echo '<br><br><br><br><br>';


   
// <!-- Montrez que la date du 32/17/2019 est erronée. -->

$datePattern = '/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/';
$date = "2019-17-32";

if (preg_match($datePattern, $date))
{
    echo "Date ".$date." valide.<br>";
}
else
{
    echo "Date ".$date." erronée.<br>";
}
$oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "32/17/2019 03:42:11");

$errors = DateTime::getLastErrors();

if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "Erronée";
}

echo '<br><br><br><br><br>';
// <!-- Affichez l'heure courante sous cette forme : 11h25. -->

date_default_timezone_set('Europe/Paris');
$date = date('d-m-y h:i:s');
echo $date;

// <!-- Ajoutez 1 mois à la date courante. -->
echo '<br><br><br><br><br>';

$date='2023-05-3';
$date_terminee=date('Y-m-d', strtotime('+1 month', strtotime($date)));
echo $date_terminee;

// <!-- Que s'est-il passé le 1000200000 ? -->

echo '<br><br><br><br><br>';


$timestamp1=1000200000; 
echo date('d/m/Y',$timestamp1);
?> 