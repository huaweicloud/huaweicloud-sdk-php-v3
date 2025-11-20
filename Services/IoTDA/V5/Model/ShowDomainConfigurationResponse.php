<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configurationId  域配置唯一标识ID
    * domainName  **参数说明**：自定义域名
    * accessProtocol  **参数说明**：应用协议场景，当前仅支持Device-MQTTS：设备接入MQTTS场景
    * serverCertificateId  **参数说明**：自定义服务端证书ID
    * serverCertificateConfig  serverCertificateConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configurationId' => 'string',
            'domainName' => 'string',
            'accessProtocol' => 'string',
            'serverCertificateId' => 'string',
            'serverCertificateConfig' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ServerCertificateConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configurationId  域配置唯一标识ID
    * domainName  **参数说明**：自定义域名
    * accessProtocol  **参数说明**：应用协议场景，当前仅支持Device-MQTTS：设备接入MQTTS场景
    * serverCertificateId  **参数说明**：自定义服务端证书ID
    * serverCertificateConfig  serverCertificateConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configurationId' => null,
        'domainName' => null,
        'accessProtocol' => null,
        'serverCertificateId' => null,
        'serverCertificateConfig' => null
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
    * configurationId  域配置唯一标识ID
    * domainName  **参数说明**：自定义域名
    * accessProtocol  **参数说明**：应用协议场景，当前仅支持Device-MQTTS：设备接入MQTTS场景
    * serverCertificateId  **参数说明**：自定义服务端证书ID
    * serverCertificateConfig  serverCertificateConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configurationId' => 'configuration_id',
            'domainName' => 'domain_name',
            'accessProtocol' => 'access_protocol',
            'serverCertificateId' => 'server_certificate_id',
            'serverCertificateConfig' => 'server_certificate_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configurationId  域配置唯一标识ID
    * domainName  **参数说明**：自定义域名
    * accessProtocol  **参数说明**：应用协议场景，当前仅支持Device-MQTTS：设备接入MQTTS场景
    * serverCertificateId  **参数说明**：自定义服务端证书ID
    * serverCertificateConfig  serverCertificateConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'configurationId' => 'setConfigurationId',
            'domainName' => 'setDomainName',
            'accessProtocol' => 'setAccessProtocol',
            'serverCertificateId' => 'setServerCertificateId',
            'serverCertificateConfig' => 'setServerCertificateConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configurationId  域配置唯一标识ID
    * domainName  **参数说明**：自定义域名
    * accessProtocol  **参数说明**：应用协议场景，当前仅支持Device-MQTTS：设备接入MQTTS场景
    * serverCertificateId  **参数说明**：自定义服务端证书ID
    * serverCertificateConfig  serverCertificateConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'configurationId' => 'getConfigurationId',
            'domainName' => 'getDomainName',
            'accessProtocol' => 'getAccessProtocol',
            'serverCertificateId' => 'getServerCertificateId',
            'serverCertificateConfig' => 'getServerCertificateConfig'
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
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['accessProtocol'] = isset($data['accessProtocol']) ? $data['accessProtocol'] : null;
        $this->container['serverCertificateId'] = isset($data['serverCertificateId']) ? $data['serverCertificateId'] : null;
        $this->container['serverCertificateConfig'] = isset($data['serverCertificateConfig']) ? $data['serverCertificateConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['configurationId']) && !preg_match("/^[a-fA-F0-9]{24}$/", $this->container['configurationId'])) {
                $invalidProperties[] = "invalid value for 'configurationId', must be conform to the pattern /^[a-fA-F0-9]{24}$/.";
            }
            if (!is_null($this->container['accessProtocol']) && !preg_match("/Device-MQTTS/", $this->container['accessProtocol'])) {
                $invalidProperties[] = "invalid value for 'accessProtocol', must be conform to the pattern /Device-MQTTS/.";
            }
            if (!is_null($this->container['serverCertificateId']) && !preg_match("/^[a-f0-9-]{1,36}$/", $this->container['serverCertificateId'])) {
                $invalidProperties[] = "invalid value for 'serverCertificateId', must be conform to the pattern /^[a-f0-9-]{1,36}$/.";
            }
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
    * Gets configurationId
    *  域配置唯一标识ID
    *
    * @return string|null
    */
    public function getConfigurationId()
    {
        return $this->container['configurationId'];
    }

    /**
    * Sets configurationId
    *
    * @param string|null $configurationId 域配置唯一标识ID
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数说明**：自定义域名
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName **参数说明**：自定义域名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets accessProtocol
    *  **参数说明**：应用协议场景，当前仅支持Device-MQTTS：设备接入MQTTS场景
    *
    * @return string|null
    */
    public function getAccessProtocol()
    {
        return $this->container['accessProtocol'];
    }

    /**
    * Sets accessProtocol
    *
    * @param string|null $accessProtocol **参数说明**：应用协议场景，当前仅支持Device-MQTTS：设备接入MQTTS场景
    *
    * @return $this
    */
    public function setAccessProtocol($accessProtocol)
    {
        $this->container['accessProtocol'] = $accessProtocol;
        return $this;
    }

    /**
    * Gets serverCertificateId
    *  **参数说明**：自定义服务端证书ID
    *
    * @return string|null
    */
    public function getServerCertificateId()
    {
        return $this->container['serverCertificateId'];
    }

    /**
    * Sets serverCertificateId
    *
    * @param string|null $serverCertificateId **参数说明**：自定义服务端证书ID
    *
    * @return $this
    */
    public function setServerCertificateId($serverCertificateId)
    {
        $this->container['serverCertificateId'] = $serverCertificateId;
        return $this;
    }

    /**
    * Gets serverCertificateConfig
    *  serverCertificateConfig
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ServerCertificateConfig|null
    */
    public function getServerCertificateConfig()
    {
        return $this->container['serverCertificateConfig'];
    }

    /**
    * Sets serverCertificateConfig
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ServerCertificateConfig|null $serverCertificateConfig serverCertificateConfig
    *
    * @return $this
    */
    public function setServerCertificateConfig($serverCertificateConfig)
    {
        $this->container['serverCertificateConfig'] = $serverCertificateConfig;
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

