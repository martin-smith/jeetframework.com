<?
    
    // $live = true;
    
    if ($live == false) {
        $p = 'http://localhost/Repos/Github/jeetframework.com';
    } else {
        $p = '';
    }
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jeet 3</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/custom.css">
        <!--[if lt IE 9]><script src="js/vendor/selectivizr-1.0.2.min.js"></script><![endif]-->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 9]>
            <div class="chromeframe"><p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true" target="_blank">activate Google Chrome Frame</a> to improve your experience.</p></div>
        <![endif]-->
        
        
        <header id="top">
            <div>
                <a href="<? echo $p; ?>/" class="logo"><img src="img/jeet_logo.png" alt="Jeet 3"></a>
                <nav>
                    <a href="<? echo $p; ?>/demos">Demos</a>
                    <a href="http://roots.cx/axis/">Axis CSS</a>
                    <a href="http://github.com/CorySimmons/jeet">Install</a>
                    <a href="https://github.com/CorySimmons/jeet/archive/master.zip">Download</a>
                </nav>
            </div>
        </header>
        
        <div class="page">