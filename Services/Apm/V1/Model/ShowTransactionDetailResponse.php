<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTransactionDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTransactionDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * txNodeList  组件节点列表。
    * txLineList  组件之间调用指向线列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'txNodeList' => '\HuaweiCloud\SDK\Apm\V1\Model\TxNode[]',
            'txLineList' => '\HuaweiCloud\SDK\Apm\V1\Model\TxLine[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * txNodeList  组件节点列表。
    * txLineList  组件之间调用指向线列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'txNodeList' => null,
        'txLineList' => null
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
    * txNodeList  组件节点列表。
    * txLineList  组件之间调用指向线列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'txNodeList' => 'tx_node_list',
            'txLineList' => 'tx_line_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * txNodeList  组件节点列表。
    * txLineList  组件之间调用指向线列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'txNodeList' => 'setTxNodeList',
            'txLineList' => 'setTxLineList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * txNodeList  组件节点列表。
    * txLineList  组件之间调用指向线列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'txNodeList' => 'getTxNodeList',
            'txLineList' => 'getTxLineList'
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
        $this->container['txNodeList'] = isset($data['txNodeList']) ? $data['txNodeList'] : null;
        $this->container['txLineList'] = isset($data['txLineList']) ? $data['txLineList'] : null;
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
    * Gets txNodeList
    *  组件节点列表。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\TxNode[]|null
    */
    public function getTxNodeList()
    {
        return $this->container['txNodeList'];
    }

    /**
    * Sets txNodeList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\TxNode[]|null $txNodeList 组件节点列表。
    *
    * @return $this
    */
    public function setTxNodeList($txNodeList)
    {
        $this->container['txNodeList'] = $txNodeList;
        return $this;
    }

    /**
    * Gets txLineList
    *  组件之间调用指向线列表。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\TxLine[]|null
    */
    public function getTxLineList()
    {
        return $this->container['txLineList'];
    }

    /**
    * Sets txLineList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\TxLine[]|null $txLineList 组件之间调用指向线列表。
    *
    * @return $this
    */
    public function setTxLineList($txLineList)
    {
        $this->container['txLineList'] = $txLineList;
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

