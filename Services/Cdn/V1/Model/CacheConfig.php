<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CacheConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CacheConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ignoreUrlParameter  是否忽略url中的参数。
    * followOrigin  缓存规则是否遵循源站
    * compress  compress
    * rules  缓存规则，将覆盖之前的规则配置。规则为空重置为默认规则。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ignoreUrlParameter' => 'bool',
            'followOrigin' => 'bool',
            'compress' => '\HuaweiCloud\SDK\Cdn\V1\Model\CompressResponse',
            'rules' => '\HuaweiCloud\SDK\Cdn\V1\Model\Rules[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ignoreUrlParameter  是否忽略url中的参数。
    * followOrigin  缓存规则是否遵循源站
    * compress  compress
    * rules  缓存规则，将覆盖之前的规则配置。规则为空重置为默认规则。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ignoreUrlParameter' => null,
        'followOrigin' => null,
        'compress' => null,
        'rules' => null
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
    * ignoreUrlParameter  是否忽略url中的参数。
    * followOrigin  缓存规则是否遵循源站
    * compress  compress
    * rules  缓存规则，将覆盖之前的规则配置。规则为空重置为默认规则。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ignoreUrlParameter' => 'ignore_url_parameter',
            'followOrigin' => 'follow_origin',
            'compress' => 'compress',
            'rules' => 'rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ignoreUrlParameter  是否忽略url中的参数。
    * followOrigin  缓存规则是否遵循源站
    * compress  compress
    * rules  缓存规则，将覆盖之前的规则配置。规则为空重置为默认规则。
    *
    * @var string[]
    */
    protected static $setters = [
            'ignoreUrlParameter' => 'setIgnoreUrlParameter',
            'followOrigin' => 'setFollowOrigin',
            'compress' => 'setCompress',
            'rules' => 'setRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ignoreUrlParameter  是否忽略url中的参数。
    * followOrigin  缓存规则是否遵循源站
    * compress  compress
    * rules  缓存规则，将覆盖之前的规则配置。规则为空重置为默认规则。
    *
    * @var string[]
    */
    protected static $getters = [
            'ignoreUrlParameter' => 'getIgnoreUrlParameter',
            'followOrigin' => 'getFollowOrigin',
            'compress' => 'getCompress',
            'rules' => 'getRules'
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
        $this->container['ignoreUrlParameter'] = isset($data['ignoreUrlParameter']) ? $data['ignoreUrlParameter'] : null;
        $this->container['followOrigin'] = isset($data['followOrigin']) ? $data['followOrigin'] : null;
        $this->container['compress'] = isset($data['compress']) ? $data['compress'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
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
    * Gets ignoreUrlParameter
    *  是否忽略url中的参数。
    *
    * @return bool|null
    */
    public function getIgnoreUrlParameter()
    {
        return $this->container['ignoreUrlParameter'];
    }

    /**
    * Sets ignoreUrlParameter
    *
    * @param bool|null $ignoreUrlParameter 是否忽略url中的参数。
    *
    * @return $this
    */
    public function setIgnoreUrlParameter($ignoreUrlParameter)
    {
        $this->container['ignoreUrlParameter'] = $ignoreUrlParameter;
        return $this;
    }

    /**
    * Gets followOrigin
    *  缓存规则是否遵循源站
    *
    * @return bool|null
    */
    public function getFollowOrigin()
    {
        return $this->container['followOrigin'];
    }

    /**
    * Sets followOrigin
    *
    * @param bool|null $followOrigin 缓存规则是否遵循源站
    *
    * @return $this
    */
    public function setFollowOrigin($followOrigin)
    {
        $this->container['followOrigin'] = $followOrigin;
        return $this;
    }

    /**
    * Gets compress
    *  compress
    *
    * @return \HuaweiCloud\SDK\Cdn\V1\Model\CompressResponse|null
    */
    public function getCompress()
    {
        return $this->container['compress'];
    }

    /**
    * Sets compress
    *
    * @param \HuaweiCloud\SDK\Cdn\V1\Model\CompressResponse|null $compress compress
    *
    * @return $this
    */
    public function setCompress($compress)
    {
        $this->container['compress'] = $compress;
        return $this;
    }

    /**
    * Gets rules
    *  缓存规则，将覆盖之前的规则配置。规则为空重置为默认规则。
    *
    * @return \HuaweiCloud\SDK\Cdn\V1\Model\Rules[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Cdn\V1\Model\Rules[]|null $rules 缓存规则，将覆盖之前的规则配置。规则为空重置为默认规则。
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
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

