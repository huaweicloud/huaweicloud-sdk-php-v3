<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MindmapRecyclePageParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MindmapRecyclePageParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creatorNum  创建人工号
    * limit  每页显示的条目数量，最大支持200条
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * projectId  项目ID
    * text  过滤用字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creatorNum' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'projectId' => 'string',
            'text' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creatorNum  创建人工号
    * limit  每页显示的条目数量，最大支持200条
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * projectId  项目ID
    * text  过滤用字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creatorNum' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'projectId' => null,
        'text' => null
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
    * creatorNum  创建人工号
    * limit  每页显示的条目数量，最大支持200条
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * projectId  项目ID
    * text  过滤用字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creatorNum' => 'creator_num',
            'limit' => 'limit',
            'offset' => 'offset',
            'projectId' => 'project_id',
            'text' => 'text'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creatorNum  创建人工号
    * limit  每页显示的条目数量，最大支持200条
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * projectId  项目ID
    * text  过滤用字段
    *
    * @var string[]
    */
    protected static $setters = [
            'creatorNum' => 'setCreatorNum',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'projectId' => 'setProjectId',
            'text' => 'setText'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creatorNum  创建人工号
    * limit  每页显示的条目数量，最大支持200条
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * projectId  项目ID
    * text  过滤用字段
    *
    * @var string[]
    */
    protected static $getters = [
            'creatorNum' => 'getCreatorNum',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'projectId' => 'getProjectId',
            'text' => 'getText'
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
        $this->container['creatorNum'] = isset($data['creatorNum']) ? $data['creatorNum'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 100000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100000.";
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
    * Gets creatorNum
    *  创建人工号
    *
    * @return string|null
    */
    public function getCreatorNum()
    {
        return $this->container['creatorNum'];
    }

    /**
    * Sets creatorNum
    *
    * @param string|null $creatorNum 创建人工号
    *
    * @return $this
    */
    public function setCreatorNum($creatorNum)
    {
        $this->container['creatorNum'] = $creatorNum;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，最大支持200条
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
    * @param int|null $limit 每页显示的条目数量，最大支持200条
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
    *  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
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
    * @param int|null $offset 起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets text
    *  过滤用字段
    *
    * @return string|null
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string|null $text 过滤用字段
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
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

