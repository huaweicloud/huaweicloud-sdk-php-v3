<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHarmonySoftBusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHarmonySoftBusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * harmonySoftBuses  设备组信息列表。
    * page  page
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'harmonySoftBuses' => '\HuaweiCloud\SDK\IoTDA\V5\Model\HarmonySoftBusResponseDTO[]',
            'page' => '\HuaweiCloud\SDK\IoTDA\V5\Model\Page'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * harmonySoftBuses  设备组信息列表。
    * page  page
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'harmonySoftBuses' => null,
        'page' => null
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
    * harmonySoftBuses  设备组信息列表。
    * page  page
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'harmonySoftBuses' => 'harmony_soft_buses',
            'page' => 'page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * harmonySoftBuses  设备组信息列表。
    * page  page
    *
    * @var string[]
    */
    protected static $setters = [
            'harmonySoftBuses' => 'setHarmonySoftBuses',
            'page' => 'setPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * harmonySoftBuses  设备组信息列表。
    * page  page
    *
    * @var string[]
    */
    protected static $getters = [
            'harmonySoftBuses' => 'getHarmonySoftBuses',
            'page' => 'getPage'
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
        $this->container['harmonySoftBuses'] = isset($data['harmonySoftBuses']) ? $data['harmonySoftBuses'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
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
    * Gets harmonySoftBuses
    *  设备组信息列表。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\HarmonySoftBusResponseDTO[]|null
    */
    public function getHarmonySoftBuses()
    {
        return $this->container['harmonySoftBuses'];
    }

    /**
    * Sets harmonySoftBuses
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\HarmonySoftBusResponseDTO[]|null $harmonySoftBuses 设备组信息列表。
    *
    * @return $this
    */
    public function setHarmonySoftBuses($harmonySoftBuses)
    {
        $this->container['harmonySoftBuses'] = $harmonySoftBuses;
        return $this;
    }

    /**
    * Gets page
    *  page
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\Page|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\Page|null $page page
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
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

