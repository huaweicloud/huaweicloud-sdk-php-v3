<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateKubernetesClusterCertResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateKubernetesClusterCertResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kind  **参数解释**： API类型 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： Config
    * apiVersion  **参数解释**： API版本 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： v1
    * preferences  **参数解释**： 当前未使用该字段 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 默认为空
    * clusters  **参数解释**： 集群列表。 **约束限制**： 不涉及
    * users  **参数解释**： 存放了指定用户的一些证书信息和ClientKey信息。 **约束限制**： 不涉及
    * contexts  **参数解释**： 上下文列表。 **约束限制**： 不涉及
    * currentContext  **参数解释**： 当前上下文 **约束限制**： 不涉及 **取值范围**： - external：公网访问  - internal：私网访问  **默认取值**： - 若存在publicIp（虚拟机弹性IP）时为 external。 - 若不存在publicIp为 internal。
    * portId  portId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kind' => 'string',
            'apiVersion' => 'string',
            'preferences' => 'object',
            'clusters' => '\HuaweiCloud\SDK\Cce\V3\Model\Clusters[]',
            'users' => '\HuaweiCloud\SDK\Cce\V3\Model\Users[]',
            'contexts' => '\HuaweiCloud\SDK\Cce\V3\Model\Contexts[]',
            'currentContext' => 'string',
            'portId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kind  **参数解释**： API类型 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： Config
    * apiVersion  **参数解释**： API版本 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： v1
    * preferences  **参数解释**： 当前未使用该字段 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 默认为空
    * clusters  **参数解释**： 集群列表。 **约束限制**： 不涉及
    * users  **参数解释**： 存放了指定用户的一些证书信息和ClientKey信息。 **约束限制**： 不涉及
    * contexts  **参数解释**： 上下文列表。 **约束限制**： 不涉及
    * currentContext  **参数解释**： 当前上下文 **约束限制**： 不涉及 **取值范围**： - external：公网访问  - internal：私网访问  **默认取值**： - 若存在publicIp（虚拟机弹性IP）时为 external。 - 若不存在publicIp为 internal。
    * portId  portId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kind' => null,
        'apiVersion' => null,
        'preferences' => null,
        'clusters' => null,
        'users' => null,
        'contexts' => null,
        'currentContext' => null,
        'portId' => null
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
    * kind  **参数解释**： API类型 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： Config
    * apiVersion  **参数解释**： API版本 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： v1
    * preferences  **参数解释**： 当前未使用该字段 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 默认为空
    * clusters  **参数解释**： 集群列表。 **约束限制**： 不涉及
    * users  **参数解释**： 存放了指定用户的一些证书信息和ClientKey信息。 **约束限制**： 不涉及
    * contexts  **参数解释**： 上下文列表。 **约束限制**： 不涉及
    * currentContext  **参数解释**： 当前上下文 **约束限制**： 不涉及 **取值范围**： - external：公网访问  - internal：私网访问  **默认取值**： - 若存在publicIp（虚拟机弹性IP）时为 external。 - 若不存在publicIp为 internal。
    * portId  portId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kind' => 'kind',
            'apiVersion' => 'apiVersion',
            'preferences' => 'preferences',
            'clusters' => 'clusters',
            'users' => 'users',
            'contexts' => 'contexts',
            'currentContext' => 'current-context',
            'portId' => 'Port-ID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kind  **参数解释**： API类型 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： Config
    * apiVersion  **参数解释**： API版本 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： v1
    * preferences  **参数解释**： 当前未使用该字段 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 默认为空
    * clusters  **参数解释**： 集群列表。 **约束限制**： 不涉及
    * users  **参数解释**： 存放了指定用户的一些证书信息和ClientKey信息。 **约束限制**： 不涉及
    * contexts  **参数解释**： 上下文列表。 **约束限制**： 不涉及
    * currentContext  **参数解释**： 当前上下文 **约束限制**： 不涉及 **取值范围**： - external：公网访问  - internal：私网访问  **默认取值**： - 若存在publicIp（虚拟机弹性IP）时为 external。 - 若不存在publicIp为 internal。
    * portId  portId
    *
    * @var string[]
    */
    protected static $setters = [
            'kind' => 'setKind',
            'apiVersion' => 'setApiVersion',
            'preferences' => 'setPreferences',
            'clusters' => 'setClusters',
            'users' => 'setUsers',
            'contexts' => 'setContexts',
            'currentContext' => 'setCurrentContext',
            'portId' => 'setPortId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kind  **参数解释**： API类型 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： Config
    * apiVersion  **参数解释**： API版本 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： v1
    * preferences  **参数解释**： 当前未使用该字段 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 默认为空
    * clusters  **参数解释**： 集群列表。 **约束限制**： 不涉及
    * users  **参数解释**： 存放了指定用户的一些证书信息和ClientKey信息。 **约束限制**： 不涉及
    * contexts  **参数解释**： 上下文列表。 **约束限制**： 不涉及
    * currentContext  **参数解释**： 当前上下文 **约束限制**： 不涉及 **取值范围**： - external：公网访问  - internal：私网访问  **默认取值**： - 若存在publicIp（虚拟机弹性IP）时为 external。 - 若不存在publicIp为 internal。
    * portId  portId
    *
    * @var string[]
    */
    protected static $getters = [
            'kind' => 'getKind',
            'apiVersion' => 'getApiVersion',
            'preferences' => 'getPreferences',
            'clusters' => 'getClusters',
            'users' => 'getUsers',
            'contexts' => 'getContexts',
            'currentContext' => 'getCurrentContext',
            'portId' => 'getPortId'
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
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['preferences'] = isset($data['preferences']) ? $data['preferences'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['contexts'] = isset($data['contexts']) ? $data['contexts'] : null;
        $this->container['currentContext'] = isset($data['currentContext']) ? $data['currentContext'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
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
    *  **参数解释**： API类型 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： Config
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
    * @param string|null $kind **参数解释**： API类型 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： Config
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets apiVersion
    *  **参数解释**： API版本 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： v1
    *
    * @return string|null
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string|null $apiVersion **参数解释**： API版本 **约束限制**： 该值不可修改 **取值范围**： 不涉及 **默认取值**： v1
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets preferences
    *  **参数解释**： 当前未使用该字段 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 默认为空
    *
    * @return object|null
    */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
    * Sets preferences
    *
    * @param object|null $preferences **参数解释**： 当前未使用该字段 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 默认为空
    *
    * @return $this
    */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;
        return $this;
    }

    /**
    * Gets clusters
    *  **参数解释**： 集群列表。 **约束限制**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Clusters[]|null
    */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
    * Sets clusters
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Clusters[]|null $clusters **参数解释**： 集群列表。 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;
        return $this;
    }

    /**
    * Gets users
    *  **参数解释**： 存放了指定用户的一些证书信息和ClientKey信息。 **约束限制**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Users[]|null
    */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
    * Sets users
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Users[]|null $users **参数解释**： 存放了指定用户的一些证书信息和ClientKey信息。 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setUsers($users)
    {
        $this->container['users'] = $users;
        return $this;
    }

    /**
    * Gets contexts
    *  **参数解释**： 上下文列表。 **约束限制**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Contexts[]|null
    */
    public function getContexts()
    {
        return $this->container['contexts'];
    }

    /**
    * Sets contexts
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Contexts[]|null $contexts **参数解释**： 上下文列表。 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setContexts($contexts)
    {
        $this->container['contexts'] = $contexts;
        return $this;
    }

    /**
    * Gets currentContext
    *  **参数解释**： 当前上下文 **约束限制**： 不涉及 **取值范围**： - external：公网访问  - internal：私网访问  **默认取值**： - 若存在publicIp（虚拟机弹性IP）时为 external。 - 若不存在publicIp为 internal。
    *
    * @return string|null
    */
    public function getCurrentContext()
    {
        return $this->container['currentContext'];
    }

    /**
    * Sets currentContext
    *
    * @param string|null $currentContext **参数解释**： 当前上下文 **约束限制**： 不涉及 **取值范围**： - external：公网访问  - internal：私网访问  **默认取值**： - 若存在publicIp（虚拟机弹性IP）时为 external。 - 若不存在publicIp为 internal。
    *
    * @return $this
    */
    public function setCurrentContext($currentContext)
    {
        $this->container['currentContext'] = $currentContext;
        return $this;
    }

    /**
    * Gets portId
    *  portId
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId portId
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
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

