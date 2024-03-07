<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Job implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Job';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobType  作业类型： - NORMAL_JOB：表/文件迁移。 - BATCH_JOB：整库迁移。 - SCENARIO_JOB：场景迁移。
    * fromConnectorName  源端连接类型
    * toConfigValues  toConfigValues
    * toLinkName  目的端连接名称
    * driverConfigValues  driverConfigValues
    * fromConfigValues  fromConfigValues
    * toConnectorName  目的端连接类型
    * name  作业名称，长度在1到240个字符之间
    * fromLinkName  源连接名称
    * creationUser  创建的用户。
    * creationDate  作业创建的时间，单位：毫秒。
    * updateDate  作业最后更新的时间，单位：毫秒。
    * isIncreJob  是否增量
    * flag  标记
    * filesRead  已读文件数
    * updateUser  作业最后更新的用户。
    * externalId  外部ID。
    * type  作业类型
    * executeStartDate  执行_开始_日期。
    * deleteRows  删除行数
    * enabled  是否激活连接
    * bytesWritten  写入字节
    * id  作业ID
    * isUseSql  用户是否使用sql
    * updateRows  更新行数
    * groupName  组_名称
    * bytesRead  读取字节
    * executeUpdateDate  执行_更新_日期。
    * writeRows  写入数据行数
    * rowsWritten  写入行数
    * rowsRead  读取的行数
    * filesWritten  写入文件数
    * isIncrementing  是否增量
    * executeCreateDate  执行_创建_日期
    * status  作业最后的执行状态： - BOOTING：启动中。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - NEW：未被执行。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobType' => 'string',
            'fromConnectorName' => 'string',
            'toConfigValues' => '\HuaweiCloud\SDK\Cdm\V1\Model\ConfigValues',
            'toLinkName' => 'string',
            'driverConfigValues' => '\HuaweiCloud\SDK\Cdm\V1\Model\ConfigValues',
            'fromConfigValues' => '\HuaweiCloud\SDK\Cdm\V1\Model\ConfigValues',
            'toConnectorName' => 'string',
            'name' => 'string',
            'fromLinkName' => 'string',
            'creationUser' => 'string',
            'creationDate' => 'int',
            'updateDate' => 'int',
            'isIncreJob' => 'bool',
            'flag' => 'int',
            'filesRead' => 'int',
            'updateUser' => 'string',
            'externalId' => 'string',
            'type' => 'string',
            'executeStartDate' => 'int',
            'deleteRows' => 'int',
            'enabled' => 'bool',
            'bytesWritten' => 'int',
            'id' => 'int',
            'isUseSql' => 'bool',
            'updateRows' => 'int',
            'groupName' => 'string',
            'bytesRead' => 'int',
            'executeUpdateDate' => 'int',
            'writeRows' => 'int',
            'rowsWritten' => 'int',
            'rowsRead' => 'int',
            'filesWritten' => 'int',
            'isIncrementing' => 'bool',
            'executeCreateDate' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobType  作业类型： - NORMAL_JOB：表/文件迁移。 - BATCH_JOB：整库迁移。 - SCENARIO_JOB：场景迁移。
    * fromConnectorName  源端连接类型
    * toConfigValues  toConfigValues
    * toLinkName  目的端连接名称
    * driverConfigValues  driverConfigValues
    * fromConfigValues  fromConfigValues
    * toConnectorName  目的端连接类型
    * name  作业名称，长度在1到240个字符之间
    * fromLinkName  源连接名称
    * creationUser  创建的用户。
    * creationDate  作业创建的时间，单位：毫秒。
    * updateDate  作业最后更新的时间，单位：毫秒。
    * isIncreJob  是否增量
    * flag  标记
    * filesRead  已读文件数
    * updateUser  作业最后更新的用户。
    * externalId  外部ID。
    * type  作业类型
    * executeStartDate  执行_开始_日期。
    * deleteRows  删除行数
    * enabled  是否激活连接
    * bytesWritten  写入字节
    * id  作业ID
    * isUseSql  用户是否使用sql
    * updateRows  更新行数
    * groupName  组_名称
    * bytesRead  读取字节
    * executeUpdateDate  执行_更新_日期。
    * writeRows  写入数据行数
    * rowsWritten  写入行数
    * rowsRead  读取的行数
    * filesWritten  写入文件数
    * isIncrementing  是否增量
    * executeCreateDate  执行_创建_日期
    * status  作业最后的执行状态： - BOOTING：启动中。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - NEW：未被执行。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobType' => null,
        'fromConnectorName' => null,
        'toConfigValues' => null,
        'toLinkName' => null,
        'driverConfigValues' => null,
        'fromConfigValues' => null,
        'toConnectorName' => null,
        'name' => null,
        'fromLinkName' => null,
        'creationUser' => null,
        'creationDate' => 'int64',
        'updateDate' => 'int64',
        'isIncreJob' => null,
        'flag' => 'int32',
        'filesRead' => 'int32',
        'updateUser' => null,
        'externalId' => null,
        'type' => null,
        'executeStartDate' => 'int64',
        'deleteRows' => 'int32',
        'enabled' => null,
        'bytesWritten' => 'int64',
        'id' => 'int32',
        'isUseSql' => null,
        'updateRows' => 'int32',
        'groupName' => null,
        'bytesRead' => 'int64',
        'executeUpdateDate' => 'int64',
        'writeRows' => 'int32',
        'rowsWritten' => 'int32',
        'rowsRead' => 'int64',
        'filesWritten' => 'int32',
        'isIncrementing' => null,
        'executeCreateDate' => 'int64',
        'status' => null
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
    * jobType  作业类型： - NORMAL_JOB：表/文件迁移。 - BATCH_JOB：整库迁移。 - SCENARIO_JOB：场景迁移。
    * fromConnectorName  源端连接类型
    * toConfigValues  toConfigValues
    * toLinkName  目的端连接名称
    * driverConfigValues  driverConfigValues
    * fromConfigValues  fromConfigValues
    * toConnectorName  目的端连接类型
    * name  作业名称，长度在1到240个字符之间
    * fromLinkName  源连接名称
    * creationUser  创建的用户。
    * creationDate  作业创建的时间，单位：毫秒。
    * updateDate  作业最后更新的时间，单位：毫秒。
    * isIncreJob  是否增量
    * flag  标记
    * filesRead  已读文件数
    * updateUser  作业最后更新的用户。
    * externalId  外部ID。
    * type  作业类型
    * executeStartDate  执行_开始_日期。
    * deleteRows  删除行数
    * enabled  是否激活连接
    * bytesWritten  写入字节
    * id  作业ID
    * isUseSql  用户是否使用sql
    * updateRows  更新行数
    * groupName  组_名称
    * bytesRead  读取字节
    * executeUpdateDate  执行_更新_日期。
    * writeRows  写入数据行数
    * rowsWritten  写入行数
    * rowsRead  读取的行数
    * filesWritten  写入文件数
    * isIncrementing  是否增量
    * executeCreateDate  执行_创建_日期
    * status  作业最后的执行状态： - BOOTING：启动中。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - NEW：未被执行。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobType' => 'job_type',
            'fromConnectorName' => 'from-connector-name',
            'toConfigValues' => 'to-config-values',
            'toLinkName' => 'to-link-name',
            'driverConfigValues' => 'driver-config-values',
            'fromConfigValues' => 'from-config-values',
            'toConnectorName' => 'to-connector-name',
            'name' => 'name',
            'fromLinkName' => 'from-link-name',
            'creationUser' => 'creation-user',
            'creationDate' => 'creation-date',
            'updateDate' => 'update-date',
            'isIncreJob' => 'is_incre_job',
            'flag' => 'flag',
            'filesRead' => 'files_read',
            'updateUser' => 'update-user',
            'externalId' => 'external_id',
            'type' => 'type',
            'executeStartDate' => 'execute_start_date',
            'deleteRows' => 'delete_rows',
            'enabled' => 'enabled',
            'bytesWritten' => 'bytes_written',
            'id' => 'id',
            'isUseSql' => 'is_use_sql',
            'updateRows' => 'update_rows',
            'groupName' => 'group_name',
            'bytesRead' => 'bytes_read',
            'executeUpdateDate' => 'execute_update_date',
            'writeRows' => 'write_rows',
            'rowsWritten' => 'rows_written',
            'rowsRead' => 'rows_read',
            'filesWritten' => 'files_written',
            'isIncrementing' => 'is_incrementing',
            'executeCreateDate' => 'execute_create_date',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobType  作业类型： - NORMAL_JOB：表/文件迁移。 - BATCH_JOB：整库迁移。 - SCENARIO_JOB：场景迁移。
    * fromConnectorName  源端连接类型
    * toConfigValues  toConfigValues
    * toLinkName  目的端连接名称
    * driverConfigValues  driverConfigValues
    * fromConfigValues  fromConfigValues
    * toConnectorName  目的端连接类型
    * name  作业名称，长度在1到240个字符之间
    * fromLinkName  源连接名称
    * creationUser  创建的用户。
    * creationDate  作业创建的时间，单位：毫秒。
    * updateDate  作业最后更新的时间，单位：毫秒。
    * isIncreJob  是否增量
    * flag  标记
    * filesRead  已读文件数
    * updateUser  作业最后更新的用户。
    * externalId  外部ID。
    * type  作业类型
    * executeStartDate  执行_开始_日期。
    * deleteRows  删除行数
    * enabled  是否激活连接
    * bytesWritten  写入字节
    * id  作业ID
    * isUseSql  用户是否使用sql
    * updateRows  更新行数
    * groupName  组_名称
    * bytesRead  读取字节
    * executeUpdateDate  执行_更新_日期。
    * writeRows  写入数据行数
    * rowsWritten  写入行数
    * rowsRead  读取的行数
    * filesWritten  写入文件数
    * isIncrementing  是否增量
    * executeCreateDate  执行_创建_日期
    * status  作业最后的执行状态： - BOOTING：启动中。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - NEW：未被执行。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobType' => 'setJobType',
            'fromConnectorName' => 'setFromConnectorName',
            'toConfigValues' => 'setToConfigValues',
            'toLinkName' => 'setToLinkName',
            'driverConfigValues' => 'setDriverConfigValues',
            'fromConfigValues' => 'setFromConfigValues',
            'toConnectorName' => 'setToConnectorName',
            'name' => 'setName',
            'fromLinkName' => 'setFromLinkName',
            'creationUser' => 'setCreationUser',
            'creationDate' => 'setCreationDate',
            'updateDate' => 'setUpdateDate',
            'isIncreJob' => 'setIsIncreJob',
            'flag' => 'setFlag',
            'filesRead' => 'setFilesRead',
            'updateUser' => 'setUpdateUser',
            'externalId' => 'setExternalId',
            'type' => 'setType',
            'executeStartDate' => 'setExecuteStartDate',
            'deleteRows' => 'setDeleteRows',
            'enabled' => 'setEnabled',
            'bytesWritten' => 'setBytesWritten',
            'id' => 'setId',
            'isUseSql' => 'setIsUseSql',
            'updateRows' => 'setUpdateRows',
            'groupName' => 'setGroupName',
            'bytesRead' => 'setBytesRead',
            'executeUpdateDate' => 'setExecuteUpdateDate',
            'writeRows' => 'setWriteRows',
            'rowsWritten' => 'setRowsWritten',
            'rowsRead' => 'setRowsRead',
            'filesWritten' => 'setFilesWritten',
            'isIncrementing' => 'setIsIncrementing',
            'executeCreateDate' => 'setExecuteCreateDate',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobType  作业类型： - NORMAL_JOB：表/文件迁移。 - BATCH_JOB：整库迁移。 - SCENARIO_JOB：场景迁移。
    * fromConnectorName  源端连接类型
    * toConfigValues  toConfigValues
    * toLinkName  目的端连接名称
    * driverConfigValues  driverConfigValues
    * fromConfigValues  fromConfigValues
    * toConnectorName  目的端连接类型
    * name  作业名称，长度在1到240个字符之间
    * fromLinkName  源连接名称
    * creationUser  创建的用户。
    * creationDate  作业创建的时间，单位：毫秒。
    * updateDate  作业最后更新的时间，单位：毫秒。
    * isIncreJob  是否增量
    * flag  标记
    * filesRead  已读文件数
    * updateUser  作业最后更新的用户。
    * externalId  外部ID。
    * type  作业类型
    * executeStartDate  执行_开始_日期。
    * deleteRows  删除行数
    * enabled  是否激活连接
    * bytesWritten  写入字节
    * id  作业ID
    * isUseSql  用户是否使用sql
    * updateRows  更新行数
    * groupName  组_名称
    * bytesRead  读取字节
    * executeUpdateDate  执行_更新_日期。
    * writeRows  写入数据行数
    * rowsWritten  写入行数
    * rowsRead  读取的行数
    * filesWritten  写入文件数
    * isIncrementing  是否增量
    * executeCreateDate  执行_创建_日期
    * status  作业最后的执行状态： - BOOTING：启动中。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - NEW：未被执行。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobType' => 'getJobType',
            'fromConnectorName' => 'getFromConnectorName',
            'toConfigValues' => 'getToConfigValues',
            'toLinkName' => 'getToLinkName',
            'driverConfigValues' => 'getDriverConfigValues',
            'fromConfigValues' => 'getFromConfigValues',
            'toConnectorName' => 'getToConnectorName',
            'name' => 'getName',
            'fromLinkName' => 'getFromLinkName',
            'creationUser' => 'getCreationUser',
            'creationDate' => 'getCreationDate',
            'updateDate' => 'getUpdateDate',
            'isIncreJob' => 'getIsIncreJob',
            'flag' => 'getFlag',
            'filesRead' => 'getFilesRead',
            'updateUser' => 'getUpdateUser',
            'externalId' => 'getExternalId',
            'type' => 'getType',
            'executeStartDate' => 'getExecuteStartDate',
            'deleteRows' => 'getDeleteRows',
            'enabled' => 'getEnabled',
            'bytesWritten' => 'getBytesWritten',
            'id' => 'getId',
            'isUseSql' => 'getIsUseSql',
            'updateRows' => 'getUpdateRows',
            'groupName' => 'getGroupName',
            'bytesRead' => 'getBytesRead',
            'executeUpdateDate' => 'getExecuteUpdateDate',
            'writeRows' => 'getWriteRows',
            'rowsWritten' => 'getRowsWritten',
            'rowsRead' => 'getRowsRead',
            'filesWritten' => 'getFilesWritten',
            'isIncrementing' => 'getIsIncrementing',
            'executeCreateDate' => 'getExecuteCreateDate',
            'status' => 'getStatus'
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
    const JOB_TYPE_NORMAL_JOB = 'NORMAL_JOB';
    const JOB_TYPE_BATCH_JOB = 'BATCH_JOB';
    const JOB_TYPE_SCENARIO_JOB = 'SCENARIO_JOB';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_NORMAL_JOB,
            self::JOB_TYPE_BATCH_JOB,
            self::JOB_TYPE_SCENARIO_JOB,
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['fromConnectorName'] = isset($data['fromConnectorName']) ? $data['fromConnectorName'] : null;
        $this->container['toConfigValues'] = isset($data['toConfigValues']) ? $data['toConfigValues'] : null;
        $this->container['toLinkName'] = isset($data['toLinkName']) ? $data['toLinkName'] : null;
        $this->container['driverConfigValues'] = isset($data['driverConfigValues']) ? $data['driverConfigValues'] : null;
        $this->container['fromConfigValues'] = isset($data['fromConfigValues']) ? $data['fromConfigValues'] : null;
        $this->container['toConnectorName'] = isset($data['toConnectorName']) ? $data['toConnectorName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fromLinkName'] = isset($data['fromLinkName']) ? $data['fromLinkName'] : null;
        $this->container['creationUser'] = isset($data['creationUser']) ? $data['creationUser'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['updateDate'] = isset($data['updateDate']) ? $data['updateDate'] : null;
        $this->container['isIncreJob'] = isset($data['isIncreJob']) ? $data['isIncreJob'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['filesRead'] = isset($data['filesRead']) ? $data['filesRead'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['executeStartDate'] = isset($data['executeStartDate']) ? $data['executeStartDate'] : null;
        $this->container['deleteRows'] = isset($data['deleteRows']) ? $data['deleteRows'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['bytesWritten'] = isset($data['bytesWritten']) ? $data['bytesWritten'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isUseSql'] = isset($data['isUseSql']) ? $data['isUseSql'] : null;
        $this->container['updateRows'] = isset($data['updateRows']) ? $data['updateRows'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['bytesRead'] = isset($data['bytesRead']) ? $data['bytesRead'] : null;
        $this->container['executeUpdateDate'] = isset($data['executeUpdateDate']) ? $data['executeUpdateDate'] : null;
        $this->container['writeRows'] = isset($data['writeRows']) ? $data['writeRows'] : null;
        $this->container['rowsWritten'] = isset($data['rowsWritten']) ? $data['rowsWritten'] : null;
        $this->container['rowsRead'] = isset($data['rowsRead']) ? $data['rowsRead'] : null;
        $this->container['filesWritten'] = isset($data['filesWritten']) ? $data['filesWritten'] : null;
        $this->container['isIncrementing'] = isset($data['isIncrementing']) ? $data['isIncrementing'] : null;
        $this->container['executeCreateDate'] = isset($data['executeCreateDate']) ? $data['executeCreateDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['fromConnectorName'] === null) {
            $invalidProperties[] = "'fromConnectorName' can't be null";
        }
        if ($this->container['toConfigValues'] === null) {
            $invalidProperties[] = "'toConfigValues' can't be null";
        }
        if ($this->container['toLinkName'] === null) {
            $invalidProperties[] = "'toLinkName' can't be null";
        }
        if ($this->container['driverConfigValues'] === null) {
            $invalidProperties[] = "'driverConfigValues' can't be null";
        }
        if ($this->container['fromConfigValues'] === null) {
            $invalidProperties[] = "'fromConfigValues' can't be null";
        }
        if ($this->container['toConnectorName'] === null) {
            $invalidProperties[] = "'toConnectorName' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 240)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 240.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['fromLinkName'] === null) {
            $invalidProperties[] = "'fromLinkName' can't be null";
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
    *  作业类型： - NORMAL_JOB：表/文件迁移。 - BATCH_JOB：整库迁移。 - SCENARIO_JOB：场景迁移。
    *
    * @return string
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string $jobType 作业类型： - NORMAL_JOB：表/文件迁移。 - BATCH_JOB：整库迁移。 - SCENARIO_JOB：场景迁移。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets fromConnectorName
    *  源端连接类型
    *
    * @return string
    */
    public function getFromConnectorName()
    {
        return $this->container['fromConnectorName'];
    }

    /**
    * Sets fromConnectorName
    *
    * @param string $fromConnectorName 源端连接类型
    *
    * @return $this
    */
    public function setFromConnectorName($fromConnectorName)
    {
        $this->container['fromConnectorName'] = $fromConnectorName;
        return $this;
    }

    /**
    * Gets toConfigValues
    *  toConfigValues
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ConfigValues
    */
    public function getToConfigValues()
    {
        return $this->container['toConfigValues'];
    }

    /**
    * Sets toConfigValues
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ConfigValues $toConfigValues toConfigValues
    *
    * @return $this
    */
    public function setToConfigValues($toConfigValues)
    {
        $this->container['toConfigValues'] = $toConfigValues;
        return $this;
    }

    /**
    * Gets toLinkName
    *  目的端连接名称
    *
    * @return string
    */
    public function getToLinkName()
    {
        return $this->container['toLinkName'];
    }

    /**
    * Sets toLinkName
    *
    * @param string $toLinkName 目的端连接名称
    *
    * @return $this
    */
    public function setToLinkName($toLinkName)
    {
        $this->container['toLinkName'] = $toLinkName;
        return $this;
    }

    /**
    * Gets driverConfigValues
    *  driverConfigValues
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ConfigValues
    */
    public function getDriverConfigValues()
    {
        return $this->container['driverConfigValues'];
    }

    /**
    * Sets driverConfigValues
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ConfigValues $driverConfigValues driverConfigValues
    *
    * @return $this
    */
    public function setDriverConfigValues($driverConfigValues)
    {
        $this->container['driverConfigValues'] = $driverConfigValues;
        return $this;
    }

    /**
    * Gets fromConfigValues
    *  fromConfigValues
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ConfigValues
    */
    public function getFromConfigValues()
    {
        return $this->container['fromConfigValues'];
    }

    /**
    * Sets fromConfigValues
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ConfigValues $fromConfigValues fromConfigValues
    *
    * @return $this
    */
    public function setFromConfigValues($fromConfigValues)
    {
        $this->container['fromConfigValues'] = $fromConfigValues;
        return $this;
    }

    /**
    * Gets toConnectorName
    *  目的端连接类型
    *
    * @return string
    */
    public function getToConnectorName()
    {
        return $this->container['toConnectorName'];
    }

    /**
    * Sets toConnectorName
    *
    * @param string $toConnectorName 目的端连接类型
    *
    * @return $this
    */
    public function setToConnectorName($toConnectorName)
    {
        $this->container['toConnectorName'] = $toConnectorName;
        return $this;
    }

    /**
    * Gets name
    *  作业名称，长度在1到240个字符之间
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 作业名称，长度在1到240个字符之间
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets fromLinkName
    *  源连接名称
    *
    * @return string
    */
    public function getFromLinkName()
    {
        return $this->container['fromLinkName'];
    }

    /**
    * Sets fromLinkName
    *
    * @param string $fromLinkName 源连接名称
    *
    * @return $this
    */
    public function setFromLinkName($fromLinkName)
    {
        $this->container['fromLinkName'] = $fromLinkName;
        return $this;
    }

    /**
    * Gets creationUser
    *  创建的用户。
    *
    * @return string|null
    */
    public function getCreationUser()
    {
        return $this->container['creationUser'];
    }

    /**
    * Sets creationUser
    *
    * @param string|null $creationUser 创建的用户。
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
    *  作业创建的时间，单位：毫秒。
    *
    * @return int|null
    */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
    * Sets creationDate
    *
    * @param int|null $creationDate 作业创建的时间，单位：毫秒。
    *
    * @return $this
    */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;
        return $this;
    }

    /**
    * Gets updateDate
    *  作业最后更新的时间，单位：毫秒。
    *
    * @return int|null
    */
    public function getUpdateDate()
    {
        return $this->container['updateDate'];
    }

    /**
    * Sets updateDate
    *
    * @param int|null $updateDate 作业最后更新的时间，单位：毫秒。
    *
    * @return $this
    */
    public function setUpdateDate($updateDate)
    {
        $this->container['updateDate'] = $updateDate;
        return $this;
    }

    /**
    * Gets isIncreJob
    *  是否增量
    *
    * @return bool|null
    */
    public function getIsIncreJob()
    {
        return $this->container['isIncreJob'];
    }

    /**
    * Sets isIncreJob
    *
    * @param bool|null $isIncreJob 是否增量
    *
    * @return $this
    */
    public function setIsIncreJob($isIncreJob)
    {
        $this->container['isIncreJob'] = $isIncreJob;
        return $this;
    }

    /**
    * Gets flag
    *  标记
    *
    * @return int|null
    */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
    * Sets flag
    *
    * @param int|null $flag 标记
    *
    * @return $this
    */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;
        return $this;
    }

    /**
    * Gets filesRead
    *  已读文件数
    *
    * @return int|null
    */
    public function getFilesRead()
    {
        return $this->container['filesRead'];
    }

    /**
    * Sets filesRead
    *
    * @param int|null $filesRead 已读文件数
    *
    * @return $this
    */
    public function setFilesRead($filesRead)
    {
        $this->container['filesRead'] = $filesRead;
        return $this;
    }

    /**
    * Gets updateUser
    *  作业最后更新的用户。
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 作业最后更新的用户。
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
        return $this;
    }

    /**
    * Gets externalId
    *  外部ID。
    *
    * @return string|null
    */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
    * Sets externalId
    *
    * @param string|null $externalId 外部ID。
    *
    * @return $this
    */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;
        return $this;
    }

    /**
    * Gets type
    *  作业类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 作业类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets executeStartDate
    *  执行_开始_日期。
    *
    * @return int|null
    */
    public function getExecuteStartDate()
    {
        return $this->container['executeStartDate'];
    }

    /**
    * Sets executeStartDate
    *
    * @param int|null $executeStartDate 执行_开始_日期。
    *
    * @return $this
    */
    public function setExecuteStartDate($executeStartDate)
    {
        $this->container['executeStartDate'] = $executeStartDate;
        return $this;
    }

    /**
    * Gets deleteRows
    *  删除行数
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
    * @param int|null $deleteRows 删除行数
    *
    * @return $this
    */
    public function setDeleteRows($deleteRows)
    {
        $this->container['deleteRows'] = $deleteRows;
        return $this;
    }

    /**
    * Gets enabled
    *  是否激活连接
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否激活连接
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets bytesWritten
    *  写入字节
    *
    * @return int|null
    */
    public function getBytesWritten()
    {
        return $this->container['bytesWritten'];
    }

    /**
    * Sets bytesWritten
    *
    * @param int|null $bytesWritten 写入字节
    *
    * @return $this
    */
    public function setBytesWritten($bytesWritten)
    {
        $this->container['bytesWritten'] = $bytesWritten;
        return $this;
    }

    /**
    * Gets id
    *  作业ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 作业ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isUseSql
    *  用户是否使用sql
    *
    * @return bool|null
    */
    public function getIsUseSql()
    {
        return $this->container['isUseSql'];
    }

    /**
    * Sets isUseSql
    *
    * @param bool|null $isUseSql 用户是否使用sql
    *
    * @return $this
    */
    public function setIsUseSql($isUseSql)
    {
        $this->container['isUseSql'] = $isUseSql;
        return $this;
    }

    /**
    * Gets updateRows
    *  更新行数
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
    * @param int|null $updateRows 更新行数
    *
    * @return $this
    */
    public function setUpdateRows($updateRows)
    {
        $this->container['updateRows'] = $updateRows;
        return $this;
    }

    /**
    * Gets groupName
    *  组_名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 组_名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets bytesRead
    *  读取字节
    *
    * @return int|null
    */
    public function getBytesRead()
    {
        return $this->container['bytesRead'];
    }

    /**
    * Sets bytesRead
    *
    * @param int|null $bytesRead 读取字节
    *
    * @return $this
    */
    public function setBytesRead($bytesRead)
    {
        $this->container['bytesRead'] = $bytesRead;
        return $this;
    }

    /**
    * Gets executeUpdateDate
    *  执行_更新_日期。
    *
    * @return int|null
    */
    public function getExecuteUpdateDate()
    {
        return $this->container['executeUpdateDate'];
    }

    /**
    * Sets executeUpdateDate
    *
    * @param int|null $executeUpdateDate 执行_更新_日期。
    *
    * @return $this
    */
    public function setExecuteUpdateDate($executeUpdateDate)
    {
        $this->container['executeUpdateDate'] = $executeUpdateDate;
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
    * Gets rowsWritten
    *  写入行数
    *
    * @return int|null
    */
    public function getRowsWritten()
    {
        return $this->container['rowsWritten'];
    }

    /**
    * Sets rowsWritten
    *
    * @param int|null $rowsWritten 写入行数
    *
    * @return $this
    */
    public function setRowsWritten($rowsWritten)
    {
        $this->container['rowsWritten'] = $rowsWritten;
        return $this;
    }

    /**
    * Gets rowsRead
    *  读取的行数
    *
    * @return int|null
    */
    public function getRowsRead()
    {
        return $this->container['rowsRead'];
    }

    /**
    * Sets rowsRead
    *
    * @param int|null $rowsRead 读取的行数
    *
    * @return $this
    */
    public function setRowsRead($rowsRead)
    {
        $this->container['rowsRead'] = $rowsRead;
        return $this;
    }

    /**
    * Gets filesWritten
    *  写入文件数
    *
    * @return int|null
    */
    public function getFilesWritten()
    {
        return $this->container['filesWritten'];
    }

    /**
    * Sets filesWritten
    *
    * @param int|null $filesWritten 写入文件数
    *
    * @return $this
    */
    public function setFilesWritten($filesWritten)
    {
        $this->container['filesWritten'] = $filesWritten;
        return $this;
    }

    /**
    * Gets isIncrementing
    *  是否增量
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
    * @param bool|null $isIncrementing 是否增量
    *
    * @return $this
    */
    public function setIsIncrementing($isIncrementing)
    {
        $this->container['isIncrementing'] = $isIncrementing;
        return $this;
    }

    /**
    * Gets executeCreateDate
    *  执行_创建_日期
    *
    * @return int|null
    */
    public function getExecuteCreateDate()
    {
        return $this->container['executeCreateDate'];
    }

    /**
    * Sets executeCreateDate
    *
    * @param int|null $executeCreateDate 执行_创建_日期
    *
    * @return $this
    */
    public function setExecuteCreateDate($executeCreateDate)
    {
        $this->container['executeCreateDate'] = $executeCreateDate;
        return $this;
    }

    /**
    * Gets status
    *  作业最后的执行状态： - BOOTING：启动中。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - NEW：未被执行。
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
    * @param string|null $status 作业最后的执行状态： - BOOTING：启动中。 - RUNNING：运行中。 - SUCCEEDED：成功。 - FAILED：失败。 - NEW：未被执行。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

