<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EstimateExecutionPlanPriceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EstimateExecutionPlanPriceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currency  币种，枚举值   CNY  元，中国站返回的币种   USD 美元，国际站返回的币种
    * items  执行计划中所有资源的询价结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currency' => 'string',
            'items' => '\HuaweiCloud\SDK\Aos\V1\Model\ItemsResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currency  币种，枚举值   CNY  元，中国站返回的币种   USD 美元，国际站返回的币种
    * items  执行计划中所有资源的询价结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currency' => null,
        'items' => null
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
    * currency  币种，枚举值   CNY  元，中国站返回的币种   USD 美元，国际站返回的币种
    * items  执行计划中所有资源的询价结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currency' => 'currency',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currency  币种，枚举值   CNY  元，中国站返回的币种   USD 美元，国际站返回的币种
    * items  执行计划中所有资源的询价结果
    *
    * @var string[]
    */
    protected static $setters = [
            'currency' => 'setCurrency',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currency  币种，枚举值   CNY  元，中国站返回的币种   USD 美元，国际站返回的币种
    * items  执行计划中所有资源的询价结果
    *
    * @var string[]
    */
    protected static $getters = [
            'currency' => 'getCurrency',
            'items' => 'getItems'
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
    const CURRENCY_CNY = 'CNY';
    const CURRENCY_USD = 'USD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_CNY,
            self::CURRENCY_USD,
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
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCurrencyAllowableValues();
                if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
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
    * Gets currency
    *  币种，枚举值   CNY  元，中国站返回的币种   USD 美元，国际站返回的币种
    *
    * @return string|null
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string|null $currency 币种，枚举值   CNY  元，中国站返回的币种   USD 美元，国际站返回的币种
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets items
    *  执行计划中所有资源的询价结果
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\ItemsResponse[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\ItemsResponse[]|null $items 执行计划中所有资源的询价结果
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

