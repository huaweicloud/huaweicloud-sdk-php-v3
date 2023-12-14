<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLogicalClusterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLogicalClusterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logicalClusterName  逻辑集群名称
    * clusterRings  逻辑集群环信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logicalClusterName' => 'string',
            'clusterRings' => '\HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logicalClusterName  逻辑集群名称
    * clusterRings  逻辑集群环信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logicalClusterName' => null,
        'clusterRings' => null
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
    * logicalClusterName  逻辑集群名称
    * clusterRings  逻辑集群环信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logicalClusterName' => 'logical_cluster_name',
            'clusterRings' => 'cluster_rings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logicalClusterName  逻辑集群名称
    * clusterRings  逻辑集群环信息
    *
    * @var string[]
    */
    protected static $setters = [
            'logicalClusterName' => 'setLogicalClusterName',
            'clusterRings' => 'setClusterRings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logicalClusterName  逻辑集群名称
    * clusterRings  逻辑集群环信息
    *
    * @var string[]
    */
    protected static $getters = [
            'logicalClusterName' => 'getLogicalClusterName',
            'clusterRings' => 'getClusterRings'
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
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['clusterRings'] = isset($data['clusterRings']) ? $data['clusterRings'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logicalClusterName'] === null) {
            $invalidProperties[] = "'logicalClusterName' can't be null";
        }
        if ($this->container['clusterRings'] === null) {
            $invalidProperties[] = "'clusterRings' can't be null";
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
    * Gets logicalClusterName
    *  逻辑集群名称
    *
    * @return string
    */
    public function getLogicalClusterName()
    {
        return $this->container['logicalClusterName'];
    }

    /**
    * Sets logicalClusterName
    *
    * @param string $logicalClusterName 逻辑集群名称
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets clusterRings
    *  逻辑集群环信息
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[]
    */
    public function getClusterRings()
    {
        return $this->container['clusterRings'];
    }

    /**
    * Sets clusterRings
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[] $clusterRings 逻辑集群环信息
    *
    * @return $this
    */
    public function setClusterRings($clusterRings)
    {
        $this->container['clusterRings'] = $clusterRings;
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

