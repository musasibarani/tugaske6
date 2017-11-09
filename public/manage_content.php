<?php require_once("../includes/db.connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
	<div id="navigation">
		<?php echo navigation($selected_subject_id, $selected_page_id); ?>
	</div>
	<div id="page">
		<h2>Manage Content</h2>
	</div>
</div>


<?php include("../includes/layouts/footer.php"); ?>
