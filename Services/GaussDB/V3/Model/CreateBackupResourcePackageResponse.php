<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBackupResourcePackageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBackupResourcePackageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  **参数解释**：  创建备份资源包订单ID。  **取值范围**：  不涉及。
    * specCode  **参数解释**：  备份资源包规格码。  **取值范围**：  不涉及。
    * num  **参数解释**：  备份资源包数量。  **取值范围**：  1-10。
    * periodType  **参数解释**：  订购周期类型。  **取值范围**：  - month：包月。 - year：包年。
    * periodNum  **参数解释**：  订购时间长度。  **取值范围**：  - \"period_type\"为\"month\"时，取值为1~9。 - \"period_type\"为\"year\"时，取值为1~3。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'specCode' => 'string',
            'num' => 'int',
            'periodType' => 'string',
            'periodNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  **参数解释**：  创建备份资源包订单ID。  **取值范围**：  不涉及。
    * specCode  **参数解释**：  备份资源包规格码。  **取值范围**：  不涉及。
    * num  **参数解释**：  备份资源包数量。  **取值范围**：  1-10。
    * periodType  **参数解释**：  订购周期类型。  **取值范围**：  - month：包月。 - year：包年。
    * periodNum  **参数解释**：  订购时间长度。  **取值范围**：  - \"period_type\"为\"month\"时，取值为1~9。 - \"period_type\"为\"year\"时，取值为1~3。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'specCode' => null,
        'num' => 'int32',
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
    * orderId  **参数解释**：  创建备份资源包订单ID。  **取值范围**：  不涉及。
    * specCode  **参数解释**：  备份资源包规格码。  **取值范围**：  不涉及。
    * num  **参数解释**：  备份资源包数量。  **取值范围**：  1-10。
    * periodType  **参数解释**：  订购周期类型。  **取值范围**：  - month：包月。 - year：包年。
    * periodNum  **参数解释**：  订购时间长度。  **取值范围**：  - \"period_type\"为\"month\"时，取值为1~9。 - \"period_type\"为\"year\"时，取值为1~3。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'specCode' => 'spec_code',
            'num' => 'num',
            'periodType' => 'period_type',
            'periodNum' => 'period_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  **参数解释**：  创建备份资源包订单ID。  **取值范围**：  不涉及。
    * specCode  **参数解释**：  备份资源包规格码。  **取值范围**：  不涉及。
    * num  **参数解释**：  备份资源包数量。  **取值范围**：  1-10。
    * periodType  **参数解释**：  订购周期类型。  **取值范围**：  - month：包月。 - year：包年。
    * periodNum  **参数解释**：  订购时间长度。  **取值范围**：  - \"period_type\"为\"month\"时，取值为1~9。 - \"period_type\"为\"year\"时，取值为1~3。
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'specCode' => 'setSpecCode',
            'num' => 'setNum',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  **参数解释**：  创建备份资源包订单ID。  **取值范围**：  不涉及。
    * specCode  **参数解释**：  备份资源包规格码。  **取值范围**：  不涉及。
    * num  **参数解释**：  备份资源包数量。  **取值范围**：  1-10。
    * periodType  **参数解释**：  订购周期类型。  **取值范围**：  - month：包月。 - year：包年。
    * periodNum  **参数解释**：  订购时间长度。  **取值范围**：  - \"period_type\"为\"month\"时，取值为1~9。 - \"period_type\"为\"year\"时，取值为1~3。
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'specCode' => 'getSpecCode',
            'num' => 'getNum',
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
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
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
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 17)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 17.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 17)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 17.";
            }
            if (!is_null($this->container['specCode']) && (mb_strlen($this->container['specCode']) > 20)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['specCode']) && (mb_strlen($this->container['specCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['num']) && ($this->container['num'] > 10)) {
                $invalidProperties[] = "invalid value for 'num', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['num']) && ($this->container['num'] < 1)) {
                $invalidProperties[] = "invalid value for 'num', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getPeriodTypeAllowableValues();
                if (!is_null($this->container['periodType']) && !in_array($this->container['periodType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] > 9)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
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
    * Gets orderId
    *  **参数解释**：  创建备份资源包订单ID。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId **参数解释**：  创建备份资源包订单ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets specCode
    *  **参数解释**：  备份资源包规格码。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode **参数解释**：  备份资源包规格码。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets num
    *  **参数解释**：  备份资源包数量。  **取值范围**：  1-10。
    *
    * @return int|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int|null $num **参数解释**：  备份资源包数量。  **取值范围**：  1-10。
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets periodType
    *  **参数解释**：  订购周期类型。  **取值范围**：  - month：包月。 - year：包年。
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
    * @param string|null $periodType **参数解释**：  订购周期类型。  **取值范围**：  - month：包月。 - year：包年。
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
    *  **参数解释**：  订购时间长度。  **取值范围**：  - \"period_type\"为\"month\"时，取值为1~9。 - \"period_type\"为\"year\"时，取值为1~3。
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
    * @param int|null $periodNum **参数解释**：  订购时间长度。  **取值范围**：  - \"period_type\"为\"month\"时，取值为1~9。 - \"period_type\"为\"year\"时，取值为1~3。
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

