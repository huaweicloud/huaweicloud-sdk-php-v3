<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPortStatisticsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPortStatisticsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * port  **参数解释**: 端口号，该字段用来进行精确匹配 **约束限制**: 与port_string同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    * portString  **参数解释**: 端口字符串，该字段用来进行模糊匹配 **约束限制**: 与port同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    * type  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - UDP - UDP6 - TCP - TCP6  **默认取值**: 不涉及
    * status  **参数解释**: 端口状态 **约束限制**: 不涉及 **取值范围**: - danger: 危险端口 - normal: 正常端口 - unknow: 无已知危险的端口  **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序的key值，目前支持按照端口号port排序 **约束限制**: 不涉及 **取值范围**: - port: 端口号  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'category' => 'string',
            'sortDir' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'port' => 'int',
            'portString' => 'string',
            'type' => 'string',
            'status' => 'string',
            'sortKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * port  **参数解释**: 端口号，该字段用来进行精确匹配 **约束限制**: 与port_string同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    * portString  **参数解释**: 端口字符串，该字段用来进行模糊匹配 **约束限制**: 与port同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    * type  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - UDP - UDP6 - TCP - TCP6  **默认取值**: 不涉及
    * status  **参数解释**: 端口状态 **约束限制**: 不涉及 **取值范围**: - danger: 危险端口 - normal: 正常端口 - unknow: 无已知危险的端口  **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序的key值，目前支持按照端口号port排序 **约束限制**: 不涉及 **取值范围**: - port: 端口号  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'category' => null,
        'sortDir' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'port' => null,
        'portString' => null,
        'type' => null,
        'status' => null,
        'sortKey' => null
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
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * port  **参数解释**: 端口号，该字段用来进行精确匹配 **约束限制**: 与port_string同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    * portString  **参数解释**: 端口字符串，该字段用来进行模糊匹配 **约束限制**: 与port同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    * type  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - UDP - UDP6 - TCP - TCP6  **默认取值**: 不涉及
    * status  **参数解释**: 端口状态 **约束限制**: 不涉及 **取值范围**: - danger: 危险端口 - normal: 正常端口 - unknow: 无已知危险的端口  **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序的key值，目前支持按照端口号port排序 **约束限制**: 不涉及 **取值范围**: - port: 端口号  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'category' => 'category',
            'sortDir' => 'sort_dir',
            'limit' => 'limit',
            'offset' => 'offset',
            'port' => 'port',
            'portString' => 'port_string',
            'type' => 'type',
            'status' => 'status',
            'sortKey' => 'sort_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * port  **参数解释**: 端口号，该字段用来进行精确匹配 **约束限制**: 与port_string同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    * portString  **参数解释**: 端口字符串，该字段用来进行模糊匹配 **约束限制**: 与port同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    * type  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - UDP - UDP6 - TCP - TCP6  **默认取值**: 不涉及
    * status  **参数解释**: 端口状态 **约束限制**: 不涉及 **取值范围**: - danger: 危险端口 - normal: 正常端口 - unknow: 无已知危险的端口  **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序的key值，目前支持按照端口号port排序 **约束限制**: 不涉及 **取值范围**: - port: 端口号  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'category' => 'setCategory',
            'sortDir' => 'setSortDir',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'port' => 'setPort',
            'portString' => 'setPortString',
            'type' => 'setType',
            'status' => 'setStatus',
            'sortKey' => 'setSortKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * category  **参数解释**: 类别 **约束限制**: 不涉及 **取值范围**: - host：主机 - container：容器  **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * port  **参数解释**: 端口号，该字段用来进行精确匹配 **约束限制**: 与port_string同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    * portString  **参数解释**: 端口字符串，该字段用来进行模糊匹配 **约束限制**: 与port同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    * type  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - UDP - UDP6 - TCP - TCP6  **默认取值**: 不涉及
    * status  **参数解释**: 端口状态 **约束限制**: 不涉及 **取值范围**: - danger: 危险端口 - normal: 正常端口 - unknow: 无已知危险的端口  **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序的key值，目前支持按照端口号port排序 **约束限制**: 不涉及 **取值范围**: - port: 端口号  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'category' => 'getCategory',
            'sortDir' => 'getSortDir',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'port' => 'getPort',
            'portString' => 'getPortString',
            'type' => 'getType',
            'status' => 'getStatus',
            'sortKey' => 'getSortKey'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['portString'] = isset($data['portString']) ? $data['portString'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
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
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 32)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['category']) && !preg_match("/^(host|container)$/", $this->container['category'])) {
                $invalidProperties[] = "invalid value for 'category', must be conform to the pattern /^(host|container)$/.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 32)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortDir']) && !preg_match("/^(asc|desc)$/", $this->container['sortDir'])) {
                $invalidProperties[] = "invalid value for 'sortDir', must be conform to the pattern /^(asc|desc)$/.";
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
            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 1)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['portString']) && (mb_strlen($this->container['portString']) > 256)) {
                $invalidProperties[] = "invalid value for 'portString', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['portString']) && (mb_strlen($this->container['portString']) < 1)) {
                $invalidProperties[] = "invalid value for 'portString', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && !preg_match("/^(UDP|UDP6|TCP|TCP6)$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(UDP|UDP6|TCP|TCP6)$/.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^(danger|normal|unknow)$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^(danger|normal|unknow)$/.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortKey']) && !preg_match("/^(port)$/", $this->container['sortKey'])) {
                $invalidProperties[] = "invalid value for 'sortKey', must be conform to the pattern /^(port)$/.";
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
    * Gets sortDir
    *  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**:   - asc  : 正序   - desc : 倒序  **默认取值**: 正序排序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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
    * Gets port
    *  **参数解释**: 端口号，该字段用来进行精确匹配 **约束限制**: 与port_string同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port **参数解释**: 端口号，该字段用来进行精确匹配 **约束限制**: 与port_string同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets portString
    *  **参数解释**: 端口字符串，该字段用来进行模糊匹配 **约束限制**: 与port同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getPortString()
    {
        return $this->container['portString'];
    }

    /**
    * Sets portString
    *
    * @param string|null $portString **参数解释**: 端口字符串，该字段用来进行模糊匹配 **约束限制**: 与port同时使用的话，二者有包含关系则按精确匹配，无包含关系则结果为空 **取值范围**: 最小值1，最大值65535 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPortString($portString)
    {
        $this->container['portString'] = $portString;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - UDP - UDP6 - TCP - TCP6  **默认取值**: 不涉及
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
    * @param string|null $type **参数解释**: 端口类型 **约束限制**: 不涉及 **取值范围**: - UDP - UDP6 - TCP - TCP6  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 端口状态 **约束限制**: 不涉及 **取值范围**: - danger: 危险端口 - normal: 正常端口 - unknow: 无已知危险的端口  **默认取值**: 不涉及
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
    * @param string|null $status **参数解释**: 端口状态 **约束限制**: 不涉及 **取值范围**: - danger: 危险端口 - normal: 正常端口 - unknow: 无已知危险的端口  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释**: 排序的key值，目前支持按照端口号port排序 **约束限制**: 不涉及 **取值范围**: - port: 端口号  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释**: 排序的key值，目前支持按照端口号port排序 **约束限制**: 不涉及 **取值范围**: - port: 端口号  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
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

