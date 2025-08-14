<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSsoConfigurationReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSsoConfigurationReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ssoConfiguration  ssoConfiguration
    * configurationType  配置类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ssoConfiguration' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\SSOConfigurationDto',
            'configurationType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ssoConfiguration  ssoConfiguration
    * configurationType  配置类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ssoConfiguration' => null,
        'configurationType' => null
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
    * ssoConfiguration  ssoConfiguration
    * configurationType  配置类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ssoConfiguration' => 'sso_configuration',
            'configurationType' => 'configuration_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ssoConfiguration  ssoConfiguration
    * configurationType  配置类型
    *
    * @var string[]
    */
    protected static $setters = [
            'ssoConfiguration' => 'setSsoConfiguration',
            'configurationType' => 'setConfigurationType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ssoConfiguration  ssoConfiguration
    * configurationType  配置类型
    *
    * @var string[]
    */
    protected static $getters = [
            'ssoConfiguration' => 'getSsoConfiguration',
            'configurationType' => 'getConfigurationType'
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
    const CONFIGURATION_TYPE_APP_AUTHENTICATION_CONFIGURATION = 'APP_AUTHENTICATION_CONFIGURATION';
    const CONFIGURATION_TYPE_SESSION = 'SESSION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfigurationTypeAllowableValues()
    {
        return [
            self::CONFIGURATION_TYPE_APP_AUTHENTICATION_CONFIGURATION,
            self::CONFIGURATION_TYPE_SESSION,
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
        $this->container['ssoConfiguration'] = isset($data['ssoConfiguration']) ? $data['ssoConfiguration'] : null;
        $this->container['configurationType'] = isset($data['configurationType']) ? $data['configurationType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ssoConfiguration'] === null) {
            $invalidProperties[] = "'ssoConfiguration' can't be null";
        }
        if ($this->container['configurationType'] === null) {
            $invalidProperties[] = "'configurationType' can't be null";
        }
            $allowedValues = $this->getConfigurationTypeAllowableValues();
                if (!is_null($this->container['configurationType']) && !in_array($this->container['configurationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'configurationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets ssoConfiguration
    *  ssoConfiguration
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\SSOConfigurationDto
    */
    public function getSsoConfiguration()
    {
        return $this->container['ssoConfiguration'];
    }

    /**
    * Sets ssoConfiguration
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\SSOConfigurationDto $ssoConfiguration ssoConfiguration
    *
    * @return $this
    */
    public function setSsoConfiguration($ssoConfiguration)
    {
        $this->container['ssoConfiguration'] = $ssoConfiguration;
        return $this;
    }

    /**
    * Gets configurationType
    *  配置类型
    *
    * @return string
    */
    public function getConfigurationType()
    {
        return $this->container['configurationType'];
    }

    /**
    * Sets configurationType
    *
    * @param string $configurationType 配置类型
    *
    * @return $this
    */
    public function setConfigurationType($configurationType)
    {
        $this->container['configurationType'] = $configurationType;
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

