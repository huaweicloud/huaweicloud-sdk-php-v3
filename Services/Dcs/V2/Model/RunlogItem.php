<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunlogItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunlogItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  日志的唯一标识
    * fileName  运行日志文件名
    * groupName  分片名称
    * replicationIp  采集运行日志所在副本的IP
    * status  获取运行日志状态
    * time  运行日志采集的日期，格式为\"yyyy-MM-dd\"
    * backupId  日志文件的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'fileName' => 'string',
            'groupName' => 'string',
            'replicationIp' => 'string',
            'status' => 'string',
            'time' => 'string',
            'backupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  日志的唯一标识
    * fileName  运行日志文件名
    * groupName  分片名称
    * replicationIp  采集运行日志所在副本的IP
    * status  获取运行日志状态
    * time  运行日志采集的日期，格式为\"yyyy-MM-dd\"
    * backupId  日志文件的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'fileName' => null,
        'groupName' => null,
        'replicationIp' => null,
        'status' => null,
        'time' => null,
        'backupId' => null
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
    * id  日志的唯一标识
    * fileName  运行日志文件名
    * groupName  分片名称
    * replicationIp  采集运行日志所在副本的IP
    * status  获取运行日志状态
    * time  运行日志采集的日期，格式为\"yyyy-MM-dd\"
    * backupId  日志文件的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'fileName' => 'file_name',
            'groupName' => 'group_name',
            'replicationIp' => 'replication_ip',
            'status' => 'status',
            'time' => 'time',
            'backupId' => 'backup_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  日志的唯一标识
    * fileName  运行日志文件名
    * groupName  分片名称
    * replicationIp  采集运行日志所在副本的IP
    * status  获取运行日志状态
    * time  运行日志采集的日期，格式为\"yyyy-MM-dd\"
    * backupId  日志文件的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'fileName' => 'setFileName',
            'groupName' => 'setGroupName',
            'replicationIp' => 'setReplicationIp',
            'status' => 'setStatus',
            'time' => 'setTime',
            'backupId' => 'setBackupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  日志的唯一标识
    * fileName  运行日志文件名
    * groupName  分片名称
    * replicationIp  采集运行日志所在副本的IP
    * status  获取运行日志状态
    * time  运行日志采集的日期，格式为\"yyyy-MM-dd\"
    * backupId  日志文件的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'fileName' => 'getFileName',
            'groupName' => 'getGroupName',
            'replicationIp' => 'getReplicationIp',
            'status' => 'getStatus',
            'time' => 'getTime',
            'backupId' => 'getBackupId'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['replicationIp'] = isset($data['replicationIp']) ? $data['replicationIp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
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
    *  日志的唯一标识
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
    * @param string|null $id 日志的唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets fileName
    *  运行日志文件名
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
    * @param string|null $fileName 运行日志文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets groupName
    *  分片名称
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
    * @param string|null $groupName 分片名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets replicationIp
    *  采集运行日志所在副本的IP
    *
    * @return string|null
    */
    public function getReplicationIp()
    {
        return $this->container['replicationIp'];
    }

    /**
    * Sets replicationIp
    *
    * @param string|null $replicationIp 采集运行日志所在副本的IP
    *
    * @return $this
    */
    public function setReplicationIp($replicationIp)
    {
        $this->container['replicationIp'] = $replicationIp;
        return $this;
    }

    /**
    * Gets status
    *  获取运行日志状态
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
    * @param string|null $status 获取运行日志状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets time
    *  运行日志采集的日期，格式为\"yyyy-MM-dd\"
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 运行日志采集的日期，格式为\"yyyy-MM-dd\"
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets backupId
    *  日志文件的ID
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
    * @param string|null $backupId 日志文件的ID
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
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

