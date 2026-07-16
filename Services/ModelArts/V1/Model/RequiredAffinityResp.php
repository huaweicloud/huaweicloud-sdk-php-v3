<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RequiredAffinityResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RequiredAffinityResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * affinityType  **参数解释**：亲和调度策略。 **取值范围**： - cabinet：强整柜调度 - hyperinstance：超节点亲和调度
    * jobLevel  **参数解释**：作业整体的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将作业的所有task调度至不高于job_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置作业整体的网络拓扑约束，系统会默认赋值为cluster。 **取值范围**： - cluster：资源池级 - hyperinstanceGroup: 超节点级  **默认取值**：默认值cluster。
    * affinityGroupSize  **参数解释**：亲和组大小。 **取值范围**：不涉及。
    * affinityGroupLevel  **参数解释**：亲和组的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将affinity_group_size个task组成的亲和组调度至不高于affinity_group_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置亲和组的网络拓扑约束，系统会默认赋值为hyperinstanceGroup。 **取值范围**： - hyperinstance：超节点级 - slice: 柜级  **默认取值**：默认值hyperinstanceGroup。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'affinityType' => 'string',
            'jobLevel' => 'string',
            'affinityGroupSize' => 'int',
            'affinityGroupLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * affinityType  **参数解释**：亲和调度策略。 **取值范围**： - cabinet：强整柜调度 - hyperinstance：超节点亲和调度
    * jobLevel  **参数解释**：作业整体的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将作业的所有task调度至不高于job_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置作业整体的网络拓扑约束，系统会默认赋值为cluster。 **取值范围**： - cluster：资源池级 - hyperinstanceGroup: 超节点级  **默认取值**：默认值cluster。
    * affinityGroupSize  **参数解释**：亲和组大小。 **取值范围**：不涉及。
    * affinityGroupLevel  **参数解释**：亲和组的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将affinity_group_size个task组成的亲和组调度至不高于affinity_group_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置亲和组的网络拓扑约束，系统会默认赋值为hyperinstanceGroup。 **取值范围**： - hyperinstance：超节点级 - slice: 柜级  **默认取值**：默认值hyperinstanceGroup。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'affinityType' => null,
        'jobLevel' => null,
        'affinityGroupSize' => 'int32',
        'affinityGroupLevel' => null
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
    * affinityType  **参数解释**：亲和调度策略。 **取值范围**： - cabinet：强整柜调度 - hyperinstance：超节点亲和调度
    * jobLevel  **参数解释**：作业整体的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将作业的所有task调度至不高于job_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置作业整体的网络拓扑约束，系统会默认赋值为cluster。 **取值范围**： - cluster：资源池级 - hyperinstanceGroup: 超节点级  **默认取值**：默认值cluster。
    * affinityGroupSize  **参数解释**：亲和组大小。 **取值范围**：不涉及。
    * affinityGroupLevel  **参数解释**：亲和组的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将affinity_group_size个task组成的亲和组调度至不高于affinity_group_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置亲和组的网络拓扑约束，系统会默认赋值为hyperinstanceGroup。 **取值范围**： - hyperinstance：超节点级 - slice: 柜级  **默认取值**：默认值hyperinstanceGroup。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'affinityType' => 'affinity_type',
            'jobLevel' => 'job_level',
            'affinityGroupSize' => 'affinity_group_size',
            'affinityGroupLevel' => 'affinity_group_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * affinityType  **参数解释**：亲和调度策略。 **取值范围**： - cabinet：强整柜调度 - hyperinstance：超节点亲和调度
    * jobLevel  **参数解释**：作业整体的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将作业的所有task调度至不高于job_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置作业整体的网络拓扑约束，系统会默认赋值为cluster。 **取值范围**： - cluster：资源池级 - hyperinstanceGroup: 超节点级  **默认取值**：默认值cluster。
    * affinityGroupSize  **参数解释**：亲和组大小。 **取值范围**：不涉及。
    * affinityGroupLevel  **参数解释**：亲和组的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将affinity_group_size个task组成的亲和组调度至不高于affinity_group_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置亲和组的网络拓扑约束，系统会默认赋值为hyperinstanceGroup。 **取值范围**： - hyperinstance：超节点级 - slice: 柜级  **默认取值**：默认值hyperinstanceGroup。
    *
    * @var string[]
    */
    protected static $setters = [
            'affinityType' => 'setAffinityType',
            'jobLevel' => 'setJobLevel',
            'affinityGroupSize' => 'setAffinityGroupSize',
            'affinityGroupLevel' => 'setAffinityGroupLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * affinityType  **参数解释**：亲和调度策略。 **取值范围**： - cabinet：强整柜调度 - hyperinstance：超节点亲和调度
    * jobLevel  **参数解释**：作业整体的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将作业的所有task调度至不高于job_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置作业整体的网络拓扑约束，系统会默认赋值为cluster。 **取值范围**： - cluster：资源池级 - hyperinstanceGroup: 超节点级  **默认取值**：默认值cluster。
    * affinityGroupSize  **参数解释**：亲和组大小。 **取值范围**：不涉及。
    * affinityGroupLevel  **参数解释**：亲和组的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将affinity_group_size个task组成的亲和组调度至不高于affinity_group_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置亲和组的网络拓扑约束，系统会默认赋值为hyperinstanceGroup。 **取值范围**： - hyperinstance：超节点级 - slice: 柜级  **默认取值**：默认值hyperinstanceGroup。
    *
    * @var string[]
    */
    protected static $getters = [
            'affinityType' => 'getAffinityType',
            'jobLevel' => 'getJobLevel',
            'affinityGroupSize' => 'getAffinityGroupSize',
            'affinityGroupLevel' => 'getAffinityGroupLevel'
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
        $this->container['affinityType'] = isset($data['affinityType']) ? $data['affinityType'] : null;
        $this->container['jobLevel'] = isset($data['jobLevel']) ? $data['jobLevel'] : null;
        $this->container['affinityGroupSize'] = isset($data['affinityGroupSize']) ? $data['affinityGroupSize'] : null;
        $this->container['affinityGroupLevel'] = isset($data['affinityGroupLevel']) ? $data['affinityGroupLevel'] : null;
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
    * Gets affinityType
    *  **参数解释**：亲和调度策略。 **取值范围**： - cabinet：强整柜调度 - hyperinstance：超节点亲和调度
    *
    * @return string|null
    */
    public function getAffinityType()
    {
        return $this->container['affinityType'];
    }

    /**
    * Sets affinityType
    *
    * @param string|null $affinityType **参数解释**：亲和调度策略。 **取值范围**： - cabinet：强整柜调度 - hyperinstance：超节点亲和调度
    *
    * @return $this
    */
    public function setAffinityType($affinityType)
    {
        $this->container['affinityType'] = $affinityType;
        return $this;
    }

    /**
    * Gets jobLevel
    *  **参数解释**：作业整体的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将作业的所有task调度至不高于job_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置作业整体的网络拓扑约束，系统会默认赋值为cluster。 **取值范围**： - cluster：资源池级 - hyperinstanceGroup: 超节点级  **默认取值**：默认值cluster。
    *
    * @return string|null
    */
    public function getJobLevel()
    {
        return $this->container['jobLevel'];
    }

    /**
    * Sets jobLevel
    *
    * @param string|null $jobLevel **参数解释**：作业整体的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将作业的所有task调度至不高于job_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置作业整体的网络拓扑约束，系统会默认赋值为cluster。 **取值范围**： - cluster：资源池级 - hyperinstanceGroup: 超节点级  **默认取值**：默认值cluster。
    *
    * @return $this
    */
    public function setJobLevel($jobLevel)
    {
        $this->container['jobLevel'] = $jobLevel;
        return $this;
    }

    /**
    * Gets affinityGroupSize
    *  **参数解释**：亲和组大小。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getAffinityGroupSize()
    {
        return $this->container['affinityGroupSize'];
    }

    /**
    * Sets affinityGroupSize
    *
    * @param int|null $affinityGroupSize **参数解释**：亲和组大小。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setAffinityGroupSize($affinityGroupSize)
    {
        $this->container['affinityGroupSize'] = $affinityGroupSize;
        return $this;
    }

    /**
    * Gets affinityGroupLevel
    *  **参数解释**：亲和组的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将affinity_group_size个task组成的亲和组调度至不高于affinity_group_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置亲和组的网络拓扑约束，系统会默认赋值为hyperinstanceGroup。 **取值范围**： - hyperinstance：超节点级 - slice: 柜级  **默认取值**：默认值hyperinstanceGroup。
    *
    * @return string|null
    */
    public function getAffinityGroupLevel()
    {
        return $this->container['affinityGroupLevel'];
    }

    /**
    * Sets affinityGroupLevel
    *
    * @param string|null $affinityGroupLevel **参数解释**：亲和组的网络拓扑约束。 **约束限制**：affinity_type为networkTopology时有效，系统会将affinity_group_size个task组成的亲和组调度至不高于affinity_group_level层的节点组中。 用户向超节点资源池投递训练作业，如果未设置亲和组的网络拓扑约束，系统会默认赋值为hyperinstanceGroup。 **取值范围**： - hyperinstance：超节点级 - slice: 柜级  **默认取值**：默认值hyperinstanceGroup。
    *
    * @return $this
    */
    public function setAffinityGroupLevel($affinityGroupLevel)
    {
        $this->container['affinityGroupLevel'] = $affinityGroupLevel;
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

