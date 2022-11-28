<?php

$config['rrd_types']['tcpstates'] = array(
  'file'  => 'app-tcpstates-%index%.rrd',
  'ds'    => array(
    'CLOSE-WAIT'          => array('ds_type' => 'GAUGE',  'ds_min' => 0),
    'CLOSED'          => array('ds_type' => 'GAUGE',  'ds_min' => 0),
    'CLOSING'          => array('ds_type' => 'GAUGE',  'ds_min' => 0),
    'ESTAB'          => array('ds_type' => 'GAUGE',  'ds_min' => 0),
    'FIN-WAIT-1'          => array('ds_type' => 'GAUGE',  'ds_min' => 0),
    'FIN-WAIT-2'          => array('ds_type' => 'GAUGE',  'ds_min' => 0),
    'LAST-ACK'          => array('ds_type' => 'GAUGE',  'ds_min' => 0),
    'LISTEN'          => array('ds_type' => 'GAUGE',  'ds_min' => 0),
    'SYN-RECV'          => array('ds_type' => 'GAUGE',  'ds_min' => 0),
    'SYN-SENT'          => array('ds_type' => 'GAUGE',  'ds_min' => 0),
    'TIME-WAIT'          => array('ds_type' => 'GAUGE',  'ds_min' => 0),
  ),
);

// EOF
