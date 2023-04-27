<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectableReplicationCapabilitiesRespRegion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectableReplicationCapabilitiesRespRegion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  云服务所在的区域
    * replicationDestinations  支持复制的目标区域列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'replicationDestinations' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  云服务所在的区域
    * replicationDestinations  支持复制的目标区域列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'replicationDestinations' => null
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
    * name  云服务所在的区域
    * replicationDestinations  支持复制的目标区域列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'replicationDestinations' => 'replication_destinations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  云服务所在的区域
    * replicationDestinations  支持复制的目标区域列表
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'replicationDestinations' => 'setReplicationDestinations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  云服务所在的区域
    * replicationDestinations  支持复制的目标区域列表
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'replicationDestinations' => 'getReplicationDestinations'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['replicationDestinations'] = isset($data['replicationDestinations']) ? $data['replicationDestinations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['replicationDestinations'] === null) {
            $invalidProperties[] = "'replicationDestinations' can't be null";
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
    * Gets name
    *  云服务所在的区域
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 云服务所在的区域
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets replicationDestinations
    *  支持复制的目标区域列表
    *
    * @return string[]
    */
    public function getReplicationDestinations()
    {
        return $this->container['replicationDestinations'];
    }

    /**
    * Sets replicationDestinations
    *
    * @param string[] $replicationDestinations 支持复制的目标区域列表
    *
    * @return $this
    */
    public function setReplicationDestinations($replicationDestinations)
    {
        $this->container['replicationDestinations'] = $replicationDestinations;
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

