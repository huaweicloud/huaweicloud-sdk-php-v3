<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateIntranetConnectionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateIntranetConnectionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释：** 内网接入申请操作。 **约束限制：** 不涉及。 **取值范围：** - APPROVE：通过申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - REJECT： 拒绝申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - CANCEL： 取消授权，只有当内网接入申请处于“通过”（CONNECTED）状态时，才可进行取消授权操作。 - RETRY：  重试申请，只有当内网接入申请处于“异常”状态并且异常原因为“连接失败，请重试”时，才可进行重试操作。 **默认取值：** 不涉及。
    * reason  **参数解释：** 拒绝时可以填入拒绝的原因。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'reason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释：** 内网接入申请操作。 **约束限制：** 不涉及。 **取值范围：** - APPROVE：通过申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - REJECT： 拒绝申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - CANCEL： 取消授权，只有当内网接入申请处于“通过”（CONNECTED）状态时，才可进行取消授权操作。 - RETRY：  重试申请，只有当内网接入申请处于“异常”状态并且异常原因为“连接失败，请重试”时，才可进行重试操作。 **默认取值：** 不涉及。
    * reason  **参数解释：** 拒绝时可以填入拒绝的原因。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'reason' => null
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
    * action  **参数解释：** 内网接入申请操作。 **约束限制：** 不涉及。 **取值范围：** - APPROVE：通过申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - REJECT： 拒绝申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - CANCEL： 取消授权，只有当内网接入申请处于“通过”（CONNECTED）状态时，才可进行取消授权操作。 - RETRY：  重试申请，只有当内网接入申请处于“异常”状态并且异常原因为“连接失败，请重试”时，才可进行重试操作。 **默认取值：** 不涉及。
    * reason  **参数解释：** 拒绝时可以填入拒绝的原因。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'reason' => 'reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释：** 内网接入申请操作。 **约束限制：** 不涉及。 **取值范围：** - APPROVE：通过申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - REJECT： 拒绝申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - CANCEL： 取消授权，只有当内网接入申请处于“通过”（CONNECTED）状态时，才可进行取消授权操作。 - RETRY：  重试申请，只有当内网接入申请处于“异常”状态并且异常原因为“连接失败，请重试”时，才可进行重试操作。 **默认取值：** 不涉及。
    * reason  **参数解释：** 拒绝时可以填入拒绝的原因。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'reason' => 'setReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释：** 内网接入申请操作。 **约束限制：** 不涉及。 **取值范围：** - APPROVE：通过申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - REJECT： 拒绝申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - CANCEL： 取消授权，只有当内网接入申请处于“通过”（CONNECTED）状态时，才可进行取消授权操作。 - RETRY：  重试申请，只有当内网接入申请处于“异常”状态并且异常原因为“连接失败，请重试”时，才可进行重试操作。 **默认取值：** 不涉及。
    * reason  **参数解释：** 拒绝时可以填入拒绝的原因。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'reason' => 'getReason'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
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
    * Gets action
    *  **参数解释：** 内网接入申请操作。 **约束限制：** 不涉及。 **取值范围：** - APPROVE：通过申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - REJECT： 拒绝申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - CANCEL： 取消授权，只有当内网接入申请处于“通过”（CONNECTED）状态时，才可进行取消授权操作。 - RETRY：  重试申请，只有当内网接入申请处于“异常”状态并且异常原因为“连接失败，请重试”时，才可进行重试操作。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action **参数解释：** 内网接入申请操作。 **约束限制：** 不涉及。 **取值范围：** - APPROVE：通过申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - REJECT： 拒绝申请。只有当内网接入申请处于“审批中”状态时，才可进行此操作。 - CANCEL： 取消授权，只有当内网接入申请处于“通过”（CONNECTED）状态时，才可进行取消授权操作。 - RETRY：  重试申请，只有当内网接入申请处于“异常”状态并且异常原因为“连接失败，请重试”时，才可进行重试操作。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释：** 拒绝时可以填入拒绝的原因。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $reason **参数解释：** 拒绝时可以填入拒绝的原因。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
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

