<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DbObjectInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DbObjectInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDbName  源数据库库名。
    * sourceSchemaName  源数据库模式名。
    * sourceTableName  源数据库表名。
    * targetDbName  目标数据库库名。
    * targetSchemaName  目标数据库模式名。
    * targetTableName  目标数据库表名。
    * hasColumnInfo  是否有列映射。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDbName' => 'string',
            'sourceSchemaName' => 'string',
            'sourceTableName' => 'string',
            'targetDbName' => 'string',
            'targetSchemaName' => 'string',
            'targetTableName' => 'string',
            'hasColumnInfo' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDbName  源数据库库名。
    * sourceSchemaName  源数据库模式名。
    * sourceTableName  源数据库表名。
    * targetDbName  目标数据库库名。
    * targetSchemaName  目标数据库模式名。
    * targetTableName  目标数据库表名。
    * hasColumnInfo  是否有列映射。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDbName' => null,
        'sourceSchemaName' => null,
        'sourceTableName' => null,
        'targetDbName' => null,
        'targetSchemaName' => null,
        'targetTableName' => null,
        'hasColumnInfo' => null
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
    * sourceDbName  源数据库库名。
    * sourceSchemaName  源数据库模式名。
    * sourceTableName  源数据库表名。
    * targetDbName  目标数据库库名。
    * targetSchemaName  目标数据库模式名。
    * targetTableName  目标数据库表名。
    * hasColumnInfo  是否有列映射。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDbName' => 'source_db_name',
            'sourceSchemaName' => 'source_schema_name',
            'sourceTableName' => 'source_table_name',
            'targetDbName' => 'target_db_name',
            'targetSchemaName' => 'target_schema_name',
            'targetTableName' => 'target_table_name',
            'hasColumnInfo' => 'has_column_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDbName  源数据库库名。
    * sourceSchemaName  源数据库模式名。
    * sourceTableName  源数据库表名。
    * targetDbName  目标数据库库名。
    * targetSchemaName  目标数据库模式名。
    * targetTableName  目标数据库表名。
    * hasColumnInfo  是否有列映射。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDbName' => 'setSourceDbName',
            'sourceSchemaName' => 'setSourceSchemaName',
            'sourceTableName' => 'setSourceTableName',
            'targetDbName' => 'setTargetDbName',
            'targetSchemaName' => 'setTargetSchemaName',
            'targetTableName' => 'setTargetTableName',
            'hasColumnInfo' => 'setHasColumnInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDbName  源数据库库名。
    * sourceSchemaName  源数据库模式名。
    * sourceTableName  源数据库表名。
    * targetDbName  目标数据库库名。
    * targetSchemaName  目标数据库模式名。
    * targetTableName  目标数据库表名。
    * hasColumnInfo  是否有列映射。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDbName' => 'getSourceDbName',
            'sourceSchemaName' => 'getSourceSchemaName',
            'sourceTableName' => 'getSourceTableName',
            'targetDbName' => 'getTargetDbName',
            'targetSchemaName' => 'getTargetSchemaName',
            'targetTableName' => 'getTargetTableName',
            'hasColumnInfo' => 'getHasColumnInfo'
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
        $this->container['sourceDbName'] = isset($data['sourceDbName']) ? $data['sourceDbName'] : null;
        $this->container['sourceSchemaName'] = isset($data['sourceSchemaName']) ? $data['sourceSchemaName'] : null;
        $this->container['sourceTableName'] = isset($data['sourceTableName']) ? $data['sourceTableName'] : null;
        $this->container['targetDbName'] = isset($data['targetDbName']) ? $data['targetDbName'] : null;
        $this->container['targetSchemaName'] = isset($data['targetSchemaName']) ? $data['targetSchemaName'] : null;
        $this->container['targetTableName'] = isset($data['targetTableName']) ? $data['targetTableName'] : null;
        $this->container['hasColumnInfo'] = isset($data['hasColumnInfo']) ? $data['hasColumnInfo'] : null;
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
    * Gets sourceDbName
    *  源数据库库名。
    *
    * @return string|null
    */
    public function getSourceDbName()
    {
        return $this->container['sourceDbName'];
    }

    /**
    * Sets sourceDbName
    *
    * @param string|null $sourceDbName 源数据库库名。
    *
    * @return $this
    */
    public function setSourceDbName($sourceDbName)
    {
        $this->container['sourceDbName'] = $sourceDbName;
        return $this;
    }

    /**
    * Gets sourceSchemaName
    *  源数据库模式名。
    *
    * @return string|null
    */
    public function getSourceSchemaName()
    {
        return $this->container['sourceSchemaName'];
    }

    /**
    * Sets sourceSchemaName
    *
    * @param string|null $sourceSchemaName 源数据库模式名。
    *
    * @return $this
    */
    public function setSourceSchemaName($sourceSchemaName)
    {
        $this->container['sourceSchemaName'] = $sourceSchemaName;
        return $this;
    }

    /**
    * Gets sourceTableName
    *  源数据库表名。
    *
    * @return string|null
    */
    public function getSourceTableName()
    {
        return $this->container['sourceTableName'];
    }

    /**
    * Sets sourceTableName
    *
    * @param string|null $sourceTableName 源数据库表名。
    *
    * @return $this
    */
    public function setSourceTableName($sourceTableName)
    {
        $this->container['sourceTableName'] = $sourceTableName;
        return $this;
    }

    /**
    * Gets targetDbName
    *  目标数据库库名。
    *
    * @return string|null
    */
    public function getTargetDbName()
    {
        return $this->container['targetDbName'];
    }

    /**
    * Sets targetDbName
    *
    * @param string|null $targetDbName 目标数据库库名。
    *
    * @return $this
    */
    public function setTargetDbName($targetDbName)
    {
        $this->container['targetDbName'] = $targetDbName;
        return $this;
    }

    /**
    * Gets targetSchemaName
    *  目标数据库模式名。
    *
    * @return string|null
    */
    public function getTargetSchemaName()
    {
        return $this->container['targetSchemaName'];
    }

    /**
    * Sets targetSchemaName
    *
    * @param string|null $targetSchemaName 目标数据库模式名。
    *
    * @return $this
    */
    public function setTargetSchemaName($targetSchemaName)
    {
        $this->container['targetSchemaName'] = $targetSchemaName;
        return $this;
    }

    /**
    * Gets targetTableName
    *  目标数据库表名。
    *
    * @return string|null
    */
    public function getTargetTableName()
    {
        return $this->container['targetTableName'];
    }

    /**
    * Sets targetTableName
    *
    * @param string|null $targetTableName 目标数据库表名。
    *
    * @return $this
    */
    public function setTargetTableName($targetTableName)
    {
        $this->container['targetTableName'] = $targetTableName;
        return $this;
    }

    /**
    * Gets hasColumnInfo
    *  是否有列映射。
    *
    * @return bool|null
    */
    public function getHasColumnInfo()
    {
        return $this->container['hasColumnInfo'];
    }

    /**
    * Sets hasColumnInfo
    *
    * @param bool|null $hasColumnInfo 是否有列映射。
    *
    * @return $this
    */
    public function setHasColumnInfo($hasColumnInfo)
    {
        $this->container['hasColumnInfo'] = $hasColumnInfo;
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

