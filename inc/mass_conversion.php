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

$lb_to_kg = 0.45359237;
$t_to_lb  = 2000;
$lb_to_oz = 16;
switch ( $input_unit ) {
	case 'Yg':
		switch ( $output_unit ) {
			case 'Zg':
				$mass = $input_measurement * 1000;
				break;
			case 'Eg':
				$mass = $input_measurement * 1e6;
				break;
			case 'Pg':
				$mass = $input_measurement * 1e9;
				break;
			case 'Tg':
				$mass = $input_measurement * 1e12;
				break;
			case 'Gg':
				$mass = $input_measurement * 1e15;
				break;
			case 'Mg':
				$mass = $input_measurement * 1e18;
				break;
			case 'kg':
				$mass = $input_measurement * 1e21;
				break;
			case 'hg':
				$mass = $input_measurement * 1e22;
				break;
			case 'dag':
				$mass = $input_measurement * 1e23;
				break;
			case 'g':
				$mass = $input_measurement * 1e24;
				break;
			case 'dg':
				$mass = $input_measurement * 1e25;
				break;
			case 'cg':
				$mass = $input_measurement * 1e26;
				break;
			case 'mg':
				$mass = $input_measurement * 1e27;
				break;
			case 'μg';
				$mass = $input_measurement * 1e30;
				break;
			case 'ng':
				$mass = $input_measurement * 1e33;
				break;
			case 'pg':
				$mass = $input_measurement * 1e36;
				break;
			case 'fg':
				$mass = $input_measurement * 1e39;
				break;
			case 'ag':
				$mass = $input_measurement * 1e42;
				break;
			case 'zg':
				$mass = $input_measurement * 1e45;
				break;
			case 'yg':
				$mass = $input_measurement * 1e48;
				break;
			case 't':
				$mass = $input_measurement * 1e21 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement * 1e21 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement * 1e21 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'Zg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1000;
				break;
			case 'Eg':
				$mass = $input_measurement * 1000;
				break;
			case 'Pg':
				$mass = $input_measurement * 1e6;
				break;
			case 'Tg':
				$mass = $input_measurement * 1e9;
				break;
			case 'Gg':
				$mass = $input_measurement * 1e12;
				break;
			case 'Mg':
				$mass = $input_measurement * 1e15;
				break;
			case 'kg':
				$mass = $input_measurement * 1e18;
				break;
			case 'hg':
				$mass = $input_measurement * 1e19;
				break;
			case 'dag':
				$mass = $input_measurement * 1e20;
				break;
			case 'g':
				$mass = $input_measurement * 1e21;
				break;
			case 'dg':
				$mass = $input_measurement * 1e22;
				break;
			case 'cg':
				$mass = $input_measurement * 1e23;
				break;
			case 'mg':
				$mass = $input_measurement * 1e24;
				break;
			case 'μg';
				$mass = $input_measurement * 1e27;
				break;
			case 'ng':
				$mass = $input_measurement * 1e30;
				break;
			case 'pg':
				$mass = $input_measurement * 1e33;
				break;
			case 'fg':
				$mass = $input_measurement * 1e36;
				break;
			case 'ag':
				$mass = $input_measurement * 1e39;
				break;
			case 'zg':
				$mass = $input_measurement * 1e42;
				break;
			case 'yg':
				$mass = $input_measurement * 1e45;
				break;
			case 't':
				$mass = $input_measurement * 1e18 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement * 1e18 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement * 1e18 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'Eg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e6;
				break;
			case 'Zg':
				$mass = $input_measurement / 1000;
				break;
			case 'Pg':
				$mass = $input_measurement * 1000;
				break;
			case 'Tg':
				$mass = $input_measurement * 1e6;
				break;
			case 'Gg':
				$mass = $input_measurement * 1e9;
				break;
			case 'Mg':
				$mass = $input_measurement * 1e12;
				break;
			case 'kg':
				$mass = $input_measurement * 1e15;
				break;
			case 'hg':
				$mass = $input_measurement * 1e16;
				break;
			case 'dag':
				$mass = $input_measurement * 1e17;
				break;
			case 'g':
				$mass = $input_measurement * 1e18;
				break;
			case 'dg':
				$mass = $input_measurement * 1e19;
				break;
			case 'cg':
				$mass = $input_measurement * 1e20;
				break;
			case 'mg':
				$mass = $input_measurement * 1e21;
				break;
			case 'μg';
				$mass = $input_measurement * 1e24;
				break;
			case 'ng':
				$mass = $input_measurement * 1e27;
				break;
			case 'pg':
				$mass = $input_measurement * 1e30;
				break;
			case 'fg':
				$mass = $input_measurement * 1e33;
				break;
			case 'ag':
				$mass = $input_measurement * 1e36;
				break;
			case 'zg':
				$mass = $input_measurement * 1e39;
				break;
			case 'yg':
				$mass = $input_measurement * 1e42;
				break;
			case 't':
				$mass = $input_measurement * 1e15 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement * 1e15 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement * 1e15 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'Pg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e9;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e6;
				break;
			case 'Eg':
				$mass = $input_measurement / 1000;
				break;
			case 'Tg':
				$mass = $input_measurement * 1000;
				break;
			case 'Gg':
				$mass = $input_measurement * 1e6;
				break;
			case 'Mg':
				$mass = $input_measurement * 1e9;
				break;
			case 'kg':
				$mass = $input_measurement * 1e12;
				break;
			case 'hg':
				$mass = $input_measurement * 1e13;
				break;
			case 'dag':
				$mass = $input_measurement * 1e14;
				break;
			case 'g':
				$mass = $input_measurement * 1e15;
				break;
			case 'dg':
				$mass = $input_measurement * 1e16;
				break;
			case 'cg':
				$mass = $input_measurement * 1e17;
				break;
			case 'mg':
				$mass = $input_measurement * 1e18;
				break;
			case 'μg';
				$mass = $input_measurement * 1e21;
				break;
			case 'ng':
				$mass = $input_measurement * 1e24;
				break;
			case 'pg':
				$mass = $input_measurement * 1e27;
				break;
			case 'fg':
				$mass = $input_measurement * 1e30;
				break;
			case 'ag':
				$mass = $input_measurement * 1e33;
				break;
			case 'zg':
				$mass = $input_measurement * 1e36;
				break;
			case 'yg':
				$mass = $input_measurement * 1e42;
				break;
			case 't':
				$mass = $input_measurement * 1e12 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement * 1e12 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement * 1e12 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'Tg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e12;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e9;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e6;
				break;
			case 'Pg':
				$mass = $input_measurement / 1000;
				break;
			case 'Gg':
				$mass = $input_measurement * 1000;
				break;
			case 'Mg':
				$mass = $input_measurement * 1e6;
				break;
			case 'kg':
				$mass = $input_measurement * 1e9;
				break;
			case 'hg':
				$mass = $input_measurement * 1e10;
				break;
			case 'dag':
				$mass = $input_measurement * 1e11;
				break;
			case 'g':
				$mass = $input_measurement * 1e12;
				break;
			case 'dg':
				$mass = $input_measurement * 1e13;
				break;
			case 'cg':
				$mass = $input_measurement * 1e14;
				break;
			case 'mg':
				$mass = $input_measurement * 1e15;
				break;
			case 'μg';
				$mass = $input_measurement * 1e18;
				break;
			case 'ng':
				$mass = $input_measurement * 1e21;
				break;
			case 'pg':
				$mass = $input_measurement * 1e24;
				break;
			case 'fg':
				$mass = $input_measurement * 1e27;
				break;
			case 'ag':
				$mass = $input_measurement * 1e30;
				break;
			case 'zg':
				$mass = $input_measurement * 1e33;
				break;
			case 'yg':
				$mass = $input_measurement * 1e36;
				break;
			case 't':
				$mass = $input_measurement * 1e9 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement * 1e9 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement * 1e9 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'Gg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e15;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e12;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e9;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e6;
				break;
			case 'Tg':
				$mass = $input_measurement / 1000;
				break;
			case 'Mg':
				$mass = $input_measurement * 1000;
				break;
			case 'kg':
				$mass = $input_measurement * 1e6;
				break;
			case 'hg':
				$mass = $input_measurement * 1e7;
				break;
			case 'dag':
				$mass = $input_measurement * 1e8;
				break;
			case 'g':
				$mass = $input_measurement * 1e9;
				break;
			case 'dg':
				$mass = $input_measurement * 1e10;
				break;
			case 'cg':
				$mass = $input_measurement * 1e11;
				break;
			case 'mg':
				$mass = $input_measurement * 1e12;
				break;
			case 'μg';
				$mass = $input_measurement * 1e15;
				break;
			case 'ng':
				$mass = $input_measurement * 1e18;
				break;
			case 'pg':
				$mass = $input_measurement * 1e21;
				break;
			case 'fg':
				$mass = $input_measurement * 1e24;
				break;
			case 'ag':
				$mass = $input_measurement * 1e27;
				break;
			case 'zg':
				$mass = $input_measurement * 1e30;
				break;
			case 'yg':
				$mass = $input_measurement * 1e33;
				break;
			case 't':
				$mass = $input_measurement * 1e6 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement * 1e6 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement * 1e6 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'Mg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e18;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e15;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e12;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e9;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e6;
				break;
			case 'Gg':
				$mass = $input_measurement / 1000;
				break;
			case 'kg':
				$mass = $input_measurement * 1000;
				break;
			case 'hg':
				$mass = $input_measurement * 10000;
				break;
			case 'dag':
				$mass = $input_measurement * 100000;
				break;
			case 'g':
				$mass = $input_measurement * 1e6;
				break;
			case 'dg':
				$mass = $input_measurement * 1e7;
				break;
			case 'cg':
				$mass = $input_measurement * 1e8;
				break;
			case 'mg':
				$mass = $input_measurement * 1e9;
				break;
			case 'μg';
				$mass = $input_measurement * 1e12;
				break;
			case 'ng':
				$mass = $input_measurement * 1e15;
				break;
			case 'pg':
				$mass = $input_measurement * 1e18;
				break;
			case 'fg':
				$mass = $input_measurement * 1e21;
				break;
			case 'ag':
				$mass = $input_measurement * 1e24;
				break;
			case 'zg':
				$mass = $input_measurement * 1e27;
				break;
			case 'yg':
				$mass = $input_measurement * 1e30;
				break;
			case 't':
				$mass = $input_measurement * 1000 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement * 1000 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement * 1000 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'kg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e21;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e18;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e15;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e12;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e9;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e6;
				break;
			case 'Mg':
				$mass = $input_measurement / 1000;
				break;
			case 'hg':
				$mass = $input_measurement * 10;
				break;
			case 'dag':
				$mass = $input_measurement * 100;
				break;
			case 'g':
				$mass = $input_measurement * 1000;
				break;
			case 'dg':
				$mass = $input_measurement * 10000;
				break;
			case 'cg':
				$mass = $input_measurement * 100000;
				break;
			case 'mg':
				$mass = $input_measurement * 1e6;
				break;
			case 'μg';
				$mass = $input_measurement * 1e9;
				break;
			case 'ng':
				$mass = $input_measurement * 1e12;
				break;
			case 'pg':
				$mass = $input_measurement * 1e15;
				break;
			case 'fg':
				$mass = $input_measurement * 1e18;
				break;
			case 'ag':
				$mass = $input_measurement * 1e21;
				break;
			case 'zg':
				$mass = $input_measurement * 1e24;
				break;
			case 'yg':
				$mass = $input_measurement * 1e27;
				break;
			case 't':
				$mass = $input_measurement / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'hg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e22;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e19;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e16;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e13;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e10;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e7;
				break;
			case 'Mg':
				$mass = $input_measurement / 10000;
				break;
			case 'kg':
				$mass = $input_measurement / 10;
				break;
			case 'dag':
				$mass = $input_measurement * 10;
				break;
			case 'g':
				$mass = $input_measurement * 100;
				break;
			case 'dg':
				$mass = $input_measurement * 1000;
				break;
			case 'cg':
				$mass = $input_measurement * 10000;
				break;
			case 'mg':
				$mass = $input_measurement * 100000;
				break;
			case 'μg';
				$mass = $input_measurement * 1e8;
				break;
			case 'ng':
				$mass = $input_measurement * 1e11;
				break;
			case 'pg':
				$mass = $input_measurement * 1e14;
				break;
			case 'fg':
				$mass = $input_measurement * 1e17;
				break;
			case 'ag':
				$mass = $input_measurement * 1e20;
				break;
			case 'zg':
				$mass = $input_measurement * 1e23;
				break;
			case 'yg':
				$mass = $input_measurement * 1e26;
				break;
			case 't':
				$mass = $input_measurement / 10 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 10 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 10 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'dag':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e23;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e20;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e17;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e14;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e11;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e8;
				break;
			case 'Mg':
				$mass = $input_measurement / 100000;
				break;
			case 'kg':
				$mass = $input_measurement / 100;
				break;
			case 'hg':
				$mass = $input_measurement / 10;
				break;
			case 'g':
				$mass = $input_measurement * 10;
				break;
			case 'dg':
				$mass = $input_measurement * 100;
				break;
			case 'cg':
				$mass = $input_measurement * 1000;
				break;
			case 'mg':
				$mass = $input_measurement * 10000;
				break;
			case 'μg';
				$mass = $input_measurement * 1e7;
				break;
			case 'ng':
				$mass = $input_measurement * 1e10;
				break;
			case 'pg':
				$mass = $input_measurement * 1e13;
				break;
			case 'fg':
				$mass = $input_measurement * 1e16;
				break;
			case 'ag':
				$mass = $input_measurement * 1e19;
				break;
			case 'zg':
				$mass = $input_measurement * 1e22;
				break;
			case 'yg':
				$mass = $input_measurement * 1e25;
				break;
			case 't':
				$mass = $input_measurement / 100 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 100 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 100 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'dg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e25;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e22;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e19;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e16;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e13;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e10;
				break;
			case 'Mg':
				$mass = $input_measurement / 1e7;
				break;
			case 'kg':
				$mass = $input_measurement / 10000;
				break;
			case 'hg':
				$mass = $input_measurement / 1000;
				break;
			case 'dag':
				$mass = $input_measurement / 100;
				break;
			case 'g':
				$mass = $input_measurement / 10;
				break;
			case 'cg':
				$mass = $input_measurement * 10;
				break;
			case 'mg':
				$mass = $input_measurement * 100;
				break;
			case 'μg';
				$mass = $input_measurement * 10000;
				break;
			case 'ng':
				$mass = $input_measurement * 1e8;
				break;
			case 'pg':
				$mass = $input_measurement * 1e11;
				break;
			case 'fg':
				$mass = $input_measurement * 1e14;
				break;
			case 'ag':
				$mass = $input_measurement * 1e17;
				break;
			case 'zg':
				$mass = $input_measurement * 1e20;
				break;
			case 'yg':
				$mass = $input_measurement * 1e23;
				break;
			case 't':
				$mass = $input_measurement / 10000 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 10000 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 10000 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'cg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e26;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e23;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e20;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e17;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e14;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e11;
				break;
			case 'Mg':
				$mass = $input_measurement / 1e8;
				break;
			case 'kg':
				$mass = $input_measurement / 100000;
				break;
			case 'hg':
				$mass = $input_measurement / 10000;
				break;
			case 'dag':
				$mass = $input_measurement / 1000;
				break;
			case 'g':
				$mass = $input_measurement / 100;
				break;
			case 'dg':
				$mass = $input_measurement / 10;
				break;
			case 'mg':
				$mass = $input_measurement * 10;
				break;
			case 'μg';
				$mass = $input_measurement * 10000;
				break;
			case 'ng':
				$mass = $input_measurement * 1e7;
				break;
			case 'pg':
				$mass = $input_measurement * 1e10;
				break;
			case 'fg':
				$mass = $input_measurement * 1e13;
				break;
			case 'ag':
				$mass = $input_measurement * 1e16;
				break;
			case 'zg':
				$mass = $input_measurement * 1e19;
				break;
			case 'yg':
				$mass = $input_measurement * 1e22;
				break;
			case 't':
				$mass = $input_measurement / 100000 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 100000 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 100000 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'mg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e27;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e24;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e21;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e18;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e15;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e12;
				break;
			case 'Mg':
				$mass = $input_measurement / 1e9;
				break;
			case 'kg':
				$mass = $input_measurement / 1e6;
				break;
			case 'hg':
				$mass = $input_measurement / 100000;
				break;
			case 'dag':
				$mass = $input_measurement / 10000;
				break;
			case 'g':
				$mass = $input_measurement / 1000;
				break;
			case 'dg':
				$mass = $input_measurement / 100;
				break;
			case 'cg':
				$mass = $input_measurement / 10;
				break;
			case 'μg';
				$mass = $input_measurement * 1000;
				break;
			case 'ng':
				$mass = $input_measurement * 1e6;
				break;
			case 'pg':
				$mass = $input_measurement * 1e9;
				break;
			case 'fg':
				$mass = $input_measurement * 1e12;
				break;
			case 'ag':
				$mass = $input_measurement * 1e15;
				break;
			case 'zg':
				$mass = $input_measurement * 1e18;
				break;
			case 'yg':
				$mass = $input_measurement * 1e21;
				break;
			case 't':
				$mass = $input_measurement / 1e6 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 1e6 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 1e6 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'μg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e30;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e27;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e24;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e21;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e18;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e15;
				break;
			case 'Mg':
				$mass = $input_measurement / 1e12;
				break;
			case 'kg':
				$mass = $input_measurement / 1e9;
				break;
			case 'hg':
				$mass = $input_measurement / 1e8;
				break;
			case 'dag':
				$mass = $input_measurement / 1e7;
				break;
			case 'g':
				$mass = $input_measurement / 1e6;
				break;
			case 'dg':
				$mass = $input_measurement / 100000;
				break;
			case 'cg':
				$mass = $input_measurement / 10000;
				break;
			case 'mg';
				$mass = $input_measurement / 1000;
				break;
			case 'ng':
				$mass = $input_measurement * 1000;
				break;
			case 'pg':
				$mass = $input_measurement * 1e6;
				break;
			case 'fg':
				$mass = $input_measurement * 1e9;
				break;
			case 'ag':
				$mass = $input_measurement * 1e12;
				break;
			case 'zg':
				$mass = $input_measurement * 1e15;
				break;
			case 'yg':
				$mass = $input_measurement * 1e18;
				break;
			case 't':
				$mass = $input_measurement / 1e9 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 1e9 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 1e9 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'ng':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e33;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e30;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e27;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e24;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e21;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e18;
				break;
			case 'Mg':
				$mass = $input_measurement / 1e15;
				break;
			case 'kg':
				$mass = $input_measurement / 1e12;
				break;
			case 'hg':
				$mass = $input_measurement / 1e11;
				break;
			case 'dag':
				$mass = $input_measurement / 1e10;
				break;
			case 'g':
				$mass = $input_measurement / 1e9;
				break;
			case 'dg':
				$mass = $input_measurement / 1e8;
				break;
			case 'cg':
				$mass = $input_measurement / 1e7;
				break;
			case 'mg';
				$mass = $input_measurement / 1e6;
				break;
			case 'μg':
				$mass = $input_measurement / 1000;
				break;
			case 'pg':
				$mass = $input_measurement * 1000;
				break;
			case 'fg':
				$mass = $input_measurement * 1e6;
				break;
			case 'ag':
				$mass = $input_measurement * 1e9;
				break;
			case 'zg':
				$mass = $input_measurement * 1e12;
				break;
			case 'yg':
				$mass = $input_measurement * 1e15;
				break;
			case 't':
				$mass = $input_measurement / 1e12 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 1e12 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 1e12 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'pg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e36;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e33;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e30;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e27;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e24;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e21;
				break;
			case 'Mg':
				$mass = $input_measurement / 1e18;
				break;
			case 'kg':
				$mass = $input_measurement / 1e15;
				break;
			case 'hg':
				$mass = $input_measurement / 1e14;
				break;
			case 'dag':
				$mass = $input_measurement / 1e13;
				break;
			case 'g':
				$mass = $input_measurement / 1e12;
				break;
			case 'dg':
				$mass = $input_measurement / 1e11;
				break;
			case 'cg':
				$mass = $input_measurement / 1e10;
				break;
			case 'mg';
				$mass = $input_measurement / 1e9;
				break;
			case 'μg':
				$mass = $input_measurement / 1e6;
				break;
			case 'ng':
				$mass = $input_measurement / 1000;
				break;
			case 'fg':
				$mass = $input_measurement * 1000;
				break;
			case 'ag':
				$mass = $input_measurement * 1e6;
				break;
			case 'zg':
				$mass = $input_measurement * 1e9;
				break;
			case 'yg':
				$mass = $input_measurement * 1e12;
				break;
			case 't':
				$mass = $input_measurement / 1e15 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 1e15 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 1e15 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'fg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e39;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e36;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e33;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e30;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e27;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e24;
				break;
			case 'Mg':
				$mass = $input_measurement / 1e21;
				break;
			case 'kg':
				$mass = $input_measurement / 1e18;
				break;
			case 'hg':
				$mass = $input_measurement / 1e17;
				break;
			case 'dag':
				$mass = $input_measurement / 1e16;
				break;
			case 'g':
				$mass = $input_measurement / 1e15;
				break;
			case 'dg':
				$mass = $input_measurement / 1e14;
				break;
			case 'cg':
				$mass = $input_measurement / 1e13;
				break;
			case 'mg';
				$mass = $input_measurement / 1e12;
				break;
			case 'μg':
				$mass = $input_measurement / 1e9;
				break;
			case 'ng':
				$mass = $input_measurement / 1e6;
				break;
			case 'pg':
				$mass = $input_measurement / 1000;
				break;
			case 'ag':
				$mass = $input_measurement * 1000;
				break;
			case 'zg':
				$mass = $input_measurement * 1e6;
				break;
			case 'yg':
				$mass = $input_measurement * 1e9;
				break;
			case 't':
				$mass = $input_measurement / 1e18 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 1e18 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 1e18 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'ag':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e42;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e39;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e36;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e33;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e30;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e27;
				break;
			case 'Mg':
				$mass = $input_measurement / 1e24;
				break;
			case 'kg':
				$mass = $input_measurement / 1e21;
				break;
			case 'hg':
				$mass = $input_measurement / 1e20;
				break;
			case 'dag':
				$mass = $input_measurement / 1e19;
				break;
			case 'g':
				$mass = $input_measurement / 1e18;
				break;
			case 'dg':
				$mass = $input_measurement / 1e17;
				break;
			case 'cg':
				$mass = $input_measurement / 1e16;
				break;
			case 'mg';
				$mass = $input_measurement / 1e15;
				break;
			case 'μg':
				$mass = $input_measurement / 1e12;
				break;
			case 'ng':
				$mass = $input_measurement / 1e9;
				break;
			case 'pg':
				$mass = $input_measurement / 1e6;
				break;
			case 'fg':
				$mass = $input_measurement / 1000;
				break;
			case 'zg':
				$mass = $input_measurement * 1000;
				break;
			case 'yg':
				$mass = $input_measurement * 1e6;
				break;
			case 't':
				$mass = $input_measurement / 1e21 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 1e21 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 1e21 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'zg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e45;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e42;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e39;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e36;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e33;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e30;
				break;
			case 'Mg':
				$mass = $input_measurement / 1e27;
				break;
			case 'kg':
				$mass = $input_measurement / 1e24;
				break;
			case 'hg':
				$mass = $input_measurement / 1e23;
				break;
			case 'dag':
				$mass = $input_measurement / 1e22;
				break;
			case 'g':
				$mass = $input_measurement / 1e21;
				break;
			case 'dg':
				$mass = $input_measurement / 1e20;
				break;
			case 'cg':
				$mass = $input_measurement / 1e19;
				break;
			case 'mg';
				$mass = $input_measurement / 1e18;
				break;
			case 'μg':
				$mass = $input_measurement / 1e15;
				break;
			case 'ng':
				$mass = $input_measurement / 1e12;
				break;
			case 'pg':
				$mass = $input_measurement / 1e9;
				break;
			case 'fg':
				$mass = $input_measurement / 1e6;
				break;
			case 'ag':
				$mass = $input_measurement / 1000;
				break;
			case 'yg':
				$mass = $input_measurement * 1000;
				break;
			case 't':
				$mass = $input_measurement / 1e24 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 1e24 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 1e24 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'yg':
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / 1e48;
				break;
			case 'Zg':
				$mass = $input_measurement / 1e45;
				break;
			case 'Eg':
				$mass = $input_measurement / 1e42;
				break;
			case 'Pg':
				$mass = $input_measurement / 1e39;
				break;
			case 'Tg':
				$mass = $input_measurement / 1e36;
				break;
			case 'Gg':
				$mass = $input_measurement / 1e33;
				break;
			case 'Mg':
				$mass = $input_measurement / 1e30;
				break;
			case 'kg':
				$mass = $input_measurement / 1e27;
				break;
			case 'hg':
				$mass = $input_measurement / 1e26;
				break;
			case 'dag':
				$mass = $input_measurement / 1e25;
				break;
			case 'g':
				$mass = $input_measurement / 1e24;
				break;
			case 'dg':
				$mass = $input_measurement / 1e23;
				break;
			case 'cg':
				$mass = $input_measurement / 1e22;
				break;
			case 'mg';
				$mass = $input_measurement / 1e21;
				break;
			case 'μg':
				$mass = $input_measurement / 1e18;
				break;
			case 'ng':
				$mass = $input_measurement / 1e15;
				break;
			case 'pg':
				$mass = $input_measurement / 1e12;
				break;
			case 'fg':
				$mass = $input_measurement / 1e9;
				break;
			case 'ag':
				$mass = $input_measurement / 1e6;
				break;
			case 'zg':
				$mass = $input_measurement / 1000;
				break;
			case 't':
				$mass = $input_measurement / 1e27 / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / 1e27 / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / 1e27 / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 't':
		switch ( $output_unit ) {
			case 'lb':
				$mass = $input_measurement * $t_to_lb;
				break;
			case 'oz':
				$mass = $input_measurement * $t_to_lb * $lb_to_oz;
				break;
			case 'Yg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg / 1e21;
				break;
			case 'Zg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg / 1e18;
				break;
			case 'Eg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg / 1e15;
				break;
			case 'Pg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg / 1e12;
				break;
			case 'Tg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg / 1e9;
				break;
			case 'Gg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg / 1e6;
				break;
			case 'Mg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg / 1000;
				break;
			case 'kg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg;
				break;
			case 'hg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 10;
				break;
			case 'dag':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 100;
				break;
			case 'g':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * $kilo;
				break;
			case 'dg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 10000;
				break;
			case 'cg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 100000;
				break;
			case 'mg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 1e6;
				break;
			case 'μg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 1e9;
				break;
			case 'ng':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 1e12;
				break;
			case 'pg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 1e15;
				break;
			case 'fg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 1e18;
				break;
			case 'ag':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 1e21;
				break;
			case 'zg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 1e24;
				break;
			case 'yg':
				$mass = $input_measurement * $t_to_lb * $lb_to_kg * 1e27;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'lb':
		switch ( $output_unit ) {
			case 't':
				$mass = $input_measurement / $t_to_lb;
				break;
			case 'oz':
				$mass = $input_measurement * $lb_to_oz;
				break;
			case 'Yg':
				$mass = $input_measurement * $lb_to_kg * $kilo / 1e26;
				break;
			case 'Zg':
				$mass = $input_measurement * $lb_to_kg * $kilo / 1e23;
				break;
			case 'Eg':
				$mass = $input_measurement * $lb_to_kg * $kilo / 1e20;
				break;
			case 'Pg':
				$mass = $input_measurement * $lb_to_kg * $kilo / 1e17;
				break;
			case 'Tg':
				$mass = $input_measurement * $lb_to_kg * $kilo / 1e14;
				break;
			case 'Gg':
				$mass = $input_measurement * $lb_to_kg * $kilo / 1e11;
				break;
			case 'Mg':
				$mass = $input_measurement * $lb_to_kg * $kilo / 1e8;
				break;
			case 'kg':
				$mass = $input_measurement * $lb_to_kg;
				break;
			case 'hg':
				$mass = $input_measurement * $lb_to_kg * 10;
				break;
			case 'dag':
				$mass = $input_measurement * $lb_to_kg * 100;
				break;
			case 'g':
				$mass = $input_measurement * $lb_to_kg * $kilo;
				break;
			case 'dg':
				$mass = $input_measurement * $lb_to_kg * 10000;
				break;
			case 'cg':
				$mass = $input_measurement * $lb_to_kg * 100000;
				break;
			case 'mg':
				$mass = $input_measurement * $lb_to_kg * 1e6;
				break;
			case 'μg':
				$mass = $input_measurement * $lb_to_kg * 1e9;
				break;
			case 'ng':
				$mass = $input_measurement * $lb_to_kg * 1e12;
				break;
			case 'pg':
				$mass = $input_measurement * $lb_to_kg * 1e15;
				break;
			case 'fg':
				$mass = $input_measurement * $lb_to_kg * 1e18;
				break;
			case 'ag':
				$mass = $input_measurement * $lb_to_kg * 1e21;
				break;
			case 'zg':
				$mass = $input_measurement * $lb_to_kg * 1e24;
				break;
			case 'yg':
				$mass = $input_measurement * $lb_to_kg * 1e27;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	case 'oz':
		switch ( $output_unit ) {
			case 't':
				$mass = $input_measurement / $lb_to_oz / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / $lb_to_oz;
				break;
			case 'Yg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * $kilo / 1e26;
				break;
			case 'Zg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * $kilo / 1e23;
				break;
			case 'Eg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * $kilo / 1e20;
				break;
			case 'Pg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * $kilo / 1e17;
				break;
			case 'Tg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * $kilo / 1e14;
				break;
			case 'Gg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * $kilo / 1e11;
				break;
			case 'Mg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * $kilo / 1e8;
				break;
			case 'kg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg;
				break;
			case 'hg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 10;
				break;
			case 'dag':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 100;
				break;
			case 'g':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * $kilo;
				break;
			case 'dg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 10000;
				break;
			case 'cg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 100000;
				break;
			case 'mg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 1e6;
				break;
			case 'μg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 1e9;
				break;
			case 'ng':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 1e12;
				break;
			case 'pg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 1e15;
				break;
			case 'fg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 1e18;
				break;
			case 'ag':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 1e21;
				break;
			case 'zg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 1e24;
				break;
			case 'yg':
				$mass = $input_measurement / $lb_to_oz * $lb_to_kg * 1e27;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
	default:
		switch ( $output_unit ) {
			case 'Yg':
				$mass = $input_measurement / $yotta;
				break;
			case 'Zg':
				$mass = $input_measurement / $zetta;
				break;
			case 'Eg':
				$mass = $input_measurement / $exa;
				break;
			case 'Pg':
				$mass = $input_measurement / $peta;
				break;
			case 'Tg':
				$mass = $input_measurement / $tera;
				break;
			case 'Gg':
				$mass = $input_measurement / $giga;
				break;
			case 'Mg':
				$mass = $input_measurement / $mega;
				break;
			case 'kg':
				$mass = $input_measurement / $kilo;
				break;
			case 'hg':
				$mass = $input_measurement / $hecto;
				break;
			case 'dag':
				$mass = $input_measurement / $deca;
				break;
			case 'dg':
				$mass = $input_measurement / $deci;
				break;
			case 'cg':
				$mass = $input_measurement / $centi;
				break;
			case 'mg':
				$mass = $input_measurement / $milli;
				break;
			case 'μg';
				$mass = $input_measurement / $micro;
				break;
			case 'ng':
				$mass = $input_measurement / $nano;
				break;
			case 'pg':
				$mass = $input_measurement / $pico;
				break;
			case 'fg':
				$mass = $input_measurement / $femto;
				break;
			case 'ag':
				$mass = $input_measurement / $atto;
				break;
			case 'zg':
				$mass = $input_measurement / $zepto;
				break;
			case 'yg':
				$mass = $input_measurement / $yocto;
				break;
			case 't':
				$mass = $input_measurement / $kilo / $lb_to_kg / $t_to_lb;
				break;
			case 'lb':
				$mass = $input_measurement / $kilo / $lb_to_kg;
				break;
			case 'oz':
				$mass = $input_measurement / $kilo / $lb_to_kg * $lb_to_oz;
				break;
			default:
				$mass = $input_measurement;
				break;
		}
		break;
}
