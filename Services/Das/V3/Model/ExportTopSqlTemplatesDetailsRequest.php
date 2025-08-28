<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportTopSqlTemplatesDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportTopSqlTemplatesDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。支持MySQL和GaussDB(for MySQL)。
    * nodeId  节点ID。
    * sort  排序字段（executeNum:执行次数, totalCost:总耗时, avgCost:平均耗时, totalScan: 总扫描行数, avgScan:平均扫描行数）。
    * asc  排序顺序（true:正序, false:逆序）。
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  每页记录数，默认为20，最大取值100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'datastoreType' => 'string',
            'nodeId' => 'string',
            'sort' => 'string',
            'asc' => 'bool',
            'offset' => 'int',
            'limit' => 'int',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。支持MySQL和GaussDB(for MySQL)。
    * nodeId  节点ID。
    * sort  排序字段（executeNum:执行次数, totalCost:总耗时, avgCost:平均耗时, totalScan: 总扫描行数, avgScan:平均扫描行数）。
    * asc  排序顺序（true:正序, false:逆序）。
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  每页记录数，默认为20，最大取值100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'datastoreType' => null,
        'nodeId' => null,
        'sort' => null,
        'asc' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'xLanguage' => null
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
    * instanceId  实例ID。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。支持MySQL和GaussDB(for MySQL)。
    * nodeId  节点ID。
    * sort  排序字段（executeNum:执行次数, totalCost:总耗时, avgCost:平均耗时, totalScan: 总扫描行数, avgScan:平均扫描行数）。
    * asc  排序顺序（true:正序, false:逆序）。
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  每页记录数，默认为20，最大取值100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'datastoreType' => 'datastore_type',
            'nodeId' => 'node_id',
            'sort' => 'sort',
            'asc' => 'asc',
            'offset' => 'offset',
            'limit' => 'limit',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。支持MySQL和GaussDB(for MySQL)。
    * nodeId  节点ID。
    * sort  排序字段（executeNum:执行次数, totalCost:总耗时, avgCost:平均耗时, totalScan: 总扫描行数, avgScan:平均扫描行数）。
    * asc  排序顺序（true:正序, false:逆序）。
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  每页记录数，默认为20，最大取值100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'datastoreType' => 'setDatastoreType',
            'nodeId' => 'setNodeId',
            'sort' => 'setSort',
            'asc' => 'setAsc',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。支持MySQL和GaussDB(for MySQL)。
    * nodeId  节点ID。
    * sort  排序字段（executeNum:执行次数, totalCost:总耗时, avgCost:平均耗时, totalScan: 总扫描行数, avgScan:平均扫描行数）。
    * asc  排序顺序（true:正序, false:逆序）。
    * offset  偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  每页记录数，默认为20，最大取值100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'datastoreType' => 'getDatastoreType',
            'nodeId' => 'getNodeId',
            'sort' => 'getSort',
            'asc' => 'getAsc',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'xLanguage' => 'getXLanguage'
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
    const SORT_EXECUTE_NUM = 'executeNum';
    const SORT_TOTAL_COST = 'totalCost';
    const SORT_AVG_COST = 'avgCost';
    const SORT_TOTAL_SCAN = 'totalScan';
    const SORT_AVG_SCAN = 'avgScan';
    const X_LANGUAGE_EN_US = 'en-us';
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortAllowableValues()
    {
        return [
            self::SORT_EXECUTE_NUM,
            self::SORT_TOTAL_COST,
            self::SORT_AVG_COST,
            self::SORT_TOTAL_SCAN,
            self::SORT_AVG_SCAN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_EN_US,
            self::X_LANGUAGE_ZH_CN,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
        }
            $allowedValues = $this->getSortAllowableValues();
                if (!is_null($this->container['sort']) && !in_array($this->container['sort'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sort', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
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
    * Gets instanceId
    *  实例ID。
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
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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
    * Gets datastoreType
    *  数据库类型。支持MySQL和GaussDB(for MySQL)。
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
    * @param string $datastoreType 数据库类型。支持MySQL和GaussDB(for MySQL)。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets sort
    *  排序字段（executeNum:执行次数, totalCost:总耗时, avgCost:平均耗时, totalScan: 总扫描行数, avgScan:平均扫描行数）。
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort 排序字段（executeNum:执行次数, totalCost:总耗时, avgCost:平均耗时, totalScan: 总扫描行数, avgScan:平均扫描行数）。
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets asc
    *  排序顺序（true:正序, false:逆序）。
    *
    * @return bool|null
    */
    public function getAsc()
    {
        return $this->container['asc'];
    }

    /**
    * Sets asc
    *
    * @param bool|null $asc 排序顺序（true:正序, false:逆序）。
    *
    * @return $this
    */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;
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
    * Gets xLanguage
    *  请求语言类型。
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
    * @param string|null $xLanguage 请求语言类型。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
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

