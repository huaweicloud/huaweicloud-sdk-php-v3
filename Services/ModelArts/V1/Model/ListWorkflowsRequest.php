<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWorkflowsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWorkflowsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  工作流名称。
    * description  工作流描述信息。
    * status  工作流状态。
    * labels  工作流标签。
    * templateId  工作流模板ID。
    * limit  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    * offset  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    * sortBy  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    * searchType  过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'status' => 'string',
            'labels' => 'string',
            'templateId' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'sortBy' => 'string',
            'searchType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  工作流名称。
    * description  工作流描述信息。
    * status  工作流状态。
    * labels  工作流标签。
    * templateId  工作流模板ID。
    * limit  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    * offset  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    * sortBy  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    * searchType  过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'status' => null,
        'labels' => null,
        'templateId' => null,
        'limit' => null,
        'offset' => null,
        'sortBy' => null,
        'searchType' => null
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
    * name  工作流名称。
    * description  工作流描述信息。
    * status  工作流状态。
    * labels  工作流标签。
    * templateId  工作流模板ID。
    * limit  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    * offset  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    * sortBy  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    * searchType  过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'status' => 'status',
            'labels' => 'labels',
            'templateId' => 'template_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortBy' => 'sort_by',
            'searchType' => 'search_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  工作流名称。
    * description  工作流描述信息。
    * status  工作流状态。
    * labels  工作流标签。
    * templateId  工作流模板ID。
    * limit  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    * offset  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    * sortBy  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    * searchType  过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'labels' => 'setLabels',
            'templateId' => 'setTemplateId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortBy' => 'setSortBy',
            'searchType' => 'setSearchType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  工作流名称。
    * description  工作流描述信息。
    * status  工作流状态。
    * labels  工作流标签。
    * templateId  工作流模板ID。
    * limit  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    * offset  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    * sortBy  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    * searchType  过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'labels' => 'getLabels',
            'templateId' => 'getTemplateId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortBy' => 'getSortBy',
            'searchType' => 'getSearchType'
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
    const SEARCH_TYPE_CONTAIN = 'contain';
    const SEARCH_TYPE_EQUAL = 'equal';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSearchTypeAllowableValues()
    {
        return [
            self::SEARCH_TYPE_CONTAIN,
            self::SEARCH_TYPE_EQUAL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['searchType'] = isset($data['searchType']) ? $data['searchType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSearchTypeAllowableValues();
                if (!is_null($this->container['searchType']) && !in_array($this->container['searchType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'searchType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  工作流名称。
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
    * @param string|null $name 工作流名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  工作流描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 工作流描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  工作流状态。
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
    * @param string|null $status 工作流状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets labels
    *  工作流标签。
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels 工作流标签。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets templateId
    *  工作流模板ID。
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 工作流模板ID。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets limit
    *  分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 分页参数limit，表示单次查询的条目数上限。假如要查询20~29条记录，offset为20，limit为10。
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
    *  分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 分页参数offset，表示单次查询的条目偏移数量。假如要查询20~29条记录，offset为20，limit为10。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortBy
    *  排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy 排序依据字段，例如sort_by=create_time，则表示以条目的创建时间进行排序。
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets searchType
    *  过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    *
    * @return string|null
    */
    public function getSearchType()
    {
        return $this->container['searchType'];
    }

    /**
    * Sets searchType
    *
    * @param string|null $searchType 过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    *
    * @return $this
    */
    public function setSearchType($searchType)
    {
        $this->container['searchType'] = $searchType;
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

