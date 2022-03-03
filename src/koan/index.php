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
        $main_page = 'home';
        foreach (glob('./includes/*.php') as $filename)
            include_once $filename;
        getHead($main_page, '.');
    ?>
</head>
<body id='top'>
    <?php
        getHeadInfo();
        getHeader($main_page);
    ?>
<div class='bgded overlay' style='background-image:url("/koan/slides/background.jpg");'>
  <div id='pageintro' class='hoc clear'> 
    <div class='flexslider basicslider'>
      <ul class='slides'>

        <?php
          $total_slides = count(glob("./slides/*.txt"));
          for($i=1; $i<=$total_slides; $i++) {
            $slide_file = fopen("./slides/slide$i.txt", "r");
            echo "
            <li>
              <article>
                <p style='font-size: 25px;'>".fgets($slide_file)."</p>
                <h3 class='heading' style='margin-top:-5px; margin-bottom:-12px'>".fgets($slide_file)."</h3>
                <p style='font-size: 18px;'>".fgets($slide_file)."</p>
              </article>
            </li>";
            fclose($slide_file);
          }
        ?>
        
      </ul>
    </div>
  </div>
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