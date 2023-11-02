<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupplementDataRespRows implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupplementDataResp_rows';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endDate  作业的开始日期 13位时间戳
    * jobList  补数据作业名称，可能有依赖的作业，故会有多个作业的情况。
    * name  补数据名称
    * parallel  并行周期数，取值范围[1,5]
    * startDate  作业的结束日期 13位时间戳
    * status  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    * submittedDate  作业提交时间，13位时间戳
    * supplementDataInstanceTime  supplementDataInstanceTime
    * supplementDataRunTime  supplementDataRunTime
    * type  触发补数据的类型，取值范围[0, 1]。0代表作业监控界面触发的补数据，1代表恢复动作触发的补数据
    * userName  用户名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endDate' => 'int',
            'jobList' => 'string[]',
            'name' => 'string',
            'parallel' => 'int',
            'startDate' => 'int',
            'status' => 'string',
            'submittedDate' => 'int',
            'supplementDataInstanceTime' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SupplementDataRespSupplementDataInstanceTime',
            'supplementDataRunTime' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SupplementDataRespSupplementDataRunTime',
            'type' => 'int',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endDate  作业的开始日期 13位时间戳
    * jobList  补数据作业名称，可能有依赖的作业，故会有多个作业的情况。
    * name  补数据名称
    * parallel  并行周期数，取值范围[1,5]
    * startDate  作业的结束日期 13位时间戳
    * status  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    * submittedDate  作业提交时间，13位时间戳
    * supplementDataInstanceTime  supplementDataInstanceTime
    * supplementDataRunTime  supplementDataRunTime
    * type  触发补数据的类型，取值范围[0, 1]。0代表作业监控界面触发的补数据，1代表恢复动作触发的补数据
    * userName  用户名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endDate' => 'int64',
        'jobList' => null,
        'name' => null,
        'parallel' => 'int32',
        'startDate' => 'int64',
        'status' => null,
        'submittedDate' => 'int64',
        'supplementDataInstanceTime' => null,
        'supplementDataRunTime' => null,
        'type' => 'int32',
        'userName' => null
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
    * endDate  作业的开始日期 13位时间戳
    * jobList  补数据作业名称，可能有依赖的作业，故会有多个作业的情况。
    * name  补数据名称
    * parallel  并行周期数，取值范围[1,5]
    * startDate  作业的结束日期 13位时间戳
    * status  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    * submittedDate  作业提交时间，13位时间戳
    * supplementDataInstanceTime  supplementDataInstanceTime
    * supplementDataRunTime  supplementDataRunTime
    * type  触发补数据的类型，取值范围[0, 1]。0代表作业监控界面触发的补数据，1代表恢复动作触发的补数据
    * userName  用户名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endDate' => 'end_date',
            'jobList' => 'job_list',
            'name' => 'name',
            'parallel' => 'parallel',
            'startDate' => 'start_date',
            'status' => 'status',
            'submittedDate' => 'submitted_date',
            'supplementDataInstanceTime' => 'supplement_data_instance_time',
            'supplementDataRunTime' => 'supplement_data_run_time',
            'type' => 'type',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endDate  作业的开始日期 13位时间戳
    * jobList  补数据作业名称，可能有依赖的作业，故会有多个作业的情况。
    * name  补数据名称
    * parallel  并行周期数，取值范围[1,5]
    * startDate  作业的结束日期 13位时间戳
    * status  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    * submittedDate  作业提交时间，13位时间戳
    * supplementDataInstanceTime  supplementDataInstanceTime
    * supplementDataRunTime  supplementDataRunTime
    * type  触发补数据的类型，取值范围[0, 1]。0代表作业监控界面触发的补数据，1代表恢复动作触发的补数据
    * userName  用户名称
    *
    * @var string[]
    */
    protected static $setters = [
            'endDate' => 'setEndDate',
            'jobList' => 'setJobList',
            'name' => 'setName',
            'parallel' => 'setParallel',
            'startDate' => 'setStartDate',
            'status' => 'setStatus',
            'submittedDate' => 'setSubmittedDate',
            'supplementDataInstanceTime' => 'setSupplementDataInstanceTime',
            'supplementDataRunTime' => 'setSupplementDataRunTime',
            'type' => 'setType',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endDate  作业的开始日期 13位时间戳
    * jobList  补数据作业名称，可能有依赖的作业，故会有多个作业的情况。
    * name  补数据名称
    * parallel  并行周期数，取值范围[1,5]
    * startDate  作业的结束日期 13位时间戳
    * status  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    * submittedDate  作业提交时间，13位时间戳
    * supplementDataInstanceTime  supplementDataInstanceTime
    * supplementDataRunTime  supplementDataRunTime
    * type  触发补数据的类型，取值范围[0, 1]。0代表作业监控界面触发的补数据，1代表恢复动作触发的补数据
    * userName  用户名称
    *
    * @var string[]
    */
    protected static $getters = [
            'endDate' => 'getEndDate',
            'jobList' => 'getJobList',
            'name' => 'getName',
            'parallel' => 'getParallel',
            'startDate' => 'getStartDate',
            'status' => 'getStatus',
            'submittedDate' => 'getSubmittedDate',
            'supplementDataInstanceTime' => 'getSupplementDataInstanceTime',
            'supplementDataRunTime' => 'getSupplementDataRunTime',
            'type' => 'getType',
            'userName' => 'getUserName'
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
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['jobList'] = isset($data['jobList']) ? $data['jobList'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parallel'] = isset($data['parallel']) ? $data['parallel'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['submittedDate'] = isset($data['submittedDate']) ? $data['submittedDate'] : null;
        $this->container['supplementDataInstanceTime'] = isset($data['supplementDataInstanceTime']) ? $data['supplementDataInstanceTime'] : null;
        $this->container['supplementDataRunTime'] = isset($data['supplementDataRunTime']) ? $data['supplementDataRunTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
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
    * Gets endDate
    *  作业的开始日期 13位时间戳
    *
    * @return int|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param int|null $endDate 作业的开始日期 13位时间戳
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets jobList
    *  补数据作业名称，可能有依赖的作业，故会有多个作业的情况。
    *
    * @return string[]|null
    */
    public function getJobList()
    {
        return $this->container['jobList'];
    }

    /**
    * Sets jobList
    *
    * @param string[]|null $jobList 补数据作业名称，可能有依赖的作业，故会有多个作业的情况。
    *
    * @return $this
    */
    public function setJobList($jobList)
    {
        $this->container['jobList'] = $jobList;
        return $this;
    }

    /**
    * Gets name
    *  补数据名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 补数据名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets parallel
    *  并行周期数，取值范围[1,5]
    *
    * @return int|null
    */
    public function getParallel()
    {
        return $this->container['parallel'];
    }

    /**
    * Sets parallel
    *
    * @param int|null $parallel 并行周期数，取值范围[1,5]
    *
    * @return $this
    */
    public function setParallel($parallel)
    {
        $this->container['parallel'] = $parallel;
        return $this;
    }

    /**
    * Gets startDate
    *  作业的结束日期 13位时间戳
    *
    * @return int|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param int|null $startDate 作业的结束日期 13位时间戳
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets status
    *  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
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
    * @param string|null $status 实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets submittedDate
    *  作业提交时间，13位时间戳
    *
    * @return int|null
    */
    public function getSubmittedDate()
    {
        return $this->container['submittedDate'];
    }

    /**
    * Sets submittedDate
    *
    * @param int|null $submittedDate 作业提交时间，13位时间戳
    *
    * @return $this
    */
    public function setSubmittedDate($submittedDate)
    {
        $this->container['submittedDate'] = $submittedDate;
        return $this;
    }

    /**
    * Gets supplementDataInstanceTime
    *  supplementDataInstanceTime
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SupplementDataRespSupplementDataInstanceTime|null
    */
    public function getSupplementDataInstanceTime()
    {
        return $this->container['supplementDataInstanceTime'];
    }

    /**
    * Sets supplementDataInstanceTime
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SupplementDataRespSupplementDataInstanceTime|null $supplementDataInstanceTime supplementDataInstanceTime
    *
    * @return $this
    */
    public function setSupplementDataInstanceTime($supplementDataInstanceTime)
    {
        $this->container['supplementDataInstanceTime'] = $supplementDataInstanceTime;
        return $this;
    }

    /**
    * Gets supplementDataRunTime
    *  supplementDataRunTime
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SupplementDataRespSupplementDataRunTime|null
    */
    public function getSupplementDataRunTime()
    {
        return $this->container['supplementDataRunTime'];
    }

    /**
    * Sets supplementDataRunTime
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SupplementDataRespSupplementDataRunTime|null $supplementDataRunTime supplementDataRunTime
    *
    * @return $this
    */
    public function setSupplementDataRunTime($supplementDataRunTime)
    {
        $this->container['supplementDataRunTime'] = $supplementDataRunTime;
        return $this;
    }

    /**
    * Gets type
    *  触发补数据的类型，取值范围[0, 1]。0代表作业监控界面触发的补数据，1代表恢复动作触发的补数据
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 触发补数据的类型，取值范围[0, 1]。0代表作业监控界面触发的补数据，1代表恢复动作触发的补数据
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

