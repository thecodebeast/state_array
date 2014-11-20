<html>
<head>
	<title>PHP State Array, Select HTML States, Option for USA States, HTML states dropdown</title>
	<meta name="description" content="PHP USA State Array, Select Options for States">
    <meta name="keywords" content="HTML states dropdown, USA States Array PHP, PHP Snippet,code beast, PHP Snippet, Select Option Array PHP States">
</head>
<body>
	<?php
		//states array
		$states = array(
		    'AL'=>'Alabama',
		    'AK'=>'Alaska',
		    'AZ'=>'Arizona',
		    'AR'=>'Arkansas',
		    'CA'=>'California',
		    'CO'=>'Colorado',
		    'CT'=>'Connecticut',
		    'DE'=>'Delaware',
		    'DC'=>'District of Columbia',
		    'FL'=>'Florida',
		    'GA'=>'Georgia',
		    'HI'=>'Hawaii',
		    'ID'=>'Idaho',
		    'IL'=>'Illinois',
		    'IN'=>'Indiana',
		    'IA'=>'Iowa',
		    'KS'=>'Kansas',
		    'KY'=>'Kentucky',
		    'LA'=>'Louisiana',
		    'ME'=>'Maine',
		    'MD'=>'Maryland',
		    'MA'=>'Massachusetts',
		    'MI'=>'Michigan',
		    'MN'=>'Minnesota',
		    'MS'=>'Mississippi',
		    'MO'=>'Missouri',
		    'MT'=>'Montana',
		    'NE'=>'Nebraska',
		    'NV'=>'Nevada',
		    'NH'=>'New Hampshire',
		    'NJ'=>'New Jersey',
		    'NM'=>'New Mexico',
		    'NY'=>'New York',
		    'NC'=>'North Carolina',
		    'ND'=>'North Dakota',
		    'OH'=>'Ohio',
		    'OK'=>'Oklahoma',
		    'OR'=>'Oregon',
		    'PA'=>'Pennsylvania',
		    'RI'=>'Rhode Island',
		    'SC'=>'South Carolina',
		    'SD'=>'South Dakota',
		    'TN'=>'Tennessee',
		    'TX'=>'Texas',
		    'UT'=>'Utah',
		    'VT'=>'Vermont',
		    'VA'=>'Virginia',
		    'WA'=>'Washington',
		    'WV'=>'West Virginia',
		    'WI'=>'Wisconsin',
		    'WY'=>'Wyoming',
		);
	?>

	<div style="text-align:center;margin-top:100px;">
		<h1>PHP State Array, Select HTML States, HTML states dropdown</h1>
		<form>
			<select>
				<?php foreach ($states as $key => $value) { ?>
				<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
				<?php } ?>
			</select>
		</form>
		<a href="http://thecodebeast.com"> From The Code Beast</a>
	</div>
</body>
</html>