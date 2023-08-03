<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PersistentVolumeClaimStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PersistentVolumeClaimStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessModes  显示volume实际具有的访问模式。
    * capacity  底层卷的实际资源
    * phase  PersistentVolumeClaim当前所处的状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessModes' => 'string[]',
            'capacity' => 'string',
            'phase' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessModes  显示volume实际具有的访问模式。
    * capacity  底层卷的实际资源
    * phase  PersistentVolumeClaim当前所处的状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessModes' => null,
        'capacity' => null,
        'phase' => null
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
    * accessModes  显示volume实际具有的访问模式。
    * capacity  底层卷的实际资源
    * phase  PersistentVolumeClaim当前所处的状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessModes' => 'accessModes',
            'capacity' => 'capacity',
            'phase' => 'phase'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessModes  显示volume实际具有的访问模式。
    * capacity  底层卷的实际资源
    * phase  PersistentVolumeClaim当前所处的状态
    *
    * @var string[]
    */
    protected static $setters = [
            'accessModes' => 'setAccessModes',
            'capacity' => 'setCapacity',
            'phase' => 'setPhase'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessModes  显示volume实际具有的访问模式。
    * capacity  底层卷的实际资源
    * phase  PersistentVolumeClaim当前所处的状态
    *
    * @var string[]
    */
    protected static $getters = [
            'accessModes' => 'getAccessModes',
            'capacity' => 'getCapacity',
            'phase' => 'getPhase'
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
        $this->container['accessModes'] = isset($data['accessModes']) ? $data['accessModes'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
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
    * Gets accessModes
    *  显示volume实际具有的访问模式。
    *
    * @return string[]|null
    */
    public function getAccessModes()
    {
        return $this->container['accessModes'];
    }

    /**
    * Sets accessModes
    *
    * @param string[]|null $accessModes 显示volume实际具有的访问模式。
    *
    * @return $this
    */
    public function setAccessModes($accessModes)
    {
        $this->container['accessModes'] = $accessModes;
        return $this;
    }

    /**
    * Gets capacity
    *  底层卷的实际资源
    *
    * @return string|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param string|null $capacity 底层卷的实际资源
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets phase
    *  PersistentVolumeClaim当前所处的状态
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase PersistentVolumeClaim当前所处的状态
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
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

