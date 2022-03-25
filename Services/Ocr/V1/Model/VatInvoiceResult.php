<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VatInvoiceResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VatInvoiceResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  增值税发票类型，可选值包括：  - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - roll：增值税普通发票（卷票）
    * serialNumber  发票联次。 当“advanced_mode”设置为“true”时才返回。
    * attribution  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    * supervisionSeal  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    * code  发票代码。
    * machineNumber  机器编号。 当“advanced_mode”设置为“true”时才返回。
    * printNumber  机打号码。 当“advanced_mode”设置为“true”时才返回
    * checkCode  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    * number  发票号码。
    * issueDate  开票日期。
    * encryptionBlock  密码区。
    * buyerName  购买方名称。
    * buyerId  购买方纳税人识别号。
    * buyerAddress  购买方地址、电话。
    * buyerBank  购买方开户行及帐号。
    * sellerName  销售方名称。
    * sellerId  销售方纳税人识别号。
    * sellerAddress  销售方地址、电话。
    * sellerBank  销售方开户行及帐号。
    * subtotalAmount  合计金额。
    * subtotalTax  合计税额。
    * total  价税合计。
    * totalInWords  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    * remarks  备注。 当“advanced_mode”设置为“true”时才返回。
    * receiver  收款人。 当“advanced_mode”设置为“true”时才返回。
    * reviewer  复核。 当“advanced_mode”设置为“true”时才返回。
    * issuer  开票人。 当“advanced_mode”设置为“true”时才返回。
    * sellerSeal  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    * itemList  货物或应税劳务列表。
    * confidence  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'serialNumber' => 'string',
            'attribution' => 'string',
            'supervisionSeal' => 'string[]',
            'code' => 'string',
            'machineNumber' => 'string',
            'printNumber' => 'string',
            'checkCode' => 'string',
            'number' => 'string',
            'issueDate' => 'string',
            'encryptionBlock' => 'string',
            'buyerName' => 'string',
            'buyerId' => 'string',
            'buyerAddress' => 'string',
            'buyerBank' => 'string',
            'sellerName' => 'string',
            'sellerId' => 'string',
            'sellerAddress' => 'string',
            'sellerBank' => 'string',
            'subtotalAmount' => 'string',
            'subtotalTax' => 'string',
            'total' => 'string',
            'totalInWords' => 'string',
            'remarks' => 'string',
            'receiver' => 'string',
            'reviewer' => 'string',
            'issuer' => 'string',
            'sellerSeal' => 'string[]',
            'itemList' => '\HuaweiCloud\SDK\Ocr\V1\Model\ItemList[]',
            'confidence' => 'object',
            'textLocation' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  增值税发票类型，可选值包括：  - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - roll：增值税普通发票（卷票）
    * serialNumber  发票联次。 当“advanced_mode”设置为“true”时才返回。
    * attribution  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    * supervisionSeal  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    * code  发票代码。
    * machineNumber  机器编号。 当“advanced_mode”设置为“true”时才返回。
    * printNumber  机打号码。 当“advanced_mode”设置为“true”时才返回
    * checkCode  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    * number  发票号码。
    * issueDate  开票日期。
    * encryptionBlock  密码区。
    * buyerName  购买方名称。
    * buyerId  购买方纳税人识别号。
    * buyerAddress  购买方地址、电话。
    * buyerBank  购买方开户行及帐号。
    * sellerName  销售方名称。
    * sellerId  销售方纳税人识别号。
    * sellerAddress  销售方地址、电话。
    * sellerBank  销售方开户行及帐号。
    * subtotalAmount  合计金额。
    * subtotalTax  合计税额。
    * total  价税合计。
    * totalInWords  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    * remarks  备注。 当“advanced_mode”设置为“true”时才返回。
    * receiver  收款人。 当“advanced_mode”设置为“true”时才返回。
    * reviewer  复核。 当“advanced_mode”设置为“true”时才返回。
    * issuer  开票人。 当“advanced_mode”设置为“true”时才返回。
    * sellerSeal  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    * itemList  货物或应税劳务列表。
    * confidence  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'serialNumber' => null,
        'attribution' => null,
        'supervisionSeal' => null,
        'code' => null,
        'machineNumber' => null,
        'printNumber' => null,
        'checkCode' => null,
        'number' => null,
        'issueDate' => null,
        'encryptionBlock' => null,
        'buyerName' => null,
        'buyerId' => null,
        'buyerAddress' => null,
        'buyerBank' => null,
        'sellerName' => null,
        'sellerId' => null,
        'sellerAddress' => null,
        'sellerBank' => null,
        'subtotalAmount' => null,
        'subtotalTax' => null,
        'total' => null,
        'totalInWords' => null,
        'remarks' => null,
        'receiver' => null,
        'reviewer' => null,
        'issuer' => null,
        'sellerSeal' => null,
        'itemList' => null,
        'confidence' => null,
        'textLocation' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * type  增值税发票类型，可选值包括：  - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - roll：增值税普通发票（卷票）
    * serialNumber  发票联次。 当“advanced_mode”设置为“true”时才返回。
    * attribution  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    * supervisionSeal  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    * code  发票代码。
    * machineNumber  机器编号。 当“advanced_mode”设置为“true”时才返回。
    * printNumber  机打号码。 当“advanced_mode”设置为“true”时才返回
    * checkCode  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    * number  发票号码。
    * issueDate  开票日期。
    * encryptionBlock  密码区。
    * buyerName  购买方名称。
    * buyerId  购买方纳税人识别号。
    * buyerAddress  购买方地址、电话。
    * buyerBank  购买方开户行及帐号。
    * sellerName  销售方名称。
    * sellerId  销售方纳税人识别号。
    * sellerAddress  销售方地址、电话。
    * sellerBank  销售方开户行及帐号。
    * subtotalAmount  合计金额。
    * subtotalTax  合计税额。
    * total  价税合计。
    * totalInWords  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    * remarks  备注。 当“advanced_mode”设置为“true”时才返回。
    * receiver  收款人。 当“advanced_mode”设置为“true”时才返回。
    * reviewer  复核。 当“advanced_mode”设置为“true”时才返回。
    * issuer  开票人。 当“advanced_mode”设置为“true”时才返回。
    * sellerSeal  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    * itemList  货物或应税劳务列表。
    * confidence  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'serialNumber' => 'serial_number',
            'attribution' => 'attribution',
            'supervisionSeal' => 'supervision_seal',
            'code' => 'code',
            'machineNumber' => 'machine_number',
            'printNumber' => 'print_number',
            'checkCode' => 'check_code',
            'number' => 'number',
            'issueDate' => 'issue_date',
            'encryptionBlock' => 'encryption_block',
            'buyerName' => 'buyer_name',
            'buyerId' => 'buyer_id',
            'buyerAddress' => 'buyer_address',
            'buyerBank' => 'buyer_bank',
            'sellerName' => 'seller_name',
            'sellerId' => 'seller_id',
            'sellerAddress' => 'seller_address',
            'sellerBank' => 'seller_bank',
            'subtotalAmount' => 'subtotal_amount',
            'subtotalTax' => 'subtotal_tax',
            'total' => 'total',
            'totalInWords' => 'total_in_words',
            'remarks' => 'remarks',
            'receiver' => 'receiver',
            'reviewer' => 'reviewer',
            'issuer' => 'issuer',
            'sellerSeal' => 'seller_seal',
            'itemList' => 'item_list',
            'confidence' => 'confidence',
            'textLocation' => 'text_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  增值税发票类型，可选值包括：  - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - roll：增值税普通发票（卷票）
    * serialNumber  发票联次。 当“advanced_mode”设置为“true”时才返回。
    * attribution  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    * supervisionSeal  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    * code  发票代码。
    * machineNumber  机器编号。 当“advanced_mode”设置为“true”时才返回。
    * printNumber  机打号码。 当“advanced_mode”设置为“true”时才返回
    * checkCode  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    * number  发票号码。
    * issueDate  开票日期。
    * encryptionBlock  密码区。
    * buyerName  购买方名称。
    * buyerId  购买方纳税人识别号。
    * buyerAddress  购买方地址、电话。
    * buyerBank  购买方开户行及帐号。
    * sellerName  销售方名称。
    * sellerId  销售方纳税人识别号。
    * sellerAddress  销售方地址、电话。
    * sellerBank  销售方开户行及帐号。
    * subtotalAmount  合计金额。
    * subtotalTax  合计税额。
    * total  价税合计。
    * totalInWords  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    * remarks  备注。 当“advanced_mode”设置为“true”时才返回。
    * receiver  收款人。 当“advanced_mode”设置为“true”时才返回。
    * reviewer  复核。 当“advanced_mode”设置为“true”时才返回。
    * issuer  开票人。 当“advanced_mode”设置为“true”时才返回。
    * sellerSeal  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    * itemList  货物或应税劳务列表。
    * confidence  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'serialNumber' => 'setSerialNumber',
            'attribution' => 'setAttribution',
            'supervisionSeal' => 'setSupervisionSeal',
            'code' => 'setCode',
            'machineNumber' => 'setMachineNumber',
            'printNumber' => 'setPrintNumber',
            'checkCode' => 'setCheckCode',
            'number' => 'setNumber',
            'issueDate' => 'setIssueDate',
            'encryptionBlock' => 'setEncryptionBlock',
            'buyerName' => 'setBuyerName',
            'buyerId' => 'setBuyerId',
            'buyerAddress' => 'setBuyerAddress',
            'buyerBank' => 'setBuyerBank',
            'sellerName' => 'setSellerName',
            'sellerId' => 'setSellerId',
            'sellerAddress' => 'setSellerAddress',
            'sellerBank' => 'setSellerBank',
            'subtotalAmount' => 'setSubtotalAmount',
            'subtotalTax' => 'setSubtotalTax',
            'total' => 'setTotal',
            'totalInWords' => 'setTotalInWords',
            'remarks' => 'setRemarks',
            'receiver' => 'setReceiver',
            'reviewer' => 'setReviewer',
            'issuer' => 'setIssuer',
            'sellerSeal' => 'setSellerSeal',
            'itemList' => 'setItemList',
            'confidence' => 'setConfidence',
            'textLocation' => 'setTextLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  增值税发票类型，可选值包括：  - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - roll：增值税普通发票（卷票）
    * serialNumber  发票联次。 当“advanced_mode”设置为“true”时才返回。
    * attribution  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    * supervisionSeal  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    * code  发票代码。
    * machineNumber  机器编号。 当“advanced_mode”设置为“true”时才返回。
    * printNumber  机打号码。 当“advanced_mode”设置为“true”时才返回
    * checkCode  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    * number  发票号码。
    * issueDate  开票日期。
    * encryptionBlock  密码区。
    * buyerName  购买方名称。
    * buyerId  购买方纳税人识别号。
    * buyerAddress  购买方地址、电话。
    * buyerBank  购买方开户行及帐号。
    * sellerName  销售方名称。
    * sellerId  销售方纳税人识别号。
    * sellerAddress  销售方地址、电话。
    * sellerBank  销售方开户行及帐号。
    * subtotalAmount  合计金额。
    * subtotalTax  合计税额。
    * total  价税合计。
    * totalInWords  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    * remarks  备注。 当“advanced_mode”设置为“true”时才返回。
    * receiver  收款人。 当“advanced_mode”设置为“true”时才返回。
    * reviewer  复核。 当“advanced_mode”设置为“true”时才返回。
    * issuer  开票人。 当“advanced_mode”设置为“true”时才返回。
    * sellerSeal  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    * itemList  货物或应税劳务列表。
    * confidence  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'serialNumber' => 'getSerialNumber',
            'attribution' => 'getAttribution',
            'supervisionSeal' => 'getSupervisionSeal',
            'code' => 'getCode',
            'machineNumber' => 'getMachineNumber',
            'printNumber' => 'getPrintNumber',
            'checkCode' => 'getCheckCode',
            'number' => 'getNumber',
            'issueDate' => 'getIssueDate',
            'encryptionBlock' => 'getEncryptionBlock',
            'buyerName' => 'getBuyerName',
            'buyerId' => 'getBuyerId',
            'buyerAddress' => 'getBuyerAddress',
            'buyerBank' => 'getBuyerBank',
            'sellerName' => 'getSellerName',
            'sellerId' => 'getSellerId',
            'sellerAddress' => 'getSellerAddress',
            'sellerBank' => 'getSellerBank',
            'subtotalAmount' => 'getSubtotalAmount',
            'subtotalTax' => 'getSubtotalTax',
            'total' => 'getTotal',
            'totalInWords' => 'getTotalInWords',
            'remarks' => 'getRemarks',
            'receiver' => 'getReceiver',
            'reviewer' => 'getReviewer',
            'issuer' => 'getIssuer',
            'sellerSeal' => 'getSellerSeal',
            'itemList' => 'getItemList',
            'confidence' => 'getConfidence',
            'textLocation' => 'getTextLocation'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['attribution'] = isset($data['attribution']) ? $data['attribution'] : null;
        $this->container['supervisionSeal'] = isset($data['supervisionSeal']) ? $data['supervisionSeal'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['machineNumber'] = isset($data['machineNumber']) ? $data['machineNumber'] : null;
        $this->container['printNumber'] = isset($data['printNumber']) ? $data['printNumber'] : null;
        $this->container['checkCode'] = isset($data['checkCode']) ? $data['checkCode'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['encryptionBlock'] = isset($data['encryptionBlock']) ? $data['encryptionBlock'] : null;
        $this->container['buyerName'] = isset($data['buyerName']) ? $data['buyerName'] : null;
        $this->container['buyerId'] = isset($data['buyerId']) ? $data['buyerId'] : null;
        $this->container['buyerAddress'] = isset($data['buyerAddress']) ? $data['buyerAddress'] : null;
        $this->container['buyerBank'] = isset($data['buyerBank']) ? $data['buyerBank'] : null;
        $this->container['sellerName'] = isset($data['sellerName']) ? $data['sellerName'] : null;
        $this->container['sellerId'] = isset($data['sellerId']) ? $data['sellerId'] : null;
        $this->container['sellerAddress'] = isset($data['sellerAddress']) ? $data['sellerAddress'] : null;
        $this->container['sellerBank'] = isset($data['sellerBank']) ? $data['sellerBank'] : null;
        $this->container['subtotalAmount'] = isset($data['subtotalAmount']) ? $data['subtotalAmount'] : null;
        $this->container['subtotalTax'] = isset($data['subtotalTax']) ? $data['subtotalTax'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['totalInWords'] = isset($data['totalInWords']) ? $data['totalInWords'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['receiver'] = isset($data['receiver']) ? $data['receiver'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['sellerSeal'] = isset($data['sellerSeal']) ? $data['sellerSeal'] : null;
        $this->container['itemList'] = isset($data['itemList']) ? $data['itemList'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets type
    *  增值税发票类型，可选值包括：  - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - roll：增值税普通发票（卷票）
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 增值税发票类型，可选值包括：  - special: 增值税专用发票  - normal: 增值税普通发票  - electronic: 增值税电子普通发票  - roll：增值税普通发票（卷票）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets serialNumber
    *  发票联次。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string|null $serialNumber 发票联次。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets attribution
    *  发票归属地。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getAttribution()
    {
        return $this->container['attribution'];
    }

    /**
    * Sets attribution
    *
    * @param string|null $attribution 发票归属地。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setAttribution($attribution)
    {
        $this->container['attribution'] = $attribution;
        return $this;
    }

    /**
    * Gets supervisionSeal
    *  发票监制章。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string[]|null
    */
    public function getSupervisionSeal()
    {
        return $this->container['supervisionSeal'];
    }

    /**
    * Sets supervisionSeal
    *
    * @param string[]|null $supervisionSeal 发票监制章。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setSupervisionSeal($supervisionSeal)
    {
        $this->container['supervisionSeal'] = $supervisionSeal;
        return $this;
    }

    /**
    * Gets code
    *  发票代码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 发票代码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets machineNumber
    *  机器编号。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getMachineNumber()
    {
        return $this->container['machineNumber'];
    }

    /**
    * Sets machineNumber
    *
    * @param string|null $machineNumber 机器编号。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setMachineNumber($machineNumber)
    {
        $this->container['machineNumber'] = $machineNumber;
        return $this;
    }

    /**
    * Gets printNumber
    *  机打号码。 当“advanced_mode”设置为“true”时才返回
    *
    * @return string|null
    */
    public function getPrintNumber()
    {
        return $this->container['printNumber'];
    }

    /**
    * Sets printNumber
    *
    * @param string|null $printNumber 机打号码。 当“advanced_mode”设置为“true”时才返回
    *
    * @return $this
    */
    public function setPrintNumber($printNumber)
    {
        $this->container['printNumber'] = $printNumber;
        return $this;
    }

    /**
    * Gets checkCode
    *  发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    *
    * @return string|null
    */
    public function getCheckCode()
    {
        return $this->container['checkCode'];
    }

    /**
    * Sets checkCode
    *
    * @param string|null $checkCode 发票校验码，特定类型增值税发票内不存在该信息时返回空字符串。
    *
    * @return $this
    */
    public function setCheckCode($checkCode)
    {
        $this->container['checkCode'] = $checkCode;
        return $this;
    }

    /**
    * Gets number
    *  发票号码。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 发票号码。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets issueDate
    *  开票日期。
    *
    * @return string|null
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param string|null $issueDate 开票日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets encryptionBlock
    *  密码区。
    *
    * @return string|null
    */
    public function getEncryptionBlock()
    {
        return $this->container['encryptionBlock'];
    }

    /**
    * Sets encryptionBlock
    *
    * @param string|null $encryptionBlock 密码区。
    *
    * @return $this
    */
    public function setEncryptionBlock($encryptionBlock)
    {
        $this->container['encryptionBlock'] = $encryptionBlock;
        return $this;
    }

    /**
    * Gets buyerName
    *  购买方名称。
    *
    * @return string|null
    */
    public function getBuyerName()
    {
        return $this->container['buyerName'];
    }

    /**
    * Sets buyerName
    *
    * @param string|null $buyerName 购买方名称。
    *
    * @return $this
    */
    public function setBuyerName($buyerName)
    {
        $this->container['buyerName'] = $buyerName;
        return $this;
    }

    /**
    * Gets buyerId
    *  购买方纳税人识别号。
    *
    * @return string|null
    */
    public function getBuyerId()
    {
        return $this->container['buyerId'];
    }

    /**
    * Sets buyerId
    *
    * @param string|null $buyerId 购买方纳税人识别号。
    *
    * @return $this
    */
    public function setBuyerId($buyerId)
    {
        $this->container['buyerId'] = $buyerId;
        return $this;
    }

    /**
    * Gets buyerAddress
    *  购买方地址、电话。
    *
    * @return string|null
    */
    public function getBuyerAddress()
    {
        return $this->container['buyerAddress'];
    }

    /**
    * Sets buyerAddress
    *
    * @param string|null $buyerAddress 购买方地址、电话。
    *
    * @return $this
    */
    public function setBuyerAddress($buyerAddress)
    {
        $this->container['buyerAddress'] = $buyerAddress;
        return $this;
    }

    /**
    * Gets buyerBank
    *  购买方开户行及帐号。
    *
    * @return string|null
    */
    public function getBuyerBank()
    {
        return $this->container['buyerBank'];
    }

    /**
    * Sets buyerBank
    *
    * @param string|null $buyerBank 购买方开户行及帐号。
    *
    * @return $this
    */
    public function setBuyerBank($buyerBank)
    {
        $this->container['buyerBank'] = $buyerBank;
        return $this;
    }

    /**
    * Gets sellerName
    *  销售方名称。
    *
    * @return string|null
    */
    public function getSellerName()
    {
        return $this->container['sellerName'];
    }

    /**
    * Sets sellerName
    *
    * @param string|null $sellerName 销售方名称。
    *
    * @return $this
    */
    public function setSellerName($sellerName)
    {
        $this->container['sellerName'] = $sellerName;
        return $this;
    }

    /**
    * Gets sellerId
    *  销售方纳税人识别号。
    *
    * @return string|null
    */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
    * Sets sellerId
    *
    * @param string|null $sellerId 销售方纳税人识别号。
    *
    * @return $this
    */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;
        return $this;
    }

    /**
    * Gets sellerAddress
    *  销售方地址、电话。
    *
    * @return string|null
    */
    public function getSellerAddress()
    {
        return $this->container['sellerAddress'];
    }

    /**
    * Sets sellerAddress
    *
    * @param string|null $sellerAddress 销售方地址、电话。
    *
    * @return $this
    */
    public function setSellerAddress($sellerAddress)
    {
        $this->container['sellerAddress'] = $sellerAddress;
        return $this;
    }

    /**
    * Gets sellerBank
    *  销售方开户行及帐号。
    *
    * @return string|null
    */
    public function getSellerBank()
    {
        return $this->container['sellerBank'];
    }

    /**
    * Sets sellerBank
    *
    * @param string|null $sellerBank 销售方开户行及帐号。
    *
    * @return $this
    */
    public function setSellerBank($sellerBank)
    {
        $this->container['sellerBank'] = $sellerBank;
        return $this;
    }

    /**
    * Gets subtotalAmount
    *  合计金额。
    *
    * @return string|null
    */
    public function getSubtotalAmount()
    {
        return $this->container['subtotalAmount'];
    }

    /**
    * Sets subtotalAmount
    *
    * @param string|null $subtotalAmount 合计金额。
    *
    * @return $this
    */
    public function setSubtotalAmount($subtotalAmount)
    {
        $this->container['subtotalAmount'] = $subtotalAmount;
        return $this;
    }

    /**
    * Gets subtotalTax
    *  合计税额。
    *
    * @return string|null
    */
    public function getSubtotalTax()
    {
        return $this->container['subtotalTax'];
    }

    /**
    * Sets subtotalTax
    *
    * @param string|null $subtotalTax 合计税额。
    *
    * @return $this
    */
    public function setSubtotalTax($subtotalTax)
    {
        $this->container['subtotalTax'] = $subtotalTax;
        return $this;
    }

    /**
    * Gets total
    *  价税合计。
    *
    * @return string|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param string|null $total 价税合计。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets totalInWords
    *  价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getTotalInWords()
    {
        return $this->container['totalInWords'];
    }

    /**
    * Sets totalInWords
    *
    * @param string|null $totalInWords 价税合计（大写）。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setTotalInWords($totalInWords)
    {
        $this->container['totalInWords'] = $totalInWords;
        return $this;
    }

    /**
    * Gets remarks
    *  备注。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets receiver
    *  收款人。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
    * Sets receiver
    *
    * @param string|null $receiver 收款人。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;
        return $this;
    }

    /**
    * Gets reviewer
    *  复核。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
    * Sets reviewer
    *
    * @param string|null $reviewer 复核。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;
        return $this;
    }

    /**
    * Gets issuer
    *  开票人。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string|null
    */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
    * Sets issuer
    *
    * @param string|null $issuer 开票人。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;
        return $this;
    }

    /**
    * Gets sellerSeal
    *  销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return string[]|null
    */
    public function getSellerSeal()
    {
        return $this->container['sellerSeal'];
    }

    /**
    * Sets sellerSeal
    *
    * @param string[]|null $sellerSeal 销售方发票专用章。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setSellerSeal($sellerSeal)
    {
        $this->container['sellerSeal'] = $sellerSeal;
        return $this;
    }

    /**
    * Gets itemList
    *  货物或应税劳务列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\ItemList[]|null
    */
    public function getItemList()
    {
        return $this->container['itemList'];
    }

    /**
    * Sets itemList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\ItemList[]|null $itemList 货物或应税劳务列表。
    *
    * @return $this
    */
    public function setItemList($itemList)
    {
        $this->container['itemList'] = $itemList;
        return $this;
    }

    /**
    * Gets confidence
    *  各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return object|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param object|null $confidence 各个字段的置信度。 当“advanced_mode”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets textLocation
    *  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    *
    * @return object|null
    */
    public function getTextLocation()
    {
        return $this->container['textLocation'];
    }

    /**
    * Sets textLocation
    *
    * @param object|null $textLocation 文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

