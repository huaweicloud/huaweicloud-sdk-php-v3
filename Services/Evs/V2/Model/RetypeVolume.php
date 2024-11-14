<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetypeVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetypeVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newType  变更至指定的云硬盘类型
    * iops  云硬盘iops大小。
    * throughput  云硬盘的吞吐量大小。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newType' => 'string',
            'iops' => 'int',
            'throughput' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newType  变更至指定的云硬盘类型
    * iops  云硬盘iops大小。
    * throughput  云硬盘的吞吐量大小。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newType' => null,
        'iops' => 'int32',
        'throughput' => 'int32'
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
    * newType  变更至指定的云硬盘类型
    * iops  云硬盘iops大小。
    * throughput  云硬盘的吞吐量大小。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newType' => 'new_type',
            'iops' => 'iops',
            'throughput' => 'throughput'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newType  变更至指定的云硬盘类型
    * iops  云硬盘iops大小。
    * throughput  云硬盘的吞吐量大小。
    *
    * @var string[]
    */
    protected static $setters = [
            'newType' => 'setNewType',
            'iops' => 'setIops',
            'throughput' => 'setThroughput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newType  变更至指定的云硬盘类型
    * iops  云硬盘iops大小。
    * throughput  云硬盘的吞吐量大小。
    *
    * @var string[]
    */
    protected static $getters = [
            'newType' => 'getNewType',
            'iops' => 'getIops',
            'throughput' => 'getThroughput'
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
        $this->container['newType'] = isset($data['newType']) ? $data['newType'] : null;
        $this->container['iops'] = isset($data['iops']) ? $data['iops'] : null;
        $this->container['throughput'] = isset($data['throughput']) ? $data['throughput'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['newType'] === null) {
            $invalidProperties[] = "'newType' can't be null";
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
    * Gets newType
    *  变更至指定的云硬盘类型
    *
    * @return string
    */
    public function getNewType()
    {
        return $this->container['newType'];
    }

    /**
    * Sets newType
    *
    * @param string $newType 变更至指定的云硬盘类型
    *
    * @return $this
    */
    public function setNewType($newType)
    {
        $this->container['newType'] = $newType;
        return $this;
    }

    /**
    * Gets iops
    *  云硬盘iops大小。
    *
    * @return int|null
    */
    public function getIops()
    {
        return $this->container['iops'];
    }

    /**
    * Sets iops
    *
    * @param int|null $iops 云硬盘iops大小。
    *
    * @return $this
    */
    public function setIops($iops)
    {
        $this->container['iops'] = $iops;
        return $this;
    }

    /**
    * Gets throughput
    *  云硬盘的吞吐量大小。
    *
    * @return int|null
    */
    public function getThroughput()
    {
        return $this->container['throughput'];
    }

    /**
    * Sets throughput
    *
    * @param int|null $throughput 云硬盘的吞吐量大小。
    *
    * @return $this
    */
    public function setThroughput($throughput)
    {
        $this->container['throughput'] = $throughput;
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

