<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * coverAreaInfo  coverAreaInfo
    * configInfo  configInfo
    * quotaInfo  quotaInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'coverAreaInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectInfoCoverAreaInfo',
            'configInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectInfoConfigInfo',
            'quotaInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectInfoQuotaInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * coverAreaInfo  coverAreaInfo
    * configInfo  configInfo
    * quotaInfo  quotaInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'coverAreaInfo' => null,
        'configInfo' => null,
        'quotaInfo' => null
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
    * coverAreaInfo  coverAreaInfo
    * configInfo  configInfo
    * quotaInfo  quotaInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'coverAreaInfo' => 'cover_area_info',
            'configInfo' => 'config_info',
            'quotaInfo' => 'quota_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * coverAreaInfo  coverAreaInfo
    * configInfo  configInfo
    * quotaInfo  quotaInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'coverAreaInfo' => 'setCoverAreaInfo',
            'configInfo' => 'setConfigInfo',
            'quotaInfo' => 'setQuotaInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * coverAreaInfo  coverAreaInfo
    * configInfo  configInfo
    * quotaInfo  quotaInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'coverAreaInfo' => 'getCoverAreaInfo',
            'configInfo' => 'getConfigInfo',
            'quotaInfo' => 'getQuotaInfo'
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
        $this->container['coverAreaInfo'] = isset($data['coverAreaInfo']) ? $data['coverAreaInfo'] : null;
        $this->container['configInfo'] = isset($data['configInfo']) ? $data['configInfo'] : null;
        $this->container['quotaInfo'] = isset($data['quotaInfo']) ? $data['quotaInfo'] : null;
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
    * Gets coverAreaInfo
    *  coverAreaInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectInfoCoverAreaInfo|null
    */
    public function getCoverAreaInfo()
    {
        return $this->container['coverAreaInfo'];
    }

    /**
    * Sets coverAreaInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectInfoCoverAreaInfo|null $coverAreaInfo coverAreaInfo
    *
    * @return $this
    */
    public function setCoverAreaInfo($coverAreaInfo)
    {
        $this->container['coverAreaInfo'] = $coverAreaInfo;
        return $this;
    }

    /**
    * Gets configInfo
    *  configInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectInfoConfigInfo|null
    */
    public function getConfigInfo()
    {
        return $this->container['configInfo'];
    }

    /**
    * Sets configInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectInfoConfigInfo|null $configInfo configInfo
    *
    * @return $this
    */
    public function setConfigInfo($configInfo)
    {
        $this->container['configInfo'] = $configInfo;
        return $this;
    }

    /**
    * Gets quotaInfo
    *  quotaInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectInfoQuotaInfo|null
    */
    public function getQuotaInfo()
    {
        return $this->container['quotaInfo'];
    }

    /**
    * Sets quotaInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectInfoQuotaInfo|null $quotaInfo quotaInfo
    *
    * @return $this
    */
    public function setQuotaInfo($quotaInfo)
    {
        $this->container['quotaInfo'] = $quotaInfo;
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

