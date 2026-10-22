<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiAppsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiAppsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  **参数解释：** 最大返回条目数 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 10
    * offset  **参数解释：** 跳过的条目数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    * name  **参数解释：** 按应用名称过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * protectStatus  **参数解释：** 按防护状态过滤 **约束限制：** 不涉及 **取值范围：** 0(禁用), 1(启用) **默认取值：** 不涉及
    * policyId  **参数解释：** 按策略ID过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'name' => 'string',
            'protectStatus' => 'int',
            'policyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  **参数解释：** 最大返回条目数 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 10
    * offset  **参数解释：** 跳过的条目数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    * name  **参数解释：** 按应用名称过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * protectStatus  **参数解释：** 按防护状态过滤 **约束限制：** 不涉及 **取值范围：** 0(禁用), 1(启用) **默认取值：** 不涉及
    * policyId  **参数解释：** 按策略ID过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => null,
        'offset' => null,
        'name' => null,
        'protectStatus' => null,
        'policyId' => null
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
    * limit  **参数解释：** 最大返回条目数 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 10
    * offset  **参数解释：** 跳过的条目数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    * name  **参数解释：** 按应用名称过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * protectStatus  **参数解释：** 按防护状态过滤 **约束限制：** 不涉及 **取值范围：** 0(禁用), 1(启用) **默认取值：** 不涉及
    * policyId  **参数解释：** 按策略ID过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'name' => 'name',
            'protectStatus' => 'protect_status',
            'policyId' => 'policy_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  **参数解释：** 最大返回条目数 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 10
    * offset  **参数解释：** 跳过的条目数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    * name  **参数解释：** 按应用名称过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * protectStatus  **参数解释：** 按防护状态过滤 **约束限制：** 不涉及 **取值范围：** 0(禁用), 1(启用) **默认取值：** 不涉及
    * policyId  **参数解释：** 按策略ID过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'name' => 'setName',
            'protectStatus' => 'setProtectStatus',
            'policyId' => 'setPolicyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  **参数解释：** 最大返回条目数 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 10
    * offset  **参数解释：** 跳过的条目数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    * name  **参数解释：** 按应用名称过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * protectStatus  **参数解释：** 按防护状态过滤 **约束限制：** 不涉及 **取值范围：** 0(禁用), 1(启用) **默认取值：** 不涉及
    * policyId  **参数解释：** 按策略ID过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'name' => 'getName',
            'protectStatus' => 'getProtectStatus',
            'policyId' => 'getPolicyId'
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
    const PROTECT_STATUS_0 = 0;
    const PROTECT_STATUS_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectStatusAllowableValues()
    {
        return [
            self::PROTECT_STATUS_0,
            self::PROTECT_STATUS_1,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getProtectStatusAllowableValues();
                if (!is_null($this->container['protectStatus']) && !in_array($this->container['protectStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectStatus', must be one of '%s'",
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
    * Gets limit
    *  **参数解释：** 最大返回条目数 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释：** 最大返回条目数 **约束限制：** 不涉及 **取值范围：** 1-100 **默认取值：** 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 跳过的条目数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释：** 跳过的条目数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 按应用名称过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 按应用名称过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释：** 按防护状态过滤 **约束限制：** 不涉及 **取值范围：** 0(禁用), 1(启用) **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param int|null $protectStatus **参数解释：** 按防护状态过滤 **约束限制：** 不涉及 **取值范围：** 0(禁用), 1(启用) **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets policyId
    *  **参数解释：** 按策略ID过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId **参数解释：** 按策略ID过滤 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
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

