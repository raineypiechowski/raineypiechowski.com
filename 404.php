<?php
$page_title = "Page Not Found | Rainey Piechowski";
$page_description = "We're really sorry but, we can't seem to find the page you're looking for.";

require("static/includes/header.inc.php");
?>
    <main>
        <?php
        $side_bar_selected = "";
        require("static/includes/side-bar.inc.php");
        ?>
        <div class="content-frame">
            <div class="content-wrapper">
                <h1 class="huge-text">404</h1>
                <h2 class="big-text margin-bottom-24">Page Not Found</h2>
                <div class="center-content">
                    <p class="">We're really sorry but, we can't seem to find the page you're looking for.</p>
                </div>
            </div>
            <?php require("static/includes/footer.inc.php"); ?>
        </div>
    </main>
</nody>
</html>