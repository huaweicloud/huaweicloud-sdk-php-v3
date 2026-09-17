<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReleaseResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReleaseResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chartName  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * chartPublic  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    * chartVersion  **参数解释：** 模板版本 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterName  **参数解释：** 集群名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createAt  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 模板实例描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 模板实例名称 **约束限制：** 由小写字母开头，中间由小写字母、数字和中划线(-)组成，以小写字母或数字结尾 **取值范围：** 不涉及 **默认取值：** 不涉及
    * namespace  **参数解释：** 模板实例所在的命名空间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * parameters  **参数解释：** 模板实例参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resources  **参数解释：** 模板实例需要的资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 模板实例状态 **约束限制：** 不涉及 **取值范围：** - DEPLOYED：已部署，表示模板实例处于正常状态 - DELETED：已删除，表示模板实例已经被删除 - FAILED：失败，表示模板实例部署失败 - DELETING：删除中，表示模板实例正处于删除过程中 - PENDING_INSTALL：待安装，表示模板正在等待安装 - PENDING_UPGRADE：待升级，表示模板正在等待升级 - PENDING_ROLLBACK：待回滚，表示模板正在等待回滚 - UNKNOWN：未知，表示模板状态异常，可尝试手动删除后重新安装  **默认取值：** 不涉及
    * statusDescription  **参数解释：** 模板实例状态描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateAt  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 模板实例的值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 模板实例版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chartName' => 'string',
            'chartPublic' => 'bool',
            'chartVersion' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'createAt' => 'string',
            'description' => 'string',
            'name' => 'string',
            'namespace' => 'string',
            'parameters' => 'string',
            'resources' => 'string',
            'status' => 'string',
            'statusDescription' => 'string',
            'updateAt' => 'string',
            'values' => 'string',
            'version' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chartName  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * chartPublic  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    * chartVersion  **参数解释：** 模板版本 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterName  **参数解释：** 集群名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createAt  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 模板实例描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 模板实例名称 **约束限制：** 由小写字母开头，中间由小写字母、数字和中划线(-)组成，以小写字母或数字结尾 **取值范围：** 不涉及 **默认取值：** 不涉及
    * namespace  **参数解释：** 模板实例所在的命名空间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * parameters  **参数解释：** 模板实例参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resources  **参数解释：** 模板实例需要的资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 模板实例状态 **约束限制：** 不涉及 **取值范围：** - DEPLOYED：已部署，表示模板实例处于正常状态 - DELETED：已删除，表示模板实例已经被删除 - FAILED：失败，表示模板实例部署失败 - DELETING：删除中，表示模板实例正处于删除过程中 - PENDING_INSTALL：待安装，表示模板正在等待安装 - PENDING_UPGRADE：待升级，表示模板正在等待升级 - PENDING_ROLLBACK：待回滚，表示模板正在等待回滚 - UNKNOWN：未知，表示模板状态异常，可尝试手动删除后重新安装  **默认取值：** 不涉及
    * statusDescription  **参数解释：** 模板实例状态描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateAt  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 模板实例的值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 模板实例版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chartName' => null,
        'chartPublic' => null,
        'chartVersion' => null,
        'clusterId' => null,
        'clusterName' => null,
        'createAt' => null,
        'description' => null,
        'name' => null,
        'namespace' => null,
        'parameters' => null,
        'resources' => null,
        'status' => null,
        'statusDescription' => null,
        'updateAt' => null,
        'values' => null,
        'version' => 'int32'
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
    * chartName  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * chartPublic  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    * chartVersion  **参数解释：** 模板版本 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterName  **参数解释：** 集群名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createAt  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 模板实例描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 模板实例名称 **约束限制：** 由小写字母开头，中间由小写字母、数字和中划线(-)组成，以小写字母或数字结尾 **取值范围：** 不涉及 **默认取值：** 不涉及
    * namespace  **参数解释：** 模板实例所在的命名空间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * parameters  **参数解释：** 模板实例参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resources  **参数解释：** 模板实例需要的资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 模板实例状态 **约束限制：** 不涉及 **取值范围：** - DEPLOYED：已部署，表示模板实例处于正常状态 - DELETED：已删除，表示模板实例已经被删除 - FAILED：失败，表示模板实例部署失败 - DELETING：删除中，表示模板实例正处于删除过程中 - PENDING_INSTALL：待安装，表示模板正在等待安装 - PENDING_UPGRADE：待升级，表示模板正在等待升级 - PENDING_ROLLBACK：待回滚，表示模板正在等待回滚 - UNKNOWN：未知，表示模板状态异常，可尝试手动删除后重新安装  **默认取值：** 不涉及
    * statusDescription  **参数解释：** 模板实例状态描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateAt  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 模板实例的值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 模板实例版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chartName' => 'chart_name',
            'chartPublic' => 'chart_public',
            'chartVersion' => 'chart_version',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'createAt' => 'create_at',
            'description' => 'description',
            'name' => 'name',
            'namespace' => 'namespace',
            'parameters' => 'parameters',
            'resources' => 'resources',
            'status' => 'status',
            'statusDescription' => 'status_description',
            'updateAt' => 'update_at',
            'values' => 'values',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chartName  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * chartPublic  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    * chartVersion  **参数解释：** 模板版本 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterName  **参数解释：** 集群名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createAt  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 模板实例描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 模板实例名称 **约束限制：** 由小写字母开头，中间由小写字母、数字和中划线(-)组成，以小写字母或数字结尾 **取值范围：** 不涉及 **默认取值：** 不涉及
    * namespace  **参数解释：** 模板实例所在的命名空间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * parameters  **参数解释：** 模板实例参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resources  **参数解释：** 模板实例需要的资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 模板实例状态 **约束限制：** 不涉及 **取值范围：** - DEPLOYED：已部署，表示模板实例处于正常状态 - DELETED：已删除，表示模板实例已经被删除 - FAILED：失败，表示模板实例部署失败 - DELETING：删除中，表示模板实例正处于删除过程中 - PENDING_INSTALL：待安装，表示模板正在等待安装 - PENDING_UPGRADE：待升级，表示模板正在等待升级 - PENDING_ROLLBACK：待回滚，表示模板正在等待回滚 - UNKNOWN：未知，表示模板状态异常，可尝试手动删除后重新安装  **默认取值：** 不涉及
    * statusDescription  **参数解释：** 模板实例状态描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateAt  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 模板实例的值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 模板实例版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'chartName' => 'setChartName',
            'chartPublic' => 'setChartPublic',
            'chartVersion' => 'setChartVersion',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'createAt' => 'setCreateAt',
            'description' => 'setDescription',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'parameters' => 'setParameters',
            'resources' => 'setResources',
            'status' => 'setStatus',
            'statusDescription' => 'setStatusDescription',
            'updateAt' => 'setUpdateAt',
            'values' => 'setValues',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chartName  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * chartPublic  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    * chartVersion  **参数解释：** 模板版本 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterName  **参数解释：** 集群名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * createAt  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 模板实例描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 模板实例名称 **约束限制：** 由小写字母开头，中间由小写字母、数字和中划线(-)组成，以小写字母或数字结尾 **取值范围：** 不涉及 **默认取值：** 不涉及
    * namespace  **参数解释：** 模板实例所在的命名空间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * parameters  **参数解释：** 模板实例参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * resources  **参数解释：** 模板实例需要的资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 模板实例状态 **约束限制：** 不涉及 **取值范围：** - DEPLOYED：已部署，表示模板实例处于正常状态 - DELETED：已删除，表示模板实例已经被删除 - FAILED：失败，表示模板实例部署失败 - DELETING：删除中，表示模板实例正处于删除过程中 - PENDING_INSTALL：待安装，表示模板正在等待安装 - PENDING_UPGRADE：待升级，表示模板正在等待升级 - PENDING_ROLLBACK：待回滚，表示模板正在等待回滚 - UNKNOWN：未知，表示模板状态异常，可尝试手动删除后重新安装  **默认取值：** 不涉及
    * statusDescription  **参数解释：** 模板实例状态描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * updateAt  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * values  **参数解释：** 模板实例的值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * version  **参数解释：** 模板实例版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'chartName' => 'getChartName',
            'chartPublic' => 'getChartPublic',
            'chartVersion' => 'getChartVersion',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'createAt' => 'getCreateAt',
            'description' => 'getDescription',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'parameters' => 'getParameters',
            'resources' => 'getResources',
            'status' => 'getStatus',
            'statusDescription' => 'getStatusDescription',
            'updateAt' => 'getUpdateAt',
            'values' => 'getValues',
            'version' => 'getVersion'
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
        $this->container['chartName'] = isset($data['chartName']) ? $data['chartName'] : null;
        $this->container['chartPublic'] = isset($data['chartPublic']) ? $data['chartPublic'] : null;
        $this->container['chartVersion'] = isset($data['chartVersion']) ? $data['chartVersion'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusDescription'] = isset($data['statusDescription']) ? $data['statusDescription'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
    * Gets chartName
    *  **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getChartName()
    {
        return $this->container['chartName'];
    }

    /**
    * Sets chartName
    *
    * @param string|null $chartName **参数解释：** 模板名称 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setChartName($chartName)
    {
        $this->container['chartName'] = $chartName;
        return $this;
    }

    /**
    * Gets chartPublic
    *  **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    *
    * @return bool|null
    */
    public function getChartPublic()
    {
        return $this->container['chartPublic'];
    }

    /**
    * Sets chartPublic
    *
    * @param bool|null $chartPublic **参数解释：** 是否公开模板 **约束限制：** 不涉及 **取值范围：** - true：公开模板 - false：不公开模板  **默认取值：** false
    *
    * @return $this
    */
    public function setChartPublic($chartPublic)
    {
        $this->container['chartPublic'] = $chartPublic;
        return $this;
    }

    /**
    * Gets chartVersion
    *  **参数解释：** 模板版本 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getChartVersion()
    {
        return $this->container['chartVersion'];
    }

    /**
    * Sets chartVersion
    *
    * @param string|null $chartVersion **参数解释：** 模板版本 **约束限制：** 最长64个字符 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setChartVersion($chartVersion)
    {
        $this->container['chartVersion'] = $chartVersion;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释：** 集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释：** 集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  **参数解释：** 集群名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName **参数解释：** 集群名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt **参数解释：** 创建时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 模板实例描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 模板实例描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 模板实例名称 **约束限制：** 由小写字母开头，中间由小写字母、数字和中划线(-)组成，以小写字母或数字结尾 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $name **参数解释：** 模板实例名称 **约束限制：** 由小写字母开头，中间由小写字母、数字和中划线(-)组成，以小写字母或数字结尾 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释：** 模板实例所在的命名空间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释：** 模板实例所在的命名空间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets parameters
    *  **参数解释：** 模板实例参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param string|null $parameters **参数解释：** 模板实例参数 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets resources
    *  **参数解释：** 模板实例需要的资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param string|null $resources **参数解释：** 模板实例需要的资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 模板实例状态 **约束限制：** 不涉及 **取值范围：** - DEPLOYED：已部署，表示模板实例处于正常状态 - DELETED：已删除，表示模板实例已经被删除 - FAILED：失败，表示模板实例部署失败 - DELETING：删除中，表示模板实例正处于删除过程中 - PENDING_INSTALL：待安装，表示模板正在等待安装 - PENDING_UPGRADE：待升级，表示模板正在等待升级 - PENDING_ROLLBACK：待回滚，表示模板正在等待回滚 - UNKNOWN：未知，表示模板状态异常，可尝试手动删除后重新安装  **默认取值：** 不涉及
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
    * @param string|null $status **参数解释：** 模板实例状态 **约束限制：** 不涉及 **取值范围：** - DEPLOYED：已部署，表示模板实例处于正常状态 - DELETED：已删除，表示模板实例已经被删除 - FAILED：失败，表示模板实例部署失败 - DELETING：删除中，表示模板实例正处于删除过程中 - PENDING_INSTALL：待安装，表示模板正在等待安装 - PENDING_UPGRADE：待升级，表示模板正在等待升级 - PENDING_ROLLBACK：待回滚，表示模板正在等待回滚 - UNKNOWN：未知，表示模板状态异常，可尝试手动删除后重新安装  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusDescription
    *  **参数解释：** 模板实例状态描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getStatusDescription()
    {
        return $this->container['statusDescription'];
    }

    /**
    * Sets statusDescription
    *
    * @param string|null $statusDescription **参数解释：** 模板实例状态描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatusDescription($statusDescription)
    {
        $this->container['statusDescription'] = $statusDescription;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt **参数解释：** 更新时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释：** 模板实例的值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string|null $values **参数解释：** 模板实例的值 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释：** 模板实例版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version **参数解释：** 模板实例版本 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

