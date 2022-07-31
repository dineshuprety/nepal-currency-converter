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
}
