<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOverviewsClassificationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOverviewsClassificationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  domain
    * attackType  attackType
    * ip  ip
    * url  url
    * geo  geo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => '\HuaweiCloud\SDK\Waf\V1\Model\DomainClassificationItem',
            'attackType' => '\HuaweiCloud\SDK\Waf\V1\Model\AttackTypeClassificationItem',
            'ip' => '\HuaweiCloud\SDK\Waf\V1\Model\IpClassificationItem',
            'url' => '\HuaweiCloud\SDK\Waf\V1\Model\UrlClassificationItem',
            'geo' => '\HuaweiCloud\SDK\Waf\V1\Model\GeoClassificationItem'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  domain
    * attackType  attackType
    * ip  ip
    * url  url
    * geo  geo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'attackType' => null,
        'ip' => null,
        'url' => null,
        'geo' => null
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
    * domain  domain
    * attackType  attackType
    * ip  ip
    * url  url
    * geo  geo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'attackType' => 'attack_type',
            'ip' => 'ip',
            'url' => 'url',
            'geo' => 'geo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  domain
    * attackType  attackType
    * ip  ip
    * url  url
    * geo  geo
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'attackType' => 'setAttackType',
            'ip' => 'setIp',
            'url' => 'setUrl',
            'geo' => 'setGeo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  domain
    * attackType  attackType
    * ip  ip
    * url  url
    * geo  geo
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'attackType' => 'getAttackType',
            'ip' => 'getIp',
            'url' => 'getUrl',
            'geo' => 'getGeo'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['attackType'] = isset($data['attackType']) ? $data['attackType'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['geo'] = isset($data['geo']) ? $data['geo'] : null;
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
    * Gets domain
    *  domain
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\DomainClassificationItem|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\DomainClassificationItem|null $domain domain
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets attackType
    *  attackType
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\AttackTypeClassificationItem|null
    */
    public function getAttackType()
    {
        return $this->container['attackType'];
    }

    /**
    * Sets attackType
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\AttackTypeClassificationItem|null $attackType attackType
    *
    * @return $this
    */
    public function setAttackType($attackType)
    {
        $this->container['attackType'] = $attackType;
        return $this;
    }

    /**
    * Gets ip
    *  ip
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\IpClassificationItem|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\IpClassificationItem|null $ip ip
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets url
    *  url
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\UrlClassificationItem|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\UrlClassificationItem|null $url url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets geo
    *  geo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\GeoClassificationItem|null
    */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
    * Sets geo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\GeoClassificationItem|null $geo geo
    *
    * @return $this
    */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;
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

