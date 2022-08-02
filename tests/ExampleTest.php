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

it('convert Nepali currency to Chinese currency', function () {
    $yuan = NepalCurrencyConverter::convert(1)->toCNY();
    expect($yuan)->toBe(18.82);
});

it('convert Nepali currency to Pakistani currency', function () {
    $pkr = NepalCurrencyConverter::convert(1)->toPKR();
    expect($pkr)->toBe(1.89);
});

it('convert Nepali currency to Madivian Rufiyaa', function () {
    $mvr = NepalCurrencyConverter::convert(1)->toMVR();
    expect($mvr)->toBe(0.12);
});
