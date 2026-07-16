<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Resource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Resource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policy  **参数解释**：训练作业资源规格模式。 **取值范围**： - regular：标准模式
    * flavorId  **参数解释**：训练作业资源规格id。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡）
    * flavorName  **参数解释**：使用flavor_id时，由ModelArts返回的只读规格名称。 **取值范围**：不涉及。
    * nodeCount  **参数解释**：训练作业选择的资源副本数。 **取值范围**：不涉及。
    * poolId  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    * poolGroupId  **参数解释**：训练作业选择的资源池联邦ID。 **取值范围**：不涉及。
    * flavorDetail  flavorDetail
    * mainContainerAllocatedResources  mainContainerAllocatedResources
    * mainContainerCustomizedFlavor  mainContainerCustomizedFlavor
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policy' => 'string',
            'flavorId' => 'string',
            'flavorName' => 'string',
            'nodeCount' => 'int',
            'poolId' => 'string',
            'poolGroupId' => 'string',
            'flavorDetail' => '\HuaweiCloud\SDK\ModelArts\V1\Model\FlavorDetail',
            'mainContainerAllocatedResources' => '\HuaweiCloud\SDK\ModelArts\V1\Model\MainContainerAllocatedResources',
            'mainContainerCustomizedFlavor' => '\HuaweiCloud\SDK\ModelArts\V1\Model\MainContainerCustomizedFlavor'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policy  **参数解释**：训练作业资源规格模式。 **取值范围**： - regular：标准模式
    * flavorId  **参数解释**：训练作业资源规格id。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡）
    * flavorName  **参数解释**：使用flavor_id时，由ModelArts返回的只读规格名称。 **取值范围**：不涉及。
    * nodeCount  **参数解释**：训练作业选择的资源副本数。 **取值范围**：不涉及。
    * poolId  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    * poolGroupId  **参数解释**：训练作业选择的资源池联邦ID。 **取值范围**：不涉及。
    * flavorDetail  flavorDetail
    * mainContainerAllocatedResources  mainContainerAllocatedResources
    * mainContainerCustomizedFlavor  mainContainerCustomizedFlavor
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policy' => null,
        'flavorId' => null,
        'flavorName' => null,
        'nodeCount' => null,
        'poolId' => null,
        'poolGroupId' => null,
        'flavorDetail' => null,
        'mainContainerAllocatedResources' => null,
        'mainContainerCustomizedFlavor' => null
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
    * policy  **参数解释**：训练作业资源规格模式。 **取值范围**： - regular：标准模式
    * flavorId  **参数解释**：训练作业资源规格id。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡）
    * flavorName  **参数解释**：使用flavor_id时，由ModelArts返回的只读规格名称。 **取值范围**：不涉及。
    * nodeCount  **参数解释**：训练作业选择的资源副本数。 **取值范围**：不涉及。
    * poolId  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    * poolGroupId  **参数解释**：训练作业选择的资源池联邦ID。 **取值范围**：不涉及。
    * flavorDetail  flavorDetail
    * mainContainerAllocatedResources  mainContainerAllocatedResources
    * mainContainerCustomizedFlavor  mainContainerCustomizedFlavor
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policy' => 'policy',
            'flavorId' => 'flavor_id',
            'flavorName' => 'flavor_name',
            'nodeCount' => 'node_count',
            'poolId' => 'pool_id',
            'poolGroupId' => 'pool_group_id',
            'flavorDetail' => 'flavor_detail',
            'mainContainerAllocatedResources' => 'main_container_allocated_resources',
            'mainContainerCustomizedFlavor' => 'main_container_customized_flavor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policy  **参数解释**：训练作业资源规格模式。 **取值范围**： - regular：标准模式
    * flavorId  **参数解释**：训练作业资源规格id。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡）
    * flavorName  **参数解释**：使用flavor_id时，由ModelArts返回的只读规格名称。 **取值范围**：不涉及。
    * nodeCount  **参数解释**：训练作业选择的资源副本数。 **取值范围**：不涉及。
    * poolId  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    * poolGroupId  **参数解释**：训练作业选择的资源池联邦ID。 **取值范围**：不涉及。
    * flavorDetail  flavorDetail
    * mainContainerAllocatedResources  mainContainerAllocatedResources
    * mainContainerCustomizedFlavor  mainContainerCustomizedFlavor
    *
    * @var string[]
    */
    protected static $setters = [
            'policy' => 'setPolicy',
            'flavorId' => 'setFlavorId',
            'flavorName' => 'setFlavorName',
            'nodeCount' => 'setNodeCount',
            'poolId' => 'setPoolId',
            'poolGroupId' => 'setPoolGroupId',
            'flavorDetail' => 'setFlavorDetail',
            'mainContainerAllocatedResources' => 'setMainContainerAllocatedResources',
            'mainContainerCustomizedFlavor' => 'setMainContainerCustomizedFlavor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policy  **参数解释**：训练作业资源规格模式。 **取值范围**： - regular：标准模式
    * flavorId  **参数解释**：训练作业资源规格id。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡）
    * flavorName  **参数解释**：使用flavor_id时，由ModelArts返回的只读规格名称。 **取值范围**：不涉及。
    * nodeCount  **参数解释**：训练作业选择的资源副本数。 **取值范围**：不涉及。
    * poolId  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    * poolGroupId  **参数解释**：训练作业选择的资源池联邦ID。 **取值范围**：不涉及。
    * flavorDetail  flavorDetail
    * mainContainerAllocatedResources  mainContainerAllocatedResources
    * mainContainerCustomizedFlavor  mainContainerCustomizedFlavor
    *
    * @var string[]
    */
    protected static $getters = [
            'policy' => 'getPolicy',
            'flavorId' => 'getFlavorId',
            'flavorName' => 'getFlavorName',
            'nodeCount' => 'getNodeCount',
            'poolId' => 'getPoolId',
            'poolGroupId' => 'getPoolGroupId',
            'flavorDetail' => 'getFlavorDetail',
            'mainContainerAllocatedResources' => 'getMainContainerAllocatedResources',
            'mainContainerCustomizedFlavor' => 'getMainContainerCustomizedFlavor'
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
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['flavorName'] = isset($data['flavorName']) ? $data['flavorName'] : null;
        $this->container['nodeCount'] = isset($data['nodeCount']) ? $data['nodeCount'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['poolGroupId'] = isset($data['poolGroupId']) ? $data['poolGroupId'] : null;
        $this->container['flavorDetail'] = isset($data['flavorDetail']) ? $data['flavorDetail'] : null;
        $this->container['mainContainerAllocatedResources'] = isset($data['mainContainerAllocatedResources']) ? $data['mainContainerAllocatedResources'] : null;
        $this->container['mainContainerCustomizedFlavor'] = isset($data['mainContainerCustomizedFlavor']) ? $data['mainContainerCustomizedFlavor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavorId'] === null) {
            $invalidProperties[] = "'flavorId' can't be null";
        }
        if ($this->container['nodeCount'] === null) {
            $invalidProperties[] = "'nodeCount' can't be null";
        }
            if (($this->container['nodeCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'nodeCount', must be bigger than or equal to 1.";
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
    * Gets policy
    *  **参数解释**：训练作业资源规格模式。 **取值范围**： - regular：标准模式
    *
    * @return string|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param string|null $policy **参数解释**：训练作业资源规格模式。 **取值范围**： - regular：标准模式
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets flavorId
    *  **参数解释**：训练作业资源规格id。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡）
    *
    * @return string
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string $flavorId **参数解释**：训练作业资源规格id。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡）
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets flavorName
    *  **参数解释**：使用flavor_id时，由ModelArts返回的只读规格名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getFlavorName()
    {
        return $this->container['flavorName'];
    }

    /**
    * Sets flavorName
    *
    * @param string|null $flavorName **参数解释**：使用flavor_id时，由ModelArts返回的只读规格名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setFlavorName($flavorName)
    {
        $this->container['flavorName'] = $flavorName;
        return $this;
    }

    /**
    * Gets nodeCount
    *  **参数解释**：训练作业选择的资源副本数。 **取值范围**：不涉及。
    *
    * @return int
    */
    public function getNodeCount()
    {
        return $this->container['nodeCount'];
    }

    /**
    * Sets nodeCount
    *
    * @param int $nodeCount **参数解释**：训练作业选择的资源副本数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNodeCount($nodeCount)
    {
        $this->container['nodeCount'] = $nodeCount;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
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
    * @param string|null $poolId **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets poolGroupId
    *  **参数解释**：训练作业选择的资源池联邦ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getPoolGroupId()
    {
        return $this->container['poolGroupId'];
    }

    /**
    * Sets poolGroupId
    *
    * @param string|null $poolGroupId **参数解释**：训练作业选择的资源池联邦ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPoolGroupId($poolGroupId)
    {
        $this->container['poolGroupId'] = $poolGroupId;
        return $this;
    }

    /**
    * Gets flavorDetail
    *  flavorDetail
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\FlavorDetail|null
    */
    public function getFlavorDetail()
    {
        return $this->container['flavorDetail'];
    }

    /**
    * Sets flavorDetail
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\FlavorDetail|null $flavorDetail flavorDetail
    *
    * @return $this
    */
    public function setFlavorDetail($flavorDetail)
    {
        $this->container['flavorDetail'] = $flavorDetail;
        return $this;
    }

    /**
    * Gets mainContainerAllocatedResources
    *  mainContainerAllocatedResources
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\MainContainerAllocatedResources|null
    */
    public function getMainContainerAllocatedResources()
    {
        return $this->container['mainContainerAllocatedResources'];
    }

    /**
    * Sets mainContainerAllocatedResources
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\MainContainerAllocatedResources|null $mainContainerAllocatedResources mainContainerAllocatedResources
    *
    * @return $this
    */
    public function setMainContainerAllocatedResources($mainContainerAllocatedResources)
    {
        $this->container['mainContainerAllocatedResources'] = $mainContainerAllocatedResources;
        return $this;
    }

    /**
    * Gets mainContainerCustomizedFlavor
    *  mainContainerCustomizedFlavor
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\MainContainerCustomizedFlavor|null
    */
    public function getMainContainerCustomizedFlavor()
    {
        return $this->container['mainContainerCustomizedFlavor'];
    }

    /**
    * Sets mainContainerCustomizedFlavor
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\MainContainerCustomizedFlavor|null $mainContainerCustomizedFlavor mainContainerCustomizedFlavor
    *
    * @return $this
    */
    public function setMainContainerCustomizedFlavor($mainContainerCustomizedFlavor)
    {
        $this->container['mainContainerCustomizedFlavor'] = $mainContainerCustomizedFlavor;
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

