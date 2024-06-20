<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentPluginInfoQueryDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentPluginInfoQueryDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginName  可选的查询条件-插件名
    * regexName  可选的查询条件-匹配名称
    * maintainer  维护者
    * businessType  业务类型,[Build,Gate,Deploy,Test,Normal]
    * pluginAttribution  插件属性，official/custom
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginName' => 'string',
            'regexName' => 'string',
            'maintainer' => 'string',
            'businessType' => 'string[]',
            'pluginAttribution' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginName  可选的查询条件-插件名
    * regexName  可选的查询条件-匹配名称
    * maintainer  维护者
    * businessType  业务类型,[Build,Gate,Deploy,Test,Normal]
    * pluginAttribution  插件属性，official/custom
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginName' => null,
        'regexName' => null,
        'maintainer' => null,
        'businessType' => null,
        'pluginAttribution' => null
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
    * pluginName  可选的查询条件-插件名
    * regexName  可选的查询条件-匹配名称
    * maintainer  维护者
    * businessType  业务类型,[Build,Gate,Deploy,Test,Normal]
    * pluginAttribution  插件属性，official/custom
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginName' => 'plugin_name',
            'regexName' => 'regex_name',
            'maintainer' => 'maintainer',
            'businessType' => 'business_type',
            'pluginAttribution' => 'plugin_attribution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginName  可选的查询条件-插件名
    * regexName  可选的查询条件-匹配名称
    * maintainer  维护者
    * businessType  业务类型,[Build,Gate,Deploy,Test,Normal]
    * pluginAttribution  插件属性，official/custom
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginName' => 'setPluginName',
            'regexName' => 'setRegexName',
            'maintainer' => 'setMaintainer',
            'businessType' => 'setBusinessType',
            'pluginAttribution' => 'setPluginAttribution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginName  可选的查询条件-插件名
    * regexName  可选的查询条件-匹配名称
    * maintainer  维护者
    * businessType  业务类型,[Build,Gate,Deploy,Test,Normal]
    * pluginAttribution  插件属性，official/custom
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginName' => 'getPluginName',
            'regexName' => 'getRegexName',
            'maintainer' => 'getMaintainer',
            'businessType' => 'getBusinessType',
            'pluginAttribution' => 'getPluginAttribution'
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
        $this->container['regexName'] = isset($data['regexName']) ? $data['regexName'] : null;
        $this->container['maintainer'] = isset($data['maintainer']) ? $data['maintainer'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['pluginAttribution'] = isset($data['pluginAttribution']) ? $data['pluginAttribution'] : null;
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
    *  可选的查询条件-插件名
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
    * @param string|null $pluginName 可选的查询条件-插件名
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets regexName
    *  可选的查询条件-匹配名称
    *
    * @return string|null
    */
    public function getRegexName()
    {
        return $this->container['regexName'];
    }

    /**
    * Sets regexName
    *
    * @param string|null $regexName 可选的查询条件-匹配名称
    *
    * @return $this
    */
    public function setRegexName($regexName)
    {
        $this->container['regexName'] = $regexName;
        return $this;
    }

    /**
    * Gets maintainer
    *  维护者
    *
    * @return string|null
    */
    public function getMaintainer()
    {
        return $this->container['maintainer'];
    }

    /**
    * Sets maintainer
    *
    * @param string|null $maintainer 维护者
    *
    * @return $this
    */
    public function setMaintainer($maintainer)
    {
        $this->container['maintainer'] = $maintainer;
        return $this;
    }

    /**
    * Gets businessType
    *  业务类型,[Build,Gate,Deploy,Test,Normal]
    *
    * @return string[]|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string[]|null $businessType 业务类型,[Build,Gate,Deploy,Test,Normal]
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets pluginAttribution
    *  插件属性，official/custom
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
    * @param string|null $pluginAttribution 插件属性，official/custom
    *
    * @return $this
    */
    public function setPluginAttribution($pluginAttribution)
    {
        $this->container['pluginAttribution'] = $pluginAttribution;
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

