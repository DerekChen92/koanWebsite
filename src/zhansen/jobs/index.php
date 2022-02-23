<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $main_page = "jobs";
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
          $total_tables = count(glob("./tables/*.txt"));
          for($i = 0; $i < $total_tables; $i++) {
            buildTable("./tables/$i.txt");
          }
        ?>

      </div>
    </section>
    <!-- Footer
 ================================================== -->
    <?php getFooter($main_page); ?>

  </div>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

  <?php getScripts($main_page); ?>

</body>
</html>
