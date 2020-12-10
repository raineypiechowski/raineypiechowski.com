<?php
$page_title = "Portfolio | Rainey Piechowski";
$page_description = "";

require("static/includes/header.inc.php");
?>
    <link rel="stylesheet" href="<?php echo(BASE_URL . "/static/css/portfolio.css"); ?>">
    <main>
        <?php
        $side_bar_selected = "portfolio";
        require("static/includes/side-bar.inc.php");
        ?>
        <div class="content-frame">
            <div class="page-title-block">
                <div></div>
                <h1>PORTFOLIO</h1>
            </div>
            <div class="content-wrapper">
                <p>
                    <a class="link" href="https://github.com/raineypiechowski/raineypiechowski.com" target="_blank">Repository for this site &rarr;</a>
                </p>
            </div>
            <?php require("static/includes/footer.inc.php"); ?>
        </div>
    </main>
</body>
</html>