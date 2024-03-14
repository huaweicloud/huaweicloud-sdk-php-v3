<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActiveCodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActiveCodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * activeCodeId  激活码ID。
    * activeCode  激活码。
    * robotId  应用ID。
    * roomId  智能交互对话ID。
    * validPeriod  有效天数（0表示长期有效）。
    * expireTime  过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'activeCodeId' => 'string',
            'activeCode' => 'string',
            'robotId' => 'string',
            'roomId' => 'string',
            'validPeriod' => 'int',
            'expireTime' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * activeCodeId  激活码ID。
    * activeCode  激活码。
    * robotId  应用ID。
    * roomId  智能交互对话ID。
    * validPeriod  有效天数（0表示长期有效）。
    * expireTime  过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'activeCodeId' => null,
        'activeCode' => null,
        'robotId' => null,
        'roomId' => null,
        'validPeriod' => null,
        'expireTime' => null,
        'createTime' => null,
        'updateTime' => null
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
    * activeCodeId  激活码ID。
    * activeCode  激活码。
    * robotId  应用ID。
    * roomId  智能交互对话ID。
    * validPeriod  有效天数（0表示长期有效）。
    * expireTime  过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'activeCodeId' => 'active_code_id',
            'activeCode' => 'active_code',
            'robotId' => 'robot_id',
            'roomId' => 'room_id',
            'validPeriod' => 'valid_period',
            'expireTime' => 'expire_time',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * activeCodeId  激活码ID。
    * activeCode  激活码。
    * robotId  应用ID。
    * roomId  智能交互对话ID。
    * validPeriod  有效天数（0表示长期有效）。
    * expireTime  过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'activeCodeId' => 'setActiveCodeId',
            'activeCode' => 'setActiveCode',
            'robotId' => 'setRobotId',
            'roomId' => 'setRoomId',
            'validPeriod' => 'setValidPeriod',
            'expireTime' => 'setExpireTime',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * activeCodeId  激活码ID。
    * activeCode  激活码。
    * robotId  应用ID。
    * roomId  智能交互对话ID。
    * validPeriod  有效天数（0表示长期有效）。
    * expireTime  过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'activeCodeId' => 'getActiveCodeId',
            'activeCode' => 'getActiveCode',
            'robotId' => 'getRobotId',
            'roomId' => 'getRoomId',
            'validPeriod' => 'getValidPeriod',
            'expireTime' => 'getExpireTime',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['activeCodeId'] = isset($data['activeCodeId']) ? $data['activeCodeId'] : null;
        $this->container['activeCode'] = isset($data['activeCode']) ? $data['activeCode'] : null;
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['validPeriod'] = isset($data['validPeriod']) ? $data['validPeriod'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['activeCodeId']) && (mb_strlen($this->container['activeCodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'activeCodeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['activeCodeId']) && (mb_strlen($this->container['activeCodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'activeCodeId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['activeCode']) && (mb_strlen($this->container['activeCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'activeCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['activeCode']) && (mb_strlen($this->container['activeCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'activeCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['validPeriod']) && ($this->container['validPeriod'] > 65535)) {
                $invalidProperties[] = "invalid value for 'validPeriod', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['validPeriod']) && ($this->container['validPeriod'] < 0)) {
                $invalidProperties[] = "invalid value for 'validPeriod', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
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
    * Gets activeCodeId
    *  激活码ID。
    *
    * @return string|null
    */
    public function getActiveCodeId()
    {
        return $this->container['activeCodeId'];
    }

    /**
    * Sets activeCodeId
    *
    * @param string|null $activeCodeId 激活码ID。
    *
    * @return $this
    */
    public function setActiveCodeId($activeCodeId)
    {
        $this->container['activeCodeId'] = $activeCodeId;
        return $this;
    }

    /**
    * Gets activeCode
    *  激活码。
    *
    * @return string|null
    */
    public function getActiveCode()
    {
        return $this->container['activeCode'];
    }

    /**
    * Sets activeCode
    *
    * @param string|null $activeCode 激活码。
    *
    * @return $this
    */
    public function setActiveCode($activeCode)
    {
        $this->container['activeCode'] = $activeCode;
        return $this;
    }

    /**
    * Gets robotId
    *  应用ID。
    *
    * @return string|null
    */
    public function getRobotId()
    {
        return $this->container['robotId'];
    }

    /**
    * Sets robotId
    *
    * @param string|null $robotId 应用ID。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets roomId
    *  智能交互对话ID。
    *
    * @return string|null
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string|null $roomId 智能交互对话ID。
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets validPeriod
    *  有效天数（0表示长期有效）。
    *
    * @return int|null
    */
    public function getValidPeriod()
    {
        return $this->container['validPeriod'];
    }

    /**
    * Sets validPeriod
    *
    * @param int|null $validPeriod 有效天数（0表示长期有效）。
    *
    * @return $this
    */
    public function setValidPeriod($validPeriod)
    {
        $this->container['validPeriod'] = $validPeriod;
        return $this;
    }

    /**
    * Gets expireTime
    *  过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 过期时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

