<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourcesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourcesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resources  资源信息
    * productResources  手动创建，选择资源层级为云产品时的资源详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resources' => '\HuaweiCloud\SDK\Ces\V2\Model\Resource[]',
            'productResources' => '\HuaweiCloud\SDK\Ces\V2\Model\ProductResource[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resources  资源信息
    * productResources  手动创建，选择资源层级为云产品时的资源详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resources' => null,
        'productResources' => null
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
    * resources  资源信息
    * productResources  手动创建，选择资源层级为云产品时的资源详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resources' => 'resources',
            'productResources' => 'product_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resources  资源信息
    * productResources  手动创建，选择资源层级为云产品时的资源详情
    *
    * @var string[]
    */
    protected static $setters = [
            'resources' => 'setResources',
            'productResources' => 'setProductResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resources  资源信息
    * productResources  手动创建，选择资源层级为云产品时的资源详情
    *
    * @var string[]
    */
    protected static $getters = [
            'resources' => 'getResources',
            'productResources' => 'getProductResources'
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
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['productResources'] = isset($data['productResources']) ? $data['productResources'] : null;
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
    * Gets resources
    *  资源信息
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Resource[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Resource[]|null $resources 资源信息
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets productResources
    *  手动创建，选择资源层级为云产品时的资源详情
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ProductResource[]|null
    */
    public function getProductResources()
    {
        return $this->container['productResources'];
    }

    /**
    * Sets productResources
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ProductResource[]|null $productResources 手动创建，选择资源层级为云产品时的资源详情
    *
    * @return $this
    */
    public function setProductResources($productResources)
    {
        $this->container['productResources'] = $productResources;
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

