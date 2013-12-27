<?php
/**
 * This file is part of the Broadcast package
 *
 * Copyright (c) Christopher Davis <http://christopherdavis.me>
 *
 * For full copyright and license information please see the LICENSE
 * file that was distributed with this source code
 *
 * @package     Chrisguitarguy\Broadcast
 * @copyright   Christopher Davis <http://christopherdavis.me>
 * @license     http://opensource.org/licenses/MIT MIT
 */

namespace Chrisguitarguy\Broadcast;

use Chrisguitarguy\Broadcast\Handler\HandlerInterface;

/**
 * The broadcaster is the central object of this library: it sends messages to
 * users via the various handlers.
 *
 * @since   1.0
 * @author  Christopher Davis <http://christopherdavis.me>
 */
interface BroadcasterInterface
{
    /**
     * Send a message to a single user.
     *
     * @since   1.0
     * @access  public
     * @param   scalar $user_key The key by which the user will be looked up
     * @param   MessageInterface $msg
     * @return  int The number of handlers that handled the message
     */
    public function send($user_key, MessageInterface $msg);

    /**
     * Send a message to all users.
     *
     * @since   1.0
     * @access  public
     * @param   MessageInterface $msg
     * @return  int The number of users that were send the message via some handler
     */
    public function broadcast(MessageInterface $msg);

    /**
     * Add a handler to this broadcaster.
     *
     * @since   1.0
     * @access  public
     * @param   HandlerInterface $handler
     * @return  BroadcasterInterface
     * @chainable
     */
    public function addHandler(HandlerInterface $handler);
}
