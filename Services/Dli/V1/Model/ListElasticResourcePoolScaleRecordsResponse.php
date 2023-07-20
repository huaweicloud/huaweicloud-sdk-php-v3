<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListElasticResourcePoolScaleRecordsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListElasticResourcePoolScaleRecordsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  返回数组长度
    * items  数组中返回的数据
    * xAuthToken  xAuthToken
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'items' => '\HuaweiCloud\SDK\Dli\V1\Model\array[]',
            'xAuthToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  返回数组长度
    * items  数组中返回的数据
    * xAuthToken  xAuthToken
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'items' => null,
        'xAuthToken' => null
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
    * count  返回数组长度
    * items  数组中返回的数据
    * xAuthToken  xAuthToken
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'items' => 'items',
            'xAuthToken' => 'X-Auth-Token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  返回数组长度
    * items  数组中返回的数据
    * xAuthToken  xAuthToken
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'items' => 'setItems',
            'xAuthToken' => 'setXAuthToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  返回数组长度
    * items  数组中返回的数据
    * xAuthToken  xAuthToken
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'items' => 'getItems',
            'xAuthToken' => 'getXAuthToken'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['xAuthToken'] = isset($data['xAuthToken']) ? $data['xAuthToken'] : null;
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
    * Gets count
    *  返回数组长度
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 返回数组长度
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets items
    *  数组中返回的数据
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\array[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\array[]|null $items 数组中返回的数据
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
        return $this;
    }

    /**
    * Gets xAuthToken
    *  xAuthToken
    *
    * @return string|null
    */
    public function getXAuthToken()
    {
        return $this->container['xAuthToken'];
    }

    /**
    * Sets xAuthToken
    *
    * @param string|null $xAuthToken xAuthToken
    *
    * @return $this
    */
    public function setXAuthToken($xAuthToken)
    {
        $this->container['xAuthToken'] = $xAuthToken;
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

