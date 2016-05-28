<?php

/*
        (c) Kaavren
*/

include_once("config.php");
include_once("error.php");

session_start();

$link = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) or die ("Could not connect to database. Try later<BR>");
@mysql_select_db(DB_NAME, $link);

function error_report($errcode) {
  global $err;
  if ($errcode==10) {                 // mysql error
    $r=mysql_error();
  }
  else {

    $r=$err[$errcode];
  }

    echo "<b>Error: </b>"."$r";

  return 0;
}

function my_query($sql) {
  global $link;
  $result = @mysql_query($sql, $link);
  if ($result) return $result;
  //  error handling here
  if (DEBUG_MODE) { error_report(10); };
//  error_report(10);

  die;

  return false;
}

function currency_display($amount) {
  $currency = floor($amount*100) % 100;

  if ($currency < 10) {
    $currency = "0" . $currency;
  }

  $currency = floor($amount) . "." . $currency;

  return($currency);
}

function valid_email($email) {
  $arr = explode("@",$email);
  $arr2 = explode(".", $email);

  if ((sizeof($arr) != 2) || (sizeof($arr2) != 2)) {
    return(false);
  }

  if (strpos($arr[0], ".") === false) {
    return(true);
  }

  return(false);
}

function check_12hours_limit($lottery_id, $date = 0) {
 

  if (!$date) {
    $date = time();
  }
  $r = my_query("select started, duration from " . db_prefix . "lotteries
  where id='" . mysql_real_escape_string($lottery_id) . "'");

  list($started, $duration) = mysql_fetch_row($r);

  if ($date < ($started + ($duration *24 - 12) * 3600)) return(false); else return(true);
}

// update user IP ad last visit time

$r = my_query("delete from " . db_prefix . "visits where date < '" . (time() - 24*60*60) ."'");
$r = my_query("insert into " . db_prefix . "visits(ip,date) values ('" . ip2long($_SERVER['REMOTE_ADDR']) . "','" . time() . "')");



?>