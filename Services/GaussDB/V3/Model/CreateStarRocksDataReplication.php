<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateStarRocksDataReplication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateStarRocksDataReplication';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceInstanceId  TaurusDB实例ID。
    * sourceNodeId  TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID
    * sourceDatabase  源数据库。
    * targetDatabase  目标数据库。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    * taskName  同步任务名。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceInstanceId' => 'string',
            'sourceNodeId' => 'string',
            'sourceDatabase' => 'string',
            'targetDatabase' => 'string',
            'taskName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceInstanceId  TaurusDB实例ID。
    * sourceNodeId  TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID
    * sourceDatabase  源数据库。
    * targetDatabase  目标数据库。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    * taskName  同步任务名。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceInstanceId' => null,
        'sourceNodeId' => null,
        'sourceDatabase' => null,
        'targetDatabase' => null,
        'taskName' => null
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
    * sourceInstanceId  TaurusDB实例ID。
    * sourceNodeId  TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID
    * sourceDatabase  源数据库。
    * targetDatabase  目标数据库。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    * taskName  同步任务名。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceInstanceId' => 'source_instance_id',
            'sourceNodeId' => 'source_node_id',
            'sourceDatabase' => 'source_database',
            'targetDatabase' => 'target_database',
            'taskName' => 'task_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceInstanceId  TaurusDB实例ID。
    * sourceNodeId  TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID
    * sourceDatabase  源数据库。
    * targetDatabase  目标数据库。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    * taskName  同步任务名。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceInstanceId' => 'setSourceInstanceId',
            'sourceNodeId' => 'setSourceNodeId',
            'sourceDatabase' => 'setSourceDatabase',
            'targetDatabase' => 'setTargetDatabase',
            'taskName' => 'setTaskName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceInstanceId  TaurusDB实例ID。
    * sourceNodeId  TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID
    * sourceDatabase  源数据库。
    * targetDatabase  目标数据库。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    * taskName  同步任务名。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceInstanceId' => 'getSourceInstanceId',
            'sourceNodeId' => 'getSourceNodeId',
            'sourceDatabase' => 'getSourceDatabase',
            'targetDatabase' => 'getTargetDatabase',
            'taskName' => 'getTaskName'
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
        $this->container['sourceInstanceId'] = isset($data['sourceInstanceId']) ? $data['sourceInstanceId'] : null;
        $this->container['sourceNodeId'] = isset($data['sourceNodeId']) ? $data['sourceNodeId'] : null;
        $this->container['sourceDatabase'] = isset($data['sourceDatabase']) ? $data['sourceDatabase'] : null;
        $this->container['targetDatabase'] = isset($data['targetDatabase']) ? $data['targetDatabase'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceInstanceId'] === null) {
            $invalidProperties[] = "'sourceInstanceId' can't be null";
        }
            if ((mb_strlen($this->container['sourceInstanceId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sourceInstanceId', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['sourceInstanceId']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceInstanceId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceNodeId']) && (mb_strlen($this->container['sourceNodeId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sourceNodeId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sourceNodeId']) && (mb_strlen($this->container['sourceNodeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceNodeId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['sourceDatabase'] === null) {
            $invalidProperties[] = "'sourceDatabase' can't be null";
        }
            if ((mb_strlen($this->container['sourceDatabase']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sourceDatabase', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['sourceDatabase']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceDatabase', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['targetDatabase'] === null) {
            $invalidProperties[] = "'targetDatabase' can't be null";
        }
            if ((mb_strlen($this->container['targetDatabase']) > 128)) {
                $invalidProperties[] = "invalid value for 'targetDatabase', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['targetDatabase']) < 3)) {
                $invalidProperties[] = "invalid value for 'targetDatabase', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['taskName'] === null) {
            $invalidProperties[] = "'taskName' can't be null";
        }
            if ((mb_strlen($this->container['taskName']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['taskName']) < 3)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 3.";
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
    * Gets sourceInstanceId
    *  TaurusDB实例ID。
    *
    * @return string
    */
    public function getSourceInstanceId()
    {
        return $this->container['sourceInstanceId'];
    }

    /**
    * Sets sourceInstanceId
    *
    * @param string $sourceInstanceId TaurusDB实例ID。
    *
    * @return $this
    */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->container['sourceInstanceId'] = $sourceInstanceId;
        return $this;
    }

    /**
    * Gets sourceNodeId
    *  TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID
    *
    * @return string|null
    */
    public function getSourceNodeId()
    {
        return $this->container['sourceNodeId'];
    }

    /**
    * Sets sourceNodeId
    *
    * @param string|null $sourceNodeId TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID
    *
    * @return $this
    */
    public function setSourceNodeId($sourceNodeId)
    {
        $this->container['sourceNodeId'] = $sourceNodeId;
        return $this;
    }

    /**
    * Gets sourceDatabase
    *  源数据库。
    *
    * @return string
    */
    public function getSourceDatabase()
    {
        return $this->container['sourceDatabase'];
    }

    /**
    * Sets sourceDatabase
    *
    * @param string $sourceDatabase 源数据库。
    *
    * @return $this
    */
    public function setSourceDatabase($sourceDatabase)
    {
        $this->container['sourceDatabase'] = $sourceDatabase;
        return $this;
    }

    /**
    * Gets targetDatabase
    *  目标数据库。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    *
    * @return string
    */
    public function getTargetDatabase()
    {
        return $this->container['targetDatabase'];
    }

    /**
    * Sets targetDatabase
    *
    * @param string $targetDatabase 目标数据库。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    *
    * @return $this
    */
    public function setTargetDatabase($targetDatabase)
    {
        $this->container['targetDatabase'] = $targetDatabase;
        return $this;
    }

    /**
    * Gets taskName
    *  同步任务名。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    *
    * @return string
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string $taskName 同步任务名。 字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
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

