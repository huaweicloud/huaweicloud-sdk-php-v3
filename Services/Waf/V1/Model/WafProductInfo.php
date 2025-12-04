<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WafProductInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WafProductInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceSpecCode  waf规格   -  professional：标准   - enterprise：专业   - ultimate：企业版
    * periodType  **参数解释：** 订购周期类型标识，用于指定套餐的订购时间周期单位 **约束限制：** 不涉及 **取值范围：**  - month:月  - year:年 **默认取值：** 不涉及
    * periodNum  订购周期数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceSpecCode' => 'string',
            'periodType' => 'string',
            'periodNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceSpecCode  waf规格   -  professional：标准   - enterprise：专业   - ultimate：企业版
    * periodType  **参数解释：** 订购周期类型标识，用于指定套餐的订购时间周期单位 **约束限制：** 不涉及 **取值范围：**  - month:月  - year:年 **默认取值：** 不涉及
    * periodNum  订购周期数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceSpecCode' => null,
        'periodType' => null,
        'periodNum' => 'int32'
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
    * resourceSpecCode  waf规格   -  professional：标准   - enterprise：专业   - ultimate：企业版
    * periodType  **参数解释：** 订购周期类型标识，用于指定套餐的订购时间周期单位 **约束限制：** 不涉及 **取值范围：**  - month:月  - year:年 **默认取值：** 不涉及
    * periodNum  订购周期数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceSpecCode' => 'resource_spec_code',
            'periodType' => 'period_type',
            'periodNum' => 'period_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceSpecCode  waf规格   -  professional：标准   - enterprise：专业   - ultimate：企业版
    * periodType  **参数解释：** 订购周期类型标识，用于指定套餐的订购时间周期单位 **约束限制：** 不涉及 **取值范围：**  - month:月  - year:年 **默认取值：** 不涉及
    * periodNum  订购周期数
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceSpecCode' => 'setResourceSpecCode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceSpecCode  waf规格   -  professional：标准   - enterprise：专业   - ultimate：企业版
    * periodType  **参数解释：** 订购周期类型标识，用于指定套餐的订购时间周期单位 **约束限制：** 不涉及 **取值范围：**  - month:月  - year:年 **默认取值：** 不涉及
    * periodNum  订购周期数
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceSpecCode' => 'getResourceSpecCode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum'
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
    const PERIOD_TYPE_MONTH = 'month';
    const PERIOD_TYPE_YEAR = 'year';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_MONTH,
            self::PERIOD_TYPE_YEAR,
        ];
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
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPeriodTypeAllowableValues();
                if (!is_null($this->container['periodType']) && !in_array($this->container['periodType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets resourceSpecCode
    *  waf规格   -  professional：标准   - enterprise：专业   - ultimate：企业版
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode waf规格   -  professional：标准   - enterprise：专业   - ultimate：企业版
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets periodType
    *  **参数解释：** 订购周期类型标识，用于指定套餐的订购时间周期单位 **约束限制：** 不涉及 **取值范围：**  - month:月  - year:年 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string|null $periodType **参数解释：** 订购周期类型标识，用于指定套餐的订购时间周期单位 **约束限制：** 不涉及 **取值范围：**  - month:月  - year:年 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  订购周期数
    *
    * @return int|null
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int|null $periodNum 订购周期数
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
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

