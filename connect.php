<?
   $serwer = "localhost";
   $user = "root";
   $password = "";
   $db = "panel administracyjny bp";

   @mysql_connect($serwer, $user,$password) or die ("Błąd połączenia z bazą danych");
   @mysql_select_db($db) or die ("Błąd wyboru bazy danych!");

?>