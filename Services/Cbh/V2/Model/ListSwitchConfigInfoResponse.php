<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSwitchConfigInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSwitchConfigInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchInfo  switchInfo
    * versionInfo  versionInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchInfo' => '\HuaweiCloud\SDK\Cbh\V2\Model\SwitchInfo',
            'versionInfo' => '\HuaweiCloud\SDK\Cbh\V2\Model\VersionInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchInfo  switchInfo
    * versionInfo  versionInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchInfo' => null,
        'versionInfo' => null
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
    * switchInfo  switchInfo
    * versionInfo  versionInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchInfo' => 'switch_info',
            'versionInfo' => 'version_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchInfo  switchInfo
    * versionInfo  versionInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'switchInfo' => 'setSwitchInfo',
            'versionInfo' => 'setVersionInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchInfo  switchInfo
    * versionInfo  versionInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'switchInfo' => 'getSwitchInfo',
            'versionInfo' => 'getVersionInfo'
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
        $this->container['switchInfo'] = isset($data['switchInfo']) ? $data['switchInfo'] : null;
        $this->container['versionInfo'] = isset($data['versionInfo']) ? $data['versionInfo'] : null;
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
    * Gets switchInfo
    *  switchInfo
    *
    * @return \HuaweiCloud\SDK\Cbh\V2\Model\SwitchInfo|null
    */
    public function getSwitchInfo()
    {
        return $this->container['switchInfo'];
    }

    /**
    * Sets switchInfo
    *
    * @param \HuaweiCloud\SDK\Cbh\V2\Model\SwitchInfo|null $switchInfo switchInfo
    *
    * @return $this
    */
    public function setSwitchInfo($switchInfo)
    {
        $this->container['switchInfo'] = $switchInfo;
        return $this;
    }

    /**
    * Gets versionInfo
    *  versionInfo
    *
    * @return \HuaweiCloud\SDK\Cbh\V2\Model\VersionInfo|null
    */
    public function getVersionInfo()
    {
        return $this->container['versionInfo'];
    }

    /**
    * Sets versionInfo
    *
    * @param \HuaweiCloud\SDK\Cbh\V2\Model\VersionInfo|null $versionInfo versionInfo
    *
    * @return $this
    */
    public function setVersionInfo($versionInfo)
    {
        $this->container['versionInfo'] = $versionInfo;
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

