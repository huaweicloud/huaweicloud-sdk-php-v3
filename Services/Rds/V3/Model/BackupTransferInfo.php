<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupTransferInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupTransferInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  备份id
    * name  备份名称
    * beginTime  开始时间
    * endTime  结束时间
    * status  任务状态
    * size  对象大小,单位为KByte
    * instanceId  实例id
    * fileName  目标对象名称
    * destination  目标桶名
    * backupBeginTime  转储备份起始时间
    * backupEndTime  转储备份结束时间
    * transferType  转储任务类型
    * prefix  转储目标前缀
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'beginTime' => 'int',
            'endTime' => 'int',
            'status' => 'string',
            'size' => 'double',
            'instanceId' => 'string',
            'fileName' => 'string',
            'destination' => 'string',
            'backupBeginTime' => 'int',
            'backupEndTime' => 'int',
            'transferType' => 'string',
            'prefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  备份id
    * name  备份名称
    * beginTime  开始时间
    * endTime  结束时间
    * status  任务状态
    * size  对象大小,单位为KByte
    * instanceId  实例id
    * fileName  目标对象名称
    * destination  目标桶名
    * backupBeginTime  转储备份起始时间
    * backupEndTime  转储备份结束时间
    * transferType  转储任务类型
    * prefix  转储目标前缀
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'status' => null,
        'size' => 'double',
        'instanceId' => null,
        'fileName' => null,
        'destination' => null,
        'backupBeginTime' => 'int64',
        'backupEndTime' => 'int64',
        'transferType' => null,
        'prefix' => null
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
    * id  备份id
    * name  备份名称
    * beginTime  开始时间
    * endTime  结束时间
    * status  任务状态
    * size  对象大小,单位为KByte
    * instanceId  实例id
    * fileName  目标对象名称
    * destination  目标桶名
    * backupBeginTime  转储备份起始时间
    * backupEndTime  转储备份结束时间
    * transferType  转储任务类型
    * prefix  转储目标前缀
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
            'instanceId' => 'instance_id',
            'fileName' => 'file_name',
            'destination' => 'destination',
            'backupBeginTime' => 'backup_begin_time',
            'backupEndTime' => 'backup_end_time',
            'transferType' => 'transfer_type',
            'prefix' => 'prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  备份id
    * name  备份名称
    * beginTime  开始时间
    * endTime  结束时间
    * status  任务状态
    * size  对象大小,单位为KByte
    * instanceId  实例id
    * fileName  目标对象名称
    * destination  目标桶名
    * backupBeginTime  转储备份起始时间
    * backupEndTime  转储备份结束时间
    * transferType  转储任务类型
    * prefix  转储目标前缀
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
            'instanceId' => 'setInstanceId',
            'fileName' => 'setFileName',
            'destination' => 'setDestination',
            'backupBeginTime' => 'setBackupBeginTime',
            'backupEndTime' => 'setBackupEndTime',
            'transferType' => 'setTransferType',
            'prefix' => 'setPrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  备份id
    * name  备份名称
    * beginTime  开始时间
    * endTime  结束时间
    * status  任务状态
    * size  对象大小,单位为KByte
    * instanceId  实例id
    * fileName  目标对象名称
    * destination  目标桶名
    * backupBeginTime  转储备份起始时间
    * backupEndTime  转储备份结束时间
    * transferType  转储任务类型
    * prefix  转储目标前缀
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
            'instanceId' => 'getInstanceId',
            'fileName' => 'getFileName',
            'destination' => 'getDestination',
            'backupBeginTime' => 'getBackupBeginTime',
            'backupEndTime' => 'getBackupEndTime',
            'transferType' => 'getTransferType',
            'prefix' => 'getPrefix'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['backupBeginTime'] = isset($data['backupBeginTime']) ? $data['backupBeginTime'] : null;
        $this->container['backupEndTime'] = isset($data['backupEndTime']) ? $data['backupEndTime'] : null;
        $this->container['transferType'] = isset($data['transferType']) ? $data['transferType'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
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
    *  备份id
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
    * @param string|null $id 备份id
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
    *  备份名称
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
    * @param string|null $name 备份名称
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
    *  开始时间
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 开始时间
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
    *  结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间
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
    *  任务状态
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
    * @param string|null $status 任务状态
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
    *  对象大小,单位为KByte
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
    * @param double|null $size 对象大小,单位为KByte
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
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
    * @param string|null $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets fileName
    *  目标对象名称
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
    * @param string|null $fileName 目标对象名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets destination
    *  目标桶名
    *
    * @return string|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string|null $destination 目标桶名
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets backupBeginTime
    *  转储备份起始时间
    *
    * @return int|null
    */
    public function getBackupBeginTime()
    {
        return $this->container['backupBeginTime'];
    }

    /**
    * Sets backupBeginTime
    *
    * @param int|null $backupBeginTime 转储备份起始时间
    *
    * @return $this
    */
    public function setBackupBeginTime($backupBeginTime)
    {
        $this->container['backupBeginTime'] = $backupBeginTime;
        return $this;
    }

    /**
    * Gets backupEndTime
    *  转储备份结束时间
    *
    * @return int|null
    */
    public function getBackupEndTime()
    {
        return $this->container['backupEndTime'];
    }

    /**
    * Sets backupEndTime
    *
    * @param int|null $backupEndTime 转储备份结束时间
    *
    * @return $this
    */
    public function setBackupEndTime($backupEndTime)
    {
        $this->container['backupEndTime'] = $backupEndTime;
        return $this;
    }

    /**
    * Gets transferType
    *  转储任务类型
    *
    * @return string|null
    */
    public function getTransferType()
    {
        return $this->container['transferType'];
    }

    /**
    * Sets transferType
    *
    * @param string|null $transferType 转储任务类型
    *
    * @return $this
    */
    public function setTransferType($transferType)
    {
        $this->container['transferType'] = $transferType;
        return $this;
    }

    /**
    * Gets prefix
    *  转储目标前缀
    *
    * @return string|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string|null $prefix 转储目标前缀
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
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

