<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetUserPoliciesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetUserPoliciesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释**： 操作名称。 **约束限制**： 不涉及。 **取值范围**： - create：提交创建用户策略任务。 - delete：提交删除用户策略任务。 **默认取值**： 不涉及。
    * policies  **参数解释**： 用户权限列表。 **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'policies' => '\HuaweiCloud\SDK\Kafka\V2\Model\UserPolicyEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释**： 操作名称。 **约束限制**： 不涉及。 **取值范围**： - create：提交创建用户策略任务。 - delete：提交删除用户策略任务。 **默认取值**： 不涉及。
    * policies  **参数解释**： 用户权限列表。 **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'policies' => null
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
    * action  **参数解释**： 操作名称。 **约束限制**： 不涉及。 **取值范围**： - create：提交创建用户策略任务。 - delete：提交删除用户策略任务。 **默认取值**： 不涉及。
    * policies  **参数解释**： 用户权限列表。 **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'policies' => 'policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释**： 操作名称。 **约束限制**： 不涉及。 **取值范围**： - create：提交创建用户策略任务。 - delete：提交删除用户策略任务。 **默认取值**： 不涉及。
    * policies  **参数解释**： 用户权限列表。 **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'policies' => 'setPolicies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释**： 操作名称。 **约束限制**： 不涉及。 **取值范围**： - create：提交创建用户策略任务。 - delete：提交删除用户策略任务。 **默认取值**： 不涉及。
    * policies  **参数解释**： 用户权限列表。 **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'policies' => 'getPolicies'
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
    const ACTION_CREATE = 'create';
    const ACTION_DELETE = 'delete';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_CREATE,
            self::ACTION_DELETE,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
    * Gets action
    *  **参数解释**： 操作名称。 **约束限制**： 不涉及。 **取值范围**： - create：提交创建用户策略任务。 - delete：提交删除用户策略任务。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action **参数解释**： 操作名称。 **约束限制**： 不涉及。 **取值范围**： - create：提交创建用户策略任务。 - delete：提交删除用户策略任务。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets policies
    *  **参数解释**： 用户权限列表。 **约束限制**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\UserPolicyEntity[]|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\UserPolicyEntity[]|null $policies **参数解释**： 用户权限列表。 **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
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

