<?php

declare(strict_types=1);

namespace Webpayby\Payment\Domain;

use Webpayby\Payment\Enum\Language;

class PaymentData
{
    /* @var string */
    private $version = '';
    /* @var string */
    private $language = '';
    /* @var string */
    private $billingId = '';
    /* @var string */
    private $storeName = '';
    /* @var string */
    private $orderNumber = '';
    /* @var int */
    private $test = 0;
    /* @var string */
    private $currency = '';
    /* @var string */
    private $seed = '';
    /* @var string */
    private $customerName = '';
    /* @var string */
    private $customerAddress = '';
    /* @var string */
    private $serviceDate = '';
    /* @var string */
    private $orderTag = '';
    /* @var string */
    private $orderContract = '';
    /* @var string */
    private $tab = '';
    /* @var string */
    private $returnUrl = '';
    /* @var string */
    private $cancelUrl = '';
    /* @var string */
    private $notifyUrl = '';
    /* @var string */
    private $email = '';
    /* @var string */
    private $phone = '';
    /* @var float */
    private $total = 0.0;
    /* @var string */
    private $terminal = '';
    /* @var float */
    private $tax = 0.0;
    /* @var string */
    private $discountName = '';
    /* @var float */
    private $discountPrice = 0.0;
    /* @var string */
    private $discountPromoCode = '';
    /* @var string */
    private $shippingName = '';
    /* @var float */
    private $shippingPrice = 0.0;
    /* @var string */
    private $customerId = '';
    /* @var string */
    private $operationType = '';
    /* @var string */
    private $recurringToken = '';
    /* @var int */
    private $showWt = 0;
    /* @var array<InvoiceItem> $invoiceItems */
    private $invoiceItems = [];
    /* @var string */
    private $signature = '';
    /* @var string $encryptedData */
    private $encryptedData = '';
    /* @var string */
    private $secretKey = '';

    /**
     * PaymentData constructor.
     *
     * @param string      $billingId
     * @param string|null $secretKey
     */
    public function __construct(string $billingId, ?string $secretKey = '')
    {
        $this->billingId = $billingId;
        $this->secretKey = $secretKey ?? '';
        $this->language = Language::EN;
        $this->version = ParamMap::VERSION_2;
        $this->seed = (string)time();
    }

    /**
     * @return string
     */
    public function getBillingId(): string
    {
        return $this->billingId;
    }

    /**
     * @param string $billingId
     *
     * @return PaymentData
     */
    public function setBillingId(string $billingId): PaymentData
    {
        $this->billingId = $billingId;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return PaymentData
     */
    public function setVersion(string $version): PaymentData
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return PaymentData
     */
    public function setLanguage(string $language): PaymentData
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getStoreName(): string
    {
        return $this->storeName;
    }

    /**
     * @param string $storeName
     *
     * @return PaymentData
     */
    public function setStoreName(string $storeName): PaymentData
    {
        $this->storeName = $storeName;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     *
     * @return PaymentData
     */
    public function setOrderNumber(string $orderNumber): PaymentData
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getTest(): int
    {
        return $this->test;
    }

    /**
     * @param int $test
     *
     * @return PaymentData
     */
    public function setTest(int $test): PaymentData
    {
        $this->test = $test;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return PaymentData
     */
    public function setCurrency(string $currency): PaymentData
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeed(): string
    {
        return $this->seed;
    }

    /**
     * @param string $seed
     *
     * @return PaymentData
     */
    public function setSeed(string $seed): PaymentData
    {
        $this->seed = $seed;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    /**
     * @param string $customerName
     *
     * @return PaymentData
     */
    public function setCustomerName(string $customerName): PaymentData
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerAddress(): string
    {
        return $this->customerAddress;
    }

    /**
     * @param string $customerAddress
     *
     * @return PaymentData
     */
    public function setCustomerAddress(string $customerAddress): PaymentData
    {
        $this->customerAddress = $customerAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceDate(): string
    {
        return $this->serviceDate;
    }

    /**
     * @param string $serviceDate
     *
     * @return PaymentData
     */
    public function setServiceDate(string $serviceDate): PaymentData
    {
        $this->serviceDate = $serviceDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderTag(): string
    {
        return $this->orderTag;
    }

    /**
     * @param string $orderTag
     *
     * @return PaymentData
     */
    public function setOrderTag(string $orderTag): PaymentData
    {
        $this->orderTag = $orderTag;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     *
     * @return PaymentData
     */
    public function setReturnUrl(string $returnUrl): PaymentData
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getCancelUrl(): string
    {
        return $this->cancelUrl;
    }

    /**
     * @param string $cancelUrl
     *
     * @return PaymentData
     */
    public function setCancelUrl(string $cancelUrl): PaymentData
    {
        $this->cancelUrl = $cancelUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotifyUrl(): string
    {
        return $this->notifyUrl;
    }

    /**
     * @param string $notifyUrl
     *
     * @return PaymentData
     */
    public function setNotifyUrl(string $notifyUrl): PaymentData
    {
        $this->notifyUrl = $notifyUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return PaymentData
     */
    public function setEmail(string $email): PaymentData
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        if (!$this->total) {
            $this->total = $this->countUpTotal();
        }

        return $this->total;
    }

    /**
     * @param float $total
     *
     * @return PaymentData
     */
    public function setTotal(float $total): PaymentData
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return float
     */
    public function countUpTotal(): float
    {
        $total = 0.0;
        /* @var InvoiceItem $invoiceItem */
        foreach ($this->invoiceItems as $invoiceItem) {
            $total += $invoiceItem->getTotal();
        }
        $total += $this->shippingPrice;
        $total += $this->tax;
        $total -= $this->discountPrice;

        return $total;
    }

    /**
     * @return string
     */
    public function getTerminal(): string
    {
        return $this->terminal;
    }

    /**
     * @param string $terminal
     *
     * @return PaymentData
     */
    public function setTerminal(string $terminal): PaymentData
    {
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecretKey(): string
    {
        return $this->secretKey;
    }

    /**
     * @param string $secretKey
     *
     * @return PaymentData
     */
    public function setSecretKey(string $secretKey): PaymentData
    {
        $this->secretKey = $secretKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignature(): string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     *
     * @return PaymentData
     */
    public function setSignature(string $signature): PaymentData
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * @return array
     */
    public function getInvoiceItems(): array
    {
        return $this->invoiceItems;
    }

    /**
     * @param array $invoiceItems
     *
     * @return PaymentData
     */
    public function setInvoiceItems(array $invoiceItems): PaymentData
    {
        foreach ($invoiceItems as $invoiceItem) {
            $this->addInvoiceItem($invoiceItem);
        }

        return $this;
    }

    /**
     * @param string     $name
     * @param float|null $price
     * @param int|null   $quantity
     *
     * @return PaymentData
     */
    public function addInvoiceItem(string $name, ?float $price = 0.0, ?int $quantity = 1): PaymentData
    {
        $newInvoiceItem       = new InvoiceItem($name, $price, $quantity);
        $this->invoiceItems[] = $newInvoiceItem;

        return $this;
    }

    /**
     * @return string
     */
    public function getEncryptedData(): string
    {
        return $this->encryptedData;
    }

    /**
     * @param string $encryptedData
     *
     * @return PaymentData
     */
    public function setEncryptedData(string $encryptedData): PaymentData
    {
        $this->encryptedData = $encryptedData;

        return $this;
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     *
     * @return PaymentData
     */
    public function setTax(float $tax): PaymentData
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountName(): string
    {
        return $this->discountName;
    }

    /**
     * @param string $discountName
     *
     * @return PaymentData
     */
    public function setDiscountName(string $discountName): PaymentData
    {
        $this->discountName = $discountName;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPrice(): float
    {
        return $this->discountPrice;
    }

    /**
     * @param float $discountPrice
     *
     * @return PaymentData
     */
    public function setDiscountPrice(float $discountPrice): PaymentData
    {
        $this->discountPrice = $discountPrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountPromoCode(): string
    {
        return $this->discountPromoCode;
    }

    /**
     * @param string $discountPromoCode
     *
     * @return PaymentData
     */
    public function setDiscountPromoCode(string $discountPromoCode): PaymentData
    {
        $this->discountPromoCode = $discountPromoCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingName(): string
    {
        return $this->shippingName;
    }

    /**
     * @param string $shippingName
     *
     * @return PaymentData
     */
    public function setShippingName(string $shippingName): PaymentData
    {
        $this->shippingName = $shippingName;

        return $this;
    }

    /**
     * @return float
     */
    public function getShippingPrice(): float
    {
        return $this->shippingPrice;
    }

    /**
     * @param float $shippingPrice
     *
     * @return PaymentData
     */
    public function setShippingPrice(float $shippingPrice): PaymentData
    {
        $this->shippingPrice = $shippingPrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     *
     * @return PaymentData
     */
    public function setCustomerId(string $customerId): PaymentData
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperationType(): string
    {
        return $this->operationType;
    }

    /**
     * @param string $operationType
     *
     * @return PaymentData
     */
    public function setOperationType(string $operationType): PaymentData
    {
        $this->operationType = $operationType;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecurringToken(): string
    {
        return $this->recurringToken;
    }

    /**
     * @param string $recurringToken
     *
     * @return PaymentData
     */
    public function setRecurringToken(string $recurringToken): PaymentData
    {
        $this->recurringToken = $recurringToken;

        return $this;
    }

    /**
     * @return int
     */
    public function getShowWt(): int
    {
        return $this->showWt;
    }

    /**
     * @param int $showWt
     *
     * @return PaymentData
     */
    public function setShowWt(int $showWt): PaymentData
    {
        $this->showWt = $showWt;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderContract(): string
    {
        return $this->orderContract;
    }

    /**
     * @param string $orderContract
     *
     * @return PaymentData
     */
    public function setOrderContract(string $orderContract): PaymentData
    {
        $this->orderContract = $orderContract;

        return $this;
    }

    /**
     * @return string
     */
    public function getTab(): string
    {
        return $this->tab;
    }

    /**
     * @param string $tab
     *
     * @return PaymentData
     */
    public function setTab(string $tab): PaymentData
    {
        $this->tab = $tab;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return PaymentData
     */
    public function setPhone(string $phone): PaymentData
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function createSignature(): string
    {
        $sig = '';
        $sig .= $this->getSeed() ?? '';
        $sig .= $this->getBillingId() ?? '';
        $sig .= $this->getCustomerId() ?? '';
        $sig .= $this->getOrderNumber() ?? '';
        $sig .= $this->getTest() ?? '';
        $sig .= $this->getCurrency() ?? '';
        $sig .= $this->getTotal() ?? '';
        $sig .= $this->getTerminal() ?? '';
        $sig .= $this->getEncryptedData() ?? '';
        $sig .= $this->getOperationType() ?? '';
        $sig .= $this->getRecurringToken() ?? '';
        $sig .= $this->getSecretKey() ?? '';

        $signature = $this->getVersion() === ParamMap::VERSION_2 ? sha1($sig) : md5($sig);

        return $signature;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $arr = [];
        /* @var InvoiceItem $invoiceItem */
        foreach ($this->invoiceItems as $invoiceItem) {
            $arr[ParamMap::INVOICE_ITEM_NAME][]     = $invoiceItem->getName();
            $arr[ParamMap::INVOICE_ITEM_QUANTITY][] = $invoiceItem->getQuantity();
            $arr[ParamMap::INVOICE_ITEM_PRICE][]    = $invoiceItem->getPrice();
        }
        $arr[ParamMap::SCART]               = null;
        $arr[ParamMap::VERSION]             = $this->getVersion();
        $arr[ParamMap::LANGUAGE]            = $this->getLanguage();
        $arr[ParamMap::BILLING_ID]          = $this->getBillingId();
        $arr[ParamMap::STORE_NAME]          = $this->getStoreName();
        $arr[ParamMap::ORDER_NUMBER]        = $this->getOrderNumber();
        $arr[ParamMap::TEST]                = (string)$this->getTest();
        $arr[ParamMap::CURRENCY]            = $this->getCurrency();
        $arr[ParamMap::SEED]                = $this->getSeed();
        $arr[ParamMap::CUSTOMER_ID]         = $this->getCustomerId();
        $arr[ParamMap::CUSTOMER_NAME]       = $this->getCustomerName();
        $arr[ParamMap::CUSTOMER_ADDRESS]    = $this->getCustomerAddress();
        $arr[ParamMap::SERVICE_DATE]        = $this->getServiceDate();
        $arr[ParamMap::ORDER_TAG]           = $this->getOrderTag();
        $arr[ParamMap::ORDER_CONTRACT]      = $this->getOrderContract();
        $arr[ParamMap::TAB]                 = $this->getTab();
        $arr[ParamMap::RETURN_URL]          = $this->getReturnUrl();
        $arr[ParamMap::CANCEL_URL]          = $this->getCancelUrl();
        $arr[ParamMap::NOTIFY_URL]          = $this->getNotifyUrl();
        $arr[ParamMap::EMAIL]               = $this->getEmail();
        $arr[ParamMap::PHONE]               = $this->getPhone();
        $arr[ParamMap::TOTAL]               = $this->getTotal();
        $arr[ParamMap::TERMINAL]            = $this->getTerminal();
        $arr[ParamMap::TAX]                 = $this->getTax();
        $arr[ParamMap::DISCOUNT_NAME]       = $this->getDiscountName();
        $arr[ParamMap::DISCOUNT_PRICE]      = $this->getDiscountPrice();
        $arr[ParamMap::DISCOUNT_PROMO_CODE] = $this->getDiscountPromoCode();
        $arr[ParamMap::SHIPPING_NAME]       = $this->getShippingName();
        $arr[ParamMap::SHIPPING_PRICE]      = $this->getShippingPrice();
        $arr[ParamMap::OPERATION_TYPE]      = $this->getOperationType();
        $arr[ParamMap::RECURRING_TOKEN]     = $this->getRecurringToken();
        $arr[ParamMap::SHOW_WT]             = $this->getShowWt();
        $arr[ParamMap::ENCRYPTED_DATA]      = $this->getEncryptedData();
        $arr[ParamMap::SIGNATURE]           = $this->createSignature();

        return $arr;
    }
}
