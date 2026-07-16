<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpecResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpecResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorId  **参数解释**：训练作业资源规格id。 **约束限制**：不涉及。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡） - modelarts.pool.visual.16xlarge（16卡，当前仅限Snt9b23超节点资源池）  **默认取值**：不涉及。
    * nodeCount  **参数解释**：资源池创建训练作业使用节点数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：默认单节点。
    * poolId  **参数解释**：专属资源池id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * poolGroupId  **参数解释**：资源池联邦id。 **约束限制**：当kind为federated_pool_job时，该字段必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * mainContainerCustomizedFlavor  mainContainerCustomizedFlavor
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorId' => 'string',
            'nodeCount' => 'int',
            'poolId' => 'string',
            'poolGroupId' => 'string',
            'mainContainerCustomizedFlavor' => '\HuaweiCloud\SDK\ModelArts\V1\Model\MainContainerCustomizedFlavor'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorId  **参数解释**：训练作业资源规格id。 **约束限制**：不涉及。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡） - modelarts.pool.visual.16xlarge（16卡，当前仅限Snt9b23超节点资源池）  **默认取值**：不涉及。
    * nodeCount  **参数解释**：资源池创建训练作业使用节点数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：默认单节点。
    * poolId  **参数解释**：专属资源池id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * poolGroupId  **参数解释**：资源池联邦id。 **约束限制**：当kind为federated_pool_job时，该字段必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * mainContainerCustomizedFlavor  mainContainerCustomizedFlavor
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorId' => null,
        'nodeCount' => 'int32',
        'poolId' => null,
        'poolGroupId' => null,
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
    * flavorId  **参数解释**：训练作业资源规格id。 **约束限制**：不涉及。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡） - modelarts.pool.visual.16xlarge（16卡，当前仅限Snt9b23超节点资源池）  **默认取值**：不涉及。
    * nodeCount  **参数解释**：资源池创建训练作业使用节点数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：默认单节点。
    * poolId  **参数解释**：专属资源池id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * poolGroupId  **参数解释**：资源池联邦id。 **约束限制**：当kind为federated_pool_job时，该字段必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * mainContainerCustomizedFlavor  mainContainerCustomizedFlavor
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorId' => 'flavor_id',
            'nodeCount' => 'node_count',
            'poolId' => 'pool_id',
            'poolGroupId' => 'pool_group_id',
            'mainContainerCustomizedFlavor' => 'main_container_customized_flavor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorId  **参数解释**：训练作业资源规格id。 **约束限制**：不涉及。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡） - modelarts.pool.visual.16xlarge（16卡，当前仅限Snt9b23超节点资源池）  **默认取值**：不涉及。
    * nodeCount  **参数解释**：资源池创建训练作业使用节点数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：默认单节点。
    * poolId  **参数解释**：专属资源池id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * poolGroupId  **参数解释**：资源池联邦id。 **约束限制**：当kind为federated_pool_job时，该字段必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * mainContainerCustomizedFlavor  mainContainerCustomizedFlavor
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorId' => 'setFlavorId',
            'nodeCount' => 'setNodeCount',
            'poolId' => 'setPoolId',
            'poolGroupId' => 'setPoolGroupId',
            'mainContainerCustomizedFlavor' => 'setMainContainerCustomizedFlavor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorId  **参数解释**：训练作业资源规格id。 **约束限制**：不涉及。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡） - modelarts.pool.visual.16xlarge（16卡，当前仅限Snt9b23超节点资源池）  **默认取值**：不涉及。
    * nodeCount  **参数解释**：资源池创建训练作业使用节点数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：默认单节点。
    * poolId  **参数解释**：专属资源池id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * poolGroupId  **参数解释**：资源池联邦id。 **约束限制**：当kind为federated_pool_job时，该字段必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * mainContainerCustomizedFlavor  mainContainerCustomizedFlavor
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorId' => 'getFlavorId',
            'nodeCount' => 'getNodeCount',
            'poolId' => 'getPoolId',
            'poolGroupId' => 'getPoolGroupId',
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
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['nodeCount'] = isset($data['nodeCount']) ? $data['nodeCount'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['poolGroupId'] = isset($data['poolGroupId']) ? $data['poolGroupId'] : null;
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
        if ($this->container['nodeCount'] === null) {
            $invalidProperties[] = "'nodeCount' can't be null";
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
    * Gets flavorId
    *  **参数解释**：训练作业资源规格id。 **约束限制**：不涉及。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡） - modelarts.pool.visual.16xlarge（16卡，当前仅限Snt9b23超节点资源池）  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string|null $flavorId **参数解释**：训练作业资源规格id。 **约束限制**：不涉及。 **取值范围**：CPU规格专属资源池不支持指定flavor_id。GPU/Ascend规格专属资源池可选取值如下： - modelarts.pool.visual.xlarge（1卡） - modelarts.pool.visual.2xlarge（2卡） - modelarts.pool.visual.4xlarge（4卡） - modelarts.pool.visual.8xlarge（8卡） - modelarts.pool.visual.16xlarge（16卡，当前仅限Snt9b23超节点资源池）  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets nodeCount
    *  **参数解释**：资源池创建训练作业使用节点数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：默认单节点。
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
    * @param int $nodeCount **参数解释**：资源池创建训练作业使用节点数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：默认单节点。
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
    *  **参数解释**：专属资源池id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $poolId **参数解释**：专属资源池id。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：资源池联邦id。 **约束限制**：当kind为federated_pool_job时，该字段必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $poolGroupId **参数解释**：资源池联邦id。 **约束限制**：当kind为federated_pool_job时，该字段必填。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPoolGroupId($poolGroupId)
    {
        $this->container['poolGroupId'] = $poolGroupId;
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

