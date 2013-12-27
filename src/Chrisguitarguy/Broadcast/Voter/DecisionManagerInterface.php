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

namespace Chrisguitarguy\Broadcast\Voter;

use Chrisguitarguy\Broadcast\MessageInterface;
use Chrisguitarguy\Broadcast\User\UserInterface;

/**
 * Deals with voters to decide if a handler can run.
 *
 * @since   1.0
 * @author  Christopher Davis <http://christopherdavis.me>
 */
interface DecisionManagerInterface
{
    const UNANIMOUS     = 1; // all voters must vote "yes"
    const CONSENSUS     = 2; // a majority of the voters must vote "yes"
    const AFFIRMATIVE   = 4; // only a single voter must vote "yes"

    /**
     * Decides if a handler can run.
     *
     * @since   1.0
     * @access  public
     * @param   UserInterface $user
     * @param   MessageInterface $msg
     * @param   int $strategy one of DecisionManagerInterface::{CONSENSUS,MAJORITY,AFFIRMATIVE}
     * @throws  InvalidArgumentException if the $strategy is not valid
     * @return  boolean True if the handler can handle
     */
    public function decide(UserInterface $user, MessageInterface $msg, $strategy=self::AFFIRMATIVE);

    /**
     * Add a voter to the manager.
     *
     * @since   1.0
     * @access  public
     * @param   VoterInterface $voter
     * @return  DecisionManagerInterface
     * @chainable
     */
    public function addVoter(VoterInterface $voter);
}
