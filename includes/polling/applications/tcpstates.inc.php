<?php

if (!empty($agent_data['app']['tcpstates']))
{
  $app_id = discover_app($device, 'tcpstates');

  echo(' tcpstates statistics'.PHP_EOL);

  foreach (explode("\n", $agent_data['app']['tcpstates']) as $line)
  {
    list($item,$value) = explode(":",$line,2);
    $tcpstates_data[trim($item)] = trim($value);
  }

  rrdtool_update_ng($device, 'tcpstates', $tcpstates_data, $app_id);

  update_application($app_id, $tcpstates_data);

  unset($app_id,$tcpstates_data);
}

// EOF
