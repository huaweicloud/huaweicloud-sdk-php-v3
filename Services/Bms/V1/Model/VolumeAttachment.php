<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeAttachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeAttachment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeId  要挂卷的卷ID。可以从云硬盘控制台查询，或者通过调用“查询云硬盘列表”API获取。
    * device  磁盘挂载点，如/dev/sda、/dev/sdb。新增加的磁盘挂载点不能和已有的磁盘挂载点相同。需要根据已有设备名称顺序指定，否则不写device或device的值为空时，由系统自动生成。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeId' => 'string',
            'device' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeId  要挂卷的卷ID。可以从云硬盘控制台查询，或者通过调用“查询云硬盘列表”API获取。
    * device  磁盘挂载点，如/dev/sda、/dev/sdb。新增加的磁盘挂载点不能和已有的磁盘挂载点相同。需要根据已有设备名称顺序指定，否则不写device或device的值为空时，由系统自动生成。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeId' => 'uuid',
        'device' => null
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
    * volumeId  要挂卷的卷ID。可以从云硬盘控制台查询，或者通过调用“查询云硬盘列表”API获取。
    * device  磁盘挂载点，如/dev/sda、/dev/sdb。新增加的磁盘挂载点不能和已有的磁盘挂载点相同。需要根据已有设备名称顺序指定，否则不写device或device的值为空时，由系统自动生成。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeId' => 'volumeId',
            'device' => 'device'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeId  要挂卷的卷ID。可以从云硬盘控制台查询，或者通过调用“查询云硬盘列表”API获取。
    * device  磁盘挂载点，如/dev/sda、/dev/sdb。新增加的磁盘挂载点不能和已有的磁盘挂载点相同。需要根据已有设备名称顺序指定，否则不写device或device的值为空时，由系统自动生成。
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeId' => 'setVolumeId',
            'device' => 'setDevice'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeId  要挂卷的卷ID。可以从云硬盘控制台查询，或者通过调用“查询云硬盘列表”API获取。
    * device  磁盘挂载点，如/dev/sda、/dev/sdb。新增加的磁盘挂载点不能和已有的磁盘挂载点相同。需要根据已有设备名称顺序指定，否则不写device或device的值为空时，由系统自动生成。
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeId' => 'getVolumeId',
            'device' => 'getDevice'
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
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volumeId'] === null) {
            $invalidProperties[] = "'volumeId' can't be null";
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
    * Gets volumeId
    *  要挂卷的卷ID。可以从云硬盘控制台查询，或者通过调用“查询云硬盘列表”API获取。
    *
    * @return string
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string $volumeId 要挂卷的卷ID。可以从云硬盘控制台查询，或者通过调用“查询云硬盘列表”API获取。
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets device
    *  磁盘挂载点，如/dev/sda、/dev/sdb。新增加的磁盘挂载点不能和已有的磁盘挂载点相同。需要根据已有设备名称顺序指定，否则不写device或device的值为空时，由系统自动生成。
    *
    * @return string|null
    */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
    * Sets device
    *
    * @param string|null $device 磁盘挂载点，如/dev/sda、/dev/sdb。新增加的磁盘挂载点不能和已有的磁盘挂载点相同。需要根据已有设备名称顺序指定，否则不写device或device的值为空时，由系统自动生成。
    *
    * @return $this
    */
    public function setDevice($device)
    {
        $this->container['device'] = $device;
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

