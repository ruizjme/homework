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

<?php
$mysqli = mysqli_init();
if (!$mysqli) {
    die('mysqli_init failed');
}

if (!$mysqli->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
    die('Setting MYSQLI_INIT_COMMAND failed');
}

if (!$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
    die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
}

if (!$mysqli->real_connect('localhost', 'root', 'root', 'hw')) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

?>

</head>

<body>

<?php 
include 'include/header.php';
include 'include/toggle-ans.php';
include 'include/hlight.php'; 
?>

<div class="container-fluid">

<?php 
// TEST ELEMENT 1
// include 'hw/element.php'
?>

	<?php

	$q_sql = "SELECT * FROM t_questions";
	$to_sql = "SELECT * FROM t_topics";


	$questions = mysqli_query($mysqli, $q_sql);
	$topics = mysqli_query($mysqli, $to_sql);
	$topic = mysqli_fetch_array($topics);
	$n = 0;

	while($question = mysqli_fetch_array( $questions )){
		echo "
		<div class='form'>
			<div class='form-top'>
				<p class='subject'>".$topic['to_subject']."</p>
				<p class='topic'>".$topic['to_topic']."</p>
			</div>
			<div class='form-top-right'>
				<a href='' data-title='".$result['source']."' data-content='Tags: ".$result['tags']."' data-placement='right'>
					<i class='material-icons'>more_vert</i>
				</a>
			</div>
			<div class='question'>";
			if ($question['figure']) {
			echo "
			<div class='figure'>
				<img src='images/".$question['figure']."' />
			</div>";
			}
		echo "	
				<p>".$question['question']."</p>
			</div>";
			
		echo "
			<div class='toggle'>".$question['answer']."</div>
		</div>";
	}


$mysqli->close();
?>

</div>
<?php include 'include/footer.php' ?>
<?php include 'include/scripts.php' ?>
</body>
</html>