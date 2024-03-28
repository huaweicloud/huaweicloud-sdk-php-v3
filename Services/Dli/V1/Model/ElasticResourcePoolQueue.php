<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ElasticResourcePoolQueue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ElasticResourcePoolQueue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueName  队列名称
    * enterpriseProjectId  企业项目ID
    * queueType  队列类型
    * queueScalingPolicies  队列扩缩容策略
    * owner  所有者
    * createTime  创建时间
    * engine  引擎类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueName' => 'string',
            'enterpriseProjectId' => 'string',
            'queueType' => 'string',
            'queueScalingPolicies' => '\HuaweiCloud\SDK\Dli\V1\Model\QueueScalingPolicy[]',
            'owner' => 'string',
            'createTime' => 'int',
            'engine' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueName  队列名称
    * enterpriseProjectId  企业项目ID
    * queueType  队列类型
    * queueScalingPolicies  队列扩缩容策略
    * owner  所有者
    * createTime  创建时间
    * engine  引擎类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueName' => null,
        'enterpriseProjectId' => null,
        'queueType' => null,
        'queueScalingPolicies' => null,
        'owner' => null,
        'createTime' => 'int64',
        'engine' => null
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
    * queueName  队列名称
    * enterpriseProjectId  企业项目ID
    * queueType  队列类型
    * queueScalingPolicies  队列扩缩容策略
    * owner  所有者
    * createTime  创建时间
    * engine  引擎类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueName' => 'queue_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'queueType' => 'queue_type',
            'queueScalingPolicies' => 'queue_scaling_policies',
            'owner' => 'owner',
            'createTime' => 'create_time',
            'engine' => 'engine'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueName  队列名称
    * enterpriseProjectId  企业项目ID
    * queueType  队列类型
    * queueScalingPolicies  队列扩缩容策略
    * owner  所有者
    * createTime  创建时间
    * engine  引擎类型
    *
    * @var string[]
    */
    protected static $setters = [
            'queueName' => 'setQueueName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'queueType' => 'setQueueType',
            'queueScalingPolicies' => 'setQueueScalingPolicies',
            'owner' => 'setOwner',
            'createTime' => 'setCreateTime',
            'engine' => 'setEngine'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueName  队列名称
    * enterpriseProjectId  企业项目ID
    * queueType  队列类型
    * queueScalingPolicies  队列扩缩容策略
    * owner  所有者
    * createTime  创建时间
    * engine  引擎类型
    *
    * @var string[]
    */
    protected static $getters = [
            'queueName' => 'getQueueName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'queueType' => 'getQueueType',
            'queueScalingPolicies' => 'getQueueScalingPolicies',
            'owner' => 'getOwner',
            'createTime' => 'getCreateTime',
            'engine' => 'getEngine'
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
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['queueType'] = isset($data['queueType']) ? $data['queueType'] : null;
        $this->container['queueScalingPolicies'] = isset($data['queueScalingPolicies']) ? $data['queueScalingPolicies'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
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
    * Gets queueName
    *  队列名称
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 队列名称
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets queueType
    *  队列类型
    *
    * @return string|null
    */
    public function getQueueType()
    {
        return $this->container['queueType'];
    }

    /**
    * Sets queueType
    *
    * @param string|null $queueType 队列类型
    *
    * @return $this
    */
    public function setQueueType($queueType)
    {
        $this->container['queueType'] = $queueType;
        return $this;
    }

    /**
    * Gets queueScalingPolicies
    *  队列扩缩容策略
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\QueueScalingPolicy[]|null
    */
    public function getQueueScalingPolicies()
    {
        return $this->container['queueScalingPolicies'];
    }

    /**
    * Sets queueScalingPolicies
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\QueueScalingPolicy[]|null $queueScalingPolicies 队列扩缩容策略
    *
    * @return $this
    */
    public function setQueueScalingPolicies($queueScalingPolicies)
    {
        $this->container['queueScalingPolicies'] = $queueScalingPolicies;
        return $this;
    }

    /**
    * Gets owner
    *  所有者
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 所有者
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets engine
    *  引擎类型
    *
    * @return string|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string|null $engine 引擎类型
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
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

