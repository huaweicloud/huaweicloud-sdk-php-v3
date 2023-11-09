<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编号
    * name  名称
    * remark  描述
    * creator  APP的创建者 - USER：用户自行创建 - MARKET：云商店分配  暂不支持MARKET
    * updateTime  更新时间
    * appKey  APP的key
    * appSecret  密钥
    * registerTime  注册时间
    * status  状态   - 1： 有效
    * appType  APP的类型： - apig：存量apig应用，不推荐使用 - roma：roma集成应用  默认apig，暂不支持其他类型
    * romaAppType  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'remark' => 'string',
            'creator' => 'string',
            'updateTime' => '\DateTime',
            'appKey' => 'string',
            'appSecret' => 'string',
            'registerTime' => '\DateTime',
            'status' => 'int',
            'appType' => 'string',
            'romaAppType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编号
    * name  名称
    * remark  描述
    * creator  APP的创建者 - USER：用户自行创建 - MARKET：云商店分配  暂不支持MARKET
    * updateTime  更新时间
    * appKey  APP的key
    * appSecret  密钥
    * registerTime  注册时间
    * status  状态   - 1： 有效
    * appType  APP的类型： - apig：存量apig应用，不推荐使用 - roma：roma集成应用  默认apig，暂不支持其他类型
    * romaAppType  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'remark' => null,
        'creator' => null,
        'updateTime' => 'date-time',
        'appKey' => null,
        'appSecret' => null,
        'registerTime' => 'date-time',
        'status' => 'int32',
        'appType' => null,
        'romaAppType' => null
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
    * id  编号
    * name  名称
    * remark  描述
    * creator  APP的创建者 - USER：用户自行创建 - MARKET：云商店分配  暂不支持MARKET
    * updateTime  更新时间
    * appKey  APP的key
    * appSecret  密钥
    * registerTime  注册时间
    * status  状态   - 1： 有效
    * appType  APP的类型： - apig：存量apig应用，不推荐使用 - roma：roma集成应用  默认apig，暂不支持其他类型
    * romaAppType  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'remark' => 'remark',
            'creator' => 'creator',
            'updateTime' => 'update_time',
            'appKey' => 'app_key',
            'appSecret' => 'app_secret',
            'registerTime' => 'register_time',
            'status' => 'status',
            'appType' => 'app_type',
            'romaAppType' => 'roma_app_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编号
    * name  名称
    * remark  描述
    * creator  APP的创建者 - USER：用户自行创建 - MARKET：云商店分配  暂不支持MARKET
    * updateTime  更新时间
    * appKey  APP的key
    * appSecret  密钥
    * registerTime  注册时间
    * status  状态   - 1： 有效
    * appType  APP的类型： - apig：存量apig应用，不推荐使用 - roma：roma集成应用  默认apig，暂不支持其他类型
    * romaAppType  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'remark' => 'setRemark',
            'creator' => 'setCreator',
            'updateTime' => 'setUpdateTime',
            'appKey' => 'setAppKey',
            'appSecret' => 'setAppSecret',
            'registerTime' => 'setRegisterTime',
            'status' => 'setStatus',
            'appType' => 'setAppType',
            'romaAppType' => 'setRomaAppType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编号
    * name  名称
    * remark  描述
    * creator  APP的创建者 - USER：用户自行创建 - MARKET：云商店分配  暂不支持MARKET
    * updateTime  更新时间
    * appKey  APP的key
    * appSecret  密钥
    * registerTime  注册时间
    * status  状态   - 1： 有效
    * appType  APP的类型： - apig：存量apig应用，不推荐使用 - roma：roma集成应用  默认apig，暂不支持其他类型
    * romaAppType  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'remark' => 'getRemark',
            'creator' => 'getCreator',
            'updateTime' => 'getUpdateTime',
            'appKey' => 'getAppKey',
            'appSecret' => 'getAppSecret',
            'registerTime' => 'getRegisterTime',
            'status' => 'getStatus',
            'appType' => 'getAppType',
            'romaAppType' => 'getRomaAppType'
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
    const CREATOR_USER = 'USER';
    const CREATOR_MARKET = 'MARKET';
    const STATUS_1 = 1;
    const APP_TYPE_APIG = 'apig';
    const APP_TYPE_ROMA = 'roma';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCreatorAllowableValues()
    {
        return [
            self::CREATOR_USER,
            self::CREATOR_MARKET,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAppTypeAllowableValues()
    {
        return [
            self::APP_TYPE_APIG,
            self::APP_TYPE_ROMA,
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
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['appSecret'] = isset($data['appSecret']) ? $data['appSecret'] : null;
        $this->container['registerTime'] = isset($data['registerTime']) ? $data['registerTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['romaAppType'] = isset($data['romaAppType']) ? $data['romaAppType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCreatorAllowableValues();
                if (!is_null($this->container['creator']) && !in_array($this->container['creator'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'creator', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAppTypeAllowableValues();
                if (!is_null($this->container['appType']) && !in_array($this->container['appType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'appType', must be one of '%s'",
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
    *  编号
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
    * @param string|null $id 编号
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
    * Gets remark
    *  描述
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
    * @param string|null $remark 描述
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets creator
    *  APP的创建者 - USER：用户自行创建 - MARKET：云商店分配  暂不支持MARKET
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator APP的创建者 - USER：用户自行创建 - MARKET：云商店分配  暂不支持MARKET
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
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
    * Gets appKey
    *  APP的key
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
    * @param string|null $appKey APP的key
    *
    * @return $this
    */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;
        return $this;
    }

    /**
    * Gets appSecret
    *  密钥
    *
    * @return string|null
    */
    public function getAppSecret()
    {
        return $this->container['appSecret'];
    }

    /**
    * Sets appSecret
    *
    * @param string|null $appSecret 密钥
    *
    * @return $this
    */
    public function setAppSecret($appSecret)
    {
        $this->container['appSecret'] = $appSecret;
        return $this;
    }

    /**
    * Gets registerTime
    *  注册时间
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
    * @param \DateTime|null $registerTime 注册时间
    *
    * @return $this
    */
    public function setRegisterTime($registerTime)
    {
        $this->container['registerTime'] = $registerTime;
        return $this;
    }

    /**
    * Gets status
    *  状态   - 1： 有效
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
    * @param int|null $status 状态   - 1： 有效
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets appType
    *  APP的类型： - apig：存量apig应用，不推荐使用 - roma：roma集成应用  默认apig，暂不支持其他类型
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType APP的类型： - apig：存量apig应用，不推荐使用 - roma：roma集成应用  默认apig，暂不支持其他类型
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets romaAppType
    *  ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    *
    * @return string|null
    */
    public function getRomaAppType()
    {
        return $this->container['romaAppType'];
    }

    /**
    * Sets romaAppType
    *
    * @param string|null $romaAppType ROMA_APP的类型： - subscription：订阅应用 - integration：集成应用  暂不支持
    *
    * @return $this
    */
    public function setRomaAppType($romaAppType)
    {
        $this->container['romaAppType'] = $romaAppType;
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

