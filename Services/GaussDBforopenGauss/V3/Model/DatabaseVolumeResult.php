<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseVolumeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseVolumeResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * tableSpaceName  **参数解释**: 数据库的缺省表空间名。 **取值范围**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    * databaseSize  **参数解释**: 数据库占用空间大小。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'tableSpaceName' => 'string',
            'userName' => 'string',
            'databaseSize' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * tableSpaceName  **参数解释**: 数据库的缺省表空间名。 **取值范围**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    * databaseSize  **参数解释**: 数据库占用空间大小。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'tableSpaceName' => null,
        'userName' => null,
        'databaseSize' => null
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
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * tableSpaceName  **参数解释**: 数据库的缺省表空间名。 **取值范围**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    * databaseSize  **参数解释**: 数据库占用空间大小。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'tableSpaceName' => 'table_space_name',
            'userName' => 'user_name',
            'databaseSize' => 'database_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * tableSpaceName  **参数解释**: 数据库的缺省表空间名。 **取值范围**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    * databaseSize  **参数解释**: 数据库占用空间大小。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'tableSpaceName' => 'setTableSpaceName',
            'userName' => 'setUserName',
            'databaseSize' => 'setDatabaseSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * tableSpaceName  **参数解释**: 数据库的缺省表空间名。 **取值范围**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    * databaseSize  **参数解释**: 数据库占用空间大小。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'tableSpaceName' => 'getTableSpaceName',
            'userName' => 'getUserName',
            'databaseSize' => 'getDatabaseSize'
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
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableSpaceName'] = isset($data['tableSpaceName']) ? $data['tableSpaceName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['databaseSize'] = isset($data['databaseSize']) ? $data['databaseSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets databaseName
    *  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets tableSpaceName
    *  **参数解释**: 数据库的缺省表空间名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTableSpaceName()
    {
        return $this->container['tableSpaceName'];
    }

    /**
    * Sets tableSpaceName
    *
    * @param string|null $tableSpaceName **参数解释**: 数据库的缺省表空间名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTableSpaceName($tableSpaceName)
    {
        $this->container['tableSpaceName'] = $tableSpaceName;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**: 表所属用户名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets databaseSize
    *  **参数解释**: 数据库占用空间大小。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDatabaseSize()
    {
        return $this->container['databaseSize'];
    }

    /**
    * Sets databaseSize
    *
    * @param string|null $databaseSize **参数解释**: 数据库占用空间大小。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDatabaseSize($databaseSize)
    {
        $this->container['databaseSize'] = $databaseSize;
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

