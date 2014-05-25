<?php
/*
* Simple Faucet script by Dogenes (dogenes 'at' dr 'dot' com)
* You are completely free to use/modify this script in any way. Credit is not required.
*
* Generosity is always appreciated: DNd7tFAMpnmv1UpYV9bdpjdhXwQZbEmDC2
*/

// Modify these settings to suit your needs.

$config = array(
	// RPC settings:
	// These are the settings you put into dogecoin.conf. They allow the faucet to interact with your wallet
	"rpc_user" => "indocoinrpc",
	"rpc_password" => "dsfj9i5tprgjehrytitjlfgh5r46ytgdgert6346",
	"rpc_host" => "127.0.0.1",
	"rpc_port" => "19451",

	// MySQL settings:
	"mysql_user" => "faucet",
	"mysql_password" => "faucetbool",
	"mysql_host" => "localhost",
	"mysql_database" => "faucet", // faucet database name
	"mysql_table_prefix" => "sf_", // table prefix to use

	// DOGE values:
	"minimum_payout" => 1, // minimum DOGE to be awarded
	"maximum_payout" => 10, // maximum DOGE to be awarded
	"payout_threshold" => 250, // payout threshold, if the faucet contains less DOGE than this, display the 'dry_faucet' message
	"payout_interval" => "50m", // payout interval, the wait time for a user between payouts. Type any numerical value with either a "m" (minutes), "h" (hours), or "d" (days), attached. Examples: 50m for a 50 minute delay, 7h for a 7 hour delay, etc.

	// this option has 3 possible values: "ip_address", "doge_address", and "both". It defines what to check for when a user enters a DOGE address in order to decide whether or not to award DOGE to this user.
	// "ip_address": checks the user IP address in the payout history.
	// "doge_address": checks the user DOGE address in the payout history.
	// "both": check both the IP and DOGE address in the payout history.
	"user_check" => "both",

	"use_captcha" => true, // require the user to enter a captcha

	"captcha" => "simple-captcha", // which CAPTCHA to use, possible values are: "recaptcha", and "simple-captcha".

	// if you're using reCAPTCHA, enter your private and public key here:
	"captcha_config" => array(
		"private_key" => "PRIVATE_KEY_HERE",
		"public_key" => "PUBLIC_KEY_HERE"
		),

	// if the wallet is encrypted, enter the PASSPHRASE here. Leave it blank otherwise!
	"wallet_passphrase" => "",

	// Donation address:
	"donation_address" => "GQd3dn6SBLNUkjQ25HT3GGVPuEJ5qcZGha", // donation address to display

	// Faucet look and feel:
	"title" => "Indocoin Faucet", // page title, may be used by the template too
	"template" => "default" // template to use (see the templates directory)
	);


// Do not change this.
defined("SIMPLE_FAUCET") || header(".");
?>
