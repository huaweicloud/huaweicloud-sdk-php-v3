<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Placement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Placement';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterAffinity  clusterAffinity
    * clusterTolerations  集群容忍规则
    * replicaScheduling  定义如何在成员集群间分配副本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterAffinity' => '\HuaweiCloud\SDK\Ucs\V1\Model\ClusterAffinity',
            'clusterTolerations' => '\HuaweiCloud\SDK\Ucs\V1\Model\Toleration[]',
            'replicaScheduling' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterAffinity  clusterAffinity
    * clusterTolerations  集群容忍规则
    * replicaScheduling  定义如何在成员集群间分配副本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterAffinity' => null,
        'clusterTolerations' => null,
        'replicaScheduling' => null
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
    * clusterAffinity  clusterAffinity
    * clusterTolerations  集群容忍规则
    * replicaScheduling  定义如何在成员集群间分配副本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterAffinity' => 'clusterAffinity',
            'clusterTolerations' => 'clusterTolerations',
            'replicaScheduling' => 'replicaScheduling'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterAffinity  clusterAffinity
    * clusterTolerations  集群容忍规则
    * replicaScheduling  定义如何在成员集群间分配副本
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterAffinity' => 'setClusterAffinity',
            'clusterTolerations' => 'setClusterTolerations',
            'replicaScheduling' => 'setReplicaScheduling'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterAffinity  clusterAffinity
    * clusterTolerations  集群容忍规则
    * replicaScheduling  定义如何在成员集群间分配副本
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterAffinity' => 'getClusterAffinity',
            'clusterTolerations' => 'getClusterTolerations',
            'replicaScheduling' => 'getReplicaScheduling'
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
        $this->container['clusterAffinity'] = isset($data['clusterAffinity']) ? $data['clusterAffinity'] : null;
        $this->container['clusterTolerations'] = isset($data['clusterTolerations']) ? $data['clusterTolerations'] : null;
        $this->container['replicaScheduling'] = isset($data['replicaScheduling']) ? $data['replicaScheduling'] : null;
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
    * Gets clusterAffinity
    *  clusterAffinity
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ClusterAffinity|null
    */
    public function getClusterAffinity()
    {
        return $this->container['clusterAffinity'];
    }

    /**
    * Sets clusterAffinity
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ClusterAffinity|null $clusterAffinity clusterAffinity
    *
    * @return $this
    */
    public function setClusterAffinity($clusterAffinity)
    {
        $this->container['clusterAffinity'] = $clusterAffinity;
        return $this;
    }

    /**
    * Gets clusterTolerations
    *  集群容忍规则
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\Toleration[]|null
    */
    public function getClusterTolerations()
    {
        return $this->container['clusterTolerations'];
    }

    /**
    * Sets clusterTolerations
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\Toleration[]|null $clusterTolerations 集群容忍规则
    *
    * @return $this
    */
    public function setClusterTolerations($clusterTolerations)
    {
        $this->container['clusterTolerations'] = $clusterTolerations;
        return $this;
    }

    /**
    * Gets replicaScheduling
    *  定义如何在成员集群间分配副本
    *
    * @return object|null
    */
    public function getReplicaScheduling()
    {
        return $this->container['replicaScheduling'];
    }

    /**
    * Sets replicaScheduling
    *
    * @param object|null $replicaScheduling 定义如何在成员集群间分配副本
    *
    * @return $this
    */
    public function setReplicaScheduling($replicaScheduling)
    {
        $this->container['replicaScheduling'] = $replicaScheduling;
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

