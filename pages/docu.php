<?php
/**
 * 
 * @route: path="/docu" name="Docu"
 * @headline: Docu
 * @seotitle: My Sample Page Title
 * @seodesc: This is my description to hope my seo ranking will be better
 * @seokeywords: a few keywords
 * 
 * navigation data:
 * @navname: Docs
 * @navicon: code
 * @navdisplay: 5:main
 * @navmobile: main
 * 
 */

?>
<div class="member_cards">

    <div class="row home_bereich chipsgrey">
        <div class="col-2">
            <span>Lets code!</span>
            <h1 class="hero" style="margin-bottom:40px;">
                Documentation and code examples
            </h1>
            <p class="phero">
                Lets code together. I show you how to handle the framework.
            </p>


        </div>
        <div class="col-2" style="position:relative;text-align:center">
            <img class="colimg darkmode_logo" src="<?php echo imgSrc('wordpress-programmierung-referenzen.svg','darkmode') ?>" alt="WordPress Freelancer Stefan"/>
        </div>
    </div>

    <!-- bubbles -->
    <div class="home_bereich martop40 home_bereich_none" style="max-width: 850px;margin: auto;padding-top: 80px;padding-bottom: 40px;">

        <div class="bubble_wrap_prim">
            <div class="answer_bubble">
                <div class="answer_bubble_inner">
                <span id="antwort">Any programming skills needed to use the framework?</span>
                </div>
            </div>
        </div>

        <div class="bubble_wrap_white" align="right">
            <div class="answer_bubble">
                <div class="answer_bubble_inner">
                    <span id="antwort">
                        Yes at least html, css to create nice content.
                    </span>
                </div>
            </div>
        </div>
        

    </div>
    <!-- bubbles END -->



    <!-- codes -->
    <div class="home_bereich martop40" style="overflow:hidden;padding-top: 40px;padding-bottom: 40px;">

        <h2 class="heross">
            How to use the framework:
        </h2>

        <p class="phero">
            1. Download the code from <a target="_blank" class="button_link" href="<?php echo $config['github_link'] ?>">Github</a> 
        </p>

        <div class="bold colprim">via terminal</div>
        <div class="code_highlight" style="margin-bottom:40px;">
            <?php highlight_string('git clone https://github.com/stefan-klaes/super-simple-php-website.git') ?>
        </div>

        <p>Or download the code from Github and extract the zip.</p>

        <p class="phero martop40">
            2. edit the code 
        </p>

        <p>
            Edit config/config.php and secrets/secrets.php and of course all the code you want to edit.
        </p>

        <p class="phero martop40">
            3. Upload the code to you webspace
        </p>

        <p>
            You can download the code as zip and upload it to your webspace via FTP or of course you can do it via terminal and ssh or 
            many other ways.
        </p>

        

       
    </div>
    <!-- END codes -->



    <?php showBlock('visit-github') ?>

            
</div>
