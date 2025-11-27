<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupportVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupportVersion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  支持的集群类型（CCE，thirdParty等）
    * clusterType  支持的集群类型（BareMetal，VirtualMachine，windows等）
    * clusterVersion  支持的集群版本，支持正则表达式，如\".*\"匹配所有集群版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'clusterType' => 'string',
            'clusterVersion' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  支持的集群类型（CCE，thirdParty等）
    * clusterType  支持的集群类型（BareMetal，VirtualMachine，windows等）
    * clusterVersion  支持的集群版本，支持正则表达式，如\".*\"匹配所有集群版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'clusterType' => null,
        'clusterVersion' => null
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
    * category  支持的集群类型（CCE，thirdParty等）
    * clusterType  支持的集群类型（BareMetal，VirtualMachine，windows等）
    * clusterVersion  支持的集群版本，支持正则表达式，如\".*\"匹配所有集群版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'clusterType' => 'clusterType',
            'clusterVersion' => 'clusterVersion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  支持的集群类型（CCE，thirdParty等）
    * clusterType  支持的集群类型（BareMetal，VirtualMachine，windows等）
    * clusterVersion  支持的集群版本，支持正则表达式，如\".*\"匹配所有集群版本
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'clusterType' => 'setClusterType',
            'clusterVersion' => 'setClusterVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  支持的集群类型（CCE，thirdParty等）
    * clusterType  支持的集群类型（BareMetal，VirtualMachine，windows等）
    * clusterVersion  支持的集群版本，支持正则表达式，如\".*\"匹配所有集群版本
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'clusterType' => 'getClusterType',
            'clusterVersion' => 'getClusterVersion'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['clusterVersion'] = isset($data['clusterVersion']) ? $data['clusterVersion'] : null;
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
    * Gets category
    *  支持的集群类型（CCE，thirdParty等）
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 支持的集群类型（CCE，thirdParty等）
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets clusterType
    *  支持的集群类型（BareMetal，VirtualMachine，windows等）
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType 支持的集群类型（BareMetal，VirtualMachine，windows等）
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets clusterVersion
    *  支持的集群版本，支持正则表达式，如\".*\"匹配所有集群版本
    *
    * @return string[]|null
    */
    public function getClusterVersion()
    {
        return $this->container['clusterVersion'];
    }

    /**
    * Sets clusterVersion
    *
    * @param string[]|null $clusterVersion 支持的集群版本，支持正则表达式，如\".*\"匹配所有集群版本
    *
    * @return $this
    */
    public function setClusterVersion($clusterVersion)
    {
        $this->container['clusterVersion'] = $clusterVersion;
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

