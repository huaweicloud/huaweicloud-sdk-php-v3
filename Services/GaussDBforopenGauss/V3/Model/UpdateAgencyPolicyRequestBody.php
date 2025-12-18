<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAgencyPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAgencyPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unbindRoleNames  **参数解释**: 委托解绑的权限策略集合。 **约束限制**: 不涉及。
    * bindRoleNames  **参数解释**: 委托绑定的权限策略集合。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unbindRoleNames' => 'string[]',
            'bindRoleNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unbindRoleNames  **参数解释**: 委托解绑的权限策略集合。 **约束限制**: 不涉及。
    * bindRoleNames  **参数解释**: 委托绑定的权限策略集合。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unbindRoleNames' => null,
        'bindRoleNames' => null
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
    * unbindRoleNames  **参数解释**: 委托解绑的权限策略集合。 **约束限制**: 不涉及。
    * bindRoleNames  **参数解释**: 委托绑定的权限策略集合。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unbindRoleNames' => 'unbind_role_names',
            'bindRoleNames' => 'bind_role_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unbindRoleNames  **参数解释**: 委托解绑的权限策略集合。 **约束限制**: 不涉及。
    * bindRoleNames  **参数解释**: 委托绑定的权限策略集合。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'unbindRoleNames' => 'setUnbindRoleNames',
            'bindRoleNames' => 'setBindRoleNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unbindRoleNames  **参数解释**: 委托解绑的权限策略集合。 **约束限制**: 不涉及。
    * bindRoleNames  **参数解释**: 委托绑定的权限策略集合。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'unbindRoleNames' => 'getUnbindRoleNames',
            'bindRoleNames' => 'getBindRoleNames'
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
        $this->container['unbindRoleNames'] = isset($data['unbindRoleNames']) ? $data['unbindRoleNames'] : null;
        $this->container['bindRoleNames'] = isset($data['bindRoleNames']) ? $data['bindRoleNames'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['unbindRoleNames'] === null) {
            $invalidProperties[] = "'unbindRoleNames' can't be null";
        }
        if ($this->container['bindRoleNames'] === null) {
            $invalidProperties[] = "'bindRoleNames' can't be null";
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
    * Gets unbindRoleNames
    *  **参数解释**: 委托解绑的权限策略集合。 **约束限制**: 不涉及。
    *
    * @return string[]
    */
    public function getUnbindRoleNames()
    {
        return $this->container['unbindRoleNames'];
    }

    /**
    * Sets unbindRoleNames
    *
    * @param string[] $unbindRoleNames **参数解释**: 委托解绑的权限策略集合。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setUnbindRoleNames($unbindRoleNames)
    {
        $this->container['unbindRoleNames'] = $unbindRoleNames;
        return $this;
    }

    /**
    * Gets bindRoleNames
    *  **参数解释**: 委托绑定的权限策略集合。 **约束限制**: 不涉及。
    *
    * @return string[]
    */
    public function getBindRoleNames()
    {
        return $this->container['bindRoleNames'];
    }

    /**
    * Sets bindRoleNames
    *
    * @param string[] $bindRoleNames **参数解释**: 委托绑定的权限策略集合。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setBindRoleNames($bindRoleNames)
    {
        $this->container['bindRoleNames'] = $bindRoleNames;
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

