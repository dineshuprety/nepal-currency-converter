<?php

namespace Nepo\NepalCurrencyConverter\Tests;

use Nepo\NepalCurrencyConverter\NepalCurrencyConverter;

it('convert Nepali currency to Indian currency', function () {
    $inr = NepalCurrencyConverter::convert(1)->toINR();
    expect($inr)->toBe(0.62);
});
