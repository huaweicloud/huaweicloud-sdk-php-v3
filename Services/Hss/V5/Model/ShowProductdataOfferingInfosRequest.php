<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProductdataOfferingInfosRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProductdataOfferingInfosRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  Region ID
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * siteCode  站点信息：   - HWC_CN ：中国站   - HWC_HK ：国际站   - HWC_EU : 欧洲站
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'enterpriseProjectId' => 'string',
            'siteCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  Region ID
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * siteCode  站点信息：   - HWC_CN ：中国站   - HWC_HK ：国际站   - HWC_EU : 欧洲站
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'enterpriseProjectId' => null,
        'siteCode' => null
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
    * region  Region ID
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * siteCode  站点信息：   - HWC_CN ：中国站   - HWC_HK ：国际站   - HWC_EU : 欧洲站
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'enterpriseProjectId' => 'enterprise_project_id',
            'siteCode' => 'site_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  Region ID
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * siteCode  站点信息：   - HWC_CN ：中国站   - HWC_HK ：国际站   - HWC_EU : 欧洲站
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'siteCode' => 'setSiteCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  Region ID
    * enterpriseProjectId  企业项目ID，查询所有企业项目时填写：all_granted_eps
    * siteCode  站点信息：   - HWC_CN ：中国站   - HWC_HK ：国际站   - HWC_EU : 欧洲站
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'siteCode' => 'getSiteCode'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) > 256)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be bigger than or equal to 1.";
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
    * Gets region
    *  Region ID
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region Region ID
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，查询所有企业项目时填写：all_granted_eps
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID，查询所有企业项目时填写：all_granted_eps
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets siteCode
    *  站点信息：   - HWC_CN ：中国站   - HWC_HK ：国际站   - HWC_EU : 欧洲站
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
    * @param string|null $siteCode 站点信息：   - HWC_CN ：中国站   - HWC_HK ：国际站   - HWC_EU : 欧洲站
    *
    * @return $this
    */
    public function setSiteCode($siteCode)
    {
        $this->container['siteCode'] = $siteCode;
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

