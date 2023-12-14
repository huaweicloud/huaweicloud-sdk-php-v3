<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLogicalClusterRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLogicalClusterRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterRings  逻辑集群编辑环列表信息
    * mode  模式
    * waitingForKilling  是否等待销毁
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterRings' => '\HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[]',
            'mode' => 'string',
            'waitingForKilling' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterRings  逻辑集群编辑环列表信息
    * mode  模式
    * waitingForKilling  是否等待销毁
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterRings' => null,
        'mode' => null,
        'waitingForKilling' => null
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
    * clusterRings  逻辑集群编辑环列表信息
    * mode  模式
    * waitingForKilling  是否等待销毁
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterRings' => 'cluster_rings',
            'mode' => 'mode',
            'waitingForKilling' => 'waiting_for_killing'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterRings  逻辑集群编辑环列表信息
    * mode  模式
    * waitingForKilling  是否等待销毁
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterRings' => 'setClusterRings',
            'mode' => 'setMode',
            'waitingForKilling' => 'setWaitingForKilling'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterRings  逻辑集群编辑环列表信息
    * mode  模式
    * waitingForKilling  是否等待销毁
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterRings' => 'getClusterRings',
            'mode' => 'getMode',
            'waitingForKilling' => 'getWaitingForKilling'
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
        $this->container['clusterRings'] = isset($data['clusterRings']) ? $data['clusterRings'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['waitingForKilling'] = isset($data['waitingForKilling']) ? $data['waitingForKilling'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterRings'] === null) {
            $invalidProperties[] = "'clusterRings' can't be null";
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
    * Gets clusterRings
    *  逻辑集群编辑环列表信息
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[]
    */
    public function getClusterRings()
    {
        return $this->container['clusterRings'];
    }

    /**
    * Sets clusterRings
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ClusterRing[] $clusterRings 逻辑集群编辑环列表信息
    *
    * @return $this
    */
    public function setClusterRings($clusterRings)
    {
        $this->container['clusterRings'] = $clusterRings;
        return $this;
    }

    /**
    * Gets mode
    *  模式
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 模式
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets waitingForKilling
    *  是否等待销毁
    *
    * @return int|null
    */
    public function getWaitingForKilling()
    {
        return $this->container['waitingForKilling'];
    }

    /**
    * Sets waitingForKilling
    *
    * @param int|null $waitingForKilling 是否等待销毁
    *
    * @return $this
    */
    public function setWaitingForKilling($waitingForKilling)
    {
        $this->container['waitingForKilling'] = $waitingForKilling;
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

