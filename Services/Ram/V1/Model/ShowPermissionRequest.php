<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPermissionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPermissionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissionId  共享资源权限的ID。
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * permissionVersion  资源权限版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissionId' => 'string',
            'xSecurityToken' => 'string',
            'permissionVersion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissionId  共享资源权限的ID。
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * permissionVersion  资源权限版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissionId' => null,
        'xSecurityToken' => null,
        'permissionVersion' => 'int32'
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
    * permissionId  共享资源权限的ID。
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * permissionVersion  资源权限版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissionId' => 'permission_id',
            'xSecurityToken' => 'X-Security-Token',
            'permissionVersion' => 'permission_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissionId  共享资源权限的ID。
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * permissionVersion  资源权限版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'permissionId' => 'setPermissionId',
            'xSecurityToken' => 'setXSecurityToken',
            'permissionVersion' => 'setPermissionVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissionId  共享资源权限的ID。
    * xSecurityToken  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    * permissionVersion  资源权限版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'permissionId' => 'getPermissionId',
            'xSecurityToken' => 'getXSecurityToken',
            'permissionVersion' => 'getPermissionVersion'
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
        $this->container['permissionId'] = isset($data['permissionId']) ? $data['permissionId'] : null;
        $this->container['xSecurityToken'] = isset($data['xSecurityToken']) ? $data['xSecurityToken'] : null;
        $this->container['permissionVersion'] = isset($data['permissionVersion']) ? $data['permissionVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['permissionId'] === null) {
            $invalidProperties[] = "'permissionId' can't be null";
        }
            if ((mb_strlen($this->container['permissionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'permissionId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['permissionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'permissionId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['permissionId'])) {
                $invalidProperties[] = "invalid value for 'permissionId', must be conform to the pattern /^[\\w-]+$/.";
            }
            if (!is_null($this->container['permissionVersion']) && ($this->container['permissionVersion'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'permissionVersion', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['permissionVersion']) && ($this->container['permissionVersion'] < 0)) {
                $invalidProperties[] = "invalid value for 'permissionVersion', must be bigger than or equal to 0.";
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
    * Gets permissionId
    *  共享资源权限的ID。
    *
    * @return string
    */
    public function getPermissionId()
    {
        return $this->container['permissionId'];
    }

    /**
    * Sets permissionId
    *
    * @param string $permissionId 共享资源权限的ID。
    *
    * @return $this
    */
    public function setPermissionId($permissionId)
    {
        $this->container['permissionId'] = $permissionId;
        return $this;
    }

    /**
    * Gets xSecurityToken
    *  如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    *
    * @return string|null
    */
    public function getXSecurityToken()
    {
        return $this->container['xSecurityToken'];
    }

    /**
    * Sets xSecurityToken
    *
    * @param string|null $xSecurityToken 如果正在使用临时安全凭据，则此header是必需的，该值是临时安全凭据的安全令牌（会话令牌）。
    *
    * @return $this
    */
    public function setXSecurityToken($xSecurityToken)
    {
        $this->container['xSecurityToken'] = $xSecurityToken;
        return $this;
    }

    /**
    * Gets permissionVersion
    *  资源权限版本。
    *
    * @return int|null
    */
    public function getPermissionVersion()
    {
        return $this->container['permissionVersion'];
    }

    /**
    * Sets permissionVersion
    *
    * @param int|null $permissionVersion 资源权限版本。
    *
    * @return $this
    */
    public function setPermissionVersion($permissionVersion)
    {
        $this->container['permissionVersion'] = $permissionVersion;
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

