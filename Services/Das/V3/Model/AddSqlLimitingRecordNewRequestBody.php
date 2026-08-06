<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddSqlLimitingRecordNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddSqlLimitingRecordNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineType  引擎类型
    * type  SQL类型
    * keyStr  限流规则
    * maxWaiting  最大等待时间
    * maxConnection  最大并发数
    * hisSqlLimitingSwitch  历史会话限流开关
    * nodeIds  节点ID列表
    * automaticity  是否自动化
    * duration  过期时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineType' => 'string',
            'type' => 'string',
            'keyStr' => 'string',
            'maxWaiting' => 'int',
            'maxConnection' => 'int',
            'hisSqlLimitingSwitch' => 'bool',
            'nodeIds' => 'string[]',
            'automaticity' => 'bool',
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineType  引擎类型
    * type  SQL类型
    * keyStr  限流规则
    * maxWaiting  最大等待时间
    * maxConnection  最大并发数
    * hisSqlLimitingSwitch  历史会话限流开关
    * nodeIds  节点ID列表
    * automaticity  是否自动化
    * duration  过期时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineType' => null,
        'type' => null,
        'keyStr' => null,
        'maxWaiting' => null,
        'maxConnection' => null,
        'hisSqlLimitingSwitch' => null,
        'nodeIds' => null,
        'automaticity' => null,
        'duration' => null
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
    * engineType  引擎类型
    * type  SQL类型
    * keyStr  限流规则
    * maxWaiting  最大等待时间
    * maxConnection  最大并发数
    * hisSqlLimitingSwitch  历史会话限流开关
    * nodeIds  节点ID列表
    * automaticity  是否自动化
    * duration  过期时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineType' => 'engine_type',
            'type' => 'type',
            'keyStr' => 'key_str',
            'maxWaiting' => 'max_waiting',
            'maxConnection' => 'max_connection',
            'hisSqlLimitingSwitch' => 'his_sql_limiting_switch',
            'nodeIds' => 'node_ids',
            'automaticity' => 'automaticity',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineType  引擎类型
    * type  SQL类型
    * keyStr  限流规则
    * maxWaiting  最大等待时间
    * maxConnection  最大并发数
    * hisSqlLimitingSwitch  历史会话限流开关
    * nodeIds  节点ID列表
    * automaticity  是否自动化
    * duration  过期时间
    *
    * @var string[]
    */
    protected static $setters = [
            'engineType' => 'setEngineType',
            'type' => 'setType',
            'keyStr' => 'setKeyStr',
            'maxWaiting' => 'setMaxWaiting',
            'maxConnection' => 'setMaxConnection',
            'hisSqlLimitingSwitch' => 'setHisSqlLimitingSwitch',
            'nodeIds' => 'setNodeIds',
            'automaticity' => 'setAutomaticity',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineType  引擎类型
    * type  SQL类型
    * keyStr  限流规则
    * maxWaiting  最大等待时间
    * maxConnection  最大并发数
    * hisSqlLimitingSwitch  历史会话限流开关
    * nodeIds  节点ID列表
    * automaticity  是否自动化
    * duration  过期时间
    *
    * @var string[]
    */
    protected static $getters = [
            'engineType' => 'getEngineType',
            'type' => 'getType',
            'keyStr' => 'getKeyStr',
            'maxWaiting' => 'getMaxWaiting',
            'maxConnection' => 'getMaxConnection',
            'hisSqlLimitingSwitch' => 'getHisSqlLimitingSwitch',
            'nodeIds' => 'getNodeIds',
            'automaticity' => 'getAutomaticity',
            'duration' => 'getDuration'
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
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['keyStr'] = isset($data['keyStr']) ? $data['keyStr'] : null;
        $this->container['maxWaiting'] = isset($data['maxWaiting']) ? $data['maxWaiting'] : null;
        $this->container['maxConnection'] = isset($data['maxConnection']) ? $data['maxConnection'] : null;
        $this->container['hisSqlLimitingSwitch'] = isset($data['hisSqlLimitingSwitch']) ? $data['hisSqlLimitingSwitch'] : null;
        $this->container['nodeIds'] = isset($data['nodeIds']) ? $data['nodeIds'] : null;
        $this->container['automaticity'] = isset($data['automaticity']) ? $data['automaticity'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['keyStr'] === null) {
            $invalidProperties[] = "'keyStr' can't be null";
        }
        if ($this->container['maxConnection'] === null) {
            $invalidProperties[] = "'maxConnection' can't be null";
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
    * Gets engineType
    *  引擎类型
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets type
    *  SQL类型
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
    * @param string $type SQL类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets keyStr
    *  限流规则
    *
    * @return string
    */
    public function getKeyStr()
    {
        return $this->container['keyStr'];
    }

    /**
    * Sets keyStr
    *
    * @param string $keyStr 限流规则
    *
    * @return $this
    */
    public function setKeyStr($keyStr)
    {
        $this->container['keyStr'] = $keyStr;
        return $this;
    }

    /**
    * Gets maxWaiting
    *  最大等待时间
    *
    * @return int|null
    */
    public function getMaxWaiting()
    {
        return $this->container['maxWaiting'];
    }

    /**
    * Sets maxWaiting
    *
    * @param int|null $maxWaiting 最大等待时间
    *
    * @return $this
    */
    public function setMaxWaiting($maxWaiting)
    {
        $this->container['maxWaiting'] = $maxWaiting;
        return $this;
    }

    /**
    * Gets maxConnection
    *  最大并发数
    *
    * @return int
    */
    public function getMaxConnection()
    {
        return $this->container['maxConnection'];
    }

    /**
    * Sets maxConnection
    *
    * @param int $maxConnection 最大并发数
    *
    * @return $this
    */
    public function setMaxConnection($maxConnection)
    {
        $this->container['maxConnection'] = $maxConnection;
        return $this;
    }

    /**
    * Gets hisSqlLimitingSwitch
    *  历史会话限流开关
    *
    * @return bool|null
    */
    public function getHisSqlLimitingSwitch()
    {
        return $this->container['hisSqlLimitingSwitch'];
    }

    /**
    * Sets hisSqlLimitingSwitch
    *
    * @param bool|null $hisSqlLimitingSwitch 历史会话限流开关
    *
    * @return $this
    */
    public function setHisSqlLimitingSwitch($hisSqlLimitingSwitch)
    {
        $this->container['hisSqlLimitingSwitch'] = $hisSqlLimitingSwitch;
        return $this;
    }

    /**
    * Gets nodeIds
    *  节点ID列表
    *
    * @return string[]|null
    */
    public function getNodeIds()
    {
        return $this->container['nodeIds'];
    }

    /**
    * Sets nodeIds
    *
    * @param string[]|null $nodeIds 节点ID列表
    *
    * @return $this
    */
    public function setNodeIds($nodeIds)
    {
        $this->container['nodeIds'] = $nodeIds;
        return $this;
    }

    /**
    * Gets automaticity
    *  是否自动化
    *
    * @return bool|null
    */
    public function getAutomaticity()
    {
        return $this->container['automaticity'];
    }

    /**
    * Sets automaticity
    *
    * @param bool|null $automaticity 是否自动化
    *
    * @return $this
    */
    public function setAutomaticity($automaticity)
    {
        $this->container['automaticity'] = $automaticity;
        return $this;
    }

    /**
    * Gets duration
    *  过期时间
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 过期时间
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

