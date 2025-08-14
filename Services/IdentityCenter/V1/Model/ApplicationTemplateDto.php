<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplicationTemplateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplicationTemplateDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * application  application
    * responseConfig  responseConfig
    * responseSchemaConfig  responseSchemaConfig
    * ssoProtocol  支持的协议
    * securityConfig  securityConfig
    * serviceProviderConfig  serviceProviderConfig
    * templateId  应用程序模板唯一标识ID
    * templateVersion  应用程序模板版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'application' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\ApplicationTemplateDisplayDto',
            'responseConfig' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseConfigDto',
            'responseSchemaConfig' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSchemaConfigDto',
            'ssoProtocol' => 'string',
            'securityConfig' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\SecurityConfigDto',
            'serviceProviderConfig' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\ServiceProviderConfigDto',
            'templateId' => 'string',
            'templateVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * application  application
    * responseConfig  responseConfig
    * responseSchemaConfig  responseSchemaConfig
    * ssoProtocol  支持的协议
    * securityConfig  securityConfig
    * serviceProviderConfig  serviceProviderConfig
    * templateId  应用程序模板唯一标识ID
    * templateVersion  应用程序模板版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'application' => null,
        'responseConfig' => null,
        'responseSchemaConfig' => null,
        'ssoProtocol' => null,
        'securityConfig' => null,
        'serviceProviderConfig' => null,
        'templateId' => null,
        'templateVersion' => null
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
    * application  application
    * responseConfig  responseConfig
    * responseSchemaConfig  responseSchemaConfig
    * ssoProtocol  支持的协议
    * securityConfig  securityConfig
    * serviceProviderConfig  serviceProviderConfig
    * templateId  应用程序模板唯一标识ID
    * templateVersion  应用程序模板版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'application' => 'application',
            'responseConfig' => 'response_config',
            'responseSchemaConfig' => 'response_schema_config',
            'ssoProtocol' => 'sso_protocol',
            'securityConfig' => 'security_config',
            'serviceProviderConfig' => 'service_provider_config',
            'templateId' => 'template_id',
            'templateVersion' => 'template_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * application  application
    * responseConfig  responseConfig
    * responseSchemaConfig  responseSchemaConfig
    * ssoProtocol  支持的协议
    * securityConfig  securityConfig
    * serviceProviderConfig  serviceProviderConfig
    * templateId  应用程序模板唯一标识ID
    * templateVersion  应用程序模板版本
    *
    * @var string[]
    */
    protected static $setters = [
            'application' => 'setApplication',
            'responseConfig' => 'setResponseConfig',
            'responseSchemaConfig' => 'setResponseSchemaConfig',
            'ssoProtocol' => 'setSsoProtocol',
            'securityConfig' => 'setSecurityConfig',
            'serviceProviderConfig' => 'setServiceProviderConfig',
            'templateId' => 'setTemplateId',
            'templateVersion' => 'setTemplateVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * application  application
    * responseConfig  responseConfig
    * responseSchemaConfig  responseSchemaConfig
    * ssoProtocol  支持的协议
    * securityConfig  securityConfig
    * serviceProviderConfig  serviceProviderConfig
    * templateId  应用程序模板唯一标识ID
    * templateVersion  应用程序模板版本
    *
    * @var string[]
    */
    protected static $getters = [
            'application' => 'getApplication',
            'responseConfig' => 'getResponseConfig',
            'responseSchemaConfig' => 'getResponseSchemaConfig',
            'ssoProtocol' => 'getSsoProtocol',
            'securityConfig' => 'getSecurityConfig',
            'serviceProviderConfig' => 'getServiceProviderConfig',
            'templateId' => 'getTemplateId',
            'templateVersion' => 'getTemplateVersion'
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
        $this->container['application'] = isset($data['application']) ? $data['application'] : null;
        $this->container['responseConfig'] = isset($data['responseConfig']) ? $data['responseConfig'] : null;
        $this->container['responseSchemaConfig'] = isset($data['responseSchemaConfig']) ? $data['responseSchemaConfig'] : null;
        $this->container['ssoProtocol'] = isset($data['ssoProtocol']) ? $data['ssoProtocol'] : null;
        $this->container['securityConfig'] = isset($data['securityConfig']) ? $data['securityConfig'] : null;
        $this->container['serviceProviderConfig'] = isset($data['serviceProviderConfig']) ? $data['serviceProviderConfig'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateVersion'] = isset($data['templateVersion']) ? $data['templateVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['application'] === null) {
            $invalidProperties[] = "'application' can't be null";
        }
        if ($this->container['responseConfig'] === null) {
            $invalidProperties[] = "'responseConfig' can't be null";
        }
        if ($this->container['responseSchemaConfig'] === null) {
            $invalidProperties[] = "'responseSchemaConfig' can't be null";
        }
        if ($this->container['ssoProtocol'] === null) {
            $invalidProperties[] = "'ssoProtocol' can't be null";
        }
        if ($this->container['securityConfig'] === null) {
            $invalidProperties[] = "'securityConfig' can't be null";
        }
        if ($this->container['serviceProviderConfig'] === null) {
            $invalidProperties[] = "'serviceProviderConfig' can't be null";
        }
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
        if ($this->container['templateVersion'] === null) {
            $invalidProperties[] = "'templateVersion' can't be null";
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
    * Gets application
    *  application
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\ApplicationTemplateDisplayDto
    */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
    * Sets application
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\ApplicationTemplateDisplayDto $application application
    *
    * @return $this
    */
    public function setApplication($application)
    {
        $this->container['application'] = $application;
        return $this;
    }

    /**
    * Gets responseConfig
    *  responseConfig
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseConfigDto
    */
    public function getResponseConfig()
    {
        return $this->container['responseConfig'];
    }

    /**
    * Sets responseConfig
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseConfigDto $responseConfig responseConfig
    *
    * @return $this
    */
    public function setResponseConfig($responseConfig)
    {
        $this->container['responseConfig'] = $responseConfig;
        return $this;
    }

    /**
    * Gets responseSchemaConfig
    *  responseSchemaConfig
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSchemaConfigDto
    */
    public function getResponseSchemaConfig()
    {
        return $this->container['responseSchemaConfig'];
    }

    /**
    * Sets responseSchemaConfig
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSchemaConfigDto $responseSchemaConfig responseSchemaConfig
    *
    * @return $this
    */
    public function setResponseSchemaConfig($responseSchemaConfig)
    {
        $this->container['responseSchemaConfig'] = $responseSchemaConfig;
        return $this;
    }

    /**
    * Gets ssoProtocol
    *  支持的协议
    *
    * @return string
    */
    public function getSsoProtocol()
    {
        return $this->container['ssoProtocol'];
    }

    /**
    * Sets ssoProtocol
    *
    * @param string $ssoProtocol 支持的协议
    *
    * @return $this
    */
    public function setSsoProtocol($ssoProtocol)
    {
        $this->container['ssoProtocol'] = $ssoProtocol;
        return $this;
    }

    /**
    * Gets securityConfig
    *  securityConfig
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\SecurityConfigDto
    */
    public function getSecurityConfig()
    {
        return $this->container['securityConfig'];
    }

    /**
    * Sets securityConfig
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\SecurityConfigDto $securityConfig securityConfig
    *
    * @return $this
    */
    public function setSecurityConfig($securityConfig)
    {
        $this->container['securityConfig'] = $securityConfig;
        return $this;
    }

    /**
    * Gets serviceProviderConfig
    *  serviceProviderConfig
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\ServiceProviderConfigDto
    */
    public function getServiceProviderConfig()
    {
        return $this->container['serviceProviderConfig'];
    }

    /**
    * Sets serviceProviderConfig
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\ServiceProviderConfigDto $serviceProviderConfig serviceProviderConfig
    *
    * @return $this
    */
    public function setServiceProviderConfig($serviceProviderConfig)
    {
        $this->container['serviceProviderConfig'] = $serviceProviderConfig;
        return $this;
    }

    /**
    * Gets templateId
    *  应用程序模板唯一标识ID
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 应用程序模板唯一标识ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets templateVersion
    *  应用程序模板版本
    *
    * @return string
    */
    public function getTemplateVersion()
    {
        return $this->container['templateVersion'];
    }

    /**
    * Sets templateVersion
    *
    * @param string $templateVersion 应用程序模板版本
    *
    * @return $this
    */
    public function setTemplateVersion($templateVersion)
    {
        $this->container['templateVersion'] = $templateVersion;
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

