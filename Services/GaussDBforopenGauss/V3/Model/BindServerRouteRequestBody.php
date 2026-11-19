<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BindServerRouteRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BindServerRouteRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operate  **参数解释**: 操作类型。 **约束限制**: 不涉及。 **取值范围**: - add：绑定服务端IP路由 - delete：解绑服务端IP路由  **默认取值**: 不涉及。
    * targetServerIps  **参数解释**: 服务端IP列表。 **约束限制**: 列表元素需要满足IPv4格式要求。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operate' => 'string',
            'targetServerIps' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operate  **参数解释**: 操作类型。 **约束限制**: 不涉及。 **取值范围**: - add：绑定服务端IP路由 - delete：解绑服务端IP路由  **默认取值**: 不涉及。
    * targetServerIps  **参数解释**: 服务端IP列表。 **约束限制**: 列表元素需要满足IPv4格式要求。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operate' => null,
        'targetServerIps' => null
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
    * operate  **参数解释**: 操作类型。 **约束限制**: 不涉及。 **取值范围**: - add：绑定服务端IP路由 - delete：解绑服务端IP路由  **默认取值**: 不涉及。
    * targetServerIps  **参数解释**: 服务端IP列表。 **约束限制**: 列表元素需要满足IPv4格式要求。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operate' => 'operate',
            'targetServerIps' => 'target_server_ips'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operate  **参数解释**: 操作类型。 **约束限制**: 不涉及。 **取值范围**: - add：绑定服务端IP路由 - delete：解绑服务端IP路由  **默认取值**: 不涉及。
    * targetServerIps  **参数解释**: 服务端IP列表。 **约束限制**: 列表元素需要满足IPv4格式要求。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'operate' => 'setOperate',
            'targetServerIps' => 'setTargetServerIps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operate  **参数解释**: 操作类型。 **约束限制**: 不涉及。 **取值范围**: - add：绑定服务端IP路由 - delete：解绑服务端IP路由  **默认取值**: 不涉及。
    * targetServerIps  **参数解释**: 服务端IP列表。 **约束限制**: 列表元素需要满足IPv4格式要求。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'operate' => 'getOperate',
            'targetServerIps' => 'getTargetServerIps'
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
    const OPERATE_ADD = 'add';
    const OPERATE_DELETE = 'delete';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperateAllowableValues()
    {
        return [
            self::OPERATE_ADD,
            self::OPERATE_DELETE,
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
        $this->container['operate'] = isset($data['operate']) ? $data['operate'] : null;
        $this->container['targetServerIps'] = isset($data['targetServerIps']) ? $data['targetServerIps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operate'] === null) {
            $invalidProperties[] = "'operate' can't be null";
        }
            $allowedValues = $this->getOperateAllowableValues();
                if (!is_null($this->container['operate']) && !in_array($this->container['operate'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operate', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['targetServerIps'] === null) {
            $invalidProperties[] = "'targetServerIps' can't be null";
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
    * Gets operate
    *  **参数解释**: 操作类型。 **约束限制**: 不涉及。 **取值范围**: - add：绑定服务端IP路由 - delete：解绑服务端IP路由  **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getOperate()
    {
        return $this->container['operate'];
    }

    /**
    * Sets operate
    *
    * @param string $operate **参数解释**: 操作类型。 **约束限制**: 不涉及。 **取值范围**: - add：绑定服务端IP路由 - delete：解绑服务端IP路由  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setOperate($operate)
    {
        $this->container['operate'] = $operate;
        return $this;
    }

    /**
    * Gets targetServerIps
    *  **参数解释**: 服务端IP列表。 **约束限制**: 列表元素需要满足IPv4格式要求。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string[]
    */
    public function getTargetServerIps()
    {
        return $this->container['targetServerIps'];
    }

    /**
    * Sets targetServerIps
    *
    * @param string[] $targetServerIps **参数解释**: 服务端IP列表。 **约束限制**: 列表元素需要满足IPv4格式要求。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setTargetServerIps($targetServerIps)
    {
        $this->container['targetServerIps'] = $targetServerIps;
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

