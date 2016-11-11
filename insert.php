<html>
<head>
<?php 
	$title = "Upload new problem to Database";
	include 'include/head-common.php'; 
?>

<?php
require_once(dirname(__FILE__) . '/extlib/vdaemon/vdaemon.php');
require_once(dirname(__FILE__) . '/extlib/recaptchalib.php');
require_once(dirname(__FILE__) . '/core/config.php');
require_once(dirname(__FILE__) . '/core/functions.php');
?>

</head>

<body>

<?php include 'include/header.php'; ?>
<?php include 'include/toggle-ans.php'; ?>
<?php include 'include/hlight.php'; ?>


<div class="container-fluid">
<!-- ******************** -->


<!-- 
<?php
$msg = $_GET['msg'];

if ( $msg == '1' ) {
	echo '<h2 style="color:#f26522">NEW ENTRY RECORDED! — <a href="./search.php" style="color:#333;">VIEW ENTRIES</a></h2>';
}
?> -->


<form class="form" action="core/process.php" method="post" id="" runat="vdaemon">
<vlsummary class="error" headertext="Error(s) found:">
<input type="hidden" name="formID" value="new_question" />
<input type="hidden" name="redirect_to" value="" />

<section id="question_info">

	<h3>Question</h3><hr>

	<p>
	<vllabel errclass="error" validators="question_req" for="question" cerrclass="controlerror"></vllabel>
	<input type="text" name="question" class="input" placeholder="Question..."/>
	<vlvalidator name="question_req" type="required" control="question" errmsg="Question required.">

	<vllabel errclass="error" validators="answer_req" for="answer" cerrclass="controlerror"></vllabel>
	<input type="text" name="answer" class="input" placeholder="Answer"/>
	<vlvalidator name="answer_req" type="required" control="answer" errmsg="Answer required.">
	</p>
		
	</section>

<section id="question_meta">

<h3>Question Metadata</h3><hr>

<p>Subject <select name="subject">
	<option value="Electronics">Electronics</option>
	<option value="Mathematics">Mathematics</option>
	<option value="Energy and Motion">Energy and Motion</option>
	<option value="Mechanics">Mechanics of Structures</option>
</select></p>

<?php
	echo recaptcha_get_html(R_PUBLIC);
?>
<br />

<input type="submit" value="Submit" />
</form>

<!-- ******************** -->
</div>

<?php include 'include/footer.php' ?>
<?php include 'include/scripts.php' ?>

</body>
</html>

<?php VDEnd(); ?>