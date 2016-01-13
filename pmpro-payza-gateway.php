<?php
/*
Plugin Name: 		Payza Gateway for Paid Memberships Pro
Plugin URI:			https://github.com/SpookBookNet/pmpro-payza-gateway
Description: 		Payza Gateway for Paid Memberships Pro
Version: 			1.0
Author:				MD. Sojibul Islam
Author URI:			https://www.spookbook.net/
Text Domain:		spookbook.net
License:			GPL-2.0+
License URI:		http://www.gnu.org/licenses/gpl-2.0.txt
 
*/

define("PMPRO_PAYZAGATEWAY_DIR", dirname(__FILE__));

//load payment gateway class
require_once(dirname(__FILE__) . "/classes/class.pmprogateway_payza.php");
