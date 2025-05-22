<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProjectWorkHoursRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProjectWorkHoursRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectIds  查询的项目id列表
    * userIds  查询的用户id列表
    * workHoursTypes  工时类型，以逗号分隔,21:研发设计,22:后端开发,23:前端开发(Web),24:前端开发(小程序),25:前端开发(App),26:测试验证,27:缺陷修复,28:UI设计,29:会议,30:公共事务,31:培训,32:研究,33:其它,34:调休请假
    * workHoursDates  工时日期，以逗号分隔，年-月-日
    * beginTime  工时开始日期，年-月-日
    * endTime  工时结束日期，年-月-日
    * offset  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    * limit  每页显示数量，每页最多显示100条
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectIds' => 'string[]',
            'userIds' => 'string[]',
            'workHoursTypes' => 'string',
            'workHoursDates' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectIds  查询的项目id列表
    * userIds  查询的用户id列表
    * workHoursTypes  工时类型，以逗号分隔,21:研发设计,22:后端开发,23:前端开发(Web),24:前端开发(小程序),25:前端开发(App),26:测试验证,27:缺陷修复,28:UI设计,29:会议,30:公共事务,31:培训,32:研究,33:其它,34:调休请假
    * workHoursDates  工时日期，以逗号分隔，年-月-日
    * beginTime  工时开始日期，年-月-日
    * endTime  工时结束日期，年-月-日
    * offset  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    * limit  每页显示数量，每页最多显示100条
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectIds' => null,
        'userIds' => null,
        'workHoursTypes' => null,
        'workHoursDates' => null,
        'beginTime' => null,
        'endTime' => null,
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
    * projectIds  查询的项目id列表
    * userIds  查询的用户id列表
    * workHoursTypes  工时类型，以逗号分隔,21:研发设计,22:后端开发,23:前端开发(Web),24:前端开发(小程序),25:前端开发(App),26:测试验证,27:缺陷修复,28:UI设计,29:会议,30:公共事务,31:培训,32:研究,33:其它,34:调休请假
    * workHoursDates  工时日期，以逗号分隔，年-月-日
    * beginTime  工时开始日期，年-月-日
    * endTime  工时结束日期，年-月-日
    * offset  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    * limit  每页显示数量，每页最多显示100条
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectIds' => 'project_ids',
            'userIds' => 'user_ids',
            'workHoursTypes' => 'work_hours_types',
            'workHoursDates' => 'work_hours_dates',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectIds  查询的项目id列表
    * userIds  查询的用户id列表
    * workHoursTypes  工时类型，以逗号分隔,21:研发设计,22:后端开发,23:前端开发(Web),24:前端开发(小程序),25:前端开发(App),26:测试验证,27:缺陷修复,28:UI设计,29:会议,30:公共事务,31:培训,32:研究,33:其它,34:调休请假
    * workHoursDates  工时日期，以逗号分隔，年-月-日
    * beginTime  工时开始日期，年-月-日
    * endTime  工时结束日期，年-月-日
    * offset  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    * limit  每页显示数量，每页最多显示100条
    *
    * @var string[]
    */
    protected static $setters = [
            'projectIds' => 'setProjectIds',
            'userIds' => 'setUserIds',
            'workHoursTypes' => 'setWorkHoursTypes',
            'workHoursDates' => 'setWorkHoursDates',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectIds  查询的项目id列表
    * userIds  查询的用户id列表
    * workHoursTypes  工时类型，以逗号分隔,21:研发设计,22:后端开发,23:前端开发(Web),24:前端开发(小程序),25:前端开发(App),26:测试验证,27:缺陷修复,28:UI设计,29:会议,30:公共事务,31:培训,32:研究,33:其它,34:调休请假
    * workHoursDates  工时日期，以逗号分隔，年-月-日
    * beginTime  工时开始日期，年-月-日
    * endTime  工时结束日期，年-月-日
    * offset  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    * limit  每页显示数量，每页最多显示100条
    *
    * @var string[]
    */
    protected static $getters = [
            'projectIds' => 'getProjectIds',
            'userIds' => 'getUserIds',
            'workHoursTypes' => 'getWorkHoursTypes',
            'workHoursDates' => 'getWorkHoursDates',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
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
        $this->container['projectIds'] = isset($data['projectIds']) ? $data['projectIds'] : null;
        $this->container['userIds'] = isset($data['userIds']) ? $data['userIds'] : null;
        $this->container['workHoursTypes'] = isset($data['workHoursTypes']) ? $data['workHoursTypes'] : null;
        $this->container['workHoursDates'] = isset($data['workHoursDates']) ? $data['workHoursDates'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (($this->container['limit'] < 1)) {
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
    * Gets projectIds
    *  查询的项目id列表
    *
    * @return string[]|null
    */
    public function getProjectIds()
    {
        return $this->container['projectIds'];
    }

    /**
    * Sets projectIds
    *
    * @param string[]|null $projectIds 查询的项目id列表
    *
    * @return $this
    */
    public function setProjectIds($projectIds)
    {
        $this->container['projectIds'] = $projectIds;
        return $this;
    }

    /**
    * Gets userIds
    *  查询的用户id列表
    *
    * @return string[]|null
    */
    public function getUserIds()
    {
        return $this->container['userIds'];
    }

    /**
    * Sets userIds
    *
    * @param string[]|null $userIds 查询的用户id列表
    *
    * @return $this
    */
    public function setUserIds($userIds)
    {
        $this->container['userIds'] = $userIds;
        return $this;
    }

    /**
    * Gets workHoursTypes
    *  工时类型，以逗号分隔,21:研发设计,22:后端开发,23:前端开发(Web),24:前端开发(小程序),25:前端开发(App),26:测试验证,27:缺陷修复,28:UI设计,29:会议,30:公共事务,31:培训,32:研究,33:其它,34:调休请假
    *
    * @return string|null
    */
    public function getWorkHoursTypes()
    {
        return $this->container['workHoursTypes'];
    }

    /**
    * Sets workHoursTypes
    *
    * @param string|null $workHoursTypes 工时类型，以逗号分隔,21:研发设计,22:后端开发,23:前端开发(Web),24:前端开发(小程序),25:前端开发(App),26:测试验证,27:缺陷修复,28:UI设计,29:会议,30:公共事务,31:培训,32:研究,33:其它,34:调休请假
    *
    * @return $this
    */
    public function setWorkHoursTypes($workHoursTypes)
    {
        $this->container['workHoursTypes'] = $workHoursTypes;
        return $this;
    }

    /**
    * Gets workHoursDates
    *  工时日期，以逗号分隔，年-月-日
    *
    * @return string|null
    */
    public function getWorkHoursDates()
    {
        return $this->container['workHoursDates'];
    }

    /**
    * Sets workHoursDates
    *
    * @param string|null $workHoursDates 工时日期，以逗号分隔，年-月-日
    *
    * @return $this
    */
    public function setWorkHoursDates($workHoursDates)
    {
        $this->container['workHoursDates'] = $workHoursDates;
        return $this;
    }

    /**
    * Gets beginTime
    *  工时开始日期，年-月-日
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 工时开始日期，年-月-日
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  工时结束日期，年-月-日
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 工时结束日期，年-月-日
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移量,offset是limit的整数倍，limit=10,offset=0,10,20...
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
    *  每页显示数量，每页最多显示100条
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示数量，每页最多显示100条
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

