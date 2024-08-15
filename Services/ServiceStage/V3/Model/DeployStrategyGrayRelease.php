<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeployStrategyGrayRelease implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeployStrategy_gray_release';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  灰度策略:WEIGHT为基于流量比例，CONTENT为基于内容
    * replicaSurgeMode  灰度实例新增模式:MIRROR为蓝绿，EXTRA为金丝雀（先增后减），NOSURGE为金丝雀（先减后增）
    * deploymentMode  类型1（使用应用网关、微服务引擎）、类型3（注册到微服务中心）、类型4（对接ELB独享型）、类型6（对接ELB共享型）
    * firstBatchWeight  灰度流量比例(type为WEIGHT时配置)
    * ruleMatchMode  all满足所有条件，any满足任意条件(type为CONTENT时配置)
    * rules  灰度匹配规则(type为CONTENT时配置)
    * firstBatchReplica  首批灰度实例数量(replica_surge_mode为金丝雀类型时需要配置)
    * remainingBatch  剩余实例部署批次(replica_surge_mode为金丝雀类型时需要配置)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'replicaSurgeMode' => 'string',
            'deploymentMode' => 'int',
            'firstBatchWeight' => 'int',
            'ruleMatchMode' => 'string',
            'rules' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategyGrayReleaseRules[]',
            'firstBatchReplica' => 'int',
            'remainingBatch' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  灰度策略:WEIGHT为基于流量比例，CONTENT为基于内容
    * replicaSurgeMode  灰度实例新增模式:MIRROR为蓝绿，EXTRA为金丝雀（先增后减），NOSURGE为金丝雀（先减后增）
    * deploymentMode  类型1（使用应用网关、微服务引擎）、类型3（注册到微服务中心）、类型4（对接ELB独享型）、类型6（对接ELB共享型）
    * firstBatchWeight  灰度流量比例(type为WEIGHT时配置)
    * ruleMatchMode  all满足所有条件，any满足任意条件(type为CONTENT时配置)
    * rules  灰度匹配规则(type为CONTENT时配置)
    * firstBatchReplica  首批灰度实例数量(replica_surge_mode为金丝雀类型时需要配置)
    * remainingBatch  剩余实例部署批次(replica_surge_mode为金丝雀类型时需要配置)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'replicaSurgeMode' => null,
        'deploymentMode' => null,
        'firstBatchWeight' => null,
        'ruleMatchMode' => null,
        'rules' => null,
        'firstBatchReplica' => null,
        'remainingBatch' => null
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
    * type  灰度策略:WEIGHT为基于流量比例，CONTENT为基于内容
    * replicaSurgeMode  灰度实例新增模式:MIRROR为蓝绿，EXTRA为金丝雀（先增后减），NOSURGE为金丝雀（先减后增）
    * deploymentMode  类型1（使用应用网关、微服务引擎）、类型3（注册到微服务中心）、类型4（对接ELB独享型）、类型6（对接ELB共享型）
    * firstBatchWeight  灰度流量比例(type为WEIGHT时配置)
    * ruleMatchMode  all满足所有条件，any满足任意条件(type为CONTENT时配置)
    * rules  灰度匹配规则(type为CONTENT时配置)
    * firstBatchReplica  首批灰度实例数量(replica_surge_mode为金丝雀类型时需要配置)
    * remainingBatch  剩余实例部署批次(replica_surge_mode为金丝雀类型时需要配置)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'replicaSurgeMode' => 'replica_surge_mode',
            'deploymentMode' => 'deployment_mode',
            'firstBatchWeight' => 'first_batch_weight',
            'ruleMatchMode' => 'rule_match_mode',
            'rules' => 'rules',
            'firstBatchReplica' => 'first_batch_replica',
            'remainingBatch' => 'remaining_batch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  灰度策略:WEIGHT为基于流量比例，CONTENT为基于内容
    * replicaSurgeMode  灰度实例新增模式:MIRROR为蓝绿，EXTRA为金丝雀（先增后减），NOSURGE为金丝雀（先减后增）
    * deploymentMode  类型1（使用应用网关、微服务引擎）、类型3（注册到微服务中心）、类型4（对接ELB独享型）、类型6（对接ELB共享型）
    * firstBatchWeight  灰度流量比例(type为WEIGHT时配置)
    * ruleMatchMode  all满足所有条件，any满足任意条件(type为CONTENT时配置)
    * rules  灰度匹配规则(type为CONTENT时配置)
    * firstBatchReplica  首批灰度实例数量(replica_surge_mode为金丝雀类型时需要配置)
    * remainingBatch  剩余实例部署批次(replica_surge_mode为金丝雀类型时需要配置)
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'replicaSurgeMode' => 'setReplicaSurgeMode',
            'deploymentMode' => 'setDeploymentMode',
            'firstBatchWeight' => 'setFirstBatchWeight',
            'ruleMatchMode' => 'setRuleMatchMode',
            'rules' => 'setRules',
            'firstBatchReplica' => 'setFirstBatchReplica',
            'remainingBatch' => 'setRemainingBatch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  灰度策略:WEIGHT为基于流量比例，CONTENT为基于内容
    * replicaSurgeMode  灰度实例新增模式:MIRROR为蓝绿，EXTRA为金丝雀（先增后减），NOSURGE为金丝雀（先减后增）
    * deploymentMode  类型1（使用应用网关、微服务引擎）、类型3（注册到微服务中心）、类型4（对接ELB独享型）、类型6（对接ELB共享型）
    * firstBatchWeight  灰度流量比例(type为WEIGHT时配置)
    * ruleMatchMode  all满足所有条件，any满足任意条件(type为CONTENT时配置)
    * rules  灰度匹配规则(type为CONTENT时配置)
    * firstBatchReplica  首批灰度实例数量(replica_surge_mode为金丝雀类型时需要配置)
    * remainingBatch  剩余实例部署批次(replica_surge_mode为金丝雀类型时需要配置)
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'replicaSurgeMode' => 'getReplicaSurgeMode',
            'deploymentMode' => 'getDeploymentMode',
            'firstBatchWeight' => 'getFirstBatchWeight',
            'ruleMatchMode' => 'getRuleMatchMode',
            'rules' => 'getRules',
            'firstBatchReplica' => 'getFirstBatchReplica',
            'remainingBatch' => 'getRemainingBatch'
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
    const TYPE_WEIGHT = 'WEIGHT';
    const TYPE_CONTENT = 'CONTENT';
    const REPLICA_SURGE_MODE_MIRROR = 'MIRROR';
    const REPLICA_SURGE_MODE_EXTRA = 'EXTRA';
    const REPLICA_SURGE_MODE_NOSURGE = 'NOSURGE';
    const DEPLOYMENT_MODE_1 = 1;
    const DEPLOYMENT_MODE_3 = 3;
    const DEPLOYMENT_MODE_4 = 4;
    const DEPLOYMENT_MODE_6 = 6;
    const RULE_MATCH_MODE_ALL = 'all';
    const RULE_MATCH_MODE_ANY = 'any';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_WEIGHT,
            self::TYPE_CONTENT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReplicaSurgeModeAllowableValues()
    {
        return [
            self::REPLICA_SURGE_MODE_MIRROR,
            self::REPLICA_SURGE_MODE_EXTRA,
            self::REPLICA_SURGE_MODE_NOSURGE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeploymentModeAllowableValues()
    {
        return [
            self::DEPLOYMENT_MODE_1,
            self::DEPLOYMENT_MODE_3,
            self::DEPLOYMENT_MODE_4,
            self::DEPLOYMENT_MODE_6,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuleMatchModeAllowableValues()
    {
        return [
            self::RULE_MATCH_MODE_ALL,
            self::RULE_MATCH_MODE_ANY,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['replicaSurgeMode'] = isset($data['replicaSurgeMode']) ? $data['replicaSurgeMode'] : null;
        $this->container['deploymentMode'] = isset($data['deploymentMode']) ? $data['deploymentMode'] : null;
        $this->container['firstBatchWeight'] = isset($data['firstBatchWeight']) ? $data['firstBatchWeight'] : null;
        $this->container['ruleMatchMode'] = isset($data['ruleMatchMode']) ? $data['ruleMatchMode'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['firstBatchReplica'] = isset($data['firstBatchReplica']) ? $data['firstBatchReplica'] : null;
        $this->container['remainingBatch'] = isset($data['remainingBatch']) ? $data['remainingBatch'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['replicaSurgeMode'] === null) {
            $invalidProperties[] = "'replicaSurgeMode' can't be null";
        }
            $allowedValues = $this->getReplicaSurgeModeAllowableValues();
                if (!is_null($this->container['replicaSurgeMode']) && !in_array($this->container['replicaSurgeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'replicaSurgeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['deploymentMode'] === null) {
            $invalidProperties[] = "'deploymentMode' can't be null";
        }
            $allowedValues = $this->getDeploymentModeAllowableValues();
                if (!is_null($this->container['deploymentMode']) && !in_array($this->container['deploymentMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deploymentMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRuleMatchModeAllowableValues();
                if (!is_null($this->container['ruleMatchMode']) && !in_array($this->container['ruleMatchMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ruleMatchMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  灰度策略:WEIGHT为基于流量比例，CONTENT为基于内容
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 灰度策略:WEIGHT为基于流量比例，CONTENT为基于内容
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets replicaSurgeMode
    *  灰度实例新增模式:MIRROR为蓝绿，EXTRA为金丝雀（先增后减），NOSURGE为金丝雀（先减后增）
    *
    * @return string
    */
    public function getReplicaSurgeMode()
    {
        return $this->container['replicaSurgeMode'];
    }

    /**
    * Sets replicaSurgeMode
    *
    * @param string $replicaSurgeMode 灰度实例新增模式:MIRROR为蓝绿，EXTRA为金丝雀（先增后减），NOSURGE为金丝雀（先减后增）
    *
    * @return $this
    */
    public function setReplicaSurgeMode($replicaSurgeMode)
    {
        $this->container['replicaSurgeMode'] = $replicaSurgeMode;
        return $this;
    }

    /**
    * Gets deploymentMode
    *  类型1（使用应用网关、微服务引擎）、类型3（注册到微服务中心）、类型4（对接ELB独享型）、类型6（对接ELB共享型）
    *
    * @return int
    */
    public function getDeploymentMode()
    {
        return $this->container['deploymentMode'];
    }

    /**
    * Sets deploymentMode
    *
    * @param int $deploymentMode 类型1（使用应用网关、微服务引擎）、类型3（注册到微服务中心）、类型4（对接ELB独享型）、类型6（对接ELB共享型）
    *
    * @return $this
    */
    public function setDeploymentMode($deploymentMode)
    {
        $this->container['deploymentMode'] = $deploymentMode;
        return $this;
    }

    /**
    * Gets firstBatchWeight
    *  灰度流量比例(type为WEIGHT时配置)
    *
    * @return int|null
    */
    public function getFirstBatchWeight()
    {
        return $this->container['firstBatchWeight'];
    }

    /**
    * Sets firstBatchWeight
    *
    * @param int|null $firstBatchWeight 灰度流量比例(type为WEIGHT时配置)
    *
    * @return $this
    */
    public function setFirstBatchWeight($firstBatchWeight)
    {
        $this->container['firstBatchWeight'] = $firstBatchWeight;
        return $this;
    }

    /**
    * Gets ruleMatchMode
    *  all满足所有条件，any满足任意条件(type为CONTENT时配置)
    *
    * @return string|null
    */
    public function getRuleMatchMode()
    {
        return $this->container['ruleMatchMode'];
    }

    /**
    * Sets ruleMatchMode
    *
    * @param string|null $ruleMatchMode all满足所有条件，any满足任意条件(type为CONTENT时配置)
    *
    * @return $this
    */
    public function setRuleMatchMode($ruleMatchMode)
    {
        $this->container['ruleMatchMode'] = $ruleMatchMode;
        return $this;
    }

    /**
    * Gets rules
    *  灰度匹配规则(type为CONTENT时配置)
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategyGrayReleaseRules[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\DeployStrategyGrayReleaseRules[]|null $rules 灰度匹配规则(type为CONTENT时配置)
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
        return $this;
    }

    /**
    * Gets firstBatchReplica
    *  首批灰度实例数量(replica_surge_mode为金丝雀类型时需要配置)
    *
    * @return int|null
    */
    public function getFirstBatchReplica()
    {
        return $this->container['firstBatchReplica'];
    }

    /**
    * Sets firstBatchReplica
    *
    * @param int|null $firstBatchReplica 首批灰度实例数量(replica_surge_mode为金丝雀类型时需要配置)
    *
    * @return $this
    */
    public function setFirstBatchReplica($firstBatchReplica)
    {
        $this->container['firstBatchReplica'] = $firstBatchReplica;
        return $this;
    }

    /**
    * Gets remainingBatch
    *  剩余实例部署批次(replica_surge_mode为金丝雀类型时需要配置)
    *
    * @return int|null
    */
    public function getRemainingBatch()
    {
        return $this->container['remainingBatch'];
    }

    /**
    * Sets remainingBatch
    *
    * @param int|null $remainingBatch 剩余实例部署批次(replica_surge_mode为金丝雀类型时需要配置)
    *
    * @return $this
    */
    public function setRemainingBatch($remainingBatch)
    {
        $this->container['remainingBatch'] = $remainingBatch;
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

