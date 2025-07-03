<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateSpotOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateSpotOptions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * spotPrice  用户愿意为竞价实例每小时支付的最高价格
    * blockDurationMinutes  购买的竞价实例时长
    * instanceInterruptionBehavior  竞价实例中断策略，当前支持immediate
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'spotPrice' => 'float',
            'blockDurationMinutes' => 'int',
            'instanceInterruptionBehavior' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * spotPrice  用户愿意为竞价实例每小时支付的最高价格
    * blockDurationMinutes  购买的竞价实例时长
    * instanceInterruptionBehavior  竞价实例中断策略，当前支持immediate
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'spotPrice' => 'float',
        'blockDurationMinutes' => null,
        'instanceInterruptionBehavior' => null
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
    * spotPrice  用户愿意为竞价实例每小时支付的最高价格
    * blockDurationMinutes  购买的竞价实例时长
    * instanceInterruptionBehavior  竞价实例中断策略，当前支持immediate
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'spotPrice' => 'spot_price',
            'blockDurationMinutes' => 'block_duration_minutes',
            'instanceInterruptionBehavior' => 'instance_interruption_behavior'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * spotPrice  用户愿意为竞价实例每小时支付的最高价格
    * blockDurationMinutes  购买的竞价实例时长
    * instanceInterruptionBehavior  竞价实例中断策略，当前支持immediate
    *
    * @var string[]
    */
    protected static $setters = [
            'spotPrice' => 'setSpotPrice',
            'blockDurationMinutes' => 'setBlockDurationMinutes',
            'instanceInterruptionBehavior' => 'setInstanceInterruptionBehavior'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * spotPrice  用户愿意为竞价实例每小时支付的最高价格
    * blockDurationMinutes  购买的竞价实例时长
    * instanceInterruptionBehavior  竞价实例中断策略，当前支持immediate
    *
    * @var string[]
    */
    protected static $getters = [
            'spotPrice' => 'getSpotPrice',
            'blockDurationMinutes' => 'getBlockDurationMinutes',
            'instanceInterruptionBehavior' => 'getInstanceInterruptionBehavior'
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
        $this->container['spotPrice'] = isset($data['spotPrice']) ? $data['spotPrice'] : null;
        $this->container['blockDurationMinutes'] = isset($data['blockDurationMinutes']) ? $data['blockDurationMinutes'] : null;
        $this->container['instanceInterruptionBehavior'] = isset($data['instanceInterruptionBehavior']) ? $data['instanceInterruptionBehavior'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets spotPrice
    *  用户愿意为竞价实例每小时支付的最高价格
    *
    * @return float|null
    */
    public function getSpotPrice()
    {
        return $this->container['spotPrice'];
    }

    /**
    * Sets spotPrice
    *
    * @param float|null $spotPrice 用户愿意为竞价实例每小时支付的最高价格
    *
    * @return $this
    */
    public function setSpotPrice($spotPrice)
    {
        $this->container['spotPrice'] = $spotPrice;
        return $this;
    }

    /**
    * Gets blockDurationMinutes
    *  购买的竞价实例时长
    *
    * @return int|null
    */
    public function getBlockDurationMinutes()
    {
        return $this->container['blockDurationMinutes'];
    }

    /**
    * Sets blockDurationMinutes
    *
    * @param int|null $blockDurationMinutes 购买的竞价实例时长
    *
    * @return $this
    */
    public function setBlockDurationMinutes($blockDurationMinutes)
    {
        $this->container['blockDurationMinutes'] = $blockDurationMinutes;
        return $this;
    }

    /**
    * Gets instanceInterruptionBehavior
    *  竞价实例中断策略，当前支持immediate
    *
    * @return string|null
    */
    public function getInstanceInterruptionBehavior()
    {
        return $this->container['instanceInterruptionBehavior'];
    }

    /**
    * Sets instanceInterruptionBehavior
    *
    * @param string|null $instanceInterruptionBehavior 竞价实例中断策略，当前支持immediate
    *
    * @return $this
    */
    public function setInstanceInterruptionBehavior($instanceInterruptionBehavior)
    {
        $this->container['instanceInterruptionBehavior'] = $instanceInterruptionBehavior;
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

