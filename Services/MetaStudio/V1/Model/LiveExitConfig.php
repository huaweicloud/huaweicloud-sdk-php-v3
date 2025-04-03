<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveExitConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveExitConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxLiveDuration  **参数解释**： 最大直播时长。单位小时。 此数值配置为n，则标识起播后n小时后触发停止直播逻辑。 当前数值最大为168（一周），特殊的，0表示不限时。 **约束限制**： 停止直播逻辑配置为立即停止则直播停止误差在5分钟之内。其他逻辑则加上处理时长。 **默认取值**： 不设置则表示不限时。
    * autoStopMode  **参数解释**： 自动停止直播模式。 * FORCE_EXIT：立即强制停止，不做其他逻辑处理。 * SEGMENT_END:等待段落结束停止。 * SCENE_END：等待场景结束停止。 * SCRIPT_END：等待剧本结束停止。 **约束限制**： 不涉及 **默认取值**： 不设置则表示FORCE_EXIT。
    * maxExceptionWaitingDuration  **参数解释**： 最大异常等待时长。单位分钟。  此数值配置为n，则标识检测到异常n分钟后触发立即停止直播逻辑。 当前数值最大为60（1小时），特殊的，0表示不限时。 **约束限制**： 不涉及 **默认取值**： 不设置则为系统默认值，当前为3分钟，默认值可能会根据服务运行状态进行少许调整。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxLiveDuration' => 'int',
            'autoStopMode' => 'string',
            'maxExceptionWaitingDuration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxLiveDuration  **参数解释**： 最大直播时长。单位小时。 此数值配置为n，则标识起播后n小时后触发停止直播逻辑。 当前数值最大为168（一周），特殊的，0表示不限时。 **约束限制**： 停止直播逻辑配置为立即停止则直播停止误差在5分钟之内。其他逻辑则加上处理时长。 **默认取值**： 不设置则表示不限时。
    * autoStopMode  **参数解释**： 自动停止直播模式。 * FORCE_EXIT：立即强制停止，不做其他逻辑处理。 * SEGMENT_END:等待段落结束停止。 * SCENE_END：等待场景结束停止。 * SCRIPT_END：等待剧本结束停止。 **约束限制**： 不涉及 **默认取值**： 不设置则表示FORCE_EXIT。
    * maxExceptionWaitingDuration  **参数解释**： 最大异常等待时长。单位分钟。  此数值配置为n，则标识检测到异常n分钟后触发立即停止直播逻辑。 当前数值最大为60（1小时），特殊的，0表示不限时。 **约束限制**： 不涉及 **默认取值**： 不设置则为系统默认值，当前为3分钟，默认值可能会根据服务运行状态进行少许调整。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxLiveDuration' => null,
        'autoStopMode' => null,
        'maxExceptionWaitingDuration' => null
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
    * maxLiveDuration  **参数解释**： 最大直播时长。单位小时。 此数值配置为n，则标识起播后n小时后触发停止直播逻辑。 当前数值最大为168（一周），特殊的，0表示不限时。 **约束限制**： 停止直播逻辑配置为立即停止则直播停止误差在5分钟之内。其他逻辑则加上处理时长。 **默认取值**： 不设置则表示不限时。
    * autoStopMode  **参数解释**： 自动停止直播模式。 * FORCE_EXIT：立即强制停止，不做其他逻辑处理。 * SEGMENT_END:等待段落结束停止。 * SCENE_END：等待场景结束停止。 * SCRIPT_END：等待剧本结束停止。 **约束限制**： 不涉及 **默认取值**： 不设置则表示FORCE_EXIT。
    * maxExceptionWaitingDuration  **参数解释**： 最大异常等待时长。单位分钟。  此数值配置为n，则标识检测到异常n分钟后触发立即停止直播逻辑。 当前数值最大为60（1小时），特殊的，0表示不限时。 **约束限制**： 不涉及 **默认取值**： 不设置则为系统默认值，当前为3分钟，默认值可能会根据服务运行状态进行少许调整。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxLiveDuration' => 'max_live_duration',
            'autoStopMode' => 'auto_stop_mode',
            'maxExceptionWaitingDuration' => 'max_exception_waiting_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxLiveDuration  **参数解释**： 最大直播时长。单位小时。 此数值配置为n，则标识起播后n小时后触发停止直播逻辑。 当前数值最大为168（一周），特殊的，0表示不限时。 **约束限制**： 停止直播逻辑配置为立即停止则直播停止误差在5分钟之内。其他逻辑则加上处理时长。 **默认取值**： 不设置则表示不限时。
    * autoStopMode  **参数解释**： 自动停止直播模式。 * FORCE_EXIT：立即强制停止，不做其他逻辑处理。 * SEGMENT_END:等待段落结束停止。 * SCENE_END：等待场景结束停止。 * SCRIPT_END：等待剧本结束停止。 **约束限制**： 不涉及 **默认取值**： 不设置则表示FORCE_EXIT。
    * maxExceptionWaitingDuration  **参数解释**： 最大异常等待时长。单位分钟。  此数值配置为n，则标识检测到异常n分钟后触发立即停止直播逻辑。 当前数值最大为60（1小时），特殊的，0表示不限时。 **约束限制**： 不涉及 **默认取值**： 不设置则为系统默认值，当前为3分钟，默认值可能会根据服务运行状态进行少许调整。
    *
    * @var string[]
    */
    protected static $setters = [
            'maxLiveDuration' => 'setMaxLiveDuration',
            'autoStopMode' => 'setAutoStopMode',
            'maxExceptionWaitingDuration' => 'setMaxExceptionWaitingDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxLiveDuration  **参数解释**： 最大直播时长。单位小时。 此数值配置为n，则标识起播后n小时后触发停止直播逻辑。 当前数值最大为168（一周），特殊的，0表示不限时。 **约束限制**： 停止直播逻辑配置为立即停止则直播停止误差在5分钟之内。其他逻辑则加上处理时长。 **默认取值**： 不设置则表示不限时。
    * autoStopMode  **参数解释**： 自动停止直播模式。 * FORCE_EXIT：立即强制停止，不做其他逻辑处理。 * SEGMENT_END:等待段落结束停止。 * SCENE_END：等待场景结束停止。 * SCRIPT_END：等待剧本结束停止。 **约束限制**： 不涉及 **默认取值**： 不设置则表示FORCE_EXIT。
    * maxExceptionWaitingDuration  **参数解释**： 最大异常等待时长。单位分钟。  此数值配置为n，则标识检测到异常n分钟后触发立即停止直播逻辑。 当前数值最大为60（1小时），特殊的，0表示不限时。 **约束限制**： 不涉及 **默认取值**： 不设置则为系统默认值，当前为3分钟，默认值可能会根据服务运行状态进行少许调整。
    *
    * @var string[]
    */
    protected static $getters = [
            'maxLiveDuration' => 'getMaxLiveDuration',
            'autoStopMode' => 'getAutoStopMode',
            'maxExceptionWaitingDuration' => 'getMaxExceptionWaitingDuration'
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
    const AUTO_STOP_MODE_FORCE_EXIT = 'FORCE_EXIT';
    const AUTO_STOP_MODE_SEGMENT_END = 'SEGMENT_END';
    const AUTO_STOP_MODE_SCENE_END = 'SCENE_END';
    const AUTO_STOP_MODE_SCRIPT_END = 'SCRIPT_END';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAutoStopModeAllowableValues()
    {
        return [
            self::AUTO_STOP_MODE_FORCE_EXIT,
            self::AUTO_STOP_MODE_SEGMENT_END,
            self::AUTO_STOP_MODE_SCENE_END,
            self::AUTO_STOP_MODE_SCRIPT_END,
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
        $this->container['maxLiveDuration'] = isset($data['maxLiveDuration']) ? $data['maxLiveDuration'] : null;
        $this->container['autoStopMode'] = isset($data['autoStopMode']) ? $data['autoStopMode'] : null;
        $this->container['maxExceptionWaitingDuration'] = isset($data['maxExceptionWaitingDuration']) ? $data['maxExceptionWaitingDuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['maxLiveDuration']) && ($this->container['maxLiveDuration'] > 168)) {
                $invalidProperties[] = "invalid value for 'maxLiveDuration', must be smaller than or equal to 168.";
            }
            if (!is_null($this->container['maxLiveDuration']) && ($this->container['maxLiveDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxLiveDuration', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAutoStopModeAllowableValues();
                if (!is_null($this->container['autoStopMode']) && !in_array($this->container['autoStopMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'autoStopMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['maxExceptionWaitingDuration']) && ($this->container['maxExceptionWaitingDuration'] > 60)) {
                $invalidProperties[] = "invalid value for 'maxExceptionWaitingDuration', must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['maxExceptionWaitingDuration']) && ($this->container['maxExceptionWaitingDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxExceptionWaitingDuration', must be bigger than or equal to 0.";
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
    * Gets maxLiveDuration
    *  **参数解释**： 最大直播时长。单位小时。 此数值配置为n，则标识起播后n小时后触发停止直播逻辑。 当前数值最大为168（一周），特殊的，0表示不限时。 **约束限制**： 停止直播逻辑配置为立即停止则直播停止误差在5分钟之内。其他逻辑则加上处理时长。 **默认取值**： 不设置则表示不限时。
    *
    * @return int|null
    */
    public function getMaxLiveDuration()
    {
        return $this->container['maxLiveDuration'];
    }

    /**
    * Sets maxLiveDuration
    *
    * @param int|null $maxLiveDuration **参数解释**： 最大直播时长。单位小时。 此数值配置为n，则标识起播后n小时后触发停止直播逻辑。 当前数值最大为168（一周），特殊的，0表示不限时。 **约束限制**： 停止直播逻辑配置为立即停止则直播停止误差在5分钟之内。其他逻辑则加上处理时长。 **默认取值**： 不设置则表示不限时。
    *
    * @return $this
    */
    public function setMaxLiveDuration($maxLiveDuration)
    {
        $this->container['maxLiveDuration'] = $maxLiveDuration;
        return $this;
    }

    /**
    * Gets autoStopMode
    *  **参数解释**： 自动停止直播模式。 * FORCE_EXIT：立即强制停止，不做其他逻辑处理。 * SEGMENT_END:等待段落结束停止。 * SCENE_END：等待场景结束停止。 * SCRIPT_END：等待剧本结束停止。 **约束限制**： 不涉及 **默认取值**： 不设置则表示FORCE_EXIT。
    *
    * @return string|null
    */
    public function getAutoStopMode()
    {
        return $this->container['autoStopMode'];
    }

    /**
    * Sets autoStopMode
    *
    * @param string|null $autoStopMode **参数解释**： 自动停止直播模式。 * FORCE_EXIT：立即强制停止，不做其他逻辑处理。 * SEGMENT_END:等待段落结束停止。 * SCENE_END：等待场景结束停止。 * SCRIPT_END：等待剧本结束停止。 **约束限制**： 不涉及 **默认取值**： 不设置则表示FORCE_EXIT。
    *
    * @return $this
    */
    public function setAutoStopMode($autoStopMode)
    {
        $this->container['autoStopMode'] = $autoStopMode;
        return $this;
    }

    /**
    * Gets maxExceptionWaitingDuration
    *  **参数解释**： 最大异常等待时长。单位分钟。  此数值配置为n，则标识检测到异常n分钟后触发立即停止直播逻辑。 当前数值最大为60（1小时），特殊的，0表示不限时。 **约束限制**： 不涉及 **默认取值**： 不设置则为系统默认值，当前为3分钟，默认值可能会根据服务运行状态进行少许调整。
    *
    * @return int|null
    */
    public function getMaxExceptionWaitingDuration()
    {
        return $this->container['maxExceptionWaitingDuration'];
    }

    /**
    * Sets maxExceptionWaitingDuration
    *
    * @param int|null $maxExceptionWaitingDuration **参数解释**： 最大异常等待时长。单位分钟。  此数值配置为n，则标识检测到异常n分钟后触发立即停止直播逻辑。 当前数值最大为60（1小时），特殊的，0表示不限时。 **约束限制**： 不涉及 **默认取值**： 不设置则为系统默认值，当前为3分钟，默认值可能会根据服务运行状态进行少许调整。
    *
    * @return $this
    */
    public function setMaxExceptionWaitingDuration($maxExceptionWaitingDuration)
    {
        $this->container['maxExceptionWaitingDuration'] = $maxExceptionWaitingDuration;
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

