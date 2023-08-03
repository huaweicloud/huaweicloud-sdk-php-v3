<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadPackageGroupDetailsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadPackageGroupDetailsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  资源包上传的unix时间。是单位为“毫秒”的时间戳。
    * updateTime  更新已上传资源包的unix时间。是单位为“毫秒”的时间戳
    * resourceType  资源类型。
    * isAsync  是否异步上传资源包
    * resourceName  资源名。
    * status  \"UPLOADING\"表示正在上传。\"READY\"表示资源包已上传。\"FAILED\"表示资源包上传失败。
    * underlyingName  资源包在队列中的名字。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'int',
            'updateTime' => 'int',
            'resourceType' => 'string',
            'isAsync' => 'bool',
            'resourceName' => 'string',
            'status' => 'string',
            'underlyingName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  资源包上传的unix时间。是单位为“毫秒”的时间戳。
    * updateTime  更新已上传资源包的unix时间。是单位为“毫秒”的时间戳
    * resourceType  资源类型。
    * isAsync  是否异步上传资源包
    * resourceName  资源名。
    * status  \"UPLOADING\"表示正在上传。\"READY\"表示资源包已上传。\"FAILED\"表示资源包上传失败。
    * underlyingName  资源包在队列中的名字。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'resourceType' => null,
        'isAsync' => null,
        'resourceName' => null,
        'status' => null,
        'underlyingName' => null
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
    * createTime  资源包上传的unix时间。是单位为“毫秒”的时间戳。
    * updateTime  更新已上传资源包的unix时间。是单位为“毫秒”的时间戳
    * resourceType  资源类型。
    * isAsync  是否异步上传资源包
    * resourceName  资源名。
    * status  \"UPLOADING\"表示正在上传。\"READY\"表示资源包已上传。\"FAILED\"表示资源包上传失败。
    * underlyingName  资源包在队列中的名字。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'resourceType' => 'resource_type',
            'isAsync' => 'is_async',
            'resourceName' => 'resource_name',
            'status' => 'status',
            'underlyingName' => 'underlying_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  资源包上传的unix时间。是单位为“毫秒”的时间戳。
    * updateTime  更新已上传资源包的unix时间。是单位为“毫秒”的时间戳
    * resourceType  资源类型。
    * isAsync  是否异步上传资源包
    * resourceName  资源名。
    * status  \"UPLOADING\"表示正在上传。\"READY\"表示资源包已上传。\"FAILED\"表示资源包上传失败。
    * underlyingName  资源包在队列中的名字。
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'resourceType' => 'setResourceType',
            'isAsync' => 'setIsAsync',
            'resourceName' => 'setResourceName',
            'status' => 'setStatus',
            'underlyingName' => 'setUnderlyingName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  资源包上传的unix时间。是单位为“毫秒”的时间戳。
    * updateTime  更新已上传资源包的unix时间。是单位为“毫秒”的时间戳
    * resourceType  资源类型。
    * isAsync  是否异步上传资源包
    * resourceName  资源名。
    * status  \"UPLOADING\"表示正在上传。\"READY\"表示资源包已上传。\"FAILED\"表示资源包上传失败。
    * underlyingName  资源包在队列中的名字。
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'resourceType' => 'getResourceType',
            'isAsync' => 'getIsAsync',
            'resourceName' => 'getResourceName',
            'status' => 'getStatus',
            'underlyingName' => 'getUnderlyingName'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['isAsync'] = isset($data['isAsync']) ? $data['isAsync'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['underlyingName'] = isset($data['underlyingName']) ? $data['underlyingName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
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
    * Gets createTime
    *  资源包上传的unix时间。是单位为“毫秒”的时间戳。
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 资源包上传的unix时间。是单位为“毫秒”的时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新已上传资源包的unix时间。是单位为“毫秒”的时间戳
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新已上传资源包的unix时间。是单位为“毫秒”的时间戳
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型。
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 资源类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets isAsync
    *  是否异步上传资源包
    *
    * @return bool|null
    */
    public function getIsAsync()
    {
        return $this->container['isAsync'];
    }

    /**
    * Sets isAsync
    *
    * @param bool|null $isAsync 是否异步上传资源包
    *
    * @return $this
    */
    public function setIsAsync($isAsync)
    {
        $this->container['isAsync'] = $isAsync;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets status
    *  \"UPLOADING\"表示正在上传。\"READY\"表示资源包已上传。\"FAILED\"表示资源包上传失败。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status \"UPLOADING\"表示正在上传。\"READY\"表示资源包已上传。\"FAILED\"表示资源包上传失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets underlyingName
    *  资源包在队列中的名字。
    *
    * @return string|null
    */
    public function getUnderlyingName()
    {
        return $this->container['underlyingName'];
    }

    /**
    * Sets underlyingName
    *
    * @param string|null $underlyingName 资源包在队列中的名字。
    *
    * @return $this
    */
    public function setUnderlyingName($underlyingName)
    {
        $this->container['underlyingName'] = $underlyingName;
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

