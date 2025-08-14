<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Workload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Workload';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型，包含如下：   - deployments：无状态负载   - statefulsets：有状态负载   - daemonsets：守护进程表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workloadId' => 'string',
            'workloadName' => 'string',
            'workloadType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型，包含如下：   - deployments：无状态负载   - statefulsets：有状态负载   - daemonsets：守护进程表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workloadId' => null,
        'workloadName' => null,
        'workloadType' => null
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
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型，包含如下：   - deployments：无状态负载   - statefulsets：有状态负载   - daemonsets：守护进程表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workloadId' => 'workload_id',
            'workloadName' => 'workload_name',
            'workloadType' => 'workload_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型，包含如下：   - deployments：无状态负载   - statefulsets：有状态负载   - daemonsets：守护进程表
    *
    * @var string[]
    */
    protected static $setters = [
            'workloadId' => 'setWorkloadId',
            'workloadName' => 'setWorkloadName',
            'workloadType' => 'setWorkloadType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workloadId  工作负载ID
    * workloadName  工作负载名称
    * workloadType  工作负载类型，包含如下：   - deployments：无状态负载   - statefulsets：有状态负载   - daemonsets：守护进程表
    *
    * @var string[]
    */
    protected static $getters = [
            'workloadId' => 'getWorkloadId',
            'workloadName' => 'getWorkloadName',
            'workloadType' => 'getWorkloadType'
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
        $this->container['workloadId'] = isset($data['workloadId']) ? $data['workloadId'] : null;
        $this->container['workloadName'] = isset($data['workloadName']) ? $data['workloadName'] : null;
        $this->container['workloadType'] = isset($data['workloadType']) ? $data['workloadType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workloadId'] === null) {
            $invalidProperties[] = "'workloadId' can't be null";
        }
            if ((mb_strlen($this->container['workloadId']) > 256)) {
                $invalidProperties[] = "invalid value for 'workloadId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['workloadId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['workloadName'] === null) {
            $invalidProperties[] = "'workloadName' can't be null";
        }
            if ((mb_strlen($this->container['workloadName']) > 256)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['workloadName']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['workloadType'] === null) {
            $invalidProperties[] = "'workloadType' can't be null";
        }
            if ((mb_strlen($this->container['workloadType']) > 256)) {
                $invalidProperties[] = "invalid value for 'workloadType', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['workloadType']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadType', the character length must be bigger than or equal to 0.";
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
    * Gets workloadId
    *  工作负载ID
    *
    * @return string
    */
    public function getWorkloadId()
    {
        return $this->container['workloadId'];
    }

    /**
    * Sets workloadId
    *
    * @param string $workloadId 工作负载ID
    *
    * @return $this
    */
    public function setWorkloadId($workloadId)
    {
        $this->container['workloadId'] = $workloadId;
        return $this;
    }

    /**
    * Gets workloadName
    *  工作负载名称
    *
    * @return string
    */
    public function getWorkloadName()
    {
        return $this->container['workloadName'];
    }

    /**
    * Sets workloadName
    *
    * @param string $workloadName 工作负载名称
    *
    * @return $this
    */
    public function setWorkloadName($workloadName)
    {
        $this->container['workloadName'] = $workloadName;
        return $this;
    }

    /**
    * Gets workloadType
    *  工作负载类型，包含如下：   - deployments：无状态负载   - statefulsets：有状态负载   - daemonsets：守护进程表
    *
    * @return string
    */
    public function getWorkloadType()
    {
        return $this->container['workloadType'];
    }

    /**
    * Sets workloadType
    *
    * @param string $workloadType 工作负载类型，包含如下：   - deployments：无状态负载   - statefulsets：有状态负载   - daemonsets：守护进程表
    *
    * @return $this
    */
    public function setWorkloadType($workloadType)
    {
        $this->container['workloadType'] = $workloadType;
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

