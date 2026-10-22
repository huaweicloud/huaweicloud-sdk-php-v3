<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateAiGuardRuleStatusRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateAiGuardRuleStatusRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleIds  规则ID列表
    * status  规则状态，可选：enable(启用), disable(禁用)，当disable时，只有rule_ids，而enable时至少有rule_ids或者temlate_ids
    * templateIds  系统规则的id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleIds' => 'string[]',
            'status' => 'string',
            'templateIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleIds  规则ID列表
    * status  规则状态，可选：enable(启用), disable(禁用)，当disable时，只有rule_ids，而enable时至少有rule_ids或者temlate_ids
    * templateIds  系统规则的id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleIds' => null,
        'status' => null,
        'templateIds' => null
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
    * ruleIds  规则ID列表
    * status  规则状态，可选：enable(启用), disable(禁用)，当disable时，只有rule_ids，而enable时至少有rule_ids或者temlate_ids
    * templateIds  系统规则的id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleIds' => 'rule_ids',
            'status' => 'status',
            'templateIds' => 'template_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleIds  规则ID列表
    * status  规则状态，可选：enable(启用), disable(禁用)，当disable时，只有rule_ids，而enable时至少有rule_ids或者temlate_ids
    * templateIds  系统规则的id
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleIds' => 'setRuleIds',
            'status' => 'setStatus',
            'templateIds' => 'setTemplateIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleIds  规则ID列表
    * status  规则状态，可选：enable(启用), disable(禁用)，当disable时，只有rule_ids，而enable时至少有rule_ids或者temlate_ids
    * templateIds  系统规则的id
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleIds' => 'getRuleIds',
            'status' => 'getStatus',
            'templateIds' => 'getTemplateIds'
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
    const STATUS_ENABLE = 'enable';
    const STATUS_DISABLE = 'disable';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLE,
            self::STATUS_DISABLE,
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
        $this->container['ruleIds'] = isset($data['ruleIds']) ? $data['ruleIds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['templateIds'] = isset($data['templateIds']) ? $data['templateIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
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
    * Gets ruleIds
    *  规则ID列表
    *
    * @return string[]|null
    */
    public function getRuleIds()
    {
        return $this->container['ruleIds'];
    }

    /**
    * Sets ruleIds
    *
    * @param string[]|null $ruleIds 规则ID列表
    *
    * @return $this
    */
    public function setRuleIds($ruleIds)
    {
        $this->container['ruleIds'] = $ruleIds;
        return $this;
    }

    /**
    * Gets status
    *  规则状态，可选：enable(启用), disable(禁用)，当disable时，只有rule_ids，而enable时至少有rule_ids或者temlate_ids
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 规则状态，可选：enable(启用), disable(禁用)，当disable时，只有rule_ids，而enable时至少有rule_ids或者temlate_ids
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets templateIds
    *  系统规则的id
    *
    * @return string[]|null
    */
    public function getTemplateIds()
    {
        return $this->container['templateIds'];
    }

    /**
    * Sets templateIds
    *
    * @param string[]|null $templateIds 系统规则的id
    *
    * @return $this
    */
    public function setTemplateIds($templateIds)
    {
        $this->container['templateIds'] = $templateIds;
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

