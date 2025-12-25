<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPipesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPipesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  pipe name
    * pipeType  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * offset  第几页
    * limit  每页数量
    * sortDir  排序顺序
    * sortKey  排序字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'dataspaceId' => 'string',
            'pipeId' => 'string',
            'pipeName' => 'string',
            'pipeType' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortDir' => 'string',
            'sortKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  pipe name
    * pipeType  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * offset  第几页
    * limit  每页数量
    * sortDir  排序顺序
    * sortKey  排序字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'dataspaceId' => null,
        'pipeId' => null,
        'pipeName' => null,
        'pipeType' => null,
        'offset' => 'int64',
        'limit' => 'int64',
        'sortDir' => null,
        'sortKey' => null
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
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  pipe name
    * pipeType  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * offset  第几页
    * limit  每页数量
    * sortDir  排序顺序
    * sortKey  排序字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'dataspaceId' => 'dataspace_id',
            'pipeId' => 'pipe_id',
            'pipeName' => 'pipe_name',
            'pipeType' => 'pipe_type',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortDir' => 'sort_dir',
            'sortKey' => 'sort_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  pipe name
    * pipeType  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * offset  第几页
    * limit  每页数量
    * sortDir  排序顺序
    * sortKey  排序字段
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'dataspaceId' => 'setDataspaceId',
            'pipeId' => 'setPipeId',
            'pipeName' => 'setPipeName',
            'pipeType' => 'setPipeType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortDir' => 'setSortDir',
            'sortKey' => 'setSortKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  工作空间ID
    * dataspaceId  数据空间ID
    * pipeId  管道ID
    * pipeName  pipe name
    * pipeType  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    * offset  第几页
    * limit  每页数量
    * sortDir  排序顺序
    * sortKey  排序字段
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'dataspaceId' => 'getDataspaceId',
            'pipeId' => 'getPipeId',
            'pipeName' => 'getPipeName',
            'pipeType' => 'getPipeType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortDir' => 'getSortDir',
            'sortKey' => 'getSortKey'
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
    const PIPE_TYPE_SYSTEM_DEFINED = 'system-defined';
    const PIPE_TYPE_USER_DEFINED = 'user-defined';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPipeTypeAllowableValues()
    {
        return [
            self::PIPE_TYPE_SYSTEM_DEFINED,
            self::PIPE_TYPE_USER_DEFINED,
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['pipeType'] = isset($data['pipeType']) ? $data['pipeType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) > 255)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getPipeTypeAllowableValues();
                if (!is_null($this->container['pipeType']) && !in_array($this->container['pipeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pipeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
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
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string|null
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string|null $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets pipeId
    *  管道ID
    *
    * @return string|null
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string|null $pipeId 管道ID
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets pipeName
    *  pipe name
    *
    * @return string|null
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string|null $pipeName pipe name
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
    }

    /**
    * Gets pipeType
    *  数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    *
    * @return string|null
    */
    public function getPipeType()
    {
        return $this->container['pipeType'];
    }

    /**
    * Sets pipeType
    *
    * @param string|null $pipeType 数据管道类型；可选值：system-defined(系统预定义)、user-defined(用户自定义)
    *
    * @return $this
    */
    public function setPipeType($pipeType)
    {
        $this->container['pipeType'] = $pipeType;
        return $this;
    }

    /**
    * Gets offset
    *  第几页
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
    * @param int|null $offset 第几页
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
    *  每页数量
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
    * @param int|null $limit 每页数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序顺序
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
    * @param string|null $sortDir 排序顺序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段
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
    * @param string|null $sortKey 排序字段
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
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

