<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplaceNodeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplaceNodeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  只读实例ID。
    * nodeId  只读实例的节点ID。
    * replaceAction  替换动作，取值范围： REPLACE: 节点顶替 REPLACE_ROLLBACK: 节点顶替回切
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'nodeId' => 'string',
            'replaceAction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  只读实例ID。
    * nodeId  只读实例的节点ID。
    * replaceAction  替换动作，取值范围： REPLACE: 节点顶替 REPLACE_ROLLBACK: 节点顶替回切
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'nodeId' => null,
        'replaceAction' => null
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
    * instanceId  只读实例ID。
    * nodeId  只读实例的节点ID。
    * replaceAction  替换动作，取值范围： REPLACE: 节点顶替 REPLACE_ROLLBACK: 节点顶替回切
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'replaceAction' => 'replace_action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  只读实例ID。
    * nodeId  只读实例的节点ID。
    * replaceAction  替换动作，取值范围： REPLACE: 节点顶替 REPLACE_ROLLBACK: 节点顶替回切
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'replaceAction' => 'setReplaceAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  只读实例ID。
    * nodeId  只读实例的节点ID。
    * replaceAction  替换动作，取值范围： REPLACE: 节点顶替 REPLACE_ROLLBACK: 节点顶替回切
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'replaceAction' => 'getReplaceAction'
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
    const REPLACE_ACTION_REPLACE = 'REPLACE';
    const REPLACE_ACTION_REPLACE_ROLLBACK = 'REPLACE_ROLLBACK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReplaceActionAllowableValues()
    {
        return [
            self::REPLACE_ACTION_REPLACE,
            self::REPLACE_ACTION_REPLACE_ROLLBACK,
        ];
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['replaceAction'] = isset($data['replaceAction']) ? $data['replaceAction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['replaceAction'] === null) {
            $invalidProperties[] = "'replaceAction' can't be null";
        }
            $allowedValues = $this->getReplaceActionAllowableValues();
                if (!is_null($this->container['replaceAction']) && !in_array($this->container['replaceAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'replaceAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets instanceId
    *  只读实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 只读实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  只读实例的节点ID。
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
    * @param string $nodeId 只读实例的节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets replaceAction
    *  替换动作，取值范围： REPLACE: 节点顶替 REPLACE_ROLLBACK: 节点顶替回切
    *
    * @return string
    */
    public function getReplaceAction()
    {
        return $this->container['replaceAction'];
    }

    /**
    * Sets replaceAction
    *
    * @param string $replaceAction 替换动作，取值范围： REPLACE: 节点顶替 REPLACE_ROLLBACK: 节点顶替回切
    *
    * @return $this
    */
    public function setReplaceAction($replaceAction)
    {
        $this->container['replaceAction'] = $replaceAction;
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

