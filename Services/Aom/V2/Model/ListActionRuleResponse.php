<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListActionRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListActionRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionRules  告警行动规则列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionRules' => '\HuaweiCloud\SDK\Aom\V2\Model\ActionRule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionRules  告警行动规则列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionRules' => null
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
    * actionRules  告警行动规则列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionRules' => 'action_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionRules  告警行动规则列表
    *
    * @var string[]
    */
    protected static $setters = [
            'actionRules' => 'setActionRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionRules  告警行动规则列表
    *
    * @var string[]
    */
    protected static $getters = [
            'actionRules' => 'getActionRules'
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
        $this->container['actionRules'] = isset($data['actionRules']) ? $data['actionRules'] : null;
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
    * Gets actionRules
    *  告警行动规则列表
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\ActionRule[]|null
    */
    public function getActionRules()
    {
        return $this->container['actionRules'];
    }

    /**
    * Sets actionRules
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\ActionRule[]|null $actionRules 告警行动规则列表
    *
    * @return $this
    */
    public function setActionRules($actionRules)
    {
        $this->container['actionRules'] = $actionRules;
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

