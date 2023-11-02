<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQualityTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQualityTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categoryId  category id
    * name  name
    * systemTemplate  是否只查询系统模板
    * creator  创建者
    * limit  分页时每页的条数,最大值为100
    * offset  分页偏移量
    * workspace  workspace 信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categoryId' => 'int',
            'name' => 'string',
            'systemTemplate' => 'bool',
            'creator' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'workspace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categoryId  category id
    * name  name
    * systemTemplate  是否只查询系统模板
    * creator  创建者
    * limit  分页时每页的条数,最大值为100
    * offset  分页偏移量
    * workspace  workspace 信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categoryId' => 'int64',
        'name' => null,
        'systemTemplate' => null,
        'creator' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'workspace' => null
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
    * categoryId  category id
    * name  name
    * systemTemplate  是否只查询系统模板
    * creator  创建者
    * limit  分页时每页的条数,最大值为100
    * offset  分页偏移量
    * workspace  workspace 信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categoryId' => 'category_id',
            'name' => 'name',
            'systemTemplate' => 'system_template',
            'creator' => 'creator',
            'limit' => 'limit',
            'offset' => 'offset',
            'workspace' => 'workspace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categoryId  category id
    * name  name
    * systemTemplate  是否只查询系统模板
    * creator  创建者
    * limit  分页时每页的条数,最大值为100
    * offset  分页偏移量
    * workspace  workspace 信息
    *
    * @var string[]
    */
    protected static $setters = [
            'categoryId' => 'setCategoryId',
            'name' => 'setName',
            'systemTemplate' => 'setSystemTemplate',
            'creator' => 'setCreator',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'workspace' => 'setWorkspace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categoryId  category id
    * name  name
    * systemTemplate  是否只查询系统模板
    * creator  创建者
    * limit  分页时每页的条数,最大值为100
    * offset  分页偏移量
    * workspace  workspace 信息
    *
    * @var string[]
    */
    protected static $getters = [
            'categoryId' => 'getCategoryId',
            'name' => 'getName',
            'systemTemplate' => 'getSystemTemplate',
            'creator' => 'getCreator',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'workspace' => 'getWorkspace'
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
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['systemTemplate'] = isset($data['systemTemplate']) ? $data['systemTemplate'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
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
    * Gets categoryId
    *  category id
    *
    * @return int|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param int|null $categoryId category id
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets name
    *  name
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
    * @param string|null $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets systemTemplate
    *  是否只查询系统模板
    *
    * @return bool|null
    */
    public function getSystemTemplate()
    {
        return $this->container['systemTemplate'];
    }

    /**
    * Sets systemTemplate
    *
    * @param bool|null $systemTemplate 是否只查询系统模板
    *
    * @return $this
    */
    public function setSystemTemplate($systemTemplate)
    {
        $this->container['systemTemplate'] = $systemTemplate;
        return $this;
    }

    /**
    * Gets creator
    *  创建者
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建者
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets limit
    *  分页时每页的条数,最大值为100
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
    * @param int|null $limit 分页时每页的条数,最大值为100
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
    *  分页偏移量
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
    * @param int|null $offset 分页偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets workspace
    *  workspace 信息
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace workspace 信息
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
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

