<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LineStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LineStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startPoint  startPoint
    * endPoint  endPoint
    * critical  表示是否为关键线路（关键线路未执行无法取消升级流程）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startPoint' => '\HuaweiCloud\SDK\Cce\V3\Model\TaskType',
            'endPoint' => '\HuaweiCloud\SDK\Cce\V3\Model\TaskType',
            'critical' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startPoint  startPoint
    * endPoint  endPoint
    * critical  表示是否为关键线路（关键线路未执行无法取消升级流程）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startPoint' => null,
        'endPoint' => null,
        'critical' => null
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
    * startPoint  startPoint
    * endPoint  endPoint
    * critical  表示是否为关键线路（关键线路未执行无法取消升级流程）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startPoint' => 'startPoint',
            'endPoint' => 'endPoint',
            'critical' => 'critical'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startPoint  startPoint
    * endPoint  endPoint
    * critical  表示是否为关键线路（关键线路未执行无法取消升级流程）
    *
    * @var string[]
    */
    protected static $setters = [
            'startPoint' => 'setStartPoint',
            'endPoint' => 'setEndPoint',
            'critical' => 'setCritical'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startPoint  startPoint
    * endPoint  endPoint
    * critical  表示是否为关键线路（关键线路未执行无法取消升级流程）
    *
    * @var string[]
    */
    protected static $getters = [
            'startPoint' => 'getStartPoint',
            'endPoint' => 'getEndPoint',
            'critical' => 'getCritical'
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
        $this->container['startPoint'] = isset($data['startPoint']) ? $data['startPoint'] : null;
        $this->container['endPoint'] = isset($data['endPoint']) ? $data['endPoint'] : null;
        $this->container['critical'] = isset($data['critical']) ? $data['critical'] : null;
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
    * Gets startPoint
    *  startPoint
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\TaskType|null
    */
    public function getStartPoint()
    {
        return $this->container['startPoint'];
    }

    /**
    * Sets startPoint
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\TaskType|null $startPoint startPoint
    *
    * @return $this
    */
    public function setStartPoint($startPoint)
    {
        $this->container['startPoint'] = $startPoint;
        return $this;
    }

    /**
    * Gets endPoint
    *  endPoint
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\TaskType|null
    */
    public function getEndPoint()
    {
        return $this->container['endPoint'];
    }

    /**
    * Sets endPoint
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\TaskType|null $endPoint endPoint
    *
    * @return $this
    */
    public function setEndPoint($endPoint)
    {
        $this->container['endPoint'] = $endPoint;
        return $this;
    }

    /**
    * Gets critical
    *  表示是否为关键线路（关键线路未执行无法取消升级流程）
    *
    * @return string|null
    */
    public function getCritical()
    {
        return $this->container['critical'];
    }

    /**
    * Sets critical
    *
    * @param string|null $critical 表示是否为关键线路（关键线路未执行无法取消升级流程）
    *
    * @return $this
    */
    public function setCritical($critical)
    {
        $this->container['critical'] = $critical;
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

