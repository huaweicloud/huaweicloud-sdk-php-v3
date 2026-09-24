<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourceSpecsPriceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourceSpecsPriceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageInfo  pageInfo
    * regionCode  云服务区编码
    * resourceSpecInfos  资源规格列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageInfo' => '\HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecsPricePageInfo',
            'regionCode' => 'string',
            'resourceSpecInfos' => '\HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageInfo  pageInfo
    * regionCode  云服务区编码
    * resourceSpecInfos  资源规格列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageInfo' => null,
        'regionCode' => null,
        'resourceSpecInfos' => null
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
    * pageInfo  pageInfo
    * regionCode  云服务区编码
    * resourceSpecInfos  资源规格列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageInfo' => 'page_info',
            'regionCode' => 'region_code',
            'resourceSpecInfos' => 'resource_spec_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageInfo  pageInfo
    * regionCode  云服务区编码
    * resourceSpecInfos  资源规格列表
    *
    * @var string[]
    */
    protected static $setters = [
            'pageInfo' => 'setPageInfo',
            'regionCode' => 'setRegionCode',
            'resourceSpecInfos' => 'setResourceSpecInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageInfo  pageInfo
    * regionCode  云服务区编码
    * resourceSpecInfos  资源规格列表
    *
    * @var string[]
    */
    protected static $getters = [
            'pageInfo' => 'getPageInfo',
            'regionCode' => 'getRegionCode',
            'resourceSpecInfos' => 'getResourceSpecInfos'
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
        $this->container['pageInfo'] = isset($data['pageInfo']) ? $data['pageInfo'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['resourceSpecInfos'] = isset($data['resourceSpecInfos']) ? $data['resourceSpecInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['regionCode']) && (mb_strlen($this->container['regionCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionCode']) && (mb_strlen($this->container['regionCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be bigger than or equal to 1.";
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
    * Gets pageInfo
    *  pageInfo
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecsPricePageInfo|null
    */
    public function getPageInfo()
    {
        return $this->container['pageInfo'];
    }

    /**
    * Sets pageInfo
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecsPricePageInfo|null $pageInfo pageInfo
    *
    * @return $this
    */
    public function setPageInfo($pageInfo)
    {
        $this->container['pageInfo'] = $pageInfo;
        return $this;
    }

    /**
    * Gets regionCode
    *  云服务区编码
    *
    * @return string|null
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string|null $regionCode 云服务区编码
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets resourceSpecInfos
    *  资源规格列表
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecInfo[]|null
    */
    public function getResourceSpecInfos()
    {
        return $this->container['resourceSpecInfos'];
    }

    /**
    * Sets resourceSpecInfos
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecInfo[]|null $resourceSpecInfos 资源规格列表
    *
    * @return $this
    */
    public function setResourceSpecInfos($resourceSpecInfos)
    {
        $this->container['resourceSpecInfos'] = $resourceSpecInfos;
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

