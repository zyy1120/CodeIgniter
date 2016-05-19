<?php
$config = array(
	 'livecontent/insert' => array(
		array(
				'field' => 'masterid',
				'label' => 'masterid',
				'rules'=>'required'
			 ),
		array(
				'field' => 'chatcontent',
				'label' => 'chatcontent',
				'rules'=>'required'
			 ),
		array(
				'field' => 'chatname',
				'label' => '2',
				'rules' => 'required'
			 ),
		array(
				'field' => 'chatuserid',
				'label' => '1',
				'rules' => 'required'
			 )
		),

	  'livecontent/replace' => array(
		array(
				'field' => 'masterid',
				'label' => 'masterid',
				'rules'=>'required|min_length[3]'
			 ),
		array(
				'field' => 'chatcontent',
				'label' => 'chatcontent',
				'rules'=>'required'
			 ),
		array(
				'field' => 'chatname',
				'label' => '2',
				'rules' => 'required'
			 ),
		array(
				'field' => 'chatuserid',
				'label' => '1',
				'rules' => 'required'
			 )
		)
	);