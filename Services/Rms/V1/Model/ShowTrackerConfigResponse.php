<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTrackerConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTrackerConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channel  channel
    * selector  selector
    * agencyName  IAM委托名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channel' => '\HuaweiCloud\SDK\Rms\V1\Model\ChannelConfigBody',
            'selector' => '\HuaweiCloud\SDK\Rms\V1\Model\SelectorConfigBody',
            'agencyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channel  channel
    * selector  selector
    * agencyName  IAM委托名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channel' => null,
        'selector' => null,
        'agencyName' => null
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
    * channel  channel
    * selector  selector
    * agencyName  IAM委托名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channel' => 'channel',
            'selector' => 'selector',
            'agencyName' => 'agency_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channel  channel
    * selector  selector
    * agencyName  IAM委托名称
    *
    * @var string[]
    */
    protected static $setters = [
            'channel' => 'setChannel',
            'selector' => 'setSelector',
            'agencyName' => 'setAgencyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channel  channel
    * selector  selector
    * agencyName  IAM委托名称
    *
    * @var string[]
    */
    protected static $getters = [
            'channel' => 'getChannel',
            'selector' => 'getSelector',
            'agencyName' => 'getAgencyName'
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
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
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
    * Gets channel
    *  channel
    *
    * @return \HuaweiCloud\SDK\Rms\V1\Model\ChannelConfigBody|null
    */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
    * Sets channel
    *
    * @param \HuaweiCloud\SDK\Rms\V1\Model\ChannelConfigBody|null $channel channel
    *
    * @return $this
    */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;
        return $this;
    }

    /**
    * Gets selector
    *  selector
    *
    * @return \HuaweiCloud\SDK\Rms\V1\Model\SelectorConfigBody|null
    */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
    * Sets selector
    *
    * @param \HuaweiCloud\SDK\Rms\V1\Model\SelectorConfigBody|null $selector selector
    *
    * @return $this
    */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;
        return $this;
    }

    /**
    * Gets agencyName
    *  IAM委托名称
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName IAM委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
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

