<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DpeMappingFieldDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DpeMappingFieldDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  映射id
    * projectId  映射id
    * workspaceId  映射id
    * dataclassId  映射id
    * mappingId  映射id
    * mapperId  映射id
    * defaultValue  默认值
    * targetKey  目标字段
    * expression  表达式
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'dataclassId' => 'string',
            'mappingId' => 'string',
            'mapperId' => 'string',
            'defaultValue' => 'string',
            'targetKey' => 'string',
            'expression' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  映射id
    * projectId  映射id
    * workspaceId  映射id
    * dataclassId  映射id
    * mappingId  映射id
    * mapperId  映射id
    * defaultValue  默认值
    * targetKey  目标字段
    * expression  表达式
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'workspaceId' => null,
        'dataclassId' => null,
        'mappingId' => null,
        'mapperId' => null,
        'defaultValue' => null,
        'targetKey' => null,
        'expression' => null,
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
    * id  映射id
    * projectId  映射id
    * workspaceId  映射id
    * dataclassId  映射id
    * mappingId  映射id
    * mapperId  映射id
    * defaultValue  默认值
    * targetKey  目标字段
    * expression  表达式
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'dataclassId' => 'dataclass_id',
            'mappingId' => 'mapping_id',
            'mapperId' => 'mapper_id',
            'defaultValue' => 'default_value',
            'targetKey' => 'target_key',
            'expression' => 'expression',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  映射id
    * projectId  映射id
    * workspaceId  映射id
    * dataclassId  映射id
    * mappingId  映射id
    * mapperId  映射id
    * defaultValue  默认值
    * targetKey  目标字段
    * expression  表达式
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'dataclassId' => 'setDataclassId',
            'mappingId' => 'setMappingId',
            'mapperId' => 'setMapperId',
            'defaultValue' => 'setDefaultValue',
            'targetKey' => 'setTargetKey',
            'expression' => 'setExpression',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  映射id
    * projectId  映射id
    * workspaceId  映射id
    * dataclassId  映射id
    * mappingId  映射id
    * mapperId  映射id
    * defaultValue  默认值
    * targetKey  目标字段
    * expression  表达式
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'dataclassId' => 'getDataclassId',
            'mappingId' => 'getMappingId',
            'mapperId' => 'getMapperId',
            'defaultValue' => 'getDefaultValue',
            'targetKey' => 'getTargetKey',
            'expression' => 'getExpression',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['mappingId'] = isset($data['mappingId']) ? $data['mappingId'] : null;
        $this->container['mapperId'] = isset($data['mapperId']) ? $data['mapperId'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['targetKey'] = isset($data['targetKey']) ? $data['targetKey'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['mappingId']) && (mb_strlen($this->container['mappingId']) > 64)) {
                $invalidProperties[] = "invalid value for 'mappingId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['mappingId']) && (mb_strlen($this->container['mappingId']) < 32)) {
                $invalidProperties[] = "invalid value for 'mappingId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['mapperId']) && (mb_strlen($this->container['mapperId']) > 64)) {
                $invalidProperties[] = "invalid value for 'mapperId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['mapperId']) && (mb_strlen($this->container['mapperId']) < 32)) {
                $invalidProperties[] = "invalid value for 'mapperId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) > 64)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetKey']) && (mb_strlen($this->container['targetKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['targetKey']) && (mb_strlen($this->container['targetKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) > 9999)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) < 0)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  映射id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 映射id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  映射id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 映射id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  映射id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 映射id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets dataclassId
    *  映射id
    *
    * @return string|null
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string|null $dataclassId 映射id
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets mappingId
    *  映射id
    *
    * @return string|null
    */
    public function getMappingId()
    {
        return $this->container['mappingId'];
    }

    /**
    * Sets mappingId
    *
    * @param string|null $mappingId 映射id
    *
    * @return $this
    */
    public function setMappingId($mappingId)
    {
        $this->container['mappingId'] = $mappingId;
        return $this;
    }

    /**
    * Gets mapperId
    *  映射id
    *
    * @return string|null
    */
    public function getMapperId()
    {
        return $this->container['mapperId'];
    }

    /**
    * Sets mapperId
    *
    * @param string|null $mapperId 映射id
    *
    * @return $this
    */
    public function setMapperId($mapperId)
    {
        $this->container['mapperId'] = $mapperId;
        return $this;
    }

    /**
    * Gets defaultValue
    *  默认值
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue 默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets targetKey
    *  目标字段
    *
    * @return string|null
    */
    public function getTargetKey()
    {
        return $this->container['targetKey'];
    }

    /**
    * Sets targetKey
    *
    * @param string|null $targetKey 目标字段
    *
    * @return $this
    */
    public function setTargetKey($targetKey)
    {
        $this->container['targetKey'] = $targetKey;
        return $this;
    }

    /**
    * Gets expression
    *  表达式
    *
    * @return string|null
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string|null $expression 表达式
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param string|null $createTime 创建时间
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
    *  更新时间
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
    * @param string|null $updateTime 更新时间
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

