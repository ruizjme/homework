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
$link = f_sqlConnect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$q_sql = "SELECT * FROM t_questions";
$to_sql = "SELECT * FROM t_topics";

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
	<?php
	$questions = mysql_query($q_sql);
	$topics = mysql_query($to_sql);
	$topic = mysql_fetch_array($topics);
	$n = 0;

	while($question = mysql_fetch_array( $questions )){
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
	?>

</div>
<?php include 'include/footer.php' ?>
<?php include 'include/scripts.php' ?>
</body>
</html>