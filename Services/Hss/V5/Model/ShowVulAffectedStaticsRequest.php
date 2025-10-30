<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulAffectedStaticsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulAffectedStaticsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * selectType  **参数解释**: 选择全部漏洞类型 **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型，当前select_type为all_vul此字段为必选 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞 - urgent_vul：应急漏洞 - cluster_vul：集群漏洞  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * containerIds  **参数解释**: 容器id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * isContainer  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    * vulIds  **参数解释**: 漏洞id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * hostIds  **参数解释**: 主机id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * category  **参数解释**: 类别，默认为host **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器 - serverless：serverless场景  **默认取值**: host
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'selectType' => 'string',
            'type' => 'string',
            'clusterId' => 'string',
            'containerIds' => 'string[]',
            'isContainer' => 'bool',
            'vulIds' => 'string[]',
            'hostIds' => 'string[]',
            'category' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * selectType  **参数解释**: 选择全部漏洞类型 **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型，当前select_type为all_vul此字段为必选 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞 - urgent_vul：应急漏洞 - cluster_vul：集群漏洞  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * containerIds  **参数解释**: 容器id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * isContainer  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    * vulIds  **参数解释**: 漏洞id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * hostIds  **参数解释**: 主机id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * category  **参数解释**: 类别，默认为host **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器 - serverless：serverless场景  **默认取值**: host
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'selectType' => null,
        'type' => null,
        'clusterId' => null,
        'containerIds' => null,
        'isContainer' => null,
        'vulIds' => null,
        'hostIds' => null,
        'category' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * selectType  **参数解释**: 选择全部漏洞类型 **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型，当前select_type为all_vul此字段为必选 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞 - urgent_vul：应急漏洞 - cluster_vul：集群漏洞  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * containerIds  **参数解释**: 容器id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * isContainer  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    * vulIds  **参数解释**: 漏洞id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * hostIds  **参数解释**: 主机id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * category  **参数解释**: 类别，默认为host **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器 - serverless：serverless场景  **默认取值**: host
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'selectType' => 'select_type',
            'type' => 'type',
            'clusterId' => 'cluster_id',
            'containerIds' => 'container_ids',
            'isContainer' => 'is_container',
            'vulIds' => 'vul_ids',
            'hostIds' => 'host_ids',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * selectType  **参数解释**: 选择全部漏洞类型 **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型，当前select_type为all_vul此字段为必选 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞 - urgent_vul：应急漏洞 - cluster_vul：集群漏洞  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * containerIds  **参数解释**: 容器id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * isContainer  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    * vulIds  **参数解释**: 漏洞id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * hostIds  **参数解释**: 主机id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * category  **参数解释**: 类别，默认为host **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器 - serverless：serverless场景  **默认取值**: host
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'selectType' => 'setSelectType',
            'type' => 'setType',
            'clusterId' => 'setClusterId',
            'containerIds' => 'setContainerIds',
            'isContainer' => 'setIsContainer',
            'vulIds' => 'setVulIds',
            'hostIds' => 'setHostIds',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * selectType  **参数解释**: 选择全部漏洞类型 **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    * type  **参数解释**: 漏洞类型，当前select_type为all_vul此字段为必选 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞 - urgent_vul：应急漏洞 - cluster_vul：集群漏洞  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    * containerIds  **参数解释**: 容器id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * isContainer  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    * vulIds  **参数解释**: 漏洞id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * hostIds  **参数解释**: 主机id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    * category  **参数解释**: 类别，默认为host **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器 - serverless：serverless场景  **默认取值**: host
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'selectType' => 'getSelectType',
            'type' => 'getType',
            'clusterId' => 'getClusterId',
            'containerIds' => 'getContainerIds',
            'isContainer' => 'getIsContainer',
            'vulIds' => 'getVulIds',
            'hostIds' => 'getHostIds',
            'category' => 'getCategory'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['selectType'] = isset($data['selectType']) ? $data['selectType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['containerIds'] = isset($data['containerIds']) ? $data['containerIds'] : null;
        $this->container['isContainer'] = isset($data['isContainer']) ? $data['isContainer'] : null;
        $this->container['vulIds'] = isset($data['vulIds']) ? $data['vulIds'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['selectType']) && (mb_strlen($this->container['selectType']) > 64)) {
                $invalidProperties[] = "invalid value for 'selectType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['selectType']) && (mb_strlen($this->container['selectType']) < 1)) {
                $invalidProperties[] = "invalid value for 'selectType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['selectType']) && !preg_match("/^(all_vul|all_host)$/", $this->container['selectType'])) {
                $invalidProperties[] = "invalid value for 'selectType', must be conform to the pattern /^(all_vul|all_host)$/.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 64)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 1)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['category']) && !preg_match("/^(host|container|serverless)$/", $this->container['category'])) {
                $invalidProperties[] = "invalid value for 'category', must be conform to the pattern /^(host|container|serverless)$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets selectType
    *  **参数解释**: 选择全部漏洞类型 **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSelectType()
    {
        return $this->container['selectType'];
    }

    /**
    * Sets selectType
    *
    * @param string|null $selectType **参数解释**: 选择全部漏洞类型 **约束限制**: 不涉及 **取值范围**: - all_vul：选择全部漏洞 - all_host：选择全部主机漏洞  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSelectType($selectType)
    {
        $this->container['selectType'] = $selectType;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 漏洞类型，当前select_type为all_vul此字段为必选 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞 - urgent_vul：应急漏洞 - cluster_vul：集群漏洞  **默认取值**: 不涉及
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
    * @param string|null $type **参数解释**: 漏洞类型，当前select_type为all_vul此字段为必选 **约束限制**: 不涉及 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞 - urgent_vul：应急漏洞 - cluster_vul：集群漏洞  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
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
    * @param string|null $clusterId **参数解释**: 集群id **约束限制**: 不涉及 **取值范围**: 字符长度0-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets containerIds
    *  **参数解释**: 容器id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getContainerIds()
    {
        return $this->container['containerIds'];
    }

    /**
    * Sets containerIds
    *
    * @param string[]|null $containerIds **参数解释**: 容器id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setContainerIds($containerIds)
    {
        $this->container['containerIds'] = $containerIds;
        return $this;
    }

    /**
    * Gets isContainer
    *  **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    *
    * @return bool|null
    */
    public function getIsContainer()
    {
        return $this->container['isContainer'];
    }

    /**
    * Sets isContainer
    *
    * @param bool|null $isContainer **参数解释**: 是否是容器场景 **约束限制**: 不涉及 **取值范围**: - true：是容器场景 - false：不是容器场景 **默认取值**: false
    *
    * @return $this
    */
    public function setIsContainer($isContainer)
    {
        $this->container['isContainer'] = $isContainer;
        return $this;
    }

    /**
    * Gets vulIds
    *  **参数解释**: 漏洞id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getVulIds()
    {
        return $this->container['vulIds'];
    }

    /**
    * Sets vulIds
    *
    * @param string[]|null $vulIds **参数解释**: 漏洞id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVulIds($vulIds)
    {
        $this->container['vulIds'] = $vulIds;
        return $this;
    }

    /**
    * Gets hostIds
    *  **参数解释**: 主机id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[]|null $hostIds **参数解释**: 主机id集合 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值1000 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**: 类别，默认为host **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器 - serverless：serverless场景  **默认取值**: host
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**: 类别，默认为host **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器 - serverless：serverless场景  **默认取值**: host
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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

