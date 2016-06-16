<?php include "header.php"; ?>
<?php
if ($_COOKIE > 0){
    header('location: ../../index.php');
} else {
    if (isset($_GET['lang']) && is_string($_GET['lang'])){
        $langue = $_GET['lang'];
    }
    switch ($langue){
        case 'fr':
            setcookie('lang','fr',time()+(3600*24)*2,'/','localhost');
            echo "Cookie created ^_^";
            break;
        case 'en':
            setcookie('lang','en',time()+(3600*24)*2,'/','localhost');
            echo "Cookie created ^_^";
            break;
        default:
            setcookie('lang','en',time()+(3600*24)*2,'/','localhost');
            echo "Cookie created ^_^";
            break;
    }

}

var_dump($_COOKIE);
?>
<div class="wrapper">
    <div class="col-lg-12" id="col">
        <a href="<?php echo $_SERVER['PHP_SELF'].'?lang=fr'; ?>" class="rows"><img class="fr" src="../../Ressources/images/french.png">Français</a>
        <a href="<?php echo $_SERVER['PHP_SELF'].'?lang=en'; ?>" class="rows"><img class="en" src="../../Ressources/images/english.png">English</a>
    </div>
</div>
<?php include "footer.php"; ?>