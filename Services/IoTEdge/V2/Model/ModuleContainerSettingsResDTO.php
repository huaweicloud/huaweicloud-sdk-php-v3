<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModuleContainerSettingsResDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModuleContainerSettingsResDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configs  configs
    * customEnvs  自定义环境变量
    * extraHosts  域名解析配置集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configs' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerConfigsResDTO',
            'customEnvs' => 'object',
            'extraHosts' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\DNSConfigDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configs  configs
    * customEnvs  自定义环境变量
    * extraHosts  域名解析配置集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configs' => null,
        'customEnvs' => null,
        'extraHosts' => null
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
    * configs  configs
    * customEnvs  自定义环境变量
    * extraHosts  域名解析配置集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configs' => 'configs',
            'customEnvs' => 'custom_envs',
            'extraHosts' => 'extra_hosts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configs  configs
    * customEnvs  自定义环境变量
    * extraHosts  域名解析配置集合
    *
    * @var string[]
    */
    protected static $setters = [
            'configs' => 'setConfigs',
            'customEnvs' => 'setCustomEnvs',
            'extraHosts' => 'setExtraHosts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configs  configs
    * customEnvs  自定义环境变量
    * extraHosts  域名解析配置集合
    *
    * @var string[]
    */
    protected static $getters = [
            'configs' => 'getConfigs',
            'customEnvs' => 'getCustomEnvs',
            'extraHosts' => 'getExtraHosts'
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
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
        $this->container['customEnvs'] = isset($data['customEnvs']) ? $data['customEnvs'] : null;
        $this->container['extraHosts'] = isset($data['extraHosts']) ? $data['extraHosts'] : null;
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
    * Gets configs
    *  configs
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerConfigsResDTO|null
    */
    public function getConfigs()
    {
        return $this->container['configs'];
    }

    /**
    * Sets configs
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ContainerConfigsResDTO|null $configs configs
    *
    * @return $this
    */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;
        return $this;
    }

    /**
    * Gets customEnvs
    *  自定义环境变量
    *
    * @return object|null
    */
    public function getCustomEnvs()
    {
        return $this->container['customEnvs'];
    }

    /**
    * Sets customEnvs
    *
    * @param object|null $customEnvs 自定义环境变量
    *
    * @return $this
    */
    public function setCustomEnvs($customEnvs)
    {
        $this->container['customEnvs'] = $customEnvs;
        return $this;
    }

    /**
    * Gets extraHosts
    *  域名解析配置集合
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\DNSConfigDTO[]|null
    */
    public function getExtraHosts()
    {
        return $this->container['extraHosts'];
    }

    /**
    * Sets extraHosts
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\DNSConfigDTO[]|null $extraHosts 域名解析配置集合
    *
    * @return $this
    */
    public function setExtraHosts($extraHosts)
    {
        $this->container['extraHosts'] = $extraHosts;
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

