<?php

namespace Nepo\NepalCurrencyConverter\Tests;

use Nepo\NepalCurrencyConverter\NepalCurrencyConverter;

/**
 * Here we are testing the class NepalCurrencyConverter.
 *!! Write a test for every conveter function.
 */
it('convert Nepali currency to Indian currency', function () {
    $inr = NepalCurrencyConverter::convert(1)->toINR();
    expect($inr)->toBe(0.62);
});

it('convert Nepali currency to Bangladeshi currency', function () {
    $bdt = NepalCurrencyConverter::convert(1)->toBDT();
    expect($bdt)->toBe(0.75);
});
