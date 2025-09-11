<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateResourceGroupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateResourceGroupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID **约束限制** 不涉及 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值** 不涉及
    * type  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），NAME（实例名称），COMB（组合匹配），不传为手动添加。 **默认取值** 不涉及
    * tags  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    * associationEpIds  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    * providers  **参数解释** 云服务名称,格式为\"dcs,ecs\",支持的云服务providers请参考《配置审计API参考》中的\"支持的服务和资源类型\"章节 **约束限制** 不涉及 **取值范围** 长度为[0,512]个字符 **默认取值** 不涉及
    * enterpriseProjectIdAndTags  **参数解释** 匹配企业项目或匹配标签参数。 **约束限制** 不超过50个条件。
    * resources  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    * productResources  **参数解释** 手动创建，选择资源层级为云产品时的资源详情。 **约束限制** 不超过50个资源。
    * instances  **参数解释** 实例名称匹配参数。 **约束限制** type为NAME时必传，不超过50个实例。
    * productNames  **参数解释** 创建资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **约束限制** 不涉及。 **取值范围** 长度[0,10240]个字符 **默认取值** 不涉及。
    * resourceLevel  **参数解释** 资源层级，资源生效范围。选择云产品，则云产品及其子层级均可进入该资源分组，选择子维度，则只生效具体的子维度。 **约束限制** 不涉及。 **取值范围** - product: 云产品 - dimension: 子维度 **默认取值** 不涉及。
    * combRelation  combRelation
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'enterpriseProjectId' => 'string',
            'type' => 'string',
            'tags' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]',
            'associationEpIds' => 'string[]',
            'providers' => 'string',
            'enterpriseProjectIdAndTags' => '\HuaweiCloud\SDK\Ces\V2\Model\EnterpriseProjectIdAndTags[]',
            'resources' => '\HuaweiCloud\SDK\Ces\V2\Model\Resource[]',
            'productResources' => '\HuaweiCloud\SDK\Ces\V2\Model\ProductResource[]',
            'instances' => '\HuaweiCloud\SDK\Ces\V2\Model\Instance[]',
            'productNames' => 'string',
            'resourceLevel' => 'string',
            'combRelation' => '\HuaweiCloud\SDK\Ces\V2\Model\CombRelation'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID **约束限制** 不涉及 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值** 不涉及
    * type  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），NAME（实例名称），COMB（组合匹配），不传为手动添加。 **默认取值** 不涉及
    * tags  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    * associationEpIds  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    * providers  **参数解释** 云服务名称,格式为\"dcs,ecs\",支持的云服务providers请参考《配置审计API参考》中的\"支持的服务和资源类型\"章节 **约束限制** 不涉及 **取值范围** 长度为[0,512]个字符 **默认取值** 不涉及
    * enterpriseProjectIdAndTags  **参数解释** 匹配企业项目或匹配标签参数。 **约束限制** 不超过50个条件。
    * resources  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    * productResources  **参数解释** 手动创建，选择资源层级为云产品时的资源详情。 **约束限制** 不超过50个资源。
    * instances  **参数解释** 实例名称匹配参数。 **约束限制** type为NAME时必传，不超过50个实例。
    * productNames  **参数解释** 创建资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **约束限制** 不涉及。 **取值范围** 长度[0,10240]个字符 **默认取值** 不涉及。
    * resourceLevel  **参数解释** 资源层级，资源生效范围。选择云产品，则云产品及其子层级均可进入该资源分组，选择子维度，则只生效具体的子维度。 **约束限制** 不涉及。 **取值范围** - product: 云产品 - dimension: 子维度 **默认取值** 不涉及。
    * combRelation  combRelation
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'enterpriseProjectId' => null,
        'type' => null,
        'tags' => null,
        'associationEpIds' => null,
        'providers' => null,
        'enterpriseProjectIdAndTags' => null,
        'resources' => null,
        'productResources' => null,
        'instances' => null,
        'productNames' => null,
        'resourceLevel' => null,
        'combRelation' => null
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
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID **约束限制** 不涉及 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值** 不涉及
    * type  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），NAME（实例名称），COMB（组合匹配），不传为手动添加。 **默认取值** 不涉及
    * tags  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    * associationEpIds  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    * providers  **参数解释** 云服务名称,格式为\"dcs,ecs\",支持的云服务providers请参考《配置审计API参考》中的\"支持的服务和资源类型\"章节 **约束限制** 不涉及 **取值范围** 长度为[0,512]个字符 **默认取值** 不涉及
    * enterpriseProjectIdAndTags  **参数解释** 匹配企业项目或匹配标签参数。 **约束限制** 不超过50个条件。
    * resources  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    * productResources  **参数解释** 手动创建，选择资源层级为云产品时的资源详情。 **约束限制** 不超过50个资源。
    * instances  **参数解释** 实例名称匹配参数。 **约束限制** type为NAME时必传，不超过50个实例。
    * productNames  **参数解释** 创建资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **约束限制** 不涉及。 **取值范围** 长度[0,10240]个字符 **默认取值** 不涉及。
    * resourceLevel  **参数解释** 资源层级，资源生效范围。选择云产品，则云产品及其子层级均可进入该资源分组，选择子维度，则只生效具体的子维度。 **约束限制** 不涉及。 **取值范围** - product: 云产品 - dimension: 子维度 **默认取值** 不涉及。
    * combRelation  combRelation
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'type' => 'type',
            'tags' => 'tags',
            'associationEpIds' => 'association_ep_ids',
            'providers' => 'providers',
            'enterpriseProjectIdAndTags' => 'enterprise_project_id_and_tags',
            'resources' => 'resources',
            'productResources' => 'product_resources',
            'instances' => 'instances',
            'productNames' => 'product_names',
            'resourceLevel' => 'resource_level',
            'combRelation' => 'comb_relation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID **约束限制** 不涉及 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值** 不涉及
    * type  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），NAME（实例名称），COMB（组合匹配），不传为手动添加。 **默认取值** 不涉及
    * tags  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    * associationEpIds  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    * providers  **参数解释** 云服务名称,格式为\"dcs,ecs\",支持的云服务providers请参考《配置审计API参考》中的\"支持的服务和资源类型\"章节 **约束限制** 不涉及 **取值范围** 长度为[0,512]个字符 **默认取值** 不涉及
    * enterpriseProjectIdAndTags  **参数解释** 匹配企业项目或匹配标签参数。 **约束限制** 不超过50个条件。
    * resources  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    * productResources  **参数解释** 手动创建，选择资源层级为云产品时的资源详情。 **约束限制** 不超过50个资源。
    * instances  **参数解释** 实例名称匹配参数。 **约束限制** type为NAME时必传，不超过50个实例。
    * productNames  **参数解释** 创建资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **约束限制** 不涉及。 **取值范围** 长度[0,10240]个字符 **默认取值** 不涉及。
    * resourceLevel  **参数解释** 资源层级，资源生效范围。选择云产品，则云产品及其子层级均可进入该资源分组，选择子维度，则只生效具体的子维度。 **约束限制** 不涉及。 **取值范围** - product: 云产品 - dimension: 子维度 **默认取值** 不涉及。
    * combRelation  combRelation
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'type' => 'setType',
            'tags' => 'setTags',
            'associationEpIds' => 'setAssociationEpIds',
            'providers' => 'setProviders',
            'enterpriseProjectIdAndTags' => 'setEnterpriseProjectIdAndTags',
            'resources' => 'setResources',
            'productResources' => 'setProductResources',
            'instances' => 'setInstances',
            'productNames' => 'setProductNames',
            'resourceLevel' => 'setResourceLevel',
            'combRelation' => 'setCombRelation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID **约束限制** 不涉及 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值** 不涉及
    * type  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），NAME（实例名称），COMB（组合匹配），不传为手动添加。 **默认取值** 不涉及
    * tags  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    * associationEpIds  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    * providers  **参数解释** 云服务名称,格式为\"dcs,ecs\",支持的云服务providers请参考《配置审计API参考》中的\"支持的服务和资源类型\"章节 **约束限制** 不涉及 **取值范围** 长度为[0,512]个字符 **默认取值** 不涉及
    * enterpriseProjectIdAndTags  **参数解释** 匹配企业项目或匹配标签参数。 **约束限制** 不超过50个条件。
    * resources  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    * productResources  **参数解释** 手动创建，选择资源层级为云产品时的资源详情。 **约束限制** 不超过50个资源。
    * instances  **参数解释** 实例名称匹配参数。 **约束限制** type为NAME时必传，不超过50个实例。
    * productNames  **参数解释** 创建资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **约束限制** 不涉及。 **取值范围** 长度[0,10240]个字符 **默认取值** 不涉及。
    * resourceLevel  **参数解释** 资源层级，资源生效范围。选择云产品，则云产品及其子层级均可进入该资源分组，选择子维度，则只生效具体的子维度。 **约束限制** 不涉及。 **取值范围** - product: 云产品 - dimension: 子维度 **默认取值** 不涉及。
    * combRelation  combRelation
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'type' => 'getType',
            'tags' => 'getTags',
            'associationEpIds' => 'getAssociationEpIds',
            'providers' => 'getProviders',
            'enterpriseProjectIdAndTags' => 'getEnterpriseProjectIdAndTags',
            'resources' => 'getResources',
            'productResources' => 'getProductResources',
            'instances' => 'getInstances',
            'productNames' => 'getProductNames',
            'resourceLevel' => 'getResourceLevel',
            'combRelation' => 'getCombRelation'
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
    const RESOURCE_LEVEL_PRODUCT = 'product';
    const RESOURCE_LEVEL_DIMENSION = 'dimension';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceLevelAllowableValues()
    {
        return [
            self::RESOURCE_LEVEL_PRODUCT,
            self::RESOURCE_LEVEL_DIMENSION,
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['associationEpIds'] = isset($data['associationEpIds']) ? $data['associationEpIds'] : null;
        $this->container['providers'] = isset($data['providers']) ? $data['providers'] : null;
        $this->container['enterpriseProjectIdAndTags'] = isset($data['enterpriseProjectIdAndTags']) ? $data['enterpriseProjectIdAndTags'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['productResources'] = isset($data['productResources']) ? $data['productResources'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['productNames'] = isset($data['productNames']) ? $data['productNames'] : null;
        $this->container['resourceLevel'] = isset($data['resourceLevel']) ? $data['resourceLevel'] : null;
        $this->container['combRelation'] = isset($data['combRelation']) ? $data['combRelation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
            if ((mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/.";
            }
            if (!is_null($this->container['type']) && !preg_match("/^(EPS|TAG|Manual|COMB|NAME)$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(EPS|TAG|Manual|COMB|NAME)$/.";
            }
            if (!is_null($this->container['providers']) && (mb_strlen($this->container['providers']) > 512)) {
                $invalidProperties[] = "invalid value for 'providers', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['providers']) && (mb_strlen($this->container['providers']) < 0)) {
                $invalidProperties[] = "invalid value for 'providers', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productNames']) && (mb_strlen($this->container['productNames']) > 10240)) {
                $invalidProperties[] = "invalid value for 'productNames', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['productNames']) && (mb_strlen($this->container['productNames']) < 0)) {
                $invalidProperties[] = "invalid value for 'productNames', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getResourceLevelAllowableValues();
                if (!is_null($this->container['resourceLevel']) && !in_array($this->container['resourceLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceLevel', must be one of '%s'",
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
    * Gets groupName
    *  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释** 资源分组归属企业项目ID **约束限制** 不涉及 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释** 资源分组归属企业项目ID **约束限制** 不涉及 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），NAME（实例名称），COMB（组合匹配），不传为手动添加。 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），NAME（实例名称），COMB（组合匹配），不传为手动添加。 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]|null $tags **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets associationEpIds
    *  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    *
    * @return string[]|null
    */
    public function getAssociationEpIds()
    {
        return $this->container['associationEpIds'];
    }

    /**
    * Sets associationEpIds
    *
    * @param string[]|null $associationEpIds **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    *
    * @return $this
    */
    public function setAssociationEpIds($associationEpIds)
    {
        $this->container['associationEpIds'] = $associationEpIds;
        return $this;
    }

    /**
    * Gets providers
    *  **参数解释** 云服务名称,格式为\"dcs,ecs\",支持的云服务providers请参考《配置审计API参考》中的\"支持的服务和资源类型\"章节 **约束限制** 不涉及 **取值范围** 长度为[0,512]个字符 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getProviders()
    {
        return $this->container['providers'];
    }

    /**
    * Sets providers
    *
    * @param string|null $providers **参数解释** 云服务名称,格式为\"dcs,ecs\",支持的云服务providers请参考《配置审计API参考》中的\"支持的服务和资源类型\"章节 **约束限制** 不涉及 **取值范围** 长度为[0,512]个字符 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setProviders($providers)
    {
        $this->container['providers'] = $providers;
        return $this;
    }

    /**
    * Gets enterpriseProjectIdAndTags
    *  **参数解释** 匹配企业项目或匹配标签参数。 **约束限制** 不超过50个条件。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\EnterpriseProjectIdAndTags[]|null
    */
    public function getEnterpriseProjectIdAndTags()
    {
        return $this->container['enterpriseProjectIdAndTags'];
    }

    /**
    * Sets enterpriseProjectIdAndTags
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\EnterpriseProjectIdAndTags[]|null $enterpriseProjectIdAndTags **参数解释** 匹配企业项目或匹配标签参数。 **约束限制** 不超过50个条件。
    *
    * @return $this
    */
    public function setEnterpriseProjectIdAndTags($enterpriseProjectIdAndTags)
    {
        $this->container['enterpriseProjectIdAndTags'] = $enterpriseProjectIdAndTags;
        return $this;
    }

    /**
    * Gets resources
    *  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Resource[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Resource[]|null $resources **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets productResources
    *  **参数解释** 手动创建，选择资源层级为云产品时的资源详情。 **约束限制** 不超过50个资源。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ProductResource[]|null
    */
    public function getProductResources()
    {
        return $this->container['productResources'];
    }

    /**
    * Sets productResources
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ProductResource[]|null $productResources **参数解释** 手动创建，选择资源层级为云产品时的资源详情。 **约束限制** 不超过50个资源。
    *
    * @return $this
    */
    public function setProductResources($productResources)
    {
        $this->container['productResources'] = $productResources;
        return $this;
    }

    /**
    * Gets instances
    *  **参数解释** 实例名称匹配参数。 **约束限制** type为NAME时必传，不超过50个实例。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Instance[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Instance[]|null $instances **参数解释** 实例名称匹配参数。 **约束限制** type为NAME时必传，不超过50个实例。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets productNames
    *  **参数解释** 创建资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **约束限制** 不涉及。 **取值范围** 长度[0,10240]个字符 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getProductNames()
    {
        return $this->container['productNames'];
    }

    /**
    * Sets productNames
    *
    * @param string|null $productNames **参数解释** 创建资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。 **约束限制** 不涉及。 **取值范围** 长度[0,10240]个字符 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setProductNames($productNames)
    {
        $this->container['productNames'] = $productNames;
        return $this;
    }

    /**
    * Gets resourceLevel
    *  **参数解释** 资源层级，资源生效范围。选择云产品，则云产品及其子层级均可进入该资源分组，选择子维度，则只生效具体的子维度。 **约束限制** 不涉及。 **取值范围** - product: 云产品 - dimension: 子维度 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getResourceLevel()
    {
        return $this->container['resourceLevel'];
    }

    /**
    * Sets resourceLevel
    *
    * @param string|null $resourceLevel **参数解释** 资源层级，资源生效范围。选择云产品，则云产品及其子层级均可进入该资源分组，选择子维度，则只生效具体的子维度。 **约束限制** 不涉及。 **取值范围** - product: 云产品 - dimension: 子维度 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setResourceLevel($resourceLevel)
    {
        $this->container['resourceLevel'] = $resourceLevel;
        return $this;
    }

    /**
    * Gets combRelation
    *  combRelation
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\CombRelation|null
    */
    public function getCombRelation()
    {
        return $this->container['combRelation'];
    }

    /**
    * Sets combRelation
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\CombRelation|null $combRelation combRelation
    *
    * @return $this
    */
    public function setCombRelation($combRelation)
    {
        $this->container['combRelation'] = $combRelation;
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

