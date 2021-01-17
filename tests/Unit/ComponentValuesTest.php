<?php

namespace Metrique\Building\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Metrique\Building\Tests\TestCase;
use Metrique\Building\View\Components\TestComponent;

class ComponentValuesTest extends TestCase
{
    use RefreshDatabase;

    public function test_component_gives_merged_property_values_array()
    {
        $component = new TestComponent;

        $this->assertIsArray($component->values());
        
        foreach ($component->attributes() as $key => $value) {
            $this->assertArrayHasKey($key, $component->values());
        }

        foreach ($component->properties() as $key => $value) {
            $this->assertArrayHasKey($key, $component->values());
        }
    }

    public function test_component_gives_value_for_property()
    {
        $component = new TestComponent;

        foreach ($component->values() as $key => $value) {
            $this->assertEquals(
                $value,
                $component->valueFor($key)
            );
        }
    }

    public function test_component_gives_null_value_for_property_that_does_not_exit()
    {
        $component = new TestComponent;

        $this->assertNull(
            $component->valueFor('loosemore')
        );
    }
}