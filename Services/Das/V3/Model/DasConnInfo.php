<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DasConnInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DasConnInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectionId  连接ID
    * instanceId  实例ID
    * instanceName  实例名称
    * networkType  数据库来源类型
    * engineType  数据库引擎类型
    * datastoreVersion  数据库版本
    * userName  用户名
    * databaseName  数据库名称
    * isSavePassword  是否保存密码
    * ipAddress  IP地址
    * port  端口号
    * remarks  备注
    * instanceType  实例类型
    * createAt  连接的创建时间
    * status  状态
    * sqlRecordFlag  sql记录开关
    * connShareType  连接类型
    * sharedCount  共享用户数
    * serviceType  服务类型
    * sharedUserName  共享人名称
    * sharedUserId  共享人ID
    * expiredTime  共享过期时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectionId' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'networkType' => 'string',
            'engineType' => 'string',
            'datastoreVersion' => 'string',
            'userName' => 'string',
            'databaseName' => 'string',
            'isSavePassword' => 'bool',
            'ipAddress' => 'string',
            'port' => 'int',
            'remarks' => 'string',
            'instanceType' => 'string',
            'createAt' => 'int',
            'status' => 'string',
            'sqlRecordFlag' => 'bool',
            'connShareType' => 'string',
            'sharedCount' => 'int',
            'serviceType' => 'string',
            'sharedUserName' => 'string',
            'sharedUserId' => 'string',
            'expiredTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectionId  连接ID
    * instanceId  实例ID
    * instanceName  实例名称
    * networkType  数据库来源类型
    * engineType  数据库引擎类型
    * datastoreVersion  数据库版本
    * userName  用户名
    * databaseName  数据库名称
    * isSavePassword  是否保存密码
    * ipAddress  IP地址
    * port  端口号
    * remarks  备注
    * instanceType  实例类型
    * createAt  连接的创建时间
    * status  状态
    * sqlRecordFlag  sql记录开关
    * connShareType  连接类型
    * sharedCount  共享用户数
    * serviceType  服务类型
    * sharedUserName  共享人名称
    * sharedUserId  共享人ID
    * expiredTime  共享过期时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectionId' => null,
        'instanceId' => null,
        'instanceName' => null,
        'networkType' => null,
        'engineType' => null,
        'datastoreVersion' => null,
        'userName' => null,
        'databaseName' => null,
        'isSavePassword' => null,
        'ipAddress' => null,
        'port' => 'int32',
        'remarks' => null,
        'instanceType' => null,
        'createAt' => 'int64',
        'status' => null,
        'sqlRecordFlag' => null,
        'connShareType' => null,
        'sharedCount' => 'int32',
        'serviceType' => null,
        'sharedUserName' => null,
        'sharedUserId' => null,
        'expiredTime' => 'int64'
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
    * connectionId  连接ID
    * instanceId  实例ID
    * instanceName  实例名称
    * networkType  数据库来源类型
    * engineType  数据库引擎类型
    * datastoreVersion  数据库版本
    * userName  用户名
    * databaseName  数据库名称
    * isSavePassword  是否保存密码
    * ipAddress  IP地址
    * port  端口号
    * remarks  备注
    * instanceType  实例类型
    * createAt  连接的创建时间
    * status  状态
    * sqlRecordFlag  sql记录开关
    * connShareType  连接类型
    * sharedCount  共享用户数
    * serviceType  服务类型
    * sharedUserName  共享人名称
    * sharedUserId  共享人ID
    * expiredTime  共享过期时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectionId' => 'connection_id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'networkType' => 'network_type',
            'engineType' => 'engine_type',
            'datastoreVersion' => 'datastore_version',
            'userName' => 'user_name',
            'databaseName' => 'database_name',
            'isSavePassword' => 'is_save_password',
            'ipAddress' => 'ip_address',
            'port' => 'port',
            'remarks' => 'remarks',
            'instanceType' => 'instance_type',
            'createAt' => 'create_at',
            'status' => 'status',
            'sqlRecordFlag' => 'sql_record_flag',
            'connShareType' => 'conn_share_type',
            'sharedCount' => 'shared_count',
            'serviceType' => 'service_type',
            'sharedUserName' => 'shared_user_name',
            'sharedUserId' => 'shared_user_id',
            'expiredTime' => 'expired_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectionId  连接ID
    * instanceId  实例ID
    * instanceName  实例名称
    * networkType  数据库来源类型
    * engineType  数据库引擎类型
    * datastoreVersion  数据库版本
    * userName  用户名
    * databaseName  数据库名称
    * isSavePassword  是否保存密码
    * ipAddress  IP地址
    * port  端口号
    * remarks  备注
    * instanceType  实例类型
    * createAt  连接的创建时间
    * status  状态
    * sqlRecordFlag  sql记录开关
    * connShareType  连接类型
    * sharedCount  共享用户数
    * serviceType  服务类型
    * sharedUserName  共享人名称
    * sharedUserId  共享人ID
    * expiredTime  共享过期时间
    *
    * @var string[]
    */
    protected static $setters = [
            'connectionId' => 'setConnectionId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'networkType' => 'setNetworkType',
            'engineType' => 'setEngineType',
            'datastoreVersion' => 'setDatastoreVersion',
            'userName' => 'setUserName',
            'databaseName' => 'setDatabaseName',
            'isSavePassword' => 'setIsSavePassword',
            'ipAddress' => 'setIpAddress',
            'port' => 'setPort',
            'remarks' => 'setRemarks',
            'instanceType' => 'setInstanceType',
            'createAt' => 'setCreateAt',
            'status' => 'setStatus',
            'sqlRecordFlag' => 'setSqlRecordFlag',
            'connShareType' => 'setConnShareType',
            'sharedCount' => 'setSharedCount',
            'serviceType' => 'setServiceType',
            'sharedUserName' => 'setSharedUserName',
            'sharedUserId' => 'setSharedUserId',
            'expiredTime' => 'setExpiredTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectionId  连接ID
    * instanceId  实例ID
    * instanceName  实例名称
    * networkType  数据库来源类型
    * engineType  数据库引擎类型
    * datastoreVersion  数据库版本
    * userName  用户名
    * databaseName  数据库名称
    * isSavePassword  是否保存密码
    * ipAddress  IP地址
    * port  端口号
    * remarks  备注
    * instanceType  实例类型
    * createAt  连接的创建时间
    * status  状态
    * sqlRecordFlag  sql记录开关
    * connShareType  连接类型
    * sharedCount  共享用户数
    * serviceType  服务类型
    * sharedUserName  共享人名称
    * sharedUserId  共享人ID
    * expiredTime  共享过期时间
    *
    * @var string[]
    */
    protected static $getters = [
            'connectionId' => 'getConnectionId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'networkType' => 'getNetworkType',
            'engineType' => 'getEngineType',
            'datastoreVersion' => 'getDatastoreVersion',
            'userName' => 'getUserName',
            'databaseName' => 'getDatabaseName',
            'isSavePassword' => 'getIsSavePassword',
            'ipAddress' => 'getIpAddress',
            'port' => 'getPort',
            'remarks' => 'getRemarks',
            'instanceType' => 'getInstanceType',
            'createAt' => 'getCreateAt',
            'status' => 'getStatus',
            'sqlRecordFlag' => 'getSqlRecordFlag',
            'connShareType' => 'getConnShareType',
            'sharedCount' => 'getSharedCount',
            'serviceType' => 'getServiceType',
            'sharedUserName' => 'getSharedUserName',
            'sharedUserId' => 'getSharedUserId',
            'expiredTime' => 'getExpiredTime'
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
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['datastoreVersion'] = isset($data['datastoreVersion']) ? $data['datastoreVersion'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['isSavePassword'] = isset($data['isSavePassword']) ? $data['isSavePassword'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sqlRecordFlag'] = isset($data['sqlRecordFlag']) ? $data['sqlRecordFlag'] : null;
        $this->container['connShareType'] = isset($data['connShareType']) ? $data['connShareType'] : null;
        $this->container['sharedCount'] = isset($data['sharedCount']) ? $data['sharedCount'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['sharedUserName'] = isset($data['sharedUserName']) ? $data['sharedUserName'] : null;
        $this->container['sharedUserId'] = isset($data['sharedUserId']) ? $data['sharedUserId'] : null;
        $this->container['expiredTime'] = isset($data['expiredTime']) ? $data['expiredTime'] : null;
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
    * Gets instanceId
    *  实例ID
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
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets networkType
    *  数据库来源类型
    *
    * @return string|null
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string|null $networkType 数据库来源类型
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets engineType
    *  数据库引擎类型
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 数据库引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets datastoreVersion
    *  数据库版本
    *
    * @return string|null
    */
    public function getDatastoreVersion()
    {
        return $this->container['datastoreVersion'];
    }

    /**
    * Sets datastoreVersion
    *
    * @param string|null $datastoreVersion 数据库版本
    *
    * @return $this
    */
    public function setDatastoreVersion($datastoreVersion)
    {
        $this->container['datastoreVersion'] = $datastoreVersion;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
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
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名称
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 数据库名称
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets isSavePassword
    *  是否保存密码
    *
    * @return bool|null
    */
    public function getIsSavePassword()
    {
        return $this->container['isSavePassword'];
    }

    /**
    * Sets isSavePassword
    *
    * @param bool|null $isSavePassword 是否保存密码
    *
    * @return $this
    */
    public function setIsSavePassword($isSavePassword)
    {
        $this->container['isSavePassword'] = $isSavePassword;
        return $this;
    }

    /**
    * Gets ipAddress
    *  IP地址
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress IP地址
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets port
    *  端口号
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 端口号
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets remarks
    *  备注
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets instanceType
    *  实例类型
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
    * @param string|null $instanceType 实例类型
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets createAt
    *  连接的创建时间
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt 连接的创建时间
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sqlRecordFlag
    *  sql记录开关
    *
    * @return bool|null
    */
    public function getSqlRecordFlag()
    {
        return $this->container['sqlRecordFlag'];
    }

    /**
    * Sets sqlRecordFlag
    *
    * @param bool|null $sqlRecordFlag sql记录开关
    *
    * @return $this
    */
    public function setSqlRecordFlag($sqlRecordFlag)
    {
        $this->container['sqlRecordFlag'] = $sqlRecordFlag;
        return $this;
    }

    /**
    * Gets connShareType
    *  连接类型
    *
    * @return string|null
    */
    public function getConnShareType()
    {
        return $this->container['connShareType'];
    }

    /**
    * Sets connShareType
    *
    * @param string|null $connShareType 连接类型
    *
    * @return $this
    */
    public function setConnShareType($connShareType)
    {
        $this->container['connShareType'] = $connShareType;
        return $this;
    }

    /**
    * Gets sharedCount
    *  共享用户数
    *
    * @return int|null
    */
    public function getSharedCount()
    {
        return $this->container['sharedCount'];
    }

    /**
    * Sets sharedCount
    *
    * @param int|null $sharedCount 共享用户数
    *
    * @return $this
    */
    public function setSharedCount($sharedCount)
    {
        $this->container['sharedCount'] = $sharedCount;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 服务类型
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets sharedUserName
    *  共享人名称
    *
    * @return string|null
    */
    public function getSharedUserName()
    {
        return $this->container['sharedUserName'];
    }

    /**
    * Sets sharedUserName
    *
    * @param string|null $sharedUserName 共享人名称
    *
    * @return $this
    */
    public function setSharedUserName($sharedUserName)
    {
        $this->container['sharedUserName'] = $sharedUserName;
        return $this;
    }

    /**
    * Gets sharedUserId
    *  共享人ID
    *
    * @return string|null
    */
    public function getSharedUserId()
    {
        return $this->container['sharedUserId'];
    }

    /**
    * Sets sharedUserId
    *
    * @param string|null $sharedUserId 共享人ID
    *
    * @return $this
    */
    public function setSharedUserId($sharedUserId)
    {
        $this->container['sharedUserId'] = $sharedUserId;
        return $this;
    }

    /**
    * Gets expiredTime
    *  共享过期时间
    *
    * @return int|null
    */
    public function getExpiredTime()
    {
        return $this->container['expiredTime'];
    }

    /**
    * Sets expiredTime
    *
    * @param int|null $expiredTime 共享过期时间
    *
    * @return $this
    */
    public function setExpiredTime($expiredTime)
    {
        $this->container['expiredTime'] = $expiredTime;
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

