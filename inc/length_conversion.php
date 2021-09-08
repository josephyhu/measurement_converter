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

$in_to_cm = 2.54;
$ft_to_in = 12;
$yd_to_ft = 3;
$mi_to_yd = 1760;
switch ( $input_unit ) {
	case 'Ym':
		switch ( $output_unit ) {
			case 'Zm':
				$length = $input_measurement * 1000;
				break;
			case 'Em':
				$length = $input_measurement * 1e6;
				break;
			case 'Pm':
				$length = $input_measurement * 1e9;
				break;
			case 'Tm':
				$length = $input_measurement * 1e12;
				break;
			case 'Gm':
				$length = $input_measurement * 1e15;
				break;
			case 'Mm':
				$length = $input_measurement * 1e18;
				break;
			case 'km':
				$length = $input_measurement * 1e21;
				break;
			case 'hm':
				$length = $input_measurement * 1e22;
				break;
			case 'dam':
				$length = $input_measurement * 1e23;
				break;
			case 'm':
				$length = $input_measurement * 1e24;
				break;
			case 'dm':
				$length = $input_measurement * 1e25;
				break;
			case 'cm':
				$length = $input_measurement * 1e26;
				break;
			case 'mm':
				$length = $input_measurement * 1e27;
				break;
			case 'μm';
				$length = $input_measurement * 1e30;
				break;
			case 'nm':
				$length = $input_measurement * 1e33;
				break;
			case 'pm':
				$length = $input_measurement * 1e36;
				break;
			case 'fm':
				$length = $input_measurement * 1e39;
				break;
			case 'am':
				$length = $input_measurement * 1e42;
				break;
			case 'zm':
				$length = $input_measurement * 1e45;
				break;
			case 'ym':
				$length = $input_measurement * 1e48;
				break;
			case 'mi':
				$length = $input_measurement * 1e26 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement * 1e26 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement * 1e26 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement * 1e26 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'Zm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1000;
				break;
			case 'Em':
				$length = $input_measurement * 1000;
				break;
			case 'Pm':
				$length = $input_measurement * 1e6;
				break;
			case 'Tm':
				$length = $input_measurement * 1e9;
				break;
			case 'Gm':
				$length = $input_measurement * 1e12;
				break;
			case 'Mm':
				$length = $input_measurement * 1e15;
				break;
			case 'km':
				$length = $input_measurement * 1e18;
				break;
			case 'hm':
				$length = $input_measurement * 1e19;
				break;
			case 'dam':
				$length = $input_measurement * 1e20;
				break;
			case 'm':
				$length = $input_measurement * 1e21;
				break;
			case 'dm':
				$length = $input_measurement * 1e22;
				break;
			case 'cm':
				$length = $input_measurement * 1e23;
				break;
			case 'mm':
				$length = $input_measurement * 1e24;
				break;
			case 'μm';
				$length = $input_measurement * 1e27;
				break;
			case 'nm':
				$length = $input_measurement * 1e30;
				break;
			case 'pm':
				$length = $input_measurement * 1e33;
				break;
			case 'fm':
				$length = $input_measurement * 1e36;
				break;
			case 'am':
				$length = $input_measurement * 1e39;
				break;
			case 'zm':
				$length = $input_measurement * 1e42;
				break;
			case 'ym':
				$length = $input_measurement * 1e45;
				break;
			case 'mi':
				$length = $input_measurement * 1e23 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement * 1e23 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement * 1e23 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement * 1e23 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'Em':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e6;
				break;
			case 'Zm':
				$length = $input_measurement / 1000;
				break;
			case 'Pm':
				$length = $input_measurement * 1000;
				break;
			case 'Tm':
				$length = $input_measurement * 1e6;
				break;
			case 'Gm':
				$length = $input_measurement * 1e9;
				break;
			case 'Mm':
				$length = $input_measurement * 1e12;
				break;
			case 'km':
				$length = $input_measurement * 1e15;
				break;
			case 'hm':
				$length = $input_measurement * 1e16;
				break;
			case 'dam':
				$length = $input_measurement * 1e17;
				break;
			case 'm':
				$length = $input_measurement * 1e18;
				break;
			case 'dm':
				$length = $input_measurement * 1e19;
				break;
			case 'cm':
				$length = $input_measurement * 1e20;
				break;
			case 'mm':
				$length = $input_measurement * 1e21;
				break;
			case 'μm';
				$length = $input_measurement * 1e24;
				break;
			case 'nm':
				$length = $input_measurement * 1e27;
				break;
			case 'pm':
				$length = $input_measurement * 1e30;
				break;
			case 'fm':
				$length = $input_measurement * 1e33;
				break;
			case 'am':
				$length = $input_measurement * 1e36;
				break;
			case 'zm':
				$length = $input_measurement * 1e39;
				break;
			case 'ym':
				$length = $input_measurement * 1e42;
				break;
			case 'mi':
				$length = $input_measurement * 1e20 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement * 1e20 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement * 1e20 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement * 1e20 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'Pm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e9;
				break;
			case 'Zm':
				$length = $input_measurement / 1e6;
				break;
			case 'Em':
				$length = $input_measurement / 1000;
				break;
			case 'Tm':
				$length = $input_measurement * 1000;
				break;
			case 'Gm':
				$length = $input_measurement * 1e6;
				break;
			case 'Mm':
				$length = $input_measurement * 1e9;
				break;
			case 'km':
				$length = $input_measurement * 1e12;
				break;
			case 'hm':
				$length = $input_measurement * 1e13;
				break;
			case 'dam':
				$length = $input_measurement * 1e14;
				break;
			case 'm':
				$length = $input_measurement * 1e15;
				break;
			case 'dm':
				$length = $input_measurement * 1e16;
				break;
			case 'cm':
				$length = $input_measurement * 1e17;
				break;
			case 'mm':
				$length = $input_measurement * 1e18;
				break;
			case 'μm';
				$length = $input_measurement * 1e21;
				break;
			case 'nm':
				$length = $input_measurement * 1e24;
				break;
			case 'pm':
				$length = $input_measurement * 1e27;
				break;
			case 'fm':
				$length = $input_measurement * 1e30;
				break;
			case 'am':
				$length = $input_measurement * 1e33;
				break;
			case 'zm':
				$length = $input_measurement * 1e36;
				break;
			case 'ym':
				$length = $input_measurement * 1e42;
				break;
			case 'mi':
				$length = $input_measurement * 1e17 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement * 1e17 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement * 1e17 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement * 1e17 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'Tm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e12;
				break;
			case 'Zm':
				$length = $input_measurement / 1e9;
				break;
			case 'Em':
				$length = $input_measurement / 1e6;
				break;
			case 'Pm':
				$length = $input_measurement / 1000;
				break;
			case 'Gm':
				$length = $input_measurement * 1000;
				break;
			case 'Mm':
				$length = $input_measurement * 1e6;
				break;
			case 'km':
				$length = $input_measurement * 1e9;
				break;
			case 'hm':
				$length = $input_measurement * 1e10;
				break;
			case 'dam':
				$length = $input_measurement * 1e11;
				break;
			case 'm':
				$length = $input_measurement * 1e12;
				break;
			case 'dm':
				$length = $input_measurement * 1e13;
				break;
			case 'cm':
				$length = $input_measurement * 1e14;
				break;
			case 'mm':
				$length = $input_measurement * 1e15;
				break;
			case 'μm';
				$length = $input_measurement * 1e18;
				break;
			case 'nm':
				$length = $input_measurement * 1e21;
				break;
			case 'pm':
				$length = $input_measurement * 1e24;
				break;
			case 'fm':
				$length = $input_measurement * 1e27;
				break;
			case 'am':
				$length = $input_measurement * 1e30;
				break;
			case 'zm':
				$length = $input_measurement * 1e33;
				break;
			case 'ym':
				$length = $input_measurement * 1e36;
				break;
			case 'mi':
				$length = $input_measurement * 1e14 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement * 1e14 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement * 1e14 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement * 1e14 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'Gm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e15;
				break;
			case 'Zm':
				$length = $input_measurement / 1e12;
				break;
			case 'Em':
				$length = $input_measurement / 1e9;
				break;
			case 'Pm':
				$length = $input_measurement / 1e6;
				break;
			case 'Tm':
				$length = $input_measurement / 1000;
				break;
			case 'Mm':
				$length = $input_measurement * 1000;
				break;
			case 'km':
				$length = $input_measurement * 1e6;
				break;
			case 'hm':
				$length = $input_measurement * 1e7;
				break;
			case 'dam':
				$length = $input_measurement * 1e8;
				break;
			case 'm':
				$length = $input_measurement * 1e9;
				break;
			case 'dm':
				$length = $input_measurement * 1e10;
				break;
			case 'cm':
				$length = $input_measurement * 1e11;
				break;
			case 'mm':
				$length = $input_measurement * 1e12;
				break;
			case 'μm';
				$length = $input_measurement * 1e15;
				break;
			case 'nm':
				$length = $input_measurement * 1e18;
				break;
			case 'pm':
				$length = $input_measurement * 1e21;
				break;
			case 'fm':
				$length = $input_measurement * 1e24;
				break;
			case 'am':
				$length = $input_measurement * 1e27;
				break;
			case 'zm':
				$length = $input_measurement * 1e30;
				break;
			case 'ym':
				$length = $input_measurement * 1e33;
				break;
			case 'mi':
				$length = $input_measurement * 1e11 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement * 1e11 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement * 1e11 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement * 1e11 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'Mm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e18;
				break;
			case 'Zm':
				$length = $input_measurement / 1e15;
				break;
			case 'Em':
				$length = $input_measurement / 1e12;
				break;
			case 'Pm':
				$length = $input_measurement / 1e9;
				break;
			case 'Tm':
				$length = $input_measurement / 1e6;
				break;
			case 'Gm':
				$length = $input_measurement / 1000;
				break;
			case 'km':
				$length = $input_measurement * 1000;
				break;
			case 'hm':
				$length = $input_measurement * 10000;
				break;
			case 'dam':
				$length = $input_measurement * 100000;
				break;
			case 'm':
				$length = $input_measurement * 1e6;
				break;
			case 'dm':
				$length = $input_measurement * 1e7;
				break;
			case 'cm':
				$length = $input_measurement * 1e8;
				break;
			case 'mm':
				$length = $input_measurement * 1e9;
				break;
			case 'μm';
				$length = $input_measurement * 1e12;
				break;
			case 'nm':
				$length = $input_measurement * 1e15;
				break;
			case 'pm':
				$length = $input_measurement * 1e18;
				break;
			case 'fm':
				$length = $input_measurement * 1e21;
				break;
			case 'am':
				$length = $input_measurement * 1e24;
				break;
			case 'zm':
				$length = $input_measurement * 1e27;
				break;
			case 'ym':
				$length = $input_measurement * 1e30;
				break;
			case 'mi':
				$length = $input_measurement * 1e8 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement * 1e8 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement * 1e8 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement * 1e8 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'km':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e21;
				break;
			case 'Zm':
				$length = $input_measurement / 1e18;
				break;
			case 'Em':
				$length = $input_measurement / 1e15;
				break;
			case 'Pm':
				$length = $input_measurement / 1e12;
				break;
			case 'Tm':
				$length = $input_measurement / 1e9;
				break;
			case 'Gm':
				$length = $input_measurement / 1e6;
				break;
			case 'Mm':
				$length = $input_measurement / 1000;
				break;
			case 'hm':
				$length = $input_measurement * 10;
				break;
			case 'dam':
				$length = $input_measurement * 100;
				break;
			case 'm':
				$length = $input_measurement * 1000;
				break;
			case 'dm':
				$length = $input_measurement * 10000;
				break;
			case 'cm':
				$length = $input_measurement * 100000;
				break;
			case 'mm':
				$length = $input_measurement * 1e6;
				break;
			case 'μm';
				$length = $input_measurement * 1e9;
				break;
			case 'nm':
				$length = $input_measurement * 1e12;
				break;
			case 'pm':
				$length = $input_measurement * 1e15;
				break;
			case 'fm':
				$length = $input_measurement * 1e18;
				break;
			case 'am':
				$length = $input_measurement * 1e21;
				break;
			case 'zm':
				$length = $input_measurement * 1e24;
				break;
			case 'ym':
				$length = $input_measurement * 1e27;
				break;
			case 'mi':
				$length = $input_measurement * 100000 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement * 100000 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement * 100000 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement * 100000 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'hm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e22;
				break;
			case 'Zm':
				$length = $input_measurement / 1e19;
				break;
			case 'Em':
				$length = $input_measurement / 1e16;
				break;
			case 'Pm':
				$length = $input_measurement / 1e13;
				break;
			case 'Tm':
				$length = $input_measurement / 1e10;
				break;
			case 'Gm':
				$length = $input_measurement / 1e7;
				break;
			case 'Mm':
				$length = $input_measurement / 10000;
				break;
			case 'Km':
				$length = $input_measurement / 10;
				break;
			case 'dam':
				$length = $input_measurement * 10;
				break;
			case 'm':
				$length = $input_measurement * 100;
				break;
			case 'dm':
				$length = $input_measurement * 1000;
				break;
			case 'cm':
				$length = $input_measurement * 10000;
				break;
			case 'mm':
				$length = $input_measurement * 100000;
				break;
			case 'μm';
				$length = $input_measurement * 1e8;
				break;
			case 'nm':
				$length = $input_measurement * 1e11;
				break;
			case 'pm':
				$length = $input_measurement * 1e14;
				break;
			case 'fm':
				$length = $input_measurement * 1e17;
				break;
			case 'am':
				$length = $input_measurement * 1e20;
				break;
			case 'zm':
				$length = $input_measurement * 1e23;
				break;
			case 'ym':
				$length = $input_measurement * 1e26;
				break;
			case 'mi':
				$length = $input_measurement * 10000 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement * 10000 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement * 10000 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement * 10000 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'dam':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e23;
				break;
			case 'Zm':
				$length = $input_measurement / 1e20;
				break;
			case 'Em':
				$length = $input_measurement / 1e17;
				break;
			case 'Pm':
				$length = $input_measurement / 1e14;
				break;
			case 'Tm':
				$length = $input_measurement / 1e11;
				break;
			case 'Gm':
				$length = $input_measurement / 1e8;
				break;
			case 'Mm':
				$length = $input_measurement / 100000;
				break;
			case 'km':
				$length = $input_measurement / 100;
				break;
			case 'hm':
				$length = $input_measurement / 10;
				break;
			case 'm':
				$length = $input_measurement * 10;
				break;
			case 'dm':
				$length = $input_measurement * 100;
				break;
			case 'cm':
				$length = $input_measurement * 1000;
				break;
			case 'mm':
				$length = $input_measurement * 10000;
				break;
			case 'μm';
				$length = $input_measurement * 1e7;
				break;
			case 'nm':
				$length = $input_measurement * 1e10;
				break;
			case 'pm':
				$length = $input_measurement * 1e13;
				break;
			case 'fm':
				$length = $input_measurement * 1e16;
				break;
			case 'am':
				$length = $input_measurement * 1e19;
				break;
			case 'zm':
				$length = $input_measurement * 1e22;
				break;
			case 'ym':
				$length = $input_measurement * 1e25;
				break;
			case 'mi':
				$length = $input_measurement * 1000 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement * 1000 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement * 1000 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement * 1000 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'dm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e25;
				break;
			case 'Zm':
				$length = $input_measurement / 1e22;
				break;
			case 'Em':
				$length = $input_measurement / 1e19;
				break;
			case 'Pm':
				$length = $input_measurement / 1e16;
				break;
			case 'Tm':
				$length = $input_measurement / 1e13;
				break;
			case 'Gm':
				$length = $input_measurement / 1e10;
				break;
			case 'Mm':
				$length = $input_measurement / 1e7;
				break;
			case 'km':
				$length = $input_measurement / 10000;
				break;
			case 'hm':
				$length = $input_measurement / 1000;
				break;
			case 'dam':
				$length = $input_measurement / 100;
				break;
			case 'm':
				$length = $input_measurement / 10;
				break;
			case 'cm':
				$length = $input_measurement * 10;
				break;
			case 'mm':
				$length = $input_measurement * 100;
				break;
			case 'μm';
				$length = $input_measurement * 10000;
				break;
			case 'nm':
				$length = $input_measurement * 1e8;
				break;
			case 'pm':
				$length = $input_measurement * 1e11;
				break;
			case 'fm':
				$length = $input_measurement * 1e14;
				break;
			case 'am':
				$length = $input_measurement * 1e17;
				break;
			case 'zm':
				$length = $input_measurement * 1e20;
				break;
			case 'ym':
				$length = $input_measurement * 1e23;
				break;
			case 'mi':
				$length = $input_measurement * 10 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement * 10 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement * 10 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement * 10 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'cm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e26;
				break;
			case 'Zm':
				$length = $input_measurement / 1e23;
				break;
			case 'Em':
				$length = $input_measurement / 1e20;
				break;
			case 'Pm':
				$length = $input_measurement / 1e17;
				break;
			case 'Tm':
				$length = $input_measurement / 1e14;
				break;
			case 'Gm':
				$length = $input_measurement / 1e11;
				break;
			case 'Mm':
				$length = $input_measurement / 1e8;
				break;
			case 'km':
				$length = $input_measurement / 100000;
				break;
			case 'hm':
				$length = $input_measurement / 10000;
				break;
			case 'dam':
				$length = $input_measurement / 1000;
				break;
			case 'm':
				$length = $input_measurement / 100;
				break;
			case 'dm':
				$length = $input_measurement / 10;
				break;
			case 'mm':
				$length = $input_measurement * 10;
				break;
			case 'μm';
				$length = $input_measurement * 10000;
				break;
			case 'nm':
				$length = $input_measurement * 1e7;
				break;
			case 'pm':
				$length = $input_measurement * 1e10;
				break;
			case 'fm':
				$length = $input_measurement * 1e13;
				break;
			case 'am':
				$length = $input_measurement * 1e16;
				break;
			case 'zm':
				$length = $input_measurement * 1e19;
				break;
			case 'ym':
				$length = $input_measurement * 1e22;
				break;
			case 'mi':
				$length = $input_measurement / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'mm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e27;
				break;
			case 'Zm':
				$length = $input_measurement / 1e24;
				break;
			case 'Em':
				$length = $input_measurement / 1e21;
				break;
			case 'Pm':
				$length = $input_measurement / 1e18;
				break;
			case 'Tm':
				$length = $input_measurement / 1e15;
				break;
			case 'Gm':
				$length = $input_measurement / 1e12;
				break;
			case 'Mm':
				$length = $input_measurement / 1e9;
				break;
			case 'km':
				$length = $input_measurement / 1e6;
				break;
			case 'hm':
				$length = $input_measurement / 100000;
				break;
			case 'dam':
				$length = $input_measurement / 10000;
				break;
			case 'm':
				$length = $input_measurement / 1000;
				break;
			case 'dm':
				$length = $input_measurement / 100;
				break;
			case 'cm':
				$length = $input_measurement / 10;
				break;
			case 'μm';
				$length = $input_measurement * 1000;
				break;
			case 'nm':
				$length = $input_measurement * 1e6;
				break;
			case 'pm':
				$length = $input_measurement * 1e9;
				break;
			case 'fm':
				$length = $input_measurement * 1e12;
				break;
			case 'am':
				$length = $input_measurement * 1e15;
				break;
			case 'zm':
				$length = $input_measurement * 1e18;
				break;
			case 'ym':
				$length = $input_measurement * 1e21;
				break;
			case 'mi':
				$length = $input_measurement / 10 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / 10 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement / 10 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement / 10 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'μm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e30;
				break;
			case 'Zm':
				$length = $input_measurement / 1e27;
				break;
			case 'Em':
				$length = $input_measurement / 1e24;
				break;
			case 'Pm':
				$length = $input_measurement / 1e21;
				break;
			case 'Tm':
				$length = $input_measurement / 1e18;
				break;
			case 'Gm':
				$length = $input_measurement / 1e15;
				break;
			case 'Mm':
				$length = $input_measurement / 1e12;
				break;
			case 'km':
				$length = $input_measurement / 1e9;
				break;
			case 'hm':
				$length = $input_measurement / 1e8;
				break;
			case 'dam':
				$length = $input_measurement / 1e7;
				break;
			case 'm':
				$length = $input_measurement / 1e6;
				break;
			case 'dm':
				$length = $input_measurement / 100000;
				break;
			case 'cm':
				$length = $input_measurement / 10000;
				break;
			case 'mm';
				$length = $input_measurement / 1000;
				break;
			case 'nm':
				$length = $input_measurement * 1000;
				break;
			case 'pm':
				$length = $input_measurement * 1e6;
				break;
			case 'fm':
				$length = $input_measurement * 1e9;
				break;
			case 'am':
				$length = $input_measurement * 1e12;
				break;
			case 'zm':
				$length = $input_measurement * 1e15;
				break;
			case 'ym':
				$length = $input_measurement * 1e18;
				break;
			case 'mi':
				$length = $input_measurement / 10000 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / 10000 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement / 10000 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement / 10000 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'nm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e33;
				break;
			case 'Zm':
				$length = $input_measurement / 1e30;
				break;
			case 'Em':
				$length = $input_measurement / 1e27;
				break;
			case 'Pm':
				$length = $input_measurement / 1e24;
				break;
			case 'Tm':
				$length = $input_measurement / 1e21;
				break;
			case 'Gm':
				$length = $input_measurement / 1e18;
				break;
			case 'Mm':
				$length = $input_measurement / 1e15;
				break;
			case 'km':
				$length = $input_measurement / 1e12;
				break;
			case 'hm':
				$length = $input_measurement / 1e11;
				break;
			case 'dam':
				$length = $input_measurement / 1e10;
				break;
			case 'm':
				$length = $input_measurement / 1e9;
				break;
			case 'dm':
				$length = $input_measurement / 1e8;
				break;
			case 'cm':
				$length = $input_measurement / 1e7;
				break;
			case 'mm';
				$length = $input_measurement / 1e6;
				break;
			case 'μm':
				$length = $input_measurement / 1000;
				break;
			case 'pm':
				$length = $input_measurement * 1000;
				break;
			case 'fm':
				$length = $input_measurement * 1e6;
				break;
			case 'am':
				$length = $input_measurement * 1e9;
				break;
			case 'zm':
				$length = $input_measurement * 1e12;
				break;
			case 'ym':
				$length = $input_measurement * 1e15;
				break;
			case 'mi':
				$length = $input_measurement / 1e7 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / 1e7 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement / 1e7 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement / 1e7 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'pm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e36;
				break;
			case 'Zm':
				$length = $input_measurement / 1e33;
				break;
			case 'Em':
				$length = $input_measurement / 1e30;
				break;
			case 'Pm':
				$length = $input_measurement / 1e27;
				break;
			case 'Tm':
				$length = $input_measurement / 1e24;
				break;
			case 'Gm':
				$length = $input_measurement / 1e21;
				break;
			case 'Mm':
				$length = $input_measurement / 1e18;
				break;
			case 'km':
				$length = $input_measurement / 1e15;
				break;
			case 'hm':
				$length = $input_measurement / 1e14;
				break;
			case 'dam':
				$length = $input_measurement / 1e13;
				break;
			case 'm':
				$length = $input_measurement / 1e12;
				break;
			case 'dm':
				$length = $input_measurement / 1e11;
				break;
			case 'cm':
				$length = $input_measurement / 1e10;
				break;
			case 'mm';
				$length = $input_measurement / 1e9;
				break;
			case 'μm':
				$length = $input_measurement / 1e6;
				break;
			case 'nm':
				$length = $input_measurement / 1000;
				break;
			case 'fm':
				$length = $input_measurement * 1000;
				break;
			case 'am':
				$length = $input_measurement * 1e6;
				break;
			case 'zm':
				$length = $input_measurement * 1e9;
				break;
			case 'ym':
				$length = $input_measurement * 1e12;
				break;
			case 'mi':
				$length = $input_measurement / 1e10 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / 1e10 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement / 1e10 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement / 1e10 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'fm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e39;
				break;
			case 'Zm':
				$length = $input_measurement / 1e36;
				break;
			case 'Em':
				$length = $input_measurement / 1e33;
				break;
			case 'Pm':
				$length = $input_measurement / 1e30;
				break;
			case 'Tm':
				$length = $input_measurement / 1e27;
				break;
			case 'Gm':
				$length = $input_measurement / 1e24;
				break;
			case 'Mm':
				$length = $input_measurement / 1e21;
				break;
			case 'km':
				$length = $input_measurement / 1e18;
				break;
			case 'hm':
				$length = $input_measurement / 1e17;
				break;
			case 'dam':
				$length = $input_measurement / 1e16;
				break;
			case 'm':
				$length = $input_measurement / 1e15;
				break;
			case 'dm':
				$length = $input_measurement / 1e14;
				break;
			case 'cm':
				$length = $input_measurement / 1e13;
				break;
			case 'mm';
				$length = $input_measurement / 1e12;
				break;
			case 'μm':
				$length = $input_measurement / 1e9;
				break;
			case 'nm':
				$length = $input_measurement / 1e6;
				break;
			case 'pm':
				$length = $input_measurement / 1000;
				break;
			case 'am':
				$length = $input_measurement * 1000;
				break;
			case 'zm':
				$length = $input_measurement * 1e6;
				break;
			case 'ym':
				$length = $input_measurement * 1e9;
				break;
			case 'mi':
				$length = $input_measurement / 1e13 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / 1e13 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement / 1e13 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement / 1e13 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'am':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e42;
				break;
			case 'Zm':
				$length = $input_measurement / 1e39;
				break;
			case 'Em':
				$length = $input_measurement / 1e36;
				break;
			case 'Pm':
				$length = $input_measurement / 1e33;
				break;
			case 'Tm':
				$length = $input_measurement / 1e30;
				break;
			case 'Gm':
				$length = $input_measurement / 1e27;
				break;
			case 'Mm':
				$length = $input_measurement / 1e24;
				break;
			case 'km':
				$length = $input_measurement / 1e21;
				break;
			case 'hm':
				$length = $input_measurement / 1e20;
				break;
			case 'dam':
				$length = $input_measurement / 1e19;
				break;
			case 'm':
				$length = $input_measurement / 1e18;
				break;
			case 'dm':
				$length = $input_measurement / 1e17;
				break;
			case 'cm':
				$length = $input_measurement / 1e16;
				break;
			case 'mm';
				$length = $input_measurement / 1e15;
				break;
			case 'μm':
				$length = $input_measurement / 1e12;
				break;
			case 'nm':
				$length = $input_measurement / 1e9;
				break;
			case 'pm':
				$length = $input_measurement / 1e6;
				break;
			case 'fm':
				$length = $input_measurement / 1000;
				break;
			case 'zm':
				$length = $input_measurement * 1000;
				break;
			case 'ym':
				$length = $input_measurement * 1e6;
				break;
			case 'mi':
				$length = $input_measurement / 1e16 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / 1e16 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement / 1e16 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement / 1e16 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'zm':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e45;
				break;
			case 'Zm':
				$length = $input_measurement / 1e42;
				break;
			case 'Em':
				$length = $input_measurement / 1e39;
				break;
			case 'Pm':
				$length = $input_measurement / 1e36;
				break;
			case 'Tm':
				$length = $input_measurement / 1e33;
				break;
			case 'Gm':
				$length = $input_measurement / 1e30;
				break;
			case 'Mm':
				$length = $input_measurement / 1e27;
				break;
			case 'km':
				$length = $input_measurement / 1e24;
				break;
			case 'hm':
				$length = $input_measurement / 1e23;
				break;
			case 'dam':
				$length = $input_measurement / 1e22;
				break;
			case 'm':
				$length = $input_measurement / 1e21;
				break;
			case 'dm':
				$length = $input_measurement / 1e20;
				break;
			case 'cm':
				$length = $input_measurement / 1e19;
				break;
			case 'mm';
				$length = $input_measurement / 1e18;
				break;
			case 'μm':
				$length = $input_measurement / 1e15;
				break;
			case 'nm':
				$length = $input_measurement / 1e12;
				break;
			case 'pm':
				$length = $input_measurement / 1e9;
				break;
			case 'fm':
				$length = $input_measurement / 1e6;
				break;
			case 'am':
				$length = $input_measurement / 1000;
				break;
			case 'ym':
				$length = $input_measurement * 1000;
				break;
			case 'mi':
				$length = $input_measurement / 1e19 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / 1e19 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement / 1e19 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement / 1e19 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'ym':
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / 1e48;
				break;
			case 'Zm':
				$length = $input_measurement / 1e45;
				break;
			case 'Em':
				$length = $input_measurement / 1e42;
				break;
			case 'Pm':
				$length = $input_measurement / 1e39;
				break;
			case 'Tm':
				$length = $input_measurement / 1e36;
				break;
			case 'Gm':
				$length = $input_measurement / 1e33;
				break;
			case 'Mm':
				$length = $input_measurement / 1e30;
				break;
			case 'km':
				$length = $input_measurement / 1e27;
				break;
			case 'hm':
				$length = $input_measurement / 1e26;
				break;
			case 'dam':
				$length = $input_measurement / 1e25;
				break;
			case 'm':
				$length = $input_measurement / 1e24;
				break;
			case 'dm':
				$length = $input_measurement / 1e23;
				break;
			case 'cm':
				$length = $input_measurement / 1e22;
				break;
			case 'mm';
				$length = $input_measurement / 1e21;
				break;
			case 'μm':
				$length = $input_measurement / 1e18;
				break;
			case 'nm':
				$length = $input_measurement / 1e15;
				break;
			case 'pm':
				$length = $input_measurement / 1e12;
				break;
			case 'fm':
				$length = $input_measurement / 1e9;
				break;
			case 'am':
				$length = $input_measurement / 1e6;
				break;
			case 'zm':
				$length = $input_measurement / 1000;
				break;
			case 'mi':
				$length = $input_measurement / 1e22 / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / 1e22 / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement / 1e22 / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement / 1e22 / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'mi':
		switch ( $output_unit ) {
			case 'yd':
				$length = $input_measurement * $mi_to_yd;
				break;
			case 'ft':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft;
				break;
			case 'in':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in;
				break;
			case 'Ym':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 1e26;
				break;
			case 'Zm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 1e23;
				break;
			case 'Em':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 1e20;
				break;
			case 'Pm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 1e17;
				break;
			case 'Tm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 1e14;
				break;
			case 'Gm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 1e11;
				break;
			case 'Mm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 1e8;
				break;
			case 'km':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 100000;
				break;
			case 'hm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 10000;
				break;
			case 'dam':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 1000;
				break;
			case 'm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 100;
				break;
			case 'dm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm / 10;
				break;
			case 'cm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm;
				break;
			case 'mm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm * 10;
				break;
			case 'μm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm * 10000;
				break;
			case 'nm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm * 1e7;
				break;
			case 'pm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm * 1e10;
				break;
			case 'fm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm * 1e13;
				break;
			case 'am':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm * 1e16;
				break;
			case 'zm':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm * 1e19;
				break;
			case 'ym':
				$length = $input_measurement * $mi_to_yd * $yd_to_ft * $ft_to_in * $in_to_cm * 1e22;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'yd':
		switch ( $output_unit ) {
			case 'mi':
				$length = $input_measurement / $mi_to_yd;
				break;
			case 'ft':
				$length = $input_measurement * $yd_to_ft;
				break;
			case 'in':
				$length = $input_measurement * $yd_to_ft * $ft_to_in;
				break;
			case 'Ym':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 1e26;
				break;
			case 'Zm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 1e23;
				break;
			case 'Em':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 1e20;
				break;
			case 'Pm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 1e17;
				break;
			case 'Tm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 1e14;
				break;
			case 'Gm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 1e11;
				break;
			case 'Mm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 1e8;
				break;
			case 'km':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 100000;
				break;
			case 'hm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 10000;
				break;
			case 'dam':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 1000;
				break;
			case 'm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 100;
				break;
			case 'dm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm / 10;
				break;
			case 'cm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm;
				break;
			case 'mm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm * 10;
				break;
			case 'μm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm * 10000;
				break;
			case 'nm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm * 1e7;
				break;
			case 'pm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm * 1e10;
				break;
			case 'fm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm * 1e13;
				break;
			case 'am':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm * 1e16;
				break;
			case 'zm':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm * 1e19;
				break;
			case 'ym':
				$length = $input_measurement * $yd_to_ft * $ft_to_in * $in_to_cm * 1e22;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'ft':
		switch ( $output_unit ) {
			case 'mi':
				$length = $input_measurement / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / $yd_to_ft;
				break;
			case 'in':
				$length = $input_measurement * $ft_to_in;
				break;
			case 'Ym':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 1e26;
				break;
			case 'Zm':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 1e23;
				break;
			case 'Em':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 1e20;
				break;
			case 'Pm':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 1e17;
				break;
			case 'Tm':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 1e14;
				break;
			case 'Gm':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 1e11;
				break;
			case 'Mm':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 1e8;
				break;
			case 'km':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 100000;
				break;
			case 'hm':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 10000;
				break;
			case 'dam':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 1000;
				break;
			case 'm':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 100;
				break;
			case 'dm':
				$length = $input_measurement * $ft_to_in * $in_to_cm / 10;
				break;
			case 'cm':
				$length = $input_measurement * $ft_to_in * $in_to_cm;
				break;
			case 'mm':
				$length = $input_measurement * $ft_to_in * $in_to_cm * 10;
				break;
			case 'μm':
				$length = $input_measurement * $ft_to_in * $in_to_cm * 10000;
				break;
			case 'nm':
				$length = $input_measurement * $ft_to_in * $in_to_cm * 1e7;
				break;
			case 'pm':
				$length = $input_measurement * $ft_to_in * $in_to_cm * 1e10;
				break;
			case 'fm':
				$length = $input_measurement * $ft_to_in * $in_to_cm * 1e13;
				break;
			case 'am':
				$length = $input_measurement * $ft_to_in * $in_to_cm * 1e16;
				break;
			case 'zm':
				$length = $input_measurement * $ft_to_in * $in_to_cm * 1e19;
				break;
			case 'ym':
				$length = $input_measurement * $ft_to_in * $in_to_cm * 1e22;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	case 'in':
		switch ( $output_unit ) {
			case 'mi':
				$length = $input_measurement / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement / $ft_to_in;
				break;
			case 'Ym':
				$length = $input_measurement * $in_to_cm / 1e26;
				break;
			case 'Zm':
				$length = $input_measurement * $in_to_cm / 1e23;
				break;
			case 'Em':
				$length = $input_measurement * $in_to_cm / 1e20;
				break;
			case 'Pm':
				$length = $input_measurement * $in_to_cm / 1e17;
				break;
			case 'Tm':
				$length = $input_measurement * $in_to_cm / 1e14;
				break;
			case 'Gm':
				$length = $input_measurement * $in_to_cm / 1e11;
				break;
			case 'Mm':
				$length = $input_measurement * $in_to_cm / 1e8;
				break;
			case 'km':
				$length = $input_measurement * $in_to_cm / 100000;
				break;
			case 'hm':
				$length = $input_measurement * $in_to_cm / 10000;
				break;
			case 'dam':
				$length = $input_measurement * $in_to_cm / 1000;
				break;
			case 'm':
				$length = $input_measurement * $in_to_cm / 100;
				break;
			case 'dm':
				$length = $input_measurement * $in_to_cm / 10;
				break;
			case 'cm':
				$length = $input_measurement * $in_to_cm;
				break;
			case 'mm':
				$length = $input_measurement * $in_to_cm * 10;
				break;
			case 'μm':
				$length = $input_measurement * $in_to_cm * 10000;
				break;
			case 'nm':
				$length = $input_measurement * $in_to_cm * 1e7;
				break;
			case 'pm':
				$length = $input_measurement * $in_to_cm * 1e10;
				break;
			case 'fm':
				$length = $input_measurement * $in_to_cm * 1e13;
				break;
			case 'am':
				$length = $input_measurement * $in_to_cm * 1e16;
				break;
			case 'zm':
				$length = $input_measurement * $in_to_cm * 1e19;
				break;
			case 'ym':
				$length = $input_measurement * $in_to_cm * 1e22;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
	default:
		switch ( $output_unit ) {
			case 'Ym':
				$length = $input_measurement / $yotta;
				break;
			case 'Zm':
				$length = $input_measurement / $zetta;
				break;
			case 'Em':
				$length = $input_measurement / $exa;
				break;
			case 'Pm':
				$length = $input_measurement / $peta;
				break;
			case 'Tm':
				$length = $input_measurement / $tera;
				break;
			case 'Gm':
				$length = $input_measurement / $giga;
				break;
			case 'Mm':
				$length = $input_measurement / $mega;
				break;
			case 'km':
				$length = $input_measurement / $kilo;
				break;
			case 'hm':
				$length = $input_measurement / $hecto;
				break;
			case 'dam':
				$length = $input_measurement / $deca;
				break;
			case 'dm':
				$length = $input_measurement / $deci;
				break;
			case 'cm':
				$length = $input_measurement / $centi;
				break;
			case 'mm':
				$length = $input_measurement / $milli;
				break;
			case 'μm';
				$length = $input_measurement / $micro;
				break;
			case 'nm':
				$length = $input_measurement / $nano;
				break;
			case 'pm':
				$length = $input_measurement / $pico;
				break;
			case 'fm':
				$length = $input_measurement / $femto;
				break;
			case 'am':
				$length = $input_measurement / $atto;
				break;
			case 'zm':
				$length = $input_measurement / $zepto;
				break;
			case 'ym':
				$length = $input_measurement / $yocto;
				break;
			case 'mi':
				$length = $input_measurement / $centi / $in_to_cm / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$length = $input_measurement / $centi / $in_to_cm / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$length = $input_measurement / $centi / $in_to_cm / $ft_to_in;
				break;
			case 'in':
				$length = $input_measurement / $centi / $in_to_cm;
				break;
			default:
				$length = $input_measurement;
				break;
		}
		break;
}
