<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterAffinity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterAffinity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterNames  指定要选择的集群名称列表
    * exclude  指定要排除的集群名称列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterNames' => 'string[]',
            'exclude' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterNames  指定要选择的集群名称列表
    * exclude  指定要排除的集群名称列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterNames' => null,
        'exclude' => null
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
    * clusterNames  指定要选择的集群名称列表
    * exclude  指定要排除的集群名称列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterNames' => 'clusterNames',
            'exclude' => 'exclude'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterNames  指定要选择的集群名称列表
    * exclude  指定要排除的集群名称列表
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterNames' => 'setClusterNames',
            'exclude' => 'setExclude'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterNames  指定要选择的集群名称列表
    * exclude  指定要排除的集群名称列表
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterNames' => 'getClusterNames',
            'exclude' => 'getExclude'
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
        $this->container['clusterNames'] = isset($data['clusterNames']) ? $data['clusterNames'] : null;
        $this->container['exclude'] = isset($data['exclude']) ? $data['exclude'] : null;
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
    * Gets clusterNames
    *  指定要选择的集群名称列表
    *
    * @return string[]|null
    */
    public function getClusterNames()
    {
        return $this->container['clusterNames'];
    }

    /**
    * Sets clusterNames
    *
    * @param string[]|null $clusterNames 指定要选择的集群名称列表
    *
    * @return $this
    */
    public function setClusterNames($clusterNames)
    {
        $this->container['clusterNames'] = $clusterNames;
        return $this;
    }

    /**
    * Gets exclude
    *  指定要排除的集群名称列表
    *
    * @return string[]|null
    */
    public function getExclude()
    {
        return $this->container['exclude'];
    }

    /**
    * Sets exclude
    *
    * @param string[]|null $exclude 指定要排除的集群名称列表
    *
    * @return $this
    */
    public function setExclude($exclude)
    {
        $this->container['exclude'] = $exclude;
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

