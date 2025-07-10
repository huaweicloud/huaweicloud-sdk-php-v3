<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddKeystorePermissionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddKeystorePermissionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * delete  是否有删除权限
    * keystoreId  文件密钥id
    * modify  是否有修改权限
    * usage  是否有使用权限
    * userName  用户名
    * setting  是否有设置权限
    * canAbsent  是否可编辑
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'delete' => 'bool',
            'keystoreId' => 'string',
            'modify' => 'bool',
            'usage' => 'bool',
            'userName' => 'string',
            'setting' => 'bool',
            'canAbsent' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * delete  是否有删除权限
    * keystoreId  文件密钥id
    * modify  是否有修改权限
    * usage  是否有使用权限
    * userName  用户名
    * setting  是否有设置权限
    * canAbsent  是否可编辑
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'delete' => null,
        'keystoreId' => null,
        'modify' => null,
        'usage' => null,
        'userName' => null,
        'setting' => null,
        'canAbsent' => null
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
    * delete  是否有删除权限
    * keystoreId  文件密钥id
    * modify  是否有修改权限
    * usage  是否有使用权限
    * userName  用户名
    * setting  是否有设置权限
    * canAbsent  是否可编辑
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'delete' => 'delete',
            'keystoreId' => 'keystore_id',
            'modify' => 'modify',
            'usage' => 'usage',
            'userName' => 'user_name',
            'setting' => 'setting',
            'canAbsent' => 'can_absent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * delete  是否有删除权限
    * keystoreId  文件密钥id
    * modify  是否有修改权限
    * usage  是否有使用权限
    * userName  用户名
    * setting  是否有设置权限
    * canAbsent  是否可编辑
    *
    * @var string[]
    */
    protected static $setters = [
            'delete' => 'setDelete',
            'keystoreId' => 'setKeystoreId',
            'modify' => 'setModify',
            'usage' => 'setUsage',
            'userName' => 'setUserName',
            'setting' => 'setSetting',
            'canAbsent' => 'setCanAbsent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * delete  是否有删除权限
    * keystoreId  文件密钥id
    * modify  是否有修改权限
    * usage  是否有使用权限
    * userName  用户名
    * setting  是否有设置权限
    * canAbsent  是否可编辑
    *
    * @var string[]
    */
    protected static $getters = [
            'delete' => 'getDelete',
            'keystoreId' => 'getKeystoreId',
            'modify' => 'getModify',
            'usage' => 'getUsage',
            'userName' => 'getUserName',
            'setting' => 'getSetting',
            'canAbsent' => 'getCanAbsent'
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
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : null;
        $this->container['keystoreId'] = isset($data['keystoreId']) ? $data['keystoreId'] : null;
        $this->container['modify'] = isset($data['modify']) ? $data['modify'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['setting'] = isset($data['setting']) ? $data['setting'] : null;
        $this->container['canAbsent'] = isset($data['canAbsent']) ? $data['canAbsent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['delete'] === null) {
            $invalidProperties[] = "'delete' can't be null";
        }
        if ($this->container['keystoreId'] === null) {
            $invalidProperties[] = "'keystoreId' can't be null";
        }
        if ($this->container['modify'] === null) {
            $invalidProperties[] = "'modify' can't be null";
        }
        if ($this->container['usage'] === null) {
            $invalidProperties[] = "'usage' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['setting'] === null) {
            $invalidProperties[] = "'setting' can't be null";
        }
        if ($this->container['canAbsent'] === null) {
            $invalidProperties[] = "'canAbsent' can't be null";
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
    * Gets delete
    *  是否有删除权限
    *
    * @return bool
    */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
    * Sets delete
    *
    * @param bool $delete 是否有删除权限
    *
    * @return $this
    */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;
        return $this;
    }

    /**
    * Gets keystoreId
    *  文件密钥id
    *
    * @return string
    */
    public function getKeystoreId()
    {
        return $this->container['keystoreId'];
    }

    /**
    * Sets keystoreId
    *
    * @param string $keystoreId 文件密钥id
    *
    * @return $this
    */
    public function setKeystoreId($keystoreId)
    {
        $this->container['keystoreId'] = $keystoreId;
        return $this;
    }

    /**
    * Gets modify
    *  是否有修改权限
    *
    * @return bool
    */
    public function getModify()
    {
        return $this->container['modify'];
    }

    /**
    * Sets modify
    *
    * @param bool $modify 是否有修改权限
    *
    * @return $this
    */
    public function setModify($modify)
    {
        $this->container['modify'] = $modify;
        return $this;
    }

    /**
    * Gets usage
    *  是否有使用权限
    *
    * @return bool
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param bool $usage 是否有使用权限
    *
    * @return $this
    */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets setting
    *  是否有设置权限
    *
    * @return bool
    */
    public function getSetting()
    {
        return $this->container['setting'];
    }

    /**
    * Sets setting
    *
    * @param bool $setting 是否有设置权限
    *
    * @return $this
    */
    public function setSetting($setting)
    {
        $this->container['setting'] = $setting;
        return $this;
    }

    /**
    * Gets canAbsent
    *  是否可编辑
    *
    * @return bool
    */
    public function getCanAbsent()
    {
        return $this->container['canAbsent'];
    }

    /**
    * Sets canAbsent
    *
    * @param bool $canAbsent 是否可编辑
    *
    * @return $this
    */
    public function setCanAbsent($canAbsent)
    {
        $this->container['canAbsent'] = $canAbsent;
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

