<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterInfoResponseDsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterInfoResponse_ds_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * desiredNum  **参数解释** 目标数量 **取值范围** 取值0-65535
    * currentNum  **参数解释** 当前数量 **取值范围** 取值0-65535
    * readyNum  **参数解释** 就绪数量 **取值范围** 取值0-65535
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'desiredNum' => 'int',
            'currentNum' => 'int',
            'readyNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * desiredNum  **参数解释** 目标数量 **取值范围** 取值0-65535
    * currentNum  **参数解释** 当前数量 **取值范围** 取值0-65535
    * readyNum  **参数解释** 就绪数量 **取值范围** 取值0-65535
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'desiredNum' => null,
        'currentNum' => null,
        'readyNum' => null
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
    * desiredNum  **参数解释** 目标数量 **取值范围** 取值0-65535
    * currentNum  **参数解释** 当前数量 **取值范围** 取值0-65535
    * readyNum  **参数解释** 就绪数量 **取值范围** 取值0-65535
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'desiredNum' => 'desired_num',
            'currentNum' => 'current_num',
            'readyNum' => 'ready_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * desiredNum  **参数解释** 目标数量 **取值范围** 取值0-65535
    * currentNum  **参数解释** 当前数量 **取值范围** 取值0-65535
    * readyNum  **参数解释** 就绪数量 **取值范围** 取值0-65535
    *
    * @var string[]
    */
    protected static $setters = [
            'desiredNum' => 'setDesiredNum',
            'currentNum' => 'setCurrentNum',
            'readyNum' => 'setReadyNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * desiredNum  **参数解释** 目标数量 **取值范围** 取值0-65535
    * currentNum  **参数解释** 当前数量 **取值范围** 取值0-65535
    * readyNum  **参数解释** 就绪数量 **取值范围** 取值0-65535
    *
    * @var string[]
    */
    protected static $getters = [
            'desiredNum' => 'getDesiredNum',
            'currentNum' => 'getCurrentNum',
            'readyNum' => 'getReadyNum'
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
        $this->container['desiredNum'] = isset($data['desiredNum']) ? $data['desiredNum'] : null;
        $this->container['currentNum'] = isset($data['currentNum']) ? $data['currentNum'] : null;
        $this->container['readyNum'] = isset($data['readyNum']) ? $data['readyNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['desiredNum']) && ($this->container['desiredNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'desiredNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['desiredNum']) && ($this->container['desiredNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'desiredNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['currentNum']) && ($this->container['currentNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'currentNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['currentNum']) && ($this->container['currentNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'currentNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['readyNum']) && ($this->container['readyNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'readyNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['readyNum']) && ($this->container['readyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'readyNum', must be bigger than or equal to 0.";
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
    * Gets desiredNum
    *  **参数解释** 目标数量 **取值范围** 取值0-65535
    *
    * @return int|null
    */
    public function getDesiredNum()
    {
        return $this->container['desiredNum'];
    }

    /**
    * Sets desiredNum
    *
    * @param int|null $desiredNum **参数解释** 目标数量 **取值范围** 取值0-65535
    *
    * @return $this
    */
    public function setDesiredNum($desiredNum)
    {
        $this->container['desiredNum'] = $desiredNum;
        return $this;
    }

    /**
    * Gets currentNum
    *  **参数解释** 当前数量 **取值范围** 取值0-65535
    *
    * @return int|null
    */
    public function getCurrentNum()
    {
        return $this->container['currentNum'];
    }

    /**
    * Sets currentNum
    *
    * @param int|null $currentNum **参数解释** 当前数量 **取值范围** 取值0-65535
    *
    * @return $this
    */
    public function setCurrentNum($currentNum)
    {
        $this->container['currentNum'] = $currentNum;
        return $this;
    }

    /**
    * Gets readyNum
    *  **参数解释** 就绪数量 **取值范围** 取值0-65535
    *
    * @return int|null
    */
    public function getReadyNum()
    {
        return $this->container['readyNum'];
    }

    /**
    * Sets readyNum
    *
    * @param int|null $readyNum **参数解释** 就绪数量 **取值范围** 取值0-65535
    *
    * @return $this
    */
    public function setReadyNum($readyNum)
    {
        $this->container['readyNum'] = $readyNum;
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

