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
        $main_page = 'training';
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
        <?php
            $total_img = count(glob("./*.png"));
            for($i=1; $i<=$total_img; $i++) {
                echo "<img src='/koan/training/$i.png'/>";
            }
        ?>
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