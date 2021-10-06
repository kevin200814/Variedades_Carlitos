<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$page_title ?></title>
	

</head>
<body>
	<?php $this->load->view('template/header'); ?>
	<?php $this->load->view($view,$data_view); ?>
	<?php $this->load->view('template/footer'); ?>

	

</body>
</html>