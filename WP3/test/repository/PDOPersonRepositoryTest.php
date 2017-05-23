<?php
/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 03/05/2017
 * Time: 09:06
 */
use \model\Person;
use \repository\PDOPersonRepository;
class PDOPersonRepositoryTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->mockPDO = $this->getMockBuilder('PDO')
            ->disableOriginalConstructor()
            ->getMock();
        $this->mockPDOStatement =
            $this->getMockBuilder('PDOStatement')
                ->disableOriginalConstructor()
                ->getMock();
    }

    public function tearDown()
    {
        $this->mockPDO = null;
        $this->mockPDOStatement = null;
    }

    public function testFindPersonById(){
        $person = new Person();
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll')
            ->will($this->returnValue(
                [
                    [ 'id' => $person->getId(),
                        'name' => $person->getName()
                    ]
                ]));
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOPersonRepository($this->mockPDO);
        $actualPerson =
            $pdoRepository->findPersonById($person->getId());
        $this->assertEquals($person, $actualPerson);
    }

    public function testCreatePerson(){
        $person = new Person();
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOPersonRepository($this->mockPDO);
        $pdoRepository->createPerson($person);
        $this->assertEquals($person, $pdoRepository->findPersonById($person->getId()));
    }

    public function testEditPerson(){
        $person = new Person();
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOPersonRepository($this->mockPDO);
        $pdoRepository->editPerson($person);
        $this->assertEquals($person, $pdoRepository->findPersonById($person->getId()));
    }

    public function testDeletePersonById(){
        $person = new Person();
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOPersonRepository($this->mockPDO);
        $pdoRepository->DeletePersonById($person->getId());
        $this->assertEquals(null, $pdoRepository->findPersonById($person->getId()));
    }




}