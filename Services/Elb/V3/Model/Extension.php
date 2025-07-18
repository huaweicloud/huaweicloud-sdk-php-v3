<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Extension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Extension';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * epId  ep id
    * epServiceId  ep service id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'epId' => 'string',
            'epServiceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * epId  ep id
    * epServiceId  ep service id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'epId' => null,
        'epServiceId' => null
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
    * epId  ep id
    * epServiceId  ep service id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'epId' => 'ep_id',
            'epServiceId' => 'ep_service_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * epId  ep id
    * epServiceId  ep service id
    *
    * @var string[]
    */
    protected static $setters = [
            'epId' => 'setEpId',
            'epServiceId' => 'setEpServiceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * epId  ep id
    * epServiceId  ep service id
    *
    * @var string[]
    */
    protected static $getters = [
            'epId' => 'getEpId',
            'epServiceId' => 'getEpServiceId'
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
        $this->container['epId'] = isset($data['epId']) ? $data['epId'] : null;
        $this->container['epServiceId'] = isset($data['epServiceId']) ? $data['epServiceId'] : null;
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
    * Gets epId
    *  ep id
    *
    * @return string|null
    */
    public function getEpId()
    {
        return $this->container['epId'];
    }

    /**
    * Sets epId
    *
    * @param string|null $epId ep id
    *
    * @return $this
    */
    public function setEpId($epId)
    {
        $this->container['epId'] = $epId;
        return $this;
    }

    /**
    * Gets epServiceId
    *  ep service id
    *
    * @return string|null
    */
    public function getEpServiceId()
    {
        return $this->container['epServiceId'];
    }

    /**
    * Sets epServiceId
    *
    * @param string|null $epServiceId ep service id
    *
    * @return $this
    */
    public function setEpServiceId($epServiceId)
    {
        $this->container['epServiceId'] = $epServiceId;
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

