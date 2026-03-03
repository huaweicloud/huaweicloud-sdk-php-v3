<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Validity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Validity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  有效期类型，为必填值：   - **YEAR** : 年（12个月）   - **MONTH** : 月（统一按31天）   - **DAY** : 日   - **HOUR** : 小时
    * value  证书有效期值，与type对应的类型值，换算成年需满足以下规则：   - 根CA，有效期小于等于30年；   - 从属CA与私有证书，有效期小于等于20年。
    * startFrom  起始时间，为可选值:   - 格式为时间戳（毫秒级），如1645146939688代表2022-02-18 09:15:39；   - 不早于当前时间5分钟，即start_from > (current_time - 5min)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'value' => 'int',
            'startFrom' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  有效期类型，为必填值：   - **YEAR** : 年（12个月）   - **MONTH** : 月（统一按31天）   - **DAY** : 日   - **HOUR** : 小时
    * value  证书有效期值，与type对应的类型值，换算成年需满足以下规则：   - 根CA，有效期小于等于30年；   - 从属CA与私有证书，有效期小于等于20年。
    * startFrom  起始时间，为可选值:   - 格式为时间戳（毫秒级），如1645146939688代表2022-02-18 09:15:39；   - 不早于当前时间5分钟，即start_from > (current_time - 5min)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'value' => 'int32',
        'startFrom' => 'int32'
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
    * type  有效期类型，为必填值：   - **YEAR** : 年（12个月）   - **MONTH** : 月（统一按31天）   - **DAY** : 日   - **HOUR** : 小时
    * value  证书有效期值，与type对应的类型值，换算成年需满足以下规则：   - 根CA，有效期小于等于30年；   - 从属CA与私有证书，有效期小于等于20年。
    * startFrom  起始时间，为可选值:   - 格式为时间戳（毫秒级），如1645146939688代表2022-02-18 09:15:39；   - 不早于当前时间5分钟，即start_from > (current_time - 5min)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'value' => 'value',
            'startFrom' => 'start_from'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  有效期类型，为必填值：   - **YEAR** : 年（12个月）   - **MONTH** : 月（统一按31天）   - **DAY** : 日   - **HOUR** : 小时
    * value  证书有效期值，与type对应的类型值，换算成年需满足以下规则：   - 根CA，有效期小于等于30年；   - 从属CA与私有证书，有效期小于等于20年。
    * startFrom  起始时间，为可选值:   - 格式为时间戳（毫秒级），如1645146939688代表2022-02-18 09:15:39；   - 不早于当前时间5分钟，即start_from > (current_time - 5min)。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'value' => 'setValue',
            'startFrom' => 'setStartFrom'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  有效期类型，为必填值：   - **YEAR** : 年（12个月）   - **MONTH** : 月（统一按31天）   - **DAY** : 日   - **HOUR** : 小时
    * value  证书有效期值，与type对应的类型值，换算成年需满足以下规则：   - 根CA，有效期小于等于30年；   - 从属CA与私有证书，有效期小于等于20年。
    * startFrom  起始时间，为可选值:   - 格式为时间戳（毫秒级），如1645146939688代表2022-02-18 09:15:39；   - 不早于当前时间5分钟，即start_from > (current_time - 5min)。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'value' => 'getValue',
            'startFrom' => 'getStartFrom'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['startFrom'] = isset($data['startFrom']) ? $data['startFrom'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
    * Gets type
    *  有效期类型，为必填值：   - **YEAR** : 年（12个月）   - **MONTH** : 月（统一按31天）   - **DAY** : 日   - **HOUR** : 小时
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 有效期类型，为必填值：   - **YEAR** : 年（12个月）   - **MONTH** : 月（统一按31天）   - **DAY** : 日   - **HOUR** : 小时
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  证书有效期值，与type对应的类型值，换算成年需满足以下规则：   - 根CA，有效期小于等于30年；   - 从属CA与私有证书，有效期小于等于20年。
    *
    * @return int
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param int $value 证书有效期值，与type对应的类型值，换算成年需满足以下规则：   - 根CA，有效期小于等于30年；   - 从属CA与私有证书，有效期小于等于20年。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets startFrom
    *  起始时间，为可选值:   - 格式为时间戳（毫秒级），如1645146939688代表2022-02-18 09:15:39；   - 不早于当前时间5分钟，即start_from > (current_time - 5min)。
    *
    * @return int|null
    */
    public function getStartFrom()
    {
        return $this->container['startFrom'];
    }

    /**
    * Sets startFrom
    *
    * @param int|null $startFrom 起始时间，为可选值:   - 格式为时间戳（毫秒级），如1645146939688代表2022-02-18 09:15:39；   - 不早于当前时间5分钟，即start_from > (current_time - 5min)。
    *
    * @return $this
    */
    public function setStartFrom($startFrom)
    {
        $this->container['startFrom'] = $startFrom;
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

