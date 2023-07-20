<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlShowProxyResponseV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlShowProxyResponseV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * proxy  proxy
    * masterNode  masterNode
    * readonlyNodes  只读节点信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'proxy' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyV3',
            'masterNode' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyNodeV3',
            'readonlyNodes' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyNodeV3[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * proxy  proxy
    * masterNode  masterNode
    * readonlyNodes  只读节点信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'proxy' => null,
        'masterNode' => null,
        'readonlyNodes' => null
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
    * proxy  proxy
    * masterNode  masterNode
    * readonlyNodes  只读节点信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'proxy' => 'proxy',
            'masterNode' => 'master_node',
            'readonlyNodes' => 'readonly_nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * proxy  proxy
    * masterNode  masterNode
    * readonlyNodes  只读节点信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'proxy' => 'setProxy',
            'masterNode' => 'setMasterNode',
            'readonlyNodes' => 'setReadonlyNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * proxy  proxy
    * masterNode  masterNode
    * readonlyNodes  只读节点信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'proxy' => 'getProxy',
            'masterNode' => 'getMasterNode',
            'readonlyNodes' => 'getReadonlyNodes'
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
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['masterNode'] = isset($data['masterNode']) ? $data['masterNode'] : null;
        $this->container['readonlyNodes'] = isset($data['readonlyNodes']) ? $data['readonlyNodes'] : null;
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
    * Gets proxy
    *  proxy
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyV3|null
    */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
    * Sets proxy
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyV3|null $proxy proxy
    *
    * @return $this
    */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;
        return $this;
    }

    /**
    * Gets masterNode
    *  masterNode
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyNodeV3|null
    */
    public function getMasterNode()
    {
        return $this->container['masterNode'];
    }

    /**
    * Sets masterNode
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyNodeV3|null $masterNode masterNode
    *
    * @return $this
    */
    public function setMasterNode($masterNode)
    {
        $this->container['masterNode'] = $masterNode;
        return $this;
    }

    /**
    * Gets readonlyNodes
    *  只读节点信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyNodeV3[]|null
    */
    public function getReadonlyNodes()
    {
        return $this->container['readonlyNodes'];
    }

    /**
    * Sets readonlyNodes
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyNodeV3[]|null $readonlyNodes 只读节点信息。
    *
    * @return $this
    */
    public function setReadonlyNodes($readonlyNodes)
    {
        $this->container['readonlyNodes'] = $readonlyNodes;
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

