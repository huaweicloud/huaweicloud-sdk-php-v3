<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateConfigSetRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateConfigSetRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  配置集合的名称
    * namespace  所在命名空间
    * helmReleaseSpec  基于Helm Chart的部署配置（当前不支持HelmRelease类型）
    * kustomizationSpec  kustomizationSpec
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'namespace' => 'string',
            'helmReleaseSpec' => 'object',
            'kustomizationSpec' => '\HuaweiCloud\SDK\Ucs\V1\Model\KustomizationSpec'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  配置集合的名称
    * namespace  所在命名空间
    * helmReleaseSpec  基于Helm Chart的部署配置（当前不支持HelmRelease类型）
    * kustomizationSpec  kustomizationSpec
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'namespace' => null,
        'helmReleaseSpec' => null,
        'kustomizationSpec' => null
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
    * name  配置集合的名称
    * namespace  所在命名空间
    * helmReleaseSpec  基于Helm Chart的部署配置（当前不支持HelmRelease类型）
    * kustomizationSpec  kustomizationSpec
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'namespace' => 'namespace',
            'helmReleaseSpec' => 'helmReleaseSpec',
            'kustomizationSpec' => 'kustomizationSpec'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  配置集合的名称
    * namespace  所在命名空间
    * helmReleaseSpec  基于Helm Chart的部署配置（当前不支持HelmRelease类型）
    * kustomizationSpec  kustomizationSpec
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'helmReleaseSpec' => 'setHelmReleaseSpec',
            'kustomizationSpec' => 'setKustomizationSpec'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  配置集合的名称
    * namespace  所在命名空间
    * helmReleaseSpec  基于Helm Chart的部署配置（当前不支持HelmRelease类型）
    * kustomizationSpec  kustomizationSpec
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'helmReleaseSpec' => 'getHelmReleaseSpec',
            'kustomizationSpec' => 'getKustomizationSpec'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['helmReleaseSpec'] = isset($data['helmReleaseSpec']) ? $data['helmReleaseSpec'] : null;
        $this->container['kustomizationSpec'] = isset($data['kustomizationSpec']) ? $data['kustomizationSpec'] : null;
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
    * Gets name
    *  配置集合的名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 配置集合的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  所在命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 所在命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets helmReleaseSpec
    *  基于Helm Chart的部署配置（当前不支持HelmRelease类型）
    *
    * @return object|null
    */
    public function getHelmReleaseSpec()
    {
        return $this->container['helmReleaseSpec'];
    }

    /**
    * Sets helmReleaseSpec
    *
    * @param object|null $helmReleaseSpec 基于Helm Chart的部署配置（当前不支持HelmRelease类型）
    *
    * @return $this
    */
    public function setHelmReleaseSpec($helmReleaseSpec)
    {
        $this->container['helmReleaseSpec'] = $helmReleaseSpec;
        return $this;
    }

    /**
    * Gets kustomizationSpec
    *  kustomizationSpec
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\KustomizationSpec|null
    */
    public function getKustomizationSpec()
    {
        return $this->container['kustomizationSpec'];
    }

    /**
    * Sets kustomizationSpec
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\KustomizationSpec|null $kustomizationSpec kustomizationSpec
    *
    * @return $this
    */
    public function setKustomizationSpec($kustomizationSpec)
    {
        $this->container['kustomizationSpec'] = $kustomizationSpec;
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

