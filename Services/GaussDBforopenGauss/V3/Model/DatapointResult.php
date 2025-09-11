<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatapointResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatapointResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datapointName  指标项名，实例指标用实例ID、节点指标用节点名称、组件指标用组件名称。
    * datapointValues  指标值集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datapointName' => 'string',
            'datapointValues' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datapointName  指标项名，实例指标用实例ID、节点指标用节点名称、组件指标用组件名称。
    * datapointValues  指标值集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datapointName' => null,
        'datapointValues' => null
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
    * datapointName  指标项名，实例指标用实例ID、节点指标用节点名称、组件指标用组件名称。
    * datapointValues  指标值集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datapointName' => 'datapoint_name',
            'datapointValues' => 'datapoint_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datapointName  指标项名，实例指标用实例ID、节点指标用节点名称、组件指标用组件名称。
    * datapointValues  指标值集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'datapointName' => 'setDatapointName',
            'datapointValues' => 'setDatapointValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datapointName  指标项名，实例指标用实例ID、节点指标用节点名称、组件指标用组件名称。
    * datapointValues  指标值集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'datapointName' => 'getDatapointName',
            'datapointValues' => 'getDatapointValues'
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
        $this->container['datapointName'] = isset($data['datapointName']) ? $data['datapointName'] : null;
        $this->container['datapointValues'] = isset($data['datapointValues']) ? $data['datapointValues'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['datapointName'] === null) {
            $invalidProperties[] = "'datapointName' can't be null";
        }
        if ($this->container['datapointValues'] === null) {
            $invalidProperties[] = "'datapointValues' can't be null";
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
    * Gets datapointName
    *  指标项名，实例指标用实例ID、节点指标用节点名称、组件指标用组件名称。
    *
    * @return string
    */
    public function getDatapointName()
    {
        return $this->container['datapointName'];
    }

    /**
    * Sets datapointName
    *
    * @param string $datapointName 指标项名，实例指标用实例ID、节点指标用节点名称、组件指标用组件名称。
    *
    * @return $this
    */
    public function setDatapointName($datapointName)
    {
        $this->container['datapointName'] = $datapointName;
        return $this;
    }

    /**
    * Gets datapointValues
    *  指标值集合。
    *
    * @return string[]
    */
    public function getDatapointValues()
    {
        return $this->container['datapointValues'];
    }

    /**
    * Sets datapointValues
    *
    * @param string[] $datapointValues 指标值集合。
    *
    * @return $this
    */
    public function setDatapointValues($datapointValues)
    {
        $this->container['datapointValues'] = $datapointValues;
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

