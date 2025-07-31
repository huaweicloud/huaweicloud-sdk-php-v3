<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAttackTotalRespData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAttackTotalResp_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attackCount  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * denyCount  **参数解释**： 阻断次数 **取值范围**： 不涉及
    * permitCount  **参数解释**： 放行次数 **取值范围**： 不涉及
    * riskPorts  **参数解释**： 风险端口 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attackCount' => 'int',
            'denyCount' => 'int',
            'permitCount' => 'int',
            'riskPorts' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attackCount  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * denyCount  **参数解释**： 阻断次数 **取值范围**： 不涉及
    * permitCount  **参数解释**： 放行次数 **取值范围**： 不涉及
    * riskPorts  **参数解释**： 风险端口 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attackCount' => 'int64',
        'denyCount' => 'int64',
        'permitCount' => 'int64',
        'riskPorts' => 'int64'
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
    * attackCount  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * denyCount  **参数解释**： 阻断次数 **取值范围**： 不涉及
    * permitCount  **参数解释**： 放行次数 **取值范围**： 不涉及
    * riskPorts  **参数解释**： 风险端口 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attackCount' => 'attack_count',
            'denyCount' => 'deny_count',
            'permitCount' => 'permit_count',
            'riskPorts' => 'risk_ports'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attackCount  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * denyCount  **参数解释**： 阻断次数 **取值范围**： 不涉及
    * permitCount  **参数解释**： 放行次数 **取值范围**： 不涉及
    * riskPorts  **参数解释**： 风险端口 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'attackCount' => 'setAttackCount',
            'denyCount' => 'setDenyCount',
            'permitCount' => 'setPermitCount',
            'riskPorts' => 'setRiskPorts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attackCount  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * denyCount  **参数解释**： 阻断次数 **取值范围**： 不涉及
    * permitCount  **参数解释**： 放行次数 **取值范围**： 不涉及
    * riskPorts  **参数解释**： 风险端口 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'attackCount' => 'getAttackCount',
            'denyCount' => 'getDenyCount',
            'permitCount' => 'getPermitCount',
            'riskPorts' => 'getRiskPorts'
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
        $this->container['attackCount'] = isset($data['attackCount']) ? $data['attackCount'] : null;
        $this->container['denyCount'] = isset($data['denyCount']) ? $data['denyCount'] : null;
        $this->container['permitCount'] = isset($data['permitCount']) ? $data['permitCount'] : null;
        $this->container['riskPorts'] = isset($data['riskPorts']) ? $data['riskPorts'] : null;
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
    * Gets attackCount
    *  **参数解释**： 攻击次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAttackCount()
    {
        return $this->container['attackCount'];
    }

    /**
    * Sets attackCount
    *
    * @param int|null $attackCount **参数解释**： 攻击次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackCount($attackCount)
    {
        $this->container['attackCount'] = $attackCount;
        return $this;
    }

    /**
    * Gets denyCount
    *  **参数解释**： 阻断次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDenyCount()
    {
        return $this->container['denyCount'];
    }

    /**
    * Sets denyCount
    *
    * @param int|null $denyCount **参数解释**： 阻断次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDenyCount($denyCount)
    {
        $this->container['denyCount'] = $denyCount;
        return $this;
    }

    /**
    * Gets permitCount
    *  **参数解释**： 放行次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getPermitCount()
    {
        return $this->container['permitCount'];
    }

    /**
    * Sets permitCount
    *
    * @param int|null $permitCount **参数解释**： 放行次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPermitCount($permitCount)
    {
        $this->container['permitCount'] = $permitCount;
        return $this;
    }

    /**
    * Gets riskPorts
    *  **参数解释**： 风险端口 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRiskPorts()
    {
        return $this->container['riskPorts'];
    }

    /**
    * Sets riskPorts
    *
    * @param int|null $riskPorts **参数解释**： 风险端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRiskPorts($riskPorts)
    {
        $this->container['riskPorts'] = $riskPorts;
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

