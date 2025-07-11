<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociatePolicyGroupRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociatePolicyGroupRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetPolicyGroupId  部署的目标策略组ID
    * operateAll  是否要对全量主机/pod实例/工作负载/集群部署策略，如果为true的话，不需填写host_id_list，如果为false的话，需要填写host_id_list
    * deployType  策略部署类型: - host: 主机 - pod: pod实例 - workload: 工作负载 - cluster: 集群
    * hostIdList  需要部署策略组的主机/pod实例/负载/集群ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetPolicyGroupId' => 'string',
            'operateAll' => 'bool',
            'deployType' => 'string',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetPolicyGroupId  部署的目标策略组ID
    * operateAll  是否要对全量主机/pod实例/工作负载/集群部署策略，如果为true的话，不需填写host_id_list，如果为false的话，需要填写host_id_list
    * deployType  策略部署类型: - host: 主机 - pod: pod实例 - workload: 工作负载 - cluster: 集群
    * hostIdList  需要部署策略组的主机/pod实例/负载/集群ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetPolicyGroupId' => null,
        'operateAll' => null,
        'deployType' => null,
        'hostIdList' => null
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
    * targetPolicyGroupId  部署的目标策略组ID
    * operateAll  是否要对全量主机/pod实例/工作负载/集群部署策略，如果为true的话，不需填写host_id_list，如果为false的话，需要填写host_id_list
    * deployType  策略部署类型: - host: 主机 - pod: pod实例 - workload: 工作负载 - cluster: 集群
    * hostIdList  需要部署策略组的主机/pod实例/负载/集群ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetPolicyGroupId' => 'target_policy_group_id',
            'operateAll' => 'operate_all',
            'deployType' => 'deploy_type',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetPolicyGroupId  部署的目标策略组ID
    * operateAll  是否要对全量主机/pod实例/工作负载/集群部署策略，如果为true的话，不需填写host_id_list，如果为false的话，需要填写host_id_list
    * deployType  策略部署类型: - host: 主机 - pod: pod实例 - workload: 工作负载 - cluster: 集群
    * hostIdList  需要部署策略组的主机/pod实例/负载/集群ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'targetPolicyGroupId' => 'setTargetPolicyGroupId',
            'operateAll' => 'setOperateAll',
            'deployType' => 'setDeployType',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetPolicyGroupId  部署的目标策略组ID
    * operateAll  是否要对全量主机/pod实例/工作负载/集群部署策略，如果为true的话，不需填写host_id_list，如果为false的话，需要填写host_id_list
    * deployType  策略部署类型: - host: 主机 - pod: pod实例 - workload: 工作负载 - cluster: 集群
    * hostIdList  需要部署策略组的主机/pod实例/负载/集群ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'targetPolicyGroupId' => 'getTargetPolicyGroupId',
            'operateAll' => 'getOperateAll',
            'deployType' => 'getDeployType',
            'hostIdList' => 'getHostIdList'
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
        $this->container['targetPolicyGroupId'] = isset($data['targetPolicyGroupId']) ? $data['targetPolicyGroupId'] : null;
        $this->container['operateAll'] = isset($data['operateAll']) ? $data['operateAll'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetPolicyGroupId'] === null) {
            $invalidProperties[] = "'targetPolicyGroupId' can't be null";
        }
            if ((mb_strlen($this->container['targetPolicyGroupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetPolicyGroupId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['targetPolicyGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'targetPolicyGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/^.*$/", $this->container['targetPolicyGroupId'])) {
                $invalidProperties[] = "invalid value for 'targetPolicyGroupId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['deployType']) && !preg_match("/^(host|pod|workload|cluster)$/", $this->container['deployType'])) {
                $invalidProperties[] = "invalid value for 'deployType', must be conform to the pattern /^(host|pod|workload|cluster)$/.";
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
    * Gets targetPolicyGroupId
    *  部署的目标策略组ID
    *
    * @return string
    */
    public function getTargetPolicyGroupId()
    {
        return $this->container['targetPolicyGroupId'];
    }

    /**
    * Sets targetPolicyGroupId
    *
    * @param string $targetPolicyGroupId 部署的目标策略组ID
    *
    * @return $this
    */
    public function setTargetPolicyGroupId($targetPolicyGroupId)
    {
        $this->container['targetPolicyGroupId'] = $targetPolicyGroupId;
        return $this;
    }

    /**
    * Gets operateAll
    *  是否要对全量主机/pod实例/工作负载/集群部署策略，如果为true的话，不需填写host_id_list，如果为false的话，需要填写host_id_list
    *
    * @return bool|null
    */
    public function getOperateAll()
    {
        return $this->container['operateAll'];
    }

    /**
    * Sets operateAll
    *
    * @param bool|null $operateAll 是否要对全量主机/pod实例/工作负载/集群部署策略，如果为true的话，不需填写host_id_list，如果为false的话，需要填写host_id_list
    *
    * @return $this
    */
    public function setOperateAll($operateAll)
    {
        $this->container['operateAll'] = $operateAll;
        return $this;
    }

    /**
    * Gets deployType
    *  策略部署类型: - host: 主机 - pod: pod实例 - workload: 工作负载 - cluster: 集群
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
    * @param string|null $deployType 策略部署类型: - host: 主机 - pod: pod实例 - workload: 工作负载 - cluster: 集群
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets hostIdList
    *  需要部署策略组的主机/pod实例/负载/集群ID列表
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList 需要部署策略组的主机/pod实例/负载/集群ID列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

