<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kubernetesVersion  kubernetes版本
    * conditions  conditions信息
    * nodeSummary  nodeSummary
    * resourceSummary  resourceSummary
    * endpoints  端点
    * phase  阶段状态信息
    * reason  表述上次状况变化的原因
    * message  上次状态转换的详细信息
    * arrearFreeze  欠费冻结
    * policeFreeze  公安冻结
    * apiEnablements  开启的资源列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kubernetesVersion' => 'string',
            'conditions' => '\HuaweiCloud\SDK\Ucs\V1\Model\ConditionStatus[]',
            'nodeSummary' => '\HuaweiCloud\SDK\Ucs\V1\Model\NodeSummary',
            'resourceSummary' => '\HuaweiCloud\SDK\Ucs\V1\Model\ResourceSummary',
            'endpoints' => 'object',
            'phase' => 'string',
            'reason' => 'string',
            'message' => 'string',
            'arrearFreeze' => 'string',
            'policeFreeze' => 'string',
            'apiEnablements' => '\HuaweiCloud\SDK\Ucs\V1\Model\APIEnablement[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kubernetesVersion  kubernetes版本
    * conditions  conditions信息
    * nodeSummary  nodeSummary
    * resourceSummary  resourceSummary
    * endpoints  端点
    * phase  阶段状态信息
    * reason  表述上次状况变化的原因
    * message  上次状态转换的详细信息
    * arrearFreeze  欠费冻结
    * policeFreeze  公安冻结
    * apiEnablements  开启的资源列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kubernetesVersion' => null,
        'conditions' => null,
        'nodeSummary' => null,
        'resourceSummary' => null,
        'endpoints' => null,
        'phase' => null,
        'reason' => null,
        'message' => null,
        'arrearFreeze' => null,
        'policeFreeze' => null,
        'apiEnablements' => null
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
    * kubernetesVersion  kubernetes版本
    * conditions  conditions信息
    * nodeSummary  nodeSummary
    * resourceSummary  resourceSummary
    * endpoints  端点
    * phase  阶段状态信息
    * reason  表述上次状况变化的原因
    * message  上次状态转换的详细信息
    * arrearFreeze  欠费冻结
    * policeFreeze  公安冻结
    * apiEnablements  开启的资源列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kubernetesVersion' => 'kubernetesVersion',
            'conditions' => 'conditions',
            'nodeSummary' => 'nodeSummary',
            'resourceSummary' => 'resourceSummary',
            'endpoints' => 'endpoints',
            'phase' => 'phase',
            'reason' => 'reason',
            'message' => 'message',
            'arrearFreeze' => 'arrearFreeze',
            'policeFreeze' => 'policeFreeze',
            'apiEnablements' => 'apiEnablements'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kubernetesVersion  kubernetes版本
    * conditions  conditions信息
    * nodeSummary  nodeSummary
    * resourceSummary  resourceSummary
    * endpoints  端点
    * phase  阶段状态信息
    * reason  表述上次状况变化的原因
    * message  上次状态转换的详细信息
    * arrearFreeze  欠费冻结
    * policeFreeze  公安冻结
    * apiEnablements  开启的资源列表
    *
    * @var string[]
    */
    protected static $setters = [
            'kubernetesVersion' => 'setKubernetesVersion',
            'conditions' => 'setConditions',
            'nodeSummary' => 'setNodeSummary',
            'resourceSummary' => 'setResourceSummary',
            'endpoints' => 'setEndpoints',
            'phase' => 'setPhase',
            'reason' => 'setReason',
            'message' => 'setMessage',
            'arrearFreeze' => 'setArrearFreeze',
            'policeFreeze' => 'setPoliceFreeze',
            'apiEnablements' => 'setApiEnablements'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kubernetesVersion  kubernetes版本
    * conditions  conditions信息
    * nodeSummary  nodeSummary
    * resourceSummary  resourceSummary
    * endpoints  端点
    * phase  阶段状态信息
    * reason  表述上次状况变化的原因
    * message  上次状态转换的详细信息
    * arrearFreeze  欠费冻结
    * policeFreeze  公安冻结
    * apiEnablements  开启的资源列表
    *
    * @var string[]
    */
    protected static $getters = [
            'kubernetesVersion' => 'getKubernetesVersion',
            'conditions' => 'getConditions',
            'nodeSummary' => 'getNodeSummary',
            'resourceSummary' => 'getResourceSummary',
            'endpoints' => 'getEndpoints',
            'phase' => 'getPhase',
            'reason' => 'getReason',
            'message' => 'getMessage',
            'arrearFreeze' => 'getArrearFreeze',
            'policeFreeze' => 'getPoliceFreeze',
            'apiEnablements' => 'getApiEnablements'
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
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['nodeSummary'] = isset($data['nodeSummary']) ? $data['nodeSummary'] : null;
        $this->container['resourceSummary'] = isset($data['resourceSummary']) ? $data['resourceSummary'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['arrearFreeze'] = isset($data['arrearFreeze']) ? $data['arrearFreeze'] : null;
        $this->container['policeFreeze'] = isset($data['policeFreeze']) ? $data['policeFreeze'] : null;
        $this->container['apiEnablements'] = isset($data['apiEnablements']) ? $data['apiEnablements'] : null;
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
    * Gets kubernetesVersion
    *  kubernetes版本
    *
    * @return string|null
    */
    public function getKubernetesVersion()
    {
        return $this->container['kubernetesVersion'];
    }

    /**
    * Sets kubernetesVersion
    *
    * @param string|null $kubernetesVersion kubernetes版本
    *
    * @return $this
    */
    public function setKubernetesVersion($kubernetesVersion)
    {
        $this->container['kubernetesVersion'] = $kubernetesVersion;
        return $this;
    }

    /**
    * Gets conditions
    *  conditions信息
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ConditionStatus[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ConditionStatus[]|null $conditions conditions信息
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets nodeSummary
    *  nodeSummary
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\NodeSummary|null
    */
    public function getNodeSummary()
    {
        return $this->container['nodeSummary'];
    }

    /**
    * Sets nodeSummary
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\NodeSummary|null $nodeSummary nodeSummary
    *
    * @return $this
    */
    public function setNodeSummary($nodeSummary)
    {
        $this->container['nodeSummary'] = $nodeSummary;
        return $this;
    }

    /**
    * Gets resourceSummary
    *  resourceSummary
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ResourceSummary|null
    */
    public function getResourceSummary()
    {
        return $this->container['resourceSummary'];
    }

    /**
    * Sets resourceSummary
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ResourceSummary|null $resourceSummary resourceSummary
    *
    * @return $this
    */
    public function setResourceSummary($resourceSummary)
    {
        $this->container['resourceSummary'] = $resourceSummary;
        return $this;
    }

    /**
    * Gets endpoints
    *  端点
    *
    * @return object|null
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param object|null $endpoints 端点
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets phase
    *  阶段状态信息
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
    * @param string|null $phase 阶段状态信息
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets reason
    *  表述上次状况变化的原因
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 表述上次状况变化的原因
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets message
    *  上次状态转换的详细信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 上次状态转换的详细信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets arrearFreeze
    *  欠费冻结
    *
    * @return string|null
    */
    public function getArrearFreeze()
    {
        return $this->container['arrearFreeze'];
    }

    /**
    * Sets arrearFreeze
    *
    * @param string|null $arrearFreeze 欠费冻结
    *
    * @return $this
    */
    public function setArrearFreeze($arrearFreeze)
    {
        $this->container['arrearFreeze'] = $arrearFreeze;
        return $this;
    }

    /**
    * Gets policeFreeze
    *  公安冻结
    *
    * @return string|null
    */
    public function getPoliceFreeze()
    {
        return $this->container['policeFreeze'];
    }

    /**
    * Sets policeFreeze
    *
    * @param string|null $policeFreeze 公安冻结
    *
    * @return $this
    */
    public function setPoliceFreeze($policeFreeze)
    {
        $this->container['policeFreeze'] = $policeFreeze;
        return $this;
    }

    /**
    * Gets apiEnablements
    *  开启的资源列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\APIEnablement[]|null
    */
    public function getApiEnablements()
    {
        return $this->container['apiEnablements'];
    }

    /**
    * Sets apiEnablements
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\APIEnablement[]|null $apiEnablements 开启的资源列表
    *
    * @return $this
    */
    public function setApiEnablements($apiEnablements)
    {
        $this->container['apiEnablements'] = $apiEnablements;
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

