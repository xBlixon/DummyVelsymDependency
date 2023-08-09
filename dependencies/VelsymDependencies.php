<?php

namespace PackageName\VelsymDependencyMapping;

class VelsymDependencies implements VelsymDependenciesInterface
{
    public static function getDependencies()
    {
        return [
            'Velsym\DummyDependency\DummyA' => [
                'class' => 'Velsym\DummyDependency\Dummy',
                'params' => [
                    'incrementer' => 5,
                    'text' => "Text"
                ]
            ],
            'Velsym\DummyDependency\DummyB' => [
                'class' => 'Velsym\DummyDependency\Dummy',
                'params' => [
                    'incrementer' => 21,
                    'text' => "Hello world!"
                ]
            ]
        ];
    }
}