<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HwcRdsBackupStrategy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HwcRdsBackupStrategy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  备份时间段。自动备份将在该时间段内触发。 当前时间指UTC时间。
    * keepDays  已生成的备份文件可以保存的天数。 取值范围：0～732。为0时，表示未设置自动备份策略或备份策略已关闭。如果需要延长保留时间请联系客服人员申请，自动备份最长可以保留2562天。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'keepDays' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  备份时间段。自动备份将在该时间段内触发。 当前时间指UTC时间。
    * keepDays  已生成的备份文件可以保存的天数。 取值范围：0～732。为0时，表示未设置自动备份策略或备份策略已关闭。如果需要延长保留时间请联系客服人员申请，自动备份最长可以保留2562天。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
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
    * startTime  备份时间段。自动备份将在该时间段内触发。 当前时间指UTC时间。
    * keepDays  已生成的备份文件可以保存的天数。 取值范围：0～732。为0时，表示未设置自动备份策略或备份策略已关闭。如果需要延长保留时间请联系客服人员申请，自动备份最长可以保留2562天。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'keepDays' => 'keep_days'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  备份时间段。自动备份将在该时间段内触发。 当前时间指UTC时间。
    * keepDays  已生成的备份文件可以保存的天数。 取值范围：0～732。为0时，表示未设置自动备份策略或备份策略已关闭。如果需要延长保留时间请联系客服人员申请，自动备份最长可以保留2562天。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'keepDays' => 'setKeepDays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  备份时间段。自动备份将在该时间段内触发。 当前时间指UTC时间。
    * keepDays  已生成的备份文件可以保存的天数。 取值范围：0～732。为0时，表示未设置自动备份策略或备份策略已关闭。如果需要延长保留时间请联系客服人员申请，自动备份最长可以保留2562天。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['keepDays']) && ($this->container['keepDays'] >= 2562)) {
                $invalidProperties[] = "invalid value for 'keepDays', must be smaller than 2562.";
            }
            if (!is_null($this->container['keepDays']) && ($this->container['keepDays'] <= 0)) {
                $invalidProperties[] = "invalid value for 'keepDays', must be bigger than 0.";
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
    * Gets startTime
    *  备份时间段。自动备份将在该时间段内触发。 当前时间指UTC时间。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 备份时间段。自动备份将在该时间段内触发。 当前时间指UTC时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets keepDays
    *  已生成的备份文件可以保存的天数。 取值范围：0～732。为0时，表示未设置自动备份策略或备份策略已关闭。如果需要延长保留时间请联系客服人员申请，自动备份最长可以保留2562天。
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
    * @param int|null $keepDays 已生成的备份文件可以保存的天数。 取值范围：0～732。为0时，表示未设置自动备份策略或备份策略已关闭。如果需要延长保留时间请联系客服人员申请，自动备份最长可以保留2562天。
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

