<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WafPolicyOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WafPolicyOptions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cc  是否开启CC（频率控制）
    * custom  是否开启精准访问防护
    * geoip  是否开启区域封禁防护
    * whiteblackip  是否开启黑白名单防护
    * modulexEnabled  是否开启智能CC防护
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cc' => 'bool',
            'custom' => 'bool',
            'geoip' => 'bool',
            'whiteblackip' => 'bool',
            'modulexEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cc  是否开启CC（频率控制）
    * custom  是否开启精准访问防护
    * geoip  是否开启区域封禁防护
    * whiteblackip  是否开启黑白名单防护
    * modulexEnabled  是否开启智能CC防护
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cc' => null,
        'custom' => null,
        'geoip' => null,
        'whiteblackip' => null,
        'modulexEnabled' => null
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
    * cc  是否开启CC（频率控制）
    * custom  是否开启精准访问防护
    * geoip  是否开启区域封禁防护
    * whiteblackip  是否开启黑白名单防护
    * modulexEnabled  是否开启智能CC防护
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cc' => 'cc',
            'custom' => 'custom',
            'geoip' => 'geoip',
            'whiteblackip' => 'whiteblackip',
            'modulexEnabled' => 'modulex_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cc  是否开启CC（频率控制）
    * custom  是否开启精准访问防护
    * geoip  是否开启区域封禁防护
    * whiteblackip  是否开启黑白名单防护
    * modulexEnabled  是否开启智能CC防护
    *
    * @var string[]
    */
    protected static $setters = [
            'cc' => 'setCc',
            'custom' => 'setCustom',
            'geoip' => 'setGeoip',
            'whiteblackip' => 'setWhiteblackip',
            'modulexEnabled' => 'setModulexEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cc  是否开启CC（频率控制）
    * custom  是否开启精准访问防护
    * geoip  是否开启区域封禁防护
    * whiteblackip  是否开启黑白名单防护
    * modulexEnabled  是否开启智能CC防护
    *
    * @var string[]
    */
    protected static $getters = [
            'cc' => 'getCc',
            'custom' => 'getCustom',
            'geoip' => 'getGeoip',
            'whiteblackip' => 'getWhiteblackip',
            'modulexEnabled' => 'getModulexEnabled'
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
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['geoip'] = isset($data['geoip']) ? $data['geoip'] : null;
        $this->container['whiteblackip'] = isset($data['whiteblackip']) ? $data['whiteblackip'] : null;
        $this->container['modulexEnabled'] = isset($data['modulexEnabled']) ? $data['modulexEnabled'] : null;
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
    * Gets cc
    *  是否开启CC（频率控制）
    *
    * @return bool|null
    */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
    * Sets cc
    *
    * @param bool|null $cc 是否开启CC（频率控制）
    *
    * @return $this
    */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;
        return $this;
    }

    /**
    * Gets custom
    *  是否开启精准访问防护
    *
    * @return bool|null
    */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
    * Sets custom
    *
    * @param bool|null $custom 是否开启精准访问防护
    *
    * @return $this
    */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;
        return $this;
    }

    /**
    * Gets geoip
    *  是否开启区域封禁防护
    *
    * @return bool|null
    */
    public function getGeoip()
    {
        return $this->container['geoip'];
    }

    /**
    * Sets geoip
    *
    * @param bool|null $geoip 是否开启区域封禁防护
    *
    * @return $this
    */
    public function setGeoip($geoip)
    {
        $this->container['geoip'] = $geoip;
        return $this;
    }

    /**
    * Gets whiteblackip
    *  是否开启黑白名单防护
    *
    * @return bool|null
    */
    public function getWhiteblackip()
    {
        return $this->container['whiteblackip'];
    }

    /**
    * Sets whiteblackip
    *
    * @param bool|null $whiteblackip 是否开启黑白名单防护
    *
    * @return $this
    */
    public function setWhiteblackip($whiteblackip)
    {
        $this->container['whiteblackip'] = $whiteblackip;
        return $this;
    }

    /**
    * Gets modulexEnabled
    *  是否开启智能CC防护
    *
    * @return bool|null
    */
    public function getModulexEnabled()
    {
        return $this->container['modulexEnabled'];
    }

    /**
    * Sets modulexEnabled
    *
    * @param bool|null $modulexEnabled 是否开启智能CC防护
    *
    * @return $this
    */
    public function setModulexEnabled($modulexEnabled)
    {
        $this->container['modulexEnabled'] = $modulexEnabled;
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

