<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplyCertificateToHostRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplyCertificateToHostRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudHostIds  云模式HTTPS域名id，通过查询云模式防护域名列表（ListHost）接口获取
    * premiumHostIds  独享模式HTTPS域名id，通过独享模式域名列表（ListPremiumHost）接口获取
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudHostIds' => 'string[]',
            'premiumHostIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudHostIds  云模式HTTPS域名id，通过查询云模式防护域名列表（ListHost）接口获取
    * premiumHostIds  独享模式HTTPS域名id，通过独享模式域名列表（ListPremiumHost）接口获取
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudHostIds' => null,
        'premiumHostIds' => null
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
    * cloudHostIds  云模式HTTPS域名id，通过查询云模式防护域名列表（ListHost）接口获取
    * premiumHostIds  独享模式HTTPS域名id，通过独享模式域名列表（ListPremiumHost）接口获取
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudHostIds' => 'cloud_host_ids',
            'premiumHostIds' => 'premium_host_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudHostIds  云模式HTTPS域名id，通过查询云模式防护域名列表（ListHost）接口获取
    * premiumHostIds  独享模式HTTPS域名id，通过独享模式域名列表（ListPremiumHost）接口获取
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudHostIds' => 'setCloudHostIds',
            'premiumHostIds' => 'setPremiumHostIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudHostIds  云模式HTTPS域名id，通过查询云模式防护域名列表（ListHost）接口获取
    * premiumHostIds  独享模式HTTPS域名id，通过独享模式域名列表（ListPremiumHost）接口获取
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudHostIds' => 'getCloudHostIds',
            'premiumHostIds' => 'getPremiumHostIds'
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
        $this->container['cloudHostIds'] = isset($data['cloudHostIds']) ? $data['cloudHostIds'] : null;
        $this->container['premiumHostIds'] = isset($data['premiumHostIds']) ? $data['premiumHostIds'] : null;
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
    * Gets cloudHostIds
    *  云模式HTTPS域名id，通过查询云模式防护域名列表（ListHost）接口获取
    *
    * @return string[]|null
    */
    public function getCloudHostIds()
    {
        return $this->container['cloudHostIds'];
    }

    /**
    * Sets cloudHostIds
    *
    * @param string[]|null $cloudHostIds 云模式HTTPS域名id，通过查询云模式防护域名列表（ListHost）接口获取
    *
    * @return $this
    */
    public function setCloudHostIds($cloudHostIds)
    {
        $this->container['cloudHostIds'] = $cloudHostIds;
        return $this;
    }

    /**
    * Gets premiumHostIds
    *  独享模式HTTPS域名id，通过独享模式域名列表（ListPremiumHost）接口获取
    *
    * @return string[]|null
    */
    public function getPremiumHostIds()
    {
        return $this->container['premiumHostIds'];
    }

    /**
    * Sets premiumHostIds
    *
    * @param string[]|null $premiumHostIds 独享模式HTTPS域名id，通过独享模式域名列表（ListPremiumHost）接口获取
    *
    * @return $this
    */
    public function setPremiumHostIds($premiumHostIds)
    {
        $this->container['premiumHostIds'] = $premiumHostIds;
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

