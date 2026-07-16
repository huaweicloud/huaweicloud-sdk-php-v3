<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InferDeploymentItemResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InferDeploymentItemResponse_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 服务ID。
    * name  **参数解释：** 部署名，用户在[创建服务](CreateInferService.xml)时自定义。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。
    * inferName  **参数解释：** 部署ID。 **取值范围：** 不涉及
    * serviceGroupName  **参数解释：** 服务实例组id。 **取值范围：** 不涉及
    * status  **参数解释：** 服务当前状态，一次只支持一种状态筛选。默认不过滤。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED：已删除。 - RESTARTING：重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    * ltsState  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    * trafficRatio  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 50。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **取值范围：** 版本长度不超过8位。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 - DIST：分布式部署。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'inferName' => 'string',
            'serviceGroupName' => 'string',
            'status' => 'string',
            'ltsState' => 'string',
            'mirrorTrafficEnable' => 'bool',
            'mirrorTrafficWeight' => 'string',
            'weight' => 'int',
            'trafficRatio' => 'string',
            'poolId' => 'string',
            'version' => 'string',
            'deployType' => 'string',
            'createAt' => 'int',
            'updateAt' => 'int',
            'frozenInfos' => '\HuaweiCloud\SDK\ModelArts\V1\Model\FrozenInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 服务ID。
    * name  **参数解释：** 部署名，用户在[创建服务](CreateInferService.xml)时自定义。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。
    * inferName  **参数解释：** 部署ID。 **取值范围：** 不涉及
    * serviceGroupName  **参数解释：** 服务实例组id。 **取值范围：** 不涉及
    * status  **参数解释：** 服务当前状态，一次只支持一种状态筛选。默认不过滤。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED：已删除。 - RESTARTING：重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    * ltsState  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    * trafficRatio  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 50。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **取值范围：** 版本长度不超过8位。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 - DIST：分布式部署。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'inferName' => null,
        'serviceGroupName' => null,
        'status' => null,
        'ltsState' => null,
        'mirrorTrafficEnable' => null,
        'mirrorTrafficWeight' => null,
        'weight' => 'int32',
        'trafficRatio' => null,
        'poolId' => null,
        'version' => null,
        'deployType' => null,
        'createAt' => 'int64',
        'updateAt' => 'int64',
        'frozenInfos' => null
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
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 服务ID。
    * name  **参数解释：** 部署名，用户在[创建服务](CreateInferService.xml)时自定义。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。
    * inferName  **参数解释：** 部署ID。 **取值范围：** 不涉及
    * serviceGroupName  **参数解释：** 服务实例组id。 **取值范围：** 不涉及
    * status  **参数解释：** 服务当前状态，一次只支持一种状态筛选。默认不过滤。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED：已删除。 - RESTARTING：重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    * ltsState  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    * trafficRatio  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 50。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **取值范围：** 版本长度不超过8位。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 - DIST：分布式部署。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'inferName' => 'infer_name',
            'serviceGroupName' => 'service_group_name',
            'status' => 'status',
            'ltsState' => 'lts_state',
            'mirrorTrafficEnable' => 'mirror_traffic_enable',
            'mirrorTrafficWeight' => 'mirror_traffic_weight',
            'weight' => 'weight',
            'trafficRatio' => 'traffic_ratio',
            'poolId' => 'pool_id',
            'version' => 'version',
            'deployType' => 'deploy_type',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'frozenInfos' => 'frozen_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 服务ID。
    * name  **参数解释：** 部署名，用户在[创建服务](CreateInferService.xml)时自定义。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。
    * inferName  **参数解释：** 部署ID。 **取值范围：** 不涉及
    * serviceGroupName  **参数解释：** 服务实例组id。 **取值范围：** 不涉及
    * status  **参数解释：** 服务当前状态，一次只支持一种状态筛选。默认不过滤。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED：已删除。 - RESTARTING：重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    * ltsState  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    * trafficRatio  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 50。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **取值范围：** 版本长度不超过8位。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 - DIST：分布式部署。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'inferName' => 'setInferName',
            'serviceGroupName' => 'setServiceGroupName',
            'status' => 'setStatus',
            'ltsState' => 'setLtsState',
            'mirrorTrafficEnable' => 'setMirrorTrafficEnable',
            'mirrorTrafficWeight' => 'setMirrorTrafficWeight',
            'weight' => 'setWeight',
            'trafficRatio' => 'setTrafficRatio',
            'poolId' => 'setPoolId',
            'version' => 'setVersion',
            'deployType' => 'setDeployType',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'frozenInfos' => 'setFrozenInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 服务ID。
    * name  **参数解释：** 部署名，用户在[创建服务](CreateInferService.xml)时自定义。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。
    * inferName  **参数解释：** 部署ID。 **取值范围：** 不涉及
    * serviceGroupName  **参数解释：** 服务实例组id。 **取值范围：** 不涉及
    * status  **参数解释：** 服务当前状态，一次只支持一种状态筛选。默认不过滤。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED：已删除。 - RESTARTING：重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    * ltsState  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    * mirrorTrafficEnable  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及
    * mirrorTrafficWeight  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    * weight  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    * trafficRatio  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    * poolId  **参数解释：** 专属资源池ID。 **取值范围：** 50。
    * version  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **取值范围：** 版本长度不超过8位。
    * deployType  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 - DIST：分布式部署。
    * createAt  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    * updateAt  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    * frozenInfos  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'inferName' => 'getInferName',
            'serviceGroupName' => 'getServiceGroupName',
            'status' => 'getStatus',
            'ltsState' => 'getLtsState',
            'mirrorTrafficEnable' => 'getMirrorTrafficEnable',
            'mirrorTrafficWeight' => 'getMirrorTrafficWeight',
            'weight' => 'getWeight',
            'trafficRatio' => 'getTrafficRatio',
            'poolId' => 'getPoolId',
            'version' => 'getVersion',
            'deployType' => 'getDeployType',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'frozenInfos' => 'getFrozenInfos'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['inferName'] = isset($data['inferName']) ? $data['inferName'] : null;
        $this->container['serviceGroupName'] = isset($data['serviceGroupName']) ? $data['serviceGroupName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ltsState'] = isset($data['ltsState']) ? $data['ltsState'] : null;
        $this->container['mirrorTrafficEnable'] = isset($data['mirrorTrafficEnable']) ? $data['mirrorTrafficEnable'] : null;
        $this->container['mirrorTrafficWeight'] = isset($data['mirrorTrafficWeight']) ? $data['mirrorTrafficWeight'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['trafficRatio'] = isset($data['trafficRatio']) ? $data['trafficRatio'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['frozenInfos'] = isset($data['frozenInfos']) ? $data['frozenInfos'] : null;
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
    * Gets id
    *  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 服务ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **取值范围：** 服务ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 部署名，用户在[创建服务](CreateInferService.xml)时自定义。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 部署名，用户在[创建服务](CreateInferService.xml)时自定义。 **取值范围：** 支持1-128个字符，可以包含字母、汉字、数字、连字符和下划线。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets inferName
    *  **参数解释：** 部署ID。 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getInferName()
    {
        return $this->container['inferName'];
    }

    /**
    * Sets inferName
    *
    * @param string|null $inferName **参数解释：** 部署ID。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setInferName($inferName)
    {
        $this->container['inferName'] = $inferName;
        return $this;
    }

    /**
    * Gets serviceGroupName
    *  **参数解释：** 服务实例组id。 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getServiceGroupName()
    {
        return $this->container['serviceGroupName'];
    }

    /**
    * Sets serviceGroupName
    *
    * @param string|null $serviceGroupName **参数解释：** 服务实例组id。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setServiceGroupName($serviceGroupName)
    {
        $this->container['serviceGroupName'] = $serviceGroupName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 服务当前状态，一次只支持一种状态筛选。默认不过滤。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED：已删除。 - RESTARTING：重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 服务当前状态，一次只支持一种状态筛选。默认不过滤。 **取值范围：** - DEPLOYING：部署中。 - FAILED：失败。 - STOPPED：停止。 - RUNNING：运行中。 - DELETING：删除中。 - STOPPING：停止中。 - CONCERNING：告警。 - DELETED：已删除。 - RESTARTING：重启中。 - UPGRADING：升级中。 - ERROR：异常。 - INTERRUPTING：中断中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ltsState
    *  **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    *
    * @return string|null
    */
    public function getLtsState()
    {
        return $this->container['ltsState'];
    }

    /**
    * Sets ltsState
    *
    * @param string|null $ltsState **参数解释：** 部署对接lts状态。 **取值范围：** - ON：开启。 - OFF：关闭。
    *
    * @return $this
    */
    public function setLtsState($ltsState)
    {
        $this->container['ltsState'] = $ltsState;
        return $this;
    }

    /**
    * Gets mirrorTrafficEnable
    *  **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及
    *
    * @return bool|null
    */
    public function getMirrorTrafficEnable()
    {
        return $this->container['mirrorTrafficEnable'];
    }

    /**
    * Sets mirrorTrafficEnable
    *
    * @param bool|null $mirrorTrafficEnable **参数解释：** 是否开启镜像流量。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setMirrorTrafficEnable($mirrorTrafficEnable)
    {
        $this->container['mirrorTrafficEnable'] = $mirrorTrafficEnable;
        return $this;
    }

    /**
    * Gets mirrorTrafficWeight
    *  **参数解释：** 镜像流量权重。 **取值范围：** 50。
    *
    * @return string|null
    */
    public function getMirrorTrafficWeight()
    {
        return $this->container['mirrorTrafficWeight'];
    }

    /**
    * Sets mirrorTrafficWeight
    *
    * @param string|null $mirrorTrafficWeight **参数解释：** 镜像流量权重。 **取值范围：** 50。
    *
    * @return $this
    */
    public function setMirrorTrafficWeight($mirrorTrafficWeight)
    {
        $this->container['mirrorTrafficWeight'] = $mirrorTrafficWeight;
        return $this;
    }

    /**
    * Gets weight
    *  **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight **参数解释：** 权重百分比，分配到此模型的流量权重，仅当模型部署为在线服务时需要配置。 **取值范围：** [0, 100]。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets trafficRatio
    *  **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    *
    * @return string|null
    */
    public function getTrafficRatio()
    {
        return $this->container['trafficRatio'];
    }

    /**
    * Sets trafficRatio
    *
    * @param string|null $trafficRatio **参数解释：** 流量比例，单个部署实例预期接收用户的流量与总流量比值，是由流量权重配置和部署状态计算所得的值。 **取值范围：** 0.00%~100.00%。
    *
    * @return $this
    */
    public function setTrafficRatio($trafficRatio)
    {
        $this->container['trafficRatio'] = $trafficRatio;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释：** 专属资源池ID。 **取值范围：** 50。
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
    * @param string|null $poolId **参数解释：** 专属资源池ID。 **取值范围：** 50。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **取值范围：** 版本长度不超过8位。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释：** 服务版本号，以数字及点号组成，形如1.0.1。 **取值范围：** 版本长度不超过8位。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets deployType
    *  **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 - DIST：分布式部署。
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
    * @param string|null $deployType **参数解释：** 部署类型。 **取值范围：** - SINGLE：单机单卡。 - MULTI：多机多卡。 - DIST：分布式部署。
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释：** 创建时间，根据创建时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt **参数解释：** 更新时间，根据更新时的当前时间自动生成。 **取值范围：** 毫秒级时间戳，13位数字。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets frozenInfos
    *  **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\FrozenInfo[]|null
    */
    public function getFrozenInfos()
    {
        return $this->container['frozenInfos'];
    }

    /**
    * Sets frozenInfos
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\FrozenInfo[]|null $frozenInfos **参数解释：** 当服务或者部署被冻结时返回的冻结类型信息。
    *
    * @return $this
    */
    public function setFrozenInfos($frozenInfos)
    {
        $this->container['frozenInfos'] = $frozenInfos;
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

