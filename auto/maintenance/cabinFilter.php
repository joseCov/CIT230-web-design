<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>Cabin Filter</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>
    <body id="home">
        <div>
            <header role="banner">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
            </header>
            <nav role="navigation">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php'; ?>
            </nav>
            <main role="main">
                <h2>Changing the cabin filter</h2>
                <p>Most cars today have been design with a cabin filter for a clean air conditioning
                   experience. Those filters are low cost and can be replaced at least twice a year,
                   The problem lays if you don't know where it is, or how to replace it. Here we will
                   show you how to do it yourself, and save money.
                </p>
                <h3>Honda CR-V 2007</h3>
                <video src="/videolibrary/cabinAirFilter.mp4" width="800" height="680" preload controls></video>
            </main>
            <aside role="complementary">
                <div>
                  <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/aside.php'; ?>
                </div>
            </aside>
            <footer role="contentinfo">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
