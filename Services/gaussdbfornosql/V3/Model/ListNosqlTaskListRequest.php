<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNosqlTaskListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNosqlTaskListRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobName  任务名称，默认为空。对应取值如下：  \"REBOOT\"：重启实例  \"RESIZE_FLAVOR\"：变更实例的CPU和内存规格  \"UPGRADE_DATABASE\"：补丁升级
    * jobStatus  任务执行状态，默认为空。 取值：  值为\"Pending\"，表示任务未执行。  值为\"Running\"，表示任务正在执行。  值为\"Completed\"，表示任务执行成功。  值为\"Failed\"，表示任务执行失败。  值为\"Canceled\"，表示任务取消执行。
    * instanceId  实例ID，不传该值默认查所有符合条件的实例。
    * startTime  任务创建起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间前七天。
    * endTime  任务创建结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。
    * limit  查询记录数。不传该参数时，默认为10,取值范围1-100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobName' => 'string',
            'jobStatus' => 'string',
            'instanceId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'offset' => 'string',
            'limit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobName  任务名称，默认为空。对应取值如下：  \"REBOOT\"：重启实例  \"RESIZE_FLAVOR\"：变更实例的CPU和内存规格  \"UPGRADE_DATABASE\"：补丁升级
    * jobStatus  任务执行状态，默认为空。 取值：  值为\"Pending\"，表示任务未执行。  值为\"Running\"，表示任务正在执行。  值为\"Completed\"，表示任务执行成功。  值为\"Failed\"，表示任务执行失败。  值为\"Canceled\"，表示任务取消执行。
    * instanceId  实例ID，不传该值默认查所有符合条件的实例。
    * startTime  任务创建起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间前七天。
    * endTime  任务创建结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。
    * limit  查询记录数。不传该参数时，默认为10,取值范围1-100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobName' => null,
        'jobStatus' => null,
        'instanceId' => null,
        'startTime' => null,
        'endTime' => null,
        'offset' => null,
        'limit' => null
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
    * jobName  任务名称，默认为空。对应取值如下：  \"REBOOT\"：重启实例  \"RESIZE_FLAVOR\"：变更实例的CPU和内存规格  \"UPGRADE_DATABASE\"：补丁升级
    * jobStatus  任务执行状态，默认为空。 取值：  值为\"Pending\"，表示任务未执行。  值为\"Running\"，表示任务正在执行。  值为\"Completed\"，表示任务执行成功。  值为\"Failed\"，表示任务执行失败。  值为\"Canceled\"，表示任务取消执行。
    * instanceId  实例ID，不传该值默认查所有符合条件的实例。
    * startTime  任务创建起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间前七天。
    * endTime  任务创建结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。
    * limit  查询记录数。不传该参数时，默认为10,取值范围1-100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobName' => 'job_name',
            'jobStatus' => 'job_status',
            'instanceId' => 'instance_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobName  任务名称，默认为空。对应取值如下：  \"REBOOT\"：重启实例  \"RESIZE_FLAVOR\"：变更实例的CPU和内存规格  \"UPGRADE_DATABASE\"：补丁升级
    * jobStatus  任务执行状态，默认为空。 取值：  值为\"Pending\"，表示任务未执行。  值为\"Running\"，表示任务正在执行。  值为\"Completed\"，表示任务执行成功。  值为\"Failed\"，表示任务执行失败。  值为\"Canceled\"，表示任务取消执行。
    * instanceId  实例ID，不传该值默认查所有符合条件的实例。
    * startTime  任务创建起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间前七天。
    * endTime  任务创建结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。
    * limit  查询记录数。不传该参数时，默认为10,取值范围1-100。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobName' => 'setJobName',
            'jobStatus' => 'setJobStatus',
            'instanceId' => 'setInstanceId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobName  任务名称，默认为空。对应取值如下：  \"REBOOT\"：重启实例  \"RESIZE_FLAVOR\"：变更实例的CPU和内存规格  \"UPGRADE_DATABASE\"：补丁升级
    * jobStatus  任务执行状态，默认为空。 取值：  值为\"Pending\"，表示任务未执行。  值为\"Running\"，表示任务正在执行。  值为\"Completed\"，表示任务执行成功。  值为\"Failed\"，表示任务执行失败。  值为\"Canceled\"，表示任务取消执行。
    * instanceId  实例ID，不传该值默认查所有符合条件的实例。
    * startTime  任务创建起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间前七天。
    * endTime  任务创建结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。
    * limit  查询记录数。不传该参数时，默认为10,取值范围1-100。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobName' => 'getJobName',
            'jobStatus' => 'getJobStatus',
            'instanceId' => 'getInstanceId',
            'startTime' => 'getStartTime',
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobStatus'] = isset($data['jobStatus']) ? $data['jobStatus'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
    * Gets jobName
    *  任务名称，默认为空。对应取值如下：  \"REBOOT\"：重启实例  \"RESIZE_FLAVOR\"：变更实例的CPU和内存规格  \"UPGRADE_DATABASE\"：补丁升级
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 任务名称，默认为空。对应取值如下：  \"REBOOT\"：重启实例  \"RESIZE_FLAVOR\"：变更实例的CPU和内存规格  \"UPGRADE_DATABASE\"：补丁升级
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobStatus
    *  任务执行状态，默认为空。 取值：  值为\"Pending\"，表示任务未执行。  值为\"Running\"，表示任务正在执行。  值为\"Completed\"，表示任务执行成功。  值为\"Failed\"，表示任务执行失败。  值为\"Canceled\"，表示任务取消执行。
    *
    * @return string|null
    */
    public function getJobStatus()
    {
        return $this->container['jobStatus'];
    }

    /**
    * Sets jobStatus
    *
    * @param string|null $jobStatus 任务执行状态，默认为空。 取值：  值为\"Pending\"，表示任务未执行。  值为\"Running\"，表示任务正在执行。  值为\"Completed\"，表示任务执行成功。  值为\"Failed\"，表示任务执行失败。  值为\"Canceled\"，表示任务取消执行。
    *
    * @return $this
    */
    public function setJobStatus($jobStatus)
    {
        $this->container['jobStatus'] = $jobStatus;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID，不传该值默认查所有符合条件的实例。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID，不传该值默认查所有符合条件的实例。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets startTime
    *  任务创建起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间前七天。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 任务创建起始时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间前七天。
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
    *  任务创建结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间。
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
    * @param string|null $endTime 任务创建结束时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100，不传默认为当前时间。
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
    *  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0。
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
    *  查询记录数。不传该参数时，默认为10,取值范围1-100。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 查询记录数。不传该参数时，默认为10,取值范围1-100。
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

