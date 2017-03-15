<!DOCTYPE html>
<html>
	<head>
		<!-- JQuery Version -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

		<!-- Bootstrap 3.3.7 -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Twitter Widgets -->
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

		<link rel="icon" href="./favicon-search.ico" type="image/x-icon"/>
		<link rel="stylesheet" href="./css/main.css">
		<script src="./js/main.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="background-cover">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
						<h1 class="text-center">Twitter Search Client</h1>
						<p class="text-center">Type in a Keyword, a Username, and a number of tweets to display. Optionally, you can also type in a latitude and longitude and a radius to search a certain area.</p>
					</div>
					<div class="col-xs-12">
						<form action="" class="testform form-horizontal" data-dest="#searchReply">
							<div class="form-group">
								<div class="col-xs-12 col-sm-6 col-md-4">
									<label for="keywordSearch" class="sr-only">Keyword</label>
									<input type="text" class='form-control' id='keywordSearch' name="keyword" placeholder="Keyword">
								</div>
								<div class="col-xs-12 col-sm-5 col-md-3">
									<label for="usernameSearch" class="sr-only">Username</label>
									<input type="text" class="form-control" id="usernameSearch" name="username" placeholder="Username">
								</div>
								<div class="col-xs-12 col-sm-1">
									<label for="tweetsSearch" class="sr-only">Number of Tweets</label>
									<input type="number" class="form-control" id="tweetsSearch" name="number" placeholder="Number" value="10">
								</div>
								<div class="col-xs-12 col-md-4">
									<label for="latitudeSearch" class="sr-only">Latitude</label>
									<label for="longitudeSearch" class="sr-only">Longitude</label>
									<label for="rangeSearch" class="sr-only">Range (in miles)</label>
									<div class="input-group">
										<input type="text" class="form-control" id="latitudeSearch" name="latitude" placeholder="Latitude">
										<span class="input-group-addon">,</span>
										<input type="text" class="form-control" id="longitudeSearch" name="longitude" placeholder="Longitude">
										<span class="input-group-btn" style="width:0px;"></span>
										<input type="text" class="form-control" id="rangeSearch" name="range" placeholder="Miles" value="10">
										<span class="input-group-addon">mi</span>
									</div>
								</div>
							</div>
							<div class="form-group text-center">
								<div class="col-xs-12">
									<button class="btn btn-primary btn-search" type="submit" id="searchButton">Find Tweets</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
						<div id="searchReply" class="twitter_hideable"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>		
	</body>
</html>