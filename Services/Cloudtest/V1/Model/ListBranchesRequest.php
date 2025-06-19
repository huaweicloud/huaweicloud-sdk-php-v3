<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBranchesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBranchesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * sortField  排序字段
    * sortType  排序方式
    * offset  起始偏移量，表示从此偏移量开始查询， offset大于等于0，小于等于20000
    * limit  每页显示的条目数量，最大支持200条
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'sortField' => 'string',
            'sortType' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * sortField  排序字段
    * sortType  排序方式
    * offset  起始偏移量，表示从此偏移量开始查询， offset大于等于0，小于等于20000
    * limit  每页显示的条目数量，最大支持200条
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'sortField' => null,
        'sortType' => null,
        'offset' => null,
        'limit' => null
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
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * sortField  排序字段
    * sortType  排序方式
    * offset  起始偏移量，表示从此偏移量开始查询， offset大于等于0，小于等于20000
    * limit  每页显示的条目数量，最大支持200条
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'sortField' => 'sort_field',
            'sortType' => 'sort_type',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * sortField  排序字段
    * sortType  排序方式
    * offset  起始偏移量，表示从此偏移量开始查询， offset大于等于0，小于等于20000
    * limit  每页显示的条目数量，最大支持200条
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'sortField' => 'setSortField',
            'sortType' => 'setSortType',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    * sortField  排序字段
    * sortType  排序方式
    * offset  起始偏移量，表示从此偏移量开始查询， offset大于等于0，小于等于20000
    * limit  每页显示的条目数量，最大支持200条
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'sortField' => 'getSortField',
            'sortType' => 'getSortType',
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
    const SORT_FIELD_NAME = 'name';
    const SORT_FIELD_CREATION_DATE = 'creationDate';
    const SORT_TYPE_ASC = 'ASC';
    const SORT_TYPE_DESC = 'DESC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortFieldAllowableValues()
    {
        return [
            self::SORT_FIELD_NAME,
            self::SORT_FIELD_CREATION_DATE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortTypeAllowableValues()
    {
        return [
            self::SORT_TYPE_ASC,
            self::SORT_TYPE_DESC,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortType'] = isset($data['sortType']) ? $data['sortType'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
            $allowedValues = $this->getSortFieldAllowableValues();
                if (!is_null($this->container['sortField']) && !in_array($this->container['sortField'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortField', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortTypeAllowableValues();
                if (!is_null($this->container['sortType']) && !in_array($this->container['sortType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 20000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 20000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets projectId
    *  项目ID，固定长度32位字符（字母和数字）。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID，固定长度32位字符（字母和数字）。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets sortType
    *  排序方式
    *
    * @return string|null
    */
    public function getSortType()
    {
        return $this->container['sortType'];
    }

    /**
    * Sets sortType
    *
    * @param string|null $sortType 排序方式
    *
    * @return $this
    */
    public function setSortType($sortType)
    {
        $this->container['sortType'] = $sortType;
        return $this;
    }

    /**
    * Gets offset
    *  起始偏移量，表示从此偏移量开始查询， offset大于等于0，小于等于20000
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
    * @param int $offset 起始偏移量，表示从此偏移量开始查询， offset大于等于0，小于等于20000
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
    *  每页显示的条目数量，最大支持200条
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
    * @param int $limit 每页显示的条目数量，最大支持200条
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

