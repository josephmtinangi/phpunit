<?php

class UserTest extends \PHPUnit_Framework_TestCase
{
	/** @test */
	public function that_we_can_get_the_first_name()
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

	public function testFirstAndLastNameAreTrimmed()
	{
		$user = new \App\Models\User;
		$user->setFirstName('Joseph    ');
		$user->setLastName('    Mtinangi');	

		$this->assertEquals($user->getFirstName(), 'Joseph');
		$this->assertEquals($user->getLastName(), 'Mtinangi');
	}

	public function testEmailAddressCanBeSet()
	{
		$email = 'josephmtinangi@gmail.com';
		$user = new \App\Models\User;
		$user->setEmail($email);

		$this->assertEquals($user->getEmail(), $email);
	}

	public function testEmailVariablesContainCorrectValues()
	{
		$user = new \App\Models\User;
		$user->setFirstName('Joseph');
		$user->setLastName('Mtinangi');
		$user->setEmail('josephmtinangi@gmail.com');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('full_name', $emailVariables);	
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['full_name'], 'Joseph Mtinangi');
		$this->assertEquals($emailVariables['email'], 'josephmtinangi@gmail.com');
	}
}
