<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrendStatusResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrendStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbId  数据库ID
    * dbName  数据库名称
    * generateTime  生成时间
    * statisticsType  统计类型  - RISK: 风险  - SESSION：SESSION  - SQL: SQL  - COUNT: 数量  - INJECTION：注入 - OPERATION: 操作
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbId' => 'string',
            'dbName' => 'string',
            'generateTime' => 'string',
            'statisticsType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbId  数据库ID
    * dbName  数据库名称
    * generateTime  生成时间
    * statisticsType  统计类型  - RISK: 风险  - SESSION：SESSION  - SQL: SQL  - COUNT: 数量  - INJECTION：注入 - OPERATION: 操作
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbId' => null,
        'dbName' => null,
        'generateTime' => null,
        'statisticsType' => null
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
    * dbId  数据库ID
    * dbName  数据库名称
    * generateTime  生成时间
    * statisticsType  统计类型  - RISK: 风险  - SESSION：SESSION  - SQL: SQL  - COUNT: 数量  - INJECTION：注入 - OPERATION: 操作
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbId' => 'db_id',
            'dbName' => 'db_name',
            'generateTime' => 'generate_time',
            'statisticsType' => 'statistics_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbId  数据库ID
    * dbName  数据库名称
    * generateTime  生成时间
    * statisticsType  统计类型  - RISK: 风险  - SESSION：SESSION  - SQL: SQL  - COUNT: 数量  - INJECTION：注入 - OPERATION: 操作
    *
    * @var string[]
    */
    protected static $setters = [
            'dbId' => 'setDbId',
            'dbName' => 'setDbName',
            'generateTime' => 'setGenerateTime',
            'statisticsType' => 'setStatisticsType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbId  数据库ID
    * dbName  数据库名称
    * generateTime  生成时间
    * statisticsType  统计类型  - RISK: 风险  - SESSION：SESSION  - SQL: SQL  - COUNT: 数量  - INJECTION：注入 - OPERATION: 操作
    *
    * @var string[]
    */
    protected static $getters = [
            'dbId' => 'getDbId',
            'dbName' => 'getDbName',
            'generateTime' => 'getGenerateTime',
            'statisticsType' => 'getStatisticsType'
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
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['generateTime'] = isset($data['generateTime']) ? $data['generateTime'] : null;
        $this->container['statisticsType'] = isset($data['statisticsType']) ? $data['statisticsType'] : null;
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
    * Gets dbId
    *  数据库ID
    *
    * @return string|null
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param string|null $dbId 数据库ID
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
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
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets generateTime
    *  生成时间
    *
    * @return string|null
    */
    public function getGenerateTime()
    {
        return $this->container['generateTime'];
    }

    /**
    * Sets generateTime
    *
    * @param string|null $generateTime 生成时间
    *
    * @return $this
    */
    public function setGenerateTime($generateTime)
    {
        $this->container['generateTime'] = $generateTime;
        return $this;
    }

    /**
    * Gets statisticsType
    *  统计类型  - RISK: 风险  - SESSION：SESSION  - SQL: SQL  - COUNT: 数量  - INJECTION：注入 - OPERATION: 操作
    *
    * @return string|null
    */
    public function getStatisticsType()
    {
        return $this->container['statisticsType'];
    }

    /**
    * Sets statisticsType
    *
    * @param string|null $statisticsType 统计类型  - RISK: 风险  - SESSION：SESSION  - SQL: SQL  - COUNT: 数量  - INJECTION：注入 - OPERATION: 操作
    *
    * @return $this
    */
    public function setStatisticsType($statisticsType)
    {
        $this->container['statisticsType'] = $statisticsType;
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

