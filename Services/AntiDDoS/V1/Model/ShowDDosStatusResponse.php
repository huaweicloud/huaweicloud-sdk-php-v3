<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDDosStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDDosStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  防护状态，可选范围：   - normal：表示正常   - configging：表示设置中   - notConfig：表示未设置   - packetcleaning：表示清洗   - packetdropping：表示黑洞
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  防护状态，可选范围：   - normal：表示正常   - configging：表示设置中   - notConfig：表示未设置   - packetcleaning：表示清洗   - packetdropping：表示黑洞
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null
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
    * status  防护状态，可选范围：   - normal：表示正常   - configging：表示设置中   - notConfig：表示未设置   - packetcleaning：表示清洗   - packetdropping：表示黑洞
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  防护状态，可选范围：   - normal：表示正常   - configging：表示设置中   - notConfig：表示未设置   - packetcleaning：表示清洗   - packetdropping：表示黑洞
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  防护状态，可选范围：   - normal：表示正常   - configging：表示设置中   - notConfig：表示未设置   - packetcleaning：表示清洗   - packetdropping：表示黑洞
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus'
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
    const STATUS_NORMAL = 'normal';
    const STATUS_CONFIGGING = 'configging';
    const STATUS_NOT_CONFIG = 'notConfig';
    const STATUS_PACKETCLEANING = 'packetcleaning';
    const STATUS_PACKETDROPPING = 'packetdropping';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NORMAL,
            self::STATUS_CONFIGGING,
            self::STATUS_NOT_CONFIG,
            self::STATUS_PACKETCLEANING,
            self::STATUS_PACKETDROPPING,
        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets status
    *  防护状态，可选范围：   - normal：表示正常   - configging：表示设置中   - notConfig：表示未设置   - packetcleaning：表示清洗   - packetdropping：表示黑洞
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 防护状态，可选范围：   - normal：表示正常   - configging：表示设置中   - notConfig：表示未设置   - packetcleaning：表示清洗   - packetdropping：表示黑洞
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

