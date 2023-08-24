<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetentionLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetentionLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  创建时间
    * id  ID
    * namespace  组织名
    * repo  镜像仓库名
    * retentionId  老化规则ID
    * ruleType  规则
    * tag  镜像版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'id' => 'int',
            'namespace' => 'string',
            'repo' => 'string',
            'retentionId' => 'int',
            'ruleType' => 'string',
            'tag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  创建时间
    * id  ID
    * namespace  组织名
    * repo  镜像仓库名
    * retentionId  老化规则ID
    * ruleType  规则
    * tag  镜像版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'id' => 'int32',
        'namespace' => null,
        'repo' => null,
        'retentionId' => 'int32',
        'ruleType' => null,
        'tag' => null
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
    * createdAt  创建时间
    * id  ID
    * namespace  组织名
    * repo  镜像仓库名
    * retentionId  老化规则ID
    * ruleType  规则
    * tag  镜像版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'id' => 'id',
            'namespace' => 'namespace',
            'repo' => 'repo',
            'retentionId' => 'retention_id',
            'ruleType' => 'rule_type',
            'tag' => 'tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  创建时间
    * id  ID
    * namespace  组织名
    * repo  镜像仓库名
    * retentionId  老化规则ID
    * ruleType  规则
    * tag  镜像版本
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'id' => 'setId',
            'namespace' => 'setNamespace',
            'repo' => 'setRepo',
            'retentionId' => 'setRetentionId',
            'ruleType' => 'setRuleType',
            'tag' => 'setTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  创建时间
    * id  ID
    * namespace  组织名
    * repo  镜像仓库名
    * retentionId  老化规则ID
    * ruleType  规则
    * tag  镜像版本
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'id' => 'getId',
            'namespace' => 'getNamespace',
            'repo' => 'getRepo',
            'retentionId' => 'getRetentionId',
            'ruleType' => 'getRuleType',
            'tag' => 'getTag'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['repo'] = isset($data['repo']) ? $data['repo'] : null;
        $this->container['retentionId'] = isset($data['retentionId']) ? $data['retentionId'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['repo'] === null) {
            $invalidProperties[] = "'repo' can't be null";
        }
        if ($this->container['retentionId'] === null) {
            $invalidProperties[] = "'retentionId' can't be null";
        }
        if ($this->container['ruleType'] === null) {
            $invalidProperties[] = "'ruleType' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalidProperties[] = "'tag' can't be null";
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
    * Gets createdAt
    *  创建时间
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets id
    *  ID
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets namespace
    *  组织名
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 组织名
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets repo
    *  镜像仓库名
    *
    * @return string
    */
    public function getRepo()
    {
        return $this->container['repo'];
    }

    /**
    * Sets repo
    *
    * @param string $repo 镜像仓库名
    *
    * @return $this
    */
    public function setRepo($repo)
    {
        $this->container['repo'] = $repo;
        return $this;
    }

    /**
    * Gets retentionId
    *  老化规则ID
    *
    * @return int
    */
    public function getRetentionId()
    {
        return $this->container['retentionId'];
    }

    /**
    * Sets retentionId
    *
    * @param int $retentionId 老化规则ID
    *
    * @return $this
    */
    public function setRetentionId($retentionId)
    {
        $this->container['retentionId'] = $retentionId;
        return $this;
    }

    /**
    * Gets ruleType
    *  规则
    *
    * @return string
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string $ruleType 规则
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets tag
    *  镜像版本
    *
    * @return string
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string $tag 镜像版本
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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

