<?php
/**
 * A Dribbble API Method Map
 *
 * Refer to the apis plugin for how to build a method map
 * https://github.com/ProLoser/CakePHP-Api-Datasources
 *
 */
$config['Apis']['Dribbble']['hosts'] = array(
	//'oauth' => 'dribbble.com/oauth',
	'rest' => 'dribbble.com/api/rest/v2',
);
//
// http://dribbble.com/api
$config['Apis']['Dribbble']['oauth'] = array(
	'version' => '1.0',
	'scheme' => 'https',
	'login' => 'authenticate', //Exactly like authorize, just auto-redirects
	'request' => 'request_token',
	'authorize' => 'authorize',
	'access' => 'access_token',
);
$config['Apis']['Dribbble']['read'] = array(
	// field
	'people' => array(
		'Dribbble.people.findByEmail' => array(
			'email',
		),
		// api url
		'Dribbble.people.getInfo' => array( // See 'test' section below for lighter response
			// optional conditions the api call can take
			'optional' => array(
				'user_id',
			),
		),
	),
	'albums' => array(
		'Dribbble.albums.getAll' => array(
			'optional' => array(
				'user_id',
				'sort', // Method to sort by: newest, oldest, most_played, most_commented, or most_liked.
				'page', // The page number to show.
				'per_page', // Number of items to show on each page. Max 50.
			),
		),
	),
);

$config['Apis']['Dribbble']['write'] = array(
);

$config['Apis']['Dribbble']['update'] = array(
);

$config['Apis']['Dribbble']['delete'] = array(
);