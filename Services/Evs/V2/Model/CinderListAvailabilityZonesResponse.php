<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CinderListAvailabilityZonesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CinderListAvailabilityZonesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availabilityZoneInfo  查询请求返回的可用分区列表，请参见• [availabilityZoneInfo参数说明](https://support.huaweicloud.com/api-evs/evs_04_2081.html#evs_04_2081__li19751007201910)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availabilityZoneInfo' => '\HuaweiCloud\SDK\Evs\V2\Model\AzInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availabilityZoneInfo  查询请求返回的可用分区列表，请参见• [availabilityZoneInfo参数说明](https://support.huaweicloud.com/api-evs/evs_04_2081.html#evs_04_2081__li19751007201910)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availabilityZoneInfo' => null
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
    * availabilityZoneInfo  查询请求返回的可用分区列表，请参见• [availabilityZoneInfo参数说明](https://support.huaweicloud.com/api-evs/evs_04_2081.html#evs_04_2081__li19751007201910)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availabilityZoneInfo' => 'availabilityZoneInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availabilityZoneInfo  查询请求返回的可用分区列表，请参见• [availabilityZoneInfo参数说明](https://support.huaweicloud.com/api-evs/evs_04_2081.html#evs_04_2081__li19751007201910)。
    *
    * @var string[]
    */
    protected static $setters = [
            'availabilityZoneInfo' => 'setAvailabilityZoneInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availabilityZoneInfo  查询请求返回的可用分区列表，请参见• [availabilityZoneInfo参数说明](https://support.huaweicloud.com/api-evs/evs_04_2081.html#evs_04_2081__li19751007201910)。
    *
    * @var string[]
    */
    protected static $getters = [
            'availabilityZoneInfo' => 'getAvailabilityZoneInfo'
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
        $this->container['availabilityZoneInfo'] = isset($data['availabilityZoneInfo']) ? $data['availabilityZoneInfo'] : null;
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
    * Gets availabilityZoneInfo
    *  查询请求返回的可用分区列表，请参见• [availabilityZoneInfo参数说明](https://support.huaweicloud.com/api-evs/evs_04_2081.html#evs_04_2081__li19751007201910)。
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\AzInfo[]|null
    */
    public function getAvailabilityZoneInfo()
    {
        return $this->container['availabilityZoneInfo'];
    }

    /**
    * Sets availabilityZoneInfo
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\AzInfo[]|null $availabilityZoneInfo 查询请求返回的可用分区列表，请参见• [availabilityZoneInfo参数说明](https://support.huaweicloud.com/api-evs/evs_04_2081.html#evs_04_2081__li19751007201910)。
    *
    * @return $this
    */
    public function setAvailabilityZoneInfo($availabilityZoneInfo)
    {
        $this->container['availabilityZoneInfo'] = $availabilityZoneInfo;
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

