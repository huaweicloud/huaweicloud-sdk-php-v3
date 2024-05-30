<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdvancedMallApiDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdvancedMallApiDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  API ID。
    * name  API名称。
    * authType  认证类型。
    * applicationNum  授权使用的应用数量。
    * callNum  被调用量。
    * userName  创建者。
    * createTime  创建时间。
    * updateTime  更新时间。
    * isOwner  是否当前空间的API。
    * isAuthorized  是否已被授权。
    * isUpdateRecently  是否最近更新（三天内更新过该API）。
    * isReleaseRecently  是否新品上市（三天内新发布的API）。
    * isHotRecently  是否热销产品（三天内有其他空间用户申请该API）。
    * successRate  7天内调用成功率。
    * failureRate  7天内调用失败率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'authType' => 'string',
            'applicationNum' => 'int',
            'callNum' => 'int',
            'userName' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'isOwner' => 'bool',
            'isAuthorized' => 'bool',
            'isUpdateRecently' => 'bool',
            'isReleaseRecently' => 'bool',
            'isHotRecently' => 'bool',
            'successRate' => 'string',
            'failureRate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  API ID。
    * name  API名称。
    * authType  认证类型。
    * applicationNum  授权使用的应用数量。
    * callNum  被调用量。
    * userName  创建者。
    * createTime  创建时间。
    * updateTime  更新时间。
    * isOwner  是否当前空间的API。
    * isAuthorized  是否已被授权。
    * isUpdateRecently  是否最近更新（三天内更新过该API）。
    * isReleaseRecently  是否新品上市（三天内新发布的API）。
    * isHotRecently  是否热销产品（三天内有其他空间用户申请该API）。
    * successRate  7天内调用成功率。
    * failureRate  7天内调用失败率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'authType' => null,
        'applicationNum' => 'int32',
        'callNum' => 'int32',
        'userName' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'isOwner' => null,
        'isAuthorized' => null,
        'isUpdateRecently' => null,
        'isReleaseRecently' => null,
        'isHotRecently' => null,
        'successRate' => null,
        'failureRate' => null
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
    * id  API ID。
    * name  API名称。
    * authType  认证类型。
    * applicationNum  授权使用的应用数量。
    * callNum  被调用量。
    * userName  创建者。
    * createTime  创建时间。
    * updateTime  更新时间。
    * isOwner  是否当前空间的API。
    * isAuthorized  是否已被授权。
    * isUpdateRecently  是否最近更新（三天内更新过该API）。
    * isReleaseRecently  是否新品上市（三天内新发布的API）。
    * isHotRecently  是否热销产品（三天内有其他空间用户申请该API）。
    * successRate  7天内调用成功率。
    * failureRate  7天内调用失败率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'authType' => 'auth_type',
            'applicationNum' => 'application_num',
            'callNum' => 'call_num',
            'userName' => 'user_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'isOwner' => 'is_owner',
            'isAuthorized' => 'is_authorized',
            'isUpdateRecently' => 'is_update_recently',
            'isReleaseRecently' => 'is_release_recently',
            'isHotRecently' => 'is_hot_recently',
            'successRate' => 'success_rate',
            'failureRate' => 'failure_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  API ID。
    * name  API名称。
    * authType  认证类型。
    * applicationNum  授权使用的应用数量。
    * callNum  被调用量。
    * userName  创建者。
    * createTime  创建时间。
    * updateTime  更新时间。
    * isOwner  是否当前空间的API。
    * isAuthorized  是否已被授权。
    * isUpdateRecently  是否最近更新（三天内更新过该API）。
    * isReleaseRecently  是否新品上市（三天内新发布的API）。
    * isHotRecently  是否热销产品（三天内有其他空间用户申请该API）。
    * successRate  7天内调用成功率。
    * failureRate  7天内调用失败率。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'authType' => 'setAuthType',
            'applicationNum' => 'setApplicationNum',
            'callNum' => 'setCallNum',
            'userName' => 'setUserName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'isOwner' => 'setIsOwner',
            'isAuthorized' => 'setIsAuthorized',
            'isUpdateRecently' => 'setIsUpdateRecently',
            'isReleaseRecently' => 'setIsReleaseRecently',
            'isHotRecently' => 'setIsHotRecently',
            'successRate' => 'setSuccessRate',
            'failureRate' => 'setFailureRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  API ID。
    * name  API名称。
    * authType  认证类型。
    * applicationNum  授权使用的应用数量。
    * callNum  被调用量。
    * userName  创建者。
    * createTime  创建时间。
    * updateTime  更新时间。
    * isOwner  是否当前空间的API。
    * isAuthorized  是否已被授权。
    * isUpdateRecently  是否最近更新（三天内更新过该API）。
    * isReleaseRecently  是否新品上市（三天内新发布的API）。
    * isHotRecently  是否热销产品（三天内有其他空间用户申请该API）。
    * successRate  7天内调用成功率。
    * failureRate  7天内调用失败率。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'authType' => 'getAuthType',
            'applicationNum' => 'getApplicationNum',
            'callNum' => 'getCallNum',
            'userName' => 'getUserName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'isOwner' => 'getIsOwner',
            'isAuthorized' => 'getIsAuthorized',
            'isUpdateRecently' => 'getIsUpdateRecently',
            'isReleaseRecently' => 'getIsReleaseRecently',
            'isHotRecently' => 'getIsHotRecently',
            'successRate' => 'getSuccessRate',
            'failureRate' => 'getFailureRate'
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
    const AUTH_TYPE_APP = 'APP';
    const AUTH_TYPE_IAM = 'IAM';
    const AUTH_TYPE_NONE = 'NONE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_APP,
            self::AUTH_TYPE_IAM,
            self::AUTH_TYPE_NONE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['applicationNum'] = isset($data['applicationNum']) ? $data['applicationNum'] : null;
        $this->container['callNum'] = isset($data['callNum']) ? $data['callNum'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['isOwner'] = isset($data['isOwner']) ? $data['isOwner'] : null;
        $this->container['isAuthorized'] = isset($data['isAuthorized']) ? $data['isAuthorized'] : null;
        $this->container['isUpdateRecently'] = isset($data['isUpdateRecently']) ? $data['isUpdateRecently'] : null;
        $this->container['isReleaseRecently'] = isset($data['isReleaseRecently']) ? $data['isReleaseRecently'] : null;
        $this->container['isHotRecently'] = isset($data['isHotRecently']) ? $data['isHotRecently'] : null;
        $this->container['successRate'] = isset($data['successRate']) ? $data['successRate'] : null;
        $this->container['failureRate'] = isset($data['failureRate']) ? $data['failureRate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAuthTypeAllowableValues();
                if (!is_null($this->container['authType']) && !in_array($this->container['authType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authType', must be one of '%s'",
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
    * Gets id
    *  API ID。
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
    * @param string|null $id API ID。
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
    *  API名称。
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
    * @param string|null $name API名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets authType
    *  认证类型。
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType 认证类型。
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets applicationNum
    *  授权使用的应用数量。
    *
    * @return int|null
    */
    public function getApplicationNum()
    {
        return $this->container['applicationNum'];
    }

    /**
    * Sets applicationNum
    *
    * @param int|null $applicationNum 授权使用的应用数量。
    *
    * @return $this
    */
    public function setApplicationNum($applicationNum)
    {
        $this->container['applicationNum'] = $applicationNum;
        return $this;
    }

    /**
    * Gets callNum
    *  被调用量。
    *
    * @return int|null
    */
    public function getCallNum()
    {
        return $this->container['callNum'];
    }

    /**
    * Sets callNum
    *
    * @param int|null $callNum 被调用量。
    *
    * @return $this
    */
    public function setCallNum($callNum)
    {
        $this->container['callNum'] = $callNum;
        return $this;
    }

    /**
    * Gets userName
    *  创建者。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 创建者。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
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
    * @param int|null $createTime 创建时间。
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
    *  更新时间。
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
    * @param int|null $updateTime 更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets isOwner
    *  是否当前空间的API。
    *
    * @return bool|null
    */
    public function getIsOwner()
    {
        return $this->container['isOwner'];
    }

    /**
    * Sets isOwner
    *
    * @param bool|null $isOwner 是否当前空间的API。
    *
    * @return $this
    */
    public function setIsOwner($isOwner)
    {
        $this->container['isOwner'] = $isOwner;
        return $this;
    }

    /**
    * Gets isAuthorized
    *  是否已被授权。
    *
    * @return bool|null
    */
    public function getIsAuthorized()
    {
        return $this->container['isAuthorized'];
    }

    /**
    * Sets isAuthorized
    *
    * @param bool|null $isAuthorized 是否已被授权。
    *
    * @return $this
    */
    public function setIsAuthorized($isAuthorized)
    {
        $this->container['isAuthorized'] = $isAuthorized;
        return $this;
    }

    /**
    * Gets isUpdateRecently
    *  是否最近更新（三天内更新过该API）。
    *
    * @return bool|null
    */
    public function getIsUpdateRecently()
    {
        return $this->container['isUpdateRecently'];
    }

    /**
    * Sets isUpdateRecently
    *
    * @param bool|null $isUpdateRecently 是否最近更新（三天内更新过该API）。
    *
    * @return $this
    */
    public function setIsUpdateRecently($isUpdateRecently)
    {
        $this->container['isUpdateRecently'] = $isUpdateRecently;
        return $this;
    }

    /**
    * Gets isReleaseRecently
    *  是否新品上市（三天内新发布的API）。
    *
    * @return bool|null
    */
    public function getIsReleaseRecently()
    {
        return $this->container['isReleaseRecently'];
    }

    /**
    * Sets isReleaseRecently
    *
    * @param bool|null $isReleaseRecently 是否新品上市（三天内新发布的API）。
    *
    * @return $this
    */
    public function setIsReleaseRecently($isReleaseRecently)
    {
        $this->container['isReleaseRecently'] = $isReleaseRecently;
        return $this;
    }

    /**
    * Gets isHotRecently
    *  是否热销产品（三天内有其他空间用户申请该API）。
    *
    * @return bool|null
    */
    public function getIsHotRecently()
    {
        return $this->container['isHotRecently'];
    }

    /**
    * Sets isHotRecently
    *
    * @param bool|null $isHotRecently 是否热销产品（三天内有其他空间用户申请该API）。
    *
    * @return $this
    */
    public function setIsHotRecently($isHotRecently)
    {
        $this->container['isHotRecently'] = $isHotRecently;
        return $this;
    }

    /**
    * Gets successRate
    *  7天内调用成功率。
    *
    * @return string|null
    */
    public function getSuccessRate()
    {
        return $this->container['successRate'];
    }

    /**
    * Sets successRate
    *
    * @param string|null $successRate 7天内调用成功率。
    *
    * @return $this
    */
    public function setSuccessRate($successRate)
    {
        $this->container['successRate'] = $successRate;
        return $this;
    }

    /**
    * Gets failureRate
    *  7天内调用失败率。
    *
    * @return string|null
    */
    public function getFailureRate()
    {
        return $this->container['failureRate'];
    }

    /**
    * Sets failureRate
    *
    * @param string|null $failureRate 7天内调用失败率。
    *
    * @return $this
    */
    public function setFailureRate($failureRate)
    {
        $this->container['failureRate'] = $failureRate;
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

