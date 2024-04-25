<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BankReceiptResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BankReceiptResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bankReceiptCount  银行回单数量
    * bankReceiptList  银行回单键值对提取结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bankReceiptCount' => 'int',
            'bankReceiptList' => '\HuaweiCloud\SDK\Ocr\V1\Model\BankReceiptDict[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bankReceiptCount  银行回单数量
    * bankReceiptList  银行回单键值对提取结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bankReceiptCount' => 'int32',
        'bankReceiptList' => null
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
    * bankReceiptCount  银行回单数量
    * bankReceiptList  银行回单键值对提取结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bankReceiptCount' => 'bank_receipt_count',
            'bankReceiptList' => 'bank_receipt_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bankReceiptCount  银行回单数量
    * bankReceiptList  银行回单键值对提取结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'bankReceiptCount' => 'setBankReceiptCount',
            'bankReceiptList' => 'setBankReceiptList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bankReceiptCount  银行回单数量
    * bankReceiptList  银行回单键值对提取结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'bankReceiptCount' => 'getBankReceiptCount',
            'bankReceiptList' => 'getBankReceiptList'
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
        $this->container['bankReceiptCount'] = isset($data['bankReceiptCount']) ? $data['bankReceiptCount'] : null;
        $this->container['bankReceiptList'] = isset($data['bankReceiptList']) ? $data['bankReceiptList'] : null;
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
    * Gets bankReceiptCount
    *  银行回单数量
    *
    * @return int|null
    */
    public function getBankReceiptCount()
    {
        return $this->container['bankReceiptCount'];
    }

    /**
    * Sets bankReceiptCount
    *
    * @param int|null $bankReceiptCount 银行回单数量
    *
    * @return $this
    */
    public function setBankReceiptCount($bankReceiptCount)
    {
        $this->container['bankReceiptCount'] = $bankReceiptCount;
        return $this;
    }

    /**
    * Gets bankReceiptList
    *  银行回单键值对提取结果。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\BankReceiptDict[]|null
    */
    public function getBankReceiptList()
    {
        return $this->container['bankReceiptList'];
    }

    /**
    * Sets bankReceiptList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\BankReceiptDict[]|null $bankReceiptList 银行回单键值对提取结果。
    *
    * @return $this
    */
    public function setBankReceiptList($bankReceiptList)
    {
        $this->container['bankReceiptList'] = $bankReceiptList;
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

