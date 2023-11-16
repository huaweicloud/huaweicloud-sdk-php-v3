<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginBasicDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginBasicDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uniqueId  唯一ID
    * iconUrl  图标URL
    * runtimeAttribution  运行属性
    * pluginName  插件名
    * displayName  展示名
    * businessType  业务类型
    * businessTypeDisplayName  业务类型展示名
    * description  描述
    * isPrivate  是否私有
    * region  局点
    * maintainers  维护者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uniqueId' => 'string',
            'iconUrl' => 'string',
            'runtimeAttribution' => 'string',
            'pluginName' => 'string',
            'displayName' => 'string',
            'businessType' => 'string',
            'businessTypeDisplayName' => 'string',
            'description' => 'string',
            'isPrivate' => 'int',
            'region' => 'string',
            'maintainers' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uniqueId  唯一ID
    * iconUrl  图标URL
    * runtimeAttribution  运行属性
    * pluginName  插件名
    * displayName  展示名
    * businessType  业务类型
    * businessTypeDisplayName  业务类型展示名
    * description  描述
    * isPrivate  是否私有
    * region  局点
    * maintainers  维护者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uniqueId' => null,
        'iconUrl' => null,
        'runtimeAttribution' => null,
        'pluginName' => null,
        'displayName' => null,
        'businessType' => null,
        'businessTypeDisplayName' => null,
        'description' => null,
        'isPrivate' => 'int32',
        'region' => null,
        'maintainers' => null
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
    * uniqueId  唯一ID
    * iconUrl  图标URL
    * runtimeAttribution  运行属性
    * pluginName  插件名
    * displayName  展示名
    * businessType  业务类型
    * businessTypeDisplayName  业务类型展示名
    * description  描述
    * isPrivate  是否私有
    * region  局点
    * maintainers  维护者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uniqueId' => 'unique_id',
            'iconUrl' => 'icon_url',
            'runtimeAttribution' => 'runtime_attribution',
            'pluginName' => 'plugin_name',
            'displayName' => 'display_name',
            'businessType' => 'business_type',
            'businessTypeDisplayName' => 'business_type_display_name',
            'description' => 'description',
            'isPrivate' => 'is_private',
            'region' => 'region',
            'maintainers' => 'maintainers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uniqueId  唯一ID
    * iconUrl  图标URL
    * runtimeAttribution  运行属性
    * pluginName  插件名
    * displayName  展示名
    * businessType  业务类型
    * businessTypeDisplayName  业务类型展示名
    * description  描述
    * isPrivate  是否私有
    * region  局点
    * maintainers  维护者
    *
    * @var string[]
    */
    protected static $setters = [
            'uniqueId' => 'setUniqueId',
            'iconUrl' => 'setIconUrl',
            'runtimeAttribution' => 'setRuntimeAttribution',
            'pluginName' => 'setPluginName',
            'displayName' => 'setDisplayName',
            'businessType' => 'setBusinessType',
            'businessTypeDisplayName' => 'setBusinessTypeDisplayName',
            'description' => 'setDescription',
            'isPrivate' => 'setIsPrivate',
            'region' => 'setRegion',
            'maintainers' => 'setMaintainers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uniqueId  唯一ID
    * iconUrl  图标URL
    * runtimeAttribution  运行属性
    * pluginName  插件名
    * displayName  展示名
    * businessType  业务类型
    * businessTypeDisplayName  业务类型展示名
    * description  描述
    * isPrivate  是否私有
    * region  局点
    * maintainers  维护者
    *
    * @var string[]
    */
    protected static $getters = [
            'uniqueId' => 'getUniqueId',
            'iconUrl' => 'getIconUrl',
            'runtimeAttribution' => 'getRuntimeAttribution',
            'pluginName' => 'getPluginName',
            'displayName' => 'getDisplayName',
            'businessType' => 'getBusinessType',
            'businessTypeDisplayName' => 'getBusinessTypeDisplayName',
            'description' => 'getDescription',
            'isPrivate' => 'getIsPrivate',
            'region' => 'getRegion',
            'maintainers' => 'getMaintainers'
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
        $this->container['uniqueId'] = isset($data['uniqueId']) ? $data['uniqueId'] : null;
        $this->container['iconUrl'] = isset($data['iconUrl']) ? $data['iconUrl'] : null;
        $this->container['runtimeAttribution'] = isset($data['runtimeAttribution']) ? $data['runtimeAttribution'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['businessTypeDisplayName'] = isset($data['businessTypeDisplayName']) ? $data['businessTypeDisplayName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isPrivate'] = isset($data['isPrivate']) ? $data['isPrivate'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['maintainers'] = isset($data['maintainers']) ? $data['maintainers'] : null;
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
    * Gets uniqueId
    *  唯一ID
    *
    * @return string|null
    */
    public function getUniqueId()
    {
        return $this->container['uniqueId'];
    }

    /**
    * Sets uniqueId
    *
    * @param string|null $uniqueId 唯一ID
    *
    * @return $this
    */
    public function setUniqueId($uniqueId)
    {
        $this->container['uniqueId'] = $uniqueId;
        return $this;
    }

    /**
    * Gets iconUrl
    *  图标URL
    *
    * @return string|null
    */
    public function getIconUrl()
    {
        return $this->container['iconUrl'];
    }

    /**
    * Sets iconUrl
    *
    * @param string|null $iconUrl 图标URL
    *
    * @return $this
    */
    public function setIconUrl($iconUrl)
    {
        $this->container['iconUrl'] = $iconUrl;
        return $this;
    }

    /**
    * Gets runtimeAttribution
    *  运行属性
    *
    * @return string|null
    */
    public function getRuntimeAttribution()
    {
        return $this->container['runtimeAttribution'];
    }

    /**
    * Sets runtimeAttribution
    *
    * @param string|null $runtimeAttribution 运行属性
    *
    * @return $this
    */
    public function setRuntimeAttribution($runtimeAttribution)
    {
        $this->container['runtimeAttribution'] = $runtimeAttribution;
        return $this;
    }

    /**
    * Gets pluginName
    *  插件名
    *
    * @return string|null
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string|null $pluginName 插件名
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets displayName
    *  展示名
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 展示名
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets businessType
    *  业务类型
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType 业务类型
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets businessTypeDisplayName
    *  业务类型展示名
    *
    * @return string|null
    */
    public function getBusinessTypeDisplayName()
    {
        return $this->container['businessTypeDisplayName'];
    }

    /**
    * Sets businessTypeDisplayName
    *
    * @param string|null $businessTypeDisplayName 业务类型展示名
    *
    * @return $this
    */
    public function setBusinessTypeDisplayName($businessTypeDisplayName)
    {
        $this->container['businessTypeDisplayName'] = $businessTypeDisplayName;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isPrivate
    *  是否私有
    *
    * @return int|null
    */
    public function getIsPrivate()
    {
        return $this->container['isPrivate'];
    }

    /**
    * Sets isPrivate
    *
    * @param int|null $isPrivate 是否私有
    *
    * @return $this
    */
    public function setIsPrivate($isPrivate)
    {
        $this->container['isPrivate'] = $isPrivate;
        return $this;
    }

    /**
    * Gets region
    *  局点
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 局点
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets maintainers
    *  维护者
    *
    * @return string|null
    */
    public function getMaintainers()
    {
        return $this->container['maintainers'];
    }

    /**
    * Sets maintainers
    *
    * @param string|null $maintainers 维护者
    *
    * @return $this
    */
    public function setMaintainers($maintainers)
    {
        $this->container['maintainers'] = $maintainers;
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

