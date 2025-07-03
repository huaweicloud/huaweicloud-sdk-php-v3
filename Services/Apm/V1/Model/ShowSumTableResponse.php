<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSumTableResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSumTableResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resultId  结果的ID信息，分页查询的时候带过来。
    * rowList  数据行列表。
    * latestDataTime  最近一笔数据的时间。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * realStartTime  实际开始的时间。
    * realEndTime  实际结束的时间。
    * noticeMsg  提示信息。
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resultId' => 'string',
            'rowList' => '\HuaweiCloud\SDK\Apm\V1\Model\FrontRow[]',
            'latestDataTime' => 'int',
            'tableDirection' => 'string',
            'realStartTime' => 'int',
            'realEndTime' => 'int',
            'noticeMsg' => 'string',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resultId  结果的ID信息，分页查询的时候带过来。
    * rowList  数据行列表。
    * latestDataTime  最近一笔数据的时间。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * realStartTime  实际开始的时间。
    * realEndTime  实际结束的时间。
    * noticeMsg  提示信息。
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resultId' => null,
        'rowList' => null,
        'latestDataTime' => 'int64',
        'tableDirection' => null,
        'realStartTime' => 'int64',
        'realEndTime' => 'int64',
        'noticeMsg' => null,
        'totalCount' => 'int32'
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
    * resultId  结果的ID信息，分页查询的时候带过来。
    * rowList  数据行列表。
    * latestDataTime  最近一笔数据的时间。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * realStartTime  实际开始的时间。
    * realEndTime  实际结束的时间。
    * noticeMsg  提示信息。
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resultId' => 'result_id',
            'rowList' => 'row_list',
            'latestDataTime' => 'latest_data_Time',
            'tableDirection' => 'table_direction',
            'realStartTime' => 'real_start_time',
            'realEndTime' => 'real_end_time',
            'noticeMsg' => 'notice_msg',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resultId  结果的ID信息，分页查询的时候带过来。
    * rowList  数据行列表。
    * latestDataTime  最近一笔数据的时间。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * realStartTime  实际开始的时间。
    * realEndTime  实际结束的时间。
    * noticeMsg  提示信息。
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'resultId' => 'setResultId',
            'rowList' => 'setRowList',
            'latestDataTime' => 'setLatestDataTime',
            'tableDirection' => 'setTableDirection',
            'realStartTime' => 'setRealStartTime',
            'realEndTime' => 'setRealEndTime',
            'noticeMsg' => 'setNoticeMsg',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resultId  结果的ID信息，分页查询的时候带过来。
    * rowList  数据行列表。
    * latestDataTime  最近一笔数据的时间。
    * tableDirection  表格的方向，H：默认，表头横向，V：表头纵向。
    * realStartTime  实际开始的时间。
    * realEndTime  实际结束的时间。
    * noticeMsg  提示信息。
    * totalCount  总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'resultId' => 'getResultId',
            'rowList' => 'getRowList',
            'latestDataTime' => 'getLatestDataTime',
            'tableDirection' => 'getTableDirection',
            'realStartTime' => 'getRealStartTime',
            'realEndTime' => 'getRealEndTime',
            'noticeMsg' => 'getNoticeMsg',
            'totalCount' => 'getTotalCount'
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
        $this->container['resultId'] = isset($data['resultId']) ? $data['resultId'] : null;
        $this->container['rowList'] = isset($data['rowList']) ? $data['rowList'] : null;
        $this->container['latestDataTime'] = isset($data['latestDataTime']) ? $data['latestDataTime'] : null;
        $this->container['tableDirection'] = isset($data['tableDirection']) ? $data['tableDirection'] : null;
        $this->container['realStartTime'] = isset($data['realStartTime']) ? $data['realStartTime'] : null;
        $this->container['realEndTime'] = isset($data['realEndTime']) ? $data['realEndTime'] : null;
        $this->container['noticeMsg'] = isset($data['noticeMsg']) ? $data['noticeMsg'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets resultId
    *  结果的ID信息，分页查询的时候带过来。
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
    * @param string|null $resultId 结果的ID信息，分页查询的时候带过来。
    *
    * @return $this
    */
    public function setResultId($resultId)
    {
        $this->container['resultId'] = $resultId;
        return $this;
    }

    /**
    * Gets rowList
    *  数据行列表。
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
    * @param \HuaweiCloud\SDK\Apm\V1\Model\FrontRow[]|null $rowList 数据行列表。
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
    * @return int|null
    */
    public function getLatestDataTime()
    {
        return $this->container['latestDataTime'];
    }

    /**
    * Sets latestDataTime
    *
    * @param int|null $latestDataTime 最近一笔数据的时间。
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
    * Gets realStartTime
    *  实际开始的时间。
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
    * @param int|null $realStartTime 实际开始的时间。
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
    * Gets noticeMsg
    *  提示信息。
    *
    * @return string|null
    */
    public function getNoticeMsg()
    {
        return $this->container['noticeMsg'];
    }

    /**
    * Sets noticeMsg
    *
    * @param string|null $noticeMsg 提示信息。
    *
    * @return $this
    */
    public function setNoticeMsg($noticeMsg)
    {
        $this->container['noticeMsg'] = $noticeMsg;
        return $this;
    }

    /**
    * Gets totalCount
    *  总数。
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
    * @param int|null $totalCount 总数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

