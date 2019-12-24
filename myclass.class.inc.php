<?php

class MyClass
{
	public static function Init()
	{
		$oAttribute = new AttributeString('myfield', array(
			'allowed_values' => array(1,2),
			'depends_on' => null,
			'sql' => 'test',
			'default_value' => '',
			'is_null_allowed' => true,
		));
	}
}