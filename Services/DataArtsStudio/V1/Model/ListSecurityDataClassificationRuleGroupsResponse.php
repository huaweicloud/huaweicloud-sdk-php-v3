<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityDataClassificationRuleGroupsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityDataClassificationRuleGroupsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleGroups  规则组列表
    * total  规则组总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleGroups' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationGroupQueryDTO[]',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleGroups  规则组列表
    * total  规则组总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleGroups' => null,
        'total' => 'int64'
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
    * ruleGroups  规则组列表
    * total  规则组总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleGroups' => 'rule_groups',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleGroups  规则组列表
    * total  规则组总数
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleGroups' => 'setRuleGroups',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleGroups  规则组列表
    * total  规则组总数
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleGroups' => 'getRuleGroups',
            'total' => 'getTotal'
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
        $this->container['ruleGroups'] = isset($data['ruleGroups']) ? $data['ruleGroups'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['total']) && ($this->container['total'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
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
    * Gets ruleGroups
    *  规则组列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationGroupQueryDTO[]|null
    */
    public function getRuleGroups()
    {
        return $this->container['ruleGroups'];
    }

    /**
    * Sets ruleGroups
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationGroupQueryDTO[]|null $ruleGroups 规则组列表
    *
    * @return $this
    */
    public function setRuleGroups($ruleGroups)
    {
        $this->container['ruleGroups'] = $ruleGroups;
        return $this;
    }

    /**
    * Gets total
    *  规则组总数
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
    * @param int|null $total 规则组总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

