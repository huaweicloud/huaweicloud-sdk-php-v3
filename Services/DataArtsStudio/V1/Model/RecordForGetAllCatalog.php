<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordForGetAllCatalog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordForGetAllCatalog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * catalogId  目录编号
    * pid  父目录编号
    * name  名称
    * description  目录描述
    * apiCatalogType  目录类型
    * createTime  创建时间
    * createUser  创建者
    * updateTime  更新时间
    * updateUser  更新者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'catalogId' => 'string',
            'pid' => 'string',
            'name' => 'string',
            'description' => 'string',
            'apiCatalogType' => 'string',
            'createTime' => 'int',
            'createUser' => 'string',
            'updateTime' => 'int',
            'updateUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * catalogId  目录编号
    * pid  父目录编号
    * name  名称
    * description  目录描述
    * apiCatalogType  目录类型
    * createTime  创建时间
    * createUser  创建者
    * updateTime  更新时间
    * updateUser  更新者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'catalogId' => null,
        'pid' => null,
        'name' => null,
        'description' => null,
        'apiCatalogType' => null,
        'createTime' => 'int64',
        'createUser' => null,
        'updateTime' => 'int64',
        'updateUser' => null
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
    * catalogId  目录编号
    * pid  父目录编号
    * name  名称
    * description  目录描述
    * apiCatalogType  目录类型
    * createTime  创建时间
    * createUser  创建者
    * updateTime  更新时间
    * updateUser  更新者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'catalogId' => 'catalog_id',
            'pid' => 'pid',
            'name' => 'name',
            'description' => 'description',
            'apiCatalogType' => 'api_catalog_type',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * catalogId  目录编号
    * pid  父目录编号
    * name  名称
    * description  目录描述
    * apiCatalogType  目录类型
    * createTime  创建时间
    * createUser  创建者
    * updateTime  更新时间
    * updateUser  更新者
    *
    * @var string[]
    */
    protected static $setters = [
            'catalogId' => 'setCatalogId',
            'pid' => 'setPid',
            'name' => 'setName',
            'description' => 'setDescription',
            'apiCatalogType' => 'setApiCatalogType',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * catalogId  目录编号
    * pid  父目录编号
    * name  名称
    * description  目录描述
    * apiCatalogType  目录类型
    * createTime  创建时间
    * createUser  创建者
    * updateTime  更新时间
    * updateUser  更新者
    *
    * @var string[]
    */
    protected static $getters = [
            'catalogId' => 'getCatalogId',
            'pid' => 'getPid',
            'name' => 'getName',
            'description' => 'getDescription',
            'apiCatalogType' => 'getApiCatalogType',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser'
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
    const API_CATALOG_TYPE_CATALOG = 'CATALOG';
    const API_CATALOG_TYPE_API = 'API';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiCatalogTypeAllowableValues()
    {
        return [
            self::API_CATALOG_TYPE_CATALOG,
            self::API_CATALOG_TYPE_API,
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
        $this->container['catalogId'] = isset($data['catalogId']) ? $data['catalogId'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['apiCatalogType'] = isset($data['apiCatalogType']) ? $data['apiCatalogType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getApiCatalogTypeAllowableValues();
                if (!is_null($this->container['apiCatalogType']) && !in_array($this->container['apiCatalogType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiCatalogType', must be one of '%s'",
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
    * Gets catalogId
    *  目录编号
    *
    * @return string|null
    */
    public function getCatalogId()
    {
        return $this->container['catalogId'];
    }

    /**
    * Sets catalogId
    *
    * @param string|null $catalogId 目录编号
    *
    * @return $this
    */
    public function setCatalogId($catalogId)
    {
        $this->container['catalogId'] = $catalogId;
        return $this;
    }

    /**
    * Gets pid
    *  父目录编号
    *
    * @return string|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param string|null $pid 父目录编号
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  目录描述
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
    * @param string|null $description 目录描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets apiCatalogType
    *  目录类型
    *
    * @return string|null
    */
    public function getApiCatalogType()
    {
        return $this->container['apiCatalogType'];
    }

    /**
    * Sets apiCatalogType
    *
    * @param string|null $apiCatalogType 目录类型
    *
    * @return $this
    */
    public function setApiCatalogType($apiCatalogType)
    {
        $this->container['apiCatalogType'] = $apiCatalogType;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createUser
    *  创建者
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建者
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
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
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateUser
    *  更新者
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 更新者
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
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

