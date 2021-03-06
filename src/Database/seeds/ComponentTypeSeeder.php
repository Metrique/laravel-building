<?php

namespace Metrique\Building\Database\Seeds;

use Metrique\Building\Eloquent\ComponentType;
use Illuminate\Database\Seeder;

class ComponentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'title' => 'Text',
                'slug' => 'text',
                'params' => '{}',
            ], [
                'title' => 'Text area',
                'slug' => 'text-area',
                'params' => '{}',
            ], [
                'title' => 'File',
                'slug' => 'file',
                'params' => '{}',
            ], [
                'title' => 'Widget',
                'slug' => 'widget',
                'params' => '{}',
            ], [
                'title' => 'Checkbox',
                'slug' => 'checkbox',
                'params' => '{}',
            ]
        ])->each(function ($type) {
            ComponentType::create($type);
        });
    }
}
