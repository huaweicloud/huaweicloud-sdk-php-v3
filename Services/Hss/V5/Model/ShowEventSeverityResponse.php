<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEventSeverityResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEventSeverityResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    * lowNum  低危数量
    * mediumNum  中危数量
    * highNum  高危数量
    * criticalNum  危急数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'lowNum' => 'int',
            'mediumNum' => 'int',
            'highNum' => 'int',
            'criticalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    * lowNum  低危数量
    * mediumNum  中危数量
    * highNum  高危数量
    * criticalNum  危急数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'lowNum' => 'int32',
        'mediumNum' => 'int32',
        'highNum' => 'int32',
        'criticalNum' => 'int32'
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
    * totalNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    * lowNum  低危数量
    * mediumNum  中危数量
    * highNum  高危数量
    * criticalNum  危急数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'lowNum' => 'low_num',
            'mediumNum' => 'medium_num',
            'highNum' => 'high_num',
            'criticalNum' => 'critical_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    * lowNum  低危数量
    * mediumNum  中危数量
    * highNum  高危数量
    * criticalNum  危急数量
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'lowNum' => 'setLowNum',
            'mediumNum' => 'setMediumNum',
            'highNum' => 'setHighNum',
            'criticalNum' => 'setCriticalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    * lowNum  低危数量
    * mediumNum  中危数量
    * highNum  高危数量
    * criticalNum  危急数量
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'lowNum' => 'getLowNum',
            'mediumNum' => 'getMediumNum',
            'highNum' => 'getHighNum',
            'criticalNum' => 'getCriticalNum'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['lowNum'] = isset($data['lowNum']) ? $data['lowNum'] : null;
        $this->container['mediumNum'] = isset($data['mediumNum']) ? $data['mediumNum'] : null;
        $this->container['highNum'] = isset($data['highNum']) ? $data['highNum'] : null;
        $this->container['criticalNum'] = isset($data['criticalNum']) ? $data['criticalNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lowNum']) && ($this->container['lowNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'lowNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['lowNum']) && ($this->container['lowNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'lowNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mediumNum']) && ($this->container['mediumNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mediumNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mediumNum']) && ($this->container['mediumNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'mediumNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['highNum']) && ($this->container['highNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'highNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['highNum']) && ($this->container['highNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'highNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['criticalNum']) && ($this->container['criticalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'criticalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['criticalNum']) && ($this->container['criticalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'criticalNum', must be bigger than or equal to 0.";
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
    * Gets totalNum
    *  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets lowNum
    *  低危数量
    *
    * @return int|null
    */
    public function getLowNum()
    {
        return $this->container['lowNum'];
    }

    /**
    * Sets lowNum
    *
    * @param int|null $lowNum 低危数量
    *
    * @return $this
    */
    public function setLowNum($lowNum)
    {
        $this->container['lowNum'] = $lowNum;
        return $this;
    }

    /**
    * Gets mediumNum
    *  中危数量
    *
    * @return int|null
    */
    public function getMediumNum()
    {
        return $this->container['mediumNum'];
    }

    /**
    * Sets mediumNum
    *
    * @param int|null $mediumNum 中危数量
    *
    * @return $this
    */
    public function setMediumNum($mediumNum)
    {
        $this->container['mediumNum'] = $mediumNum;
        return $this;
    }

    /**
    * Gets highNum
    *  高危数量
    *
    * @return int|null
    */
    public function getHighNum()
    {
        return $this->container['highNum'];
    }

    /**
    * Sets highNum
    *
    * @param int|null $highNum 高危数量
    *
    * @return $this
    */
    public function setHighNum($highNum)
    {
        $this->container['highNum'] = $highNum;
        return $this;
    }

    /**
    * Gets criticalNum
    *  危急数量
    *
    * @return int|null
    */
    public function getCriticalNum()
    {
        return $this->container['criticalNum'];
    }

    /**
    * Sets criticalNum
    *
    * @param int|null $criticalNum 危急数量
    *
    * @return $this
    */
    public function setCriticalNum($criticalNum)
    {
        $this->container['criticalNum'] = $criticalNum;
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

