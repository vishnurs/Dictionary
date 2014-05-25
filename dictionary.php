<?php
/*
 * Author : Vishnu
 * Website : http://vishnurs.com
 */
 

class DatatypeChangeException extends Exception
{
	protected $_errorMessage;
	
	public function __construct($_errorMessage)
	{
		$this->_errorMessage = $_errorMessage;
	}
	public function getErrorMessage()
	{
		return $this->_errorMessage;
	}
}
class Dictionary
{
	private $_key;
	private $_value;
	private $_dictionary_array;
	public $_key_datatype = "";
	public $_value_datatype = "";
	public $STRICT_MODE = true;
	private $_allowed_datatype = array("integer","string","double","array","object","resource","NULL");
	public function __construct($_key_datatype=null , $_value_datatype=null)
	{
		$this->_key_datatype = $_key_datatype;
		$this->_value_datatype = $_value_datatype;
		$this->_dictionary_array = array();
	} 
	public function Add($_key, $_value)
	{
		
		try
		{
			if($this->_key_datatype)
			{
				if(!in_array($this->_key_datatype, $this->_allowed_datatype))
				{
					throw new DatatypeChangeException("Specified datatype is not allowed");
				}
				elseif(strcmp(gettype($_key), $this->_key_datatype) != 0)
				{
					throw new DatatypeChangeException("There is a datatype mismatch for key");
				}
				else 
				{
					$this->_dictionary_array[$_key] = $_value;
				}
			}
			else if($this->_value_datatype)
			{
				if(!in_array($this->_key_datatype, $this->_allowed_datatype))
				{
					throw new DatatypeChangeException("Specified datatype is not allowed");
				}
				elseif(strcmp(gettype($_key), $this->_key_datatype) != 0)
				{
					throw new DatatypeChangeException("There is a datatype mismatch for value");
				}
				else 
				{
					$this->_dictionary_array[$_key] = $_value;
				}	
			}
			
			
		}
		catch(DatatypeChangeException $dc)
		{
			echo $dc->getErrorMessage();
		}
	}
	public function Get()
	{
		return $this->_dictionary_array;
	}
	public function Count()
	{
		return count($this->_dictionary_array);
	}
	public function KSort()
	{
		return ksort($this->_dictionary_array);
	}
	public function VSort()
	{
		return sort($this->_dictionary_array);
	}
	public function Clear()
	{
		unset($this->_dictionary_array);
	}
	public function Remove($_key)
	{
		unset($this->_dictionary_array[$_key]);
	}
			
}





?>