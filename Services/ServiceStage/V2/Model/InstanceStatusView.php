<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceStatusView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceStatusView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  status
    * availableReplica  正常实例副本数。
    * replica  实例副本数。
    * failDetail  failDetail
    * lastJobId  最近Job ID。
    * lastJobStatus  最近Job的状态
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceStatusType',
            'availableReplica' => 'int',
            'replica' => 'int',
            'failDetail' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceFailDetail',
            'lastJobId' => 'string',
            'lastJobStatus' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  status
    * availableReplica  正常实例副本数。
    * replica  实例副本数。
    * failDetail  failDetail
    * lastJobId  最近Job ID。
    * lastJobStatus  最近Job的状态
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'availableReplica' => null,
        'replica' => null,
        'failDetail' => null,
        'lastJobId' => null,
        'lastJobStatus' => null,
        'enterpriseProjectId' => null
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
    * status  status
    * availableReplica  正常实例副本数。
    * replica  实例副本数。
    * failDetail  failDetail
    * lastJobId  最近Job ID。
    * lastJobStatus  最近Job的状态
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'availableReplica' => 'available_replica',
            'replica' => 'replica',
            'failDetail' => 'fail_detail',
            'lastJobId' => 'last_job_id',
            'lastJobStatus' => 'last_job_status',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  status
    * availableReplica  正常实例副本数。
    * replica  实例副本数。
    * failDetail  failDetail
    * lastJobId  最近Job ID。
    * lastJobStatus  最近Job的状态
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'availableReplica' => 'setAvailableReplica',
            'replica' => 'setReplica',
            'failDetail' => 'setFailDetail',
            'lastJobId' => 'setLastJobId',
            'lastJobStatus' => 'setLastJobStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  status
    * availableReplica  正常实例副本数。
    * replica  实例副本数。
    * failDetail  failDetail
    * lastJobId  最近Job ID。
    * lastJobStatus  最近Job的状态
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'availableReplica' => 'getAvailableReplica',
            'replica' => 'getReplica',
            'failDetail' => 'getFailDetail',
            'lastJobId' => 'getLastJobId',
            'lastJobStatus' => 'getLastJobStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['availableReplica'] = isset($data['availableReplica']) ? $data['availableReplica'] : null;
        $this->container['replica'] = isset($data['replica']) ? $data['replica'] : null;
        $this->container['failDetail'] = isset($data['failDetail']) ? $data['failDetail'] : null;
        $this->container['lastJobId'] = isset($data['lastJobId']) ? $data['lastJobId'] : null;
        $this->container['lastJobStatus'] = isset($data['lastJobStatus']) ? $data['lastJobStatus'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceStatusType|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceStatusType|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets availableReplica
    *  正常实例副本数。
    *
    * @return int|null
    */
    public function getAvailableReplica()
    {
        return $this->container['availableReplica'];
    }

    /**
    * Sets availableReplica
    *
    * @param int|null $availableReplica 正常实例副本数。
    *
    * @return $this
    */
    public function setAvailableReplica($availableReplica)
    {
        $this->container['availableReplica'] = $availableReplica;
        return $this;
    }

    /**
    * Gets replica
    *  实例副本数。
    *
    * @return int|null
    */
    public function getReplica()
    {
        return $this->container['replica'];
    }

    /**
    * Sets replica
    *
    * @param int|null $replica 实例副本数。
    *
    * @return $this
    */
    public function setReplica($replica)
    {
        $this->container['replica'] = $replica;
        return $this;
    }

    /**
    * Gets failDetail
    *  failDetail
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceFailDetail|null
    */
    public function getFailDetail()
    {
        return $this->container['failDetail'];
    }

    /**
    * Sets failDetail
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\InstanceFailDetail|null $failDetail failDetail
    *
    * @return $this
    */
    public function setFailDetail($failDetail)
    {
        $this->container['failDetail'] = $failDetail;
        return $this;
    }

    /**
    * Gets lastJobId
    *  最近Job ID。
    *
    * @return string|null
    */
    public function getLastJobId()
    {
        return $this->container['lastJobId'];
    }

    /**
    * Sets lastJobId
    *
    * @param string|null $lastJobId 最近Job ID。
    *
    * @return $this
    */
    public function setLastJobId($lastJobId)
    {
        $this->container['lastJobId'] = $lastJobId;
        return $this;
    }

    /**
    * Gets lastJobStatus
    *  最近Job的状态
    *
    * @return string|null
    */
    public function getLastJobStatus()
    {
        return $this->container['lastJobStatus'];
    }

    /**
    * Sets lastJobStatus
    *
    * @param string|null $lastJobStatus 最近Job的状态
    *
    * @return $this
    */
    public function setLastJobStatus($lastJobStatus)
    {
        $this->container['lastJobStatus'] = $lastJobStatus;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

