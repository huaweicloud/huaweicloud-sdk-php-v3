<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HotKeyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HotKeyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  key名称
    * type  key类型。取值：string、hash、list、zset、set、stream、exhash
    * command  最新执行命令
    * qps  QPS值
    * trafficIn  入口流量（字节/秒）
    * trafficOut  出口流量（字节/秒）
    * dbId  DB ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'command' => 'string',
            'qps' => 'int',
            'trafficIn' => 'int',
            'trafficOut' => 'int',
            'dbId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  key名称
    * type  key类型。取值：string、hash、list、zset、set、stream、exhash
    * command  最新执行命令
    * qps  QPS值
    * trafficIn  入口流量（字节/秒）
    * trafficOut  出口流量（字节/秒）
    * dbId  DB ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'command' => null,
        'qps' => 'int64',
        'trafficIn' => 'int64',
        'trafficOut' => 'int64',
        'dbId' => null
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
    * name  key名称
    * type  key类型。取值：string、hash、list、zset、set、stream、exhash
    * command  最新执行命令
    * qps  QPS值
    * trafficIn  入口流量（字节/秒）
    * trafficOut  出口流量（字节/秒）
    * dbId  DB ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'command' => 'command',
            'qps' => 'qps',
            'trafficIn' => 'traffic_in',
            'trafficOut' => 'traffic_out',
            'dbId' => 'db_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  key名称
    * type  key类型。取值：string、hash、list、zset、set、stream、exhash
    * command  最新执行命令
    * qps  QPS值
    * trafficIn  入口流量（字节/秒）
    * trafficOut  出口流量（字节/秒）
    * dbId  DB ID
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'command' => 'setCommand',
            'qps' => 'setQps',
            'trafficIn' => 'setTrafficIn',
            'trafficOut' => 'setTrafficOut',
            'dbId' => 'setDbId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  key名称
    * type  key类型。取值：string、hash、list、zset、set、stream、exhash
    * command  最新执行命令
    * qps  QPS值
    * trafficIn  入口流量（字节/秒）
    * trafficOut  出口流量（字节/秒）
    * dbId  DB ID
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'command' => 'getCommand',
            'qps' => 'getQps',
            'trafficIn' => 'getTrafficIn',
            'trafficOut' => 'getTrafficOut',
            'dbId' => 'getDbId'
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
    const TYPE_STRING = 'string';
    const TYPE_HASH = 'hash';
    const TYPE__LIST = 'list';
    const TYPE_ZSET = 'zset';
    const TYPE_SET = 'set';
    const TYPE_STREAM = 'stream';
    const TYPE_EXHASH = 'exhash';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRING,
            self::TYPE_HASH,
            self::TYPE__LIST,
            self::TYPE_ZSET,
            self::TYPE_SET,
            self::TYPE_STREAM,
            self::TYPE_EXHASH,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['qps'] = isset($data['qps']) ? $data['qps'] : null;
        $this->container['trafficIn'] = isset($data['trafficIn']) ? $data['trafficIn'] : null;
        $this->container['trafficOut'] = isset($data['trafficOut']) ? $data['trafficOut'] : null;
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['command']) && (mb_strlen($this->container['command']) > 64)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['command']) && (mb_strlen($this->container['command']) < 1)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['qps']) && ($this->container['qps'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'qps', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['qps']) && ($this->container['qps'] < 0)) {
                $invalidProperties[] = "invalid value for 'qps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trafficIn']) && ($this->container['trafficIn'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'trafficIn', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['trafficIn']) && ($this->container['trafficIn'] < 0)) {
                $invalidProperties[] = "invalid value for 'trafficIn', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trafficOut']) && ($this->container['trafficOut'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'trafficOut', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['trafficOut']) && ($this->container['trafficOut'] < 0)) {
                $invalidProperties[] = "invalid value for 'trafficOut', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dbId']) && (mb_strlen($this->container['dbId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dbId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dbId']) && (mb_strlen($this->container['dbId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dbId', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  key名称
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
    * @param string|null $name key名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  key类型。取值：string、hash、list、zset、set、stream、exhash
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
    * @param string|null $type key类型。取值：string、hash、list、zset、set、stream、exhash
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets command
    *  最新执行命令
    *
    * @return string|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string|null $command 最新执行命令
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets qps
    *  QPS值
    *
    * @return int|null
    */
    public function getQps()
    {
        return $this->container['qps'];
    }

    /**
    * Sets qps
    *
    * @param int|null $qps QPS值
    *
    * @return $this
    */
    public function setQps($qps)
    {
        $this->container['qps'] = $qps;
        return $this;
    }

    /**
    * Gets trafficIn
    *  入口流量（字节/秒）
    *
    * @return int|null
    */
    public function getTrafficIn()
    {
        return $this->container['trafficIn'];
    }

    /**
    * Sets trafficIn
    *
    * @param int|null $trafficIn 入口流量（字节/秒）
    *
    * @return $this
    */
    public function setTrafficIn($trafficIn)
    {
        $this->container['trafficIn'] = $trafficIn;
        return $this;
    }

    /**
    * Gets trafficOut
    *  出口流量（字节/秒）
    *
    * @return int|null
    */
    public function getTrafficOut()
    {
        return $this->container['trafficOut'];
    }

    /**
    * Sets trafficOut
    *
    * @param int|null $trafficOut 出口流量（字节/秒）
    *
    * @return $this
    */
    public function setTrafficOut($trafficOut)
    {
        $this->container['trafficOut'] = $trafficOut;
        return $this;
    }

    /**
    * Gets dbId
    *  DB ID
    *
    * @return string|null
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param string|null $dbId DB ID
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
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

