<?php
#Units and Measurement
$input_unit        = $_GET['unit-to-convert-from'];
$output_unit       = $_GET['unit-to-convert-to'];
$input_measurement = $_GET['measurement'];

#SI Prefixes
$yotta = 1e24;
$zetta = 1e21;
$exa   = 1e18;
$peta  = 1e15;
$tera  = 1e12;
$giga  = 1e9;
$mega  = 1e6;
$kilo  = 1000;
$hecto = 100;
$deca  = 10;
$deci  = .1;
$centi = .01;
$milli = .001;
$micro = 1e-6;
$nano  = 1e-9;
$pico  = 1e-12;
$femto = 1e-15;
$atto  = 1e-18;
$zepto = 1e-21;
$yocto = 1e-24;

$C_to_K = 273.15;
switch ( $input_unit ) {
	case 'YK':
		switch ( $output_unit ) {
			case 'ZK':
				$temperature = $input_measurement * 1000;
				break;
			case 'EK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'PK':
				$temperature = $input_measurement * 1e9;
				break;
			case 'TK':
				$temperature = $input_measurement * 1e12;
				break;
			case 'GK':
				$temperature = $input_measurement * 1e15;
				break;
			case 'MK':
				$temperature = $input_measurement * 1e18;
				break;
			case 'kK':
				$temperature = $input_measurement * 1e21;
				break;
			case 'hK':
				$temperature = $input_measurement * 1e22;
				break;
			case 'daK':
				$temperature = $input_measurement * 1e23;
				break;
			case 'K':
				$temperature = $input_measurement * $yotta;
				break;
			case 'dK':
				$temperature = $input_measurement * 1e25;
				break;
			case 'cK':
				$temperature = $input_measurement * 1e26;
				break;
			case 'mK':
				$temperature = $input_measurement * 1e27;
				break;
			case 'μK';
				$temperature = $input_measurement * 1e30;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e33;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e36;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e39;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e42;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e45;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e48;
				break;
			case '°C':
				$temperature = $input_measurement * $yotta - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $yotta - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'ZK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1000;
				break;
			case 'EK':
				$temperature = $input_measurement * 1000;
				break;
			case 'PK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'TK':
				$temperature = $input_measurement * 1e9;
				break;
			case 'GK':
				$temperature = $input_measurement * 1e12;
				break;
			case 'MK':
				$temperature = $input_measurement * 1e15;
				break;
			case 'kK':
				$temperature = $input_measurement * 1e18;
				break;
			case 'hK':
				$temperature = $input_measurement * 1e19;
				break;
			case 'daK':
				$temperature = $input_measurement * 1e20;
				break;
			case 'K':
				$temperature = $input_measurement * $zetta;
				break;
			case 'dK':
				$temperature = $input_measurement * 1e22;
				break;
			case 'cK':
				$temperature = $input_measurement * 1e23;
				break;
			case 'mK':
				$temperature = $input_measurement * 1e24;
				break;
			case 'μK';
				$temperature = $input_measurement * 1e27;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e30;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e33;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e36;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e39;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e42;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e45;
				break;
			case '°C':
				$temperature = $input_measurement * $zetta - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $zetta - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'EK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1000;
				break;
			case 'PK':
				$temperature = $input_measurement * 1000;
				break;
			case 'TK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'GK':
				$temperature = $input_measurement * 1e9;
				break;
			case 'MK':
				$temperature = $input_measurement * 1e12;
				break;
			case 'kK':
				$temperature = $input_measurement * 1e15;
				break;
			case 'hK':
				$temperature = $input_measurement * 1e16;
				break;
			case 'daK':
				$temperature = $input_measurement * 1e17;
				break;
			case 'K':
				$temperature = $input_measurement * $exa;
				break;
			case 'dK':
				$temperature = $input_measurement * 1e19;
				break;
			case 'cK':
				$temperature = $input_measurement * 1e20;
				break;
			case 'mK':
				$temperature = $input_measurement * 1e21;
				break;
			case 'μK';
				$temperature = $input_measurement * 1e24;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e27;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e30;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e33;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e36;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e39;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e42;
				break;
			case '°C':
				$temperature = $input_measurement * $exa - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $exa - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'PK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e9;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'EK':
				$temperature = $input_measurement / 1000;
				break;
			case 'TK':
				$temperature = $input_measurement * 1000;
				break;
			case 'GK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'MK':
				$temperature = $input_measurement * 1e9;
				break;
			case 'kK':
				$temperature = $input_measurement * 1e12;
				break;
			case 'hK':
				$temperature = $input_measurement * 1e13;
				break;
			case 'daK':
				$temperature = $input_measurement * 1e14;
				break;
			case 'K':
				$temperature = $input_measurement * $peta;
				break;
			case 'dK':
				$temperature = $input_measurement * 1e16;
				break;
			case 'cK':
				$temperature = $input_measurement * 1e17;
				break;
			case 'mK':
				$temperature = $input_measurement * 1e18;
				break;
			case 'μK';
				$temperature = $input_measurement * 1e21;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e24;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e27;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e30;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e33;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e36;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e42;
				break;
			case '°C':
				$temperature = $input_measurement * $peta - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $peta - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'TK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e12;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e9;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'PK':
				$temperature = $input_measurement / 1000;
				break;
			case 'GK':
				$temperature = $input_measurement * 1000;
				break;
			case 'MK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'kK':
				$temperature = $input_measurement * 1e9;
				break;
			case 'hK':
				$temperature = $input_measurement * 1e10;
				break;
			case 'daK':
				$temperature = $input_measurement * 1e11;
				break;
			case 'K':
				$temperature = $input_measurement * $tera;
				break;
			case 'dK':
				$temperature = $input_measurement * 1e13;
				break;
			case 'cK':
				$temperature = $input_measurement * 1e14;
				break;
			case 'mK':
				$temperature = $input_measurement * 1e15;
				break;
			case 'μK';
				$temperature = $input_measurement * 1e18;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e21;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e24;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e27;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e30;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e33;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e36;
				break;
			case '°C':
				$temperature = $input_measurement * $tera - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $tera - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'GK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e15;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e12;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e9;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'TK':
				$temperature = $input_measurement / 1000;
				break;
			case 'MK':
				$temperature = $input_measurement * 1000;
				break;
			case 'kK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'hK':
				$temperature = $input_measurement * 1e7;
				break;
			case 'daK':
				$temperature = $input_measurement * 1e8;
				break;
			case 'K':
				$temperature = $input_measurement * $giga;
				break;
			case 'dK':
				$temperature = $input_measurement * 1e10;
				break;
			case 'cK':
				$temperature = $input_measurement * 1e11;
				break;
			case 'mK':
				$temperature = $input_measurement * 1e12;
				break;
			case 'μK';
				$temperature = $input_measurement * 1e15;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e18;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e21;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e24;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e27;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e30;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e33;
				break;
			case '°C':
				$temperature = $input_measurement * $giga - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $giga - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'MK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e18;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e15;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e12;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e9;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'GK':
				$temperature = $input_measurement / 1000;
				break;
			case 'kK':
				$temperature = $input_measurement * 1000;
				break;
			case 'hK':
				$temperature = $input_measurement * 10000;
				break;
			case 'daK':
				$temperature = $input_measurement * 100000;
				break;
			case 'K':
				$temperature = $input_measurement * $mega;
				break;
			case 'dK':
				$temperature = $input_measurement * 1e7;
				break;
			case 'cK':
				$temperature = $input_measurement * 1e8;
				break;
			case 'mK':
				$temperature = $input_measurement * 1e9;
				break;
			case 'μK';
				$temperature = $input_measurement * 1e12;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e15;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e18;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e21;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e24;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e27;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e30;
				break;
			case '°C':
				$temperature = $input_measurement * $mega - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $mega - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'kK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e21;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e18;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e15;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e12;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e9;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'MK':
				$temperature = $input_measurement / 1000;
				break;
			case 'hK':
				$temperature = $input_measurement * 10;
				break;
			case 'daK':
				$temperature = $input_measurement * 100;
				break;
			case 'K':
				$temperature = $input_measurement * $kilo;
				break;
			case 'dK':
				$temperature = $input_measurement * 10000;
				break;
			case 'cK':
				$temperature = $input_measurement * 100000;
				break;
			case 'mK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'μK';
				$temperature = $input_measurement * 1e9;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e12;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e15;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e18;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e21;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e24;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e27;
				break;
			case '°C':
				$temperature = $input_measurement * $kilo - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $kilo - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'hK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e22;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e19;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e16;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e13;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e10;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e7;
				break;
			case 'MK':
				$temperature = $input_measurement / 10000;
				break;
			case 'Km':
				$temperature = $input_measurement / 10;
				break;
			case 'daK':
				$temperature = $input_measurement * 10;
				break;
			case 'K':
				$temperature = $input_measurement * $hecto;
				break;
			case 'dK':
				$temperature = $input_measurement * 1000;
				break;
			case 'cK':
				$temperature = $input_measurement * 10000;
				break;
			case 'mK':
				$temperature = $input_measurement * 100000;
				break;
			case 'μK';
				$temperature = $input_measurement * 1e8;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e11;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e14;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e17;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e20;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e23;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e26;
				break;
			case '°C':
				$temperature = $input_measurement * $hecto - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $hecto - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'daK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e23;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e20;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e17;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e14;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e11;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e8;
				break;
			case 'MK':
				$temperature = $input_measurement / 100000;
				break;
			case 'kK':
				$temperature = $input_measurement / 100;
				break;
			case 'hK':
				$temperature = $input_measurement / 10;
				break;
			case 'K':
				$temperature = $input_measurement * $deca;
				break;
			case 'dK':
				$temperature = $input_measurement * 100;
				break;
			case 'cK':
				$temperature = $input_measurement * 1000;
				break;
			case 'mK':
				$temperature = $input_measurement * 10000;
				break;
			case 'μK';
				$temperature = $input_measurement * 1e7;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e10;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e13;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e16;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e19;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e22;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e25;
				break;
			case '°C':
				$temperature = $input_measurement * $deca - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $deca - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'dK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e25;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e22;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e19;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e16;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e13;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e10;
				break;
			case 'MK':
				$temperature = $input_measurement / 1e7;
				break;
			case 'kK':
				$temperature = $input_measurement / 10000;
				break;
			case 'hK':
				$temperature = $input_measurement / 1000;
				break;
			case 'daK':
				$temperature = $input_measurement / 100;
				break;
			case 'K':
				$temperature = $input_measurement * $deci;
				break;
			case 'cK':
				$temperature = $input_measurement * 10;
				break;
			case 'mK':
				$temperature = $input_measurement * 100;
				break;
			case 'μK';
				$temperature = $input_measurement * 10000;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e8;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e11;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e14;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e17;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e20;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e23;
				break;
			case '°C':
				$temperature = $input_measurement * $deci - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $deci - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'cK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e26;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e23;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e20;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e17;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e14;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e11;
				break;
			case 'MK':
				$temperature = $input_measurement / 1e8;
				break;
			case 'kK':
				$temperature = $input_measurement / 100000;
				break;
			case 'hK':
				$temperature = $input_measurement / 10000;
				break;
			case 'daK':
				$temperature = $input_measurement / 1000;
				break;
			case 'K':
				$temperature = $input_measurement * $centi;
				break;
			case 'dK':
				$temperature = $input_measurement / 10;
				break;
			case 'mK':
				$temperature = $input_measurement * 10;
				break;
			case 'μK';
				$temperature = $input_measurement * 10000;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e7;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e10;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e13;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e16;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e19;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e22;
				break;
			case '°C':
				$temperature = $input_measurement * $centi - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $centi - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'mK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e27;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e24;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e21;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e18;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e15;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e12;
				break;
			case 'MK':
				$temperature = $input_measurement / 1e9;
				break;
			case 'kK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'hK':
				$temperature = $input_measurement / 100000;
				break;
			case 'daK':
				$temperature = $input_measurement / 10000;
				break;
			case 'K':
				$temperature = $input_measurement * $milli;
				break;
			case 'dK':
				$temperature = $input_measurement / 100;
				break;
			case 'cK':
				$temperature = $input_measurement / 10;
				break;
			case 'μK';
				$temperature = $input_measurement * 1000;
				break;
			case 'nK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e9;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e12;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e15;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e18;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e21;
				break;
			case '°C':
				$temperature = $input_measurement * $milli - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $milli - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'μK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e30;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e27;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e24;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e21;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e18;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e15;
				break;
			case 'MK':
				$temperature = $input_measurement / 1e12;
				break;
			case 'kK':
				$temperature = $input_measurement / 1e9;
				break;
			case 'hK':
				$temperature = $input_measurement / 1e8;
				break;
			case 'daK':
				$temperature = $input_measurement / 1e7;
				break;
			case 'K':
				$temperature = $input_measurement * $micro;
				break;
			case 'dK':
				$temperature = $input_measurement / 100000;
				break;
			case 'cK':
				$temperature = $input_measurement / 10000;
				break;
			case 'mK';
				$temperature = $input_measurement / 1000;
				break;
			case 'nK':
				$temperature = $input_measurement * 1000;
				break;
			case 'pK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e9;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e12;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e15;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e18;
				break;
			case '°C':
				$temperature = $input_measurement * $micro - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $micro - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'nK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e33;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e30;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e27;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e24;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e21;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e18;
				break;
			case 'MK':
				$temperature = $input_measurement / 1e15;
				break;
			case 'kK':
				$temperature = $input_measurement / 1e12;
				break;
			case 'hK':
				$temperature = $input_measurement / 1e11;
				break;
			case 'daK':
				$temperature = $input_measurement / 1e10;
				break;
			case 'K':
				$temperature = $input_measurement * $nano;
				break;
			case 'dK':
				$temperature = $input_measurement / 1e8;
				break;
			case 'cK':
				$temperature = $input_measurement / 1e7;
				break;
			case 'mK';
				$temperature = $input_measurement / 1e6;
				break;
			case 'μK':
				$temperature = $input_measurement / 1000;
				break;
			case 'pK':
				$temperature = $input_measurement * 1000;
				break;
			case 'fK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e9;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e12;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e15;
				break;
			case '°C':
				$temperature = $input_measurement * $nano - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $nano - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'pK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e36;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e33;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e30;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e27;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e24;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e21;
				break;
			case 'MK':
				$temperature = $input_measurement / 1e18;
				break;
			case 'kK':
				$temperature = $input_measurement / 1e15;
				break;
			case 'hK':
				$temperature = $input_measurement / 1e14;
				break;
			case 'daK':
				$temperature = $input_measurement / 1e13;
				break;
			case 'K':
				$temperature = $input_measurement * $pico;
				break;
			case 'dK':
				$temperature = $input_measurement / 1e11;
				break;
			case 'cK':
				$temperature = $input_measurement / 1e10;
				break;
			case 'mK';
				$temperature = $input_measurement / 1e9;
				break;
			case 'μK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'nK':
				$temperature = $input_measurement / 1000;
				break;
			case 'fK':
				$temperature = $input_measurement * 1000;
				break;
			case 'aK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e9;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e12;
				break;
			case '°C':
				$temperature = $input_measurement * $pico - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $pico - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'fK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e39;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e36;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e33;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e30;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e27;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e24;
				break;
			case 'MK':
				$temperature = $input_measurement / 1e21;
				break;
			case 'kK':
				$temperature = $input_measurement / 1e18;
				break;
			case 'hK':
				$temperature = $input_measurement / 1e17;
				break;
			case 'daK':
				$temperature = $input_measurement / 1e16;
				break;
			case 'K':
				$temperature = $input_measurement * $femto;
				break;
			case 'dK':
				$temperature = $input_measurement / 1e14;
				break;
			case 'cK':
				$temperature = $input_measurement / 1e13;
				break;
			case 'mK';
				$temperature = $input_measurement / 1e12;
				break;
			case 'μK':
				$temperature = $input_measurement / 1e9;
				break;
			case 'nK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'pK':
				$temperature = $input_measurement / 1000;
				break;
			case 'aK':
				$temperature = $input_measurement * 1000;
				break;
			case 'zK':
				$temperature = $input_measurement * 1e6;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e9;
				break;
			case '°C':
				$temperature = $input_measurement * $femto - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $femto - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'aK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e42;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e39;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e36;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e33;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e30;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e27;
				break;
			case 'MK':
				$temperature = $input_measurement / 1e24;
				break;
			case 'kK':
				$temperature = $input_measurement / 1e21;
				break;
			case 'hK':
				$temperature = $input_measurement / 1e20;
				break;
			case 'daK':
				$temperature = $input_measurement / 1e19;
				break;
			case 'K':
				$temperature = $input_measurement * $atto;
				break;
			case 'dK':
				$temperature = $input_measurement / 1e17;
				break;
			case 'cK':
				$temperature = $input_measurement / 1e16;
				break;
			case 'mK';
				$temperature = $input_measurement / 1e15;
				break;
			case 'μK':
				$temperature = $input_measurement / 1e12;
				break;
			case 'nK':
				$temperature = $input_measurement / 1e9;
				break;
			case 'pK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'fK':
				$temperature = $input_measurement / 1000;
				break;
			case 'zK':
				$temperature = $input_measurement * 1000;
				break;
			case 'yK':
				$temperature = $input_measurement * 1e6;
				break;
			case '°C':
				$temperature = $input_measurement * $atto - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $atto - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'zK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e45;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e42;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e39;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e36;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e33;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e30;
				break;
			case 'MK':
				$temperature = $input_measurement / 1e27;
				break;
			case 'kK':
				$temperature = $input_measurement / 1e24;
				break;
			case 'hK':
				$temperature = $input_measurement / 1e23;
				break;
			case 'daK':
				$temperature = $input_measurement / 1e22;
				break;
			case 'K':
				$temperature = $input_measurement * $zepto;
				break;
			case 'dK':
				$temperature = $input_measurement / 1e20;
				break;
			case 'cK':
				$temperature = $input_measurement / 1e19;
				break;
			case 'mK';
				$temperature = $input_measurement / 1e18;
				break;
			case 'μK':
				$temperature = $input_measurement / 1e15;
				break;
			case 'nK':
				$temperature = $input_measurement / 1e12;
				break;
			case 'pK':
				$temperature = $input_measurement / 1e9;
				break;
			case 'fK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'aK':
				$temperature = $input_measurement / 1000;
				break;
			case 'yK':
				$temperature = $input_measurement * 1000;
				break;
			case '°C':
				$temperature = $input_measurement * $zepto - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $zepto - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case 'yK':
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / 1e48;
				break;
			case 'ZK':
				$temperature = $input_measurement / 1e45;
				break;
			case 'EK':
				$temperature = $input_measurement / 1e42;
				break;
			case 'PK':
				$temperature = $input_measurement / 1e39;
				break;
			case 'TK':
				$temperature = $input_measurement / 1e36;
				break;
			case 'GK':
				$temperature = $input_measurement / 1e33;
				break;
			case 'MK':
				$temperature = $input_measurement / 1e30;
				break;
			case 'kK':
				$temperature = $input_measurement / 1e27;
				break;
			case 'hK':
				$temperature = $input_measurement / 1e26;
				break;
			case 'daK':
				$temperature = $input_measurement / 1e25;
				break;
			case 'K':
				$temperature = $input_measurement * $yocto;
				break;
			case 'dK':
				$temperature = $input_measurement / 1e23;
				break;
			case 'cK':
				$temperature = $input_measurement / 1e22;
				break;
			case 'mK';
				$temperature = $input_measurement / 1e21;
				break;
			case 'μK':
				$temperature = $input_measurement / 1e18;
				break;
			case 'nK':
				$temperature = $input_measurement / 1e15;
				break;
			case 'pK':
				$temperature = $input_measurement / 1e12;
				break;
			case 'fK':
				$temperature = $input_measurement / 1e9;
				break;
			case 'aK':
				$temperature = $input_measurement / 1e6;
				break;
			case 'zK':
				$temperature = $input_measurement / 1000;
				break;
			case '°C':
				$temperature = $input_measurement * $yocto - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement * $yocto - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case '°C':
		switch ( $output_unit ) {
			case '°F':
				$temperature = $input_measurement * 9/5 + 32;
				break;
			case 'YK':
				$temperature = ($input_measurement + $C_to_K) / $yotta;
				break;
			case 'ZK':
				$temperature = ($input_measurement + $C_to_K) / $zetta;
				break;
			case 'EK':
				$temperature = ($input_measurement + $C_to_K) / $exa;
				break;
			case 'PK':
				$temperature = ($input_measurement + $C_to_K) / $peta;
				break;
			case 'TK':
				$temperature = ($input_measurement + $C_to_K) / $tera;
				break;
			case 'GK':
				$temperature = ($input_measurement + $C_to_K) / $giga;
				break;
			case 'MK':
				$temperature = ($input_measurement + $C_to_K) / $mega;
				break;
			case 'kK':
				$temperature = ($input_measurement + $C_to_K) / $kilo;
				break;
			case 'hK':
				$temperature = ($input_measurement + $C_to_K) / $hecto;
				break;
			case 'daK':
				$temperature = ($input_measurement + $C_to_K) / $deca;
				break;
			case 'K':
				$temperature = $input_measurement + $C_to_K;
				break;
			case 'dK':
				$temperature = ($input_measurement + $C_to_K) / $deci;
				break;
			case 'cK':
				$temperature = ($input_measurement + $C_to_K) / $centi;
				break;
			case 'mK':
				$temperature = ($input_measurement + $C_to_K) / $milli;
				break;
			case 'μK':
				$temperature = ($input_measurement + $C_to_K) / $micro;
				break;
			case 'nK':
				$temperature = ($input_measurement + $C_to_K) / $nano;
				break;
			case 'pK':
				$temperature = ($input_measurement + $C_to_K) / $pico;
				break;
			case 'fK':
				$temperature = ($input_measurement + $C_to_K) / $femto;
				break;
			case 'aK':
				$temperature = ($input_measurement + $C_to_K) / $atto;
				break;
			case 'zK':
				$temperature = ($input_measurement + $C_to_K) / $zepto;
				break;
			case 'yK':
				$temperature = ($input_measurement + $C_to_K) / $yocto;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	case '°F':
		switch ( $output_unit ) {
			case '°C':
				$temperature = ($input_measurement - 32) * 5/9;
				break;
			case 'YK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $yotta;
				break;
			case 'ZK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $zetta;
				break;
			case 'EK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $exa;
				break;
			case 'PK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $peta;
				break;
			case 'TK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $tera;
				break;
			case 'GK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $giga;
				break;
			case 'MK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $mega;
				break;
			case 'kK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $kilo;
				break;
			case 'hK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $hecto;
				break;
			case 'daK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $deca;
				break;
			case 'K':
				$temperature = ($input_measurement - 32) * 5/9 + $C_to_K;
				break;
			case 'dK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $deci;
				break;
			case 'cK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $centi;
				break;
			case 'mK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $milli;
				break;
			case 'μK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $micro;
				break;
			case 'nK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $nano;
				break;
			case 'pK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $pico;
				break;
			case 'fK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $femto;
				break;
			case 'aK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $atto;
				break;
			case 'zK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $zepto;
				break;
			case 'yK':
				$temperature = (($input_measurement - 32) * 5/9 + $C_to_K) / $yocto;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
	default:
		switch ( $output_unit ) {
			case 'YK':
				$temperature = $input_measurement / $yotta;
				break;
			case 'ZK':
				$temperature = $input_measurement / $zetta;
				break;
			case 'EK':
				$temperature = $input_measurement / $exa;
				break;
			case 'PK':
				$temperature = $input_measurement / $peta;
				break;
			case 'TK':
				$temperature = $input_measurement / $tera;
				break;
			case 'GK':
				$temperature = $input_measurement / $giga;
				break;
			case 'MK':
				$temperature = $input_measurement / $mega;
				break;
			case 'kK':
				$temperature = $input_measurement / $kilo;
				break;
			case 'hK':
				$temperature = $input_measurement / $hecto;
				break;
			case 'daK':
				$temperature = $input_measurement / $deca;
				break;
			case 'dK':
				$temperature = $input_measurement / $deci;
				break;
			case 'cK':
				$temperature = $input_measurement / $centi;
				break;
			case 'mK':
				$temperature = $input_measurement / $milli;
				break;
			case 'μK';
				$temperature = $input_measurement / $micro;
				break;
			case 'nK':
				$temperature = $input_measurement / $nano;
				break;
			case 'pK':
				$temperature = $input_measurement / $pico;
				break;
			case 'fK':
				$temperature = $input_measurement / $femto;
				break;
			case 'aK':
				$temperature = $input_measurement / $atto;
				break;
			case 'zK':
				$temperature = $input_measurement / $zepto;
				break;
			case 'yK':
				$temperature = $input_measurement / $yocto;
				break;
			case '°C':
				$temperature = $input_measurement - $C_to_K;
				break;
			case '°F':
				$temperature = ($input_measurement - $C_to_K) * 9/5 + 32;
				break;
			default:
				$temperature = $input_measurement;
				break;
		}
		break;
}
