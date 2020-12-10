<?php
$page_title = "References | Rainey Piechowski";
$page_description = "See all of my References who would love to tell you more about me!";

require("static/includes/header.inc.php");
?>
<link rel="stylesheet" href="<?php echo(BASE_URL . "/static/css/references.css"); ?>">
    <main>
        <?php
        $side_bar_selected = "references";
        require("static/includes/side-bar.inc.php");
        ?>
        <div class="content-frame">
            <div class="page-title-block">
                <div></div>
                <h1>REFERENCES</h1>
            </div>
            <div class="content-wrapper">
                <section class="margin-bottom-24">
                    <h5 class="margin-bottom-12">Kader, Niall</h5>
                    <p class="margin-bottom-12">Instructor, IT - Web and Software Developer</p>
                    <div class="margin-bottom-12">
                        <a class="link" href="tel: 608-785-9465">608-785-9465</a>
                    </div>
                    <a class="link" href="mailto: KaderN@westerntc.edu">KaderN@westerntc.edu</a>
                </section>
                <section class="margin-bottom-24">
                    <h5 class="margin-bottom-12">Prindle, Cynthia</h5>
                    <p class="margin-bottom-12">Instructor, IT - Computer Support Specialist</p>
                    <div class="margin-bottom-12">
                        <a class="link" href="tel: 608-785-9217">608-785-9217</a>
                    </div>
                    <a class="link" href="mailto: PrindleC@westerntc.edu">PrindleC@westerntc.edu</a>
                </section>
                <section>
                    <h5 class="margin-bottom-12">Knower, Kari</h5>
                    <p class="margin-bottom-12">Instructor, IT - Computer Support Specialist</p>
                    <div class="margin-bottom-12">
                        <a class="link" href="tel: 608-789-6120">608-789-6120</a>
                    </div>
                    <a class="link" href="mailto: KnowerK@westerntc.edu">KnowerK@westerntc.edu</a>
                </section>
            </div>
            <?php
            require("static/includes/footer.inc.php");
            ?>
        </div>
    </main>
</body>
</html>