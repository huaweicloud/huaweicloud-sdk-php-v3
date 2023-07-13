<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetPwdReqDTOV1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetPwdReqDTOV1';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    * newPwd  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含大小写字母、数字 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写）
    * passWordType  * 1：临时密码，重置完密码后登录Web Portal根据配置可能需要强制修改密码 * 非1：正式密码，重置完密码后登录Web Portal不需要强制修改密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => 'string',
            'newPwd' => 'string',
            'passWordType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    * newPwd  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含大小写字母、数字 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写）
    * passWordType  * 1：临时密码，重置完密码后登录Web Portal根据配置可能需要强制修改密码 * 非1：正式密码，重置完密码后登录Web Portal不需要强制修改密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'newPwd' => null,
        'passWordType' => null
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
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    * newPwd  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含大小写字母、数字 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写）
    * passWordType  * 1：临时密码，重置完密码后登录Web Portal根据配置可能需要强制修改密码 * 非1：正式密码，重置完密码后登录Web Portal不需要强制修改密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'newPwd' => 'newPwd',
            'passWordType' => 'passWordType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    * newPwd  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含大小写字母、数字 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写）
    * passWordType  * 1：临时密码，重置完密码后登录Web Portal根据配置可能需要强制修改密码 * 非1：正式密码，重置完密码后登录Web Portal不需要强制修改密码
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'newPwd' => 'setNewPwd',
            'passWordType' => 'setPassWordType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    * newPwd  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含大小写字母、数字 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写）
    * passWordType  * 1：临时密码，重置完密码后登录Web Portal根据配置可能需要强制修改密码 * 非1：正式密码，重置完密码后登录Web Portal不需要强制修改密码
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'newPwd' => 'getNewPwd',
            'passWordType' => 'getPassWordType'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['newPwd'] = isset($data['newPwd']) ? $data['newPwd'] : null;
        $this->container['passWordType'] = isset($data['passWordType']) ? $data['passWordType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
            if ((mb_strlen($this->container['user']) > 255)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['user']) < 1)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['newPwd'] === null) {
            $invalidProperties[] = "'newPwd' can't be null";
        }
            if ((mb_strlen($this->container['newPwd']) > 32)) {
                $invalidProperties[] = "invalid value for 'newPwd', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['newPwd']) < 8)) {
                $invalidProperties[] = "invalid value for 'newPwd', the character length must be bigger than or equal to 8.";
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
    * Gets user
    *  用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    *
    * @return string
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string $user 用户身份信息（手机号码或邮箱帐号或用户真实帐号）。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets newPwd
    *  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含大小写字母、数字 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写）
    *
    * @return string
    */
    public function getNewPwd()
    {
        return $this->container['newPwd'];
    }

    /**
    * Sets newPwd
    *
    * @param string $newPwd 用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含大小写字母、数字 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写）
    *
    * @return $this
    */
    public function setNewPwd($newPwd)
    {
        $this->container['newPwd'] = $newPwd;
        return $this;
    }

    /**
    * Gets passWordType
    *  * 1：临时密码，重置完密码后登录Web Portal根据配置可能需要强制修改密码 * 非1：正式密码，重置完密码后登录Web Portal不需要强制修改密码
    *
    * @return int|null
    */
    public function getPassWordType()
    {
        return $this->container['passWordType'];
    }

    /**
    * Sets passWordType
    *
    * @param int|null $passWordType * 1：临时密码，重置完密码后登录Web Portal根据配置可能需要强制修改密码 * 非1：正式密码，重置完密码后登录Web Portal不需要强制修改密码
    *
    * @return $this
    */
    public function setPassWordType($passWordType)
    {
        $this->container['passWordType'] = $passWordType;
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

