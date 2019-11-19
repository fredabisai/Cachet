<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Events\Invite;

use App\Models\Invite;

final class InviteWasClaimedEvent implements InviteEventInterface
{
    /**
     * The invite that has been claimed.
     *
     * @var \App\Models\Invite
     */
    public $invite;

    /**
     * Create a new invite was claimed event instance.
     *
     * @return void
     */
    public function __construct(Invite $invite)
    {
        $this->invite = $invite;
    }

    /**
     * Get the event description.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Invite was claimed.';
    }
}
