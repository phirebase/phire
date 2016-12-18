<?php

/*----------------------------------------------------------------------
 * Schedule Instantiation and Handling.
 *----------------------------------------------------------------------
 *
 * This script must not be modified, it is responsible for building
 * and triggering the scheduled tasks to be run.
 *
 * If you wish to add, remove or modify an existing job, go to
 * \CAPI\Scheduler\Scheduler::schedule()
 *
 */

/*
 * Load the app booter.
 */
require __DIR__ . '/../app/Boot.php';

/*
 * Start the manager that allows for task addition and timing management.
 */
$manager = new \Phire\Support\Scheduler\Manager;

/*
 * Instantiate the Scheduler object that loads in the jobs.
 */
$scheduler = new \App\Scheduler\Scheduler;

/*
 * Load the jobs, and add the manager instance to take on the jobs.
 */
$scheduler->schedule($manager);

/*
 * Run any scheduled jobs that are loaded, timing is taken care of in here.
 */
$manager->runTasks();
