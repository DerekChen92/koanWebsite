<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $main_page = "services";
        foreach (glob("../includes/*.php") as $filename)
            include_once $filename;
        getHead($main_page, '.');
    ?>
</head>

<body>
  <div id="wrapper">

    <?php 
        getHeader($main_page, '.');         
        getSubintro($main_page);
    ?>
    
    <section id="maincontent">
      <div class="container">
        <?php
          $total_img = count(glob("./images/*.png"));
          for($i = 1; $i <= $total_img; $i++) {
            echo "
            <img src='./services/images/$i.png' alt='' style='margin: 20px 0px'/>";
          }
        ?>

      </div>
    </section>
    
    <?php getFooter($main_page); ?>

  </div>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

  <?php getScripts($main_page); ?>


</body>
</html>
