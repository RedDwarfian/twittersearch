<?php 
// We're going to assume that we're on the East Coast for now.  
// TODO: Allow user to display their local timezone. 
date_default_timezone_set("America/New_York");
 ?>
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

		<!-- Twitter Typeahead -->
		<script type="text/javascript" src="./js/typeahead.bundle.js"></script>

		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="stylesheet" href="./css/main.css">
		<script src="./js/main.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>PHP Test</h1>
					<p>Hello World. The time is now <?php echo date(DATE_RFC822); ?></p>
				</div>
				<div class="col-xs-12">
					<h1>Connecting to Twitter</h1>
					<h2>Search that Username Exists</h2>
				</div>
				<div class="col-sm-6">
					<form action="" class="testform" data-dest="#usernameExistsSearchReply">
						<input type="hidden" name="testtype" value="exists">
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" id="usernameExistsSearch" name="username" required="required" placeholder="Username">
								<span class="input-group-btn"><button class="btn btn-primary btn-search" id="usernameExistsSearchButton">Search Username</button></span>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-6"><pre id="usernameExistsSearchReply"></pre></div>
				<div class="col-xs-12">
					<h2>Get Tweet IDs By Username</h2>
				</div>
				<div class="col-sm-6">
					<form action="" class="testform" data-dest="#usernameIdSearchReply">
						<input type="hidden" name="testtype" value="tweetIds">
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" id="usernameIdSearch" name="username" required="required" placeholder="Username">
								<span class="input-group-btn"><button class="btn btn-primary btn-search" type="submit" id="usernameIdSearchButton">Search Username</button></span>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-6"><pre id="usernameIdSearchReply"></pre></div>
				<div class="col-xs-12">
					<h2>Display Tweets By Username <small>(Default 10)</small></h2>
				</div>
				<div class="col-sm-6">
					<form action="" class="testform" data-dest="#usernameSearchReply">
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" id="usernameSearch" name="username" required="required" placeholder="Username">
								<span class="input-group-btn"><button class="btn btn-primary btn-search" type="submit" id="usernameSearchButton">Search Username</button></span>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-6"><div id="usernameSearchReply" class="twitterHideable"></div></div>
				<div class="col-xs-12">
					<h2>Display Number of Tweets By Username</h2>
				</div>
				<div class="col-sm-6">
					<form action="" class="testform" data-dest="#usernameSearchNumbersReply">
						<div class="form-group">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control" id="usernameSearchNumbers" name="username" required="required" placeholder="Username">
									<span class="input-group-btn" style="width:0px;"></span>
									<input type="number" class="form-control" id="tweetsSearchNumbers" name="number" placeholder="Number" value="10">
									<span class="input-group-btn"><button class="btn btn-primary btn-search" type="submit" id="usernameSearchNumbersButton">Search Username</button></span>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-6"><div id="usernameSearchNumbersReply" class="twitterHideable"></div></div>
				<div class="col-xs-12">
					<h2>Display Number of Tweets By Username or Keyword</h2>
				</div>
				<div class="col-sm-6">
					<form action="" class="testform" data-dest="#usernameKeywordSearchReply">
						<div class="form-group">
							<label for="keywordSearch" class="sr-only">Keyword</label>
							<input type="text" class='form-control' id='keywordSearch' name="keyword" placeholder="Keyword">
						</div>
						<div class="form-group">
							<label for="usernameKeywordSearch" class="sr-only">Username</label>
							<label for="tweetsKeywordSearch" class="sr-only">Number of Tweets</label>
							<div class="input-group">
								<input type="text" class="form-control" id="usernameKeywordSearch" name="username" placeholder="Username">
								<span class="input-group-btn" style="width:0px;"></span>
								<input type="number" class="form-control" id="tweetsKeywordSearch" name="number" placeholder="Number" value="10">
								<span class="input-group-btn"><button class="btn btn-primary btn-search" type="submit" id="usernameKeywordSearchButton">Search</button></span>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-6"><div id="usernameKeywordSearchReply" class="twitterHideable"></div></div>
				<div class="col-xs-12">
					<h2>Display Number of Tweets By Username or Keyword, with Latitude/Longitude/Range</h2>
				</div>
				<div class="col-sm-6">
					<form action="" class="testform" data-dest="#locSearchReply">
						<div class="form-group">
							<label for="keywordLocSearch" class="sr-only">Keyword</label>
							<input type="text" class='form-control' id='keywordLocSearch' name="keyword" placeholder="Keyword">
						</div>
						<div class="form-group">
							<label for="usernameLocSearch" class="sr-only">Username</label>
							<label for="tweetsLocSearch" class="sr-only">Number of Tweets</label>
							<div class="input-group">
								<input type="text" class="form-control" id="usernameLocSearch" name="username" placeholder="Username">
								<span class="input-group-btn" style="width:0px;"></span>
								<input type="number" class="form-control" id="tweetsLocSearch" name="number" placeholder="Number" value="10">
							</div>
						</div>
						<div class="form-group">
							<label for="latitudeLocSearch" class="sr-only">Latitude</label>
							<label for="longitudeLocSearch" class="sr-only">Longitude</label>
							<label for="rangeLocSearch" class="sr-only">Range (in miles)</label>
							<div class="input-group">
								<input type="text" class="form-control" id="latitudeLocSearch" name="latitude" placeholder="Latitude">
								<span class="input-group-addon">,</span>
								<input type="text" class="form-control" id="longitudeLocSearch" name="longitude" placeholder="Longitude">
								<span class="input-group-btn" style="width:0px;"></span>
								<input type="text" class="form-control" id="rangeLocSearch" name="range" placeholder="Miles" value="10">
								<span class="input-group-addon">mi</span>
							</div>
						</div>
						<div class="form-group"><button class="btn btn-primary btn-search" type="submit" id="locSearchButton">Search</button></div>
					</form>
				</div>
				<div class="col-sm-6"><div id="locSearchReply" class="twitterHideable"></div></div>
				<!--<div class="col-xs-12">
					<h2>Display Number of Tweets By Username or Keyword, with Latitude/Longitude/Range and Typeahead</h2>
				</div>
				<div class="col-sm-6">
					<form action="" class="testform" data-dest="#THSearchReply">
						<div class="form-group">
							<label for="keywordTHSearch" class="sr-only">Keyword</label>
							<input type="text" class='form-control' id='keywordTHSearch' name="keyword" placeholder="Keyword">
						</div>
						<div class="form-group">
							<label for="usernameTHSearch" class="sr-only">Username</label>
							<label for="tweetsTHSearch" class="sr-only">Number of Tweets</label>
							<div class="input-group">
								<input type="text" class="form-control" id="usernameTHSearch" name="username" placeholder="Username">
								<span class="input-group-btn" style="width:0px;"></span>
								<input type="number" class="form-control" id="tweetsTHSearch" name="number" placeholder="Number" value="10">
							</div>
						</div>
						<div class="form-group">
							<label for="typeaheadTHSearch" class="sr-only">Pick City and State</label>
							<input type="text" class="form-control typeahead" id="typeaheadTHSearch" name="location" placeholder="City, ST">
						</div>
						<div class="form-group">
							<label for="latitudeTHSearch" class="sr-only">Latitude</label>
							<label for="longitudeTHSearch" class="sr-only">Longitude</label>
							<label for="rangeTHSearch" class="sr-only">Range (in miles)</label>
							<div class="input-group">
								<input type="text" class="form-control" id="latitudeTHSearch" name="latitude" placeholder="Latitude">
								<span class="input-group-addon">,</span>
								<input type="text" class="form-control" id="longitudeTHSearch" name="longitude" placeholder="Longitude">
								<span class="input-group-btn" style="width:0px;"></span>
								<input type="text" class="form-control" id="rangeTHSearch" name="range" placeholder="Miles" value="10">
								<span class="input-group-addon">mi</span>
							</div>
						</div>
						<div class="form-group"><button class="btn btn-primary btn-search" type="submit" id="THSearchButton">Search</button></div>
					</form>
				</div>
				<div class="col-sm-6"><div id="THSearchReply"></div></div>-->
			</div>
		</div>
		<script src="./js/test.js"></script>
	</body>
</html>