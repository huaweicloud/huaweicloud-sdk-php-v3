<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProjectsV4Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProjectsV4Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  偏移量 从0开始
    * limit  条数 最小1条,最大1000
    * search  模糊查询项目名称或描述,不支持通配符等高级查询
    * projectType  项目类型 scrum|xboard
    * sort  排序条件 默认创建时间降序(name|created_on)(asc|desc)
    * archive  是否归档 true已归档|false未归档
    * queryType  默认返回当前用户参与的项目列表,domain_projects租户下的所有项目列表,absent返回当前用户未参与的租户项目列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'search' => 'string',
            'projectType' => 'string',
            'sort' => 'string',
            'archive' => 'string',
            'queryType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  偏移量 从0开始
    * limit  条数 最小1条,最大1000
    * search  模糊查询项目名称或描述,不支持通配符等高级查询
    * projectType  项目类型 scrum|xboard
    * sort  排序条件 默认创建时间降序(name|created_on)(asc|desc)
    * archive  是否归档 true已归档|false未归档
    * queryType  默认返回当前用户参与的项目列表,domain_projects租户下的所有项目列表,absent返回当前用户未参与的租户项目列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'search' => null,
        'projectType' => null,
        'sort' => null,
        'archive' => null,
        'queryType' => null
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
    * offset  偏移量 从0开始
    * limit  条数 最小1条,最大1000
    * search  模糊查询项目名称或描述,不支持通配符等高级查询
    * projectType  项目类型 scrum|xboard
    * sort  排序条件 默认创建时间降序(name|created_on)(asc|desc)
    * archive  是否归档 true已归档|false未归档
    * queryType  默认返回当前用户参与的项目列表,domain_projects租户下的所有项目列表,absent返回当前用户未参与的租户项目列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'search' => 'search',
            'projectType' => 'project_type',
            'sort' => 'sort',
            'archive' => 'archive',
            'queryType' => 'query_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  偏移量 从0开始
    * limit  条数 最小1条,最大1000
    * search  模糊查询项目名称或描述,不支持通配符等高级查询
    * projectType  项目类型 scrum|xboard
    * sort  排序条件 默认创建时间降序(name|created_on)(asc|desc)
    * archive  是否归档 true已归档|false未归档
    * queryType  默认返回当前用户参与的项目列表,domain_projects租户下的所有项目列表,absent返回当前用户未参与的租户项目列表
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'search' => 'setSearch',
            'projectType' => 'setProjectType',
            'sort' => 'setSort',
            'archive' => 'setArchive',
            'queryType' => 'setQueryType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  偏移量 从0开始
    * limit  条数 最小1条,最大1000
    * search  模糊查询项目名称或描述,不支持通配符等高级查询
    * projectType  项目类型 scrum|xboard
    * sort  排序条件 默认创建时间降序(name|created_on)(asc|desc)
    * archive  是否归档 true已归档|false未归档
    * queryType  默认返回当前用户参与的项目列表,domain_projects租户下的所有项目列表,absent返回当前用户未参与的租户项目列表
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'search' => 'getSearch',
            'projectType' => 'getProjectType',
            'sort' => 'getSort',
            'archive' => 'getArchive',
            'queryType' => 'getQueryType'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['projectType'] = isset($data['projectType']) ? $data['projectType'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['archive'] = isset($data['archive']) ? $data['archive'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['archive']) && !preg_match("/false|true/", $this->container['archive'])) {
                $invalidProperties[] = "invalid value for 'archive', must be conform to the pattern /false|true/.";
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
    *  偏移量 从0开始
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移量 从0开始
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
    *  条数 最小1条,最大1000
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 条数 最小1条,最大1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets search
    *  模糊查询项目名称或描述,不支持通配符等高级查询
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
    * @param string|null $search 模糊查询项目名称或描述,不支持通配符等高级查询
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets projectType
    *  项目类型 scrum|xboard
    *
    * @return string|null
    */
    public function getProjectType()
    {
        return $this->container['projectType'];
    }

    /**
    * Sets projectType
    *
    * @param string|null $projectType 项目类型 scrum|xboard
    *
    * @return $this
    */
    public function setProjectType($projectType)
    {
        $this->container['projectType'] = $projectType;
        return $this;
    }

    /**
    * Gets sort
    *  排序条件 默认创建时间降序(name|created_on)(asc|desc)
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort 排序条件 默认创建时间降序(name|created_on)(asc|desc)
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets archive
    *  是否归档 true已归档|false未归档
    *
    * @return string|null
    */
    public function getArchive()
    {
        return $this->container['archive'];
    }

    /**
    * Sets archive
    *
    * @param string|null $archive 是否归档 true已归档|false未归档
    *
    * @return $this
    */
    public function setArchive($archive)
    {
        $this->container['archive'] = $archive;
        return $this;
    }

    /**
    * Gets queryType
    *  默认返回当前用户参与的项目列表,domain_projects租户下的所有项目列表,absent返回当前用户未参与的租户项目列表
    *
    * @return string|null
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param string|null $queryType 默认返回当前用户参与的项目列表,domain_projects租户下的所有项目列表,absent返回当前用户未参与的租户项目列表
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
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

