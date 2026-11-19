<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDecoyPortStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDecoyPortStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostNum  **参数解释**： 开启防护的主机数量 **取值范围**： 最小值0，最大值2147483647
    * policyNum  **参数解释**： 策略数量 **取值范围**： 最小值0，最大值2147483647
    * eventNum  **参数解释**： 未处理的事件数量 **取值范围**： 最小值0，最大值2147483647
    * linuxPropose  **参数解释**： linux的推荐端口配置 **取值范围**： 不涉及
    * windowsPropose  **参数解释**： windows的推荐端口配置 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostNum' => 'int',
            'policyNum' => 'int',
            'eventNum' => 'int',
            'linuxPropose' => '\HuaweiCloud\SDK\Hss\V5\Model\DecoyPortBasePortStruct[]',
            'windowsPropose' => '\HuaweiCloud\SDK\Hss\V5\Model\DecoyPortBasePortStruct[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostNum  **参数解释**： 开启防护的主机数量 **取值范围**： 最小值0，最大值2147483647
    * policyNum  **参数解释**： 策略数量 **取值范围**： 最小值0，最大值2147483647
    * eventNum  **参数解释**： 未处理的事件数量 **取值范围**： 最小值0，最大值2147483647
    * linuxPropose  **参数解释**： linux的推荐端口配置 **取值范围**： 不涉及
    * windowsPropose  **参数解释**： windows的推荐端口配置 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostNum' => 'int32',
        'policyNum' => 'int32',
        'eventNum' => 'int32',
        'linuxPropose' => null,
        'windowsPropose' => null
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
    * hostNum  **参数解释**： 开启防护的主机数量 **取值范围**： 最小值0，最大值2147483647
    * policyNum  **参数解释**： 策略数量 **取值范围**： 最小值0，最大值2147483647
    * eventNum  **参数解释**： 未处理的事件数量 **取值范围**： 最小值0，最大值2147483647
    * linuxPropose  **参数解释**： linux的推荐端口配置 **取值范围**： 不涉及
    * windowsPropose  **参数解释**： windows的推荐端口配置 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostNum' => 'host_num',
            'policyNum' => 'policy_num',
            'eventNum' => 'event_num',
            'linuxPropose' => 'linux_propose',
            'windowsPropose' => 'windows_propose'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostNum  **参数解释**： 开启防护的主机数量 **取值范围**： 最小值0，最大值2147483647
    * policyNum  **参数解释**： 策略数量 **取值范围**： 最小值0，最大值2147483647
    * eventNum  **参数解释**： 未处理的事件数量 **取值范围**： 最小值0，最大值2147483647
    * linuxPropose  **参数解释**： linux的推荐端口配置 **取值范围**： 不涉及
    * windowsPropose  **参数解释**： windows的推荐端口配置 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostNum' => 'setHostNum',
            'policyNum' => 'setPolicyNum',
            'eventNum' => 'setEventNum',
            'linuxPropose' => 'setLinuxPropose',
            'windowsPropose' => 'setWindowsPropose'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostNum  **参数解释**： 开启防护的主机数量 **取值范围**： 最小值0，最大值2147483647
    * policyNum  **参数解释**： 策略数量 **取值范围**： 最小值0，最大值2147483647
    * eventNum  **参数解释**： 未处理的事件数量 **取值范围**： 最小值0，最大值2147483647
    * linuxPropose  **参数解释**： linux的推荐端口配置 **取值范围**： 不涉及
    * windowsPropose  **参数解释**： windows的推荐端口配置 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostNum' => 'getHostNum',
            'policyNum' => 'getPolicyNum',
            'eventNum' => 'getEventNum',
            'linuxPropose' => 'getLinuxPropose',
            'windowsPropose' => 'getWindowsPropose'
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
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['policyNum'] = isset($data['policyNum']) ? $data['policyNum'] : null;
        $this->container['eventNum'] = isset($data['eventNum']) ? $data['eventNum'] : null;
        $this->container['linuxPropose'] = isset($data['linuxPropose']) ? $data['linuxPropose'] : null;
        $this->container['windowsPropose'] = isset($data['windowsPropose']) ? $data['windowsPropose'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyNum']) && ($this->container['policyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'policyNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['policyNum']) && ($this->container['policyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'policyNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventNum']) && ($this->container['eventNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'eventNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['eventNum']) && ($this->container['eventNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventNum', must be bigger than or equal to 0.";
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
    * Gets hostNum
    *  **参数解释**： 开启防护的主机数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释**： 开启防护的主机数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets policyNum
    *  **参数解释**： 策略数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getPolicyNum()
    {
        return $this->container['policyNum'];
    }

    /**
    * Sets policyNum
    *
    * @param int|null $policyNum **参数解释**： 策略数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setPolicyNum($policyNum)
    {
        $this->container['policyNum'] = $policyNum;
        return $this;
    }

    /**
    * Gets eventNum
    *  **参数解释**： 未处理的事件数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getEventNum()
    {
        return $this->container['eventNum'];
    }

    /**
    * Sets eventNum
    *
    * @param int|null $eventNum **参数解释**： 未处理的事件数量 **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setEventNum($eventNum)
    {
        $this->container['eventNum'] = $eventNum;
        return $this;
    }

    /**
    * Gets linuxPropose
    *  **参数解释**： linux的推荐端口配置 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\DecoyPortBasePortStruct[]|null
    */
    public function getLinuxPropose()
    {
        return $this->container['linuxPropose'];
    }

    /**
    * Sets linuxPropose
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\DecoyPortBasePortStruct[]|null $linuxPropose **参数解释**： linux的推荐端口配置 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLinuxPropose($linuxPropose)
    {
        $this->container['linuxPropose'] = $linuxPropose;
        return $this;
    }

    /**
    * Gets windowsPropose
    *  **参数解释**： windows的推荐端口配置 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\DecoyPortBasePortStruct[]|null
    */
    public function getWindowsPropose()
    {
        return $this->container['windowsPropose'];
    }

    /**
    * Sets windowsPropose
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\DecoyPortBasePortStruct[]|null $windowsPropose **参数解释**： windows的推荐端口配置 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setWindowsPropose($windowsPropose)
    {
        $this->container['windowsPropose'] = $windowsPropose;
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

