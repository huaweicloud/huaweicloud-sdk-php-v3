<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTableDefinitionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTableDefinitionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * databaseName  **参数解释** : 数据库名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    * schemaName  **参数解释** : schema名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    * tableName  **参数解释** : 表名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'databaseName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * databaseName  **参数解释** : 数据库名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    * schemaName  **参数解释** : schema名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    * tableName  **参数解释** : 表名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'databaseName' => null,
        'schemaName' => null,
        'tableName' => null
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
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * databaseName  **参数解释** : 数据库名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    * schemaName  **参数解释** : schema名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    * tableName  **参数解释** : 表名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * databaseName  **参数解释** : 数据库名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    * schemaName  **参数解释** : schema名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    * tableName  **参数解释** : 表名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * databaseName  **参数解释** : 数据库名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    * schemaName  **参数解释** : schema名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    * tableName  **参数解释** : 表名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'databaseName' => 'getDatabaseName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName'
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
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_ZH_CN,
            self::X_LANGUAGE_EN_US,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
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
    * Gets xLanguage
    *  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets databaseName
    *  **参数解释** : 数据库名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
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
    * @param string $databaseName **参数解释** : 数据库名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets schemaName
    *  **参数解释** : schema名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName **参数解释** : schema名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets tableName
    *  **参数解释** : 表名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName **参数解释** : 表名称。 **约束限制** : 不涉及。 **取值范围** : 只能由英文字母、数字组成，且长度为36个字符。 **默认取值** : 不涉及。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
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

