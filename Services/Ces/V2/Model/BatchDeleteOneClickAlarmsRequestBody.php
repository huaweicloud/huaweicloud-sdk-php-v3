<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeleteOneClickAlarmsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeleteOneClickAlarmsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oneClickAlarmIds  **参数解释**： 需要批量删除的一键告警ID列表。 **约束限制**： 一键告警ID数量最多为100个，至少1个。
    * actionType  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值。取值为disable - disable: 关闭一键告警 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oneClickAlarmIds' => 'string[]',
            'actionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oneClickAlarmIds  **参数解释**： 需要批量删除的一键告警ID列表。 **约束限制**： 一键告警ID数量最多为100个，至少1个。
    * actionType  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值。取值为disable - disable: 关闭一键告警 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oneClickAlarmIds' => null,
        'actionType' => null
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
    * oneClickAlarmIds  **参数解释**： 需要批量删除的一键告警ID列表。 **约束限制**： 一键告警ID数量最多为100个，至少1个。
    * actionType  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值。取值为disable - disable: 关闭一键告警 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oneClickAlarmIds' => 'one_click_alarm_ids',
            'actionType' => 'action_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oneClickAlarmIds  **参数解释**： 需要批量删除的一键告警ID列表。 **约束限制**： 一键告警ID数量最多为100个，至少1个。
    * actionType  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值。取值为disable - disable: 关闭一键告警 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'oneClickAlarmIds' => 'setOneClickAlarmIds',
            'actionType' => 'setActionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oneClickAlarmIds  **参数解释**： 需要批量删除的一键告警ID列表。 **约束限制**： 一键告警ID数量最多为100个，至少1个。
    * actionType  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值。取值为disable - disable: 关闭一键告警 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'oneClickAlarmIds' => 'getOneClickAlarmIds',
            'actionType' => 'getActionType'
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
        $this->container['oneClickAlarmIds'] = isset($data['oneClickAlarmIds']) ? $data['oneClickAlarmIds'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['oneClickAlarmIds'] === null) {
            $invalidProperties[] = "'oneClickAlarmIds' can't be null";
        }
            if (!is_null($this->container['actionType']) && (mb_strlen($this->container['actionType']) > 10)) {
                $invalidProperties[] = "invalid value for 'actionType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['actionType']) && !preg_match("/^(disable)$/", $this->container['actionType'])) {
                $invalidProperties[] = "invalid value for 'actionType', must be conform to the pattern /^(disable)$/.";
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
    * Gets oneClickAlarmIds
    *  **参数解释**： 需要批量删除的一键告警ID列表。 **约束限制**： 一键告警ID数量最多为100个，至少1个。
    *
    * @return string[]
    */
    public function getOneClickAlarmIds()
    {
        return $this->container['oneClickAlarmIds'];
    }

    /**
    * Sets oneClickAlarmIds
    *
    * @param string[] $oneClickAlarmIds **参数解释**： 需要批量删除的一键告警ID列表。 **约束限制**： 一键告警ID数量最多为100个，至少1个。
    *
    * @return $this
    */
    public function setOneClickAlarmIds($oneClickAlarmIds)
    {
        $this->container['oneClickAlarmIds'] = $oneClickAlarmIds;
        return $this;
    }

    /**
    * Gets actionType
    *  **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值。取值为disable - disable: 关闭一键告警 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param string|null $actionType **参数解释**： 操作类型。 **约束限制**： 不涉及。 **取值范围**： 枚举值。取值为disable - disable: 关闭一键告警 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
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

