<?php

$siteName = "Kursusku";
$tagline = "Belajar Teknologi, Bangun Masa Depan";
$tahun = date(Y);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title><?php echo $siteName; ?></title>

    <link
    rel="stylesheet"
    href="assets/css/style.css">
</head>

<body>
    <header class="header">

    <div class="comtainer">

    <h1>
        <?php echo $siteName; ?>
</h1>

<p>
    <?php echo $tagline; ?>
</p>

</div>
</header>
<nav class="navbar">
    <div class="container">
        <a href="#beranda">Beranda</a>
        <a href="#kursus">Kursus</a>
        <a href="#tentang">Tentang</a>
        <a href="#kontak">Kontak</a>...