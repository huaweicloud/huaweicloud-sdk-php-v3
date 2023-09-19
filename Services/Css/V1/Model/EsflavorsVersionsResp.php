<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EsflavorsVersionsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EsflavorsVersionsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  Esasticsearch引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    * flavors  规格列表。
    * type  实例类型，包括为ess、ess-cold、ess-master和ess-client。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'flavors' => '\HuaweiCloud\SDK\Css\V1\Model\EsflavorsVersionsFlavorsResp[]',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  Esasticsearch引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    * flavors  规格列表。
    * type  实例类型，包括为ess、ess-cold、ess-master和ess-client。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'flavors' => null,
        'type' => null
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
    * version  Esasticsearch引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    * flavors  规格列表。
    * type  实例类型，包括为ess、ess-cold、ess-master和ess-client。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'flavors' => 'flavors',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  Esasticsearch引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    * flavors  规格列表。
    * type  实例类型，包括为ess、ess-cold、ess-master和ess-client。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'flavors' => 'setFlavors',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  Esasticsearch引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    * flavors  规格列表。
    * type  实例类型，包括为ess、ess-cold、ess-master和ess-client。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'flavors' => 'getFlavors',
            'type' => 'getType'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['flavors'] = isset($data['flavors']) ? $data['flavors'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets version
    *  Esasticsearch引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version Esasticsearch引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets flavors
    *  规格列表。
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\EsflavorsVersionsFlavorsResp[]|null
    */
    public function getFlavors()
    {
        return $this->container['flavors'];
    }

    /**
    * Sets flavors
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\EsflavorsVersionsFlavorsResp[]|null $flavors 规格列表。
    *
    * @return $this
    */
    public function setFlavors($flavors)
    {
        $this->container['flavors'] = $flavors;
        return $this;
    }

    /**
    * Gets type
    *  实例类型，包括为ess、ess-cold、ess-master和ess-client。
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
    * @param string|null $type 实例类型，包括为ess、ess-cold、ess-master和ess-client。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

