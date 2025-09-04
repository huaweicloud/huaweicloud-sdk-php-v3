<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchConfirmConfigsNewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchConfirmConfigsNewRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  边缘节点ID
    * iaId  边侧第三方应用的模块ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'iaId' => 'string',
            'body' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ConfirmIaConfigsRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  边缘节点ID
    * iaId  边侧第三方应用的模块ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'iaId' => null,
        'body' => null
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
    * nodeId  边缘节点ID
    * iaId  边侧第三方应用的模块ID
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'iaId' => 'ia_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  边缘节点ID
    * iaId  边侧第三方应用的模块ID
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'iaId' => 'setIaId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  边缘节点ID
    * iaId  边侧第三方应用的模块ID
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'iaId' => 'getIaId',
            'body' => 'getBody'
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
        $this->container['iaId'] = isset($data['iaId']) ? $data['iaId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
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
            if ((mb_strlen($this->container['nodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['nodeId'])) {
                $invalidProperties[] = "invalid value for 'nodeId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
        if ($this->container['iaId'] === null) {
            $invalidProperties[] = "'iaId' can't be null";
        }
            if ((mb_strlen($this->container['iaId']) > 64)) {
                $invalidProperties[] = "invalid value for 'iaId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['iaId']) < 1)) {
                $invalidProperties[] = "invalid value for 'iaId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_]*$/", $this->container['iaId'])) {
                $invalidProperties[] = "invalid value for 'iaId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
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
    *  边缘节点ID
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
    * @param string $nodeId 边缘节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets iaId
    *  边侧第三方应用的模块ID
    *
    * @return string
    */
    public function getIaId()
    {
        return $this->container['iaId'];
    }

    /**
    * Sets iaId
    *
    * @param string $iaId 边侧第三方应用的模块ID
    *
    * @return $this
    */
    public function setIaId($iaId)
    {
        $this->container['iaId'] = $iaId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ConfirmIaConfigsRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ConfirmIaConfigsRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

