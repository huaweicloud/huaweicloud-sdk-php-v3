<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OriginHostBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OriginHostBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * originHostType  accelerate：选择加速域名作为回源host域名； customize：使用自定义的域名作为回源host域名；
    * customizeDomain  自定义回源域名，origin_host_type为 customize时传入该参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'originHostType' => 'string',
            'customizeDomain' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * originHostType  accelerate：选择加速域名作为回源host域名； customize：使用自定义的域名作为回源host域名；
    * customizeDomain  自定义回源域名，origin_host_type为 customize时传入该参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'originHostType' => null,
        'customizeDomain' => null
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
    * originHostType  accelerate：选择加速域名作为回源host域名； customize：使用自定义的域名作为回源host域名；
    * customizeDomain  自定义回源域名，origin_host_type为 customize时传入该参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'originHostType' => 'origin_host_type',
            'customizeDomain' => 'customize_domain'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * originHostType  accelerate：选择加速域名作为回源host域名； customize：使用自定义的域名作为回源host域名；
    * customizeDomain  自定义回源域名，origin_host_type为 customize时传入该参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'originHostType' => 'setOriginHostType',
            'customizeDomain' => 'setCustomizeDomain'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * originHostType  accelerate：选择加速域名作为回源host域名； customize：使用自定义的域名作为回源host域名；
    * customizeDomain  自定义回源域名，origin_host_type为 customize时传入该参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'originHostType' => 'getOriginHostType',
            'customizeDomain' => 'getCustomizeDomain'
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
    const ORIGIN_HOST_TYPE_ACCELERATE = 'accelerate';
    const ORIGIN_HOST_TYPE_CUSTOMIZE = 'customize';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOriginHostTypeAllowableValues()
    {
        return [
            self::ORIGIN_HOST_TYPE_ACCELERATE,
            self::ORIGIN_HOST_TYPE_CUSTOMIZE,
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
        $this->container['originHostType'] = isset($data['originHostType']) ? $data['originHostType'] : null;
        $this->container['customizeDomain'] = isset($data['customizeDomain']) ? $data['customizeDomain'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['originHostType'] === null) {
            $invalidProperties[] = "'originHostType' can't be null";
        }
            $allowedValues = $this->getOriginHostTypeAllowableValues();
                if (!is_null($this->container['originHostType']) && !in_array($this->container['originHostType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'originHostType', must be one of '%s'",
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
    * Gets originHostType
    *  accelerate：选择加速域名作为回源host域名； customize：使用自定义的域名作为回源host域名；
    *
    * @return string
    */
    public function getOriginHostType()
    {
        return $this->container['originHostType'];
    }

    /**
    * Sets originHostType
    *
    * @param string $originHostType accelerate：选择加速域名作为回源host域名； customize：使用自定义的域名作为回源host域名；
    *
    * @return $this
    */
    public function setOriginHostType($originHostType)
    {
        $this->container['originHostType'] = $originHostType;
        return $this;
    }

    /**
    * Gets customizeDomain
    *  自定义回源域名，origin_host_type为 customize时传入该参数。
    *
    * @return string|null
    */
    public function getCustomizeDomain()
    {
        return $this->container['customizeDomain'];
    }

    /**
    * Sets customizeDomain
    *
    * @param string|null $customizeDomain 自定义回源域名，origin_host_type为 customize时传入该参数。
    *
    * @return $this
    */
    public function setCustomizeDomain($customizeDomain)
    {
        $this->container['customizeDomain'] = $customizeDomain;
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

