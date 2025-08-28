<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportSlowSqlStatisticsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportSlowSqlStatisticsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastoreType  数据库类型。慢SQL统计支持的类型：DDS-Community。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * nodeIds  节点ID列表。
    * statisticsField  统计字段。支持统计的字段：node_id、sql_type、db_name、collection、user、client。默认使用node_id统计。
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  每页记录数，默认为20，最大取值100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastoreType' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'nodeIds' => 'string[]',
            'statisticsField' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastoreType  数据库类型。慢SQL统计支持的类型：DDS-Community。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * nodeIds  节点ID列表。
    * statisticsField  统计字段。支持统计的字段：node_id、sql_type、db_name、collection、user、client。默认使用node_id统计。
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  每页记录数，默认为20，最大取值100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastoreType' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'nodeIds' => null,
        'statisticsField' => null,
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
    * datastoreType  数据库类型。慢SQL统计支持的类型：DDS-Community。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * nodeIds  节点ID列表。
    * statisticsField  统计字段。支持统计的字段：node_id、sql_type、db_name、collection、user、client。默认使用node_id统计。
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  每页记录数，默认为20，最大取值100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastoreType' => 'datastore_type',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'nodeIds' => 'node_ids',
            'statisticsField' => 'statistics_field',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastoreType  数据库类型。慢SQL统计支持的类型：DDS-Community。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * nodeIds  节点ID列表。
    * statisticsField  统计字段。支持统计的字段：node_id、sql_type、db_name、collection、user、client。默认使用node_id统计。
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  每页记录数，默认为20，最大取值100。
    *
    * @var string[]
    */
    protected static $setters = [
            'datastoreType' => 'setDatastoreType',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'nodeIds' => 'setNodeIds',
            'statisticsField' => 'setStatisticsField',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastoreType  数据库类型。慢SQL统计支持的类型：DDS-Community。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * nodeIds  节点ID列表。
    * statisticsField  统计字段。支持统计的字段：node_id、sql_type、db_name、collection、user、client。默认使用node_id统计。
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  每页记录数，默认为20，最大取值100。
    *
    * @var string[]
    */
    protected static $getters = [
            'datastoreType' => 'getDatastoreType',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'nodeIds' => 'getNodeIds',
            'statisticsField' => 'getStatisticsField',
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
    const DATASTORE_TYPE_DDS_COMMUNITY = 'DDS-Community';
    const STATISTICS_FIELD_NODE_ID = 'node_id';
    const STATISTICS_FIELD_SQL_TYPE = 'sql_type';
    const STATISTICS_FIELD_DB_NAME = 'db_name';
    const STATISTICS_FIELD_COLLECTION = 'collection';
    const STATISTICS_FIELD_USER = 'user';
    const STATISTICS_FIELD_CLIENT = 'client';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatastoreTypeAllowableValues()
    {
        return [
            self::DATASTORE_TYPE_DDS_COMMUNITY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatisticsFieldAllowableValues()
    {
        return [
            self::STATISTICS_FIELD_NODE_ID,
            self::STATISTICS_FIELD_SQL_TYPE,
            self::STATISTICS_FIELD_DB_NAME,
            self::STATISTICS_FIELD_COLLECTION,
            self::STATISTICS_FIELD_USER,
            self::STATISTICS_FIELD_CLIENT,
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
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['nodeIds'] = isset($data['nodeIds']) ? $data['nodeIds'] : null;
        $this->container['statisticsField'] = isset($data['statisticsField']) ? $data['statisticsField'] : null;
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

        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
            $allowedValues = $this->getStatisticsFieldAllowableValues();
                if (!is_null($this->container['statisticsField']) && !in_array($this->container['statisticsField'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'statisticsField', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['offset']) && ($this->container['offset'] > 200)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    *  数据库类型。慢SQL统计支持的类型：DDS-Community。
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
    * @param string $datastoreType 数据库类型。慢SQL统计支持的类型：DDS-Community。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets startAt
    *  开始时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int $startAt 开始时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  结束时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int $endAt 结束时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets nodeIds
    *  节点ID列表。
    *
    * @return string[]|null
    */
    public function getNodeIds()
    {
        return $this->container['nodeIds'];
    }

    /**
    * Sets nodeIds
    *
    * @param string[]|null $nodeIds 节点ID列表。
    *
    * @return $this
    */
    public function setNodeIds($nodeIds)
    {
        $this->container['nodeIds'] = $nodeIds;
        return $this;
    }

    /**
    * Gets statisticsField
    *  统计字段。支持统计的字段：node_id、sql_type、db_name、collection、user、client。默认使用node_id统计。
    *
    * @return string|null
    */
    public function getStatisticsField()
    {
        return $this->container['statisticsField'];
    }

    /**
    * Sets statisticsField
    *
    * @param string|null $statisticsField 统计字段。支持统计的字段：node_id、sql_type、db_name、collection、user、client。默认使用node_id统计。
    *
    * @return $this
    */
    public function setStatisticsField($statisticsField)
    {
        $this->container['statisticsField'] = $statisticsField;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
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
    *  每页记录数，默认为20，最大取值100。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页记录数，默认为20，最大取值100。
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

