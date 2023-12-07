<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OfflineNodesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OfflineNodesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  操作类型 ,shutdown代表关机,开机是startup。
    * nodeIds  节点ID列表,最多10个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'nodeIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  操作类型 ,shutdown代表关机,开机是startup。
    * nodeIds  节点ID列表,最多10个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'nodeIds' => null
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
    * action  操作类型 ,shutdown代表关机,开机是startup。
    * nodeIds  节点ID列表,最多10个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'nodeIds' => 'node_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  操作类型 ,shutdown代表关机,开机是startup。
    * nodeIds  节点ID列表,最多10个。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'nodeIds' => 'setNodeIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  操作类型 ,shutdown代表关机,开机是startup。
    * nodeIds  节点ID列表,最多10个。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'nodeIds' => 'getNodeIds'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['nodeIds'] = isset($data['nodeIds']) ? $data['nodeIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['nodeIds'] === null) {
            $invalidProperties[] = "'nodeIds' can't be null";
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
    * Gets action
    *  操作类型 ,shutdown代表关机,开机是startup。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 操作类型 ,shutdown代表关机,开机是startup。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets nodeIds
    *  节点ID列表,最多10个。
    *
    * @return string[]
    */
    public function getNodeIds()
    {
        return $this->container['nodeIds'];
    }

    /**
    * Sets nodeIds
    *
    * @param string[] $nodeIds 节点ID列表,最多10个。
    *
    * @return $this
    */
    public function setNodeIds($nodeIds)
    {
        $this->container['nodeIds'] = $nodeIds;
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

