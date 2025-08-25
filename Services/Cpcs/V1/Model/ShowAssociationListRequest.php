<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAssociationListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAssociationListRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  密码集群ID
    * appId  应用ID
    * pageSize  指定查询返回记录条数，默认值10
    * pageNum  索引位置，从page_num指定的下一条数据开始查询默认值为0
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'appId' => 'string',
            'pageSize' => 'int',
            'pageNum' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  密码集群ID
    * appId  应用ID
    * pageSize  指定查询返回记录条数，默认值10
    * pageNum  索引位置，从page_num指定的下一条数据开始查询默认值为0
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'appId' => null,
        'pageSize' => 'int32',
        'pageNum' => 'int32',
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
    * clusterId  密码集群ID
    * appId  应用ID
    * pageSize  指定查询返回记录条数，默认值10
    * pageNum  索引位置，从page_num指定的下一条数据开始查询默认值为0
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'appId' => 'app_id',
            'pageSize' => 'page_size',
            'pageNum' => 'page_num',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  密码集群ID
    * appId  应用ID
    * pageSize  指定查询返回记录条数，默认值10
    * pageNum  索引位置，从page_num指定的下一条数据开始查询默认值为0
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'appId' => 'setAppId',
            'pageSize' => 'setPageSize',
            'pageNum' => 'setPageNum',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  密码集群ID
    * appId  应用ID
    * pageSize  指定查询返回记录条数，默认值10
    * pageNum  索引位置，从page_num指定的下一条数据开始查询默认值为0
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'appId' => 'getAppId',
            'pageSize' => 'getPageSize',
            'pageNum' => 'getPageNum',
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
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
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 36)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 32)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 36)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 32)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 1000)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pageNum']) && ($this->container['pageNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageNum', must be bigger than or equal to 0.";
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
    * Gets clusterId
    *  密码集群ID
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 密码集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets pageSize
    *  指定查询返回记录条数，默认值10
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
    * @param int|null $pageSize 指定查询返回记录条数，默认值10
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets pageNum
    *  索引位置，从page_num指定的下一条数据开始查询默认值为0
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum 索引位置，从page_num指定的下一条数据开始查询默认值为0
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
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
    * @param string|null $sortKey 排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
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
    *  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
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
    * @param string|null $sortDir 排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
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

