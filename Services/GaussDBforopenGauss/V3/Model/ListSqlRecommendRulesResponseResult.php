<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSqlRecommendRulesResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSqlRecommendRulesResponseResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recommendType  **参数解释**: 推荐类型。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * sqlModel  **参数解释**: SQL模板。 **取值范围**: 不涉及。
    * sqlKeyword  **参数解释**: SQL关键字。 **取值范围**: 不涉及。
    * sqlType  **参数解释**: SQL类型。 **取值范围**: - SELECT - INSERT - UPDATE - DELETE - MERGE - OTHER
    * database  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * avgExecTime  **参数解释**: 平均执行时间。 **取值范围**: 不涉及。
    * maxExecTime  **参数解释**: 最长执行时间。 **取值范围**: 不涉及。
    * execCount  **参数解释**: 执行次数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recommendType' => 'string',
            'sqlId' => 'string',
            'sqlModel' => 'string',
            'sqlKeyword' => 'string',
            'sqlType' => 'string',
            'database' => 'string',
            'avgExecTime' => 'double',
            'maxExecTime' => 'double',
            'execCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recommendType  **参数解释**: 推荐类型。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * sqlModel  **参数解释**: SQL模板。 **取值范围**: 不涉及。
    * sqlKeyword  **参数解释**: SQL关键字。 **取值范围**: 不涉及。
    * sqlType  **参数解释**: SQL类型。 **取值范围**: - SELECT - INSERT - UPDATE - DELETE - MERGE - OTHER
    * database  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * avgExecTime  **参数解释**: 平均执行时间。 **取值范围**: 不涉及。
    * maxExecTime  **参数解释**: 最长执行时间。 **取值范围**: 不涉及。
    * execCount  **参数解释**: 执行次数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recommendType' => null,
        'sqlId' => null,
        'sqlModel' => null,
        'sqlKeyword' => null,
        'sqlType' => null,
        'database' => null,
        'avgExecTime' => 'double',
        'maxExecTime' => 'double',
        'execCount' => null
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
    * recommendType  **参数解释**: 推荐类型。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * sqlModel  **参数解释**: SQL模板。 **取值范围**: 不涉及。
    * sqlKeyword  **参数解释**: SQL关键字。 **取值范围**: 不涉及。
    * sqlType  **参数解释**: SQL类型。 **取值范围**: - SELECT - INSERT - UPDATE - DELETE - MERGE - OTHER
    * database  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * avgExecTime  **参数解释**: 平均执行时间。 **取值范围**: 不涉及。
    * maxExecTime  **参数解释**: 最长执行时间。 **取值范围**: 不涉及。
    * execCount  **参数解释**: 执行次数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recommendType' => 'recommend_type',
            'sqlId' => 'sql_id',
            'sqlModel' => 'sql_model',
            'sqlKeyword' => 'sql_keyword',
            'sqlType' => 'sql_type',
            'database' => 'database',
            'avgExecTime' => 'avg_exec_time',
            'maxExecTime' => 'max_exec_time',
            'execCount' => 'exec_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recommendType  **参数解释**: 推荐类型。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * sqlModel  **参数解释**: SQL模板。 **取值范围**: 不涉及。
    * sqlKeyword  **参数解释**: SQL关键字。 **取值范围**: 不涉及。
    * sqlType  **参数解释**: SQL类型。 **取值范围**: - SELECT - INSERT - UPDATE - DELETE - MERGE - OTHER
    * database  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * avgExecTime  **参数解释**: 平均执行时间。 **取值范围**: 不涉及。
    * maxExecTime  **参数解释**: 最长执行时间。 **取值范围**: 不涉及。
    * execCount  **参数解释**: 执行次数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'recommendType' => 'setRecommendType',
            'sqlId' => 'setSqlId',
            'sqlModel' => 'setSqlModel',
            'sqlKeyword' => 'setSqlKeyword',
            'sqlType' => 'setSqlType',
            'database' => 'setDatabase',
            'avgExecTime' => 'setAvgExecTime',
            'maxExecTime' => 'setMaxExecTime',
            'execCount' => 'setExecCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recommendType  **参数解释**: 推荐类型。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * sqlModel  **参数解释**: SQL模板。 **取值范围**: 不涉及。
    * sqlKeyword  **参数解释**: SQL关键字。 **取值范围**: 不涉及。
    * sqlType  **参数解释**: SQL类型。 **取值范围**: - SELECT - INSERT - UPDATE - DELETE - MERGE - OTHER
    * database  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * avgExecTime  **参数解释**: 平均执行时间。 **取值范围**: 不涉及。
    * maxExecTime  **参数解释**: 最长执行时间。 **取值范围**: 不涉及。
    * execCount  **参数解释**: 执行次数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'recommendType' => 'getRecommendType',
            'sqlId' => 'getSqlId',
            'sqlModel' => 'getSqlModel',
            'sqlKeyword' => 'getSqlKeyword',
            'sqlType' => 'getSqlType',
            'database' => 'getDatabase',
            'avgExecTime' => 'getAvgExecTime',
            'maxExecTime' => 'getMaxExecTime',
            'execCount' => 'getExecCount'
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
        $this->container['recommendType'] = isset($data['recommendType']) ? $data['recommendType'] : null;
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['sqlModel'] = isset($data['sqlModel']) ? $data['sqlModel'] : null;
        $this->container['sqlKeyword'] = isset($data['sqlKeyword']) ? $data['sqlKeyword'] : null;
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['avgExecTime'] = isset($data['avgExecTime']) ? $data['avgExecTime'] : null;
        $this->container['maxExecTime'] = isset($data['maxExecTime']) ? $data['maxExecTime'] : null;
        $this->container['execCount'] = isset($data['execCount']) ? $data['execCount'] : null;
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
    * Gets recommendType
    *  **参数解释**: 推荐类型。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间
    *
    * @return string|null
    */
    public function getRecommendType()
    {
        return $this->container['recommendType'];
    }

    /**
    * Sets recommendType
    *
    * @param string|null $recommendType **参数解释**: 推荐类型。 **取值范围**: - all：全部 - exec_count：执行次数 - avg_exec_time：平均执行时间 - max_exec_time：最大执行时间
    *
    * @return $this
    */
    public function setRecommendType($recommendType)
    {
        $this->container['recommendType'] = $recommendType;
        return $this;
    }

    /**
    * Gets sqlId
    *  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlId()
    {
        return $this->container['sqlId'];
    }

    /**
    * Sets sqlId
    *
    * @param string|null $sqlId **参数解释**: SQL ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlId($sqlId)
    {
        $this->container['sqlId'] = $sqlId;
        return $this;
    }

    /**
    * Gets sqlModel
    *  **参数解释**: SQL模板。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlModel()
    {
        return $this->container['sqlModel'];
    }

    /**
    * Sets sqlModel
    *
    * @param string|null $sqlModel **参数解释**: SQL模板。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlModel($sqlModel)
    {
        $this->container['sqlModel'] = $sqlModel;
        return $this;
    }

    /**
    * Gets sqlKeyword
    *  **参数解释**: SQL关键字。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlKeyword()
    {
        return $this->container['sqlKeyword'];
    }

    /**
    * Sets sqlKeyword
    *
    * @param string|null $sqlKeyword **参数解释**: SQL关键字。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlKeyword($sqlKeyword)
    {
        $this->container['sqlKeyword'] = $sqlKeyword;
        return $this;
    }

    /**
    * Gets sqlType
    *  **参数解释**: SQL类型。 **取值范围**: - SELECT - INSERT - UPDATE - DELETE - MERGE - OTHER
    *
    * @return string|null
    */
    public function getSqlType()
    {
        return $this->container['sqlType'];
    }

    /**
    * Sets sqlType
    *
    * @param string|null $sqlType **参数解释**: SQL类型。 **取值范围**: - SELECT - INSERT - UPDATE - DELETE - MERGE - OTHER
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets database
    *  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
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
    * @param string|null $database **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets avgExecTime
    *  **参数解释**: 平均执行时间。 **取值范围**: 不涉及。
    *
    * @return double|null
    */
    public function getAvgExecTime()
    {
        return $this->container['avgExecTime'];
    }

    /**
    * Sets avgExecTime
    *
    * @param double|null $avgExecTime **参数解释**: 平均执行时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAvgExecTime($avgExecTime)
    {
        $this->container['avgExecTime'] = $avgExecTime;
        return $this;
    }

    /**
    * Gets maxExecTime
    *  **参数解释**: 最长执行时间。 **取值范围**: 不涉及。
    *
    * @return double|null
    */
    public function getMaxExecTime()
    {
        return $this->container['maxExecTime'];
    }

    /**
    * Sets maxExecTime
    *
    * @param double|null $maxExecTime **参数解释**: 最长执行时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMaxExecTime($maxExecTime)
    {
        $this->container['maxExecTime'] = $maxExecTime;
        return $this;
    }

    /**
    * Gets execCount
    *  **参数解释**: 执行次数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getExecCount()
    {
        return $this->container['execCount'];
    }

    /**
    * Sets execCount
    *
    * @param int|null $execCount **参数解释**: 执行次数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setExecCount($execCount)
    {
        $this->container['execCount'] = $execCount;
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

