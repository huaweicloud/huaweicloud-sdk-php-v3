<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UsageInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UsageInfos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  资源名称
    * id  资源标识
    * amount  资源总量
    * used  已消耗用量
    * usedPercent  资源已用容量百分比,例如80% 值为80
    * usageInfo  版本超限信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'amount' => 'string',
            'used' => 'string',
            'usedPercent' => 'int',
            'usageInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\UsageInfos[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  资源名称
    * id  资源标识
    * amount  资源总量
    * used  已消耗用量
    * usedPercent  资源已用容量百分比,例如80% 值为80
    * usageInfo  版本超限信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'amount' => null,
        'used' => null,
        'usedPercent' => 'int32',
        'usageInfo' => null
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
    * name  资源名称
    * id  资源标识
    * amount  资源总量
    * used  已消耗用量
    * usedPercent  资源已用容量百分比,例如80% 值为80
    * usageInfo  版本超限信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'amount' => 'amount',
            'used' => 'used',
            'usedPercent' => 'used_percent',
            'usageInfo' => 'usage_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  资源名称
    * id  资源标识
    * amount  资源总量
    * used  已消耗用量
    * usedPercent  资源已用容量百分比,例如80% 值为80
    * usageInfo  版本超限信息
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'amount' => 'setAmount',
            'used' => 'setUsed',
            'usedPercent' => 'setUsedPercent',
            'usageInfo' => 'setUsageInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  资源名称
    * id  资源标识
    * amount  资源总量
    * used  已消耗用量
    * usedPercent  资源已用容量百分比,例如80% 值为80
    * usageInfo  版本超限信息
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'amount' => 'getAmount',
            'used' => 'getUsed',
            'usedPercent' => 'getUsedPercent',
            'usageInfo' => 'getUsageInfo'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['usedPercent'] = isset($data['usedPercent']) ? $data['usedPercent'] : null;
        $this->container['usageInfo'] = isset($data['usageInfo']) ? $data['usageInfo'] : null;
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
    * Gets name
    *  资源名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 资源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  资源标识
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 资源标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets amount
    *  资源总量
    *
    * @return string|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param string|null $amount 资源总量
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets used
    *  已消耗用量
    *
    * @return string|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param string|null $used 已消耗用量
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets usedPercent
    *  资源已用容量百分比,例如80% 值为80
    *
    * @return int|null
    */
    public function getUsedPercent()
    {
        return $this->container['usedPercent'];
    }

    /**
    * Sets usedPercent
    *
    * @param int|null $usedPercent 资源已用容量百分比,例如80% 值为80
    *
    * @return $this
    */
    public function setUsedPercent($usedPercent)
    {
        $this->container['usedPercent'] = $usedPercent;
        return $this;
    }

    /**
    * Gets usageInfo
    *  版本超限信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\UsageInfos[]|null
    */
    public function getUsageInfo()
    {
        return $this->container['usageInfo'];
    }

    /**
    * Sets usageInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\UsageInfos[]|null $usageInfo 版本超限信息
    *
    * @return $this
    */
    public function setUsageInfo($usageInfo)
    {
        $this->container['usageInfo'] = $usageInfo;
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

