<?php

namespace Nepo\NepalCurrencyConverter;

/**
 * This is the main class where all the magic happens :) tp convert the currency.
 */
class NepalCurrencyConverter extends CurrencyVar
{
    private int $amount;

    public static function convert(int $amount): self
    {
        return new static ($amount);
    }

    public function __construct(int $amount)
    {
        // check if amount is greater than 0
        if (! $amount > 0) {
            throw new \Exception('Amount must be greater than 0');
        }
        // check if amount is_numeric
        if (! is_numeric($amount) && ! is_int($amount)) {
            throw new \Exception('Amount must be numeric and integer');
        }
        $this->amount = (int) $amount;
    }

    /**
     * Convert the amount to INR.
     * @return int|float
     */
    public function toINR(): int|float
    {
        // check if the amout is float or integer
        return is_float($this->amount * $this->indiaCurrrency) ? (float) round($this->amount * $this->indiaCurrrency, 2) : (int) $this->amount * $this->indiaCurrrency;
    }

    /**
     * Convert the amout to BDT.
     * @return int|float
     */
    public function toBDT(): int|float
    {
        // check if the amout is float or integer
        return is_float($this->amount * $this->bangladeshiCurrrency) ? (float) round($this->amount * $this->bangladeshiCurrrency, 2) : (int) $this->amount * $this->bangladeshiCurrrency;
    }

    /**
     * Convert the amout to CNY.
     * @return int|float
     */
    public function toCNY(): int|float
    {
        //check if the amount is float or integer
        return is_float($this->amount * $this->chinaCurrency) ? (float) round($this->amount * $this->chinaCurrency, 2) : (int) $this->amount * $this->chinaCurrency;
    }

    /**
    * Convert the amout to PKR.
    * @return int|float
    */
    public function toPKR(): int|float
    {
        //check if the amount is float or integer
        return is_float($this->amount * $this->pakistanCurrency) ? (float) round($this->amount * $this->pakistanCurrency, 2) : (int) $this->amount * $this->pakistanCurrency;
    }

    /**
    * Convert the amout to MVR.
    * @return int|float
    */
    public function toMVR(): int|float
    {
        //check if the amount is float or integer
        return is_float($this->amount * $this->maldivesCurrency) ? (float) round($this->amount * $this->maldivesCurrency, 2) : (int) $this->amount * $this->maldivesCurrency;
    }

    /**
    * Convert the amout to LKR.
    * @return int|float
    */
    public function toLKR(): int|float
    {
        //check if the amount is float or intefer
        return is_float($this->amount * $this->srilankanCurrency) ? (float) round($this->amount * $this->srilankanCurrency, 2) : (int) $this->amount * $this->srilankanCurrency;
    }

    /**
    * Convert the amout to AFN.
    * @return int|float
    */
    public function toAFN(): int|float
    {
        //check if the amount is float or intefer
        return is_float($this->amount * $this->afghanistanCurrency) ? (float) round($this->amount * $this->afghanistanCurrency, 2) : (int) $this->amount * $this->afghanistanCurrency;
    }
}
