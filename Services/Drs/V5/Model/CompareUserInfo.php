<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareUserInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareUserInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * srcUserName  源数据库账号名称
    * tarUserName  目标数据库账号名称
    * srcPrivileges  源数据库账号权限
    * tarPrivileges  目标数据库账号权限
    * isTargetExisted  目标端是否存在，取值： - false：不存在 - true：存在
    * compareResult  对比结果，取值： - INCONSISTENT：不一致 - UNABLE_TO_COMPARE：无法比对 - CONSISTENT：一致 - TARGET_SCHEMA_NOT_EXIST：目标库不存在 - COMPARE_FAILED：比对失败 - COMPARING：比对中 - WAITING_COMPARE：等待比对 - UNKNOWN：未知错误
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'srcUserName' => 'string',
            'tarUserName' => 'string',
            'srcPrivileges' => 'string',
            'tarPrivileges' => 'string',
            'isTargetExisted' => 'bool',
            'compareResult' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * srcUserName  源数据库账号名称
    * tarUserName  目标数据库账号名称
    * srcPrivileges  源数据库账号权限
    * tarPrivileges  目标数据库账号权限
    * isTargetExisted  目标端是否存在，取值： - false：不存在 - true：存在
    * compareResult  对比结果，取值： - INCONSISTENT：不一致 - UNABLE_TO_COMPARE：无法比对 - CONSISTENT：一致 - TARGET_SCHEMA_NOT_EXIST：目标库不存在 - COMPARE_FAILED：比对失败 - COMPARING：比对中 - WAITING_COMPARE：等待比对 - UNKNOWN：未知错误
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'srcUserName' => null,
        'tarUserName' => null,
        'srcPrivileges' => null,
        'tarPrivileges' => null,
        'isTargetExisted' => null,
        'compareResult' => 'int32',
        'createdAt' => null,
        'updatedAt' => null
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
    * id  id
    * srcUserName  源数据库账号名称
    * tarUserName  目标数据库账号名称
    * srcPrivileges  源数据库账号权限
    * tarPrivileges  目标数据库账号权限
    * isTargetExisted  目标端是否存在，取值： - false：不存在 - true：存在
    * compareResult  对比结果，取值： - INCONSISTENT：不一致 - UNABLE_TO_COMPARE：无法比对 - CONSISTENT：一致 - TARGET_SCHEMA_NOT_EXIST：目标库不存在 - COMPARE_FAILED：比对失败 - COMPARING：比对中 - WAITING_COMPARE：等待比对 - UNKNOWN：未知错误
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'srcUserName' => 'src_user_name',
            'tarUserName' => 'tar_user_name',
            'srcPrivileges' => 'src_privileges',
            'tarPrivileges' => 'tar_privileges',
            'isTargetExisted' => 'is_target_existed',
            'compareResult' => 'compare_result',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * srcUserName  源数据库账号名称
    * tarUserName  目标数据库账号名称
    * srcPrivileges  源数据库账号权限
    * tarPrivileges  目标数据库账号权限
    * isTargetExisted  目标端是否存在，取值： - false：不存在 - true：存在
    * compareResult  对比结果，取值： - INCONSISTENT：不一致 - UNABLE_TO_COMPARE：无法比对 - CONSISTENT：一致 - TARGET_SCHEMA_NOT_EXIST：目标库不存在 - COMPARE_FAILED：比对失败 - COMPARING：比对中 - WAITING_COMPARE：等待比对 - UNKNOWN：未知错误
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'srcUserName' => 'setSrcUserName',
            'tarUserName' => 'setTarUserName',
            'srcPrivileges' => 'setSrcPrivileges',
            'tarPrivileges' => 'setTarPrivileges',
            'isTargetExisted' => 'setIsTargetExisted',
            'compareResult' => 'setCompareResult',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * srcUserName  源数据库账号名称
    * tarUserName  目标数据库账号名称
    * srcPrivileges  源数据库账号权限
    * tarPrivileges  目标数据库账号权限
    * isTargetExisted  目标端是否存在，取值： - false：不存在 - true：存在
    * compareResult  对比结果，取值： - INCONSISTENT：不一致 - UNABLE_TO_COMPARE：无法比对 - CONSISTENT：一致 - TARGET_SCHEMA_NOT_EXIST：目标库不存在 - COMPARE_FAILED：比对失败 - COMPARING：比对中 - WAITING_COMPARE：等待比对 - UNKNOWN：未知错误
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'srcUserName' => 'getSrcUserName',
            'tarUserName' => 'getTarUserName',
            'srcPrivileges' => 'getSrcPrivileges',
            'tarPrivileges' => 'getTarPrivileges',
            'isTargetExisted' => 'getIsTargetExisted',
            'compareResult' => 'getCompareResult',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['srcUserName'] = isset($data['srcUserName']) ? $data['srcUserName'] : null;
        $this->container['tarUserName'] = isset($data['tarUserName']) ? $data['tarUserName'] : null;
        $this->container['srcPrivileges'] = isset($data['srcPrivileges']) ? $data['srcPrivileges'] : null;
        $this->container['tarPrivileges'] = isset($data['tarPrivileges']) ? $data['tarPrivileges'] : null;
        $this->container['isTargetExisted'] = isset($data['isTargetExisted']) ? $data['isTargetExisted'] : null;
        $this->container['compareResult'] = isset($data['compareResult']) ? $data['compareResult'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['srcUserName'] === null) {
            $invalidProperties[] = "'srcUserName' can't be null";
        }
        if ($this->container['tarUserName'] === null) {
            $invalidProperties[] = "'tarUserName' can't be null";
        }
        if ($this->container['srcPrivileges'] === null) {
            $invalidProperties[] = "'srcPrivileges' can't be null";
        }
        if ($this->container['tarPrivileges'] === null) {
            $invalidProperties[] = "'tarPrivileges' can't be null";
        }
        if ($this->container['isTargetExisted'] === null) {
            $invalidProperties[] = "'isTargetExisted' can't be null";
        }
        if ($this->container['compareResult'] === null) {
            $invalidProperties[] = "'compareResult' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    *  id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets srcUserName
    *  源数据库账号名称
    *
    * @return string
    */
    public function getSrcUserName()
    {
        return $this->container['srcUserName'];
    }

    /**
    * Sets srcUserName
    *
    * @param string $srcUserName 源数据库账号名称
    *
    * @return $this
    */
    public function setSrcUserName($srcUserName)
    {
        $this->container['srcUserName'] = $srcUserName;
        return $this;
    }

    /**
    * Gets tarUserName
    *  目标数据库账号名称
    *
    * @return string
    */
    public function getTarUserName()
    {
        return $this->container['tarUserName'];
    }

    /**
    * Sets tarUserName
    *
    * @param string $tarUserName 目标数据库账号名称
    *
    * @return $this
    */
    public function setTarUserName($tarUserName)
    {
        $this->container['tarUserName'] = $tarUserName;
        return $this;
    }

    /**
    * Gets srcPrivileges
    *  源数据库账号权限
    *
    * @return string
    */
    public function getSrcPrivileges()
    {
        return $this->container['srcPrivileges'];
    }

    /**
    * Sets srcPrivileges
    *
    * @param string $srcPrivileges 源数据库账号权限
    *
    * @return $this
    */
    public function setSrcPrivileges($srcPrivileges)
    {
        $this->container['srcPrivileges'] = $srcPrivileges;
        return $this;
    }

    /**
    * Gets tarPrivileges
    *  目标数据库账号权限
    *
    * @return string
    */
    public function getTarPrivileges()
    {
        return $this->container['tarPrivileges'];
    }

    /**
    * Sets tarPrivileges
    *
    * @param string $tarPrivileges 目标数据库账号权限
    *
    * @return $this
    */
    public function setTarPrivileges($tarPrivileges)
    {
        $this->container['tarPrivileges'] = $tarPrivileges;
        return $this;
    }

    /**
    * Gets isTargetExisted
    *  目标端是否存在，取值： - false：不存在 - true：存在
    *
    * @return bool
    */
    public function getIsTargetExisted()
    {
        return $this->container['isTargetExisted'];
    }

    /**
    * Sets isTargetExisted
    *
    * @param bool $isTargetExisted 目标端是否存在，取值： - false：不存在 - true：存在
    *
    * @return $this
    */
    public function setIsTargetExisted($isTargetExisted)
    {
        $this->container['isTargetExisted'] = $isTargetExisted;
        return $this;
    }

    /**
    * Gets compareResult
    *  对比结果，取值： - INCONSISTENT：不一致 - UNABLE_TO_COMPARE：无法比对 - CONSISTENT：一致 - TARGET_SCHEMA_NOT_EXIST：目标库不存在 - COMPARE_FAILED：比对失败 - COMPARING：比对中 - WAITING_COMPARE：等待比对 - UNKNOWN：未知错误
    *
    * @return int
    */
    public function getCompareResult()
    {
        return $this->container['compareResult'];
    }

    /**
    * Sets compareResult
    *
    * @param int $compareResult 对比结果，取值： - INCONSISTENT：不一致 - UNABLE_TO_COMPARE：无法比对 - CONSISTENT：一致 - TARGET_SCHEMA_NOT_EXIST：目标库不存在 - COMPARE_FAILED：比对失败 - COMPARING：比对中 - WAITING_COMPARE：等待比对 - UNKNOWN：未知错误
    *
    * @return $this
    */
    public function setCompareResult($compareResult)
    {
        $this->container['compareResult'] = $compareResult;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

