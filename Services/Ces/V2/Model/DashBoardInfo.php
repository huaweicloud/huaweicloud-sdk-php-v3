<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DashBoardInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DashBoardInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dashboardId  **参数解释**： 监控看板id **取值范围** 以db开头，包含22个字母和数字，长度为24个字符
    * dashboardName  **参数解释** 自定义监控看板名称 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    * enterpriseId  **参数解释** 企业项目ID **取值范围** 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID）。
    * rowWidgetNum  **参数解释** 每行展示视图数量 **取值范围** - 0:表示自定义坐标 - 1:代表每行1个视图 - 2:代表每行2个视图 - 3:代表每行3个视图
    * isFavorite  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    * creatorName  **参数解释** 监控看板的创建用户名 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    * createTime  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    * widgetsNum  **参数解释** 看板下的视图总数 **取值范围** 最小值为0，最大值为50
    * namespace  **参数解释** 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg) **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。
    * subProduct  **参数解释** 子产品标识 **取值范围** 长度为[1,128]个字符
    * dashboardTemplateId  **参数解释** 监控大盘模板id **取值范围** 以mb开头，包含22个字母和数字，长度为24个字符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dashboardId' => 'string',
            'dashboardName' => 'string',
            'enterpriseId' => 'string',
            'rowWidgetNum' => 'int',
            'isFavorite' => 'bool',
            'creatorName' => 'string',
            'createTime' => 'int',
            'widgetsNum' => 'int',
            'namespace' => 'string',
            'subProduct' => 'string',
            'dashboardTemplateId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dashboardId  **参数解释**： 监控看板id **取值范围** 以db开头，包含22个字母和数字，长度为24个字符
    * dashboardName  **参数解释** 自定义监控看板名称 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    * enterpriseId  **参数解释** 企业项目ID **取值范围** 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID）。
    * rowWidgetNum  **参数解释** 每行展示视图数量 **取值范围** - 0:表示自定义坐标 - 1:代表每行1个视图 - 2:代表每行2个视图 - 3:代表每行3个视图
    * isFavorite  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    * creatorName  **参数解释** 监控看板的创建用户名 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    * createTime  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    * widgetsNum  **参数解释** 看板下的视图总数 **取值范围** 最小值为0，最大值为50
    * namespace  **参数解释** 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg) **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。
    * subProduct  **参数解释** 子产品标识 **取值范围** 长度为[1,128]个字符
    * dashboardTemplateId  **参数解释** 监控大盘模板id **取值范围** 以mb开头，包含22个字母和数字，长度为24个字符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dashboardId' => null,
        'dashboardName' => null,
        'enterpriseId' => null,
        'rowWidgetNum' => null,
        'isFavorite' => null,
        'creatorName' => null,
        'createTime' => 'int64',
        'widgetsNum' => 'integer',
        'namespace' => null,
        'subProduct' => null,
        'dashboardTemplateId' => null
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
    * dashboardId  **参数解释**： 监控看板id **取值范围** 以db开头，包含22个字母和数字，长度为24个字符
    * dashboardName  **参数解释** 自定义监控看板名称 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    * enterpriseId  **参数解释** 企业项目ID **取值范围** 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID）。
    * rowWidgetNum  **参数解释** 每行展示视图数量 **取值范围** - 0:表示自定义坐标 - 1:代表每行1个视图 - 2:代表每行2个视图 - 3:代表每行3个视图
    * isFavorite  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    * creatorName  **参数解释** 监控看板的创建用户名 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    * createTime  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    * widgetsNum  **参数解释** 看板下的视图总数 **取值范围** 最小值为0，最大值为50
    * namespace  **参数解释** 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg) **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。
    * subProduct  **参数解释** 子产品标识 **取值范围** 长度为[1,128]个字符
    * dashboardTemplateId  **参数解释** 监控大盘模板id **取值范围** 以mb开头，包含22个字母和数字，长度为24个字符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dashboardId' => 'dashboard_id',
            'dashboardName' => 'dashboard_name',
            'enterpriseId' => 'enterprise_id',
            'rowWidgetNum' => 'row_widget_num',
            'isFavorite' => 'is_favorite',
            'creatorName' => 'creator_name',
            'createTime' => 'create_time',
            'widgetsNum' => 'widgets_num',
            'namespace' => 'namespace',
            'subProduct' => 'sub_product',
            'dashboardTemplateId' => 'dashboard_template_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dashboardId  **参数解释**： 监控看板id **取值范围** 以db开头，包含22个字母和数字，长度为24个字符
    * dashboardName  **参数解释** 自定义监控看板名称 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    * enterpriseId  **参数解释** 企业项目ID **取值范围** 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID）。
    * rowWidgetNum  **参数解释** 每行展示视图数量 **取值范围** - 0:表示自定义坐标 - 1:代表每行1个视图 - 2:代表每行2个视图 - 3:代表每行3个视图
    * isFavorite  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    * creatorName  **参数解释** 监控看板的创建用户名 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    * createTime  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    * widgetsNum  **参数解释** 看板下的视图总数 **取值范围** 最小值为0，最大值为50
    * namespace  **参数解释** 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg) **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。
    * subProduct  **参数解释** 子产品标识 **取值范围** 长度为[1,128]个字符
    * dashboardTemplateId  **参数解释** 监控大盘模板id **取值范围** 以mb开头，包含22个字母和数字，长度为24个字符
    *
    * @var string[]
    */
    protected static $setters = [
            'dashboardId' => 'setDashboardId',
            'dashboardName' => 'setDashboardName',
            'enterpriseId' => 'setEnterpriseId',
            'rowWidgetNum' => 'setRowWidgetNum',
            'isFavorite' => 'setIsFavorite',
            'creatorName' => 'setCreatorName',
            'createTime' => 'setCreateTime',
            'widgetsNum' => 'setWidgetsNum',
            'namespace' => 'setNamespace',
            'subProduct' => 'setSubProduct',
            'dashboardTemplateId' => 'setDashboardTemplateId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dashboardId  **参数解释**： 监控看板id **取值范围** 以db开头，包含22个字母和数字，长度为24个字符
    * dashboardName  **参数解释** 自定义监控看板名称 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    * enterpriseId  **参数解释** 企业项目ID **取值范围** 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID）。
    * rowWidgetNum  **参数解释** 每行展示视图数量 **取值范围** - 0:表示自定义坐标 - 1:代表每行1个视图 - 2:代表每行2个视图 - 3:代表每行3个视图
    * isFavorite  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    * creatorName  **参数解释** 监控看板的创建用户名 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    * createTime  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    * widgetsNum  **参数解释** 看板下的视图总数 **取值范围** 最小值为0，最大值为50
    * namespace  **参数解释** 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg) **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。
    * subProduct  **参数解释** 子产品标识 **取值范围** 长度为[1,128]个字符
    * dashboardTemplateId  **参数解释** 监控大盘模板id **取值范围** 以mb开头，包含22个字母和数字，长度为24个字符
    *
    * @var string[]
    */
    protected static $getters = [
            'dashboardId' => 'getDashboardId',
            'dashboardName' => 'getDashboardName',
            'enterpriseId' => 'getEnterpriseId',
            'rowWidgetNum' => 'getRowWidgetNum',
            'isFavorite' => 'getIsFavorite',
            'creatorName' => 'getCreatorName',
            'createTime' => 'getCreateTime',
            'widgetsNum' => 'getWidgetsNum',
            'namespace' => 'getNamespace',
            'subProduct' => 'getSubProduct',
            'dashboardTemplateId' => 'getDashboardTemplateId'
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
        $this->container['dashboardId'] = isset($data['dashboardId']) ? $data['dashboardId'] : null;
        $this->container['dashboardName'] = isset($data['dashboardName']) ? $data['dashboardName'] : null;
        $this->container['enterpriseId'] = isset($data['enterpriseId']) ? $data['enterpriseId'] : null;
        $this->container['rowWidgetNum'] = isset($data['rowWidgetNum']) ? $data['rowWidgetNum'] : null;
        $this->container['isFavorite'] = isset($data['isFavorite']) ? $data['isFavorite'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['widgetsNum'] = isset($data['widgetsNum']) ? $data['widgetsNum'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['subProduct'] = isset($data['subProduct']) ? $data['subProduct'] : null;
        $this->container['dashboardTemplateId'] = isset($data['dashboardTemplateId']) ? $data['dashboardTemplateId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dashboardId']) && !preg_match("/^db([a-z]|[A-Z]|[0-9]){22}$/", $this->container['dashboardId'])) {
                $invalidProperties[] = "invalid value for 'dashboardId', must be conform to the pattern /^db([a-z]|[A-Z]|[0-9]){22}$/.";
            }
            if (!is_null($this->container['dashboardName']) && (mb_strlen($this->container['dashboardName']) > 128)) {
                $invalidProperties[] = "invalid value for 'dashboardName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dashboardName']) && (mb_strlen($this->container['dashboardName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dashboardName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dashboardName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['dashboardName'])) {
                $invalidProperties[] = "invalid value for 'dashboardName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['enterpriseId']) && !preg_match("/^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/", $this->container['enterpriseId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseId', must be conform to the pattern /^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/.";
            }
            if (!is_null($this->container['rowWidgetNum']) && ($this->container['rowWidgetNum'] > 3)) {
                $invalidProperties[] = "invalid value for 'rowWidgetNum', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['rowWidgetNum']) && ($this->container['rowWidgetNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'rowWidgetNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 128)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['creatorName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['creatorName'])) {
                $invalidProperties[] = "invalid value for 'creatorName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 1111111111111)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 1111111111111.";
            }
            if (!is_null($this->container['widgetsNum']) && ($this->container['widgetsNum'] > 50)) {
                $invalidProperties[] = "invalid value for 'widgetsNum', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['widgetsNum']) && ($this->container['widgetsNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'widgetsNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/.";
            }
            if (!is_null($this->container['subProduct']) && (mb_strlen($this->container['subProduct']) > 128)) {
                $invalidProperties[] = "invalid value for 'subProduct', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['subProduct']) && (mb_strlen($this->container['subProduct']) < 1)) {
                $invalidProperties[] = "invalid value for 'subProduct', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dashboardTemplateId']) && !preg_match("/^mb([a-z]|[A-Z]|[0-9]){22}/", $this->container['dashboardTemplateId'])) {
                $invalidProperties[] = "invalid value for 'dashboardTemplateId', must be conform to the pattern /^mb([a-z]|[A-Z]|[0-9]){22}/.";
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
    * Gets dashboardId
    *  **参数解释**： 监控看板id **取值范围** 以db开头，包含22个字母和数字，长度为24个字符
    *
    * @return string|null
    */
    public function getDashboardId()
    {
        return $this->container['dashboardId'];
    }

    /**
    * Sets dashboardId
    *
    * @param string|null $dashboardId **参数解释**： 监控看板id **取值范围** 以db开头，包含22个字母和数字，长度为24个字符
    *
    * @return $this
    */
    public function setDashboardId($dashboardId)
    {
        $this->container['dashboardId'] = $dashboardId;
        return $this;
    }

    /**
    * Gets dashboardName
    *  **参数解释** 自定义监控看板名称 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    *
    * @return string|null
    */
    public function getDashboardName()
    {
        return $this->container['dashboardName'];
    }

    /**
    * Sets dashboardName
    *
    * @param string|null $dashboardName **参数解释** 自定义监控看板名称 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    *
    * @return $this
    */
    public function setDashboardName($dashboardName)
    {
        $this->container['dashboardName'] = $dashboardName;
        return $this;
    }

    /**
    * Gets enterpriseId
    *  **参数解释** 企业项目ID **取值范围** 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID）。
    *
    * @return string|null
    */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
    * Sets enterpriseId
    *
    * @param string|null $enterpriseId **参数解释** 企业项目ID **取值范围** 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID）。
    *
    * @return $this
    */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;
        return $this;
    }

    /**
    * Gets rowWidgetNum
    *  **参数解释** 每行展示视图数量 **取值范围** - 0:表示自定义坐标 - 1:代表每行1个视图 - 2:代表每行2个视图 - 3:代表每行3个视图
    *
    * @return int|null
    */
    public function getRowWidgetNum()
    {
        return $this->container['rowWidgetNum'];
    }

    /**
    * Sets rowWidgetNum
    *
    * @param int|null $rowWidgetNum **参数解释** 每行展示视图数量 **取值范围** - 0:表示自定义坐标 - 1:代表每行1个视图 - 2:代表每行2个视图 - 3:代表每行3个视图
    *
    * @return $this
    */
    public function setRowWidgetNum($rowWidgetNum)
    {
        $this->container['rowWidgetNum'] = $rowWidgetNum;
        return $this;
    }

    /**
    * Gets isFavorite
    *  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    *
    * @return bool|null
    */
    public function getIsFavorite()
    {
        return $this->container['isFavorite'];
    }

    /**
    * Sets isFavorite
    *
    * @param bool|null $isFavorite **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    *
    * @return $this
    */
    public function setIsFavorite($isFavorite)
    {
        $this->container['isFavorite'] = $isFavorite;
        return $this;
    }

    /**
    * Gets creatorName
    *  **参数解释** 监控看板的创建用户名 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName **参数解释** 监控看板的创建用户名 **取值范围** 长度为[1,128]个字符，只允许中文、英文、数字0-9、_和-
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释** 监控看板创建时间 **取值范围** 最小值为1111111111111，最大值为9999999999999
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets widgetsNum
    *  **参数解释** 看板下的视图总数 **取值范围** 最小值为0，最大值为50
    *
    * @return int|null
    */
    public function getWidgetsNum()
    {
        return $this->container['widgetsNum'];
    }

    /**
    * Sets widgetsNum
    *
    * @param int|null $widgetsNum **参数解释** 看板下的视图总数 **取值范围** 最小值为0，最大值为50
    *
    * @return $this
    */
    public function setWidgetsNum($widgetsNum)
    {
        $this->container['widgetsNum'] = $widgetsNum;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释** 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg) **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释** 查询服务的命名空间，各服务命名空间请参阅[[支持监控的服务列表](https://support.huaweicloud.com/api-ces/ces_03_0059.html)](tag:hc)[[支持监控的服务列表](https://support.huaweicloud.com/intl/en-us/api-ces/ces_03_0059.html)](tag:hk)[[支持监控的服务列表](https://support.huaweicloud.com/eu/en-us/api-ces/ces_03_0059.html)](tag:hws_eu)[[支持监控的服务列表](ces_03_0059.xml)](tag:ax,cmcc,ctc,dt,dt_test,hcso_dt,fcs,fcs_vm,mix,g42,hk_g42,hk_sbc,hk_tm,hk_vdf,hws_ocb,ocb,sbc,srg) **取值范围** 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets subProduct
    *  **参数解释** 子产品标识 **取值范围** 长度为[1,128]个字符
    *
    * @return string|null
    */
    public function getSubProduct()
    {
        return $this->container['subProduct'];
    }

    /**
    * Sets subProduct
    *
    * @param string|null $subProduct **参数解释** 子产品标识 **取值范围** 长度为[1,128]个字符
    *
    * @return $this
    */
    public function setSubProduct($subProduct)
    {
        $this->container['subProduct'] = $subProduct;
        return $this;
    }

    /**
    * Gets dashboardTemplateId
    *  **参数解释** 监控大盘模板id **取值范围** 以mb开头，包含22个字母和数字，长度为24个字符
    *
    * @return string|null
    */
    public function getDashboardTemplateId()
    {
        return $this->container['dashboardTemplateId'];
    }

    /**
    * Sets dashboardTemplateId
    *
    * @param string|null $dashboardTemplateId **参数解释** 监控大盘模板id **取值范围** 以mb开头，包含22个字母和数字，长度为24个字符
    *
    * @return $this
    */
    public function setDashboardTemplateId($dashboardTemplateId)
    {
        $this->container['dashboardTemplateId'] = $dashboardTemplateId;
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

