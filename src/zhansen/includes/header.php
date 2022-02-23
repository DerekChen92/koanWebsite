<?php
function getHeader($main_page, $add_path){
    $home_state = "";
    $services_state = "";
    $products_state = "";
    $jobs_state = "";
    $contact_us_state = "";
    $test_state = "";

    $home_url = "$add_path/";
    $services_url = "$add_path/services";
    $products_url = "$add_path/products";
    $jobs_url = "$add_path/jobs";
    $contact_us_url = "$add_path/contact_us";
    $test_url = "$add_path/test";

    switch ($main_page) {
        case "home":
            $home_state = "active";
            $home_url = "#";
            break;
        
        case "services":
            $services_state = "active";
            $services_url = "#";
            break;
        
        case "products":
            $products_state = "active";
            $products_url = "#";
            break;

        case "jobs":
            $jobs_state = "active";
            $jobs_url = "#";
            break;

        case "contact_us":
            $contact_us_state = "active";
            $contact_us_url = "#";
            break;

        case "test":
            $test_state = "active";
            $test_url = "#";
        
        default:
            # code...
            break;
    }


  echo 
  "<header>
    <!-- Navbar
  ================================================== -->
    <div class='navbar navbar-static-top'>
      <div class='navbar-inner'>
        <div class='container'>
          <!-- logo -->
          <div class='logo'>
            <a href='./'><img srcset='$add_path/assets/img/logo.png 1x' alt=''/></a>
          </div>
          <!-- end logo -->

          <!-- top menu -->
          <div class='navigation'>
            <nav>
              <ul class='nav topnav'>
                <li class=$home_state>
                  <a href=$home_url><i class='icon-home'></i> 首頁 </a>
                </li>
                <li class=$services_state>
                  <a href=$services_url><i class='icon-cog'></i> 服務項目 </a>
                </li>
                <li class=$products_state>
                  <a href=$products_url><i class='icon-leaf'></i> 作品展示 </a>
                </li>
                <li class=$jobs_state>
                  <a href=$jobs_url><i class='icon-briefcase'></i> 工作機會 </a>
                </li>
                <li class=$contact_us_state>
                  <a href=$contact_us_url><i class='icon-envelope-alt'></i> 聯絡我們 </a>
                </li>
                <li class=$test_state>
                  <a href=$test_url><i class='icon-home'></i> 聯絡我們 </a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->

        </div>
      </div>
    </div>
  </header>";
}
