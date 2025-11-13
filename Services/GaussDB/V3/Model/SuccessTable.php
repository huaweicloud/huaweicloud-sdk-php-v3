<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SuccessTable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SuccessTable';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  **参数解释**：  Excel导入成功的数据库名。   **取值范围**：  不涉及。
    * tableName  **参数解释**：  Excel导入成功的表名。   **取值范围**：  不涉及。
    * configName  **参数解释**：  Excel导入成功的表配置。   **取值范围**：  不涉及。
    * rowNumber  **参数解释**：  Excel导入成功的行数。   **取值范围**：  不涉及。
    * fullTableName  **参数解释**：  Excel导入成功的表全名。   **取值范围**：  不涉及。
    * valid  **参数解释**：  Excel信息是否合规。   **取值范围**：  - true：校验结果合规。 - false：校验结果不合规。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'tableName' => 'string',
            'configName' => 'string',
            'rowNumber' => 'int',
            'fullTableName' => 'string',
            'valid' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  **参数解释**：  Excel导入成功的数据库名。   **取值范围**：  不涉及。
    * tableName  **参数解释**：  Excel导入成功的表名。   **取值范围**：  不涉及。
    * configName  **参数解释**：  Excel导入成功的表配置。   **取值范围**：  不涉及。
    * rowNumber  **参数解释**：  Excel导入成功的行数。   **取值范围**：  不涉及。
    * fullTableName  **参数解释**：  Excel导入成功的表全名。   **取值范围**：  不涉及。
    * valid  **参数解释**：  Excel信息是否合规。   **取值范围**：  - true：校验结果合规。 - false：校验结果不合规。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'tableName' => null,
        'configName' => null,
        'rowNumber' => null,
        'fullTableName' => null,
        'valid' => null
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
    * dbName  **参数解释**：  Excel导入成功的数据库名。   **取值范围**：  不涉及。
    * tableName  **参数解释**：  Excel导入成功的表名。   **取值范围**：  不涉及。
    * configName  **参数解释**：  Excel导入成功的表配置。   **取值范围**：  不涉及。
    * rowNumber  **参数解释**：  Excel导入成功的行数。   **取值范围**：  不涉及。
    * fullTableName  **参数解释**：  Excel导入成功的表全名。   **取值范围**：  不涉及。
    * valid  **参数解释**：  Excel信息是否合规。   **取值范围**：  - true：校验结果合规。 - false：校验结果不合规。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'tableName' => 'table_name',
            'configName' => 'config_name',
            'rowNumber' => 'row_number',
            'fullTableName' => 'full_table_name',
            'valid' => 'valid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  **参数解释**：  Excel导入成功的数据库名。   **取值范围**：  不涉及。
    * tableName  **参数解释**：  Excel导入成功的表名。   **取值范围**：  不涉及。
    * configName  **参数解释**：  Excel导入成功的表配置。   **取值范围**：  不涉及。
    * rowNumber  **参数解释**：  Excel导入成功的行数。   **取值范围**：  不涉及。
    * fullTableName  **参数解释**：  Excel导入成功的表全名。   **取值范围**：  不涉及。
    * valid  **参数解释**：  Excel信息是否合规。   **取值范围**：  - true：校验结果合规。 - false：校验结果不合规。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'tableName' => 'setTableName',
            'configName' => 'setConfigName',
            'rowNumber' => 'setRowNumber',
            'fullTableName' => 'setFullTableName',
            'valid' => 'setValid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  **参数解释**：  Excel导入成功的数据库名。   **取值范围**：  不涉及。
    * tableName  **参数解释**：  Excel导入成功的表名。   **取值范围**：  不涉及。
    * configName  **参数解释**：  Excel导入成功的表配置。   **取值范围**：  不涉及。
    * rowNumber  **参数解释**：  Excel导入成功的行数。   **取值范围**：  不涉及。
    * fullTableName  **参数解释**：  Excel导入成功的表全名。   **取值范围**：  不涉及。
    * valid  **参数解释**：  Excel信息是否合规。   **取值范围**：  - true：校验结果合规。 - false：校验结果不合规。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'tableName' => 'getTableName',
            'configName' => 'getConfigName',
            'rowNumber' => 'getRowNumber',
            'fullTableName' => 'getFullTableName',
            'valid' => 'getValid'
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
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['configName'] = isset($data['configName']) ? $data['configName'] : null;
        $this->container['rowNumber'] = isset($data['rowNumber']) ? $data['rowNumber'] : null;
        $this->container['fullTableName'] = isset($data['fullTableName']) ? $data['fullTableName'] : null;
        $this->container['valid'] = isset($data['valid']) ? $data['valid'] : null;
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
    * Gets dbName
    *  **参数解释**：  Excel导入成功的数据库名。   **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName **参数解释**：  Excel导入成功的数据库名。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets tableName
    *  **参数解释**：  Excel导入成功的表名。   **取值范围**：  不涉及。
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
    * @param string|null $tableName **参数解释**：  Excel导入成功的表名。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets configName
    *  **参数解释**：  Excel导入成功的表配置。   **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getConfigName()
    {
        return $this->container['configName'];
    }

    /**
    * Sets configName
    *
    * @param string|null $configName **参数解释**：  Excel导入成功的表配置。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setConfigName($configName)
    {
        $this->container['configName'] = $configName;
        return $this;
    }

    /**
    * Gets rowNumber
    *  **参数解释**：  Excel导入成功的行数。   **取值范围**：  不涉及。
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
    * @param int|null $rowNumber **参数解释**：  Excel导入成功的行数。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setRowNumber($rowNumber)
    {
        $this->container['rowNumber'] = $rowNumber;
        return $this;
    }

    /**
    * Gets fullTableName
    *  **参数解释**：  Excel导入成功的表全名。   **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getFullTableName()
    {
        return $this->container['fullTableName'];
    }

    /**
    * Sets fullTableName
    *
    * @param string|null $fullTableName **参数解释**：  Excel导入成功的表全名。   **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setFullTableName($fullTableName)
    {
        $this->container['fullTableName'] = $fullTableName;
        return $this;
    }

    /**
    * Gets valid
    *  **参数解释**：  Excel信息是否合规。   **取值范围**：  - true：校验结果合规。 - false：校验结果不合规。
    *
    * @return bool|null
    */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
    * Sets valid
    *
    * @param bool|null $valid **参数解释**：  Excel信息是否合规。   **取值范围**：  - true：校验结果合规。 - false：校验结果不合规。
    *
    * @return $this
    */
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;
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

