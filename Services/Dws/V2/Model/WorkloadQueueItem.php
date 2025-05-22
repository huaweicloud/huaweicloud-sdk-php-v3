<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkloadQueueItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkloadQueueItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueName  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * shortQueryOptimize  **参数解释**： 工作负载队列短查询加速开关。 **取值范围**： 不涉及。
    * shortQueryConcurrencyNum  **参数解释**： 工作负载队列短查询并发数。 **取值范围**： 不涉及。
    * resourceItemList  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueName' => 'string',
            'logicalClusterName' => 'string',
            'shortQueryOptimize' => 'string',
            'shortQueryConcurrencyNum' => 'int',
            'resourceItemList' => '\HuaweiCloud\SDK\Dws\V2\Model\WorkloadResourceItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueName  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * shortQueryOptimize  **参数解释**： 工作负载队列短查询加速开关。 **取值范围**： 不涉及。
    * shortQueryConcurrencyNum  **参数解释**： 工作负载队列短查询并发数。 **取值范围**： 不涉及。
    * resourceItemList  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueName' => null,
        'logicalClusterName' => null,
        'shortQueryOptimize' => null,
        'shortQueryConcurrencyNum' => null,
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
    * queueName  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * shortQueryOptimize  **参数解释**： 工作负载队列短查询加速开关。 **取值范围**： 不涉及。
    * shortQueryConcurrencyNum  **参数解释**： 工作负载队列短查询并发数。 **取值范围**： 不涉及。
    * resourceItemList  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueName' => 'queue_name',
            'logicalClusterName' => 'logical_cluster_name',
            'shortQueryOptimize' => 'short_query_optimize',
            'shortQueryConcurrencyNum' => 'short_query_concurrency_num',
            'resourceItemList' => 'resource_item_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueName  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * shortQueryOptimize  **参数解释**： 工作负载队列短查询加速开关。 **取值范围**： 不涉及。
    * shortQueryConcurrencyNum  **参数解释**： 工作负载队列短查询并发数。 **取值范围**： 不涉及。
    * resourceItemList  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'queueName' => 'setQueueName',
            'logicalClusterName' => 'setLogicalClusterName',
            'shortQueryOptimize' => 'setShortQueryOptimize',
            'shortQueryConcurrencyNum' => 'setShortQueryConcurrencyNum',
            'resourceItemList' => 'setResourceItemList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueName  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    * shortQueryOptimize  **参数解释**： 工作负载队列短查询加速开关。 **取值范围**： 不涉及。
    * shortQueryConcurrencyNum  **参数解释**： 工作负载队列短查询并发数。 **取值范围**： 不涉及。
    * resourceItemList  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'queueName' => 'getQueueName',
            'logicalClusterName' => 'getLogicalClusterName',
            'shortQueryOptimize' => 'getShortQueryOptimize',
            'shortQueryConcurrencyNum' => 'getShortQueryConcurrencyNum',
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
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['shortQueryOptimize'] = isset($data['shortQueryOptimize']) ? $data['shortQueryOptimize'] : null;
        $this->container['shortQueryConcurrencyNum'] = isset($data['shortQueryConcurrencyNum']) ? $data['shortQueryConcurrencyNum'] : null;
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
        if ($this->container['queueName'] === null) {
            $invalidProperties[] = "'queueName' can't be null";
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
    * Gets queueName
    *  **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string $queueName **参数解释**： 资源池名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets logicalClusterName
    *  **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
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
    * @param string|null $logicalClusterName **参数解释**： 逻辑集群名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets shortQueryOptimize
    *  **参数解释**： 工作负载队列短查询加速开关。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getShortQueryOptimize()
    {
        return $this->container['shortQueryOptimize'];
    }

    /**
    * Sets shortQueryOptimize
    *
    * @param string|null $shortQueryOptimize **参数解释**： 工作负载队列短查询加速开关。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setShortQueryOptimize($shortQueryOptimize)
    {
        $this->container['shortQueryOptimize'] = $shortQueryOptimize;
        return $this;
    }

    /**
    * Gets shortQueryConcurrencyNum
    *  **参数解释**： 工作负载队列短查询并发数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getShortQueryConcurrencyNum()
    {
        return $this->container['shortQueryConcurrencyNum'];
    }

    /**
    * Sets shortQueryConcurrencyNum
    *
    * @param int|null $shortQueryConcurrencyNum **参数解释**： 工作负载队列短查询并发数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setShortQueryConcurrencyNum($shortQueryConcurrencyNum)
    {
        $this->container['shortQueryConcurrencyNum'] = $shortQueryConcurrencyNum;
        return $this;
    }

    /**
    * Gets resourceItemList
    *  **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
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
    * @param \HuaweiCloud\SDK\Dws\V2\Model\WorkloadResourceItem[] $resourceItemList **参数解释**： 资源配置队列。 **取值范围**： 不涉及。
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

