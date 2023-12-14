<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterNodesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterNodesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeList  逻辑集群节点列表
    * count  逻辑集群节点总数
    * failedCount  逻辑集群节点失败总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeList' => '\HuaweiCloud\SDK\Dws\V2\Model\ClusterNodeInfo[]',
            'count' => 'int',
            'failedCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeList  逻辑集群节点列表
    * count  逻辑集群节点总数
    * failedCount  逻辑集群节点失败总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeList' => null,
        'count' => 'int32',
        'failedCount' => 'int32'
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
    * nodeList  逻辑集群节点列表
    * count  逻辑集群节点总数
    * failedCount  逻辑集群节点失败总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeList' => 'node_list',
            'count' => 'count',
            'failedCount' => 'failed_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeList  逻辑集群节点列表
    * count  逻辑集群节点总数
    * failedCount  逻辑集群节点失败总数
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeList' => 'setNodeList',
            'count' => 'setCount',
            'failedCount' => 'setFailedCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeList  逻辑集群节点列表
    * count  逻辑集群节点总数
    * failedCount  逻辑集群节点失败总数
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeList' => 'getNodeList',
            'count' => 'getCount',
            'failedCount' => 'getFailedCount'
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
        $this->container['nodeList'] = isset($data['nodeList']) ? $data['nodeList'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['failedCount'] = isset($data['failedCount']) ? $data['failedCount'] : null;
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
    * Gets nodeList
    *  逻辑集群节点列表
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ClusterNodeInfo[]|null
    */
    public function getNodeList()
    {
        return $this->container['nodeList'];
    }

    /**
    * Sets nodeList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ClusterNodeInfo[]|null $nodeList 逻辑集群节点列表
    *
    * @return $this
    */
    public function setNodeList($nodeList)
    {
        $this->container['nodeList'] = $nodeList;
        return $this;
    }

    /**
    * Gets count
    *  逻辑集群节点总数
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
    * @param int|null $count 逻辑集群节点总数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets failedCount
    *  逻辑集群节点失败总数
    *
    * @return int|null
    */
    public function getFailedCount()
    {
        return $this->container['failedCount'];
    }

    /**
    * Sets failedCount
    *
    * @param int|null $failedCount 逻辑集群节点失败总数
    *
    * @return $this
    */
    public function setFailedCount($failedCount)
    {
        $this->container['failedCount'] = $failedCount;
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

