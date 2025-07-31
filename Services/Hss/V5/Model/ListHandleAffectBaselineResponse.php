<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHandleAffectBaselineResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHandleAffectBaselineResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalRuleNum  **参数解释** 该操作影响的范围的总数 **取值范围**   取值0-5000
    * ruleNum  **参数解释** 该操作影响的检查项数 **取值范围**   取值0-5000
    * hostNum  **参数解释** 该操作影响的主机数 **取值范围**   取值0-5000
    * dataList  **参数解释** 该操作影响范围的详细信息的列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalRuleNum' => 'int',
            'ruleNum' => 'int',
            'hostNum' => 'int',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\HandleAffectBaselineInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalRuleNum  **参数解释** 该操作影响的范围的总数 **取值范围**   取值0-5000
    * ruleNum  **参数解释** 该操作影响的检查项数 **取值范围**   取值0-5000
    * hostNum  **参数解释** 该操作影响的主机数 **取值范围**   取值0-5000
    * dataList  **参数解释** 该操作影响范围的详细信息的列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalRuleNum' => 'int32',
        'ruleNum' => 'int32',
        'hostNum' => 'int32',
        'dataList' => null
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
    * totalRuleNum  **参数解释** 该操作影响的范围的总数 **取值范围**   取值0-5000
    * ruleNum  **参数解释** 该操作影响的检查项数 **取值范围**   取值0-5000
    * hostNum  **参数解释** 该操作影响的主机数 **取值范围**   取值0-5000
    * dataList  **参数解释** 该操作影响范围的详细信息的列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalRuleNum' => 'total_rule_num',
            'ruleNum' => 'rule_num',
            'hostNum' => 'host_num',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalRuleNum  **参数解释** 该操作影响的范围的总数 **取值范围**   取值0-5000
    * ruleNum  **参数解释** 该操作影响的检查项数 **取值范围**   取值0-5000
    * hostNum  **参数解释** 该操作影响的主机数 **取值范围**   取值0-5000
    * dataList  **参数解释** 该操作影响范围的详细信息的列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalRuleNum' => 'setTotalRuleNum',
            'ruleNum' => 'setRuleNum',
            'hostNum' => 'setHostNum',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalRuleNum  **参数解释** 该操作影响的范围的总数 **取值范围**   取值0-5000
    * ruleNum  **参数解释** 该操作影响的检查项数 **取值范围**   取值0-5000
    * hostNum  **参数解释** 该操作影响的主机数 **取值范围**   取值0-5000
    * dataList  **参数解释** 该操作影响范围的详细信息的列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalRuleNum' => 'getTotalRuleNum',
            'ruleNum' => 'getRuleNum',
            'hostNum' => 'getHostNum',
            'dataList' => 'getDataList'
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
        $this->container['totalRuleNum'] = isset($data['totalRuleNum']) ? $data['totalRuleNum'] : null;
        $this->container['ruleNum'] = isset($data['ruleNum']) ? $data['ruleNum'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalRuleNum']) && ($this->container['totalRuleNum'] > 5000)) {
                $invalidProperties[] = "invalid value for 'totalRuleNum', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['totalRuleNum']) && ($this->container['totalRuleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalRuleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleNum']) && ($this->container['ruleNum'] > 5000)) {
                $invalidProperties[] = "invalid value for 'ruleNum', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['ruleNum']) && ($this->container['ruleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'ruleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 5000)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
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
    * Gets totalRuleNum
    *  **参数解释** 该操作影响的范围的总数 **取值范围**   取值0-5000
    *
    * @return int|null
    */
    public function getTotalRuleNum()
    {
        return $this->container['totalRuleNum'];
    }

    /**
    * Sets totalRuleNum
    *
    * @param int|null $totalRuleNum **参数解释** 该操作影响的范围的总数 **取值范围**   取值0-5000
    *
    * @return $this
    */
    public function setTotalRuleNum($totalRuleNum)
    {
        $this->container['totalRuleNum'] = $totalRuleNum;
        return $this;
    }

    /**
    * Gets ruleNum
    *  **参数解释** 该操作影响的检查项数 **取值范围**   取值0-5000
    *
    * @return int|null
    */
    public function getRuleNum()
    {
        return $this->container['ruleNum'];
    }

    /**
    * Sets ruleNum
    *
    * @param int|null $ruleNum **参数解释** 该操作影响的检查项数 **取值范围**   取值0-5000
    *
    * @return $this
    */
    public function setRuleNum($ruleNum)
    {
        $this->container['ruleNum'] = $ruleNum;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释** 该操作影响的主机数 **取值范围**   取值0-5000
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
    * @param int|null $hostNum **参数解释** 该操作影响的主机数 **取值范围**   取值0-5000
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets dataList
    *  **参数解释** 该操作影响范围的详细信息的列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HandleAffectBaselineInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HandleAffectBaselineInfo[]|null $dataList **参数解释** 该操作影响范围的详细信息的列表
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

