<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceHangingInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceHangingInfos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lifecycleHookName  生命周期挂钩名称。
    * lifecycleActionKey  生命周期操作令牌，用于指定生命周期回调对象。
    * instanceId  伸缩实例ID。
    * scalingGroupId  伸缩组ID。
    * lifecycleHookStatus  伸缩实例挂钩的挂起状态。HANGING：挂起。CONTINUE：继续。ABANDON：终止。
    * timeout  超时时间，遵循UTC时间，格式为：YYYY-MM-DDThh:mm:ssZZ。
    * defaultResult  生命周期挂钩默认回调操作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lifecycleHookName' => 'string',
            'lifecycleActionKey' => 'string',
            'instanceId' => 'string',
            'scalingGroupId' => 'string',
            'lifecycleHookStatus' => 'string',
            'timeout' => 'string',
            'defaultResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lifecycleHookName  生命周期挂钩名称。
    * lifecycleActionKey  生命周期操作令牌，用于指定生命周期回调对象。
    * instanceId  伸缩实例ID。
    * scalingGroupId  伸缩组ID。
    * lifecycleHookStatus  伸缩实例挂钩的挂起状态。HANGING：挂起。CONTINUE：继续。ABANDON：终止。
    * timeout  超时时间，遵循UTC时间，格式为：YYYY-MM-DDThh:mm:ssZZ。
    * defaultResult  生命周期挂钩默认回调操作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lifecycleHookName' => null,
        'lifecycleActionKey' => null,
        'instanceId' => null,
        'scalingGroupId' => null,
        'lifecycleHookStatus' => null,
        'timeout' => null,
        'defaultResult' => null
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
    * lifecycleHookName  生命周期挂钩名称。
    * lifecycleActionKey  生命周期操作令牌，用于指定生命周期回调对象。
    * instanceId  伸缩实例ID。
    * scalingGroupId  伸缩组ID。
    * lifecycleHookStatus  伸缩实例挂钩的挂起状态。HANGING：挂起。CONTINUE：继续。ABANDON：终止。
    * timeout  超时时间，遵循UTC时间，格式为：YYYY-MM-DDThh:mm:ssZZ。
    * defaultResult  生命周期挂钩默认回调操作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lifecycleHookName' => 'lifecycle_hook_name',
            'lifecycleActionKey' => 'lifecycle_action_key',
            'instanceId' => 'instance_id',
            'scalingGroupId' => 'scaling_group_id',
            'lifecycleHookStatus' => 'lifecycle_hook_status',
            'timeout' => 'timeout',
            'defaultResult' => 'default_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lifecycleHookName  生命周期挂钩名称。
    * lifecycleActionKey  生命周期操作令牌，用于指定生命周期回调对象。
    * instanceId  伸缩实例ID。
    * scalingGroupId  伸缩组ID。
    * lifecycleHookStatus  伸缩实例挂钩的挂起状态。HANGING：挂起。CONTINUE：继续。ABANDON：终止。
    * timeout  超时时间，遵循UTC时间，格式为：YYYY-MM-DDThh:mm:ssZZ。
    * defaultResult  生命周期挂钩默认回调操作。
    *
    * @var string[]
    */
    protected static $setters = [
            'lifecycleHookName' => 'setLifecycleHookName',
            'lifecycleActionKey' => 'setLifecycleActionKey',
            'instanceId' => 'setInstanceId',
            'scalingGroupId' => 'setScalingGroupId',
            'lifecycleHookStatus' => 'setLifecycleHookStatus',
            'timeout' => 'setTimeout',
            'defaultResult' => 'setDefaultResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lifecycleHookName  生命周期挂钩名称。
    * lifecycleActionKey  生命周期操作令牌，用于指定生命周期回调对象。
    * instanceId  伸缩实例ID。
    * scalingGroupId  伸缩组ID。
    * lifecycleHookStatus  伸缩实例挂钩的挂起状态。HANGING：挂起。CONTINUE：继续。ABANDON：终止。
    * timeout  超时时间，遵循UTC时间，格式为：YYYY-MM-DDThh:mm:ssZZ。
    * defaultResult  生命周期挂钩默认回调操作。
    *
    * @var string[]
    */
    protected static $getters = [
            'lifecycleHookName' => 'getLifecycleHookName',
            'lifecycleActionKey' => 'getLifecycleActionKey',
            'instanceId' => 'getInstanceId',
            'scalingGroupId' => 'getScalingGroupId',
            'lifecycleHookStatus' => 'getLifecycleHookStatus',
            'timeout' => 'getTimeout',
            'defaultResult' => 'getDefaultResult'
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
    const LIFECYCLE_HOOK_STATUS_HANGING = 'HANGING';
    const LIFECYCLE_HOOK_STATUS__CONTINUE = 'CONTINUE';
    const LIFECYCLE_HOOK_STATUS_ABANDON = 'ABANDON';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLifecycleHookStatusAllowableValues()
    {
        return [
            self::LIFECYCLE_HOOK_STATUS_HANGING,
            self::LIFECYCLE_HOOK_STATUS__CONTINUE,
            self::LIFECYCLE_HOOK_STATUS_ABANDON,
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
        $this->container['lifecycleHookName'] = isset($data['lifecycleHookName']) ? $data['lifecycleHookName'] : null;
        $this->container['lifecycleActionKey'] = isset($data['lifecycleActionKey']) ? $data['lifecycleActionKey'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['scalingGroupId'] = isset($data['scalingGroupId']) ? $data['scalingGroupId'] : null;
        $this->container['lifecycleHookStatus'] = isset($data['lifecycleHookStatus']) ? $data['lifecycleHookStatus'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['defaultResult'] = isset($data['defaultResult']) ? $data['defaultResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['lifecycleHookName']) && (mb_strlen($this->container['lifecycleHookName']) > 64)) {
                $invalidProperties[] = "invalid value for 'lifecycleHookName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lifecycleHookName']) && (mb_strlen($this->container['lifecycleHookName']) < 1)) {
                $invalidProperties[] = "invalid value for 'lifecycleHookName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['scalingGroupId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingGroupId'])) {
                $invalidProperties[] = "invalid value for 'scalingGroupId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getLifecycleHookStatusAllowableValues();
                if (!is_null($this->container['lifecycleHookStatus']) && !in_array($this->container['lifecycleHookStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lifecycleHookStatus', must be one of '%s'",
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
    * Gets lifecycleHookName
    *  生命周期挂钩名称。
    *
    * @return string|null
    */
    public function getLifecycleHookName()
    {
        return $this->container['lifecycleHookName'];
    }

    /**
    * Sets lifecycleHookName
    *
    * @param string|null $lifecycleHookName 生命周期挂钩名称。
    *
    * @return $this
    */
    public function setLifecycleHookName($lifecycleHookName)
    {
        $this->container['lifecycleHookName'] = $lifecycleHookName;
        return $this;
    }

    /**
    * Gets lifecycleActionKey
    *  生命周期操作令牌，用于指定生命周期回调对象。
    *
    * @return string|null
    */
    public function getLifecycleActionKey()
    {
        return $this->container['lifecycleActionKey'];
    }

    /**
    * Sets lifecycleActionKey
    *
    * @param string|null $lifecycleActionKey 生命周期操作令牌，用于指定生命周期回调对象。
    *
    * @return $this
    */
    public function setLifecycleActionKey($lifecycleActionKey)
    {
        $this->container['lifecycleActionKey'] = $lifecycleActionKey;
        return $this;
    }

    /**
    * Gets instanceId
    *  伸缩实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 伸缩实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets scalingGroupId
    *  伸缩组ID。
    *
    * @return string|null
    */
    public function getScalingGroupId()
    {
        return $this->container['scalingGroupId'];
    }

    /**
    * Sets scalingGroupId
    *
    * @param string|null $scalingGroupId 伸缩组ID。
    *
    * @return $this
    */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->container['scalingGroupId'] = $scalingGroupId;
        return $this;
    }

    /**
    * Gets lifecycleHookStatus
    *  伸缩实例挂钩的挂起状态。HANGING：挂起。CONTINUE：继续。ABANDON：终止。
    *
    * @return string|null
    */
    public function getLifecycleHookStatus()
    {
        return $this->container['lifecycleHookStatus'];
    }

    /**
    * Sets lifecycleHookStatus
    *
    * @param string|null $lifecycleHookStatus 伸缩实例挂钩的挂起状态。HANGING：挂起。CONTINUE：继续。ABANDON：终止。
    *
    * @return $this
    */
    public function setLifecycleHookStatus($lifecycleHookStatus)
    {
        $this->container['lifecycleHookStatus'] = $lifecycleHookStatus;
        return $this;
    }

    /**
    * Gets timeout
    *  超时时间，遵循UTC时间，格式为：YYYY-MM-DDThh:mm:ssZZ。
    *
    * @return string|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param string|null $timeout 超时时间，遵循UTC时间，格式为：YYYY-MM-DDThh:mm:ssZZ。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets defaultResult
    *  生命周期挂钩默认回调操作。
    *
    * @return string|null
    */
    public function getDefaultResult()
    {
        return $this->container['defaultResult'];
    }

    /**
    * Sets defaultResult
    *
    * @param string|null $defaultResult 生命周期挂钩默认回调操作。
    *
    * @return $this
    */
    public function setDefaultResult($defaultResult)
    {
        $this->container['defaultResult'] = $defaultResult;
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

