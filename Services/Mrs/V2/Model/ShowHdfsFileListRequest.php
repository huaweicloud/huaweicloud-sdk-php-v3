<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHdfsFileListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHdfsFileListRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * path  文件目录。 比如访问“/tmp/test”目录列表，此处必须是目录，整体URI为/v2/{project_id}/clusters/{cluster_id}/files?path=%2Ftmp%2Ftest 单层目录要遵循以下规则： - 不能为空 - 不能以\".\"开头或结尾 - 不能包括下列符号 : :*?\"<>|\\;&,'`!{}[]$%+ - 不能超过255个字节
    * offset  分页参数，表示从该偏移量开始查询文件列表，默认值为0。
    * limit  分页参数，列表当前分页的数量限制，默认为100，最大1000。
    * sortKey  列表排序按该属性排序。缺省值：path_suffix - path_suffix：文件或目录名称 - length：文件大小 - modification_time：修改时间
    * order  列表排序方式，desc为降序，asc为升序，默认值为desc。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'path' => 'string',
            'offset' => 'string',
            'limit' => 'string',
            'sortKey' => 'string',
            'order' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * path  文件目录。 比如访问“/tmp/test”目录列表，此处必须是目录，整体URI为/v2/{project_id}/clusters/{cluster_id}/files?path=%2Ftmp%2Ftest 单层目录要遵循以下规则： - 不能为空 - 不能以\".\"开头或结尾 - 不能包括下列符号 : :*?\"<>|\\;&,'`!{}[]$%+ - 不能超过255个字节
    * offset  分页参数，表示从该偏移量开始查询文件列表，默认值为0。
    * limit  分页参数，列表当前分页的数量限制，默认为100，最大1000。
    * sortKey  列表排序按该属性排序。缺省值：path_suffix - path_suffix：文件或目录名称 - length：文件大小 - modification_time：修改时间
    * order  列表排序方式，desc为降序，asc为升序，默认值为desc。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'path' => null,
        'offset' => null,
        'limit' => null,
        'sortKey' => null,
        'order' => null
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
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * path  文件目录。 比如访问“/tmp/test”目录列表，此处必须是目录，整体URI为/v2/{project_id}/clusters/{cluster_id}/files?path=%2Ftmp%2Ftest 单层目录要遵循以下规则： - 不能为空 - 不能以\".\"开头或结尾 - 不能包括下列符号 : :*?\"<>|\\;&,'`!{}[]$%+ - 不能超过255个字节
    * offset  分页参数，表示从该偏移量开始查询文件列表，默认值为0。
    * limit  分页参数，列表当前分页的数量限制，默认为100，最大1000。
    * sortKey  列表排序按该属性排序。缺省值：path_suffix - path_suffix：文件或目录名称 - length：文件大小 - modification_time：修改时间
    * order  列表排序方式，desc为降序，asc为升序，默认值为desc。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'path' => 'path',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'order' => 'order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * path  文件目录。 比如访问“/tmp/test”目录列表，此处必须是目录，整体URI为/v2/{project_id}/clusters/{cluster_id}/files?path=%2Ftmp%2Ftest 单层目录要遵循以下规则： - 不能为空 - 不能以\".\"开头或结尾 - 不能包括下列符号 : :*?\"<>|\\;&,'`!{}[]$%+ - 不能超过255个字节
    * offset  分页参数，表示从该偏移量开始查询文件列表，默认值为0。
    * limit  分页参数，列表当前分页的数量限制，默认为100，最大1000。
    * sortKey  列表排序按该属性排序。缺省值：path_suffix - path_suffix：文件或目录名称 - length：文件大小 - modification_time：修改时间
    * order  列表排序方式，desc为降序，asc为升序，默认值为desc。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'path' => 'setPath',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'order' => 'setOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * path  文件目录。 比如访问“/tmp/test”目录列表，此处必须是目录，整体URI为/v2/{project_id}/clusters/{cluster_id}/files?path=%2Ftmp%2Ftest 单层目录要遵循以下规则： - 不能为空 - 不能以\".\"开头或结尾 - 不能包括下列符号 : :*?\"<>|\\;&,'`!{}[]$%+ - 不能超过255个字节
    * offset  分页参数，表示从该偏移量开始查询文件列表，默认值为0。
    * limit  分页参数，列表当前分页的数量限制，默认为100，最大1000。
    * sortKey  列表排序按该属性排序。缺省值：path_suffix - path_suffix：文件或目录名称 - length：文件大小 - modification_time：修改时间
    * order  列表排序方式，desc为降序，asc为升序，默认值为desc。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'path' => 'getPath',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'order' => 'getOrder'
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
    const SORT_KEY_PATH_SUFFIX = 'path_suffix';
    const SORT_KEY_LENGTH = 'length';
    const SORT_KEY_MODIFICATION_TIME = 'modification_time';
    const ORDER_DESC = 'desc';
    const ORDER_ASC = 'asc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_PATH_SUFFIX,
            self::SORT_KEY_LENGTH,
            self::SORT_KEY_MODIFICATION_TIME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_DESC,
            self::ORDER_ASC,
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
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
    * Gets clusterId
    *  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets path
    *  文件目录。 比如访问“/tmp/test”目录列表，此处必须是目录，整体URI为/v2/{project_id}/clusters/{cluster_id}/files?path=%2Ftmp%2Ftest 单层目录要遵循以下规则： - 不能为空 - 不能以\".\"开头或结尾 - 不能包括下列符号 : :*?\"<>|\\;&,'`!{}[]$%+ - 不能超过255个字节
    *
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path 文件目录。 比如访问“/tmp/test”目录列表，此处必须是目录，整体URI为/v2/{project_id}/clusters/{cluster_id}/files?path=%2Ftmp%2Ftest 单层目录要遵循以下规则： - 不能为空 - 不能以\".\"开头或结尾 - 不能包括下列符号 : :*?\"<>|\\;&,'`!{}[]$%+ - 不能超过255个字节
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets offset
    *  分页参数，表示从该偏移量开始查询文件列表，默认值为0。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 分页参数，表示从该偏移量开始查询文件列表，默认值为0。
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
    *  分页参数，列表当前分页的数量限制，默认为100，最大1000。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 分页参数，列表当前分页的数量限制，默认为100，最大1000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  列表排序按该属性排序。缺省值：path_suffix - path_suffix：文件或目录名称 - length：文件大小 - modification_time：修改时间
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
    * @param string|null $sortKey 列表排序按该属性排序。缺省值：path_suffix - path_suffix：文件或目录名称 - length：文件大小 - modification_time：修改时间
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets order
    *  列表排序方式，desc为降序，asc为升序，默认值为desc。
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 列表排序方式，desc为降序，asc为升序，默认值为desc。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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

