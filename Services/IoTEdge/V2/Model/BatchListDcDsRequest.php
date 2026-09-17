<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchListDcDsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchListDcDsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeNodeId  边缘节点ID
    * moduleId  数据源所属的模块id
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgeNodeId' => 'string',
            'moduleId' => 'string',
            'name' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeNodeId  边缘节点ID
    * moduleId  数据源所属的模块id
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgeNodeId' => null,
        'moduleId' => null,
        'name' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * edgeNodeId  边缘节点ID
    * moduleId  数据源所属的模块id
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgeNodeId' => 'edge_node_id',
            'moduleId' => 'module_id',
            'name' => 'name',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeNodeId  边缘节点ID
    * moduleId  数据源所属的模块id
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    *
    * @var string[]
    */
    protected static $setters = [
            'edgeNodeId' => 'setEdgeNodeId',
            'moduleId' => 'setModuleId',
            'name' => 'setName',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeNodeId  边缘节点ID
    * moduleId  数据源所属的模块id
    * name  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    * offset  查询的起始位置，取值范围为非负整数，默认为0
    * limit  每页记录数，默认值为10，取值区间为1-1000
    *
    * @var string[]
    */
    protected static $getters = [
            'edgeNodeId' => 'getEdgeNodeId',
            'moduleId' => 'getModuleId',
            'name' => 'getName',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['edgeNodeId'] = isset($data['edgeNodeId']) ? $data['edgeNodeId'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['edgeNodeId'] === null) {
            $invalidProperties[] = "'edgeNodeId' can't be null";
        }
            if ((mb_strlen($this->container['edgeNodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['edgeNodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['edgeNodeId'])) {
                $invalidProperties[] = "invalid value for 'edgeNodeId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['moduleId']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['moduleId'])) {
                $invalidProperties[] = "invalid value for 'moduleId', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_\\-\\u4e00-\\u9fa5]*$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets edgeNodeId
    *  边缘节点ID
    *
    * @return string
    */
    public function getEdgeNodeId()
    {
        return $this->container['edgeNodeId'];
    }

    /**
    * Sets edgeNodeId
    *
    * @param string $edgeNodeId 边缘节点ID
    *
    * @return $this
    */
    public function setEdgeNodeId($edgeNodeId)
    {
        $this->container['edgeNodeId'] = $edgeNodeId;
        return $this;
    }

    /**
    * Gets moduleId
    *  数据源所属的模块id
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 数据源所属的模块id
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets name
    *  采集数据源名称，允许中、数字、英文大小写、下划线、中划线
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
    * @param string|null $name 采集数据源名称，允许中、数字、英文大小写、下划线、中划线
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets offset
    *  查询的起始位置，取值范围为非负整数，默认为0
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
    * @param int|null $offset 查询的起始位置，取值范围为非负整数，默认为0
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
    *  每页记录数，默认值为10，取值区间为1-1000
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
    * @param int|null $limit 每页记录数，默认值为10，取值区间为1-1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

