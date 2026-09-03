<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetryBinlogTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetryBinlogTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * gmtCreate  任务创建时间，单位：毫秒
    * gmtModified  任务修改时间，单位：毫秒
    * tenantId  租户ID
    * tenantName  租户名称
    * userId  用户ID
    * userName  用户名称
    * connectionId  连接ID
    * binlogType  binlog类型。取值范围：latest（最近日志）、backup（归档日志）
    * fileName  binlog文件名称
    * backupId  备份文件ID
    * status  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    * errMsg  错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'gmtCreate' => 'int',
            'gmtModified' => 'int',
            'tenantId' => 'string',
            'tenantName' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'connectionId' => 'string',
            'binlogType' => 'string',
            'fileName' => 'string',
            'backupId' => 'string',
            'status' => 'int',
            'errMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * gmtCreate  任务创建时间，单位：毫秒
    * gmtModified  任务修改时间，单位：毫秒
    * tenantId  租户ID
    * tenantName  租户名称
    * userId  用户ID
    * userName  用户名称
    * connectionId  连接ID
    * binlogType  binlog类型。取值范围：latest（最近日志）、backup（归档日志）
    * fileName  binlog文件名称
    * backupId  备份文件ID
    * status  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    * errMsg  错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'gmtCreate' => 'int64',
        'gmtModified' => 'int64',
        'tenantId' => null,
        'tenantName' => null,
        'userId' => null,
        'userName' => null,
        'connectionId' => null,
        'binlogType' => null,
        'fileName' => null,
        'backupId' => null,
        'status' => 'int32',
        'errMsg' => null
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
    * id  任务ID
    * gmtCreate  任务创建时间，单位：毫秒
    * gmtModified  任务修改时间，单位：毫秒
    * tenantId  租户ID
    * tenantName  租户名称
    * userId  用户ID
    * userName  用户名称
    * connectionId  连接ID
    * binlogType  binlog类型。取值范围：latest（最近日志）、backup（归档日志）
    * fileName  binlog文件名称
    * backupId  备份文件ID
    * status  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    * errMsg  错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'gmtCreate' => 'gmt_create',
            'gmtModified' => 'gmt_modified',
            'tenantId' => 'tenant_id',
            'tenantName' => 'tenant_name',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'connectionId' => 'connection_id',
            'binlogType' => 'binlog_type',
            'fileName' => 'file_name',
            'backupId' => 'backup_id',
            'status' => 'status',
            'errMsg' => 'err_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * gmtCreate  任务创建时间，单位：毫秒
    * gmtModified  任务修改时间，单位：毫秒
    * tenantId  租户ID
    * tenantName  租户名称
    * userId  用户ID
    * userName  用户名称
    * connectionId  连接ID
    * binlogType  binlog类型。取值范围：latest（最近日志）、backup（归档日志）
    * fileName  binlog文件名称
    * backupId  备份文件ID
    * status  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    * errMsg  错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'gmtCreate' => 'setGmtCreate',
            'gmtModified' => 'setGmtModified',
            'tenantId' => 'setTenantId',
            'tenantName' => 'setTenantName',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'connectionId' => 'setConnectionId',
            'binlogType' => 'setBinlogType',
            'fileName' => 'setFileName',
            'backupId' => 'setBackupId',
            'status' => 'setStatus',
            'errMsg' => 'setErrMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * gmtCreate  任务创建时间，单位：毫秒
    * gmtModified  任务修改时间，单位：毫秒
    * tenantId  租户ID
    * tenantName  租户名称
    * userId  用户ID
    * userName  用户名称
    * connectionId  连接ID
    * binlogType  binlog类型。取值范围：latest（最近日志）、backup（归档日志）
    * fileName  binlog文件名称
    * backupId  备份文件ID
    * status  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    * errMsg  错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'gmtCreate' => 'getGmtCreate',
            'gmtModified' => 'getGmtModified',
            'tenantId' => 'getTenantId',
            'tenantName' => 'getTenantName',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'connectionId' => 'getConnectionId',
            'binlogType' => 'getBinlogType',
            'fileName' => 'getFileName',
            'backupId' => 'getBackupId',
            'status' => 'getStatus',
            'errMsg' => 'getErrMsg'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['gmtCreate'] = isset($data['gmtCreate']) ? $data['gmtCreate'] : null;
        $this->container['gmtModified'] = isset($data['gmtModified']) ? $data['gmtModified'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['binlogType'] = isset($data['binlogType']) ? $data['binlogType'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errMsg'] = isset($data['errMsg']) ? $data['errMsg'] : null;
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
    * Gets id
    *  任务ID
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
    * @param int|null $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets gmtCreate
    *  任务创建时间，单位：毫秒
    *
    * @return int|null
    */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
    * Sets gmtCreate
    *
    * @param int|null $gmtCreate 任务创建时间，单位：毫秒
    *
    * @return $this
    */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;
        return $this;
    }

    /**
    * Gets gmtModified
    *  任务修改时间，单位：毫秒
    *
    * @return int|null
    */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
    * Sets gmtModified
    *
    * @param int|null $gmtModified 任务修改时间，单位：毫秒
    *
    * @return $this
    */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets tenantName
    *  租户名称
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName 租户名称
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets userId
    *  用户ID
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
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
    * Gets connectionId
    *  连接ID
    *
    * @return string|null
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string|null $connectionId 连接ID
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets binlogType
    *  binlog类型。取值范围：latest（最近日志）、backup（归档日志）
    *
    * @return string|null
    */
    public function getBinlogType()
    {
        return $this->container['binlogType'];
    }

    /**
    * Sets binlogType
    *
    * @param string|null $binlogType binlog类型。取值范围：latest（最近日志）、backup（归档日志）
    *
    * @return $this
    */
    public function setBinlogType($binlogType)
    {
        $this->container['binlogType'] = $binlogType;
        return $this;
    }

    /**
    * Gets fileName
    *  binlog文件名称
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName binlog文件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets backupId
    *  备份文件ID
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId 备份文件ID
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 任务状态。取值范围：0（初始化）、1（运行中）、2（部分成功）、3（成功）、4（失败）、-1（已删除）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errMsg
    *  错误信息
    *
    * @return string|null
    */
    public function getErrMsg()
    {
        return $this->container['errMsg'];
    }

    /**
    * Sets errMsg
    *
    * @param string|null $errMsg 错误信息
    *
    * @return $this
    */
    public function setErrMsg($errMsg)
    {
        $this->container['errMsg'] = $errMsg;
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

