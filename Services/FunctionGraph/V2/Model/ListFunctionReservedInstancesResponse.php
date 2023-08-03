<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFunctionReservedInstancesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFunctionReservedInstancesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reservedinstances  函数预留实例列表
    * pageInfo  pageInfo
    * count  函数个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reservedinstances' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncReservedInstance[]',
            'pageInfo' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\PageInfo',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reservedinstances  函数预留实例列表
    * pageInfo  pageInfo
    * count  函数个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reservedinstances' => null,
        'pageInfo' => null,
        'count' => 'int64'
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
    * reservedinstances  函数预留实例列表
    * pageInfo  pageInfo
    * count  函数个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reservedinstances' => 'reservedinstances',
            'pageInfo' => 'page_info',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reservedinstances  函数预留实例列表
    * pageInfo  pageInfo
    * count  函数个数
    *
    * @var string[]
    */
    protected static $setters = [
            'reservedinstances' => 'setReservedinstances',
            'pageInfo' => 'setPageInfo',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reservedinstances  函数预留实例列表
    * pageInfo  pageInfo
    * count  函数个数
    *
    * @var string[]
    */
    protected static $getters = [
            'reservedinstances' => 'getReservedinstances',
            'pageInfo' => 'getPageInfo',
            'count' => 'getCount'
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
        $this->container['reservedinstances'] = isset($data['reservedinstances']) ? $data['reservedinstances'] : null;
        $this->container['pageInfo'] = isset($data['pageInfo']) ? $data['pageInfo'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    * Gets reservedinstances
    *  函数预留实例列表
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncReservedInstance[]|null
    */
    public function getReservedinstances()
    {
        return $this->container['reservedinstances'];
    }

    /**
    * Sets reservedinstances
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncReservedInstance[]|null $reservedinstances 函数预留实例列表
    *
    * @return $this
    */
    public function setReservedinstances($reservedinstances)
    {
        $this->container['reservedinstances'] = $reservedinstances;
        return $this;
    }

    /**
    * Gets pageInfo
    *  pageInfo
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\PageInfo|null
    */
    public function getPageInfo()
    {
        return $this->container['pageInfo'];
    }

    /**
    * Sets pageInfo
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\PageInfo|null $pageInfo pageInfo
    *
    * @return $this
    */
    public function setPageInfo($pageInfo)
    {
        $this->container['pageInfo'] = $pageInfo;
        return $this;
    }

    /**
    * Gets count
    *  函数个数
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
    * @param int|null $count 函数个数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

