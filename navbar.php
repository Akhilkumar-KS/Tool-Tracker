<?php

echo '<nav class="navbar navbar-expand-sm navbar-dark bg-warning">';
echo '<div class="container-fluid">';
echo '<div class="navbar-brand" href="#">Tool Tracker</div>';
echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"';
echo 'aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
echo '<span class="navbar-toggler-icon"></span>';
echo '</button>';
echo '<div class="collapse navbar-collapse" id="navbarNav">';
echo '<ul class="navbar-nav">';
echo '<li class="nav-item">';
echo '<a class="nav-link" aria-current="page" href=index.php>Home</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href= Addtoolkit.php>Add Toolkit</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href=Edittoolkit.php>Edit Toolkit</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href=Crosscheck.php>Cross check the Toolkit</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href=Detecttool.php>Detect Tools</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href=Findtool.php>Find Tool</a>';
echo '</li>';
echo '';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="signout.php">Signout</a>';
echo '</li>';
echo '</ul>';
echo '';
echo '</div>';
echo '';
echo '</div>';
echo '</nav>';
?>