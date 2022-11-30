<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainRegion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainRegion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  域名
    * regionIspDetails  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'regionIspDetails' => 'map[string,object][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  域名
    * regionIspDetails  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'regionIspDetails' => null
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
    * domainName  域名
    * regionIspDetails  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'regionIspDetails' => 'region_isp_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  域名
    * regionIspDetails  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'regionIspDetails' => 'setRegionIspDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  域名
    * regionIspDetails  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'regionIspDetails' => 'getRegionIspDetails'
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['regionIspDetails'] = isset($data['regionIspDetails']) ? $data['regionIspDetails'] : null;
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
    * Gets domainName
    *  域名
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 域名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets regionIspDetails
    *  指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @return map[string,object][]|null
    */
    public function getRegionIspDetails()
    {
        return $this->container['regionIspDetails'];
    }

    /**
    * Sets regionIspDetails
    *
    * @param map[string,object][]|null $regionIspDetails 指标统计数据列表，如果该时间段内无值，则为空数组[]
    *
    * @return $this
    */
    public function setRegionIspDetails($regionIspDetails)
    {
        $this->container['regionIspDetails'] = $regionIspDetails;
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

