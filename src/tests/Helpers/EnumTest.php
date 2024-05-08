<?php

namespace Helpers;

use Freightera\Common\Helpers\Enum;
use PHPUnit\Framework\TestCase;

class EnumTest extends TestCase
{
	public const FOO_TITLE = 'Foo title';

	/**
	 * @var Enum
	 */
	public $testType;

	protected function setUp(): void
	{
		parent::setUp();
		$this->testType = $this->createConcreteEnumClass();
	}

	public function testGetValues()
	{
		$values = $this->testType::values();

		$this->assertTrue(in_array($this->testType::FOO, $values));
		$this->assertTrue(in_array($this->testType::BAR, $values));
		$this->assertFalse(in_array($this->testType::_HIDDEN_CONSTANT, $values));
	}

	public function testGetLabels()
	{
		$this->assertEquals(self::FOO_TITLE, $this->testType::labelOf($this->testType::FOO));
		$this->assertEquals(ucfirst($this->testType::BAR), $this->testType::labelOf($this->testType::BAR));
	}

	public function testCommaSeparated()
	{
		$this->assertEquals('foo,bar', $this->testType::commaSeparatedValues());
	}

	protected function createConcreteEnumClass(): Enum
	{
		return new class extends Enum {
			public const FOO = 'foo';
			public const BAR = 'bar';
			public const _HIDDEN_CONSTANT = 'do_not_list';
			protected const _LABELS = [
				self::FOO => EnumTest::FOO_TITLE,
			];
		};
	}
}
