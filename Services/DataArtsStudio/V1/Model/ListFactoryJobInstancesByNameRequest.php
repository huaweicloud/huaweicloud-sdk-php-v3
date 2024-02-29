<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactoryJobInstancesByNameRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactoryJobInstancesByNameRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID
    * contentType  有Body体的情况下必须，无Body体的情况下则无需填写和校验，默认值：application/json
    * limit  分页返回结果，指定每页最大记录数。 范围[1,1000] 默认值：10
    * offset  分页的起始页，默认值为0。取值范围大于等于0。
    * minPlanTime  返回作业实例开始时间大于min_plain_time的作业实例，单位为毫秒ms，默认设置为查询当天0点，最大可支持查询一个月。
    * maxPlanTime  返回作业实例开始时间小于max_plain_time的作业实例，单位为毫秒ms，默认设置为当前时间。
    * status  实例运行状态: - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结 默认查全部
    * jobName  作业名称
    * forceSuccess  status为success的时候使用，true则筛选出强制成功的作业实例默认值：false
    * ignoreSuccess  status为success的时候使用，true则筛选出忽略失败的作业实例默认值：false
    * instanceType  作业调度方式: -0:正常调度 -2:手工调度 -5:补数据 -6:子作业调度 -7:单次调度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'contentType' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'minPlanTime' => 'int',
            'maxPlanTime' => 'int',
            'status' => 'string',
            'jobName' => 'string',
            'forceSuccess' => 'bool',
            'ignoreSuccess' => 'bool',
            'instanceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID
    * contentType  有Body体的情况下必须，无Body体的情况下则无需填写和校验，默认值：application/json
    * limit  分页返回结果，指定每页最大记录数。 范围[1,1000] 默认值：10
    * offset  分页的起始页，默认值为0。取值范围大于等于0。
    * minPlanTime  返回作业实例开始时间大于min_plain_time的作业实例，单位为毫秒ms，默认设置为查询当天0点，最大可支持查询一个月。
    * maxPlanTime  返回作业实例开始时间小于max_plain_time的作业实例，单位为毫秒ms，默认设置为当前时间。
    * status  实例运行状态: - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结 默认查全部
    * jobName  作业名称
    * forceSuccess  status为success的时候使用，true则筛选出强制成功的作业实例默认值：false
    * ignoreSuccess  status为success的时候使用，true则筛选出忽略失败的作业实例默认值：false
    * instanceType  作业调度方式: -0:正常调度 -2:手工调度 -5:补数据 -6:子作业调度 -7:单次调度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'contentType' => null,
        'limit' => null,
        'offset' => null,
        'minPlanTime' => 'int64',
        'maxPlanTime' => 'int64',
        'status' => null,
        'jobName' => null,
        'forceSuccess' => null,
        'ignoreSuccess' => null,
        'instanceType' => null
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
    * workspace  工作空间ID
    * contentType  有Body体的情况下必须，无Body体的情况下则无需填写和校验，默认值：application/json
    * limit  分页返回结果，指定每页最大记录数。 范围[1,1000] 默认值：10
    * offset  分页的起始页，默认值为0。取值范围大于等于0。
    * minPlanTime  返回作业实例开始时间大于min_plain_time的作业实例，单位为毫秒ms，默认设置为查询当天0点，最大可支持查询一个月。
    * maxPlanTime  返回作业实例开始时间小于max_plain_time的作业实例，单位为毫秒ms，默认设置为当前时间。
    * status  实例运行状态: - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结 默认查全部
    * jobName  作业名称
    * forceSuccess  status为success的时候使用，true则筛选出强制成功的作业实例默认值：false
    * ignoreSuccess  status为success的时候使用，true则筛选出忽略失败的作业实例默认值：false
    * instanceType  作业调度方式: -0:正常调度 -2:手工调度 -5:补数据 -6:子作业调度 -7:单次调度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'contentType' => 'Content-Type',
            'limit' => 'limit',
            'offset' => 'offset',
            'minPlanTime' => 'min_plan_time',
            'maxPlanTime' => 'max_plan_time',
            'status' => 'status',
            'jobName' => 'job_name',
            'forceSuccess' => 'force_success',
            'ignoreSuccess' => 'ignore_success',
            'instanceType' => 'instance_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID
    * contentType  有Body体的情况下必须，无Body体的情况下则无需填写和校验，默认值：application/json
    * limit  分页返回结果，指定每页最大记录数。 范围[1,1000] 默认值：10
    * offset  分页的起始页，默认值为0。取值范围大于等于0。
    * minPlanTime  返回作业实例开始时间大于min_plain_time的作业实例，单位为毫秒ms，默认设置为查询当天0点，最大可支持查询一个月。
    * maxPlanTime  返回作业实例开始时间小于max_plain_time的作业实例，单位为毫秒ms，默认设置为当前时间。
    * status  实例运行状态: - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结 默认查全部
    * jobName  作业名称
    * forceSuccess  status为success的时候使用，true则筛选出强制成功的作业实例默认值：false
    * ignoreSuccess  status为success的时候使用，true则筛选出忽略失败的作业实例默认值：false
    * instanceType  作业调度方式: -0:正常调度 -2:手工调度 -5:补数据 -6:子作业调度 -7:单次调度
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'contentType' => 'setContentType',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'minPlanTime' => 'setMinPlanTime',
            'maxPlanTime' => 'setMaxPlanTime',
            'status' => 'setStatus',
            'jobName' => 'setJobName',
            'forceSuccess' => 'setForceSuccess',
            'ignoreSuccess' => 'setIgnoreSuccess',
            'instanceType' => 'setInstanceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID
    * contentType  有Body体的情况下必须，无Body体的情况下则无需填写和校验，默认值：application/json
    * limit  分页返回结果，指定每页最大记录数。 范围[1,1000] 默认值：10
    * offset  分页的起始页，默认值为0。取值范围大于等于0。
    * minPlanTime  返回作业实例开始时间大于min_plain_time的作业实例，单位为毫秒ms，默认设置为查询当天0点，最大可支持查询一个月。
    * maxPlanTime  返回作业实例开始时间小于max_plain_time的作业实例，单位为毫秒ms，默认设置为当前时间。
    * status  实例运行状态: - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结 默认查全部
    * jobName  作业名称
    * forceSuccess  status为success的时候使用，true则筛选出强制成功的作业实例默认值：false
    * ignoreSuccess  status为success的时候使用，true则筛选出忽略失败的作业实例默认值：false
    * instanceType  作业调度方式: -0:正常调度 -2:手工调度 -5:补数据 -6:子作业调度 -7:单次调度
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'contentType' => 'getContentType',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'minPlanTime' => 'getMinPlanTime',
            'maxPlanTime' => 'getMaxPlanTime',
            'status' => 'getStatus',
            'jobName' => 'getJobName',
            'forceSuccess' => 'getForceSuccess',
            'ignoreSuccess' => 'getIgnoreSuccess',
            'instanceType' => 'getInstanceType'
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
    const STATUS_WAITING = 'waiting';
    const STATUS_RUNNING = 'running';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAIL = 'fail';
    const STATUS_RUNNING_EXCEPTION = 'running-exception';
    const STATUS_PAUSE = 'pause';
    const STATUS_MANUAL_STOP = 'manual-stop';
    const STATUS_SKIP_BY_DEPEND = 'skip-by-depend';
    const STATUS_FREEZE = 'freeze';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_RUNNING,
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
            self::STATUS_RUNNING_EXCEPTION,
            self::STATUS_PAUSE,
            self::STATUS_MANUAL_STOP,
            self::STATUS_SKIP_BY_DEPEND,
            self::STATUS_FREEZE,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['minPlanTime'] = isset($data['minPlanTime']) ? $data['minPlanTime'] : null;
        $this->container['maxPlanTime'] = isset($data['maxPlanTime']) ? $data['maxPlanTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['forceSuccess'] = isset($data['forceSuccess']) ? $data['forceSuccess'] : null;
        $this->container['ignoreSuccess'] = isset($data['ignoreSuccess']) ? $data['ignoreSuccess'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
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

        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
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
    * Gets workspace
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string|null $workspace 工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets contentType
    *  有Body体的情况下必须，无Body体的情况下则无需填写和校验，默认值：application/json
    *
    * @return string|null
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string|null $contentType 有Body体的情况下必须，无Body体的情况下则无需填写和校验，默认值：application/json
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets limit
    *  分页返回结果，指定每页最大记录数。 范围[1,1000] 默认值：10
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
    * @param int|null $limit 分页返回结果，指定每页最大记录数。 范围[1,1000] 默认值：10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页的起始页，默认值为0。取值范围大于等于0。
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
    * @param int|null $offset 分页的起始页，默认值为0。取值范围大于等于0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets minPlanTime
    *  返回作业实例开始时间大于min_plain_time的作业实例，单位为毫秒ms，默认设置为查询当天0点，最大可支持查询一个月。
    *
    * @return int|null
    */
    public function getMinPlanTime()
    {
        return $this->container['minPlanTime'];
    }

    /**
    * Sets minPlanTime
    *
    * @param int|null $minPlanTime 返回作业实例开始时间大于min_plain_time的作业实例，单位为毫秒ms，默认设置为查询当天0点，最大可支持查询一个月。
    *
    * @return $this
    */
    public function setMinPlanTime($minPlanTime)
    {
        $this->container['minPlanTime'] = $minPlanTime;
        return $this;
    }

    /**
    * Gets maxPlanTime
    *  返回作业实例开始时间小于max_plain_time的作业实例，单位为毫秒ms，默认设置为当前时间。
    *
    * @return int|null
    */
    public function getMaxPlanTime()
    {
        return $this->container['maxPlanTime'];
    }

    /**
    * Sets maxPlanTime
    *
    * @param int|null $maxPlanTime 返回作业实例开始时间小于max_plain_time的作业实例，单位为毫秒ms，默认设置为当前时间。
    *
    * @return $this
    */
    public function setMaxPlanTime($maxPlanTime)
    {
        $this->container['maxPlanTime'] = $maxPlanTime;
        return $this;
    }

    /**
    * Gets status
    *  实例运行状态: - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结 默认查全部
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
    * @param string|null $status 实例运行状态: - waiting：等待运行 - running：运行中 - success：运行成功 - fail： 运行失败 - running-exception：运行异常 - pause： 暂停 - manual-stop：取消 - skip-by-depend：跳过 - freeze：冻结 默认查全部
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称
    *
    * @return string
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string $jobName 作业名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets forceSuccess
    *  status为success的时候使用，true则筛选出强制成功的作业实例默认值：false
    *
    * @return bool|null
    */
    public function getForceSuccess()
    {
        return $this->container['forceSuccess'];
    }

    /**
    * Sets forceSuccess
    *
    * @param bool|null $forceSuccess status为success的时候使用，true则筛选出强制成功的作业实例默认值：false
    *
    * @return $this
    */
    public function setForceSuccess($forceSuccess)
    {
        $this->container['forceSuccess'] = $forceSuccess;
        return $this;
    }

    /**
    * Gets ignoreSuccess
    *  status为success的时候使用，true则筛选出忽略失败的作业实例默认值：false
    *
    * @return bool|null
    */
    public function getIgnoreSuccess()
    {
        return $this->container['ignoreSuccess'];
    }

    /**
    * Sets ignoreSuccess
    *
    * @param bool|null $ignoreSuccess status为success的时候使用，true则筛选出忽略失败的作业实例默认值：false
    *
    * @return $this
    */
    public function setIgnoreSuccess($ignoreSuccess)
    {
        $this->container['ignoreSuccess'] = $ignoreSuccess;
        return $this;
    }

    /**
    * Gets instanceType
    *  作业调度方式: -0:正常调度 -2:手工调度 -5:补数据 -6:子作业调度 -7:单次调度
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 作业调度方式: -0:正常调度 -2:手工调度 -5:补数据 -6:子作业调度 -7:单次调度
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
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

