<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeCheckStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'nodeCheckStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    * nodeStageStatus  节点检查状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'nodeStageStatus' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeStageStatus[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    * nodeStageStatus  节点检查状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'nodeStageStatus' => null
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
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    * nodeStageStatus  节点检查状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'nodeStageStatus' => 'nodeStageStatus'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    * nodeStageStatus  节点检查状态
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'nodeStageStatus' => 'setNodeStageStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    * nodeStageStatus  节点检查状态
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'nodeStageStatus' => 'getNodeStageStatus'
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['nodeStageStatus'] = isset($data['nodeStageStatus']) ? $data['nodeStageStatus'] : null;
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
    * Gets phase
    *  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase 状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets nodeStageStatus
    *  节点检查状态
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeStageStatus[]|null
    */
    public function getNodeStageStatus()
    {
        return $this->container['nodeStageStatus'];
    }

    /**
    * Sets nodeStageStatus
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeStageStatus[]|null $nodeStageStatus 节点检查状态
    *
    * @return $this
    */
    public function setNodeStageStatus($nodeStageStatus)
    {
        $this->container['nodeStageStatus'] = $nodeStageStatus;
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

