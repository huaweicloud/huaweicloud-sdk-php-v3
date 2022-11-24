<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLifeCycleHookOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLifeCycleHookOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lifecycleHookName  生命周期挂钩名称(1-32个字符)，只能包含字母、数字、下划线或中划线。
    * lifecycleHookType  生命周期挂钩类型。INSTANCE_TERMINATING。INSTANCE_LAUNCHING。INSTANCE_TERMINATING 类型的挂钩负责在实例终止时将实例挂起，INSTANCE_LAUNCHING 类型的挂钩则是在实例启动时将实例挂起。
    * defaultResult  生命周期挂钩默认回调操作。默认情况下，到达超时时间后执行的操作。ABANDON；CONTINUE；如果实例正在启动，则 CONTINUE 表示用户自定义操作已成功，可将实例投入使用。否则，ABANDON 表示用户自定义操作未成功，终止实例，伸缩活动置为失败，重新创建新实例。如果实例正在终止，则 ABANDON 和 CONTINUE 都允许终止实例。不过，ABANDON 将停止其他生命周期挂钩，而 CONTINUE 将允许完成其他生命周期挂钩。该字段缺省时默认为 ABANDON。
    * defaultTimeout  生命周期挂钩超时时间，取值范围300-86400，默认为3600，单位是秒。默认情况下，实例保持等待状态的时间。您可以延长超时时间，也可以在超时时间结束前进行 CONTINUE 或 ABANDON 操作。
    * notificationTopicUrn  SMN 服务中 Topic 的唯一的资源标识。为生命周期挂钩定义一个通知目标，当实例被生命周期挂钩挂起时向该通知目标发送消息。该消息包含实例的基本信息、用户自定义通知消息，以及可用于控制生命周期操作的令牌信息。
    * notificationMetadata  自定义通知消息，长度不超过256位，不能包含字符< > & ' ( )当配置了通知目标时，可向其发送用户自定义的通知内容。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lifecycleHookName' => 'string',
            'lifecycleHookType' => 'string',
            'defaultResult' => 'string',
            'defaultTimeout' => 'int',
            'notificationTopicUrn' => 'string',
            'notificationMetadata' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lifecycleHookName  生命周期挂钩名称(1-32个字符)，只能包含字母、数字、下划线或中划线。
    * lifecycleHookType  生命周期挂钩类型。INSTANCE_TERMINATING。INSTANCE_LAUNCHING。INSTANCE_TERMINATING 类型的挂钩负责在实例终止时将实例挂起，INSTANCE_LAUNCHING 类型的挂钩则是在实例启动时将实例挂起。
    * defaultResult  生命周期挂钩默认回调操作。默认情况下，到达超时时间后执行的操作。ABANDON；CONTINUE；如果实例正在启动，则 CONTINUE 表示用户自定义操作已成功，可将实例投入使用。否则，ABANDON 表示用户自定义操作未成功，终止实例，伸缩活动置为失败，重新创建新实例。如果实例正在终止，则 ABANDON 和 CONTINUE 都允许终止实例。不过，ABANDON 将停止其他生命周期挂钩，而 CONTINUE 将允许完成其他生命周期挂钩。该字段缺省时默认为 ABANDON。
    * defaultTimeout  生命周期挂钩超时时间，取值范围300-86400，默认为3600，单位是秒。默认情况下，实例保持等待状态的时间。您可以延长超时时间，也可以在超时时间结束前进行 CONTINUE 或 ABANDON 操作。
    * notificationTopicUrn  SMN 服务中 Topic 的唯一的资源标识。为生命周期挂钩定义一个通知目标，当实例被生命周期挂钩挂起时向该通知目标发送消息。该消息包含实例的基本信息、用户自定义通知消息，以及可用于控制生命周期操作的令牌信息。
    * notificationMetadata  自定义通知消息，长度不超过256位，不能包含字符< > & ' ( )当配置了通知目标时，可向其发送用户自定义的通知内容。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lifecycleHookName' => null,
        'lifecycleHookType' => null,
        'defaultResult' => null,
        'defaultTimeout' => null,
        'notificationTopicUrn' => null,
        'notificationMetadata' => null
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
    * lifecycleHookName  生命周期挂钩名称(1-32个字符)，只能包含字母、数字、下划线或中划线。
    * lifecycleHookType  生命周期挂钩类型。INSTANCE_TERMINATING。INSTANCE_LAUNCHING。INSTANCE_TERMINATING 类型的挂钩负责在实例终止时将实例挂起，INSTANCE_LAUNCHING 类型的挂钩则是在实例启动时将实例挂起。
    * defaultResult  生命周期挂钩默认回调操作。默认情况下，到达超时时间后执行的操作。ABANDON；CONTINUE；如果实例正在启动，则 CONTINUE 表示用户自定义操作已成功，可将实例投入使用。否则，ABANDON 表示用户自定义操作未成功，终止实例，伸缩活动置为失败，重新创建新实例。如果实例正在终止，则 ABANDON 和 CONTINUE 都允许终止实例。不过，ABANDON 将停止其他生命周期挂钩，而 CONTINUE 将允许完成其他生命周期挂钩。该字段缺省时默认为 ABANDON。
    * defaultTimeout  生命周期挂钩超时时间，取值范围300-86400，默认为3600，单位是秒。默认情况下，实例保持等待状态的时间。您可以延长超时时间，也可以在超时时间结束前进行 CONTINUE 或 ABANDON 操作。
    * notificationTopicUrn  SMN 服务中 Topic 的唯一的资源标识。为生命周期挂钩定义一个通知目标，当实例被生命周期挂钩挂起时向该通知目标发送消息。该消息包含实例的基本信息、用户自定义通知消息，以及可用于控制生命周期操作的令牌信息。
    * notificationMetadata  自定义通知消息，长度不超过256位，不能包含字符< > & ' ( )当配置了通知目标时，可向其发送用户自定义的通知内容。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lifecycleHookName' => 'lifecycle_hook_name',
            'lifecycleHookType' => 'lifecycle_hook_type',
            'defaultResult' => 'default_result',
            'defaultTimeout' => 'default_timeout',
            'notificationTopicUrn' => 'notification_topic_urn',
            'notificationMetadata' => 'notification_metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lifecycleHookName  生命周期挂钩名称(1-32个字符)，只能包含字母、数字、下划线或中划线。
    * lifecycleHookType  生命周期挂钩类型。INSTANCE_TERMINATING。INSTANCE_LAUNCHING。INSTANCE_TERMINATING 类型的挂钩负责在实例终止时将实例挂起，INSTANCE_LAUNCHING 类型的挂钩则是在实例启动时将实例挂起。
    * defaultResult  生命周期挂钩默认回调操作。默认情况下，到达超时时间后执行的操作。ABANDON；CONTINUE；如果实例正在启动，则 CONTINUE 表示用户自定义操作已成功，可将实例投入使用。否则，ABANDON 表示用户自定义操作未成功，终止实例，伸缩活动置为失败，重新创建新实例。如果实例正在终止，则 ABANDON 和 CONTINUE 都允许终止实例。不过，ABANDON 将停止其他生命周期挂钩，而 CONTINUE 将允许完成其他生命周期挂钩。该字段缺省时默认为 ABANDON。
    * defaultTimeout  生命周期挂钩超时时间，取值范围300-86400，默认为3600，单位是秒。默认情况下，实例保持等待状态的时间。您可以延长超时时间，也可以在超时时间结束前进行 CONTINUE 或 ABANDON 操作。
    * notificationTopicUrn  SMN 服务中 Topic 的唯一的资源标识。为生命周期挂钩定义一个通知目标，当实例被生命周期挂钩挂起时向该通知目标发送消息。该消息包含实例的基本信息、用户自定义通知消息，以及可用于控制生命周期操作的令牌信息。
    * notificationMetadata  自定义通知消息，长度不超过256位，不能包含字符< > & ' ( )当配置了通知目标时，可向其发送用户自定义的通知内容。
    *
    * @var string[]
    */
    protected static $setters = [
            'lifecycleHookName' => 'setLifecycleHookName',
            'lifecycleHookType' => 'setLifecycleHookType',
            'defaultResult' => 'setDefaultResult',
            'defaultTimeout' => 'setDefaultTimeout',
            'notificationTopicUrn' => 'setNotificationTopicUrn',
            'notificationMetadata' => 'setNotificationMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lifecycleHookName  生命周期挂钩名称(1-32个字符)，只能包含字母、数字、下划线或中划线。
    * lifecycleHookType  生命周期挂钩类型。INSTANCE_TERMINATING。INSTANCE_LAUNCHING。INSTANCE_TERMINATING 类型的挂钩负责在实例终止时将实例挂起，INSTANCE_LAUNCHING 类型的挂钩则是在实例启动时将实例挂起。
    * defaultResult  生命周期挂钩默认回调操作。默认情况下，到达超时时间后执行的操作。ABANDON；CONTINUE；如果实例正在启动，则 CONTINUE 表示用户自定义操作已成功，可将实例投入使用。否则，ABANDON 表示用户自定义操作未成功，终止实例，伸缩活动置为失败，重新创建新实例。如果实例正在终止，则 ABANDON 和 CONTINUE 都允许终止实例。不过，ABANDON 将停止其他生命周期挂钩，而 CONTINUE 将允许完成其他生命周期挂钩。该字段缺省时默认为 ABANDON。
    * defaultTimeout  生命周期挂钩超时时间，取值范围300-86400，默认为3600，单位是秒。默认情况下，实例保持等待状态的时间。您可以延长超时时间，也可以在超时时间结束前进行 CONTINUE 或 ABANDON 操作。
    * notificationTopicUrn  SMN 服务中 Topic 的唯一的资源标识。为生命周期挂钩定义一个通知目标，当实例被生命周期挂钩挂起时向该通知目标发送消息。该消息包含实例的基本信息、用户自定义通知消息，以及可用于控制生命周期操作的令牌信息。
    * notificationMetadata  自定义通知消息，长度不超过256位，不能包含字符< > & ' ( )当配置了通知目标时，可向其发送用户自定义的通知内容。
    *
    * @var string[]
    */
    protected static $getters = [
            'lifecycleHookName' => 'getLifecycleHookName',
            'lifecycleHookType' => 'getLifecycleHookType',
            'defaultResult' => 'getDefaultResult',
            'defaultTimeout' => 'getDefaultTimeout',
            'notificationTopicUrn' => 'getNotificationTopicUrn',
            'notificationMetadata' => 'getNotificationMetadata'
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
    const LIFECYCLE_HOOK_TYPE_INSTANCE_TERMINATING = 'INSTANCE_TERMINATING';
    const LIFECYCLE_HOOK_TYPE_INSTANCE_LAUNCHING = 'INSTANCE_LAUNCHING';
    const DEFAULT_RESULT_ABANDON = 'ABANDON';
    const DEFAULT_RESULT__CONTINUE = 'CONTINUE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLifecycleHookTypeAllowableValues()
    {
        return [
            self::LIFECYCLE_HOOK_TYPE_INSTANCE_TERMINATING,
            self::LIFECYCLE_HOOK_TYPE_INSTANCE_LAUNCHING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDefaultResultAllowableValues()
    {
        return [
            self::DEFAULT_RESULT_ABANDON,
            self::DEFAULT_RESULT__CONTINUE,
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
        $this->container['lifecycleHookType'] = isset($data['lifecycleHookType']) ? $data['lifecycleHookType'] : null;
        $this->container['defaultResult'] = isset($data['defaultResult']) ? $data['defaultResult'] : null;
        $this->container['defaultTimeout'] = isset($data['defaultTimeout']) ? $data['defaultTimeout'] : null;
        $this->container['notificationTopicUrn'] = isset($data['notificationTopicUrn']) ? $data['notificationTopicUrn'] : null;
        $this->container['notificationMetadata'] = isset($data['notificationMetadata']) ? $data['notificationMetadata'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['lifecycleHookName'] === null) {
            $invalidProperties[] = "'lifecycleHookName' can't be null";
        }
            if ((mb_strlen($this->container['lifecycleHookName']) > 64)) {
                $invalidProperties[] = "invalid value for 'lifecycleHookName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['lifecycleHookName']) < 1)) {
                $invalidProperties[] = "invalid value for 'lifecycleHookName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['lifecycleHookType'] === null) {
            $invalidProperties[] = "'lifecycleHookType' can't be null";
        }
            $allowedValues = $this->getLifecycleHookTypeAllowableValues();
                if (!is_null($this->container['lifecycleHookType']) && !in_array($this->container['lifecycleHookType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lifecycleHookType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDefaultResultAllowableValues();
                if (!is_null($this->container['defaultResult']) && !in_array($this->container['defaultResult'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'defaultResult', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['defaultTimeout']) && ($this->container['defaultTimeout'] > 86400)) {
                $invalidProperties[] = "invalid value for 'defaultTimeout', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['defaultTimeout']) && ($this->container['defaultTimeout'] < 300)) {
                $invalidProperties[] = "invalid value for 'defaultTimeout', must be bigger than or equal to 300.";
            }
        if ($this->container['notificationTopicUrn'] === null) {
            $invalidProperties[] = "'notificationTopicUrn' can't be null";
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
    *  生命周期挂钩名称(1-32个字符)，只能包含字母、数字、下划线或中划线。
    *
    * @return string
    */
    public function getLifecycleHookName()
    {
        return $this->container['lifecycleHookName'];
    }

    /**
    * Sets lifecycleHookName
    *
    * @param string $lifecycleHookName 生命周期挂钩名称(1-32个字符)，只能包含字母、数字、下划线或中划线。
    *
    * @return $this
    */
    public function setLifecycleHookName($lifecycleHookName)
    {
        $this->container['lifecycleHookName'] = $lifecycleHookName;
        return $this;
    }

    /**
    * Gets lifecycleHookType
    *  生命周期挂钩类型。INSTANCE_TERMINATING。INSTANCE_LAUNCHING。INSTANCE_TERMINATING 类型的挂钩负责在实例终止时将实例挂起，INSTANCE_LAUNCHING 类型的挂钩则是在实例启动时将实例挂起。
    *
    * @return string
    */
    public function getLifecycleHookType()
    {
        return $this->container['lifecycleHookType'];
    }

    /**
    * Sets lifecycleHookType
    *
    * @param string $lifecycleHookType 生命周期挂钩类型。INSTANCE_TERMINATING。INSTANCE_LAUNCHING。INSTANCE_TERMINATING 类型的挂钩负责在实例终止时将实例挂起，INSTANCE_LAUNCHING 类型的挂钩则是在实例启动时将实例挂起。
    *
    * @return $this
    */
    public function setLifecycleHookType($lifecycleHookType)
    {
        $this->container['lifecycleHookType'] = $lifecycleHookType;
        return $this;
    }

    /**
    * Gets defaultResult
    *  生命周期挂钩默认回调操作。默认情况下，到达超时时间后执行的操作。ABANDON；CONTINUE；如果实例正在启动，则 CONTINUE 表示用户自定义操作已成功，可将实例投入使用。否则，ABANDON 表示用户自定义操作未成功，终止实例，伸缩活动置为失败，重新创建新实例。如果实例正在终止，则 ABANDON 和 CONTINUE 都允许终止实例。不过，ABANDON 将停止其他生命周期挂钩，而 CONTINUE 将允许完成其他生命周期挂钩。该字段缺省时默认为 ABANDON。
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
    * @param string|null $defaultResult 生命周期挂钩默认回调操作。默认情况下，到达超时时间后执行的操作。ABANDON；CONTINUE；如果实例正在启动，则 CONTINUE 表示用户自定义操作已成功，可将实例投入使用。否则，ABANDON 表示用户自定义操作未成功，终止实例，伸缩活动置为失败，重新创建新实例。如果实例正在终止，则 ABANDON 和 CONTINUE 都允许终止实例。不过，ABANDON 将停止其他生命周期挂钩，而 CONTINUE 将允许完成其他生命周期挂钩。该字段缺省时默认为 ABANDON。
    *
    * @return $this
    */
    public function setDefaultResult($defaultResult)
    {
        $this->container['defaultResult'] = $defaultResult;
        return $this;
    }

    /**
    * Gets defaultTimeout
    *  生命周期挂钩超时时间，取值范围300-86400，默认为3600，单位是秒。默认情况下，实例保持等待状态的时间。您可以延长超时时间，也可以在超时时间结束前进行 CONTINUE 或 ABANDON 操作。
    *
    * @return int|null
    */
    public function getDefaultTimeout()
    {
        return $this->container['defaultTimeout'];
    }

    /**
    * Sets defaultTimeout
    *
    * @param int|null $defaultTimeout 生命周期挂钩超时时间，取值范围300-86400，默认为3600，单位是秒。默认情况下，实例保持等待状态的时间。您可以延长超时时间，也可以在超时时间结束前进行 CONTINUE 或 ABANDON 操作。
    *
    * @return $this
    */
    public function setDefaultTimeout($defaultTimeout)
    {
        $this->container['defaultTimeout'] = $defaultTimeout;
        return $this;
    }

    /**
    * Gets notificationTopicUrn
    *  SMN 服务中 Topic 的唯一的资源标识。为生命周期挂钩定义一个通知目标，当实例被生命周期挂钩挂起时向该通知目标发送消息。该消息包含实例的基本信息、用户自定义通知消息，以及可用于控制生命周期操作的令牌信息。
    *
    * @return string
    */
    public function getNotificationTopicUrn()
    {
        return $this->container['notificationTopicUrn'];
    }

    /**
    * Sets notificationTopicUrn
    *
    * @param string $notificationTopicUrn SMN 服务中 Topic 的唯一的资源标识。为生命周期挂钩定义一个通知目标，当实例被生命周期挂钩挂起时向该通知目标发送消息。该消息包含实例的基本信息、用户自定义通知消息，以及可用于控制生命周期操作的令牌信息。
    *
    * @return $this
    */
    public function setNotificationTopicUrn($notificationTopicUrn)
    {
        $this->container['notificationTopicUrn'] = $notificationTopicUrn;
        return $this;
    }

    /**
    * Gets notificationMetadata
    *  自定义通知消息，长度不超过256位，不能包含字符< > & ' ( )当配置了通知目标时，可向其发送用户自定义的通知内容。
    *
    * @return string|null
    */
    public function getNotificationMetadata()
    {
        return $this->container['notificationMetadata'];
    }

    /**
    * Sets notificationMetadata
    *
    * @param string|null $notificationMetadata 自定义通知消息，长度不超过256位，不能包含字符< > & ' ( )当配置了通知目标时，可向其发送用户自定义的通知内容。
    *
    * @return $this
    */
    public function setNotificationMetadata($notificationMetadata)
    {
        $this->container['notificationMetadata'] = $notificationMetadata;
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

