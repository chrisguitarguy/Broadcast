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

namespace Chrisguitarguy\Broadcast\Handler;

use Chrisguitarguy\Broadcast\MessageInterface;
use Chrisguitarguy\Broadcast\User\UserInterface;
use Chrisguitarguy\Broadcast\Voter\VoterInterface;
use Chrisguitarguy\Broadcast\Processor\ProcessorInterface;

/**
 * Handlers glue together voters and processors to "handle" messages (or not
 * handle them, depending on what the voters say.
 *
 * @since   1.0
 * @author  Christopher Davis <http://christopherdavis.me.
 */
interface HandlerInterface
{
    /**
     * Add a voter to this handler.
     *
     * @since   1.0
     * @access  public
     * @param   VoterInterface $voter
     * @return  HandlerInterface
     * @chainable
     */
    public function addVoter(VoterInterface $voter);

    /**
     * Add a processor to this handler.
     *
     * @since   1.0
     * @access  public
     * @param   ProcessorInterface $processor
     * @return  HandlerInterface
     * @chainable
     */
    public function addProcessor(ProcessorInterface $processor);

    /**
     * This handler deal with the give message and user?
     *
     * @since   1.0
     * @access  public
     * @param   UserInterface $user
     * @param   MessageInterface $msg
     * @return  boolean
     */
    public function canHandle(UserInterface $user, MessageInterface $msg);

    /**
     * Handle a given message.
     *
     * @since   1.0
     * @access  public
     * @param   UserInterface $user
     * @param   MessageInterface $msg
     * @return  void
     */
    public function handle(UserInterface $user, MessageInterface $msg);
}
