<?php
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";
  include_once($headerINC);
  include_once($dbhINC);

  echo "
  <style media=\"screen\">.headerNav_liToplist{background-color: #2d98da;}</style>
  ";

  $sql = "SELECT uuid, category, title, size, date, uploader, seeders, leechers FROM torrents  ORDER BY seeders DESC LIMIT 100";

  echo "
    <main class=\"main\">
      <div class=\"mainStyle\">
  ";
  include_once($browseTorrent_tableINC);
  echo "
      </div>
    </main>
  ";

  include_once($footerINC);