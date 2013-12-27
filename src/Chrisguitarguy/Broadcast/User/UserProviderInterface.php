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

namespace Chrisguitarguy\Broadcast\User;

/**
 * User providers let other objects (namely the broadcaster) fetch users via
 * their "key" which could be an email, a database ID, or anything else.
 *
 * @since   1.0
 * @author  Christopher Davis <http://christopherdavis.me>
 */
interface UserProviderInterface
{
    /**
     * Get a single user by their key.
     *
     * @since   1.0
     * @access  public
     * @param   scalar $user_key
     * @return  UserInterface|null Null if the user was not found.
     */
    public function get($user_key);

    /**
     * Get all users.
     *
     * @since   1.0
     * @access  public
     * @return  UserInterface[]|Traversable
     */
    public function all();
}
