<?php
    function getSubintro($main_page) {
        $name = getPageName($main_page);
        
        echo     
        "<section id='subintro'>
        <div class='container'>
          <div class='row'>
            <div class='span8'>
              <ul class='breadcrumb'>
                <li><a href='/zhansen/'><i class='icon-home'></i></a><i class='icon-angle-right'></i></li>
                <li><a href='#'>$name</a>
              </ul>
            </div>
          </div>
        </div>
      </section>";
    }
?>