<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 * Response object for getting an Order
 */
class GetOrderResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * @todo Write general description for this property
     * @required
     * @var GetOrderItemResponse[] $items public property
     */
    public $items;

    /**
     * @todo Write general description for this property
     * @required
     * @var GetCustomerResponse $customer public property
     */
    public $customer;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @maps created_at
     * @var string $createdAt public property
     */
    public $createdAt;

    /**
     * @todo Write general description for this property
     * @required
     * @maps updated_at
     * @var string $updatedAt public property
     */
    public $updatedAt;

    /**
     * @todo Write general description for this property
     * @required
     * @var GetChargeResponse[] $charges public property
     */
    public $charges;

    /**
     * @todo Write general description for this property
     * @required
     * @maps invoice_url
     * @var string $invoiceUrl public property
     */
    public $invoiceUrl;

    /**
     * @todo Write general description for this property
     * @required
     * @var GetShippingResponse $shipping public property
     */
    public $shipping;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Checkout Payment Settings Response
     * @var GetCheckoutPaymentSettingsResponse[]|null $checkouts public property
     */
    public $checkouts;

    /**
     * Constructor to set initial or default values of member properties
     * @param string              $id         Initialization value for $this->id
     * @param string              $code       Initialization value for $this->code
     * @param string              $currency   Initialization value for $this->currency
     * @param array               $items      Initialization value for $this->items
     * @param GetCustomerResponse $customer   Initialization value for $this->customer
     * @param string              $status     Initialization value for $this->status
     * @param string              $createdAt  Initialization value for $this->createdAt
     * @param string              $updatedAt  Initialization value for $this->updatedAt
     * @param array               $charges    Initialization value for $this->charges
     * @param string              $invoiceUrl Initialization value for $this->invoiceUrl
     * @param GetShippingResponse $shipping   Initialization value for $this->shipping
     * @param array               $metadata   Initialization value for $this->metadata
     * @param array               $checkouts  Initialization value for $this->checkouts
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->id         = func_get_arg(0);
            $this->code       = func_get_arg(1);
            $this->currency   = func_get_arg(2);
            $this->items      = func_get_arg(3);
            $this->customer   = func_get_arg(4);
            $this->status     = func_get_arg(5);
            $this->createdAt  = func_get_arg(6);
            $this->updatedAt  = func_get_arg(7);
            $this->charges    = func_get_arg(8);
            $this->invoiceUrl = func_get_arg(9);
            $this->shipping   = func_get_arg(10);
            $this->metadata   = func_get_arg(11);
            $this->checkouts  = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']          = $this->id;
        $json['code']        = $this->code;
        $json['currency']    = $this->currency;
        $json['items']       = $this->items;
        $json['customer']    = $this->customer;
        $json['status']      = $this->status;
        $json['created_at']  = $this->createdAt;
        $json['updated_at']  = $this->updatedAt;
        $json['charges']     = $this->charges;
        $json['invoice_url'] = $this->invoiceUrl;
        $json['shipping']    = $this->shipping;
        $json['metadata']    = $this->metadata;
        $json['checkouts']   = $this->checkouts;

        return $json;
    }
}
