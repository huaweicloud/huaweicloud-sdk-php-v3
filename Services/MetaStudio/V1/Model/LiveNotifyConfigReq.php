<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveNotifyConfigReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveNotifyConfigReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  确认操作。 * add: 增加。 * del: 删除。 * replace：替换。
    * notifyEvents  **参数解释**： 启用通知事件列表。 **约束限制**： 不涉及 **默认取值**： 无。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'notifyEvents' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\NotifyEventEnum[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  确认操作。 * add: 增加。 * del: 删除。 * replace：替换。
    * notifyEvents  **参数解释**： 启用通知事件列表。 **约束限制**： 不涉及 **默认取值**： 无。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'notifyEvents' => null
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
    * action  确认操作。 * add: 增加。 * del: 删除。 * replace：替换。
    * notifyEvents  **参数解释**： 启用通知事件列表。 **约束限制**： 不涉及 **默认取值**： 无。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'notifyEvents' => 'notify_events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  确认操作。 * add: 增加。 * del: 删除。 * replace：替换。
    * notifyEvents  **参数解释**： 启用通知事件列表。 **约束限制**： 不涉及 **默认取值**： 无。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'notifyEvents' => 'setNotifyEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  确认操作。 * add: 增加。 * del: 删除。 * replace：替换。
    * notifyEvents  **参数解释**： 启用通知事件列表。 **约束限制**： 不涉及 **默认取值**： 无。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'notifyEvents' => 'getNotifyEvents'
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
    const ACTION_ADD = 'add';
    const ACTION_DEL = 'del';
    const ACTION_REPLACE = 'replace';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_ADD,
            self::ACTION_DEL,
            self::ACTION_REPLACE,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['notifyEvents'] = isset($data['notifyEvents']) ? $data['notifyEvents'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 64)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 0)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 0.";
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
    *  确认操作。 * add: 增加。 * del: 删除。 * replace：替换。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 确认操作。 * add: 增加。 * del: 删除。 * replace：替换。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets notifyEvents
    *  **参数解释**： 启用通知事件列表。 **约束限制**： 不涉及 **默认取值**： 无。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\NotifyEventEnum[]|null
    */
    public function getNotifyEvents()
    {
        return $this->container['notifyEvents'];
    }

    /**
    * Sets notifyEvents
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\NotifyEventEnum[]|null $notifyEvents **参数解释**： 启用通知事件列表。 **约束限制**： 不涉及 **默认取值**： 无。
    *
    * @return $this
    */
    public function setNotifyEvents($notifyEvents)
    {
        $this->container['notifyEvents'] = $notifyEvents;
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

