<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateBlockDeviceMappingAttachmentOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateBlockDeviceMappingAttachmentOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bootIndex  盘在虚拟机上的挂载顺序，0表示启动盘
    * deleteOnTermination  卷是否随实例一同释放 默认系统盘设置为true随实例释放，数据盘设置为false不随实例释放
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bootIndex' => 'int',
            'deleteOnTermination' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bootIndex  盘在虚拟机上的挂载顺序，0表示启动盘
    * deleteOnTermination  卷是否随实例一同释放 默认系统盘设置为true随实例释放，数据盘设置为false不随实例释放
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bootIndex' => null,
        'deleteOnTermination' => null
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
    * bootIndex  盘在虚拟机上的挂载顺序，0表示启动盘
    * deleteOnTermination  卷是否随实例一同释放 默认系统盘设置为true随实例释放，数据盘设置为false不随实例释放
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bootIndex' => 'boot_index',
            'deleteOnTermination' => 'delete_on_termination'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bootIndex  盘在虚拟机上的挂载顺序，0表示启动盘
    * deleteOnTermination  卷是否随实例一同释放 默认系统盘设置为true随实例释放，数据盘设置为false不随实例释放
    *
    * @var string[]
    */
    protected static $setters = [
            'bootIndex' => 'setBootIndex',
            'deleteOnTermination' => 'setDeleteOnTermination'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bootIndex  盘在虚拟机上的挂载顺序，0表示启动盘
    * deleteOnTermination  卷是否随实例一同释放 默认系统盘设置为true随实例释放，数据盘设置为false不随实例释放
    *
    * @var string[]
    */
    protected static $getters = [
            'bootIndex' => 'getBootIndex',
            'deleteOnTermination' => 'getDeleteOnTermination'
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
        $this->container['bootIndex'] = isset($data['bootIndex']) ? $data['bootIndex'] : null;
        $this->container['deleteOnTermination'] = isset($data['deleteOnTermination']) ? $data['deleteOnTermination'] : null;
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
    * Gets bootIndex
    *  盘在虚拟机上的挂载顺序，0表示启动盘
    *
    * @return int|null
    */
    public function getBootIndex()
    {
        return $this->container['bootIndex'];
    }

    /**
    * Sets bootIndex
    *
    * @param int|null $bootIndex 盘在虚拟机上的挂载顺序，0表示启动盘
    *
    * @return $this
    */
    public function setBootIndex($bootIndex)
    {
        $this->container['bootIndex'] = $bootIndex;
        return $this;
    }

    /**
    * Gets deleteOnTermination
    *  卷是否随实例一同释放 默认系统盘设置为true随实例释放，数据盘设置为false不随实例释放
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
    * @param bool|null $deleteOnTermination 卷是否随实例一同释放 默认系统盘设置为true随实例释放，数据盘设置为false不随实例释放
    *
    * @return $this
    */
    public function setDeleteOnTermination($deleteOnTermination)
    {
        $this->container['deleteOnTermination'] = $deleteOnTermination;
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

