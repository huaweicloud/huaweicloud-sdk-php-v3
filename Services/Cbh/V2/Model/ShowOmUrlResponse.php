<?php

namespace HuaweiCloud\SDK\Cbh\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOmUrlResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOmUrlResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * state  链接获取状态     # SUCCESS(0): 成功；非SUCCESS状态都认为获取失败，需要展示错误代码及description     # IAM_USER_CONFLICT(1016): IAM用户冲突；     # HOST_NOT_MANAGE(1): 查询主机未被纳管；     # HOST_ACCOUNT_NOT_EXIST(553): 主机账户不可用；     # IAM_USER_NO_PERMISSION(901): IAM用户无运维该主机权限；     # CUR_VERSION_NOT_SUPPORT_OPERATION(9001):当前服务版本不支持;     # INS_WHITE_LIST_INITIALIZING(9002):实例白名单正在初始化，请稍后重试;     # UNKNOWN_ERROR(9003):未知错误;
    * description  链接获取异常时说明提示
    * loginUrl  ECS运维登录地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'state' => 'string',
            'description' => 'string',
            'loginUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * state  链接获取状态     # SUCCESS(0): 成功；非SUCCESS状态都认为获取失败，需要展示错误代码及description     # IAM_USER_CONFLICT(1016): IAM用户冲突；     # HOST_NOT_MANAGE(1): 查询主机未被纳管；     # HOST_ACCOUNT_NOT_EXIST(553): 主机账户不可用；     # IAM_USER_NO_PERMISSION(901): IAM用户无运维该主机权限；     # CUR_VERSION_NOT_SUPPORT_OPERATION(9001):当前服务版本不支持;     # INS_WHITE_LIST_INITIALIZING(9002):实例白名单正在初始化，请稍后重试;     # UNKNOWN_ERROR(9003):未知错误;
    * description  链接获取异常时说明提示
    * loginUrl  ECS运维登录地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'state' => null,
        'description' => null,
        'loginUrl' => null
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
    * state  链接获取状态     # SUCCESS(0): 成功；非SUCCESS状态都认为获取失败，需要展示错误代码及description     # IAM_USER_CONFLICT(1016): IAM用户冲突；     # HOST_NOT_MANAGE(1): 查询主机未被纳管；     # HOST_ACCOUNT_NOT_EXIST(553): 主机账户不可用；     # IAM_USER_NO_PERMISSION(901): IAM用户无运维该主机权限；     # CUR_VERSION_NOT_SUPPORT_OPERATION(9001):当前服务版本不支持;     # INS_WHITE_LIST_INITIALIZING(9002):实例白名单正在初始化，请稍后重试;     # UNKNOWN_ERROR(9003):未知错误;
    * description  链接获取异常时说明提示
    * loginUrl  ECS运维登录地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'state' => 'state',
            'description' => 'description',
            'loginUrl' => 'login_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * state  链接获取状态     # SUCCESS(0): 成功；非SUCCESS状态都认为获取失败，需要展示错误代码及description     # IAM_USER_CONFLICT(1016): IAM用户冲突；     # HOST_NOT_MANAGE(1): 查询主机未被纳管；     # HOST_ACCOUNT_NOT_EXIST(553): 主机账户不可用；     # IAM_USER_NO_PERMISSION(901): IAM用户无运维该主机权限；     # CUR_VERSION_NOT_SUPPORT_OPERATION(9001):当前服务版本不支持;     # INS_WHITE_LIST_INITIALIZING(9002):实例白名单正在初始化，请稍后重试;     # UNKNOWN_ERROR(9003):未知错误;
    * description  链接获取异常时说明提示
    * loginUrl  ECS运维登录地址
    *
    * @var string[]
    */
    protected static $setters = [
            'state' => 'setState',
            'description' => 'setDescription',
            'loginUrl' => 'setLoginUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * state  链接获取状态     # SUCCESS(0): 成功；非SUCCESS状态都认为获取失败，需要展示错误代码及description     # IAM_USER_CONFLICT(1016): IAM用户冲突；     # HOST_NOT_MANAGE(1): 查询主机未被纳管；     # HOST_ACCOUNT_NOT_EXIST(553): 主机账户不可用；     # IAM_USER_NO_PERMISSION(901): IAM用户无运维该主机权限；     # CUR_VERSION_NOT_SUPPORT_OPERATION(9001):当前服务版本不支持;     # INS_WHITE_LIST_INITIALIZING(9002):实例白名单正在初始化，请稍后重试;     # UNKNOWN_ERROR(9003):未知错误;
    * description  链接获取异常时说明提示
    * loginUrl  ECS运维登录地址
    *
    * @var string[]
    */
    protected static $getters = [
            'state' => 'getState',
            'description' => 'getDescription',
            'loginUrl' => 'getLoginUrl'
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
    const STATE_SUCCESS = 'SUCCESS';
    const STATE_IAM_USER_CONFLICT = 'IAM_USER_CONFLICT';
    const STATE_HOST_NOT_MANAGE = 'HOST_NOT_MANAGE';
    const STATE_HOST_ACCOUNT_NOT_EXIST = 'HOST_ACCOUNT_NOT_EXIST';
    const STATE_IAM_USER_NO_PERMISSION = 'IAM_USER_NO_PERMISSION';
    const STATE_CUR_VERSION_NOT_SUPPORT_OPERATION = 'CUR_VERSION_NOT_SUPPORT_OPERATION';
    const STATE_INS_WHITE_LIST_INITIALIZING = 'INS_WHITE_LIST_INITIALIZING';
    const STATE_UNKNOWN_ERROR = 'UNKNOWN_ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_SUCCESS,
            self::STATE_IAM_USER_CONFLICT,
            self::STATE_HOST_NOT_MANAGE,
            self::STATE_HOST_ACCOUNT_NOT_EXIST,
            self::STATE_IAM_USER_NO_PERMISSION,
            self::STATE_CUR_VERSION_NOT_SUPPORT_OPERATION,
            self::STATE_INS_WHITE_LIST_INITIALIZING,
            self::STATE_UNKNOWN_ERROR,
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['loginUrl'] = isset($data['loginUrl']) ? $data['loginUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 0)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['loginUrl']) && (mb_strlen($this->container['loginUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'loginUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['loginUrl']) && (mb_strlen($this->container['loginUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'loginUrl', the character length must be bigger than or equal to 0.";
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
    * Gets state
    *  链接获取状态     # SUCCESS(0): 成功；非SUCCESS状态都认为获取失败，需要展示错误代码及description     # IAM_USER_CONFLICT(1016): IAM用户冲突；     # HOST_NOT_MANAGE(1): 查询主机未被纳管；     # HOST_ACCOUNT_NOT_EXIST(553): 主机账户不可用；     # IAM_USER_NO_PERMISSION(901): IAM用户无运维该主机权限；     # CUR_VERSION_NOT_SUPPORT_OPERATION(9001):当前服务版本不支持;     # INS_WHITE_LIST_INITIALIZING(9002):实例白名单正在初始化，请稍后重试;     # UNKNOWN_ERROR(9003):未知错误;
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 链接获取状态     # SUCCESS(0): 成功；非SUCCESS状态都认为获取失败，需要展示错误代码及description     # IAM_USER_CONFLICT(1016): IAM用户冲突；     # HOST_NOT_MANAGE(1): 查询主机未被纳管；     # HOST_ACCOUNT_NOT_EXIST(553): 主机账户不可用；     # IAM_USER_NO_PERMISSION(901): IAM用户无运维该主机权限；     # CUR_VERSION_NOT_SUPPORT_OPERATION(9001):当前服务版本不支持;     # INS_WHITE_LIST_INITIALIZING(9002):实例白名单正在初始化，请稍后重试;     # UNKNOWN_ERROR(9003):未知错误;
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets description
    *  链接获取异常时说明提示
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
    * @param string|null $description 链接获取异常时说明提示
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets loginUrl
    *  ECS运维登录地址
    *
    * @return string|null
    */
    public function getLoginUrl()
    {
        return $this->container['loginUrl'];
    }

    /**
    * Sets loginUrl
    *
    * @param string|null $loginUrl ECS运维登录地址
    *
    * @return $this
    */
    public function setLoginUrl($loginUrl)
    {
        $this->container['loginUrl'] = $loginUrl;
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

