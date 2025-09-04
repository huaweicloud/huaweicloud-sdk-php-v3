<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HtapNodeInfoResponseBodyNodeList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HtapNodeInfoResponseBody_node_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    * nodeName  **参数解释**： HTAP标准版实例节点名称。  **取值范围**：  不涉及。
    * role  **参数解释**： HTAP标准版实例节点角色。  **取值范围**： - fe-leader - fe-follower - fe-observer - be
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'nodeName' => 'string',
            'role' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    * nodeName  **参数解释**： HTAP标准版实例节点名称。  **取值范围**：  不涉及。
    * role  **参数解释**： HTAP标准版实例节点角色。  **取值范围**： - fe-leader - fe-follower - fe-observer - be
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'nodeName' => null,
        'role' => null
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
    * nodeId  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    * nodeName  **参数解释**： HTAP标准版实例节点名称。  **取值范围**：  不涉及。
    * role  **参数解释**： HTAP标准版实例节点角色。  **取值范围**： - fe-leader - fe-follower - fe-observer - be
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'role' => 'role'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    * nodeName  **参数解释**： HTAP标准版实例节点名称。  **取值范围**：  不涉及。
    * role  **参数解释**： HTAP标准版实例节点角色。  **取值范围**： - fe-leader - fe-follower - fe-observer - be
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'role' => 'setRole'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    * nodeName  **参数解释**： HTAP标准版实例节点名称。  **取值范围**：  不涉及。
    * role  **参数解释**： HTAP标准版实例节点角色。  **取值范围**： - fe-leader - fe-follower - fe-observer - be
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'role' => 'getRole'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
            if ((mb_strlen($this->container['nodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['nodeId']) < 2)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['nodeName'] === null) {
            $invalidProperties[] = "'nodeName' can't be null";
        }
            if ((mb_strlen($this->container['nodeName']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['nodeName']) < 2)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
            if ((mb_strlen($this->container['role']) > 16)) {
                $invalidProperties[] = "invalid value for 'role', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['role']) < 2)) {
                $invalidProperties[] = "invalid value for 'role', the character length must be bigger than or equal to 2.";
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
    * Gets nodeId
    *  **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId **参数解释**： HTAP标准版实例节点ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  **参数解释**： HTAP标准版实例节点名称。  **取值范围**：  不涉及。
    *
    * @return string
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string $nodeName **参数解释**： HTAP标准版实例节点名称。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets role
    *  **参数解释**： HTAP标准版实例节点角色。  **取值范围**： - fe-leader - fe-follower - fe-observer - be
    *
    * @return string
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string $role **参数解释**： HTAP标准版实例节点角色。  **取值范围**： - fe-leader - fe-follower - fe-observer - be
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
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

