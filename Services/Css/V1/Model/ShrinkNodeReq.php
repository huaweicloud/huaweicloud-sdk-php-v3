<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShrinkNodeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShrinkNodeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reducedNodeNum  需要缩容的节点数量。  - 对节点缩容后，请确保每个节点类型在每个AZ中的数量至少为1。  - 关于跨AZ的集群，在不同AZ中同类型节点个数的差值要小于等于1。  - 关于没有Master节点的集群，每次缩容的数据节点个数(包含冷数据节点和其他类型节点)要小于当前数据节点总数的一半，缩容后的数据节点个数要大于索引的最大副本个数。  - 关于有Master节点的集群，每次缩容的Master节点个数要小于当前Master节点总数的一半，缩容后的Master节点个数必须是奇数且不小于3。
    * type  指定节点类型。 - ess：数据节点。 - ess-cold：冷数据节点。 - ess-client：Client节点。 - ess-master：Master节点。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reducedNodeNum' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reducedNodeNum  需要缩容的节点数量。  - 对节点缩容后，请确保每个节点类型在每个AZ中的数量至少为1。  - 关于跨AZ的集群，在不同AZ中同类型节点个数的差值要小于等于1。  - 关于没有Master节点的集群，每次缩容的数据节点个数(包含冷数据节点和其他类型节点)要小于当前数据节点总数的一半，缩容后的数据节点个数要大于索引的最大副本个数。  - 关于有Master节点的集群，每次缩容的Master节点个数要小于当前Master节点总数的一半，缩容后的Master节点个数必须是奇数且不小于3。
    * type  指定节点类型。 - ess：数据节点。 - ess-cold：冷数据节点。 - ess-client：Client节点。 - ess-master：Master节点。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reducedNodeNum' => 'int32',
        'type' => null
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
    * reducedNodeNum  需要缩容的节点数量。  - 对节点缩容后，请确保每个节点类型在每个AZ中的数量至少为1。  - 关于跨AZ的集群，在不同AZ中同类型节点个数的差值要小于等于1。  - 关于没有Master节点的集群，每次缩容的数据节点个数(包含冷数据节点和其他类型节点)要小于当前数据节点总数的一半，缩容后的数据节点个数要大于索引的最大副本个数。  - 关于有Master节点的集群，每次缩容的Master节点个数要小于当前Master节点总数的一半，缩容后的Master节点个数必须是奇数且不小于3。
    * type  指定节点类型。 - ess：数据节点。 - ess-cold：冷数据节点。 - ess-client：Client节点。 - ess-master：Master节点。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reducedNodeNum' => 'reducedNodeNum',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reducedNodeNum  需要缩容的节点数量。  - 对节点缩容后，请确保每个节点类型在每个AZ中的数量至少为1。  - 关于跨AZ的集群，在不同AZ中同类型节点个数的差值要小于等于1。  - 关于没有Master节点的集群，每次缩容的数据节点个数(包含冷数据节点和其他类型节点)要小于当前数据节点总数的一半，缩容后的数据节点个数要大于索引的最大副本个数。  - 关于有Master节点的集群，每次缩容的Master节点个数要小于当前Master节点总数的一半，缩容后的Master节点个数必须是奇数且不小于3。
    * type  指定节点类型。 - ess：数据节点。 - ess-cold：冷数据节点。 - ess-client：Client节点。 - ess-master：Master节点。
    *
    * @var string[]
    */
    protected static $setters = [
            'reducedNodeNum' => 'setReducedNodeNum',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reducedNodeNum  需要缩容的节点数量。  - 对节点缩容后，请确保每个节点类型在每个AZ中的数量至少为1。  - 关于跨AZ的集群，在不同AZ中同类型节点个数的差值要小于等于1。  - 关于没有Master节点的集群，每次缩容的数据节点个数(包含冷数据节点和其他类型节点)要小于当前数据节点总数的一半，缩容后的数据节点个数要大于索引的最大副本个数。  - 关于有Master节点的集群，每次缩容的Master节点个数要小于当前Master节点总数的一半，缩容后的Master节点个数必须是奇数且不小于3。
    * type  指定节点类型。 - ess：数据节点。 - ess-cold：冷数据节点。 - ess-client：Client节点。 - ess-master：Master节点。
    *
    * @var string[]
    */
    protected static $getters = [
            'reducedNodeNum' => 'getReducedNodeNum',
            'type' => 'getType'
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
        $this->container['reducedNodeNum'] = isset($data['reducedNodeNum']) ? $data['reducedNodeNum'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['reducedNodeNum'] === null) {
            $invalidProperties[] = "'reducedNodeNum' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets reducedNodeNum
    *  需要缩容的节点数量。  - 对节点缩容后，请确保每个节点类型在每个AZ中的数量至少为1。  - 关于跨AZ的集群，在不同AZ中同类型节点个数的差值要小于等于1。  - 关于没有Master节点的集群，每次缩容的数据节点个数(包含冷数据节点和其他类型节点)要小于当前数据节点总数的一半，缩容后的数据节点个数要大于索引的最大副本个数。  - 关于有Master节点的集群，每次缩容的Master节点个数要小于当前Master节点总数的一半，缩容后的Master节点个数必须是奇数且不小于3。
    *
    * @return int
    */
    public function getReducedNodeNum()
    {
        return $this->container['reducedNodeNum'];
    }

    /**
    * Sets reducedNodeNum
    *
    * @param int $reducedNodeNum 需要缩容的节点数量。  - 对节点缩容后，请确保每个节点类型在每个AZ中的数量至少为1。  - 关于跨AZ的集群，在不同AZ中同类型节点个数的差值要小于等于1。  - 关于没有Master节点的集群，每次缩容的数据节点个数(包含冷数据节点和其他类型节点)要小于当前数据节点总数的一半，缩容后的数据节点个数要大于索引的最大副本个数。  - 关于有Master节点的集群，每次缩容的Master节点个数要小于当前Master节点总数的一半，缩容后的Master节点个数必须是奇数且不小于3。
    *
    * @return $this
    */
    public function setReducedNodeNum($reducedNodeNum)
    {
        $this->container['reducedNodeNum'] = $reducedNodeNum;
        return $this;
    }

    /**
    * Gets type
    *  指定节点类型。 - ess：数据节点。 - ess-cold：冷数据节点。 - ess-client：Client节点。 - ess-master：Master节点。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 指定节点类型。 - ess：数据节点。 - ess-cold：冷数据节点。 - ess-client：Client节点。 - ess-master：Master节点。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

