<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectInfoCoverAreaInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectInfo_cover_area_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectHostNum  **参数解释**: 防护主机数量 **取值范围**: 最小值0，最大值2147483647
    * unProtectHostNum  **参数解释**: 未防护主机数量 **取值范围**: 最小值0，最大值2147483647
    * protectRate  **参数解释**: 防护率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 击败用户率 **取值范围**: 最小值0，最大值1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectHostNum' => 'int',
            'unProtectHostNum' => 'int',
            'protectRate' => 'float',
            'beatRate' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectHostNum  **参数解释**: 防护主机数量 **取值范围**: 最小值0，最大值2147483647
    * unProtectHostNum  **参数解释**: 未防护主机数量 **取值范围**: 最小值0，最大值2147483647
    * protectRate  **参数解释**: 防护率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 击败用户率 **取值范围**: 最小值0，最大值1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectHostNum' => 'int32',
        'unProtectHostNum' => 'int32',
        'protectRate' => 'float',
        'beatRate' => 'float'
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
    * protectHostNum  **参数解释**: 防护主机数量 **取值范围**: 最小值0，最大值2147483647
    * unProtectHostNum  **参数解释**: 未防护主机数量 **取值范围**: 最小值0，最大值2147483647
    * protectRate  **参数解释**: 防护率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 击败用户率 **取值范围**: 最小值0，最大值1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectHostNum' => 'protect_host_num',
            'unProtectHostNum' => 'un_protect_host_num',
            'protectRate' => 'protect_rate',
            'beatRate' => 'beat_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectHostNum  **参数解释**: 防护主机数量 **取值范围**: 最小值0，最大值2147483647
    * unProtectHostNum  **参数解释**: 未防护主机数量 **取值范围**: 最小值0，最大值2147483647
    * protectRate  **参数解释**: 防护率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 击败用户率 **取值范围**: 最小值0，最大值1
    *
    * @var string[]
    */
    protected static $setters = [
            'protectHostNum' => 'setProtectHostNum',
            'unProtectHostNum' => 'setUnProtectHostNum',
            'protectRate' => 'setProtectRate',
            'beatRate' => 'setBeatRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectHostNum  **参数解释**: 防护主机数量 **取值范围**: 最小值0，最大值2147483647
    * unProtectHostNum  **参数解释**: 未防护主机数量 **取值范围**: 最小值0，最大值2147483647
    * protectRate  **参数解释**: 防护率 **取值范围**: 最小值0，最大值1
    * beatRate  **参数解释**: 击败用户率 **取值范围**: 最小值0，最大值1
    *
    * @var string[]
    */
    protected static $getters = [
            'protectHostNum' => 'getProtectHostNum',
            'unProtectHostNum' => 'getUnProtectHostNum',
            'protectRate' => 'getProtectRate',
            'beatRate' => 'getBeatRate'
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
        $this->container['protectHostNum'] = isset($data['protectHostNum']) ? $data['protectHostNum'] : null;
        $this->container['unProtectHostNum'] = isset($data['unProtectHostNum']) ? $data['unProtectHostNum'] : null;
        $this->container['protectRate'] = isset($data['protectRate']) ? $data['protectRate'] : null;
        $this->container['beatRate'] = isset($data['beatRate']) ? $data['beatRate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['protectHostNum']) && ($this->container['protectHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectHostNum']) && ($this->container['protectHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unProtectHostNum']) && ($this->container['unProtectHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unProtectHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unProtectHostNum']) && ($this->container['unProtectHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unProtectHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectRate']) && ($this->container['protectRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'protectRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['protectRate']) && ($this->container['protectRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['beatRate']) && ($this->container['beatRate'] > 1)) {
                $invalidProperties[] = "invalid value for 'beatRate', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['beatRate']) && ($this->container['beatRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'beatRate', must be bigger than or equal to 0.";
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
    * Gets protectHostNum
    *  **参数解释**: 防护主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProtectHostNum()
    {
        return $this->container['protectHostNum'];
    }

    /**
    * Sets protectHostNum
    *
    * @param int|null $protectHostNum **参数解释**: 防护主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProtectHostNum($protectHostNum)
    {
        $this->container['protectHostNum'] = $protectHostNum;
        return $this;
    }

    /**
    * Gets unProtectHostNum
    *  **参数解释**: 未防护主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getUnProtectHostNum()
    {
        return $this->container['unProtectHostNum'];
    }

    /**
    * Sets unProtectHostNum
    *
    * @param int|null $unProtectHostNum **参数解释**: 未防护主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setUnProtectHostNum($unProtectHostNum)
    {
        $this->container['unProtectHostNum'] = $unProtectHostNum;
        return $this;
    }

    /**
    * Gets protectRate
    *  **参数解释**: 防护率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getProtectRate()
    {
        return $this->container['protectRate'];
    }

    /**
    * Sets protectRate
    *
    * @param float|null $protectRate **参数解释**: 防护率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setProtectRate($protectRate)
    {
        $this->container['protectRate'] = $protectRate;
        return $this;
    }

    /**
    * Gets beatRate
    *  **参数解释**: 击败用户率 **取值范围**: 最小值0，最大值1
    *
    * @return float|null
    */
    public function getBeatRate()
    {
        return $this->container['beatRate'];
    }

    /**
    * Sets beatRate
    *
    * @param float|null $beatRate **参数解释**: 击败用户率 **取值范围**: 最小值0，最大值1
    *
    * @return $this
    */
    public function setBeatRate($beatRate)
    {
        $this->container['beatRate'] = $beatRate;
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

