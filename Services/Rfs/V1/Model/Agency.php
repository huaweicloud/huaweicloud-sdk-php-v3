<?php

namespace HuaweiCloud\SDK\Rfs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Agency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Agency';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * providerName  用户使用的provider的名字。如果用户给予的provider_name含有重复的值，则返回400
    * agencyName  对应provider所使用的IAM委托名称，资源编排服务会使用此委托的权限去访问、创建对应provider的资源。agency_name和agency_urn必须有且只有一个存在
    * agencyUrn  委托URN  当用户定义Agency时，agency_name和agency_urn 必须有且只有一个存在。  推荐用户在使用信任委托时给予agency_urn。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'providerName' => 'string',
            'agencyName' => 'string',
            'agencyUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * providerName  用户使用的provider的名字。如果用户给予的provider_name含有重复的值，则返回400
    * agencyName  对应provider所使用的IAM委托名称，资源编排服务会使用此委托的权限去访问、创建对应provider的资源。agency_name和agency_urn必须有且只有一个存在
    * agencyUrn  委托URN  当用户定义Agency时，agency_name和agency_urn 必须有且只有一个存在。  推荐用户在使用信任委托时给予agency_urn。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'providerName' => null,
        'agencyName' => null,
        'agencyUrn' => null
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
    * providerName  用户使用的provider的名字。如果用户给予的provider_name含有重复的值，则返回400
    * agencyName  对应provider所使用的IAM委托名称，资源编排服务会使用此委托的权限去访问、创建对应provider的资源。agency_name和agency_urn必须有且只有一个存在
    * agencyUrn  委托URN  当用户定义Agency时，agency_name和agency_urn 必须有且只有一个存在。  推荐用户在使用信任委托时给予agency_urn。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'providerName' => 'provider_name',
            'agencyName' => 'agency_name',
            'agencyUrn' => 'agency_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * providerName  用户使用的provider的名字。如果用户给予的provider_name含有重复的值，则返回400
    * agencyName  对应provider所使用的IAM委托名称，资源编排服务会使用此委托的权限去访问、创建对应provider的资源。agency_name和agency_urn必须有且只有一个存在
    * agencyUrn  委托URN  当用户定义Agency时，agency_name和agency_urn 必须有且只有一个存在。  推荐用户在使用信任委托时给予agency_urn。
    *
    * @var string[]
    */
    protected static $setters = [
            'providerName' => 'setProviderName',
            'agencyName' => 'setAgencyName',
            'agencyUrn' => 'setAgencyUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * providerName  用户使用的provider的名字。如果用户给予的provider_name含有重复的值，则返回400
    * agencyName  对应provider所使用的IAM委托名称，资源编排服务会使用此委托的权限去访问、创建对应provider的资源。agency_name和agency_urn必须有且只有一个存在
    * agencyUrn  委托URN  当用户定义Agency时，agency_name和agency_urn 必须有且只有一个存在。  推荐用户在使用信任委托时给予agency_urn。
    *
    * @var string[]
    */
    protected static $getters = [
            'providerName' => 'getProviderName',
            'agencyName' => 'getAgencyName',
            'agencyUrn' => 'getAgencyUrn'
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
        $this->container['providerName'] = isset($data['providerName']) ? $data['providerName'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['agencyUrn'] = isset($data['agencyUrn']) ? $data['agencyUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['providerName'] === null) {
            $invalidProperties[] = "'providerName' can't be null";
        }
            if ((mb_strlen($this->container['providerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'providerName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['providerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'providerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agencyUrn']) && !preg_match("/^(iam:\\*?:[A-Za-z0-9-]{1,64}:agency:.{1,64})?$/", $this->container['agencyUrn'])) {
                $invalidProperties[] = "invalid value for 'agencyUrn', must be conform to the pattern /^(iam:\\*?:[A-Za-z0-9-]{1,64}:agency:.{1,64})?$/.";
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
    * Gets providerName
    *  用户使用的provider的名字。如果用户给予的provider_name含有重复的值，则返回400
    *
    * @return string
    */
    public function getProviderName()
    {
        return $this->container['providerName'];
    }

    /**
    * Sets providerName
    *
    * @param string $providerName 用户使用的provider的名字。如果用户给予的provider_name含有重复的值，则返回400
    *
    * @return $this
    */
    public function setProviderName($providerName)
    {
        $this->container['providerName'] = $providerName;
        return $this;
    }

    /**
    * Gets agencyName
    *  对应provider所使用的IAM委托名称，资源编排服务会使用此委托的权限去访问、创建对应provider的资源。agency_name和agency_urn必须有且只有一个存在
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 对应provider所使用的IAM委托名称，资源编排服务会使用此委托的权限去访问、创建对应provider的资源。agency_name和agency_urn必须有且只有一个存在
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets agencyUrn
    *  委托URN  当用户定义Agency时，agency_name和agency_urn 必须有且只有一个存在。  推荐用户在使用信任委托时给予agency_urn。
    *
    * @return string|null
    */
    public function getAgencyUrn()
    {
        return $this->container['agencyUrn'];
    }

    /**
    * Sets agencyUrn
    *
    * @param string|null $agencyUrn 委托URN  当用户定义Agency时，agency_name和agency_urn 必须有且只有一个存在。  推荐用户在使用信任委托时给予agency_urn。
    *
    * @return $this
    */
    public function setAgencyUrn($agencyUrn)
    {
        $this->container['agencyUrn'] = $agencyUrn;
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

