<?php

namespace App\Scheduler\Events;

use Phire\Support\Scheduler\Event;
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

        // Print a normal line.
		$this->line('Hello world!');

        // Print an error message.
        $this->error('Oh no! Error!');

        // Print a success message.
        $this->success('Nevermind, everythings alright');

        // Print an information or action message.
        $this->info('But you should probably take care of this');

        // Confirm?
        $this->confirm("Do you want to confirm?", 'y');

	}

}