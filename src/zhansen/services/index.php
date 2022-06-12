<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $main_page = "services";
        foreach (glob("../includes/*.php") as $filename)
            include_once $filename;
        getHead($main_page, '.');
    ?>
    <style>
      .iconText {
        padding-top:30px;
        font-size: 20px;
        font-weight:700;
      }

      .myImage{
        max-width:80%;
        max-height: auto;
      }
    </style>
</head>

<body>
  <div id="wrapper">

    <?php 
        getHeader($main_page, '.');         
        getSubintro($main_page);
    ?>
    
    <section id="maincontent">
      <div class="container">
        <!-- <?php
          // $total_img = count(glob("./images/*.png"));
          // for($i = 1; $i <= $total_img; $i++) {
          //   echo "
          //   <img src='./services/images/$i.png' alt='' style='margin: 20px 0px'/>";
          // }
        ?> -->
        <div class="row">
          <div class="span4 center"><img class="myImage" src="./services/images/1.png" alt=""/><div class="iconText">樹木修剪</div></div>
          <div class="span4 center"><img class="myImage" src="./services/images/2.png" alt=""/><div class="iconText">草坪維護</div></div>
          <div class="span4 center"><img class="myImage" src="./services/images/3.png" alt=""/><div class="iconText">草木移植</div></div>
        </div>
        <div class="row">
          <div class="span4 center"><img class="myImage" src="./services/images/4.png" alt=""/><div class="iconText">花海工程</div></div>
          <div class="span4 center"><img class="myImage" src="./services/images/5.png" alt=""/><div class="iconText">病蟲害防治</div></div>
          <div class="span4 center"><img class="myImage" src="./services/images/6.png" alt=""/><div class="iconText">防汛搶災</div></div>
        </div>

      </div>
    </section>
    
    <?php getFooter($main_page); ?>

  </div>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

  <?php getScripts($main_page); ?>


</body>
</html>
