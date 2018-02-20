<?php
/**
 * SampleTest.php
 */

namespace ICaspar\Project\Tests\PhpUnit\Unit;

use PHPUnit\Framework\TestCase;

class SampleTest extends WP_UnitTestCase {

	public function testTruthy(): void {
		$this->assertEquals( 1, 1 );
	}
}
