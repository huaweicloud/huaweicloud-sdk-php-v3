<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeVulWhiteListRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeVulWhiteListRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleType  **参数解释**： 白名单规则类型 **约束限制**： 不涉及 **取值范围**： - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**： 不涉及
    * hostIds  **参数解释**： 白名单应用的主机ID列表，rule_type为specific_host时必填 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 白名单的描述信息 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleType' => 'string',
            'hostIds' => 'string[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleType  **参数解释**： 白名单规则类型 **约束限制**： 不涉及 **取值范围**： - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**： 不涉及
    * hostIds  **参数解释**： 白名单应用的主机ID列表，rule_type为specific_host时必填 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 白名单的描述信息 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleType' => null,
        'hostIds' => null,
        'description' => null
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
    * ruleType  **参数解释**： 白名单规则类型 **约束限制**： 不涉及 **取值范围**： - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**： 不涉及
    * hostIds  **参数解释**： 白名单应用的主机ID列表，rule_type为specific_host时必填 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 白名单的描述信息 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleType' => 'rule_type',
            'hostIds' => 'host_ids',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleType  **参数解释**： 白名单规则类型 **约束限制**： 不涉及 **取值范围**： - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**： 不涉及
    * hostIds  **参数解释**： 白名单应用的主机ID列表，rule_type为specific_host时必填 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 白名单的描述信息 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleType' => 'setRuleType',
            'hostIds' => 'setHostIds',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleType  **参数解释**： 白名单规则类型 **约束限制**： 不涉及 **取值范围**： - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**： 不涉及
    * hostIds  **参数解释**： 白名单应用的主机ID列表，rule_type为specific_host时必填 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * description  **参数解释**： 白名单的描述信息 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleType' => 'getRuleType',
            'hostIds' => 'getHostIds',
            'description' => 'getDescription'
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
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ruleType'] === null) {
            $invalidProperties[] = "'ruleType' can't be null";
        }
            if ((mb_strlen($this->container['ruleType']) > 32)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['ruleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets ruleType
    *  **参数解释**： 白名单规则类型 **约束限制**： 不涉及 **取值范围**： - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**： 不涉及
    *
    * @return string
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string $ruleType **参数解释**： 白名单规则类型 **约束限制**： 不涉及 **取值范围**： - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets hostIds
    *  **参数解释**： 白名单应用的主机ID列表，rule_type为specific_host时必填 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[]|null $hostIds **参数解释**： 白名单应用的主机ID列表，rule_type为specific_host时必填 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 白名单的描述信息 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 白名单的描述信息 **约束限制**： 不涉及 **取值范围**： 字符长度0-1024 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

