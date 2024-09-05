<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFlinkJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFlinkJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobType  作业类型
    * limit  返回的数据条数。默认为10。
    * name  作业名称。长度限制：0-57个字符。
    * offset  作业偏移量。
    * order  查询结果排序，升序asc和降序desc两种可选，默认降序。
    * queueName  队列名称。
    * rootJobId  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业。
    * showDetail  是否返回作业详情信息。默认为false。
    * status  作业状态。 作业的状态如下： job_init：草稿 job_submitting：提交中 job_submit_fail：提交失败 job_running：运行中（开始计费，提交作业后，返回正常结果） job_running_exception：运行异常（停止计费。作业发生运行时异常，停止运行作业） job_downloading：下载中 job_idle：空闲 job_canceling：停止中 job_cancel_success：已停止 job_cancel_fail：停止失败 job_savepointing：保存点创建中 job_arrearage_stopped：因欠费被停止（结束计费。用户账户欠费，作业停止） job_arrearage_recovering：欠费作业恢复中（用户账户欠费，账户充值，作业恢复中） job_finish：已完成
    * sysEnterpriseProjectName  sysEnterpriseProjectName
    * tags  tags
    * userName  用户名，可作为筛选条件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobType' => 'string',
            'limit' => 'int',
            'name' => 'string',
            'offset' => 'int',
            'order' => 'string',
            'queueName' => 'string',
            'rootJobId' => 'int',
            'showDetail' => 'bool',
            'status' => 'string',
            'sysEnterpriseProjectName' => 'string',
            'tags' => 'string',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobType  作业类型
    * limit  返回的数据条数。默认为10。
    * name  作业名称。长度限制：0-57个字符。
    * offset  作业偏移量。
    * order  查询结果排序，升序asc和降序desc两种可选，默认降序。
    * queueName  队列名称。
    * rootJobId  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业。
    * showDetail  是否返回作业详情信息。默认为false。
    * status  作业状态。 作业的状态如下： job_init：草稿 job_submitting：提交中 job_submit_fail：提交失败 job_running：运行中（开始计费，提交作业后，返回正常结果） job_running_exception：运行异常（停止计费。作业发生运行时异常，停止运行作业） job_downloading：下载中 job_idle：空闲 job_canceling：停止中 job_cancel_success：已停止 job_cancel_fail：停止失败 job_savepointing：保存点创建中 job_arrearage_stopped：因欠费被停止（结束计费。用户账户欠费，作业停止） job_arrearage_recovering：欠费作业恢复中（用户账户欠费，账户充值，作业恢复中） job_finish：已完成
    * sysEnterpriseProjectName  sysEnterpriseProjectName
    * tags  tags
    * userName  用户名，可作为筛选条件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobType' => null,
        'limit' => 'int32',
        'name' => null,
        'offset' => 'int64',
        'order' => null,
        'queueName' => null,
        'rootJobId' => 'int64',
        'showDetail' => null,
        'status' => null,
        'sysEnterpriseProjectName' => null,
        'tags' => null,
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
    * jobType  作业类型
    * limit  返回的数据条数。默认为10。
    * name  作业名称。长度限制：0-57个字符。
    * offset  作业偏移量。
    * order  查询结果排序，升序asc和降序desc两种可选，默认降序。
    * queueName  队列名称。
    * rootJobId  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业。
    * showDetail  是否返回作业详情信息。默认为false。
    * status  作业状态。 作业的状态如下： job_init：草稿 job_submitting：提交中 job_submit_fail：提交失败 job_running：运行中（开始计费，提交作业后，返回正常结果） job_running_exception：运行异常（停止计费。作业发生运行时异常，停止运行作业） job_downloading：下载中 job_idle：空闲 job_canceling：停止中 job_cancel_success：已停止 job_cancel_fail：停止失败 job_savepointing：保存点创建中 job_arrearage_stopped：因欠费被停止（结束计费。用户账户欠费，作业停止） job_arrearage_recovering：欠费作业恢复中（用户账户欠费，账户充值，作业恢复中） job_finish：已完成
    * sysEnterpriseProjectName  sysEnterpriseProjectName
    * tags  tags
    * userName  用户名，可作为筛选条件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobType' => 'job_type',
            'limit' => 'limit',
            'name' => 'name',
            'offset' => 'offset',
            'order' => 'order',
            'queueName' => 'queue_name',
            'rootJobId' => 'root_job_id',
            'showDetail' => 'show_detail',
            'status' => 'status',
            'sysEnterpriseProjectName' => 'sys_enterprise_project_name',
            'tags' => 'tags',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobType  作业类型
    * limit  返回的数据条数。默认为10。
    * name  作业名称。长度限制：0-57个字符。
    * offset  作业偏移量。
    * order  查询结果排序，升序asc和降序desc两种可选，默认降序。
    * queueName  队列名称。
    * rootJobId  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业。
    * showDetail  是否返回作业详情信息。默认为false。
    * status  作业状态。 作业的状态如下： job_init：草稿 job_submitting：提交中 job_submit_fail：提交失败 job_running：运行中（开始计费，提交作业后，返回正常结果） job_running_exception：运行异常（停止计费。作业发生运行时异常，停止运行作业） job_downloading：下载中 job_idle：空闲 job_canceling：停止中 job_cancel_success：已停止 job_cancel_fail：停止失败 job_savepointing：保存点创建中 job_arrearage_stopped：因欠费被停止（结束计费。用户账户欠费，作业停止） job_arrearage_recovering：欠费作业恢复中（用户账户欠费，账户充值，作业恢复中） job_finish：已完成
    * sysEnterpriseProjectName  sysEnterpriseProjectName
    * tags  tags
    * userName  用户名，可作为筛选条件
    *
    * @var string[]
    */
    protected static $setters = [
            'jobType' => 'setJobType',
            'limit' => 'setLimit',
            'name' => 'setName',
            'offset' => 'setOffset',
            'order' => 'setOrder',
            'queueName' => 'setQueueName',
            'rootJobId' => 'setRootJobId',
            'showDetail' => 'setShowDetail',
            'status' => 'setStatus',
            'sysEnterpriseProjectName' => 'setSysEnterpriseProjectName',
            'tags' => 'setTags',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobType  作业类型
    * limit  返回的数据条数。默认为10。
    * name  作业名称。长度限制：0-57个字符。
    * offset  作业偏移量。
    * order  查询结果排序，升序asc和降序desc两种可选，默认降序。
    * queueName  队列名称。
    * rootJobId  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业。
    * showDetail  是否返回作业详情信息。默认为false。
    * status  作业状态。 作业的状态如下： job_init：草稿 job_submitting：提交中 job_submit_fail：提交失败 job_running：运行中（开始计费，提交作业后，返回正常结果） job_running_exception：运行异常（停止计费。作业发生运行时异常，停止运行作业） job_downloading：下载中 job_idle：空闲 job_canceling：停止中 job_cancel_success：已停止 job_cancel_fail：停止失败 job_savepointing：保存点创建中 job_arrearage_stopped：因欠费被停止（结束计费。用户账户欠费，作业停止） job_arrearage_recovering：欠费作业恢复中（用户账户欠费，账户充值，作业恢复中） job_finish：已完成
    * sysEnterpriseProjectName  sysEnterpriseProjectName
    * tags  tags
    * userName  用户名，可作为筛选条件
    *
    * @var string[]
    */
    protected static $getters = [
            'jobType' => 'getJobType',
            'limit' => 'getLimit',
            'name' => 'getName',
            'offset' => 'getOffset',
            'order' => 'getOrder',
            'queueName' => 'getQueueName',
            'rootJobId' => 'getRootJobId',
            'showDetail' => 'getShowDetail',
            'status' => 'getStatus',
            'sysEnterpriseProjectName' => 'getSysEnterpriseProjectName',
            'tags' => 'getTags',
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['rootJobId'] = isset($data['rootJobId']) ? $data['rootJobId'] : null;
        $this->container['showDetail'] = isset($data['showDetail']) ? $data['showDetail'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sysEnterpriseProjectName'] = isset($data['sysEnterpriseProjectName']) ? $data['sysEnterpriseProjectName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 57)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 57.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
    * Gets jobType
    *  作业类型
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 作业类型
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets limit
    *  返回的数据条数。默认为10。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 返回的数据条数。默认为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  作业名称。长度限制：0-57个字符。
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
    * @param string|null $name 作业名称。长度限制：0-57个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets offset
    *  作业偏移量。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 作业偏移量。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets order
    *  查询结果排序，升序asc和降序desc两种可选，默认降序。
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 查询结果排序，升序asc和降序desc两种可选，默认降序。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets queueName
    *  队列名称。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 队列名称。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets rootJobId
    *  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业。
    *
    * @return int|null
    */
    public function getRootJobId()
    {
        return $this->container['rootJobId'];
    }

    /**
    * Sets rootJobId
    *
    * @param int|null $rootJobId 边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业。
    *
    * @return $this
    */
    public function setRootJobId($rootJobId)
    {
        $this->container['rootJobId'] = $rootJobId;
        return $this;
    }

    /**
    * Gets showDetail
    *  是否返回作业详情信息。默认为false。
    *
    * @return bool|null
    */
    public function getShowDetail()
    {
        return $this->container['showDetail'];
    }

    /**
    * Sets showDetail
    *
    * @param bool|null $showDetail 是否返回作业详情信息。默认为false。
    *
    * @return $this
    */
    public function setShowDetail($showDetail)
    {
        $this->container['showDetail'] = $showDetail;
        return $this;
    }

    /**
    * Gets status
    *  作业状态。 作业的状态如下： job_init：草稿 job_submitting：提交中 job_submit_fail：提交失败 job_running：运行中（开始计费，提交作业后，返回正常结果） job_running_exception：运行异常（停止计费。作业发生运行时异常，停止运行作业） job_downloading：下载中 job_idle：空闲 job_canceling：停止中 job_cancel_success：已停止 job_cancel_fail：停止失败 job_savepointing：保存点创建中 job_arrearage_stopped：因欠费被停止（结束计费。用户账户欠费，作业停止） job_arrearage_recovering：欠费作业恢复中（用户账户欠费，账户充值，作业恢复中） job_finish：已完成
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
    * @param string|null $status 作业状态。 作业的状态如下： job_init：草稿 job_submitting：提交中 job_submit_fail：提交失败 job_running：运行中（开始计费，提交作业后，返回正常结果） job_running_exception：运行异常（停止计费。作业发生运行时异常，停止运行作业） job_downloading：下载中 job_idle：空闲 job_canceling：停止中 job_cancel_success：已停止 job_cancel_fail：停止失败 job_savepointing：保存点创建中 job_arrearage_stopped：因欠费被停止（结束计费。用户账户欠费，作业停止） job_arrearage_recovering：欠费作业恢复中（用户账户欠费，账户充值，作业恢复中） job_finish：已完成
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sysEnterpriseProjectName
    *  sysEnterpriseProjectName
    *
    * @return string|null
    */
    public function getSysEnterpriseProjectName()
    {
        return $this->container['sysEnterpriseProjectName'];
    }

    /**
    * Sets sysEnterpriseProjectName
    *
    * @param string|null $sysEnterpriseProjectName sysEnterpriseProjectName
    *
    * @return $this
    */
    public function setSysEnterpriseProjectName($sysEnterpriseProjectName)
    {
        $this->container['sysEnterpriseProjectName'] = $sysEnterpriseProjectName;
        return $this;
    }

    /**
    * Gets tags
    *  tags
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags tags
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets userName
    *  用户名，可作为筛选条件
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
    * @param string|null $userName 用户名，可作为筛选条件
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

