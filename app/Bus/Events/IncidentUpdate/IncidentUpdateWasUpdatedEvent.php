<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Events\IncidentUpdate;

use App\Bus\Events\ActionInterface;
use App\Models\IncidentUpdate;
use App\Models\User;

/**
 * This is the incident update was updated event.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class IncidentUpdateWasUpdatedEvent implements ActionInterface, IncidentUpdateEventInterface
{
    /**
     * The user who updated the incident update.
     *
     * @var \App\Models\User
     */
    public $user;

    /**
     * The incident update that has been updated.
     *
     * @var \App\Models\IncidentUpdate
     */
    public $update;

    /**
     * Create a new incident update was updated event instance.
     *
     * @param \App\Models\IncidentUpdate $update
     *
     * @return void
     */
    public function __construct(User $user, IncidentUpdate $update)
    {
        $this->user = $user;
        $this->update = $update;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Incident Update was updated.';
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
