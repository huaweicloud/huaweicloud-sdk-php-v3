<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FaiureResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FaiureResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resource  部署失败的资源信息，部署WAF与ELB时，此字段为资源ID，部署CDN时，本字段为加速域名。
    * failureInfo  失败原因，一般为目标服务返回的错误码信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resource' => 'string',
            'failureInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resource  部署失败的资源信息，部署WAF与ELB时，此字段为资源ID，部署CDN时，本字段为加速域名。
    * failureInfo  失败原因，一般为目标服务返回的错误码信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resource' => null,
        'failureInfo' => null
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
    * resource  部署失败的资源信息，部署WAF与ELB时，此字段为资源ID，部署CDN时，本字段为加速域名。
    * failureInfo  失败原因，一般为目标服务返回的错误码信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resource' => 'resource',
            'failureInfo' => 'failure_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resource  部署失败的资源信息，部署WAF与ELB时，此字段为资源ID，部署CDN时，本字段为加速域名。
    * failureInfo  失败原因，一般为目标服务返回的错误码信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'resource' => 'setResource',
            'failureInfo' => 'setFailureInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resource  部署失败的资源信息，部署WAF与ELB时，此字段为资源ID，部署CDN时，本字段为加速域名。
    * failureInfo  失败原因，一般为目标服务返回的错误码信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'resource' => 'getResource',
            'failureInfo' => 'getFailureInfo'
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
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['failureInfo'] = isset($data['failureInfo']) ? $data['failureInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resource']) && (mb_strlen($this->container['resource']) > 63)) {
                $invalidProperties[] = "invalid value for 'resource', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['resource']) && (mb_strlen($this->container['resource']) < 0)) {
                $invalidProperties[] = "invalid value for 'resource', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failureInfo']) && (mb_strlen($this->container['failureInfo']) > 255)) {
                $invalidProperties[] = "invalid value for 'failureInfo', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['failureInfo']) && (mb_strlen($this->container['failureInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'failureInfo', the character length must be bigger than or equal to 0.";
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
    * Gets resource
    *  部署失败的资源信息，部署WAF与ELB时，此字段为资源ID，部署CDN时，本字段为加速域名。
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource 部署失败的资源信息，部署WAF与ELB时，此字段为资源ID，部署CDN时，本字段为加速域名。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets failureInfo
    *  失败原因，一般为目标服务返回的错误码信息。
    *
    * @return string|null
    */
    public function getFailureInfo()
    {
        return $this->container['failureInfo'];
    }

    /**
    * Sets failureInfo
    *
    * @param string|null $failureInfo 失败原因，一般为目标服务返回的错误码信息。
    *
    * @return $this
    */
    public function setFailureInfo($failureInfo)
    {
        $this->container['failureInfo'] = $failureInfo;
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

