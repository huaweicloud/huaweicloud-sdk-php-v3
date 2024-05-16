<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HtapStorageTypeStorageType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HtapStorageType_storage_type';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  存储介质名。
    * azStatus  可支持可用区信息。
    * minVolumeSize  最小可提供磁盘大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'azStatus' => 'map[string,string]',
            'minVolumeSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  存储介质名。
    * azStatus  可支持可用区信息。
    * minVolumeSize  最小可提供磁盘大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'azStatus' => null,
        'minVolumeSize' => 'int32'
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
    * name  存储介质名。
    * azStatus  可支持可用区信息。
    * minVolumeSize  最小可提供磁盘大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'azStatus' => 'az_status',
            'minVolumeSize' => 'min_volume_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  存储介质名。
    * azStatus  可支持可用区信息。
    * minVolumeSize  最小可提供磁盘大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'azStatus' => 'setAzStatus',
            'minVolumeSize' => 'setMinVolumeSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  存储介质名。
    * azStatus  可支持可用区信息。
    * minVolumeSize  最小可提供磁盘大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'azStatus' => 'getAzStatus',
            'minVolumeSize' => 'getMinVolumeSize'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
        $this->container['minVolumeSize'] = isset($data['minVolumeSize']) ? $data['minVolumeSize'] : null;
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
    * Gets name
    *  存储介质名。
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
    * @param string|null $name 存储介质名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets azStatus
    *  可支持可用区信息。
    *
    * @return map[string,string]|null
    */
    public function getAzStatus()
    {
        return $this->container['azStatus'];
    }

    /**
    * Sets azStatus
    *
    * @param map[string,string]|null $azStatus 可支持可用区信息。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
        return $this;
    }

    /**
    * Gets minVolumeSize
    *  最小可提供磁盘大小。
    *
    * @return int|null
    */
    public function getMinVolumeSize()
    {
        return $this->container['minVolumeSize'];
    }

    /**
    * Sets minVolumeSize
    *
    * @param int|null $minVolumeSize 最小可提供磁盘大小。
    *
    * @return $this
    */
    public function setMinVolumeSize($minVolumeSize)
    {
        $this->container['minVolumeSize'] = $minVolumeSize;
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

