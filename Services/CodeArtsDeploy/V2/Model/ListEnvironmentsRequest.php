<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnvironmentsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnvironmentsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationId  应用id
    * projectId  项目id
    * pageIndex  分页页码， 表示从此页开始查询， page大于等于1
    * pageSize  每页显示的条目数量，size小于等于100
    * name  要查询的环境名称
    * sortKey  排序字段，支持按照环境名称|用户名称|创建时间|用户昵称排序
    * sortDir  排序顺序，DESC降序，ASC升序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationId' => 'string',
            'projectId' => 'string',
            'pageIndex' => 'int',
            'pageSize' => 'int',
            'name' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationId  应用id
    * projectId  项目id
    * pageIndex  分页页码， 表示从此页开始查询， page大于等于1
    * pageSize  每页显示的条目数量，size小于等于100
    * name  要查询的环境名称
    * sortKey  排序字段，支持按照环境名称|用户名称|创建时间|用户昵称排序
    * sortDir  排序顺序，DESC降序，ASC升序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationId' => null,
        'projectId' => null,
        'pageIndex' => 'int32',
        'pageSize' => 'int32',
        'name' => null,
        'sortKey' => null,
        'sortDir' => null
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
    * applicationId  应用id
    * projectId  项目id
    * pageIndex  分页页码， 表示从此页开始查询， page大于等于1
    * pageSize  每页显示的条目数量，size小于等于100
    * name  要查询的环境名称
    * sortKey  排序字段，支持按照环境名称|用户名称|创建时间|用户昵称排序
    * sortDir  排序顺序，DESC降序，ASC升序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationId' => 'application_id',
            'projectId' => 'project_id',
            'pageIndex' => 'page_index',
            'pageSize' => 'page_size',
            'name' => 'name',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationId  应用id
    * projectId  项目id
    * pageIndex  分页页码， 表示从此页开始查询， page大于等于1
    * pageSize  每页显示的条目数量，size小于等于100
    * name  要查询的环境名称
    * sortKey  排序字段，支持按照环境名称|用户名称|创建时间|用户昵称排序
    * sortDir  排序顺序，DESC降序，ASC升序
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationId' => 'setApplicationId',
            'projectId' => 'setProjectId',
            'pageIndex' => 'setPageIndex',
            'pageSize' => 'setPageSize',
            'name' => 'setName',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationId  应用id
    * projectId  项目id
    * pageIndex  分页页码， 表示从此页开始查询， page大于等于1
    * pageSize  每页显示的条目数量，size小于等于100
    * name  要查询的环境名称
    * sortKey  排序字段，支持按照环境名称|用户名称|创建时间|用户昵称排序
    * sortDir  排序顺序，DESC降序，ASC升序
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationId' => 'getApplicationId',
            'projectId' => 'getProjectId',
            'pageIndex' => 'getPageIndex',
            'pageSize' => 'getPageSize',
            'name' => 'getName',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
    const SORT_KEY_NAME = 'NAME';
    const SORT_KEY_USER_NAME = 'USER_NAME';
    const SORT_KEY_CREATED_TIME = 'CREATED_TIME';
    const SORT_KEY_NICK_NAME = 'NICK_NAME';
    const SORT_DIR_DESC = 'DESC';
    const SORT_DIR_ASC = 'ASC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_NAME,
            self::SORT_KEY_USER_NAME,
            self::SORT_KEY_CREATED_TIME,
            self::SORT_KEY_NICK_NAME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_DESC,
            self::SORT_DIR_ASC,
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
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
            if ((mb_strlen($this->container['applicationId']) > 32)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['applicationId']) < 32)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['applicationId'])) {
                $invalidProperties[] = "invalid value for 'applicationId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
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
            if (!is_null($this->container['pageIndex']) && ($this->container['pageIndex'] > 50)) {
                $invalidProperties[] = "invalid value for 'pageIndex', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['pageIndex']) && ($this->container['pageIndex'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageIndex', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
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
    * Gets applicationId
    *  应用id
    *
    * @return string
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string $applicationId 应用id
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets pageIndex
    *  分页页码， 表示从此页开始查询， page大于等于1
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
    * @param int|null $pageIndex 分页页码， 表示从此页开始查询， page大于等于1
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
    *  每页显示的条目数量，size小于等于100
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
    * @param int|null $pageSize 每页显示的条目数量，size小于等于100
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets name
    *  要查询的环境名称
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
    * @param string|null $name 要查询的环境名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段，支持按照环境名称|用户名称|创建时间|用户昵称排序
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序字段，支持按照环境名称|用户名称|创建时间|用户昵称排序
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序顺序，DESC降序，ASC升序
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序顺序，DESC降序，ASC升序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

