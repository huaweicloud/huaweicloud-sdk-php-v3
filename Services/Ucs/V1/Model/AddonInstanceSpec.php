<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddonInstanceSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddonInstanceSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  cluster ID信息
    * version  插件版本信息
    * addonTemplateName  插件模板名称
    * addonTemplateType  插件模板类型
    * addonTemplateLogo  插件模板Logo
    * addonTemplateLabels  插件模板标签
    * description  信息说明
    * values  插件实例的配置参数
    * parameters  parameters
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'version' => 'string',
            'addonTemplateName' => 'string',
            'addonTemplateType' => 'string',
            'addonTemplateLogo' => 'string',
            'addonTemplateLabels' => 'string[]',
            'description' => 'string',
            'values' => 'map[string,object]',
            'parameters' => '\HuaweiCloud\SDK\Ucs\V1\Model\ReleaseParams',
            'namespace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  cluster ID信息
    * version  插件版本信息
    * addonTemplateName  插件模板名称
    * addonTemplateType  插件模板类型
    * addonTemplateLogo  插件模板Logo
    * addonTemplateLabels  插件模板标签
    * description  信息说明
    * values  插件实例的配置参数
    * parameters  parameters
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'version' => null,
        'addonTemplateName' => null,
        'addonTemplateType' => null,
        'addonTemplateLogo' => null,
        'addonTemplateLabels' => null,
        'description' => null,
        'values' => null,
        'parameters' => null,
        'namespace' => null
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
    * clusterId  cluster ID信息
    * version  插件版本信息
    * addonTemplateName  插件模板名称
    * addonTemplateType  插件模板类型
    * addonTemplateLogo  插件模板Logo
    * addonTemplateLabels  插件模板标签
    * description  信息说明
    * values  插件实例的配置参数
    * parameters  parameters
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'clusterID',
            'version' => 'version',
            'addonTemplateName' => 'addonTemplateName',
            'addonTemplateType' => 'addonTemplateType',
            'addonTemplateLogo' => 'addonTemplateLogo',
            'addonTemplateLabels' => 'addonTemplateLabels',
            'description' => 'description',
            'values' => 'values',
            'parameters' => 'parameters',
            'namespace' => 'namespace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  cluster ID信息
    * version  插件版本信息
    * addonTemplateName  插件模板名称
    * addonTemplateType  插件模板类型
    * addonTemplateLogo  插件模板Logo
    * addonTemplateLabels  插件模板标签
    * description  信息说明
    * values  插件实例的配置参数
    * parameters  parameters
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'version' => 'setVersion',
            'addonTemplateName' => 'setAddonTemplateName',
            'addonTemplateType' => 'setAddonTemplateType',
            'addonTemplateLogo' => 'setAddonTemplateLogo',
            'addonTemplateLabels' => 'setAddonTemplateLabels',
            'description' => 'setDescription',
            'values' => 'setValues',
            'parameters' => 'setParameters',
            'namespace' => 'setNamespace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  cluster ID信息
    * version  插件版本信息
    * addonTemplateName  插件模板名称
    * addonTemplateType  插件模板类型
    * addonTemplateLogo  插件模板Logo
    * addonTemplateLabels  插件模板标签
    * description  信息说明
    * values  插件实例的配置参数
    * parameters  parameters
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'version' => 'getVersion',
            'addonTemplateName' => 'getAddonTemplateName',
            'addonTemplateType' => 'getAddonTemplateType',
            'addonTemplateLogo' => 'getAddonTemplateLogo',
            'addonTemplateLabels' => 'getAddonTemplateLabels',
            'description' => 'getDescription',
            'values' => 'getValues',
            'parameters' => 'getParameters',
            'namespace' => 'getNamespace'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['addonTemplateName'] = isset($data['addonTemplateName']) ? $data['addonTemplateName'] : null;
        $this->container['addonTemplateType'] = isset($data['addonTemplateType']) ? $data['addonTemplateType'] : null;
        $this->container['addonTemplateLogo'] = isset($data['addonTemplateLogo']) ? $data['addonTemplateLogo'] : null;
        $this->container['addonTemplateLabels'] = isset($data['addonTemplateLabels']) ? $data['addonTemplateLabels'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
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
    *  cluster ID信息
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
    * @param string|null $clusterId cluster ID信息
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets version
    *  插件版本信息
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
    * @param string|null $version 插件版本信息
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets addonTemplateName
    *  插件模板名称
    *
    * @return string|null
    */
    public function getAddonTemplateName()
    {
        return $this->container['addonTemplateName'];
    }

    /**
    * Sets addonTemplateName
    *
    * @param string|null $addonTemplateName 插件模板名称
    *
    * @return $this
    */
    public function setAddonTemplateName($addonTemplateName)
    {
        $this->container['addonTemplateName'] = $addonTemplateName;
        return $this;
    }

    /**
    * Gets addonTemplateType
    *  插件模板类型
    *
    * @return string|null
    */
    public function getAddonTemplateType()
    {
        return $this->container['addonTemplateType'];
    }

    /**
    * Sets addonTemplateType
    *
    * @param string|null $addonTemplateType 插件模板类型
    *
    * @return $this
    */
    public function setAddonTemplateType($addonTemplateType)
    {
        $this->container['addonTemplateType'] = $addonTemplateType;
        return $this;
    }

    /**
    * Gets addonTemplateLogo
    *  插件模板Logo
    *
    * @return string|null
    */
    public function getAddonTemplateLogo()
    {
        return $this->container['addonTemplateLogo'];
    }

    /**
    * Sets addonTemplateLogo
    *
    * @param string|null $addonTemplateLogo 插件模板Logo
    *
    * @return $this
    */
    public function setAddonTemplateLogo($addonTemplateLogo)
    {
        $this->container['addonTemplateLogo'] = $addonTemplateLogo;
        return $this;
    }

    /**
    * Gets addonTemplateLabels
    *  插件模板标签
    *
    * @return string[]|null
    */
    public function getAddonTemplateLabels()
    {
        return $this->container['addonTemplateLabels'];
    }

    /**
    * Sets addonTemplateLabels
    *
    * @param string[]|null $addonTemplateLabels 插件模板标签
    *
    * @return $this
    */
    public function setAddonTemplateLabels($addonTemplateLabels)
    {
        $this->container['addonTemplateLabels'] = $addonTemplateLabels;
        return $this;
    }

    /**
    * Gets description
    *  信息说明
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
    * @param string|null $description 信息说明
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets values
    *  插件实例的配置参数
    *
    * @return map[string,object]|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param map[string,object]|null $values 插件实例的配置参数
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets parameters
    *  parameters
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ReleaseParams|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ReleaseParams|null $parameters parameters
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
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
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
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

