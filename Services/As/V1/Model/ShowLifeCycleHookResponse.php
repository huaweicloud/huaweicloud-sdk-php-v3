<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLifeCycleHookResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLifeCycleHookResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lifecycleHookName  生命周期挂钩名称。
    * lifecycleHookType  生命周期挂钩类型。INSTANCE_TERMINATING;INSTANCE_LAUNCHING
    * defaultResult  生命周期挂钩默认回调操作。ABANDON;CONTINUE
    * defaultTimeout  生命周期挂钩超时时间，单位秒。
    * notificationTopicUrn  SMN服务中Topic的唯一的资源标识。
    * notificationTopicName  SMN服务中Topic的资源名称。
    * notificationMetadata  自定义通知消息。
    * createTime  生命周期挂钩创建时间，遵循UTC时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lifecycleHookName' => 'string',
            'lifecycleHookType' => 'string',
            'defaultResult' => 'string',
            'defaultTimeout' => 'int',
            'notificationTopicUrn' => 'string',
            'notificationTopicName' => 'string',
            'notificationMetadata' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lifecycleHookName  生命周期挂钩名称。
    * lifecycleHookType  生命周期挂钩类型。INSTANCE_TERMINATING;INSTANCE_LAUNCHING
    * defaultResult  生命周期挂钩默认回调操作。ABANDON;CONTINUE
    * defaultTimeout  生命周期挂钩超时时间，单位秒。
    * notificationTopicUrn  SMN服务中Topic的唯一的资源标识。
    * notificationTopicName  SMN服务中Topic的资源名称。
    * notificationMetadata  自定义通知消息。
    * createTime  生命周期挂钩创建时间，遵循UTC时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lifecycleHookName' => null,
        'lifecycleHookType' => null,
        'defaultResult' => null,
        'defaultTimeout' => null,
        'notificationTopicUrn' => null,
        'notificationTopicName' => null,
        'notificationMetadata' => null,
        'createTime' => null
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
    * lifecycleHookType  生命周期挂钩类型。INSTANCE_TERMINATING;INSTANCE_LAUNCHING
    * defaultResult  生命周期挂钩默认回调操作。ABANDON;CONTINUE
    * defaultTimeout  生命周期挂钩超时时间，单位秒。
    * notificationTopicUrn  SMN服务中Topic的唯一的资源标识。
    * notificationTopicName  SMN服务中Topic的资源名称。
    * notificationMetadata  自定义通知消息。
    * createTime  生命周期挂钩创建时间，遵循UTC时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lifecycleHookName' => 'lifecycle_hook_name',
            'lifecycleHookType' => 'lifecycle_hook_type',
            'defaultResult' => 'default_result',
            'defaultTimeout' => 'default_timeout',
            'notificationTopicUrn' => 'notification_topic_urn',
            'notificationTopicName' => 'notification_topic_name',
            'notificationMetadata' => 'notification_metadata',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lifecycleHookName  生命周期挂钩名称。
    * lifecycleHookType  生命周期挂钩类型。INSTANCE_TERMINATING;INSTANCE_LAUNCHING
    * defaultResult  生命周期挂钩默认回调操作。ABANDON;CONTINUE
    * defaultTimeout  生命周期挂钩超时时间，单位秒。
    * notificationTopicUrn  SMN服务中Topic的唯一的资源标识。
    * notificationTopicName  SMN服务中Topic的资源名称。
    * notificationMetadata  自定义通知消息。
    * createTime  生命周期挂钩创建时间，遵循UTC时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'lifecycleHookName' => 'setLifecycleHookName',
            'lifecycleHookType' => 'setLifecycleHookType',
            'defaultResult' => 'setDefaultResult',
            'defaultTimeout' => 'setDefaultTimeout',
            'notificationTopicUrn' => 'setNotificationTopicUrn',
            'notificationTopicName' => 'setNotificationTopicName',
            'notificationMetadata' => 'setNotificationMetadata',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lifecycleHookName  生命周期挂钩名称。
    * lifecycleHookType  生命周期挂钩类型。INSTANCE_TERMINATING;INSTANCE_LAUNCHING
    * defaultResult  生命周期挂钩默认回调操作。ABANDON;CONTINUE
    * defaultTimeout  生命周期挂钩超时时间，单位秒。
    * notificationTopicUrn  SMN服务中Topic的唯一的资源标识。
    * notificationTopicName  SMN服务中Topic的资源名称。
    * notificationMetadata  自定义通知消息。
    * createTime  生命周期挂钩创建时间，遵循UTC时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'lifecycleHookName' => 'getLifecycleHookName',
            'lifecycleHookType' => 'getLifecycleHookType',
            'defaultResult' => 'getDefaultResult',
            'defaultTimeout' => 'getDefaultTimeout',
            'notificationTopicUrn' => 'getNotificationTopicUrn',
            'notificationTopicName' => 'getNotificationTopicName',
            'notificationMetadata' => 'getNotificationMetadata',
            'createTime' => 'getCreateTime'
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
        $this->container['notificationTopicName'] = isset($data['notificationTopicName']) ? $data['notificationTopicName'] : null;
        $this->container['notificationMetadata'] = isset($data['notificationMetadata']) ? $data['notificationMetadata'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
            if (!is_null($this->container['notificationTopicName']) && (mb_strlen($this->container['notificationTopicName']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationTopicName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['notificationTopicName']) && (mb_strlen($this->container['notificationTopicName']) < 1)) {
                $invalidProperties[] = "invalid value for 'notificationTopicName', the character length must be bigger than or equal to 1.";
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
    * Gets lifecycleHookType
    *  生命周期挂钩类型。INSTANCE_TERMINATING;INSTANCE_LAUNCHING
    *
    * @return string|null
    */
    public function getLifecycleHookType()
    {
        return $this->container['lifecycleHookType'];
    }

    /**
    * Sets lifecycleHookType
    *
    * @param string|null $lifecycleHookType 生命周期挂钩类型。INSTANCE_TERMINATING;INSTANCE_LAUNCHING
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
    *  生命周期挂钩默认回调操作。ABANDON;CONTINUE
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
    * @param string|null $defaultResult 生命周期挂钩默认回调操作。ABANDON;CONTINUE
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
    *  生命周期挂钩超时时间，单位秒。
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
    * @param int|null $defaultTimeout 生命周期挂钩超时时间，单位秒。
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
    *  SMN服务中Topic的唯一的资源标识。
    *
    * @return string|null
    */
    public function getNotificationTopicUrn()
    {
        return $this->container['notificationTopicUrn'];
    }

    /**
    * Sets notificationTopicUrn
    *
    * @param string|null $notificationTopicUrn SMN服务中Topic的唯一的资源标识。
    *
    * @return $this
    */
    public function setNotificationTopicUrn($notificationTopicUrn)
    {
        $this->container['notificationTopicUrn'] = $notificationTopicUrn;
        return $this;
    }

    /**
    * Gets notificationTopicName
    *  SMN服务中Topic的资源名称。
    *
    * @return string|null
    */
    public function getNotificationTopicName()
    {
        return $this->container['notificationTopicName'];
    }

    /**
    * Sets notificationTopicName
    *
    * @param string|null $notificationTopicName SMN服务中Topic的资源名称。
    *
    * @return $this
    */
    public function setNotificationTopicName($notificationTopicName)
    {
        $this->container['notificationTopicName'] = $notificationTopicName;
        return $this;
    }

    /**
    * Gets notificationMetadata
    *  自定义通知消息。
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
    * @param string|null $notificationMetadata 自定义通知消息。
    *
    * @return $this
    */
    public function setNotificationMetadata($notificationMetadata)
    {
        $this->container['notificationMetadata'] = $notificationMetadata;
        return $this;
    }

    /**
    * Gets createTime
    *  生命周期挂钩创建时间，遵循UTC时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 生命周期挂钩创建时间，遵循UTC时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

