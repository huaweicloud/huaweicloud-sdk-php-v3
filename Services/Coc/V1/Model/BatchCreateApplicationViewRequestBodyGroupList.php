<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateApplicationViewRequestBodyGroupList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateApplicationViewRequestBody_group_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 分组名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cmdbResourceIdList  **参数解释：** 关联的资源id列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * parentName  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    * syncMode  **参数解释：** 同步模式。 **约束限制：** 不涉及。 **取值范围：** - MANUAL：表示手动关联：用户在对应分组下，手动将对应资源数据关联至分组内进行管理。 - AUTO：表示智能关联：用户通过企业项目和标签的形式，将企业项目下的相同标签资源创建至同一资源分组。 **默认取值：** 不涉及。
    * syncRules  **参数解释：** 智能关联规则。 **约束限制：** 不涉及。 **取值范围：** 智能关联已选择的企业项目和对应标签的现存及未来创建的资源。 **默认取值：** 不涉及。
    * applicationName  **参数解释：** 分组关联的应用名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * componentName  **参数解释：** 分组关联的组件名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 云广商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。 **默认取值：** 不涉及。
    * relationConfigurations  **参数解释：** 分组配置信息。 **约束限制：** 不涉及。 **取值范围：** 分组的关联配置信息，比如对应的APM的配置信息。 **默认取值：** 不涉及。
    * relatedDomainId  **参数解释：** 关联的租户id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度32个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'regionId' => 'string',
            'cmdbResourceIdList' => 'string[]',
            'parentName' => 'string',
            'syncMode' => 'string',
            'syncRules' => '\HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodySyncRules[]',
            'applicationName' => 'string',
            'componentName' => 'string',
            'vendor' => 'string',
            'relationConfigurations' => '\HuaweiCloud\SDK\Coc\V1\Model\GroupRelationConfiguration[]',
            'relatedDomainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 分组名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cmdbResourceIdList  **参数解释：** 关联的资源id列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * parentName  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    * syncMode  **参数解释：** 同步模式。 **约束限制：** 不涉及。 **取值范围：** - MANUAL：表示手动关联：用户在对应分组下，手动将对应资源数据关联至分组内进行管理。 - AUTO：表示智能关联：用户通过企业项目和标签的形式，将企业项目下的相同标签资源创建至同一资源分组。 **默认取值：** 不涉及。
    * syncRules  **参数解释：** 智能关联规则。 **约束限制：** 不涉及。 **取值范围：** 智能关联已选择的企业项目和对应标签的现存及未来创建的资源。 **默认取值：** 不涉及。
    * applicationName  **参数解释：** 分组关联的应用名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * componentName  **参数解释：** 分组关联的组件名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 云广商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。 **默认取值：** 不涉及。
    * relationConfigurations  **参数解释：** 分组配置信息。 **约束限制：** 不涉及。 **取值范围：** 分组的关联配置信息，比如对应的APM的配置信息。 **默认取值：** 不涉及。
    * relatedDomainId  **参数解释：** 关联的租户id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度32个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'regionId' => null,
        'cmdbResourceIdList' => null,
        'parentName' => null,
        'syncMode' => null,
        'syncRules' => null,
        'applicationName' => null,
        'componentName' => null,
        'vendor' => null,
        'relationConfigurations' => null,
        'relatedDomainId' => null
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
    * name  **参数解释：** 分组名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cmdbResourceIdList  **参数解释：** 关联的资源id列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * parentName  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    * syncMode  **参数解释：** 同步模式。 **约束限制：** 不涉及。 **取值范围：** - MANUAL：表示手动关联：用户在对应分组下，手动将对应资源数据关联至分组内进行管理。 - AUTO：表示智能关联：用户通过企业项目和标签的形式，将企业项目下的相同标签资源创建至同一资源分组。 **默认取值：** 不涉及。
    * syncRules  **参数解释：** 智能关联规则。 **约束限制：** 不涉及。 **取值范围：** 智能关联已选择的企业项目和对应标签的现存及未来创建的资源。 **默认取值：** 不涉及。
    * applicationName  **参数解释：** 分组关联的应用名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * componentName  **参数解释：** 分组关联的组件名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 云广商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。 **默认取值：** 不涉及。
    * relationConfigurations  **参数解释：** 分组配置信息。 **约束限制：** 不涉及。 **取值范围：** 分组的关联配置信息，比如对应的APM的配置信息。 **默认取值：** 不涉及。
    * relatedDomainId  **参数解释：** 关联的租户id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度32个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'regionId' => 'region_id',
            'cmdbResourceIdList' => 'cmdb_resource_id_list',
            'parentName' => 'parent_name',
            'syncMode' => 'sync_mode',
            'syncRules' => 'sync_rules',
            'applicationName' => 'application_name',
            'componentName' => 'component_name',
            'vendor' => 'vendor',
            'relationConfigurations' => 'relation_configurations',
            'relatedDomainId' => 'related_domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 分组名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cmdbResourceIdList  **参数解释：** 关联的资源id列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * parentName  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    * syncMode  **参数解释：** 同步模式。 **约束限制：** 不涉及。 **取值范围：** - MANUAL：表示手动关联：用户在对应分组下，手动将对应资源数据关联至分组内进行管理。 - AUTO：表示智能关联：用户通过企业项目和标签的形式，将企业项目下的相同标签资源创建至同一资源分组。 **默认取值：** 不涉及。
    * syncRules  **参数解释：** 智能关联规则。 **约束限制：** 不涉及。 **取值范围：** 智能关联已选择的企业项目和对应标签的现存及未来创建的资源。 **默认取值：** 不涉及。
    * applicationName  **参数解释：** 分组关联的应用名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * componentName  **参数解释：** 分组关联的组件名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 云广商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。 **默认取值：** 不涉及。
    * relationConfigurations  **参数解释：** 分组配置信息。 **约束限制：** 不涉及。 **取值范围：** 分组的关联配置信息，比如对应的APM的配置信息。 **默认取值：** 不涉及。
    * relatedDomainId  **参数解释：** 关联的租户id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度32个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'regionId' => 'setRegionId',
            'cmdbResourceIdList' => 'setCmdbResourceIdList',
            'parentName' => 'setParentName',
            'syncMode' => 'setSyncMode',
            'syncRules' => 'setSyncRules',
            'applicationName' => 'setApplicationName',
            'componentName' => 'setComponentName',
            'vendor' => 'setVendor',
            'relationConfigurations' => 'setRelationConfigurations',
            'relatedDomainId' => 'setRelatedDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 分组名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cmdbResourceIdList  **参数解释：** 关联的资源id列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * parentName  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    * syncMode  **参数解释：** 同步模式。 **约束限制：** 不涉及。 **取值范围：** - MANUAL：表示手动关联：用户在对应分组下，手动将对应资源数据关联至分组内进行管理。 - AUTO：表示智能关联：用户通过企业项目和标签的形式，将企业项目下的相同标签资源创建至同一资源分组。 **默认取值：** 不涉及。
    * syncRules  **参数解释：** 智能关联规则。 **约束限制：** 不涉及。 **取值范围：** 智能关联已选择的企业项目和对应标签的现存及未来创建的资源。 **默认取值：** 不涉及。
    * applicationName  **参数解释：** 分组关联的应用名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * componentName  **参数解释：** 分组关联的组件名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 云广商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。 **默认取值：** 不涉及。
    * relationConfigurations  **参数解释：** 分组配置信息。 **约束限制：** 不涉及。 **取值范围：** 分组的关联配置信息，比如对应的APM的配置信息。 **默认取值：** 不涉及。
    * relatedDomainId  **参数解释：** 关联的租户id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度32个字符。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'regionId' => 'getRegionId',
            'cmdbResourceIdList' => 'getCmdbResourceIdList',
            'parentName' => 'getParentName',
            'syncMode' => 'getSyncMode',
            'syncRules' => 'getSyncRules',
            'applicationName' => 'getApplicationName',
            'componentName' => 'getComponentName',
            'vendor' => 'getVendor',
            'relationConfigurations' => 'getRelationConfigurations',
            'relatedDomainId' => 'getRelatedDomainId'
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
    const SYNC_MODE_MANUAL = 'MANUAL';
    const SYNC_MODE_AUTO = 'AUTO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSyncModeAllowableValues()
    {
        return [
            self::SYNC_MODE_MANUAL,
            self::SYNC_MODE_AUTO,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['cmdbResourceIdList'] = isset($data['cmdbResourceIdList']) ? $data['cmdbResourceIdList'] : null;
        $this->container['parentName'] = isset($data['parentName']) ? $data['parentName'] : null;
        $this->container['syncMode'] = isset($data['syncMode']) ? $data['syncMode'] : null;
        $this->container['syncRules'] = isset($data['syncRules']) ? $data['syncRules'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['componentName'] = isset($data['componentName']) ? $data['componentName'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['relationConfigurations'] = isset($data['relationConfigurations']) ? $data['relationConfigurations'] : null;
        $this->container['relatedDomainId'] = isset($data['relatedDomainId']) ? $data['relatedDomainId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) > 50)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) < 3)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be bigger than or equal to 3.";
            }
            $allowedValues = $this->getSyncModeAllowableValues();
                if (!is_null($this->container['syncMode']) && !in_array($this->container['syncMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'syncMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['applicationName']) && (mb_strlen($this->container['applicationName']) > 50)) {
                $invalidProperties[] = "invalid value for 'applicationName', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['applicationName']) && (mb_strlen($this->container['applicationName']) < 3)) {
                $invalidProperties[] = "invalid value for 'applicationName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) > 50)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) < 3)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['vendor']) && (mb_strlen($this->container['vendor']) > 32)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['relatedDomainId']) && (mb_strlen($this->container['relatedDomainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'relatedDomainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['relatedDomainId']) && (mb_strlen($this->container['relatedDomainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'relatedDomainId', the character length must be bigger than or equal to 32.";
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
    *  **参数解释：** 分组名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
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
    * @param string|null $name **参数解释：** 分组名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets regionId
    *  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets cmdbResourceIdList
    *  **参数解释：** 关联的资源id列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]|null
    */
    public function getCmdbResourceIdList()
    {
        return $this->container['cmdbResourceIdList'];
    }

    /**
    * Sets cmdbResourceIdList
    *
    * @param string[]|null $cmdbResourceIdList **参数解释：** 关联的资源id列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCmdbResourceIdList($cmdbResourceIdList)
    {
        $this->container['cmdbResourceIdList'] = $cmdbResourceIdList;
        return $this;
    }

    /**
    * Gets parentName
    *  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getParentName()
    {
        return $this->container['parentName'];
    }

    /**
    * Sets parentName
    *
    * @param string|null $parentName **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setParentName($parentName)
    {
        $this->container['parentName'] = $parentName;
        return $this;
    }

    /**
    * Gets syncMode
    *  **参数解释：** 同步模式。 **约束限制：** 不涉及。 **取值范围：** - MANUAL：表示手动关联：用户在对应分组下，手动将对应资源数据关联至分组内进行管理。 - AUTO：表示智能关联：用户通过企业项目和标签的形式，将企业项目下的相同标签资源创建至同一资源分组。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getSyncMode()
    {
        return $this->container['syncMode'];
    }

    /**
    * Sets syncMode
    *
    * @param string|null $syncMode **参数解释：** 同步模式。 **约束限制：** 不涉及。 **取值范围：** - MANUAL：表示手动关联：用户在对应分组下，手动将对应资源数据关联至分组内进行管理。 - AUTO：表示智能关联：用户通过企业项目和标签的形式，将企业项目下的相同标签资源创建至同一资源分组。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSyncMode($syncMode)
    {
        $this->container['syncMode'] = $syncMode;
        return $this;
    }

    /**
    * Gets syncRules
    *  **参数解释：** 智能关联规则。 **约束限制：** 不涉及。 **取值范围：** 智能关联已选择的企业项目和对应标签的现存及未来创建的资源。 **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodySyncRules[]|null
    */
    public function getSyncRules()
    {
        return $this->container['syncRules'];
    }

    /**
    * Sets syncRules
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodySyncRules[]|null $syncRules **参数解释：** 智能关联规则。 **约束限制：** 不涉及。 **取值范围：** 智能关联已选择的企业项目和对应标签的现存及未来创建的资源。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSyncRules($syncRules)
    {
        $this->container['syncRules'] = $syncRules;
        return $this;
    }

    /**
    * Gets applicationName
    *  **参数解释：** 分组关联的应用名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
    * Sets applicationName
    *
    * @param string|null $applicationName **参数解释：** 分组关联的应用名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets componentName
    *  **参数解释：** 分组关联的组件名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getComponentName()
    {
        return $this->container['componentName'];
    }

    /**
    * Sets componentName
    *
    * @param string|null $componentName **参数解释：** 分组关联的组件名称。 **约束限制：** 不涉及。 **取值范围：**  由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setComponentName($componentName)
    {
        $this->container['componentName'] = $componentName;
        return $this;
    }

    /**
    * Gets vendor
    *  **参数解释：** 云广商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
    * Sets vendor
    *
    * @param string|null $vendor **参数解释：** 云广商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
        return $this;
    }

    /**
    * Gets relationConfigurations
    *  **参数解释：** 分组配置信息。 **约束限制：** 不涉及。 **取值范围：** 分组的关联配置信息，比如对应的APM的配置信息。 **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\GroupRelationConfiguration[]|null
    */
    public function getRelationConfigurations()
    {
        return $this->container['relationConfigurations'];
    }

    /**
    * Sets relationConfigurations
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\GroupRelationConfiguration[]|null $relationConfigurations **参数解释：** 分组配置信息。 **约束限制：** 不涉及。 **取值范围：** 分组的关联配置信息，比如对应的APM的配置信息。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRelationConfigurations($relationConfigurations)
    {
        $this->container['relationConfigurations'] = $relationConfigurations;
        return $this;
    }

    /**
    * Gets relatedDomainId
    *  **参数解释：** 关联的租户id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度32个字符。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getRelatedDomainId()
    {
        return $this->container['relatedDomainId'];
    }

    /**
    * Sets relatedDomainId
    *
    * @param string|null $relatedDomainId **参数解释：** 关联的租户id。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度32个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRelatedDomainId($relatedDomainId)
    {
        $this->container['relatedDomainId'] = $relatedDomainId;
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

