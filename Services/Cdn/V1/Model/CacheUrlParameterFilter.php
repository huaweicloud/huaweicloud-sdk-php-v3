<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CacheUrlParameterFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CacheUrlParameterFilter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  缓存URL参数操作类型（full_url：缓存所有参数，ignore_url_params：忽略所有参数，del_params：忽略指定URL参数，reserve_params：保留指定URL参数）。   >   本接口参数有调整，参数替换如下： >   - del_params替代del_args。 >   - reserve_params替代reserve_args。
    * value  参数值，多个参数使用分号分隔
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  缓存URL参数操作类型（full_url：缓存所有参数，ignore_url_params：忽略所有参数，del_params：忽略指定URL参数，reserve_params：保留指定URL参数）。   >   本接口参数有调整，参数替换如下： >   - del_params替代del_args。 >   - reserve_params替代reserve_args。
    * value  参数值，多个参数使用分号分隔
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'value' => null
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
    * type  缓存URL参数操作类型（full_url：缓存所有参数，ignore_url_params：忽略所有参数，del_params：忽略指定URL参数，reserve_params：保留指定URL参数）。   >   本接口参数有调整，参数替换如下： >   - del_params替代del_args。 >   - reserve_params替代reserve_args。
    * value  参数值，多个参数使用分号分隔
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  缓存URL参数操作类型（full_url：缓存所有参数，ignore_url_params：忽略所有参数，del_params：忽略指定URL参数，reserve_params：保留指定URL参数）。   >   本接口参数有调整，参数替换如下： >   - del_params替代del_args。 >   - reserve_params替代reserve_args。
    * value  参数值，多个参数使用分号分隔
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  缓存URL参数操作类型（full_url：缓存所有参数，ignore_url_params：忽略所有参数，del_params：忽略指定URL参数，reserve_params：保留指定URL参数）。   >   本接口参数有调整，参数替换如下： >   - del_params替代del_args。 >   - reserve_params替代reserve_args。
    * value  参数值，多个参数使用分号分隔
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'value' => 'getValue'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
    * Gets type
    *  缓存URL参数操作类型（full_url：缓存所有参数，ignore_url_params：忽略所有参数，del_params：忽略指定URL参数，reserve_params：保留指定URL参数）。   >   本接口参数有调整，参数替换如下： >   - del_params替代del_args。 >   - reserve_params替代reserve_args。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 缓存URL参数操作类型（full_url：缓存所有参数，ignore_url_params：忽略所有参数，del_params：忽略指定URL参数，reserve_params：保留指定URL参数）。   >   本接口参数有调整，参数替换如下： >   - del_params替代del_args。 >   - reserve_params替代reserve_args。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  参数值，多个参数使用分号分隔
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 参数值，多个参数使用分号分隔
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

