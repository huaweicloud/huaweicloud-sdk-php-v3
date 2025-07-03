<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateMarketOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateMarketOptions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marketType  计费类型
    * spotOptions  spotOptions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marketType' => 'string',
            'spotOptions' => '\HuaweiCloud\SDK\Ecs\V2\Model\TemplateSpotOptions'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marketType  计费类型
    * spotOptions  spotOptions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marketType' => null,
        'spotOptions' => null
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
    * marketType  计费类型
    * spotOptions  spotOptions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marketType' => 'market_type',
            'spotOptions' => 'spot_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marketType  计费类型
    * spotOptions  spotOptions
    *
    * @var string[]
    */
    protected static $setters = [
            'marketType' => 'setMarketType',
            'spotOptions' => 'setSpotOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marketType  计费类型
    * spotOptions  spotOptions
    *
    * @var string[]
    */
    protected static $getters = [
            'marketType' => 'getMarketType',
            'spotOptions' => 'getSpotOptions'
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
    const MARKET_TYPE_SPOT = 'spot';
    const MARKET_TYPE_POSTPAID = 'postpaid';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMarketTypeAllowableValues()
    {
        return [
            self::MARKET_TYPE_SPOT,
            self::MARKET_TYPE_POSTPAID,
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
        $this->container['marketType'] = isset($data['marketType']) ? $data['marketType'] : null;
        $this->container['spotOptions'] = isset($data['spotOptions']) ? $data['spotOptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getMarketTypeAllowableValues();
                if (!is_null($this->container['marketType']) && !in_array($this->container['marketType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'marketType', must be one of '%s'",
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
    * Gets marketType
    *  计费类型
    *
    * @return string|null
    */
    public function getMarketType()
    {
        return $this->container['marketType'];
    }

    /**
    * Sets marketType
    *
    * @param string|null $marketType 计费类型
    *
    * @return $this
    */
    public function setMarketType($marketType)
    {
        $this->container['marketType'] = $marketType;
        return $this;
    }

    /**
    * Gets spotOptions
    *  spotOptions
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\TemplateSpotOptions|null
    */
    public function getSpotOptions()
    {
        return $this->container['spotOptions'];
    }

    /**
    * Sets spotOptions
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\TemplateSpotOptions|null $spotOptions spotOptions
    *
    * @return $this
    */
    public function setSpotOptions($spotOptions)
    {
        $this->container['spotOptions'] = $spotOptions;
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

