<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DirectConnectLocationEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DirectConnectLocationEntry';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  专线接入站点资源的ID
    * name  专线接入点的名称
    * regionId  Location所属Region
    * siteCode  专线接入点对应的站点编码
    * address  address
    * locales  locales
    * providerList  可支持的运营商列表。
    * publicBorderGroup  专线接入点所属public_border_group
    * latitude  地理位置纬度
    * longitude  地理位置经度
    * description  描述信息。
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * availablePortSpeeds  接入点内设备可选的端口类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'regionId' => 'string',
            'siteCode' => 'string',
            'address' => '\HuaweiCloud\SDK\Dc\V3\Model\AddressBody',
            'locales' => '\HuaweiCloud\SDK\Dc\V3\Model\LocalesBody',
            'providerList' => '\HuaweiCloud\SDK\Dc\V3\Model\ProviderResponseBody[]',
            'publicBorderGroup' => 'string',
            'latitude' => 'string',
            'longitude' => 'string',
            'description' => 'string',
            'createdTime' => '\DateTime',
            'updatedTime' => '\DateTime',
            'availablePortSpeeds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  专线接入站点资源的ID
    * name  专线接入点的名称
    * regionId  Location所属Region
    * siteCode  专线接入点对应的站点编码
    * address  address
    * locales  locales
    * providerList  可支持的运营商列表。
    * publicBorderGroup  专线接入点所属public_border_group
    * latitude  地理位置纬度
    * longitude  地理位置经度
    * description  描述信息。
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * availablePortSpeeds  接入点内设备可选的端口类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'regionId' => null,
        'siteCode' => null,
        'address' => null,
        'locales' => null,
        'providerList' => null,
        'publicBorderGroup' => null,
        'latitude' => null,
        'longitude' => null,
        'description' => null,
        'createdTime' => 'date-time',
        'updatedTime' => 'date-time',
        'availablePortSpeeds' => null
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
    * id  专线接入站点资源的ID
    * name  专线接入点的名称
    * regionId  Location所属Region
    * siteCode  专线接入点对应的站点编码
    * address  address
    * locales  locales
    * providerList  可支持的运营商列表。
    * publicBorderGroup  专线接入点所属public_border_group
    * latitude  地理位置纬度
    * longitude  地理位置经度
    * description  描述信息。
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * availablePortSpeeds  接入点内设备可选的端口类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'regionId' => 'region_id',
            'siteCode' => 'site_code',
            'address' => 'address',
            'locales' => 'locales',
            'providerList' => 'provider_list',
            'publicBorderGroup' => 'public_border_group',
            'latitude' => 'latitude',
            'longitude' => 'longitude',
            'description' => 'description',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'availablePortSpeeds' => 'available_port_speeds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  专线接入站点资源的ID
    * name  专线接入点的名称
    * regionId  Location所属Region
    * siteCode  专线接入点对应的站点编码
    * address  address
    * locales  locales
    * providerList  可支持的运营商列表。
    * publicBorderGroup  专线接入点所属public_border_group
    * latitude  地理位置纬度
    * longitude  地理位置经度
    * description  描述信息。
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * availablePortSpeeds  接入点内设备可选的端口类型
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'regionId' => 'setRegionId',
            'siteCode' => 'setSiteCode',
            'address' => 'setAddress',
            'locales' => 'setLocales',
            'providerList' => 'setProviderList',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'latitude' => 'setLatitude',
            'longitude' => 'setLongitude',
            'description' => 'setDescription',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'availablePortSpeeds' => 'setAvailablePortSpeeds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  专线接入站点资源的ID
    * name  专线接入点的名称
    * regionId  Location所属Region
    * siteCode  专线接入点对应的站点编码
    * address  address
    * locales  locales
    * providerList  可支持的运营商列表。
    * publicBorderGroup  专线接入点所属public_border_group
    * latitude  地理位置纬度
    * longitude  地理位置经度
    * description  描述信息。
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * availablePortSpeeds  接入点内设备可选的端口类型
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'regionId' => 'getRegionId',
            'siteCode' => 'getSiteCode',
            'address' => 'getAddress',
            'locales' => 'getLocales',
            'providerList' => 'getProviderList',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'latitude' => 'getLatitude',
            'longitude' => 'getLongitude',
            'description' => 'getDescription',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'availablePortSpeeds' => 'getAvailablePortSpeeds'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['locales'] = isset($data['locales']) ? $data['locales'] : null;
        $this->container['providerList'] = isset($data['providerList']) ? $data['providerList'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['availablePortSpeeds'] = isset($data['availablePortSpeeds']) ? $data['availablePortSpeeds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latitude']) && (mb_strlen($this->container['latitude']) > 36)) {
                $invalidProperties[] = "invalid value for 'latitude', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['latitude']) && (mb_strlen($this->container['latitude']) < 0)) {
                $invalidProperties[] = "invalid value for 'latitude', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['longitude']) && (mb_strlen($this->container['longitude']) > 36)) {
                $invalidProperties[] = "invalid value for 'longitude', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['longitude']) && (mb_strlen($this->container['longitude']) < 0)) {
                $invalidProperties[] = "invalid value for 'longitude', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  专线接入站点资源的ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 专线接入站点资源的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  专线接入点的名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 专线接入点的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets regionId
    *  Location所属Region
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId Location所属Region
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets siteCode
    *  专线接入点对应的站点编码
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
    * @param string|null $siteCode 专线接入点对应的站点编码
    *
    * @return $this
    */
    public function setSiteCode($siteCode)
    {
        $this->container['siteCode'] = $siteCode;
        return $this;
    }

    /**
    * Gets address
    *  address
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\AddressBody|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\AddressBody|null $address address
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets locales
    *  locales
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\LocalesBody|null
    */
    public function getLocales()
    {
        return $this->container['locales'];
    }

    /**
    * Sets locales
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\LocalesBody|null $locales locales
    *
    * @return $this
    */
    public function setLocales($locales)
    {
        $this->container['locales'] = $locales;
        return $this;
    }

    /**
    * Gets providerList
    *  可支持的运营商列表。
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\ProviderResponseBody[]|null
    */
    public function getProviderList()
    {
        return $this->container['providerList'];
    }

    /**
    * Sets providerList
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\ProviderResponseBody[]|null $providerList 可支持的运营商列表。
    *
    * @return $this
    */
    public function setProviderList($providerList)
    {
        $this->container['providerList'] = $providerList;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  专线接入点所属public_border_group
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 专线接入点所属public_border_group
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets latitude
    *  地理位置纬度
    *
    * @return string|null
    */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
    * Sets latitude
    *
    * @param string|null $latitude 地理位置纬度
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
    *  地理位置经度
    *
    * @return string|null
    */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
    * Sets longitude
    *
    * @param string|null $longitude 地理位置经度
    *
    * @return $this
    */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;
        return $this;
    }

    /**
    * Gets description
    *  描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param \DateTime|null $createdTime 创建时间。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param \DateTime|null $updatedTime 更新时间。
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets availablePortSpeeds
    *  接入点内设备可选的端口类型
    *
    * @return string[]|null
    */
    public function getAvailablePortSpeeds()
    {
        return $this->container['availablePortSpeeds'];
    }

    /**
    * Sets availablePortSpeeds
    *
    * @param string[]|null $availablePortSpeeds 接入点内设备可选的端口类型
    *
    * @return $this
    */
    public function setAvailablePortSpeeds($availablePortSpeeds)
    {
        $this->container['availablePortSpeeds'] = $availablePortSpeeds;
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

