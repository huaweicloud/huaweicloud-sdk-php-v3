<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLogConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLogConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  是否开启日志
    * ltsIdInfo  ltsIdInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'ltsIdInfo' => '\HuaweiCloud\SDK\AntiDDoS\V1\Model\LtsConfigRequestAndResponseLtsIdInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  是否开启日志
    * ltsIdInfo  ltsIdInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'ltsIdInfo' => null
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
    * enabled  是否开启日志
    * ltsIdInfo  ltsIdInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'ltsIdInfo' => 'lts_id_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  是否开启日志
    * ltsIdInfo  ltsIdInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'ltsIdInfo' => 'setLtsIdInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  是否开启日志
    * ltsIdInfo  ltsIdInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'ltsIdInfo' => 'getLtsIdInfo'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['ltsIdInfo'] = isset($data['ltsIdInfo']) ? $data['ltsIdInfo'] : null;
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
    * Gets enabled
    *  是否开启日志
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否开启日志
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets ltsIdInfo
    *  ltsIdInfo
    *
    * @return \HuaweiCloud\SDK\AntiDDoS\V1\Model\LtsConfigRequestAndResponseLtsIdInfo|null
    */
    public function getLtsIdInfo()
    {
        return $this->container['ltsIdInfo'];
    }

    /**
    * Sets ltsIdInfo
    *
    * @param \HuaweiCloud\SDK\AntiDDoS\V1\Model\LtsConfigRequestAndResponseLtsIdInfo|null $ltsIdInfo ltsIdInfo
    *
    * @return $this
    */
    public function setLtsIdInfo($ltsIdInfo)
    {
        $this->container['ltsIdInfo'] = $ltsIdInfo;
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

