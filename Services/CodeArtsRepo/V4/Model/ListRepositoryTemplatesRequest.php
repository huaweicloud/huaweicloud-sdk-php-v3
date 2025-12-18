<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRepositoryTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRepositoryTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * platform  **参数解释：** 应用类型。 **约束限制：** 不涉及 **取值范围：** - Android。 - Console。 - HarmonyOS。 - OTHERS。 - REST API。 - ServiceStage。 - Web网站。 - 图形用户界面。 **默认取值：** 不涉及
    * pipeline  **参数解释：** 是否支持自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SupportPipeline，支持自动创建流水线。 - UnsupportedPipeline 不支持自动创建流水线。 **默认取值：** 不涉及
    * type  **参数解释：** 自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SYSTEM,USER，个人和官方模板。 - SYSTEM，官方模板。 - USER，个人模板。 **默认取值：** 不涉及
    * search  **参数解释：** 查询关键字，按模板仓标题搜索。 **约束限制：** 不涉及 **取值范围：** 字符串长度0至50。 **默认取值：** 不涉及
    * enterType  **参数解释：** 参赛类型。 **约束限制：** 不涉及 **取值范围：** - AI。 - 大数据。 - 小程序。 - 微服务。 **默认取值：** 不涉及
    * dateOrder  **参数解释：** 按照模板仓的创建时间进行排序。 **约束限制：** 不涉及 **取值范围：** - up，升序。 - down，降序。 **默认取值：** 不涉及
    * language  **参数解释：** 编程语言。 **约束限制：** 不涉及 **取值范围：** - ArkTS。 - ASP.NET。 - C。 - C#。 - C++。 - Go。 - Groovy。 - HTML。 - Java。 - NodeJS。 - OTHERS。 - PHP。 - Python。 **默认取值：** 不涉及
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 当该参数不为空时，仅返回当前项目下符合搜索条件的模板仓 **取值范围：** 字符串长度32。 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'platform' => 'string',
            'pipeline' => 'string',
            'type' => 'string',
            'search' => 'string',
            'enterType' => 'string',
            'dateOrder' => 'string',
            'language' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * platform  **参数解释：** 应用类型。 **约束限制：** 不涉及 **取值范围：** - Android。 - Console。 - HarmonyOS。 - OTHERS。 - REST API。 - ServiceStage。 - Web网站。 - 图形用户界面。 **默认取值：** 不涉及
    * pipeline  **参数解释：** 是否支持自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SupportPipeline，支持自动创建流水线。 - UnsupportedPipeline 不支持自动创建流水线。 **默认取值：** 不涉及
    * type  **参数解释：** 自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SYSTEM,USER，个人和官方模板。 - SYSTEM，官方模板。 - USER，个人模板。 **默认取值：** 不涉及
    * search  **参数解释：** 查询关键字，按模板仓标题搜索。 **约束限制：** 不涉及 **取值范围：** 字符串长度0至50。 **默认取值：** 不涉及
    * enterType  **参数解释：** 参赛类型。 **约束限制：** 不涉及 **取值范围：** - AI。 - 大数据。 - 小程序。 - 微服务。 **默认取值：** 不涉及
    * dateOrder  **参数解释：** 按照模板仓的创建时间进行排序。 **约束限制：** 不涉及 **取值范围：** - up，升序。 - down，降序。 **默认取值：** 不涉及
    * language  **参数解释：** 编程语言。 **约束限制：** 不涉及 **取值范围：** - ArkTS。 - ASP.NET。 - C。 - C#。 - C++。 - Go。 - Groovy。 - HTML。 - Java。 - NodeJS。 - OTHERS。 - PHP。 - Python。 **默认取值：** 不涉及
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 当该参数不为空时，仅返回当前项目下符合搜索条件的模板仓 **取值范围：** 字符串长度32。 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'platform' => null,
        'pipeline' => null,
        'type' => null,
        'search' => null,
        'enterType' => null,
        'dateOrder' => null,
        'language' => null,
        'projectId' => null
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
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * platform  **参数解释：** 应用类型。 **约束限制：** 不涉及 **取值范围：** - Android。 - Console。 - HarmonyOS。 - OTHERS。 - REST API。 - ServiceStage。 - Web网站。 - 图形用户界面。 **默认取值：** 不涉及
    * pipeline  **参数解释：** 是否支持自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SupportPipeline，支持自动创建流水线。 - UnsupportedPipeline 不支持自动创建流水线。 **默认取值：** 不涉及
    * type  **参数解释：** 自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SYSTEM,USER，个人和官方模板。 - SYSTEM，官方模板。 - USER，个人模板。 **默认取值：** 不涉及
    * search  **参数解释：** 查询关键字，按模板仓标题搜索。 **约束限制：** 不涉及 **取值范围：** 字符串长度0至50。 **默认取值：** 不涉及
    * enterType  **参数解释：** 参赛类型。 **约束限制：** 不涉及 **取值范围：** - AI。 - 大数据。 - 小程序。 - 微服务。 **默认取值：** 不涉及
    * dateOrder  **参数解释：** 按照模板仓的创建时间进行排序。 **约束限制：** 不涉及 **取值范围：** - up，升序。 - down，降序。 **默认取值：** 不涉及
    * language  **参数解释：** 编程语言。 **约束限制：** 不涉及 **取值范围：** - ArkTS。 - ASP.NET。 - C。 - C#。 - C++。 - Go。 - Groovy。 - HTML。 - Java。 - NodeJS。 - OTHERS。 - PHP。 - Python。 **默认取值：** 不涉及
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 当该参数不为空时，仅返回当前项目下符合搜索条件的模板仓 **取值范围：** 字符串长度32。 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'platform' => 'platform',
            'pipeline' => 'pipeline',
            'type' => 'type',
            'search' => 'search',
            'enterType' => 'enter_type',
            'dateOrder' => 'date_order',
            'language' => 'language',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * platform  **参数解释：** 应用类型。 **约束限制：** 不涉及 **取值范围：** - Android。 - Console。 - HarmonyOS。 - OTHERS。 - REST API。 - ServiceStage。 - Web网站。 - 图形用户界面。 **默认取值：** 不涉及
    * pipeline  **参数解释：** 是否支持自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SupportPipeline，支持自动创建流水线。 - UnsupportedPipeline 不支持自动创建流水线。 **默认取值：** 不涉及
    * type  **参数解释：** 自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SYSTEM,USER，个人和官方模板。 - SYSTEM，官方模板。 - USER，个人模板。 **默认取值：** 不涉及
    * search  **参数解释：** 查询关键字，按模板仓标题搜索。 **约束限制：** 不涉及 **取值范围：** 字符串长度0至50。 **默认取值：** 不涉及
    * enterType  **参数解释：** 参赛类型。 **约束限制：** 不涉及 **取值范围：** - AI。 - 大数据。 - 小程序。 - 微服务。 **默认取值：** 不涉及
    * dateOrder  **参数解释：** 按照模板仓的创建时间进行排序。 **约束限制：** 不涉及 **取值范围：** - up，升序。 - down，降序。 **默认取值：** 不涉及
    * language  **参数解释：** 编程语言。 **约束限制：** 不涉及 **取值范围：** - ArkTS。 - ASP.NET。 - C。 - C#。 - C++。 - Go。 - Groovy。 - HTML。 - Java。 - NodeJS。 - OTHERS。 - PHP。 - Python。 **默认取值：** 不涉及
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 当该参数不为空时，仅返回当前项目下符合搜索条件的模板仓 **取值范围：** 字符串长度32。 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'platform' => 'setPlatform',
            'pipeline' => 'setPipeline',
            'type' => 'setType',
            'search' => 'setSearch',
            'enterType' => 'setEnterType',
            'dateOrder' => 'setDateOrder',
            'language' => 'setLanguage',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    * platform  **参数解释：** 应用类型。 **约束限制：** 不涉及 **取值范围：** - Android。 - Console。 - HarmonyOS。 - OTHERS。 - REST API。 - ServiceStage。 - Web网站。 - 图形用户界面。 **默认取值：** 不涉及
    * pipeline  **参数解释：** 是否支持自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SupportPipeline，支持自动创建流水线。 - UnsupportedPipeline 不支持自动创建流水线。 **默认取值：** 不涉及
    * type  **参数解释：** 自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SYSTEM,USER，个人和官方模板。 - SYSTEM，官方模板。 - USER，个人模板。 **默认取值：** 不涉及
    * search  **参数解释：** 查询关键字，按模板仓标题搜索。 **约束限制：** 不涉及 **取值范围：** 字符串长度0至50。 **默认取值：** 不涉及
    * enterType  **参数解释：** 参赛类型。 **约束限制：** 不涉及 **取值范围：** - AI。 - 大数据。 - 小程序。 - 微服务。 **默认取值：** 不涉及
    * dateOrder  **参数解释：** 按照模板仓的创建时间进行排序。 **约束限制：** 不涉及 **取值范围：** - up，升序。 - down，降序。 **默认取值：** 不涉及
    * language  **参数解释：** 编程语言。 **约束限制：** 不涉及 **取值范围：** - ArkTS。 - ASP.NET。 - C。 - C#。 - C++。 - Go。 - Groovy。 - HTML。 - Java。 - NodeJS。 - OTHERS。 - PHP。 - Python。 **默认取值：** 不涉及
    * projectId  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 当该参数不为空时，仅返回当前项目下符合搜索条件的模板仓 **取值范围：** 字符串长度32。 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'platform' => 'getPlatform',
            'pipeline' => 'getPipeline',
            'type' => 'getType',
            'search' => 'getSearch',
            'enterType' => 'getEnterType',
            'dateOrder' => 'getDateOrder',
            'language' => 'getLanguage',
            'projectId' => 'getProjectId'
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
    const PIPELINE_SUPPORT_PIPELINE = 'SupportPipeline';
    const PIPELINE_UNSUPPORTED_PIPELINE = 'UnsupportedPipeline';
    const TYPE_SYSTEMUSER = 'SYSTEM,USER';
    const TYPE_SYSTEM = 'SYSTEM';
    const TYPE_USER = 'USER';
    const DATE_ORDER_UP = 'up';
    const DATE_ORDER_DOWN = 'down';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPipelineAllowableValues()
    {
        return [
            self::PIPELINE_SUPPORT_PIPELINE,
            self::PIPELINE_UNSUPPORTED_PIPELINE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SYSTEMUSER,
            self::TYPE_SYSTEM,
            self::TYPE_USER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDateOrderAllowableValues()
    {
        return [
            self::DATE_ORDER_UP,
            self::DATE_ORDER_DOWN,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['pipeline'] = isset($data['pipeline']) ? $data['pipeline'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['enterType'] = isset($data['enterType']) ? $data['enterType'] : null;
        $this->container['dateOrder'] = isset($data['dateOrder']) ? $data['dateOrder'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['platform']) && (mb_strlen($this->container['platform']) > 20)) {
                $invalidProperties[] = "invalid value for 'platform', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['platform']) && (mb_strlen($this->container['platform']) < 0)) {
                $invalidProperties[] = "invalid value for 'platform', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPipelineAllowableValues();
                if (!is_null($this->container['pipeline']) && !in_array($this->container['pipeline'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pipeline', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) > 50)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['search']) && (mb_strlen($this->container['search']) < 0)) {
                $invalidProperties[] = "invalid value for 'search', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterType']) && (mb_strlen($this->container['enterType']) > 20)) {
                $invalidProperties[] = "invalid value for 'enterType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['enterType']) && (mb_strlen($this->container['enterType']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getDateOrderAllowableValues();
                if (!is_null($this->container['dateOrder']) && !in_array($this->container['dateOrder'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dateOrder', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 20)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 0)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
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
    * Gets offset
    *  **参数解释：** 偏移量，从0开始。
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
    * @param int|null $offset **参数解释：** 偏移量，从0开始。
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
    *  **参数解释：** 返回数量。
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
    * @param int|null $limit **参数解释：** 返回数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets platform
    *  **参数解释：** 应用类型。 **约束限制：** 不涉及 **取值范围：** - Android。 - Console。 - HarmonyOS。 - OTHERS。 - REST API。 - ServiceStage。 - Web网站。 - 图形用户界面。 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string|null $platform **参数解释：** 应用类型。 **约束限制：** 不涉及 **取值范围：** - Android。 - Console。 - HarmonyOS。 - OTHERS。 - REST API。 - ServiceStage。 - Web网站。 - 图形用户界面。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets pipeline
    *  **参数解释：** 是否支持自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SupportPipeline，支持自动创建流水线。 - UnsupportedPipeline 不支持自动创建流水线。 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPipeline()
    {
        return $this->container['pipeline'];
    }

    /**
    * Sets pipeline
    *
    * @param string|null $pipeline **参数解释：** 是否支持自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SupportPipeline，支持自动创建流水线。 - UnsupportedPipeline 不支持自动创建流水线。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPipeline($pipeline)
    {
        $this->container['pipeline'] = $pipeline;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SYSTEM,USER，个人和官方模板。 - SYSTEM，官方模板。 - USER，个人模板。 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释：** 自动创建流水线。 **约束限制：** 不涉及 **取值范围：** - SYSTEM,USER，个人和官方模板。 - SYSTEM，官方模板。 - USER，个人模板。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets search
    *  **参数解释：** 查询关键字，按模板仓标题搜索。 **约束限制：** 不涉及 **取值范围：** 字符串长度0至50。 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
    * Sets search
    *
    * @param string|null $search **参数解释：** 查询关键字，按模板仓标题搜索。 **约束限制：** 不涉及 **取值范围：** 字符串长度0至50。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets enterType
    *  **参数解释：** 参赛类型。 **约束限制：** 不涉及 **取值范围：** - AI。 - 大数据。 - 小程序。 - 微服务。 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getEnterType()
    {
        return $this->container['enterType'];
    }

    /**
    * Sets enterType
    *
    * @param string|null $enterType **参数解释：** 参赛类型。 **约束限制：** 不涉及 **取值范围：** - AI。 - 大数据。 - 小程序。 - 微服务。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setEnterType($enterType)
    {
        $this->container['enterType'] = $enterType;
        return $this;
    }

    /**
    * Gets dateOrder
    *  **参数解释：** 按照模板仓的创建时间进行排序。 **约束限制：** 不涉及 **取值范围：** - up，升序。 - down，降序。 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDateOrder()
    {
        return $this->container['dateOrder'];
    }

    /**
    * Sets dateOrder
    *
    * @param string|null $dateOrder **参数解释：** 按照模板仓的创建时间进行排序。 **约束限制：** 不涉及 **取值范围：** - up，升序。 - down，降序。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDateOrder($dateOrder)
    {
        $this->container['dateOrder'] = $dateOrder;
        return $this;
    }

    /**
    * Gets language
    *  **参数解释：** 编程语言。 **约束限制：** 不涉及 **取值范围：** - ArkTS。 - ASP.NET。 - C。 - C#。 - C++。 - Go。 - Groovy。 - HTML。 - Java。 - NodeJS。 - OTHERS。 - PHP。 - Python。 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language **参数解释：** 编程语言。 **约束限制：** 不涉及 **取值范围：** - ArkTS。 - ASP.NET。 - C。 - C#。 - C++。 - Go。 - Groovy。 - HTML。 - Java。 - NodeJS。 - OTHERS。 - PHP。 - Python。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 当该参数不为空时，仅返回当前项目下符合搜索条件的模板仓 **取值范围：** 字符串长度32。 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释：** 项目的32位uuid，项目唯一标识，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/en-us/api-projectman/ListProjectsV4.html)](tag:hws_hk)[[查询项目列表](https://support.huaweicloud.com/eu/api-projectman/ListProjectsV4.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 当该参数不为空时，仅返回当前项目下符合搜索条件的模板仓 **取值范围：** 字符串长度32。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

