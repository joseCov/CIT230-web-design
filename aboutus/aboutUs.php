<!DOCTYPE html>
<!--
My site Home page.
-->
<html  lang="en-us">
    <head>
        <title>About Us</title>
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
            <hr>
            <main role="main">
                <div>
                <h2>Who we are.</h2>
                
                <p>Our motivation to create this site is the idea that we could have a place for learning.<br>
                   Not only for learning, but also free from irrelevant information, or videos that make no sense,<br>
                   because if we are watching a tutorial about car repairs, we don't need a food related video as the<br>
                   next video to play. We welcome you to a site where the information will be focused on the topic that<br>
                   you select, nothing else. Our site is new, but as user visit, request more topics, and submit their<br>
                   own videos, or databank will expand, and the possibilities that you will find what you need will grow.<br>
                   We thank you for visiting us, and contribute for a place of dedicated people that love to help each other.</p>
                </div>
            </main>
            <aside role="complementary">
                <div>

                </div>
            </aside>
            <hr>
            <footer role="contentinfo">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>