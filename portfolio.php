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
                <section class="margin-bottom-24">
                    <p>
                        <svg class="text-svg" viewBox="5.05,4.8,43.17,41.8"><g><path d="M15.9,7.7c3.3-1.9,6.9-2.9,10.8-2.9c3.9,0,7.5,1,10.8,2.9s5.9,4.5,7.8,7.8c1.9,3.3,2.9,6.9,2.9,10.8 c0,4.7-1.4,8.9-4.1,12.6c-2.7,3.7-6.2,6.3-10.6,7.7c-0.5,0.1-0.9,0-1.1-0.2c-0.2-0.2-0.4-0.5-0.4-0.8c0-0.1,0-0.8,0-2.1 s0-2.6,0-3.8c0-1.8-0.5-3.1-1.5-4c1.1-0.1,2-0.3,2.9-0.5c0.8-0.2,1.7-0.6,2.6-1.1c0.9-0.5,1.7-1.1,2.3-1.9c0.6-0.7,1.1-1.7,1.5-2.9 s0.6-2.6,0.6-4.2c0-2.2-0.7-4.1-2.2-5.7c0.7-1.7,0.6-3.6-0.2-5.7c-0.5-0.2-1.3-0.1-2.3,0.3c-1,0.4-1.8,0.8-2.6,1.2L32,15.9 c-1.7-0.5-3.5-0.7-5.4-0.7c-1.8,0-3.6,0.2-5.4,0.7c-0.3-0.2-0.7-0.5-1.2-0.8c-0.5-0.3-1.3-0.7-2.3-1.1c-1.1-0.4-1.9-0.5-2.4-0.4 c-0.8,2.1-0.9,4-0.2,5.7C13.7,21,13,22.9,13,25.1c0,1.6,0.2,3,0.6,4.2c0.4,1.2,0.9,2.2,1.5,2.9c0.6,0.7,1.3,1.4,2.2,1.9 c0.9,0.5,1.8,0.9,2.6,1.1c0.8,0.2,1.8,0.4,2.9,0.5c-0.7,0.7-1.2,1.6-1.4,2.9c-0.4,0.2-0.8,0.3-1.3,0.4c-0.4,0.1-1,0.1-1.6,0.1 s-1.2-0.2-1.8-0.6c-0.6-0.4-1.1-1-1.5-1.7c-0.4-0.6-0.8-1.1-1.4-1.5c-0.5-0.4-1-0.6-1.4-0.7l-0.6-0.1c-0.4,0-0.7,0-0.8,0.1 c-0.1,0.1-0.2,0.2-0.1,0.3s0.1,0.3,0.3,0.4c0.1,0.1,0.2,0.2,0.4,0.3l0.2,0.1c0.4,0.2,0.8,0.5,1.2,1.1c0.4,0.5,0.7,1,0.9,1.4 l0.3,0.6c0.2,0.7,0.7,1.3,1.2,1.7c0.6,0.4,1.2,0.7,1.9,0.8c0.7,0.1,1.3,0.2,1.9,0.2c0.6,0,1.1,0,1.5-0.1l0.6-0.1c0,0.7,0,1.5,0,2.5 c0,0.9,0,1.4,0,1.5c0,0.3-0.1,0.6-0.4,0.8c-0.2,0.2-0.6,0.3-1.1,0.2c-4.3-1.4-7.8-4-10.6-7.7s-4.1-7.9-4.1-12.6 c0-3.9,1-7.5,2.9-10.8C10,12.2,12.6,9.6,15.9,7.7z M13.3,35.6c0.1-0.1,0-0.2-0.2-0.3c-0.2-0.1-0.3,0-0.4,0.1 c-0.1,0.1,0,0.2,0.2,0.3C13.1,35.8,13.3,35.8,13.3,35.6z M14.2,36.6c0.1-0.1,0.1-0.2-0.1-0.4c-0.2-0.2-0.3-0.2-0.4-0.1 c-0.1,0.1-0.1,0.2,0.1,0.4C13.9,36.7,14.1,36.7,14.2,36.6z M15,37.8c0.2-0.1,0.2-0.3,0-0.5c-0.1-0.2-0.3-0.3-0.5-0.2 c-0.2,0.1-0.2,0.3,0,0.5S14.9,37.9,15,37.8z M16.2,39c0.1-0.1,0.1-0.3-0.1-0.5c-0.2-0.2-0.4-0.3-0.6-0.1c-0.2,0.1-0.1,0.3,0.1,0.5 C15.9,39.1,16.1,39.1,16.2,39z M17.8,39.7c0.1-0.2-0.1-0.4-0.4-0.4c-0.3-0.1-0.5,0-0.5,0.2c-0.1,0.2,0,0.3,0.4,0.4 C17.5,40,17.7,39.9,17.8,39.7z M19.6,39.8c0-0.2-0.2-0.3-0.5-0.3c-0.3,0-0.4,0.1-0.4,0.3c0,0.2,0.2,0.3,0.5,0.3 C19.4,40.1,19.6,40,19.6,39.8z M21.2,39.5c0-0.2-0.2-0.3-0.5-0.3c-0.3,0.1-0.4,0.2-0.4,0.4c0,0.2,0.2,0.3,0.5,0.2 C21.1,39.9,21.2,39.7,21.2,39.5z"></path></g></svg>
                        <a class="link" href="https://github.com/raineypiechowski/raineypiechowski.com" target="_blank">Repository for this site &rarr;</a>
                    </p>
                </section>
                <section class="margin-bottom-24">
                    <h3 class="margin-bottom-12">Coding Challenge</h3>
                    <p class="margin-bottom-12">
                        In the Advanced Web Development course that I took, we (the students) completed a php 'coding challange' and these are the results off all the class members.
                    </p>
                    <div class="margin-bottom-12">
                        <a class="btn" href="<?php echo(BASE_URL . "static/data/PHP-Arrays-Coding-Challenge.zip"); ?>">Download Coding Challenge Files</a>
                    </div>
                    <div class="center-content margin-bottom-12">
                        <img src="<?php echo(BASE_URL . "static/img/coding-challenge-results.png"); ?>" alt="Coding Challenge Results">
                    </div>
                    <p>
                        <b>In this chart, I was the student who completed the task correctly and in only 10 minutes!</b>
                    </p>
                </section>
                <section class="margin-bottom-24">
                    <h3 class="margin-bottom-12">JSON Test</h3>
                    <p class="margin-bottom-12">
                        This is a test I completed for a job application. The goal was to take the JSON below from a different server and display a list of headlines using it.
                    </p>
                    <p class="json-txt margin-bottom-12">
                        [{"published_at":"2018-07-01","title":"Lorem & ipsum dolor sit amet, consectetur adipiscing elit","_kw":[]},{"published_at":"2019-07-02","title":"Vestibulum in arcu neque. Pellentesque feugiat, mauris at congue semper. ","_kw":[]},{"published_at":"2017-07-03","title":"Nulla iaculis, massa sit amet tempor pellentesque, sem ligula euismod metus, eget blandit tortor arcu eu nisl","_kw":[]},{"published_at":"2018-06-01","title":"Pellentesque non feugiat ante. Donec dignissim turpis id orci consectetur. ","_kw":[]},{"published_at":"2014-09-02","title":"Aliquam convallis turpis urna, ut dapibus arcu faucibus interdum","_kw":[]},{"published_at":"2017-12-03","title":"Duis id elit eu metus commodo volutpat at at velit. ","_kw":[]},{"published_at":"2018-01-01","title":"Aliquam tristique dui turpis, nec facilisis tellus eleifend id. Morbi. ","_kw":[]},{"published_at":"2019-05-02","title":"Nam arcu mauris, porttitor ut leo id, luctus malesuada orci. ","_kw":[]},{"published_at":"2017-07-03","title":"Donec ut mi bibendum, pharetra dolor sed, dapibus mauris. In. ","_kw":[]},{"published_at":"2015-01-01","title":"Morbi enim metus, mollis in ultrices molestie, sagittis quis elit. ","_kw":[]},{"published_at":"2017-02-02","title":"Curabitur vestibulum lorem in ex semper iaculis. Mauris vel facilisis. ","_kw":[]},{"published_at":"2015-03-22","title":"Donec interdum nibh blandit bibendum hendrerit. Lorem ipsum dolor sit. ","_kw":[]},{"published_at":"2016-06-19","title":"Etiam ac tellus quis felis cursus vulputate. Maecenas at felis. ","_kw":[]},{"published_at":"2019-04-30","title":"Integer mi sapien, pharetra at nunc vel, tristique sollicitudin augue. ","_kw":[]}]
                    </p>
                    <a class="btn" href="<?php echo(BASE_URL . "portfolio/artifacts/json-test"); ?>" target="_blank">View Artifact &rarr;</a>
                </section>
                <section>
                    <h3 class="margin-bottom-12">PSD to Responsive Design Test</h3>
                    <p class="margin-bottom-12">
                        This was another test that I completed for a job opertunity.
                        The goal was to convert the PSD file below into responsive HTML and CSS with a working carousell.
                    </p>
                    <p class="margin-bottom-12">
                        I could have done better than I did, but the result I ended up with already took 4 hours. I thought, the goal is to show that I can create fully responsive designs on-the-fly; not to develop an actual web page!
                    </p>
                    <div class="margin-bottom-12">
                        <a class="btn" href="<?php echo(BASE_URL . "static/data/CT_SkillTest_v3.psd"); ?>">Download PSD file</a>
                    </div>
                    <p class="margin-bottom-12">
                        I am aware that the difference between the PSD file and my responsive design is not exactly uncanny.
                        Part of that fact is due to the fact that my design is responsive, but mostly it is because I do not have Photoshop, so I couldn't really get much out of the psd file.
                        I fully intend to get Photoshop when I get a job and can afford it.
                    </p>
                    <div class="center-content margin-bottom-12">
                        <img src="<?php echo(BASE_URL . "static/img/psd-responsive-test-result.png"); ?>" alt="PSD to Responsive Design Test Result">
                    </div>
                    <a class="btn" href="<?php echo(BASE_URL . "psd-skill-test/"); ?>" target="_blank">View Artifact &rarr;</a>
                </section>
            </div>
            <?php require("static/includes/footer.inc.php"); ?>
        </div>
    </main>
</body>
</html>