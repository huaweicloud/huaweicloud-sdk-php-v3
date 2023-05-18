<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdminDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdminDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * account  用户帐号，帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。
    * name  名称。
    * pwd  若携带则以前台携带为准，否则后台默认生成,密码必须满足: * 6-32位 * 不能和帐号的正序和倒序一致 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \\\" ,' < . > / ?
    * email  邮箱，管理员手机和邮箱必填其一，否则无法重置密码。如果企业短信开关关闭，则邮箱必填。格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    * phone  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'account' => 'string',
            'name' => 'string',
            'pwd' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'country' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * account  用户帐号，帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。
    * name  名称。
    * pwd  若携带则以前台携带为准，否则后台默认生成,密码必须满足: * 6-32位 * 不能和帐号的正序和倒序一致 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \\\" ,' < . > / ?
    * email  邮箱，管理员手机和邮箱必填其一，否则无法重置密码。如果企业短信开关关闭，则邮箱必填。格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    * phone  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'account' => null,
        'name' => null,
        'pwd' => null,
        'email' => null,
        'phone' => null,
        'country' => null
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
    * account  用户帐号，帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。
    * name  名称。
    * pwd  若携带则以前台携带为准，否则后台默认生成,密码必须满足: * 6-32位 * 不能和帐号的正序和倒序一致 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \\\" ,' < . > / ?
    * email  邮箱，管理员手机和邮箱必填其一，否则无法重置密码。如果企业短信开关关闭，则邮箱必填。格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    * phone  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'account' => 'account',
            'name' => 'name',
            'pwd' => 'pwd',
            'email' => 'email',
            'phone' => 'phone',
            'country' => 'country'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * account  用户帐号，帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。
    * name  名称。
    * pwd  若携带则以前台携带为准，否则后台默认生成,密码必须满足: * 6-32位 * 不能和帐号的正序和倒序一致 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \\\" ,' < . > / ?
    * email  邮箱，管理员手机和邮箱必填其一，否则无法重置密码。如果企业短信开关关闭，则邮箱必填。格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    * phone  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @var string[]
    */
    protected static $setters = [
            'account' => 'setAccount',
            'name' => 'setName',
            'pwd' => 'setPwd',
            'email' => 'setEmail',
            'phone' => 'setPhone',
            'country' => 'setCountry'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * account  用户帐号，帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。
    * name  名称。
    * pwd  若携带则以前台携带为准，否则后台默认生成,密码必须满足: * 6-32位 * 不能和帐号的正序和倒序一致 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \\\" ,' < . > / ?
    * email  邮箱，管理员手机和邮箱必填其一，否则无法重置密码。如果企业短信开关关闭，则邮箱必填。格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    * phone  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @var string[]
    */
    protected static $getters = [
            'account' => 'getAccount',
            'name' => 'getName',
            'pwd' => 'getPwd',
            'email' => 'getEmail',
            'phone' => 'getPhone',
            'country' => 'getCountry'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pwd'] = isset($data['pwd']) ? $data['pwd'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : 'chinaPR';
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
            if ((mb_strlen($this->container['account']) > 64)) {
                $invalidProperties[] = "invalid value for 'account', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['account']) < 1)) {
                $invalidProperties[] = "invalid value for 'account', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(?!^[0-9]+$)([A-Za-z0-9_.@-]){0,64}$/", $this->container['account'])) {
                $invalidProperties[] = "invalid value for 'account', must be conform to the pattern /^(?!^[0-9]+$)([A-Za-z0-9_.@-]){0,64}$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['pwd'] === null) {
            $invalidProperties[] = "'pwd' can't be null";
        }
            if ((mb_strlen($this->container['pwd']) > 32)) {
                $invalidProperties[] = "invalid value for 'pwd', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['pwd']) < 6)) {
                $invalidProperties[] = "invalid value for 'pwd', the character length must be bigger than or equal to 6.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 255)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 32)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 0)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 255)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 0)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 0.";
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
    *  用户帐号，帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。
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
    * @param string $account 用户帐号，帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
        return $this;
    }

    /**
    * Gets name
    *  名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets pwd
    *  若携带则以前台携带为准，否则后台默认生成,密码必须满足: * 6-32位 * 不能和帐号的正序和倒序一致 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \\\" ,' < . > / ?
    *
    * @return string
    */
    public function getPwd()
    {
        return $this->container['pwd'];
    }

    /**
    * Sets pwd
    *
    * @param string $pwd 若携带则以前台携带为准，否则后台默认生成,密码必须满足: * 6-32位 * 不能和帐号的正序和倒序一致 * 至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : \\\" ,' < . > / ?
    *
    * @return $this
    */
    public function setPwd($pwd)
    {
        $this->container['pwd'] = $pwd;
        return $this;
    }

    /**
    * Gets email
    *  邮箱，管理员手机和邮箱必填其一，否则无法重置密码。如果企业短信开关关闭，则邮箱必填。格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 邮箱，管理员手机和邮箱必填其一，否则无法重置密码。如果企业短信开关关闭，则邮箱必填。格式必须满足(^$|^[\\\\w-+]+(\\\\.[\\\\w-+]+)*@[\\\\w-]+(\\\\.[\\\\w-]+)*(\\\\.[\\\\w-]{1,})$)。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets phone
    *  手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)。
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone 手机号，必须加上国家码，例如中国大陆手机+86xxxxxxx，当填写手机号时 “country”参数必填,手机格式必须满足(^$|^[+]?[0-9]+$)。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets country
    *  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
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

