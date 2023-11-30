<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginBasicVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginBasicVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginName  插件名
    * displayName  展示名
    * version  版本
    * versionDescription  版本说明
    * description  描述
    * versionAttribution  版本属性
    * uniqueId  唯一ID
    * opUser  操作人
    * opTime  操作时间
    * pluginCompositionType  组合类型
    * pluginAttribution  属性
    * workspaceId  租户ID
    * businessType  业务类型
    * businessTypeDisplayName  业务类型展示名
    * maintainers  维护者
    * iconUrl  图标URL
    * referCount  引用次数
    * usageCount  使用次数
    * runtimeAttribution  运行属性
    * active  是否激活
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginName' => 'string',
            'displayName' => 'string',
            'version' => 'string',
            'versionDescription' => 'string',
            'description' => 'string',
            'versionAttribution' => 'string',
            'uniqueId' => 'string',
            'opUser' => 'string',
            'opTime' => 'string',
            'pluginCompositionType' => 'string',
            'pluginAttribution' => 'string',
            'workspaceId' => 'string',
            'businessType' => 'string',
            'businessTypeDisplayName' => 'string',
            'maintainers' => 'string',
            'iconUrl' => 'string',
            'referCount' => 'int',
            'usageCount' => 'int',
            'runtimeAttribution' => 'string',
            'active' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginName  插件名
    * displayName  展示名
    * version  版本
    * versionDescription  版本说明
    * description  描述
    * versionAttribution  版本属性
    * uniqueId  唯一ID
    * opUser  操作人
    * opTime  操作时间
    * pluginCompositionType  组合类型
    * pluginAttribution  属性
    * workspaceId  租户ID
    * businessType  业务类型
    * businessTypeDisplayName  业务类型展示名
    * maintainers  维护者
    * iconUrl  图标URL
    * referCount  引用次数
    * usageCount  使用次数
    * runtimeAttribution  运行属性
    * active  是否激活
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginName' => null,
        'displayName' => null,
        'version' => null,
        'versionDescription' => null,
        'description' => null,
        'versionAttribution' => null,
        'uniqueId' => null,
        'opUser' => null,
        'opTime' => null,
        'pluginCompositionType' => null,
        'pluginAttribution' => null,
        'workspaceId' => null,
        'businessType' => null,
        'businessTypeDisplayName' => null,
        'maintainers' => null,
        'iconUrl' => null,
        'referCount' => 'int32',
        'usageCount' => 'int32',
        'runtimeAttribution' => null,
        'active' => 'int32'
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
    * pluginName  插件名
    * displayName  展示名
    * version  版本
    * versionDescription  版本说明
    * description  描述
    * versionAttribution  版本属性
    * uniqueId  唯一ID
    * opUser  操作人
    * opTime  操作时间
    * pluginCompositionType  组合类型
    * pluginAttribution  属性
    * workspaceId  租户ID
    * businessType  业务类型
    * businessTypeDisplayName  业务类型展示名
    * maintainers  维护者
    * iconUrl  图标URL
    * referCount  引用次数
    * usageCount  使用次数
    * runtimeAttribution  运行属性
    * active  是否激活
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginName' => 'plugin_name',
            'displayName' => 'display_name',
            'version' => 'version',
            'versionDescription' => 'version_description',
            'description' => 'description',
            'versionAttribution' => 'version_attribution',
            'uniqueId' => 'unique_id',
            'opUser' => 'op_user',
            'opTime' => 'op_time',
            'pluginCompositionType' => 'plugin_composition_type',
            'pluginAttribution' => 'plugin_attribution',
            'workspaceId' => 'workspace_id',
            'businessType' => 'business_type',
            'businessTypeDisplayName' => 'business_type_display_name',
            'maintainers' => 'maintainers',
            'iconUrl' => 'icon_url',
            'referCount' => 'refer_count',
            'usageCount' => 'usage_count',
            'runtimeAttribution' => 'runtime_attribution',
            'active' => 'active'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginName  插件名
    * displayName  展示名
    * version  版本
    * versionDescription  版本说明
    * description  描述
    * versionAttribution  版本属性
    * uniqueId  唯一ID
    * opUser  操作人
    * opTime  操作时间
    * pluginCompositionType  组合类型
    * pluginAttribution  属性
    * workspaceId  租户ID
    * businessType  业务类型
    * businessTypeDisplayName  业务类型展示名
    * maintainers  维护者
    * iconUrl  图标URL
    * referCount  引用次数
    * usageCount  使用次数
    * runtimeAttribution  运行属性
    * active  是否激活
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginName' => 'setPluginName',
            'displayName' => 'setDisplayName',
            'version' => 'setVersion',
            'versionDescription' => 'setVersionDescription',
            'description' => 'setDescription',
            'versionAttribution' => 'setVersionAttribution',
            'uniqueId' => 'setUniqueId',
            'opUser' => 'setOpUser',
            'opTime' => 'setOpTime',
            'pluginCompositionType' => 'setPluginCompositionType',
            'pluginAttribution' => 'setPluginAttribution',
            'workspaceId' => 'setWorkspaceId',
            'businessType' => 'setBusinessType',
            'businessTypeDisplayName' => 'setBusinessTypeDisplayName',
            'maintainers' => 'setMaintainers',
            'iconUrl' => 'setIconUrl',
            'referCount' => 'setReferCount',
            'usageCount' => 'setUsageCount',
            'runtimeAttribution' => 'setRuntimeAttribution',
            'active' => 'setActive'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginName  插件名
    * displayName  展示名
    * version  版本
    * versionDescription  版本说明
    * description  描述
    * versionAttribution  版本属性
    * uniqueId  唯一ID
    * opUser  操作人
    * opTime  操作时间
    * pluginCompositionType  组合类型
    * pluginAttribution  属性
    * workspaceId  租户ID
    * businessType  业务类型
    * businessTypeDisplayName  业务类型展示名
    * maintainers  维护者
    * iconUrl  图标URL
    * referCount  引用次数
    * usageCount  使用次数
    * runtimeAttribution  运行属性
    * active  是否激活
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginName' => 'getPluginName',
            'displayName' => 'getDisplayName',
            'version' => 'getVersion',
            'versionDescription' => 'getVersionDescription',
            'description' => 'getDescription',
            'versionAttribution' => 'getVersionAttribution',
            'uniqueId' => 'getUniqueId',
            'opUser' => 'getOpUser',
            'opTime' => 'getOpTime',
            'pluginCompositionType' => 'getPluginCompositionType',
            'pluginAttribution' => 'getPluginAttribution',
            'workspaceId' => 'getWorkspaceId',
            'businessType' => 'getBusinessType',
            'businessTypeDisplayName' => 'getBusinessTypeDisplayName',
            'maintainers' => 'getMaintainers',
            'iconUrl' => 'getIconUrl',
            'referCount' => 'getReferCount',
            'usageCount' => 'getUsageCount',
            'runtimeAttribution' => 'getRuntimeAttribution',
            'active' => 'getActive'
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
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['versionAttribution'] = isset($data['versionAttribution']) ? $data['versionAttribution'] : null;
        $this->container['uniqueId'] = isset($data['uniqueId']) ? $data['uniqueId'] : null;
        $this->container['opUser'] = isset($data['opUser']) ? $data['opUser'] : null;
        $this->container['opTime'] = isset($data['opTime']) ? $data['opTime'] : null;
        $this->container['pluginCompositionType'] = isset($data['pluginCompositionType']) ? $data['pluginCompositionType'] : null;
        $this->container['pluginAttribution'] = isset($data['pluginAttribution']) ? $data['pluginAttribution'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['businessTypeDisplayName'] = isset($data['businessTypeDisplayName']) ? $data['businessTypeDisplayName'] : null;
        $this->container['maintainers'] = isset($data['maintainers']) ? $data['maintainers'] : null;
        $this->container['iconUrl'] = isset($data['iconUrl']) ? $data['iconUrl'] : null;
        $this->container['referCount'] = isset($data['referCount']) ? $data['referCount'] : null;
        $this->container['usageCount'] = isset($data['usageCount']) ? $data['usageCount'] : null;
        $this->container['runtimeAttribution'] = isset($data['runtimeAttribution']) ? $data['runtimeAttribution'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
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
    * Gets version
    *  版本
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
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets versionDescription
    *  版本说明
    *
    * @return string|null
    */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
    * Sets versionDescription
    *
    * @param string|null $versionDescription 版本说明
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
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
    * Gets versionAttribution
    *  版本属性
    *
    * @return string|null
    */
    public function getVersionAttribution()
    {
        return $this->container['versionAttribution'];
    }

    /**
    * Sets versionAttribution
    *
    * @param string|null $versionAttribution 版本属性
    *
    * @return $this
    */
    public function setVersionAttribution($versionAttribution)
    {
        $this->container['versionAttribution'] = $versionAttribution;
        return $this;
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
    * Gets opUser
    *  操作人
    *
    * @return string|null
    */
    public function getOpUser()
    {
        return $this->container['opUser'];
    }

    /**
    * Sets opUser
    *
    * @param string|null $opUser 操作人
    *
    * @return $this
    */
    public function setOpUser($opUser)
    {
        $this->container['opUser'] = $opUser;
        return $this;
    }

    /**
    * Gets opTime
    *  操作时间
    *
    * @return string|null
    */
    public function getOpTime()
    {
        return $this->container['opTime'];
    }

    /**
    * Sets opTime
    *
    * @param string|null $opTime 操作时间
    *
    * @return $this
    */
    public function setOpTime($opTime)
    {
        $this->container['opTime'] = $opTime;
        return $this;
    }

    /**
    * Gets pluginCompositionType
    *  组合类型
    *
    * @return string|null
    */
    public function getPluginCompositionType()
    {
        return $this->container['pluginCompositionType'];
    }

    /**
    * Sets pluginCompositionType
    *
    * @param string|null $pluginCompositionType 组合类型
    *
    * @return $this
    */
    public function setPluginCompositionType($pluginCompositionType)
    {
        $this->container['pluginCompositionType'] = $pluginCompositionType;
        return $this;
    }

    /**
    * Gets pluginAttribution
    *  属性
    *
    * @return string|null
    */
    public function getPluginAttribution()
    {
        return $this->container['pluginAttribution'];
    }

    /**
    * Sets pluginAttribution
    *
    * @param string|null $pluginAttribution 属性
    *
    * @return $this
    */
    public function setPluginAttribution($pluginAttribution)
    {
        $this->container['pluginAttribution'] = $pluginAttribution;
        return $this;
    }

    /**
    * Gets workspaceId
    *  租户ID
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 租户ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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
    * Gets referCount
    *  引用次数
    *
    * @return int|null
    */
    public function getReferCount()
    {
        return $this->container['referCount'];
    }

    /**
    * Sets referCount
    *
    * @param int|null $referCount 引用次数
    *
    * @return $this
    */
    public function setReferCount($referCount)
    {
        $this->container['referCount'] = $referCount;
        return $this;
    }

    /**
    * Gets usageCount
    *  使用次数
    *
    * @return int|null
    */
    public function getUsageCount()
    {
        return $this->container['usageCount'];
    }

    /**
    * Sets usageCount
    *
    * @param int|null $usageCount 使用次数
    *
    * @return $this
    */
    public function setUsageCount($usageCount)
    {
        $this->container['usageCount'] = $usageCount;
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
    * Gets active
    *  是否激活
    *
    * @return int|null
    */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
    * Sets active
    *
    * @param int|null $active 是否激活
    *
    * @return $this
    */
    public function setActive($active)
    {
        $this->container['active'] = $active;
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

