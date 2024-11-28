<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetRedisPitrPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetRedisPitrPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  标识Redis实例是否开启指定时间点恢复。 “true”，表示实例开启Redis指定时间点恢复功能。 “false”，表示实例不启用Redis指定时间点恢复功能。
    * interval  数据备份的时间间隔，该数据备份控制redis实例可恢复时间点的间隔，默认值为 20分钟。 取值范围：5～120  单位：分钟  例如，当interval 为20min时，可恢复时间点的间隔为20min，其interval约小，对性能影响越大，存储空间膨胀约明显。
    * keepDays  指定已生成的备份文件可以保存的天数，默认值为 1 天。 取值范围：1～7  单位：天
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'interval' => 'int',
            'keepDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  标识Redis实例是否开启指定时间点恢复。 “true”，表示实例开启Redis指定时间点恢复功能。 “false”，表示实例不启用Redis指定时间点恢复功能。
    * interval  数据备份的时间间隔，该数据备份控制redis实例可恢复时间点的间隔，默认值为 20分钟。 取值范围：5～120  单位：分钟  例如，当interval 为20min时，可恢复时间点的间隔为20min，其interval约小，对性能影响越大，存储空间膨胀约明显。
    * keepDays  指定已生成的备份文件可以保存的天数，默认值为 1 天。 取值范围：1～7  单位：天
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'interval' => 'int32',
        'keepDays' => 'int32'
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
    * enabled  标识Redis实例是否开启指定时间点恢复。 “true”，表示实例开启Redis指定时间点恢复功能。 “false”，表示实例不启用Redis指定时间点恢复功能。
    * interval  数据备份的时间间隔，该数据备份控制redis实例可恢复时间点的间隔，默认值为 20分钟。 取值范围：5～120  单位：分钟  例如，当interval 为20min时，可恢复时间点的间隔为20min，其interval约小，对性能影响越大，存储空间膨胀约明显。
    * keepDays  指定已生成的备份文件可以保存的天数，默认值为 1 天。 取值范围：1～7  单位：天
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'interval' => 'interval',
            'keepDays' => 'keep_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  标识Redis实例是否开启指定时间点恢复。 “true”，表示实例开启Redis指定时间点恢复功能。 “false”，表示实例不启用Redis指定时间点恢复功能。
    * interval  数据备份的时间间隔，该数据备份控制redis实例可恢复时间点的间隔，默认值为 20分钟。 取值范围：5～120  单位：分钟  例如，当interval 为20min时，可恢复时间点的间隔为20min，其interval约小，对性能影响越大，存储空间膨胀约明显。
    * keepDays  指定已生成的备份文件可以保存的天数，默认值为 1 天。 取值范围：1～7  单位：天
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'interval' => 'setInterval',
            'keepDays' => 'setKeepDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  标识Redis实例是否开启指定时间点恢复。 “true”，表示实例开启Redis指定时间点恢复功能。 “false”，表示实例不启用Redis指定时间点恢复功能。
    * interval  数据备份的时间间隔，该数据备份控制redis实例可恢复时间点的间隔，默认值为 20分钟。 取值范围：5～120  单位：分钟  例如，当interval 为20min时，可恢复时间点的间隔为20min，其interval约小，对性能影响越大，存储空间膨胀约明显。
    * keepDays  指定已生成的备份文件可以保存的天数，默认值为 1 天。 取值范围：1～7  单位：天
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'interval' => 'getInterval',
            'keepDays' => 'getKeepDays'
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
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
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
    *  标识Redis实例是否开启指定时间点恢复。 “true”，表示实例开启Redis指定时间点恢复功能。 “false”，表示实例不启用Redis指定时间点恢复功能。
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
    * @param bool $enabled 标识Redis实例是否开启指定时间点恢复。 “true”，表示实例开启Redis指定时间点恢复功能。 “false”，表示实例不启用Redis指定时间点恢复功能。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets interval
    *  数据备份的时间间隔，该数据备份控制redis实例可恢复时间点的间隔，默认值为 20分钟。 取值范围：5～120  单位：分钟  例如，当interval 为20min时，可恢复时间点的间隔为20min，其interval约小，对性能影响越大，存储空间膨胀约明显。
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval 数据备份的时间间隔，该数据备份控制redis实例可恢复时间点的间隔，默认值为 20分钟。 取值范围：5～120  单位：分钟  例如，当interval 为20min时，可恢复时间点的间隔为20min，其interval约小，对性能影响越大，存储空间膨胀约明显。
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets keepDays
    *  指定已生成的备份文件可以保存的天数，默认值为 1 天。 取值范围：1～7  单位：天
    *
    * @return int|null
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param int|null $keepDays 指定已生成的备份文件可以保存的天数，默认值为 1 天。 取值范围：1～7  单位：天
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
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

