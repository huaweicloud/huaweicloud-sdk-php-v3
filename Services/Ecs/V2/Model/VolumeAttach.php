<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeAttach implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeAttach';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云磁盘ID。
    * deleteOnTermination  一个标志，指示在删除服务器时是否删除附加的卷。 默认情况下，这是False
    * device  挂载点
    * bootIndex  盘在云服务器上的挂载顺序，0表示启动盘。
    * size  云盘大小（单位：GB）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'deleteOnTermination' => 'bool',
            'device' => 'string',
            'bootIndex' => 'string',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云磁盘ID。
    * deleteOnTermination  一个标志，指示在删除服务器时是否删除附加的卷。 默认情况下，这是False
    * device  挂载点
    * bootIndex  盘在云服务器上的挂载顺序，0表示启动盘。
    * size  云盘大小（单位：GB）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'deleteOnTermination' => null,
        'device' => null,
        'bootIndex' => null,
        'size' => null
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
    * id  云磁盘ID。
    * deleteOnTermination  一个标志，指示在删除服务器时是否删除附加的卷。 默认情况下，这是False
    * device  挂载点
    * bootIndex  盘在云服务器上的挂载顺序，0表示启动盘。
    * size  云盘大小（单位：GB）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'deleteOnTermination' => 'delete_on_termination',
            'device' => 'device',
            'bootIndex' => 'bootIndex',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云磁盘ID。
    * deleteOnTermination  一个标志，指示在删除服务器时是否删除附加的卷。 默认情况下，这是False
    * device  挂载点
    * bootIndex  盘在云服务器上的挂载顺序，0表示启动盘。
    * size  云盘大小（单位：GB）。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'deleteOnTermination' => 'setDeleteOnTermination',
            'device' => 'setDevice',
            'bootIndex' => 'setBootIndex',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云磁盘ID。
    * deleteOnTermination  一个标志，指示在删除服务器时是否删除附加的卷。 默认情况下，这是False
    * device  挂载点
    * bootIndex  盘在云服务器上的挂载顺序，0表示启动盘。
    * size  云盘大小（单位：GB）。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'deleteOnTermination' => 'getDeleteOnTermination',
            'device' => 'getDevice',
            'bootIndex' => 'getBootIndex',
            'size' => 'getSize'
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
        $this->container['deleteOnTermination'] = isset($data['deleteOnTermination']) ? $data['deleteOnTermination'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['bootIndex'] = isset($data['bootIndex']) ? $data['bootIndex'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    *  云磁盘ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 云磁盘ID。
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
    *  一个标志，指示在删除服务器时是否删除附加的卷。 默认情况下，这是False
    *
    * @return bool|null
    */
    public function getDeleteOnTermination()
    {
        return $this->container['deleteOnTermination'];
    }

    /**
    * Sets deleteOnTermination
    *
    * @param bool|null $deleteOnTermination 一个标志，指示在删除服务器时是否删除附加的卷。 默认情况下，这是False
    *
    * @return $this
    */
    public function setDeleteOnTermination($deleteOnTermination)
    {
        $this->container['deleteOnTermination'] = $deleteOnTermination;
        return $this;
    }

    /**
    * Gets device
    *  挂载点
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
    * @param string|null $device 挂载点
    *
    * @return $this
    */
    public function setDevice($device)
    {
        $this->container['device'] = $device;
        return $this;
    }

    /**
    * Gets bootIndex
    *  盘在云服务器上的挂载顺序，0表示启动盘。
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
    * @param string|null $bootIndex 盘在云服务器上的挂载顺序，0表示启动盘。
    *
    * @return $this
    */
    public function setBootIndex($bootIndex)
    {
        $this->container['bootIndex'] = $bootIndex;
        return $this;
    }

    /**
    * Gets size
    *  云盘大小（单位：GB）。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 云盘大小（单位：GB）。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

