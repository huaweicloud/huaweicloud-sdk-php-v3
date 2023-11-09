<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentStatusView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentStatusView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentStatus  componentStatus
    * availableReplica  availableReplica
    * replica  replica
    * failDetail  failDetail
    * lastJobId  lastJobId
    * creator  creator
    * createTime  创建时间。
    * updateTime  修改时间。
    * artifact  artifact
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentStatus' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStatusType',
            'availableReplica' => 'int',
            'replica' => 'int',
            'failDetail' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentFailDetail',
            'lastJobId' => 'string',
            'creator' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'artifact' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentArtifact'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentStatus  componentStatus
    * availableReplica  availableReplica
    * replica  replica
    * failDetail  failDetail
    * lastJobId  lastJobId
    * creator  creator
    * createTime  创建时间。
    * updateTime  修改时间。
    * artifact  artifact
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentStatus' => null,
        'availableReplica' => null,
        'replica' => null,
        'failDetail' => null,
        'lastJobId' => null,
        'creator' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'artifact' => null
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
    * componentStatus  componentStatus
    * availableReplica  availableReplica
    * replica  replica
    * failDetail  failDetail
    * lastJobId  lastJobId
    * creator  creator
    * createTime  创建时间。
    * updateTime  修改时间。
    * artifact  artifact
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentStatus' => 'component_status',
            'availableReplica' => 'available_replica',
            'replica' => 'replica',
            'failDetail' => 'fail_detail',
            'lastJobId' => 'last_job_id',
            'creator' => 'creator',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'artifact' => 'artifact'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentStatus  componentStatus
    * availableReplica  availableReplica
    * replica  replica
    * failDetail  failDetail
    * lastJobId  lastJobId
    * creator  creator
    * createTime  创建时间。
    * updateTime  修改时间。
    * artifact  artifact
    *
    * @var string[]
    */
    protected static $setters = [
            'componentStatus' => 'setComponentStatus',
            'availableReplica' => 'setAvailableReplica',
            'replica' => 'setReplica',
            'failDetail' => 'setFailDetail',
            'lastJobId' => 'setLastJobId',
            'creator' => 'setCreator',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'artifact' => 'setArtifact'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentStatus  componentStatus
    * availableReplica  availableReplica
    * replica  replica
    * failDetail  failDetail
    * lastJobId  lastJobId
    * creator  creator
    * createTime  创建时间。
    * updateTime  修改时间。
    * artifact  artifact
    *
    * @var string[]
    */
    protected static $getters = [
            'componentStatus' => 'getComponentStatus',
            'availableReplica' => 'getAvailableReplica',
            'replica' => 'getReplica',
            'failDetail' => 'getFailDetail',
            'lastJobId' => 'getLastJobId',
            'creator' => 'getCreator',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'artifact' => 'getArtifact'
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
        $this->container['componentStatus'] = isset($data['componentStatus']) ? $data['componentStatus'] : null;
        $this->container['availableReplica'] = isset($data['availableReplica']) ? $data['availableReplica'] : null;
        $this->container['replica'] = isset($data['replica']) ? $data['replica'] : null;
        $this->container['failDetail'] = isset($data['failDetail']) ? $data['failDetail'] : null;
        $this->container['lastJobId'] = isset($data['lastJobId']) ? $data['lastJobId'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['artifact'] = isset($data['artifact']) ? $data['artifact'] : null;
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
    * Gets componentStatus
    *  componentStatus
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStatusType|null
    */
    public function getComponentStatus()
    {
        return $this->container['componentStatus'];
    }

    /**
    * Sets componentStatus
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentStatusType|null $componentStatus componentStatus
    *
    * @return $this
    */
    public function setComponentStatus($componentStatus)
    {
        $this->container['componentStatus'] = $componentStatus;
        return $this;
    }

    /**
    * Gets availableReplica
    *  availableReplica
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
    * @param int|null $availableReplica availableReplica
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
    *  replica
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
    * @param int|null $replica replica
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
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentFailDetail|null
    */
    public function getFailDetail()
    {
        return $this->container['failDetail'];
    }

    /**
    * Sets failDetail
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentFailDetail|null $failDetail failDetail
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
    *  lastJobId
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
    * @param string|null $lastJobId lastJobId
    *
    * @return $this
    */
    public function setLastJobId($lastJobId)
    {
        $this->container['lastJobId'] = $lastJobId;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 修改时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets artifact
    *  artifact
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentArtifact|null
    */
    public function getArtifact()
    {
        return $this->container['artifact'];
    }

    /**
    * Sets artifact
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\ComponentArtifact|null $artifact artifact
    *
    * @return $this
    */
    public function setArtifact($artifact)
    {
        $this->container['artifact'] = $artifact;
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

