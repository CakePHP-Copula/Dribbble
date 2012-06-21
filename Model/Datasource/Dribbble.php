<?php
/**
 * Dribbble DataSource
 *
 * [Show and Tell for designers]
 *
 * @package default
 * @author Dean Sofer
 * @Hacker Kevin Dimond
 **/
App::uses('ApisSource', 'Apis.Model/Datasource');
class Dribbble extends ApisSource {

	// TODO: Relocate to a dedicated schema file
	var $_schema = array();

    public $options = array(
        'protocol'   			=> 'http',
        'format'     			=> 'json',
        'user_agent' 			=> 'CakePHP Dribbble Datasource',
        'http_port'  			=> 80,
        'timeout'    			=> 10,
        'login'      			=> null,
        'token'      			=> null,
        'param_separator'		=> '&',
        'key_value_separator'	=> '=',
		'permissions'			=> 'read', // read, write, delete
    );

    public function beforeRequest(&$model, $request) {
        if (!empty($request['uri']['path'])) {
            $request['uri']['query']['method'] = $request['uri']['path'];
            $request['uri']['path'] = '';
        }
        $request['uri']['query']['format'] = $this->options['format'];
        return $request;
    }
}