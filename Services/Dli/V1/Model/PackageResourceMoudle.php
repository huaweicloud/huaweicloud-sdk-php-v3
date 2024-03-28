<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PackageResourceMoudle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PackageResourceMoudle';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * moduleName  模块名。
    * moduleType  模块类型。
    * status  \"UPLOADING\"表示正在上传 \"READY\"表示模块包已上传 \"FAILED\"表示模块包上传失败
    * description  模块描述。
    * resources  该模块包含的资源包名列表。
    * createTime  模块上传的unix时间。
    * updateTime  模块更新的unix时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'moduleName' => 'string',
            'moduleType' => 'string',
            'status' => 'string',
            'description' => 'string',
            'resources' => 'string[]',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * moduleName  模块名。
    * moduleType  模块类型。
    * status  \"UPLOADING\"表示正在上传 \"READY\"表示模块包已上传 \"FAILED\"表示模块包上传失败
    * description  模块描述。
    * resources  该模块包含的资源包名列表。
    * createTime  模块上传的unix时间。
    * updateTime  模块更新的unix时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'moduleName' => null,
        'moduleType' => null,
        'status' => null,
        'description' => null,
        'resources' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * moduleName  模块名。
    * moduleType  模块类型。
    * status  \"UPLOADING\"表示正在上传 \"READY\"表示模块包已上传 \"FAILED\"表示模块包上传失败
    * description  模块描述。
    * resources  该模块包含的资源包名列表。
    * createTime  模块上传的unix时间。
    * updateTime  模块更新的unix时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'moduleName' => 'module_name',
            'moduleType' => 'module_type',
            'status' => 'status',
            'description' => 'description',
            'resources' => 'resources',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * moduleName  模块名。
    * moduleType  模块类型。
    * status  \"UPLOADING\"表示正在上传 \"READY\"表示模块包已上传 \"FAILED\"表示模块包上传失败
    * description  模块描述。
    * resources  该模块包含的资源包名列表。
    * createTime  模块上传的unix时间。
    * updateTime  模块更新的unix时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'moduleName' => 'setModuleName',
            'moduleType' => 'setModuleType',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'resources' => 'setResources',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * moduleName  模块名。
    * moduleType  模块类型。
    * status  \"UPLOADING\"表示正在上传 \"READY\"表示模块包已上传 \"FAILED\"表示模块包上传失败
    * description  模块描述。
    * resources  该模块包含的资源包名列表。
    * createTime  模块上传的unix时间。
    * updateTime  模块更新的unix时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'moduleName' => 'getModuleName',
            'moduleType' => 'getModuleType',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'resources' => 'getResources',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['moduleName'] = isset($data['moduleName']) ? $data['moduleName'] : null;
        $this->container['moduleType'] = isset($data['moduleType']) ? $data['moduleType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    * Gets moduleName
    *  模块名。
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
    * @param string|null $moduleName 模块名。
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
    *  模块类型。
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
    * @param string|null $moduleType 模块类型。
    *
    * @return $this
    */
    public function setModuleType($moduleType)
    {
        $this->container['moduleType'] = $moduleType;
        return $this;
    }

    /**
    * Gets status
    *  \"UPLOADING\"表示正在上传 \"READY\"表示模块包已上传 \"FAILED\"表示模块包上传失败
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
    * @param string|null $status \"UPLOADING\"表示正在上传 \"READY\"表示模块包已上传 \"FAILED\"表示模块包上传失败
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
    *  模块描述。
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
    * @param string|null $description 模块描述。
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
    *  该模块包含的资源包名列表。
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
    * @param string[]|null $resources 该模块包含的资源包名列表。
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
    *  模块上传的unix时间。
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
    * @param int|null $createTime 模块上传的unix时间。
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
    *  模块更新的unix时间。
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
    * @param int|null $updateTime 模块更新的unix时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

