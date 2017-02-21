<?php
App::uses('OrganizationsController', 'Controller');

/**
 * OrganizationsController Test Case
 *
 */
class OrganizationsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.organization',
		'app.user',
		'app.package',
		'app.organizations',
		'app.package_itinerary',
		'app.packages'
	);

}
