<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTasksBySqlTemplateIdRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTasksBySqlTemplateIdRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * rangeLeft  起止时间的查询左区间
    * rangeRight  起止时间的查询右区间
    * sqlTemplateId  SQL模板ID
    * pageSize  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'nodeId' => 'string',
            'rangeLeft' => 'int',
            'rangeRight' => 'int',
            'sqlTemplateId' => 'string',
            'pageSize' => 'int',
            'curPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * rangeLeft  起止时间的查询左区间
    * rangeRight  起止时间的查询右区间
    * sqlTemplateId  SQL模板ID
    * pageSize  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'nodeId' => null,
        'rangeLeft' => 'int64',
        'rangeRight' => 'int64',
        'sqlTemplateId' => null,
        'pageSize' => 'int32',
        'curPage' => 'int32'
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
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * rangeLeft  起止时间的查询左区间
    * rangeRight  起止时间的查询右区间
    * sqlTemplateId  SQL模板ID
    * pageSize  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'rangeLeft' => 'range_left',
            'rangeRight' => 'range_right',
            'sqlTemplateId' => 'sql_template_id',
            'pageSize' => 'page_size',
            'curPage' => 'cur_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * rangeLeft  起止时间的查询左区间
    * rangeRight  起止时间的查询右区间
    * sqlTemplateId  SQL模板ID
    * pageSize  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'rangeLeft' => 'setRangeLeft',
            'rangeRight' => 'setRangeRight',
            'sqlTemplateId' => 'setSqlTemplateId',
            'pageSize' => 'setPageSize',
            'curPage' => 'setCurPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，实例的唯一标识
    * nodeId  节点ID，实例节点的唯一标识
    * rangeLeft  起止时间的查询左区间
    * rangeRight  起止时间的查询右区间
    * sqlTemplateId  SQL模板ID
    * pageSize  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'rangeLeft' => 'getRangeLeft',
            'rangeRight' => 'getRangeRight',
            'sqlTemplateId' => 'getSqlTemplateId',
            'pageSize' => 'getPageSize',
            'curPage' => 'getCurPage'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['rangeLeft'] = isset($data['rangeLeft']) ? $data['rangeLeft'] : null;
        $this->container['rangeRight'] = isset($data['rangeRight']) ? $data['rangeRight'] : null;
        $this->container['sqlTemplateId'] = isset($data['sqlTemplateId']) ? $data['sqlTemplateId'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['sqlTemplateId'] === null) {
            $invalidProperties[] = "'sqlTemplateId' can't be null";
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
    * Gets instanceId
    *  实例ID，实例的唯一标识
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID，实例的唯一标识
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID，实例节点的唯一标识
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID，实例节点的唯一标识
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets rangeLeft
    *  起止时间的查询左区间
    *
    * @return int|null
    */
    public function getRangeLeft()
    {
        return $this->container['rangeLeft'];
    }

    /**
    * Sets rangeLeft
    *
    * @param int|null $rangeLeft 起止时间的查询左区间
    *
    * @return $this
    */
    public function setRangeLeft($rangeLeft)
    {
        $this->container['rangeLeft'] = $rangeLeft;
        return $this;
    }

    /**
    * Gets rangeRight
    *  起止时间的查询右区间
    *
    * @return int|null
    */
    public function getRangeRight()
    {
        return $this->container['rangeRight'];
    }

    /**
    * Sets rangeRight
    *
    * @param int|null $rangeRight 起止时间的查询右区间
    *
    * @return $this
    */
    public function setRangeRight($rangeRight)
    {
        $this->container['rangeRight'] = $rangeRight;
        return $this;
    }

    /**
    * Gets sqlTemplateId
    *  SQL模板ID
    *
    * @return string
    */
    public function getSqlTemplateId()
    {
        return $this->container['sqlTemplateId'];
    }

    /**
    * Sets sqlTemplateId
    *
    * @param string $sqlTemplateId SQL模板ID
    *
    * @return $this
    */
    public function setSqlTemplateId($sqlTemplateId)
    {
        $this->container['sqlTemplateId'] = $sqlTemplateId;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页记录数
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
    * @param int|null $pageSize 每页记录数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets curPage
    *  当前页码
    *
    * @return int|null
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param int|null $curPage 当前页码
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
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

