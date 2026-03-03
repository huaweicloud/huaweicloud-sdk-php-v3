<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertDistinguishedName implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertDistinguishedName';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commonName  证书通用名称（CN），名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、\"*\"、字母、数字、汉字组成，长度不能超过64位字符。
    * country  国家编码，只能由英文组成，长度为2位字符。若不传入，则默认继承父CA对应的值。
    * state  省市名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    * locality  地区名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    * organization  组织名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    * organizationalUnit  组织单元名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commonName' => 'string',
            'country' => 'string',
            'state' => 'string',
            'locality' => 'string',
            'organization' => 'string',
            'organizationalUnit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commonName  证书通用名称（CN），名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、\"*\"、字母、数字、汉字组成，长度不能超过64位字符。
    * country  国家编码，只能由英文组成，长度为2位字符。若不传入，则默认继承父CA对应的值。
    * state  省市名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    * locality  地区名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    * organization  组织名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    * organizationalUnit  组织单元名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commonName' => null,
        'country' => null,
        'state' => null,
        'locality' => null,
        'organization' => null,
        'organizationalUnit' => null
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
    * commonName  证书通用名称（CN），名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、\"*\"、字母、数字、汉字组成，长度不能超过64位字符。
    * country  国家编码，只能由英文组成，长度为2位字符。若不传入，则默认继承父CA对应的值。
    * state  省市名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    * locality  地区名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    * organization  组织名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    * organizationalUnit  组织单元名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commonName' => 'common_name',
            'country' => 'country',
            'state' => 'state',
            'locality' => 'locality',
            'organization' => 'organization',
            'organizationalUnit' => 'organizational_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commonName  证书通用名称（CN），名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、\"*\"、字母、数字、汉字组成，长度不能超过64位字符。
    * country  国家编码，只能由英文组成，长度为2位字符。若不传入，则默认继承父CA对应的值。
    * state  省市名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    * locality  地区名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    * organization  组织名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    * organizationalUnit  组织单元名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    *
    * @var string[]
    */
    protected static $setters = [
            'commonName' => 'setCommonName',
            'country' => 'setCountry',
            'state' => 'setState',
            'locality' => 'setLocality',
            'organization' => 'setOrganization',
            'organizationalUnit' => 'setOrganizationalUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commonName  证书通用名称（CN），名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、\"*\"、字母、数字、汉字组成，长度不能超过64位字符。
    * country  国家编码，只能由英文组成，长度为2位字符。若不传入，则默认继承父CA对应的值。
    * state  省市名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    * locality  地区名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    * organization  组织名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    * organizationalUnit  组织单元名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    *
    * @var string[]
    */
    protected static $getters = [
            'commonName' => 'getCommonName',
            'country' => 'getCountry',
            'state' => 'getState',
            'locality' => 'getLocality',
            'organization' => 'getOrganization',
            'organizationalUnit' => 'getOrganizationalUnit'
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
        $this->container['commonName'] = isset($data['commonName']) ? $data['commonName'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['organizationalUnit'] = isset($data['organizationalUnit']) ? $data['organizationalUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['commonName'] === null) {
            $invalidProperties[] = "'commonName' can't be null";
        }
            if ((mb_strlen($this->container['commonName']) > 64)) {
                $invalidProperties[] = "invalid value for 'commonName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['commonName']) < 1)) {
                $invalidProperties[] = "invalid value for 'commonName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 2)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 2)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 128)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['locality']) && (mb_strlen($this->container['locality']) > 128)) {
                $invalidProperties[] = "invalid value for 'locality', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['locality']) && (mb_strlen($this->container['locality']) < 1)) {
                $invalidProperties[] = "invalid value for 'locality', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) > 64)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) < 1)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['organizationalUnit']) && (mb_strlen($this->container['organizationalUnit']) > 64)) {
                $invalidProperties[] = "invalid value for 'organizationalUnit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['organizationalUnit']) && (mb_strlen($this->container['organizationalUnit']) < 1)) {
                $invalidProperties[] = "invalid value for 'organizationalUnit', the character length must be bigger than or equal to 1.";
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
    * Gets commonName
    *  证书通用名称（CN），名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、\"*\"、字母、数字、汉字组成，长度不能超过64位字符。
    *
    * @return string
    */
    public function getCommonName()
    {
        return $this->container['commonName'];
    }

    /**
    * Sets commonName
    *
    * @param string $commonName 证书通用名称（CN），名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、\"*\"、字母、数字、汉字组成，长度不能超过64位字符。
    *
    * @return $this
    */
    public function setCommonName($commonName)
    {
        $this->container['commonName'] = $commonName;
        return $this;
    }

    /**
    * Gets country
    *  国家编码，只能由英文组成，长度为2位字符。若不传入，则默认继承父CA对应的值。
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country 国家编码，只能由英文组成，长度为2位字符。若不传入，则默认继承父CA对应的值。
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets state
    *  省市名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 省市名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets locality
    *  地区名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    *
    * @return string|null
    */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
    * Sets locality
    *
    * @param string|null $locality 地区名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过128位字符。若不传入，则默认继承父CA对应的值。
    *
    * @return $this
    */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;
        return $this;
    }

    /**
    * Gets organization
    *  组织名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    *
    * @return string|null
    */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
    * Sets organization
    *
    * @param string|null $organization 组织名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    *
    * @return $this
    */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;
        return $this;
    }

    /**
    * Gets organizationalUnit
    *  组织单元名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    *
    * @return string|null
    */
    public function getOrganizationalUnit()
    {
        return $this->container['organizationalUnit'];
    }

    /**
    * Sets organizationalUnit
    *
    * @param string|null $organizationalUnit 组织单元名称，名称只能由\"-\"、\"_\"、\" \"、\".\"、\",\"、字母、数字、汉字组成，长度不能超过64位字符。若不传入，则默认继承父CA对应的值。
    *
    * @return $this
    */
    public function setOrganizationalUnit($organizationalUnit)
    {
        $this->container['organizationalUnit'] = $organizationalUnit;
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

