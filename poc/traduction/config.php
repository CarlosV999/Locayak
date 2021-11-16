<?php
    session-start();

    if (!isset($_SESSION['lang']))
        $_SESSION['lang'] = "fr-ca";
    else if ( isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "fr-ca")
            $_SESSION['lang']  = "fr-ca";
        else if ($_GET['lang'] == "en-ca")
            $_SESSION['lang'] = "en-ca";
    }

echo "Choose language: " . $_SESSION['lang'];
?>