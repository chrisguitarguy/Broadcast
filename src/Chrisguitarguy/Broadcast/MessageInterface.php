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

/**
 * Represends a message to be send to a user.
 *
 * @since   1.0
 * @author  Christopher Davis <http://christopherdavis.me>
 */
interface MessageInterface extends \ArrayAccess
{
    public function getLevel();

    public function setLevel($level);

    public function getBody();

    public function setBody($body);

    public function getSubject();

    public function setSubject($subject);
}
