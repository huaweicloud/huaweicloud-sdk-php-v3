<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateElasticResourcePoolQueueScalingPolicyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateElasticResourcePoolQueueScalingPolicyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueScalingPolicies  该队列在该弹性资源池下的扩缩容策略信息。单条策略信息包含时间段、优先级和CU范围。每个队列至少要配置一条时间段为[00:00, 24:00]的默认扩缩容策略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueScalingPolicies' => '\HuaweiCloud\SDK\Dli\V1\Model\QueueScalingPolicyInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueScalingPolicies  该队列在该弹性资源池下的扩缩容策略信息。单条策略信息包含时间段、优先级和CU范围。每个队列至少要配置一条时间段为[00:00, 24:00]的默认扩缩容策略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueScalingPolicies' => null
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
    * queueScalingPolicies  该队列在该弹性资源池下的扩缩容策略信息。单条策略信息包含时间段、优先级和CU范围。每个队列至少要配置一条时间段为[00:00, 24:00]的默认扩缩容策略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueScalingPolicies' => 'queue_scaling_policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueScalingPolicies  该队列在该弹性资源池下的扩缩容策略信息。单条策略信息包含时间段、优先级和CU范围。每个队列至少要配置一条时间段为[00:00, 24:00]的默认扩缩容策略。
    *
    * @var string[]
    */
    protected static $setters = [
            'queueScalingPolicies' => 'setQueueScalingPolicies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueScalingPolicies  该队列在该弹性资源池下的扩缩容策略信息。单条策略信息包含时间段、优先级和CU范围。每个队列至少要配置一条时间段为[00:00, 24:00]的默认扩缩容策略。
    *
    * @var string[]
    */
    protected static $getters = [
            'queueScalingPolicies' => 'getQueueScalingPolicies'
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
        $this->container['queueScalingPolicies'] = isset($data['queueScalingPolicies']) ? $data['queueScalingPolicies'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['queueScalingPolicies'] === null) {
            $invalidProperties[] = "'queueScalingPolicies' can't be null";
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
    * Gets queueScalingPolicies
    *  该队列在该弹性资源池下的扩缩容策略信息。单条策略信息包含时间段、优先级和CU范围。每个队列至少要配置一条时间段为[00:00, 24:00]的默认扩缩容策略。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\QueueScalingPolicyInfo[]
    */
    public function getQueueScalingPolicies()
    {
        return $this->container['queueScalingPolicies'];
    }

    /**
    * Sets queueScalingPolicies
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\QueueScalingPolicyInfo[] $queueScalingPolicies 该队列在该弹性资源池下的扩缩容策略信息。单条策略信息包含时间段、优先级和CU范围。每个队列至少要配置一条时间段为[00:00, 24:00]的默认扩缩容策略。
    *
    * @return $this
    */
    public function setQueueScalingPolicies($queueScalingPolicies)
    {
        $this->container['queueScalingPolicies'] = $queueScalingPolicies;
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

