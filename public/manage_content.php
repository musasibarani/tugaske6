<?php require_once("../includes/db.connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php inc lude("../includes/layouts/header.php"); ?>
<?php find_selected_page(); ?>

<div id="main">
	<div id="navigation">
		<?php echo navigation($current_subject, $current_page); ?>
	</div>
	<div id="page">
		<?php if ($current_subject) { ?>
			<h2>Manage Content</h2>	
			Menu name: <? php echo $current_subject["menu_name"]; ?><br />
			
		<?php } else if ($current_page) { ?>
			<h2>Manage Page </h2>	
			Menu name: <? php echo $current_page["menu_name"]; ?><br />
		
		<?php } else { ?>
			Please select a subject or a page.
		<?php }?>
	</div>
</div>


<?php include("../includes/layouts/footer.php"); ?>
