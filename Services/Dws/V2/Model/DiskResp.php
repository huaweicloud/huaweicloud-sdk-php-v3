<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiskResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiskResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceName  实例名称
    * instanceId  实例ID
    * hostName  主机名称
    * diskName  磁盘名称
    * diskType  磁盘类型(系统盘、数据盘、日志盘)。
    * total  磁盘总容量(GB)。
    * used  磁盘已使用容量(GB)。
    * available  磁盘可用容量(GB)。
    * usedPercentage  磁盘使用率(%)。
    * await  IO等待时间(ms)。
    * svctm  IO服务时间(ms)。
    * util  IO使用率(%)。
    * readRate  磁盘读速率(KB/s)。
    * writeRate  磁盘写速率(KB/s)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceName' => 'string',
            'instanceId' => 'string',
            'hostName' => 'string',
            'diskName' => 'string',
            'diskType' => 'string',
            'total' => 'double',
            'used' => 'double',
            'available' => 'double',
            'usedPercentage' => 'double',
            'await' => 'double',
            'svctm' => 'double',
            'util' => 'double',
            'readRate' => 'double',
            'writeRate' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceName  实例名称
    * instanceId  实例ID
    * hostName  主机名称
    * diskName  磁盘名称
    * diskType  磁盘类型(系统盘、数据盘、日志盘)。
    * total  磁盘总容量(GB)。
    * used  磁盘已使用容量(GB)。
    * available  磁盘可用容量(GB)。
    * usedPercentage  磁盘使用率(%)。
    * await  IO等待时间(ms)。
    * svctm  IO服务时间(ms)。
    * util  IO使用率(%)。
    * readRate  磁盘读速率(KB/s)。
    * writeRate  磁盘写速率(KB/s)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceName' => null,
        'instanceId' => null,
        'hostName' => null,
        'diskName' => null,
        'diskType' => null,
        'total' => 'double',
        'used' => 'double',
        'available' => 'double',
        'usedPercentage' => 'double',
        'await' => 'double',
        'svctm' => 'double',
        'util' => 'double',
        'readRate' => 'double',
        'writeRate' => 'double'
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
    * instanceName  实例名称
    * instanceId  实例ID
    * hostName  主机名称
    * diskName  磁盘名称
    * diskType  磁盘类型(系统盘、数据盘、日志盘)。
    * total  磁盘总容量(GB)。
    * used  磁盘已使用容量(GB)。
    * available  磁盘可用容量(GB)。
    * usedPercentage  磁盘使用率(%)。
    * await  IO等待时间(ms)。
    * svctm  IO服务时间(ms)。
    * util  IO使用率(%)。
    * readRate  磁盘读速率(KB/s)。
    * writeRate  磁盘写速率(KB/s)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceName' => 'instance_name',
            'instanceId' => 'instance_id',
            'hostName' => 'host_name',
            'diskName' => 'disk_name',
            'diskType' => 'disk_type',
            'total' => 'total',
            'used' => 'used',
            'available' => 'available',
            'usedPercentage' => 'used_percentage',
            'await' => 'await',
            'svctm' => 'svctm',
            'util' => 'util',
            'readRate' => 'read_rate',
            'writeRate' => 'write_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceName  实例名称
    * instanceId  实例ID
    * hostName  主机名称
    * diskName  磁盘名称
    * diskType  磁盘类型(系统盘、数据盘、日志盘)。
    * total  磁盘总容量(GB)。
    * used  磁盘已使用容量(GB)。
    * available  磁盘可用容量(GB)。
    * usedPercentage  磁盘使用率(%)。
    * await  IO等待时间(ms)。
    * svctm  IO服务时间(ms)。
    * util  IO使用率(%)。
    * readRate  磁盘读速率(KB/s)。
    * writeRate  磁盘写速率(KB/s)。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceName' => 'setInstanceName',
            'instanceId' => 'setInstanceId',
            'hostName' => 'setHostName',
            'diskName' => 'setDiskName',
            'diskType' => 'setDiskType',
            'total' => 'setTotal',
            'used' => 'setUsed',
            'available' => 'setAvailable',
            'usedPercentage' => 'setUsedPercentage',
            'await' => 'setAwait',
            'svctm' => 'setSvctm',
            'util' => 'setUtil',
            'readRate' => 'setReadRate',
            'writeRate' => 'setWriteRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceName  实例名称
    * instanceId  实例ID
    * hostName  主机名称
    * diskName  磁盘名称
    * diskType  磁盘类型(系统盘、数据盘、日志盘)。
    * total  磁盘总容量(GB)。
    * used  磁盘已使用容量(GB)。
    * available  磁盘可用容量(GB)。
    * usedPercentage  磁盘使用率(%)。
    * await  IO等待时间(ms)。
    * svctm  IO服务时间(ms)。
    * util  IO使用率(%)。
    * readRate  磁盘读速率(KB/s)。
    * writeRate  磁盘写速率(KB/s)。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceName' => 'getInstanceName',
            'instanceId' => 'getInstanceId',
            'hostName' => 'getHostName',
            'diskName' => 'getDiskName',
            'diskType' => 'getDiskType',
            'total' => 'getTotal',
            'used' => 'getUsed',
            'available' => 'getAvailable',
            'usedPercentage' => 'getUsedPercentage',
            'await' => 'getAwait',
            'svctm' => 'getSvctm',
            'util' => 'getUtil',
            'readRate' => 'getReadRate',
            'writeRate' => 'getWriteRate'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['diskName'] = isset($data['diskName']) ? $data['diskName'] : null;
        $this->container['diskType'] = isset($data['diskType']) ? $data['diskType'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['usedPercentage'] = isset($data['usedPercentage']) ? $data['usedPercentage'] : null;
        $this->container['await'] = isset($data['await']) ? $data['await'] : null;
        $this->container['svctm'] = isset($data['svctm']) ? $data['svctm'] : null;
        $this->container['util'] = isset($data['util']) ? $data['util'] : null;
        $this->container['readRate'] = isset($data['readRate']) ? $data['readRate'] : null;
        $this->container['writeRate'] = isset($data['writeRate']) ? $data['writeRate'] : null;
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
    * Gets hostName
    *  主机名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets diskName
    *  磁盘名称
    *
    * @return string|null
    */
    public function getDiskName()
    {
        return $this->container['diskName'];
    }

    /**
    * Sets diskName
    *
    * @param string|null $diskName 磁盘名称
    *
    * @return $this
    */
    public function setDiskName($diskName)
    {
        $this->container['diskName'] = $diskName;
        return $this;
    }

    /**
    * Gets diskType
    *  磁盘类型(系统盘、数据盘、日志盘)。
    *
    * @return string|null
    */
    public function getDiskType()
    {
        return $this->container['diskType'];
    }

    /**
    * Sets diskType
    *
    * @param string|null $diskType 磁盘类型(系统盘、数据盘、日志盘)。
    *
    * @return $this
    */
    public function setDiskType($diskType)
    {
        $this->container['diskType'] = $diskType;
        return $this;
    }

    /**
    * Gets total
    *  磁盘总容量(GB)。
    *
    * @return double|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param double|null $total 磁盘总容量(GB)。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets used
    *  磁盘已使用容量(GB)。
    *
    * @return double|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param double|null $used 磁盘已使用容量(GB)。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets available
    *  磁盘可用容量(GB)。
    *
    * @return double|null
    */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
    * Sets available
    *
    * @param double|null $available 磁盘可用容量(GB)。
    *
    * @return $this
    */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;
        return $this;
    }

    /**
    * Gets usedPercentage
    *  磁盘使用率(%)。
    *
    * @return double|null
    */
    public function getUsedPercentage()
    {
        return $this->container['usedPercentage'];
    }

    /**
    * Sets usedPercentage
    *
    * @param double|null $usedPercentage 磁盘使用率(%)。
    *
    * @return $this
    */
    public function setUsedPercentage($usedPercentage)
    {
        $this->container['usedPercentage'] = $usedPercentage;
        return $this;
    }

    /**
    * Gets await
    *  IO等待时间(ms)。
    *
    * @return double|null
    */
    public function getAwait()
    {
        return $this->container['await'];
    }

    /**
    * Sets await
    *
    * @param double|null $await IO等待时间(ms)。
    *
    * @return $this
    */
    public function setAwait($await)
    {
        $this->container['await'] = $await;
        return $this;
    }

    /**
    * Gets svctm
    *  IO服务时间(ms)。
    *
    * @return double|null
    */
    public function getSvctm()
    {
        return $this->container['svctm'];
    }

    /**
    * Sets svctm
    *
    * @param double|null $svctm IO服务时间(ms)。
    *
    * @return $this
    */
    public function setSvctm($svctm)
    {
        $this->container['svctm'] = $svctm;
        return $this;
    }

    /**
    * Gets util
    *  IO使用率(%)。
    *
    * @return double|null
    */
    public function getUtil()
    {
        return $this->container['util'];
    }

    /**
    * Sets util
    *
    * @param double|null $util IO使用率(%)。
    *
    * @return $this
    */
    public function setUtil($util)
    {
        $this->container['util'] = $util;
        return $this;
    }

    /**
    * Gets readRate
    *  磁盘读速率(KB/s)。
    *
    * @return double|null
    */
    public function getReadRate()
    {
        return $this->container['readRate'];
    }

    /**
    * Sets readRate
    *
    * @param double|null $readRate 磁盘读速率(KB/s)。
    *
    * @return $this
    */
    public function setReadRate($readRate)
    {
        $this->container['readRate'] = $readRate;
        return $this;
    }

    /**
    * Gets writeRate
    *  磁盘写速率(KB/s)。
    *
    * @return double|null
    */
    public function getWriteRate()
    {
        return $this->container['writeRate'];
    }

    /**
    * Sets writeRate
    *
    * @param double|null $writeRate 磁盘写速率(KB/s)。
    *
    * @return $this
    */
    public function setWriteRate($writeRate)
    {
        $this->container['writeRate'] = $writeRate;
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

