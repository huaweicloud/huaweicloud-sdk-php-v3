<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlertRuleTemplateMetricsResponseBodyStatusMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlertRuleTemplateMetricsResponseBody_status_metric';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * activity  活跃状态数量
    * enabled  启用状态数量
    * disabled  禁用状态数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'activity' => 'int',
            'enabled' => 'int',
            'disabled' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * activity  活跃状态数量
    * enabled  启用状态数量
    * disabled  禁用状态数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'activity' => 'int32',
        'enabled' => 'int32',
        'disabled' => 'int32'
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
    * activity  活跃状态数量
    * enabled  启用状态数量
    * disabled  禁用状态数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'activity' => 'activity',
            'enabled' => 'ENABLED',
            'disabled' => 'DISABLED'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * activity  活跃状态数量
    * enabled  启用状态数量
    * disabled  禁用状态数量
    *
    * @var string[]
    */
    protected static $setters = [
            'activity' => 'setActivity',
            'enabled' => 'setEnabled',
            'disabled' => 'setDisabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * activity  活跃状态数量
    * enabled  启用状态数量
    * disabled  禁用状态数量
    *
    * @var string[]
    */
    protected static $getters = [
            'activity' => 'getActivity',
            'enabled' => 'getEnabled',
            'disabled' => 'getDisabled'
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
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['activity']) && ($this->container['activity'] > 10000)) {
                $invalidProperties[] = "invalid value for 'activity', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['activity']) && ($this->container['activity'] < 0)) {
                $invalidProperties[] = "invalid value for 'activity', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enabled']) && ($this->container['enabled'] > 10000)) {
                $invalidProperties[] = "invalid value for 'enabled', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['enabled']) && ($this->container['enabled'] < 0)) {
                $invalidProperties[] = "invalid value for 'enabled', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['disabled']) && ($this->container['disabled'] > 10000)) {
                $invalidProperties[] = "invalid value for 'disabled', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['disabled']) && ($this->container['disabled'] < 0)) {
                $invalidProperties[] = "invalid value for 'disabled', must be bigger than or equal to 0.";
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
    * Gets activity
    *  活跃状态数量
    *
    * @return int|null
    */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
    * Sets activity
    *
    * @param int|null $activity 活跃状态数量
    *
    * @return $this
    */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;
        return $this;
    }

    /**
    * Gets enabled
    *  启用状态数量
    *
    * @return int|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param int|null $enabled 启用状态数量
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets disabled
    *  禁用状态数量
    *
    * @return int|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param int|null $disabled 禁用状态数量
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
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

