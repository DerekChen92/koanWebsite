<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $main_page = $_GET["product_name"];
    foreach (glob("../includes/*.php") as $filename)
        include_once $filename;
    getHead($main_page, '..');
    ?>
</head>

<body>
    <div id="wrapper">
        <?php
        getHeader($main_page, '..');
        getSubintro("products", $main_page);
        ?>

        <!-- Contents -->
        <section id="maincontent">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <article>
                            <?php
                            $product_name = $_GET["product_name"];
                            $total_img = count(glob("./$product_name/*.jpg"));
                            $file = fopen("./$product_name/info.txt", "r");
                            $label = fopen("./$product_name/label.txt", "r");
                            $root_path = ".";
                            echo "
                        <div class='heading'>
                            <h4>" . fgets($file) . "</h4>
                        </div>
                        <div class='clearfix'>
                        </div>
                        <div class='row'>
                            <div class='span8'>
                            <!-- start flexslider -->
                            <div class='flexslider'>
                                <ul class='slides'>";
                            for ($i = 1; $i < $total_img; $i++) {
                                echo "
                                    <li>
                                        <img src='$root_path/products_details/$product_name/$i.jpg' alt=''/>
                                    </li>";
                            }
                            echo "
                                </ul>
                            </div>
                            <!-- end flexslider -->
                            <!-- <p>
                                Cu cum noster euismod appellantur, mundi vitae vim ut, ea sea scripta expetendis vituperatoribus. Et cibo dicat impetus cum, id his quodsi scripserit. Nec purto habeo recteque eu. Posse oportere accusamus an sit, ex quando phaedrum sapientem ius. Perfecto
                                ocurreret no nam, eu quas cetero qui, vel ea minim nusquam salutatus. Nemore integre his ei, tollit eirmod eam at.
                            </p> -->
                            </div>
                            <div class='span4'>
                            <aside>
                                <div class='widget'>
                                <div class='project-widget'>
                                    <h4 class='rheading'>項目內容<span></span></h4>
                                    <ul class='project-detail'>
                                    <li><label>" . fgets($label) . ":</label> " . fgets($file) . "</li>
                                    <li><label>" . fgets($label) . ":</label> " . fgets($file) . "</li>
                                    <li><label>" . fgets($label) . ":</label> " . fgets($file) . "</li>
                                    <!-- <li><label>Project link :</label><a href='#'>www.somelink.com</a></li> -->
                                    </ul>
                                </div>
                                </div>
                            </aside>
                            </div>
                        </div>";
                            ?>
                        </article>
                    </div>
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