<?php
#Units and Measurement
$input_unit        = $_GET['unit-to-convert-from'];
$output_unit       = $_GET['unit-to-convert-to'];
$input_length = $_GET['length'];

$ft_to_in = 12;
$yd_to_ft = 3;
$mi_to_yd = 1760;
$yd_to_m = .9144;
$au_to_m = 1.495978707e11;
$ly_to_m = 9.4607304725808e15;
$pc_to_au = 648000 / pi();
switch ( $input_unit ) {
	case 'mi':
		switch ( $output_unit ) {
			case 'm':
				$output_length = $input_length * $mi_to_yd * $yd_to_m;
				break;
			case 'yd':
				$output_length = $input_length * $mi_to_yd;
				break;
			case 'ft':
				$output_length = $input_length * $mi_to_yd * $yd_to_ft;
				break;
			case 'in':
				$output_length = $input_length * $mi_to_yd * $yd_to_ft * $ft_to_in;
				break;
			case 'pc':
				$output_length = $input_length * $mi_to_yd * $yd_to_m / $au_to_m / $pc_to_au;
				break;
			case 'ly':
				$output_length = $input_length * $mi_to_yd * $yd_to_m / $ly_to_m;
				break;
			case 'au':
				$output_length = $input_length * $mi_to_yd * $yd_to_m / $au_to_m;
				break;
			default:
				$output_length = $input_length;
				break;
		}
		break;
	case 'yd':
		switch ( $output_unit ) {
			case 'm':
				$output_length = $input_length * $yd_to_m;
				break;
			case 'mi':
				$output_length = $input_length / $mi_to_yd;
				break;
			case 'ft':
				$output_length = $input_length * $yd_to_ft;
				break;
			case 'in':
				$output_length = $input_length * $yd_to_ft * $ft_to_in;
				break;
			case 'pc':
				$output_length = $input_length * $yd_to_m / $au_to_m / $pc_to_au;
				break;
			case 'ly':
				$output_length = $input_length * $yd_to_m / $ly_to_m;
				break;
			case 'au':
				$output_length = $input_length * $yd_to_m / $au_to_m;
				break;
			default:
				$output_length = $input_length;
				break;
		}
		break;
	case 'ft':
		switch ( $output_unit ) {
			case 'm':
				$output_length = $input_length / $yd_to_ft * $yd_to_m;
				break;
			case 'mi':
				$output_length = $input_length / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$output_length = $input_length / $yd_to_ft;
				break;
			case 'in':
				$output_length = $input_length * $ft_to_in;
				break;
			case 'pc':
				$output_length = $input_length / $yd_to_ft * $yd_to_m / $au_to_m / $pc_to_au;
				break;
			case 'ly':
				$output_length = $input_length / $yd_to_ft * $yd_to_m / $ly_to_m;
				break;
			case 'au':
				$output_length = $input_length / $yd_to_ft * $yd_to_m / $au_to_m;
				break;
			default:
				$output_length = $input_length;
				break;
		}
		break;
	case 'in':
		switch ( $output_unit ) {
			case 'm':
				$output_length = $input_length / $ft_to_in / $yd_to_ft * $yd_to_m;
				break;
			case 'mi':
				$output_length = $input_length / $ft_to_in / $yd_to_ft / $mi_to_yd;
				break;
			case 'yd':
				$output_length = $input_length / $ft_to_in / $yd_to_ft;
				break;
			case 'ft':
				$output_length = $input_length / $ft_to_in;
				break;
			case 'pc':
				$output_length = $input_length / $ft_to_in / $yd_to_ft * $yd_to_m / $au_to_m / $pc_to_au;
				break;
			case 'ly':
				$output_length = $input_length / $ft_to_in / $yd_to_ft * $yd_to_m / $ly_to_m;
				break;
			case 'au':
				$output_length = $input_length / $ft_to_in / $yd_to_ft * $yd_to_m / $au_to_m;
				break;
			default:
				$output_length = $input_length;
				break;
		}
		break;
	case 'pc':
		switch ( $output_unit ) {
			case 'm':
				$output_length = $input_length * $pc_to_au * $au_to_m;
				break;
			case 'mi':
				$output_length = $input_length * $pc_to_au * $au_to_m / $yd_to_m / $mi_to_yd;
				break;
			case 'yd':
				$output_length = $input_length * $pc_to_au * $au_to_m / $yd_to_m;
				break;
			case 'ft':
				$output_length = $input_length * $pc_to_au * $au_to_m / $yd_to_m * $yd_to_ft;
				break;
			case 'in':
				$output_length = $input_length * $pc_to_au * $au_to_m / $yd_to_m * $yd_to_ft * $ft_to_in;
				break;
			case 'ly':
				$output_length = $input_length * $pc_to_au * $au_to_m / $ly_to_m;
				break;
			case 'au':
				$output_length = $input_length * $pc_to_au;
				break;
			default:
				$output_length = $input_length;
				break;
		}
		break;
	case 'ly':
		switch ( $output_unit ) {
			case 'm':
				$output_length = $input_length * $ly_to_m;
				break;
			case 'mi':
				$output_length = $input_length * $ly_to_m / $yd_to_m / $mi_to_yd;
				break;
			case 'yd':
				$output_length = $input_length * $ly_to_m / $yd_to_m;
				break;
			case 'ft':
				$output_length = $input_length * $ly_to_m / $yd_to_m * $yd_to_ft;
				break;
			case 'in':
				$output_length = $input_length * $ly_to_m / $yd_to_m * $yd_to_ft * $ft_to_in;
				break;
			case 'pc':
				$output_length = $input_length * $ly_to_m / $au_to_m / $pc_to_au;
				break;
			case 'au':
				$output_length = $input_length * $ly_to_m / $au_to_m;
				break;
			default:
				$output_length = $input_length;
				break;
		}
		break;
	case 'au':
		switch ( $output_unit ) {
			case 'm':
				$output_length = $input_length * $au_to_m;
				break;
			case 'mi':
				$output_length = $input_length * $au_to_m / $yd_to_m / $mi_to_yd;
				break;
			case 'yd':
				$output_length = $input_length * $au_to_m / $yd_to_m;
				break;
			case 'ft':
				$output_length = $input_length * $au_to_m / $yd_to_m * $yd_to_ft;
				break;
			case 'in':
				$output_length = $input_length * $au_to_m / $yd_to_m * $yd_to_ft * $ft_to_in;
				break;
			case 'pc':
				$output_length = $input_length * $au_to_m / $pc_to_au;
				break;
			case 'ly':
				$output_length = $input_length * $au_to_m / $ly_to_m;
				break;
			default:
				$output_length = $input_length;
				break;
		}
		break;
	default:
		switch ( $output_unit ) {
			case 'mi':
				$output_length = $input_length / $yd_to_m / $mi_to_yd;
				break;
			case 'yd':
				$output_length = $input_length / $yd_to_m;
				break;
			case 'ft':
				$output_length = $input_length / $yd_to_m * $yd_to_ft;
				break;
			case 'in':
				$output_length = $input_length / $yd_to_m * $yd_to_ft * $ft_to_in;
				break;
			case 'pc':
				$output_length = $input_length / $au_to_m / $pc_to_au;
				break;
			case 'ly':
				$output_length = $input_length / $ly_to_m;
				break;
			case 'au':
				$output_length = $input_length / $au_to_m;
				break;
			default:
				$output_length = $input_length;
				break;
		}
}
