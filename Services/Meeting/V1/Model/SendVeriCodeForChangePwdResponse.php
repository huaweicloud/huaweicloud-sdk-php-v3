<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SendVeriCodeForChangePwdResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SendVeriCodeForChangePwdResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * expire  过期时间，单位：秒。
    * bindPhone  如果通过手机发送验证码，则该字段携带该用户绑定的手机号（手机号经过处理，屏蔽中间几位，如+8618****12345）。
    * bindEmail  如果通过邮箱发送验证码，则该字段携带用户绑定的邮箱帐号（邮箱帐号经过处理，屏蔽中间几位，如tes****ount@huawei.com）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'expire' => 'int',
            'bindPhone' => 'string',
            'bindEmail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * expire  过期时间，单位：秒。
    * bindPhone  如果通过手机发送验证码，则该字段携带该用户绑定的手机号（手机号经过处理，屏蔽中间几位，如+8618****12345）。
    * bindEmail  如果通过邮箱发送验证码，则该字段携带用户绑定的邮箱帐号（邮箱帐号经过处理，屏蔽中间几位，如tes****ount@huawei.com）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'expire' => null,
        'bindPhone' => null,
        'bindEmail' => null
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
    * expire  过期时间，单位：秒。
    * bindPhone  如果通过手机发送验证码，则该字段携带该用户绑定的手机号（手机号经过处理，屏蔽中间几位，如+8618****12345）。
    * bindEmail  如果通过邮箱发送验证码，则该字段携带用户绑定的邮箱帐号（邮箱帐号经过处理，屏蔽中间几位，如tes****ount@huawei.com）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'expire' => 'expire',
            'bindPhone' => 'bindPhone',
            'bindEmail' => 'bindEmail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * expire  过期时间，单位：秒。
    * bindPhone  如果通过手机发送验证码，则该字段携带该用户绑定的手机号（手机号经过处理，屏蔽中间几位，如+8618****12345）。
    * bindEmail  如果通过邮箱发送验证码，则该字段携带用户绑定的邮箱帐号（邮箱帐号经过处理，屏蔽中间几位，如tes****ount@huawei.com）。
    *
    * @var string[]
    */
    protected static $setters = [
            'expire' => 'setExpire',
            'bindPhone' => 'setBindPhone',
            'bindEmail' => 'setBindEmail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * expire  过期时间，单位：秒。
    * bindPhone  如果通过手机发送验证码，则该字段携带该用户绑定的手机号（手机号经过处理，屏蔽中间几位，如+8618****12345）。
    * bindEmail  如果通过邮箱发送验证码，则该字段携带用户绑定的邮箱帐号（邮箱帐号经过处理，屏蔽中间几位，如tes****ount@huawei.com）。
    *
    * @var string[]
    */
    protected static $getters = [
            'expire' => 'getExpire',
            'bindPhone' => 'getBindPhone',
            'bindEmail' => 'getBindEmail'
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
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
        $this->container['bindPhone'] = isset($data['bindPhone']) ? $data['bindPhone'] : null;
        $this->container['bindEmail'] = isset($data['bindEmail']) ? $data['bindEmail'] : null;
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
    * Gets expire
    *  过期时间，单位：秒。
    *
    * @return int|null
    */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
    * Sets expire
    *
    * @param int|null $expire 过期时间，单位：秒。
    *
    * @return $this
    */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;
        return $this;
    }

    /**
    * Gets bindPhone
    *  如果通过手机发送验证码，则该字段携带该用户绑定的手机号（手机号经过处理，屏蔽中间几位，如+8618****12345）。
    *
    * @return string|null
    */
    public function getBindPhone()
    {
        return $this->container['bindPhone'];
    }

    /**
    * Sets bindPhone
    *
    * @param string|null $bindPhone 如果通过手机发送验证码，则该字段携带该用户绑定的手机号（手机号经过处理，屏蔽中间几位，如+8618****12345）。
    *
    * @return $this
    */
    public function setBindPhone($bindPhone)
    {
        $this->container['bindPhone'] = $bindPhone;
        return $this;
    }

    /**
    * Gets bindEmail
    *  如果通过邮箱发送验证码，则该字段携带用户绑定的邮箱帐号（邮箱帐号经过处理，屏蔽中间几位，如tes****ount@huawei.com）。
    *
    * @return string|null
    */
    public function getBindEmail()
    {
        return $this->container['bindEmail'];
    }

    /**
    * Sets bindEmail
    *
    * @param string|null $bindEmail 如果通过邮箱发送验证码，则该字段携带用户绑定的邮箱帐号（邮箱帐号经过处理，屏蔽中间几位，如tes****ount@huawei.com）。
    *
    * @return $this
    */
    public function setBindEmail($bindEmail)
    {
        $this->container['bindEmail'] = $bindEmail;
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

