<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
	public function testThatWeCanGetTheFirstName()
	{
		$user = new \App\Models\User;

		$user->setFirstName('Joseph');

		$this->assertEquals($user->getFirstName(), 'Joseph');
	}

	public function testThatWeCanGetTheLastName()
	{
		$user = new \App\Models\User;

		$user->setLastName('Mtinangi');

		$this->assertEquals($user->getLastName(), 'Mtinangi');
	}

	public function testFullNameIsReturned()
	{
		$user = new \App\Models\User;
		$user->setFirstName('Joseph');
		$user->setLastName('Mtinangi');

		$this->assertEquals($user->getFullName(), 'Joseph Mtinangi');	
	}
}
