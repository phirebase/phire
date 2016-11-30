<?php

namespace App\Scheduler\Events;

use Phire\Scheduler\Event;
use Phire\Support\Contracts\Schedulable as SchedulableContract;

/**
 * Class DemoEvent.
 *
 * @package App\Scheduler\Events
 */
class DemoEvent extends Event implements SchedulableContract {

	/**
	 * Handle the event.
	 */
	public function handle() {

		// .

	}

}