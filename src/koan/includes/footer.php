<?php
    function getFooter($main_page) {
        echo "
        <div class='wrapper row4'>
        <footer id='footer' class='hoc clear'> 
            <!-- ################################################################################################ -->
            <div class='one_half first'>
            <h6 class='heading'>格安企業有限公司</h6>
            <nav>
                <ul class='nospace'>
                <li><a href='../'><i class='fa fa-lg fa-home'></i></a></li>
                <li><a href='.'>首頁</a></li>
                </ul>
            </nav>
            <ul class='faico clear'>
                <li><a class='faicon-facebook' href='https://www.facebook.com/ZhanSenCoLtd/' target='_blank'><i class='fa fa-facebook'></i></a></li>
                <li><a class='faicon-google-plus' href='https://www.instagram.com/zhansencoltd/'><i class='fa fa-instagram'></i></a>
                <li><a class='faicon-line' href='https://lin.ee/EhGgn9T' style='margin-left:3px;'><i><img src='/koan/assets/images/line_icon.png' style='width:27px; height:27px;'></i></a>
                </li>   
            </ul>
            </div>
            <div class='one_half'>
            <h6 class='heading'>聯絡資訊</h6>
            <ul class='nospace linklist contact'>
                <li><i class='fa fa-map-marker'></i>
                <address>
                    桃園市桃園區中正路366號7樓之3
                </address>
                </li>
                <li><i class='fa fa-phone'></i> (03)350-3085</li>
                <li><i class='fa fa-envelope-o'></i> op@zhansen.com.tw</li>
            </ul>
            </div>
            <!-- ################################################################################################ -->
        </footer>
        </div>";
    }

    function getFootInfo($main_page) {
        echo "
        <div class='wrapper row5'>
            <div id='copyright' class='hoc clear'> 
                <!-- ################################################################################################ -->
                <p class='fl_left'>Copyright &copy; 2022 - All Rights Reserved - zhansen.com.tw<a href='#'zhansen.com.tw</a></p>
                <p class='fl_right'> <a target='_blank' href='http://www.os-templates.com/' title='Free Website Templates'></a></p>
                <!-- ################################################################################################ -->
            </div>
        </div>";
    }
?>