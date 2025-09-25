<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BotMBehaviorDetectionRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BotMBehaviorDetectionRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rule  rule
    * defenseStrategy  defenseStrategy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rule' => '\HuaweiCloud\SDK\Waf\V1\Model\BotMRule',
            'defenseStrategy' => '\HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseStrategy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rule  rule
    * defenseStrategy  defenseStrategy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rule' => null,
        'defenseStrategy' => null
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
    * rule  rule
    * defenseStrategy  defenseStrategy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rule' => 'rule',
            'defenseStrategy' => 'defense_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rule  rule
    * defenseStrategy  defenseStrategy
    *
    * @var string[]
    */
    protected static $setters = [
            'rule' => 'setRule',
            'defenseStrategy' => 'setDefenseStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rule  rule
    * defenseStrategy  defenseStrategy
    *
    * @var string[]
    */
    protected static $getters = [
            'rule' => 'getRule',
            'defenseStrategy' => 'getDefenseStrategy'
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
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['defenseStrategy'] = isset($data['defenseStrategy']) ? $data['defenseStrategy'] : null;
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
    * Gets rule
    *  rule
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotMRule|null
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotMRule|null $rule rule
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
        return $this;
    }

    /**
    * Gets defenseStrategy
    *  defenseStrategy
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseStrategy|null
    */
    public function getDefenseStrategy()
    {
        return $this->container['defenseStrategy'];
    }

    /**
    * Sets defenseStrategy
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotMDefenseStrategy|null $defenseStrategy defenseStrategy
    *
    * @return $this
    */
    public function setDefenseStrategy($defenseStrategy)
    {
        $this->container['defenseStrategy'] = $defenseStrategy;
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

