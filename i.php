<html>
<head>
<?php 
	$title = "Homework Feed";
	$description = "\"Problems to practice several subjects.\"";
	include 'include/head-common.php'; 
?>

<?php
require_once(dirname(__FILE__) . '/core/config.php');
require_once(dirname(__FILE__) . '/core/functions.php');
?>

</head>

<body>

<?php include 'include/header.php'; ?>
<?php include 'include/toggle-ans.php'; ?>
<?php include 'include/hlight.php'; ?>

<div class="container-fluid">

<?php 
// TEST ELEMENT 1
// include 'hw/element.php'
?>
	
		<div class='form'>
			<div class='form-top'>
				<p class='subject'>".$result['subject']."</p>
				<p class='topic'>".$result['topic']."</p>
			</div>
			<div class='form-top-right'>
				<a href='' data-title='".$result['source']."' data-content='Tags: ".$result['tags']."' data-placement='right'>
					<i class='material-icons'>more_vert</i>
				</a>
			</div>
			<div class='question'>
			<div class='figure'>
				<img src='images/".$result['figure']."' />
			</div>
				<p>".$result['question']."</p>
			</div>
			<div class='toggle'>".$result['answer']."</div>
		</div>

</div>
<?php include 'include/footer.php' ?>
<?php include 'include/scripts.php' ?>
</body>
</html>