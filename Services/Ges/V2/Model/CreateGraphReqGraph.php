<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateGraphReqGraph implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateGraphReq_graph';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  图名称（输入长度在4位到50位之间，必须以字母开头，可以包含字母、数字或者下划线，不能包含其他的特殊字符）。
    * graphSizeTypeIndex  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    * arch  图实例CPU架构类型，取值为x86_64和aarch64。默认取x86_64。  - x86_64：X64 64位架构。 - aarch64：ARM 64位架构。
    * vpcId  虚拟私有云ID。
    * subnetId  指定虚拟私有云下的子网ID。
    * securityGroupId  安全组ID。
    * publicIp  publicIp
    * enableMultiAz  创建的图是否支持跨可用区（AZ），默认值是false，如果设置为true，系统将会把图中的ECS建在两个可用区中。  如果创建图时，不加该参数，则会将图中的ECS都建在一个可用区中。
    * encryption  encryption
    * ltsOperationTrace  ltsOperationTrace
    * sysTags  企业项目信息，如果未指定则不开启，默认不开启。
    * tags  支持标签TMS，做费用归集，默认不开启。
    * enableRbac  创建的图是否启用细粒度权限控制，默认不启用，值为false。如果设置为true，创建的图所有用户都没有权限，需要调用业务面细粒度权限控制API进行授权操作才可以访问图。
    * enableFullTextIndex  创建的图是否开启全文索引控制，默认不启用，值为false。 如果设置为true，十亿增强版-规格版图支持全文索引，创建图时会创建云搜索服务集群。 > 开启全文索引功能。如果CSS服务已经部署，图实例会自动创建CSS集群，图创建时间较长。如果CSS服务没有部署则图创建失败。
    * enableHyg  该参数只对千亿规格图生效。
    * cryptAlgorithm  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    * enableHttps  是否开启安全模式，开启安全模式会对性能有较大影响
    * productType  图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    * vertexIdType  vertexIdType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'graphSizeTypeIndex' => 'string',
            'arch' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'publicIp' => '\HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphPublicIp',
            'enableMultiAz' => 'bool',
            'encryption' => '\HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphEncryption',
            'ltsOperationTrace' => '\HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphLtsOperationTrace',
            'sysTags' => '\HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphSysTags[]',
            'tags' => '\HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespTags[]',
            'enableRbac' => 'bool',
            'enableFullTextIndex' => 'bool',
            'enableHyg' => 'bool',
            'cryptAlgorithm' => 'string',
            'enableHttps' => 'bool',
            'productType' => 'string',
            'vertexIdType' => '\HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphVertexIdType'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  图名称（输入长度在4位到50位之间，必须以字母开头，可以包含字母、数字或者下划线，不能包含其他的特殊字符）。
    * graphSizeTypeIndex  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    * arch  图实例CPU架构类型，取值为x86_64和aarch64。默认取x86_64。  - x86_64：X64 64位架构。 - aarch64：ARM 64位架构。
    * vpcId  虚拟私有云ID。
    * subnetId  指定虚拟私有云下的子网ID。
    * securityGroupId  安全组ID。
    * publicIp  publicIp
    * enableMultiAz  创建的图是否支持跨可用区（AZ），默认值是false，如果设置为true，系统将会把图中的ECS建在两个可用区中。  如果创建图时，不加该参数，则会将图中的ECS都建在一个可用区中。
    * encryption  encryption
    * ltsOperationTrace  ltsOperationTrace
    * sysTags  企业项目信息，如果未指定则不开启，默认不开启。
    * tags  支持标签TMS，做费用归集，默认不开启。
    * enableRbac  创建的图是否启用细粒度权限控制，默认不启用，值为false。如果设置为true，创建的图所有用户都没有权限，需要调用业务面细粒度权限控制API进行授权操作才可以访问图。
    * enableFullTextIndex  创建的图是否开启全文索引控制，默认不启用，值为false。 如果设置为true，十亿增强版-规格版图支持全文索引，创建图时会创建云搜索服务集群。 > 开启全文索引功能。如果CSS服务已经部署，图实例会自动创建CSS集群，图创建时间较长。如果CSS服务没有部署则图创建失败。
    * enableHyg  该参数只对千亿规格图生效。
    * cryptAlgorithm  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    * enableHttps  是否开启安全模式，开启安全模式会对性能有较大影响
    * productType  图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    * vertexIdType  vertexIdType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'graphSizeTypeIndex' => null,
        'arch' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'publicIp' => null,
        'enableMultiAz' => null,
        'encryption' => null,
        'ltsOperationTrace' => null,
        'sysTags' => null,
        'tags' => null,
        'enableRbac' => null,
        'enableFullTextIndex' => null,
        'enableHyg' => null,
        'cryptAlgorithm' => null,
        'enableHttps' => null,
        'productType' => null,
        'vertexIdType' => null
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
    * name  图名称（输入长度在4位到50位之间，必须以字母开头，可以包含字母、数字或者下划线，不能包含其他的特殊字符）。
    * graphSizeTypeIndex  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    * arch  图实例CPU架构类型，取值为x86_64和aarch64。默认取x86_64。  - x86_64：X64 64位架构。 - aarch64：ARM 64位架构。
    * vpcId  虚拟私有云ID。
    * subnetId  指定虚拟私有云下的子网ID。
    * securityGroupId  安全组ID。
    * publicIp  publicIp
    * enableMultiAz  创建的图是否支持跨可用区（AZ），默认值是false，如果设置为true，系统将会把图中的ECS建在两个可用区中。  如果创建图时，不加该参数，则会将图中的ECS都建在一个可用区中。
    * encryption  encryption
    * ltsOperationTrace  ltsOperationTrace
    * sysTags  企业项目信息，如果未指定则不开启，默认不开启。
    * tags  支持标签TMS，做费用归集，默认不开启。
    * enableRbac  创建的图是否启用细粒度权限控制，默认不启用，值为false。如果设置为true，创建的图所有用户都没有权限，需要调用业务面细粒度权限控制API进行授权操作才可以访问图。
    * enableFullTextIndex  创建的图是否开启全文索引控制，默认不启用，值为false。 如果设置为true，十亿增强版-规格版图支持全文索引，创建图时会创建云搜索服务集群。 > 开启全文索引功能。如果CSS服务已经部署，图实例会自动创建CSS集群，图创建时间较长。如果CSS服务没有部署则图创建失败。
    * enableHyg  该参数只对千亿规格图生效。
    * cryptAlgorithm  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    * enableHttps  是否开启安全模式，开启安全模式会对性能有较大影响
    * productType  图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    * vertexIdType  vertexIdType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'graphSizeTypeIndex' => 'graph_size_type_index',
            'arch' => 'arch',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'publicIp' => 'public_ip',
            'enableMultiAz' => 'enable_multi_az',
            'encryption' => 'encryption',
            'ltsOperationTrace' => 'lts_operation_trace',
            'sysTags' => 'sys_tags',
            'tags' => 'tags',
            'enableRbac' => 'enable_rbac',
            'enableFullTextIndex' => 'enable_full_text_index',
            'enableHyg' => 'enable_hyg',
            'cryptAlgorithm' => 'crypt_algorithm',
            'enableHttps' => 'enable_https',
            'productType' => 'product_type',
            'vertexIdType' => 'vertex_id_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  图名称（输入长度在4位到50位之间，必须以字母开头，可以包含字母、数字或者下划线，不能包含其他的特殊字符）。
    * graphSizeTypeIndex  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    * arch  图实例CPU架构类型，取值为x86_64和aarch64。默认取x86_64。  - x86_64：X64 64位架构。 - aarch64：ARM 64位架构。
    * vpcId  虚拟私有云ID。
    * subnetId  指定虚拟私有云下的子网ID。
    * securityGroupId  安全组ID。
    * publicIp  publicIp
    * enableMultiAz  创建的图是否支持跨可用区（AZ），默认值是false，如果设置为true，系统将会把图中的ECS建在两个可用区中。  如果创建图时，不加该参数，则会将图中的ECS都建在一个可用区中。
    * encryption  encryption
    * ltsOperationTrace  ltsOperationTrace
    * sysTags  企业项目信息，如果未指定则不开启，默认不开启。
    * tags  支持标签TMS，做费用归集，默认不开启。
    * enableRbac  创建的图是否启用细粒度权限控制，默认不启用，值为false。如果设置为true，创建的图所有用户都没有权限，需要调用业务面细粒度权限控制API进行授权操作才可以访问图。
    * enableFullTextIndex  创建的图是否开启全文索引控制，默认不启用，值为false。 如果设置为true，十亿增强版-规格版图支持全文索引，创建图时会创建云搜索服务集群。 > 开启全文索引功能。如果CSS服务已经部署，图实例会自动创建CSS集群，图创建时间较长。如果CSS服务没有部署则图创建失败。
    * enableHyg  该参数只对千亿规格图生效。
    * cryptAlgorithm  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    * enableHttps  是否开启安全模式，开启安全模式会对性能有较大影响
    * productType  图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    * vertexIdType  vertexIdType
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'graphSizeTypeIndex' => 'setGraphSizeTypeIndex',
            'arch' => 'setArch',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'publicIp' => 'setPublicIp',
            'enableMultiAz' => 'setEnableMultiAz',
            'encryption' => 'setEncryption',
            'ltsOperationTrace' => 'setLtsOperationTrace',
            'sysTags' => 'setSysTags',
            'tags' => 'setTags',
            'enableRbac' => 'setEnableRbac',
            'enableFullTextIndex' => 'setEnableFullTextIndex',
            'enableHyg' => 'setEnableHyg',
            'cryptAlgorithm' => 'setCryptAlgorithm',
            'enableHttps' => 'setEnableHttps',
            'productType' => 'setProductType',
            'vertexIdType' => 'setVertexIdType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  图名称（输入长度在4位到50位之间，必须以字母开头，可以包含字母、数字或者下划线，不能包含其他的特殊字符）。
    * graphSizeTypeIndex  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    * arch  图实例CPU架构类型，取值为x86_64和aarch64。默认取x86_64。  - x86_64：X64 64位架构。 - aarch64：ARM 64位架构。
    * vpcId  虚拟私有云ID。
    * subnetId  指定虚拟私有云下的子网ID。
    * securityGroupId  安全组ID。
    * publicIp  publicIp
    * enableMultiAz  创建的图是否支持跨可用区（AZ），默认值是false，如果设置为true，系统将会把图中的ECS建在两个可用区中。  如果创建图时，不加该参数，则会将图中的ECS都建在一个可用区中。
    * encryption  encryption
    * ltsOperationTrace  ltsOperationTrace
    * sysTags  企业项目信息，如果未指定则不开启，默认不开启。
    * tags  支持标签TMS，做费用归集，默认不开启。
    * enableRbac  创建的图是否启用细粒度权限控制，默认不启用，值为false。如果设置为true，创建的图所有用户都没有权限，需要调用业务面细粒度权限控制API进行授权操作才可以访问图。
    * enableFullTextIndex  创建的图是否开启全文索引控制，默认不启用，值为false。 如果设置为true，十亿增强版-规格版图支持全文索引，创建图时会创建云搜索服务集群。 > 开启全文索引功能。如果CSS服务已经部署，图实例会自动创建CSS集群，图创建时间较长。如果CSS服务没有部署则图创建失败。
    * enableHyg  该参数只对千亿规格图生效。
    * cryptAlgorithm  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    * enableHttps  是否开启安全模式，开启安全模式会对性能有较大影响
    * productType  图产品类型，取值为InMemory和Persistence，默认为InMemory，当graph_size_type_index取值为\"6\"时，默认为Persistence。  - InMemory：内存版 - Persistence：持久化版
    * vertexIdType  vertexIdType
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'graphSizeTypeIndex' => 'getGraphSizeTypeIndex',
            'arch' => 'getArch',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'publicIp' => 'getPublicIp',
            'enableMultiAz' => 'getEnableMultiAz',
            'encryption' => 'getEncryption',
            'ltsOperationTrace' => 'getLtsOperationTrace',
            'sysTags' => 'getSysTags',
            'tags' => 'getTags',
            'enableRbac' => 'getEnableRbac',
            'enableFullTextIndex' => 'getEnableFullTextIndex',
            'enableHyg' => 'getEnableHyg',
            'cryptAlgorithm' => 'getCryptAlgorithm',
            'enableHttps' => 'getEnableHttps',
            'productType' => 'getProductType',
            'vertexIdType' => 'getVertexIdType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['graphSizeTypeIndex'] = isset($data['graphSizeTypeIndex']) ? $data['graphSizeTypeIndex'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['enableMultiAz'] = isset($data['enableMultiAz']) ? $data['enableMultiAz'] : null;
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
        $this->container['ltsOperationTrace'] = isset($data['ltsOperationTrace']) ? $data['ltsOperationTrace'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enableRbac'] = isset($data['enableRbac']) ? $data['enableRbac'] : null;
        $this->container['enableFullTextIndex'] = isset($data['enableFullTextIndex']) ? $data['enableFullTextIndex'] : null;
        $this->container['enableHyg'] = isset($data['enableHyg']) ? $data['enableHyg'] : null;
        $this->container['cryptAlgorithm'] = isset($data['cryptAlgorithm']) ? $data['cryptAlgorithm'] : null;
        $this->container['enableHttps'] = isset($data['enableHttps']) ? $data['enableHttps'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['vertexIdType'] = isset($data['vertexIdType']) ? $data['vertexIdType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['graphSizeTypeIndex'] === null) {
            $invalidProperties[] = "'graphSizeTypeIndex' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['cryptAlgorithm'] === null) {
            $invalidProperties[] = "'cryptAlgorithm' can't be null";
        }
        if ($this->container['enableHttps'] === null) {
            $invalidProperties[] = "'enableHttps' can't be null";
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
    * Gets name
    *  图名称（输入长度在4位到50位之间，必须以字母开头，可以包含字母、数字或者下划线，不能包含其他的特殊字符）。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 图名称（输入长度在4位到50位之间，必须以字母开头，可以包含字母、数字或者下划线，不能包含其他的特殊字符）。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets graphSizeTypeIndex
    *  图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    *
    * @return string
    */
    public function getGraphSizeTypeIndex()
    {
        return $this->container['graphSizeTypeIndex'];
    }

    /**
    * Sets graphSizeTypeIndex
    *
    * @param string $graphSizeTypeIndex 图规模类型索引。  - 0：一万边 - 1：百万边 - 2：千万边 - 3：一亿边 - 4：十亿边 - 5：百亿边 - 6：千亿边 - 401：十亿增强边
    *
    * @return $this
    */
    public function setGraphSizeTypeIndex($graphSizeTypeIndex)
    {
        $this->container['graphSizeTypeIndex'] = $graphSizeTypeIndex;
        return $this;
    }

    /**
    * Gets arch
    *  图实例CPU架构类型，取值为x86_64和aarch64。默认取x86_64。  - x86_64：X64 64位架构。 - aarch64：ARM 64位架构。
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
    * @param string|null $arch 图实例CPU架构类型，取值为x86_64和aarch64。默认取x86_64。  - x86_64：X64 64位架构。 - aarch64：ARM 64位架构。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟私有云ID。
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
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 指定虚拟私有云下的子网ID。
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
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphPublicIp|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphPublicIp|null $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets enableMultiAz
    *  创建的图是否支持跨可用区（AZ），默认值是false，如果设置为true，系统将会把图中的ECS建在两个可用区中。  如果创建图时，不加该参数，则会将图中的ECS都建在一个可用区中。
    *
    * @return bool|null
    */
    public function getEnableMultiAz()
    {
        return $this->container['enableMultiAz'];
    }

    /**
    * Sets enableMultiAz
    *
    * @param bool|null $enableMultiAz 创建的图是否支持跨可用区（AZ），默认值是false，如果设置为true，系统将会把图中的ECS建在两个可用区中。  如果创建图时，不加该参数，则会将图中的ECS都建在一个可用区中。
    *
    * @return $this
    */
    public function setEnableMultiAz($enableMultiAz)
    {
        $this->container['enableMultiAz'] = $enableMultiAz;
        return $this;
    }

    /**
    * Gets encryption
    *  encryption
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphEncryption|null
    */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
    * Sets encryption
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphEncryption|null $encryption encryption
    *
    * @return $this
    */
    public function setEncryption($encryption)
    {
        $this->container['encryption'] = $encryption;
        return $this;
    }

    /**
    * Gets ltsOperationTrace
    *  ltsOperationTrace
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphLtsOperationTrace|null
    */
    public function getLtsOperationTrace()
    {
        return $this->container['ltsOperationTrace'];
    }

    /**
    * Sets ltsOperationTrace
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphLtsOperationTrace|null $ltsOperationTrace ltsOperationTrace
    *
    * @return $this
    */
    public function setLtsOperationTrace($ltsOperationTrace)
    {
        $this->container['ltsOperationTrace'] = $ltsOperationTrace;
        return $this;
    }

    /**
    * Gets sysTags
    *  企业项目信息，如果未指定则不开启，默认不开启。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphSysTags[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphSysTags[]|null $sysTags 企业项目信息，如果未指定则不开启，默认不开启。
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets tags
    *  支持标签TMS，做费用归集，默认不开启。
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
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ListGraphsRespTags[]|null $tags 支持标签TMS，做费用归集，默认不开启。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enableRbac
    *  创建的图是否启用细粒度权限控制，默认不启用，值为false。如果设置为true，创建的图所有用户都没有权限，需要调用业务面细粒度权限控制API进行授权操作才可以访问图。
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
    * @param bool|null $enableRbac 创建的图是否启用细粒度权限控制，默认不启用，值为false。如果设置为true，创建的图所有用户都没有权限，需要调用业务面细粒度权限控制API进行授权操作才可以访问图。
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
    *  创建的图是否开启全文索引控制，默认不启用，值为false。 如果设置为true，十亿增强版-规格版图支持全文索引，创建图时会创建云搜索服务集群。 > 开启全文索引功能。如果CSS服务已经部署，图实例会自动创建CSS集群，图创建时间较长。如果CSS服务没有部署则图创建失败。
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
    * @param bool|null $enableFullTextIndex 创建的图是否开启全文索引控制，默认不启用，值为false。 如果设置为true，十亿增强版-规格版图支持全文索引，创建图时会创建云搜索服务集群。 > 开启全文索引功能。如果CSS服务已经部署，图实例会自动创建CSS集群，图创建时间较长。如果CSS服务没有部署则图创建失败。
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
    *  该参数只对千亿规格图生效。
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
    * @param bool|null $enableHyg 该参数只对千亿规格图生效。
    *
    * @return $this
    */
    public function setEnableHyg($enableHyg)
    {
        $this->container['enableHyg'] = $enableHyg;
        return $this;
    }

    /**
    * Gets cryptAlgorithm
    *  图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
    *
    * @return string
    */
    public function getCryptAlgorithm()
    {
        return $this->container['cryptAlgorithm'];
    }

    /**
    * Sets cryptAlgorithm
    *
    * @param string $cryptAlgorithm 图实例加密算法，取值为：  - generalCipher：国密算法 - SMcompatible：商密算法（兼容国际）
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
    * @return bool
    */
    public function getEnableHttps()
    {
        return $this->container['enableHttps'];
    }

    /**
    * Sets enableHttps
    *
    * @param bool $enableHttps 是否开启安全模式，开启安全模式会对性能有较大影响
    *
    * @return $this
    */
    public function setEnableHttps($enableHttps)
    {
        $this->container['enableHttps'] = $enableHttps;
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
    * @return \HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphVertexIdType|null
    */
    public function getVertexIdType()
    {
        return $this->container['vertexIdType'];
    }

    /**
    * Sets vertexIdType
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\CreateGraphReqGraphVertexIdType|null $vertexIdType vertexIdType
    *
    * @return $this
    */
    public function setVertexIdType($vertexIdType)
    {
        $this->container['vertexIdType'] = $vertexIdType;
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

