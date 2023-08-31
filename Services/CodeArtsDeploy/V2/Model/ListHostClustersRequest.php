<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHostClustersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHostClustersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * name  主机集群模糊查询信息
    * os  操作系统：windows|linux
    * pageIndex  页码数
    * pageSize  每页显示的条目数量，默认为10
    * sortField  排序字段：nick_name|name|owner_name|create_time，不传使用默认排序
    * sortType  排序方式：DESC、ASC，默认为DESC
    * isProxyMode  是否为代理机
    * slaveClusterId  自定义资源池id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'name' => 'string',
            'os' => 'string',
            'pageIndex' => 'int',
            'pageSize' => 'int',
            'sortField' => 'string',
            'sortType' => 'string',
            'isProxyMode' => 'int',
            'slaveClusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * name  主机集群模糊查询信息
    * os  操作系统：windows|linux
    * pageIndex  页码数
    * pageSize  每页显示的条目数量，默认为10
    * sortField  排序字段：nick_name|name|owner_name|create_time，不传使用默认排序
    * sortType  排序方式：DESC、ASC，默认为DESC
    * isProxyMode  是否为代理机
    * slaveClusterId  自定义资源池id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'name' => null,
        'os' => null,
        'pageIndex' => 'int32',
        'pageSize' => 'int32',
        'sortField' => null,
        'sortType' => null,
        'isProxyMode' => null,
        'slaveClusterId' => null
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
    * projectId  项目ID
    * name  主机集群模糊查询信息
    * os  操作系统：windows|linux
    * pageIndex  页码数
    * pageSize  每页显示的条目数量，默认为10
    * sortField  排序字段：nick_name|name|owner_name|create_time，不传使用默认排序
    * sortType  排序方式：DESC、ASC，默认为DESC
    * isProxyMode  是否为代理机
    * slaveClusterId  自定义资源池id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'name' => 'name',
            'os' => 'os',
            'pageIndex' => 'page_index',
            'pageSize' => 'page_size',
            'sortField' => 'sort_field',
            'sortType' => 'sort_type',
            'isProxyMode' => 'is_proxy_mode',
            'slaveClusterId' => 'slave_cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * name  主机集群模糊查询信息
    * os  操作系统：windows|linux
    * pageIndex  页码数
    * pageSize  每页显示的条目数量，默认为10
    * sortField  排序字段：nick_name|name|owner_name|create_time，不传使用默认排序
    * sortType  排序方式：DESC、ASC，默认为DESC
    * isProxyMode  是否为代理机
    * slaveClusterId  自定义资源池id
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'os' => 'setOs',
            'pageIndex' => 'setPageIndex',
            'pageSize' => 'setPageSize',
            'sortField' => 'setSortField',
            'sortType' => 'setSortType',
            'isProxyMode' => 'setIsProxyMode',
            'slaveClusterId' => 'setSlaveClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * name  主机集群模糊查询信息
    * os  操作系统：windows|linux
    * pageIndex  页码数
    * pageSize  每页显示的条目数量，默认为10
    * sortField  排序字段：nick_name|name|owner_name|create_time，不传使用默认排序
    * sortType  排序方式：DESC、ASC，默认为DESC
    * isProxyMode  是否为代理机
    * slaveClusterId  自定义资源池id
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'os' => 'getOs',
            'pageIndex' => 'getPageIndex',
            'pageSize' => 'getPageSize',
            'sortField' => 'getSortField',
            'sortType' => 'getSortType',
            'isProxyMode' => 'getIsProxyMode',
            'slaveClusterId' => 'getSlaveClusterId'
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
    const OS_WINDOWS = 'windows';
    const OS_LINUX = 'linux';
    const SORT_TYPE_DESC = 'DESC';
    const SORT_TYPE_ASC = 'ASC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsAllowableValues()
    {
        return [
            self::OS_WINDOWS,
            self::OS_LINUX,
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
            self::SORT_TYPE_DESC,
            self::SORT_TYPE_ASC,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortType'] = isset($data['sortType']) ? $data['sortType'] : null;
        $this->container['isProxyMode'] = isset($data['isProxyMode']) ? $data['isProxyMode'] : null;
        $this->container['slaveClusterId'] = isset($data['slaveClusterId']) ? $data['slaveClusterId'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOsAllowableValues();
                if (!is_null($this->container['os']) && !in_array($this->container['os'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'os', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
            if (!is_null($this->container['sortField']) && !preg_match("/^(nick_name|name|owner_name|create_time)$/", $this->container['sortField'])) {
                $invalidProperties[] = "invalid value for 'sortField', must be conform to the pattern /^(nick_name|name|owner_name|create_time)$/.";
            }
            $allowedValues = $this->getSortTypeAllowableValues();
                if (!is_null($this->container['sortType']) && !in_array($this->container['sortType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortType', must be one of '%s'",
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
    * Gets projectId
    *  项目ID
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
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets name
    *  主机集群模糊查询信息
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
    * @param string|null $name 主机集群模糊查询信息
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets os
    *  操作系统：windows|linux
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os 操作系统：windows|linux
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
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
    * Gets sortField
    *  排序字段：nick_name|name|owner_name|create_time，不传使用默认排序
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
    * @param string|null $sortField 排序字段：nick_name|name|owner_name|create_time，不传使用默认排序
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
    *  排序方式：DESC、ASC，默认为DESC
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
    * @param string|null $sortType 排序方式：DESC、ASC，默认为DESC
    *
    * @return $this
    */
    public function setSortType($sortType)
    {
        $this->container['sortType'] = $sortType;
        return $this;
    }

    /**
    * Gets isProxyMode
    *  是否为代理机
    *
    * @return int|null
    */
    public function getIsProxyMode()
    {
        return $this->container['isProxyMode'];
    }

    /**
    * Sets isProxyMode
    *
    * @param int|null $isProxyMode 是否为代理机
    *
    * @return $this
    */
    public function setIsProxyMode($isProxyMode)
    {
        $this->container['isProxyMode'] = $isProxyMode;
        return $this;
    }

    /**
    * Gets slaveClusterId
    *  自定义资源池id
    *
    * @return string|null
    */
    public function getSlaveClusterId()
    {
        return $this->container['slaveClusterId'];
    }

    /**
    * Sets slaveClusterId
    *
    * @param string|null $slaveClusterId 自定义资源池id
    *
    * @return $this
    */
    public function setSlaveClusterId($slaveClusterId)
    {
        $this->container['slaveClusterId'] = $slaveClusterId;
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

