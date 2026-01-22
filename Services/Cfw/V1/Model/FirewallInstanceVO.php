<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FirewallInstanceVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FirewallInstanceVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fwInstanceId  **参数解释**： 防火墙实例id，创建云防火墙后用于标记防火墙由系统自动生成的id。 **约束限制**： 不涉及
    * resourceId  **参数解释**： 资源id，与防火墙实例id fw_instance_id相同。 **约束限制**： 不涉及
    * name  **参数解释**： 创建防火墙时的时间戳 **约束限制**： 不涉及
    * fwInstanceName  **参数解释**： 防火墙名称 **约束限制**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目id，用户支持企业项目后，由企业项目生成的id。 **约束限制**： 不涉及
    * haType  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - 0：主备模式，包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点 - 1：集群模式，仅拉起两个节点作为集群
    * chargeMode  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - 0：包年/包月 - 1：按需 **默认取值**： 不涉及
    * serviceType  **参数解释**： 防火墙防护类型 **约束限制**： 不涉及 **取值范围**： 目前仅支持0，互联网防护
    * engineType  **参数解释**： 引擎类型 **约束限制**： 不涉及 **取值范围**： - 0：自研引擎 - 1：山石引擎 - 3：天融信引擎
    * flavor  flavor
    * status  **参数解释**： 防火墙状态列表 **约束限制**： 不涉及 **取值范围**： - -1：等待支付 - 0：创建中 - 1，删除中 - 2：运行中 - 3：升级中 - 4：删除完成 - 5：冻结中 - 6：创建失败 - 7：删除失败 - 8：冻结失败 - 9：存储中 - 10：存储失败 - 11：升级失败
    * tags  **参数解释**： 标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\" **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fwInstanceId' => 'string',
            'resourceId' => 'string',
            'name' => 'string',
            'fwInstanceName' => 'string',
            'enterpriseProjectId' => 'string',
            'haType' => 'int',
            'chargeMode' => 'int',
            'serviceType' => 'int',
            'engineType' => 'int',
            'flavor' => '\HuaweiCloud\SDK\Cfw\V1\Model\Flavor',
            'status' => 'int',
            'tags' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fwInstanceId  **参数解释**： 防火墙实例id，创建云防火墙后用于标记防火墙由系统自动生成的id。 **约束限制**： 不涉及
    * resourceId  **参数解释**： 资源id，与防火墙实例id fw_instance_id相同。 **约束限制**： 不涉及
    * name  **参数解释**： 创建防火墙时的时间戳 **约束限制**： 不涉及
    * fwInstanceName  **参数解释**： 防火墙名称 **约束限制**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目id，用户支持企业项目后，由企业项目生成的id。 **约束限制**： 不涉及
    * haType  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - 0：主备模式，包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点 - 1：集群模式，仅拉起两个节点作为集群
    * chargeMode  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - 0：包年/包月 - 1：按需 **默认取值**： 不涉及
    * serviceType  **参数解释**： 防火墙防护类型 **约束限制**： 不涉及 **取值范围**： 目前仅支持0，互联网防护
    * engineType  **参数解释**： 引擎类型 **约束限制**： 不涉及 **取值范围**： - 0：自研引擎 - 1：山石引擎 - 3：天融信引擎
    * flavor  flavor
    * status  **参数解释**： 防火墙状态列表 **约束限制**： 不涉及 **取值范围**： - -1：等待支付 - 0：创建中 - 1，删除中 - 2：运行中 - 3：升级中 - 4：删除完成 - 5：冻结中 - 6：创建失败 - 7：删除失败 - 8：冻结失败 - 9：存储中 - 10：存储失败 - 11：升级失败
    * tags  **参数解释**： 标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\" **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fwInstanceId' => null,
        'resourceId' => null,
        'name' => null,
        'fwInstanceName' => null,
        'enterpriseProjectId' => null,
        'haType' => 'int32',
        'chargeMode' => 'int32',
        'serviceType' => 'int32',
        'engineType' => 'int32',
        'flavor' => null,
        'status' => 'int32',
        'tags' => null
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
    * fwInstanceId  **参数解释**： 防火墙实例id，创建云防火墙后用于标记防火墙由系统自动生成的id。 **约束限制**： 不涉及
    * resourceId  **参数解释**： 资源id，与防火墙实例id fw_instance_id相同。 **约束限制**： 不涉及
    * name  **参数解释**： 创建防火墙时的时间戳 **约束限制**： 不涉及
    * fwInstanceName  **参数解释**： 防火墙名称 **约束限制**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目id，用户支持企业项目后，由企业项目生成的id。 **约束限制**： 不涉及
    * haType  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - 0：主备模式，包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点 - 1：集群模式，仅拉起两个节点作为集群
    * chargeMode  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - 0：包年/包月 - 1：按需 **默认取值**： 不涉及
    * serviceType  **参数解释**： 防火墙防护类型 **约束限制**： 不涉及 **取值范围**： 目前仅支持0，互联网防护
    * engineType  **参数解释**： 引擎类型 **约束限制**： 不涉及 **取值范围**： - 0：自研引擎 - 1：山石引擎 - 3：天融信引擎
    * flavor  flavor
    * status  **参数解释**： 防火墙状态列表 **约束限制**： 不涉及 **取值范围**： - -1：等待支付 - 0：创建中 - 1，删除中 - 2：运行中 - 3：升级中 - 4：删除完成 - 5：冻结中 - 6：创建失败 - 7：删除失败 - 8：冻结失败 - 9：存储中 - 10：存储失败 - 11：升级失败
    * tags  **参数解释**： 标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\" **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fwInstanceId' => 'fw_instance_id',
            'resourceId' => 'resource_id',
            'name' => 'name',
            'fwInstanceName' => 'fw_instance_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'haType' => 'ha_type',
            'chargeMode' => 'charge_mode',
            'serviceType' => 'service_type',
            'engineType' => 'engine_type',
            'flavor' => 'flavor',
            'status' => 'status',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fwInstanceId  **参数解释**： 防火墙实例id，创建云防火墙后用于标记防火墙由系统自动生成的id。 **约束限制**： 不涉及
    * resourceId  **参数解释**： 资源id，与防火墙实例id fw_instance_id相同。 **约束限制**： 不涉及
    * name  **参数解释**： 创建防火墙时的时间戳 **约束限制**： 不涉及
    * fwInstanceName  **参数解释**： 防火墙名称 **约束限制**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目id，用户支持企业项目后，由企业项目生成的id。 **约束限制**： 不涉及
    * haType  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - 0：主备模式，包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点 - 1：集群模式，仅拉起两个节点作为集群
    * chargeMode  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - 0：包年/包月 - 1：按需 **默认取值**： 不涉及
    * serviceType  **参数解释**： 防火墙防护类型 **约束限制**： 不涉及 **取值范围**： 目前仅支持0，互联网防护
    * engineType  **参数解释**： 引擎类型 **约束限制**： 不涉及 **取值范围**： - 0：自研引擎 - 1：山石引擎 - 3：天融信引擎
    * flavor  flavor
    * status  **参数解释**： 防火墙状态列表 **约束限制**： 不涉及 **取值范围**： - -1：等待支付 - 0：创建中 - 1，删除中 - 2：运行中 - 3：升级中 - 4：删除完成 - 5：冻结中 - 6：创建失败 - 7：删除失败 - 8：冻结失败 - 9：存储中 - 10：存储失败 - 11：升级失败
    * tags  **参数解释**： 标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\" **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'fwInstanceId' => 'setFwInstanceId',
            'resourceId' => 'setResourceId',
            'name' => 'setName',
            'fwInstanceName' => 'setFwInstanceName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'haType' => 'setHaType',
            'chargeMode' => 'setChargeMode',
            'serviceType' => 'setServiceType',
            'engineType' => 'setEngineType',
            'flavor' => 'setFlavor',
            'status' => 'setStatus',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fwInstanceId  **参数解释**： 防火墙实例id，创建云防火墙后用于标记防火墙由系统自动生成的id。 **约束限制**： 不涉及
    * resourceId  **参数解释**： 资源id，与防火墙实例id fw_instance_id相同。 **约束限制**： 不涉及
    * name  **参数解释**： 创建防火墙时的时间戳 **约束限制**： 不涉及
    * fwInstanceName  **参数解释**： 防火墙名称 **约束限制**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目id，用户支持企业项目后，由企业项目生成的id。 **约束限制**： 不涉及
    * haType  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - 0：主备模式，包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点 - 1：集群模式，仅拉起两个节点作为集群
    * chargeMode  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - 0：包年/包月 - 1：按需 **默认取值**： 不涉及
    * serviceType  **参数解释**： 防火墙防护类型 **约束限制**： 不涉及 **取值范围**： 目前仅支持0，互联网防护
    * engineType  **参数解释**： 引擎类型 **约束限制**： 不涉及 **取值范围**： - 0：自研引擎 - 1：山石引擎 - 3：天融信引擎
    * flavor  flavor
    * status  **参数解释**： 防火墙状态列表 **约束限制**： 不涉及 **取值范围**： - -1：等待支付 - 0：创建中 - 1，删除中 - 2：运行中 - 3：升级中 - 4：删除完成 - 5：冻结中 - 6：创建失败 - 7：删除失败 - 8：冻结失败 - 9：存储中 - 10：存储失败 - 11：升级失败
    * tags  **参数解释**： 标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\" **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'fwInstanceId' => 'getFwInstanceId',
            'resourceId' => 'getResourceId',
            'name' => 'getName',
            'fwInstanceName' => 'getFwInstanceName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'haType' => 'getHaType',
            'chargeMode' => 'getChargeMode',
            'serviceType' => 'getServiceType',
            'engineType' => 'getEngineType',
            'flavor' => 'getFlavor',
            'status' => 'getStatus',
            'tags' => 'getTags'
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
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fwInstanceName'] = isset($data['fwInstanceName']) ? $data['fwInstanceName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['haType'] = isset($data['haType']) ? $data['haType'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    * Gets fwInstanceId
    *  **参数解释**： 防火墙实例id，创建云防火墙后用于标记防火墙由系统自动生成的id。 **约束限制**： 不涉及
    *
    * @return string|null
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string|null $fwInstanceId **参数解释**： 防火墙实例id，创建云防火墙后用于标记防火墙由系统自动生成的id。 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释**： 资源id，与防火墙实例id fw_instance_id相同。 **约束限制**： 不涉及
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**： 资源id，与防火墙实例id fw_instance_id相同。 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 创建防火墙时的时间戳 **约束限制**： 不涉及
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
    * @param string|null $name **参数解释**： 创建防火墙时的时间戳 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets fwInstanceName
    *  **参数解释**： 防火墙名称 **约束限制**： 不涉及
    *
    * @return string|null
    */
    public function getFwInstanceName()
    {
        return $this->container['fwInstanceName'];
    }

    /**
    * Sets fwInstanceName
    *
    * @param string|null $fwInstanceName **参数解释**： 防火墙名称 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setFwInstanceName($fwInstanceName)
    {
        $this->container['fwInstanceName'] = $fwInstanceName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 企业项目id，用户支持企业项目后，由企业项目生成的id。 **约束限制**： 不涉及
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
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目id，用户支持企业项目后，由企业项目生成的id。 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets haType
    *  **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - 0：主备模式，包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点 - 1：集群模式，仅拉起两个节点作为集群
    *
    * @return int|null
    */
    public function getHaType()
    {
        return $this->container['haType'];
    }

    /**
    * Sets haType
    *
    * @param int|null $haType **参数解释**： 集群类型 **约束限制**： 不涉及 **取值范围**： - 0：主备模式，包含四个节点，2个主节点构成集群，剩余两个节点为主节点的备节点 - 1：集群模式，仅拉起两个节点作为集群
    *
    * @return $this
    */
    public function setHaType($haType)
    {
        $this->container['haType'] = $haType;
        return $this;
    }

    /**
    * Gets chargeMode
    *  **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - 0：包年/包月 - 1：按需 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param int|null $chargeMode **参数解释**： 计费模式 **约束限制**： 不涉及 **取值范围**： - 0：包年/包月 - 1：按需 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets serviceType
    *  **参数解释**： 防火墙防护类型 **约束限制**： 不涉及 **取值范围**： 目前仅支持0，互联网防护
    *
    * @return int|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param int|null $serviceType **参数解释**： 防火墙防护类型 **约束限制**： 不涉及 **取值范围**： 目前仅支持0，互联网防护
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets engineType
    *  **参数解释**： 引擎类型 **约束限制**： 不涉及 **取值范围**： - 0：自研引擎 - 1：山石引擎 - 3：天融信引擎
    *
    * @return int|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param int|null $engineType **参数解释**： 引擎类型 **约束限制**： 不涉及 **取值范围**： - 0：自研引擎 - 1：山石引擎 - 3：天融信引擎
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\Flavor|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\Flavor|null $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 防火墙状态列表 **约束限制**： 不涉及 **取值范围**： - -1：等待支付 - 0：创建中 - 1，删除中 - 2：运行中 - 3：升级中 - 4：删除完成 - 5：冻结中 - 6：创建失败 - 7：删除失败 - 8：冻结失败 - 9：存储中 - 10：存储失败 - 11：升级失败
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释**： 防火墙状态列表 **约束限制**： 不涉及 **取值范围**： - -1：等待支付 - 0：创建中 - 1，删除中 - 2：运行中 - 3：升级中 - 4：删除完成 - 5：冻结中 - 6：创建失败 - 7：删除失败 - 8：冻结失败 - 9：存储中 - 10：存储失败 - 11：升级失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**： 标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\" **约束限制**： 不涉及
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags **参数解释**： 标签列表，标签键值map转化的json字符串，如\"{\\\"key\\\":\\\"value\\\"}\" **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

