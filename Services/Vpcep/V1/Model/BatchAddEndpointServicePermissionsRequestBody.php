<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchAddEndpointServicePermissionsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchAddEndpointServicePermissionsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissions  终端节点服务白名单列表
    * permissionType  终端节点服务白名单类型。  - domainId：基于账户ID配置终端节点服务白名单。  - orgPath：基于账户所在组织路径配置终端节点服务白名单。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissions' => '\HuaweiCloud\SDK\Vpcep\V1\Model\EpsAddPermissionRequest[]',
            'permissionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissions  终端节点服务白名单列表
    * permissionType  终端节点服务白名单类型。  - domainId：基于账户ID配置终端节点服务白名单。  - orgPath：基于账户所在组织路径配置终端节点服务白名单。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissions' => null,
        'permissionType' => null
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
    * permissions  终端节点服务白名单列表
    * permissionType  终端节点服务白名单类型。  - domainId：基于账户ID配置终端节点服务白名单。  - orgPath：基于账户所在组织路径配置终端节点服务白名单。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissions' => 'permissions',
            'permissionType' => 'permission_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissions  终端节点服务白名单列表
    * permissionType  终端节点服务白名单类型。  - domainId：基于账户ID配置终端节点服务白名单。  - orgPath：基于账户所在组织路径配置终端节点服务白名单。
    *
    * @var string[]
    */
    protected static $setters = [
            'permissions' => 'setPermissions',
            'permissionType' => 'setPermissionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissions  终端节点服务白名单列表
    * permissionType  终端节点服务白名单类型。  - domainId：基于账户ID配置终端节点服务白名单。  - orgPath：基于账户所在组织路径配置终端节点服务白名单。
    *
    * @var string[]
    */
    protected static $getters = [
            'permissions' => 'getPermissions',
            'permissionType' => 'getPermissionType'
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
    const PERMISSION_TYPE_DOMAIN_ID = 'domainId';
    const PERMISSION_TYPE_ORG_PATH = 'orgPath';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionTypeAllowableValues()
    {
        return [
            self::PERMISSION_TYPE_DOMAIN_ID,
            self::PERMISSION_TYPE_ORG_PATH,
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
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['permissionType'] = isset($data['permissionType']) ? $data['permissionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['permissions'] === null) {
            $invalidProperties[] = "'permissions' can't be null";
        }
            $allowedValues = $this->getPermissionTypeAllowableValues();
                if (!is_null($this->container['permissionType']) && !in_array($this->container['permissionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permissionType', must be one of '%s'",
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
    * Gets permissions
    *  终端节点服务白名单列表
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\EpsAddPermissionRequest[]
    */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
    * Sets permissions
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\EpsAddPermissionRequest[] $permissions 终端节点服务白名单列表
    *
    * @return $this
    */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;
        return $this;
    }

    /**
    * Gets permissionType
    *  终端节点服务白名单类型。  - domainId：基于账户ID配置终端节点服务白名单。  - orgPath：基于账户所在组织路径配置终端节点服务白名单。
    *
    * @return string|null
    */
    public function getPermissionType()
    {
        return $this->container['permissionType'];
    }

    /**
    * Sets permissionType
    *
    * @param string|null $permissionType 终端节点服务白名单类型。  - domainId：基于账户ID配置终端节点服务白名单。  - orgPath：基于账户所在组织路径配置终端节点服务白名单。
    *
    * @return $this
    */
    public function setPermissionType($permissionType)
    {
        $this->container['permissionType'] = $permissionType;
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

