<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobBasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobBasicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executor  **参数解释：** 执行人用户名。 **取值范围：** 不涉及。
    * finishTime  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * jobResult  jobResult
    * jobType  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    * process  process
    * startTime  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    * taskId  **参数解释：**  任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executor' => 'string',
            'finishTime' => 'string',
            'jobResult' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobResultInfo',
            'jobType' => 'string',
            'process' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ProcessInfo',
            'startTime' => 'string',
            'status' => 'string',
            'taskId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executor  **参数解释：** 执行人用户名。 **取值范围：** 不涉及。
    * finishTime  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * jobResult  jobResult
    * jobType  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    * process  process
    * startTime  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    * taskId  **参数解释：**  任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executor' => null,
        'finishTime' => null,
        'jobResult' => null,
        'jobType' => null,
        'process' => null,
        'startTime' => null,
        'status' => null,
        'taskId' => null
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
    * executor  **参数解释：** 执行人用户名。 **取值范围：** 不涉及。
    * finishTime  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * jobResult  jobResult
    * jobType  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    * process  process
    * startTime  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    * taskId  **参数解释：**  任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executor' => 'executor',
            'finishTime' => 'finishTime',
            'jobResult' => 'jobResult',
            'jobType' => 'jobType',
            'process' => 'process',
            'startTime' => 'startTime',
            'status' => 'status',
            'taskId' => 'taskId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executor  **参数解释：** 执行人用户名。 **取值范围：** 不涉及。
    * finishTime  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * jobResult  jobResult
    * jobType  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    * process  process
    * startTime  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    * taskId  **参数解释：**  任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'executor' => 'setExecutor',
            'finishTime' => 'setFinishTime',
            'jobResult' => 'setJobResult',
            'jobType' => 'setJobType',
            'process' => 'setProcess',
            'startTime' => 'setStartTime',
            'status' => 'setStatus',
            'taskId' => 'setTaskId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executor  **参数解释：** 执行人用户名。 **取值范围：** 不涉及。
    * finishTime  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * jobResult  jobResult
    * jobType  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    * process  process
    * startTime  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    * status  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    * taskId  **参数解释：**  任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'executor' => 'getExecutor',
            'finishTime' => 'getFinishTime',
            'jobResult' => 'getJobResult',
            'jobType' => 'getJobType',
            'process' => 'getProcess',
            'startTime' => 'getStartTime',
            'status' => 'getStatus',
            'taskId' => 'getTaskId'
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
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['jobResult'] = isset($data['jobResult']) ? $data['jobResult'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
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
    * Gets executor
    *  **参数解释：** 执行人用户名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string|null $executor **参数解释：** 执行人用户名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
        return $this;
    }

    /**
    * Gets finishTime
    *  **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime **参数解释：** 执行记录的检查完成时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets jobResult
    *  jobResult
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobResultInfo|null
    */
    public function getJobResult()
    {
        return $this->container['jobResult'];
    }

    /**
    * Sets jobResult
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\JobResultInfo|null $jobResult jobResult
    *
    * @return $this
    */
    public function setJobResult($jobResult)
    {
        $this->container['jobResult'] = $jobResult;
        return $this;
    }

    /**
    * Gets jobType
    *  **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
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
    * @param string|null $jobType **参数解释:** 任务类型。 **取值范围:** - FULL：版本级任务。 - INC_GIT：门禁级任务。 [- INC_COMMIT：流水线指定commitId增量检查、代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hws,hws_hk) [- INC_COMMIT：代码检查任务设置-检查范围-版本级检查模式的最近一次提交检查。](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs) [- INC_LAST_SUCCESS_COMMIT：流水线指定commitId以及最后一次门禁成功的commitId间的增量检查。](tag:hws,hws_hk)
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets process
    *  process
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ProcessInfo|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\ProcessInfo|null $process process
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
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
    * @param string|null $startTime **参数解释：**  执行记录的检查开始时间，使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ，例如\"2025-11-28T06:55:41Z\"。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
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
    * @param string|null $status **参数解释:** 任务执行状态。 **取值范围:** - quering：初始状态。 - running：执行中。 - success：检查成功。 - failed：检查失败。 - aborted：任务中止。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释：**  任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释：**  任务ID，即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。即[[查询任务列表](https://support.huaweicloud.com/api-codecheck/ShowTasksList.html)](tag:hws)[[查询任务列表](https://support.huaweicloud.com/intl/zh-cn/api-codecheck/ShowTasksList.html)](tag:hws_hk)[查询任务列表](tag:hcs,hcs_sm)接口响应中的id字段。 **取值范围：** 长度为[1~32]个字符。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
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

