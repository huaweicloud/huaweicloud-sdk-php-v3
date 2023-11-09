<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertDuration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertDuration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * duration  集群证书有效时间，单位为天，最小值为1，最大值为1825(5*365，1年固定计365天，忽略闰年影响)；若填-1则为最大值5年。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * duration  集群证书有效时间，单位为天，最小值为1，最大值为1825(5*365，1年固定计365天，忽略闰年影响)；若填-1则为最大值5年。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'duration' => 'int32'
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
    * duration  集群证书有效时间，单位为天，最小值为1，最大值为1825(5*365，1年固定计365天，忽略闰年影响)；若填-1则为最大值5年。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * duration  集群证书有效时间，单位为天，最小值为1，最大值为1825(5*365，1年固定计365天，忽略闰年影响)；若填-1则为最大值5年。
    *
    * @var string[]
    */
    protected static $setters = [
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * duration  集群证书有效时间，单位为天，最小值为1，最大值为1825(5*365，1年固定计365天，忽略闰年影响)；若填-1则为最大值5年。
    *
    * @var string[]
    */
    protected static $getters = [
            'duration' => 'getDuration'
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
            if (($this->container['duration'] > 1825)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 1825.";
            }
            if (($this->container['duration'] < 1)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 1.";
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
    * Gets duration
    *  集群证书有效时间，单位为天，最小值为1，最大值为1825(5*365，1年固定计365天，忽略闰年影响)；若填-1则为最大值5年。
    *
    * @return int
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int $duration 集群证书有效时间，单位为天，最小值为1，最大值为1825(5*365，1年固定计365天，忽略闰年影响)；若填-1则为最大值5年。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

