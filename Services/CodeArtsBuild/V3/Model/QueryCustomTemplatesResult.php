<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryCustomTemplatesResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryCustomTemplatesResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalSize  返回模板数量
    * items  模板信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalSize' => 'int',
            'items' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\QueryTemplatesItems[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalSize  返回模板数量
    * items  模板信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalSize' => null,
        'items' => null
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
    * totalSize  返回模板数量
    * items  模板信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalSize' => 'total_size',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalSize  返回模板数量
    * items  模板信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalSize' => 'setTotalSize',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalSize  返回模板数量
    * items  模板信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalSize' => 'getTotalSize',
            'items' => 'getItems'
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
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
    * Gets totalSize
    *  返回模板数量
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize 返回模板数量
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
        return $this;
    }

    /**
    * Gets items
    *  模板信息列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\QueryTemplatesItems[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\QueryTemplatesItems[]|null $items 模板信息列表
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

