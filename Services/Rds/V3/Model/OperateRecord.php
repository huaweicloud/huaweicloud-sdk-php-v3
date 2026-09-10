<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperateRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperateRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateType  操作类型
    * userName  用户名称
    * operateTime  操作时间
    * level  事件等级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateType' => 'string',
            'userName' => 'string',
            'operateTime' => 'int',
            'level' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateType  操作类型
    * userName  用户名称
    * operateTime  操作时间
    * level  事件等级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateType' => null,
        'userName' => null,
        'operateTime' => 'int64',
        'level' => null
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
    * operateType  操作类型
    * userName  用户名称
    * operateTime  操作时间
    * level  事件等级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateType' => 'operate_type',
            'userName' => 'user_name',
            'operateTime' => 'operate_time',
            'level' => 'level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateType  操作类型
    * userName  用户名称
    * operateTime  操作时间
    * level  事件等级
    *
    * @var string[]
    */
    protected static $setters = [
            'operateType' => 'setOperateType',
            'userName' => 'setUserName',
            'operateTime' => 'setOperateTime',
            'level' => 'setLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateType  操作类型
    * userName  用户名称
    * operateTime  操作时间
    * level  事件等级
    *
    * @var string[]
    */
    protected static $getters = [
            'operateType' => 'getOperateType',
            'userName' => 'getUserName',
            'operateTime' => 'getOperateTime',
            'level' => 'getLevel'
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
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['operateTime'] = isset($data['operateTime']) ? $data['operateTime'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['operateType']) && (mb_strlen($this->container['operateType']) > 36)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['operateType']) && (mb_strlen($this->container['operateType']) < 0)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 36)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operateTime']) && ($this->container['operateTime'] > 36)) {
                $invalidProperties[] = "invalid value for 'operateTime', must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['operateTime']) && ($this->container['operateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'operateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 36)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
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
    * Gets operateType
    *  操作类型
    *
    * @return string|null
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string|null $operateType 操作类型
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets operateTime
    *  操作时间
    *
    * @return int|null
    */
    public function getOperateTime()
    {
        return $this->container['operateTime'];
    }

    /**
    * Sets operateTime
    *
    * @param int|null $operateTime 操作时间
    *
    * @return $this
    */
    public function setOperateTime($operateTime)
    {
        $this->container['operateTime'] = $operateTime;
        return $this;
    }

    /**
    * Gets level
    *  事件等级
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 事件等级
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
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

