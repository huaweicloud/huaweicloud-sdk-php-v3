<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppQuotaAppInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppQuotaAppInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  凭据编号
    * name  凭据名称
    * status  凭据状态： - 1：启用 - 2：禁用
    * appKey  凭据的Key
    * remark  凭据描述
    * registerTime  创建时间
    * updateTime  更新时间
    * appQuotaId  凭据配额编号
    * appQuotaName  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    * boundTime  绑定时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'name' => 'string',
            'status' => 'int',
            'appKey' => 'string',
            'remark' => 'string',
            'registerTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'appQuotaId' => 'string',
            'appQuotaName' => 'string',
            'boundTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  凭据编号
    * name  凭据名称
    * status  凭据状态： - 1：启用 - 2：禁用
    * appKey  凭据的Key
    * remark  凭据描述
    * registerTime  创建时间
    * updateTime  更新时间
    * appQuotaId  凭据配额编号
    * appQuotaName  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    * boundTime  绑定时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'name' => null,
        'status' => null,
        'appKey' => null,
        'remark' => null,
        'registerTime' => 'date-time',
        'updateTime' => 'date-time',
        'appQuotaId' => null,
        'appQuotaName' => null,
        'boundTime' => 'date-time'
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
    * appId  凭据编号
    * name  凭据名称
    * status  凭据状态： - 1：启用 - 2：禁用
    * appKey  凭据的Key
    * remark  凭据描述
    * registerTime  创建时间
    * updateTime  更新时间
    * appQuotaId  凭据配额编号
    * appQuotaName  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    * boundTime  绑定时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'name' => 'name',
            'status' => 'status',
            'appKey' => 'app_key',
            'remark' => 'remark',
            'registerTime' => 'register_time',
            'updateTime' => 'update_time',
            'appQuotaId' => 'app_quota_id',
            'appQuotaName' => 'app_quota_name',
            'boundTime' => 'bound_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  凭据编号
    * name  凭据名称
    * status  凭据状态： - 1：启用 - 2：禁用
    * appKey  凭据的Key
    * remark  凭据描述
    * registerTime  创建时间
    * updateTime  更新时间
    * appQuotaId  凭据配额编号
    * appQuotaName  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    * boundTime  绑定时间
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'name' => 'setName',
            'status' => 'setStatus',
            'appKey' => 'setAppKey',
            'remark' => 'setRemark',
            'registerTime' => 'setRegisterTime',
            'updateTime' => 'setUpdateTime',
            'appQuotaId' => 'setAppQuotaId',
            'appQuotaName' => 'setAppQuotaName',
            'boundTime' => 'setBoundTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  凭据编号
    * name  凭据名称
    * status  凭据状态： - 1：启用 - 2：禁用
    * appKey  凭据的Key
    * remark  凭据描述
    * registerTime  创建时间
    * updateTime  更新时间
    * appQuotaId  凭据配额编号
    * appQuotaName  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    * boundTime  绑定时间
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'name' => 'getName',
            'status' => 'getStatus',
            'appKey' => 'getAppKey',
            'remark' => 'getRemark',
            'registerTime' => 'getRegisterTime',
            'updateTime' => 'getUpdateTime',
            'appQuotaId' => 'getAppQuotaId',
            'appQuotaName' => 'getAppQuotaName',
            'boundTime' => 'getBoundTime'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['registerTime'] = isset($data['registerTime']) ? $data['registerTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['appQuotaId'] = isset($data['appQuotaId']) ? $data['appQuotaId'] : null;
        $this->container['appQuotaName'] = isset($data['appQuotaName']) ? $data['appQuotaName'] : null;
        $this->container['boundTime'] = isset($data['boundTime']) ? $data['boundTime'] : null;
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
    * Gets appId
    *  凭据编号
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
    * @param string|null $appId 凭据编号
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets name
    *  凭据名称
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
    * @param string|null $name 凭据名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  凭据状态： - 1：启用 - 2：禁用
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 凭据状态： - 1：启用 - 2：禁用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets appKey
    *  凭据的Key
    *
    * @return string|null
    */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
    * Sets appKey
    *
    * @param string|null $appKey 凭据的Key
    *
    * @return $this
    */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;
        return $this;
    }

    /**
    * Gets remark
    *  凭据描述
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 凭据描述
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets registerTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getRegisterTime()
    {
        return $this->container['registerTime'];
    }

    /**
    * Sets registerTime
    *
    * @param \DateTime|null $registerTime 创建时间
    *
    * @return $this
    */
    public function setRegisterTime($registerTime)
    {
        $this->container['registerTime'] = $registerTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets appQuotaId
    *  凭据配额编号
    *
    * @return string|null
    */
    public function getAppQuotaId()
    {
        return $this->container['appQuotaId'];
    }

    /**
    * Sets appQuotaId
    *
    * @param string|null $appQuotaId 凭据配额编号
    *
    * @return $this
    */
    public function setAppQuotaId($appQuotaId)
    {
        $this->container['appQuotaId'] = $appQuotaId;
        return $this;
    }

    /**
    * Gets appQuotaName
    *  配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    *
    * @return string|null
    */
    public function getAppQuotaName()
    {
        return $this->container['appQuotaName'];
    }

    /**
    * Sets appQuotaName
    *
    * @param string|null $appQuotaName 配额名称。支持汉字，英文，数字，下划线，且只能以英文和汉字开头，3-255字符
    *
    * @return $this
    */
    public function setAppQuotaName($appQuotaName)
    {
        $this->container['appQuotaName'] = $appQuotaName;
        return $this;
    }

    /**
    * Gets boundTime
    *  绑定时间
    *
    * @return \DateTime|null
    */
    public function getBoundTime()
    {
        return $this->container['boundTime'];
    }

    /**
    * Sets boundTime
    *
    * @param \DateTime|null $boundTime 绑定时间
    *
    * @return $this
    */
    public function setBoundTime($boundTime)
    {
        $this->container['boundTime'] = $boundTime;
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

