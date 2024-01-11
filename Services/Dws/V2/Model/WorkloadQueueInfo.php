<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkloadQueueInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkloadQueueInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workloadQueueName  资源池名称。
    * logicalClusterName  逻辑集群名称。
    * resourceItemList  资源配置队列。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workloadQueueName' => 'string',
            'logicalClusterName' => 'string',
            'resourceItemList' => '\HuaweiCloud\SDK\Dws\V2\Model\WorkloadResourceItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workloadQueueName  资源池名称。
    * logicalClusterName  逻辑集群名称。
    * resourceItemList  资源配置队列。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workloadQueueName' => null,
        'logicalClusterName' => null,
        'resourceItemList' => null
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
    * workloadQueueName  资源池名称。
    * logicalClusterName  逻辑集群名称。
    * resourceItemList  资源配置队列。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workloadQueueName' => 'workload_queue_name',
            'logicalClusterName' => 'logical_cluster_name',
            'resourceItemList' => 'resource_item_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workloadQueueName  资源池名称。
    * logicalClusterName  逻辑集群名称。
    * resourceItemList  资源配置队列。
    *
    * @var string[]
    */
    protected static $setters = [
            'workloadQueueName' => 'setWorkloadQueueName',
            'logicalClusterName' => 'setLogicalClusterName',
            'resourceItemList' => 'setResourceItemList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workloadQueueName  资源池名称。
    * logicalClusterName  逻辑集群名称。
    * resourceItemList  资源配置队列。
    *
    * @var string[]
    */
    protected static $getters = [
            'workloadQueueName' => 'getWorkloadQueueName',
            'logicalClusterName' => 'getLogicalClusterName',
            'resourceItemList' => 'getResourceItemList'
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
        $this->container['workloadQueueName'] = isset($data['workloadQueueName']) ? $data['workloadQueueName'] : null;
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['resourceItemList'] = isset($data['resourceItemList']) ? $data['resourceItemList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workloadQueueName'] === null) {
            $invalidProperties[] = "'workloadQueueName' can't be null";
        }
        if ($this->container['resourceItemList'] === null) {
            $invalidProperties[] = "'resourceItemList' can't be null";
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
    * Gets workloadQueueName
    *  资源池名称。
    *
    * @return string
    */
    public function getWorkloadQueueName()
    {
        return $this->container['workloadQueueName'];
    }

    /**
    * Sets workloadQueueName
    *
    * @param string $workloadQueueName 资源池名称。
    *
    * @return $this
    */
    public function setWorkloadQueueName($workloadQueueName)
    {
        $this->container['workloadQueueName'] = $workloadQueueName;
        return $this;
    }

    /**
    * Gets logicalClusterName
    *  逻辑集群名称。
    *
    * @return string|null
    */
    public function getLogicalClusterName()
    {
        return $this->container['logicalClusterName'];
    }

    /**
    * Sets logicalClusterName
    *
    * @param string|null $logicalClusterName 逻辑集群名称。
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets resourceItemList
    *  资源配置队列。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\WorkloadResourceItem[]
    */
    public function getResourceItemList()
    {
        return $this->container['resourceItemList'];
    }

    /**
    * Sets resourceItemList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\WorkloadResourceItem[] $resourceItemList 资源配置队列。
    *
    * @return $this
    */
    public function setResourceItemList($resourceItemList)
    {
        $this->container['resourceItemList'] = $resourceItemList;
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

