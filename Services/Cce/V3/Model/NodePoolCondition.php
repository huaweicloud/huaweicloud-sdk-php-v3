<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodePoolCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodePoolCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  Condition类型，当前支持类型如下 - \"Scalable\"：节点池实际的可扩容状态，如果状态为\"False\"时则不会再次触发节点池扩容行为。 - \"QuotaInsufficient\"：节点池扩容依赖的配额不足，影响节点池可扩容状态。 - \"ResourceInsufficient\"：节点池扩容依赖的资源不足，影响节点池可扩容状态。 - \"UnexpectedError\"：节点池非预期扩容失败，影响节点池可扩容状态。 [- \"LockedByOrder\"：包周期节点池被订单锁定，此时Reason为待支付订单ID。](tag:hws,hws_hk) - \"Error\"：节点池错误，通常由于删除失败触发。
    * status  Condition当前状态，取值如下 - \"True\" - \"False\"
    * lastProbeTime  上次状态检查时间。
    * lastTransitTime  上次状态变更时间。
    * reason  上次状态变更原因。
    * message  Condition详细描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'status' => 'string',
            'lastProbeTime' => 'string',
            'lastTransitTime' => 'string',
            'reason' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  Condition类型，当前支持类型如下 - \"Scalable\"：节点池实际的可扩容状态，如果状态为\"False\"时则不会再次触发节点池扩容行为。 - \"QuotaInsufficient\"：节点池扩容依赖的配额不足，影响节点池可扩容状态。 - \"ResourceInsufficient\"：节点池扩容依赖的资源不足，影响节点池可扩容状态。 - \"UnexpectedError\"：节点池非预期扩容失败，影响节点池可扩容状态。 [- \"LockedByOrder\"：包周期节点池被订单锁定，此时Reason为待支付订单ID。](tag:hws,hws_hk) - \"Error\"：节点池错误，通常由于删除失败触发。
    * status  Condition当前状态，取值如下 - \"True\" - \"False\"
    * lastProbeTime  上次状态检查时间。
    * lastTransitTime  上次状态变更时间。
    * reason  上次状态变更原因。
    * message  Condition详细描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'status' => null,
        'lastProbeTime' => null,
        'lastTransitTime' => null,
        'reason' => null,
        'message' => null
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
    * type  Condition类型，当前支持类型如下 - \"Scalable\"：节点池实际的可扩容状态，如果状态为\"False\"时则不会再次触发节点池扩容行为。 - \"QuotaInsufficient\"：节点池扩容依赖的配额不足，影响节点池可扩容状态。 - \"ResourceInsufficient\"：节点池扩容依赖的资源不足，影响节点池可扩容状态。 - \"UnexpectedError\"：节点池非预期扩容失败，影响节点池可扩容状态。 [- \"LockedByOrder\"：包周期节点池被订单锁定，此时Reason为待支付订单ID。](tag:hws,hws_hk) - \"Error\"：节点池错误，通常由于删除失败触发。
    * status  Condition当前状态，取值如下 - \"True\" - \"False\"
    * lastProbeTime  上次状态检查时间。
    * lastTransitTime  上次状态变更时间。
    * reason  上次状态变更原因。
    * message  Condition详细描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'status' => 'status',
            'lastProbeTime' => 'lastProbeTime',
            'lastTransitTime' => 'lastTransitTime',
            'reason' => 'reason',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  Condition类型，当前支持类型如下 - \"Scalable\"：节点池实际的可扩容状态，如果状态为\"False\"时则不会再次触发节点池扩容行为。 - \"QuotaInsufficient\"：节点池扩容依赖的配额不足，影响节点池可扩容状态。 - \"ResourceInsufficient\"：节点池扩容依赖的资源不足，影响节点池可扩容状态。 - \"UnexpectedError\"：节点池非预期扩容失败，影响节点池可扩容状态。 [- \"LockedByOrder\"：包周期节点池被订单锁定，此时Reason为待支付订单ID。](tag:hws,hws_hk) - \"Error\"：节点池错误，通常由于删除失败触发。
    * status  Condition当前状态，取值如下 - \"True\" - \"False\"
    * lastProbeTime  上次状态检查时间。
    * lastTransitTime  上次状态变更时间。
    * reason  上次状态变更原因。
    * message  Condition详细描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'status' => 'setStatus',
            'lastProbeTime' => 'setLastProbeTime',
            'lastTransitTime' => 'setLastTransitTime',
            'reason' => 'setReason',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  Condition类型，当前支持类型如下 - \"Scalable\"：节点池实际的可扩容状态，如果状态为\"False\"时则不会再次触发节点池扩容行为。 - \"QuotaInsufficient\"：节点池扩容依赖的配额不足，影响节点池可扩容状态。 - \"ResourceInsufficient\"：节点池扩容依赖的资源不足，影响节点池可扩容状态。 - \"UnexpectedError\"：节点池非预期扩容失败，影响节点池可扩容状态。 [- \"LockedByOrder\"：包周期节点池被订单锁定，此时Reason为待支付订单ID。](tag:hws,hws_hk) - \"Error\"：节点池错误，通常由于删除失败触发。
    * status  Condition当前状态，取值如下 - \"True\" - \"False\"
    * lastProbeTime  上次状态检查时间。
    * lastTransitTime  上次状态变更时间。
    * reason  上次状态变更原因。
    * message  Condition详细描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'status' => 'getStatus',
            'lastProbeTime' => 'getLastProbeTime',
            'lastTransitTime' => 'getLastTransitTime',
            'reason' => 'getReason',
            'message' => 'getMessage'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lastProbeTime'] = isset($data['lastProbeTime']) ? $data['lastProbeTime'] : null;
        $this->container['lastTransitTime'] = isset($data['lastTransitTime']) ? $data['lastTransitTime'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
    * Gets type
    *  Condition类型，当前支持类型如下 - \"Scalable\"：节点池实际的可扩容状态，如果状态为\"False\"时则不会再次触发节点池扩容行为。 - \"QuotaInsufficient\"：节点池扩容依赖的配额不足，影响节点池可扩容状态。 - \"ResourceInsufficient\"：节点池扩容依赖的资源不足，影响节点池可扩容状态。 - \"UnexpectedError\"：节点池非预期扩容失败，影响节点池可扩容状态。 [- \"LockedByOrder\"：包周期节点池被订单锁定，此时Reason为待支付订单ID。](tag:hws,hws_hk) - \"Error\"：节点池错误，通常由于删除失败触发。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type Condition类型，当前支持类型如下 - \"Scalable\"：节点池实际的可扩容状态，如果状态为\"False\"时则不会再次触发节点池扩容行为。 - \"QuotaInsufficient\"：节点池扩容依赖的配额不足，影响节点池可扩容状态。 - \"ResourceInsufficient\"：节点池扩容依赖的资源不足，影响节点池可扩容状态。 - \"UnexpectedError\"：节点池非预期扩容失败，影响节点池可扩容状态。 [- \"LockedByOrder\"：包周期节点池被订单锁定，此时Reason为待支付订单ID。](tag:hws,hws_hk) - \"Error\"：节点池错误，通常由于删除失败触发。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  Condition当前状态，取值如下 - \"True\" - \"False\"
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status Condition当前状态，取值如下 - \"True\" - \"False\"
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets lastProbeTime
    *  上次状态检查时间。
    *
    * @return string|null
    */
    public function getLastProbeTime()
    {
        return $this->container['lastProbeTime'];
    }

    /**
    * Sets lastProbeTime
    *
    * @param string|null $lastProbeTime 上次状态检查时间。
    *
    * @return $this
    */
    public function setLastProbeTime($lastProbeTime)
    {
        $this->container['lastProbeTime'] = $lastProbeTime;
        return $this;
    }

    /**
    * Gets lastTransitTime
    *  上次状态变更时间。
    *
    * @return string|null
    */
    public function getLastTransitTime()
    {
        return $this->container['lastTransitTime'];
    }

    /**
    * Sets lastTransitTime
    *
    * @param string|null $lastTransitTime 上次状态变更时间。
    *
    * @return $this
    */
    public function setLastTransitTime($lastTransitTime)
    {
        $this->container['lastTransitTime'] = $lastTransitTime;
        return $this;
    }

    /**
    * Gets reason
    *  上次状态变更原因。
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 上次状态变更原因。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets message
    *  Condition详细描述。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message Condition详细描述。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

