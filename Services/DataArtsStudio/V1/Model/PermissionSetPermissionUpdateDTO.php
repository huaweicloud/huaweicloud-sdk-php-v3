<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionSetPermissionUpdateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionSetPermissionUpdateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dwId  数据连接id
    * permissionActions  权限操作列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dwId' => 'string',
            'permissionActions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dwId  数据连接id
    * permissionActions  权限操作列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dwId' => null,
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
    * dwId  数据连接id
    * permissionActions  权限操作列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dwId' => 'dw_id',
            'permissionActions' => 'permission_actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dwId  数据连接id
    * permissionActions  权限操作列表
    *
    * @var string[]
    */
    protected static $setters = [
            'dwId' => 'setDwId',
            'permissionActions' => 'setPermissionActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dwId  数据连接id
    * permissionActions  权限操作列表
    *
    * @var string[]
    */
    protected static $getters = [
            'dwId' => 'getDwId',
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
    const PERMISSION_ACTIONS_ALL = 'ALL';
    const PERMISSION_ACTIONS_SELECT = 'SELECT';
    const PERMISSION_ACTIONS_UPDATE = 'UPDATE';
    const PERMISSION_ACTIONS_CREATE = 'CREATE';
    const PERMISSION_ACTIONS_DROP = 'DROP';
    const PERMISSION_ACTIONS_ALTER = 'ALTER';
    const PERMISSION_ACTIONS_INDEX = 'INDEX';
    const PERMISSION_ACTIONS_LOCK = 'LOCK';
    const PERMISSION_ACTIONS_READ = 'READ';
    const PERMISSION_ACTIONS_WRITE = 'WRITE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionActionsAllowableValues()
    {
        return [
            self::PERMISSION_ACTIONS_ALL,
            self::PERMISSION_ACTIONS_SELECT,
            self::PERMISSION_ACTIONS_UPDATE,
            self::PERMISSION_ACTIONS_CREATE,
            self::PERMISSION_ACTIONS_DROP,
            self::PERMISSION_ACTIONS_ALTER,
            self::PERMISSION_ACTIONS_INDEX,
            self::PERMISSION_ACTIONS_LOCK,
            self::PERMISSION_ACTIONS_READ,
            self::PERMISSION_ACTIONS_WRITE,
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
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
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
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be bigger than or equal to 1.";
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
    * Gets dwId
    *  数据连接id
    *
    * @return string|null
    */
    public function getDwId()
    {
        return $this->container['dwId'];
    }

    /**
    * Sets dwId
    *
    * @param string|null $dwId 数据连接id
    *
    * @return $this
    */
    public function setDwId($dwId)
    {
        $this->container['dwId'] = $dwId;
        return $this;
    }

    /**
    * Gets permissionActions
    *  权限操作列表
    *
    * @return string[]|null
    */
    public function getPermissionActions()
    {
        return $this->container['permissionActions'];
    }

    /**
    * Sets permissionActions
    *
    * @param string[]|null $permissionActions 权限操作列表
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

