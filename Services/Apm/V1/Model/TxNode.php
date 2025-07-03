<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TxNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TxNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * txNodeId  节点id。
    * txNodeName  节点名称。
    * txNodeType  节点类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'txNodeId' => 'string',
            'txNodeName' => 'string',
            'txNodeType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * txNodeId  节点id。
    * txNodeName  节点名称。
    * txNodeType  节点类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'txNodeId' => null,
        'txNodeName' => null,
        'txNodeType' => null
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
    * txNodeId  节点id。
    * txNodeName  节点名称。
    * txNodeType  节点类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'txNodeId' => 'tx_node_id',
            'txNodeName' => 'tx_node_name',
            'txNodeType' => 'tx_node_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * txNodeId  节点id。
    * txNodeName  节点名称。
    * txNodeType  节点类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'txNodeId' => 'setTxNodeId',
            'txNodeName' => 'setTxNodeName',
            'txNodeType' => 'setTxNodeType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * txNodeId  节点id。
    * txNodeName  节点名称。
    * txNodeType  节点类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'txNodeId' => 'getTxNodeId',
            'txNodeName' => 'getTxNodeName',
            'txNodeType' => 'getTxNodeType'
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
        $this->container['txNodeId'] = isset($data['txNodeId']) ? $data['txNodeId'] : null;
        $this->container['txNodeName'] = isset($data['txNodeName']) ? $data['txNodeName'] : null;
        $this->container['txNodeType'] = isset($data['txNodeType']) ? $data['txNodeType'] : null;
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
    * Gets txNodeId
    *  节点id。
    *
    * @return string|null
    */
    public function getTxNodeId()
    {
        return $this->container['txNodeId'];
    }

    /**
    * Sets txNodeId
    *
    * @param string|null $txNodeId 节点id。
    *
    * @return $this
    */
    public function setTxNodeId($txNodeId)
    {
        $this->container['txNodeId'] = $txNodeId;
        return $this;
    }

    /**
    * Gets txNodeName
    *  节点名称。
    *
    * @return string|null
    */
    public function getTxNodeName()
    {
        return $this->container['txNodeName'];
    }

    /**
    * Sets txNodeName
    *
    * @param string|null $txNodeName 节点名称。
    *
    * @return $this
    */
    public function setTxNodeName($txNodeName)
    {
        $this->container['txNodeName'] = $txNodeName;
        return $this;
    }

    /**
    * Gets txNodeType
    *  节点类型。
    *
    * @return string|null
    */
    public function getTxNodeType()
    {
        return $this->container['txNodeType'];
    }

    /**
    * Sets txNodeType
    *
    * @param string|null $txNodeType 节点类型。
    *
    * @return $this
    */
    public function setTxNodeType($txNodeType)
    {
        $this->container['txNodeType'] = $txNodeType;
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

