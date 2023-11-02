<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddSnapshotCrossRegionPolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddSnapshotCrossRegionPolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID
    * destinationProjectId  目的项目ID
    * destinationRegion  目的区域
    * status  状态
    * backKeepDay  保留天数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'destinationProjectId' => 'string',
            'destinationRegion' => 'string',
            'status' => 'bool',
            'backKeepDay' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID
    * destinationProjectId  目的项目ID
    * destinationRegion  目的区域
    * status  状态
    * backKeepDay  保留天数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'destinationProjectId' => null,
        'destinationRegion' => null,
        'status' => null,
        'backKeepDay' => 'int32'
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
    * clusterId  集群ID
    * destinationProjectId  目的项目ID
    * destinationRegion  目的区域
    * status  状态
    * backKeepDay  保留天数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'destinationProjectId' => 'destination_project_id',
            'destinationRegion' => 'destination_region',
            'status' => 'status',
            'backKeepDay' => 'back_keep_day'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID
    * destinationProjectId  目的项目ID
    * destinationRegion  目的区域
    * status  状态
    * backKeepDay  保留天数
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'destinationProjectId' => 'setDestinationProjectId',
            'destinationRegion' => 'setDestinationRegion',
            'status' => 'setStatus',
            'backKeepDay' => 'setBackKeepDay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID
    * destinationProjectId  目的项目ID
    * destinationRegion  目的区域
    * status  状态
    * backKeepDay  保留天数
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'destinationProjectId' => 'getDestinationProjectId',
            'destinationRegion' => 'getDestinationRegion',
            'status' => 'getStatus',
            'backKeepDay' => 'getBackKeepDay'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['destinationProjectId'] = isset($data['destinationProjectId']) ? $data['destinationProjectId'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['backKeepDay'] = isset($data['backKeepDay']) ? $data['backKeepDay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['destinationProjectId'] === null) {
            $invalidProperties[] = "'destinationProjectId' can't be null";
        }
        if ($this->container['destinationRegion'] === null) {
            $invalidProperties[] = "'destinationRegion' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['backKeepDay'] === null) {
            $invalidProperties[] = "'backKeepDay' can't be null";
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
    * Gets clusterId
    *  集群ID
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets destinationProjectId
    *  目的项目ID
    *
    * @return string
    */
    public function getDestinationProjectId()
    {
        return $this->container['destinationProjectId'];
    }

    /**
    * Sets destinationProjectId
    *
    * @param string $destinationProjectId 目的项目ID
    *
    * @return $this
    */
    public function setDestinationProjectId($destinationProjectId)
    {
        $this->container['destinationProjectId'] = $destinationProjectId;
        return $this;
    }

    /**
    * Gets destinationRegion
    *  目的区域
    *
    * @return string
    */
    public function getDestinationRegion()
    {
        return $this->container['destinationRegion'];
    }

    /**
    * Sets destinationRegion
    *
    * @param string $destinationRegion 目的区域
    *
    * @return $this
    */
    public function setDestinationRegion($destinationRegion)
    {
        $this->container['destinationRegion'] = $destinationRegion;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return bool
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param bool $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets backKeepDay
    *  保留天数
    *
    * @return int
    */
    public function getBackKeepDay()
    {
        return $this->container['backKeepDay'];
    }

    /**
    * Sets backKeepDay
    *
    * @param int $backKeepDay 保留天数
    *
    * @return $this
    */
    public function setBackKeepDay($backKeepDay)
    {
        $this->container['backKeepDay'] = $backKeepDay;
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

