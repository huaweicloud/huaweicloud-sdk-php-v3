<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetUsersListDetailResponses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetUsersListDetailResponses';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  DDM实例帐号名称。
    * status  DDM实例帐号状态。
    * baseAuthority  DDM实例帐号的基础权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * passwordLastChanged  DDM实例账号的密码修改时间，UNIX时间戳格式。
    * extendAuthority  DDM实例帐号的扩展权限。2021年8月开始不支持该字段，9月会去掉该字段。  取值为：fulltableDelete、fulltableSelect、fulltableUpdate
    * description  DDM实例帐号的描述。
    * created  DDM实例帐号的创建时间，UNIX时间戳格式。
    * databases  关联的逻辑库的集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'status' => 'string',
            'baseAuthority' => 'string[]',
            'passwordLastChanged' => 'int',
            'extendAuthority' => 'string[]',
            'description' => 'string',
            'created' => 'int',
            'databases' => '\HuaweiCloud\SDK\Ddm\V1\Model\GetUsersListdatabase[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  DDM实例帐号名称。
    * status  DDM实例帐号状态。
    * baseAuthority  DDM实例帐号的基础权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * passwordLastChanged  DDM实例账号的密码修改时间，UNIX时间戳格式。
    * extendAuthority  DDM实例帐号的扩展权限。2021年8月开始不支持该字段，9月会去掉该字段。  取值为：fulltableDelete、fulltableSelect、fulltableUpdate
    * description  DDM实例帐号的描述。
    * created  DDM实例帐号的创建时间，UNIX时间戳格式。
    * databases  关联的逻辑库的集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'baseAuthority' => null,
        'passwordLastChanged' => 'int64',
        'extendAuthority' => null,
        'description' => null,
        'created' => 'int64',
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
    * name  DDM实例帐号名称。
    * status  DDM实例帐号状态。
    * baseAuthority  DDM实例帐号的基础权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * passwordLastChanged  DDM实例账号的密码修改时间，UNIX时间戳格式。
    * extendAuthority  DDM实例帐号的扩展权限。2021年8月开始不支持该字段，9月会去掉该字段。  取值为：fulltableDelete、fulltableSelect、fulltableUpdate
    * description  DDM实例帐号的描述。
    * created  DDM实例帐号的创建时间，UNIX时间戳格式。
    * databases  关联的逻辑库的集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'status' => 'status',
            'baseAuthority' => 'base_authority',
            'passwordLastChanged' => 'password_last_changed',
            'extendAuthority' => 'extend_authority',
            'description' => 'description',
            'created' => 'created',
            'databases' => 'databases'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  DDM实例帐号名称。
    * status  DDM实例帐号状态。
    * baseAuthority  DDM实例帐号的基础权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * passwordLastChanged  DDM实例账号的密码修改时间，UNIX时间戳格式。
    * extendAuthority  DDM实例帐号的扩展权限。2021年8月开始不支持该字段，9月会去掉该字段。  取值为：fulltableDelete、fulltableSelect、fulltableUpdate
    * description  DDM实例帐号的描述。
    * created  DDM实例帐号的创建时间，UNIX时间戳格式。
    * databases  关联的逻辑库的集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'status' => 'setStatus',
            'baseAuthority' => 'setBaseAuthority',
            'passwordLastChanged' => 'setPasswordLastChanged',
            'extendAuthority' => 'setExtendAuthority',
            'description' => 'setDescription',
            'created' => 'setCreated',
            'databases' => 'setDatabases'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  DDM实例帐号名称。
    * status  DDM实例帐号状态。
    * baseAuthority  DDM实例帐号的基础权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    * passwordLastChanged  DDM实例账号的密码修改时间，UNIX时间戳格式。
    * extendAuthority  DDM实例帐号的扩展权限。2021年8月开始不支持该字段，9月会去掉该字段。  取值为：fulltableDelete、fulltableSelect、fulltableUpdate
    * description  DDM实例帐号的描述。
    * created  DDM实例帐号的创建时间，UNIX时间戳格式。
    * databases  关联的逻辑库的集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'status' => 'getStatus',
            'baseAuthority' => 'getBaseAuthority',
            'passwordLastChanged' => 'getPasswordLastChanged',
            'extendAuthority' => 'getExtendAuthority',
            'description' => 'getDescription',
            'created' => 'getCreated',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['baseAuthority'] = isset($data['baseAuthority']) ? $data['baseAuthority'] : null;
        $this->container['passwordLastChanged'] = isset($data['passwordLastChanged']) ? $data['passwordLastChanged'] : null;
        $this->container['extendAuthority'] = isset($data['extendAuthority']) ? $data['extendAuthority'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['baseAuthority'] === null) {
            $invalidProperties[] = "'baseAuthority' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['databases'] === null) {
            $invalidProperties[] = "'databases' can't be null";
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
    * Gets name
    *  DDM实例帐号名称。
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
    * @param string $name DDM实例帐号名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  DDM实例帐号状态。
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
    * @param string $status DDM实例帐号状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets baseAuthority
    *  DDM实例帐号的基础权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    *
    * @return string[]
    */
    public function getBaseAuthority()
    {
        return $this->container['baseAuthority'];
    }

    /**
    * Sets baseAuthority
    *
    * @param string[] $baseAuthority DDM实例帐号的基础权限。  取值为：CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT
    *
    * @return $this
    */
    public function setBaseAuthority($baseAuthority)
    {
        $this->container['baseAuthority'] = $baseAuthority;
        return $this;
    }

    /**
    * Gets passwordLastChanged
    *  DDM实例账号的密码修改时间，UNIX时间戳格式。
    *
    * @return int|null
    */
    public function getPasswordLastChanged()
    {
        return $this->container['passwordLastChanged'];
    }

    /**
    * Sets passwordLastChanged
    *
    * @param int|null $passwordLastChanged DDM实例账号的密码修改时间，UNIX时间戳格式。
    *
    * @return $this
    */
    public function setPasswordLastChanged($passwordLastChanged)
    {
        $this->container['passwordLastChanged'] = $passwordLastChanged;
        return $this;
    }

    /**
    * Gets extendAuthority
    *  DDM实例帐号的扩展权限。2021年8月开始不支持该字段，9月会去掉该字段。  取值为：fulltableDelete、fulltableSelect、fulltableUpdate
    *
    * @return string[]|null
    */
    public function getExtendAuthority()
    {
        return $this->container['extendAuthority'];
    }

    /**
    * Sets extendAuthority
    *
    * @param string[]|null $extendAuthority DDM实例帐号的扩展权限。2021年8月开始不支持该字段，9月会去掉该字段。  取值为：fulltableDelete、fulltableSelect、fulltableUpdate
    *
    * @return $this
    */
    public function setExtendAuthority($extendAuthority)
    {
        $this->container['extendAuthority'] = $extendAuthority;
        return $this;
    }

    /**
    * Gets description
    *  DDM实例帐号的描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description DDM实例帐号的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets created
    *  DDM实例帐号的创建时间，UNIX时间戳格式。
    *
    * @return int
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param int $created DDM实例帐号的创建时间，UNIX时间戳格式。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets databases
    *  关联的逻辑库的集合。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\GetUsersListdatabase[]
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\GetUsersListdatabase[] $databases 关联的逻辑库的集合。
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

