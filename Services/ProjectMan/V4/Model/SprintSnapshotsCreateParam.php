<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SprintSnapshotsCreateParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SprintSnapshotsCreateParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  快照标题。
    * issueId  计划唯一ID。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的id字段的值就是计划ID。
    * category  计划类别。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的category字段的值就是计划类别。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'issueId' => 'string',
            'category' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  快照标题。
    * issueId  计划唯一ID。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的id字段的值就是计划ID。
    * category  计划类别。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的category字段的值就是计划类别。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'issueId' => null,
        'category' => null
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
    * title  快照标题。
    * issueId  计划唯一ID。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的id字段的值就是计划ID。
    * category  计划类别。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的category字段的值就是计划类别。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'issueId' => 'issue_id',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  快照标题。
    * issueId  计划唯一ID。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的id字段的值就是计划ID。
    * category  计划类别。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的category字段的值就是计划类别。
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'issueId' => 'setIssueId',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  快照标题。
    * issueId  计划唯一ID。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的id字段的值就是计划ID。
    * category  计划类别。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的category字段的值就是计划类别。
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'issueId' => 'getIssueId',
            'category' => 'getCategory'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
            if ((mb_strlen($this->container['title']) > 50)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['issueId'] === null) {
            $invalidProperties[] = "'issueId' can't be null";
        }
            if ((mb_strlen($this->container['issueId']) > 19)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be smaller than or equal to 19.";
            }
            if ((mb_strlen($this->container['issueId']) < 18)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be bigger than or equal to 18.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            if ((mb_strlen($this->container['category']) > 32)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['category']) < 2)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 2.";
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
    * Gets title
    *  快照标题。
    *
    * @return string
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string $title 快照标题。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets issueId
    *  计划唯一ID。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的id字段的值就是计划ID。
    *
    * @return string
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string $issueId 计划唯一ID。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的id字段的值就是计划ID。
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets category
    *  计划类别。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的category字段的值就是计划类别。
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 计划类别。可以通过IPD项目计划管理章节中发布/迭代计划列表查询接口获取，响应消息体中的category字段的值就是计划类别。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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

