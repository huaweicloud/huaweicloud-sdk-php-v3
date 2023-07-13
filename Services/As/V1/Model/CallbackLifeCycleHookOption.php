<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CallbackLifeCycleHookOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CallbackLifeCycleHookOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lifecycleActionKey  生命周期操作令牌，通过查询伸缩实例挂起信息接口获取。指定生命周期回调对象，当不传入instance_id字段时，该字段为必选。当该字段与instance_id字段都传入，优先使用该字段进行回调。
    * instanceId  实例ID。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    * lifecycleHookName  生命周期挂钩名称。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    * lifecycleActionResult  生命周期回调操作。ABANDON：终止。CONTINUE：继续。EXTEND：延长超时时间，每次延长1小时。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lifecycleActionKey' => 'string',
            'instanceId' => 'string',
            'lifecycleHookName' => 'string',
            'lifecycleActionResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lifecycleActionKey  生命周期操作令牌，通过查询伸缩实例挂起信息接口获取。指定生命周期回调对象，当不传入instance_id字段时，该字段为必选。当该字段与instance_id字段都传入，优先使用该字段进行回调。
    * instanceId  实例ID。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    * lifecycleHookName  生命周期挂钩名称。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    * lifecycleActionResult  生命周期回调操作。ABANDON：终止。CONTINUE：继续。EXTEND：延长超时时间，每次延长1小时。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lifecycleActionKey' => null,
        'instanceId' => null,
        'lifecycleHookName' => null,
        'lifecycleActionResult' => null
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
    * lifecycleActionKey  生命周期操作令牌，通过查询伸缩实例挂起信息接口获取。指定生命周期回调对象，当不传入instance_id字段时，该字段为必选。当该字段与instance_id字段都传入，优先使用该字段进行回调。
    * instanceId  实例ID。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    * lifecycleHookName  生命周期挂钩名称。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    * lifecycleActionResult  生命周期回调操作。ABANDON：终止。CONTINUE：继续。EXTEND：延长超时时间，每次延长1小时。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lifecycleActionKey' => 'lifecycle_action_key',
            'instanceId' => 'instance_id',
            'lifecycleHookName' => 'lifecycle_hook_name',
            'lifecycleActionResult' => 'lifecycle_action_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lifecycleActionKey  生命周期操作令牌，通过查询伸缩实例挂起信息接口获取。指定生命周期回调对象，当不传入instance_id字段时，该字段为必选。当该字段与instance_id字段都传入，优先使用该字段进行回调。
    * instanceId  实例ID。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    * lifecycleHookName  生命周期挂钩名称。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    * lifecycleActionResult  生命周期回调操作。ABANDON：终止。CONTINUE：继续。EXTEND：延长超时时间，每次延长1小时。
    *
    * @var string[]
    */
    protected static $setters = [
            'lifecycleActionKey' => 'setLifecycleActionKey',
            'instanceId' => 'setInstanceId',
            'lifecycleHookName' => 'setLifecycleHookName',
            'lifecycleActionResult' => 'setLifecycleActionResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lifecycleActionKey  生命周期操作令牌，通过查询伸缩实例挂起信息接口获取。指定生命周期回调对象，当不传入instance_id字段时，该字段为必选。当该字段与instance_id字段都传入，优先使用该字段进行回调。
    * instanceId  实例ID。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    * lifecycleHookName  生命周期挂钩名称。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    * lifecycleActionResult  生命周期回调操作。ABANDON：终止。CONTINUE：继续。EXTEND：延长超时时间，每次延长1小时。
    *
    * @var string[]
    */
    protected static $getters = [
            'lifecycleActionKey' => 'getLifecycleActionKey',
            'instanceId' => 'getInstanceId',
            'lifecycleHookName' => 'getLifecycleHookName',
            'lifecycleActionResult' => 'getLifecycleActionResult'
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
    const LIFECYCLE_ACTION_RESULT_ABANDON = 'ABANDON';
    const LIFECYCLE_ACTION_RESULT__CONTINUE = 'CONTINUE';
    const LIFECYCLE_ACTION_RESULT_EXTEND = 'EXTEND';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLifecycleActionResultAllowableValues()
    {
        return [
            self::LIFECYCLE_ACTION_RESULT_ABANDON,
            self::LIFECYCLE_ACTION_RESULT__CONTINUE,
            self::LIFECYCLE_ACTION_RESULT_EXTEND,
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
        $this->container['lifecycleActionKey'] = isset($data['lifecycleActionKey']) ? $data['lifecycleActionKey'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['lifecycleHookName'] = isset($data['lifecycleHookName']) ? $data['lifecycleHookName'] : null;
        $this->container['lifecycleActionResult'] = isset($data['lifecycleActionResult']) ? $data['lifecycleActionResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['lifecycleHookName']) && (mb_strlen($this->container['lifecycleHookName']) > 64)) {
                $invalidProperties[] = "invalid value for 'lifecycleHookName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lifecycleHookName']) && (mb_strlen($this->container['lifecycleHookName']) < 1)) {
                $invalidProperties[] = "invalid value for 'lifecycleHookName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['lifecycleActionResult'] === null) {
            $invalidProperties[] = "'lifecycleActionResult' can't be null";
        }
            $allowedValues = $this->getLifecycleActionResultAllowableValues();
                if (!is_null($this->container['lifecycleActionResult']) && !in_array($this->container['lifecycleActionResult'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lifecycleActionResult', must be one of '%s'",
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
    * Gets lifecycleActionKey
    *  生命周期操作令牌，通过查询伸缩实例挂起信息接口获取。指定生命周期回调对象，当不传入instance_id字段时，该字段为必选。当该字段与instance_id字段都传入，优先使用该字段进行回调。
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
    * @param string|null $lifecycleActionKey 生命周期操作令牌，通过查询伸缩实例挂起信息接口获取。指定生命周期回调对象，当不传入instance_id字段时，该字段为必选。当该字段与instance_id字段都传入，优先使用该字段进行回调。
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
    *  实例ID。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
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
    * @param string|null $instanceId 实例ID。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets lifecycleHookName
    *  生命周期挂钩名称。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
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
    * @param string|null $lifecycleHookName 生命周期挂钩名称。指定生命周期回调对象，当不传入lifecycle_action_key字段时，该字段为必选。
    *
    * @return $this
    */
    public function setLifecycleHookName($lifecycleHookName)
    {
        $this->container['lifecycleHookName'] = $lifecycleHookName;
        return $this;
    }

    /**
    * Gets lifecycleActionResult
    *  生命周期回调操作。ABANDON：终止。CONTINUE：继续。EXTEND：延长超时时间，每次延长1小时。
    *
    * @return string
    */
    public function getLifecycleActionResult()
    {
        return $this->container['lifecycleActionResult'];
    }

    /**
    * Sets lifecycleActionResult
    *
    * @param string $lifecycleActionResult 生命周期回调操作。ABANDON：终止。CONTINUE：继续。EXTEND：延长超时时间，每次延长1小时。
    *
    * @return $this
    */
    public function setLifecycleActionResult($lifecycleActionResult)
    {
        $this->container['lifecycleActionResult'] = $lifecycleActionResult;
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

