<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateUserDetailReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateUserDetailReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baseAuthority  DDM实例帐号的基础权限，默认值为原DDM帐号权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * description  DDM实例帐号的描述信息，长度不能超过256个字符。  默认值为空。
    * databases  DDM实例帐号相关信息的集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baseAuthority' => 'string[]',
            'description' => 'string',
            'databases' => '\HuaweiCloud\SDK\Ddm\V1\Model\UpdateUsersDatabases[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baseAuthority  DDM实例帐号的基础权限，默认值为原DDM帐号权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * description  DDM实例帐号的描述信息，长度不能超过256个字符。  默认值为空。
    * databases  DDM实例帐号相关信息的集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baseAuthority' => null,
        'description' => null,
        'databases' => null
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
    * baseAuthority  DDM实例帐号的基础权限，默认值为原DDM帐号权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * description  DDM实例帐号的描述信息，长度不能超过256个字符。  默认值为空。
    * databases  DDM实例帐号相关信息的集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baseAuthority' => 'base_authority',
            'description' => 'description',
            'databases' => 'databases'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baseAuthority  DDM实例帐号的基础权限，默认值为原DDM帐号权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * description  DDM实例帐号的描述信息，长度不能超过256个字符。  默认值为空。
    * databases  DDM实例帐号相关信息的集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'baseAuthority' => 'setBaseAuthority',
            'description' => 'setDescription',
            'databases' => 'setDatabases'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baseAuthority  DDM实例帐号的基础权限，默认值为原DDM帐号权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * description  DDM实例帐号的描述信息，长度不能超过256个字符。  默认值为空。
    * databases  DDM实例帐号相关信息的集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'baseAuthority' => 'getBaseAuthority',
            'description' => 'getDescription',
            'databases' => 'getDatabases'
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
    const BASE_AUTHORITY_CREATE = 'CREATE';
    const BASE_AUTHORITY_DROP = 'DROP';
    const BASE_AUTHORITY_ALTER = 'ALTER';
    const BASE_AUTHORITY_INDEX = 'INDEX';
    const BASE_AUTHORITY_INSERT = 'INSERT';
    const BASE_AUTHORITY_DELETE = 'DELETE';
    const BASE_AUTHORITY_UPDATE = 'UPDATE';
    const BASE_AUTHORITY_SELECT = 'SELECT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBaseAuthorityAllowableValues()
    {
        return [
            self::BASE_AUTHORITY_CREATE,
            self::BASE_AUTHORITY_DROP,
            self::BASE_AUTHORITY_ALTER,
            self::BASE_AUTHORITY_INDEX,
            self::BASE_AUTHORITY_INSERT,
            self::BASE_AUTHORITY_DELETE,
            self::BASE_AUTHORITY_UPDATE,
            self::BASE_AUTHORITY_SELECT,
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
        $this->container['baseAuthority'] = isset($data['baseAuthority']) ? $data['baseAuthority'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
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
    * Gets baseAuthority
    *  DDM实例帐号的基础权限，默认值为原DDM帐号权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    *
    * @return string[]|null
    */
    public function getBaseAuthority()
    {
        return $this->container['baseAuthority'];
    }

    /**
    * Sets baseAuthority
    *
    * @param string[]|null $baseAuthority DDM实例帐号的基础权限，默认值为原DDM帐号权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    *
    * @return $this
    */
    public function setBaseAuthority($baseAuthority)
    {
        $this->container['baseAuthority'] = $baseAuthority;
        return $this;
    }

    /**
    * Gets description
    *  DDM实例帐号的描述信息，长度不能超过256个字符。  默认值为空。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description DDM实例帐号的描述信息，长度不能超过256个字符。  默认值为空。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets databases
    *  DDM实例帐号相关信息的集合。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\UpdateUsersDatabases[]|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\UpdateUsersDatabases[]|null $databases DDM实例帐号相关信息的集合。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
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

