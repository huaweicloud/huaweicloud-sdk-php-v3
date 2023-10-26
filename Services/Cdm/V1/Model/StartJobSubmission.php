<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartJobSubmission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartJobSubmission';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isIncrementing  作业是否为增量迁移
    * deleteRows  删除数据行数
    * updateRows  更新数据行数
    * writeRows  写入数据行数
    * submissionId  作业提交id
    * jobName  作业名称
    * creationUser  创建用户
    * creationDate  创建时间，单位：毫秒。
    * executeDate  执行时间
    * progress  作业进度，失败时为“-1”，其它情况为0～100
    * status  作业状态： - BOOTING：启动中。 - FAILURE_ON_SUBMIT：提交失败。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - UNKNOWN：未知。 - NEVER_EXECUTED：未被执行
    * isStopingIncrement  是否停止增量迁移
    * isExecuteAuto  是否定时执行作业
    * lastUpdateDate  作业最后更新时间
    * lastUdpateUser  最后更新作业状态的用户
    * isDeleteJob  作业执行完成后是否删除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isIncrementing' => 'bool',
            'deleteRows' => 'int',
            'updateRows' => 'int',
            'writeRows' => 'int',
            'submissionId' => 'int',
            'jobName' => 'string',
            'creationUser' => 'string',
            'creationDate' => 'int',
            'executeDate' => 'int',
            'progress' => 'float',
            'status' => 'string',
            'isStopingIncrement' => 'string',
            'isExecuteAuto' => 'bool',
            'lastUpdateDate' => 'int',
            'lastUdpateUser' => 'string',
            'isDeleteJob' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isIncrementing  作业是否为增量迁移
    * deleteRows  删除数据行数
    * updateRows  更新数据行数
    * writeRows  写入数据行数
    * submissionId  作业提交id
    * jobName  作业名称
    * creationUser  创建用户
    * creationDate  创建时间，单位：毫秒。
    * executeDate  执行时间
    * progress  作业进度，失败时为“-1”，其它情况为0～100
    * status  作业状态： - BOOTING：启动中。 - FAILURE_ON_SUBMIT：提交失败。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - UNKNOWN：未知。 - NEVER_EXECUTED：未被执行
    * isStopingIncrement  是否停止增量迁移
    * isExecuteAuto  是否定时执行作业
    * lastUpdateDate  作业最后更新时间
    * lastUdpateUser  最后更新作业状态的用户
    * isDeleteJob  作业执行完成后是否删除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isIncrementing' => null,
        'deleteRows' => 'int32',
        'updateRows' => 'int32',
        'writeRows' => 'int32',
        'submissionId' => 'int32',
        'jobName' => null,
        'creationUser' => null,
        'creationDate' => 'int64',
        'executeDate' => 'int64',
        'progress' => 'float',
        'status' => null,
        'isStopingIncrement' => null,
        'isExecuteAuto' => null,
        'lastUpdateDate' => 'int64',
        'lastUdpateUser' => null,
        'isDeleteJob' => null
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
    * isIncrementing  作业是否为增量迁移
    * deleteRows  删除数据行数
    * updateRows  更新数据行数
    * writeRows  写入数据行数
    * submissionId  作业提交id
    * jobName  作业名称
    * creationUser  创建用户
    * creationDate  创建时间，单位：毫秒。
    * executeDate  执行时间
    * progress  作业进度，失败时为“-1”，其它情况为0～100
    * status  作业状态： - BOOTING：启动中。 - FAILURE_ON_SUBMIT：提交失败。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - UNKNOWN：未知。 - NEVER_EXECUTED：未被执行
    * isStopingIncrement  是否停止增量迁移
    * isExecuteAuto  是否定时执行作业
    * lastUpdateDate  作业最后更新时间
    * lastUdpateUser  最后更新作业状态的用户
    * isDeleteJob  作业执行完成后是否删除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isIncrementing' => 'isIncrementing',
            'deleteRows' => 'delete_rows',
            'updateRows' => 'update_rows',
            'writeRows' => 'write_rows',
            'submissionId' => 'submission-id',
            'jobName' => 'job-name',
            'creationUser' => 'creation-user',
            'creationDate' => 'creation-date',
            'executeDate' => 'execute-date',
            'progress' => 'progress',
            'status' => 'status',
            'isStopingIncrement' => 'isStopingIncrement',
            'isExecuteAuto' => 'is-execute-auto',
            'lastUpdateDate' => 'last-update-date',
            'lastUdpateUser' => 'last-udpate-user',
            'isDeleteJob' => 'isDeleteJob'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isIncrementing  作业是否为增量迁移
    * deleteRows  删除数据行数
    * updateRows  更新数据行数
    * writeRows  写入数据行数
    * submissionId  作业提交id
    * jobName  作业名称
    * creationUser  创建用户
    * creationDate  创建时间，单位：毫秒。
    * executeDate  执行时间
    * progress  作业进度，失败时为“-1”，其它情况为0～100
    * status  作业状态： - BOOTING：启动中。 - FAILURE_ON_SUBMIT：提交失败。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - UNKNOWN：未知。 - NEVER_EXECUTED：未被执行
    * isStopingIncrement  是否停止增量迁移
    * isExecuteAuto  是否定时执行作业
    * lastUpdateDate  作业最后更新时间
    * lastUdpateUser  最后更新作业状态的用户
    * isDeleteJob  作业执行完成后是否删除
    *
    * @var string[]
    */
    protected static $setters = [
            'isIncrementing' => 'setIsIncrementing',
            'deleteRows' => 'setDeleteRows',
            'updateRows' => 'setUpdateRows',
            'writeRows' => 'setWriteRows',
            'submissionId' => 'setSubmissionId',
            'jobName' => 'setJobName',
            'creationUser' => 'setCreationUser',
            'creationDate' => 'setCreationDate',
            'executeDate' => 'setExecuteDate',
            'progress' => 'setProgress',
            'status' => 'setStatus',
            'isStopingIncrement' => 'setIsStopingIncrement',
            'isExecuteAuto' => 'setIsExecuteAuto',
            'lastUpdateDate' => 'setLastUpdateDate',
            'lastUdpateUser' => 'setLastUdpateUser',
            'isDeleteJob' => 'setIsDeleteJob'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isIncrementing  作业是否为增量迁移
    * deleteRows  删除数据行数
    * updateRows  更新数据行数
    * writeRows  写入数据行数
    * submissionId  作业提交id
    * jobName  作业名称
    * creationUser  创建用户
    * creationDate  创建时间，单位：毫秒。
    * executeDate  执行时间
    * progress  作业进度，失败时为“-1”，其它情况为0～100
    * status  作业状态： - BOOTING：启动中。 - FAILURE_ON_SUBMIT：提交失败。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - UNKNOWN：未知。 - NEVER_EXECUTED：未被执行
    * isStopingIncrement  是否停止增量迁移
    * isExecuteAuto  是否定时执行作业
    * lastUpdateDate  作业最后更新时间
    * lastUdpateUser  最后更新作业状态的用户
    * isDeleteJob  作业执行完成后是否删除
    *
    * @var string[]
    */
    protected static $getters = [
            'isIncrementing' => 'getIsIncrementing',
            'deleteRows' => 'getDeleteRows',
            'updateRows' => 'getUpdateRows',
            'writeRows' => 'getWriteRows',
            'submissionId' => 'getSubmissionId',
            'jobName' => 'getJobName',
            'creationUser' => 'getCreationUser',
            'creationDate' => 'getCreationDate',
            'executeDate' => 'getExecuteDate',
            'progress' => 'getProgress',
            'status' => 'getStatus',
            'isStopingIncrement' => 'getIsStopingIncrement',
            'isExecuteAuto' => 'getIsExecuteAuto',
            'lastUpdateDate' => 'getLastUpdateDate',
            'lastUdpateUser' => 'getLastUdpateUser',
            'isDeleteJob' => 'getIsDeleteJob'
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
        $this->container['isIncrementing'] = isset($data['isIncrementing']) ? $data['isIncrementing'] : null;
        $this->container['deleteRows'] = isset($data['deleteRows']) ? $data['deleteRows'] : null;
        $this->container['updateRows'] = isset($data['updateRows']) ? $data['updateRows'] : null;
        $this->container['writeRows'] = isset($data['writeRows']) ? $data['writeRows'] : null;
        $this->container['submissionId'] = isset($data['submissionId']) ? $data['submissionId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['creationUser'] = isset($data['creationUser']) ? $data['creationUser'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['executeDate'] = isset($data['executeDate']) ? $data['executeDate'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isStopingIncrement'] = isset($data['isStopingIncrement']) ? $data['isStopingIncrement'] : null;
        $this->container['isExecuteAuto'] = isset($data['isExecuteAuto']) ? $data['isExecuteAuto'] : null;
        $this->container['lastUpdateDate'] = isset($data['lastUpdateDate']) ? $data['lastUpdateDate'] : null;
        $this->container['lastUdpateUser'] = isset($data['lastUdpateUser']) ? $data['lastUdpateUser'] : null;
        $this->container['isDeleteJob'] = isset($data['isDeleteJob']) ? $data['isDeleteJob'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
        if ($this->container['creationUser'] === null) {
            $invalidProperties[] = "'creationUser' can't be null";
        }
        if ($this->container['creationDate'] === null) {
            $invalidProperties[] = "'creationDate' can't be null";
        }
        if ($this->container['progress'] === null) {
            $invalidProperties[] = "'progress' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets isIncrementing
    *  作业是否为增量迁移
    *
    * @return bool|null
    */
    public function getIsIncrementing()
    {
        return $this->container['isIncrementing'];
    }

    /**
    * Sets isIncrementing
    *
    * @param bool|null $isIncrementing 作业是否为增量迁移
    *
    * @return $this
    */
    public function setIsIncrementing($isIncrementing)
    {
        $this->container['isIncrementing'] = $isIncrementing;
        return $this;
    }

    /**
    * Gets deleteRows
    *  删除数据行数
    *
    * @return int|null
    */
    public function getDeleteRows()
    {
        return $this->container['deleteRows'];
    }

    /**
    * Sets deleteRows
    *
    * @param int|null $deleteRows 删除数据行数
    *
    * @return $this
    */
    public function setDeleteRows($deleteRows)
    {
        $this->container['deleteRows'] = $deleteRows;
        return $this;
    }

    /**
    * Gets updateRows
    *  更新数据行数
    *
    * @return int|null
    */
    public function getUpdateRows()
    {
        return $this->container['updateRows'];
    }

    /**
    * Sets updateRows
    *
    * @param int|null $updateRows 更新数据行数
    *
    * @return $this
    */
    public function setUpdateRows($updateRows)
    {
        $this->container['updateRows'] = $updateRows;
        return $this;
    }

    /**
    * Gets writeRows
    *  写入数据行数
    *
    * @return int|null
    */
    public function getWriteRows()
    {
        return $this->container['writeRows'];
    }

    /**
    * Sets writeRows
    *
    * @param int|null $writeRows 写入数据行数
    *
    * @return $this
    */
    public function setWriteRows($writeRows)
    {
        $this->container['writeRows'] = $writeRows;
        return $this;
    }

    /**
    * Gets submissionId
    *  作业提交id
    *
    * @return int|null
    */
    public function getSubmissionId()
    {
        return $this->container['submissionId'];
    }

    /**
    * Sets submissionId
    *
    * @param int|null $submissionId 作业提交id
    *
    * @return $this
    */
    public function setSubmissionId($submissionId)
    {
        $this->container['submissionId'] = $submissionId;
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
    * Gets creationUser
    *  创建用户
    *
    * @return string
    */
    public function getCreationUser()
    {
        return $this->container['creationUser'];
    }

    /**
    * Sets creationUser
    *
    * @param string $creationUser 创建用户
    *
    * @return $this
    */
    public function setCreationUser($creationUser)
    {
        $this->container['creationUser'] = $creationUser;
        return $this;
    }

    /**
    * Gets creationDate
    *  创建时间，单位：毫秒。
    *
    * @return int
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param int $creationDate 创建时间，单位：毫秒。
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets executeDate
    *  执行时间
    *
    * @return int|null
    */
    public function getExecuteDate()
    {
        return $this->container['executeDate'];
    }

    /**
    * Sets executeDate
    *
    * @param int|null $executeDate 执行时间
    *
    * @return $this
    */
    public function setExecuteDate($executeDate)
    {
        $this->container['executeDate'] = $executeDate;
        return $this;
    }

    /**
    * Gets progress
    *  作业进度，失败时为“-1”，其它情况为0～100
    *
    * @return float
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param float $progress 作业进度，失败时为“-1”，其它情况为0～100
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets status
    *  作业状态： - BOOTING：启动中。 - FAILURE_ON_SUBMIT：提交失败。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - UNKNOWN：未知。 - NEVER_EXECUTED：未被执行
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 作业状态： - BOOTING：启动中。 - FAILURE_ON_SUBMIT：提交失败。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - UNKNOWN：未知。 - NEVER_EXECUTED：未被执行
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets isStopingIncrement
    *  是否停止增量迁移
    *
    * @return string|null
    */
    public function getIsStopingIncrement()
    {
        return $this->container['isStopingIncrement'];
    }

    /**
    * Sets isStopingIncrement
    *
    * @param string|null $isStopingIncrement 是否停止增量迁移
    *
    * @return $this
    */
    public function setIsStopingIncrement($isStopingIncrement)
    {
        $this->container['isStopingIncrement'] = $isStopingIncrement;
        return $this;
    }

    /**
    * Gets isExecuteAuto
    *  是否定时执行作业
    *
    * @return bool|null
    */
    public function getIsExecuteAuto()
    {
        return $this->container['isExecuteAuto'];
    }

    /**
    * Sets isExecuteAuto
    *
    * @param bool|null $isExecuteAuto 是否定时执行作业
    *
    * @return $this
    */
    public function setIsExecuteAuto($isExecuteAuto)
    {
        $this->container['isExecuteAuto'] = $isExecuteAuto;
        return $this;
    }

    /**
    * Gets lastUpdateDate
    *  作业最后更新时间
    *
    * @return int|null
    */
    public function getLastUpdateDate()
    {
        return $this->container['lastUpdateDate'];
    }

    /**
    * Sets lastUpdateDate
    *
    * @param int|null $lastUpdateDate 作业最后更新时间
    *
    * @return $this
    */
    public function setLastUpdateDate($lastUpdateDate)
    {
        $this->container['lastUpdateDate'] = $lastUpdateDate;
        return $this;
    }

    /**
    * Gets lastUdpateUser
    *  最后更新作业状态的用户
    *
    * @return string|null
    */
    public function getLastUdpateUser()
    {
        return $this->container['lastUdpateUser'];
    }

    /**
    * Sets lastUdpateUser
    *
    * @param string|null $lastUdpateUser 最后更新作业状态的用户
    *
    * @return $this
    */
    public function setLastUdpateUser($lastUdpateUser)
    {
        $this->container['lastUdpateUser'] = $lastUdpateUser;
        return $this;
    }

    /**
    * Gets isDeleteJob
    *  作业执行完成后是否删除
    *
    * @return bool|null
    */
    public function getIsDeleteJob()
    {
        return $this->container['isDeleteJob'];
    }

    /**
    * Sets isDeleteJob
    *
    * @param bool|null $isDeleteJob 作业执行完成后是否删除
    *
    * @return $this
    */
    public function setIsDeleteJob($isDeleteJob)
    {
        $this->container['isDeleteJob'] = $isDeleteJob;
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

