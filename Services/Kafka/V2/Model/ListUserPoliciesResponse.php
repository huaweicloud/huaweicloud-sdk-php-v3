<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUserPoliciesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUserPoliciesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * total  **参数解释**： 用户权限总数。 **取值范围**： 不涉及。
    * policies  **参数解释**： 用户权限列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'total' => 'int',
            'policies' => '\HuaweiCloud\SDK\Kafka\V2\Model\UserPolicyResponeEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * total  **参数解释**： 用户权限总数。 **取值范围**： 不涉及。
    * policies  **参数解释**： 用户权限列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'total' => null,
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
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * total  **参数解释**： 用户权限总数。 **取值范围**： 不涉及。
    * policies  **参数解释**： 用户权限列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'total' => 'total',
            'policies' => 'policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * total  **参数解释**： 用户权限总数。 **取值范围**： 不涉及。
    * policies  **参数解释**： 用户权限列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'total' => 'setTotal',
            'policies' => 'setPolicies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  **参数解释**： 用户名。 **取值范围**： 不涉及。
    * total  **参数解释**： 用户权限总数。 **取值范围**： 不涉及。
    * policies  **参数解释**： 用户权限列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'total' => 'getTotal',
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets userName
    *  **参数解释**： 用户名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**： 用户名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 用户权限总数。 **取值范围**： 不涉及。
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
    * @param int|null $total **参数解释**： 用户权限总数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets policies
    *  **参数解释**： 用户权限列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\UserPolicyResponeEntity[]|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\UserPolicyResponeEntity[]|null $policies **参数解释**： 用户权限列表。
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

