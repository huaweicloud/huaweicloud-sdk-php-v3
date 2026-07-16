<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

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
    * kind  **参数解释**：训练作业类型。 **约束限制**：不涉及。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业  **默认取值**：job。
    * metadata  metadata
    * algorithm  algorithm
    * tasks  **参数解释**：任务列表。该功能暂未实现。 **约束限制**：不涉及。
    * spec  spec
    * endpoints  endpoints
    * trainType  **参数解释**：类型。 **约束限制**：不涉及。 **取值范围**：SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）
    * ftjobConfig  ftjobConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kind' => 'string',
            'metadata' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobMetadata',
            'algorithm' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithm',
            'tasks' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Task[]',
            'spec' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Spec',
            'endpoints' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobEndpointsReq',
            'trainType' => 'string',
            'ftjobConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\MasJobConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kind  **参数解释**：训练作业类型。 **约束限制**：不涉及。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业  **默认取值**：job。
    * metadata  metadata
    * algorithm  algorithm
    * tasks  **参数解释**：任务列表。该功能暂未实现。 **约束限制**：不涉及。
    * spec  spec
    * endpoints  endpoints
    * trainType  **参数解释**：类型。 **约束限制**：不涉及。 **取值范围**：SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）
    * ftjobConfig  ftjobConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kind' => null,
        'metadata' => null,
        'algorithm' => null,
        'tasks' => null,
        'spec' => null,
        'endpoints' => null,
        'trainType' => null,
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
    * kind  **参数解释**：训练作业类型。 **约束限制**：不涉及。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业  **默认取值**：job。
    * metadata  metadata
    * algorithm  algorithm
    * tasks  **参数解释**：任务列表。该功能暂未实现。 **约束限制**：不涉及。
    * spec  spec
    * endpoints  endpoints
    * trainType  **参数解释**：类型。 **约束限制**：不涉及。 **取值范围**：SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）
    * ftjobConfig  ftjobConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kind' => 'kind',
            'metadata' => 'metadata',
            'algorithm' => 'algorithm',
            'tasks' => 'tasks',
            'spec' => 'spec',
            'endpoints' => 'endpoints',
            'trainType' => 'train_type',
            'ftjobConfig' => 'ftjob_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kind  **参数解释**：训练作业类型。 **约束限制**：不涉及。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业  **默认取值**：job。
    * metadata  metadata
    * algorithm  algorithm
    * tasks  **参数解释**：任务列表。该功能暂未实现。 **约束限制**：不涉及。
    * spec  spec
    * endpoints  endpoints
    * trainType  **参数解释**：类型。 **约束限制**：不涉及。 **取值范围**：SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）
    * ftjobConfig  ftjobConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'kind' => 'setKind',
            'metadata' => 'setMetadata',
            'algorithm' => 'setAlgorithm',
            'tasks' => 'setTasks',
            'spec' => 'setSpec',
            'endpoints' => 'setEndpoints',
            'trainType' => 'setTrainType',
            'ftjobConfig' => 'setFtjobConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kind  **参数解释**：训练作业类型。 **约束限制**：不涉及。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业  **默认取值**：job。
    * metadata  metadata
    * algorithm  algorithm
    * tasks  **参数解释**：任务列表。该功能暂未实现。 **约束限制**：不涉及。
    * spec  spec
    * endpoints  endpoints
    * trainType  **参数解释**：类型。 **约束限制**：不涉及。 **取值范围**：SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）
    * ftjobConfig  ftjobConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'kind' => 'getKind',
            'metadata' => 'getMetadata',
            'algorithm' => 'getAlgorithm',
            'tasks' => 'getTasks',
            'spec' => 'getSpec',
            'endpoints' => 'getEndpoints',
            'trainType' => 'getTrainType',
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
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['trainType'] = isset($data['trainType']) ? $data['trainType'] : null;
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
        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
            if (!is_null($this->container['trainType']) && !preg_match("/SFT|PRETRAIN|LORA|DPO|RFT/", $this->container['trainType'])) {
                $invalidProperties[] = "invalid value for 'trainType', must be conform to the pattern /SFT|PRETRAIN|LORA|DPO|RFT/.";
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
    * Gets kind
    *  **参数解释**：训练作业类型。 **约束限制**：不涉及。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业  **默认取值**：job。
    *
    * @return string
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string $kind **参数解释**：训练作业类型。 **约束限制**：不涉及。 **取值范围**： - job：普通作业 - federated_pool_job：资源池联邦作业 - edge_job：边缘作业 - hetero_job：异构作业 - mrs_job：MRS作业 - autosearch_job：自动化搜索作业 - diag_job：诊断作业 - visualization_job：可视化作业  **默认取值**：job。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobMetadata
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobMetadata $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets algorithm
    *  algorithm
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithm|null
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobAlgorithm|null $algorithm algorithm
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
    *  **参数解释**：任务列表。该功能暂未实现。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Task[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Task[]|null $tasks **参数解释**：任务列表。该功能暂未实现。 **约束限制**：不涉及。
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Spec|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Spec|null $spec spec
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
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobEndpointsReq|null
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobEndpointsReq|null $endpoints endpoints
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets trainType
    *  **参数解释**：类型。 **约束限制**：不涉及。 **取值范围**：SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）
    *
    * @return string|null
    */
    public function getTrainType()
    {
        return $this->container['trainType'];
    }

    /**
    * Sets trainType
    *
    * @param string|null $trainType **参数解释**：类型。 **约束限制**：不涉及。 **取值范围**：SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）
    *
    * @return $this
    */
    public function setTrainType($trainType)
    {
        $this->container['trainType'] = $trainType;
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

