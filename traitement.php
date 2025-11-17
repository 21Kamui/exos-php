<?php

function ecole ($age) {
    if $age <= 3 {
        return "Vous etes en creche";
    } elseif $age > 3 && $age <= 10 {
        return "Vous etes en ecole primaire";
    } elseif $age > 10 && $age <= 13 {
        return "Vous etes au college";
    } elseif $age > 13 && $age <= 18 {
        return "Vous etes au lycee";
    } else {
        return "";
    }
}