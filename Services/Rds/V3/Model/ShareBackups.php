<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShareBackups implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShareBackups';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  备份ID。
    * name  备份名字。
    * beginTime  备份开始时间。
    * endTime  备份结束时间。
    * status  备份状态，取值：BUILDING：备份中，COMPLETED：备份完成，FAILED：备份失败，DELETING：备份删除中。
    * size  备份大小，单位：KB。
    * type  备份类型，取值：\"auto\"自动全量备份，“manual”手动全量备份。
    * backupMethod  备份方法。
    * instanceId  备份所在实例ID。
    * instanceName  备份所在实例名称。
    * instanceStatus  备份所在实例状态。
    * datastore  数据库版本信息。
    * userName  共享者用户名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'size' => 'double',
            'type' => 'string',
            'backupMethod' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'instanceStatus' => 'string',
            'datastore' => 'object',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  备份ID。
    * name  备份名字。
    * beginTime  备份开始时间。
    * endTime  备份结束时间。
    * status  备份状态，取值：BUILDING：备份中，COMPLETED：备份完成，FAILED：备份失败，DELETING：备份删除中。
    * size  备份大小，单位：KB。
    * type  备份类型，取值：\"auto\"自动全量备份，“manual”手动全量备份。
    * backupMethod  备份方法。
    * instanceId  备份所在实例ID。
    * instanceName  备份所在实例名称。
    * instanceStatus  备份所在实例状态。
    * datastore  数据库版本信息。
    * userName  共享者用户名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'beginTime' => null,
        'endTime' => null,
        'status' => null,
        'size' => 'double',
        'type' => null,
        'backupMethod' => null,
        'instanceId' => null,
        'instanceName' => null,
        'instanceStatus' => null,
        'datastore' => null,
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
    * id  备份ID。
    * name  备份名字。
    * beginTime  备份开始时间。
    * endTime  备份结束时间。
    * status  备份状态，取值：BUILDING：备份中，COMPLETED：备份完成，FAILED：备份失败，DELETING：备份删除中。
    * size  备份大小，单位：KB。
    * type  备份类型，取值：\"auto\"自动全量备份，“manual”手动全量备份。
    * backupMethod  备份方法。
    * instanceId  备份所在实例ID。
    * instanceName  备份所在实例名称。
    * instanceStatus  备份所在实例状态。
    * datastore  数据库版本信息。
    * userName  共享者用户名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'size' => 'size',
            'type' => 'type',
            'backupMethod' => 'backup_method',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'instanceStatus' => 'instance_status',
            'datastore' => 'datastore',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  备份ID。
    * name  备份名字。
    * beginTime  备份开始时间。
    * endTime  备份结束时间。
    * status  备份状态，取值：BUILDING：备份中，COMPLETED：备份完成，FAILED：备份失败，DELETING：备份删除中。
    * size  备份大小，单位：KB。
    * type  备份类型，取值：\"auto\"自动全量备份，“manual”手动全量备份。
    * backupMethod  备份方法。
    * instanceId  备份所在实例ID。
    * instanceName  备份所在实例名称。
    * instanceStatus  备份所在实例状态。
    * datastore  数据库版本信息。
    * userName  共享者用户名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'size' => 'setSize',
            'type' => 'setType',
            'backupMethod' => 'setBackupMethod',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'instanceStatus' => 'setInstanceStatus',
            'datastore' => 'setDatastore',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  备份ID。
    * name  备份名字。
    * beginTime  备份开始时间。
    * endTime  备份结束时间。
    * status  备份状态，取值：BUILDING：备份中，COMPLETED：备份完成，FAILED：备份失败，DELETING：备份删除中。
    * size  备份大小，单位：KB。
    * type  备份类型，取值：\"auto\"自动全量备份，“manual”手动全量备份。
    * backupMethod  备份方法。
    * instanceId  备份所在实例ID。
    * instanceName  备份所在实例名称。
    * instanceStatus  备份所在实例状态。
    * datastore  数据库版本信息。
    * userName  共享者用户名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'size' => 'getSize',
            'type' => 'getType',
            'backupMethod' => 'getBackupMethod',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'instanceStatus' => 'getInstanceStatus',
            'datastore' => 'getDatastore',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['backupMethod'] = isset($data['backupMethod']) ? $data['backupMethod'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
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
    * Gets id
    *  备份ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 备份ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  备份名字。
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
    * @param string|null $name 备份名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets beginTime
    *  备份开始时间。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 备份开始时间。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  备份结束时间。
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
    * @param string|null $endTime 备份结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  备份状态，取值：BUILDING：备份中，COMPLETED：备份完成，FAILED：备份失败，DELETING：备份删除中。
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
    * @param string|null $status 备份状态，取值：BUILDING：备份中，COMPLETED：备份完成，FAILED：备份失败，DELETING：备份删除中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets size
    *  备份大小，单位：KB。
    *
    * @return double|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param double|null $size 备份大小，单位：KB。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets type
    *  备份类型，取值：\"auto\"自动全量备份，“manual”手动全量备份。
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
    * @param string|null $type 备份类型，取值：\"auto\"自动全量备份，“manual”手动全量备份。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets backupMethod
    *  备份方法。
    *
    * @return string|null
    */
    public function getBackupMethod()
    {
        return $this->container['backupMethod'];
    }

    /**
    * Sets backupMethod
    *
    * @param string|null $backupMethod 备份方法。
    *
    * @return $this
    */
    public function setBackupMethod($backupMethod)
    {
        $this->container['backupMethod'] = $backupMethod;
        return $this;
    }

    /**
    * Gets instanceId
    *  备份所在实例ID。
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
    * @param string|null $instanceId 备份所在实例ID。
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
    *  备份所在实例名称。
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
    * @param string|null $instanceName 备份所在实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  备份所在实例状态。
    *
    * @return string|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string|null $instanceStatus 备份所在实例状态。
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets datastore
    *  数据库版本信息。
    *
    * @return object|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param object|null $datastore 数据库版本信息。
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets userName
    *  共享者用户名称。
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
    * @param string|null $userName 共享者用户名称。
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

