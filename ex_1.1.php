<<<<<<< HEAD
<?php
function ecole ($age) {
    if ($age <= 3) {
        return "creche";
    } elseif ($age > 3 && $age <= 6) {
        return "maternelle";
    } elseif ($age > 6 && $age <= 11) {
        return "primaire";
    } elseif ($age > 11 && $age <= 15) {
        return "college";
    } elseif ($age > 15 && $age <= 18) {
        return "lycee";
    } else {
        return "";
    }
}
=======
<?php
function ecole ($age) {
    if ($age <= 3) {
        return "creche";
    } elseif ($age > 3 && $age <= 6) {
        return "maternelle";
    } elseif ($age > 6 && $age <= 11) {
        return "primaire";
    } elseif ($age > 11 && $age <= 15) {
        return "college";
    } elseif ($age > 15 && $age <= 18) {
        return "lycee";
    } else {
        return "";
    }
}
>>>>>>> 37c1093376f70ff1e0e5eeb47607e10bec4b21b0
echo ecole(4);