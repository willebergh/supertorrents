<?php
  include_once "".$_SERVER['DOCUMENT_ROOT']."/supertorrents/assets/inc/pathVar.inc.php";

  if (isset($_GET)) {
    $search_query = $_GET['search'];
  }

  if ($search_query == "") {
    header("Location: $webRoot/home");
  } else {
    header("Location: $webRoot/search/$search_query");
  }
