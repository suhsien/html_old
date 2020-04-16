<?php
	error_reporting(0); 

	if ($_GET[id]=="admin" && $_GET[pwd]=="12345")
		echo "歡迎登入";
	else
		echo "帳號或密碼錯誤";
?>