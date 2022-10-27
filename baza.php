<?
define('DB_HOST','127.0.0.1');
define('DB_USER','root');
define('DB_PASS','');

try{
$baza = new mysqli(DB_HOST,DB_USER,DB_PASS)
}catch(Exception $e){
echo 'Błąd połączenia z bazą danych';
}

?>
