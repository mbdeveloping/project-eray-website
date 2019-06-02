<?php
    $protocol = (isset($_SERVER['HTTPS']) ? 'https' : 'http');
//    $SCRIPT_ROOT = $protocol . '://' . $_SERVER['SERVER_NAME'] . '/';
    $SCRIPT_ROOT = $protocol . '://' . $_SERVER['SERVER_NAME'] . '/project__eray/public/';


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $title;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?= $SCRIPT_ROOT;?>media/img/favicon.ico"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= $SCRIPT_ROOT;?>css/theme.css">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
        <script>
            window.addEventListener("load", function(){

                if (document.URL.match(/\/lt\//)) {

                    customContent = {
                        "message": "Ši svetainė naudoja slapukus, kad suteiktų jums puikią patirtį. Naudodamiesi „Eray.lt“ jūs priimate mūsų",
                        "dismiss": "Sutiku",
                        "link": "slapukų politiką.",
                        "href": "slapuku_politika"
                    }
                } else if (document.URL.match(/\/en\//)) {
                    customContent = {

                        "message": "This site uses cookies to provide you with a great experience. By using Eray.lt you accept our",
                        "dismiss": "Accept",
                        "link": "cookie policy.",
                        "href": "cookie_policy"
                    }
                }
                window.cookieconsent.initialise({
                    "palette": {
                        "popup": {
                            "background": "#f15c29",
                            "text": "#ffffff"
                        },
                        "button": {
                            "background": "#10122e",
                            "text": "#ffffff"
                        }
                    },
                    "content": customContent
                });
            });
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        