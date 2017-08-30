<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $__env->yieldContent('pageDescription', $siteDescription); ?>">

    <title><?php echo e($siteName); ?> <?php echo $__env->yieldContent('pageTitle'); ?></title>

    <link rel="shortcut icon" href="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim('assets/favicon.ico', '/').'');  ?>">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim('assets/plugins/bootstrap/css/bootstrap.min.css', '/').'');  ?>">
    <link rel="stylesheet" href="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim('assets/plugins/font-awesome/css/font-awesome.css', '/').'');  ?>">
    <link rel="stylesheet" href="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim('assets/css/styles-6.css', '/').'');  ?>">
    <link rel="stylesheet" href="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim('assets/css/custom.css', '/').'');  ?>">
    <link rel="stylesheet" href="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim('assets/css/emojione.min.css', '/').'');  ?>" />

</head>

<body>
    <div class="wrapper">
        <?php echo $__env->yieldContent('body'); ?>
    </div>
    <footer class="footer">
        <div class="text-center">
            <small class="copyright">© Sayf Essyd 2017</small>
        </div>
    </footer>
    <script type="text/javascript" src="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim('assets/plugins/jquery-1.11.3.min.js', '/').'');  ?>"></script>
    <script type="text/javascript" src="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim('assets/plugins/bootstrap/js/bootstrap.min.js', '/').'');  ?>"></script>
    <script type="text/javascript" src="<?php echo str_replace(['///', '//'], '/', $base_url.'/'.trim('assets/js/main.js', '/').'');  ?>"></script>
</body>
</html>
