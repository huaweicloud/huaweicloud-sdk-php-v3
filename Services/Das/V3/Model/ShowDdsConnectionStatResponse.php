<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDdsConnectionStatResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDdsConnectionStatResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalConnections  总连接数
    * totalInnerConnections  内部连接总数
    * totalOuterConnections  外部连接总数
    * innerConnections  内部连接详情
    * outerConnections  外部连接详情
    * innerConnectionsSize  内部连接详情总数
    * outerConnectionsSize  外部连接详情总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalConnections' => 'int',
            'totalInnerConnections' => 'int',
            'totalOuterConnections' => 'int',
            'innerConnections' => '\HuaweiCloud\SDK\Das\V3\Model\ConnectionDetail[]',
            'outerConnections' => '\HuaweiCloud\SDK\Das\V3\Model\ConnectionDetail[]',
            'innerConnectionsSize' => 'int',
            'outerConnectionsSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalConnections  总连接数
    * totalInnerConnections  内部连接总数
    * totalOuterConnections  外部连接总数
    * innerConnections  内部连接详情
    * outerConnections  外部连接详情
    * innerConnectionsSize  内部连接详情总数
    * outerConnectionsSize  外部连接详情总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalConnections' => 'int32',
        'totalInnerConnections' => 'int32',
        'totalOuterConnections' => 'int32',
        'innerConnections' => null,
        'outerConnections' => null,
        'innerConnectionsSize' => 'int32',
        'outerConnectionsSize' => 'int32'
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
    * totalConnections  总连接数
    * totalInnerConnections  内部连接总数
    * totalOuterConnections  外部连接总数
    * innerConnections  内部连接详情
    * outerConnections  外部连接详情
    * innerConnectionsSize  内部连接详情总数
    * outerConnectionsSize  外部连接详情总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalConnections' => 'total_connections',
            'totalInnerConnections' => 'total_inner_connections',
            'totalOuterConnections' => 'total_outer_connections',
            'innerConnections' => 'inner_connections',
            'outerConnections' => 'outer_connections',
            'innerConnectionsSize' => 'inner_connections_size',
            'outerConnectionsSize' => 'outer_connections_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalConnections  总连接数
    * totalInnerConnections  内部连接总数
    * totalOuterConnections  外部连接总数
    * innerConnections  内部连接详情
    * outerConnections  外部连接详情
    * innerConnectionsSize  内部连接详情总数
    * outerConnectionsSize  外部连接详情总数
    *
    * @var string[]
    */
    protected static $setters = [
            'totalConnections' => 'setTotalConnections',
            'totalInnerConnections' => 'setTotalInnerConnections',
            'totalOuterConnections' => 'setTotalOuterConnections',
            'innerConnections' => 'setInnerConnections',
            'outerConnections' => 'setOuterConnections',
            'innerConnectionsSize' => 'setInnerConnectionsSize',
            'outerConnectionsSize' => 'setOuterConnectionsSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalConnections  总连接数
    * totalInnerConnections  内部连接总数
    * totalOuterConnections  外部连接总数
    * innerConnections  内部连接详情
    * outerConnections  外部连接详情
    * innerConnectionsSize  内部连接详情总数
    * outerConnectionsSize  外部连接详情总数
    *
    * @var string[]
    */
    protected static $getters = [
            'totalConnections' => 'getTotalConnections',
            'totalInnerConnections' => 'getTotalInnerConnections',
            'totalOuterConnections' => 'getTotalOuterConnections',
            'innerConnections' => 'getInnerConnections',
            'outerConnections' => 'getOuterConnections',
            'innerConnectionsSize' => 'getInnerConnectionsSize',
            'outerConnectionsSize' => 'getOuterConnectionsSize'
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
        $this->container['totalConnections'] = isset($data['totalConnections']) ? $data['totalConnections'] : null;
        $this->container['totalInnerConnections'] = isset($data['totalInnerConnections']) ? $data['totalInnerConnections'] : null;
        $this->container['totalOuterConnections'] = isset($data['totalOuterConnections']) ? $data['totalOuterConnections'] : null;
        $this->container['innerConnections'] = isset($data['innerConnections']) ? $data['innerConnections'] : null;
        $this->container['outerConnections'] = isset($data['outerConnections']) ? $data['outerConnections'] : null;
        $this->container['innerConnectionsSize'] = isset($data['innerConnectionsSize']) ? $data['innerConnectionsSize'] : null;
        $this->container['outerConnectionsSize'] = isset($data['outerConnectionsSize']) ? $data['outerConnectionsSize'] : null;
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
    * Gets totalConnections
    *  总连接数
    *
    * @return int|null
    */
    public function getTotalConnections()
    {
        return $this->container['totalConnections'];
    }

    /**
    * Sets totalConnections
    *
    * @param int|null $totalConnections 总连接数
    *
    * @return $this
    */
    public function setTotalConnections($totalConnections)
    {
        $this->container['totalConnections'] = $totalConnections;
        return $this;
    }

    /**
    * Gets totalInnerConnections
    *  内部连接总数
    *
    * @return int|null
    */
    public function getTotalInnerConnections()
    {
        return $this->container['totalInnerConnections'];
    }

    /**
    * Sets totalInnerConnections
    *
    * @param int|null $totalInnerConnections 内部连接总数
    *
    * @return $this
    */
    public function setTotalInnerConnections($totalInnerConnections)
    {
        $this->container['totalInnerConnections'] = $totalInnerConnections;
        return $this;
    }

    /**
    * Gets totalOuterConnections
    *  外部连接总数
    *
    * @return int|null
    */
    public function getTotalOuterConnections()
    {
        return $this->container['totalOuterConnections'];
    }

    /**
    * Sets totalOuterConnections
    *
    * @param int|null $totalOuterConnections 外部连接总数
    *
    * @return $this
    */
    public function setTotalOuterConnections($totalOuterConnections)
    {
        $this->container['totalOuterConnections'] = $totalOuterConnections;
        return $this;
    }

    /**
    * Gets innerConnections
    *  内部连接详情
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ConnectionDetail[]|null
    */
    public function getInnerConnections()
    {
        return $this->container['innerConnections'];
    }

    /**
    * Sets innerConnections
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ConnectionDetail[]|null $innerConnections 内部连接详情
    *
    * @return $this
    */
    public function setInnerConnections($innerConnections)
    {
        $this->container['innerConnections'] = $innerConnections;
        return $this;
    }

    /**
    * Gets outerConnections
    *  外部连接详情
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ConnectionDetail[]|null
    */
    public function getOuterConnections()
    {
        return $this->container['outerConnections'];
    }

    /**
    * Sets outerConnections
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ConnectionDetail[]|null $outerConnections 外部连接详情
    *
    * @return $this
    */
    public function setOuterConnections($outerConnections)
    {
        $this->container['outerConnections'] = $outerConnections;
        return $this;
    }

    /**
    * Gets innerConnectionsSize
    *  内部连接详情总数
    *
    * @return int|null
    */
    public function getInnerConnectionsSize()
    {
        return $this->container['innerConnectionsSize'];
    }

    /**
    * Sets innerConnectionsSize
    *
    * @param int|null $innerConnectionsSize 内部连接详情总数
    *
    * @return $this
    */
    public function setInnerConnectionsSize($innerConnectionsSize)
    {
        $this->container['innerConnectionsSize'] = $innerConnectionsSize;
        return $this;
    }

    /**
    * Gets outerConnectionsSize
    *  外部连接详情总数
    *
    * @return int|null
    */
    public function getOuterConnectionsSize()
    {
        return $this->container['outerConnectionsSize'];
    }

    /**
    * Sets outerConnectionsSize
    *
    * @param int|null $outerConnectionsSize 外部连接详情总数
    *
    * @return $this
    */
    public function setOuterConnectionsSize($outerConnectionsSize)
    {
        $this->container['outerConnectionsSize'] = $outerConnectionsSize;
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

