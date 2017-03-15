$(function(){//wrap your code here
	$(".testform").on("submit",function(e){
		e.preventDefault();
		var $this = $(this);
		// Error checking as gathering data
		// Gather Inputs
		var postVar = {};

		$this.find("input,select").each(function(i,v){
			var $v       = $(this);
			// Error checking clearing.
			$v.parent().removeClass("has-error");
			var thistype = $v.attr("name");
			var thisval  = $v.val();
			if(thisval.length) {
				postVar[thistype] = thisval;
			} else {
				if($v.attr("required") == "required") {
					$v.parent().addClass("has-error");
				}
			}
		})
		console.log(postVar);
		
		// Set up the Destination
		var dest = $this.attr("data-dest");
		if(typeof dest !== "string") {
			alert("Form misconfiguration: Missing Destination");
			return false;
		}
		var $dest = $(dest);
		if($dest.length !== 1) {
			alert("Form misconfiguration: Destination not unique or doesn't exist: "+$dest.length);
		}

		// Clear the destination
		$dest.html("").removeClass("bg-danger bg-warning bg-success");
		
		// If errors have occurred, crash out.
		if($this.find(".has-error").length) {
			$dest.addClass("bg-danger").text("Highlighted required fields are empty or blank.");
			return false;
		}

		$.post("./search.php",postVar,function(data){
			if(data.errors) {
				$dest.addClass("bg-danger").text(data.errors);
			} else {
				// If we have no tweets to render...
				if(!data.tweets) {
					$dest.addClass("bg-success").text(data.successes);	
				} else {
					// Otherwise, go through each tweet, and render them in the $dest
					if(data.tweets.length) {
						$.each(data.tweets,function(i,v){
							// Prep the destination div, to make sure the tweets are rendered inline.
							$dest.append($("<div/>",{id:"tweet_"+v,class:"tweet_wrapper"}).append($("<span/>",{class:"close"}).html("&times;")));
							$.getJSON("https://api.twitter.com/1/statuses/oembed.json?id="+v+"&align=center&callback=?",function(d){$dest.find("#tweet_"+v).append(d.html);});
						})
					} else {
						$dest.addClass("bg-warning").text("No recent tweets found for that user or keyword.")
					}
				}
			}
		},"json");
	});

	$(".twitterHideable").on("click",".close",function(e){
		$(this).closest(".tweet_wrapper").fadeOut();
	})

	// Twitter Typeahead Initilization
	
	// var citystate = new Bloodhound({
	// 	datumTokenizer: Bloodhound.tokenizers.whitespace,
	// 	queryTokenizer: Bloodhound.tokenizers.whitespace,
	// 	// url points to a json file that contains an array of country names, see
	// 	// https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
	// 	prefetch: './data/uscities.json'
	// });

	// // passing in `null` for the `options` arguments will result in the default
	// // options being used
	// $('.typeahead').typeahead(null, {
	// 	name: 'citystate',
	// 	display: 'city',
	// 	source: citystate
	// });


});