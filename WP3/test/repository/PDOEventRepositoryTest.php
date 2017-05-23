<?php
/**
 * Created by PhpStorm.
 * User: 11501253
 * Date: 03/05/2017
 * Time: 09:06
 */
use \model\Event;
use \repository\PDOEventRepository;
class PDOEventRepositoryTest extends PHPUnit_Framework_TestCase
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

    public function testFindEventById_idExists_EventObject()
    {
        $event = new Event();
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll')
            ->will($this->returnValue(
                [
                    [ 'id' => $event->getId(),
                        'start' => $event->getStart(),
                        'end' => $event->getEnd(),
                        'name' => $event->getName(),
                        'person' => $event->getPerson()
                    ]
                ]));
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent =
            $pdoRepository->findEventById($event->getId());
        $this->assertEquals($event, $actualEvent);
    }

    public function testFindEventById_idDoesNotExist_Null()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll')
            ->will($this->returnValue([]));
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventById(222);
        $this->assertNull($actualEvent);
    }
    public function testFindEventById_exceptionThrownFromPDO_Null()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam')->will(
                $this->throwException(new Exception()));
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent = $pdoRepository->findEventById(1);
        $this->assertNull($actualEvent);
    }

    public function testFindAllEvents_arrayEventObject()
    {
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll');
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $events =
            $pdoRepository->findEventB();
        foreach ($events as $event){
            $this->assertTrue(is_a($event,'Event'));
        }
    }

    public function testFindEventsByPerson(){
        $event = new Event();
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('fetchAll')
            ->will($this->returnValue(
                [
                    [ 'id' => $event->getId(),
                        'start' => $event->getStart(),
                        'end' => $event->getEnd(),
                        'name' => $event->getName(),
                        'person' => $event->getPerson()
                    ]
                ]));
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $actualEvent =
            $pdoRepository->findEventsByPerson($event->getPerson());
        $this->assertEquals($event, $actualEvent);
    }

    public function testCreateEvent(){
        $event = new Event();
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEventRepository($this->mockPDO);
            $pdoRepository->createEvent($event);
        $this->assertEquals($event, $pdoRepository->findEventById($event->getId()));
    }

    public function testEditEvent(){
        $event = new Event();
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $pdoRepository->editEvent($event);
        $this->assertEquals($event, $pdoRepository->findEventById($event->getId()));
    }

    public function testDeleteEventById(){
        $event = new Event();
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('bindParam');
        $this->mockPDOStatement->expects($this->atLeastOnce())
            ->method('execute');
        $this->mockPDO->expects($this->atLeastOnce())
            ->method('prepare')
            ->will($this->returnValue($this->mockPDOStatement));
        $pdoRepository = new PDOEventRepository($this->mockPDO);
        $pdoRepository->DeleteEventById($event->getId());
        $this->assertEquals(null, $pdoRepository->findEventById($event->getId()));
    }





}