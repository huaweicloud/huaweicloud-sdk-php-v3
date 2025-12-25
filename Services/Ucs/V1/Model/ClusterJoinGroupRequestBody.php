<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterJoinGroupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterJoinGroupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterGroupId  集群加入目标容器舰队的id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterGroupId  集群加入目标容器舰队的id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterGroupId' => null
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
    * clusterGroupId  集群加入目标容器舰队的id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterGroupId' => 'clusterGroupID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterGroupId  集群加入目标容器舰队的id
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterGroupId' => 'setClusterGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterGroupId  集群加入目标容器舰队的id
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterGroupId' => 'getClusterGroupId'
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
        $this->container['clusterGroupId'] = isset($data['clusterGroupId']) ? $data['clusterGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterGroupId'] === null) {
            $invalidProperties[] = "'clusterGroupId' can't be null";
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
    * Gets clusterGroupId
    *  集群加入目标容器舰队的id
    *
    * @return string
    */
    public function getClusterGroupId()
    {
        return $this->container['clusterGroupId'];
    }

    /**
    * Sets clusterGroupId
    *
    * @param string $clusterGroupId 集群加入目标容器舰队的id
    *
    * @return $this
    */
    public function setClusterGroupId($clusterGroupId)
    {
        $this->container['clusterGroupId'] = $clusterGroupId;
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

