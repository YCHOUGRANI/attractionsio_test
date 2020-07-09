<?php
require '..\app\user.php';

use PHPUnit\Framework\TestCase;


class  UserTest extends TestCase
{
    protected $user;

    public function setUp()
    {
        $this->user = new \AttractionsIo\Domain\User();
    }


    public function testEmailCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $result = $this->user->setEmail('invalid');
    }

    public function testEmailCanBeUsedAsString(): void
    {

        $this->user->setEmail('Jack@attractions.internal');
        $this->assertEquals(
            'Jack@attractions.internal',
            $user->getEmail()
        );
    }

    public function testDateOfBirthCanBeUsedAsString(): void
    {

        $this->user->setetDateOfBirth('15/05/1991');
        $this->assertEquals(
            '15/05/1991',
            $user->getDateOfBirth()
        );
    }

    public function testDateOfBirthCCannotBeCreatedFromAgeLessThan13(): void
    {

        $this->expectException(InvalidArgumentException::class);

        $result = $this->user->setEmail('02/01/2010');
    }
}
