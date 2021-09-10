<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InvoiceVerificationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InvoiceVerificationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  发票代码
    * number  发票号码
    * issueDate  发票日期格式YYYY-MM-DD
    * checkCode  校验码后六位  发票种类为增值税普通发票、增值税电子普通发票、增值税普通发票（卷式）、增值税电子普通发票（通行费）、区块链电子发票时此项不可为空（区块链电子发票验真时，填写的是5位校验码）
    * subtotalAmount  合计金额（不含税）  1.发票种类为增值税专用发票、增值税电子专用发票、机动车销售统一发票、二手车销售统一发票、区块链电子发票时不可为空； 2.增值税专用发票、增值税电子专用发票、机动车销售统一发票、区块链电子发票填写发票合计金额（不含税），二手车发票填写发票车价合计
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'number' => 'string',
            'issueDate' => 'string',
            'checkCode' => 'string',
            'subtotalAmount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  发票代码
    * number  发票号码
    * issueDate  发票日期格式YYYY-MM-DD
    * checkCode  校验码后六位  发票种类为增值税普通发票、增值税电子普通发票、增值税普通发票（卷式）、增值税电子普通发票（通行费）、区块链电子发票时此项不可为空（区块链电子发票验真时，填写的是5位校验码）
    * subtotalAmount  合计金额（不含税）  1.发票种类为增值税专用发票、增值税电子专用发票、机动车销售统一发票、二手车销售统一发票、区块链电子发票时不可为空； 2.增值税专用发票、增值税电子专用发票、机动车销售统一发票、区块链电子发票填写发票合计金额（不含税），二手车发票填写发票车价合计
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'number' => null,
        'issueDate' => null,
        'checkCode' => null,
        'subtotalAmount' => null
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
    * code  发票代码
    * number  发票号码
    * issueDate  发票日期格式YYYY-MM-DD
    * checkCode  校验码后六位  发票种类为增值税普通发票、增值税电子普通发票、增值税普通发票（卷式）、增值税电子普通发票（通行费）、区块链电子发票时此项不可为空（区块链电子发票验真时，填写的是5位校验码）
    * subtotalAmount  合计金额（不含税）  1.发票种类为增值税专用发票、增值税电子专用发票、机动车销售统一发票、二手车销售统一发票、区块链电子发票时不可为空； 2.增值税专用发票、增值税电子专用发票、机动车销售统一发票、区块链电子发票填写发票合计金额（不含税），二手车发票填写发票车价合计
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'number' => 'number',
            'issueDate' => 'issue_date',
            'checkCode' => 'check_code',
            'subtotalAmount' => 'subtotal_amount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  发票代码
    * number  发票号码
    * issueDate  发票日期格式YYYY-MM-DD
    * checkCode  校验码后六位  发票种类为增值税普通发票、增值税电子普通发票、增值税普通发票（卷式）、增值税电子普通发票（通行费）、区块链电子发票时此项不可为空（区块链电子发票验真时，填写的是5位校验码）
    * subtotalAmount  合计金额（不含税）  1.发票种类为增值税专用发票、增值税电子专用发票、机动车销售统一发票、二手车销售统一发票、区块链电子发票时不可为空； 2.增值税专用发票、增值税电子专用发票、机动车销售统一发票、区块链电子发票填写发票合计金额（不含税），二手车发票填写发票车价合计
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'number' => 'setNumber',
            'issueDate' => 'setIssueDate',
            'checkCode' => 'setCheckCode',
            'subtotalAmount' => 'setSubtotalAmount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  发票代码
    * number  发票号码
    * issueDate  发票日期格式YYYY-MM-DD
    * checkCode  校验码后六位  发票种类为增值税普通发票、增值税电子普通发票、增值税普通发票（卷式）、增值税电子普通发票（通行费）、区块链电子发票时此项不可为空（区块链电子发票验真时，填写的是5位校验码）
    * subtotalAmount  合计金额（不含税）  1.发票种类为增值税专用发票、增值税电子专用发票、机动车销售统一发票、二手车销售统一发票、区块链电子发票时不可为空； 2.增值税专用发票、增值税电子专用发票、机动车销售统一发票、区块链电子发票填写发票合计金额（不含税），二手车发票填写发票车价合计
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'number' => 'getNumber',
            'issueDate' => 'getIssueDate',
            'checkCode' => 'getCheckCode',
            'subtotalAmount' => 'getSubtotalAmount'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['checkCode'] = isset($data['checkCode']) ? $data['checkCode'] : null;
        $this->container['subtotalAmount'] = isset($data['subtotalAmount']) ? $data['subtotalAmount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['issueDate'] === null) {
            $invalidProperties[] = "'issueDate' can't be null";
        }
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
    * Gets code
    *  发票代码
    *
    * @return string
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string $code 发票代码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets number
    *  发票号码
    *
    * @return string
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string $number 发票号码
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
    *  发票日期格式YYYY-MM-DD
    *
    * @return string
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param string $issueDate 发票日期格式YYYY-MM-DD
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets checkCode
    *  校验码后六位  发票种类为增值税普通发票、增值税电子普通发票、增值税普通发票（卷式）、增值税电子普通发票（通行费）、区块链电子发票时此项不可为空（区块链电子发票验真时，填写的是5位校验码）
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
    * @param string|null $checkCode 校验码后六位  发票种类为增值税普通发票、增值税电子普通发票、增值税普通发票（卷式）、增值税电子普通发票（通行费）、区块链电子发票时此项不可为空（区块链电子发票验真时，填写的是5位校验码）
    *
    * @return $this
    */
    public function setCheckCode($checkCode)
    {
        $this->container['checkCode'] = $checkCode;
        return $this;
    }

    /**
    * Gets subtotalAmount
    *  合计金额（不含税）  1.发票种类为增值税专用发票、增值税电子专用发票、机动车销售统一发票、二手车销售统一发票、区块链电子发票时不可为空； 2.增值税专用发票、增值税电子专用发票、机动车销售统一发票、区块链电子发票填写发票合计金额（不含税），二手车发票填写发票车价合计
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
    * @param string|null $subtotalAmount 合计金额（不含税）  1.发票种类为增值税专用发票、增值税电子专用发票、机动车销售统一发票、二手车销售统一发票、区块链电子发票时不可为空； 2.增值税专用发票、增值税电子专用发票、机动车销售统一发票、区块链电子发票填写发票合计金额（不含税），二手车发票填写发票车价合计
    *
    * @return $this
    */
    public function setSubtotalAmount($subtotalAmount)
    {
        $this->container['subtotalAmount'] = $subtotalAmount;
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

