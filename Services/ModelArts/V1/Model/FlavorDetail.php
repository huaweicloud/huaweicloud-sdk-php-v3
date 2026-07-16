<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorType  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    * billing  billing
    * flavorInfo  flavorInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorType' => 'string',
            'billing' => '\HuaweiCloud\SDK\ModelArts\V1\Model\BillingInfo',
            'flavorInfo' => '\HuaweiCloud\SDK\ModelArts\V1\Model\FlavorInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorType  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    * billing  billing
    * flavorInfo  flavorInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorType' => null,
        'billing' => null,
        'flavorInfo' => null
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
    * flavorType  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    * billing  billing
    * flavorInfo  flavorInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorType' => 'flavor_type',
            'billing' => 'billing',
            'flavorInfo' => 'flavor_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorType  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    * billing  billing
    * flavorInfo  flavorInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorType' => 'setFlavorType',
            'billing' => 'setBilling',
            'flavorInfo' => 'setFlavorInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorType  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    * billing  billing
    * flavorInfo  flavorInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorType' => 'getFlavorType',
            'billing' => 'getBilling',
            'flavorInfo' => 'getFlavorInfo'
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
        $this->container['flavorType'] = isset($data['flavorType']) ? $data['flavorType'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['flavorInfo'] = isset($data['flavorInfo']) ? $data['flavorInfo'] : null;
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
    * Gets flavorType
    *  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    *
    * @return string|null
    */
    public function getFlavorType()
    {
        return $this->container['flavorType'];
    }

    /**
    * Sets flavorType
    *
    * @param string|null $flavorType 资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    *
    * @return $this
    */
    public function setFlavorType($flavorType)
    {
        $this->container['flavorType'] = $flavorType;
        return $this;
    }

    /**
    * Gets billing
    *  billing
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\BillingInfo|null
    */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
    * Sets billing
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\BillingInfo|null $billing billing
    *
    * @return $this
    */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;
        return $this;
    }

    /**
    * Gets flavorInfo
    *  flavorInfo
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\FlavorInfo|null
    */
    public function getFlavorInfo()
    {
        return $this->container['flavorInfo'];
    }

    /**
    * Sets flavorInfo
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\FlavorInfo|null $flavorInfo flavorInfo
    *
    * @return $this
    */
    public function setFlavorInfo($flavorInfo)
    {
        $this->container['flavorInfo'] = $flavorInfo;
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

