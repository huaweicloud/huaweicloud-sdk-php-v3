<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowPoolOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowPoolOrder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  订阅ID。
    * sku  sku
    * skuCount  订阅计数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'sku' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SkuInfo',
            'skuCount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  订阅ID。
    * sku  sku
    * skuCount  订阅计数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'sku' => null,
        'skuCount' => null
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
    * id  订阅ID。
    * sku  sku
    * skuCount  订阅计数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'sku' => 'sku',
            'skuCount' => 'sku_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  订阅ID。
    * sku  sku
    * skuCount  订阅计数。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'sku' => 'setSku',
            'skuCount' => 'setSkuCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  订阅ID。
    * sku  sku
    * skuCount  订阅计数。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'sku' => 'getSku',
            'skuCount' => 'getSkuCount'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['skuCount'] = isset($data['skuCount']) ? $data['skuCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['skuCount'] === null) {
            $invalidProperties[] = "'skuCount' can't be null";
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
    * Gets id
    *  订阅ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 订阅ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sku
    *  sku
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SkuInfo
    */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
    * Sets sku
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SkuInfo $sku sku
    *
    * @return $this
    */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;
        return $this;
    }

    /**
    * Gets skuCount
    *  订阅计数。
    *
    * @return string
    */
    public function getSkuCount()
    {
        return $this->container['skuCount'];
    }

    /**
    * Sets skuCount
    *
    * @param string $skuCount 订阅计数。
    *
    * @return $this
    */
    public function setSkuCount($skuCount)
    {
        $this->container['skuCount'] = $skuCount;
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

