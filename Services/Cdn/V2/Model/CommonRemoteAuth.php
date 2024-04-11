<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommonRemoteAuth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'commonRemoteAuth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * remoteAuthentication  是否开启远程鉴权(on：开启，off：关闭)。
    * remoteAuthRules  remoteAuthRules
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'remoteAuthentication' => 'string',
            'remoteAuthRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\RemoteAuthRule'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * remoteAuthentication  是否开启远程鉴权(on：开启，off：关闭)。
    * remoteAuthRules  remoteAuthRules
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'remoteAuthentication' => null,
        'remoteAuthRules' => null
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
    * remoteAuthentication  是否开启远程鉴权(on：开启，off：关闭)。
    * remoteAuthRules  remoteAuthRules
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'remoteAuthentication' => 'remote_authentication',
            'remoteAuthRules' => 'remote_auth_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * remoteAuthentication  是否开启远程鉴权(on：开启，off：关闭)。
    * remoteAuthRules  remoteAuthRules
    *
    * @var string[]
    */
    protected static $setters = [
            'remoteAuthentication' => 'setRemoteAuthentication',
            'remoteAuthRules' => 'setRemoteAuthRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * remoteAuthentication  是否开启远程鉴权(on：开启，off：关闭)。
    * remoteAuthRules  remoteAuthRules
    *
    * @var string[]
    */
    protected static $getters = [
            'remoteAuthentication' => 'getRemoteAuthentication',
            'remoteAuthRules' => 'getRemoteAuthRules'
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
        $this->container['remoteAuthentication'] = isset($data['remoteAuthentication']) ? $data['remoteAuthentication'] : null;
        $this->container['remoteAuthRules'] = isset($data['remoteAuthRules']) ? $data['remoteAuthRules'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['remoteAuthentication'] === null) {
            $invalidProperties[] = "'remoteAuthentication' can't be null";
        }
        if ($this->container['remoteAuthRules'] === null) {
            $invalidProperties[] = "'remoteAuthRules' can't be null";
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
    * Gets remoteAuthentication
    *  是否开启远程鉴权(on：开启，off：关闭)。
    *
    * @return string
    */
    public function getRemoteAuthentication()
    {
        return $this->container['remoteAuthentication'];
    }

    /**
    * Sets remoteAuthentication
    *
    * @param string $remoteAuthentication 是否开启远程鉴权(on：开启，off：关闭)。
    *
    * @return $this
    */
    public function setRemoteAuthentication($remoteAuthentication)
    {
        $this->container['remoteAuthentication'] = $remoteAuthentication;
        return $this;
    }

    /**
    * Gets remoteAuthRules
    *  remoteAuthRules
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\RemoteAuthRule
    */
    public function getRemoteAuthRules()
    {
        return $this->container['remoteAuthRules'];
    }

    /**
    * Sets remoteAuthRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\RemoteAuthRule $remoteAuthRules remoteAuthRules
    *
    * @return $this
    */
    public function setRemoteAuthRules($remoteAuthRules)
    {
        $this->container['remoteAuthRules'] = $remoteAuthRules;
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

