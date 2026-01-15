<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplaySlowSqlTemplateResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplaySlowSqlTemplateResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlTemplate  SQL语句模板
    * sqlTemplateMd5  SQL语句模板MD5
    * targetName  目标库别名
    * schemaName  schema名称
    * queryType  SQL类型 取值：SELECT, INSERT, DELETE, UPDATE, DDL
    * minLatency  SQL执行最小耗时
    * maxLatency  SQL执行最大耗时
    * avgLatency  SQL执行平均耗时
    * totalLatency  SQL执行总的耗时
    * targetType  目标库类型
    * count  SQL数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlTemplate' => 'string',
            'sqlTemplateMd5' => 'string',
            'targetName' => 'string',
            'schemaName' => 'string',
            'queryType' => 'string',
            'minLatency' => 'int',
            'maxLatency' => 'int',
            'avgLatency' => 'int',
            'totalLatency' => 'int',
            'targetType' => 'string',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlTemplate  SQL语句模板
    * sqlTemplateMd5  SQL语句模板MD5
    * targetName  目标库别名
    * schemaName  schema名称
    * queryType  SQL类型 取值：SELECT, INSERT, DELETE, UPDATE, DDL
    * minLatency  SQL执行最小耗时
    * maxLatency  SQL执行最大耗时
    * avgLatency  SQL执行平均耗时
    * totalLatency  SQL执行总的耗时
    * targetType  目标库类型
    * count  SQL数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlTemplate' => null,
        'sqlTemplateMd5' => null,
        'targetName' => null,
        'schemaName' => null,
        'queryType' => null,
        'minLatency' => 'int64',
        'maxLatency' => 'int64',
        'avgLatency' => 'int64',
        'totalLatency' => 'int64',
        'targetType' => null,
        'count' => 'int64'
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
    * sqlTemplate  SQL语句模板
    * sqlTemplateMd5  SQL语句模板MD5
    * targetName  目标库别名
    * schemaName  schema名称
    * queryType  SQL类型 取值：SELECT, INSERT, DELETE, UPDATE, DDL
    * minLatency  SQL执行最小耗时
    * maxLatency  SQL执行最大耗时
    * avgLatency  SQL执行平均耗时
    * totalLatency  SQL执行总的耗时
    * targetType  目标库类型
    * count  SQL数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlTemplate' => 'sql_template',
            'sqlTemplateMd5' => 'sql_template_md5',
            'targetName' => 'target_name',
            'schemaName' => 'schema_name',
            'queryType' => 'query_type',
            'minLatency' => 'min_latency',
            'maxLatency' => 'max_latency',
            'avgLatency' => 'avg_latency',
            'totalLatency' => 'total_latency',
            'targetType' => 'target_type',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlTemplate  SQL语句模板
    * sqlTemplateMd5  SQL语句模板MD5
    * targetName  目标库别名
    * schemaName  schema名称
    * queryType  SQL类型 取值：SELECT, INSERT, DELETE, UPDATE, DDL
    * minLatency  SQL执行最小耗时
    * maxLatency  SQL执行最大耗时
    * avgLatency  SQL执行平均耗时
    * totalLatency  SQL执行总的耗时
    * targetType  目标库类型
    * count  SQL数量
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlTemplate' => 'setSqlTemplate',
            'sqlTemplateMd5' => 'setSqlTemplateMd5',
            'targetName' => 'setTargetName',
            'schemaName' => 'setSchemaName',
            'queryType' => 'setQueryType',
            'minLatency' => 'setMinLatency',
            'maxLatency' => 'setMaxLatency',
            'avgLatency' => 'setAvgLatency',
            'totalLatency' => 'setTotalLatency',
            'targetType' => 'setTargetType',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlTemplate  SQL语句模板
    * sqlTemplateMd5  SQL语句模板MD5
    * targetName  目标库别名
    * schemaName  schema名称
    * queryType  SQL类型 取值：SELECT, INSERT, DELETE, UPDATE, DDL
    * minLatency  SQL执行最小耗时
    * maxLatency  SQL执行最大耗时
    * avgLatency  SQL执行平均耗时
    * totalLatency  SQL执行总的耗时
    * targetType  目标库类型
    * count  SQL数量
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlTemplate' => 'getSqlTemplate',
            'sqlTemplateMd5' => 'getSqlTemplateMd5',
            'targetName' => 'getTargetName',
            'schemaName' => 'getSchemaName',
            'queryType' => 'getQueryType',
            'minLatency' => 'getMinLatency',
            'maxLatency' => 'getMaxLatency',
            'avgLatency' => 'getAvgLatency',
            'totalLatency' => 'getTotalLatency',
            'targetType' => 'getTargetType',
            'count' => 'getCount'
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
        $this->container['sqlTemplate'] = isset($data['sqlTemplate']) ? $data['sqlTemplate'] : null;
        $this->container['sqlTemplateMd5'] = isset($data['sqlTemplateMd5']) ? $data['sqlTemplateMd5'] : null;
        $this->container['targetName'] = isset($data['targetName']) ? $data['targetName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['minLatency'] = isset($data['minLatency']) ? $data['minLatency'] : null;
        $this->container['maxLatency'] = isset($data['maxLatency']) ? $data['maxLatency'] : null;
        $this->container['avgLatency'] = isset($data['avgLatency']) ? $data['avgLatency'] : null;
        $this->container['totalLatency'] = isset($data['totalLatency']) ? $data['totalLatency'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sqlTemplate'] === null) {
            $invalidProperties[] = "'sqlTemplate' can't be null";
        }
        if ($this->container['avgLatency'] === null) {
            $invalidProperties[] = "'avgLatency' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
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
    * Gets sqlTemplate
    *  SQL语句模板
    *
    * @return string
    */
    public function getSqlTemplate()
    {
        return $this->container['sqlTemplate'];
    }

    /**
    * Sets sqlTemplate
    *
    * @param string $sqlTemplate SQL语句模板
    *
    * @return $this
    */
    public function setSqlTemplate($sqlTemplate)
    {
        $this->container['sqlTemplate'] = $sqlTemplate;
        return $this;
    }

    /**
    * Gets sqlTemplateMd5
    *  SQL语句模板MD5
    *
    * @return string|null
    */
    public function getSqlTemplateMd5()
    {
        return $this->container['sqlTemplateMd5'];
    }

    /**
    * Sets sqlTemplateMd5
    *
    * @param string|null $sqlTemplateMd5 SQL语句模板MD5
    *
    * @return $this
    */
    public function setSqlTemplateMd5($sqlTemplateMd5)
    {
        $this->container['sqlTemplateMd5'] = $sqlTemplateMd5;
        return $this;
    }

    /**
    * Gets targetName
    *  目标库别名
    *
    * @return string|null
    */
    public function getTargetName()
    {
        return $this->container['targetName'];
    }

    /**
    * Sets targetName
    *
    * @param string|null $targetName 目标库别名
    *
    * @return $this
    */
    public function setTargetName($targetName)
    {
        $this->container['targetName'] = $targetName;
        return $this;
    }

    /**
    * Gets schemaName
    *  schema名称
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
    * @param string|null $schemaName schema名称
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets queryType
    *  SQL类型 取值：SELECT, INSERT, DELETE, UPDATE, DDL
    *
    * @return string|null
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param string|null $queryType SQL类型 取值：SELECT, INSERT, DELETE, UPDATE, DDL
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets minLatency
    *  SQL执行最小耗时
    *
    * @return int|null
    */
    public function getMinLatency()
    {
        return $this->container['minLatency'];
    }

    /**
    * Sets minLatency
    *
    * @param int|null $minLatency SQL执行最小耗时
    *
    * @return $this
    */
    public function setMinLatency($minLatency)
    {
        $this->container['minLatency'] = $minLatency;
        return $this;
    }

    /**
    * Gets maxLatency
    *  SQL执行最大耗时
    *
    * @return int|null
    */
    public function getMaxLatency()
    {
        return $this->container['maxLatency'];
    }

    /**
    * Sets maxLatency
    *
    * @param int|null $maxLatency SQL执行最大耗时
    *
    * @return $this
    */
    public function setMaxLatency($maxLatency)
    {
        $this->container['maxLatency'] = $maxLatency;
        return $this;
    }

    /**
    * Gets avgLatency
    *  SQL执行平均耗时
    *
    * @return int
    */
    public function getAvgLatency()
    {
        return $this->container['avgLatency'];
    }

    /**
    * Sets avgLatency
    *
    * @param int $avgLatency SQL执行平均耗时
    *
    * @return $this
    */
    public function setAvgLatency($avgLatency)
    {
        $this->container['avgLatency'] = $avgLatency;
        return $this;
    }

    /**
    * Gets totalLatency
    *  SQL执行总的耗时
    *
    * @return int|null
    */
    public function getTotalLatency()
    {
        return $this->container['totalLatency'];
    }

    /**
    * Sets totalLatency
    *
    * @param int|null $totalLatency SQL执行总的耗时
    *
    * @return $this
    */
    public function setTotalLatency($totalLatency)
    {
        $this->container['totalLatency'] = $totalLatency;
        return $this;
    }

    /**
    * Gets targetType
    *  目标库类型
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType 目标库类型
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets count
    *  SQL数量
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count SQL数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

