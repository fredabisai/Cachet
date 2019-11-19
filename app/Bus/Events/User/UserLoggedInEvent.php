<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Events\User;

use App\Bus\Events\ActionInterface;
use App\Models\User;

/**
 * This is the user logged in event class.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class UserLoggedInEvent implements ActionInterface, UserEventInterface
{
    /**
     * The user that logged in.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * Create a new user logged in event instance.
     *
     * @param \App\Models\User $user
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'User logged in.';
    }

    /**
     * Get the event action.
     *
     * @return array
     */
    public function getAction()
    {
        return [
            'user'        => $this->user,
            'description' => (string) $this,
        ];
    }
}
