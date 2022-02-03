<?php

$scale_min = 0;

include_once($config['html_dir']."/includes/graphs/common.inc.php");

$rrd_filename = get_rrd_path($device, "app-tcpstates-".$app['app_id'].".rrd");

$array = array('CLOSE-WAIT' => array('descr' => 'CLOSE-WAIT', 'colour' => '000000FF'),
               'CLOSED' => array('descr' => 'CLOSED', 'colour' => '808080FF'),
               'CLOSING' => array('descr' => 'CLOSING', 'colour' => '800080FF'),
               'ESTAB' => array('descr' => 'ESTAB', 'colour' => '0000FFFF'),
               'FIN-WAIT-1' => array('descr' => 'FIN-WAIT-1', 'colour' => '00FFFFFF'),
               'FIN-WAIT-2' => array('descr' => 'FIN-WAIT-2', 'colour' => '008000FF'),
               'LAST-ACK' => array('descr' => 'LAST-ACK', 'colour' => '00FF00FF'),
               'LISTEN' => array('descr' => 'LISTEN', 'colour' => 'FFFF00FF'),
               'SYN-RECV' => array('descr' => 'SYN-RECV', 'colour' => 'FFA500FF'),
               'SYN-SENT' => array('descr' => 'SYN-SENT', 'colour' => 'FF0000FF'),
               'TIME-WAIT' => array('descr' => 'TIME-WAIT', 'colour' => 'FF00FFFF'),
);

$i = 0;
if (rrd_is_file($rrd_filename))
{
  foreach ($array as $ds => $data)
  {
    $rrd_list[$i]['filename'] = $rrd_filename;
    $rrd_list[$i]['descr'] = $data['descr'];
    $rrd_list[$i]['ds'] = $ds;
//    $rrd_list[$i]['colour'] = $data['colour'];
    $rrd_list[$i]['colour']   = $config['graph_colours'][$colours][$i];
    $i++;
  }
} else { echo("file missing: $rrd_filename");  }

$colours   = "mixed";
$nototal   = 1;
$unit_text = "States";

include($config['html_dir']."/includes/graphs/generic_multi_simplex_separated.inc.php");

// EOF
