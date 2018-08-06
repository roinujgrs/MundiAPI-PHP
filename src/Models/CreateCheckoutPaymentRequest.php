<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Checkout payment request
 */
class CreateCheckoutPaymentRequest implements JsonSerializable
{
    /**
     * Accepted Payment Methods
     * @required
     * @maps accepted_payment_methods
     * @var array $acceptedPaymentMethods public property
     */
    public $acceptedPaymentMethods;

    /**
     * Accepted Multi Payment Methods
     * @required
     * @maps accepted_multi_payment_methods
     * @var array $acceptedMultiPaymentMethods public property
     */
    public $acceptedMultiPaymentMethods;

    /**
     * Success url
     * @required
     * @maps success_url
     * @var string $successUrl public property
     */
    public $successUrl;

    /**
     * Pular tela de sucesso pós-pagamento?
     * @required
     * @maps skip_checkout_success_page
     * @var bool $skipCheckoutSuccessPage public property
     */
    public $skipCheckoutSuccessPage;

    /**
     * Torna o objeto billing address editável
     * @required
     * @maps billing_address_editable
     * @var bool $billingAddressEditable public property
     */
    public $billingAddressEditable;

    /**
     * Endereço de cobrança
     * @required
     * @maps billing_address
     * @var \MundiAPILib\Models\CreateAddressRequest $billingAddress public property
     */
    public $billingAddress;

    /**
     * Default payment method
     * @maps default_payment_method
     * @var string|null $defaultPaymentMethod public property
     */
    public $defaultPaymentMethod;

    /**
     * Gateway Affiliation Id
     * @maps gateway_affiliation_id
     * @var string|null $gatewayAffiliationId public property
     */
    public $gatewayAffiliationId;

    /**
     * Card payment request
     * @maps credit_card
     * @var \MundiAPILib\Models\CreateCheckoutCardPaymentRequest|null $creditCard public property
     */
    public $creditCard;

    /**
     * Boleto payment request
     * @var \MundiAPILib\Models\CreateCheckoutBoletoPaymentRequest|null $boleto public property
     */
    public $boleto;

    /**
     * Torna o objeto editável
     * @maps customer_editable
     * @var bool|null $customerEditable public property
     */
    public $customerEditable;

    /**
     * Tempo em minutos para a expiração
     * @maps expires_in
     * @var integer|null $expiresIn public property
     */
    public $expiresIn;

    /**
     * Constructor to set initial or default values of member properties
     * @param array                              $acceptedPaymentMethods      Initialization value for $this-
     *                                                                          >acceptedPaymentMethods
     * @param array                              $acceptedMultiPaymentMethods Initialization value for $this-
     *                                                                          >acceptedMultiPaymentMethods
     * @param string                             $successUrl                  Initialization value for $this-
     *                                                                          >successUrl
     * @param bool                               $skipCheckoutSuccessPage     Initialization value for $this-
     *                                                                          >skipCheckoutSuccessPage
     * @param bool                               $billingAddressEditable      Initialization value for $this-
     *                                                                          >billingAddressEditable
     * @param CreateAddressRequest               $billingAddress              Initialization value for $this-
     *                                                                          >billingAddress
     * @param string                             $defaultPaymentMethod        Initialization value for $this-
     *                                                                          >defaultPaymentMethod
     * @param string                             $gatewayAffiliationId        Initialization value for $this-
     *                                                                          >gatewayAffiliationId
     * @param CreateCheckoutCardPaymentRequest   $creditCard                  Initialization value for $this-
     *                                                                          >creditCard
     * @param CreateCheckoutBoletoPaymentRequest $boleto                      Initialization value for $this->boleto
     * @param bool                               $customerEditable            Initialization value for $this-
     *                                                                          >customerEditable
     * @param integer                            $expiresIn                   Initialization value for $this-
     *                                                                          >expiresIn
     */
    public function __construct()
    {
        if (12 == func_num_args()) {
            $this->acceptedPaymentMethods      = func_get_arg(0);
            $this->acceptedMultiPaymentMethods = func_get_arg(1);
            $this->successUrl                  = func_get_arg(2);
            $this->skipCheckoutSuccessPage     = func_get_arg(3);
            $this->billingAddressEditable      = func_get_arg(4);
            $this->billingAddress              = func_get_arg(5);
            $this->defaultPaymentMethod        = func_get_arg(6);
            $this->gatewayAffiliationId        = func_get_arg(7);
            $this->creditCard                  = func_get_arg(8);
            $this->boleto                      = func_get_arg(9);
            $this->customerEditable            = func_get_arg(10);
            $this->expiresIn                   = func_get_arg(11);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['accepted_payment_methods']       = $this->acceptedPaymentMethods;
        $json['accepted_multi_payment_methods'] = $this->acceptedMultiPaymentMethods;
        $json['success_url']                    = $this->successUrl;
        $json['skip_checkout_success_page']     = $this->skipCheckoutSuccessPage;
        $json['billing_address_editable']       = $this->billingAddressEditable;
        $json['billing_address']                = $this->billingAddress;
        $json['default_payment_method']         = $this->defaultPaymentMethod;
        $json['gateway_affiliation_id']         = $this->gatewayAffiliationId;
        $json['credit_card']                    = $this->creditCard;
        $json['boleto']                         = $this->boleto;
        $json['customer_editable']              = $this->customerEditable;
        $json['expires_in']                     = $this->expiresIn;

        return $json;
    }
}
