<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeGroups implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeGroups';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * components  Pv信息
    * freeSize  剩余空间
    * logicalVolumes  lv信息
    * name  名称
    * size  大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'components' => 'string',
            'freeSize' => 'int',
            'logicalVolumes' => '\HuaweiCloud\SDK\Sms\V3\Model\LogicalVolumes[]',
            'name' => 'string',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * components  Pv信息
    * freeSize  剩余空间
    * logicalVolumes  lv信息
    * name  名称
    * size  大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'components' => null,
        'freeSize' => 'int64',
        'logicalVolumes' => null,
        'name' => null,
        'size' => 'int64'
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
    * components  Pv信息
    * freeSize  剩余空间
    * logicalVolumes  lv信息
    * name  名称
    * size  大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'components' => 'components',
            'freeSize' => 'free_size',
            'logicalVolumes' => 'logical_volumes',
            'name' => 'name',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * components  Pv信息
    * freeSize  剩余空间
    * logicalVolumes  lv信息
    * name  名称
    * size  大小
    *
    * @var string[]
    */
    protected static $setters = [
            'components' => 'setComponents',
            'freeSize' => 'setFreeSize',
            'logicalVolumes' => 'setLogicalVolumes',
            'name' => 'setName',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * components  Pv信息
    * freeSize  剩余空间
    * logicalVolumes  lv信息
    * name  名称
    * size  大小
    *
    * @var string[]
    */
    protected static $getters = [
            'components' => 'getComponents',
            'freeSize' => 'getFreeSize',
            'logicalVolumes' => 'getLogicalVolumes',
            'name' => 'getName',
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
        $this->container['components'] = isset($data['components']) ? $data['components'] : null;
        $this->container['freeSize'] = isset($data['freeSize']) ? $data['freeSize'] : null;
        $this->container['logicalVolumes'] = isset($data['logicalVolumes']) ? $data['logicalVolumes'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
            if (!is_null($this->container['components']) && (mb_strlen($this->container['components']) > 255)) {
                $invalidProperties[] = "invalid value for 'components', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['components']) && (mb_strlen($this->container['components']) < 0)) {
                $invalidProperties[] = "invalid value for 'components', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['freeSize']) && ($this->container['freeSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'freeSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['freeSize']) && ($this->container['freeSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'freeSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
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
    * Gets components
    *  Pv信息
    *
    * @return string|null
    */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
    * Sets components
    *
    * @param string|null $components Pv信息
    *
    * @return $this
    */
    public function setComponents($components)
    {
        $this->container['components'] = $components;
        return $this;
    }

    /**
    * Gets freeSize
    *  剩余空间
    *
    * @return int|null
    */
    public function getFreeSize()
    {
        return $this->container['freeSize'];
    }

    /**
    * Sets freeSize
    *
    * @param int|null $freeSize 剩余空间
    *
    * @return $this
    */
    public function setFreeSize($freeSize)
    {
        $this->container['freeSize'] = $freeSize;
        return $this;
    }

    /**
    * Gets logicalVolumes
    *  lv信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\LogicalVolumes[]|null
    */
    public function getLogicalVolumes()
    {
        return $this->container['logicalVolumes'];
    }

    /**
    * Sets logicalVolumes
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\LogicalVolumes[]|null $logicalVolumes lv信息
    *
    * @return $this
    */
    public function setLogicalVolumes($logicalVolumes)
    {
        $this->container['logicalVolumes'] = $logicalVolumes;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets size
    *  大小
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
    * @param int|null $size 大小
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

