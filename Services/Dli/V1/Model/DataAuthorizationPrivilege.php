<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataAuthorizationPrivilege implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataAuthorizationPrivilege';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * object  被赋权的数据对象，命名方式为： “databases.数据库名”，则数据库下面的所有数据都将被共享。 “databases.数据库名.tables.表名”, 指定的表的数据将被共享。 “databases.数据库名.tables.表名.columns.列名”，指定的列将被共享。 \"jobs.flink.flink作业ID\"，指定的作业将被共享。 \"groups.程序包组名\"，指定的程序包组将被共享。 \"resources.程序包名\"，指定程序包将被共享。
    * privileges  待赋权、回收或更新的权限列表。 说明： 若“action”为“update”，更新列表为空，则表示回收用户在该数据库或表的所有权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'object' => 'string',
            'privileges' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * object  被赋权的数据对象，命名方式为： “databases.数据库名”，则数据库下面的所有数据都将被共享。 “databases.数据库名.tables.表名”, 指定的表的数据将被共享。 “databases.数据库名.tables.表名.columns.列名”，指定的列将被共享。 \"jobs.flink.flink作业ID\"，指定的作业将被共享。 \"groups.程序包组名\"，指定的程序包组将被共享。 \"resources.程序包名\"，指定程序包将被共享。
    * privileges  待赋权、回收或更新的权限列表。 说明： 若“action”为“update”，更新列表为空，则表示回收用户在该数据库或表的所有权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'object' => null,
        'privileges' => null
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
    * object  被赋权的数据对象，命名方式为： “databases.数据库名”，则数据库下面的所有数据都将被共享。 “databases.数据库名.tables.表名”, 指定的表的数据将被共享。 “databases.数据库名.tables.表名.columns.列名”，指定的列将被共享。 \"jobs.flink.flink作业ID\"，指定的作业将被共享。 \"groups.程序包组名\"，指定的程序包组将被共享。 \"resources.程序包名\"，指定程序包将被共享。
    * privileges  待赋权、回收或更新的权限列表。 说明： 若“action”为“update”，更新列表为空，则表示回收用户在该数据库或表的所有权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'object' => 'object',
            'privileges' => 'privileges'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * object  被赋权的数据对象，命名方式为： “databases.数据库名”，则数据库下面的所有数据都将被共享。 “databases.数据库名.tables.表名”, 指定的表的数据将被共享。 “databases.数据库名.tables.表名.columns.列名”，指定的列将被共享。 \"jobs.flink.flink作业ID\"，指定的作业将被共享。 \"groups.程序包组名\"，指定的程序包组将被共享。 \"resources.程序包名\"，指定程序包将被共享。
    * privileges  待赋权、回收或更新的权限列表。 说明： 若“action”为“update”，更新列表为空，则表示回收用户在该数据库或表的所有权限
    *
    * @var string[]
    */
    protected static $setters = [
            'object' => 'setObject',
            'privileges' => 'setPrivileges'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * object  被赋权的数据对象，命名方式为： “databases.数据库名”，则数据库下面的所有数据都将被共享。 “databases.数据库名.tables.表名”, 指定的表的数据将被共享。 “databases.数据库名.tables.表名.columns.列名”，指定的列将被共享。 \"jobs.flink.flink作业ID\"，指定的作业将被共享。 \"groups.程序包组名\"，指定的程序包组将被共享。 \"resources.程序包名\"，指定程序包将被共享。
    * privileges  待赋权、回收或更新的权限列表。 说明： 若“action”为“update”，更新列表为空，则表示回收用户在该数据库或表的所有权限
    *
    * @var string[]
    */
    protected static $getters = [
            'object' => 'getObject',
            'privileges' => 'getPrivileges'
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
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['privileges'] = isset($data['privileges']) ? $data['privileges'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
        if ($this->container['privileges'] === null) {
            $invalidProperties[] = "'privileges' can't be null";
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
    * Gets object
    *  被赋权的数据对象，命名方式为： “databases.数据库名”，则数据库下面的所有数据都将被共享。 “databases.数据库名.tables.表名”, 指定的表的数据将被共享。 “databases.数据库名.tables.表名.columns.列名”，指定的列将被共享。 \"jobs.flink.flink作业ID\"，指定的作业将被共享。 \"groups.程序包组名\"，指定的程序包组将被共享。 \"resources.程序包名\"，指定程序包将被共享。
    *
    * @return string
    */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
    * Sets object
    *
    * @param string $object 被赋权的数据对象，命名方式为： “databases.数据库名”，则数据库下面的所有数据都将被共享。 “databases.数据库名.tables.表名”, 指定的表的数据将被共享。 “databases.数据库名.tables.表名.columns.列名”，指定的列将被共享。 \"jobs.flink.flink作业ID\"，指定的作业将被共享。 \"groups.程序包组名\"，指定的程序包组将被共享。 \"resources.程序包名\"，指定程序包将被共享。
    *
    * @return $this
    */
    public function setObject($object)
    {
        $this->container['object'] = $object;
        return $this;
    }

    /**
    * Gets privileges
    *  待赋权、回收或更新的权限列表。 说明： 若“action”为“update”，更新列表为空，则表示回收用户在该数据库或表的所有权限
    *
    * @return string[]
    */
    public function getPrivileges()
    {
        return $this->container['privileges'];
    }

    /**
    * Sets privileges
    *
    * @param string[] $privileges 待赋权、回收或更新的权限列表。 说明： 若“action”为“update”，更新列表为空，则表示回收用户在该数据库或表的所有权限
    *
    * @return $this
    */
    public function setPrivileges($privileges)
    {
        $this->container['privileges'] = $privileges;
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

