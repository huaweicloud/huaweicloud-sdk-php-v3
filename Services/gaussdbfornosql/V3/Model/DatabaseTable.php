<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseTable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseTable';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  **参数解释：** 数据库名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tableNames  **参数解释：** 数据表名称列表。 **约束限制：** 不涉及。 **取值范围：** - table_names为空的时候，表示库级别备份。 - table_names非空的时候，表示表级别备份。  **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'tableNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  **参数解释：** 数据库名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tableNames  **参数解释：** 数据表名称列表。 **约束限制：** 不涉及。 **取值范围：** - table_names为空的时候，表示库级别备份。 - table_names非空的时候，表示表级别备份。  **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'tableNames' => null
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
    * databaseName  **参数解释：** 数据库名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tableNames  **参数解释：** 数据表名称列表。 **约束限制：** 不涉及。 **取值范围：** - table_names为空的时候，表示库级别备份。 - table_names非空的时候，表示表级别备份。  **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'tableNames' => 'table_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  **参数解释：** 数据库名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tableNames  **参数解释：** 数据表名称列表。 **约束限制：** 不涉及。 **取值范围：** - table_names为空的时候，表示库级别备份。 - table_names非空的时候，表示表级别备份。  **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'tableNames' => 'setTableNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  **参数解释：** 数据库名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tableNames  **参数解释：** 数据表名称列表。 **约束限制：** 不涉及。 **取值范围：** - table_names为空的时候，表示库级别备份。 - table_names非空的时候，表示表级别备份。  **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'tableNames' => 'getTableNames'
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
        $this->container['tableNames'] = isset($data['tableNames']) ? $data['tableNames'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
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
    * Gets databaseName
    *  **参数解释：** 数据库名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName **参数解释：** 数据库名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets tableNames
    *  **参数解释：** 数据表名称列表。 **约束限制：** 不涉及。 **取值范围：** - table_names为空的时候，表示库级别备份。 - table_names非空的时候，表示表级别备份。  **默认取值：** 不涉及。
    *
    * @return string[]|null
    */
    public function getTableNames()
    {
        return $this->container['tableNames'];
    }

    /**
    * Sets tableNames
    *
    * @param string[]|null $tableNames **参数解释：** 数据表名称列表。 **约束限制：** 不涉及。 **取值范围：** - table_names为空的时候，表示库级别备份。 - table_names非空的时候，表示表级别备份。  **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTableNames($tableNames)
    {
        $this->container['tableNames'] = $tableNames;
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

