<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplaySlowSqlResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplaySlowSqlResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectType  SQL语句类型
    * slowSql  SQL语句
    * oldTime  源库执行耗时
    * replayTime  目标库回放执行耗时
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectType' => 'string',
            'slowSql' => 'string',
            'oldTime' => 'string',
            'replayTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectType  SQL语句类型
    * slowSql  SQL语句
    * oldTime  源库执行耗时
    * replayTime  目标库回放执行耗时
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectType' => null,
        'slowSql' => null,
        'oldTime' => null,
        'replayTime' => null
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
    * objectType  SQL语句类型
    * slowSql  SQL语句
    * oldTime  源库执行耗时
    * replayTime  目标库回放执行耗时
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectType' => 'object_type',
            'slowSql' => 'slow_sql',
            'oldTime' => 'old_time',
            'replayTime' => 'replay_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectType  SQL语句类型
    * slowSql  SQL语句
    * oldTime  源库执行耗时
    * replayTime  目标库回放执行耗时
    *
    * @var string[]
    */
    protected static $setters = [
            'objectType' => 'setObjectType',
            'slowSql' => 'setSlowSql',
            'oldTime' => 'setOldTime',
            'replayTime' => 'setReplayTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectType  SQL语句类型
    * slowSql  SQL语句
    * oldTime  源库执行耗时
    * replayTime  目标库回放执行耗时
    *
    * @var string[]
    */
    protected static $getters = [
            'objectType' => 'getObjectType',
            'slowSql' => 'getSlowSql',
            'oldTime' => 'getOldTime',
            'replayTime' => 'getReplayTime'
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
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['slowSql'] = isset($data['slowSql']) ? $data['slowSql'] : null;
        $this->container['oldTime'] = isset($data['oldTime']) ? $data['oldTime'] : null;
        $this->container['replayTime'] = isset($data['replayTime']) ? $data['replayTime'] : null;
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
    * Gets objectType
    *  SQL语句类型
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType SQL语句类型
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets slowSql
    *  SQL语句
    *
    * @return string|null
    */
    public function getSlowSql()
    {
        return $this->container['slowSql'];
    }

    /**
    * Sets slowSql
    *
    * @param string|null $slowSql SQL语句
    *
    * @return $this
    */
    public function setSlowSql($slowSql)
    {
        $this->container['slowSql'] = $slowSql;
        return $this;
    }

    /**
    * Gets oldTime
    *  源库执行耗时
    *
    * @return string|null
    */
    public function getOldTime()
    {
        return $this->container['oldTime'];
    }

    /**
    * Sets oldTime
    *
    * @param string|null $oldTime 源库执行耗时
    *
    * @return $this
    */
    public function setOldTime($oldTime)
    {
        $this->container['oldTime'] = $oldTime;
        return $this;
    }

    /**
    * Gets replayTime
    *  目标库回放执行耗时
    *
    * @return string|null
    */
    public function getReplayTime()
    {
        return $this->container['replayTime'];
    }

    /**
    * Sets replayTime
    *
    * @param string|null $replayTime 目标库回放执行耗时
    *
    * @return $this
    */
    public function setReplayTime($replayTime)
    {
        $this->container['replayTime'] = $replayTime;
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

