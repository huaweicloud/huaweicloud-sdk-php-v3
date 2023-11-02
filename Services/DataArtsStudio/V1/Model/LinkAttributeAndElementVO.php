<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LinkAttributeAndElementVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LinkAttributeAndElementVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ids  属性id列表
    * standRowId  关联的数据标准的id
    * tableId  表id
    * bizType  表类型:维度、事实表、汇总表、业务表(默认)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ids' => 'int[]',
            'standRowId' => 'int',
            'tableId' => 'int',
            'bizType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ids  属性id列表
    * standRowId  关联的数据标准的id
    * tableId  表id
    * bizType  表类型:维度、事实表、汇总表、业务表(默认)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ids' => 'int64',
        'standRowId' => 'int64',
        'tableId' => 'int64',
        'bizType' => null
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
    * ids  属性id列表
    * standRowId  关联的数据标准的id
    * tableId  表id
    * bizType  表类型:维度、事实表、汇总表、业务表(默认)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ids' => 'ids',
            'standRowId' => 'stand_row_id',
            'tableId' => 'table_id',
            'bizType' => 'biz_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ids  属性id列表
    * standRowId  关联的数据标准的id
    * tableId  表id
    * bizType  表类型:维度、事实表、汇总表、业务表(默认)
    *
    * @var string[]
    */
    protected static $setters = [
            'ids' => 'setIds',
            'standRowId' => 'setStandRowId',
            'tableId' => 'setTableId',
            'bizType' => 'setBizType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ids  属性id列表
    * standRowId  关联的数据标准的id
    * tableId  表id
    * bizType  表类型:维度、事实表、汇总表、业务表(默认)
    *
    * @var string[]
    */
    protected static $getters = [
            'ids' => 'getIds',
            'standRowId' => 'getStandRowId',
            'tableId' => 'getTableId',
            'bizType' => 'getBizType'
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
    const BIZ_TYPE_TABLE_MODEL = 'TABLE_MODEL';
    const BIZ_TYPE_AGGREGATION_LOGIC_TABLE = 'AGGREGATION_LOGIC_TABLE';
    const BIZ_TYPE_FACT_LOGIC_TABLE = 'FACT_LOGIC_TABLE';
    const BIZ_TYPE_DIMENSION = 'DIMENSION';
    const BIZ_TYPE_DIMENSION_LOGIC_TABLE = 'DIMENSION_LOGIC_TABLE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBizTypeAllowableValues()
    {
        return [
            self::BIZ_TYPE_TABLE_MODEL,
            self::BIZ_TYPE_AGGREGATION_LOGIC_TABLE,
            self::BIZ_TYPE_FACT_LOGIC_TABLE,
            self::BIZ_TYPE_DIMENSION,
            self::BIZ_TYPE_DIMENSION_LOGIC_TABLE,
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
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['standRowId'] = isset($data['standRowId']) ? $data['standRowId'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ids'] === null) {
            $invalidProperties[] = "'ids' can't be null";
        }
        if ($this->container['standRowId'] === null) {
            $invalidProperties[] = "'standRowId' can't be null";
        }
        if ($this->container['tableId'] === null) {
            $invalidProperties[] = "'tableId' can't be null";
        }
        if ($this->container['bizType'] === null) {
            $invalidProperties[] = "'bizType' can't be null";
        }
            $allowedValues = $this->getBizTypeAllowableValues();
                if (!is_null($this->container['bizType']) && !in_array($this->container['bizType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bizType', must be one of '%s'",
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
    * Gets ids
    *  属性id列表
    *
    * @return int[]
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param int[] $ids 属性id列表
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets standRowId
    *  关联的数据标准的id
    *
    * @return int
    */
    public function getStandRowId()
    {
        return $this->container['standRowId'];
    }

    /**
    * Sets standRowId
    *
    * @param int $standRowId 关联的数据标准的id
    *
    * @return $this
    */
    public function setStandRowId($standRowId)
    {
        $this->container['standRowId'] = $standRowId;
        return $this;
    }

    /**
    * Gets tableId
    *  表id
    *
    * @return int
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param int $tableId 表id
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets bizType
    *  表类型:维度、事实表、汇总表、业务表(默认)
    *
    * @return string
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param string $bizType 表类型:维度、事实表、汇总表、业务表(默认)
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
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

