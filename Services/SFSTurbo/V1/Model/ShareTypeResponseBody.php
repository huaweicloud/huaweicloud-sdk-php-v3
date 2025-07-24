<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShareTypeResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShareTypeResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shareType  文件系统类型
    * scenario  文件系统场景
    * attribution  attribution
    * specId  文件系统规格ID
    * shareTypeUsage  shareTypeUsage
    * supportPeriod  是否支持包周期
    * availableZones  可用区
    * specCode  文件系统规格编码
    * storageMedia  存储类型
    * features  实例支持的特性列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shareType' => 'string',
            'scenario' => 'string',
            'attribution' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttribution',
            'specId' => 'string',
            'shareTypeUsage' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsage',
            'supportPeriod' => 'bool',
            'availableZones' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeAvailableZone[]',
            'specCode' => 'string',
            'storageMedia' => 'string',
            'features' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shareType  文件系统类型
    * scenario  文件系统场景
    * attribution  attribution
    * specId  文件系统规格ID
    * shareTypeUsage  shareTypeUsage
    * supportPeriod  是否支持包周期
    * availableZones  可用区
    * specCode  文件系统规格编码
    * storageMedia  存储类型
    * features  实例支持的特性列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shareType' => null,
        'scenario' => null,
        'attribution' => null,
        'specId' => null,
        'shareTypeUsage' => null,
        'supportPeriod' => null,
        'availableZones' => null,
        'specCode' => null,
        'storageMedia' => null,
        'features' => null
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
    * shareType  文件系统类型
    * scenario  文件系统场景
    * attribution  attribution
    * specId  文件系统规格ID
    * shareTypeUsage  shareTypeUsage
    * supportPeriod  是否支持包周期
    * availableZones  可用区
    * specCode  文件系统规格编码
    * storageMedia  存储类型
    * features  实例支持的特性列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shareType' => 'share_type',
            'scenario' => 'scenario',
            'attribution' => 'attribution',
            'specId' => 'spec_id',
            'shareTypeUsage' => 'share_type_usage',
            'supportPeriod' => 'support_period',
            'availableZones' => 'available_zones',
            'specCode' => 'spec_code',
            'storageMedia' => 'storage_media',
            'features' => 'features'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shareType  文件系统类型
    * scenario  文件系统场景
    * attribution  attribution
    * specId  文件系统规格ID
    * shareTypeUsage  shareTypeUsage
    * supportPeriod  是否支持包周期
    * availableZones  可用区
    * specCode  文件系统规格编码
    * storageMedia  存储类型
    * features  实例支持的特性列表
    *
    * @var string[]
    */
    protected static $setters = [
            'shareType' => 'setShareType',
            'scenario' => 'setScenario',
            'attribution' => 'setAttribution',
            'specId' => 'setSpecId',
            'shareTypeUsage' => 'setShareTypeUsage',
            'supportPeriod' => 'setSupportPeriod',
            'availableZones' => 'setAvailableZones',
            'specCode' => 'setSpecCode',
            'storageMedia' => 'setStorageMedia',
            'features' => 'setFeatures'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shareType  文件系统类型
    * scenario  文件系统场景
    * attribution  attribution
    * specId  文件系统规格ID
    * shareTypeUsage  shareTypeUsage
    * supportPeriod  是否支持包周期
    * availableZones  可用区
    * specCode  文件系统规格编码
    * storageMedia  存储类型
    * features  实例支持的特性列表
    *
    * @var string[]
    */
    protected static $getters = [
            'shareType' => 'getShareType',
            'scenario' => 'getScenario',
            'attribution' => 'getAttribution',
            'specId' => 'getSpecId',
            'shareTypeUsage' => 'getShareTypeUsage',
            'supportPeriod' => 'getSupportPeriod',
            'availableZones' => 'getAvailableZones',
            'specCode' => 'getSpecCode',
            'storageMedia' => 'getStorageMedia',
            'features' => 'getFeatures'
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
    const STORAGE_MEDIA_HDD = 'HDD';
    const STORAGE_MEDIA_SSD = 'SSD';
    const STORAGE_MEDIA_ESSD = 'ESSD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageMediaAllowableValues()
    {
        return [
            self::STORAGE_MEDIA_HDD,
            self::STORAGE_MEDIA_SSD,
            self::STORAGE_MEDIA_ESSD,
        ];
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
        $this->container['shareType'] = isset($data['shareType']) ? $data['shareType'] : null;
        $this->container['scenario'] = isset($data['scenario']) ? $data['scenario'] : null;
        $this->container['attribution'] = isset($data['attribution']) ? $data['attribution'] : null;
        $this->container['specId'] = isset($data['specId']) ? $data['specId'] : null;
        $this->container['shareTypeUsage'] = isset($data['shareTypeUsage']) ? $data['shareTypeUsage'] : null;
        $this->container['supportPeriod'] = isset($data['supportPeriod']) ? $data['supportPeriod'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['storageMedia'] = isset($data['storageMedia']) ? $data['storageMedia'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStorageMediaAllowableValues();
                if (!is_null($this->container['storageMedia']) && !in_array($this->container['storageMedia'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storageMedia', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets shareType
    *  文件系统类型
    *
    * @return string|null
    */
    public function getShareType()
    {
        return $this->container['shareType'];
    }

    /**
    * Sets shareType
    *
    * @param string|null $shareType 文件系统类型
    *
    * @return $this
    */
    public function setShareType($shareType)
    {
        $this->container['shareType'] = $shareType;
        return $this;
    }

    /**
    * Gets scenario
    *  文件系统场景
    *
    * @return string|null
    */
    public function getScenario()
    {
        return $this->container['scenario'];
    }

    /**
    * Sets scenario
    *
    * @param string|null $scenario 文件系统场景
    *
    * @return $this
    */
    public function setScenario($scenario)
    {
        $this->container['scenario'] = $scenario;
        return $this;
    }

    /**
    * Gets attribution
    *  attribution
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttribution|null
    */
    public function getAttribution()
    {
        return $this->container['attribution'];
    }

    /**
    * Sets attribution
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttribution|null $attribution attribution
    *
    * @return $this
    */
    public function setAttribution($attribution)
    {
        $this->container['attribution'] = $attribution;
        return $this;
    }

    /**
    * Gets specId
    *  文件系统规格ID
    *
    * @return string|null
    */
    public function getSpecId()
    {
        return $this->container['specId'];
    }

    /**
    * Sets specId
    *
    * @param string|null $specId 文件系统规格ID
    *
    * @return $this
    */
    public function setSpecId($specId)
    {
        $this->container['specId'] = $specId;
        return $this;
    }

    /**
    * Gets shareTypeUsage
    *  shareTypeUsage
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsage|null
    */
    public function getShareTypeUsage()
    {
        return $this->container['shareTypeUsage'];
    }

    /**
    * Sets shareTypeUsage
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsage|null $shareTypeUsage shareTypeUsage
    *
    * @return $this
    */
    public function setShareTypeUsage($shareTypeUsage)
    {
        $this->container['shareTypeUsage'] = $shareTypeUsage;
        return $this;
    }

    /**
    * Gets supportPeriod
    *  是否支持包周期
    *
    * @return bool|null
    */
    public function getSupportPeriod()
    {
        return $this->container['supportPeriod'];
    }

    /**
    * Sets supportPeriod
    *
    * @param bool|null $supportPeriod 是否支持包周期
    *
    * @return $this
    */
    public function setSupportPeriod($supportPeriod)
    {
        $this->container['supportPeriod'] = $supportPeriod;
        return $this;
    }

    /**
    * Gets availableZones
    *  可用区
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeAvailableZone[]|null
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeAvailableZone[]|null $availableZones 可用区
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets specCode
    *  文件系统规格编码
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 文件系统规格编码
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets storageMedia
    *  存储类型
    *
    * @return string|null
    */
    public function getStorageMedia()
    {
        return $this->container['storageMedia'];
    }

    /**
    * Sets storageMedia
    *
    * @param string|null $storageMedia 存储类型
    *
    * @return $this
    */
    public function setStorageMedia($storageMedia)
    {
        $this->container['storageMedia'] = $storageMedia;
        return $this;
    }

    /**
    * Gets features
    *  实例支持的特性列表
    *
    * @return string[]|null
    */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
    * Sets features
    *
    * @param string[]|null $features 实例支持的特性列表
    *
    * @return $this
    */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;
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

