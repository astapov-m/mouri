<?php
$connect = new mysqli('localhost','root','root','show');
if(!$connect){
    die('Error to DB');
}
