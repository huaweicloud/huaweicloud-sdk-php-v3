<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TargetDisks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TargetDisks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceUse  磁盘类型，普通磁盘，OS所在磁盘，BOOT所在磁盘 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    * diskId  磁盘ID,自动创建虚拟机不用设置
    * name  名称，根据磁盘顺序设置为disk X
    * physicalVolumes  物理卷信息
    * size  大小
    * usedSize  使用大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceUse' => 'string',
            'diskId' => 'string',
            'name' => 'string',
            'physicalVolumes' => '\HuaweiCloud\SDK\Sms\V3\Model\PhysicalVolumes[]',
            'size' => 'int',
            'usedSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceUse  磁盘类型，普通磁盘，OS所在磁盘，BOOT所在磁盘 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    * diskId  磁盘ID,自动创建虚拟机不用设置
    * name  名称，根据磁盘顺序设置为disk X
    * physicalVolumes  物理卷信息
    * size  大小
    * usedSize  使用大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceUse' => null,
        'diskId' => null,
        'name' => null,
        'physicalVolumes' => null,
        'size' => 'int64',
        'usedSize' => 'int64'
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
    * deviceUse  磁盘类型，普通磁盘，OS所在磁盘，BOOT所在磁盘 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    * diskId  磁盘ID,自动创建虚拟机不用设置
    * name  名称，根据磁盘顺序设置为disk X
    * physicalVolumes  物理卷信息
    * size  大小
    * usedSize  使用大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceUse' => 'device_use',
            'diskId' => 'disk_id',
            'name' => 'name',
            'physicalVolumes' => 'physical_volumes',
            'size' => 'size',
            'usedSize' => 'used_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceUse  磁盘类型，普通磁盘，OS所在磁盘，BOOT所在磁盘 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    * diskId  磁盘ID,自动创建虚拟机不用设置
    * name  名称，根据磁盘顺序设置为disk X
    * physicalVolumes  物理卷信息
    * size  大小
    * usedSize  使用大小
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceUse' => 'setDeviceUse',
            'diskId' => 'setDiskId',
            'name' => 'setName',
            'physicalVolumes' => 'setPhysicalVolumes',
            'size' => 'setSize',
            'usedSize' => 'setUsedSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceUse  磁盘类型，普通磁盘，OS所在磁盘，BOOT所在磁盘 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    * diskId  磁盘ID,自动创建虚拟机不用设置
    * name  名称，根据磁盘顺序设置为disk X
    * physicalVolumes  物理卷信息
    * size  大小
    * usedSize  使用大小
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceUse' => 'getDeviceUse',
            'diskId' => 'getDiskId',
            'name' => 'getName',
            'physicalVolumes' => 'getPhysicalVolumes',
            'size' => 'getSize',
            'usedSize' => 'getUsedSize'
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
    const DEVICE_USE_NORMAL = 'NORMAL';
    const DEVICE_USE_OS = 'OS';
    const DEVICE_USE_BOOT = 'BOOT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeviceUseAllowableValues()
    {
        return [
            self::DEVICE_USE_NORMAL,
            self::DEVICE_USE_OS,
            self::DEVICE_USE_BOOT,
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
        $this->container['deviceUse'] = isset($data['deviceUse']) ? $data['deviceUse'] : null;
        $this->container['diskId'] = isset($data['diskId']) ? $data['diskId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['physicalVolumes'] = isset($data['physicalVolumes']) ? $data['physicalVolumes'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['usedSize'] = isset($data['usedSize']) ? $data['usedSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDeviceUseAllowableValues();
                if (!is_null($this->container['deviceUse']) && !in_array($this->container['deviceUse'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deviceUse', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['diskId']) && (mb_strlen($this->container['diskId']) > 255)) {
                $invalidProperties[] = "invalid value for 'diskId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['diskId']) && (mb_strlen($this->container['diskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'diskId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['physicalVolumes'] === null) {
            $invalidProperties[] = "'physicalVolumes' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
        if ($this->container['usedSize'] === null) {
            $invalidProperties[] = "'usedSize' can't be null";
        }
            if (($this->container['usedSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'usedSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['usedSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'usedSize', must be bigger than or equal to 0.";
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
    * Gets deviceUse
    *  磁盘类型，普通磁盘，OS所在磁盘，BOOT所在磁盘 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    *
    * @return string|null
    */
    public function getDeviceUse()
    {
        return $this->container['deviceUse'];
    }

    /**
    * Sets deviceUse
    *
    * @param string|null $deviceUse 磁盘类型，普通磁盘，OS所在磁盘，BOOT所在磁盘 BOOT：BOOT设备 OS：系统设备 NORMAL:平常
    *
    * @return $this
    */
    public function setDeviceUse($deviceUse)
    {
        $this->container['deviceUse'] = $deviceUse;
        return $this;
    }

    /**
    * Gets diskId
    *  磁盘ID,自动创建虚拟机不用设置
    *
    * @return string|null
    */
    public function getDiskId()
    {
        return $this->container['diskId'];
    }

    /**
    * Sets diskId
    *
    * @param string|null $diskId 磁盘ID,自动创建虚拟机不用设置
    *
    * @return $this
    */
    public function setDiskId($diskId)
    {
        $this->container['diskId'] = $diskId;
        return $this;
    }

    /**
    * Gets name
    *  名称，根据磁盘顺序设置为disk X
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
    * @param string $name 名称，根据磁盘顺序设置为disk X
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets physicalVolumes
    *  物理卷信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\PhysicalVolumes[]
    */
    public function getPhysicalVolumes()
    {
        return $this->container['physicalVolumes'];
    }

    /**
    * Sets physicalVolumes
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\PhysicalVolumes[] $physicalVolumes 物理卷信息
    *
    * @return $this
    */
    public function setPhysicalVolumes($physicalVolumes)
    {
        $this->container['physicalVolumes'] = $physicalVolumes;
        return $this;
    }

    /**
    * Gets size
    *  大小
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets usedSize
    *  使用大小
    *
    * @return int
    */
    public function getUsedSize()
    {
        return $this->container['usedSize'];
    }

    /**
    * Sets usedSize
    *
    * @param int $usedSize 使用大小
    *
    * @return $this
    */
    public function setUsedSize($usedSize)
    {
        $this->container['usedSize'] = $usedSize;
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

