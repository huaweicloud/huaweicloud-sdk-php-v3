<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdentityStoreDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdentityStoreDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    * identityStoreType  身份源类型
    * authenticationType  登录认证类型
    * provisioningType  预配类型
    * status  身份源是否启用状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identityStoreId' => 'string',
            'identityStoreType' => 'string',
            'authenticationType' => 'string',
            'provisioningType' => 'string[]',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    * identityStoreType  身份源类型
    * authenticationType  登录认证类型
    * provisioningType  预配类型
    * status  身份源是否启用状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identityStoreId' => null,
        'identityStoreType' => null,
        'authenticationType' => null,
        'provisioningType' => null,
        'status' => null
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
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    * identityStoreType  身份源类型
    * authenticationType  登录认证类型
    * provisioningType  预配类型
    * status  身份源是否启用状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identityStoreId' => 'identity_store_id',
            'identityStoreType' => 'identity_store_type',
            'authenticationType' => 'authentication_type',
            'provisioningType' => 'provisioning_type',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    * identityStoreType  身份源类型
    * authenticationType  登录认证类型
    * provisioningType  预配类型
    * status  身份源是否启用状态
    *
    * @var string[]
    */
    protected static $setters = [
            'identityStoreId' => 'setIdentityStoreId',
            'identityStoreType' => 'setIdentityStoreType',
            'authenticationType' => 'setAuthenticationType',
            'provisioningType' => 'setProvisioningType',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    * identityStoreType  身份源类型
    * authenticationType  登录认证类型
    * provisioningType  预配类型
    * status  身份源是否启用状态
    *
    * @var string[]
    */
    protected static $getters = [
            'identityStoreId' => 'getIdentityStoreId',
            'identityStoreType' => 'getIdentityStoreType',
            'authenticationType' => 'getAuthenticationType',
            'provisioningType' => 'getProvisioningType',
            'status' => 'getStatus'
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
    const IDENTITY_STORE_TYPE_USER_POOL = 'UserPool';
    const AUTHENTICATION_TYPE_SAML_2_0 = 'SAML_2.0';
    const AUTHENTICATION_TYPE__DEFAULT = 'DEFAULT';
    const PROVISIONING_TYPE__DEFAULT = 'DEFAULT';
    const PROVISIONING_TYPE_SCIM = 'SCIM';
    const STATUS_DISABLED = 'DISABLED';
    const STATUS_ENABLED = 'ENABLED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIdentityStoreTypeAllowableValues()
    {
        return [
            self::IDENTITY_STORE_TYPE_USER_POOL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthenticationTypeAllowableValues()
    {
        return [
            self::AUTHENTICATION_TYPE_SAML_2_0,
            self::AUTHENTICATION_TYPE__DEFAULT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProvisioningTypeAllowableValues()
    {
        return [
            self::PROVISIONING_TYPE__DEFAULT,
            self::PROVISIONING_TYPE_SCIM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DISABLED,
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
        $this->container['identityStoreId'] = isset($data['identityStoreId']) ? $data['identityStoreId'] : null;
        $this->container['identityStoreType'] = isset($data['identityStoreType']) ? $data['identityStoreType'] : null;
        $this->container['authenticationType'] = isset($data['authenticationType']) ? $data['authenticationType'] : null;
        $this->container['provisioningType'] = isset($data['provisioningType']) ? $data['provisioningType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['identityStoreId'] === null) {
            $invalidProperties[] = "'identityStoreId' can't be null";
        }
        if ($this->container['identityStoreType'] === null) {
            $invalidProperties[] = "'identityStoreType' can't be null";
        }
            $allowedValues = $this->getIdentityStoreTypeAllowableValues();
                if (!is_null($this->container['identityStoreType']) && !in_array($this->container['identityStoreType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'identityStoreType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['authenticationType'] === null) {
            $invalidProperties[] = "'authenticationType' can't be null";
        }
            $allowedValues = $this->getAuthenticationTypeAllowableValues();
                if (!is_null($this->container['authenticationType']) && !in_array($this->container['authenticationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authenticationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['provisioningType'] === null) {
            $invalidProperties[] = "'provisioningType' can't be null";
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
    * Gets identityStoreId
    *  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    *
    * @return string
    */
    public function getIdentityStoreId()
    {
        return $this->container['identityStoreId'];
    }

    /**
    * Sets identityStoreId
    *
    * @param string $identityStoreId 关联到IAM身份中心实例的身份源的全局唯一标识符（ID）。
    *
    * @return $this
    */
    public function setIdentityStoreId($identityStoreId)
    {
        $this->container['identityStoreId'] = $identityStoreId;
        return $this;
    }

    /**
    * Gets identityStoreType
    *  身份源类型
    *
    * @return string
    */
    public function getIdentityStoreType()
    {
        return $this->container['identityStoreType'];
    }

    /**
    * Sets identityStoreType
    *
    * @param string $identityStoreType 身份源类型
    *
    * @return $this
    */
    public function setIdentityStoreType($identityStoreType)
    {
        $this->container['identityStoreType'] = $identityStoreType;
        return $this;
    }

    /**
    * Gets authenticationType
    *  登录认证类型
    *
    * @return string
    */
    public function getAuthenticationType()
    {
        return $this->container['authenticationType'];
    }

    /**
    * Sets authenticationType
    *
    * @param string $authenticationType 登录认证类型
    *
    * @return $this
    */
    public function setAuthenticationType($authenticationType)
    {
        $this->container['authenticationType'] = $authenticationType;
        return $this;
    }

    /**
    * Gets provisioningType
    *  预配类型
    *
    * @return string[]
    */
    public function getProvisioningType()
    {
        return $this->container['provisioningType'];
    }

    /**
    * Sets provisioningType
    *
    * @param string[] $provisioningType 预配类型
    *
    * @return $this
    */
    public function setProvisioningType($provisioningType)
    {
        $this->container['provisioningType'] = $provisioningType;
        return $this;
    }

    /**
    * Gets status
    *  身份源是否启用状态
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
    * @param string $status 身份源是否启用状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

