<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConditionSelectPattern implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConditionSelectPattern';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conditionType  条件类型，SERVICE_HOUR_TIME：时间段 PERIOD_NUM：周期数 PERIOD_TYPE：周期类型，年、月、天、小时 PURCHASE_SCENE：订购场景，订购、续订、变更 NUMBER_OF_PEOPLE：线性大小
    * conditionStatement  条件表达式
    * policyMode  定价策略类型，SIMPLE：简单定价 DIVISION：阶梯定价
    * officialPrice  阶梯官网价，policy_mode取值为SIMPLE时为官网价，如果取值为DIVISION，则价格在division_pattern中。
    * divisionPattern  divisionPattern
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conditionType' => 'string',
            'conditionStatement' => 'string',
            'policyMode' => 'string',
            'officialPrice' => 'string',
            'divisionPattern' => '\HuaweiCloud\SDK\Bssintl\V2\Model\DivisionPattern'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conditionType  条件类型，SERVICE_HOUR_TIME：时间段 PERIOD_NUM：周期数 PERIOD_TYPE：周期类型，年、月、天、小时 PURCHASE_SCENE：订购场景，订购、续订、变更 NUMBER_OF_PEOPLE：线性大小
    * conditionStatement  条件表达式
    * policyMode  定价策略类型，SIMPLE：简单定价 DIVISION：阶梯定价
    * officialPrice  阶梯官网价，policy_mode取值为SIMPLE时为官网价，如果取值为DIVISION，则价格在division_pattern中。
    * divisionPattern  divisionPattern
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conditionType' => null,
        'conditionStatement' => null,
        'policyMode' => null,
        'officialPrice' => null,
        'divisionPattern' => null
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
    * conditionType  条件类型，SERVICE_HOUR_TIME：时间段 PERIOD_NUM：周期数 PERIOD_TYPE：周期类型，年、月、天、小时 PURCHASE_SCENE：订购场景，订购、续订、变更 NUMBER_OF_PEOPLE：线性大小
    * conditionStatement  条件表达式
    * policyMode  定价策略类型，SIMPLE：简单定价 DIVISION：阶梯定价
    * officialPrice  阶梯官网价，policy_mode取值为SIMPLE时为官网价，如果取值为DIVISION，则价格在division_pattern中。
    * divisionPattern  divisionPattern
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conditionType' => 'condition_type',
            'conditionStatement' => 'condition_statement',
            'policyMode' => 'policy_mode',
            'officialPrice' => 'official_price',
            'divisionPattern' => 'division_pattern'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conditionType  条件类型，SERVICE_HOUR_TIME：时间段 PERIOD_NUM：周期数 PERIOD_TYPE：周期类型，年、月、天、小时 PURCHASE_SCENE：订购场景，订购、续订、变更 NUMBER_OF_PEOPLE：线性大小
    * conditionStatement  条件表达式
    * policyMode  定价策略类型，SIMPLE：简单定价 DIVISION：阶梯定价
    * officialPrice  阶梯官网价，policy_mode取值为SIMPLE时为官网价，如果取值为DIVISION，则价格在division_pattern中。
    * divisionPattern  divisionPattern
    *
    * @var string[]
    */
    protected static $setters = [
            'conditionType' => 'setConditionType',
            'conditionStatement' => 'setConditionStatement',
            'policyMode' => 'setPolicyMode',
            'officialPrice' => 'setOfficialPrice',
            'divisionPattern' => 'setDivisionPattern'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conditionType  条件类型，SERVICE_HOUR_TIME：时间段 PERIOD_NUM：周期数 PERIOD_TYPE：周期类型，年、月、天、小时 PURCHASE_SCENE：订购场景，订购、续订、变更 NUMBER_OF_PEOPLE：线性大小
    * conditionStatement  条件表达式
    * policyMode  定价策略类型，SIMPLE：简单定价 DIVISION：阶梯定价
    * officialPrice  阶梯官网价，policy_mode取值为SIMPLE时为官网价，如果取值为DIVISION，则价格在division_pattern中。
    * divisionPattern  divisionPattern
    *
    * @var string[]
    */
    protected static $getters = [
            'conditionType' => 'getConditionType',
            'conditionStatement' => 'getConditionStatement',
            'policyMode' => 'getPolicyMode',
            'officialPrice' => 'getOfficialPrice',
            'divisionPattern' => 'getDivisionPattern'
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
        $this->container['conditionType'] = isset($data['conditionType']) ? $data['conditionType'] : null;
        $this->container['conditionStatement'] = isset($data['conditionStatement']) ? $data['conditionStatement'] : null;
        $this->container['policyMode'] = isset($data['policyMode']) ? $data['policyMode'] : null;
        $this->container['officialPrice'] = isset($data['officialPrice']) ? $data['officialPrice'] : null;
        $this->container['divisionPattern'] = isset($data['divisionPattern']) ? $data['divisionPattern'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['conditionType']) && (mb_strlen($this->container['conditionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'conditionType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['conditionType']) && (mb_strlen($this->container['conditionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'conditionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['conditionStatement']) && (mb_strlen($this->container['conditionStatement']) > 256)) {
                $invalidProperties[] = "invalid value for 'conditionStatement', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['conditionStatement']) && (mb_strlen($this->container['conditionStatement']) < 0)) {
                $invalidProperties[] = "invalid value for 'conditionStatement', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyMode']) && (mb_strlen($this->container['policyMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyMode']) && (mb_strlen($this->container['policyMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['officialPrice']) && (mb_strlen($this->container['officialPrice']) > 64)) {
                $invalidProperties[] = "invalid value for 'officialPrice', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['officialPrice']) && (mb_strlen($this->container['officialPrice']) < 0)) {
                $invalidProperties[] = "invalid value for 'officialPrice', the character length must be bigger than or equal to 0.";
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
    * Gets conditionType
    *  条件类型，SERVICE_HOUR_TIME：时间段 PERIOD_NUM：周期数 PERIOD_TYPE：周期类型，年、月、天、小时 PURCHASE_SCENE：订购场景，订购、续订、变更 NUMBER_OF_PEOPLE：线性大小
    *
    * @return string|null
    */
    public function getConditionType()
    {
        return $this->container['conditionType'];
    }

    /**
    * Sets conditionType
    *
    * @param string|null $conditionType 条件类型，SERVICE_HOUR_TIME：时间段 PERIOD_NUM：周期数 PERIOD_TYPE：周期类型，年、月、天、小时 PURCHASE_SCENE：订购场景，订购、续订、变更 NUMBER_OF_PEOPLE：线性大小
    *
    * @return $this
    */
    public function setConditionType($conditionType)
    {
        $this->container['conditionType'] = $conditionType;
        return $this;
    }

    /**
    * Gets conditionStatement
    *  条件表达式
    *
    * @return string|null
    */
    public function getConditionStatement()
    {
        return $this->container['conditionStatement'];
    }

    /**
    * Sets conditionStatement
    *
    * @param string|null $conditionStatement 条件表达式
    *
    * @return $this
    */
    public function setConditionStatement($conditionStatement)
    {
        $this->container['conditionStatement'] = $conditionStatement;
        return $this;
    }

    /**
    * Gets policyMode
    *  定价策略类型，SIMPLE：简单定价 DIVISION：阶梯定价
    *
    * @return string|null
    */
    public function getPolicyMode()
    {
        return $this->container['policyMode'];
    }

    /**
    * Sets policyMode
    *
    * @param string|null $policyMode 定价策略类型，SIMPLE：简单定价 DIVISION：阶梯定价
    *
    * @return $this
    */
    public function setPolicyMode($policyMode)
    {
        $this->container['policyMode'] = $policyMode;
        return $this;
    }

    /**
    * Gets officialPrice
    *  阶梯官网价，policy_mode取值为SIMPLE时为官网价，如果取值为DIVISION，则价格在division_pattern中。
    *
    * @return string|null
    */
    public function getOfficialPrice()
    {
        return $this->container['officialPrice'];
    }

    /**
    * Sets officialPrice
    *
    * @param string|null $officialPrice 阶梯官网价，policy_mode取值为SIMPLE时为官网价，如果取值为DIVISION，则价格在division_pattern中。
    *
    * @return $this
    */
    public function setOfficialPrice($officialPrice)
    {
        $this->container['officialPrice'] = $officialPrice;
        return $this;
    }

    /**
    * Gets divisionPattern
    *  divisionPattern
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\DivisionPattern|null
    */
    public function getDivisionPattern()
    {
        return $this->container['divisionPattern'];
    }

    /**
    * Sets divisionPattern
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\DivisionPattern|null $divisionPattern divisionPattern
    *
    * @return $this
    */
    public function setDivisionPattern($divisionPattern)
    {
        $this->container['divisionPattern'] = $divisionPattern;
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

