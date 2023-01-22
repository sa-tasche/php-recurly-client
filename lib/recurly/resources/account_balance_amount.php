<?php
/**
 * This file is automatically created by Recurly's OpenAPI generation process
 * and thus any edits you make by hand will be lost. If you wish to make a
 * change to this file, please create a Github issue explaining the changes you
 * need and we will usher them to the appropriate places.
 */
namespace Recurly\Resources;

use Recurly\RecurlyResource;

// phpcs:disable
class AccountBalanceAmount extends RecurlyResource
{
    private $_amount;
    private $_available_credit_amount;
    private $_currency;
    private $_processing_prepayment_amount;

    protected static $array_hints = [
    ];

    
    /**
    * Getter method for the amount attribute.
    * Total amount the account is past due.
    *
    * @return ?float
    */
    public function getAmount(): ?float
    {
        return $this->_amount;
    }

    /**
    * Setter method for the amount attribute.
    *
    * @param float $amount
    *
    * @return void
    */
    public function setAmount(float $amount): void
    {
        $this->_amount = $amount;
    }

    /**
    * Getter method for the available_credit_amount attribute.
    * Total amount of the open balances on credit invoices for the account.
    *
    * @return ?float
    */
    public function getAvailableCreditAmount(): ?float
    {
        return $this->_available_credit_amount;
    }

    /**
    * Setter method for the available_credit_amount attribute.
    *
    * @param float $available_credit_amount
    *
    * @return void
    */
    public function setAvailableCreditAmount(float $available_credit_amount): void
    {
        $this->_available_credit_amount = $available_credit_amount;
    }

    /**
    * Getter method for the currency attribute.
    * 3-letter ISO 4217 currency code.
    *
    * @return ?string
    */
    public function getCurrency(): ?string
    {
        return $this->_currency;
    }

    /**
    * Setter method for the currency attribute.
    *
    * @param string $currency
    *
    * @return void
    */
    public function setCurrency(string $currency): void
    {
        $this->_currency = $currency;
    }

    /**
    * Getter method for the processing_prepayment_amount attribute.
    * Total amount for the prepayment credit invoices in a `processing` state on the account.
    *
    * @return ?float
    */
    public function getProcessingPrepaymentAmount(): ?float
    {
        return $this->_processing_prepayment_amount;
    }

    /**
    * Setter method for the processing_prepayment_amount attribute.
    *
    * @param float $processing_prepayment_amount
    *
    * @return void
    */
    public function setProcessingPrepaymentAmount(float $processing_prepayment_amount): void
    {
        $this->_processing_prepayment_amount = $processing_prepayment_amount;
    }
}