<?php

/**
 * Observium
 *
 *   This file is part of Observium.
 *
 * @package    observium
 * @subpackage graphs
 * @copyright  (C) 2006-2015 Adam Armstrong
 *
 */

$rrd_filename = get_rrd_path($device, "cbgp-" . $data['bgpPeerRemoteAddr'] . ".ipv4.vpn.rrd");

include("includes/graphs/bgp/prefixes.inc.php");

?>
