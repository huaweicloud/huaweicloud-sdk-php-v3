<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddonTemplateSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddonTemplateSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  插件的安装类型，支持helm安装或static安装
    * require  该插件是否为必装
    * labels  插件的标签列表
    * logoUrl  Logo链接
    * readmeUrl  README文档链接
    * description  描述信息
    * versions  插件的版本列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'require' => 'bool',
            'labels' => 'string[]',
            'logoUrl' => 'string',
            'readmeUrl' => 'string',
            'description' => 'string',
            'versions' => '\HuaweiCloud\SDK\Ucs\V1\Model\AddonVersion[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  插件的安装类型，支持helm安装或static安装
    * require  该插件是否为必装
    * labels  插件的标签列表
    * logoUrl  Logo链接
    * readmeUrl  README文档链接
    * description  描述信息
    * versions  插件的版本列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'require' => null,
        'labels' => null,
        'logoUrl' => null,
        'readmeUrl' => null,
        'description' => null,
        'versions' => null
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
    * type  插件的安装类型，支持helm安装或static安装
    * require  该插件是否为必装
    * labels  插件的标签列表
    * logoUrl  Logo链接
    * readmeUrl  README文档链接
    * description  描述信息
    * versions  插件的版本列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'require' => 'require',
            'labels' => 'labels',
            'logoUrl' => 'logoURL',
            'readmeUrl' => 'readmeURL',
            'description' => 'description',
            'versions' => 'versions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  插件的安装类型，支持helm安装或static安装
    * require  该插件是否为必装
    * labels  插件的标签列表
    * logoUrl  Logo链接
    * readmeUrl  README文档链接
    * description  描述信息
    * versions  插件的版本列表
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'require' => 'setRequire',
            'labels' => 'setLabels',
            'logoUrl' => 'setLogoUrl',
            'readmeUrl' => 'setReadmeUrl',
            'description' => 'setDescription',
            'versions' => 'setVersions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  插件的安装类型，支持helm安装或static安装
    * require  该插件是否为必装
    * labels  插件的标签列表
    * logoUrl  Logo链接
    * readmeUrl  README文档链接
    * description  描述信息
    * versions  插件的版本列表
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'require' => 'getRequire',
            'labels' => 'getLabels',
            'logoUrl' => 'getLogoUrl',
            'readmeUrl' => 'getReadmeUrl',
            'description' => 'getDescription',
            'versions' => 'getVersions'
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
        $this->container['require'] = isset($data['require']) ? $data['require'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['logoUrl'] = isset($data['logoUrl']) ? $data['logoUrl'] : null;
        $this->container['readmeUrl'] = isset($data['readmeUrl']) ? $data['readmeUrl'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
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
    *  插件的安装类型，支持helm安装或static安装
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
    * @param string|null $type 插件的安装类型，支持helm安装或static安装
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets require
    *  该插件是否为必装
    *
    * @return bool|null
    */
    public function getRequire()
    {
        return $this->container['require'];
    }

    /**
    * Sets require
    *
    * @param bool|null $require 该插件是否为必装
    *
    * @return $this
    */
    public function setRequire($require)
    {
        $this->container['require'] = $require;
        return $this;
    }

    /**
    * Gets labels
    *  插件的标签列表
    *
    * @return string[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string[]|null $labels 插件的标签列表
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets logoUrl
    *  Logo链接
    *
    * @return string|null
    */
    public function getLogoUrl()
    {
        return $this->container['logoUrl'];
    }

    /**
    * Sets logoUrl
    *
    * @param string|null $logoUrl Logo链接
    *
    * @return $this
    */
    public function setLogoUrl($logoUrl)
    {
        $this->container['logoUrl'] = $logoUrl;
        return $this;
    }

    /**
    * Gets readmeUrl
    *  README文档链接
    *
    * @return string|null
    */
    public function getReadmeUrl()
    {
        return $this->container['readmeUrl'];
    }

    /**
    * Sets readmeUrl
    *
    * @param string|null $readmeUrl README文档链接
    *
    * @return $this
    */
    public function setReadmeUrl($readmeUrl)
    {
        $this->container['readmeUrl'] = $readmeUrl;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets versions
    *  插件的版本列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\AddonVersion[]|null
    */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
    * Sets versions
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\AddonVersion[]|null $versions 插件的版本列表
    *
    * @return $this
    */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;
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

