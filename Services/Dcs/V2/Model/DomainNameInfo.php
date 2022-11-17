<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainNameInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainNameInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * supportPublicResolve  是否开启公网域名解析。 - true：开启 - false：未开启
    * isLatestRules  当前域名是否已为最新。 - true：是 - false：否
    * zoneName  域名的区域后缀。
    * historyDomainNames  历史域名信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'supportPublicResolve' => 'bool',
            'isLatestRules' => 'bool',
            'zoneName' => 'string',
            'historyDomainNames' => '\HuaweiCloud\SDK\Dcs\V2\Model\DomainNameEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * supportPublicResolve  是否开启公网域名解析。 - true：开启 - false：未开启
    * isLatestRules  当前域名是否已为最新。 - true：是 - false：否
    * zoneName  域名的区域后缀。
    * historyDomainNames  历史域名信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'supportPublicResolve' => null,
        'isLatestRules' => null,
        'zoneName' => null,
        'historyDomainNames' => null
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
    * supportPublicResolve  是否开启公网域名解析。 - true：开启 - false：未开启
    * isLatestRules  当前域名是否已为最新。 - true：是 - false：否
    * zoneName  域名的区域后缀。
    * historyDomainNames  历史域名信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'supportPublicResolve' => 'support_public_resolve',
            'isLatestRules' => 'is_latest_rules',
            'zoneName' => 'zone_name',
            'historyDomainNames' => 'history_domain_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * supportPublicResolve  是否开启公网域名解析。 - true：开启 - false：未开启
    * isLatestRules  当前域名是否已为最新。 - true：是 - false：否
    * zoneName  域名的区域后缀。
    * historyDomainNames  历史域名信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'supportPublicResolve' => 'setSupportPublicResolve',
            'isLatestRules' => 'setIsLatestRules',
            'zoneName' => 'setZoneName',
            'historyDomainNames' => 'setHistoryDomainNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * supportPublicResolve  是否开启公网域名解析。 - true：开启 - false：未开启
    * isLatestRules  当前域名是否已为最新。 - true：是 - false：否
    * zoneName  域名的区域后缀。
    * historyDomainNames  历史域名信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'supportPublicResolve' => 'getSupportPublicResolve',
            'isLatestRules' => 'getIsLatestRules',
            'zoneName' => 'getZoneName',
            'historyDomainNames' => 'getHistoryDomainNames'
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
        $this->container['supportPublicResolve'] = isset($data['supportPublicResolve']) ? $data['supportPublicResolve'] : null;
        $this->container['isLatestRules'] = isset($data['isLatestRules']) ? $data['isLatestRules'] : null;
        $this->container['zoneName'] = isset($data['zoneName']) ? $data['zoneName'] : null;
        $this->container['historyDomainNames'] = isset($data['historyDomainNames']) ? $data['historyDomainNames'] : null;
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
    * Gets supportPublicResolve
    *  是否开启公网域名解析。 - true：开启 - false：未开启
    *
    * @return bool|null
    */
    public function getSupportPublicResolve()
    {
        return $this->container['supportPublicResolve'];
    }

    /**
    * Sets supportPublicResolve
    *
    * @param bool|null $supportPublicResolve 是否开启公网域名解析。 - true：开启 - false：未开启
    *
    * @return $this
    */
    public function setSupportPublicResolve($supportPublicResolve)
    {
        $this->container['supportPublicResolve'] = $supportPublicResolve;
        return $this;
    }

    /**
    * Gets isLatestRules
    *  当前域名是否已为最新。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getIsLatestRules()
    {
        return $this->container['isLatestRules'];
    }

    /**
    * Sets isLatestRules
    *
    * @param bool|null $isLatestRules 当前域名是否已为最新。 - true：是 - false：否
    *
    * @return $this
    */
    public function setIsLatestRules($isLatestRules)
    {
        $this->container['isLatestRules'] = $isLatestRules;
        return $this;
    }

    /**
    * Gets zoneName
    *  域名的区域后缀。
    *
    * @return string|null
    */
    public function getZoneName()
    {
        return $this->container['zoneName'];
    }

    /**
    * Sets zoneName
    *
    * @param string|null $zoneName 域名的区域后缀。
    *
    * @return $this
    */
    public function setZoneName($zoneName)
    {
        $this->container['zoneName'] = $zoneName;
        return $this;
    }

    /**
    * Gets historyDomainNames
    *  历史域名信息。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\DomainNameEntity[]|null
    */
    public function getHistoryDomainNames()
    {
        return $this->container['historyDomainNames'];
    }

    /**
    * Sets historyDomainNames
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\DomainNameEntity[]|null $historyDomainNames 历史域名信息。
    *
    * @return $this
    */
    public function setHistoryDomainNames($historyDomainNames)
    {
        $this->container['historyDomainNames'] = $historyDomainNames;
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

