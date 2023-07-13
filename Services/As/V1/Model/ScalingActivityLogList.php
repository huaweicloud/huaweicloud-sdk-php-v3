<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingActivityLogList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingActivityLogList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  伸缩活动状态：SUCCESS：成功。FAIL：失败。DOING：伸缩过程中。
    * startTime  伸缩活动触发时间，遵循UTC时间。
    * endTime  伸缩活动结束时间，遵循UTC时间。
    * id  伸缩活动日志ID。
    * instanceRemovedList  完成伸缩活动且只被移出弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分隔。
    * instanceDeletedList  完成伸缩活动且被移出弹性伸缩组并删除的云服务器名称列表，云服务器名之间以逗号分隔。
    * instanceAddedList  完成伸缩活动且被加入弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分割。
    * scalingValue  伸缩活动中变化（增加或减少）的云服务器数量。
    * description  伸缩活动的描述信息。
    * instanceValue  伸缩组当前instance值。
    * desireValue  伸缩活动最终desire值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime',
            'id' => 'string',
            'instanceRemovedList' => 'string',
            'instanceDeletedList' => 'string',
            'instanceAddedList' => 'string',
            'scalingValue' => 'string',
            'description' => 'string',
            'instanceValue' => 'int',
            'desireValue' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  伸缩活动状态：SUCCESS：成功。FAIL：失败。DOING：伸缩过程中。
    * startTime  伸缩活动触发时间，遵循UTC时间。
    * endTime  伸缩活动结束时间，遵循UTC时间。
    * id  伸缩活动日志ID。
    * instanceRemovedList  完成伸缩活动且只被移出弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分隔。
    * instanceDeletedList  完成伸缩活动且被移出弹性伸缩组并删除的云服务器名称列表，云服务器名之间以逗号分隔。
    * instanceAddedList  完成伸缩活动且被加入弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分割。
    * scalingValue  伸缩活动中变化（增加或减少）的云服务器数量。
    * description  伸缩活动的描述信息。
    * instanceValue  伸缩组当前instance值。
    * desireValue  伸缩活动最终desire值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'id' => null,
        'instanceRemovedList' => null,
        'instanceDeletedList' => null,
        'instanceAddedList' => null,
        'scalingValue' => null,
        'description' => null,
        'instanceValue' => 'int32',
        'desireValue' => 'int32'
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
    * status  伸缩活动状态：SUCCESS：成功。FAIL：失败。DOING：伸缩过程中。
    * startTime  伸缩活动触发时间，遵循UTC时间。
    * endTime  伸缩活动结束时间，遵循UTC时间。
    * id  伸缩活动日志ID。
    * instanceRemovedList  完成伸缩活动且只被移出弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分隔。
    * instanceDeletedList  完成伸缩活动且被移出弹性伸缩组并删除的云服务器名称列表，云服务器名之间以逗号分隔。
    * instanceAddedList  完成伸缩活动且被加入弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分割。
    * scalingValue  伸缩活动中变化（增加或减少）的云服务器数量。
    * description  伸缩活动的描述信息。
    * instanceValue  伸缩组当前instance值。
    * desireValue  伸缩活动最终desire值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'id' => 'id',
            'instanceRemovedList' => 'instance_removed_list',
            'instanceDeletedList' => 'instance_deleted_list',
            'instanceAddedList' => 'instance_added_list',
            'scalingValue' => 'scaling_value',
            'description' => 'description',
            'instanceValue' => 'instance_value',
            'desireValue' => 'desire_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  伸缩活动状态：SUCCESS：成功。FAIL：失败。DOING：伸缩过程中。
    * startTime  伸缩活动触发时间，遵循UTC时间。
    * endTime  伸缩活动结束时间，遵循UTC时间。
    * id  伸缩活动日志ID。
    * instanceRemovedList  完成伸缩活动且只被移出弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分隔。
    * instanceDeletedList  完成伸缩活动且被移出弹性伸缩组并删除的云服务器名称列表，云服务器名之间以逗号分隔。
    * instanceAddedList  完成伸缩活动且被加入弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分割。
    * scalingValue  伸缩活动中变化（增加或减少）的云服务器数量。
    * description  伸缩活动的描述信息。
    * instanceValue  伸缩组当前instance值。
    * desireValue  伸缩活动最终desire值。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'id' => 'setId',
            'instanceRemovedList' => 'setInstanceRemovedList',
            'instanceDeletedList' => 'setInstanceDeletedList',
            'instanceAddedList' => 'setInstanceAddedList',
            'scalingValue' => 'setScalingValue',
            'description' => 'setDescription',
            'instanceValue' => 'setInstanceValue',
            'desireValue' => 'setDesireValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  伸缩活动状态：SUCCESS：成功。FAIL：失败。DOING：伸缩过程中。
    * startTime  伸缩活动触发时间，遵循UTC时间。
    * endTime  伸缩活动结束时间，遵循UTC时间。
    * id  伸缩活动日志ID。
    * instanceRemovedList  完成伸缩活动且只被移出弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分隔。
    * instanceDeletedList  完成伸缩活动且被移出弹性伸缩组并删除的云服务器名称列表，云服务器名之间以逗号分隔。
    * instanceAddedList  完成伸缩活动且被加入弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分割。
    * scalingValue  伸缩活动中变化（增加或减少）的云服务器数量。
    * description  伸缩活动的描述信息。
    * instanceValue  伸缩组当前instance值。
    * desireValue  伸缩活动最终desire值。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'id' => 'getId',
            'instanceRemovedList' => 'getInstanceRemovedList',
            'instanceDeletedList' => 'getInstanceDeletedList',
            'instanceAddedList' => 'getInstanceAddedList',
            'scalingValue' => 'getScalingValue',
            'description' => 'getDescription',
            'instanceValue' => 'getInstanceValue',
            'desireValue' => 'getDesireValue'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAIL = 'FAIL';
    const STATUS_DING = 'DING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
            self::STATUS_DING,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceRemovedList'] = isset($data['instanceRemovedList']) ? $data['instanceRemovedList'] : null;
        $this->container['instanceDeletedList'] = isset($data['instanceDeletedList']) ? $data['instanceDeletedList'] : null;
        $this->container['instanceAddedList'] = isset($data['instanceAddedList']) ? $data['instanceAddedList'] : null;
        $this->container['scalingValue'] = isset($data['scalingValue']) ? $data['scalingValue'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instanceValue'] = isset($data['instanceValue']) ? $data['instanceValue'] : null;
        $this->container['desireValue'] = isset($data['desireValue']) ? $data['desireValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['id']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets status
    *  伸缩活动状态：SUCCESS：成功。FAIL：失败。DOING：伸缩过程中。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 伸缩活动状态：SUCCESS：成功。FAIL：失败。DOING：伸缩过程中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  伸缩活动触发时间，遵循UTC时间。
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 伸缩活动触发时间，遵循UTC时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  伸缩活动结束时间，遵循UTC时间。
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 伸缩活动结束时间，遵循UTC时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets id
    *  伸缩活动日志ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 伸缩活动日志ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceRemovedList
    *  完成伸缩活动且只被移出弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分隔。
    *
    * @return string|null
    */
    public function getInstanceRemovedList()
    {
        return $this->container['instanceRemovedList'];
    }

    /**
    * Sets instanceRemovedList
    *
    * @param string|null $instanceRemovedList 完成伸缩活动且只被移出弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分隔。
    *
    * @return $this
    */
    public function setInstanceRemovedList($instanceRemovedList)
    {
        $this->container['instanceRemovedList'] = $instanceRemovedList;
        return $this;
    }

    /**
    * Gets instanceDeletedList
    *  完成伸缩活动且被移出弹性伸缩组并删除的云服务器名称列表，云服务器名之间以逗号分隔。
    *
    * @return string|null
    */
    public function getInstanceDeletedList()
    {
        return $this->container['instanceDeletedList'];
    }

    /**
    * Sets instanceDeletedList
    *
    * @param string|null $instanceDeletedList 完成伸缩活动且被移出弹性伸缩组并删除的云服务器名称列表，云服务器名之间以逗号分隔。
    *
    * @return $this
    */
    public function setInstanceDeletedList($instanceDeletedList)
    {
        $this->container['instanceDeletedList'] = $instanceDeletedList;
        return $this;
    }

    /**
    * Gets instanceAddedList
    *  完成伸缩活动且被加入弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分割。
    *
    * @return string|null
    */
    public function getInstanceAddedList()
    {
        return $this->container['instanceAddedList'];
    }

    /**
    * Sets instanceAddedList
    *
    * @param string|null $instanceAddedList 完成伸缩活动且被加入弹性伸缩组的云服务器名称列表，云服务器名之间以逗号分割。
    *
    * @return $this
    */
    public function setInstanceAddedList($instanceAddedList)
    {
        $this->container['instanceAddedList'] = $instanceAddedList;
        return $this;
    }

    /**
    * Gets scalingValue
    *  伸缩活动中变化（增加或减少）的云服务器数量。
    *
    * @return string|null
    */
    public function getScalingValue()
    {
        return $this->container['scalingValue'];
    }

    /**
    * Sets scalingValue
    *
    * @param string|null $scalingValue 伸缩活动中变化（增加或减少）的云服务器数量。
    *
    * @return $this
    */
    public function setScalingValue($scalingValue)
    {
        $this->container['scalingValue'] = $scalingValue;
        return $this;
    }

    /**
    * Gets description
    *  伸缩活动的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 伸缩活动的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets instanceValue
    *  伸缩组当前instance值。
    *
    * @return int|null
    */
    public function getInstanceValue()
    {
        return $this->container['instanceValue'];
    }

    /**
    * Sets instanceValue
    *
    * @param int|null $instanceValue 伸缩组当前instance值。
    *
    * @return $this
    */
    public function setInstanceValue($instanceValue)
    {
        $this->container['instanceValue'] = $instanceValue;
        return $this;
    }

    /**
    * Gets desireValue
    *  伸缩活动最终desire值。
    *
    * @return int|null
    */
    public function getDesireValue()
    {
        return $this->container['desireValue'];
    }

    /**
    * Sets desireValue
    *
    * @param int|null $desireValue 伸缩活动最终desire值。
    *
    * @return $this
    */
    public function setDesireValue($desireValue)
    {
        $this->container['desireValue'] = $desireValue;
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

