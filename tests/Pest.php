<?php

// check inside the class file all functions.
it('check function has its test case', function () {
    $arrayFunctions = [
        'convert',
        '__construct',
        'toINR',
        'toBDT',
        'toCNY',
        'toPKR',
        'toMVR',
        'toLKR',
        'toAFN',
    ];

    $class = new \ReflectionClass('Nepo\NepalCurrencyConverter\NepalCurrencyConverter');
    $methods = $class->getMethods();
    foreach ($methods as $method) {
        $data[] = $method->getName();
    }
    // check if all functions are present in the class
    $this->assertEquals($arrayFunctions, $data);
});
