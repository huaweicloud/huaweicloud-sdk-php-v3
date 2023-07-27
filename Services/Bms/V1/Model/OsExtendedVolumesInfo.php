<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OsExtendedVolumesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OsExtendedVolumesInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  磁盘ID，格式为UUID
    * deleteOnTermination  删裸金属服务器时是否一并删除该磁盘。true：是false：否
    * bootIndex  启动标识，“0”代表启动盘，“-1“代表非启动盘
    * device  磁盘设备名称，例如“/dev/sdb”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'deleteOnTermination' => 'string',
            'bootIndex' => 'string',
            'device' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  磁盘ID，格式为UUID
    * deleteOnTermination  删裸金属服务器时是否一并删除该磁盘。true：是false：否
    * bootIndex  启动标识，“0”代表启动盘，“-1“代表非启动盘
    * device  磁盘设备名称，例如“/dev/sdb”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'deleteOnTermination' => null,
        'bootIndex' => null,
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
    * id  磁盘ID，格式为UUID
    * deleteOnTermination  删裸金属服务器时是否一并删除该磁盘。true：是false：否
    * bootIndex  启动标识，“0”代表启动盘，“-1“代表非启动盘
    * device  磁盘设备名称，例如“/dev/sdb”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'deleteOnTermination' => 'delete_on_termination',
            'bootIndex' => 'bootIndex',
            'device' => 'device'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  磁盘ID，格式为UUID
    * deleteOnTermination  删裸金属服务器时是否一并删除该磁盘。true：是false：否
    * bootIndex  启动标识，“0”代表启动盘，“-1“代表非启动盘
    * device  磁盘设备名称，例如“/dev/sdb”。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'deleteOnTermination' => 'setDeleteOnTermination',
            'bootIndex' => 'setBootIndex',
            'device' => 'setDevice'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  磁盘ID，格式为UUID
    * deleteOnTermination  删裸金属服务器时是否一并删除该磁盘。true：是false：否
    * bootIndex  启动标识，“0”代表启动盘，“-1“代表非启动盘
    * device  磁盘设备名称，例如“/dev/sdb”。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'deleteOnTermination' => 'getDeleteOnTermination',
            'bootIndex' => 'getBootIndex',
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
    const BOOT_INDEX__0 = '0';
    const BOOT_INDEX__1 = '-1';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBootIndexAllowableValues()
    {
        return [
            self::BOOT_INDEX__0,
            self::BOOT_INDEX__1,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['deleteOnTermination'] = isset($data['deleteOnTermination']) ? $data['deleteOnTermination'] : null;
        $this->container['bootIndex'] = isset($data['bootIndex']) ? $data['bootIndex'] : null;
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
            $allowedValues = $this->getBootIndexAllowableValues();
                if (!is_null($this->container['bootIndex']) && !in_array($this->container['bootIndex'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bootIndex', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  磁盘ID，格式为UUID
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
    * @param string|null $id 磁盘ID，格式为UUID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets deleteOnTermination
    *  删裸金属服务器时是否一并删除该磁盘。true：是false：否
    *
    * @return string|null
    */
    public function getDeleteOnTermination()
    {
        return $this->container['deleteOnTermination'];
    }

    /**
    * Sets deleteOnTermination
    *
    * @param string|null $deleteOnTermination 删裸金属服务器时是否一并删除该磁盘。true：是false：否
    *
    * @return $this
    */
    public function setDeleteOnTermination($deleteOnTermination)
    {
        $this->container['deleteOnTermination'] = $deleteOnTermination;
        return $this;
    }

    /**
    * Gets bootIndex
    *  启动标识，“0”代表启动盘，“-1“代表非启动盘
    *
    * @return string|null
    */
    public function getBootIndex()
    {
        return $this->container['bootIndex'];
    }

    /**
    * Sets bootIndex
    *
    * @param string|null $bootIndex 启动标识，“0”代表启动盘，“-1“代表非启动盘
    *
    * @return $this
    */
    public function setBootIndex($bootIndex)
    {
        $this->container['bootIndex'] = $bootIndex;
        return $this;
    }

    /**
    * Gets device
    *  磁盘设备名称，例如“/dev/sdb”。
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
    * @param string|null $device 磁盘设备名称，例如“/dev/sdb”。
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

