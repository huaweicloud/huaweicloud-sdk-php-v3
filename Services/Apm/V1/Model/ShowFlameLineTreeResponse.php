<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFlameLineTreeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFlameLineTreeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  火焰图的数据，是个二维数组 data[0][0]: self time，方法自己消耗的cpu毫秒时间，不包括方法内部调用其他方法的时间 data[0][1]: total time, 方法消耗的cpu毫秒时间，包括方法内部调用其他方法的时间 data[0][2]: 方法的index,对应methods中的数组下标 data[0][3]: 行号 data[0][4]: 方法的子节点，就是方法中调用的其他方法
    * methods  调用栈上的方法信息，是个二维数组 method[0][0]: 方法的唯一id method[0][1]: 方法的package包名 method[0][2]: 方法的class name 类名 method[0][3]: 方法名 method[0][4]: 方法的参数列表 method[0][5]: 方法是否为用户的方法 method[0][6]: 方法是否为native方法
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => 'string[]',
            'methods' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  火焰图的数据，是个二维数组 data[0][0]: self time，方法自己消耗的cpu毫秒时间，不包括方法内部调用其他方法的时间 data[0][1]: total time, 方法消耗的cpu毫秒时间，包括方法内部调用其他方法的时间 data[0][2]: 方法的index,对应methods中的数组下标 data[0][3]: 行号 data[0][4]: 方法的子节点，就是方法中调用的其他方法
    * methods  调用栈上的方法信息，是个二维数组 method[0][0]: 方法的唯一id method[0][1]: 方法的package包名 method[0][2]: 方法的class name 类名 method[0][3]: 方法名 method[0][4]: 方法的参数列表 method[0][5]: 方法是否为用户的方法 method[0][6]: 方法是否为native方法
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'methods' => null
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
    * data  火焰图的数据，是个二维数组 data[0][0]: self time，方法自己消耗的cpu毫秒时间，不包括方法内部调用其他方法的时间 data[0][1]: total time, 方法消耗的cpu毫秒时间，包括方法内部调用其他方法的时间 data[0][2]: 方法的index,对应methods中的数组下标 data[0][3]: 行号 data[0][4]: 方法的子节点，就是方法中调用的其他方法
    * methods  调用栈上的方法信息，是个二维数组 method[0][0]: 方法的唯一id method[0][1]: 方法的package包名 method[0][2]: 方法的class name 类名 method[0][3]: 方法名 method[0][4]: 方法的参数列表 method[0][5]: 方法是否为用户的方法 method[0][6]: 方法是否为native方法
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'methods' => 'methods'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  火焰图的数据，是个二维数组 data[0][0]: self time，方法自己消耗的cpu毫秒时间，不包括方法内部调用其他方法的时间 data[0][1]: total time, 方法消耗的cpu毫秒时间，包括方法内部调用其他方法的时间 data[0][2]: 方法的index,对应methods中的数组下标 data[0][3]: 行号 data[0][4]: 方法的子节点，就是方法中调用的其他方法
    * methods  调用栈上的方法信息，是个二维数组 method[0][0]: 方法的唯一id method[0][1]: 方法的package包名 method[0][2]: 方法的class name 类名 method[0][3]: 方法名 method[0][4]: 方法的参数列表 method[0][5]: 方法是否为用户的方法 method[0][6]: 方法是否为native方法
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'methods' => 'setMethods'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  火焰图的数据，是个二维数组 data[0][0]: self time，方法自己消耗的cpu毫秒时间，不包括方法内部调用其他方法的时间 data[0][1]: total time, 方法消耗的cpu毫秒时间，包括方法内部调用其他方法的时间 data[0][2]: 方法的index,对应methods中的数组下标 data[0][3]: 行号 data[0][4]: 方法的子节点，就是方法中调用的其他方法
    * methods  调用栈上的方法信息，是个二维数组 method[0][0]: 方法的唯一id method[0][1]: 方法的package包名 method[0][2]: 方法的class name 类名 method[0][3]: 方法名 method[0][4]: 方法的参数列表 method[0][5]: 方法是否为用户的方法 method[0][6]: 方法是否为native方法
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'methods' => 'getMethods'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['methods'] = isset($data['methods']) ? $data['methods'] : null;
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
    * Gets data
    *  火焰图的数据，是个二维数组 data[0][0]: self time，方法自己消耗的cpu毫秒时间，不包括方法内部调用其他方法的时间 data[0][1]: total time, 方法消耗的cpu毫秒时间，包括方法内部调用其他方法的时间 data[0][2]: 方法的index,对应methods中的数组下标 data[0][3]: 行号 data[0][4]: 方法的子节点，就是方法中调用的其他方法
    *
    * @return string[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param string[]|null $data 火焰图的数据，是个二维数组 data[0][0]: self time，方法自己消耗的cpu毫秒时间，不包括方法内部调用其他方法的时间 data[0][1]: total time, 方法消耗的cpu毫秒时间，包括方法内部调用其他方法的时间 data[0][2]: 方法的index,对应methods中的数组下标 data[0][3]: 行号 data[0][4]: 方法的子节点，就是方法中调用的其他方法
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets methods
    *  调用栈上的方法信息，是个二维数组 method[0][0]: 方法的唯一id method[0][1]: 方法的package包名 method[0][2]: 方法的class name 类名 method[0][3]: 方法名 method[0][4]: 方法的参数列表 method[0][5]: 方法是否为用户的方法 method[0][6]: 方法是否为native方法
    *
    * @return string[]|null
    */
    public function getMethods()
    {
        return $this->container['methods'];
    }

    /**
    * Sets methods
    *
    * @param string[]|null $methods 调用栈上的方法信息，是个二维数组 method[0][0]: 方法的唯一id method[0][1]: 方法的package包名 method[0][2]: 方法的class name 类名 method[0][3]: 方法名 method[0][4]: 方法的参数列表 method[0][5]: 方法是否为用户的方法 method[0][6]: 方法是否为native方法
    *
    * @return $this
    */
    public function setMethods($methods)
    {
        $this->container['methods'] = $methods;
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

