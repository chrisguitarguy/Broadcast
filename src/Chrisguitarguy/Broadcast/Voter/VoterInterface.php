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

use Chrisguitarguy\Broadcast\User\UserInterface;

/**
 * "Votes" to see if a message may be handled.
 *
 * @since   1.0
 * @author  Christopher Davis <http://christopherdavis.me>
 */
interface VoterInterface
{
    const YES       = 1;
    const NO        = -1;
    const ABSTAIN   = 0;

    /**
     * "vote" on a user and message level.
     *
     * @since   1.0
     * @access  public
     * @param   UserInterface $user
     * @param   MessageInterface $msg
     * @return  int One of VoterInterface::{YES,NO,ABSTAIN}. An abstain vote
     *          should be given only in cases where it doesn't make sense for
     *          the voter to vote at all. Abstain votes may be treated differently
     *          depending on the DecisionManager implementation
     */
    public function vote(UserInterface $user, MessageInterface $msg);
}
