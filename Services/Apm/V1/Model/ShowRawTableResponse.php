<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRawTableResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRawTableResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rowList  rowList
    * latestDataTime  最近一笔数据的时间。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * resultId  上次请求id。
    * realStartTime  实际开始的时间，主要用于下一次调用，特别是分页调用的时候传的参数。
    * realEndTime  实际结束的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rowList' => '\HuaweiCloud\SDK\Apm\V1\Model\FrontRow[]',
            'latestDataTime' => 'string',
            'tableDirection' => 'string',
            'resultId' => 'string',
            'realStartTime' => 'int',
            'realEndTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rowList  rowList
    * latestDataTime  最近一笔数据的时间。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * resultId  上次请求id。
    * realStartTime  实际开始的时间，主要用于下一次调用，特别是分页调用的时候传的参数。
    * realEndTime  实际结束的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rowList' => null,
        'latestDataTime' => null,
        'tableDirection' => null,
        'resultId' => null,
        'realStartTime' => 'int64',
        'realEndTime' => 'int64'
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
    * rowList  rowList
    * latestDataTime  最近一笔数据的时间。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * resultId  上次请求id。
    * realStartTime  实际开始的时间，主要用于下一次调用，特别是分页调用的时候传的参数。
    * realEndTime  实际结束的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rowList' => 'row_list',
            'latestDataTime' => 'latest_data_Time',
            'tableDirection' => 'table_direction',
            'resultId' => 'result_id',
            'realStartTime' => 'real_start_time',
            'realEndTime' => 'real_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rowList  rowList
    * latestDataTime  最近一笔数据的时间。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * resultId  上次请求id。
    * realStartTime  实际开始的时间，主要用于下一次调用，特别是分页调用的时候传的参数。
    * realEndTime  实际结束的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'rowList' => 'setRowList',
            'latestDataTime' => 'setLatestDataTime',
            'tableDirection' => 'setTableDirection',
            'resultId' => 'setResultId',
            'realStartTime' => 'setRealStartTime',
            'realEndTime' => 'setRealEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rowList  rowList
    * latestDataTime  最近一笔数据的时间。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * resultId  上次请求id。
    * realStartTime  实际开始的时间，主要用于下一次调用，特别是分页调用的时候传的参数。
    * realEndTime  实际结束的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'rowList' => 'getRowList',
            'latestDataTime' => 'getLatestDataTime',
            'tableDirection' => 'getTableDirection',
            'resultId' => 'getResultId',
            'realStartTime' => 'getRealStartTime',
            'realEndTime' => 'getRealEndTime'
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
    const TABLE_DIRECTION_H = 'H';
    const TABLE_DIRECTION_V = 'V';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTableDirectionAllowableValues()
    {
        return [
            self::TABLE_DIRECTION_H,
            self::TABLE_DIRECTION_V,
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
        $this->container['rowList'] = isset($data['rowList']) ? $data['rowList'] : null;
        $this->container['latestDataTime'] = isset($data['latestDataTime']) ? $data['latestDataTime'] : null;
        $this->container['tableDirection'] = isset($data['tableDirection']) ? $data['tableDirection'] : null;
        $this->container['resultId'] = isset($data['resultId']) ? $data['resultId'] : null;
        $this->container['realStartTime'] = isset($data['realStartTime']) ? $data['realStartTime'] : null;
        $this->container['realEndTime'] = isset($data['realEndTime']) ? $data['realEndTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTableDirectionAllowableValues();
                if (!is_null($this->container['tableDirection']) && !in_array($this->container['tableDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tableDirection', must be one of '%s'",
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
    * Gets rowList
    *  rowList
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\FrontRow[]|null
    */
    public function getRowList()
    {
        return $this->container['rowList'];
    }

    /**
    * Sets rowList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\FrontRow[]|null $rowList rowList
    *
    * @return $this
    */
    public function setRowList($rowList)
    {
        $this->container['rowList'] = $rowList;
        return $this;
    }

    /**
    * Gets latestDataTime
    *  最近一笔数据的时间。
    *
    * @return string|null
    */
    public function getLatestDataTime()
    {
        return $this->container['latestDataTime'];
    }

    /**
    * Sets latestDataTime
    *
    * @param string|null $latestDataTime 最近一笔数据的时间。
    *
    * @return $this
    */
    public function setLatestDataTime($latestDataTime)
    {
        $this->container['latestDataTime'] = $latestDataTime;
        return $this;
    }

    /**
    * Gets tableDirection
    *  表格的方向，H：默认，表头横向，V：表头纵向。
    *
    * @return string|null
    */
    public function getTableDirection()
    {
        return $this->container['tableDirection'];
    }

    /**
    * Sets tableDirection
    *
    * @param string|null $tableDirection 表格的方向，H：默认，表头横向，V：表头纵向。
    *
    * @return $this
    */
    public function setTableDirection($tableDirection)
    {
        $this->container['tableDirection'] = $tableDirection;
        return $this;
    }

    /**
    * Gets resultId
    *  上次请求id。
    *
    * @return string|null
    */
    public function getResultId()
    {
        return $this->container['resultId'];
    }

    /**
    * Sets resultId
    *
    * @param string|null $resultId 上次请求id。
    *
    * @return $this
    */
    public function setResultId($resultId)
    {
        $this->container['resultId'] = $resultId;
        return $this;
    }

    /**
    * Gets realStartTime
    *  实际开始的时间，主要用于下一次调用，特别是分页调用的时候传的参数。
    *
    * @return int|null
    */
    public function getRealStartTime()
    {
        return $this->container['realStartTime'];
    }

    /**
    * Sets realStartTime
    *
    * @param int|null $realStartTime 实际开始的时间，主要用于下一次调用，特别是分页调用的时候传的参数。
    *
    * @return $this
    */
    public function setRealStartTime($realStartTime)
    {
        $this->container['realStartTime'] = $realStartTime;
        return $this;
    }

    /**
    * Gets realEndTime
    *  实际结束的时间。
    *
    * @return int|null
    */
    public function getRealEndTime()
    {
        return $this->container['realEndTime'];
    }

    /**
    * Sets realEndTime
    *
    * @param int|null $realEndTime 实际结束的时间。
    *
    * @return $this
    */
    public function setRealEndTime($realEndTime)
    {
        $this->container['realEndTime'] = $realEndTime;
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

