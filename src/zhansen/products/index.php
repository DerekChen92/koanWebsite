<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $main_page = "products";
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
    
    <!-- Contents -->
    <section id="maincontent">
      <!-- <div class="container">
        
        <img src="assets/img/contents/waiting_for_open.png" alt="" />

      </div> -->
      <div class="container">
        <div class="row">
          <ul class="portfolio-area da-thumbs">

              <?php
                foreach(glob("../products_details/*", GLOB_ONLYDIR) as $foldername) {
                  $name = basename($foldername);
                  $root_path = ".";
                  echo "
                  <li class='portfolio-item' data-id='id-0' data-type='web'>
                    <div class='span4'>
                      <div class='thumbnail'>
                        <div class='image-wrapp'>
                          <img src='$root_path/products_details/$name/cover.jpg' alt='1' title='' />
                          <article class='da-animate da-slideFromRight'>
                            <a class='zoom' data-pretty='prettyPhoto' href='$root_path/products_details/$name/1.jpg'>
                              <i class='icon-zoom-in icon-rounded icon-48 active'></i>
                            </a>
                            <a href='$root_path/products_details?product_name=$name'>
                              <i class='icon-link icon-rounded icon-48 active'></i>
                            </a>
                            <div class='hidden-tablet'>
                              <p>
                                $name
                              </p>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                  </li>";
                }

              ?>

          </ul>
        </div>
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
