<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionOperateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionOperateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionIds  订阅对象ID列表，单次批量操作最多支持10个订阅
    * operation  操作类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionIds' => 'string[]',
            'operation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionIds  订阅对象ID列表，单次批量操作最多支持10个订阅
    * operation  操作类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptionIds' => null,
        'operation' => null
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
    * subscriptionIds  订阅对象ID列表，单次批量操作最多支持10个订阅
    * operation  操作类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionIds' => 'subscription_ids',
            'operation' => 'operation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionIds  订阅对象ID列表，单次批量操作最多支持10个订阅
    * operation  操作类型
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionIds' => 'setSubscriptionIds',
            'operation' => 'setOperation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionIds  订阅对象ID列表，单次批量操作最多支持10个订阅
    * operation  操作类型
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptionIds' => 'getSubscriptionIds',
            'operation' => 'getOperation'
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
    const OPERATION_DISABLE = 'DISABLE';
    const OPERATION_ENABLE = 'ENABLE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_DISABLE,
            self::OPERATION_ENABLE,
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
        $this->container['subscriptionIds'] = isset($data['subscriptionIds']) ? $data['subscriptionIds'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getOperationAllowableValues();
                if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
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
    * Gets subscriptionIds
    *  订阅对象ID列表，单次批量操作最多支持10个订阅
    *
    * @return string[]|null
    */
    public function getSubscriptionIds()
    {
        return $this->container['subscriptionIds'];
    }

    /**
    * Sets subscriptionIds
    *
    * @param string[]|null $subscriptionIds 订阅对象ID列表，单次批量操作最多支持10个订阅
    *
    * @return $this
    */
    public function setSubscriptionIds($subscriptionIds)
    {
        $this->container['subscriptionIds'] = $subscriptionIds;
        return $this;
    }

    /**
    * Gets operation
    *  操作类型
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 操作类型
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
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

