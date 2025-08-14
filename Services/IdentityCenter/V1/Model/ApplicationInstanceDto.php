<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplicationInstanceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplicationInstanceDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * activeCertificate  activeCertificate
    * display  display
    * identityProviderConfig  identityProviderConfig
    * applicationInstanceId  应用程序实例唯一标识ID
    * name  应用程序UUID
    * visible  应用程序在门户是否可见
    * responseConfig  responseConfig
    * responseSchemaConfig  responseSchemaConfig
    * securityConfig  securityConfig
    * status  应用程序实例状态
    * template  template
    * serviceProviderConfig  serviceProviderConfig
    * clientId  OIDC Client ID
    * endUserVisible  用户是否可见
    * managedAccount  组员所属账号ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'activeCertificate' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\CertificateDto',
            'display' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\DisplayDto',
            'identityProviderConfig' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\IdentityProviderConfigDto',
            'applicationInstanceId' => 'string',
            'name' => 'string',
            'visible' => 'bool',
            'responseConfig' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseConfigDto',
            'responseSchemaConfig' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\ResponseSchemaConfigDto',
            'securityConfig' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\SecurityConfigDto',
            'status' => 'string',
            'template' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\ApplicationTemplateDto',
            'serviceProviderConfig' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\ServiceProviderConfigDto',
            'clientId' => 'string',
            'endUserVisible' => 'bool',
            'managedAccount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * activeCertificate  activeCertificate
    * display  display
    * identityProviderConfig  identityProviderConfig
    * applicationInstanceId  应用程序实例唯一标识ID
    * name  应用程序UUID
    * visible  应用程序在门户是否可见
    * responseConfig  responseConfig
    * responseSchemaConfig  responseSchemaConfig
    * securityConfig  securityConfig
    * status  应用程序实例状态
    * template  template
    * serviceProviderConfig  serviceProviderConfig
    * clientId  OIDC Client ID
    * endUserVisible  用户是否可见
    * managedAccount  组员所属账号ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'activeCertificate' => null,
        'display' => null,
        'identityProviderConfig' => null,
        'applicationInstanceId' => null,
        'name' => null,
        'visible' => null,
        'responseConfig' => null,
        'responseSchemaConfig' => null,
        'securityConfig' => null,
        'status' => null,
        'template' => null,
        'serviceProviderConfig' => null,
        'clientId' => null,
        'endUserVisible' => null,
        'managedAccount' => null
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
    * activeCertificate  activeCertificate
    * display  display
    * identityProviderConfig  identityProviderConfig
    * applicationInstanceId  应用程序实例唯一标识ID
    * name  应用程序UUID
    * visible  应用程序在门户是否可见
    * responseConfig  responseConfig
    * responseSchemaConfig  responseSchemaConfig
    * securityConfig  securityConfig
    * status  应用程序实例状态
    * template  template
    * serviceProviderConfig  serviceProviderConfig
    * clientId  OIDC Client ID
    * endUserVisible  用户是否可见
    * managedAccount  组员所属账号ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'activeCertificate' => 'active_certificate',
            'display' => 'display',
            'identityProviderConfig' => 'identity_provider_config',
            'applicationInstanceId' => 'application_instance_id',
            'name' => 'name',
            'visible' => 'visible',
            'responseConfig' => 'response_config',
            'responseSchemaConfig' => 'response_schema_config',
            'securityConfig' => 'security_config',
            'status' => 'status',
            'template' => 'template',
            'serviceProviderConfig' => 'service_provider_config',
            'clientId' => 'client_id',
            'endUserVisible' => 'end_user_visible',
            'managedAccount' => 'managed_account'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * activeCertificate  activeCertificate
    * display  display
    * identityProviderConfig  identityProviderConfig
    * applicationInstanceId  应用程序实例唯一标识ID
    * name  应用程序UUID
    * visible  应用程序在门户是否可见
    * responseConfig  responseConfig
    * responseSchemaConfig  responseSchemaConfig
    * securityConfig  securityConfig
    * status  应用程序实例状态
    * template  template
    * serviceProviderConfig  serviceProviderConfig
    * clientId  OIDC Client ID
    * endUserVisible  用户是否可见
    * managedAccount  组员所属账号ID
    *
    * @var string[]
    */
    protected static $setters = [
            'activeCertificate' => 'setActiveCertificate',
            'display' => 'setDisplay',
            'identityProviderConfig' => 'setIdentityProviderConfig',
            'applicationInstanceId' => 'setApplicationInstanceId',
            'name' => 'setName',
            'visible' => 'setVisible',
            'responseConfig' => 'setResponseConfig',
            'responseSchemaConfig' => 'setResponseSchemaConfig',
            'securityConfig' => 'setSecurityConfig',
            'status' => 'setStatus',
            'template' => 'setTemplate',
            'serviceProviderConfig' => 'setServiceProviderConfig',
            'clientId' => 'setClientId',
            'endUserVisible' => 'setEndUserVisible',
            'managedAccount' => 'setManagedAccount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * activeCertificate  activeCertificate
    * display  display
    * identityProviderConfig  identityProviderConfig
    * applicationInstanceId  应用程序实例唯一标识ID
    * name  应用程序UUID
    * visible  应用程序在门户是否可见
    * responseConfig  responseConfig
    * responseSchemaConfig  responseSchemaConfig
    * securityConfig  securityConfig
    * status  应用程序实例状态
    * template  template
    * serviceProviderConfig  serviceProviderConfig
    * clientId  OIDC Client ID
    * endUserVisible  用户是否可见
    * managedAccount  组员所属账号ID
    *
    * @var string[]
    */
    protected static $getters = [
            'activeCertificate' => 'getActiveCertificate',
            'display' => 'getDisplay',
            'identityProviderConfig' => 'getIdentityProviderConfig',
            'applicationInstanceId' => 'getApplicationInstanceId',
            'name' => 'getName',
            'visible' => 'getVisible',
            'responseConfig' => 'getResponseConfig',
            'responseSchemaConfig' => 'getResponseSchemaConfig',
            'securityConfig' => 'getSecurityConfig',
            'status' => 'getStatus',
            'template' => 'getTemplate',
            'serviceProviderConfig' => 'getServiceProviderConfig',
            'clientId' => 'getClientId',
            'endUserVisible' => 'getEndUserVisible',
            'managedAccount' => 'getManagedAccount'
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
    const STATUS_CREATED = 'CREATED';
    const STATUS_ENABLED = 'ENABLED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_ENABLED,
        ];
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
        $this->container['activeCertificate'] = isset($data['activeCertificate']) ? $data['activeCertificate'] : null;
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
        $this->container['identityProviderConfig'] = isset($data['identityProviderConfig']) ? $data['identityProviderConfig'] : null;
        $this->container['applicationInstanceId'] = isset($data['applicationInstanceId']) ? $data['applicationInstanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['responseConfig'] = isset($data['responseConfig']) ? $data['responseConfig'] : null;
        $this->container['responseSchemaConfig'] = isset($data['responseSchemaConfig']) ? $data['responseSchemaConfig'] : null;
        $this->container['securityConfig'] = isset($data['securityConfig']) ? $data['securityConfig'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['serviceProviderConfig'] = isset($data['serviceProviderConfig']) ? $data['serviceProviderConfig'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['endUserVisible'] = isset($data['endUserVisible']) ? $data['endUserVisible'] : null;
        $this->container['managedAccount'] = isset($data['managedAccount']) ? $data['managedAccount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['activeCertificate'] === null) {
            $invalidProperties[] = "'activeCertificate' can't be null";
        }
        if ($this->container['display'] === null) {
            $invalidProperties[] = "'display' can't be null";
        }
        if ($this->container['identityProviderConfig'] === null) {
            $invalidProperties[] = "'identityProviderConfig' can't be null";
        }
        if ($this->container['applicationInstanceId'] === null) {
            $invalidProperties[] = "'applicationInstanceId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['visible'] === null) {
            $invalidProperties[] = "'visible' can't be null";
        }
        if ($this->container['responseConfig'] === null) {
            $invalidProperties[] = "'responseConfig' can't be null";
        }
        if ($this->container['responseSchemaConfig'] === null) {
            $invalidProperties[] = "'responseSchemaConfig' can't be null";
        }
        if ($this->container['securityConfig'] === null) {
            $invalidProperties[] = "'securityConfig' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
        }
        if ($this->container['serviceProviderConfig'] === null) {
            $invalidProperties[] = "'serviceProviderConfig' can't be null";
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
    * Gets activeCertificate
    *  activeCertificate
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\CertificateDto
    */
    public function getActiveCertificate()
    {
        return $this->container['activeCertificate'];
    }

    /**
    * Sets activeCertificate
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\CertificateDto $activeCertificate activeCertificate
    *
    * @return $this
    */
    public function setActiveCertificate($activeCertificate)
    {
        $this->container['activeCertificate'] = $activeCertificate;
        return $this;
    }

    /**
    * Gets display
    *  display
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\DisplayDto
    */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
    * Sets display
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\DisplayDto $display display
    *
    * @return $this
    */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;
        return $this;
    }

    /**
    * Gets identityProviderConfig
    *  identityProviderConfig
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\IdentityProviderConfigDto
    */
    public function getIdentityProviderConfig()
    {
        return $this->container['identityProviderConfig'];
    }

    /**
    * Sets identityProviderConfig
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\IdentityProviderConfigDto $identityProviderConfig identityProviderConfig
    *
    * @return $this
    */
    public function setIdentityProviderConfig($identityProviderConfig)
    {
        $this->container['identityProviderConfig'] = $identityProviderConfig;
        return $this;
    }

    /**
    * Gets applicationInstanceId
    *  应用程序实例唯一标识ID
    *
    * @return string
    */
    public function getApplicationInstanceId()
    {
        return $this->container['applicationInstanceId'];
    }

    /**
    * Sets applicationInstanceId
    *
    * @param string $applicationInstanceId 应用程序实例唯一标识ID
    *
    * @return $this
    */
    public function setApplicationInstanceId($applicationInstanceId)
    {
        $this->container['applicationInstanceId'] = $applicationInstanceId;
        return $this;
    }

    /**
    * Gets name
    *  应用程序UUID
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 应用程序UUID
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets visible
    *  应用程序在门户是否可见
    *
    * @return bool
    */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
    * Sets visible
    *
    * @param bool $visible 应用程序在门户是否可见
    *
    * @return $this
    */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;
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
    * Gets status
    *  应用程序实例状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 应用程序实例状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets template
    *  template
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\ApplicationTemplateDto
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\ApplicationTemplateDto $template template
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
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
    * Gets clientId
    *  OIDC Client ID
    *
    * @return string|null
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string|null $clientId OIDC Client ID
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
        return $this;
    }

    /**
    * Gets endUserVisible
    *  用户是否可见
    *
    * @return bool|null
    */
    public function getEndUserVisible()
    {
        return $this->container['endUserVisible'];
    }

    /**
    * Sets endUserVisible
    *
    * @param bool|null $endUserVisible 用户是否可见
    *
    * @return $this
    */
    public function setEndUserVisible($endUserVisible)
    {
        $this->container['endUserVisible'] = $endUserVisible;
        return $this;
    }

    /**
    * Gets managedAccount
    *  组员所属账号ID
    *
    * @return string|null
    */
    public function getManagedAccount()
    {
        return $this->container['managedAccount'];
    }

    /**
    * Sets managedAccount
    *
    * @param string|null $managedAccount 组员所属账号ID
    *
    * @return $this
    */
    public function setManagedAccount($managedAccount)
    {
        $this->container['managedAccount'] = $managedAccount;
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

