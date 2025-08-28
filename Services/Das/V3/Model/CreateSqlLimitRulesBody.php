<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSqlLimitRulesBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSqlLimitRulesBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastoreType  数据库类型
    * sqlLimitRules  需要创建的SQL限流规则列表，一次最多创建5个
    * databaseName  数据库名（PostgreSQL必填）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastoreType' => 'string',
            'sqlLimitRules' => '\HuaweiCloud\SDK\Das\V3\Model\CreateSqlLimitRuleOption[]',
            'databaseName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastoreType  数据库类型
    * sqlLimitRules  需要创建的SQL限流规则列表，一次最多创建5个
    * databaseName  数据库名（PostgreSQL必填）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastoreType' => null,
        'sqlLimitRules' => null,
        'databaseName' => null
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
    * datastoreType  数据库类型
    * sqlLimitRules  需要创建的SQL限流规则列表，一次最多创建5个
    * databaseName  数据库名（PostgreSQL必填）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastoreType' => 'datastore_type',
            'sqlLimitRules' => 'sql_limit_rules',
            'databaseName' => 'database_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastoreType  数据库类型
    * sqlLimitRules  需要创建的SQL限流规则列表，一次最多创建5个
    * databaseName  数据库名（PostgreSQL必填）
    *
    * @var string[]
    */
    protected static $setters = [
            'datastoreType' => 'setDatastoreType',
            'sqlLimitRules' => 'setSqlLimitRules',
            'databaseName' => 'setDatabaseName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastoreType  数据库类型
    * sqlLimitRules  需要创建的SQL限流规则列表，一次最多创建5个
    * databaseName  数据库名（PostgreSQL必填）
    *
    * @var string[]
    */
    protected static $getters = [
            'datastoreType' => 'getDatastoreType',
            'sqlLimitRules' => 'getSqlLimitRules',
            'databaseName' => 'getDatabaseName'
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
    const DATASTORE_TYPE_MY_SQL = 'MySQL';
    const DATASTORE_TYPE_POSTGRE_SQL = 'PostgreSQL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatastoreTypeAllowableValues()
    {
        return [
            self::DATASTORE_TYPE_MY_SQL,
            self::DATASTORE_TYPE_POSTGRE_SQL,
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
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['sqlLimitRules'] = isset($data['sqlLimitRules']) ? $data['sqlLimitRules'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
        }
            $allowedValues = $this->getDatastoreTypeAllowableValues();
                if (!is_null($this->container['datastoreType']) && !in_array($this->container['datastoreType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datastoreType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['sqlLimitRules'] === null) {
            $invalidProperties[] = "'sqlLimitRules' can't be null";
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
    * Gets datastoreType
    *  数据库类型
    *
    * @return string
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string $datastoreType 数据库类型
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets sqlLimitRules
    *  需要创建的SQL限流规则列表，一次最多创建5个
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\CreateSqlLimitRuleOption[]
    */
    public function getSqlLimitRules()
    {
        return $this->container['sqlLimitRules'];
    }

    /**
    * Sets sqlLimitRules
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\CreateSqlLimitRuleOption[] $sqlLimitRules 需要创建的SQL限流规则列表，一次最多创建5个
    *
    * @return $this
    */
    public function setSqlLimitRules($sqlLimitRules)
    {
        $this->container['sqlLimitRules'] = $sqlLimitRules;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名（PostgreSQL必填）
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
    * @param string|null $databaseName 数据库名（PostgreSQL必填）
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
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

