<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Instance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Instance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productName  云产品名称
    * logicalOperator  逻辑运算符  ALL 所有条件匹配成功  ANY 任意条件匹配成功
    * instanceNames  资源名称匹配参数数组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productName' => 'string',
            'logicalOperator' => 'string',
            'instanceNames' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourceNameItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productName  云产品名称
    * logicalOperator  逻辑运算符  ALL 所有条件匹配成功  ANY 任意条件匹配成功
    * instanceNames  资源名称匹配参数数组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productName' => null,
        'logicalOperator' => null,
        'instanceNames' => null
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
    * productName  云产品名称
    * logicalOperator  逻辑运算符  ALL 所有条件匹配成功  ANY 任意条件匹配成功
    * instanceNames  资源名称匹配参数数组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productName' => 'product_name',
            'logicalOperator' => 'logical_operator',
            'instanceNames' => 'instance_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productName  云产品名称
    * logicalOperator  逻辑运算符  ALL 所有条件匹配成功  ANY 任意条件匹配成功
    * instanceNames  资源名称匹配参数数组
    *
    * @var string[]
    */
    protected static $setters = [
            'productName' => 'setProductName',
            'logicalOperator' => 'setLogicalOperator',
            'instanceNames' => 'setInstanceNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productName  云产品名称
    * logicalOperator  逻辑运算符  ALL 所有条件匹配成功  ANY 任意条件匹配成功
    * instanceNames  资源名称匹配参数数组
    *
    * @var string[]
    */
    protected static $getters = [
            'productName' => 'getProductName',
            'logicalOperator' => 'getLogicalOperator',
            'instanceNames' => 'getInstanceNames'
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
    const LOGICAL_OPERATOR_ALL = 'ALL';
    const LOGICAL_OPERATOR_ANY = 'ANY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogicalOperatorAllowableValues()
    {
        return [
            self::LOGICAL_OPERATOR_ALL,
            self::LOGICAL_OPERATOR_ANY,
        ];
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
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['logicalOperator'] = isset($data['logicalOperator']) ? $data['logicalOperator'] : null;
        $this->container['instanceNames'] = isset($data['instanceNames']) ? $data['instanceNames'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['productName'] === null) {
            $invalidProperties[] = "'productName' can't be null";
        }
            if ((mb_strlen($this->container['productName']) > 16)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['productName']) < 1)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['logicalOperator'] === null) {
            $invalidProperties[] = "'logicalOperator' can't be null";
        }
            $allowedValues = $this->getLogicalOperatorAllowableValues();
                if (!is_null($this->container['logicalOperator']) && !in_array($this->container['logicalOperator'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logicalOperator', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['instanceNames'] === null) {
            $invalidProperties[] = "'instanceNames' can't be null";
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
    * Gets productName
    *  云产品名称
    *
    * @return string
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string $productName 云产品名称
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets logicalOperator
    *  逻辑运算符  ALL 所有条件匹配成功  ANY 任意条件匹配成功
    *
    * @return string
    */
    public function getLogicalOperator()
    {
        return $this->container['logicalOperator'];
    }

    /**
    * Sets logicalOperator
    *
    * @param string $logicalOperator 逻辑运算符  ALL 所有条件匹配成功  ANY 任意条件匹配成功
    *
    * @return $this
    */
    public function setLogicalOperator($logicalOperator)
    {
        $this->container['logicalOperator'] = $logicalOperator;
        return $this;
    }

    /**
    * Gets instanceNames
    *  资源名称匹配参数数组
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourceNameItem[]
    */
    public function getInstanceNames()
    {
        return $this->container['instanceNames'];
    }

    /**
    * Sets instanceNames
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourceNameItem[] $instanceNames 资源名称匹配参数数组
    *
    * @return $this
    */
    public function setInstanceNames($instanceNames)
    {
        $this->container['instanceNames'] = $instanceNames;
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

