<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowServicePackege implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowServicePackege';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packageId  资源包的UUID。
    * status  资源包状态。
    * poolId  资源池ID。
    * serviceId  服务ID。
    * workflowId  Workflow工作流ID。
    * order  order
    * consumeLimit  订阅限制。
    * currentConsume  当前订阅。
    * currentDate  当前时间。
    * limitEnable  限制标记。
    * createdAt  创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packageId' => 'string',
            'status' => 'string',
            'poolId' => 'string',
            'serviceId' => 'string',
            'workflowId' => 'string',
            'order' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowPoolOrder',
            'consumeLimit' => 'int',
            'currentConsume' => 'int',
            'currentDate' => 'string',
            'limitEnable' => 'bool',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packageId  资源包的UUID。
    * status  资源包状态。
    * poolId  资源池ID。
    * serviceId  服务ID。
    * workflowId  Workflow工作流ID。
    * order  order
    * consumeLimit  订阅限制。
    * currentConsume  当前订阅。
    * currentDate  当前时间。
    * limitEnable  限制标记。
    * createdAt  创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packageId' => null,
        'status' => null,
        'poolId' => null,
        'serviceId' => null,
        'workflowId' => null,
        'order' => null,
        'consumeLimit' => 'int64',
        'currentConsume' => 'int64',
        'currentDate' => null,
        'limitEnable' => null,
        'createdAt' => null
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
    * packageId  资源包的UUID。
    * status  资源包状态。
    * poolId  资源池ID。
    * serviceId  服务ID。
    * workflowId  Workflow工作流ID。
    * order  order
    * consumeLimit  订阅限制。
    * currentConsume  当前订阅。
    * currentDate  当前时间。
    * limitEnable  限制标记。
    * createdAt  创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packageId' => 'package_id',
            'status' => 'status',
            'poolId' => 'pool_id',
            'serviceId' => 'service_id',
            'workflowId' => 'workflow_id',
            'order' => 'order',
            'consumeLimit' => 'consume_limit',
            'currentConsume' => 'current_consume',
            'currentDate' => 'current_date',
            'limitEnable' => 'limit_enable',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packageId  资源包的UUID。
    * status  资源包状态。
    * poolId  资源池ID。
    * serviceId  服务ID。
    * workflowId  Workflow工作流ID。
    * order  order
    * consumeLimit  订阅限制。
    * currentConsume  当前订阅。
    * currentDate  当前时间。
    * limitEnable  限制标记。
    * createdAt  创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'packageId' => 'setPackageId',
            'status' => 'setStatus',
            'poolId' => 'setPoolId',
            'serviceId' => 'setServiceId',
            'workflowId' => 'setWorkflowId',
            'order' => 'setOrder',
            'consumeLimit' => 'setConsumeLimit',
            'currentConsume' => 'setCurrentConsume',
            'currentDate' => 'setCurrentDate',
            'limitEnable' => 'setLimitEnable',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packageId  资源包的UUID。
    * status  资源包状态。
    * poolId  资源池ID。
    * serviceId  服务ID。
    * workflowId  Workflow工作流ID。
    * order  order
    * consumeLimit  订阅限制。
    * currentConsume  当前订阅。
    * currentDate  当前时间。
    * limitEnable  限制标记。
    * createdAt  创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'packageId' => 'getPackageId',
            'status' => 'getStatus',
            'poolId' => 'getPoolId',
            'serviceId' => 'getServiceId',
            'workflowId' => 'getWorkflowId',
            'order' => 'getOrder',
            'consumeLimit' => 'getConsumeLimit',
            'currentConsume' => 'getCurrentConsume',
            'currentDate' => 'getCurrentDate',
            'limitEnable' => 'getLimitEnable',
            'createdAt' => 'getCreatedAt'
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
        $this->container['packageId'] = isset($data['packageId']) ? $data['packageId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['consumeLimit'] = isset($data['consumeLimit']) ? $data['consumeLimit'] : null;
        $this->container['currentConsume'] = isset($data['currentConsume']) ? $data['currentConsume'] : null;
        $this->container['currentDate'] = isset($data['currentDate']) ? $data['currentDate'] : null;
        $this->container['limitEnable'] = isset($data['limitEnable']) ? $data['limitEnable'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
    * Gets packageId
    *  资源包的UUID。
    *
    * @return string|null
    */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
    * Sets packageId
    *
    * @param string|null $packageId 资源包的UUID。
    *
    * @return $this
    */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;
        return $this;
    }

    /**
    * Gets status
    *  资源包状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 资源包状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets poolId
    *  资源池ID。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId 资源池ID。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets serviceId
    *  服务ID。
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 服务ID。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets workflowId
    *  Workflow工作流ID。
    *
    * @return string|null
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string|null $workflowId Workflow工作流ID。
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets order
    *  order
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowPoolOrder|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowPoolOrder|null $order order
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets consumeLimit
    *  订阅限制。
    *
    * @return int|null
    */
    public function getConsumeLimit()
    {
        return $this->container['consumeLimit'];
    }

    /**
    * Sets consumeLimit
    *
    * @param int|null $consumeLimit 订阅限制。
    *
    * @return $this
    */
    public function setConsumeLimit($consumeLimit)
    {
        $this->container['consumeLimit'] = $consumeLimit;
        return $this;
    }

    /**
    * Gets currentConsume
    *  当前订阅。
    *
    * @return int|null
    */
    public function getCurrentConsume()
    {
        return $this->container['currentConsume'];
    }

    /**
    * Sets currentConsume
    *
    * @param int|null $currentConsume 当前订阅。
    *
    * @return $this
    */
    public function setCurrentConsume($currentConsume)
    {
        $this->container['currentConsume'] = $currentConsume;
        return $this;
    }

    /**
    * Gets currentDate
    *  当前时间。
    *
    * @return string|null
    */
    public function getCurrentDate()
    {
        return $this->container['currentDate'];
    }

    /**
    * Sets currentDate
    *
    * @param string|null $currentDate 当前时间。
    *
    * @return $this
    */
    public function setCurrentDate($currentDate)
    {
        $this->container['currentDate'] = $currentDate;
        return $this;
    }

    /**
    * Gets limitEnable
    *  限制标记。
    *
    * @return bool|null
    */
    public function getLimitEnable()
    {
        return $this->container['limitEnable'];
    }

    /**
    * Sets limitEnable
    *
    * @param bool|null $limitEnable 限制标记。
    *
    * @return $this
    */
    public function setLimitEnable($limitEnable)
    {
        $this->container['limitEnable'] = $limitEnable;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

