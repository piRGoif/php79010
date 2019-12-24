<?php

echo "launching...\n";

require_once 'myclasses.class.inc.php';
echo "after require\n";

echo "before child class init\n";
$oChildClass = new Child_1_1('test', array());
echo "after child class init\n";
