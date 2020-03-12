<?php

namespace RMS\PushNotificationsBundle\Tests\Message;

use PHPUnit\Framework\TestCase;
use RMS\PushNotificationsBundle\Device\Types,
    RMS\PushNotificationsBundle\Message\MacMessage,
    RMS\PushNotificationsBundle\Message\MessageInterface;

class MacMessageTest extends TestCase
{
    public function testCreation()
    {
        $msg = new MacMessage();
        $this->assertInstanceOf("RMS\PushNotificationsBundle\Message\MessageInterface", $msg);
        $this->assertEquals(Types::OS_MAC, $msg->getTargetOS());
    }
}
