<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNewHostsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNewHostsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  项目ID
    * keyField  主机名模糊查询信息
    * environmentId  环境id
    * pageIndex  页码数
    * pageSize  每页显示的条目数量，默认为10
    * sortKey  排序字段：as_proxy|host_name|owner_name，不传使用默认排序
    * sortDir  排序方式：DESC、ASC，默认为DESC
    * asProxy  是否为代理机
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'keyField' => 'string',
            'environmentId' => 'string',
            'pageIndex' => 'int',
            'pageSize' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'asProxy' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  项目ID
    * keyField  主机名模糊查询信息
    * environmentId  环境id
    * pageIndex  页码数
    * pageSize  每页显示的条目数量，默认为10
    * sortKey  排序字段：as_proxy|host_name|owner_name，不传使用默认排序
    * sortDir  排序方式：DESC、ASC，默认为DESC
    * asProxy  是否为代理机
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'keyField' => null,
        'environmentId' => null,
        'pageIndex' => 'int32',
        'pageSize' => 'int32',
        'sortKey' => null,
        'sortDir' => null,
        'asProxy' => null
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
    * groupId  项目ID
    * keyField  主机名模糊查询信息
    * environmentId  环境id
    * pageIndex  页码数
    * pageSize  每页显示的条目数量，默认为10
    * sortKey  排序字段：as_proxy|host_name|owner_name，不传使用默认排序
    * sortDir  排序方式：DESC、ASC，默认为DESC
    * asProxy  是否为代理机
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'keyField' => 'key_field',
            'environmentId' => 'environment_id',
            'pageIndex' => 'page_index',
            'pageSize' => 'page_size',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'asProxy' => 'as_proxy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  项目ID
    * keyField  主机名模糊查询信息
    * environmentId  环境id
    * pageIndex  页码数
    * pageSize  每页显示的条目数量，默认为10
    * sortKey  排序字段：as_proxy|host_name|owner_name，不传使用默认排序
    * sortDir  排序方式：DESC、ASC，默认为DESC
    * asProxy  是否为代理机
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'keyField' => 'setKeyField',
            'environmentId' => 'setEnvironmentId',
            'pageIndex' => 'setPageIndex',
            'pageSize' => 'setPageSize',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'asProxy' => 'setAsProxy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  项目ID
    * keyField  主机名模糊查询信息
    * environmentId  环境id
    * pageIndex  页码数
    * pageSize  每页显示的条目数量，默认为10
    * sortKey  排序字段：as_proxy|host_name|owner_name，不传使用默认排序
    * sortDir  排序方式：DESC、ASC，默认为DESC
    * asProxy  是否为代理机
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'keyField' => 'getKeyField',
            'environmentId' => 'getEnvironmentId',
            'pageIndex' => 'getPageIndex',
            'pageSize' => 'getPageSize',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'asProxy' => 'getAsProxy'
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
    const SORT_DIR_DESC = 'DESC';
    const SORT_DIR_ASC = 'ASC';
    

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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['keyField'] = isset($data['keyField']) ? $data['keyField'] : null;
        $this->container['environmentId'] = isset($data['environmentId']) ? $data['environmentId'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['asProxy'] = isset($data['asProxy']) ? $data['asProxy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 32)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['groupId']) < 32)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['keyField']) && (mb_strlen($this->container['keyField']) > 256)) {
                $invalidProperties[] = "invalid value for 'keyField', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['keyField']) && (mb_strlen($this->container['keyField']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyField', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['environmentId']) && (mb_strlen($this->container['environmentId']) > 32)) {
                $invalidProperties[] = "invalid value for 'environmentId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['environmentId']) && (mb_strlen($this->container['environmentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'environmentId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['pageIndex']) && ($this->container['pageIndex'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageIndex', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 1000)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortKey']) && !preg_match("/^(as_proxy|host_name|owner_name)$/", $this->container['sortKey'])) {
                $invalidProperties[] = "invalid value for 'sortKey', must be conform to the pattern /^(as_proxy|host_name|owner_name)$/.";
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
    * Gets groupId
    *  项目ID
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 项目ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets keyField
    *  主机名模糊查询信息
    *
    * @return string|null
    */
    public function getKeyField()
    {
        return $this->container['keyField'];
    }

    /**
    * Sets keyField
    *
    * @param string|null $keyField 主机名模糊查询信息
    *
    * @return $this
    */
    public function setKeyField($keyField)
    {
        $this->container['keyField'] = $keyField;
        return $this;
    }

    /**
    * Gets environmentId
    *  环境id
    *
    * @return string|null
    */
    public function getEnvironmentId()
    {
        return $this->container['environmentId'];
    }

    /**
    * Sets environmentId
    *
    * @param string|null $environmentId 环境id
    *
    * @return $this
    */
    public function setEnvironmentId($environmentId)
    {
        $this->container['environmentId'] = $environmentId;
        return $this;
    }

    /**
    * Gets pageIndex
    *  页码数
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
    * @param int|null $pageIndex 页码数
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
    *  每页显示的条目数量，默认为10
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
    * @param int|null $pageSize 每页显示的条目数量，默认为10
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段：as_proxy|host_name|owner_name，不传使用默认排序
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
    * @param string|null $sortKey 排序字段：as_proxy|host_name|owner_name，不传使用默认排序
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
    *  排序方式：DESC、ASC，默认为DESC
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
    * @param string|null $sortDir 排序方式：DESC、ASC，默认为DESC
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets asProxy
    *  是否为代理机
    *
    * @return bool|null
    */
    public function getAsProxy()
    {
        return $this->container['asProxy'];
    }

    /**
    * Sets asProxy
    *
    * @param bool|null $asProxy 是否为代理机
    *
    * @return $this
    */
    public function setAsProxy($asProxy)
    {
        $this->container['asProxy'] = $asProxy;
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

