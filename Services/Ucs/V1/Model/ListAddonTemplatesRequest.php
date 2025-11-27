<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAddonTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAddonTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  插件包版本号
    * newest  是否获取集群内创建的最新状态
    * clusterId  集群id
    * addonTemplateName  插件模板名称
    * baseUpdateAddonVersion  插件的最低版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'newest' => 'string',
            'clusterId' => 'string',
            'addonTemplateName' => 'string',
            'baseUpdateAddonVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  插件包版本号
    * newest  是否获取集群内创建的最新状态
    * clusterId  集群id
    * addonTemplateName  插件模板名称
    * baseUpdateAddonVersion  插件的最低版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'newest' => null,
        'clusterId' => null,
        'addonTemplateName' => null,
        'baseUpdateAddonVersion' => null
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
    * version  插件包版本号
    * newest  是否获取集群内创建的最新状态
    * clusterId  集群id
    * addonTemplateName  插件模板名称
    * baseUpdateAddonVersion  插件的最低版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'newest' => 'newest',
            'clusterId' => 'cluster_id',
            'addonTemplateName' => 'addon_template_name',
            'baseUpdateAddonVersion' => 'base_update_addon_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  插件包版本号
    * newest  是否获取集群内创建的最新状态
    * clusterId  集群id
    * addonTemplateName  插件模板名称
    * baseUpdateAddonVersion  插件的最低版本
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'newest' => 'setNewest',
            'clusterId' => 'setClusterId',
            'addonTemplateName' => 'setAddonTemplateName',
            'baseUpdateAddonVersion' => 'setBaseUpdateAddonVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  插件包版本号
    * newest  是否获取集群内创建的最新状态
    * clusterId  集群id
    * addonTemplateName  插件模板名称
    * baseUpdateAddonVersion  插件的最低版本
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'newest' => 'getNewest',
            'clusterId' => 'getClusterId',
            'addonTemplateName' => 'getAddonTemplateName',
            'baseUpdateAddonVersion' => 'getBaseUpdateAddonVersion'
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
        $this->container['newest'] = isset($data['newest']) ? $data['newest'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['addonTemplateName'] = isset($data['addonTemplateName']) ? $data['addonTemplateName'] : null;
        $this->container['baseUpdateAddonVersion'] = isset($data['baseUpdateAddonVersion']) ? $data['baseUpdateAddonVersion'] : null;
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
    *  插件包版本号
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
    * @param string|null $version 插件包版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets newest
    *  是否获取集群内创建的最新状态
    *
    * @return string|null
    */
    public function getNewest()
    {
        return $this->container['newest'];
    }

    /**
    * Sets newest
    *
    * @param string|null $newest 是否获取集群内创建的最新状态
    *
    * @return $this
    */
    public function setNewest($newest)
    {
        $this->container['newest'] = $newest;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id
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
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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
    * Gets baseUpdateAddonVersion
    *  插件的最低版本
    *
    * @return string|null
    */
    public function getBaseUpdateAddonVersion()
    {
        return $this->container['baseUpdateAddonVersion'];
    }

    /**
    * Sets baseUpdateAddonVersion
    *
    * @param string|null $baseUpdateAddonVersion 插件的最低版本
    *
    * @return $this
    */
    public function setBaseUpdateAddonVersion($baseUpdateAddonVersion)
    {
        $this->container['baseUpdateAddonVersion'] = $baseUpdateAddonVersion;
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

