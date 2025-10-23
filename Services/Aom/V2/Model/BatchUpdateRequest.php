<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmRules  批量启停的告警规则列表。批量启停告警规则时，该参数必填。
    * updateActionRules  批量修改告警行动规则的告警规则列表。批量修改告警行动规则时，该参数必填。
    * updateType  更新类型：BATCH_UPDATE_ACTION_RULE。批量修改告警行动规则时，该参数必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmRules' => '\HuaweiCloud\SDK\Aom\V2\Model\BatchAlarmRulesBody[]',
            'updateActionRules' => '\HuaweiCloud\SDK\Aom\V2\Model\BatchUpdateActionRules[]',
            'updateType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmRules  批量启停的告警规则列表。批量启停告警规则时，该参数必填。
    * updateActionRules  批量修改告警行动规则的告警规则列表。批量修改告警行动规则时，该参数必填。
    * updateType  更新类型：BATCH_UPDATE_ACTION_RULE。批量修改告警行动规则时，该参数必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmRules' => null,
        'updateActionRules' => null,
        'updateType' => null
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
    * alarmRules  批量启停的告警规则列表。批量启停告警规则时，该参数必填。
    * updateActionRules  批量修改告警行动规则的告警规则列表。批量修改告警行动规则时，该参数必填。
    * updateType  更新类型：BATCH_UPDATE_ACTION_RULE。批量修改告警行动规则时，该参数必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmRules' => 'alarm_rules',
            'updateActionRules' => 'update_action_rules',
            'updateType' => 'update_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmRules  批量启停的告警规则列表。批量启停告警规则时，该参数必填。
    * updateActionRules  批量修改告警行动规则的告警规则列表。批量修改告警行动规则时，该参数必填。
    * updateType  更新类型：BATCH_UPDATE_ACTION_RULE。批量修改告警行动规则时，该参数必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmRules' => 'setAlarmRules',
            'updateActionRules' => 'setUpdateActionRules',
            'updateType' => 'setUpdateType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmRules  批量启停的告警规则列表。批量启停告警规则时，该参数必填。
    * updateActionRules  批量修改告警行动规则的告警规则列表。批量修改告警行动规则时，该参数必填。
    * updateType  更新类型：BATCH_UPDATE_ACTION_RULE。批量修改告警行动规则时，该参数必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmRules' => 'getAlarmRules',
            'updateActionRules' => 'getUpdateActionRules',
            'updateType' => 'getUpdateType'
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
        $this->container['alarmRules'] = isset($data['alarmRules']) ? $data['alarmRules'] : null;
        $this->container['updateActionRules'] = isset($data['updateActionRules']) ? $data['updateActionRules'] : null;
        $this->container['updateType'] = isset($data['updateType']) ? $data['updateType'] : null;
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
    * Gets alarmRules
    *  批量启停的告警规则列表。批量启停告警规则时，该参数必填。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\BatchAlarmRulesBody[]|null
    */
    public function getAlarmRules()
    {
        return $this->container['alarmRules'];
    }

    /**
    * Sets alarmRules
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\BatchAlarmRulesBody[]|null $alarmRules 批量启停的告警规则列表。批量启停告警规则时，该参数必填。
    *
    * @return $this
    */
    public function setAlarmRules($alarmRules)
    {
        $this->container['alarmRules'] = $alarmRules;
        return $this;
    }

    /**
    * Gets updateActionRules
    *  批量修改告警行动规则的告警规则列表。批量修改告警行动规则时，该参数必填。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\BatchUpdateActionRules[]|null
    */
    public function getUpdateActionRules()
    {
        return $this->container['updateActionRules'];
    }

    /**
    * Sets updateActionRules
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\BatchUpdateActionRules[]|null $updateActionRules 批量修改告警行动规则的告警规则列表。批量修改告警行动规则时，该参数必填。
    *
    * @return $this
    */
    public function setUpdateActionRules($updateActionRules)
    {
        $this->container['updateActionRules'] = $updateActionRules;
        return $this;
    }

    /**
    * Gets updateType
    *  更新类型：BATCH_UPDATE_ACTION_RULE。批量修改告警行动规则时，该参数必填。
    *
    * @return string|null
    */
    public function getUpdateType()
    {
        return $this->container['updateType'];
    }

    /**
    * Sets updateType
    *
    * @param string|null $updateType 更新类型：BATCH_UPDATE_ACTION_RULE。批量修改告警行动规则时，该参数必填。
    *
    * @return $this
    */
    public function setUpdateType($updateType)
    {
        $this->container['updateType'] = $updateType;
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

