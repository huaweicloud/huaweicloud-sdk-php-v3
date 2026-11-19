<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProtectionStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProtectionStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * countProtectedServer  **参数解释**： 已防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countNeedProtectedServer  **参数解释**： 未防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countProtectionEvent  **参数解释**： 防护事件 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'countProtectedServer' => 'int',
            'countNeedProtectedServer' => 'int',
            'countProtectionEvent' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * countProtectedServer  **参数解释**： 已防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countNeedProtectedServer  **参数解释**： 未防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countProtectionEvent  **参数解释**： 防护事件 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'countProtectedServer' => 'int32',
        'countNeedProtectedServer' => 'int32',
        'countProtectionEvent' => 'int32'
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
    * countProtectedServer  **参数解释**： 已防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countNeedProtectedServer  **参数解释**： 未防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countProtectionEvent  **参数解释**： 防护事件 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'countProtectedServer' => 'count_protected_server',
            'countNeedProtectedServer' => 'count_need_protected_server',
            'countProtectionEvent' => 'count_protection_event'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * countProtectedServer  **参数解释**： 已防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countNeedProtectedServer  **参数解释**： 未防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countProtectionEvent  **参数解释**： 防护事件 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'countProtectedServer' => 'setCountProtectedServer',
            'countNeedProtectedServer' => 'setCountNeedProtectedServer',
            'countProtectionEvent' => 'setCountProtectionEvent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * countProtectedServer  **参数解释**： 已防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countNeedProtectedServer  **参数解释**： 未防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    * countProtectionEvent  **参数解释**： 防护事件 **取值范围**： 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'countProtectedServer' => 'getCountProtectedServer',
            'countNeedProtectedServer' => 'getCountNeedProtectedServer',
            'countProtectionEvent' => 'getCountProtectionEvent'
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
        $this->container['countProtectedServer'] = isset($data['countProtectedServer']) ? $data['countProtectedServer'] : null;
        $this->container['countNeedProtectedServer'] = isset($data['countNeedProtectedServer']) ? $data['countNeedProtectedServer'] : null;
        $this->container['countProtectionEvent'] = isset($data['countProtectionEvent']) ? $data['countProtectionEvent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['countProtectedServer']) && ($this->container['countProtectedServer'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'countProtectedServer', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['countProtectedServer']) && ($this->container['countProtectedServer'] < 0)) {
                $invalidProperties[] = "invalid value for 'countProtectedServer', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['countNeedProtectedServer']) && ($this->container['countNeedProtectedServer'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'countNeedProtectedServer', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['countNeedProtectedServer']) && ($this->container['countNeedProtectedServer'] < 0)) {
                $invalidProperties[] = "invalid value for 'countNeedProtectedServer', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['countProtectionEvent']) && ($this->container['countProtectionEvent'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'countProtectionEvent', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['countProtectionEvent']) && ($this->container['countProtectionEvent'] < 0)) {
                $invalidProperties[] = "invalid value for 'countProtectionEvent', must be bigger than or equal to 0.";
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
    * Gets countProtectedServer
    *  **参数解释**： 已防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getCountProtectedServer()
    {
        return $this->container['countProtectedServer'];
    }

    /**
    * Sets countProtectedServer
    *
    * @param int|null $countProtectedServer **参数解释**： 已防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCountProtectedServer($countProtectedServer)
    {
        $this->container['countProtectedServer'] = $countProtectedServer;
        return $this;
    }

    /**
    * Gets countNeedProtectedServer
    *  **参数解释**： 未防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getCountNeedProtectedServer()
    {
        return $this->container['countNeedProtectedServer'];
    }

    /**
    * Sets countNeedProtectedServer
    *
    * @param int|null $countNeedProtectedServer **参数解释**： 未防护服务器数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCountNeedProtectedServer($countNeedProtectedServer)
    {
        $this->container['countNeedProtectedServer'] = $countNeedProtectedServer;
        return $this;
    }

    /**
    * Gets countProtectionEvent
    *  **参数解释**： 防护事件 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getCountProtectionEvent()
    {
        return $this->container['countProtectionEvent'];
    }

    /**
    * Sets countProtectionEvent
    *
    * @param int|null $countProtectionEvent **参数解释**： 防护事件 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCountProtectionEvent($countProtectionEvent)
    {
        $this->container['countProtectionEvent'] = $countProtectionEvent;
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

