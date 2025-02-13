<head>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $string = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/ttn/config/settings.json");
    $settings = json_decode($string, true);

    if (isset($settings['theming']['site_name'])) {
        $siteName = $settings['theming']['site_name'];
    } else {
        $siteName = "TTN Mapper";
    }

    if (isset($settings['theming']['site_description'])) {
        $siteDescription = $settings['theming']['site_description'];
    } else {
        $siteDescription = "Map the coverage for gateways of The Things Network.";
    }

    if (isset($settings['theming']['favicon_dir'])) {
        $favicons = $settings['theming']['favicon_dir'];
    } else {
        $favicons = "favicons";
    }

    if (isset($settings['theming']['brand_icon'])) {
        $brandIcon = $settings['theming']['brand_icon'];
    } else {
        $brandIcon = "/favicons/android-chrome-512x512.png";
    }

    if (isset($settings['theming']['brand_name'])) {
        $brandName = $settings['theming']['brand_name'];
    } else {
        $brandName = "TTN Mapper";
    }

    if (isset($settings['analytics']['measurement_id'])) {
        $googleAnalyticsMeasurementId = $settings['analytics']['measurement_id'];
    } else {
        $googleAnalyticsMeasurementId = "UA-75921430-1";
    }

    ?>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $siteDescription; ?>"/>
    <meta name="keywords"
          content="ttn coverage, the things network coverage, gateway reception area, contribute to ttn"/>
    <meta name="robots" content="index,follow"/>
    <meta name="author" content="JP Meijers">

    <title><?php echo $siteName; ?></title>

    <!--favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicons; ?>/apple-touch-icon.png?v=20210109">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicons; ?>/favicon-32x32.png?v=20210109">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicons; ?>/favicon-16x16.png?v=20210109">
    <link rel="manifest" href="<?php echo $favicons; ?>/site.webmanifest?v=20210109">
    <link rel="mask-icon" href="<?php echo $favicons; ?>/safari-pinned-tab.svg?v=20210109" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo $favicons; ?>/favicon.ico?v=20210109">
    <meta name="apple-mobile-web-app-title" content="TTN Mapper">
    <meta name="application-name" content="TTN Mapper">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="<?php echo $favicons; ?>/browserconfig.xml?v=20210109">
    <meta name="theme-color" content="#ffffff">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.css"
          integrity="sha256-AghQEDQh6JXTN1iI/BatwbIHpJRKQcg2lay7DE5U/RQ=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/ttn/libs/open-iconic/font/css/open-iconic-bootstrap.min.css"/>

    <!-- Page theme -->
    <link rel="stylesheet" href="/ttn/theme.css"/>

    <!-- Leaflet -->
    <link rel="stylesheet" href="/ttn/libs/leaflet-1.9.3/leaflet.css"/>
    <link rel="stylesheet" href="/ttn/libs/Leaflet.markercluster/dist/MarkerCluster.css"/>
    <link rel="stylesheet" href="/ttn/libs/Leaflet.markercluster/dist/MarkerCluster.Default.css"/>
    <link rel="stylesheet" href="/ttn/libs/leaflet.measure/leaflet.measure.css"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalyticsMeasurementId; ?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', '<?php echo $googleAnalyticsMeasurementId; ?>');
    </script>

    <!-- Google Ads -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4919960117739141"
            crossorigin="anonymous"></script>
</head>
