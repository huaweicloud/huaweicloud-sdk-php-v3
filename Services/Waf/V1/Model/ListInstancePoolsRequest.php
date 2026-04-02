<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancePoolsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancePoolsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    * page  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    * pagesize  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0,100] **默认取值：** 10
    * name  **参数解释：** 模糊查询，实例组名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb 基础elb类型 - elb-v2 elb-v2类型 - elb-container -容器化elb类型 - elb-shadow saas化elb类型 - standard-container 反向代理独享引擎组（云内，承载租户专用） - standard-cloud 反向代理独享引擎组（云内） - standard 反向代理独享引擎组（云外） - detector-cloud 旁路检测独享引擎组（云内） - detector 旁路检测独享引擎组（云外） - standard-maf-cloud 大模型防火墙实例组类型 **默认取值：** 不涉及
    * vpcId  **参数解释：** 实例组关联的vpc_id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detail  **参数解释：** 是否查询实例组详细信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'enterpriseProjectId' => 'string',
            'page' => 'int',
            'pagesize' => 'int',
            'name' => 'string',
            'type' => 'string[]',
            'vpcId' => 'string',
            'detail' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    * page  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    * pagesize  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0,100] **默认取值：** 10
    * name  **参数解释：** 模糊查询，实例组名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb 基础elb类型 - elb-v2 elb-v2类型 - elb-container -容器化elb类型 - elb-shadow saas化elb类型 - standard-container 反向代理独享引擎组（云内，承载租户专用） - standard-cloud 反向代理独享引擎组（云内） - standard 反向代理独享引擎组（云外） - detector-cloud 旁路检测独享引擎组（云内） - detector 旁路检测独享引擎组（云外） - standard-maf-cloud 大模型防火墙实例组类型 **默认取值：** 不涉及
    * vpcId  **参数解释：** 实例组关联的vpc_id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detail  **参数解释：** 是否查询实例组详细信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'enterpriseProjectId' => null,
        'page' => 'int32',
        'pagesize' => 'int32',
        'name' => null,
        'type' => null,
        'vpcId' => null,
        'detail' => null
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
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    * page  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    * pagesize  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0,100] **默认取值：** 10
    * name  **参数解释：** 模糊查询，实例组名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb 基础elb类型 - elb-v2 elb-v2类型 - elb-container -容器化elb类型 - elb-shadow saas化elb类型 - standard-container 反向代理独享引擎组（云内，承载租户专用） - standard-cloud 反向代理独享引擎组（云内） - standard 反向代理独享引擎组（云外） - detector-cloud 旁路检测独享引擎组（云内） - detector 旁路检测独享引擎组（云外） - standard-maf-cloud 大模型防火墙实例组类型 **默认取值：** 不涉及
    * vpcId  **参数解释：** 实例组关联的vpc_id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detail  **参数解释：** 是否查询实例组详细信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'page' => 'page',
            'pagesize' => 'pagesize',
            'name' => 'name',
            'type' => 'type',
            'vpcId' => 'vpc_id',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    * page  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    * pagesize  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0,100] **默认取值：** 10
    * name  **参数解释：** 模糊查询，实例组名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb 基础elb类型 - elb-v2 elb-v2类型 - elb-container -容器化elb类型 - elb-shadow saas化elb类型 - standard-container 反向代理独享引擎组（云内，承载租户专用） - standard-cloud 反向代理独享引擎组（云内） - standard 反向代理独享引擎组（云外） - detector-cloud 旁路检测独享引擎组（云内） - detector 旁路检测独享引擎组（云外） - standard-maf-cloud 大模型防火墙实例组类型 **默认取值：** 不涉及
    * vpcId  **参数解释：** 实例组关联的vpc_id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detail  **参数解释：** 是否查询实例组详细信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'page' => 'setPage',
            'pagesize' => 'setPagesize',
            'name' => 'setName',
            'type' => 'setType',
            'vpcId' => 'setVpcId',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    * page  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    * pagesize  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0,100] **默认取值：** 10
    * name  **参数解释：** 模糊查询，实例组名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * type  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb 基础elb类型 - elb-v2 elb-v2类型 - elb-container -容器化elb类型 - elb-shadow saas化elb类型 - standard-container 反向代理独享引擎组（云内，承载租户专用） - standard-cloud 反向代理独享引擎组（云内） - standard 反向代理独享引擎组（云外） - detector-cloud 旁路检测独享引擎组（云内） - detector 旁路检测独享引擎组（云外） - standard-maf-cloud 大模型防火墙实例组类型 **默认取值：** 不涉及
    * vpcId  **参数解释：** 实例组关联的vpc_id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * detail  **参数解释：** 是否查询实例组详细信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'page' => 'getPage',
            'pagesize' => 'getPagesize',
            'name' => 'getName',
            'type' => 'getType',
            'vpcId' => 'getVpcId',
            'detail' => 'getDetail'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pagesize'] = isset($data['pagesize']) ? $data['pagesize'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if (!is_null($this->container['page']) && ($this->container['page'] < 1)) {
                $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pagesize']) && ($this->container['pagesize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pagesize', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pagesize']) && ($this->container['pagesize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pagesize', must be bigger than or equal to 1.";
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
    * Gets contentType
    *  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
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
    * @param string|null $enterpriseProjectId **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符 **默认取值：** 0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets page
    *  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets pagesize
    *  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0,100] **默认取值：** 10
    *
    * @return int|null
    */
    public function getPagesize()
    {
        return $this->container['pagesize'];
    }

    /**
    * Sets pagesize
    *
    * @param int|null $pagesize **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0,100] **默认取值：** 10
    *
    * @return $this
    */
    public function setPagesize($pagesize)
    {
        $this->container['pagesize'] = $pagesize;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 模糊查询，实例组名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $name **参数解释：** 模糊查询，实例组名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb 基础elb类型 - elb-v2 elb-v2类型 - elb-container -容器化elb类型 - elb-shadow saas化elb类型 - standard-container 反向代理独享引擎组（云内，承载租户专用） - standard-cloud 反向代理独享引擎组（云内） - standard 反向代理独享引擎组（云外） - detector-cloud 旁路检测独享引擎组（云内） - detector 旁路检测独享引擎组（云外） - standard-maf-cloud 大模型防火墙实例组类型 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type **参数解释：** 实例组类型 **约束限制：** 不涉及 **取值范围：** - elb 基础elb类型 - elb-v2 elb-v2类型 - elb-container -容器化elb类型 - elb-shadow saas化elb类型 - standard-container 反向代理独享引擎组（云内，承载租户专用） - standard-cloud 反向代理独享引擎组（云内） - standard 反向代理独享引擎组（云外） - detector-cloud 旁路检测独享引擎组（云内） - detector 旁路检测独享引擎组（云外） - standard-maf-cloud 大模型防火墙实例组类型 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释：** 实例组关联的vpc_id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $vpcId **参数解释：** 实例组关联的vpc_id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets detail
    *  **参数解释：** 是否查询实例组详细信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return bool|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param bool|null $detail **参数解释：** 是否查询实例组详细信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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

