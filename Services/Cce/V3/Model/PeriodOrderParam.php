<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeriodOrderParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'periodOrderParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAutoPay  **参数解释**： 是否自动支付订单费用 **约束限制**： 不涉及 **取值范围**： - true：自动支付 - false：手动支付 **默认取值**： false
    * isAutoRenew  **参数解释**： 是否自动续费 **约束限制**： 不涉及 **取值范围**： - true：自动续费 - false：不自动续费 **默认取值**： false
    * periodNum  **参数解释**： 包周期时间长度，不同局点、不同产品规格支持的范围可能不同，大部分局点支持：1-9月，1-3年，具体以接口返回为准。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * periodType  **参数解释**： 包周期单位 **约束限制**： 不涉及 **取值范围**： - \"month\"：月 - \"year\"：年 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAutoPay' => 'bool',
            'isAutoRenew' => 'bool',
            'periodNum' => 'int',
            'periodType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAutoPay  **参数解释**： 是否自动支付订单费用 **约束限制**： 不涉及 **取值范围**： - true：自动支付 - false：手动支付 **默认取值**： false
    * isAutoRenew  **参数解释**： 是否自动续费 **约束限制**： 不涉及 **取值范围**： - true：自动续费 - false：不自动续费 **默认取值**： false
    * periodNum  **参数解释**： 包周期时间长度，不同局点、不同产品规格支持的范围可能不同，大部分局点支持：1-9月，1-3年，具体以接口返回为准。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * periodType  **参数解释**： 包周期单位 **约束限制**： 不涉及 **取值范围**： - \"month\"：月 - \"year\"：年 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAutoPay' => null,
        'isAutoRenew' => null,
        'periodNum' => 'int32',
        'periodType' => null
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
    * isAutoPay  **参数解释**： 是否自动支付订单费用 **约束限制**： 不涉及 **取值范围**： - true：自动支付 - false：手动支付 **默认取值**： false
    * isAutoRenew  **参数解释**： 是否自动续费 **约束限制**： 不涉及 **取值范围**： - true：自动续费 - false：不自动续费 **默认取值**： false
    * periodNum  **参数解释**： 包周期时间长度，不同局点、不同产品规格支持的范围可能不同，大部分局点支持：1-9月，1-3年，具体以接口返回为准。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * periodType  **参数解释**： 包周期单位 **约束限制**： 不涉及 **取值范围**： - \"month\"：月 - \"year\"：年 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAutoPay' => 'isAutoPay',
            'isAutoRenew' => 'isAutoRenew',
            'periodNum' => 'periodNum',
            'periodType' => 'periodType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAutoPay  **参数解释**： 是否自动支付订单费用 **约束限制**： 不涉及 **取值范围**： - true：自动支付 - false：手动支付 **默认取值**： false
    * isAutoRenew  **参数解释**： 是否自动续费 **约束限制**： 不涉及 **取值范围**： - true：自动续费 - false：不自动续费 **默认取值**： false
    * periodNum  **参数解释**： 包周期时间长度，不同局点、不同产品规格支持的范围可能不同，大部分局点支持：1-9月，1-3年，具体以接口返回为准。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * periodType  **参数解释**： 包周期单位 **约束限制**： 不涉及 **取值范围**： - \"month\"：月 - \"year\"：年 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'isAutoPay' => 'setIsAutoPay',
            'isAutoRenew' => 'setIsAutoRenew',
            'periodNum' => 'setPeriodNum',
            'periodType' => 'setPeriodType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAutoPay  **参数解释**： 是否自动支付订单费用 **约束限制**： 不涉及 **取值范围**： - true：自动支付 - false：手动支付 **默认取值**： false
    * isAutoRenew  **参数解释**： 是否自动续费 **约束限制**： 不涉及 **取值范围**： - true：自动续费 - false：不自动续费 **默认取值**： false
    * periodNum  **参数解释**： 包周期时间长度，不同局点、不同产品规格支持的范围可能不同，大部分局点支持：1-9月，1-3年，具体以接口返回为准。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * periodType  **参数解释**： 包周期单位 **约束限制**： 不涉及 **取值范围**： - \"month\"：月 - \"year\"：年 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'isAutoPay' => 'getIsAutoPay',
            'isAutoRenew' => 'getIsAutoRenew',
            'periodNum' => 'getPeriodNum',
            'periodType' => 'getPeriodType'
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
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
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
    * Gets isAutoPay
    *  **参数解释**： 是否自动支付订单费用 **约束限制**： 不涉及 **取值范围**： - true：自动支付 - false：手动支付 **默认取值**： false
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay **参数解释**： 是否自动支付订单费用 **约束限制**： 不涉及 **取值范围**： - true：自动支付 - false：手动支付 **默认取值**： false
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  **参数解释**： 是否自动续费 **约束限制**： 不涉及 **取值范围**： - true：自动续费 - false：不自动续费 **默认取值**： false
    *
    * @return bool|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param bool|null $isAutoRenew **参数解释**： 是否自动续费 **约束限制**： 不涉及 **取值范围**： - true：自动续费 - false：不自动续费 **默认取值**： false
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets periodNum
    *  **参数解释**： 包周期时间长度，不同局点、不同产品规格支持的范围可能不同，大部分局点支持：1-9月，1-3年，具体以接口返回为准。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum **参数解释**： 包周期时间长度，不同局点、不同产品规格支持的范围可能不同，大部分局点支持：1-9月，1-3年，具体以接口返回为准。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets periodType
    *  **参数解释**： 包周期单位 **约束限制**： 不涉及 **取值范围**： - \"month\"：月 - \"year\"：年 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string $periodType **参数解释**： 包周期单位 **约束限制**： 不涉及 **取值范围**： - \"month\"：月 - \"year\"：年 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
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

