<!DOCTYPE html>
<html>
<head>
	<title>Survei Kepuasan Pelanggan | Mas Poetra</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="header">
			<h1>Survei Penilaian Kepuasan Pelanggan</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<center>
				<a href="<?php echo base_url(); ?>" class="btn btn-info">Survei</a>  <a href="<?php echo base_url('web/result'); ?>" class="btn btn-info">Hasil</a>
			</center>
			<br/>
		</div>
	</div>
	
	<!--content is here :)-->
	<?php echo $content; ?>
	<p>Distributed By <a href="https://blogbugabagi.blogspot.com" target="_blank" rel="noopener noreferrer">BlogBugaBagi</a></p>
	<hr/>
	<div class="footer">
		<p>Survei Kepuasan &copy; 2016 <a href="https://www.facebook.com/sapjayadiningrat" target="_blank" rel="noopener noreferrer">Mas Poetra</a></p><br/>
	</div>
</div>
</body>
</html>