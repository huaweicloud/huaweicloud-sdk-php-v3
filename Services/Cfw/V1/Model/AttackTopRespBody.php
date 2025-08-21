<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttackTopRespBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttackTopRespBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attackRule  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    * attackType  **参数解释**： TOP攻击类型 **取值范围**： 不涉及
    * dstIp  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： TOP被攻击端口 **取值范围**： 不涉及
    * inSrcIp  **参数解释**： TOP内部攻击来源IP **取值范围**： 不涉及
    * level  **参数解释**： TOP威胁等级 **取值范围**： 不涉及
    * outSrcIp  **参数解释**： TOP外部攻击来源IP **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP攻击来源IP **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attackRule' => '\HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]',
            'attackType' => '\HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]',
            'dstIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]',
            'dstPort' => '\HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]',
            'inSrcIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]',
            'level' => '\HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]',
            'outSrcIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]',
            'srcIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]',
            'srcRegionId' => '\HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attackRule  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    * attackType  **参数解释**： TOP攻击类型 **取值范围**： 不涉及
    * dstIp  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： TOP被攻击端口 **取值范围**： 不涉及
    * inSrcIp  **参数解释**： TOP内部攻击来源IP **取值范围**： 不涉及
    * level  **参数解释**： TOP威胁等级 **取值范围**： 不涉及
    * outSrcIp  **参数解释**： TOP外部攻击来源IP **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP攻击来源IP **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attackRule' => null,
        'attackType' => null,
        'dstIp' => null,
        'dstPort' => null,
        'inSrcIp' => null,
        'level' => null,
        'outSrcIp' => null,
        'srcIp' => null,
        'srcRegionId' => null
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
    * attackRule  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    * attackType  **参数解释**： TOP攻击类型 **取值范围**： 不涉及
    * dstIp  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： TOP被攻击端口 **取值范围**： 不涉及
    * inSrcIp  **参数解释**： TOP内部攻击来源IP **取值范围**： 不涉及
    * level  **参数解释**： TOP威胁等级 **取值范围**： 不涉及
    * outSrcIp  **参数解释**： TOP外部攻击来源IP **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP攻击来源IP **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attackRule' => 'attack_rule',
            'attackType' => 'attack_type',
            'dstIp' => 'dst_ip',
            'dstPort' => 'dst_port',
            'inSrcIp' => 'in_src_ip',
            'level' => 'level',
            'outSrcIp' => 'out_src_ip',
            'srcIp' => 'src_ip',
            'srcRegionId' => 'src_region_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attackRule  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    * attackType  **参数解释**： TOP攻击类型 **取值范围**： 不涉及
    * dstIp  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： TOP被攻击端口 **取值范围**： 不涉及
    * inSrcIp  **参数解释**： TOP内部攻击来源IP **取值范围**： 不涉及
    * level  **参数解释**： TOP威胁等级 **取值范围**： 不涉及
    * outSrcIp  **参数解释**： TOP外部攻击来源IP **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP攻击来源IP **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'attackRule' => 'setAttackRule',
            'attackType' => 'setAttackType',
            'dstIp' => 'setDstIp',
            'dstPort' => 'setDstPort',
            'inSrcIp' => 'setInSrcIp',
            'level' => 'setLevel',
            'outSrcIp' => 'setOutSrcIp',
            'srcIp' => 'setSrcIp',
            'srcRegionId' => 'setSrcRegionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attackRule  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    * attackType  **参数解释**： TOP攻击类型 **取值范围**： 不涉及
    * dstIp  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    * dstPort  **参数解释**： TOP被攻击端口 **取值范围**： 不涉及
    * inSrcIp  **参数解释**： TOP内部攻击来源IP **取值范围**： 不涉及
    * level  **参数解释**： TOP威胁等级 **取值范围**： 不涉及
    * outSrcIp  **参数解释**： TOP外部攻击来源IP **取值范围**： 不涉及
    * srcIp  **参数解释**： TOP攻击来源IP **取值范围**： 不涉及
    * srcRegionId  **参数解释**： 源地区ID **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'attackRule' => 'getAttackRule',
            'attackType' => 'getAttackType',
            'dstIp' => 'getDstIp',
            'dstPort' => 'getDstPort',
            'inSrcIp' => 'getInSrcIp',
            'level' => 'getLevel',
            'outSrcIp' => 'getOutSrcIp',
            'srcIp' => 'getSrcIp',
            'srcRegionId' => 'getSrcRegionId'
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
        $this->container['attackRule'] = isset($data['attackRule']) ? $data['attackRule'] : null;
        $this->container['attackType'] = isset($data['attackType']) ? $data['attackType'] : null;
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['dstPort'] = isset($data['dstPort']) ? $data['dstPort'] : null;
        $this->container['inSrcIp'] = isset($data['inSrcIp']) ? $data['inSrcIp'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['outSrcIp'] = isset($data['outSrcIp']) ? $data['outSrcIp'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['srcRegionId'] = isset($data['srcRegionId']) ? $data['srcRegionId'] : null;
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
    * Gets attackRule
    *  **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null
    */
    public function getAttackRule()
    {
        return $this->container['attackRule'];
    }

    /**
    * Sets attackRule
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null $attackRule **参数解释**： TOP攻击规则 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackRule($attackRule)
    {
        $this->container['attackRule'] = $attackRule;
        return $this;
    }

    /**
    * Gets attackType
    *  **参数解释**： TOP攻击类型 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null
    */
    public function getAttackType()
    {
        return $this->container['attackType'];
    }

    /**
    * Sets attackType
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null $attackType **参数解释**： TOP攻击类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackType($attackType)
    {
        $this->container['attackType'] = $attackType;
        return $this;
    }

    /**
    * Gets dstIp
    *  **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null
    */
    public function getDstIp()
    {
        return $this->container['dstIp'];
    }

    /**
    * Sets dstIp
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null $dstIp **参数解释**： TOP攻击目的IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstIp($dstIp)
    {
        $this->container['dstIp'] = $dstIp;
        return $this;
    }

    /**
    * Gets dstPort
    *  **参数解释**： TOP被攻击端口 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null
    */
    public function getDstPort()
    {
        return $this->container['dstPort'];
    }

    /**
    * Sets dstPort
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null $dstPort **参数解释**： TOP被攻击端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstPort($dstPort)
    {
        $this->container['dstPort'] = $dstPort;
        return $this;
    }

    /**
    * Gets inSrcIp
    *  **参数解释**： TOP内部攻击来源IP **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null
    */
    public function getInSrcIp()
    {
        return $this->container['inSrcIp'];
    }

    /**
    * Sets inSrcIp
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null $inSrcIp **参数解释**： TOP内部攻击来源IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setInSrcIp($inSrcIp)
    {
        $this->container['inSrcIp'] = $inSrcIp;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**： TOP威胁等级 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null $level **参数解释**： TOP威胁等级 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets outSrcIp
    *  **参数解释**： TOP外部攻击来源IP **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null
    */
    public function getOutSrcIp()
    {
        return $this->container['outSrcIp'];
    }

    /**
    * Sets outSrcIp
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null $outSrcIp **参数解释**： TOP外部攻击来源IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOutSrcIp($outSrcIp)
    {
        $this->container['outSrcIp'] = $outSrcIp;
        return $this;
    }

    /**
    * Gets srcIp
    *  **参数解释**： TOP攻击来源IP **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null
    */
    public function getSrcIp()
    {
        return $this->container['srcIp'];
    }

    /**
    * Sets srcIp
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null $srcIp **参数解释**： TOP攻击来源IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcIp($srcIp)
    {
        $this->container['srcIp'] = $srcIp;
        return $this;
    }

    /**
    * Gets srcRegionId
    *  **参数解释**： 源地区ID **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null
    */
    public function getSrcRegionId()
    {
        return $this->container['srcRegionId'];
    }

    /**
    * Sets srcRegionId
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TopInfo[]|null $srcRegionId **参数解释**： 源地区ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcRegionId($srcRegionId)
    {
        $this->container['srcRegionId'] = $srcRegionId;
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

