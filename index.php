<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Пример</title>
</head>
<body>
<?
include ("blocks/header.php");
?>

<table width="650px" height="150px" border="1" cellspacing="0" cellpadding="0" align="center" bordercolor="313233">
    <tr>
        <!-- Начало блока левого меню (leftmenu.php) -->
        <?php require 'blocks/leftmenu.php'; ?>
        <!-- Конец блока левого меню -->
        <!-- Начало основного блока -->
        <td><h2 align="center" style="color:#0595ca;">Пи\ривет мир!</h2>
            <p align="center">Это моя первая динамическая страница на PHP. </p>
        </td>
        <!-- Конец основного блока -->
    </tr>
</table>
<!-- начало футера (footer.php) -->
<?php include ("blocks/footer.php");?>
<!-- Конец футера -->
</body>
</html>