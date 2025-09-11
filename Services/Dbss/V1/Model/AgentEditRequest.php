<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentEditRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentEditRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpuThreshold  CPU阈值,0-100之间
    * memThreshold  内存阈值，0-100之间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpuThreshold' => 'int',
            'memThreshold' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpuThreshold  CPU阈值,0-100之间
    * memThreshold  内存阈值，0-100之间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpuThreshold' => 'int32',
        'memThreshold' => 'int32'
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
    * cpuThreshold  CPU阈值,0-100之间
    * memThreshold  内存阈值，0-100之间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpuThreshold' => 'cpu_threshold',
            'memThreshold' => 'mem_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpuThreshold  CPU阈值,0-100之间
    * memThreshold  内存阈值，0-100之间
    *
    * @var string[]
    */
    protected static $setters = [
            'cpuThreshold' => 'setCpuThreshold',
            'memThreshold' => 'setMemThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpuThreshold  CPU阈值,0-100之间
    * memThreshold  内存阈值，0-100之间
    *
    * @var string[]
    */
    protected static $getters = [
            'cpuThreshold' => 'getCpuThreshold',
            'memThreshold' => 'getMemThreshold'
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
        $this->container['cpuThreshold'] = isset($data['cpuThreshold']) ? $data['cpuThreshold'] : null;
        $this->container['memThreshold'] = isset($data['memThreshold']) ? $data['memThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cpuThreshold'] === null) {
            $invalidProperties[] = "'cpuThreshold' can't be null";
        }
        if ($this->container['memThreshold'] === null) {
            $invalidProperties[] = "'memThreshold' can't be null";
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
    * Gets cpuThreshold
    *  CPU阈值,0-100之间
    *
    * @return int
    */
    public function getCpuThreshold()
    {
        return $this->container['cpuThreshold'];
    }

    /**
    * Sets cpuThreshold
    *
    * @param int $cpuThreshold CPU阈值,0-100之间
    *
    * @return $this
    */
    public function setCpuThreshold($cpuThreshold)
    {
        $this->container['cpuThreshold'] = $cpuThreshold;
        return $this;
    }

    /**
    * Gets memThreshold
    *  内存阈值，0-100之间
    *
    * @return int
    */
    public function getMemThreshold()
    {
        return $this->container['memThreshold'];
    }

    /**
    * Sets memThreshold
    *
    * @param int $memThreshold 内存阈值，0-100之间
    *
    * @return $this
    */
    public function setMemThreshold($memThreshold)
    {
        $this->container['memThreshold'] = $memThreshold;
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

