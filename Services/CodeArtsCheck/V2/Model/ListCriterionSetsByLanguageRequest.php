<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCriterionSetsByLanguageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCriterionSetsByLanguageRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * language  **参数解释:** 规则集语言。 **约束限制:** 不涉及。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值：** 不涉及。
    * search  **参数解释:** 搜索关键字。 **约束限制:** 不涉及。 **取值范围:** 不涉及。 **默认取值：** 不涉及。
    * pageSize  **参数解释:** 每页规则集数量。 **约束限制:** 不涉及。 **取值范围:** 1~1000 **默认取值:** 1000
    * page  **参数解释:** 规则集页数。 **约束限制:** 不涉及。 **取值范围:** 0-999 **默认取值:** 1
    * projectId  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 32位UUID。 **默认取值:** 不涉及。
    * isReliable  是否可信
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'language' => 'string',
            'search' => 'string',
            'pageSize' => 'int',
            'page' => 'int',
            'projectId' => 'string',
            'isReliable' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * language  **参数解释:** 规则集语言。 **约束限制:** 不涉及。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值：** 不涉及。
    * search  **参数解释:** 搜索关键字。 **约束限制:** 不涉及。 **取值范围:** 不涉及。 **默认取值：** 不涉及。
    * pageSize  **参数解释:** 每页规则集数量。 **约束限制:** 不涉及。 **取值范围:** 1~1000 **默认取值:** 1000
    * page  **参数解释:** 规则集页数。 **约束限制:** 不涉及。 **取值范围:** 0-999 **默认取值:** 1
    * projectId  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 32位UUID。 **默认取值:** 不涉及。
    * isReliable  是否可信
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'language' => null,
        'search' => null,
        'pageSize' => null,
        'page' => null,
        'projectId' => null,
        'isReliable' => null
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
    * language  **参数解释:** 规则集语言。 **约束限制:** 不涉及。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值：** 不涉及。
    * search  **参数解释:** 搜索关键字。 **约束限制:** 不涉及。 **取值范围:** 不涉及。 **默认取值：** 不涉及。
    * pageSize  **参数解释:** 每页规则集数量。 **约束限制:** 不涉及。 **取值范围:** 1~1000 **默认取值:** 1000
    * page  **参数解释:** 规则集页数。 **约束限制:** 不涉及。 **取值范围:** 0-999 **默认取值:** 1
    * projectId  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 32位UUID。 **默认取值:** 不涉及。
    * isReliable  是否可信
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'language' => 'language',
            'search' => 'search',
            'pageSize' => 'page_size',
            'page' => 'page',
            'projectId' => 'project_id',
            'isReliable' => 'is_reliable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * language  **参数解释:** 规则集语言。 **约束限制:** 不涉及。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值：** 不涉及。
    * search  **参数解释:** 搜索关键字。 **约束限制:** 不涉及。 **取值范围:** 不涉及。 **默认取值：** 不涉及。
    * pageSize  **参数解释:** 每页规则集数量。 **约束限制:** 不涉及。 **取值范围:** 1~1000 **默认取值:** 1000
    * page  **参数解释:** 规则集页数。 **约束限制:** 不涉及。 **取值范围:** 0-999 **默认取值:** 1
    * projectId  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 32位UUID。 **默认取值:** 不涉及。
    * isReliable  是否可信
    *
    * @var string[]
    */
    protected static $setters = [
            'language' => 'setLanguage',
            'search' => 'setSearch',
            'pageSize' => 'setPageSize',
            'page' => 'setPage',
            'projectId' => 'setProjectId',
            'isReliable' => 'setIsReliable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * language  **参数解释:** 规则集语言。 **约束限制:** 不涉及。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值：** 不涉及。
    * search  **参数解释:** 搜索关键字。 **约束限制:** 不涉及。 **取值范围:** 不涉及。 **默认取值：** 不涉及。
    * pageSize  **参数解释:** 每页规则集数量。 **约束限制:** 不涉及。 **取值范围:** 1~1000 **默认取值:** 1000
    * page  **参数解释:** 规则集页数。 **约束限制:** 不涉及。 **取值范围:** 0-999 **默认取值:** 1
    * projectId  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 32位UUID。 **默认取值:** 不涉及。
    * isReliable  是否可信
    *
    * @var string[]
    */
    protected static $getters = [
            'language' => 'getLanguage',
            'search' => 'getSearch',
            'pageSize' => 'getPageSize',
            'page' => 'getPage',
            'projectId' => 'getProjectId',
            'isReliable' => 'getIsReliable'
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['isReliable'] = isset($data['isReliable']) ? $data['isReliable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    * Gets language
    *  **参数解释:** 规则集语言。 **约束限制:** 不涉及。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language **参数解释:** 规则集语言。 **约束限制:** 不涉及。 **取值范围:** 当前支持的语言有： - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets search
    *  **参数解释:** 搜索关键字。 **约束限制:** 不涉及。 **取值范围:** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $search **参数解释:** 搜索关键字。 **约束限制:** 不涉及。 **取值范围:** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets pageSize
    *  **参数解释:** 每页规则集数量。 **约束限制:** 不涉及。 **取值范围:** 1~1000 **默认取值:** 1000
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize **参数解释:** 每页规则集数量。 **约束限制:** 不涉及。 **取值范围:** 1~1000 **默认取值:** 1000
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets page
    *  **参数解释:** 规则集页数。 **约束限制:** 不涉及。 **取值范围:** 0-999 **默认取值:** 1
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
    * @param int|null $page **参数解释:** 规则集页数。 **约束限制:** 不涉及。 **取值范围:** 0-999 **默认取值:** 1
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 32位UUID。 **默认取值:** 不涉及。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释:** 项目的32位UUID，通过[[查询项目列表](https://support.huaweicloud.com/api-projectman/ListProjectsV4.html)](tag:hws)[[查询项目列表](https://support.huaweicloud.com/intl/zh-cn/api-projectman/ListProjectsV4.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm,hcs_site,hcs_sitesm,fcs)接口获取。 **约束限制:** 不涉及。 **取值范围:** 32位UUID。 **默认取值:** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets isReliable
    *  是否可信
    *
    * @return string|null
    */
    public function getIsReliable()
    {
        return $this->container['isReliable'];
    }

    /**
    * Sets isReliable
    *
    * @param string|null $isReliable 是否可信
    *
    * @return $this
    */
    public function setIsReliable($isReliable)
    {
        $this->container['isReliable'] = $isReliable;
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

