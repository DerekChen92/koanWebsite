<?php
    function getSubintro($main_page) {
        // $name = getPageName($main_page);
        $args = func_get_args();
        $root_path = "/.";

        echo "
        <section id='subintro'>
        <div class='container'>
          <div class='row'>
            <div class='span8'>
              <ul class='breadcrumb'>
                <li><a href='$root_path'><i class='icon-home'></i></a></li>";

        foreach ($args as &$arg) {
          $name = getPageName($arg);
          $url = getSubintroUrl($arg, $root_path);
          echo "              
          <li><i class='icon-angle-right'></i></li>
          <li><a href='$url'>$name</a></li>";
        }
        echo "
              </ul>
              </div>
            </div>
          </div>
        </section>";
    }
