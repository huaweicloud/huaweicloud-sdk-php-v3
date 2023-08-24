<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSecretResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSecretResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * auths  认证信息
    * xSwrDockerlogin  xSwrDockerlogin
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'auths' => 'map[string,\HuaweiCloud\SDK\Swr\V2\Model\AuthInfo]',
            'xSwrDockerlogin' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * auths  认证信息
    * xSwrDockerlogin  xSwrDockerlogin
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'auths' => null,
        'xSwrDockerlogin' => null
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
    * auths  认证信息
    * xSwrDockerlogin  xSwrDockerlogin
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'auths' => 'auths',
            'xSwrDockerlogin' => 'X-Swr-Dockerlogin'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * auths  认证信息
    * xSwrDockerlogin  xSwrDockerlogin
    *
    * @var string[]
    */
    protected static $setters = [
            'auths' => 'setAuths',
            'xSwrDockerlogin' => 'setXSwrDockerlogin'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * auths  认证信息
    * xSwrDockerlogin  xSwrDockerlogin
    *
    * @var string[]
    */
    protected static $getters = [
            'auths' => 'getAuths',
            'xSwrDockerlogin' => 'getXSwrDockerlogin'
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
        $this->container['auths'] = isset($data['auths']) ? $data['auths'] : null;
        $this->container['xSwrDockerlogin'] = isset($data['xSwrDockerlogin']) ? $data['xSwrDockerlogin'] : null;
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
    * Gets auths
    *  认证信息
    *
    * @return map[string,\HuaweiCloud\SDK\Swr\V2\Model\AuthInfo]|null
    */
    public function getAuths()
    {
        return $this->container['auths'];
    }

    /**
    * Sets auths
    *
    * @param map[string,\HuaweiCloud\SDK\Swr\V2\Model\AuthInfo]|null $auths 认证信息
    *
    * @return $this
    */
    public function setAuths($auths)
    {
        $this->container['auths'] = $auths;
        return $this;
    }

    /**
    * Gets xSwrDockerlogin
    *  xSwrDockerlogin
    *
    * @return string|null
    */
    public function getXSwrDockerlogin()
    {
        return $this->container['xSwrDockerlogin'];
    }

    /**
    * Sets xSwrDockerlogin
    *
    * @param string|null $xSwrDockerlogin xSwrDockerlogin
    *
    * @return $this
    */
    public function setXSwrDockerlogin($xSwrDockerlogin)
    {
        $this->container['xSwrDockerlogin'] = $xSwrDockerlogin;
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

