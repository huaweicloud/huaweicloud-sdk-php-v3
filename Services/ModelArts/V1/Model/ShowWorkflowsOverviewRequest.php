<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWorkflowsOverviewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWorkflowsOverviewRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * searchType  过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    * name  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * description  工作流描述信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'searchType' => 'string',
            'name' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * searchType  过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    * name  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * description  工作流描述信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'searchType' => null,
        'name' => null,
        'description' => null
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
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * searchType  过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    * name  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * description  工作流描述信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'searchType' => 'search_type',
            'name' => 'name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * searchType  过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    * name  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * description  工作流描述信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'searchType' => 'setSearchType',
            'name' => 'setName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * searchType  过滤方式。可选值如下： - equal表示精确匹配。 - contain表示模糊匹配。  具体过滤的字段，由各个接口额外定义参数。例如Workflow支持按照名称（name）进行过滤，则相应的过滤字段为name。name=workflow&search_type=contain表示查询名称中含有Workflow字样的所有工作流。
    * name  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
    * description  工作流描述信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'searchType' => 'getSearchType',
            'name' => 'getName',
            'description' => 'getDescription'
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['searchType'] = isset($data['searchType']) ? $data['searchType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets workspaceId
    *  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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
    * Gets name
    *  工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
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
    * @param string|null $name 工作流名称。填写1-64位，仅包含英文、数字、下划线（_）和中划线（-），并且以英文开头的名称。
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

