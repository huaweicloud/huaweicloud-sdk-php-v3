<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueueSrcAssignCreateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueueSrcAssignCreateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceType  队列资源服务(当前只支持mrs、dli)。
    * queueName  队列名称。
    * connId  数据连接id。
    * clusterId  集群id。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceType' => 'string',
            'queueName' => 'string[]',
            'connId' => 'string',
            'clusterId' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceType  队列资源服务(当前只支持mrs、dli)。
    * queueName  队列名称。
    * connId  数据连接id。
    * clusterId  集群id。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceType' => null,
        'queueName' => null,
        'connId' => null,
        'clusterId' => null,
        'description' => null
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
    * sourceType  队列资源服务(当前只支持mrs、dli)。
    * queueName  队列名称。
    * connId  数据连接id。
    * clusterId  集群id。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceType' => 'source_type',
            'queueName' => 'queue_name',
            'connId' => 'conn_id',
            'clusterId' => 'cluster_id',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceType  队列资源服务(当前只支持mrs、dli)。
    * queueName  队列名称。
    * connId  数据连接id。
    * clusterId  集群id。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceType' => 'setSourceType',
            'queueName' => 'setQueueName',
            'connId' => 'setConnId',
            'clusterId' => 'setClusterId',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceType  队列资源服务(当前只支持mrs、dli)。
    * queueName  队列名称。
    * connId  数据连接id。
    * clusterId  集群id。
    * description  当前空间分配资源附加的描述信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceType' => 'getSourceType',
            'queueName' => 'getQueueName',
            'connId' => 'getConnId',
            'clusterId' => 'getClusterId',
            'description' => 'getDescription'
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
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['connId'] = isset($data['connId']) ? $data['connId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['connId']) && (mb_strlen($this->container['connId']) > 64)) {
                $invalidProperties[] = "invalid value for 'connId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['connId']) && (mb_strlen($this->container['connId']) < 1)) {
                $invalidProperties[] = "invalid value for 'connId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets sourceType
    *  队列资源服务(当前只支持mrs、dli)。
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 队列资源服务(当前只支持mrs、dli)。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets queueName
    *  队列名称。
    *
    * @return string[]|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string[]|null $queueName 队列名称。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets connId
    *  数据连接id。
    *
    * @return string|null
    */
    public function getConnId()
    {
        return $this->container['connId'];
    }

    /**
    * Sets connId
    *
    * @param string|null $connId 数据连接id。
    *
    * @return $this
    */
    public function setConnId($connId)
    {
        $this->container['connId'] = $connId;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群id。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets description
    *  当前空间分配资源附加的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 当前空间分配资源附加的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

