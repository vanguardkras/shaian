<?php $data = include 'data.php'; ?>
<!DOCTYPE html>
<html lang="<?= $data['lang'] ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="/css/font-icons/lineicons.min.css">
    <link rel="stylesheet" href="/css/plugins/simplebar/simplebar.min.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>

<!-- Start: Main header -->
<header id="main-header">
    <div class="clearfix">
        <div class="float-left">
            <a href="/" class="clearfix" id="main-link">
                <div class="float-left">
                    <i class="lni lni-user"></i>
                </div>
                <div class="float-left">
                    <div id="my-name" class="overflow-h-ellipsis"><?= $data['name'] ?></div>
                </div>
            </a>
        </div>
        <div class="float-right">
                <span id="video-btn" class="know-more-section-btn">
                    <span class="pointer">
                        <i class="lni lni-menu"></i>
                    </span>
                </span>
        </div>
    </div>
</header>
<!-- End: Main header -->

<main>

    <!-- Start: Window container -->
    <div id="main-container">

        <?php include_once 'about.php'; ?>
        <?php include_once 'skills.php'; ?>
        <?php include_once 'education.php'; ?>
        <?php include_once 'experience.php'; ?>
        <?php include_once 'services.php'; ?>
        <?php include_once 'portfolio.php'; ?>
        <?php include_once 'testimonials.php'; ?>

    </div>
    <!-- End: Window container -->

    <?php include_once 'contact.php'; ?>
    <?php include_once 'nav.php'; ?>

</main>
<?php include_once 'know_more.php'; ?>

<!-- Start: Splash screen -->
<aside id="splash-screen" class="flex-center">
    <img src="/img/loader/loader.svg" alt="Splash screen loader">
    <span><?= $data['load'] ?> ...</span>
</aside>
<!-- End: Splash screen -->

<script src="/js/plugins/jquery.min.js"></script>
<script src="/js/plugins/imagesloaded.min.js"></script>
<script src="/js/plugins/simplebar.min.js"></script>
<script src="/js/plugins/isotope.min.js"></script>
<script src="/js/settings.js"></script>
<script src="/js/custom.js"></script>
</body>
</html>
