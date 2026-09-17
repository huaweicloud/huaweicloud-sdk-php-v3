<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSqlLimitingRecordResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSqlLimitingRecordResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlLimitingRecordList  SQL限流规则列表
    * total  SQL限流规则总数
    * canShowLimitCount  实例是否支持展示显示限流触发次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlLimitingRecordList' => '\HuaweiCloud\SDK\Das\V3\Model\SqlLimitingRecordInfo[]',
            'total' => 'int',
            'canShowLimitCount' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlLimitingRecordList  SQL限流规则列表
    * total  SQL限流规则总数
    * canShowLimitCount  实例是否支持展示显示限流触发次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlLimitingRecordList' => null,
        'total' => 'int32',
        'canShowLimitCount' => null
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
    * sqlLimitingRecordList  SQL限流规则列表
    * total  SQL限流规则总数
    * canShowLimitCount  实例是否支持展示显示限流触发次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlLimitingRecordList' => 'sql_limiting_record_list',
            'total' => 'total',
            'canShowLimitCount' => 'can_show_limit_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlLimitingRecordList  SQL限流规则列表
    * total  SQL限流规则总数
    * canShowLimitCount  实例是否支持展示显示限流触发次数
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlLimitingRecordList' => 'setSqlLimitingRecordList',
            'total' => 'setTotal',
            'canShowLimitCount' => 'setCanShowLimitCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlLimitingRecordList  SQL限流规则列表
    * total  SQL限流规则总数
    * canShowLimitCount  实例是否支持展示显示限流触发次数
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlLimitingRecordList' => 'getSqlLimitingRecordList',
            'total' => 'getTotal',
            'canShowLimitCount' => 'getCanShowLimitCount'
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
        $this->container['sqlLimitingRecordList'] = isset($data['sqlLimitingRecordList']) ? $data['sqlLimitingRecordList'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['canShowLimitCount'] = isset($data['canShowLimitCount']) ? $data['canShowLimitCount'] : null;
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
    * Gets sqlLimitingRecordList
    *  SQL限流规则列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SqlLimitingRecordInfo[]|null
    */
    public function getSqlLimitingRecordList()
    {
        return $this->container['sqlLimitingRecordList'];
    }

    /**
    * Sets sqlLimitingRecordList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SqlLimitingRecordInfo[]|null $sqlLimitingRecordList SQL限流规则列表
    *
    * @return $this
    */
    public function setSqlLimitingRecordList($sqlLimitingRecordList)
    {
        $this->container['sqlLimitingRecordList'] = $sqlLimitingRecordList;
        return $this;
    }

    /**
    * Gets total
    *  SQL限流规则总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total SQL限流规则总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets canShowLimitCount
    *  实例是否支持展示显示限流触发次数
    *
    * @return bool|null
    */
    public function getCanShowLimitCount()
    {
        return $this->container['canShowLimitCount'];
    }

    /**
    * Sets canShowLimitCount
    *
    * @param bool|null $canShowLimitCount 实例是否支持展示显示限流触发次数
    *
    * @return $this
    */
    public function setCanShowLimitCount($canShowLimitCount)
    {
        $this->container['canShowLimitCount'] = $canShowLimitCount;
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

