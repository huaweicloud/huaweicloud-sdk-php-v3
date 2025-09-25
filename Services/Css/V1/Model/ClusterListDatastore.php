<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterListDatastore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterListDatastore';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  引擎类型，目前只支持elasticsearch。
    * version  CSS集群引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    * supportSecuritymode  是否支持安全模式
    * subVersion  集群发布版本号。
    * isEosCluster  表示集群发布版本是否EOS。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'version' => 'string',
            'supportSecuritymode' => 'bool',
            'subVersion' => 'string',
            'isEosCluster' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  引擎类型，目前只支持elasticsearch。
    * version  CSS集群引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    * supportSecuritymode  是否支持安全模式
    * subVersion  集群发布版本号。
    * isEosCluster  表示集群发布版本是否EOS。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'version' => null,
        'supportSecuritymode' => null,
        'subVersion' => null,
        'isEosCluster' => null
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
    * type  引擎类型，目前只支持elasticsearch。
    * version  CSS集群引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    * supportSecuritymode  是否支持安全模式
    * subVersion  集群发布版本号。
    * isEosCluster  表示集群发布版本是否EOS。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'version' => 'version',
            'supportSecuritymode' => 'supportSecuritymode',
            'subVersion' => 'subVersion',
            'isEosCluster' => 'isEosCluster'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  引擎类型，目前只支持elasticsearch。
    * version  CSS集群引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    * supportSecuritymode  是否支持安全模式
    * subVersion  集群发布版本号。
    * isEosCluster  表示集群发布版本是否EOS。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'version' => 'setVersion',
            'supportSecuritymode' => 'setSupportSecuritymode',
            'subVersion' => 'setSubVersion',
            'isEosCluster' => 'setIsEosCluster'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  引擎类型，目前只支持elasticsearch。
    * version  CSS集群引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    * supportSecuritymode  是否支持安全模式
    * subVersion  集群发布版本号。
    * isEosCluster  表示集群发布版本是否EOS。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'version' => 'getVersion',
            'supportSecuritymode' => 'getSupportSecuritymode',
            'subVersion' => 'getSubVersion',
            'isEosCluster' => 'getIsEosCluster'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['supportSecuritymode'] = isset($data['supportSecuritymode']) ? $data['supportSecuritymode'] : null;
        $this->container['subVersion'] = isset($data['subVersion']) ? $data['subVersion'] : null;
        $this->container['isEosCluster'] = isset($data['isEosCluster']) ? $data['isEosCluster'] : null;
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
    * Gets type
    *  引擎类型，目前只支持elasticsearch。
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
    * @param string|null $type 引擎类型，目前只支持elasticsearch。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  CSS集群引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
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
    * @param string|null $version CSS集群引擎版本号。详细请参考CSS[支持的集群版本](css_03_0056.xml)。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets supportSecuritymode
    *  是否支持安全模式
    *
    * @return bool|null
    */
    public function getSupportSecuritymode()
    {
        return $this->container['supportSecuritymode'];
    }

    /**
    * Sets supportSecuritymode
    *
    * @param bool|null $supportSecuritymode 是否支持安全模式
    *
    * @return $this
    */
    public function setSupportSecuritymode($supportSecuritymode)
    {
        $this->container['supportSecuritymode'] = $supportSecuritymode;
        return $this;
    }

    /**
    * Gets subVersion
    *  集群发布版本号。
    *
    * @return string|null
    */
    public function getSubVersion()
    {
        return $this->container['subVersion'];
    }

    /**
    * Sets subVersion
    *
    * @param string|null $subVersion 集群发布版本号。
    *
    * @return $this
    */
    public function setSubVersion($subVersion)
    {
        $this->container['subVersion'] = $subVersion;
        return $this;
    }

    /**
    * Gets isEosCluster
    *  表示集群发布版本是否EOS。
    *
    * @return bool|null
    */
    public function getIsEosCluster()
    {
        return $this->container['isEosCluster'];
    }

    /**
    * Sets isEosCluster
    *
    * @param bool|null $isEosCluster 表示集群发布版本是否EOS。
    *
    * @return $this
    */
    public function setIsEosCluster($isEosCluster)
    {
        $this->container['isEosCluster'] = $isEosCluster;
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

