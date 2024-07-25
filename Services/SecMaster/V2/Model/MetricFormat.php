<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricFormat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricFormat';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  数据格式
    * display  显示格式
    * displayParam  显示参数
    * dataParam  数据参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => 'string',
            'display' => 'string',
            'displayParam' => 'map[string,string]',
            'dataParam' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  数据格式
    * display  显示格式
    * displayParam  显示参数
    * dataParam  数据参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'display' => null,
        'displayParam' => null,
        'dataParam' => null
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
    * data  数据格式
    * display  显示格式
    * displayParam  显示参数
    * dataParam  数据参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'display' => 'display',
            'displayParam' => 'display_param',
            'dataParam' => 'data_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  数据格式
    * display  显示格式
    * displayParam  显示参数
    * dataParam  数据参数
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'display' => 'setDisplay',
            'displayParam' => 'setDisplayParam',
            'dataParam' => 'setDataParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  数据格式
    * display  显示格式
    * displayParam  显示参数
    * dataParam  数据参数
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'display' => 'getDisplay',
            'displayParam' => 'getDisplayParam',
            'dataParam' => 'getDataParam'
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
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
        $this->container['displayParam'] = isset($data['displayParam']) ? $data['displayParam'] : null;
        $this->container['dataParam'] = isset($data['dataParam']) ? $data['dataParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['data']) && (mb_strlen($this->container['data']) > 128)) {
                $invalidProperties[] = "invalid value for 'data', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['data']) && (mb_strlen($this->container['data']) < 1)) {
                $invalidProperties[] = "invalid value for 'data', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['display']) && (mb_strlen($this->container['display']) > 128)) {
                $invalidProperties[] = "invalid value for 'display', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['display']) && (mb_strlen($this->container['display']) < 1)) {
                $invalidProperties[] = "invalid value for 'display', the character length must be bigger than or equal to 1.";
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
    * Gets data
    *  数据格式
    *
    * @return string|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param string|null $data 数据格式
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets display
    *  显示格式
    *
    * @return string|null
    */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
    * Sets display
    *
    * @param string|null $display 显示格式
    *
    * @return $this
    */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;
        return $this;
    }

    /**
    * Gets displayParam
    *  显示参数
    *
    * @return map[string,string]|null
    */
    public function getDisplayParam()
    {
        return $this->container['displayParam'];
    }

    /**
    * Sets displayParam
    *
    * @param map[string,string]|null $displayParam 显示参数
    *
    * @return $this
    */
    public function setDisplayParam($displayParam)
    {
        $this->container['displayParam'] = $displayParam;
        return $this;
    }

    /**
    * Gets dataParam
    *  数据参数
    *
    * @return map[string,string]|null
    */
    public function getDataParam()
    {
        return $this->container['dataParam'];
    }

    /**
    * Sets dataParam
    *
    * @param map[string,string]|null $dataParam 数据参数
    *
    * @return $this
    */
    public function setDataParam($dataParam)
    {
        $this->container['dataParam'] = $dataParam;
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

