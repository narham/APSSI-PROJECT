<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Admin Templates - Dashboard Templates">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="img/favicon.svg" />

    <!-- Title -->
    <title>APPSI - <?= $titel; ?></title>

    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css" />

    <!-- Master CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>css/main.css" />

</head>

<body class="authentication">

    <!-- Container start -->
    <?= $this->renderSection('auth'); ?>
    <!-- Container end -->

</body>

</html>