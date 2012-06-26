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
$config['Apis']['Dribbble']['read'] = array(
	// field
	'shots' => array(
		'/shots/:id' => array(
			'id',
		),
		'/shots/:id/rebounds' => array( 
			'id',
		),
		'/shots/:list' => array(
			'id',
		),
		'/players/:id/shots' => array(
			'id',
		),
		'/players/:id/shots/following' => array(
			'id',
		),
		'/players/:id/shots/likes' => array(
			'id',
		),
	),
	'players' => array(
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