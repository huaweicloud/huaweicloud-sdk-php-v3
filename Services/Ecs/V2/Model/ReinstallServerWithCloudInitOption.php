<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReinstallServerWithCloudInitOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReinstallServerWithCloudInitOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminpass  云服务器管理员帐户的初始登录密码。 其中，Windows管理员帐户的用户名为Administrator。 建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。   > 说明：  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - 对于Linux弹性云服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。 - adminpass和keyname不能同时有值。 - adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    * keyname  密钥名称。
    * userid  用户ID。当传入keyname参数时，此参数为必选。
    * metadata  metadata
    * mode  取值为withStopServer ，支持开机状态下重装弹性云服务器。 mode取值为withStopServer时，对开机状态的弹性云服务器执行重装操作，系统自动对云服务器先执行关机，再重装操作系统。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminpass' => 'string',
            'keyname' => 'string',
            'userid' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Ecs\V2\Model\ReinstallSeverMetadata',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminpass  云服务器管理员帐户的初始登录密码。 其中，Windows管理员帐户的用户名为Administrator。 建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。   > 说明：  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - 对于Linux弹性云服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。 - adminpass和keyname不能同时有值。 - adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    * keyname  密钥名称。
    * userid  用户ID。当传入keyname参数时，此参数为必选。
    * metadata  metadata
    * mode  取值为withStopServer ，支持开机状态下重装弹性云服务器。 mode取值为withStopServer时，对开机状态的弹性云服务器执行重装操作，系统自动对云服务器先执行关机，再重装操作系统。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminpass' => null,
        'keyname' => null,
        'userid' => null,
        'metadata' => null,
        'mode' => null
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
    * adminpass  云服务器管理员帐户的初始登录密码。 其中，Windows管理员帐户的用户名为Administrator。 建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。   > 说明：  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - 对于Linux弹性云服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。 - adminpass和keyname不能同时有值。 - adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    * keyname  密钥名称。
    * userid  用户ID。当传入keyname参数时，此参数为必选。
    * metadata  metadata
    * mode  取值为withStopServer ，支持开机状态下重装弹性云服务器。 mode取值为withStopServer时，对开机状态的弹性云服务器执行重装操作，系统自动对云服务器先执行关机，再重装操作系统。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminpass' => 'adminpass',
            'keyname' => 'keyname',
            'userid' => 'userid',
            'metadata' => 'metadata',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminpass  云服务器管理员帐户的初始登录密码。 其中，Windows管理员帐户的用户名为Administrator。 建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。   > 说明：  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - 对于Linux弹性云服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。 - adminpass和keyname不能同时有值。 - adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    * keyname  密钥名称。
    * userid  用户ID。当传入keyname参数时，此参数为必选。
    * metadata  metadata
    * mode  取值为withStopServer ，支持开机状态下重装弹性云服务器。 mode取值为withStopServer时，对开机状态的弹性云服务器执行重装操作，系统自动对云服务器先执行关机，再重装操作系统。
    *
    * @var string[]
    */
    protected static $setters = [
            'adminpass' => 'setAdminpass',
            'keyname' => 'setKeyname',
            'userid' => 'setUserid',
            'metadata' => 'setMetadata',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminpass  云服务器管理员帐户的初始登录密码。 其中，Windows管理员帐户的用户名为Administrator。 建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。   > 说明：  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - 对于Linux弹性云服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。 - adminpass和keyname不能同时有值。 - adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    * keyname  密钥名称。
    * userid  用户ID。当传入keyname参数时，此参数为必选。
    * metadata  metadata
    * mode  取值为withStopServer ，支持开机状态下重装弹性云服务器。 mode取值为withStopServer时，对开机状态的弹性云服务器执行重装操作，系统自动对云服务器先执行关机，再重装操作系统。
    *
    * @var string[]
    */
    protected static $getters = [
            'adminpass' => 'getAdminpass',
            'keyname' => 'getKeyname',
            'userid' => 'getUserid',
            'metadata' => 'getMetadata',
            'mode' => 'getMode'
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
        $this->container['adminpass'] = isset($data['adminpass']) ? $data['adminpass'] : null;
        $this->container['keyname'] = isset($data['keyname']) ? $data['keyname'] : null;
        $this->container['userid'] = isset($data['userid']) ? $data['userid'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
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
    * Gets adminpass
    *  云服务器管理员帐户的初始登录密码。 其中，Windows管理员帐户的用户名为Administrator。 建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。   > 说明：  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - 对于Linux弹性云服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。 - adminpass和keyname不能同时有值。 - adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    *
    * @return string|null
    */
    public function getAdminpass()
    {
        return $this->container['adminpass'];
    }

    /**
    * Sets adminpass
    *
    * @param string|null $adminpass 云服务器管理员帐户的初始登录密码。 其中，Windows管理员帐户的用户名为Administrator。 建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。   > 说明：  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - 对于Linux弹性云服务器也可使用user_data字段实现密码注入，此时adminpass字段无效。 - adminpass和keyname不能同时有值。 - adminpass和keyname如果同时为空，此时，metadata中的user_data属性必须有值。
    *
    * @return $this
    */
    public function setAdminpass($adminpass)
    {
        $this->container['adminpass'] = $adminpass;
        return $this;
    }

    /**
    * Gets keyname
    *  密钥名称。
    *
    * @return string|null
    */
    public function getKeyname()
    {
        return $this->container['keyname'];
    }

    /**
    * Sets keyname
    *
    * @param string|null $keyname 密钥名称。
    *
    * @return $this
    */
    public function setKeyname($keyname)
    {
        $this->container['keyname'] = $keyname;
        return $this;
    }

    /**
    * Gets userid
    *  用户ID。当传入keyname参数时，此参数为必选。
    *
    * @return string|null
    */
    public function getUserid()
    {
        return $this->container['userid'];
    }

    /**
    * Sets userid
    *
    * @param string|null $userid 用户ID。当传入keyname参数时，此参数为必选。
    *
    * @return $this
    */
    public function setUserid($userid)
    {
        $this->container['userid'] = $userid;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ReinstallSeverMetadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ReinstallSeverMetadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets mode
    *  取值为withStopServer ，支持开机状态下重装弹性云服务器。 mode取值为withStopServer时，对开机状态的弹性云服务器执行重装操作，系统自动对云服务器先执行关机，再重装操作系统。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 取值为withStopServer ，支持开机状态下重装弹性云服务器。 mode取值为withStopServer时，对开机状态的弹性云服务器执行重装操作，系统自动对云服务器先执行关机，再重装操作系统。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

