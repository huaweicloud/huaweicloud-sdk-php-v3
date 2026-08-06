<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskTableReferenceDetailResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskTableReferenceDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  作业id。
    * jobName  作业名。
    * dbType  数据库类型。
    * dataBase  数据库名。
    * tableName  数据表名。
    * clusterName  集群名称。
    * workspaceName  作业的工作空间名。
    * workspaceId  作业的工作空间Id。
    * owner  作业责任人。
    * lastSubmitTime  作业最后提交时间。
    * ioType  作业和表的关系，0表示作业是读表，1表示作业写表。
    * isDynamic  是否是动态表。
    * executeUser  作业执行用户。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'int',
            'jobName' => 'string',
            'dbType' => 'string',
            'dataBase' => 'string',
            'tableName' => 'string',
            'clusterName' => 'string',
            'workspaceName' => 'string',
            'workspaceId' => 'string',
            'owner' => 'string',
            'lastSubmitTime' => 'int',
            'ioType' => 'int',
            'isDynamic' => 'bool',
            'executeUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  作业id。
    * jobName  作业名。
    * dbType  数据库类型。
    * dataBase  数据库名。
    * tableName  数据表名。
    * clusterName  集群名称。
    * workspaceName  作业的工作空间名。
    * workspaceId  作业的工作空间Id。
    * owner  作业责任人。
    * lastSubmitTime  作业最后提交时间。
    * ioType  作业和表的关系，0表示作业是读表，1表示作业写表。
    * isDynamic  是否是动态表。
    * executeUser  作业执行用户。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => 'int64',
        'jobName' => null,
        'dbType' => null,
        'dataBase' => null,
        'tableName' => null,
        'clusterName' => null,
        'workspaceName' => null,
        'workspaceId' => null,
        'owner' => null,
        'lastSubmitTime' => 'int64',
        'ioType' => 'int32',
        'isDynamic' => null,
        'executeUser' => null
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
    * jobId  作业id。
    * jobName  作业名。
    * dbType  数据库类型。
    * dataBase  数据库名。
    * tableName  数据表名。
    * clusterName  集群名称。
    * workspaceName  作业的工作空间名。
    * workspaceId  作业的工作空间Id。
    * owner  作业责任人。
    * lastSubmitTime  作业最后提交时间。
    * ioType  作业和表的关系，0表示作业是读表，1表示作业写表。
    * isDynamic  是否是动态表。
    * executeUser  作业执行用户。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'dbType' => 'db_type',
            'dataBase' => 'data_base',
            'tableName' => 'table_name',
            'clusterName' => 'cluster_name',
            'workspaceName' => 'workspace_name',
            'workspaceId' => 'workspace_id',
            'owner' => 'owner',
            'lastSubmitTime' => 'last_submit_time',
            'ioType' => 'io_type',
            'isDynamic' => 'is_dynamic',
            'executeUser' => 'execute_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  作业id。
    * jobName  作业名。
    * dbType  数据库类型。
    * dataBase  数据库名。
    * tableName  数据表名。
    * clusterName  集群名称。
    * workspaceName  作业的工作空间名。
    * workspaceId  作业的工作空间Id。
    * owner  作业责任人。
    * lastSubmitTime  作业最后提交时间。
    * ioType  作业和表的关系，0表示作业是读表，1表示作业写表。
    * isDynamic  是否是动态表。
    * executeUser  作业执行用户。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'dbType' => 'setDbType',
            'dataBase' => 'setDataBase',
            'tableName' => 'setTableName',
            'clusterName' => 'setClusterName',
            'workspaceName' => 'setWorkspaceName',
            'workspaceId' => 'setWorkspaceId',
            'owner' => 'setOwner',
            'lastSubmitTime' => 'setLastSubmitTime',
            'ioType' => 'setIoType',
            'isDynamic' => 'setIsDynamic',
            'executeUser' => 'setExecuteUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  作业id。
    * jobName  作业名。
    * dbType  数据库类型。
    * dataBase  数据库名。
    * tableName  数据表名。
    * clusterName  集群名称。
    * workspaceName  作业的工作空间名。
    * workspaceId  作业的工作空间Id。
    * owner  作业责任人。
    * lastSubmitTime  作业最后提交时间。
    * ioType  作业和表的关系，0表示作业是读表，1表示作业写表。
    * isDynamic  是否是动态表。
    * executeUser  作业执行用户。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'dbType' => 'getDbType',
            'dataBase' => 'getDataBase',
            'tableName' => 'getTableName',
            'clusterName' => 'getClusterName',
            'workspaceName' => 'getWorkspaceName',
            'workspaceId' => 'getWorkspaceId',
            'owner' => 'getOwner',
            'lastSubmitTime' => 'getLastSubmitTime',
            'ioType' => 'getIoType',
            'isDynamic' => 'getIsDynamic',
            'executeUser' => 'getExecuteUser'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['dataBase'] = isset($data['dataBase']) ? $data['dataBase'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['workspaceName'] = isset($data['workspaceName']) ? $data['workspaceName'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['lastSubmitTime'] = isset($data['lastSubmitTime']) ? $data['lastSubmitTime'] : null;
        $this->container['ioType'] = isset($data['ioType']) ? $data['ioType'] : null;
        $this->container['isDynamic'] = isset($data['isDynamic']) ? $data['isDynamic'] : null;
        $this->container['executeUser'] = isset($data['executeUser']) ? $data['executeUser'] : null;
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
    * Gets jobId
    *  作业id。
    *
    * @return int|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param int|null $jobId 作业id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名。
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
    * @param string|null $jobName 作业名。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets dbType
    *  数据库类型。
    *
    * @return string|null
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string|null $dbType 数据库类型。
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets dataBase
    *  数据库名。
    *
    * @return string|null
    */
    public function getDataBase()
    {
        return $this->container['dataBase'];
    }

    /**
    * Sets dataBase
    *
    * @param string|null $dataBase 数据库名。
    *
    * @return $this
    */
    public function setDataBase($dataBase)
    {
        $this->container['dataBase'] = $dataBase;
        return $this;
    }

    /**
    * Gets tableName
    *  数据表名。
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 数据表名。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称。
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets workspaceName
    *  作业的工作空间名。
    *
    * @return string|null
    */
    public function getWorkspaceName()
    {
        return $this->container['workspaceName'];
    }

    /**
    * Sets workspaceName
    *
    * @param string|null $workspaceName 作业的工作空间名。
    *
    * @return $this
    */
    public function setWorkspaceName($workspaceName)
    {
        $this->container['workspaceName'] = $workspaceName;
        return $this;
    }

    /**
    * Gets workspaceId
    *  作业的工作空间Id。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 作业的工作空间Id。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets owner
    *  作业责任人。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 作业责任人。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets lastSubmitTime
    *  作业最后提交时间。
    *
    * @return int|null
    */
    public function getLastSubmitTime()
    {
        return $this->container['lastSubmitTime'];
    }

    /**
    * Sets lastSubmitTime
    *
    * @param int|null $lastSubmitTime 作业最后提交时间。
    *
    * @return $this
    */
    public function setLastSubmitTime($lastSubmitTime)
    {
        $this->container['lastSubmitTime'] = $lastSubmitTime;
        return $this;
    }

    /**
    * Gets ioType
    *  作业和表的关系，0表示作业是读表，1表示作业写表。
    *
    * @return int|null
    */
    public function getIoType()
    {
        return $this->container['ioType'];
    }

    /**
    * Sets ioType
    *
    * @param int|null $ioType 作业和表的关系，0表示作业是读表，1表示作业写表。
    *
    * @return $this
    */
    public function setIoType($ioType)
    {
        $this->container['ioType'] = $ioType;
        return $this;
    }

    /**
    * Gets isDynamic
    *  是否是动态表。
    *
    * @return bool|null
    */
    public function getIsDynamic()
    {
        return $this->container['isDynamic'];
    }

    /**
    * Sets isDynamic
    *
    * @param bool|null $isDynamic 是否是动态表。
    *
    * @return $this
    */
    public function setIsDynamic($isDynamic)
    {
        $this->container['isDynamic'] = $isDynamic;
        return $this;
    }

    /**
    * Gets executeUser
    *  作业执行用户。
    *
    * @return string|null
    */
    public function getExecuteUser()
    {
        return $this->container['executeUser'];
    }

    /**
    * Sets executeUser
    *
    * @param string|null $executeUser 作业执行用户。
    *
    * @return $this
    */
    public function setExecuteUser($executeUser)
    {
        $this->container['executeUser'] = $executeUser;
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

