<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datasourceType  数据源类型
    * permissionTypes  数据源操作权限类型
    * permissionActions  数据源支持的权限操作列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datasourceType' => 'string',
            'permissionTypes' => 'string[]',
            'permissionActions' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionActions[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datasourceType  数据源类型
    * permissionTypes  数据源操作权限类型
    * permissionActions  数据源支持的权限操作列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datasourceType' => null,
        'permissionTypes' => null,
        'permissionActions' => null
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
    * datasourceType  数据源类型
    * permissionTypes  数据源操作权限类型
    * permissionActions  数据源支持的权限操作列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datasourceType' => 'datasource_type',
            'permissionTypes' => 'permission_types',
            'permissionActions' => 'permission_actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datasourceType  数据源类型
    * permissionTypes  数据源操作权限类型
    * permissionActions  数据源支持的权限操作列表
    *
    * @var string[]
    */
    protected static $setters = [
            'datasourceType' => 'setDatasourceType',
            'permissionTypes' => 'setPermissionTypes',
            'permissionActions' => 'setPermissionActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datasourceType  数据源类型
    * permissionTypes  数据源操作权限类型
    * permissionActions  数据源支持的权限操作列表
    *
    * @var string[]
    */
    protected static $getters = [
            'datasourceType' => 'getDatasourceType',
            'permissionTypes' => 'getPermissionTypes',
            'permissionActions' => 'getPermissionActions'
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
    const PERMISSION_TYPES_ALLOW = 'ALLOW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionTypesAllowableValues()
    {
        return [
            self::PERMISSION_TYPES_ALLOW,
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
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['permissionTypes'] = isset($data['permissionTypes']) ? $data['permissionTypes'] : null;
        $this->container['permissionActions'] = isset($data['permissionActions']) ? $data['permissionActions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['datasourceType']) && (mb_strlen($this->container['datasourceType']) > 128)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['datasourceType']) && (mb_strlen($this->container['datasourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be bigger than or equal to 1.";
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
    * Gets datasourceType
    *  数据源类型
    *
    * @return string|null
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string|null $datasourceType 数据源类型
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets permissionTypes
    *  数据源操作权限类型
    *
    * @return string[]|null
    */
    public function getPermissionTypes()
    {
        return $this->container['permissionTypes'];
    }

    /**
    * Sets permissionTypes
    *
    * @param string[]|null $permissionTypes 数据源操作权限类型
    *
    * @return $this
    */
    public function setPermissionTypes($permissionTypes)
    {
        $this->container['permissionTypes'] = $permissionTypes;
        return $this;
    }

    /**
    * Gets permissionActions
    *  数据源支持的权限操作列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionActions[]|null
    */
    public function getPermissionActions()
    {
        return $this->container['permissionActions'];
    }

    /**
    * Sets permissionActions
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionActions[]|null $permissionActions 数据源支持的权限操作列表
    *
    * @return $this
    */
    public function setPermissionActions($permissionActions)
    {
        $this->container['permissionActions'] = $permissionActions;
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

