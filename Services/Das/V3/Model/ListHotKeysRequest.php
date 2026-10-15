<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHotKeysRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHotKeysRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * statType  统计维度。qps-按QPS，traffic-按流量
    * startAt  开始时间（毫秒时间戳）
    * endAt  结束时间（毫秒时间戳）
    * keyTypes  key类型过滤（多选）。取值：string、hash、list、zset、set、stream、exhash
    * keyName  key名称过滤（模糊匹配）
    * dbId  数据库ID过滤
    * offset  偏移量，默认0
    * limit  每页条数，默认20，最大1000
    * sortField  排序字段。qps/traffic_in/traffic_out，默认qps
    * asc  是否升序，默认false（降序）
    * xLanguage  请求语言类型。en-us：英文。zh-cn：中文。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'statType' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'keyTypes' => 'string[]',
            'keyName' => 'string',
            'dbId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortField' => 'string',
            'asc' => 'bool',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * statType  统计维度。qps-按QPS，traffic-按流量
    * startAt  开始时间（毫秒时间戳）
    * endAt  结束时间（毫秒时间戳）
    * keyTypes  key类型过滤（多选）。取值：string、hash、list、zset、set、stream、exhash
    * keyName  key名称过滤（模糊匹配）
    * dbId  数据库ID过滤
    * offset  偏移量，默认0
    * limit  每页条数，默认20，最大1000
    * sortField  排序字段。qps/traffic_in/traffic_out，默认qps
    * asc  是否升序，默认false（降序）
    * xLanguage  请求语言类型。en-us：英文。zh-cn：中文。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'statType' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'keyTypes' => null,
        'keyName' => null,
        'dbId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'sortField' => null,
        'asc' => null,
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
    * instanceId  实例ID
    * statType  统计维度。qps-按QPS，traffic-按流量
    * startAt  开始时间（毫秒时间戳）
    * endAt  结束时间（毫秒时间戳）
    * keyTypes  key类型过滤（多选）。取值：string、hash、list、zset、set、stream、exhash
    * keyName  key名称过滤（模糊匹配）
    * dbId  数据库ID过滤
    * offset  偏移量，默认0
    * limit  每页条数，默认20，最大1000
    * sortField  排序字段。qps/traffic_in/traffic_out，默认qps
    * asc  是否升序，默认false（降序）
    * xLanguage  请求语言类型。en-us：英文。zh-cn：中文。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'statType' => 'stat_type',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'keyTypes' => 'key_types',
            'keyName' => 'key_name',
            'dbId' => 'db_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortField' => 'sort_field',
            'asc' => 'asc',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * statType  统计维度。qps-按QPS，traffic-按流量
    * startAt  开始时间（毫秒时间戳）
    * endAt  结束时间（毫秒时间戳）
    * keyTypes  key类型过滤（多选）。取值：string、hash、list、zset、set、stream、exhash
    * keyName  key名称过滤（模糊匹配）
    * dbId  数据库ID过滤
    * offset  偏移量，默认0
    * limit  每页条数，默认20，最大1000
    * sortField  排序字段。qps/traffic_in/traffic_out，默认qps
    * asc  是否升序，默认false（降序）
    * xLanguage  请求语言类型。en-us：英文。zh-cn：中文。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'statType' => 'setStatType',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'keyTypes' => 'setKeyTypes',
            'keyName' => 'setKeyName',
            'dbId' => 'setDbId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortField' => 'setSortField',
            'asc' => 'setAsc',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * statType  统计维度。qps-按QPS，traffic-按流量
    * startAt  开始时间（毫秒时间戳）
    * endAt  结束时间（毫秒时间戳）
    * keyTypes  key类型过滤（多选）。取值：string、hash、list、zset、set、stream、exhash
    * keyName  key名称过滤（模糊匹配）
    * dbId  数据库ID过滤
    * offset  偏移量，默认0
    * limit  每页条数，默认20，最大1000
    * sortField  排序字段。qps/traffic_in/traffic_out，默认qps
    * asc  是否升序，默认false（降序）
    * xLanguage  请求语言类型。en-us：英文。zh-cn：中文。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'statType' => 'getStatType',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'keyTypes' => 'getKeyTypes',
            'keyName' => 'getKeyName',
            'dbId' => 'getDbId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortField' => 'getSortField',
            'asc' => 'getAsc',
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
    const STAT_TYPE_QPS = 'qps';
    const STAT_TYPE_TRAFFIC = 'traffic';
    const KEY_TYPES_STRING = 'string';
    const KEY_TYPES_HASH = 'hash';
    const KEY_TYPES__LIST = 'list';
    const KEY_TYPES_ZSET = 'zset';
    const KEY_TYPES_SET = 'set';
    const KEY_TYPES_STREAM = 'stream';
    const KEY_TYPES_EXHASH = 'exhash';
    const SORT_FIELD_QPS = 'qps';
    const SORT_FIELD_TRAFFIC_IN = 'traffic_in';
    const SORT_FIELD_TRAFFIC_OUT = 'traffic_out';
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatTypeAllowableValues()
    {
        return [
            self::STAT_TYPE_QPS,
            self::STAT_TYPE_TRAFFIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeyTypesAllowableValues()
    {
        return [
            self::KEY_TYPES_STRING,
            self::KEY_TYPES_HASH,
            self::KEY_TYPES__LIST,
            self::KEY_TYPES_ZSET,
            self::KEY_TYPES_SET,
            self::KEY_TYPES_STREAM,
            self::KEY_TYPES_EXHASH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortFieldAllowableValues()
    {
        return [
            self::SORT_FIELD_QPS,
            self::SORT_FIELD_TRAFFIC_IN,
            self::SORT_FIELD_TRAFFIC_OUT,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['statType'] = isset($data['statType']) ? $data['statType'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['keyTypes'] = isset($data['keyTypes']) ? $data['keyTypes'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
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
            if ((mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['statType'] === null) {
            $invalidProperties[] = "'statType' can't be null";
        }
            $allowedValues = $this->getStatTypeAllowableValues();
                if (!is_null($this->container['statType']) && !in_array($this->container['statType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'statType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
            if (($this->container['startAt'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'startAt', must be smaller than or equal to 9999999999999.";
            }
            if (($this->container['startAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'startAt', must be bigger than or equal to 0.";
            }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
            if (($this->container['endAt'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'endAt', must be smaller than or equal to 9999999999999.";
            }
            if (($this->container['endAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'endAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['keyName']) && (mb_strlen($this->container['keyName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'keyName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['keyName']) && (mb_strlen($this->container['keyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dbId']) && (mb_strlen($this->container['dbId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dbId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dbId']) && (mb_strlen($this->container['dbId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dbId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSortFieldAllowableValues();
                if (!is_null($this->container['sortField']) && !in_array($this->container['sortField'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortField', must be one of '%s'",
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
    *  实例ID
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
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets statType
    *  统计维度。qps-按QPS，traffic-按流量
    *
    * @return string
    */
    public function getStatType()
    {
        return $this->container['statType'];
    }

    /**
    * Sets statType
    *
    * @param string $statType 统计维度。qps-按QPS，traffic-按流量
    *
    * @return $this
    */
    public function setStatType($statType)
    {
        $this->container['statType'] = $statType;
        return $this;
    }

    /**
    * Gets startAt
    *  开始时间（毫秒时间戳）
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
    * @param int $startAt 开始时间（毫秒时间戳）
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
    *  结束时间（毫秒时间戳）
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
    * @param int $endAt 结束时间（毫秒时间戳）
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets keyTypes
    *  key类型过滤（多选）。取值：string、hash、list、zset、set、stream、exhash
    *
    * @return string[]|null
    */
    public function getKeyTypes()
    {
        return $this->container['keyTypes'];
    }

    /**
    * Sets keyTypes
    *
    * @param string[]|null $keyTypes key类型过滤（多选）。取值：string、hash、list、zset、set、stream、exhash
    *
    * @return $this
    */
    public function setKeyTypes($keyTypes)
    {
        $this->container['keyTypes'] = $keyTypes;
        return $this;
    }

    /**
    * Gets keyName
    *  key名称过滤（模糊匹配）
    *
    * @return string|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string|null $keyName key名称过滤（模糊匹配）
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets dbId
    *  数据库ID过滤
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
    * @param string|null $dbId 数据库ID过滤
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，默认0
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
    * @param int|null $offset 偏移量，默认0
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
    *  每页条数，默认20，最大1000
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
    * @param int|null $limit 每页条数，默认20，最大1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段。qps/traffic_in/traffic_out，默认qps
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段。qps/traffic_in/traffic_out，默认qps
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets asc
    *  是否升序，默认false（降序）
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
    * @param bool|null $asc 是否升序，默认false（降序）
    *
    * @return $this
    */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;
        return $this;
    }

    /**
    * Gets xLanguage
    *  请求语言类型。en-us：英文。zh-cn：中文。
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
    * @param string|null $xLanguage 请求语言类型。en-us：英文。zh-cn：中文。
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

