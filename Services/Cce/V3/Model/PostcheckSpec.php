<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostcheckSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostcheckSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID
    * clusterVersion  集群升级源版本
    * targetVersion  集群升级目标版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterVersion' => 'string',
            'targetVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID
    * clusterVersion  集群升级源版本
    * targetVersion  集群升级目标版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterVersion' => null,
        'targetVersion' => null
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
    * clusterId  集群ID
    * clusterVersion  集群升级源版本
    * targetVersion  集群升级目标版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'clusterID',
            'clusterVersion' => 'clusterVersion',
            'targetVersion' => 'targetVersion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID
    * clusterVersion  集群升级源版本
    * targetVersion  集群升级目标版本
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterVersion' => 'setClusterVersion',
            'targetVersion' => 'setTargetVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID
    * clusterVersion  集群升级源版本
    * targetVersion  集群升级目标版本
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterVersion' => 'getClusterVersion',
            'targetVersion' => 'getTargetVersion'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterVersion'] = isset($data['clusterVersion']) ? $data['clusterVersion'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
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
    * Gets clusterId
    *  集群ID
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
    * @param string|null $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterVersion
    *  集群升级源版本
    *
    * @return string|null
    */
    public function getClusterVersion()
    {
        return $this->container['clusterVersion'];
    }

    /**
    * Sets clusterVersion
    *
    * @param string|null $clusterVersion 集群升级源版本
    *
    * @return $this
    */
    public function setClusterVersion($clusterVersion)
    {
        $this->container['clusterVersion'] = $clusterVersion;
        return $this;
    }

    /**
    * Gets targetVersion
    *  集群升级目标版本
    *
    * @return string|null
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string|null $targetVersion 集群升级目标版本
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
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

