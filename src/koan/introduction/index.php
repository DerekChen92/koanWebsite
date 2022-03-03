<!DOCTYPE html>
<!--
Template Name: Cytocean
Author: <a href='http://www.os-templates.com/'>OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
    <?php
        $main_page = 'introduction';
        foreach (glob('../includes/*.php') as $filename)
            include_once $filename;
        getHead($main_page, '.');
    ?>
</head>
<body id='top'>
    <?php
        getHeadInfo();
        getHeader($main_page);
    ?>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->

      <?php
        echo "
        <div class='one_third first'>
            <img src='/koan/introduction/background.jpg'>
        </div>";

        echo "
        <div class='two_third' style='font-size:20px; line-height: normal'>";
        $total_text = count(glob("./info*.txt"));
        for($i=1;$i<=$total_text;$i++) {
            $text_file = fopen("./info$i.txt", "r");
            while(!feof($text_file)) {
                echo "
                <p>
                    &emsp;&emsp;".fgets($text_file)."
                </p>";
            }
            fclose($text_file);
        }
        echo "
        </div>";
      ?>

      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<?php
    getFooter($main_page);
    getFootInfo($main_page);
?>
<a id='backtotop' href='#top'><i class='fa fa-chevron-up'></i></a>
<?php
    getScripts();
?>
<!-- JAVASCRIPTS -->

</body>
</html>