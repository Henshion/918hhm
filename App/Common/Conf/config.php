<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'    => array(    
		// 后台
	 	'__ADMIN__'        => '/Public/Admin',
	 	
	 	// 前台
	 	'__INDEX__'        => '/Public/Index',

	 	//公共
	 	'__PUBLIC__'        =>  '/Public',
	 	'__BOOT__'        =>  '/Public/bootstrap',

	),
	 'LOAD_EXT_CONFIG'      => 'db',
	 'URL_CASE_INSENSITIVE' => true,
);
