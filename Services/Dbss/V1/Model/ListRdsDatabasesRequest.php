<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRdsDatabasesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRdsDatabasesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbType  **参数解释**： 数据库类型 **约束限制**： 区分大小写，只能传递取值范围内的值 **取值范围**：   - MYSQL   - ORACLE   - POSTGRESQL   - SQLSERVER   - DAMENG   - TAURUS   - DWS   - KINGBASE   - MARIADB   - GAUSSDBOPENGAUSS **默认取值**： 不涉及
    * offset  **参数解释**： 分页偏移量，从第一条数据偏移offset条数据后开始查询 **约束限制**： 仅支持大于等于0的整数 **取值范围**： 大于等于0 **默认取值**： 默认值为0
    * limit  **参数解释**： 每页查询记录数。 **约束限制**： 仅支持大于0的整数 **取值范围**： 大于0小于等于10000 **默认取值**： 默认值为100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbType' => 'string',
            'offset' => 'string',
            'limit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbType  **参数解释**： 数据库类型 **约束限制**： 区分大小写，只能传递取值范围内的值 **取值范围**：   - MYSQL   - ORACLE   - POSTGRESQL   - SQLSERVER   - DAMENG   - TAURUS   - DWS   - KINGBASE   - MARIADB   - GAUSSDBOPENGAUSS **默认取值**： 不涉及
    * offset  **参数解释**： 分页偏移量，从第一条数据偏移offset条数据后开始查询 **约束限制**： 仅支持大于等于0的整数 **取值范围**： 大于等于0 **默认取值**： 默认值为0
    * limit  **参数解释**： 每页查询记录数。 **约束限制**： 仅支持大于0的整数 **取值范围**： 大于0小于等于10000 **默认取值**： 默认值为100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbType' => null,
        'offset' => null,
        'limit' => null
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
    * dbType  **参数解释**： 数据库类型 **约束限制**： 区分大小写，只能传递取值范围内的值 **取值范围**：   - MYSQL   - ORACLE   - POSTGRESQL   - SQLSERVER   - DAMENG   - TAURUS   - DWS   - KINGBASE   - MARIADB   - GAUSSDBOPENGAUSS **默认取值**： 不涉及
    * offset  **参数解释**： 分页偏移量，从第一条数据偏移offset条数据后开始查询 **约束限制**： 仅支持大于等于0的整数 **取值范围**： 大于等于0 **默认取值**： 默认值为0
    * limit  **参数解释**： 每页查询记录数。 **约束限制**： 仅支持大于0的整数 **取值范围**： 大于0小于等于10000 **默认取值**： 默认值为100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbType' => 'db_type',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbType  **参数解释**： 数据库类型 **约束限制**： 区分大小写，只能传递取值范围内的值 **取值范围**：   - MYSQL   - ORACLE   - POSTGRESQL   - SQLSERVER   - DAMENG   - TAURUS   - DWS   - KINGBASE   - MARIADB   - GAUSSDBOPENGAUSS **默认取值**： 不涉及
    * offset  **参数解释**： 分页偏移量，从第一条数据偏移offset条数据后开始查询 **约束限制**： 仅支持大于等于0的整数 **取值范围**： 大于等于0 **默认取值**： 默认值为0
    * limit  **参数解释**： 每页查询记录数。 **约束限制**： 仅支持大于0的整数 **取值范围**： 大于0小于等于10000 **默认取值**： 默认值为100
    *
    * @var string[]
    */
    protected static $setters = [
            'dbType' => 'setDbType',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbType  **参数解释**： 数据库类型 **约束限制**： 区分大小写，只能传递取值范围内的值 **取值范围**：   - MYSQL   - ORACLE   - POSTGRESQL   - SQLSERVER   - DAMENG   - TAURUS   - DWS   - KINGBASE   - MARIADB   - GAUSSDBOPENGAUSS **默认取值**： 不涉及
    * offset  **参数解释**： 分页偏移量，从第一条数据偏移offset条数据后开始查询 **约束限制**： 仅支持大于等于0的整数 **取值范围**： 大于等于0 **默认取值**： 默认值为0
    * limit  **参数解释**： 每页查询记录数。 **约束限制**： 仅支持大于0的整数 **取值范围**： 大于0小于等于10000 **默认取值**： 默认值为100
    *
    * @var string[]
    */
    protected static $getters = [
            'dbType' => 'getDbType',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const DB_TYPE_MYSQL = 'MYSQL';
    const DB_TYPE_ORACLE = 'ORACLE';
    const DB_TYPE_POSTGRESQL = 'POSTGRESQL';
    const DB_TYPE_SQLSERVER = 'SQLSERVER';
    const DB_TYPE_DAMENG = 'DAMENG';
    const DB_TYPE_TAURUS = 'TAURUS';
    const DB_TYPE_DWS = 'DWS';
    const DB_TYPE_KINGBASE = 'KINGBASE';
    const DB_TYPE_MARIADB = 'MARIADB';
    const DB_TYPE_GAUSSDBOPENGAUSS = 'GAUSSDBOPENGAUSS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbTypeAllowableValues()
    {
        return [
            self::DB_TYPE_MYSQL,
            self::DB_TYPE_ORACLE,
            self::DB_TYPE_POSTGRESQL,
            self::DB_TYPE_SQLSERVER,
            self::DB_TYPE_DAMENG,
            self::DB_TYPE_TAURUS,
            self::DB_TYPE_DWS,
            self::DB_TYPE_KINGBASE,
            self::DB_TYPE_MARIADB,
            self::DB_TYPE_GAUSSDBOPENGAUSS,
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
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbType'] === null) {
            $invalidProperties[] = "'dbType' can't be null";
        }
            $allowedValues = $this->getDbTypeAllowableValues();
                if (!is_null($this->container['dbType']) && !in_array($this->container['dbType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets dbType
    *  **参数解释**： 数据库类型 **约束限制**： 区分大小写，只能传递取值范围内的值 **取值范围**：   - MYSQL   - ORACLE   - POSTGRESQL   - SQLSERVER   - DAMENG   - TAURUS   - DWS   - KINGBASE   - MARIADB   - GAUSSDBOPENGAUSS **默认取值**： 不涉及
    *
    * @return string
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string $dbType **参数解释**： 数据库类型 **约束限制**： 区分大小写，只能传递取值范围内的值 **取值范围**：   - MYSQL   - ORACLE   - POSTGRESQL   - SQLSERVER   - DAMENG   - TAURUS   - DWS   - KINGBASE   - MARIADB   - GAUSSDBOPENGAUSS **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 分页偏移量，从第一条数据偏移offset条数据后开始查询 **约束限制**： 仅支持大于等于0的整数 **取值范围**： 大于等于0 **默认取值**： 默认值为0
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset **参数解释**： 分页偏移量，从第一条数据偏移offset条数据后开始查询 **约束限制**： 仅支持大于等于0的整数 **取值范围**： 大于等于0 **默认取值**： 默认值为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 每页查询记录数。 **约束限制**： 仅支持大于0的整数 **取值范围**： 大于0小于等于10000 **默认取值**： 默认值为100
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit **参数解释**： 每页查询记录数。 **约束限制**： 仅支持大于0的整数 **取值范围**： 大于0小于等于10000 **默认取值**： 默认值为100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

