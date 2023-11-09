<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentRecordView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentRecordView';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beginTime  beginTime
    * endTime  endTime
    * description  description
    * instanceId  instanceId
    * version  version
    * currentUsed  currentUsed
    * status  status
    * deployType  deployType
    * jobs  jobs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beginTime' => 'string',
            'endTime' => 'string',
            'description' => 'object',
            'instanceId' => 'string',
            'version' => 'string',
            'currentUsed' => 'bool',
            'status' => 'string',
            'deployType' => 'string',
            'jobs' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\RecordJob[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beginTime  beginTime
    * endTime  endTime
    * description  description
    * instanceId  instanceId
    * version  version
    * currentUsed  currentUsed
    * status  status
    * deployType  deployType
    * jobs  jobs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beginTime' => null,
        'endTime' => null,
        'description' => null,
        'instanceId' => null,
        'version' => null,
        'currentUsed' => null,
        'status' => null,
        'deployType' => null,
        'jobs' => null
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
    * beginTime  beginTime
    * endTime  endTime
    * description  description
    * instanceId  instanceId
    * version  version
    * currentUsed  currentUsed
    * status  status
    * deployType  deployType
    * jobs  jobs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'description' => 'description',
            'instanceId' => 'instance_id',
            'version' => 'version',
            'currentUsed' => 'current_used',
            'status' => 'status',
            'deployType' => 'deploy_type',
            'jobs' => 'jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beginTime  beginTime
    * endTime  endTime
    * description  description
    * instanceId  instanceId
    * version  version
    * currentUsed  currentUsed
    * status  status
    * deployType  deployType
    * jobs  jobs
    *
    * @var string[]
    */
    protected static $setters = [
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'description' => 'setDescription',
            'instanceId' => 'setInstanceId',
            'version' => 'setVersion',
            'currentUsed' => 'setCurrentUsed',
            'status' => 'setStatus',
            'deployType' => 'setDeployType',
            'jobs' => 'setJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beginTime  beginTime
    * endTime  endTime
    * description  description
    * instanceId  instanceId
    * version  version
    * currentUsed  currentUsed
    * status  status
    * deployType  deployType
    * jobs  jobs
    *
    * @var string[]
    */
    protected static $getters = [
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'description' => 'getDescription',
            'instanceId' => 'getInstanceId',
            'version' => 'getVersion',
            'currentUsed' => 'getCurrentUsed',
            'status' => 'getStatus',
            'deployType' => 'getDeployType',
            'jobs' => 'getJobs'
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
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['currentUsed'] = isset($data['currentUsed']) ? $data['currentUsed'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
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
    * Gets beginTime
    *  beginTime
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime beginTime
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  endTime
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime endTime
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets description
    *  description
    *
    * @return object|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param object|null $description description
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets instanceId
    *  instanceId
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId instanceId
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets version
    *  version
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version version
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets currentUsed
    *  currentUsed
    *
    * @return bool|null
    */
    public function getCurrentUsed()
    {
        return $this->container['currentUsed'];
    }

    /**
    * Sets currentUsed
    *
    * @param bool|null $currentUsed currentUsed
    *
    * @return $this
    */
    public function setCurrentUsed($currentUsed)
    {
        $this->container['currentUsed'] = $currentUsed;
        return $this;
    }

    /**
    * Gets status
    *  status
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
    * @param string|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets deployType
    *  deployType
    *
    * @return string|null
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param string|null $deployType deployType
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets jobs
    *  jobs
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\RecordJob[]|null
    */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
    * Sets jobs
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\RecordJob[]|null $jobs jobs
    *
    * @return $this
    */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;
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

