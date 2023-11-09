<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateAppsForAppQuotaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateAppsForAppQuotaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applies  凭据与凭据配额绑定列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applies' => '\HuaweiCloud\SDK\Apig\V2\Model\AppQuotaAppBinding[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applies  凭据与凭据配额绑定列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applies' => null
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
    * applies  凭据与凭据配额绑定列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applies' => 'applies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applies  凭据与凭据配额绑定列表
    *
    * @var string[]
    */
    protected static $setters = [
            'applies' => 'setApplies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applies  凭据与凭据配额绑定列表
    *
    * @var string[]
    */
    protected static $getters = [
            'applies' => 'getApplies'
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
        $this->container['applies'] = isset($data['applies']) ? $data['applies'] : null;
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
    * Gets applies
    *  凭据与凭据配额绑定列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\AppQuotaAppBinding[]|null
    */
    public function getApplies()
    {
        return $this->container['applies'];
    }

    /**
    * Sets applies
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\AppQuotaAppBinding[]|null $applies 凭据与凭据配额绑定列表
    *
    * @return $this
    */
    public function setApplies($applies)
    {
        $this->container['applies'] = $applies;
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

