<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateDisk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateDisk';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  磁盘ID
    * index  磁盘序号，从0开始
    * name  磁盘名称
    * disktype  磁盘类型，同volumetype字段
    * size  磁盘大小，单位：GB
    * deviceUse  磁盘使用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'index' => 'int',
            'name' => 'string',
            'disktype' => 'string',
            'size' => 'int',
            'deviceUse' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  磁盘ID
    * index  磁盘序号，从0开始
    * name  磁盘名称
    * disktype  磁盘类型，同volumetype字段
    * size  磁盘大小，单位：GB
    * deviceUse  磁盘使用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'index' => 'int32',
        'name' => null,
        'disktype' => null,
        'size' => 'int64',
        'deviceUse' => null
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
    * id  磁盘ID
    * index  磁盘序号，从0开始
    * name  磁盘名称
    * disktype  磁盘类型，同volumetype字段
    * size  磁盘大小，单位：GB
    * deviceUse  磁盘使用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'index' => 'index',
            'name' => 'name',
            'disktype' => 'disktype',
            'size' => 'size',
            'deviceUse' => 'device_use'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  磁盘ID
    * index  磁盘序号，从0开始
    * name  磁盘名称
    * disktype  磁盘类型，同volumetype字段
    * size  磁盘大小，单位：GB
    * deviceUse  磁盘使用
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'index' => 'setIndex',
            'name' => 'setName',
            'disktype' => 'setDisktype',
            'size' => 'setSize',
            'deviceUse' => 'setDeviceUse'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  磁盘ID
    * index  磁盘序号，从0开始
    * name  磁盘名称
    * disktype  磁盘类型，同volumetype字段
    * size  磁盘大小，单位：GB
    * deviceUse  磁盘使用
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'index' => 'getIndex',
            'name' => 'getName',
            'disktype' => 'getDisktype',
            'size' => 'getSize',
            'deviceUse' => 'getDeviceUse'
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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['disktype'] = isset($data['disktype']) ? $data['disktype'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['deviceUse'] = isset($data['deviceUse']) ? $data['deviceUse'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
            if (($this->container['index'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'index', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['index'] < 0)) {
                $invalidProperties[] = "invalid value for 'index', must be bigger than or equal to 0.";
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
        if ($this->container['disktype'] === null) {
            $invalidProperties[] = "'disktype' can't be null";
        }
            if ((mb_strlen($this->container['disktype']) > 255)) {
                $invalidProperties[] = "invalid value for 'disktype', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['disktype']) < 0)) {
                $invalidProperties[] = "invalid value for 'disktype', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['deviceUse']) && (mb_strlen($this->container['deviceUse']) > 255)) {
                $invalidProperties[] = "invalid value for 'deviceUse', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['deviceUse']) && (mb_strlen($this->container['deviceUse']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceUse', the character length must be bigger than or equal to 0.";
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
    *  磁盘ID
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
    * @param int|null $id 磁盘ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets index
    *  磁盘序号，从0开始
    *
    * @return int
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param int $index 磁盘序号，从0开始
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets name
    *  磁盘名称
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
    * @param string $name 磁盘名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets disktype
    *  磁盘类型，同volumetype字段
    *
    * @return string
    */
    public function getDisktype()
    {
        return $this->container['disktype'];
    }

    /**
    * Sets disktype
    *
    * @param string $disktype 磁盘类型，同volumetype字段
    *
    * @return $this
    */
    public function setDisktype($disktype)
    {
        $this->container['disktype'] = $disktype;
        return $this;
    }

    /**
    * Gets size
    *  磁盘大小，单位：GB
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
    * @param int $size 磁盘大小，单位：GB
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets deviceUse
    *  磁盘使用
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
    * @param string|null $deviceUse 磁盘使用
    *
    * @return $this
    */
    public function setDeviceUse($deviceUse)
    {
        $this->container['deviceUse'] = $deviceUse;
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

