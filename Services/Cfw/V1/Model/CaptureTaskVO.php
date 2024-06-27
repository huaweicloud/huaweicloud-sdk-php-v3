<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CaptureTaskVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CaptureTaskVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * captureSize  抓包大小
    * createdDate  抓包创建时间
    * destAddress  目的地址
    * destAddressType  目的地址类型0 ipv4,1 ipv6
    * destPort  目的端口
    * duration  抓包时长
    * isDeleted  是否被删除，0否 1是
    * maxPackets  最大抓包数
    * modifiedDate  修改日期
    * name  抓包任务名称
    * protocol  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    * remainingDays  剩余保留天数
    * sourceAddress  源地址
    * sourceAddressType  源地址类型0 ipv4,1 ipv6
    * sourcePort  源端口
    * status  抓包任务状态
    * taskId  抓包任务id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'captureSize' => 'string',
            'createdDate' => 'string',
            'destAddress' => 'string',
            'destAddressType' => 'int',
            'destPort' => 'string',
            'duration' => 'int',
            'isDeleted' => 'int',
            'maxPackets' => 'int',
            'modifiedDate' => 'string',
            'name' => 'string',
            'protocol' => 'int',
            'remainingDays' => 'int',
            'sourceAddress' => 'string',
            'sourceAddressType' => 'int',
            'sourcePort' => 'string',
            'status' => 'int',
            'taskId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * captureSize  抓包大小
    * createdDate  抓包创建时间
    * destAddress  目的地址
    * destAddressType  目的地址类型0 ipv4,1 ipv6
    * destPort  目的端口
    * duration  抓包时长
    * isDeleted  是否被删除，0否 1是
    * maxPackets  最大抓包数
    * modifiedDate  修改日期
    * name  抓包任务名称
    * protocol  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    * remainingDays  剩余保留天数
    * sourceAddress  源地址
    * sourceAddressType  源地址类型0 ipv4,1 ipv6
    * sourcePort  源端口
    * status  抓包任务状态
    * taskId  抓包任务id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'captureSize' => null,
        'createdDate' => null,
        'destAddress' => null,
        'destAddressType' => 'int32',
        'destPort' => null,
        'duration' => 'int32',
        'isDeleted' => 'int32',
        'maxPackets' => 'int32',
        'modifiedDate' => null,
        'name' => null,
        'protocol' => 'int32',
        'remainingDays' => 'int32',
        'sourceAddress' => null,
        'sourceAddressType' => 'int32',
        'sourcePort' => null,
        'status' => 'int32',
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
    * captureSize  抓包大小
    * createdDate  抓包创建时间
    * destAddress  目的地址
    * destAddressType  目的地址类型0 ipv4,1 ipv6
    * destPort  目的端口
    * duration  抓包时长
    * isDeleted  是否被删除，0否 1是
    * maxPackets  最大抓包数
    * modifiedDate  修改日期
    * name  抓包任务名称
    * protocol  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    * remainingDays  剩余保留天数
    * sourceAddress  源地址
    * sourceAddressType  源地址类型0 ipv4,1 ipv6
    * sourcePort  源端口
    * status  抓包任务状态
    * taskId  抓包任务id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'captureSize' => 'capture_size',
            'createdDate' => 'created_date',
            'destAddress' => 'dest_address',
            'destAddressType' => 'dest_address_type',
            'destPort' => 'dest_port',
            'duration' => 'duration',
            'isDeleted' => 'is_deleted',
            'maxPackets' => 'max_packets',
            'modifiedDate' => 'modified_date',
            'name' => 'name',
            'protocol' => 'protocol',
            'remainingDays' => 'remaining_days',
            'sourceAddress' => 'source_address',
            'sourceAddressType' => 'source_address_type',
            'sourcePort' => 'source_port',
            'status' => 'status',
            'taskId' => 'task_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * captureSize  抓包大小
    * createdDate  抓包创建时间
    * destAddress  目的地址
    * destAddressType  目的地址类型0 ipv4,1 ipv6
    * destPort  目的端口
    * duration  抓包时长
    * isDeleted  是否被删除，0否 1是
    * maxPackets  最大抓包数
    * modifiedDate  修改日期
    * name  抓包任务名称
    * protocol  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    * remainingDays  剩余保留天数
    * sourceAddress  源地址
    * sourceAddressType  源地址类型0 ipv4,1 ipv6
    * sourcePort  源端口
    * status  抓包任务状态
    * taskId  抓包任务id
    *
    * @var string[]
    */
    protected static $setters = [
            'captureSize' => 'setCaptureSize',
            'createdDate' => 'setCreatedDate',
            'destAddress' => 'setDestAddress',
            'destAddressType' => 'setDestAddressType',
            'destPort' => 'setDestPort',
            'duration' => 'setDuration',
            'isDeleted' => 'setIsDeleted',
            'maxPackets' => 'setMaxPackets',
            'modifiedDate' => 'setModifiedDate',
            'name' => 'setName',
            'protocol' => 'setProtocol',
            'remainingDays' => 'setRemainingDays',
            'sourceAddress' => 'setSourceAddress',
            'sourceAddressType' => 'setSourceAddressType',
            'sourcePort' => 'setSourcePort',
            'status' => 'setStatus',
            'taskId' => 'setTaskId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * captureSize  抓包大小
    * createdDate  抓包创建时间
    * destAddress  目的地址
    * destAddressType  目的地址类型0 ipv4,1 ipv6
    * destPort  目的端口
    * duration  抓包时长
    * isDeleted  是否被删除，0否 1是
    * maxPackets  最大抓包数
    * modifiedDate  修改日期
    * name  抓包任务名称
    * protocol  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    * remainingDays  剩余保留天数
    * sourceAddress  源地址
    * sourceAddressType  源地址类型0 ipv4,1 ipv6
    * sourcePort  源端口
    * status  抓包任务状态
    * taskId  抓包任务id
    *
    * @var string[]
    */
    protected static $getters = [
            'captureSize' => 'getCaptureSize',
            'createdDate' => 'getCreatedDate',
            'destAddress' => 'getDestAddress',
            'destAddressType' => 'getDestAddressType',
            'destPort' => 'getDestPort',
            'duration' => 'getDuration',
            'isDeleted' => 'getIsDeleted',
            'maxPackets' => 'getMaxPackets',
            'modifiedDate' => 'getModifiedDate',
            'name' => 'getName',
            'protocol' => 'getProtocol',
            'remainingDays' => 'getRemainingDays',
            'sourceAddress' => 'getSourceAddress',
            'sourceAddressType' => 'getSourceAddressType',
            'sourcePort' => 'getSourcePort',
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
        $this->container['captureSize'] = isset($data['captureSize']) ? $data['captureSize'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['destAddress'] = isset($data['destAddress']) ? $data['destAddress'] : null;
        $this->container['destAddressType'] = isset($data['destAddressType']) ? $data['destAddressType'] : null;
        $this->container['destPort'] = isset($data['destPort']) ? $data['destPort'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['maxPackets'] = isset($data['maxPackets']) ? $data['maxPackets'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['remainingDays'] = isset($data['remainingDays']) ? $data['remainingDays'] : null;
        $this->container['sourceAddress'] = isset($data['sourceAddress']) ? $data['sourceAddress'] : null;
        $this->container['sourceAddressType'] = isset($data['sourceAddressType']) ? $data['sourceAddressType'] : null;
        $this->container['sourcePort'] = isset($data['sourcePort']) ? $data['sourcePort'] : null;
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
    * Gets captureSize
    *  抓包大小
    *
    * @return string|null
    */
    public function getCaptureSize()
    {
        return $this->container['captureSize'];
    }

    /**
    * Sets captureSize
    *
    * @param string|null $captureSize 抓包大小
    *
    * @return $this
    */
    public function setCaptureSize($captureSize)
    {
        $this->container['captureSize'] = $captureSize;
        return $this;
    }

    /**
    * Gets createdDate
    *  抓包创建时间
    *
    * @return string|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param string|null $createdDate 抓包创建时间
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets destAddress
    *  目的地址
    *
    * @return string|null
    */
    public function getDestAddress()
    {
        return $this->container['destAddress'];
    }

    /**
    * Sets destAddress
    *
    * @param string|null $destAddress 目的地址
    *
    * @return $this
    */
    public function setDestAddress($destAddress)
    {
        $this->container['destAddress'] = $destAddress;
        return $this;
    }

    /**
    * Gets destAddressType
    *  目的地址类型0 ipv4,1 ipv6
    *
    * @return int|null
    */
    public function getDestAddressType()
    {
        return $this->container['destAddressType'];
    }

    /**
    * Sets destAddressType
    *
    * @param int|null $destAddressType 目的地址类型0 ipv4,1 ipv6
    *
    * @return $this
    */
    public function setDestAddressType($destAddressType)
    {
        $this->container['destAddressType'] = $destAddressType;
        return $this;
    }

    /**
    * Gets destPort
    *  目的端口
    *
    * @return string|null
    */
    public function getDestPort()
    {
        return $this->container['destPort'];
    }

    /**
    * Sets destPort
    *
    * @param string|null $destPort 目的端口
    *
    * @return $this
    */
    public function setDestPort($destPort)
    {
        $this->container['destPort'] = $destPort;
        return $this;
    }

    /**
    * Gets duration
    *  抓包时长
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 抓包时长
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets isDeleted
    *  是否被删除，0否 1是
    *
    * @return int|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param int|null $isDeleted 是否被删除，0否 1是
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }

    /**
    * Gets maxPackets
    *  最大抓包数
    *
    * @return int|null
    */
    public function getMaxPackets()
    {
        return $this->container['maxPackets'];
    }

    /**
    * Sets maxPackets
    *
    * @param int|null $maxPackets 最大抓包数
    *
    * @return $this
    */
    public function setMaxPackets($maxPackets)
    {
        $this->container['maxPackets'] = $maxPackets;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  修改日期
    *
    * @return string|null
    */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
    * Sets modifiedDate
    *
    * @param string|null $modifiedDate 修改日期
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets name
    *  抓包任务名称
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
    * @param string|null $name 抓包任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    *
    * @return int|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param int|null $protocol 协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets remainingDays
    *  剩余保留天数
    *
    * @return int|null
    */
    public function getRemainingDays()
    {
        return $this->container['remainingDays'];
    }

    /**
    * Sets remainingDays
    *
    * @param int|null $remainingDays 剩余保留天数
    *
    * @return $this
    */
    public function setRemainingDays($remainingDays)
    {
        $this->container['remainingDays'] = $remainingDays;
        return $this;
    }

    /**
    * Gets sourceAddress
    *  源地址
    *
    * @return string|null
    */
    public function getSourceAddress()
    {
        return $this->container['sourceAddress'];
    }

    /**
    * Sets sourceAddress
    *
    * @param string|null $sourceAddress 源地址
    *
    * @return $this
    */
    public function setSourceAddress($sourceAddress)
    {
        $this->container['sourceAddress'] = $sourceAddress;
        return $this;
    }

    /**
    * Gets sourceAddressType
    *  源地址类型0 ipv4,1 ipv6
    *
    * @return int|null
    */
    public function getSourceAddressType()
    {
        return $this->container['sourceAddressType'];
    }

    /**
    * Sets sourceAddressType
    *
    * @param int|null $sourceAddressType 源地址类型0 ipv4,1 ipv6
    *
    * @return $this
    */
    public function setSourceAddressType($sourceAddressType)
    {
        $this->container['sourceAddressType'] = $sourceAddressType;
        return $this;
    }

    /**
    * Gets sourcePort
    *  源端口
    *
    * @return string|null
    */
    public function getSourcePort()
    {
        return $this->container['sourcePort'];
    }

    /**
    * Sets sourcePort
    *
    * @param string|null $sourcePort 源端口
    *
    * @return $this
    */
    public function setSourcePort($sourcePort)
    {
        $this->container['sourcePort'] = $sourcePort;
        return $this;
    }

    /**
    * Gets status
    *  抓包任务状态
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
    * @param int|null $status 抓包任务状态
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
    *  抓包任务id
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
    * @param string|null $taskId 抓包任务id
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

