<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Job implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Job';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * policyId  触发器ID
    * eventType  事件类型
    * notifyType  通知类型
    * status  任务状态
    * statusText  状态原因
    * jobDetail  任务详情
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'policyId' => 'int',
            'eventType' => 'string',
            'notifyType' => 'string',
            'status' => 'string',
            'statusText' => 'string',
            'jobDetail' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * policyId  触发器ID
    * eventType  事件类型
    * notifyType  通知类型
    * status  任务状态
    * statusText  状态原因
    * jobDetail  任务详情
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'policyId' => null,
        'eventType' => null,
        'notifyType' => null,
        'status' => null,
        'statusText' => null,
        'jobDetail' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  任务ID
    * policyId  触发器ID
    * eventType  事件类型
    * notifyType  通知类型
    * status  任务状态
    * statusText  状态原因
    * jobDetail  任务详情
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'policyId' => 'policy_id',
            'eventType' => 'event_type',
            'notifyType' => 'notify_type',
            'status' => 'status',
            'statusText' => 'status_text',
            'jobDetail' => 'job_detail',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * policyId  触发器ID
    * eventType  事件类型
    * notifyType  通知类型
    * status  任务状态
    * statusText  状态原因
    * jobDetail  任务详情
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'policyId' => 'setPolicyId',
            'eventType' => 'setEventType',
            'notifyType' => 'setNotifyType',
            'status' => 'setStatus',
            'statusText' => 'setStatusText',
            'jobDetail' => 'setJobDetail',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * policyId  触发器ID
    * eventType  事件类型
    * notifyType  通知类型
    * status  任务状态
    * statusText  状态原因
    * jobDetail  任务详情
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'policyId' => 'getPolicyId',
            'eventType' => 'getEventType',
            'notifyType' => 'getNotifyType',
            'status' => 'getStatus',
            'statusText' => 'getStatusText',
            'jobDetail' => 'getJobDetail',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['notifyType'] = isset($data['notifyType']) ? $data['notifyType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusText'] = isset($data['statusText']) ? $data['statusText'] : null;
        $this->container['jobDetail'] = isset($data['jobDetail']) ? $data['jobDetail'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
        if ($this->container['notifyType'] === null) {
            $invalidProperties[] = "'notifyType' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['statusText'] === null) {
            $invalidProperties[] = "'statusText' can't be null";
        }
        if ($this->container['jobDetail'] === null) {
            $invalidProperties[] = "'jobDetail' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    *  任务ID
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets policyId
    *  触发器ID
    *
    * @return int
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param int $policyId 触发器ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型
    *
    * @return string
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string $eventType 事件类型
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets notifyType
    *  通知类型
    *
    * @return string
    */
    public function getNotifyType()
    {
        return $this->container['notifyType'];
    }

    /**
    * Sets notifyType
    *
    * @param string $notifyType 通知类型
    *
    * @return $this
    */
    public function setNotifyType($notifyType)
    {
        $this->container['notifyType'] = $notifyType;
        return $this;
    }

    /**
    * Gets status
    *  任务状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusText
    *  状态原因
    *
    * @return string
    */
    public function getStatusText()
    {
        return $this->container['statusText'];
    }

    /**
    * Sets statusText
    *
    * @param string $statusText 状态原因
    *
    * @return $this
    */
    public function setStatusText($statusText)
    {
        $this->container['statusText'] = $statusText;
        return $this;
    }

    /**
    * Gets jobDetail
    *  任务详情
    *
    * @return string
    */
    public function getJobDetail()
    {
        return $this->container['jobDetail'];
    }

    /**
    * Sets jobDetail
    *
    * @param string $jobDetail 任务详情
    *
    * @return $this
    */
    public function setJobDetail($jobDetail)
    {
        $this->container['jobDetail'] = $jobDetail;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

