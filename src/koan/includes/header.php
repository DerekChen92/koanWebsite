<?php
    function getHeadInfo() {
        echo "
        <div class='wrapper row0'>
            <div id='topbar' class='hoc clear'> 
                <div class='fl_left'>
                <ul>
                    <li><i class='fa fa-phone'></i> (03)350-3085</li>
                    <li><i class='fa fa-envelope-o'></i> op@zhansen.com.tw</li>
                </ul>
                </div>
                <div class='fl_right'>
                <ul>
                    <li><a href='/'><i class='fa fa-lg fa-home'></i></a></li>
                </ul>
                </div>
            </div>
        </div>";
    }

    function getHeader($main_page) {
        $active_home = "";
        $active_training = "";
        $active_introduction = "";
        $active_benefits = "";
        $active_jobs = "";
        $active_contact_us = "";
        $home_url = "/koan";
        $training_url = "/koan/training";
        $introduction_url = "/koan/introduction";
        $benefits_url = "/koan/benefits";
        $jobs_url = "/koan/jobs";
        $contact_us_url = "/koan/contact_us";
        switch ($main_page) {
            case "home":
                $active_home = "active";
                $home_url = "#";
                break;
            case "training":
                $active_training = "active";
                $training_url = "#";
                break;
            case "introduction":
                $active_introduction = "active";
                $introduction_url = "#";
                break;
            case "benefits":
                $active_benefits = "active";
                $benefits_url = "#";
                break;
            case "jobs":
                $active_jobs = "active";
                $jobs_url = "#";
                break;
            case "contact_us":
                $active_contact_us = "active";
                $contact_us_url = "#";
                break;
            default:
                break;
        }
        echo "
        <div class='wrapper row1'>
            <header id='header' class='hoc clear'>
                <div id='logo'> 
                    <h1><a href='/koan/'><img src='/koan/assets/images/company_logo.png' alt='company_logo' style='width:52px;height:52px;margin-right:10px;vertical-align: text-top;'>格安企業有限公司</a></h1>
                    <h7>KOAN INDUSTRIAL CO., LTD.</h7>

                </div>
                <nav id='mainav' class='clear'> 

                    <ul class='clear'>
                        <li class=$active_home><a href=$home_url>首頁</a></li>
                        <li class=$active_introduction><a href=$introduction_url>公司簡介</a></li>
                        <li class=$active_benefits><a href=$benefits_url>員工福利</a></li>
                        <li class=$active_training><a href=$training_url>教育訓練</a></li>
                        <li class=$active_jobs><a href=$jobs_url>工作機會</a></li>
                        <li class=$active_contact_us><a href=$contact_us_url>聯絡我們</a></li>
                    </ul>

                </nav>
            </header>
        </div>";
    }
?>