<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertDestGeo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Alert_dest_geo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * latitude  纬度
    * longitude  经度
    * cityCode  城市编码，Beijing | Shanghai
    * countryCode  国家简码，参考ISO 3166-1 alpha-2，例如：CN | US | DE | IT | SG
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'latitude' => 'float',
            'longitude' => 'float',
            'cityCode' => 'string',
            'countryCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * latitude  纬度
    * longitude  经度
    * cityCode  城市编码，Beijing | Shanghai
    * countryCode  国家简码，参考ISO 3166-1 alpha-2，例如：CN | US | DE | IT | SG
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'latitude' => null,
        'longitude' => null,
        'cityCode' => null,
        'countryCode' => null
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
    * latitude  纬度
    * longitude  经度
    * cityCode  城市编码，Beijing | Shanghai
    * countryCode  国家简码，参考ISO 3166-1 alpha-2，例如：CN | US | DE | IT | SG
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'latitude' => 'latitude',
            'longitude' => 'longitude',
            'cityCode' => 'city_code',
            'countryCode' => 'country_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * latitude  纬度
    * longitude  经度
    * cityCode  城市编码，Beijing | Shanghai
    * countryCode  国家简码，参考ISO 3166-1 alpha-2，例如：CN | US | DE | IT | SG
    *
    * @var string[]
    */
    protected static $setters = [
            'latitude' => 'setLatitude',
            'longitude' => 'setLongitude',
            'cityCode' => 'setCityCode',
            'countryCode' => 'setCountryCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * latitude  纬度
    * longitude  经度
    * cityCode  城市编码，Beijing | Shanghai
    * countryCode  国家简码，参考ISO 3166-1 alpha-2，例如：CN | US | DE | IT | SG
    *
    * @var string[]
    */
    protected static $getters = [
            'latitude' => 'getLatitude',
            'longitude' => 'getLongitude',
            'cityCode' => 'getCityCode',
            'countryCode' => 'getCountryCode'
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
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['cityCode'] = isset($data['cityCode']) ? $data['cityCode'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['latitude']) && ($this->container['latitude'] > 9E+1)) {
                $invalidProperties[] = "invalid value for 'latitude', must be smaller than or equal to 9E+1.";
            }
            if (!is_null($this->container['latitude']) && ($this->container['latitude'] < 0)) {
                $invalidProperties[] = "invalid value for 'latitude', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['longitude']) && ($this->container['longitude'] > 1.8E+2)) {
                $invalidProperties[] = "invalid value for 'longitude', must be smaller than or equal to 1.8E+2.";
            }
            if (!is_null($this->container['longitude']) && ($this->container['longitude'] < 0)) {
                $invalidProperties[] = "invalid value for 'longitude', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cityCode']) && (mb_strlen($this->container['cityCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'cityCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cityCode']) && (mb_strlen($this->container['cityCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'cityCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['countryCode']) && (mb_strlen($this->container['countryCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'countryCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['countryCode']) && (mb_strlen($this->container['countryCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'countryCode', the character length must be bigger than or equal to 0.";
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
    * Gets latitude
    *  纬度
    *
    * @return float|null
    */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
    * Sets latitude
    *
    * @param float|null $latitude 纬度
    *
    * @return $this
    */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;
        return $this;
    }

    /**
    * Gets longitude
    *  经度
    *
    * @return float|null
    */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
    * Sets longitude
    *
    * @param float|null $longitude 经度
    *
    * @return $this
    */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;
        return $this;
    }

    /**
    * Gets cityCode
    *  城市编码，Beijing | Shanghai
    *
    * @return string|null
    */
    public function getCityCode()
    {
        return $this->container['cityCode'];
    }

    /**
    * Sets cityCode
    *
    * @param string|null $cityCode 城市编码，Beijing | Shanghai
    *
    * @return $this
    */
    public function setCityCode($cityCode)
    {
        $this->container['cityCode'] = $cityCode;
        return $this;
    }

    /**
    * Gets countryCode
    *  国家简码，参考ISO 3166-1 alpha-2，例如：CN | US | DE | IT | SG
    *
    * @return string|null
    */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
    * Sets countryCode
    *
    * @param string|null $countryCode 国家简码，参考ISO 3166-1 alpha-2，例如：CN | US | DE | IT | SG
    *
    * @return $this
    */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;
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

