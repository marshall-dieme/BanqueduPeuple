<?php
    require 'header.php';
?>

<nav>
    <div class="nav-wrapper" style="background: linear-gradient(to bottom, #b92b27, #1565C0)">
        <a href="accueil"><img src="/myprojects/banquedupeuple/public/img/logo.png" alt="" width="14%" class="brand-logo"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="accueil">Accueil</a></li>
            <li><a href='compte'>Gestion Compte</a></li>
            <li><a href='client'>Gestion Client</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="accueil">Accueil</a></li>
    <li><a href='compte'>Gestion Compte</a></li>
        <li><a href='client'>Gestion Client</a></li>
</ul>
<div class="container">
