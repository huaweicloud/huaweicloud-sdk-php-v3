<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQuotasDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQuotasDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * category  类别，包含如下几种：   - host_resource ：HOST_RESOURCE   - container_resource ：CONTAINER_RESOURCE
    * quotaStatus  配额状态，包含如下几种：   - normal ： QUOTA_STATUS_NORMAL   - expired ：QUOTA_STATUS_EXPIRED   - freeze ：QUOTA_STATUS_FREEZE
    * usedStatus  使用状态，包含如下几种：   - idle ：USED_STATUS_IDLE   - used ：USED_STATUS_USED
    * hostName  服务器名称
    * resourceId  HSS配额的资源ID
    * chargingMode  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * limit  每页数量
    * offset  偏移量：指定返回记录的开始位置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'enterpriseProjectId' => 'string',
            'version' => 'string',
            'category' => 'string',
            'quotaStatus' => 'string',
            'usedStatus' => 'string',
            'hostName' => 'string',
            'resourceId' => 'string',
            'chargingMode' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * category  类别，包含如下几种：   - host_resource ：HOST_RESOURCE   - container_resource ：CONTAINER_RESOURCE
    * quotaStatus  配额状态，包含如下几种：   - normal ： QUOTA_STATUS_NORMAL   - expired ：QUOTA_STATUS_EXPIRED   - freeze ：QUOTA_STATUS_FREEZE
    * usedStatus  使用状态，包含如下几种：   - idle ：USED_STATUS_IDLE   - used ：USED_STATUS_USED
    * hostName  服务器名称
    * resourceId  HSS配额的资源ID
    * chargingMode  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * limit  每页数量
    * offset  偏移量：指定返回记录的开始位置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'enterpriseProjectId' => null,
        'version' => null,
        'category' => null,
        'quotaStatus' => null,
        'usedStatus' => null,
        'hostName' => null,
        'resourceId' => null,
        'chargingMode' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * category  类别，包含如下几种：   - host_resource ：HOST_RESOURCE   - container_resource ：CONTAINER_RESOURCE
    * quotaStatus  配额状态，包含如下几种：   - normal ： QUOTA_STATUS_NORMAL   - expired ：QUOTA_STATUS_EXPIRED   - freeze ：QUOTA_STATUS_FREEZE
    * usedStatus  使用状态，包含如下几种：   - idle ：USED_STATUS_IDLE   - used ：USED_STATUS_USED
    * hostName  服务器名称
    * resourceId  HSS配额的资源ID
    * chargingMode  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * limit  每页数量
    * offset  偏移量：指定返回记录的开始位置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'enterpriseProjectId' => 'enterprise_project_id',
            'version' => 'version',
            'category' => 'category',
            'quotaStatus' => 'quota_status',
            'usedStatus' => 'used_status',
            'hostName' => 'host_name',
            'resourceId' => 'resource_id',
            'chargingMode' => 'charging_mode',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * category  类别，包含如下几种：   - host_resource ：HOST_RESOURCE   - container_resource ：CONTAINER_RESOURCE
    * quotaStatus  配额状态，包含如下几种：   - normal ： QUOTA_STATUS_NORMAL   - expired ：QUOTA_STATUS_EXPIRED   - freeze ：QUOTA_STATUS_FREEZE
    * usedStatus  使用状态，包含如下几种：   - idle ：USED_STATUS_IDLE   - used ：USED_STATUS_USED
    * hostName  服务器名称
    * resourceId  HSS配额的资源ID
    * chargingMode  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * limit  每页数量
    * offset  偏移量：指定返回记录的开始位置
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'version' => 'setVersion',
            'category' => 'setCategory',
            'quotaStatus' => 'setQuotaStatus',
            'usedStatus' => 'setUsedStatus',
            'hostName' => 'setHostName',
            'resourceId' => 'setResourceId',
            'chargingMode' => 'setChargingMode',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  Region ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    * category  类别，包含如下几种：   - host_resource ：HOST_RESOURCE   - container_resource ：CONTAINER_RESOURCE
    * quotaStatus  配额状态，包含如下几种：   - normal ： QUOTA_STATUS_NORMAL   - expired ：QUOTA_STATUS_EXPIRED   - freeze ：QUOTA_STATUS_FREEZE
    * usedStatus  使用状态，包含如下几种：   - idle ：USED_STATUS_IDLE   - used ：USED_STATUS_USED
    * hostName  服务器名称
    * resourceId  HSS配额的资源ID
    * chargingMode  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * limit  每页数量
    * offset  偏移量：指定返回记录的开始位置
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'version' => 'getVersion',
            'category' => 'getCategory',
            'quotaStatus' => 'getQuotaStatus',
            'usedStatus' => 'getUsedStatus',
            'hostName' => 'getHostName',
            'resourceId' => 'getResourceId',
            'chargingMode' => 'getChargingMode',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['quotaStatus'] = isset($data['quotaStatus']) ? $data['quotaStatus'] : null;
        $this->container['usedStatus'] = isset($data['usedStatus']) ? $data['usedStatus'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 64)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 1)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['quotaStatus']) && (mb_strlen($this->container['quotaStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'quotaStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['quotaStatus']) && (mb_strlen($this->container['quotaStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'quotaStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['usedStatus']) && (mb_strlen($this->container['usedStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'usedStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['usedStatus']) && (mb_strlen($this->container['usedStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'usedStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets region
    *  Region ID
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region Region ID
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
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
    * @param string|null $enterpriseProjectId 主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets version
    *  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
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
    * @param string|null $version 主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise：容器版。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets category
    *  类别，包含如下几种：   - host_resource ：HOST_RESOURCE   - container_resource ：CONTAINER_RESOURCE
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
    * @param string|null $category 类别，包含如下几种：   - host_resource ：HOST_RESOURCE   - container_resource ：CONTAINER_RESOURCE
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets quotaStatus
    *  配额状态，包含如下几种：   - normal ： QUOTA_STATUS_NORMAL   - expired ：QUOTA_STATUS_EXPIRED   - freeze ：QUOTA_STATUS_FREEZE
    *
    * @return string|null
    */
    public function getQuotaStatus()
    {
        return $this->container['quotaStatus'];
    }

    /**
    * Sets quotaStatus
    *
    * @param string|null $quotaStatus 配额状态，包含如下几种：   - normal ： QUOTA_STATUS_NORMAL   - expired ：QUOTA_STATUS_EXPIRED   - freeze ：QUOTA_STATUS_FREEZE
    *
    * @return $this
    */
    public function setQuotaStatus($quotaStatus)
    {
        $this->container['quotaStatus'] = $quotaStatus;
        return $this;
    }

    /**
    * Gets usedStatus
    *  使用状态，包含如下几种：   - idle ：USED_STATUS_IDLE   - used ：USED_STATUS_USED
    *
    * @return string|null
    */
    public function getUsedStatus()
    {
        return $this->container['usedStatus'];
    }

    /**
    * Sets usedStatus
    *
    * @param string|null $usedStatus 使用状态，包含如下几种：   - idle ：USED_STATUS_IDLE   - used ：USED_STATUS_USED
    *
    * @return $this
    */
    public function setUsedStatus($usedStatus)
    {
        $this->container['usedStatus'] = $usedStatus;
        return $this;
    }

    /**
    * Gets hostName
    *  服务器名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets resourceId
    *  HSS配额的资源ID
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
    * @param string|null $resourceId HSS配额的资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets chargingMode
    *  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets limit
    *  每页数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量：指定返回记录的开始位置
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

