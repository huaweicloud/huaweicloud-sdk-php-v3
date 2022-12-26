<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  直播域名，如果不设置此字段，则返回租户所有的域名信息
    * enterpriseProjectId  企业项目ID，如果不设置此字段，则不进行该字段过滤，返回所有域名信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  直播域名，如果不设置此字段，则返回租户所有的域名信息
    * enterpriseProjectId  企业项目ID，如果不设置此字段，则不进行该字段过滤，返回所有域名信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'enterpriseProjectId' => null
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
    * domain  直播域名，如果不设置此字段，则返回租户所有的域名信息
    * enterpriseProjectId  企业项目ID，如果不设置此字段，则不进行该字段过滤，返回所有域名信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  直播域名，如果不设置此字段，则返回租户所有的域名信息
    * enterpriseProjectId  企业项目ID，如果不设置此字段，则不进行该字段过滤，返回所有域名信息
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  直播域名，如果不设置此字段，则返回租户所有的域名信息
    * enterpriseProjectId  企业项目ID，如果不设置此字段，则不进行该字段过滤，返回所有域名信息
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 64)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
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
    * Gets domain
    *  直播域名，如果不设置此字段，则返回租户所有的域名信息
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 直播域名，如果不设置此字段，则返回租户所有的域名信息
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，如果不设置此字段，则不进行该字段过滤，返回所有域名信息
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
    * @param string|null $enterpriseProjectId 企业项目ID，如果不设置此字段，则不进行该字段过滤，返回所有域名信息
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

