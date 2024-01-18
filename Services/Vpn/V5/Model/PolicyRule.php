<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleIndex  规则ID
    * source  源地址网段
    * destination  目的地址网段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleIndex' => 'int',
            'source' => 'string',
            'destination' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleIndex  规则ID
    * source  源地址网段
    * destination  目的地址网段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleIndex' => null,
        'source' => null,
        'destination' => null
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
    * ruleIndex  规则ID
    * source  源地址网段
    * destination  目的地址网段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleIndex' => 'rule_index',
            'source' => 'source',
            'destination' => 'destination'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleIndex  规则ID
    * source  源地址网段
    * destination  目的地址网段
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleIndex' => 'setRuleIndex',
            'source' => 'setSource',
            'destination' => 'setDestination'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleIndex  规则ID
    * source  源地址网段
    * destination  目的地址网段
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleIndex' => 'getRuleIndex',
            'source' => 'getSource',
            'destination' => 'getDestination'
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
        $this->container['ruleIndex'] = isset($data['ruleIndex']) ? $data['ruleIndex'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
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
    * Gets ruleIndex
    *  规则ID
    *
    * @return int|null
    */
    public function getRuleIndex()
    {
        return $this->container['ruleIndex'];
    }

    /**
    * Sets ruleIndex
    *
    * @param int|null $ruleIndex 规则ID
    *
    * @return $this
    */
    public function setRuleIndex($ruleIndex)
    {
        $this->container['ruleIndex'] = $ruleIndex;
        return $this;
    }

    /**
    * Gets source
    *  源地址网段
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 源地址网段
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets destination
    *  目的地址网段
    *
    * @return string[]|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string[]|null $destination 目的地址网段
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
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

