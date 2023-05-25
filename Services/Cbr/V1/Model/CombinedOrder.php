<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CombinedOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CombinedOrder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * combinedOrderId  组合订单 ID
    * combinedOrderEcsNum  组合订单中 ECS 服务器数量，当前批量最大为 500。  最小值：1  最大值：1000
    * combinedOrderNum  组合订单数量。  最小值：1  最大值：1000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'combinedOrderId' => 'string',
            'combinedOrderEcsNum' => 'int',
            'combinedOrderNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * combinedOrderId  组合订单 ID
    * combinedOrderEcsNum  组合订单中 ECS 服务器数量，当前批量最大为 500。  最小值：1  最大值：1000
    * combinedOrderNum  组合订单数量。  最小值：1  最大值：1000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'combinedOrderId' => null,
        'combinedOrderEcsNum' => 'int32',
        'combinedOrderNum' => 'int32'
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
    * combinedOrderId  组合订单 ID
    * combinedOrderEcsNum  组合订单中 ECS 服务器数量，当前批量最大为 500。  最小值：1  最大值：1000
    * combinedOrderNum  组合订单数量。  最小值：1  最大值：1000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'combinedOrderId' => 'combined_order_id',
            'combinedOrderEcsNum' => 'combined_order_ecs_num',
            'combinedOrderNum' => 'combined_order_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * combinedOrderId  组合订单 ID
    * combinedOrderEcsNum  组合订单中 ECS 服务器数量，当前批量最大为 500。  最小值：1  最大值：1000
    * combinedOrderNum  组合订单数量。  最小值：1  最大值：1000
    *
    * @var string[]
    */
    protected static $setters = [
            'combinedOrderId' => 'setCombinedOrderId',
            'combinedOrderEcsNum' => 'setCombinedOrderEcsNum',
            'combinedOrderNum' => 'setCombinedOrderNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * combinedOrderId  组合订单 ID
    * combinedOrderEcsNum  组合订单中 ECS 服务器数量，当前批量最大为 500。  最小值：1  最大值：1000
    * combinedOrderNum  组合订单数量。  最小值：1  最大值：1000
    *
    * @var string[]
    */
    protected static $getters = [
            'combinedOrderId' => 'getCombinedOrderId',
            'combinedOrderEcsNum' => 'getCombinedOrderEcsNum',
            'combinedOrderNum' => 'getCombinedOrderNum'
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
        $this->container['combinedOrderId'] = isset($data['combinedOrderId']) ? $data['combinedOrderId'] : null;
        $this->container['combinedOrderEcsNum'] = isset($data['combinedOrderEcsNum']) ? $data['combinedOrderEcsNum'] : null;
        $this->container['combinedOrderNum'] = isset($data['combinedOrderNum']) ? $data['combinedOrderNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['combinedOrderEcsNum']) && ($this->container['combinedOrderEcsNum'] > 1000)) {
                $invalidProperties[] = "invalid value for 'combinedOrderEcsNum', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['combinedOrderEcsNum']) && ($this->container['combinedOrderEcsNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'combinedOrderEcsNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['combinedOrderNum']) && ($this->container['combinedOrderNum'] > 1000)) {
                $invalidProperties[] = "invalid value for 'combinedOrderNum', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['combinedOrderNum']) && ($this->container['combinedOrderNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'combinedOrderNum', must be bigger than or equal to 1.";
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
    * Gets combinedOrderId
    *  组合订单 ID
    *
    * @return string|null
    */
    public function getCombinedOrderId()
    {
        return $this->container['combinedOrderId'];
    }

    /**
    * Sets combinedOrderId
    *
    * @param string|null $combinedOrderId 组合订单 ID
    *
    * @return $this
    */
    public function setCombinedOrderId($combinedOrderId)
    {
        $this->container['combinedOrderId'] = $combinedOrderId;
        return $this;
    }

    /**
    * Gets combinedOrderEcsNum
    *  组合订单中 ECS 服务器数量，当前批量最大为 500。  最小值：1  最大值：1000
    *
    * @return int|null
    */
    public function getCombinedOrderEcsNum()
    {
        return $this->container['combinedOrderEcsNum'];
    }

    /**
    * Sets combinedOrderEcsNum
    *
    * @param int|null $combinedOrderEcsNum 组合订单中 ECS 服务器数量，当前批量最大为 500。  最小值：1  最大值：1000
    *
    * @return $this
    */
    public function setCombinedOrderEcsNum($combinedOrderEcsNum)
    {
        $this->container['combinedOrderEcsNum'] = $combinedOrderEcsNum;
        return $this;
    }

    /**
    * Gets combinedOrderNum
    *  组合订单数量。  最小值：1  最大值：1000
    *
    * @return int|null
    */
    public function getCombinedOrderNum()
    {
        return $this->container['combinedOrderNum'];
    }

    /**
    * Sets combinedOrderNum
    *
    * @param int|null $combinedOrderNum 组合订单数量。  最小值：1  最大值：1000
    *
    * @return $this
    */
    public function setCombinedOrderNum($combinedOrderNum)
    {
        $this->container['combinedOrderNum'] = $combinedOrderNum;
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

