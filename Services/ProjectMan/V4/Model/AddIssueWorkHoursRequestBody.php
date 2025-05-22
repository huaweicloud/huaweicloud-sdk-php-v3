<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddIssueWorkHoursRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddIssueWorkHoursRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startDate  工时开始日期，年-月-日
    * dueDate  工时结束日期，年-月-日
    * workHours  工时总数（若工时日期范围包含多天，单日工时将设为“工时总数/天数”）
    * workHoursTypeId  工时类型id（项目预设工时类型id及名称对照：21:研发设计，22:后端开发，23:前端开发(Web)，24:前端开发(小程序)，25:前端开发(App)， 26:测试验证，27:缺陷修复，28:UI设计，29:会议，30:公共事务，31:培训，32:研究，33:其它，34:调休请假）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startDate' => 'string',
            'dueDate' => 'string',
            'workHours' => 'double',
            'workHoursTypeId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startDate  工时开始日期，年-月-日
    * dueDate  工时结束日期，年-月-日
    * workHours  工时总数（若工时日期范围包含多天，单日工时将设为“工时总数/天数”）
    * workHoursTypeId  工时类型id（项目预设工时类型id及名称对照：21:研发设计，22:后端开发，23:前端开发(Web)，24:前端开发(小程序)，25:前端开发(App)， 26:测试验证，27:缺陷修复，28:UI设计，29:会议，30:公共事务，31:培训，32:研究，33:其它，34:调休请假）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startDate' => null,
        'dueDate' => null,
        'workHours' => 'double',
        'workHoursTypeId' => 'int32'
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
    * startDate  工时开始日期，年-月-日
    * dueDate  工时结束日期，年-月-日
    * workHours  工时总数（若工时日期范围包含多天，单日工时将设为“工时总数/天数”）
    * workHoursTypeId  工时类型id（项目预设工时类型id及名称对照：21:研发设计，22:后端开发，23:前端开发(Web)，24:前端开发(小程序)，25:前端开发(App)， 26:测试验证，27:缺陷修复，28:UI设计，29:会议，30:公共事务，31:培训，32:研究，33:其它，34:调休请假）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startDate' => 'start_date',
            'dueDate' => 'due_date',
            'workHours' => 'work_hours',
            'workHoursTypeId' => 'work_hours_type_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startDate  工时开始日期，年-月-日
    * dueDate  工时结束日期，年-月-日
    * workHours  工时总数（若工时日期范围包含多天，单日工时将设为“工时总数/天数”）
    * workHoursTypeId  工时类型id（项目预设工时类型id及名称对照：21:研发设计，22:后端开发，23:前端开发(Web)，24:前端开发(小程序)，25:前端开发(App)， 26:测试验证，27:缺陷修复，28:UI设计，29:会议，30:公共事务，31:培训，32:研究，33:其它，34:调休请假）
    *
    * @var string[]
    */
    protected static $setters = [
            'startDate' => 'setStartDate',
            'dueDate' => 'setDueDate',
            'workHours' => 'setWorkHours',
            'workHoursTypeId' => 'setWorkHoursTypeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startDate  工时开始日期，年-月-日
    * dueDate  工时结束日期，年-月-日
    * workHours  工时总数（若工时日期范围包含多天，单日工时将设为“工时总数/天数”）
    * workHoursTypeId  工时类型id（项目预设工时类型id及名称对照：21:研发设计，22:后端开发，23:前端开发(Web)，24:前端开发(小程序)，25:前端开发(App)， 26:测试验证，27:缺陷修复，28:UI设计，29:会议，30:公共事务，31:培训，32:研究，33:其它，34:调休请假）
    *
    * @var string[]
    */
    protected static $getters = [
            'startDate' => 'getStartDate',
            'dueDate' => 'getDueDate',
            'workHours' => 'getWorkHours',
            'workHoursTypeId' => 'getWorkHoursTypeId'
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
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['workHours'] = isset($data['workHours']) ? $data['workHours'] : null;
        $this->container['workHoursTypeId'] = isset($data['workHoursTypeId']) ? $data['workHoursTypeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['dueDate'] === null) {
            $invalidProperties[] = "'dueDate' can't be null";
        }
        if ($this->container['workHours'] === null) {
            $invalidProperties[] = "'workHours' can't be null";
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
    * Gets startDate
    *  工时开始日期，年-月-日
    *
    * @return string
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string $startDate 工时开始日期，年-月-日
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets dueDate
    *  工时结束日期，年-月-日
    *
    * @return string
    */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
    * Sets dueDate
    *
    * @param string $dueDate 工时结束日期，年-月-日
    *
    * @return $this
    */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;
        return $this;
    }

    /**
    * Gets workHours
    *  工时总数（若工时日期范围包含多天，单日工时将设为“工时总数/天数”）
    *
    * @return double
    */
    public function getWorkHours()
    {
        return $this->container['workHours'];
    }

    /**
    * Sets workHours
    *
    * @param double $workHours 工时总数（若工时日期范围包含多天，单日工时将设为“工时总数/天数”）
    *
    * @return $this
    */
    public function setWorkHours($workHours)
    {
        $this->container['workHours'] = $workHours;
        return $this;
    }

    /**
    * Gets workHoursTypeId
    *  工时类型id（项目预设工时类型id及名称对照：21:研发设计，22:后端开发，23:前端开发(Web)，24:前端开发(小程序)，25:前端开发(App)， 26:测试验证，27:缺陷修复，28:UI设计，29:会议，30:公共事务，31:培训，32:研究，33:其它，34:调休请假）
    *
    * @return int|null
    */
    public function getWorkHoursTypeId()
    {
        return $this->container['workHoursTypeId'];
    }

    /**
    * Sets workHoursTypeId
    *
    * @param int|null $workHoursTypeId 工时类型id（项目预设工时类型id及名称对照：21:研发设计，22:后端开发，23:前端开发(Web)，24:前端开发(小程序)，25:前端开发(App)， 26:测试验证，27:缺陷修复，28:UI设计，29:会议，30:公共事务，31:培训，32:研究，33:其它，34:调休请假）
    *
    * @return $this
    */
    public function setWorkHoursTypeId($workHoursTypeId)
    {
        $this->container['workHoursTypeId'] = $workHoursTypeId;
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

