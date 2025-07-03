<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TxLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TxLine';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * txFromNode  开始节点。
    * txToNode  结束节点。
    * invokeCount  调用次数。
    * rt  平均响应时间。
    * errorCount  错误数。
    * type  类型。
    * direction  指向。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'txFromNode' => 'string',
            'txToNode' => 'string',
            'invokeCount' => 'int',
            'rt' => 'double',
            'errorCount' => 'int',
            'type' => 'string',
            'direction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * txFromNode  开始节点。
    * txToNode  结束节点。
    * invokeCount  调用次数。
    * rt  平均响应时间。
    * errorCount  错误数。
    * type  类型。
    * direction  指向。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'txFromNode' => null,
        'txToNode' => null,
        'invokeCount' => 'int64',
        'rt' => 'double',
        'errorCount' => 'int64',
        'type' => null,
        'direction' => null
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
    * txFromNode  开始节点。
    * txToNode  结束节点。
    * invokeCount  调用次数。
    * rt  平均响应时间。
    * errorCount  错误数。
    * type  类型。
    * direction  指向。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'txFromNode' => 'tx_from_node',
            'txToNode' => 'tx_to_node',
            'invokeCount' => 'invoke_count',
            'rt' => 'rt',
            'errorCount' => 'error_count',
            'type' => 'type',
            'direction' => 'direction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * txFromNode  开始节点。
    * txToNode  结束节点。
    * invokeCount  调用次数。
    * rt  平均响应时间。
    * errorCount  错误数。
    * type  类型。
    * direction  指向。
    *
    * @var string[]
    */
    protected static $setters = [
            'txFromNode' => 'setTxFromNode',
            'txToNode' => 'setTxToNode',
            'invokeCount' => 'setInvokeCount',
            'rt' => 'setRt',
            'errorCount' => 'setErrorCount',
            'type' => 'setType',
            'direction' => 'setDirection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * txFromNode  开始节点。
    * txToNode  结束节点。
    * invokeCount  调用次数。
    * rt  平均响应时间。
    * errorCount  错误数。
    * type  类型。
    * direction  指向。
    *
    * @var string[]
    */
    protected static $getters = [
            'txFromNode' => 'getTxFromNode',
            'txToNode' => 'getTxToNode',
            'invokeCount' => 'getInvokeCount',
            'rt' => 'getRt',
            'errorCount' => 'getErrorCount',
            'type' => 'getType',
            'direction' => 'getDirection'
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
        $this->container['txFromNode'] = isset($data['txFromNode']) ? $data['txFromNode'] : null;
        $this->container['txToNode'] = isset($data['txToNode']) ? $data['txToNode'] : null;
        $this->container['invokeCount'] = isset($data['invokeCount']) ? $data['invokeCount'] : null;
        $this->container['rt'] = isset($data['rt']) ? $data['rt'] : null;
        $this->container['errorCount'] = isset($data['errorCount']) ? $data['errorCount'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
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
    * Gets txFromNode
    *  开始节点。
    *
    * @return string|null
    */
    public function getTxFromNode()
    {
        return $this->container['txFromNode'];
    }

    /**
    * Sets txFromNode
    *
    * @param string|null $txFromNode 开始节点。
    *
    * @return $this
    */
    public function setTxFromNode($txFromNode)
    {
        $this->container['txFromNode'] = $txFromNode;
        return $this;
    }

    /**
    * Gets txToNode
    *  结束节点。
    *
    * @return string|null
    */
    public function getTxToNode()
    {
        return $this->container['txToNode'];
    }

    /**
    * Sets txToNode
    *
    * @param string|null $txToNode 结束节点。
    *
    * @return $this
    */
    public function setTxToNode($txToNode)
    {
        $this->container['txToNode'] = $txToNode;
        return $this;
    }

    /**
    * Gets invokeCount
    *  调用次数。
    *
    * @return int|null
    */
    public function getInvokeCount()
    {
        return $this->container['invokeCount'];
    }

    /**
    * Sets invokeCount
    *
    * @param int|null $invokeCount 调用次数。
    *
    * @return $this
    */
    public function setInvokeCount($invokeCount)
    {
        $this->container['invokeCount'] = $invokeCount;
        return $this;
    }

    /**
    * Gets rt
    *  平均响应时间。
    *
    * @return double|null
    */
    public function getRt()
    {
        return $this->container['rt'];
    }

    /**
    * Sets rt
    *
    * @param double|null $rt 平均响应时间。
    *
    * @return $this
    */
    public function setRt($rt)
    {
        $this->container['rt'] = $rt;
        return $this;
    }

    /**
    * Gets errorCount
    *  错误数。
    *
    * @return int|null
    */
    public function getErrorCount()
    {
        return $this->container['errorCount'];
    }

    /**
    * Sets errorCount
    *
    * @param int|null $errorCount 错误数。
    *
    * @return $this
    */
    public function setErrorCount($errorCount)
    {
        $this->container['errorCount'] = $errorCount;
        return $this;
    }

    /**
    * Gets type
    *  类型。
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
    * @param string|null $type 类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets direction
    *  指向。
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 指向。
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
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

