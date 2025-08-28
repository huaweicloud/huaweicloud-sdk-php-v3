<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRegistryStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRegistryStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * failNum  **参数解释**： 接入异常数量 **取值范围**： 0-100
    * successNum  **参数解释**： 接入成功数量 **取值范围**： 0-100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'failNum' => 'int',
            'successNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * failNum  **参数解释**： 接入异常数量 **取值范围**： 0-100
    * successNum  **参数解释**： 接入成功数量 **取值范围**： 0-100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'failNum' => 'int32',
        'successNum' => 'int32'
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
    * failNum  **参数解释**： 接入异常数量 **取值范围**： 0-100
    * successNum  **参数解释**： 接入成功数量 **取值范围**： 0-100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'failNum' => 'fail_num',
            'successNum' => 'success_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * failNum  **参数解释**： 接入异常数量 **取值范围**： 0-100
    * successNum  **参数解释**： 接入成功数量 **取值范围**： 0-100
    *
    * @var string[]
    */
    protected static $setters = [
            'failNum' => 'setFailNum',
            'successNum' => 'setSuccessNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * failNum  **参数解释**： 接入异常数量 **取值范围**： 0-100
    * successNum  **参数解释**： 接入成功数量 **取值范围**： 0-100
    *
    * @var string[]
    */
    protected static $getters = [
            'failNum' => 'getFailNum',
            'successNum' => 'getSuccessNum'
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
        $this->container['failNum'] = isset($data['failNum']) ? $data['failNum'] : null;
        $this->container['successNum'] = isset($data['successNum']) ? $data['successNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['failNum']) && ($this->container['failNum'] > 100)) {
                $invalidProperties[] = "invalid value for 'failNum', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['failNum']) && ($this->container['failNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['successNum']) && ($this->container['successNum'] > 100)) {
                $invalidProperties[] = "invalid value for 'successNum', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['successNum']) && ($this->container['successNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'successNum', must be bigger than or equal to 0.";
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
    * Gets failNum
    *  **参数解释**： 接入异常数量 **取值范围**： 0-100
    *
    * @return int|null
    */
    public function getFailNum()
    {
        return $this->container['failNum'];
    }

    /**
    * Sets failNum
    *
    * @param int|null $failNum **参数解释**： 接入异常数量 **取值范围**： 0-100
    *
    * @return $this
    */
    public function setFailNum($failNum)
    {
        $this->container['failNum'] = $failNum;
        return $this;
    }

    /**
    * Gets successNum
    *  **参数解释**： 接入成功数量 **取值范围**： 0-100
    *
    * @return int|null
    */
    public function getSuccessNum()
    {
        return $this->container['successNum'];
    }

    /**
    * Sets successNum
    *
    * @param int|null $successNum **参数解释**： 接入成功数量 **取值范围**： 0-100
    *
    * @return $this
    */
    public function setSuccessNum($successNum)
    {
        $this->container['successNum'] = $successNum;
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

