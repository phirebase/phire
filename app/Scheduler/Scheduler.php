<?php

namespace App\Scheduler;

use App\Scheduler\Events\DemoEvent;

use Phire\Support\Scheduler\Manager;

/**
 * Class Scheduler.
 *
 * @package CAPI\Scheduler
 */
class Scheduler {

    /**
     * The scheduled tasks that are to be run.
     *
     * To add a new task:
     *    $manager->task(Object|Closure);
     * In the Manager task method can accept closures as well as class constants
     * (although they must have a handle() method).
     *
     * @param Manager $manager
     */
	public function schedule(Manager $manager) {

		$manager->task(DemoEvent::class)->minutely();

	}

}