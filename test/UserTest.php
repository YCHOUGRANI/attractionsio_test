<?php
require '..\app\user.php';
use PHPUnit\Framework\TestCase;


class  UserTest extends TestCase
{
		 protected $user;
		 
		 public function setUp()
		 {
		 $this->user=new \AttractionsIo\Domain\User();
         }
        
        
         public function testCannotBeCreatedFromInvalidEmailAddress(): void
         {
        $this->expectException(InvalidArgumentException::class);

        $result = $this->user->setEmail('invalid');
         }

    public function testCanBeUsedAsString(): void
    {

        $this->user->setEmail('Jack@attractions.internal');
        $this->assertEquals(
            'Jack@attractions.internal',
            $uset->getEmail()
        );
    }

}