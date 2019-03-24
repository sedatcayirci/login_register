<?php 
//burası neresi?
include('functions/main_functions.php');
//orası burası
include('inc/header.php');

$mesaj_no = (isset($_GET['mesaj'])) ? $_GET['mesaj'] : 0;

if(!isset($_GET['main'])){
	include('inc/main/main.php');
} else {
	include('inc/main/'.$_GET['main'].'.php');
} //orası neresi?

include('inc/footer.php');

?>