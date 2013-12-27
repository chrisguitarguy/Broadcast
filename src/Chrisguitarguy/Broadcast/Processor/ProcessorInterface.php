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

namespace Chrisguitarguy\Broadcast\Processor;

use Chrisguitarguy\Broadcast\MessageInterface;

/**
 * Processors transform a message before its sent.
 *
 * @since   1.0
 * @author  Christopher Davis <http://christopherdavis.me>
 */
interface ProccessorInterface
{
    /**
     * Transform a message in some way.
     *
     * @since   1.0
     * @access  public
     * @param   MessageInterface $msg
     * @param   UserInterface $user
     */
    public function process(MessageInterface $msg, UserInterface $user=null);
}
