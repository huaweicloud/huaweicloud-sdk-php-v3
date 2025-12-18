<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NoSqlCreateBackupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NoSqlCreateBackupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 手动备份名称。 **约束限制：** 长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 手动备份描述。 **约束限制：** 长度不超过256位，且不能包含>!<\"&'=特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * databaseTables  **参数解释：** 备份里的库表信息。 **约束限制：** 该参数仅针对GeminiDB Cassandra。 **取值范围：** - 字段为空，表示创建实例级备份。 - 字段非空，表示创建库表级备份。  **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'databaseTables' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DatabaseTable[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 手动备份名称。 **约束限制：** 长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 手动备份描述。 **约束限制：** 长度不超过256位，且不能包含>!<\"&'=特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * databaseTables  **参数解释：** 备份里的库表信息。 **约束限制：** 该参数仅针对GeminiDB Cassandra。 **取值范围：** - 字段为空，表示创建实例级备份。 - 字段非空，表示创建库表级备份。  **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'databaseTables' => null
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
    * name  **参数解释：** 手动备份名称。 **约束限制：** 长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 手动备份描述。 **约束限制：** 长度不超过256位，且不能包含>!<\"&'=特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * databaseTables  **参数解释：** 备份里的库表信息。 **约束限制：** 该参数仅针对GeminiDB Cassandra。 **取值范围：** - 字段为空，表示创建实例级备份。 - 字段非空，表示创建库表级备份。  **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'databaseTables' => 'database_tables'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 手动备份名称。 **约束限制：** 长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 手动备份描述。 **约束限制：** 长度不超过256位，且不能包含>!<\"&'=特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * databaseTables  **参数解释：** 备份里的库表信息。 **约束限制：** 该参数仅针对GeminiDB Cassandra。 **取值范围：** - 字段为空，表示创建实例级备份。 - 字段非空，表示创建库表级备份。  **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'databaseTables' => 'setDatabaseTables'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 手动备份名称。 **约束限制：** 长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * description  **参数解释：** 手动备份描述。 **约束限制：** 长度不超过256位，且不能包含>!<\"&'=特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * databaseTables  **参数解释：** 备份里的库表信息。 **约束限制：** 该参数仅针对GeminiDB Cassandra。 **取值范围：** - 字段为空，表示创建实例级备份。 - 字段非空，表示创建库表级备份。  **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'databaseTables' => 'getDatabaseTables'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['databaseTables'] = isset($data['databaseTables']) ? $data['databaseTables'] : null;
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
    *  **参数解释：** 手动备份名称。 **约束限制：** 长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string $name **参数解释：** 手动备份名称。 **约束限制：** 长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 手动备份描述。 **约束限制：** 长度不超过256位，且不能包含>!<\"&'=特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string $description **参数解释：** 手动备份描述。 **约束限制：** 长度不超过256位，且不能包含>!<\"&'=特殊字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets databaseTables
    *  **参数解释：** 备份里的库表信息。 **约束限制：** 该参数仅针对GeminiDB Cassandra。 **取值范围：** - 字段为空，表示创建实例级备份。 - 字段非空，表示创建库表级备份。  **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DatabaseTable[]|null
    */
    public function getDatabaseTables()
    {
        return $this->container['databaseTables'];
    }

    /**
    * Sets databaseTables
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DatabaseTable[]|null $databaseTables **参数解释：** 备份里的库表信息。 **约束限制：** 该参数仅针对GeminiDB Cassandra。 **取值范围：** - 字段为空，表示创建实例级备份。 - 字段非空，表示创建库表级备份。  **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDatabaseTables($databaseTables)
    {
        $this->container['databaseTables'] = $databaseTables;
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

