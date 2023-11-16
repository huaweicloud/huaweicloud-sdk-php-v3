<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPluginVersionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPluginVersionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginName  插件名
    * displayName  展示名
    * opUser  操作人
    * opTime  操作时间
    * version  版本
    * uniqueId  唯一ID
    * versionDescription  版本说明
    * versionAttribution  版本属性
    * pluginCompositionType  组合插件类型
    * pluginAttribution  插件属性
    * inputInfo  输入信息
    * pluginExecution  执行信息
    * runtimeAttribution  运行属性
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginName' => 'string',
            'displayName' => 'string',
            'opUser' => 'string',
            'opTime' => 'string',
            'version' => 'string',
            'uniqueId' => 'string',
            'versionDescription' => 'string',
            'versionAttribution' => 'string',
            'pluginCompositionType' => 'string',
            'pluginAttribution' => 'string',
            'inputInfo' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginPartQueryVOListAgentPluginInputVOData[]',
            'pluginExecution' => 'object',
            'runtimeAttribution' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginName  插件名
    * displayName  展示名
    * opUser  操作人
    * opTime  操作时间
    * version  版本
    * uniqueId  唯一ID
    * versionDescription  版本说明
    * versionAttribution  版本属性
    * pluginCompositionType  组合插件类型
    * pluginAttribution  插件属性
    * inputInfo  输入信息
    * pluginExecution  执行信息
    * runtimeAttribution  运行属性
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginName' => null,
        'displayName' => null,
        'opUser' => null,
        'opTime' => null,
        'version' => null,
        'uniqueId' => null,
        'versionDescription' => null,
        'versionAttribution' => null,
        'pluginCompositionType' => null,
        'pluginAttribution' => null,
        'inputInfo' => null,
        'pluginExecution' => null,
        'runtimeAttribution' => null
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
    * opUser  操作人
    * opTime  操作时间
    * version  版本
    * uniqueId  唯一ID
    * versionDescription  版本说明
    * versionAttribution  版本属性
    * pluginCompositionType  组合插件类型
    * pluginAttribution  插件属性
    * inputInfo  输入信息
    * pluginExecution  执行信息
    * runtimeAttribution  运行属性
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginName' => 'plugin_name',
            'displayName' => 'display_name',
            'opUser' => 'op_user',
            'opTime' => 'op_time',
            'version' => 'version',
            'uniqueId' => 'unique_id',
            'versionDescription' => 'version_description',
            'versionAttribution' => 'version_attribution',
            'pluginCompositionType' => 'plugin_composition_type',
            'pluginAttribution' => 'plugin_attribution',
            'inputInfo' => 'input_info',
            'pluginExecution' => 'plugin_execution',
            'runtimeAttribution' => 'runtime_attribution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginName  插件名
    * displayName  展示名
    * opUser  操作人
    * opTime  操作时间
    * version  版本
    * uniqueId  唯一ID
    * versionDescription  版本说明
    * versionAttribution  版本属性
    * pluginCompositionType  组合插件类型
    * pluginAttribution  插件属性
    * inputInfo  输入信息
    * pluginExecution  执行信息
    * runtimeAttribution  运行属性
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginName' => 'setPluginName',
            'displayName' => 'setDisplayName',
            'opUser' => 'setOpUser',
            'opTime' => 'setOpTime',
            'version' => 'setVersion',
            'uniqueId' => 'setUniqueId',
            'versionDescription' => 'setVersionDescription',
            'versionAttribution' => 'setVersionAttribution',
            'pluginCompositionType' => 'setPluginCompositionType',
            'pluginAttribution' => 'setPluginAttribution',
            'inputInfo' => 'setInputInfo',
            'pluginExecution' => 'setPluginExecution',
            'runtimeAttribution' => 'setRuntimeAttribution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginName  插件名
    * displayName  展示名
    * opUser  操作人
    * opTime  操作时间
    * version  版本
    * uniqueId  唯一ID
    * versionDescription  版本说明
    * versionAttribution  版本属性
    * pluginCompositionType  组合插件类型
    * pluginAttribution  插件属性
    * inputInfo  输入信息
    * pluginExecution  执行信息
    * runtimeAttribution  运行属性
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginName' => 'getPluginName',
            'displayName' => 'getDisplayName',
            'opUser' => 'getOpUser',
            'opTime' => 'getOpTime',
            'version' => 'getVersion',
            'uniqueId' => 'getUniqueId',
            'versionDescription' => 'getVersionDescription',
            'versionAttribution' => 'getVersionAttribution',
            'pluginCompositionType' => 'getPluginCompositionType',
            'pluginAttribution' => 'getPluginAttribution',
            'inputInfo' => 'getInputInfo',
            'pluginExecution' => 'getPluginExecution',
            'runtimeAttribution' => 'getRuntimeAttribution'
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
        $this->container['opUser'] = isset($data['opUser']) ? $data['opUser'] : null;
        $this->container['opTime'] = isset($data['opTime']) ? $data['opTime'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['uniqueId'] = isset($data['uniqueId']) ? $data['uniqueId'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
        $this->container['versionAttribution'] = isset($data['versionAttribution']) ? $data['versionAttribution'] : null;
        $this->container['pluginCompositionType'] = isset($data['pluginCompositionType']) ? $data['pluginCompositionType'] : null;
        $this->container['pluginAttribution'] = isset($data['pluginAttribution']) ? $data['pluginAttribution'] : null;
        $this->container['inputInfo'] = isset($data['inputInfo']) ? $data['inputInfo'] : null;
        $this->container['pluginExecution'] = isset($data['pluginExecution']) ? $data['pluginExecution'] : null;
        $this->container['runtimeAttribution'] = isset($data['runtimeAttribution']) ? $data['runtimeAttribution'] : null;
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
    * Gets pluginCompositionType
    *  组合插件类型
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
    * @param string|null $pluginCompositionType 组合插件类型
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
    *  插件属性
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
    * @param string|null $pluginAttribution 插件属性
    *
    * @return $this
    */
    public function setPluginAttribution($pluginAttribution)
    {
        $this->container['pluginAttribution'] = $pluginAttribution;
        return $this;
    }

    /**
    * Gets inputInfo
    *  输入信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginPartQueryVOListAgentPluginInputVOData[]|null
    */
    public function getInputInfo()
    {
        return $this->container['inputInfo'];
    }

    /**
    * Sets inputInfo
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginPartQueryVOListAgentPluginInputVOData[]|null $inputInfo 输入信息
    *
    * @return $this
    */
    public function setInputInfo($inputInfo)
    {
        $this->container['inputInfo'] = $inputInfo;
        return $this;
    }

    /**
    * Gets pluginExecution
    *  执行信息
    *
    * @return object|null
    */
    public function getPluginExecution()
    {
        return $this->container['pluginExecution'];
    }

    /**
    * Sets pluginExecution
    *
    * @param object|null $pluginExecution 执行信息
    *
    * @return $this
    */
    public function setPluginExecution($pluginExecution)
    {
        $this->container['pluginExecution'] = $pluginExecution;
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

