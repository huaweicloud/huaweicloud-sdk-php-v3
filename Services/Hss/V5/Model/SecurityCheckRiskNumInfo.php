<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckRiskNumInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckRiskNumInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**： 不涉及
    * compareStatus  **参数解释**： 与上一周期比较的状态 **取值范围**： - lower：降低 - increase：增加 - equals：持平
    * compareNum  **参数解释**： 与上一周期相差的数量的绝对值 **取值范围**： 不涉及
    * highRiskNum  **参数解释**： 高危风险数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalRiskNum' => 'int',
            'compareStatus' => 'string',
            'compareNum' => 'int',
            'highRiskNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**： 不涉及
    * compareStatus  **参数解释**： 与上一周期比较的状态 **取值范围**： - lower：降低 - increase：增加 - equals：持平
    * compareNum  **参数解释**： 与上一周期相差的数量的绝对值 **取值范围**： 不涉及
    * highRiskNum  **参数解释**： 高危风险数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalRiskNum' => 'int64',
        'compareStatus' => null,
        'compareNum' => 'int32',
        'highRiskNum' => 'int32'
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
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**： 不涉及
    * compareStatus  **参数解释**： 与上一周期比较的状态 **取值范围**： - lower：降低 - increase：增加 - equals：持平
    * compareNum  **参数解释**： 与上一周期相差的数量的绝对值 **取值范围**： 不涉及
    * highRiskNum  **参数解释**： 高危风险数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalRiskNum' => 'total_risk_num',
            'compareStatus' => 'compare_status',
            'compareNum' => 'compare_num',
            'highRiskNum' => 'high_risk_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**： 不涉及
    * compareStatus  **参数解释**： 与上一周期比较的状态 **取值范围**： - lower：降低 - increase：增加 - equals：持平
    * compareNum  **参数解释**： 与上一周期相差的数量的绝对值 **取值范围**： 不涉及
    * highRiskNum  **参数解释**： 高危风险数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'totalRiskNum' => 'setTotalRiskNum',
            'compareStatus' => 'setCompareStatus',
            'compareNum' => 'setCompareNum',
            'highRiskNum' => 'setHighRiskNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalRiskNum  **参数解释**： 风险总数 **取值范围**： 不涉及
    * compareStatus  **参数解释**： 与上一周期比较的状态 **取值范围**： - lower：降低 - increase：增加 - equals：持平
    * compareNum  **参数解释**： 与上一周期相差的数量的绝对值 **取值范围**： 不涉及
    * highRiskNum  **参数解释**： 高危风险数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'totalRiskNum' => 'getTotalRiskNum',
            'compareStatus' => 'getCompareStatus',
            'compareNum' => 'getCompareNum',
            'highRiskNum' => 'getHighRiskNum'
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
        $this->container['totalRiskNum'] = isset($data['totalRiskNum']) ? $data['totalRiskNum'] : null;
        $this->container['compareStatus'] = isset($data['compareStatus']) ? $data['compareStatus'] : null;
        $this->container['compareNum'] = isset($data['compareNum']) ? $data['compareNum'] : null;
        $this->container['highRiskNum'] = isset($data['highRiskNum']) ? $data['highRiskNum'] : null;
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
    * Gets totalRiskNum
    *  **参数解释**： 风险总数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getTotalRiskNum()
    {
        return $this->container['totalRiskNum'];
    }

    /**
    * Sets totalRiskNum
    *
    * @param int|null $totalRiskNum **参数解释**： 风险总数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTotalRiskNum($totalRiskNum)
    {
        $this->container['totalRiskNum'] = $totalRiskNum;
        return $this;
    }

    /**
    * Gets compareStatus
    *  **参数解释**： 与上一周期比较的状态 **取值范围**： - lower：降低 - increase：增加 - equals：持平
    *
    * @return string|null
    */
    public function getCompareStatus()
    {
        return $this->container['compareStatus'];
    }

    /**
    * Sets compareStatus
    *
    * @param string|null $compareStatus **参数解释**： 与上一周期比较的状态 **取值范围**： - lower：降低 - increase：增加 - equals：持平
    *
    * @return $this
    */
    public function setCompareStatus($compareStatus)
    {
        $this->container['compareStatus'] = $compareStatus;
        return $this;
    }

    /**
    * Gets compareNum
    *  **参数解释**： 与上一周期相差的数量的绝对值 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getCompareNum()
    {
        return $this->container['compareNum'];
    }

    /**
    * Sets compareNum
    *
    * @param int|null $compareNum **参数解释**： 与上一周期相差的数量的绝对值 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCompareNum($compareNum)
    {
        $this->container['compareNum'] = $compareNum;
        return $this;
    }

    /**
    * Gets highRiskNum
    *  **参数解释**： 高危风险数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getHighRiskNum()
    {
        return $this->container['highRiskNum'];
    }

    /**
    * Sets highRiskNum
    *
    * @param int|null $highRiskNum **参数解释**： 高危风险数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHighRiskNum($highRiskNum)
    {
        $this->container['highRiskNum'] = $highRiskNum;
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

