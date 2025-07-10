<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetJobInfoResponseBodyJobEntitiesInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetJobInfoResponseBody_job_entities_instance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endpoint  实例的连接地址。
    * type  实例类型。
    * datastore  datastore
    * replicaOf  主实例ID，仅创建只读实例的时候返回。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endpoint' => 'string',
            'type' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Rds\V3\Model\GetJobInfoResponseBodyJobEntitiesInstanceDatastore',
            'replicaOf' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endpoint  实例的连接地址。
    * type  实例类型。
    * datastore  datastore
    * replicaOf  主实例ID，仅创建只读实例的时候返回。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endpoint' => null,
        'type' => null,
        'datastore' => null,
        'replicaOf' => null
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
    * endpoint  实例的连接地址。
    * type  实例类型。
    * datastore  datastore
    * replicaOf  主实例ID，仅创建只读实例的时候返回。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endpoint' => 'endpoint',
            'type' => 'type',
            'datastore' => 'datastore',
            'replicaOf' => 'replica_of'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endpoint  实例的连接地址。
    * type  实例类型。
    * datastore  datastore
    * replicaOf  主实例ID，仅创建只读实例的时候返回。
    *
    * @var string[]
    */
    protected static $setters = [
            'endpoint' => 'setEndpoint',
            'type' => 'setType',
            'datastore' => 'setDatastore',
            'replicaOf' => 'setReplicaOf'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endpoint  实例的连接地址。
    * type  实例类型。
    * datastore  datastore
    * replicaOf  主实例ID，仅创建只读实例的时候返回。
    *
    * @var string[]
    */
    protected static $getters = [
            'endpoint' => 'getEndpoint',
            'type' => 'getType',
            'datastore' => 'getDatastore',
            'replicaOf' => 'getReplicaOf'
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
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['replicaOf'] = isset($data['replicaOf']) ? $data['replicaOf'] : null;
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
    * Gets endpoint
    *  实例的连接地址。
    *
    * @return string|null
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string|null $endpoint 实例的连接地址。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets type
    *  实例类型。
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
    * @param string|null $type 实例类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\GetJobInfoResponseBodyJobEntitiesInstanceDatastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\GetJobInfoResponseBodyJobEntitiesInstanceDatastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets replicaOf
    *  主实例ID，仅创建只读实例的时候返回。
    *
    * @return string|null
    */
    public function getReplicaOf()
    {
        return $this->container['replicaOf'];
    }

    /**
    * Sets replicaOf
    *
    * @param string|null $replicaOf 主实例ID，仅创建只读实例的时候返回。
    *
    * @return $this
    */
    public function setReplicaOf($replicaOf)
    {
        $this->container['replicaOf'] = $replicaOf;
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

