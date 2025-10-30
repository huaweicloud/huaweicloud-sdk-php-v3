<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释** 卷备份ID **取值范围** 字符长度0-65535位
    * name  **参数解释** 磁盘备份名称 **取值范围** 字符长度0-65535位
    * imageType  **参数解释** 备份类型 **取值范围** 字符长度0-65535位
    * vaultId  **参数解释** 备份所在的存储库ID **取值范围** 字符长度0-65535位
    * status  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    * resourceSize  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    * resourceId  **参数解释** 资源ID 对应host主机ID **取值范围** 字符长度0-65535位
    * resourceType  **参数解释** 资源类型 **取值范围** 字符长度0-65535位
    * resourceName  **参数解释** 资源名称 对应host主机名称 **取值范围** 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'imageType' => 'string',
            'vaultId' => 'string',
            'status' => 'string',
            'resourceSize' => 'int',
            'resourceId' => 'string',
            'resourceType' => 'string',
            'resourceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释** 卷备份ID **取值范围** 字符长度0-65535位
    * name  **参数解释** 磁盘备份名称 **取值范围** 字符长度0-65535位
    * imageType  **参数解释** 备份类型 **取值范围** 字符长度0-65535位
    * vaultId  **参数解释** 备份所在的存储库ID **取值范围** 字符长度0-65535位
    * status  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    * resourceSize  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    * resourceId  **参数解释** 资源ID 对应host主机ID **取值范围** 字符长度0-65535位
    * resourceType  **参数解释** 资源类型 **取值范围** 字符长度0-65535位
    * resourceName  **参数解释** 资源名称 对应host主机名称 **取值范围** 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'imageType' => null,
        'vaultId' => null,
        'status' => null,
        'resourceSize' => 'int32',
        'resourceId' => null,
        'resourceType' => null,
        'resourceName' => null
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
    * id  **参数解释** 卷备份ID **取值范围** 字符长度0-65535位
    * name  **参数解释** 磁盘备份名称 **取值范围** 字符长度0-65535位
    * imageType  **参数解释** 备份类型 **取值范围** 字符长度0-65535位
    * vaultId  **参数解释** 备份所在的存储库ID **取值范围** 字符长度0-65535位
    * status  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    * resourceSize  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    * resourceId  **参数解释** 资源ID 对应host主机ID **取值范围** 字符长度0-65535位
    * resourceType  **参数解释** 资源类型 **取值范围** 字符长度0-65535位
    * resourceName  **参数解释** 资源名称 对应host主机名称 **取值范围** 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'imageType' => 'image_type',
            'vaultId' => 'vault_id',
            'status' => 'status',
            'resourceSize' => 'resource_size',
            'resourceId' => 'resource_id',
            'resourceType' => 'resource_type',
            'resourceName' => 'resource_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释** 卷备份ID **取值范围** 字符长度0-65535位
    * name  **参数解释** 磁盘备份名称 **取值范围** 字符长度0-65535位
    * imageType  **参数解释** 备份类型 **取值范围** 字符长度0-65535位
    * vaultId  **参数解释** 备份所在的存储库ID **取值范围** 字符长度0-65535位
    * status  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    * resourceSize  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    * resourceId  **参数解释** 资源ID 对应host主机ID **取值范围** 字符长度0-65535位
    * resourceType  **参数解释** 资源类型 **取值范围** 字符长度0-65535位
    * resourceName  **参数解释** 资源名称 对应host主机名称 **取值范围** 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'imageType' => 'setImageType',
            'vaultId' => 'setVaultId',
            'status' => 'setStatus',
            'resourceSize' => 'setResourceSize',
            'resourceId' => 'setResourceId',
            'resourceType' => 'setResourceType',
            'resourceName' => 'setResourceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释** 卷备份ID **取值范围** 字符长度0-65535位
    * name  **参数解释** 磁盘备份名称 **取值范围** 字符长度0-65535位
    * imageType  **参数解释** 备份类型 **取值范围** 字符长度0-65535位
    * vaultId  **参数解释** 备份所在的存储库ID **取值范围** 字符长度0-65535位
    * status  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    * resourceSize  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    * resourceId  **参数解释** 资源ID 对应host主机ID **取值范围** 字符长度0-65535位
    * resourceType  **参数解释** 资源类型 **取值范围** 字符长度0-65535位
    * resourceName  **参数解释** 资源名称 对应host主机名称 **取值范围** 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'imageType' => 'getImageType',
            'vaultId' => 'getVaultId',
            'status' => 'getStatus',
            'resourceSize' => 'getResourceSize',
            'resourceId' => 'getResourceId',
            'resourceType' => 'getResourceType',
            'resourceName' => 'getResourceName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 65535)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 65535)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 65535)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceSize']) && ($this->container['resourceSize'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['resourceSize']) && ($this->container['resourceSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 65535)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  **参数解释** 卷备份ID **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释** 卷备份ID **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释** 磁盘备份名称 **取值范围** 字符长度0-65535位
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
    * @param string|null $name **参数解释** 磁盘备份名称 **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释** 备份类型 **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType **参数解释** 备份类型 **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets vaultId
    *  **参数解释** 备份所在的存储库ID **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string|null $vaultId **参数解释** 备份所在的存储库ID **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释** 备份状态 **取值范围** 字符长度0-65535位
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
    * @param string|null $status **参数解释** 备份状态 **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets resourceSize
    *  **参数解释** 创建时间 **取值范围** 取值0-2147483647
    *
    * @return int|null
    */
    public function getResourceSize()
    {
        return $this->container['resourceSize'];
    }

    /**
    * Sets resourceSize
    *
    * @param int|null $resourceSize **参数解释** 创建时间 **取值范围** 取值0-2147483647
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释** 资源ID 对应host主机ID **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释** 资源ID 对应host主机ID **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceType
    *  **参数解释** 资源类型 **取值范围** 字符长度0-65535位
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType **参数解释** 资源类型 **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceName
    *  **参数解释** 资源名称 对应host主机名称 **取值范围** 字符长度0-65535位
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
    * @param string|null $resourceName **参数解释** 资源名称 对应host主机名称 **取值范围** 字符长度0-65535位
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
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

