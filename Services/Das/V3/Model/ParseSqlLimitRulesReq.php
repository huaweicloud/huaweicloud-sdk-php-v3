<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParseSqlLimitRulesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParseSqlLimitRulesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastoreType  数据库类型，目前支持MySQL、MariaDB、GaussDB(for MySQL)三种引擎。
    * originalSql  原始SQL语句
    * useTemplate  是否校验SQL语句
    * keepOperators  是否保留操作符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastoreType' => 'string',
            'originalSql' => 'string',
            'useTemplate' => 'bool',
            'keepOperators' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastoreType  数据库类型，目前支持MySQL、MariaDB、GaussDB(for MySQL)三种引擎。
    * originalSql  原始SQL语句
    * useTemplate  是否校验SQL语句
    * keepOperators  是否保留操作符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastoreType' => null,
        'originalSql' => null,
        'useTemplate' => null,
        'keepOperators' => null
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
    * datastoreType  数据库类型，目前支持MySQL、MariaDB、GaussDB(for MySQL)三种引擎。
    * originalSql  原始SQL语句
    * useTemplate  是否校验SQL语句
    * keepOperators  是否保留操作符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastoreType' => 'datastore_type',
            'originalSql' => 'original_sql',
            'useTemplate' => 'use_template',
            'keepOperators' => 'keep_operators'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastoreType  数据库类型，目前支持MySQL、MariaDB、GaussDB(for MySQL)三种引擎。
    * originalSql  原始SQL语句
    * useTemplate  是否校验SQL语句
    * keepOperators  是否保留操作符
    *
    * @var string[]
    */
    protected static $setters = [
            'datastoreType' => 'setDatastoreType',
            'originalSql' => 'setOriginalSql',
            'useTemplate' => 'setUseTemplate',
            'keepOperators' => 'setKeepOperators'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastoreType  数据库类型，目前支持MySQL、MariaDB、GaussDB(for MySQL)三种引擎。
    * originalSql  原始SQL语句
    * useTemplate  是否校验SQL语句
    * keepOperators  是否保留操作符
    *
    * @var string[]
    */
    protected static $getters = [
            'datastoreType' => 'getDatastoreType',
            'originalSql' => 'getOriginalSql',
            'useTemplate' => 'getUseTemplate',
            'keepOperators' => 'getKeepOperators'
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
    const DATASTORE_TYPE_MARIA_DB = 'MariaDB';
    const DATASTORE_TYPE_GAUSS_DB_FOR_MY_SQL = 'GaussDB(for MySQL)';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatastoreTypeAllowableValues()
    {
        return [
            self::DATASTORE_TYPE_MY_SQL,
            self::DATASTORE_TYPE_MARIA_DB,
            self::DATASTORE_TYPE_GAUSS_DB_FOR_MY_SQL,
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
        $this->container['originalSql'] = isset($data['originalSql']) ? $data['originalSql'] : null;
        $this->container['useTemplate'] = isset($data['useTemplate']) ? $data['useTemplate'] : null;
        $this->container['keepOperators'] = isset($data['keepOperators']) ? $data['keepOperators'] : null;
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

        if ($this->container['originalSql'] === null) {
            $invalidProperties[] = "'originalSql' can't be null";
        }
            if ((mb_strlen($this->container['originalSql']) > 1024)) {
                $invalidProperties[] = "invalid value for 'originalSql', the character length must be smaller than or equal to 1024.";
            }
        if ($this->container['useTemplate'] === null) {
            $invalidProperties[] = "'useTemplate' can't be null";
        }
        if ($this->container['keepOperators'] === null) {
            $invalidProperties[] = "'keepOperators' can't be null";
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
    *  数据库类型，目前支持MySQL、MariaDB、GaussDB(for MySQL)三种引擎。
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
    * @param string $datastoreType 数据库类型，目前支持MySQL、MariaDB、GaussDB(for MySQL)三种引擎。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets originalSql
    *  原始SQL语句
    *
    * @return string
    */
    public function getOriginalSql()
    {
        return $this->container['originalSql'];
    }

    /**
    * Sets originalSql
    *
    * @param string $originalSql 原始SQL语句
    *
    * @return $this
    */
    public function setOriginalSql($originalSql)
    {
        $this->container['originalSql'] = $originalSql;
        return $this;
    }

    /**
    * Gets useTemplate
    *  是否校验SQL语句
    *
    * @return bool
    */
    public function getUseTemplate()
    {
        return $this->container['useTemplate'];
    }

    /**
    * Sets useTemplate
    *
    * @param bool $useTemplate 是否校验SQL语句
    *
    * @return $this
    */
    public function setUseTemplate($useTemplate)
    {
        $this->container['useTemplate'] = $useTemplate;
        return $this;
    }

    /**
    * Gets keepOperators
    *  是否保留操作符
    *
    * @return bool
    */
    public function getKeepOperators()
    {
        return $this->container['keepOperators'];
    }

    /**
    * Sets keepOperators
    *
    * @param bool $keepOperators 是否保留操作符
    *
    * @return $this
    */
    public function setKeepOperators($keepOperators)
    {
        $this->container['keepOperators'] = $keepOperators;
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

