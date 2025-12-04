<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCloudPhoneServerModelsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCloudPhoneServerModelsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productType  产品类型。 - 0：云手机 - 1：云手游
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productType  产品类型。 - 0：云手机 - 1：云手游
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productType' => null
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
    * productType  产品类型。 - 0：云手机 - 1：云手游
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productType' => 'product_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productType  产品类型。 - 0：云手机 - 1：云手游
    *
    * @var string[]
    */
    protected static $setters = [
            'productType' => 'setProductType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productType  产品类型。 - 0：云手机 - 1：云手游
    *
    * @var string[]
    */
    protected static $getters = [
            'productType' => 'getProductType'
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
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['productType']) && ($this->container['productType'] > 1024)) {
                $invalidProperties[] = "invalid value for 'productType', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['productType']) && ($this->container['productType'] < 0)) {
                $invalidProperties[] = "invalid value for 'productType', must be bigger than or equal to 0.";
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
    * Gets productType
    *  产品类型。 - 0：云手机 - 1：云手游
    *
    * @return int|null
    */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
    * Sets productType
    *
    * @param int|null $productType 产品类型。 - 0：云手机 - 1：云手游
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
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

