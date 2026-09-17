<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HyperNodeStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HyperNodeStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  **参数解释**： 超节点状态 **约束限制**： 不涉及 **取值范围**： - provisioning：创建中。 - active：整体可用，代表超节点下所有节点都可用。 - partially-available：超节点下存在不可用节点时会从 active 转成此状态。 - error：错误状态。 - deleting：删除中。 - reinstalling：重置中。 - scaling：扩容或缩容中。  **默认取值**： 不涉及
    * instanceId  **参数解释**： 超节点ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * currentNode  **参数解释**： 超节点下节点总数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * deletingNode  **参数解释**： 超节点下处于删除中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * creatingNode  **参数解释**： 超节点下处于创建中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * activeNode  **参数解释**： 超节点下处于可用状态的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * isStatic  **参数解释**： 超节点是否为纳管节点。纳管节点指用户已有的存量服务器接入CCE集群，而非由CCE自动创建的ECS/BMS。 **约束限制**： 不涉及 **取值范围**： - true：纳管节点，服务器在加入集群前已存在，删除超节点时不会释放底层云服务器资源。 - false：CCE创建的节点，生命周期由CCE管理，删除时会释放底层资源。 **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'instanceId' => 'string',
            'currentNode' => 'int',
            'deletingNode' => 'int',
            'creatingNode' => 'int',
            'activeNode' => 'int',
            'isStatic' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  **参数解释**： 超节点状态 **约束限制**： 不涉及 **取值范围**： - provisioning：创建中。 - active：整体可用，代表超节点下所有节点都可用。 - partially-available：超节点下存在不可用节点时会从 active 转成此状态。 - error：错误状态。 - deleting：删除中。 - reinstalling：重置中。 - scaling：扩容或缩容中。  **默认取值**： 不涉及
    * instanceId  **参数解释**： 超节点ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * currentNode  **参数解释**： 超节点下节点总数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * deletingNode  **参数解释**： 超节点下处于删除中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * creatingNode  **参数解释**： 超节点下处于创建中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * activeNode  **参数解释**： 超节点下处于可用状态的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * isStatic  **参数解释**： 超节点是否为纳管节点。纳管节点指用户已有的存量服务器接入CCE集群，而非由CCE自动创建的ECS/BMS。 **约束限制**： 不涉及 **取值范围**： - true：纳管节点，服务器在加入集群前已存在，删除超节点时不会释放底层云服务器资源。 - false：CCE创建的节点，生命周期由CCE管理，删除时会释放底层资源。 **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'instanceId' => null,
        'currentNode' => 'int32',
        'deletingNode' => 'int32',
        'creatingNode' => 'int32',
        'activeNode' => 'int32',
        'isStatic' => null
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
    * phase  **参数解释**： 超节点状态 **约束限制**： 不涉及 **取值范围**： - provisioning：创建中。 - active：整体可用，代表超节点下所有节点都可用。 - partially-available：超节点下存在不可用节点时会从 active 转成此状态。 - error：错误状态。 - deleting：删除中。 - reinstalling：重置中。 - scaling：扩容或缩容中。  **默认取值**： 不涉及
    * instanceId  **参数解释**： 超节点ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * currentNode  **参数解释**： 超节点下节点总数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * deletingNode  **参数解释**： 超节点下处于删除中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * creatingNode  **参数解释**： 超节点下处于创建中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * activeNode  **参数解释**： 超节点下处于可用状态的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * isStatic  **参数解释**： 超节点是否为纳管节点。纳管节点指用户已有的存量服务器接入CCE集群，而非由CCE自动创建的ECS/BMS。 **约束限制**： 不涉及 **取值范围**： - true：纳管节点，服务器在加入集群前已存在，删除超节点时不会释放底层云服务器资源。 - false：CCE创建的节点，生命周期由CCE管理，删除时会释放底层资源。 **默认取值**： false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'instanceId' => 'instanceID',
            'currentNode' => 'currentNode',
            'deletingNode' => 'deletingNode',
            'creatingNode' => 'creatingNode',
            'activeNode' => 'activeNode',
            'isStatic' => 'isStatic'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  **参数解释**： 超节点状态 **约束限制**： 不涉及 **取值范围**： - provisioning：创建中。 - active：整体可用，代表超节点下所有节点都可用。 - partially-available：超节点下存在不可用节点时会从 active 转成此状态。 - error：错误状态。 - deleting：删除中。 - reinstalling：重置中。 - scaling：扩容或缩容中。  **默认取值**： 不涉及
    * instanceId  **参数解释**： 超节点ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * currentNode  **参数解释**： 超节点下节点总数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * deletingNode  **参数解释**： 超节点下处于删除中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * creatingNode  **参数解释**： 超节点下处于创建中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * activeNode  **参数解释**： 超节点下处于可用状态的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * isStatic  **参数解释**： 超节点是否为纳管节点。纳管节点指用户已有的存量服务器接入CCE集群，而非由CCE自动创建的ECS/BMS。 **约束限制**： 不涉及 **取值范围**： - true：纳管节点，服务器在加入集群前已存在，删除超节点时不会释放底层云服务器资源。 - false：CCE创建的节点，生命周期由CCE管理，删除时会释放底层资源。 **默认取值**： false
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'instanceId' => 'setInstanceId',
            'currentNode' => 'setCurrentNode',
            'deletingNode' => 'setDeletingNode',
            'creatingNode' => 'setCreatingNode',
            'activeNode' => 'setActiveNode',
            'isStatic' => 'setIsStatic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  **参数解释**： 超节点状态 **约束限制**： 不涉及 **取值范围**： - provisioning：创建中。 - active：整体可用，代表超节点下所有节点都可用。 - partially-available：超节点下存在不可用节点时会从 active 转成此状态。 - error：错误状态。 - deleting：删除中。 - reinstalling：重置中。 - scaling：扩容或缩容中。  **默认取值**： 不涉及
    * instanceId  **参数解释**： 超节点ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * currentNode  **参数解释**： 超节点下节点总数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * deletingNode  **参数解释**： 超节点下处于删除中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * creatingNode  **参数解释**： 超节点下处于创建中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * activeNode  **参数解释**： 超节点下处于可用状态的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    * isStatic  **参数解释**： 超节点是否为纳管节点。纳管节点指用户已有的存量服务器接入CCE集群，而非由CCE自动创建的ECS/BMS。 **约束限制**： 不涉及 **取值范围**： - true：纳管节点，服务器在加入集群前已存在，删除超节点时不会释放底层云服务器资源。 - false：CCE创建的节点，生命周期由CCE管理，删除时会释放底层资源。 **默认取值**： false
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'instanceId' => 'getInstanceId',
            'currentNode' => 'getCurrentNode',
            'deletingNode' => 'getDeletingNode',
            'creatingNode' => 'getCreatingNode',
            'activeNode' => 'getActiveNode',
            'isStatic' => 'getIsStatic'
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['currentNode'] = isset($data['currentNode']) ? $data['currentNode'] : null;
        $this->container['deletingNode'] = isset($data['deletingNode']) ? $data['deletingNode'] : null;
        $this->container['creatingNode'] = isset($data['creatingNode']) ? $data['creatingNode'] : null;
        $this->container['activeNode'] = isset($data['activeNode']) ? $data['activeNode'] : null;
        $this->container['isStatic'] = isset($data['isStatic']) ? $data['isStatic'] : null;
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
    * Gets phase
    *  **参数解释**： 超节点状态 **约束限制**： 不涉及 **取值范围**： - provisioning：创建中。 - active：整体可用，代表超节点下所有节点都可用。 - partially-available：超节点下存在不可用节点时会从 active 转成此状态。 - error：错误状态。 - deleting：删除中。 - reinstalling：重置中。 - scaling：扩容或缩容中。  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase **参数解释**： 超节点状态 **约束限制**： 不涉及 **取值范围**： - provisioning：创建中。 - active：整体可用，代表超节点下所有节点都可用。 - partially-available：超节点下存在不可用节点时会从 active 转成此状态。 - error：错误状态。 - deleting：删除中。 - reinstalling：重置中。 - scaling：扩容或缩容中。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**： 超节点ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string|null $instanceId **参数解释**： 超节点ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets currentNode
    *  **参数解释**： 超节点下节点总数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getCurrentNode()
    {
        return $this->container['currentNode'];
    }

    /**
    * Sets currentNode
    *
    * @param int|null $currentNode **参数解释**： 超节点下节点总数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCurrentNode($currentNode)
    {
        $this->container['currentNode'] = $currentNode;
        return $this;
    }

    /**
    * Gets deletingNode
    *  **参数解释**： 超节点下处于删除中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getDeletingNode()
    {
        return $this->container['deletingNode'];
    }

    /**
    * Sets deletingNode
    *
    * @param int|null $deletingNode **参数解释**： 超节点下处于删除中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDeletingNode($deletingNode)
    {
        $this->container['deletingNode'] = $deletingNode;
        return $this;
    }

    /**
    * Gets creatingNode
    *  **参数解释**： 超节点下处于创建中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getCreatingNode()
    {
        return $this->container['creatingNode'];
    }

    /**
    * Sets creatingNode
    *
    * @param int|null $creatingNode **参数解释**： 超节点下处于创建中的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCreatingNode($creatingNode)
    {
        $this->container['creatingNode'] = $creatingNode;
        return $this;
    }

    /**
    * Gets activeNode
    *  **参数解释**： 超节点下处于可用状态的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getActiveNode()
    {
        return $this->container['activeNode'];
    }

    /**
    * Sets activeNode
    *
    * @param int|null $activeNode **参数解释**： 超节点下处于可用状态的节点数 **约束限制**： 不涉及 **取值范围**： 大于等于0的整数 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setActiveNode($activeNode)
    {
        $this->container['activeNode'] = $activeNode;
        return $this;
    }

    /**
    * Gets isStatic
    *  **参数解释**： 超节点是否为纳管节点。纳管节点指用户已有的存量服务器接入CCE集群，而非由CCE自动创建的ECS/BMS。 **约束限制**： 不涉及 **取值范围**： - true：纳管节点，服务器在加入集群前已存在，删除超节点时不会释放底层云服务器资源。 - false：CCE创建的节点，生命周期由CCE管理，删除时会释放底层资源。 **默认取值**： false
    *
    * @return bool|null
    */
    public function getIsStatic()
    {
        return $this->container['isStatic'];
    }

    /**
    * Sets isStatic
    *
    * @param bool|null $isStatic **参数解释**： 超节点是否为纳管节点。纳管节点指用户已有的存量服务器接入CCE集群，而非由CCE自动创建的ECS/BMS。 **约束限制**： 不涉及 **取值范围**： - true：纳管节点，服务器在加入集群前已存在，删除超节点时不会释放底层云服务器资源。 - false：CCE创建的节点，生命周期由CCE管理，删除时会释放底层资源。 **默认取值**： false
    *
    * @return $this
    */
    public function setIsStatic($isStatic)
    {
        $this->container['isStatic'] = $isStatic;
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

