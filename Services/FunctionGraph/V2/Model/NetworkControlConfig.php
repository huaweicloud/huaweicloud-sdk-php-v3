<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetworkControlConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetworkControlConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disablePublicNetwork  禁止公网访问开关。
    * triggerAccessVpcs  指定触发函数vpc配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disablePublicNetwork' => 'bool',
            'triggerAccessVpcs' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\VpcConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disablePublicNetwork  禁止公网访问开关。
    * triggerAccessVpcs  指定触发函数vpc配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disablePublicNetwork' => null,
        'triggerAccessVpcs' => null
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
    * disablePublicNetwork  禁止公网访问开关。
    * triggerAccessVpcs  指定触发函数vpc配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disablePublicNetwork' => 'disable_public_network',
            'triggerAccessVpcs' => 'trigger_access_vpcs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disablePublicNetwork  禁止公网访问开关。
    * triggerAccessVpcs  指定触发函数vpc配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'disablePublicNetwork' => 'setDisablePublicNetwork',
            'triggerAccessVpcs' => 'setTriggerAccessVpcs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disablePublicNetwork  禁止公网访问开关。
    * triggerAccessVpcs  指定触发函数vpc配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'disablePublicNetwork' => 'getDisablePublicNetwork',
            'triggerAccessVpcs' => 'getTriggerAccessVpcs'
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
        $this->container['disablePublicNetwork'] = isset($data['disablePublicNetwork']) ? $data['disablePublicNetwork'] : null;
        $this->container['triggerAccessVpcs'] = isset($data['triggerAccessVpcs']) ? $data['triggerAccessVpcs'] : null;
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
    * Gets disablePublicNetwork
    *  禁止公网访问开关。
    *
    * @return bool|null
    */
    public function getDisablePublicNetwork()
    {
        return $this->container['disablePublicNetwork'];
    }

    /**
    * Sets disablePublicNetwork
    *
    * @param bool|null $disablePublicNetwork 禁止公网访问开关。
    *
    * @return $this
    */
    public function setDisablePublicNetwork($disablePublicNetwork)
    {
        $this->container['disablePublicNetwork'] = $disablePublicNetwork;
        return $this;
    }

    /**
    * Gets triggerAccessVpcs
    *  指定触发函数vpc配置。
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\VpcConfig[]|null
    */
    public function getTriggerAccessVpcs()
    {
        return $this->container['triggerAccessVpcs'];
    }

    /**
    * Sets triggerAccessVpcs
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\VpcConfig[]|null $triggerAccessVpcs 指定触发函数vpc配置。
    *
    * @return $this
    */
    public function setTriggerAccessVpcs($triggerAccessVpcs)
    {
        $this->container['triggerAccessVpcs'] = $triggerAccessVpcs;
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

