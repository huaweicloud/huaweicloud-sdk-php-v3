<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFunctionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFunctionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  上一次查询到的最后的记录位置。
    * maxitems  每次查询获取的最大函数记录数量 最大值：400 如果不提供该值或者提供的值大于400或等于0，则使用默认值：400 如果该值小于0，则返回参数错误。
    * packageName  自定义分组名称。
    * funcName  函数名称。支持模糊查询
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'maxitems' => 'string',
            'packageName' => 'string',
            'funcName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  上一次查询到的最后的记录位置。
    * maxitems  每次查询获取的最大函数记录数量 最大值：400 如果不提供该值或者提供的值大于400或等于0，则使用默认值：400 如果该值小于0，则返回参数错误。
    * packageName  自定义分组名称。
    * funcName  函数名称。支持模糊查询
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'maxitems' => null,
        'packageName' => null,
        'funcName' => null
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
    * marker  上一次查询到的最后的记录位置。
    * maxitems  每次查询获取的最大函数记录数量 最大值：400 如果不提供该值或者提供的值大于400或等于0，则使用默认值：400 如果该值小于0，则返回参数错误。
    * packageName  自定义分组名称。
    * funcName  函数名称。支持模糊查询
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'maxitems' => 'maxitems',
            'packageName' => 'package_name',
            'funcName' => 'func_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  上一次查询到的最后的记录位置。
    * maxitems  每次查询获取的最大函数记录数量 最大值：400 如果不提供该值或者提供的值大于400或等于0，则使用默认值：400 如果该值小于0，则返回参数错误。
    * packageName  自定义分组名称。
    * funcName  函数名称。支持模糊查询
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'maxitems' => 'setMaxitems',
            'packageName' => 'setPackageName',
            'funcName' => 'setFuncName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  上一次查询到的最后的记录位置。
    * maxitems  每次查询获取的最大函数记录数量 最大值：400 如果不提供该值或者提供的值大于400或等于0，则使用默认值：400 如果该值小于0，则返回参数错误。
    * packageName  自定义分组名称。
    * funcName  函数名称。支持模糊查询
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'maxitems' => 'getMaxitems',
            'packageName' => 'getPackageName',
            'funcName' => 'getFuncName'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['maxitems'] = isset($data['maxitems']) ? $data['maxitems'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['funcName'] = isset($data['funcName']) ? $data['funcName'] : null;
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
    * Gets marker
    *  上一次查询到的最后的记录位置。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一次查询到的最后的记录位置。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets maxitems
    *  每次查询获取的最大函数记录数量 最大值：400 如果不提供该值或者提供的值大于400或等于0，则使用默认值：400 如果该值小于0，则返回参数错误。
    *
    * @return string|null
    */
    public function getMaxitems()
    {
        return $this->container['maxitems'];
    }

    /**
    * Sets maxitems
    *
    * @param string|null $maxitems 每次查询获取的最大函数记录数量 最大值：400 如果不提供该值或者提供的值大于400或等于0，则使用默认值：400 如果该值小于0，则返回参数错误。
    *
    * @return $this
    */
    public function setMaxitems($maxitems)
    {
        $this->container['maxitems'] = $maxitems;
        return $this;
    }

    /**
    * Gets packageName
    *  自定义分组名称。
    *
    * @return string|null
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string|null $packageName 自定义分组名称。
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
        return $this;
    }

    /**
    * Gets funcName
    *  函数名称。支持模糊查询
    *
    * @return string|null
    */
    public function getFuncName()
    {
        return $this->container['funcName'];
    }

    /**
    * Sets funcName
    *
    * @param string|null $funcName 函数名称。支持模糊查询
    *
    * @return $this
    */
    public function setFuncName($funcName)
    {
        $this->container['funcName'] = $funcName;
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

