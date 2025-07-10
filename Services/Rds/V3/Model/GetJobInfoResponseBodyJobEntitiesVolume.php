<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetJobInfoResponseBodyJobEntitiesVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetJobInfoResponseBody_job_entities_volume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  磁盘类型。
    * originalSize  实例原本的磁盘大小（单位：GB）。
    * targetSize  任务的目标磁盘大小（单位：GB）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'originalSize' => 'string',
            'targetSize' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  磁盘类型。
    * originalSize  实例原本的磁盘大小（单位：GB）。
    * targetSize  任务的目标磁盘大小（单位：GB）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'originalSize' => null,
        'targetSize' => null
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
    * type  磁盘类型。
    * originalSize  实例原本的磁盘大小（单位：GB）。
    * targetSize  任务的目标磁盘大小（单位：GB）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'originalSize' => 'original_size',
            'targetSize' => 'target_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  磁盘类型。
    * originalSize  实例原本的磁盘大小（单位：GB）。
    * targetSize  任务的目标磁盘大小（单位：GB）。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'originalSize' => 'setOriginalSize',
            'targetSize' => 'setTargetSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  磁盘类型。
    * originalSize  实例原本的磁盘大小（单位：GB）。
    * targetSize  任务的目标磁盘大小（单位：GB）。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'originalSize' => 'getOriginalSize',
            'targetSize' => 'getTargetSize'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['originalSize'] = isset($data['originalSize']) ? $data['originalSize'] : null;
        $this->container['targetSize'] = isset($data['targetSize']) ? $data['targetSize'] : null;
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
    * Gets type
    *  磁盘类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 磁盘类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets originalSize
    *  实例原本的磁盘大小（单位：GB）。
    *
    * @return string|null
    */
    public function getOriginalSize()
    {
        return $this->container['originalSize'];
    }

    /**
    * Sets originalSize
    *
    * @param string|null $originalSize 实例原本的磁盘大小（单位：GB）。
    *
    * @return $this
    */
    public function setOriginalSize($originalSize)
    {
        $this->container['originalSize'] = $originalSize;
        return $this;
    }

    /**
    * Gets targetSize
    *  任务的目标磁盘大小（单位：GB）。
    *
    * @return string|null
    */
    public function getTargetSize()
    {
        return $this->container['targetSize'];
    }

    /**
    * Sets targetSize
    *
    * @param string|null $targetSize 任务的目标磁盘大小（单位：GB）。
    *
    * @return $this
    */
    public function setTargetSize($targetSize)
    {
        $this->container['targetSize'] = $targetSize;
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

