<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CentralNetworkConnectionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CentralNetworkConnectionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * planeId  中心网络平面ID。
    * globalConnectionBandwidthId  全域互联带宽ID。
    * bandwidthSize  带宽值，单位Mbps。
    * connectionType  connectionType
    * connectionPointPair  中心网络连接的两个端点定义，长度固定为2的数组。
    * state  state
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'planeId' => 'string',
            'globalConnectionBandwidthId' => 'string',
            'bandwidthSize' => 'int',
            'connectionType' => '\HuaweiCloud\SDK\Cc\V3\Model\ConnectionTypeEnum',
            'connectionPointPair' => '\HuaweiCloud\SDK\Cc\V3\Model\ConnectionPoint[]',
            'state' => '\HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionStateEnum'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * planeId  中心网络平面ID。
    * globalConnectionBandwidthId  全域互联带宽ID。
    * bandwidthSize  带宽值，单位Mbps。
    * connectionType  connectionType
    * connectionPointPair  中心网络连接的两个端点定义，长度固定为2的数组。
    * state  state
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'planeId' => null,
        'globalConnectionBandwidthId' => null,
        'bandwidthSize' => 'int64',
        'connectionType' => null,
        'connectionPointPair' => null,
        'state' => null
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
    * id  实例ID。
    * planeId  中心网络平面ID。
    * globalConnectionBandwidthId  全域互联带宽ID。
    * bandwidthSize  带宽值，单位Mbps。
    * connectionType  connectionType
    * connectionPointPair  中心网络连接的两个端点定义，长度固定为2的数组。
    * state  state
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'planeId' => 'plane_id',
            'globalConnectionBandwidthId' => 'global_connection_bandwidth_id',
            'bandwidthSize' => 'bandwidth_size',
            'connectionType' => 'connection_type',
            'connectionPointPair' => 'connection_point_pair',
            'state' => 'state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * planeId  中心网络平面ID。
    * globalConnectionBandwidthId  全域互联带宽ID。
    * bandwidthSize  带宽值，单位Mbps。
    * connectionType  connectionType
    * connectionPointPair  中心网络连接的两个端点定义，长度固定为2的数组。
    * state  state
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'planeId' => 'setPlaneId',
            'globalConnectionBandwidthId' => 'setGlobalConnectionBandwidthId',
            'bandwidthSize' => 'setBandwidthSize',
            'connectionType' => 'setConnectionType',
            'connectionPointPair' => 'setConnectionPointPair',
            'state' => 'setState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * planeId  中心网络平面ID。
    * globalConnectionBandwidthId  全域互联带宽ID。
    * bandwidthSize  带宽值，单位Mbps。
    * connectionType  connectionType
    * connectionPointPair  中心网络连接的两个端点定义，长度固定为2的数组。
    * state  state
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'planeId' => 'getPlaneId',
            'globalConnectionBandwidthId' => 'getGlobalConnectionBandwidthId',
            'bandwidthSize' => 'getBandwidthSize',
            'connectionType' => 'getConnectionType',
            'connectionPointPair' => 'getConnectionPointPair',
            'state' => 'getState'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['planeId'] = isset($data['planeId']) ? $data['planeId'] : null;
        $this->container['globalConnectionBandwidthId'] = isset($data['globalConnectionBandwidthId']) ? $data['globalConnectionBandwidthId'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['connectionType'] = isset($data['connectionType']) ? $data['connectionType'] : null;
        $this->container['connectionPointPair'] = isset($data['connectionPointPair']) ? $data['connectionPointPair'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['planeId'] === null) {
            $invalidProperties[] = "'planeId' can't be null";
        }
            if ((mb_strlen($this->container['planeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'planeId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['planeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'planeId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['planeId'])) {
                $invalidProperties[] = "invalid value for 'planeId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['globalConnectionBandwidthId']) && (mb_strlen($this->container['globalConnectionBandwidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['globalConnectionBandwidthId']) && (mb_strlen($this->container['globalConnectionBandwidthId']) < 36)) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['globalConnectionBandwidthId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['globalConnectionBandwidthId'])) {
                $invalidProperties[] = "invalid value for 'globalConnectionBandwidthId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['bandwidthSize']) && ($this->container['bandwidthSize'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['bandwidthSize']) && ($this->container['bandwidthSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be bigger than or equal to 1.";
            }
        if ($this->container['connectionType'] === null) {
            $invalidProperties[] = "'connectionType' can't be null";
        }
        if ($this->container['connectionPointPair'] === null) {
            $invalidProperties[] = "'connectionPointPair' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
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
    * Gets id
    *  实例ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets planeId
    *  中心网络平面ID。
    *
    * @return string
    */
    public function getPlaneId()
    {
        return $this->container['planeId'];
    }

    /**
    * Sets planeId
    *
    * @param string $planeId 中心网络平面ID。
    *
    * @return $this
    */
    public function setPlaneId($planeId)
    {
        $this->container['planeId'] = $planeId;
        return $this;
    }

    /**
    * Gets globalConnectionBandwidthId
    *  全域互联带宽ID。
    *
    * @return string|null
    */
    public function getGlobalConnectionBandwidthId()
    {
        return $this->container['globalConnectionBandwidthId'];
    }

    /**
    * Sets globalConnectionBandwidthId
    *
    * @param string|null $globalConnectionBandwidthId 全域互联带宽ID。
    *
    * @return $this
    */
    public function setGlobalConnectionBandwidthId($globalConnectionBandwidthId)
    {
        $this->container['globalConnectionBandwidthId'] = $globalConnectionBandwidthId;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  带宽值，单位Mbps。
    *
    * @return int|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param int|null $bandwidthSize 带宽值，单位Mbps。
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets connectionType
    *  connectionType
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\ConnectionTypeEnum
    */
    public function getConnectionType()
    {
        return $this->container['connectionType'];
    }

    /**
    * Sets connectionType
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\ConnectionTypeEnum $connectionType connectionType
    *
    * @return $this
    */
    public function setConnectionType($connectionType)
    {
        $this->container['connectionType'] = $connectionType;
        return $this;
    }

    /**
    * Gets connectionPointPair
    *  中心网络连接的两个端点定义，长度固定为2的数组。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\ConnectionPoint[]
    */
    public function getConnectionPointPair()
    {
        return $this->container['connectionPointPair'];
    }

    /**
    * Sets connectionPointPair
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\ConnectionPoint[] $connectionPointPair 中心网络连接的两个端点定义，长度固定为2的数组。
    *
    * @return $this
    */
    public function setConnectionPointPair($connectionPointPair)
    {
        $this->container['connectionPointPair'] = $connectionPointPair;
        return $this;
    }

    /**
    * Gets state
    *  state
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionStateEnum
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionStateEnum $state state
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

