<?php

/*
 * (c) Henrik Bjornskov <henrik@bjrnskov.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Stampie\Event;

use Stampie\Message;
use Stampie\Recipient;

/**
 * @author Christophe Coevoet <stof@notk.org>
 */
abstract class AbstractMessageEvent extends Event
{
    protected $message;
    protected $to;

    /**
     * @param Recipient $to
     * @param Message   $message
     */
    public function __construct(Recipient $to, Message $message)
    {
        $this->message = $message;
        $this->to = $to;
    }

    /**
     * @param Message $message
     */
    public function setMessage(Message $message)
    {
        $this->message = $message;
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param Recipient $to
     */
    public function setTo(Recipient $to)
    {
        $this->to = $to;
    }

    /**
     * @return Recipient
     */
    public function getTo()
    {
        return $this->to;
    }
}