<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadJarsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadJarsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  \"UPLOADING\"表示正在上传。 \"READY\"表示模块包已上传。 \"FAILED\"表示模块包上传失败。
    * description  资源模块描述。
    * resources  该资源模块包含的资源包名列表。
    * createTime  资源模块上传的unix时间戳。
    * updateTime  资源模块更新的unix时间戳。
    * groupName  模块名。
    * owner  资源包拥有者
    * isAsync  是否使用异步方式上传资源包。默认值为“false”，表示不使用异步方式。推荐使用异步方式上传资源包。
    * details  分组资源包的详细信息
    * moduleName  资源模块名
    * moduleType  资源模块类型。jar:用户jar文件;pyFile:用户python文件;file:用户文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'description' => 'string',
            'resources' => 'string[]',
            'createTime' => 'int',
            'updateTime' => 'int',
            'groupName' => 'string',
            'owner' => 'string',
            'isAsync' => 'bool',
            'details' => '\HuaweiCloud\SDK\Dli\V1\Model\UploadPackageGroupDetailsResp[]',
            'moduleName' => 'string',
            'moduleType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  \"UPLOADING\"表示正在上传。 \"READY\"表示模块包已上传。 \"FAILED\"表示模块包上传失败。
    * description  资源模块描述。
    * resources  该资源模块包含的资源包名列表。
    * createTime  资源模块上传的unix时间戳。
    * updateTime  资源模块更新的unix时间戳。
    * groupName  模块名。
    * owner  资源包拥有者
    * isAsync  是否使用异步方式上传资源包。默认值为“false”，表示不使用异步方式。推荐使用异步方式上传资源包。
    * details  分组资源包的详细信息
    * moduleName  资源模块名
    * moduleType  资源模块类型。jar:用户jar文件;pyFile:用户python文件;file:用户文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'description' => null,
        'resources' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'groupName' => null,
        'owner' => null,
        'isAsync' => null,
        'details' => null,
        'moduleName' => null,
        'moduleType' => null
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
    * status  \"UPLOADING\"表示正在上传。 \"READY\"表示模块包已上传。 \"FAILED\"表示模块包上传失败。
    * description  资源模块描述。
    * resources  该资源模块包含的资源包名列表。
    * createTime  资源模块上传的unix时间戳。
    * updateTime  资源模块更新的unix时间戳。
    * groupName  模块名。
    * owner  资源包拥有者
    * isAsync  是否使用异步方式上传资源包。默认值为“false”，表示不使用异步方式。推荐使用异步方式上传资源包。
    * details  分组资源包的详细信息
    * moduleName  资源模块名
    * moduleType  资源模块类型。jar:用户jar文件;pyFile:用户python文件;file:用户文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'description' => 'description',
            'resources' => 'resources',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'groupName' => 'group_name',
            'owner' => 'owner',
            'isAsync' => 'is_async',
            'details' => 'details',
            'moduleName' => 'module_name',
            'moduleType' => 'module_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  \"UPLOADING\"表示正在上传。 \"READY\"表示模块包已上传。 \"FAILED\"表示模块包上传失败。
    * description  资源模块描述。
    * resources  该资源模块包含的资源包名列表。
    * createTime  资源模块上传的unix时间戳。
    * updateTime  资源模块更新的unix时间戳。
    * groupName  模块名。
    * owner  资源包拥有者
    * isAsync  是否使用异步方式上传资源包。默认值为“false”，表示不使用异步方式。推荐使用异步方式上传资源包。
    * details  分组资源包的详细信息
    * moduleName  资源模块名
    * moduleType  资源模块类型。jar:用户jar文件;pyFile:用户python文件;file:用户文件
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'description' => 'setDescription',
            'resources' => 'setResources',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'groupName' => 'setGroupName',
            'owner' => 'setOwner',
            'isAsync' => 'setIsAsync',
            'details' => 'setDetails',
            'moduleName' => 'setModuleName',
            'moduleType' => 'setModuleType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  \"UPLOADING\"表示正在上传。 \"READY\"表示模块包已上传。 \"FAILED\"表示模块包上传失败。
    * description  资源模块描述。
    * resources  该资源模块包含的资源包名列表。
    * createTime  资源模块上传的unix时间戳。
    * updateTime  资源模块更新的unix时间戳。
    * groupName  模块名。
    * owner  资源包拥有者
    * isAsync  是否使用异步方式上传资源包。默认值为“false”，表示不使用异步方式。推荐使用异步方式上传资源包。
    * details  分组资源包的详细信息
    * moduleName  资源模块名
    * moduleType  资源模块类型。jar:用户jar文件;pyFile:用户python文件;file:用户文件
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'description' => 'getDescription',
            'resources' => 'getResources',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'groupName' => 'getGroupName',
            'owner' => 'getOwner',
            'isAsync' => 'getIsAsync',
            'details' => 'getDetails',
            'moduleName' => 'getModuleName',
            'moduleType' => 'getModuleType'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['isAsync'] = isset($data['isAsync']) ? $data['isAsync'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['moduleType'] = isset($data['moduleType']) ? $data['moduleType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets status
    *  \"UPLOADING\"表示正在上传。 \"READY\"表示模块包已上传。 \"FAILED\"表示模块包上传失败。
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
    * @param string|null $status \"UPLOADING\"表示正在上传。 \"READY\"表示模块包已上传。 \"FAILED\"表示模块包上传失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  资源模块描述。
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
    * @param string|null $description 资源模块描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets resources
    *  该资源模块包含的资源包名列表。
    *
    * @return string[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param string[]|null $resources 该资源模块包含的资源包名列表。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets createTime
    *  资源模块上传的unix时间戳。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 资源模块上传的unix时间戳。
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
    *  资源模块更新的unix时间戳。
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
    * @param int|null $updateTime 资源模块更新的unix时间戳。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets groupName
    *  模块名。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 模块名。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets owner
    *  资源包拥有者
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 资源包拥有者
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets isAsync
    *  是否使用异步方式上传资源包。默认值为“false”，表示不使用异步方式。推荐使用异步方式上传资源包。
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
    * @param bool|null $isAsync 是否使用异步方式上传资源包。默认值为“false”，表示不使用异步方式。推荐使用异步方式上传资源包。
    *
    * @return $this
    */
    public function setIsAsync($isAsync)
    {
        $this->container['isAsync'] = $isAsync;
        return $this;
    }

    /**
    * Gets details
    *  分组资源包的详细信息
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\UploadPackageGroupDetailsResp[]|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\UploadPackageGroupDetailsResp[]|null $details 分组资源包的详细信息
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
        return $this;
    }

    /**
    * Gets moduleName
    *  资源模块名
    *
    * @return string|null
    */
    public function getModuleName()
    {
        return $this->container['moduleName'];
    }

    /**
    * Sets moduleName
    *
    * @param string|null $moduleName 资源模块名
    *
    * @return $this
    */
    public function setModuleName($moduleName)
    {
        $this->container['moduleName'] = $moduleName;
        return $this;
    }

    /**
    * Gets moduleType
    *  资源模块类型。jar:用户jar文件;pyFile:用户python文件;file:用户文件
    *
    * @return string|null
    */
    public function getModuleType()
    {
        return $this->container['moduleType'];
    }

    /**
    * Sets moduleType
    *
    * @param string|null $moduleType 资源模块类型。jar:用户jar文件;pyFile:用户python文件;file:用户文件
    *
    * @return $this
    */
    public function setModuleType($moduleType)
    {
        $this->container['moduleType'] = $moduleType;
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

