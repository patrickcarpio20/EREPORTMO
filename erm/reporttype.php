<?php
function ReportType($report){
	switch ($report) {
		case '0':
			return 'tbl_crimes';
			break;
		case '1':
			return 'tbl_complains';
			break;
		case '2':
			return 'tbl_concerns';
			break;
		case '3':
			return 'tbl_suggestions';
			break;
		default:
			return 'Code Error';
			break;
	}
}
?>