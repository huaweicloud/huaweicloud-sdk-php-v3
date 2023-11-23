<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRegionInfoResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRegionInfoResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceName  服务名称
    * regionList  Region列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceName' => 'string',
            'regionList' => '\HuaweiCloud\SDK\Oms\V2\Model\RegionInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceName  服务名称
    * regionList  Region列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceName' => null,
        'regionList' => null
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
    * serviceName  服务名称
    * regionList  Region列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceName' => 'service_name',
            'regionList' => 'region_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceName  服务名称
    * regionList  Region列表
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceName' => 'setServiceName',
            'regionList' => 'setRegionList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceName  服务名称
    * regionList  Region列表
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceName' => 'getServiceName',
            'regionList' => 'getRegionList'
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
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['regionList'] = isset($data['regionList']) ? $data['regionList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) > 255)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 0.";
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
    * Gets serviceName
    *  服务名称
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 服务名称
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets regionList
    *  Region列表
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\RegionInfo[]|null
    */
    public function getRegionList()
    {
        return $this->container['regionList'];
    }

    /**
    * Sets regionList
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\RegionInfo[]|null $regionList Region列表
    *
    * @return $this
    */
    public function setRegionList($regionList)
    {
        $this->container['regionList'] = $regionList;
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

