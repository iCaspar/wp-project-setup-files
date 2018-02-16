<?php
/**
 * SampleTest.php
 */

namespace ICaspar\Project\Tests\PhpUnit\Unit;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {

	public function testTruthy(): void {
		$this->assertEquals( 1, 1 );
	}
}
