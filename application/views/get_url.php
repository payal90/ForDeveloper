<!DOCTYPE html>
<html lang="en" class="no-js"> 
<head>
	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<!-- !CSS -->
	<link rel="stylesheet" href="/css/style.css?v=1"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<!-- !Body -->
<body>
	<div class="container text-center">
		<h1>URL Short</h1>
		<form action="" method="post" class="form-inline">
			<div class="form-group">
				<label for="url">URL to Shorten:</label>
				<input type="url" class="form-control" id="url" placeholder="Enter Url" name="url">
			</div>
			<button type="submit" class="btn btn-default btn-info">Get Short</button>
		</form>
		<table class="table table-bordered mt-20">
			<thead>
			  <tr>
				<th class="text-center">#</th>
				<th class="text-center">URL</th>
			  </tr>
			</thead>
			
			<tbody>
			<?php $count=1; if(isset($short_url)){ ?>
			  <tr>
				<td><?php echo $count++;?></td>
				<td><?php echo '<a href="'.base_url().$short_url.'" target="_blank" class="shorty_url">'.base_url().$short_url.'</a>';?></td>
			  </tr>
			  <?php } ?>
			</tbody>
			
		</table>
    </div>
		
</section><!-- /main -->
</div><!--!/#container -->
	<style>
	.table{
		border-radius: 5px;
		width: 40%;
		margin: 0px auto;
		float: none;
	}
	.mt-20{
		margin-top: 20px;
	}
	</style>
</body>
</html>