<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttackReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttackReport';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dstIp  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    * ipsMode  **参数解释**： 入侵防御状态 **取值范围**： 不涉及
    * level  **参数解释**： 攻击等级分布 **取值范围**： 不涉及
    * rule  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP来源IP **取值范围**： 不涉及
    * trend  **参数解释**： 攻击趋势 **取值范围**： 不涉及
    * type  **参数解释**： TOP攻击分布 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dstIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'ipsMode' => 'int',
            'level' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'rule' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'srcIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'trend' => '\HuaweiCloud\SDK\Cfw\V1\Model\TrendVO[]',
            'type' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dstIp  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    * ipsMode  **参数解释**： 入侵防御状态 **取值范围**： 不涉及
    * level  **参数解释**： 攻击等级分布 **取值范围**： 不涉及
    * rule  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP来源IP **取值范围**： 不涉及
    * trend  **参数解释**： 攻击趋势 **取值范围**： 不涉及
    * type  **参数解释**： TOP攻击分布 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dstIp' => null,
        'ipsMode' => 'int32',
        'level' => null,
        'rule' => null,
        'srcIp' => null,
        'trend' => null,
        'type' => null
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
    * dstIp  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    * ipsMode  **参数解释**： 入侵防御状态 **取值范围**： 不涉及
    * level  **参数解释**： 攻击等级分布 **取值范围**： 不涉及
    * rule  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP来源IP **取值范围**： 不涉及
    * trend  **参数解释**： 攻击趋势 **取值范围**： 不涉及
    * type  **参数解释**： TOP攻击分布 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dstIp' => 'dst_ip',
            'ipsMode' => 'ips_mode',
            'level' => 'level',
            'rule' => 'rule',
            'srcIp' => 'src_ip',
            'trend' => 'trend',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dstIp  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    * ipsMode  **参数解释**： 入侵防御状态 **取值范围**： 不涉及
    * level  **参数解释**： 攻击等级分布 **取值范围**： 不涉及
    * rule  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP来源IP **取值范围**： 不涉及
    * trend  **参数解释**： 攻击趋势 **取值范围**： 不涉及
    * type  **参数解释**： TOP攻击分布 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'dstIp' => 'setDstIp',
            'ipsMode' => 'setIpsMode',
            'level' => 'setLevel',
            'rule' => 'setRule',
            'srcIp' => 'setSrcIp',
            'trend' => 'setTrend',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dstIp  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    * ipsMode  **参数解释**： 入侵防御状态 **取值范围**： 不涉及
    * level  **参数解释**： 攻击等级分布 **取值范围**： 不涉及
    * rule  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP来源IP **取值范围**： 不涉及
    * trend  **参数解释**： 攻击趋势 **取值范围**： 不涉及
    * type  **参数解释**： TOP攻击分布 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'dstIp' => 'getDstIp',
            'ipsMode' => 'getIpsMode',
            'level' => 'getLevel',
            'rule' => 'getRule',
            'srcIp' => 'getSrcIp',
            'trend' => 'getTrend',
            'type' => 'getType'
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
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['ipsMode'] = isset($data['ipsMode']) ? $data['ipsMode'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['trend'] = isset($data['trend']) ? $data['trend'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets dstIp
    *  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getDstIp()
    {
        return $this->container['dstIp'];
    }

    /**
    * Sets dstIp
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $dstIp **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstIp($dstIp)
    {
        $this->container['dstIp'] = $dstIp;
        return $this;
    }

    /**
    * Gets ipsMode
    *  **参数解释**： 入侵防御状态 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getIpsMode()
    {
        return $this->container['ipsMode'];
    }

    /**
    * Sets ipsMode
    *
    * @param int|null $ipsMode **参数解释**： 入侵防御状态 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIpsMode($ipsMode)
    {
        $this->container['ipsMode'] = $ipsMode;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**： 攻击等级分布 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $level **参数解释**： 攻击等级分布 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets rule
    *  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $rule **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
        return $this;
    }

    /**
    * Gets srcIp
    *  **参数解释**： TOP来源IP **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getSrcIp()
    {
        return $this->container['srcIp'];
    }

    /**
    * Sets srcIp
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $srcIp **参数解释**： TOP来源IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcIp($srcIp)
    {
        $this->container['srcIp'] = $srcIp;
        return $this;
    }

    /**
    * Gets trend
    *  **参数解释**： 攻击趋势 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TrendVO[]|null
    */
    public function getTrend()
    {
        return $this->container['trend'];
    }

    /**
    * Sets trend
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TrendVO[]|null $trend **参数解释**： 攻击趋势 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTrend($trend)
    {
        $this->container['trend'] = $trend;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： TOP攻击分布 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $type **参数解释**： TOP攻击分布 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

