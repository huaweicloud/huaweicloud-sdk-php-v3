<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWebAppAndServicesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWebAppAndServicesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * category  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    * name  **参数解释**: web应用，web服务或数据库名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * catalogue  **参数解释**: 资产类型 **约束限制**: 不涉及 **取值范围**: - web-app：web应用 - web-service：web服务 - database：数据库  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称(可选)，可让用户根据主机名字搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器id(可选)，可让用户根据主机id搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器ip(可选)，可让用户根据主机ip搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * version  **参数解释**: web应用，web服务或数据库版本，可让用户根据版本搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * installDir  **参数解释**: web应用，web服务或数据库安装目录，可让用户根据安装目录搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * partMatch  **参数解释**: 是否模糊匹配，默认false表示精确匹配 **约束限制**: 不涉及 **取值范围**: - true：模糊匹配 - false：精确匹配  **默认取值**: false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'category' => 'string',
            'name' => 'string',
            'catalogue' => 'string',
            'hostName' => 'string',
            'hostId' => 'string',
            'hostIp' => 'string',
            'version' => 'string',
            'installDir' => 'string',
            'partMatch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * category  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    * name  **参数解释**: web应用，web服务或数据库名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * catalogue  **参数解释**: 资产类型 **约束限制**: 不涉及 **取值范围**: - web-app：web应用 - web-service：web服务 - database：数据库  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称(可选)，可让用户根据主机名字搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器id(可选)，可让用户根据主机id搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器ip(可选)，可让用户根据主机ip搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * version  **参数解释**: web应用，web服务或数据库版本，可让用户根据版本搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * installDir  **参数解释**: web应用，web服务或数据库安装目录，可让用户根据安装目录搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * partMatch  **参数解释**: 是否模糊匹配，默认false表示精确匹配 **约束限制**: 不涉及 **取值范围**: - true：模糊匹配 - false：精确匹配  **默认取值**: false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'category' => null,
        'name' => null,
        'catalogue' => null,
        'hostName' => null,
        'hostId' => null,
        'hostIp' => null,
        'version' => null,
        'installDir' => null,
        'partMatch' => null
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
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * category  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    * name  **参数解释**: web应用，web服务或数据库名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * catalogue  **参数解释**: 资产类型 **约束限制**: 不涉及 **取值范围**: - web-app：web应用 - web-service：web服务 - database：数据库  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称(可选)，可让用户根据主机名字搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器id(可选)，可让用户根据主机id搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器ip(可选)，可让用户根据主机ip搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * version  **参数解释**: web应用，web服务或数据库版本，可让用户根据版本搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * installDir  **参数解释**: web应用，web服务或数据库安装目录，可让用户根据安装目录搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * partMatch  **参数解释**: 是否模糊匹配，默认false表示精确匹配 **约束限制**: 不涉及 **取值范围**: - true：模糊匹配 - false：精确匹配  **默认取值**: false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'category' => 'category',
            'name' => 'name',
            'catalogue' => 'catalogue',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'hostIp' => 'host_ip',
            'version' => 'version',
            'installDir' => 'install_dir',
            'partMatch' => 'part_match'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * category  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    * name  **参数解释**: web应用，web服务或数据库名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * catalogue  **参数解释**: 资产类型 **约束限制**: 不涉及 **取值范围**: - web-app：web应用 - web-service：web服务 - database：数据库  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称(可选)，可让用户根据主机名字搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器id(可选)，可让用户根据主机id搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器ip(可选)，可让用户根据主机ip搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * version  **参数解释**: web应用，web服务或数据库版本，可让用户根据版本搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * installDir  **参数解释**: web应用，web服务或数据库安装目录，可让用户根据安装目录搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * partMatch  **参数解释**: 是否模糊匹配，默认false表示精确匹配 **约束限制**: 不涉及 **取值范围**: - true：模糊匹配 - false：精确匹配  **默认取值**: false
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'category' => 'setCategory',
            'name' => 'setName',
            'catalogue' => 'setCatalogue',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'hostIp' => 'setHostIp',
            'version' => 'setVersion',
            'installDir' => 'setInstallDir',
            'partMatch' => 'setPartMatch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * category  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    * name  **参数解释**: web应用，web服务或数据库名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * catalogue  **参数解释**: 资产类型 **约束限制**: 不涉及 **取值范围**: - web-app：web应用 - web-service：web服务 - database：数据库  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称(可选)，可让用户根据主机名字搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器id(可选)，可让用户根据主机id搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器ip(可选)，可让用户根据主机ip搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * version  **参数解释**: web应用，web服务或数据库版本，可让用户根据版本搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * installDir  **参数解释**: web应用，web服务或数据库安装目录，可让用户根据安装目录搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    * partMatch  **参数解释**: 是否模糊匹配，默认false表示精确匹配 **约束限制**: 不涉及 **取值范围**: - true：模糊匹配 - false：精确匹配  **默认取值**: false
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'category' => 'getCategory',
            'name' => 'getName',
            'catalogue' => 'getCatalogue',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'hostIp' => 'getHostIp',
            'version' => 'getVersion',
            'installDir' => 'getInstallDir',
            'partMatch' => 'getPartMatch'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['catalogue'] = isset($data['catalogue']) ? $data['catalogue'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['installDir'] = isset($data['installDir']) ? $data['installDir'] : null;
        $this->container['partMatch'] = isset($data['partMatch']) ? $data['partMatch'] : null;
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            if ((mb_strlen($this->container['category']) > 32)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(host|container)$/", $this->container['category'])) {
                $invalidProperties[] = "invalid value for 'category', must be conform to the pattern /^(host|container)$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['catalogue'] === null) {
            $invalidProperties[] = "'catalogue' can't be null";
        }
            if ((mb_strlen($this->container['catalogue']) > 32)) {
                $invalidProperties[] = "invalid value for 'catalogue', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['catalogue']) < 1)) {
                $invalidProperties[] = "invalid value for 'catalogue', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^web-app|web-service|database$/", $this->container['catalogue'])) {
                $invalidProperties[] = "invalid value for 'catalogue', must be conform to the pattern /^web-app|web-service|database$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 256)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['installDir']) && (mb_strlen($this->container['installDir']) > 256)) {
                $invalidProperties[] = "invalid value for 'installDir', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['installDir']) && (mb_strlen($this->container['installDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'installDir', the character length must be bigger than or equal to 0.";
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
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
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
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
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
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category **参数解释**: 资产类别 **约束限制**: 不涉及 **取值范围**: - host：主机资产 - container：容器资产  **默认取值**: host
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: web应用，web服务或数据库名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
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
    * @param string $name **参数解释**: web应用，web服务或数据库名称 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets catalogue
    *  **参数解释**: 资产类型 **约束限制**: 不涉及 **取值范围**: - web-app：web应用 - web-service：web服务 - database：数据库  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getCatalogue()
    {
        return $this->container['catalogue'];
    }

    /**
    * Sets catalogue
    *
    * @param string $catalogue **参数解释**: 资产类型 **约束限制**: 不涉及 **取值范围**: - web-app：web应用 - web-service：web服务 - database：数据库  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCatalogue($catalogue)
    {
        $this->container['catalogue'] = $catalogue;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称(可选)，可让用户根据主机名字搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
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
    * @param string|null $hostName **参数解释**: 服务器名称(可选)，可让用户根据主机名字搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 服务器id(可选)，可让用户根据主机id搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**: 服务器id(可选)，可让用户根据主机id搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-64 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**: 服务器ip(可选)，可让用户根据主机ip搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**: 服务器ip(可选)，可让用户根据主机ip搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: web应用，web服务或数据库版本，可让用户根据版本搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
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
    * @param string|null $version **参数解释**: web应用，web服务或数据库版本，可让用户根据版本搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets installDir
    *  **参数解释**: web应用，web服务或数据库安装目录，可让用户根据安装目录搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getInstallDir()
    {
        return $this->container['installDir'];
    }

    /**
    * Sets installDir
    *
    * @param string|null $installDir **参数解释**: web应用，web服务或数据库安装目录，可让用户根据安装目录搜索 **约束限制**: 不涉及 **取值范围**: 字符长度0-256 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInstallDir($installDir)
    {
        $this->container['installDir'] = $installDir;
        return $this;
    }

    /**
    * Gets partMatch
    *  **参数解释**: 是否模糊匹配，默认false表示精确匹配 **约束限制**: 不涉及 **取值范围**: - true：模糊匹配 - false：精确匹配  **默认取值**: false
    *
    * @return bool|null
    */
    public function getPartMatch()
    {
        return $this->container['partMatch'];
    }

    /**
    * Sets partMatch
    *
    * @param bool|null $partMatch **参数解释**: 是否模糊匹配，默认false表示精确匹配 **约束限制**: 不涉及 **取值范围**: - true：模糊匹配 - false：精确匹配  **默认取值**: false
    *
    * @return $this
    */
    public function setPartMatch($partMatch)
    {
        $this->container['partMatch'] = $partMatch;
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

