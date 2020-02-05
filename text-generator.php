<html lang='en'>
	<head>
		<meta charset='UFT-8'>
		<Title>Text Generator App</Title>
		<meta name="robots" content="text-generator, php">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<meta name="description" content="Using this application user can genertae or check combined value very easily">
		<meta name="og:title" property="og:title" content="Text Generator App">
		<link rel='stylesheet' href='assets/fonts/google-font.css'>
		<link rel='stylesheet' href='assets/css/style.css'>
		<link rel='stylesheet' href='assets/css/responsive.css'>
		<link rel='stylesheet' href='assets/bootstrap-4.4.1/dist/css/bootstrap.min.css'>
		<link rel='icon' href='https://i.ya-webdesign.com/images/gear-logo-png.png'>
	</head>
	<body>
		<?php require_once('libs/Validator.php');?>
			<div class='form-area'>
				<h1>Word Generator</h1>
				<form method='POST'>
					<div class='form-group'>
						<textarea name='txtArea1' id='txtArea1' class='form-control' placeholder='Enter list no  1 .....' style='padding:10px;height:100px;'><?php if(isset($_POST['txtArea1'])){echo $_POST['txtArea1'];}?></textarea>
						<small class="text-muted"><i>one word per line</i></small>
						<?php if(isset($msg['txt1_err'])):?>
							<p style='color:red;'><?php echo $msg['txt1_err'];?></p>
						<?php endif; ?>
					</div>
					<div class='form-group'>
						<textarea name='txtArea2' id='txtArea2' class='form-control' placeholder='Enter list no  2 .....' style='padding:10px;height:100px;' cols='5'><?php if(isset($_POST['txtArea2'])){echo $_POST['txtArea2'];}?></textarea>
						<small class="text-muted"><i>one word per line</i></small>
						<?php if(isset($msg['txt2_err'])):?>
							<p style='color:red;'><?php echo $msg['txt2_err'];?></p>
						<?php endif; ?>
					</div>
					<div class='form-group computer-view'>
							<div>
							     <input type='radio' name='operation' value='a' <?php if (isset($_POST['operation']) && $_POST['operation'] == 'a') {echo 'checked';} ?>> No Separation With Space/Hyphen
							</div>
							<div>
							<input type='radio' name='operation' value='b' <?php if (isset($_POST['operation']) && $_POST['operation'] == 'b') {echo 'checked';} ?>> Separate With Space
							</div>
							<div>
							   <input type='radio' name='operation' value='c' <?php if (isset($_POST['operation']) && $_POST['operation'] == 'c') {echo 'checked';} ?>> Separate With Hyphen
							</div>
							
						
						
					</div>
					<div>
					<?php if(isset($msg['opt_err'])):?>
							<p style='color:red;'><?php echo $msg['opt_err'];?></p>
						<?php endif; ?>
					</div>
					
					<button type='submit' name='btn' id='btn' class='btn btn-primary btn-md  btn-block'>Generate Now</button>
				</form>
			</div>
			<div class='combined-result-area'>
				<div class='combined-area float-left'>
					<div class='combined-result'>
						Generated Text Result
					</div>
					<div class='result-area'>
						<?php foreach($result as $item):?>
							<div class='result float-left'><?=$item;?></div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
	</body>
</html>