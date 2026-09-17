<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SiteInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SiteInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * siteCode  运营站点编码
    * siteName  运营站点名称
    * regions  云服务区信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'siteCode' => 'string',
            'siteName' => 'string',
            'regions' => '\HuaweiCloud\SDK\Bss\V2\Model\RegionInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * siteCode  运营站点编码
    * siteName  运营站点名称
    * regions  云服务区信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'siteCode' => null,
        'siteName' => null,
        'regions' => null
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
    * siteCode  运营站点编码
    * siteName  运营站点名称
    * regions  云服务区信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'siteCode' => 'site_code',
            'siteName' => 'site_name',
            'regions' => 'regions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * siteCode  运营站点编码
    * siteName  运营站点名称
    * regions  云服务区信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'siteCode' => 'setSiteCode',
            'siteName' => 'setSiteName',
            'regions' => 'setRegions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * siteCode  运营站点编码
    * siteName  运营站点名称
    * regions  云服务区信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'siteCode' => 'getSiteCode',
            'siteName' => 'getSiteName',
            'regions' => 'getRegions'
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
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
        $this->container['siteName'] = isset($data['siteName']) ? $data['siteName'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['siteName']) && (mb_strlen($this->container['siteName']) > 256)) {
                $invalidProperties[] = "invalid value for 'siteName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['siteName']) && (mb_strlen($this->container['siteName']) < 0)) {
                $invalidProperties[] = "invalid value for 'siteName', the character length must be bigger than or equal to 0.";
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
    * Gets siteCode
    *  运营站点编码
    *
    * @return string|null
    */
    public function getSiteCode()
    {
        return $this->container['siteCode'];
    }

    /**
    * Sets siteCode
    *
    * @param string|null $siteCode 运营站点编码
    *
    * @return $this
    */
    public function setSiteCode($siteCode)
    {
        $this->container['siteCode'] = $siteCode;
        return $this;
    }

    /**
    * Gets siteName
    *  运营站点名称
    *
    * @return string|null
    */
    public function getSiteName()
    {
        return $this->container['siteName'];
    }

    /**
    * Sets siteName
    *
    * @param string|null $siteName 运营站点名称
    *
    * @return $this
    */
    public function setSiteName($siteName)
    {
        $this->container['siteName'] = $siteName;
        return $this;
    }

    /**
    * Gets regions
    *  云服务区信息列表
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\RegionInfo[]|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\RegionInfo[]|null $regions 云服务区信息列表
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
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

