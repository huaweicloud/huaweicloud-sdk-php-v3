<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModPwdReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModPwdReqDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * account  帐号，必须是携带域名的帐号。
    * oldPwd  用户旧的登录密码。
    * newPwd  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \" ,' < . > / ?） * 旧密码和新密码不能相同 * 上次修改密码后5分钟内不能更新密码 * 不能与最近使用的旧密码相同 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写） * 新密码与旧密码之间允许的最少不相同字符数为2个
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'account' => 'string',
            'oldPwd' => 'string',
            'newPwd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * account  帐号，必须是携带域名的帐号。
    * oldPwd  用户旧的登录密码。
    * newPwd  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \" ,' < . > / ?） * 旧密码和新密码不能相同 * 上次修改密码后5分钟内不能更新密码 * 不能与最近使用的旧密码相同 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写） * 新密码与旧密码之间允许的最少不相同字符数为2个
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'account' => null,
        'oldPwd' => null,
        'newPwd' => null
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
    * account  帐号，必须是携带域名的帐号。
    * oldPwd  用户旧的登录密码。
    * newPwd  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \" ,' < . > / ?） * 旧密码和新密码不能相同 * 上次修改密码后5分钟内不能更新密码 * 不能与最近使用的旧密码相同 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写） * 新密码与旧密码之间允许的最少不相同字符数为2个
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'account' => 'account',
            'oldPwd' => 'oldPwd',
            'newPwd' => 'newPwd'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * account  帐号，必须是携带域名的帐号。
    * oldPwd  用户旧的登录密码。
    * newPwd  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \" ,' < . > / ?） * 旧密码和新密码不能相同 * 上次修改密码后5分钟内不能更新密码 * 不能与最近使用的旧密码相同 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写） * 新密码与旧密码之间允许的最少不相同字符数为2个
    *
    * @var string[]
    */
    protected static $setters = [
            'account' => 'setAccount',
            'oldPwd' => 'setOldPwd',
            'newPwd' => 'setNewPwd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * account  帐号，必须是携带域名的帐号。
    * oldPwd  用户旧的登录密码。
    * newPwd  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \" ,' < . > / ?） * 旧密码和新密码不能相同 * 上次修改密码后5分钟内不能更新密码 * 不能与最近使用的旧密码相同 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写） * 新密码与旧密码之间允许的最少不相同字符数为2个
    *
    * @var string[]
    */
    protected static $getters = [
            'account' => 'getAccount',
            'oldPwd' => 'getOldPwd',
            'newPwd' => 'getNewPwd'
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
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['oldPwd'] = isset($data['oldPwd']) ? $data['oldPwd'] : null;
        $this->container['newPwd'] = isset($data['newPwd']) ? $data['newPwd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
            if ((mb_strlen($this->container['account']) > 255)) {
                $invalidProperties[] = "invalid value for 'account', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['account']) < 1)) {
                $invalidProperties[] = "invalid value for 'account', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['oldPwd'] === null) {
            $invalidProperties[] = "'oldPwd' can't be null";
        }
            if ((mb_strlen($this->container['oldPwd']) > 32)) {
                $invalidProperties[] = "invalid value for 'oldPwd', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['oldPwd']) < 1)) {
                $invalidProperties[] = "invalid value for 'oldPwd', the character length must be bigger than or equal to 1.";
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
    * Gets account
    *  帐号，必须是携带域名的帐号。
    *
    * @return string
    */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
    * Sets account
    *
    * @param string $account 帐号，必须是携带域名的帐号。
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
        return $this;
    }

    /**
    * Gets oldPwd
    *  用户旧的登录密码。
    *
    * @return string
    */
    public function getOldPwd()
    {
        return $this->container['oldPwd'];
    }

    /**
    * Sets oldPwd
    *
    * @param string $oldPwd 用户旧的登录密码。
    *
    * @return $this
    */
    public function setOldPwd($oldPwd)
    {
        $this->container['oldPwd'] = $oldPwd;
        return $this;
    }

    /**
    * Gets newPwd
    *  用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \" ,' < . > / ?） * 旧密码和新密码不能相同 * 上次修改密码后5分钟内不能更新密码 * 不能与最近使用的旧密码相同 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写） * 新密码与旧密码之间允许的最少不相同字符数为2个
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
    * @param string $newPwd 用户新的登录密码。 密码要求： * 长度范围要求8~32 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \" ,' < . > / ?） * 旧密码和新密码不能相同 * 上次修改密码后5分钟内不能更新密码 * 不能与最近使用的旧密码相同 * 不能包含3个以上重复字符 * 密码不能包含与其对应的用户名（不区分大小写）以及逆序的用户名（不区分大小写） * 新密码与旧密码之间允许的最少不相同字符数为2个
    *
    * @return $this
    */
    public function setNewPwd($newPwd)
    {
        $this->container['newPwd'] = $newPwd;
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

