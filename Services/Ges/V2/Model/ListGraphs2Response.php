<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGraphs2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGraphs2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * graphCount  图总个数。请求失败时为空。
    * graphs  图列表。请求失败时为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'graphCount' => 'int',
            'graphs' => '\HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespGraphs[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * graphCount  图总个数。请求失败时为空。
    * graphs  图列表。请求失败时为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'graphCount' => 'int32',
        'graphs' => null
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
    * graphCount  图总个数。请求失败时为空。
    * graphs  图列表。请求失败时为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'graphCount' => 'graph_count',
            'graphs' => 'graphs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * graphCount  图总个数。请求失败时为空。
    * graphs  图列表。请求失败时为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'graphCount' => 'setGraphCount',
            'graphs' => 'setGraphs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * graphCount  图总个数。请求失败时为空。
    * graphs  图列表。请求失败时为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'graphCount' => 'getGraphCount',
            'graphs' => 'getGraphs'
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
        $this->container['graphCount'] = isset($data['graphCount']) ? $data['graphCount'] : null;
        $this->container['graphs'] = isset($data['graphs']) ? $data['graphs'] : null;
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
    * Gets graphCount
    *  图总个数。请求失败时为空。
    *
    * @return int|null
    */
    public function getGraphCount()
    {
        return $this->container['graphCount'];
    }

    /**
    * Sets graphCount
    *
    * @param int|null $graphCount 图总个数。请求失败时为空。
    *
    * @return $this
    */
    public function setGraphCount($graphCount)
    {
        $this->container['graphCount'] = $graphCount;
        return $this;
    }

    /**
    * Gets graphs
    *  图列表。请求失败时为空。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespGraphs[]|null
    */
    public function getGraphs()
    {
        return $this->container['graphs'];
    }

    /**
    * Sets graphs
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespGraphs[]|null $graphs 图列表。请求失败时为空。
    *
    * @return $this
    */
    public function setGraphs($graphs)
    {
        $this->container['graphs'] = $graphs;
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

