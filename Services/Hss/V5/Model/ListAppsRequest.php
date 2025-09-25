<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAppsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAppsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * appName  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * version  **参数解释**: 软件版本号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * installDir  **参数解释**: 安装目录 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
    * partMatch  **参数解释**: 是否模糊匹配 **约束限制**: boolean类型 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'appName' => 'string',
            'hostIp' => 'string',
            'version' => 'string',
            'installDir' => 'string',
            'enterpriseProjectId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'category' => 'string',
            'partMatch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * appName  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * version  **参数解释**: 软件版本号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * installDir  **参数解释**: 安装目录 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
    * partMatch  **参数解释**: 是否模糊匹配 **约束限制**: boolean类型 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'appName' => null,
        'hostIp' => null,
        'version' => null,
        'installDir' => null,
        'enterpriseProjectId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'category' => null,
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
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * appName  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * version  **参数解释**: 软件版本号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * installDir  **参数解释**: 安装目录 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
    * partMatch  **参数解释**: 是否模糊匹配 **约束限制**: boolean类型 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'appName' => 'app_name',
            'hostIp' => 'host_ip',
            'version' => 'version',
            'installDir' => 'install_dir',
            'enterpriseProjectId' => 'enterprise_project_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'category' => 'category',
            'partMatch' => 'part_match'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * appName  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * version  **参数解释**: 软件版本号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * installDir  **参数解释**: 安装目录 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
    * partMatch  **参数解释**: 是否模糊匹配 **约束限制**: boolean类型 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'appName' => 'setAppName',
            'hostIp' => 'setHostIp',
            'version' => 'setVersion',
            'installDir' => 'setInstallDir',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'category' => 'setCategory',
            'partMatch' => 'setPartMatch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * appName  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * version  **参数解释**: 软件版本号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * installDir  **参数解释**: 安装目录 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
    * partMatch  **参数解释**: 是否模糊匹配 **约束限制**: boolean类型 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'appName' => 'getAppName',
            'hostIp' => 'getHostIp',
            'version' => 'getVersion',
            'installDir' => 'getInstallDir',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'category' => 'getCategory',
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['installDir'] = isset($data['installDir']) ? $data['installDir'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
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
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 256)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appName']) && !preg_match("/^.*$/", $this->container['appName'])) {
                $invalidProperties[] = "invalid value for 'appName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostIp']) && !preg_match("/^.*$/", $this->container['hostIp'])) {
                $invalidProperties[] = "invalid value for 'hostIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['installDir']) && (mb_strlen($this->container['installDir']) > 512)) {
                $invalidProperties[] = "invalid value for 'installDir', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['installDir']) && (mb_strlen($this->container['installDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'installDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 32)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['category']) && !preg_match("/^(host|container)$/", $this->container['category'])) {
                $invalidProperties[] = "invalid value for 'category', must be conform to the pattern /^(host|container)$/.";
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
    * Gets hostId
    *  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    * @param string|null $hostId **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
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
    * @param string|null $hostName **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets appName
    *  **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 软件名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
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
    * @param string|null $hostIp **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
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
    *  **参数解释**: 软件版本号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $version **参数解释**: 软件版本号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    *  **参数解释**: 安装目录 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
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
    * @param string|null $installDir **参数解释**: 安装目录 **约束限制**: 不涉及 **取值范围**: 字符长度0-512位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInstallDir($installDir)
    {
        $this->container['installDir'] = $installDir;
        return $this;
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
    * Gets category
    *  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
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
    * @param string|null $category **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets partMatch
    *  **参数解释**: 是否模糊匹配 **约束限制**: boolean类型 **取值范围**: 不涉及 **默认取值**: 不涉及
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
    * @param bool|null $partMatch **参数解释**: 是否模糊匹配 **约束限制**: boolean类型 **取值范围**: 不涉及 **默认取值**: 不涉及
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

