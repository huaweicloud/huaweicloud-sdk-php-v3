<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailableConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailableConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customAwAvailable  自定义关键字是否开通
    * publicAwAvailable  系统关键字是否开通
    * refreshAwAvailable  一键刷新功能是否开通
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customAwAvailable' => 'bool',
            'publicAwAvailable' => 'bool',
            'refreshAwAvailable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customAwAvailable  自定义关键字是否开通
    * publicAwAvailable  系统关键字是否开通
    * refreshAwAvailable  一键刷新功能是否开通
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customAwAvailable' => null,
        'publicAwAvailable' => null,
        'refreshAwAvailable' => null
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
    * customAwAvailable  自定义关键字是否开通
    * publicAwAvailable  系统关键字是否开通
    * refreshAwAvailable  一键刷新功能是否开通
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customAwAvailable' => 'custom_aw_available',
            'publicAwAvailable' => 'public_aw_available',
            'refreshAwAvailable' => 'refresh_aw_available'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customAwAvailable  自定义关键字是否开通
    * publicAwAvailable  系统关键字是否开通
    * refreshAwAvailable  一键刷新功能是否开通
    *
    * @var string[]
    */
    protected static $setters = [
            'customAwAvailable' => 'setCustomAwAvailable',
            'publicAwAvailable' => 'setPublicAwAvailable',
            'refreshAwAvailable' => 'setRefreshAwAvailable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customAwAvailable  自定义关键字是否开通
    * publicAwAvailable  系统关键字是否开通
    * refreshAwAvailable  一键刷新功能是否开通
    *
    * @var string[]
    */
    protected static $getters = [
            'customAwAvailable' => 'getCustomAwAvailable',
            'publicAwAvailable' => 'getPublicAwAvailable',
            'refreshAwAvailable' => 'getRefreshAwAvailable'
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
        $this->container['customAwAvailable'] = isset($data['customAwAvailable']) ? $data['customAwAvailable'] : null;
        $this->container['publicAwAvailable'] = isset($data['publicAwAvailable']) ? $data['publicAwAvailable'] : null;
        $this->container['refreshAwAvailable'] = isset($data['refreshAwAvailable']) ? $data['refreshAwAvailable'] : null;
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
    * Gets customAwAvailable
    *  自定义关键字是否开通
    *
    * @return bool|null
    */
    public function getCustomAwAvailable()
    {
        return $this->container['customAwAvailable'];
    }

    /**
    * Sets customAwAvailable
    *
    * @param bool|null $customAwAvailable 自定义关键字是否开通
    *
    * @return $this
    */
    public function setCustomAwAvailable($customAwAvailable)
    {
        $this->container['customAwAvailable'] = $customAwAvailable;
        return $this;
    }

    /**
    * Gets publicAwAvailable
    *  系统关键字是否开通
    *
    * @return bool|null
    */
    public function getPublicAwAvailable()
    {
        return $this->container['publicAwAvailable'];
    }

    /**
    * Sets publicAwAvailable
    *
    * @param bool|null $publicAwAvailable 系统关键字是否开通
    *
    * @return $this
    */
    public function setPublicAwAvailable($publicAwAvailable)
    {
        $this->container['publicAwAvailable'] = $publicAwAvailable;
        return $this;
    }

    /**
    * Gets refreshAwAvailable
    *  一键刷新功能是否开通
    *
    * @return bool|null
    */
    public function getRefreshAwAvailable()
    {
        return $this->container['refreshAwAvailable'];
    }

    /**
    * Sets refreshAwAvailable
    *
    * @param bool|null $refreshAwAvailable 一键刷新功能是否开通
    *
    * @return $this
    */
    public function setRefreshAwAvailable($refreshAwAvailable)
    {
        $this->container['refreshAwAvailable'] = $refreshAwAvailable;
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

