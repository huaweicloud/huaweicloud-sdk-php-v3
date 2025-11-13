<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ErrorTable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ErrorTable';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * message  **参数解释**：  Excel导入失败的对象信息。  **取值范围**：  不涉及。
    * databaseName  **参数解释**：  Excel导入失败的数据库名。   **取值范围**：  不涉及。
    * tableName  **参数解释**：  Excel导入失败的表名。   **取值范围**：  不涉及。
    * rowNumber  **参数解释**：  Excel导入失败的行。  **取值范围**：  不涉及。
    * fullDescription  **参数解释**：  Excel导入失败的错误信息描述。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'message' => 'string',
            'databaseName' => 'string',
            'tableName' => 'string',
            'rowNumber' => 'int',
            'fullDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * message  **参数解释**：  Excel导入失败的对象信息。  **取值范围**：  不涉及。
    * databaseName  **参数解释**：  Excel导入失败的数据库名。   **取值范围**：  不涉及。
    * tableName  **参数解释**：  Excel导入失败的表名。   **取值范围**：  不涉及。
    * rowNumber  **参数解释**：  Excel导入失败的行。  **取值范围**：  不涉及。
    * fullDescription  **参数解释**：  Excel导入失败的错误信息描述。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'message' => null,
        'databaseName' => null,
        'tableName' => null,
        'rowNumber' => null,
        'fullDescription' => null
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
    * message  **参数解释**：  Excel导入失败的对象信息。  **取值范围**：  不涉及。
    * databaseName  **参数解释**：  Excel导入失败的数据库名。   **取值范围**：  不涉及。
    * tableName  **参数解释**：  Excel导入失败的表名。   **取值范围**：  不涉及。
    * rowNumber  **参数解释**：  Excel导入失败的行。  **取值范围**：  不涉及。
    * fullDescription  **参数解释**：  Excel导入失败的错误信息描述。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'message' => 'message',
            'databaseName' => 'database_name',
            'tableName' => 'table_name',
            'rowNumber' => 'row_number',
            'fullDescription' => 'full_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * message  **参数解释**：  Excel导入失败的对象信息。  **取值范围**：  不涉及。
    * databaseName  **参数解释**：  Excel导入失败的数据库名。   **取值范围**：  不涉及。
    * tableName  **参数解释**：  Excel导入失败的表名。   **取值范围**：  不涉及。
    * rowNumber  **参数解释**：  Excel导入失败的行。  **取值范围**：  不涉及。
    * fullDescription  **参数解释**：  Excel导入失败的错误信息描述。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'message' => 'setMessage',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName',
            'rowNumber' => 'setRowNumber',
            'fullDescription' => 'setFullDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * message  **参数解释**：  Excel导入失败的对象信息。  **取值范围**：  不涉及。
    * databaseName  **参数解释**：  Excel导入失败的数据库名。   **取值范围**：  不涉及。
    * tableName  **参数解释**：  Excel导入失败的表名。   **取值范围**：  不涉及。
    * rowNumber  **参数解释**：  Excel导入失败的行。  **取值范围**：  不涉及。
    * fullDescription  **参数解释**：  Excel导入失败的错误信息描述。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'message' => 'getMessage',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName',
            'rowNumber' => 'getRowNumber',
            'fullDescription' => 'getFullDescription'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['rowNumber'] = isset($data['rowNumber']) ? $data['rowNumber'] : null;
        $this->container['fullDescription'] = isset($data['fullDescription']) ? $data['fullDescription'] : null;
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
    * Gets message
    *  **参数解释**：  Excel导入失败的对象信息。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**：  Excel导入失败的对象信息。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets databaseName
    *  **参数解释**：  Excel导入失败的数据库名。   **取值范围**：  不涉及。
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
    * @param string|null $databaseName **参数解释**：  Excel导入失败的数据库名。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets tableName
    *  **参数解释**：  Excel导入失败的表名。   **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName **参数解释**：  Excel导入失败的表名。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets rowNumber
    *  **参数解释**：  Excel导入失败的行。  **取值范围**：  不涉及。
    *
    * @return int|null
    */
    public function getRowNumber()
    {
        return $this->container['rowNumber'];
    }

    /**
    * Sets rowNumber
    *
    * @param int|null $rowNumber **参数解释**：  Excel导入失败的行。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setRowNumber($rowNumber)
    {
        $this->container['rowNumber'] = $rowNumber;
        return $this;
    }

    /**
    * Gets fullDescription
    *  **参数解释**：  Excel导入失败的错误信息描述。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getFullDescription()
    {
        return $this->container['fullDescription'];
    }

    /**
    * Sets fullDescription
    *
    * @param string|null $fullDescription **参数解释**：  Excel导入失败的错误信息描述。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setFullDescription($fullDescription)
    {
        $this->container['fullDescription'] = $fullDescription;
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

