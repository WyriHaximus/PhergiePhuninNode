<?php

namespace WyriHaximus\Phergie\Plugin\PhuninNode;

use Phake;
use Phergie\Irc\Event\EventInterface;
use Phergie\Irc\Bot\React\EventQueueInterface;

/**
 * Tests for the Plugin class.
 *
 * @category Phergie
 * @package WyriHaximus\Phergie\Plugin\PhuninNode
 */
class PluginTest extends \PHPUnit_Framework_TestCase
{


    /**
     * Tests that getSubscribedEvents() returns an array.
     */
    public function testGetSubscribedEvents()
    {
        $plugin = new Plugin;
        $this->assertInternalType('array', $plugin->getSubscribedEvents());
    }
}
