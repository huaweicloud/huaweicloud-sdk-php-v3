<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FineGrainedSnapshotDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FineGrainedSnapshotDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * database  **参数解释**： 数据库。 **取值范围**： 不涉及。
    * schemaList  **参数解释**： 模式列表。 **取值范围**： 不涉及。
    * tableList  **参数解释**： 表集合。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'database' => 'string',
            'schemaList' => 'string[]',
            'tableList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * database  **参数解释**： 数据库。 **取值范围**： 不涉及。
    * schemaList  **参数解释**： 模式列表。 **取值范围**： 不涉及。
    * tableList  **参数解释**： 表集合。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'database' => null,
        'schemaList' => null,
        'tableList' => null
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
    * database  **参数解释**： 数据库。 **取值范围**： 不涉及。
    * schemaList  **参数解释**： 模式列表。 **取值范围**： 不涉及。
    * tableList  **参数解释**： 表集合。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'database' => 'database',
            'schemaList' => 'schema_list',
            'tableList' => 'table_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * database  **参数解释**： 数据库。 **取值范围**： 不涉及。
    * schemaList  **参数解释**： 模式列表。 **取值范围**： 不涉及。
    * tableList  **参数解释**： 表集合。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'database' => 'setDatabase',
            'schemaList' => 'setSchemaList',
            'tableList' => 'setTableList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * database  **参数解释**： 数据库。 **取值范围**： 不涉及。
    * schemaList  **参数解释**： 模式列表。 **取值范围**： 不涉及。
    * tableList  **参数解释**： 表集合。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'database' => 'getDatabase',
            'schemaList' => 'getSchemaList',
            'tableList' => 'getTableList'
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
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['schemaList'] = isset($data['schemaList']) ? $data['schemaList'] : null;
        $this->container['tableList'] = isset($data['tableList']) ? $data['tableList'] : null;
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
    * Gets database
    *  **参数解释**： 数据库。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database **参数解释**： 数据库。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets schemaList
    *  **参数解释**： 模式列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getSchemaList()
    {
        return $this->container['schemaList'];
    }

    /**
    * Sets schemaList
    *
    * @param string[]|null $schemaList **参数解释**： 模式列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSchemaList($schemaList)
    {
        $this->container['schemaList'] = $schemaList;
        return $this;
    }

    /**
    * Gets tableList
    *  **参数解释**： 表集合。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getTableList()
    {
        return $this->container['tableList'];
    }

    /**
    * Sets tableList
    *
    * @param string[]|null $tableList **参数解释**： 表集合。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTableList($tableList)
    {
        $this->container['tableList'] = $tableList;
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

