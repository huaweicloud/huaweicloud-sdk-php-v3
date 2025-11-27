<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSpecialConfigurationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSpecialConfigurationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  总条数。
    * specialConfigurations  域名特殊配置信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'specialConfigurations' => '\HuaweiCloud\SDK\Cdn\V2\Model\SpeicialConfiguration[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  总条数。
    * specialConfigurations  域名特殊配置信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => null,
        'specialConfigurations' => null
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
    * total  总条数。
    * specialConfigurations  域名特殊配置信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'specialConfigurations' => 'specialConfigurations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  总条数。
    * specialConfigurations  域名特殊配置信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'specialConfigurations' => 'setSpecialConfigurations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  总条数。
    * specialConfigurations  域名特殊配置信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'specialConfigurations' => 'getSpecialConfigurations'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['specialConfigurations'] = isset($data['specialConfigurations']) ? $data['specialConfigurations'] : null;
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
    * Gets total
    *  总条数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总条数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets specialConfigurations
    *  域名特殊配置信息。
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\SpeicialConfiguration[]|null
    */
    public function getSpecialConfigurations()
    {
        return $this->container['specialConfigurations'];
    }

    /**
    * Sets specialConfigurations
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\SpeicialConfiguration[]|null $specialConfigurations 域名特殊配置信息。
    *
    * @return $this
    */
    public function setSpecialConfigurations($specialConfigurations)
    {
        $this->container['specialConfigurations'] = $specialConfigurations;
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

