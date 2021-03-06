<?php
abstract class AbstractRootClass
{
	protected $m_sCode;
	protected $m_aParams;

	public function __construct($sCode, $aParams)
	{
		$this->m_sCode = $sCode;
		$this->m_aParams = $aParams;
		$this->ConsistencyCheck();
	}

	protected function ConsistencyCheck()
	{
		$aArray = static::MyFunction();
		foreach($aArray as $sValue)
		{
			echo "   - $sValue\n";
		}
	}

	public static function MyFunction()
	{
		return array();
	}
}

class Child_1 extends AbstractRootClass
{
	public static function MyFunction()
	{
		return array_merge(parent::MyFunction(), array("level", "1", "1"));
	}
}

class Child_1_1 extends Child_1
{
	public static function MyFunction()
	{
		return array_merge(parent::MyFunction(), array("level 2", "1_1"));
	}
}

class Child_1_1_1 extends Child_1_1
{
	public static function MyFunction()
	{
		return parent::MyFunction();
		//return array_merge(parent::ListExpectedParams(), array());
	}
}