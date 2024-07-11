<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScaleUpExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScaleUpExtendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * periodNum  包周期时长, 包月1-9, 包年1-3
    * periodType  包周期类型, year(包年), month(包月)
    * isAutoRenew  是否自动续费，可选参数，如果不填写，以节点池isAutoRenew属性为准。
    * isAutoPay  是否自动付费，可选参数，如果不填写，以节点池isAutoPay属性为准。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'periodNum' => 'int',
            'periodType' => 'string',
            'isAutoRenew' => 'bool',
            'isAutoPay' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * periodNum  包周期时长, 包月1-9, 包年1-3
    * periodType  包周期类型, year(包年), month(包月)
    * isAutoRenew  是否自动续费，可选参数，如果不填写，以节点池isAutoRenew属性为准。
    * isAutoPay  是否自动付费，可选参数，如果不填写，以节点池isAutoPay属性为准。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'periodNum' => null,
        'periodType' => null,
        'isAutoRenew' => null,
        'isAutoPay' => null
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
    * periodNum  包周期时长, 包月1-9, 包年1-3
    * periodType  包周期类型, year(包年), month(包月)
    * isAutoRenew  是否自动续费，可选参数，如果不填写，以节点池isAutoRenew属性为准。
    * isAutoPay  是否自动付费，可选参数，如果不填写，以节点池isAutoPay属性为准。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'periodNum' => 'periodNum',
            'periodType' => 'periodType',
            'isAutoRenew' => 'isAutoRenew',
            'isAutoPay' => 'isAutoPay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * periodNum  包周期时长, 包月1-9, 包年1-3
    * periodType  包周期类型, year(包年), month(包月)
    * isAutoRenew  是否自动续费，可选参数，如果不填写，以节点池isAutoRenew属性为准。
    * isAutoPay  是否自动付费，可选参数，如果不填写，以节点池isAutoPay属性为准。
    *
    * @var string[]
    */
    protected static $setters = [
            'periodNum' => 'setPeriodNum',
            'periodType' => 'setPeriodType',
            'isAutoRenew' => 'setIsAutoRenew',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * periodNum  包周期时长, 包月1-9, 包年1-3
    * periodType  包周期类型, year(包年), month(包月)
    * isAutoRenew  是否自动续费，可选参数，如果不填写，以节点池isAutoRenew属性为准。
    * isAutoPay  是否自动付费，可选参数，如果不填写，以节点池isAutoPay属性为准。
    *
    * @var string[]
    */
    protected static $getters = [
            'periodNum' => 'getPeriodNum',
            'periodType' => 'getPeriodType',
            'isAutoRenew' => 'getIsAutoRenew',
            'isAutoPay' => 'getIsAutoPay'
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
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
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
    * Gets periodNum
    *  包周期时长, 包月1-9, 包年1-3
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
    * @param int $periodNum 包周期时长, 包月1-9, 包年1-3
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
    *  包周期类型, year(包年), month(包月)
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
    * @param string $periodType 包周期类型, year(包年), month(包月)
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否自动续费，可选参数，如果不填写，以节点池isAutoRenew属性为准。
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
    * @param bool|null $isAutoRenew 是否自动续费，可选参数，如果不填写，以节点池isAutoRenew属性为准。
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动付费，可选参数，如果不填写，以节点池isAutoPay属性为准。
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
    * @param bool|null $isAutoPay 是否自动付费，可选参数，如果不填写，以节点池isAutoPay属性为准。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
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

