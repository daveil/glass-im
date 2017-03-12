<html  manifest="demo.appcache">
<head>
	<title>Glass IM</title>
	<?php include('meta.php')?>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="glass-im.css" />
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-3">
				<div class="glass-table middle center full height width">
					<div class="">
						<h1>DEMO</h1>
						<ul class="nav nav-pills nav-stacked half width margin-center">
							<li><a href="#text-img">Text / Images</a></li>
							<li><a href="#video">Video</a></li>
							<li><a href="#3D">3D Model</a></li>
							<li><a href="#hologram">Hologram</a></li>
							<li><a href="#room-designer">Virtual Room Designer</a></li>
							
						</ul>
					</div>
				</div>
				
			</div>
			<div class="col-md-8 col-sm-9">
				<div id="text-img" class="media-item active glass-table middle center full height width">
					<div class="media-wrapper">
						<h2>One Mariposa</h2>
						<img src="img/OM-Drone.jpg" alt="OM Drone">
						<br /><br />
						<p class="text-center margin-center half width">
							Set in one of the few quiet residential areas of Quezon City, One Mariposa is your sanctuary in the city while still being minutes away from all its fun and excitement.
						</p>
					</div>
				</div>
				<div id="video" class="media-item  glass-table middle center full height width">
					<div class="media-wrapper">
						<div class="embed-responsive embed-responsive-16by9">
						<!-- <iframe class=" embed-responsive-item"  src="https://player.vimeo.com/video/201960774" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
						</div>
					</div>
				</div>
				
				<div id="3D" class="media-item  glass-table middle center full height width">
					<div class="media-wrapper">
						<div class="embed-responsive embed-responsive-4by3">
							<!-- <iframe class="margin-center embed-responsive-item" width="640" height="480" src="https://sketchfab.com/models/b9f6dc4ace8f4edc8e136cb5ec33cc97/embed" frameborder="0" allowvr allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel=""></iframe>-->
						</div>
					</div>
				</div>
				<div id="hologram" class="media-item  glass-table middle center full height width">
					<div class="media-wrapper">
						<div class="embed-responsive embed-responsive-16by9">
							<!-- <iframe class="margin-center embed-responsive-item"  width="560" height="315" src="https://www.youtube.com/embed/Y60mfBvXCj8" frameborder="0" allowfullscreen></iframe>-->
						</div>
					</div>
				</div>
				<div id="room-designer" class="media-item  glass-table middle center full height width">
					<div class="media-wrapper">
						<div class="embed-responsive embed-responsive-4by3">
							<!-- <iframe class="margin-center embed-responsive-item"  width="560" height="315" src="room-designer/index.php" frameborder="0" allowfullscreen></iframe>-->
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="glass-im.js"></script>
</body>
</html> 