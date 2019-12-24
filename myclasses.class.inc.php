<?php
abstract class AbstractRootClass
{
	protected $m_sCode;
	protected $m_aParams;

	public function __construct($sCode, $aParams)
	{
		$this->m_sCode = $sCode;
		$this->m_aParams = $aParams;
	}
}

class Child_1 extends AbstractRootClass
{

}
