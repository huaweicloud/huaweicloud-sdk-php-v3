<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecurityCheckConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecurityCheckConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  定时任务ID，前台只保存，不显示
    * status  体检状态，是否开启
    * checkPeriodType  体检周期类型：day-按天，week-按周
    * dayPeriod  按天的周期
    * weekPeriod  按周的周期,选中的日期放入此列表，取值包含：mon,tue,wed,thu,fri,sat,sun
    * hour  体检时间：小时
    * content  体检内容，取值包含：asset,vul,baseline,event
    * hostIdList  已选服务器ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'int',
            'status' => 'bool',
            'checkPeriodType' => 'string',
            'dayPeriod' => 'int',
            'weekPeriod' => 'string[]',
            'hour' => 'int',
            'content' => 'string[]',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  定时任务ID，前台只保存，不显示
    * status  体检状态，是否开启
    * checkPeriodType  体检周期类型：day-按天，week-按周
    * dayPeriod  按天的周期
    * weekPeriod  按周的周期,选中的日期放入此列表，取值包含：mon,tue,wed,thu,fri,sat,sun
    * hour  体检时间：小时
    * content  体检内容，取值包含：asset,vul,baseline,event
    * hostIdList  已选服务器ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => 'int64',
        'status' => null,
        'checkPeriodType' => null,
        'dayPeriod' => 'int32',
        'weekPeriod' => null,
        'hour' => 'int32',
        'content' => null,
        'hostIdList' => null
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
    * taskId  定时任务ID，前台只保存，不显示
    * status  体检状态，是否开启
    * checkPeriodType  体检周期类型：day-按天，week-按周
    * dayPeriod  按天的周期
    * weekPeriod  按周的周期,选中的日期放入此列表，取值包含：mon,tue,wed,thu,fri,sat,sun
    * hour  体检时间：小时
    * content  体检内容，取值包含：asset,vul,baseline,event
    * hostIdList  已选服务器ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'status' => 'status',
            'checkPeriodType' => 'check_period_type',
            'dayPeriod' => 'day_period',
            'weekPeriod' => 'week_period',
            'hour' => 'hour',
            'content' => 'content',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  定时任务ID，前台只保存，不显示
    * status  体检状态，是否开启
    * checkPeriodType  体检周期类型：day-按天，week-按周
    * dayPeriod  按天的周期
    * weekPeriod  按周的周期,选中的日期放入此列表，取值包含：mon,tue,wed,thu,fri,sat,sun
    * hour  体检时间：小时
    * content  体检内容，取值包含：asset,vul,baseline,event
    * hostIdList  已选服务器ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'checkPeriodType' => 'setCheckPeriodType',
            'dayPeriod' => 'setDayPeriod',
            'weekPeriod' => 'setWeekPeriod',
            'hour' => 'setHour',
            'content' => 'setContent',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  定时任务ID，前台只保存，不显示
    * status  体检状态，是否开启
    * checkPeriodType  体检周期类型：day-按天，week-按周
    * dayPeriod  按天的周期
    * weekPeriod  按周的周期,选中的日期放入此列表，取值包含：mon,tue,wed,thu,fri,sat,sun
    * hour  体检时间：小时
    * content  体检内容，取值包含：asset,vul,baseline,event
    * hostIdList  已选服务器ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'checkPeriodType' => 'getCheckPeriodType',
            'dayPeriod' => 'getDayPeriod',
            'weekPeriod' => 'getWeekPeriod',
            'hour' => 'getHour',
            'content' => 'getContent',
            'hostIdList' => 'getHostIdList'
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
    const CHECK_PERIOD_TYPE_DAY = 'day';
    const CHECK_PERIOD_TYPE_WEEK = 'week';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCheckPeriodTypeAllowableValues()
    {
        return [
            self::CHECK_PERIOD_TYPE_DAY,
            self::CHECK_PERIOD_TYPE_WEEK,
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['checkPeriodType'] = isset($data['checkPeriodType']) ? $data['checkPeriodType'] : null;
        $this->container['dayPeriod'] = isset($data['dayPeriod']) ? $data['dayPeriod'] : null;
        $this->container['weekPeriod'] = isset($data['weekPeriod']) ? $data['weekPeriod'] : null;
        $this->container['hour'] = isset($data['hour']) ? $data['hour'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCheckPeriodTypeAllowableValues();
                if (!is_null($this->container['checkPeriodType']) && !in_array($this->container['checkPeriodType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'checkPeriodType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['hour']) && ($this->container['hour'] > 24)) {
                $invalidProperties[] = "invalid value for 'hour', must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['hour']) && ($this->container['hour'] < 0)) {
                $invalidProperties[] = "invalid value for 'hour', must be bigger than or equal to 0.";
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
    * Gets taskId
    *  定时任务ID，前台只保存，不显示
    *
    * @return int|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param int|null $taskId 定时任务ID，前台只保存，不显示
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets status
    *  体检状态，是否开启
    *
    * @return bool|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool|null $status 体检状态，是否开启
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets checkPeriodType
    *  体检周期类型：day-按天，week-按周
    *
    * @return string|null
    */
    public function getCheckPeriodType()
    {
        return $this->container['checkPeriodType'];
    }

    /**
    * Sets checkPeriodType
    *
    * @param string|null $checkPeriodType 体检周期类型：day-按天，week-按周
    *
    * @return $this
    */
    public function setCheckPeriodType($checkPeriodType)
    {
        $this->container['checkPeriodType'] = $checkPeriodType;
        return $this;
    }

    /**
    * Gets dayPeriod
    *  按天的周期
    *
    * @return int|null
    */
    public function getDayPeriod()
    {
        return $this->container['dayPeriod'];
    }

    /**
    * Sets dayPeriod
    *
    * @param int|null $dayPeriod 按天的周期
    *
    * @return $this
    */
    public function setDayPeriod($dayPeriod)
    {
        $this->container['dayPeriod'] = $dayPeriod;
        return $this;
    }

    /**
    * Gets weekPeriod
    *  按周的周期,选中的日期放入此列表，取值包含：mon,tue,wed,thu,fri,sat,sun
    *
    * @return string[]|null
    */
    public function getWeekPeriod()
    {
        return $this->container['weekPeriod'];
    }

    /**
    * Sets weekPeriod
    *
    * @param string[]|null $weekPeriod 按周的周期,选中的日期放入此列表，取值包含：mon,tue,wed,thu,fri,sat,sun
    *
    * @return $this
    */
    public function setWeekPeriod($weekPeriod)
    {
        $this->container['weekPeriod'] = $weekPeriod;
        return $this;
    }

    /**
    * Gets hour
    *  体检时间：小时
    *
    * @return int|null
    */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
    * Sets hour
    *
    * @param int|null $hour 体检时间：小时
    *
    * @return $this
    */
    public function setHour($hour)
    {
        $this->container['hour'] = $hour;
        return $this;
    }

    /**
    * Gets content
    *  体检内容，取值包含：asset,vul,baseline,event
    *
    * @return string[]|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string[]|null $content 体检内容，取值包含：asset,vul,baseline,event
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets hostIdList
    *  已选服务器ID列表
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList 已选服务器ID列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

