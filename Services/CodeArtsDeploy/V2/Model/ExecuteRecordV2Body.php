<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteRecordV2Body implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteRecordV2Body';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * duration  部署用时
    * state  应用状态
    * operator  操作人用户名
    * executionId  部署记录id
    * startTime  部署应用的开始时间
    * nickname  操作人昵称
    * endTime  部署应用的结束时间
    * releaseId  部署记录序列号
    * type  类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'duration' => 'string',
            'state' => 'string',
            'operator' => 'string',
            'executionId' => 'string',
            'startTime' => 'string',
            'nickname' => 'string',
            'endTime' => 'string',
            'releaseId' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * duration  部署用时
    * state  应用状态
    * operator  操作人用户名
    * executionId  部署记录id
    * startTime  部署应用的开始时间
    * nickname  操作人昵称
    * endTime  部署应用的结束时间
    * releaseId  部署记录序列号
    * type  类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'duration' => null,
        'state' => null,
        'operator' => null,
        'executionId' => null,
        'startTime' => null,
        'nickname' => null,
        'endTime' => null,
        'releaseId' => 'int64',
        'type' => null
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
    * duration  部署用时
    * state  应用状态
    * operator  操作人用户名
    * executionId  部署记录id
    * startTime  部署应用的开始时间
    * nickname  操作人昵称
    * endTime  部署应用的结束时间
    * releaseId  部署记录序列号
    * type  类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'duration' => 'duration',
            'state' => 'state',
            'operator' => 'operator',
            'executionId' => 'execution_id',
            'startTime' => 'start_time',
            'nickname' => 'nickname',
            'endTime' => 'end_time',
            'releaseId' => 'release_id',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * duration  部署用时
    * state  应用状态
    * operator  操作人用户名
    * executionId  部署记录id
    * startTime  部署应用的开始时间
    * nickname  操作人昵称
    * endTime  部署应用的结束时间
    * releaseId  部署记录序列号
    * type  类型
    *
    * @var string[]
    */
    protected static $setters = [
            'duration' => 'setDuration',
            'state' => 'setState',
            'operator' => 'setOperator',
            'executionId' => 'setExecutionId',
            'startTime' => 'setStartTime',
            'nickname' => 'setNickname',
            'endTime' => 'setEndTime',
            'releaseId' => 'setReleaseId',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * duration  部署用时
    * state  应用状态
    * operator  操作人用户名
    * executionId  部署记录id
    * startTime  部署应用的开始时间
    * nickname  操作人昵称
    * endTime  部署应用的结束时间
    * releaseId  部署记录序列号
    * type  类型
    *
    * @var string[]
    */
    protected static $getters = [
            'duration' => 'getDuration',
            'state' => 'getState',
            'operator' => 'getOperator',
            'executionId' => 'getExecutionId',
            'startTime' => 'getStartTime',
            'nickname' => 'getNickname',
            'endTime' => 'getEndTime',
            'releaseId' => 'getReleaseId',
            'type' => 'getType'
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['nickname'] = isset($data['nickname']) ? $data['nickname'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['releaseId'] = isset($data['releaseId']) ? $data['releaseId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets duration
    *  部署用时
    *
    * @return string|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param string|null $duration 部署用时
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets state
    *  应用状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 应用状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets operator
    *  操作人用户名
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 操作人用户名
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets executionId
    *  部署记录id
    *
    * @return string|null
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string|null $executionId 部署记录id
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets startTime
    *  部署应用的开始时间
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
    * @param string|null $startTime 部署应用的开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets nickname
    *  操作人昵称
    *
    * @return string|null
    */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
    * Sets nickname
    *
    * @param string|null $nickname 操作人昵称
    *
    * @return $this
    */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;
        return $this;
    }

    /**
    * Gets endTime
    *  部署应用的结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 部署应用的结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets releaseId
    *  部署记录序列号
    *
    * @return int|null
    */
    public function getReleaseId()
    {
        return $this->container['releaseId'];
    }

    /**
    * Sets releaseId
    *
    * @param int|null $releaseId 部署记录序列号
    *
    * @return $this
    */
    public function setReleaseId($releaseId)
    {
        $this->container['releaseId'] = $releaseId;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

