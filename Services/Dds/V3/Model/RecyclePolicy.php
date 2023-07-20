<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecyclePolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecyclePolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  打开回收策略，不可关闭 - true 打开回收策略
    * retentionPeriodInDays  策略保持时长（1-7天），天数为正整数，不填默认保留7天
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'retentionPeriodInDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  打开回收策略，不可关闭 - true 打开回收策略
    * retentionPeriodInDays  策略保持时长（1-7天），天数为正整数，不填默认保留7天
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'retentionPeriodInDays' => null
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
    * enabled  打开回收策略，不可关闭 - true 打开回收策略
    * retentionPeriodInDays  策略保持时长（1-7天），天数为正整数，不填默认保留7天
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'retentionPeriodInDays' => 'retention_period_in_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  打开回收策略，不可关闭 - true 打开回收策略
    * retentionPeriodInDays  策略保持时长（1-7天），天数为正整数，不填默认保留7天
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'retentionPeriodInDays' => 'setRetentionPeriodInDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  打开回收策略，不可关闭 - true 打开回收策略
    * retentionPeriodInDays  策略保持时长（1-7天），天数为正整数，不填默认保留7天
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'retentionPeriodInDays' => 'getRetentionPeriodInDays'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['retentionPeriodInDays'] = isset($data['retentionPeriodInDays']) ? $data['retentionPeriodInDays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
    * Gets enabled
    *  打开回收策略，不可关闭 - true 打开回收策略
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 打开回收策略，不可关闭 - true 打开回收策略
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets retentionPeriodInDays
    *  策略保持时长（1-7天），天数为正整数，不填默认保留7天
    *
    * @return int|null
    */
    public function getRetentionPeriodInDays()
    {
        return $this->container['retentionPeriodInDays'];
    }

    /**
    * Sets retentionPeriodInDays
    *
    * @param int|null $retentionPeriodInDays 策略保持时长（1-7天），天数为正整数，不填默认保留7天
    *
    * @return $this
    */
    public function setRetentionPeriodInDays($retentionPeriodInDays)
    {
        $this->container['retentionPeriodInDays'] = $retentionPeriodInDays;
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

