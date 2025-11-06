<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAllRepositoryByTwoProjectIdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAllRepositoryByTwoProjectIdRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageIndex  分页索引，从1开始计数
    * pageSize  每页条目数
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * search  搜索关键字
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageIndex' => 'int',
            'pageSize' => 'int',
            'projectUuid' => 'string',
            'search' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageIndex  分页索引，从1开始计数
    * pageSize  每页条目数
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * search  搜索关键字
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageIndex' => 'int32',
        'pageSize' => 'int32',
        'projectUuid' => null,
        'search' => null
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
    * pageIndex  分页索引，从1开始计数
    * pageSize  每页条目数
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * search  搜索关键字
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageIndex' => 'page_index',
            'pageSize' => 'page_size',
            'projectUuid' => 'project_uuid',
            'search' => 'search'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageIndex  分页索引，从1开始计数
    * pageSize  每页条目数
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * search  搜索关键字
    *
    * @var string[]
    */
    protected static $setters = [
            'pageIndex' => 'setPageIndex',
            'pageSize' => 'setPageSize',
            'projectUuid' => 'setProjectUuid',
            'search' => 'setSearch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageIndex  分页索引，从1开始计数
    * pageSize  每页条目数
    * projectUuid  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    * search  搜索关键字
    *
    * @var string[]
    */
    protected static $getters = [
            'pageIndex' => 'getPageIndex',
            'pageSize' => 'getPageSize',
            'projectUuid' => 'getProjectUuid',
            'search' => 'getSearch'
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
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectUuid'] === null) {
            $invalidProperties[] = "'projectUuid' can't be null";
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
    * Gets pageIndex
    *  分页索引，从1开始计数
    *
    * @return int|null
    */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
    * Sets pageIndex
    *
    * @param int|null $pageIndex 分页索引，从1开始计数
    *
    * @return $this
    */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页条目数
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
    * @param int|null $pageSize 每页条目数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    *
    * @return string
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string $projectUuid 项目ID，获取方式请参见[获取项目ID](codehub_api_0014.xml)。
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets search
    *  搜索关键字
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
    * @param string|null $search 搜索关键字
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
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

