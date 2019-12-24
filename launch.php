<?php

echo "launching...\n";

require_once 'class-hierarchy.class.inc.php';
echo "after require\n";

echo "before child class init : lvl 1\n";
$oChildClass = new Child_1('test', array());
echo "after child class init\n";

echo "before child class init : lvl 2\n";
$oChildClass = new Child_1_1('test', array());
echo "after child class init\n";

echo "before child class init : lvl 3\n";
$oChildClass = new Child_1_1_1('test', array());
echo "after child class init\n";



require_once 'attributedef.class.inc.php';
echo "before new AttributeString\n";
$oAttDef = new AttributeString('test', array(
		'allowed_values' => array(1,2),
		'depends_on' => null,
		'sql' => 'test',
		'default_value' => '',
		'is_null_allowed' => true,
	)
);
echo "after new AttributeString\n";

require_once 'myclass.class.inc.php';
echo "before call_user_func\n";
$sPHPClass = 'MyClass';
call_user_func(array($sPHPClass, 'Init'));
echo "after call_user_func\n";
