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
class ExternalSubscription extends RecurlyResource
{
    private $_account;
    private $_activated_at;
    private $_app_identifier;
    private $_auto_renew;
    private $_created_at;
    private $_expires_at;
    private $_external_product_reference;
    private $_external_resource;
    private $_id;
    private $_last_purchased;
    private $_object;
    private $_quantity;
    private $_updated_at;

    protected static $array_hints = [
    ];

    
    /**
    * Getter method for the account attribute.
    * Account mini details
    *
    * @return ?\Recurly\Resources\AccountMini
    */
    public function getAccount(): ?\Recurly\Resources\AccountMini
    {
        return $this->_account;
    }

    /**
    * Setter method for the account attribute.
    *
    * @param \Recurly\Resources\AccountMini $account
    *
    * @return void
    */
    public function setAccount(\Recurly\Resources\AccountMini $account): void
    {
        $this->_account = $account;
    }

    /**
    * Getter method for the activated_at attribute.
    * When the external subscription was activated in the external platform.
    *
    * @return ?string
    */
    public function getActivatedAt(): ?string
    {
        return $this->_activated_at;
    }

    /**
    * Setter method for the activated_at attribute.
    *
    * @param string $activated_at
    *
    * @return void
    */
    public function setActivatedAt(string $activated_at): void
    {
        $this->_activated_at = $activated_at;
    }

    /**
    * Getter method for the app_identifier attribute.
    * Identifier of the app that generated the external subscription.
    *
    * @return ?string
    */
    public function getAppIdentifier(): ?string
    {
        return $this->_app_identifier;
    }

    /**
    * Setter method for the app_identifier attribute.
    *
    * @param string $app_identifier
    *
    * @return void
    */
    public function setAppIdentifier(string $app_identifier): void
    {
        $this->_app_identifier = $app_identifier;
    }

    /**
    * Getter method for the auto_renew attribute.
    * An indication of whether or not the external subscription will auto-renew at the expiration date.
    *
    * @return ?bool
    */
    public function getAutoRenew(): ?bool
    {
        return $this->_auto_renew;
    }

    /**
    * Setter method for the auto_renew attribute.
    *
    * @param bool $auto_renew
    *
    * @return void
    */
    public function setAutoRenew(bool $auto_renew): void
    {
        $this->_auto_renew = $auto_renew;
    }

    /**
    * Getter method for the created_at attribute.
    * When the external subscription was created in Recurly.
    *
    * @return ?string
    */
    public function getCreatedAt(): ?string
    {
        return $this->_created_at;
    }

    /**
    * Setter method for the created_at attribute.
    *
    * @param string $created_at
    *
    * @return void
    */
    public function setCreatedAt(string $created_at): void
    {
        $this->_created_at = $created_at;
    }

    /**
    * Getter method for the expires_at attribute.
    * When the external subscription expires in the external platform.
    *
    * @return ?string
    */
    public function getExpiresAt(): ?string
    {
        return $this->_expires_at;
    }

    /**
    * Setter method for the expires_at attribute.
    *
    * @param string $expires_at
    *
    * @return void
    */
    public function setExpiresAt(string $expires_at): void
    {
        $this->_expires_at = $expires_at;
    }

    /**
    * Getter method for the external_product_reference attribute.
    * External Product Reference details
    *
    * @return ?\Recurly\Resources\ExternalProductReferenceMini
    */
    public function getExternalProductReference(): ?\Recurly\Resources\ExternalProductReferenceMini
    {
        return $this->_external_product_reference;
    }

    /**
    * Setter method for the external_product_reference attribute.
    *
    * @param \Recurly\Resources\ExternalProductReferenceMini $external_product_reference
    *
    * @return void
    */
    public function setExternalProductReference(\Recurly\Resources\ExternalProductReferenceMini $external_product_reference): void
    {
        $this->_external_product_reference = $external_product_reference;
    }

    /**
    * Getter method for the external_resource attribute.
    * External Resource mini details
    *
    * @return ?\Recurly\Resources\ExternalResourceMini
    */
    public function getExternalResource(): ?\Recurly\Resources\ExternalResourceMini
    {
        return $this->_external_resource;
    }

    /**
    * Setter method for the external_resource attribute.
    *
    * @param \Recurly\Resources\ExternalResourceMini $external_resource
    *
    * @return void
    */
    public function setExternalResource(\Recurly\Resources\ExternalResourceMini $external_resource): void
    {
        $this->_external_resource = $external_resource;
    }

    /**
    * Getter method for the id attribute.
    * System-generated unique identifier for an external subscription ID, e.g. `e28zov4fw0v2`.
    *
    * @return ?string
    */
    public function getId(): ?string
    {
        return $this->_id;
    }

    /**
    * Setter method for the id attribute.
    *
    * @param string $id
    *
    * @return void
    */
    public function setId(string $id): void
    {
        $this->_id = $id;
    }

    /**
    * Getter method for the last_purchased attribute.
    * When a new billing event occurred on the external subscription in conjunction with a recent billing period, reactivation or upgrade/downgrade.
    *
    * @return ?string
    */
    public function getLastPurchased(): ?string
    {
        return $this->_last_purchased;
    }

    /**
    * Setter method for the last_purchased attribute.
    *
    * @param string $last_purchased
    *
    * @return void
    */
    public function setLastPurchased(string $last_purchased): void
    {
        $this->_last_purchased = $last_purchased;
    }

    /**
    * Getter method for the object attribute.
    * Object type
    *
    * @return ?string
    */
    public function getObject(): ?string
    {
        return $this->_object;
    }

    /**
    * Setter method for the object attribute.
    *
    * @param string $object
    *
    * @return void
    */
    public function setObject(string $object): void
    {
        $this->_object = $object;
    }

    /**
    * Getter method for the quantity attribute.
    * An indication of the quantity of a subscribed item's quantity.
    *
    * @return ?int
    */
    public function getQuantity(): ?int
    {
        return $this->_quantity;
    }

    /**
    * Setter method for the quantity attribute.
    *
    * @param int $quantity
    *
    * @return void
    */
    public function setQuantity(int $quantity): void
    {
        $this->_quantity = $quantity;
    }

    /**
    * Getter method for the updated_at attribute.
    * When the external subscription was updated in Recurly.
    *
    * @return ?string
    */
    public function getUpdatedAt(): ?string
    {
        return $this->_updated_at;
    }

    /**
    * Setter method for the updated_at attribute.
    *
    * @param string $updated_at
    *
    * @return void
    */
    public function setUpdatedAt(string $updated_at): void
    {
        $this->_updated_at = $updated_at;
    }
}