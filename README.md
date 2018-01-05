Humanity PHP SDK
================

Forked from the original, for my personal use mainly.

The [Humanity API](http://www.humanity.com/api/) allows you to call modules within the Humanity [employee scheduling software](http://www.humanity.com/) that respond in REST style JSON & XML.

This repository contains the open source PHP SDK that allows you to utilize the
above on your website. Except as otherwise noted, the ShiftPlanning PHP SDK
is licensed under the Apache Licence, Version 2.0
(http://www.apache.org/licenses/LICENSE-2.0.html)


Usage
-----

The [examples][examples] are a good place to start. The minimal you'll need to
have is:

	<?php

	require './humanityapi.php';

	$humanityapi = new HumanityApi(
		array(
			'key' => 'XXXXXXXXXXXXXXXXXX' // enter your developer key
		)
	);

To make [API][API] calls:

	$shifts = $humanityapi->setRequest(
		array(
			'module' => 'schedule.shifts',
			'start_date' => 'today',
			'start_date' => 'today',
			'mode' => 'overview'
		)
	);

Logged in vs Logged out:

	if ($session = $humanityapi->getSession( )) {
	  // LOGGED IN
	} else {
	  // LOGGED OUT
	}

Example use of a Quick Access method

    $array_of_employee_data = array(
        'id'    =>  5150
    );
    $employee = $humanityapi->getEmployeeDetails($array_of_employee_data);
    if ($employee->status == 1) {
        echo "Employee Name: $employee->name";
    }
    else{
        echo "No employee data available.";
    }

[examples]: https://github.com/shiftplanning/PHP-SDK/tree/master/examples/
[API]: http://www.humanity.com/api/


Feedback
--------

We are relying on the [GitHub issues tracker][issues] linked from above for
feedback. File bugs or other issues [here][issues].

[issues]: http://github.com/shiftplanning/PHP-SDK/issues
