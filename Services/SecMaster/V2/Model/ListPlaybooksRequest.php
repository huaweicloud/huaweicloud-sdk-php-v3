<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPlaybooksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPlaybooksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  application/json;charset=UTF-8
    * workspaceId  工作空间ID
    * searchTxt  搜索关键字
    * enabled  是否启用
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始
    * description  剧本描述
    * dataclassName  数据类名称
    * name  剧本名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'workspaceId' => 'string',
            'searchTxt' => 'string',
            'enabled' => 'bool',
            'offset' => 'int',
            'limit' => 'int',
            'description' => 'string',
            'dataclassName' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  application/json;charset=UTF-8
    * workspaceId  工作空间ID
    * searchTxt  搜索关键字
    * enabled  是否启用
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始
    * description  剧本描述
    * dataclassName  数据类名称
    * name  剧本名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'workspaceId' => null,
        'searchTxt' => null,
        'enabled' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'description' => null,
        'dataclassName' => null,
        'name' => null
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
    * contentType  application/json;charset=UTF-8
    * workspaceId  工作空间ID
    * searchTxt  搜索关键字
    * enabled  是否启用
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始
    * description  剧本描述
    * dataclassName  数据类名称
    * name  剧本名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'content-type',
            'workspaceId' => 'workspace_id',
            'searchTxt' => 'search_txt',
            'enabled' => 'enabled',
            'offset' => 'offset',
            'limit' => 'limit',
            'description' => 'description',
            'dataclassName' => 'dataclass_name',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  application/json;charset=UTF-8
    * workspaceId  工作空间ID
    * searchTxt  搜索关键字
    * enabled  是否启用
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始
    * description  剧本描述
    * dataclassName  数据类名称
    * name  剧本名称
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'workspaceId' => 'setWorkspaceId',
            'searchTxt' => 'setSearchTxt',
            'enabled' => 'setEnabled',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'description' => 'setDescription',
            'dataclassName' => 'setDataclassName',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  application/json;charset=UTF-8
    * workspaceId  工作空间ID
    * searchTxt  搜索关键字
    * enabled  是否启用
    * offset  分页查询参数。用于指定查询结果的起始位置，从0开始
    * limit  分页查询参数，用于指定一次查询最多的结果数，从1开始
    * description  剧本描述
    * dataclassName  数据类名称
    * name  剧本名称
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'workspaceId' => 'getWorkspaceId',
            'searchTxt' => 'getSearchTxt',
            'enabled' => 'getEnabled',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'description' => 'getDescription',
            'dataclassName' => 'getDataclassName',
            'name' => 'getName'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['searchTxt'] = isset($data['searchTxt']) ? $data['searchTxt'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dataclassName'] = isset($data['dataclassName']) ? $data['dataclassName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if ((mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['contentType']) < 1)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['searchTxt']) && (mb_strlen($this->container['searchTxt']) > 36)) {
                $invalidProperties[] = "invalid value for 'searchTxt', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['searchTxt']) && (mb_strlen($this->container['searchTxt']) < 32)) {
                $invalidProperties[] = "invalid value for 'searchTxt', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 999999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999999.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 999999)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 999999.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
    * Gets contentType
    *  application/json;charset=UTF-8
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType application/json;charset=UTF-8
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets searchTxt
    *  搜索关键字
    *
    * @return string|null
    */
    public function getSearchTxt()
    {
        return $this->container['searchTxt'];
    }

    /**
    * Sets searchTxt
    *
    * @param string|null $searchTxt 搜索关键字
    *
    * @return $this
    */
    public function setSearchTxt($searchTxt)
    {
        $this->container['searchTxt'] = $searchTxt;
        return $this;
    }

    /**
    * Gets enabled
    *  是否启用
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否启用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询参数。用于指定查询结果的起始位置，从0开始
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
    * @param int $offset 分页查询参数。用于指定查询结果的起始位置，从0开始
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
    *  分页查询参数，用于指定一次查询最多的结果数，从1开始
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
    * @param int $limit 分页查询参数，用于指定一次查询最多的结果数，从1开始
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets description
    *  剧本描述
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
    * @param string|null $description 剧本描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dataclassName
    *  数据类名称
    *
    * @return string|null
    */
    public function getDataclassName()
    {
        return $this->container['dataclassName'];
    }

    /**
    * Sets dataclassName
    *
    * @param string|null $dataclassName 数据类名称
    *
    * @return $this
    */
    public function setDataclassName($dataclassName)
    {
        $this->container['dataclassName'] = $dataclassName;
        return $this;
    }

    /**
    * Gets name
    *  剧本名称
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
    * @param string|null $name 剧本名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

