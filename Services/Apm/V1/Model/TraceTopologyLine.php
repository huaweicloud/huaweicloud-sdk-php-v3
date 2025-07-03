<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TraceTopologyLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TraceTopologyLine';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startNodeId  开始节点id。
    * endNodeId  结束节点id。
    * spanId  调用跨度id。
    * clientInfo  clientInfo
    * serverInfo  serverInfo
    * id  id。
    * hint  获取一条线的提示信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startNodeId' => 'int',
            'endNodeId' => 'int',
            'spanId' => 'string',
            'clientInfo' => '\HuaweiCloud\SDK\Apm\V1\Model\TraceTopologyLineInfo',
            'serverInfo' => '\HuaweiCloud\SDK\Apm\V1\Model\TraceTopologyLineInfo',
            'id' => 'string',
            'hint' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startNodeId  开始节点id。
    * endNodeId  结束节点id。
    * spanId  调用跨度id。
    * clientInfo  clientInfo
    * serverInfo  serverInfo
    * id  id。
    * hint  获取一条线的提示信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startNodeId' => 'int64',
        'endNodeId' => 'int64',
        'spanId' => null,
        'clientInfo' => null,
        'serverInfo' => null,
        'id' => null,
        'hint' => null
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
    * startNodeId  开始节点id。
    * endNodeId  结束节点id。
    * spanId  调用跨度id。
    * clientInfo  clientInfo
    * serverInfo  serverInfo
    * id  id。
    * hint  获取一条线的提示信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startNodeId' => 'start_node_id',
            'endNodeId' => 'end_node_id',
            'spanId' => 'span_id',
            'clientInfo' => 'client_info',
            'serverInfo' => 'server_info',
            'id' => 'id',
            'hint' => 'hint'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startNodeId  开始节点id。
    * endNodeId  结束节点id。
    * spanId  调用跨度id。
    * clientInfo  clientInfo
    * serverInfo  serverInfo
    * id  id。
    * hint  获取一条线的提示信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'startNodeId' => 'setStartNodeId',
            'endNodeId' => 'setEndNodeId',
            'spanId' => 'setSpanId',
            'clientInfo' => 'setClientInfo',
            'serverInfo' => 'setServerInfo',
            'id' => 'setId',
            'hint' => 'setHint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startNodeId  开始节点id。
    * endNodeId  结束节点id。
    * spanId  调用跨度id。
    * clientInfo  clientInfo
    * serverInfo  serverInfo
    * id  id。
    * hint  获取一条线的提示信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'startNodeId' => 'getStartNodeId',
            'endNodeId' => 'getEndNodeId',
            'spanId' => 'getSpanId',
            'clientInfo' => 'getClientInfo',
            'serverInfo' => 'getServerInfo',
            'id' => 'getId',
            'hint' => 'getHint'
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
        $this->container['startNodeId'] = isset($data['startNodeId']) ? $data['startNodeId'] : null;
        $this->container['endNodeId'] = isset($data['endNodeId']) ? $data['endNodeId'] : null;
        $this->container['spanId'] = isset($data['spanId']) ? $data['spanId'] : null;
        $this->container['clientInfo'] = isset($data['clientInfo']) ? $data['clientInfo'] : null;
        $this->container['serverInfo'] = isset($data['serverInfo']) ? $data['serverInfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['hint'] = isset($data['hint']) ? $data['hint'] : null;
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
    * Gets startNodeId
    *  开始节点id。
    *
    * @return int|null
    */
    public function getStartNodeId()
    {
        return $this->container['startNodeId'];
    }

    /**
    * Sets startNodeId
    *
    * @param int|null $startNodeId 开始节点id。
    *
    * @return $this
    */
    public function setStartNodeId($startNodeId)
    {
        $this->container['startNodeId'] = $startNodeId;
        return $this;
    }

    /**
    * Gets endNodeId
    *  结束节点id。
    *
    * @return int|null
    */
    public function getEndNodeId()
    {
        return $this->container['endNodeId'];
    }

    /**
    * Sets endNodeId
    *
    * @param int|null $endNodeId 结束节点id。
    *
    * @return $this
    */
    public function setEndNodeId($endNodeId)
    {
        $this->container['endNodeId'] = $endNodeId;
        return $this;
    }

    /**
    * Gets spanId
    *  调用跨度id。
    *
    * @return string|null
    */
    public function getSpanId()
    {
        return $this->container['spanId'];
    }

    /**
    * Sets spanId
    *
    * @param string|null $spanId 调用跨度id。
    *
    * @return $this
    */
    public function setSpanId($spanId)
    {
        $this->container['spanId'] = $spanId;
        return $this;
    }

    /**
    * Gets clientInfo
    *  clientInfo
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\TraceTopologyLineInfo|null
    */
    public function getClientInfo()
    {
        return $this->container['clientInfo'];
    }

    /**
    * Sets clientInfo
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\TraceTopologyLineInfo|null $clientInfo clientInfo
    *
    * @return $this
    */
    public function setClientInfo($clientInfo)
    {
        $this->container['clientInfo'] = $clientInfo;
        return $this;
    }

    /**
    * Gets serverInfo
    *  serverInfo
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\TraceTopologyLineInfo|null
    */
    public function getServerInfo()
    {
        return $this->container['serverInfo'];
    }

    /**
    * Sets serverInfo
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\TraceTopologyLineInfo|null $serverInfo serverInfo
    *
    * @return $this
    */
    public function setServerInfo($serverInfo)
    {
        $this->container['serverInfo'] = $serverInfo;
        return $this;
    }

    /**
    * Gets id
    *  id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets hint
    *  获取一条线的提示信息。
    *
    * @return string|null
    */
    public function getHint()
    {
        return $this->container['hint'];
    }

    /**
    * Sets hint
    *
    * @param string|null $hint 获取一条线的提示信息。
    *
    * @return $this
    */
    public function setHint($hint)
    {
        $this->container['hint'] = $hint;
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

