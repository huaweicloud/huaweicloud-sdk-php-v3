<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StopTrainingJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StopTrainingJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kind  **参数解释**：训练作业类型。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业
    * metadata  metadata
    * status  status
    * algorithm  algorithm
    * tasks  **参数解释**：异构训练作业的任务列表。
    * spec  spec
    * endpoints  endpoints
    * ftjobConfig  ftjobConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kind' => 'string',
            'metadata' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobMetadataResponse',
            'status' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Status',
            'algorithm' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponse',
            'tasks' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskResponse[]',
            'spec' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SpecResponse',
            'endpoints' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobEndpointsResp',
            'ftjobConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\MasJobConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kind  **参数解释**：训练作业类型。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业
    * metadata  metadata
    * status  status
    * algorithm  algorithm
    * tasks  **参数解释**：异构训练作业的任务列表。
    * spec  spec
    * endpoints  endpoints
    * ftjobConfig  ftjobConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kind' => null,
        'metadata' => null,
        'status' => null,
        'algorithm' => null,
        'tasks' => null,
        'spec' => null,
        'endpoints' => null,
        'ftjobConfig' => null
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
    * kind  **参数解释**：训练作业类型。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业
    * metadata  metadata
    * status  status
    * algorithm  algorithm
    * tasks  **参数解释**：异构训练作业的任务列表。
    * spec  spec
    * endpoints  endpoints
    * ftjobConfig  ftjobConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kind' => 'kind',
            'metadata' => 'metadata',
            'status' => 'status',
            'algorithm' => 'algorithm',
            'tasks' => 'tasks',
            'spec' => 'spec',
            'endpoints' => 'endpoints',
            'ftjobConfig' => 'ftjob_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kind  **参数解释**：训练作业类型。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业
    * metadata  metadata
    * status  status
    * algorithm  algorithm
    * tasks  **参数解释**：异构训练作业的任务列表。
    * spec  spec
    * endpoints  endpoints
    * ftjobConfig  ftjobConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'kind' => 'setKind',
            'metadata' => 'setMetadata',
            'status' => 'setStatus',
            'algorithm' => 'setAlgorithm',
            'tasks' => 'setTasks',
            'spec' => 'setSpec',
            'endpoints' => 'setEndpoints',
            'ftjobConfig' => 'setFtjobConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kind  **参数解释**：训练作业类型。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业
    * metadata  metadata
    * status  status
    * algorithm  algorithm
    * tasks  **参数解释**：异构训练作业的任务列表。
    * spec  spec
    * endpoints  endpoints
    * ftjobConfig  ftjobConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'kind' => 'getKind',
            'metadata' => 'getMetadata',
            'status' => 'getStatus',
            'algorithm' => 'getAlgorithm',
            'tasks' => 'getTasks',
            'spec' => 'getSpec',
            'endpoints' => 'getEndpoints',
            'ftjobConfig' => 'getFtjobConfig'
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
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['ftjobConfig'] = isset($data['ftjobConfig']) ? $data['ftjobConfig'] : null;
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
    * Gets kind
    *  **参数解释**：训练作业类型。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind **参数解释**：训练作业类型。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobMetadataResponse|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobMetadataResponse|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Status|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Status|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets algorithm
    *  algorithm
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponse|null
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithmResponse|null $algorithm algorithm
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
        return $this;
    }

    /**
    * Gets tasks
    *  **参数解释**：异构训练作业的任务列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskResponse[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskResponse[]|null $tasks **参数解释**：异构训练作业的任务列表。
    *
    * @return $this
    */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;
        return $this;
    }

    /**
    * Gets spec
    *  spec
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SpecResponse|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SpecResponse|null $spec spec
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets endpoints
    *  endpoints
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobEndpointsResp|null
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobEndpointsResp|null $endpoints endpoints
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets ftjobConfig
    *  ftjobConfig
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\MasJobConfig|null
    */
    public function getFtjobConfig()
    {
        return $this->container['ftjobConfig'];
    }

    /**
    * Sets ftjobConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\MasJobConfig|null $ftjobConfig ftjobConfig
    *
    * @return $this
    */
    public function setFtjobConfig($ftjobConfig)
    {
        $this->container['ftjobConfig'] = $ftjobConfig;
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

