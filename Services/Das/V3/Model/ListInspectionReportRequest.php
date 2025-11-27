<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInspectionReportRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInspectionReportRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    * healthRank  健康等级
    * sortField  排序字段
    * asc  排序顺序（true:正序, false:逆序）
    * offset  偏移量
    * limit  每页记录数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startAt' => 'int',
            'endAt' => 'int',
            'datastoreType' => 'string',
            'healthRank' => 'string',
            'sortField' => 'string',
            'asc' => 'bool',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    * healthRank  健康等级
    * sortField  排序字段
    * asc  排序顺序（true:正序, false:逆序）
    * offset  偏移量
    * limit  每页记录数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startAt' => 'int64',
        'endAt' => 'int64',
        'datastoreType' => null,
        'healthRank' => null,
        'sortField' => null,
        'asc' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    * healthRank  健康等级
    * sortField  排序字段
    * asc  排序顺序（true:正序, false:逆序）
    * offset  偏移量
    * limit  每页记录数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'datastoreType' => 'datastore_type',
            'healthRank' => 'health_rank',
            'sortField' => 'sort_field',
            'asc' => 'asc',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    * healthRank  健康等级
    * sortField  排序字段
    * asc  排序顺序（true:正序, false:逆序）
    * offset  偏移量
    * limit  每页记录数
    *
    * @var string[]
    */
    protected static $setters = [
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'datastoreType' => 'setDatastoreType',
            'healthRank' => 'setHealthRank',
            'sortField' => 'setSortField',
            'asc' => 'setAsc',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * datastoreType  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    * healthRank  健康等级
    * sortField  排序字段
    * asc  排序顺序（true:正序, false:逆序）
    * offset  偏移量
    * limit  每页记录数
    *
    * @var string[]
    */
    protected static $getters = [
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'datastoreType' => 'getDatastoreType',
            'healthRank' => 'getHealthRank',
            'sortField' => 'getSortField',
            'asc' => 'getAsc',
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
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['healthRank'] = isset($data['healthRank']) ? $data['healthRank'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
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
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
            if (($this->container['startAt'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'startAt', must be smaller than or equal to 253370736001000.";
            }
            if (($this->container['startAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'startAt', must be bigger than or equal to 0.";
            }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
            if (($this->container['endAt'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'endAt', must be smaller than or equal to 253370736001000.";
            }
            if (($this->container['endAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'endAt', must be bigger than or equal to 0.";
            }
        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
        }
            if ((mb_strlen($this->container['datastoreType']) > 64)) {
                $invalidProperties[] = "invalid value for 'datastoreType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['datastoreType']) < 1)) {
                $invalidProperties[] = "invalid value for 'datastoreType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['healthRank']) && (mb_strlen($this->container['healthRank']) > 32)) {
                $invalidProperties[] = "invalid value for 'healthRank', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['healthRank']) && (mb_strlen($this->container['healthRank']) < 1)) {
                $invalidProperties[] = "invalid value for 'healthRank', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortField']) && (mb_strlen($this->container['sortField']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortField', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortField']) && (mb_strlen($this->container['sortField']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortField', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 5000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    *  数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
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
    * @param string $datastoreType 数据库类型。支持MySQL、TaurusDB、GaussDB、MariaDB。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets healthRank
    *  健康等级
    *
    * @return string|null
    */
    public function getHealthRank()
    {
        return $this->container['healthRank'];
    }

    /**
    * Sets healthRank
    *
    * @param string|null $healthRank 健康等级
    *
    * @return $this
    */
    public function setHealthRank($healthRank)
    {
        $this->container['healthRank'] = $healthRank;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段
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
    * @param string|null $sortField 排序字段
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
    *  排序顺序（true:正序, false:逆序）
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
    * @param bool|null $asc 排序顺序（true:正序, false:逆序）
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
    *  偏移量
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
    * @param int|null $offset 偏移量
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
    *  每页记录数
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
    * @param int|null $limit 每页记录数
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

