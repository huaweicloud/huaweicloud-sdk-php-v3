<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionSetRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionSetRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  是否开启
    * ecosystem  依赖类型
    * packageName  包名称
    * packageVersion  包版本
    * description  规则说明
    * predicate  比较规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'ecosystem' => 'string',
            'packageName' => 'string',
            'packageVersion' => 'string',
            'description' => 'string',
            'predicate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  是否开启
    * ecosystem  依赖类型
    * packageName  包名称
    * packageVersion  包版本
    * description  规则说明
    * predicate  比较规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'ecosystem' => null,
        'packageName' => null,
        'packageVersion' => null,
        'description' => null,
        'predicate' => null
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
    * enable  是否开启
    * ecosystem  依赖类型
    * packageName  包名称
    * packageVersion  包版本
    * description  规则说明
    * predicate  比较规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'ecosystem' => 'ecosystem',
            'packageName' => 'package_name',
            'packageVersion' => 'package_version',
            'description' => 'description',
            'predicate' => 'predicate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  是否开启
    * ecosystem  依赖类型
    * packageName  包名称
    * packageVersion  包版本
    * description  规则说明
    * predicate  比较规则
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'ecosystem' => 'setEcosystem',
            'packageName' => 'setPackageName',
            'packageVersion' => 'setPackageVersion',
            'description' => 'setDescription',
            'predicate' => 'setPredicate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  是否开启
    * ecosystem  依赖类型
    * packageName  包名称
    * packageVersion  包版本
    * description  规则说明
    * predicate  比较规则
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'ecosystem' => 'getEcosystem',
            'packageName' => 'getPackageName',
            'packageVersion' => 'getPackageVersion',
            'description' => 'getDescription',
            'predicate' => 'getPredicate'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['ecosystem'] = isset($data['ecosystem']) ? $data['ecosystem'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['packageVersion'] = isset($data['packageVersion']) ? $data['packageVersion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['predicate'] = isset($data['predicate']) ? $data['predicate'] : null;
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
    * Gets enable
    *  是否开启
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 是否开启
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets ecosystem
    *  依赖类型
    *
    * @return string|null
    */
    public function getEcosystem()
    {
        return $this->container['ecosystem'];
    }

    /**
    * Sets ecosystem
    *
    * @param string|null $ecosystem 依赖类型
    *
    * @return $this
    */
    public function setEcosystem($ecosystem)
    {
        $this->container['ecosystem'] = $ecosystem;
        return $this;
    }

    /**
    * Gets packageName
    *  包名称
    *
    * @return string|null
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string|null $packageName 包名称
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
        return $this;
    }

    /**
    * Gets packageVersion
    *  包版本
    *
    * @return string|null
    */
    public function getPackageVersion()
    {
        return $this->container['packageVersion'];
    }

    /**
    * Sets packageVersion
    *
    * @param string|null $packageVersion 包版本
    *
    * @return $this
    */
    public function setPackageVersion($packageVersion)
    {
        $this->container['packageVersion'] = $packageVersion;
        return $this;
    }

    /**
    * Gets description
    *  规则说明
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 规则说明
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets predicate
    *  比较规则
    *
    * @return string|null
    */
    public function getPredicate()
    {
        return $this->container['predicate'];
    }

    /**
    * Sets predicate
    *
    * @param string|null $predicate 比较规则
    *
    * @return $this
    */
    public function setPredicate($predicate)
    {
        $this->container['predicate'] = $predicate;
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

