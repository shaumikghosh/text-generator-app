<?php

include_once('TextGenerator.php');

$result = [];

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
	$tx1 = $_POST['txtArea1'];
	$tx2 = $_POST['txtArea2'];
	
	if ( $tx1 == '' ) {
		$msg['txt1_err'] = 'This field is required!';
	}
	
	if ( $tx2 == '' ) {
		$msg['txt2_err'] = 'This field is required!';
	}

	if (isset($_POST['operation']) == ''){
		$msg['opt_err'] = 'Operation type selection is required!';
	}
	
	if ($tx1 != '' && $tx2 != '' &&  isset($_POST['operation'])  != ''){
		$gt = new TextGenerator($tx1, $tx2, $_POST['operation']);
		$result = $gt->generate_result();
	}
}