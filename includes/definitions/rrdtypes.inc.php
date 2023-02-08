<?php

$config['rrd_types']['tcpstates'] = array(
  'file'  => 'app-tcpstates-%index%.rrd',
  'ds'    => array(
    'CLOSE-WAIT'          => array('type' => 'GAUGE',  'min' => '0', 'max' => '1048576'),
    'CLOSED'              => array('type' => 'GAUGE',  'min' => '0', 'max' => '1048576'),
    'CLOSING'             => array('type' => 'GAUGE',  'min' => '0', 'max' => '1048576'),
    'ESTAB'               => array('type' => 'GAUGE',  'min' => '0', 'max' => '1048576'),
    'FIN-WAIT-1'          => array('type' => 'GAUGE',  'min' => '0', 'max' => '1048576'),
    'FIN-WAIT-2'          => array('type' => 'GAUGE',  'min' => '0', 'max' => '1048576'),
    'LAST-ACK'            => array('type' => 'GAUGE',  'min' => '0', 'max' => '1048576'),
    'LISTEN'              => array('type' => 'GAUGE',  'min' => '0', 'max' => '1048576'),
    'SYN-RECV'            => array('type' => 'GAUGE',  'min' => '0', 'max' => '1048576'),
    'SYN-SENT'            => array('type' => 'GAUGE',  'min' => '0', 'max' => '1048576'),
    'TIME-WAIT'           => array('type' => 'GAUGE',  'min' => '0', 'max' => '1048576'),
  ),
);

// EOF
