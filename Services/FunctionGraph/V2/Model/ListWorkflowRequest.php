<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWorkflowRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWorkflowRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workflowName  函数流名称
    * limit  分页查询，每页显示的条目数量，默认值为200 limit大于200时，按照200处理
    * offset  分页查询，分页的偏移量，默认值为0 offset小于0时，按照0处理
    * enterpriseProject  企业项目ID
    * mode  函数流模式 \"NORMAL\"标准函数流 \"EXPRESS\"快速函数流
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workflowName' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'enterpriseProject' => 'string',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workflowName  函数流名称
    * limit  分页查询，每页显示的条目数量，默认值为200 limit大于200时，按照200处理
    * offset  分页查询，分页的偏移量，默认值为0 offset小于0时，按照0处理
    * enterpriseProject  企业项目ID
    * mode  函数流模式 \"NORMAL\"标准函数流 \"EXPRESS\"快速函数流
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workflowName' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'enterpriseProject' => null,
        'mode' => null
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
    * workflowName  函数流名称
    * limit  分页查询，每页显示的条目数量，默认值为200 limit大于200时，按照200处理
    * offset  分页查询，分页的偏移量，默认值为0 offset小于0时，按照0处理
    * enterpriseProject  企业项目ID
    * mode  函数流模式 \"NORMAL\"标准函数流 \"EXPRESS\"快速函数流
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workflowName' => 'workflow_name',
            'limit' => 'limit',
            'offset' => 'offset',
            'enterpriseProject' => 'enterprise_project',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workflowName  函数流名称
    * limit  分页查询，每页显示的条目数量，默认值为200 limit大于200时，按照200处理
    * offset  分页查询，分页的偏移量，默认值为0 offset小于0时，按照0处理
    * enterpriseProject  企业项目ID
    * mode  函数流模式 \"NORMAL\"标准函数流 \"EXPRESS\"快速函数流
    *
    * @var string[]
    */
    protected static $setters = [
            'workflowName' => 'setWorkflowName',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'enterpriseProject' => 'setEnterpriseProject',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workflowName  函数流名称
    * limit  分页查询，每页显示的条目数量，默认值为200 limit大于200时，按照200处理
    * offset  分页查询，分页的偏移量，默认值为0 offset小于0时，按照0处理
    * enterpriseProject  企业项目ID
    * mode  函数流模式 \"NORMAL\"标准函数流 \"EXPRESS\"快速函数流
    *
    * @var string[]
    */
    protected static $getters = [
            'workflowName' => 'getWorkflowName',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'enterpriseProject' => 'getEnterpriseProject',
            'mode' => 'getMode'
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
        $this->container['workflowName'] = isset($data['workflowName']) ? $data['workflowName'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['workflowName']) && (mb_strlen($this->container['workflowName']) > 64)) {
                $invalidProperties[] = "invalid value for 'workflowName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workflowName']) && (mb_strlen($this->container['workflowName']) < 0)) {
                $invalidProperties[] = "invalid value for 'workflowName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets workflowName
    *  函数流名称
    *
    * @return string|null
    */
    public function getWorkflowName()
    {
        return $this->container['workflowName'];
    }

    /**
    * Sets workflowName
    *
    * @param string|null $workflowName 函数流名称
    *
    * @return $this
    */
    public function setWorkflowName($workflowName)
    {
        $this->container['workflowName'] = $workflowName;
        return $this;
    }

    /**
    * Gets limit
    *  分页查询，每页显示的条目数量，默认值为200 limit大于200时，按照200处理
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
    * @param int|null $limit 分页查询，每页显示的条目数量，默认值为200 limit大于200时，按照200处理
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
    *  分页查询，分页的偏移量，默认值为0 offset小于0时，按照0处理
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
    * @param int|null $offset 分页查询，分页的偏移量，默认值为0 offset小于0时，按照0处理
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets enterpriseProject
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProject()
    {
        return $this->container['enterpriseProject'];
    }

    /**
    * Sets enterpriseProject
    *
    * @param string|null $enterpriseProject 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProject($enterpriseProject)
    {
        $this->container['enterpriseProject'] = $enterpriseProject;
        return $this;
    }

    /**
    * Gets mode
    *  函数流模式 \"NORMAL\"标准函数流 \"EXPRESS\"快速函数流
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 函数流模式 \"NORMAL\"标准函数流 \"EXPRESS\"快速函数流
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

