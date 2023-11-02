<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListColumnsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListColumnsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableId  表id
    * totalCount  当前表中字段记录数
    * columns  字段列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableId' => 'string',
            'totalCount' => 'int',
            'columns' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnsList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableId  表id
    * totalCount  当前表中字段记录数
    * columns  字段列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableId' => null,
        'totalCount' => null,
        'columns' => null
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
    * tableId  表id
    * totalCount  当前表中字段记录数
    * columns  字段列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableId' => 'table_id',
            'totalCount' => 'total_count',
            'columns' => 'columns'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableId  表id
    * totalCount  当前表中字段记录数
    * columns  字段列表
    *
    * @var string[]
    */
    protected static $setters = [
            'tableId' => 'setTableId',
            'totalCount' => 'setTotalCount',
            'columns' => 'setColumns'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableId  表id
    * totalCount  当前表中字段记录数
    * columns  字段列表
    *
    * @var string[]
    */
    protected static $getters = [
            'tableId' => 'getTableId',
            'totalCount' => 'getTotalCount',
            'columns' => 'getColumns'
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
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableId']) && (mb_strlen($this->container['tableId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be bigger than or equal to 0.";
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
    * Gets tableId
    *  表id
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 表id
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets totalCount
    *  当前表中字段记录数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 当前表中字段记录数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets columns
    *  字段列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnsList[]|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnsList[]|null $columns 字段列表
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
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

