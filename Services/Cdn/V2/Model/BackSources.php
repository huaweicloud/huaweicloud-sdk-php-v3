<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackSources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'backSources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourcesType  源站类型（\"ipaddr\"：\"源站IP\"，\"domain\"：\"源站域名\"，\"obs_bucket\"：\"OBS桶域名\"）。
    * ipOrDomain  源站IP或者域名。
    * obsBucketType  obs桶类型，“private”： 私有桶， “public”： 公有桶。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourcesType' => 'string',
            'ipOrDomain' => 'string',
            'obsBucketType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourcesType  源站类型（\"ipaddr\"：\"源站IP\"，\"domain\"：\"源站域名\"，\"obs_bucket\"：\"OBS桶域名\"）。
    * ipOrDomain  源站IP或者域名。
    * obsBucketType  obs桶类型，“private”： 私有桶， “public”： 公有桶。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourcesType' => null,
        'ipOrDomain' => null,
        'obsBucketType' => null
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
    * sourcesType  源站类型（\"ipaddr\"：\"源站IP\"，\"domain\"：\"源站域名\"，\"obs_bucket\"：\"OBS桶域名\"）。
    * ipOrDomain  源站IP或者域名。
    * obsBucketType  obs桶类型，“private”： 私有桶， “public”： 公有桶。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourcesType' => 'sources_type',
            'ipOrDomain' => 'ip_or_domain',
            'obsBucketType' => 'obs_bucket_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourcesType  源站类型（\"ipaddr\"：\"源站IP\"，\"domain\"：\"源站域名\"，\"obs_bucket\"：\"OBS桶域名\"）。
    * ipOrDomain  源站IP或者域名。
    * obsBucketType  obs桶类型，“private”： 私有桶， “public”： 公有桶。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourcesType' => 'setSourcesType',
            'ipOrDomain' => 'setIpOrDomain',
            'obsBucketType' => 'setObsBucketType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourcesType  源站类型（\"ipaddr\"：\"源站IP\"，\"domain\"：\"源站域名\"，\"obs_bucket\"：\"OBS桶域名\"）。
    * ipOrDomain  源站IP或者域名。
    * obsBucketType  obs桶类型，“private”： 私有桶， “public”： 公有桶。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourcesType' => 'getSourcesType',
            'ipOrDomain' => 'getIpOrDomain',
            'obsBucketType' => 'getObsBucketType'
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
        $this->container['sourcesType'] = isset($data['sourcesType']) ? $data['sourcesType'] : null;
        $this->container['ipOrDomain'] = isset($data['ipOrDomain']) ? $data['ipOrDomain'] : null;
        $this->container['obsBucketType'] = isset($data['obsBucketType']) ? $data['obsBucketType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourcesType'] === null) {
            $invalidProperties[] = "'sourcesType' can't be null";
        }
        if ($this->container['ipOrDomain'] === null) {
            $invalidProperties[] = "'ipOrDomain' can't be null";
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
    * Gets sourcesType
    *  源站类型（\"ipaddr\"：\"源站IP\"，\"domain\"：\"源站域名\"，\"obs_bucket\"：\"OBS桶域名\"）。
    *
    * @return string
    */
    public function getSourcesType()
    {
        return $this->container['sourcesType'];
    }

    /**
    * Sets sourcesType
    *
    * @param string $sourcesType 源站类型（\"ipaddr\"：\"源站IP\"，\"domain\"：\"源站域名\"，\"obs_bucket\"：\"OBS桶域名\"）。
    *
    * @return $this
    */
    public function setSourcesType($sourcesType)
    {
        $this->container['sourcesType'] = $sourcesType;
        return $this;
    }

    /**
    * Gets ipOrDomain
    *  源站IP或者域名。
    *
    * @return string
    */
    public function getIpOrDomain()
    {
        return $this->container['ipOrDomain'];
    }

    /**
    * Sets ipOrDomain
    *
    * @param string $ipOrDomain 源站IP或者域名。
    *
    * @return $this
    */
    public function setIpOrDomain($ipOrDomain)
    {
        $this->container['ipOrDomain'] = $ipOrDomain;
        return $this;
    }

    /**
    * Gets obsBucketType
    *  obs桶类型，“private”： 私有桶， “public”： 公有桶。
    *
    * @return string|null
    */
    public function getObsBucketType()
    {
        return $this->container['obsBucketType'];
    }

    /**
    * Sets obsBucketType
    *
    * @param string|null $obsBucketType obs桶类型，“private”： 私有桶， “public”： 公有桶。
    *
    * @return $this
    */
    public function setObsBucketType($obsBucketType)
    {
        $this->container['obsBucketType'] = $obsBucketType;
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
