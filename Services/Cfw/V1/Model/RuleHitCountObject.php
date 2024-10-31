<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleHitCountObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleHitCountObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  规则id
    * ruleHitCount  规则击中次数，当acl规则被触发时，对应规则id的击中次数会添加一次。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'ruleHitCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  规则id
    * ruleHitCount  规则击中次数，当acl规则被触发时，对应规则id的击中次数会添加一次。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'ruleHitCount' => 'int32'
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
    * ruleId  规则id
    * ruleHitCount  规则击中次数，当acl规则被触发时，对应规则id的击中次数会添加一次。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'ruleHitCount' => 'rule_hit_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  规则id
    * ruleHitCount  规则击中次数，当acl规则被触发时，对应规则id的击中次数会添加一次。
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'ruleHitCount' => 'setRuleHitCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  规则id
    * ruleHitCount  规则击中次数，当acl规则被触发时，对应规则id的击中次数会添加一次。
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'ruleHitCount' => 'getRuleHitCount'
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleHitCount'] = isset($data['ruleHitCount']) ? $data['ruleHitCount'] : null;
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
    * Gets ruleId
    *  规则id
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 规则id
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets ruleHitCount
    *  规则击中次数，当acl规则被触发时，对应规则id的击中次数会添加一次。
    *
    * @return int|null
    */
    public function getRuleHitCount()
    {
        return $this->container['ruleHitCount'];
    }

    /**
    * Sets ruleHitCount
    *
    * @param int|null $ruleHitCount 规则击中次数，当acl规则被触发时，对应规则id的击中次数会添加一次。
    *
    * @return $this
    */
    public function setRuleHitCount($ruleHitCount)
    {
        $this->container['ruleHitCount'] = $ruleHitCount;
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

