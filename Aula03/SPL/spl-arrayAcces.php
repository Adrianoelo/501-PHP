<?php 

class Users class implements ArrayAccess
{
	private $users = [];

	public function offsetExits($offset)
	{
		return isset($this->users[$offset]);
	}
}