<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGraphsRespGraphs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGraphsResp_graphs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  图ID。
    * name  图名称。
    * createdBy  图的创建人账号。
    * isMultiAz  是否支持跨AZ高可用。
    * regionCode  域编码。
    * azCode  可用区编码。
    * schemaPath  元数据文件路径。
    * edgesetPath  边数据集OBS路径。
    * vertexsetPath  点数据集OBS路径。
    * edgesetFormat  边数据集文件格式。
    * edgesetDefaultLabel  边数据集文件默认Label。
    * vertexsetFormat  点数据集文件格式。
    * vertexsetDefaultLabel  点数据集文件默认Label。
    * dataStoreVersion  图版本。
    * sysTags  企业项目信息，如果未指定则不开启，默认不开启。
    * status  图的状态码。  - 100：准备中 - 200：运行中 - 201：升级中 - 202：导入中 - 203：回滚中 - 204：导出中 - 205：清空中 - 206：扩容准备中 - 207：扩容中 - 208：扩容回退中 - 210：扩副本准备中 - 211：扩副本中 - 300：故障 - 303：创建失败 - 400：被删除 - 800：已冻结 - 900：停止 - 901：停止中 - 920：启动中
    * actionProgress  图创建进度百分比。 > 只有图状态码为100时返回该字段。
    * graphSizeTypeIndex  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    * vpcId  虚拟私有云ID。
    * subnetId  指定虚拟私有云下的子网ID。
    * securityGroupId  安全组ID。
    * replication  副本个数，默认为1。
    * created  图创建时间。
    * updated  图更新时间。
    * privateIp  图实例私有网络访问浮动IP地址，通过该IP用户可以通过私有网络中已部署的弹性云服务器对图实例进行访问。
    * publicIp  图实例公网访问地址，通过该IP用户可以从互联网对图实例进行访问。
    * arch  图实例CPU架构类型，取值为x86_64和aarch64。
    * encrypted  是否加密。默认值为“false”，默认不加密。
    * masterKeyId  用户主密钥ID。
    * masterKeyName  用户主密钥名称。
    * enableRbac  是否启用细粒度权限控制。
    * enableFullTextIndex  是否启用全文索引。
    * enableHyg  是否启用HyG，该参数只对千亿规格图生效。
    * trafficIpList  图实例私有网络访问物理地址列表。为了防止浮动IP切换造成业务闪断，我们推荐您通过轮询的方式使用物理IP访问图实例。
    * cryptAlgorithm  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    * enableHttps  是否开启安全模式，开启安全模式会对性能有较大影响
    * tags  标签列表，每个标签用<key,value>键值对表示。
    * productType  图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    * vertexIdType  vertexIdType
    * originGraphSizeTypeIndex  图的初始规格。该参数从2.3.15版本后开始支持。
    * expandTime  图扩副本的时间。
    * resizeTime  图扩容的时间。
    * enableMultiLabel  是否启用多标签。
    * capacityRatio  图的容量倍率。只有持久化版百亿规格图支持该参数，该参数从2.3.18版本后开始支持。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'createdBy' => 'string',
            'isMultiAz' => 'string',
            'regionCode' => 'string',
            'azCode' => 'string',
            'schemaPath' => '\HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespSchemaPath[]',
            'edgesetPath' => '\HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespSchemaPath[]',
            'vertexsetPath' => '\HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespSchemaPath[]',
            'edgesetFormat' => 'string',
            'edgesetDefaultLabel' => 'string',
            'vertexsetFormat' => 'string',
            'vertexsetDefaultLabel' => 'string',
            'dataStoreVersion' => 'string',
            'sysTags' => 'string[]',
            'status' => 'string',
            'actionProgress' => 'string',
            'graphSizeTypeIndex' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'replication' => 'int',
            'created' => 'string',
            'updated' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'arch' => 'string',
            'encrypted' => 'bool',
            'masterKeyId' => 'string',
            'masterKeyName' => 'string',
            'enableRbac' => 'bool',
            'enableFullTextIndex' => 'bool',
            'enableHyg' => 'bool',
            'trafficIpList' => 'string[]',
            'cryptAlgorithm' => 'string',
            'enableHttps' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespTags[]',
            'productType' => 'string',
            'vertexIdType' => '\HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespVertexIdType',
            'originGraphSizeTypeIndex' => 'string',
            'expandTime' => 'string',
            'resizeTime' => 'string',
            'enableMultiLabel' => 'bool',
            'capacityRatio' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  图ID。
    * name  图名称。
    * createdBy  图的创建人账号。
    * isMultiAz  是否支持跨AZ高可用。
    * regionCode  域编码。
    * azCode  可用区编码。
    * schemaPath  元数据文件路径。
    * edgesetPath  边数据集OBS路径。
    * vertexsetPath  点数据集OBS路径。
    * edgesetFormat  边数据集文件格式。
    * edgesetDefaultLabel  边数据集文件默认Label。
    * vertexsetFormat  点数据集文件格式。
    * vertexsetDefaultLabel  点数据集文件默认Label。
    * dataStoreVersion  图版本。
    * sysTags  企业项目信息，如果未指定则不开启，默认不开启。
    * status  图的状态码。  - 100：准备中 - 200：运行中 - 201：升级中 - 202：导入中 - 203：回滚中 - 204：导出中 - 205：清空中 - 206：扩容准备中 - 207：扩容中 - 208：扩容回退中 - 210：扩副本准备中 - 211：扩副本中 - 300：故障 - 303：创建失败 - 400：被删除 - 800：已冻结 - 900：停止 - 901：停止中 - 920：启动中
    * actionProgress  图创建进度百分比。 > 只有图状态码为100时返回该字段。
    * graphSizeTypeIndex  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    * vpcId  虚拟私有云ID。
    * subnetId  指定虚拟私有云下的子网ID。
    * securityGroupId  安全组ID。
    * replication  副本个数，默认为1。
    * created  图创建时间。
    * updated  图更新时间。
    * privateIp  图实例私有网络访问浮动IP地址，通过该IP用户可以通过私有网络中已部署的弹性云服务器对图实例进行访问。
    * publicIp  图实例公网访问地址，通过该IP用户可以从互联网对图实例进行访问。
    * arch  图实例CPU架构类型，取值为x86_64和aarch64。
    * encrypted  是否加密。默认值为“false”，默认不加密。
    * masterKeyId  用户主密钥ID。
    * masterKeyName  用户主密钥名称。
    * enableRbac  是否启用细粒度权限控制。
    * enableFullTextIndex  是否启用全文索引。
    * enableHyg  是否启用HyG，该参数只对千亿规格图生效。
    * trafficIpList  图实例私有网络访问物理地址列表。为了防止浮动IP切换造成业务闪断，我们推荐您通过轮询的方式使用物理IP访问图实例。
    * cryptAlgorithm  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    * enableHttps  是否开启安全模式，开启安全模式会对性能有较大影响
    * tags  标签列表，每个标签用<key,value>键值对表示。
    * productType  图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    * vertexIdType  vertexIdType
    * originGraphSizeTypeIndex  图的初始规格。该参数从2.3.15版本后开始支持。
    * expandTime  图扩副本的时间。
    * resizeTime  图扩容的时间。
    * enableMultiLabel  是否启用多标签。
    * capacityRatio  图的容量倍率。只有持久化版百亿规格图支持该参数，该参数从2.3.18版本后开始支持。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'createdBy' => null,
        'isMultiAz' => null,
        'regionCode' => null,
        'azCode' => null,
        'schemaPath' => null,
        'edgesetPath' => null,
        'vertexsetPath' => null,
        'edgesetFormat' => null,
        'edgesetDefaultLabel' => null,
        'vertexsetFormat' => null,
        'vertexsetDefaultLabel' => null,
        'dataStoreVersion' => null,
        'sysTags' => null,
        'status' => null,
        'actionProgress' => null,
        'graphSizeTypeIndex' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'replication' => 'int32',
        'created' => null,
        'updated' => null,
        'privateIp' => null,
        'publicIp' => null,
        'arch' => null,
        'encrypted' => null,
        'masterKeyId' => null,
        'masterKeyName' => null,
        'enableRbac' => null,
        'enableFullTextIndex' => null,
        'enableHyg' => null,
        'trafficIpList' => null,
        'cryptAlgorithm' => null,
        'enableHttps' => null,
        'tags' => null,
        'productType' => null,
        'vertexIdType' => null,
        'originGraphSizeTypeIndex' => null,
        'expandTime' => null,
        'resizeTime' => null,
        'enableMultiLabel' => null,
        'capacityRatio' => 'int32'
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
    * id  图ID。
    * name  图名称。
    * createdBy  图的创建人账号。
    * isMultiAz  是否支持跨AZ高可用。
    * regionCode  域编码。
    * azCode  可用区编码。
    * schemaPath  元数据文件路径。
    * edgesetPath  边数据集OBS路径。
    * vertexsetPath  点数据集OBS路径。
    * edgesetFormat  边数据集文件格式。
    * edgesetDefaultLabel  边数据集文件默认Label。
    * vertexsetFormat  点数据集文件格式。
    * vertexsetDefaultLabel  点数据集文件默认Label。
    * dataStoreVersion  图版本。
    * sysTags  企业项目信息，如果未指定则不开启，默认不开启。
    * status  图的状态码。  - 100：准备中 - 200：运行中 - 201：升级中 - 202：导入中 - 203：回滚中 - 204：导出中 - 205：清空中 - 206：扩容准备中 - 207：扩容中 - 208：扩容回退中 - 210：扩副本准备中 - 211：扩副本中 - 300：故障 - 303：创建失败 - 400：被删除 - 800：已冻结 - 900：停止 - 901：停止中 - 920：启动中
    * actionProgress  图创建进度百分比。 > 只有图状态码为100时返回该字段。
    * graphSizeTypeIndex  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    * vpcId  虚拟私有云ID。
    * subnetId  指定虚拟私有云下的子网ID。
    * securityGroupId  安全组ID。
    * replication  副本个数，默认为1。
    * created  图创建时间。
    * updated  图更新时间。
    * privateIp  图实例私有网络访问浮动IP地址，通过该IP用户可以通过私有网络中已部署的弹性云服务器对图实例进行访问。
    * publicIp  图实例公网访问地址，通过该IP用户可以从互联网对图实例进行访问。
    * arch  图实例CPU架构类型，取值为x86_64和aarch64。
    * encrypted  是否加密。默认值为“false”，默认不加密。
    * masterKeyId  用户主密钥ID。
    * masterKeyName  用户主密钥名称。
    * enableRbac  是否启用细粒度权限控制。
    * enableFullTextIndex  是否启用全文索引。
    * enableHyg  是否启用HyG，该参数只对千亿规格图生效。
    * trafficIpList  图实例私有网络访问物理地址列表。为了防止浮动IP切换造成业务闪断，我们推荐您通过轮询的方式使用物理IP访问图实例。
    * cryptAlgorithm  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    * enableHttps  是否开启安全模式，开启安全模式会对性能有较大影响
    * tags  标签列表，每个标签用<key,value>键值对表示。
    * productType  图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    * vertexIdType  vertexIdType
    * originGraphSizeTypeIndex  图的初始规格。该参数从2.3.15版本后开始支持。
    * expandTime  图扩副本的时间。
    * resizeTime  图扩容的时间。
    * enableMultiLabel  是否启用多标签。
    * capacityRatio  图的容量倍率。只有持久化版百亿规格图支持该参数，该参数从2.3.18版本后开始支持。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'createdBy' => 'created_by',
            'isMultiAz' => 'is_multi_az',
            'regionCode' => 'region_code',
            'azCode' => 'az_code',
            'schemaPath' => 'schema_path',
            'edgesetPath' => 'edgeset_path',
            'vertexsetPath' => 'vertexset_path',
            'edgesetFormat' => 'edgeset_format',
            'edgesetDefaultLabel' => 'edgeset_default_label',
            'vertexsetFormat' => 'vertexset_format',
            'vertexsetDefaultLabel' => 'vertexset_default_label',
            'dataStoreVersion' => 'data_store_version',
            'sysTags' => 'sys_tags',
            'status' => 'status',
            'actionProgress' => 'action_progress',
            'graphSizeTypeIndex' => 'graph_size_type_index',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'replication' => 'replication',
            'created' => 'created',
            'updated' => 'updated',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'arch' => 'arch',
            'encrypted' => 'encrypted',
            'masterKeyId' => 'master_key_id',
            'masterKeyName' => 'master_key_name',
            'enableRbac' => 'enable_rbac',
            'enableFullTextIndex' => 'enable_full_text_index',
            'enableHyg' => 'enable_hyg',
            'trafficIpList' => 'traffic_ip_list',
            'cryptAlgorithm' => 'crypt_algorithm',
            'enableHttps' => 'enable_https',
            'tags' => 'tags',
            'productType' => 'product_type',
            'vertexIdType' => 'vertex_id_type',
            'originGraphSizeTypeIndex' => 'origin_graph_size_type_index',
            'expandTime' => 'expand_time',
            'resizeTime' => 'resize_time',
            'enableMultiLabel' => 'enable_multi_label',
            'capacityRatio' => 'capacity_ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  图ID。
    * name  图名称。
    * createdBy  图的创建人账号。
    * isMultiAz  是否支持跨AZ高可用。
    * regionCode  域编码。
    * azCode  可用区编码。
    * schemaPath  元数据文件路径。
    * edgesetPath  边数据集OBS路径。
    * vertexsetPath  点数据集OBS路径。
    * edgesetFormat  边数据集文件格式。
    * edgesetDefaultLabel  边数据集文件默认Label。
    * vertexsetFormat  点数据集文件格式。
    * vertexsetDefaultLabel  点数据集文件默认Label。
    * dataStoreVersion  图版本。
    * sysTags  企业项目信息，如果未指定则不开启，默认不开启。
    * status  图的状态码。  - 100：准备中 - 200：运行中 - 201：升级中 - 202：导入中 - 203：回滚中 - 204：导出中 - 205：清空中 - 206：扩容准备中 - 207：扩容中 - 208：扩容回退中 - 210：扩副本准备中 - 211：扩副本中 - 300：故障 - 303：创建失败 - 400：被删除 - 800：已冻结 - 900：停止 - 901：停止中 - 920：启动中
    * actionProgress  图创建进度百分比。 > 只有图状态码为100时返回该字段。
    * graphSizeTypeIndex  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    * vpcId  虚拟私有云ID。
    * subnetId  指定虚拟私有云下的子网ID。
    * securityGroupId  安全组ID。
    * replication  副本个数，默认为1。
    * created  图创建时间。
    * updated  图更新时间。
    * privateIp  图实例私有网络访问浮动IP地址，通过该IP用户可以通过私有网络中已部署的弹性云服务器对图实例进行访问。
    * publicIp  图实例公网访问地址，通过该IP用户可以从互联网对图实例进行访问。
    * arch  图实例CPU架构类型，取值为x86_64和aarch64。
    * encrypted  是否加密。默认值为“false”，默认不加密。
    * masterKeyId  用户主密钥ID。
    * masterKeyName  用户主密钥名称。
    * enableRbac  是否启用细粒度权限控制。
    * enableFullTextIndex  是否启用全文索引。
    * enableHyg  是否启用HyG，该参数只对千亿规格图生效。
    * trafficIpList  图实例私有网络访问物理地址列表。为了防止浮动IP切换造成业务闪断，我们推荐您通过轮询的方式使用物理IP访问图实例。
    * cryptAlgorithm  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    * enableHttps  是否开启安全模式，开启安全模式会对性能有较大影响
    * tags  标签列表，每个标签用<key,value>键值对表示。
    * productType  图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    * vertexIdType  vertexIdType
    * originGraphSizeTypeIndex  图的初始规格。该参数从2.3.15版本后开始支持。
    * expandTime  图扩副本的时间。
    * resizeTime  图扩容的时间。
    * enableMultiLabel  是否启用多标签。
    * capacityRatio  图的容量倍率。只有持久化版百亿规格图支持该参数，该参数从2.3.18版本后开始支持。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'createdBy' => 'setCreatedBy',
            'isMultiAz' => 'setIsMultiAz',
            'regionCode' => 'setRegionCode',
            'azCode' => 'setAzCode',
            'schemaPath' => 'setSchemaPath',
            'edgesetPath' => 'setEdgesetPath',
            'vertexsetPath' => 'setVertexsetPath',
            'edgesetFormat' => 'setEdgesetFormat',
            'edgesetDefaultLabel' => 'setEdgesetDefaultLabel',
            'vertexsetFormat' => 'setVertexsetFormat',
            'vertexsetDefaultLabel' => 'setVertexsetDefaultLabel',
            'dataStoreVersion' => 'setDataStoreVersion',
            'sysTags' => 'setSysTags',
            'status' => 'setStatus',
            'actionProgress' => 'setActionProgress',
            'graphSizeTypeIndex' => 'setGraphSizeTypeIndex',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'replication' => 'setReplication',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'arch' => 'setArch',
            'encrypted' => 'setEncrypted',
            'masterKeyId' => 'setMasterKeyId',
            'masterKeyName' => 'setMasterKeyName',
            'enableRbac' => 'setEnableRbac',
            'enableFullTextIndex' => 'setEnableFullTextIndex',
            'enableHyg' => 'setEnableHyg',
            'trafficIpList' => 'setTrafficIpList',
            'cryptAlgorithm' => 'setCryptAlgorithm',
            'enableHttps' => 'setEnableHttps',
            'tags' => 'setTags',
            'productType' => 'setProductType',
            'vertexIdType' => 'setVertexIdType',
            'originGraphSizeTypeIndex' => 'setOriginGraphSizeTypeIndex',
            'expandTime' => 'setExpandTime',
            'resizeTime' => 'setResizeTime',
            'enableMultiLabel' => 'setEnableMultiLabel',
            'capacityRatio' => 'setCapacityRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  图ID。
    * name  图名称。
    * createdBy  图的创建人账号。
    * isMultiAz  是否支持跨AZ高可用。
    * regionCode  域编码。
    * azCode  可用区编码。
    * schemaPath  元数据文件路径。
    * edgesetPath  边数据集OBS路径。
    * vertexsetPath  点数据集OBS路径。
    * edgesetFormat  边数据集文件格式。
    * edgesetDefaultLabel  边数据集文件默认Label。
    * vertexsetFormat  点数据集文件格式。
    * vertexsetDefaultLabel  点数据集文件默认Label。
    * dataStoreVersion  图版本。
    * sysTags  企业项目信息，如果未指定则不开启，默认不开启。
    * status  图的状态码。  - 100：准备中 - 200：运行中 - 201：升级中 - 202：导入中 - 203：回滚中 - 204：导出中 - 205：清空中 - 206：扩容准备中 - 207：扩容中 - 208：扩容回退中 - 210：扩副本准备中 - 211：扩副本中 - 300：故障 - 303：创建失败 - 400：被删除 - 800：已冻结 - 900：停止 - 901：停止中 - 920：启动中
    * actionProgress  图创建进度百分比。 > 只有图状态码为100时返回该字段。
    * graphSizeTypeIndex  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    * vpcId  虚拟私有云ID。
    * subnetId  指定虚拟私有云下的子网ID。
    * securityGroupId  安全组ID。
    * replication  副本个数，默认为1。
    * created  图创建时间。
    * updated  图更新时间。
    * privateIp  图实例私有网络访问浮动IP地址，通过该IP用户可以通过私有网络中已部署的弹性云服务器对图实例进行访问。
    * publicIp  图实例公网访问地址，通过该IP用户可以从互联网对图实例进行访问。
    * arch  图实例CPU架构类型，取值为x86_64和aarch64。
    * encrypted  是否加密。默认值为“false”，默认不加密。
    * masterKeyId  用户主密钥ID。
    * masterKeyName  用户主密钥名称。
    * enableRbac  是否启用细粒度权限控制。
    * enableFullTextIndex  是否启用全文索引。
    * enableHyg  是否启用HyG，该参数只对千亿规格图生效。
    * trafficIpList  图实例私有网络访问物理地址列表。为了防止浮动IP切换造成业务闪断，我们推荐您通过轮询的方式使用物理IP访问图实例。
    * cryptAlgorithm  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    * enableHttps  是否开启安全模式，开启安全模式会对性能有较大影响
    * tags  标签列表，每个标签用<key,value>键值对表示。
    * productType  图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    * vertexIdType  vertexIdType
    * originGraphSizeTypeIndex  图的初始规格。该参数从2.3.15版本后开始支持。
    * expandTime  图扩副本的时间。
    * resizeTime  图扩容的时间。
    * enableMultiLabel  是否启用多标签。
    * capacityRatio  图的容量倍率。只有持久化版百亿规格图支持该参数，该参数从2.3.18版本后开始支持。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'createdBy' => 'getCreatedBy',
            'isMultiAz' => 'getIsMultiAz',
            'regionCode' => 'getRegionCode',
            'azCode' => 'getAzCode',
            'schemaPath' => 'getSchemaPath',
            'edgesetPath' => 'getEdgesetPath',
            'vertexsetPath' => 'getVertexsetPath',
            'edgesetFormat' => 'getEdgesetFormat',
            'edgesetDefaultLabel' => 'getEdgesetDefaultLabel',
            'vertexsetFormat' => 'getVertexsetFormat',
            'vertexsetDefaultLabel' => 'getVertexsetDefaultLabel',
            'dataStoreVersion' => 'getDataStoreVersion',
            'sysTags' => 'getSysTags',
            'status' => 'getStatus',
            'actionProgress' => 'getActionProgress',
            'graphSizeTypeIndex' => 'getGraphSizeTypeIndex',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'replication' => 'getReplication',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'arch' => 'getArch',
            'encrypted' => 'getEncrypted',
            'masterKeyId' => 'getMasterKeyId',
            'masterKeyName' => 'getMasterKeyName',
            'enableRbac' => 'getEnableRbac',
            'enableFullTextIndex' => 'getEnableFullTextIndex',
            'enableHyg' => 'getEnableHyg',
            'trafficIpList' => 'getTrafficIpList',
            'cryptAlgorithm' => 'getCryptAlgorithm',
            'enableHttps' => 'getEnableHttps',
            'tags' => 'getTags',
            'productType' => 'getProductType',
            'vertexIdType' => 'getVertexIdType',
            'originGraphSizeTypeIndex' => 'getOriginGraphSizeTypeIndex',
            'expandTime' => 'getExpandTime',
            'resizeTime' => 'getResizeTime',
            'enableMultiLabel' => 'getEnableMultiLabel',
            'capacityRatio' => 'getCapacityRatio'
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
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['isMultiAz'] = isset($data['isMultiAz']) ? $data['isMultiAz'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['schemaPath'] = isset($data['schemaPath']) ? $data['schemaPath'] : null;
        $this->container['edgesetPath'] = isset($data['edgesetPath']) ? $data['edgesetPath'] : null;
        $this->container['vertexsetPath'] = isset($data['vertexsetPath']) ? $data['vertexsetPath'] : null;
        $this->container['edgesetFormat'] = isset($data['edgesetFormat']) ? $data['edgesetFormat'] : null;
        $this->container['edgesetDefaultLabel'] = isset($data['edgesetDefaultLabel']) ? $data['edgesetDefaultLabel'] : null;
        $this->container['vertexsetFormat'] = isset($data['vertexsetFormat']) ? $data['vertexsetFormat'] : null;
        $this->container['vertexsetDefaultLabel'] = isset($data['vertexsetDefaultLabel']) ? $data['vertexsetDefaultLabel'] : null;
        $this->container['dataStoreVersion'] = isset($data['dataStoreVersion']) ? $data['dataStoreVersion'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['actionProgress'] = isset($data['actionProgress']) ? $data['actionProgress'] : null;
        $this->container['graphSizeTypeIndex'] = isset($data['graphSizeTypeIndex']) ? $data['graphSizeTypeIndex'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['replication'] = isset($data['replication']) ? $data['replication'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['encrypted'] = isset($data['encrypted']) ? $data['encrypted'] : null;
        $this->container['masterKeyId'] = isset($data['masterKeyId']) ? $data['masterKeyId'] : null;
        $this->container['masterKeyName'] = isset($data['masterKeyName']) ? $data['masterKeyName'] : null;
        $this->container['enableRbac'] = isset($data['enableRbac']) ? $data['enableRbac'] : null;
        $this->container['enableFullTextIndex'] = isset($data['enableFullTextIndex']) ? $data['enableFullTextIndex'] : null;
        $this->container['enableHyg'] = isset($data['enableHyg']) ? $data['enableHyg'] : null;
        $this->container['trafficIpList'] = isset($data['trafficIpList']) ? $data['trafficIpList'] : null;
        $this->container['cryptAlgorithm'] = isset($data['cryptAlgorithm']) ? $data['cryptAlgorithm'] : null;
        $this->container['enableHttps'] = isset($data['enableHttps']) ? $data['enableHttps'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['vertexIdType'] = isset($data['vertexIdType']) ? $data['vertexIdType'] : null;
        $this->container['originGraphSizeTypeIndex'] = isset($data['originGraphSizeTypeIndex']) ? $data['originGraphSizeTypeIndex'] : null;
        $this->container['expandTime'] = isset($data['expandTime']) ? $data['expandTime'] : null;
        $this->container['resizeTime'] = isset($data['resizeTime']) ? $data['resizeTime'] : null;
        $this->container['enableMultiLabel'] = isset($data['enableMultiLabel']) ? $data['enableMultiLabel'] : null;
        $this->container['capacityRatio'] = isset($data['capacityRatio']) ? $data['capacityRatio'] : null;
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
    *  图ID。
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
    * @param string|null $id 图ID。
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
    *  图名称。
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
    * @param string|null $name 图名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets createdBy
    *  图的创建人账号。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 图的创建人账号。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets isMultiAz
    *  是否支持跨AZ高可用。
    *
    * @return string|null
    */
    public function getIsMultiAz()
    {
        return $this->container['isMultiAz'];
    }

    /**
    * Sets isMultiAz
    *
    * @param string|null $isMultiAz 是否支持跨AZ高可用。
    *
    * @return $this
    */
    public function setIsMultiAz($isMultiAz)
    {
        $this->container['isMultiAz'] = $isMultiAz;
        return $this;
    }

    /**
    * Gets regionCode
    *  域编码。
    *
    * @return string|null
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string|null $regionCode 域编码。
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区编码。
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 可用区编码。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets schemaPath
    *  元数据文件路径。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespSchemaPath[]|null
    */
    public function getSchemaPath()
    {
        return $this->container['schemaPath'];
    }

    /**
    * Sets schemaPath
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespSchemaPath[]|null $schemaPath 元数据文件路径。
    *
    * @return $this
    */
    public function setSchemaPath($schemaPath)
    {
        $this->container['schemaPath'] = $schemaPath;
        return $this;
    }

    /**
    * Gets edgesetPath
    *  边数据集OBS路径。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespSchemaPath[]|null
    */
    public function getEdgesetPath()
    {
        return $this->container['edgesetPath'];
    }

    /**
    * Sets edgesetPath
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespSchemaPath[]|null $edgesetPath 边数据集OBS路径。
    *
    * @return $this
    */
    public function setEdgesetPath($edgesetPath)
    {
        $this->container['edgesetPath'] = $edgesetPath;
        return $this;
    }

    /**
    * Gets vertexsetPath
    *  点数据集OBS路径。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespSchemaPath[]|null
    */
    public function getVertexsetPath()
    {
        return $this->container['vertexsetPath'];
    }

    /**
    * Sets vertexsetPath
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespSchemaPath[]|null $vertexsetPath 点数据集OBS路径。
    *
    * @return $this
    */
    public function setVertexsetPath($vertexsetPath)
    {
        $this->container['vertexsetPath'] = $vertexsetPath;
        return $this;
    }

    /**
    * Gets edgesetFormat
    *  边数据集文件格式。
    *
    * @return string|null
    */
    public function getEdgesetFormat()
    {
        return $this->container['edgesetFormat'];
    }

    /**
    * Sets edgesetFormat
    *
    * @param string|null $edgesetFormat 边数据集文件格式。
    *
    * @return $this
    */
    public function setEdgesetFormat($edgesetFormat)
    {
        $this->container['edgesetFormat'] = $edgesetFormat;
        return $this;
    }

    /**
    * Gets edgesetDefaultLabel
    *  边数据集文件默认Label。
    *
    * @return string|null
    */
    public function getEdgesetDefaultLabel()
    {
        return $this->container['edgesetDefaultLabel'];
    }

    /**
    * Sets edgesetDefaultLabel
    *
    * @param string|null $edgesetDefaultLabel 边数据集文件默认Label。
    *
    * @return $this
    */
    public function setEdgesetDefaultLabel($edgesetDefaultLabel)
    {
        $this->container['edgesetDefaultLabel'] = $edgesetDefaultLabel;
        return $this;
    }

    /**
    * Gets vertexsetFormat
    *  点数据集文件格式。
    *
    * @return string|null
    */
    public function getVertexsetFormat()
    {
        return $this->container['vertexsetFormat'];
    }

    /**
    * Sets vertexsetFormat
    *
    * @param string|null $vertexsetFormat 点数据集文件格式。
    *
    * @return $this
    */
    public function setVertexsetFormat($vertexsetFormat)
    {
        $this->container['vertexsetFormat'] = $vertexsetFormat;
        return $this;
    }

    /**
    * Gets vertexsetDefaultLabel
    *  点数据集文件默认Label。
    *
    * @return string|null
    */
    public function getVertexsetDefaultLabel()
    {
        return $this->container['vertexsetDefaultLabel'];
    }

    /**
    * Sets vertexsetDefaultLabel
    *
    * @param string|null $vertexsetDefaultLabel 点数据集文件默认Label。
    *
    * @return $this
    */
    public function setVertexsetDefaultLabel($vertexsetDefaultLabel)
    {
        $this->container['vertexsetDefaultLabel'] = $vertexsetDefaultLabel;
        return $this;
    }

    /**
    * Gets dataStoreVersion
    *  图版本。
    *
    * @return string|null
    */
    public function getDataStoreVersion()
    {
        return $this->container['dataStoreVersion'];
    }

    /**
    * Sets dataStoreVersion
    *
    * @param string|null $dataStoreVersion 图版本。
    *
    * @return $this
    */
    public function setDataStoreVersion($dataStoreVersion)
    {
        $this->container['dataStoreVersion'] = $dataStoreVersion;
        return $this;
    }

    /**
    * Gets sysTags
    *  企业项目信息，如果未指定则不开启，默认不开启。
    *
    * @return string[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param string[]|null $sysTags 企业项目信息，如果未指定则不开启，默认不开启。
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets status
    *  图的状态码。  - 100：准备中 - 200：运行中 - 201：升级中 - 202：导入中 - 203：回滚中 - 204：导出中 - 205：清空中 - 206：扩容准备中 - 207：扩容中 - 208：扩容回退中 - 210：扩副本准备中 - 211：扩副本中 - 300：故障 - 303：创建失败 - 400：被删除 - 800：已冻结 - 900：停止 - 901：停止中 - 920：启动中
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
    * @param string|null $status 图的状态码。  - 100：准备中 - 200：运行中 - 201：升级中 - 202：导入中 - 203：回滚中 - 204：导出中 - 205：清空中 - 206：扩容准备中 - 207：扩容中 - 208：扩容回退中 - 210：扩副本准备中 - 211：扩副本中 - 300：故障 - 303：创建失败 - 400：被删除 - 800：已冻结 - 900：停止 - 901：停止中 - 920：启动中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets actionProgress
    *  图创建进度百分比。 > 只有图状态码为100时返回该字段。
    *
    * @return string|null
    */
    public function getActionProgress()
    {
        return $this->container['actionProgress'];
    }

    /**
    * Sets actionProgress
    *
    * @param string|null $actionProgress 图创建进度百分比。 > 只有图状态码为100时返回该字段。
    *
    * @return $this
    */
    public function setActionProgress($actionProgress)
    {
        $this->container['actionProgress'] = $actionProgress;
        return $this;
    }

    /**
    * Gets graphSizeTypeIndex
    *  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    *
    * @return string|null
    */
    public function getGraphSizeTypeIndex()
    {
        return $this->container['graphSizeTypeIndex'];
    }

    /**
    * Sets graphSizeTypeIndex
    *
    * @param string|null $graphSizeTypeIndex 图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    *
    * @return $this
    */
    public function setGraphSizeTypeIndex($graphSizeTypeIndex)
    {
        $this->container['graphSizeTypeIndex'] = $graphSizeTypeIndex;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 虚拟私有云ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  指定虚拟私有云下的子网ID。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 指定虚拟私有云下的子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets replication
    *  副本个数，默认为1。
    *
    * @return int|null
    */
    public function getReplication()
    {
        return $this->container['replication'];
    }

    /**
    * Sets replication
    *
    * @param int|null $replication 副本个数，默认为1。
    *
    * @return $this
    */
    public function setReplication($replication)
    {
        $this->container['replication'] = $replication;
        return $this;
    }

    /**
    * Gets created
    *  图创建时间。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 图创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  图更新时间。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 图更新时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets privateIp
    *  图实例私有网络访问浮动IP地址，通过该IP用户可以通过私有网络中已部署的弹性云服务器对图实例进行访问。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 图实例私有网络访问浮动IP地址，通过该IP用户可以通过私有网络中已部署的弹性云服务器对图实例进行访问。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  图实例公网访问地址，通过该IP用户可以从互联网对图实例进行访问。
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 图实例公网访问地址，通过该IP用户可以从互联网对图实例进行访问。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets arch
    *  图实例CPU架构类型，取值为x86_64和aarch64。
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch 图实例CPU架构类型，取值为x86_64和aarch64。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets encrypted
    *  是否加密。默认值为“false”，默认不加密。
    *
    * @return bool|null
    */
    public function getEncrypted()
    {
        return $this->container['encrypted'];
    }

    /**
    * Sets encrypted
    *
    * @param bool|null $encrypted 是否加密。默认值为“false”，默认不加密。
    *
    * @return $this
    */
    public function setEncrypted($encrypted)
    {
        $this->container['encrypted'] = $encrypted;
        return $this;
    }

    /**
    * Gets masterKeyId
    *  用户主密钥ID。
    *
    * @return string|null
    */
    public function getMasterKeyId()
    {
        return $this->container['masterKeyId'];
    }

    /**
    * Sets masterKeyId
    *
    * @param string|null $masterKeyId 用户主密钥ID。
    *
    * @return $this
    */
    public function setMasterKeyId($masterKeyId)
    {
        $this->container['masterKeyId'] = $masterKeyId;
        return $this;
    }

    /**
    * Gets masterKeyName
    *  用户主密钥名称。
    *
    * @return string|null
    */
    public function getMasterKeyName()
    {
        return $this->container['masterKeyName'];
    }

    /**
    * Sets masterKeyName
    *
    * @param string|null $masterKeyName 用户主密钥名称。
    *
    * @return $this
    */
    public function setMasterKeyName($masterKeyName)
    {
        $this->container['masterKeyName'] = $masterKeyName;
        return $this;
    }

    /**
    * Gets enableRbac
    *  是否启用细粒度权限控制。
    *
    * @return bool|null
    */
    public function getEnableRbac()
    {
        return $this->container['enableRbac'];
    }

    /**
    * Sets enableRbac
    *
    * @param bool|null $enableRbac 是否启用细粒度权限控制。
    *
    * @return $this
    */
    public function setEnableRbac($enableRbac)
    {
        $this->container['enableRbac'] = $enableRbac;
        return $this;
    }

    /**
    * Gets enableFullTextIndex
    *  是否启用全文索引。
    *
    * @return bool|null
    */
    public function getEnableFullTextIndex()
    {
        return $this->container['enableFullTextIndex'];
    }

    /**
    * Sets enableFullTextIndex
    *
    * @param bool|null $enableFullTextIndex 是否启用全文索引。
    *
    * @return $this
    */
    public function setEnableFullTextIndex($enableFullTextIndex)
    {
        $this->container['enableFullTextIndex'] = $enableFullTextIndex;
        return $this;
    }

    /**
    * Gets enableHyg
    *  是否启用HyG，该参数只对千亿规格图生效。
    *
    * @return bool|null
    */
    public function getEnableHyg()
    {
        return $this->container['enableHyg'];
    }

    /**
    * Sets enableHyg
    *
    * @param bool|null $enableHyg 是否启用HyG，该参数只对千亿规格图生效。
    *
    * @return $this
    */
    public function setEnableHyg($enableHyg)
    {
        $this->container['enableHyg'] = $enableHyg;
        return $this;
    }

    /**
    * Gets trafficIpList
    *  图实例私有网络访问物理地址列表。为了防止浮动IP切换造成业务闪断，我们推荐您通过轮询的方式使用物理IP访问图实例。
    *
    * @return string[]|null
    */
    public function getTrafficIpList()
    {
        return $this->container['trafficIpList'];
    }

    /**
    * Sets trafficIpList
    *
    * @param string[]|null $trafficIpList 图实例私有网络访问物理地址列表。为了防止浮动IP切换造成业务闪断，我们推荐您通过轮询的方式使用物理IP访问图实例。
    *
    * @return $this
    */
    public function setTrafficIpList($trafficIpList)
    {
        $this->container['trafficIpList'] = $trafficIpList;
        return $this;
    }

    /**
    * Gets cryptAlgorithm
    *  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    *
    * @return string|null
    */
    public function getCryptAlgorithm()
    {
        return $this->container['cryptAlgorithm'];
    }

    /**
    * Sets cryptAlgorithm
    *
    * @param string|null $cryptAlgorithm 图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    *
    * @return $this
    */
    public function setCryptAlgorithm($cryptAlgorithm)
    {
        $this->container['cryptAlgorithm'] = $cryptAlgorithm;
        return $this;
    }

    /**
    * Gets enableHttps
    *  是否开启安全模式，开启安全模式会对性能有较大影响
    *
    * @return bool|null
    */
    public function getEnableHttps()
    {
        return $this->container['enableHttps'];
    }

    /**
    * Sets enableHttps
    *
    * @param bool|null $enableHttps 是否开启安全模式，开启安全模式会对性能有较大影响
    *
    * @return $this
    */
    public function setEnableHttps($enableHttps)
    {
        $this->container['enableHttps'] = $enableHttps;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表，每个标签用<key,value>键值对表示。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespTags[]|null $tags 标签列表，每个标签用<key,value>键值对表示。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets productType
    *  图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    *
    * @return string|null
    */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
    * Sets productType
    *
    * @param string|null $productType 图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets vertexIdType
    *  vertexIdType
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespVertexIdType|null
    */
    public function getVertexIdType()
    {
        return $this->container['vertexIdType'];
    }

    /**
    * Sets vertexIdType
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespVertexIdType|null $vertexIdType vertexIdType
    *
    * @return $this
    */
    public function setVertexIdType($vertexIdType)
    {
        $this->container['vertexIdType'] = $vertexIdType;
        return $this;
    }

    /**
    * Gets originGraphSizeTypeIndex
    *  图的初始规格。该参数从2.3.15版本后开始支持。
    *
    * @return string|null
    */
    public function getOriginGraphSizeTypeIndex()
    {
        return $this->container['originGraphSizeTypeIndex'];
    }

    /**
    * Sets originGraphSizeTypeIndex
    *
    * @param string|null $originGraphSizeTypeIndex 图的初始规格。该参数从2.3.15版本后开始支持。
    *
    * @return $this
    */
    public function setOriginGraphSizeTypeIndex($originGraphSizeTypeIndex)
    {
        $this->container['originGraphSizeTypeIndex'] = $originGraphSizeTypeIndex;
        return $this;
    }

    /**
    * Gets expandTime
    *  图扩副本的时间。
    *
    * @return string|null
    */
    public function getExpandTime()
    {
        return $this->container['expandTime'];
    }

    /**
    * Sets expandTime
    *
    * @param string|null $expandTime 图扩副本的时间。
    *
    * @return $this
    */
    public function setExpandTime($expandTime)
    {
        $this->container['expandTime'] = $expandTime;
        return $this;
    }

    /**
    * Gets resizeTime
    *  图扩容的时间。
    *
    * @return string|null
    */
    public function getResizeTime()
    {
        return $this->container['resizeTime'];
    }

    /**
    * Sets resizeTime
    *
    * @param string|null $resizeTime 图扩容的时间。
    *
    * @return $this
    */
    public function setResizeTime($resizeTime)
    {
        $this->container['resizeTime'] = $resizeTime;
        return $this;
    }

    /**
    * Gets enableMultiLabel
    *  是否启用多标签。
    *
    * @return bool|null
    */
    public function getEnableMultiLabel()
    {
        return $this->container['enableMultiLabel'];
    }

    /**
    * Sets enableMultiLabel
    *
    * @param bool|null $enableMultiLabel 是否启用多标签。
    *
    * @return $this
    */
    public function setEnableMultiLabel($enableMultiLabel)
    {
        $this->container['enableMultiLabel'] = $enableMultiLabel;
        return $this;
    }

    /**
    * Gets capacityRatio
    *  图的容量倍率。只有持久化版百亿规格图支持该参数，该参数从2.3.18版本后开始支持。
    *
    * @return int|null
    */
    public function getCapacityRatio()
    {
        return $this->container['capacityRatio'];
    }

    /**
    * Sets capacityRatio
    *
    * @param int|null $capacityRatio 图的容量倍率。只有持久化版百亿规格图支持该参数，该参数从2.3.18版本后开始支持。
    *
    * @return $this
    */
    public function setCapacityRatio($capacityRatio)
    {
        $this->container['capacityRatio'] = $capacityRatio;
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

