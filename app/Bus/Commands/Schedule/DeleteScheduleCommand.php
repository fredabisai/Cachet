<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bus\Commands\Schedule;

use App\Models\Schedule;

/**
 * This is the delete schedule command.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class DeleteScheduleCommand
{
    /**
     * The schedule to delete.
     *
     * @var \App\Models\Schedule
     */
    public $schedule;

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'schedule' => 'required',
    ];

    /**
     * Create a new delete schedule command instance.
     *
     * @param \App\Models\Schedule $schedule
     *
     * @return void
     */
    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }
}
