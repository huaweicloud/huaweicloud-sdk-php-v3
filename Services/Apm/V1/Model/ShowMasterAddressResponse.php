<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMasterAddressResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMasterAddressResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionName  region的英文名称。
    * masterAddress  APMmaster服务对外暴露的地址，提供服务注册和心跳上报。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionName' => 'string',
            'masterAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionName  region的英文名称。
    * masterAddress  APMmaster服务对外暴露的地址，提供服务注册和心跳上报。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionName' => null,
        'masterAddress' => null
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
    * regionName  region的英文名称。
    * masterAddress  APMmaster服务对外暴露的地址，提供服务注册和心跳上报。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionName' => 'region_name',
            'masterAddress' => 'master_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionName  region的英文名称。
    * masterAddress  APMmaster服务对外暴露的地址，提供服务注册和心跳上报。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionName' => 'setRegionName',
            'masterAddress' => 'setMasterAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionName  region的英文名称。
    * masterAddress  APMmaster服务对外暴露的地址，提供服务注册和心跳上报。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionName' => 'getRegionName',
            'masterAddress' => 'getMasterAddress'
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
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['masterAddress'] = isset($data['masterAddress']) ? $data['masterAddress'] : null;
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
    * Gets regionName
    *  region的英文名称。
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName region的英文名称。
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets masterAddress
    *  APMmaster服务对外暴露的地址，提供服务注册和心跳上报。
    *
    * @return string|null
    */
    public function getMasterAddress()
    {
        return $this->container['masterAddress'];
    }

    /**
    * Sets masterAddress
    *
    * @param string|null $masterAddress APMmaster服务对外暴露的地址，提供服务注册和心跳上报。
    *
    * @return $this
    */
    public function setMasterAddress($masterAddress)
    {
        $this->container['masterAddress'] = $masterAddress;
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

