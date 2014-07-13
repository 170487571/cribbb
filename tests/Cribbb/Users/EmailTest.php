<?php namespace Cribbb\Users;

class EmailTest extends \PHPUnit_Framework_TestCase {

  /** @test */
  public function should_require_email()
  {
    $this->setExpectedException('Exception');
    $email = new Email;
  }

  /** @test */
  public function should_require_valid_email()
  {
    $this->setExpectedException('DomainException');
    $email = new Email('this_is_not_a_valid_email');
  }

  /** @test */
  public function should_accept_valid_email()
  {
    $email = new Email('name@domain.com');
    $this->assertInstanceOf('Cribbb\Users\Email', $email);
  }

}