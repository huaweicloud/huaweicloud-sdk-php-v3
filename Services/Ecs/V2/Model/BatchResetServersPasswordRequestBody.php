<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchResetServersPasswordRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchResetServersPasswordRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newPassword  新密码。  当dry_run字段为true时，该字段为非必填字段，否则为必填字段。  新密码的校验规则：  - 允许输入的字符包括：!@%-_=+[]:./? - 禁止输入的字符包括：汉字及【】：；“”‘’、，。《》？￥…（）—— ·！~`#&^,{}*();\"'<>|\\ $ - 复杂度上必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）、以及允许的特殊字符中的3种以上搭配 - 不能包含用户名 \"Administrator\" 和“root”及逆序字符 - 不能包含用户名 \"Administrator\" 中连续3个字符
    * dryRun  是否只预检此次请求。  - true：发送检查请求，不会重置密码。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 - false：发送正常请求，通过检查后并且进行重置密码请求。  默认值：false
    * servers  待批量重置密码的弹性云服务器ID信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newPassword' => 'string',
            'dryRun' => 'bool',
            'servers' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerId[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newPassword  新密码。  当dry_run字段为true时，该字段为非必填字段，否则为必填字段。  新密码的校验规则：  - 允许输入的字符包括：!@%-_=+[]:./? - 禁止输入的字符包括：汉字及【】：；“”‘’、，。《》？￥…（）—— ·！~`#&^,{}*();\"'<>|\\ $ - 复杂度上必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）、以及允许的特殊字符中的3种以上搭配 - 不能包含用户名 \"Administrator\" 和“root”及逆序字符 - 不能包含用户名 \"Administrator\" 中连续3个字符
    * dryRun  是否只预检此次请求。  - true：发送检查请求，不会重置密码。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 - false：发送正常请求，通过检查后并且进行重置密码请求。  默认值：false
    * servers  待批量重置密码的弹性云服务器ID信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newPassword' => null,
        'dryRun' => null,
        'servers' => null
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
    * newPassword  新密码。  当dry_run字段为true时，该字段为非必填字段，否则为必填字段。  新密码的校验规则：  - 允许输入的字符包括：!@%-_=+[]:./? - 禁止输入的字符包括：汉字及【】：；“”‘’、，。《》？￥…（）—— ·！~`#&^,{}*();\"'<>|\\ $ - 复杂度上必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）、以及允许的特殊字符中的3种以上搭配 - 不能包含用户名 \"Administrator\" 和“root”及逆序字符 - 不能包含用户名 \"Administrator\" 中连续3个字符
    * dryRun  是否只预检此次请求。  - true：发送检查请求，不会重置密码。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 - false：发送正常请求，通过检查后并且进行重置密码请求。  默认值：false
    * servers  待批量重置密码的弹性云服务器ID信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newPassword' => 'new_password',
            'dryRun' => 'dry_run',
            'servers' => 'servers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newPassword  新密码。  当dry_run字段为true时，该字段为非必填字段，否则为必填字段。  新密码的校验规则：  - 允许输入的字符包括：!@%-_=+[]:./? - 禁止输入的字符包括：汉字及【】：；“”‘’、，。《》？￥…（）—— ·！~`#&^,{}*();\"'<>|\\ $ - 复杂度上必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）、以及允许的特殊字符中的3种以上搭配 - 不能包含用户名 \"Administrator\" 和“root”及逆序字符 - 不能包含用户名 \"Administrator\" 中连续3个字符
    * dryRun  是否只预检此次请求。  - true：发送检查请求，不会重置密码。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 - false：发送正常请求，通过检查后并且进行重置密码请求。  默认值：false
    * servers  待批量重置密码的弹性云服务器ID信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'newPassword' => 'setNewPassword',
            'dryRun' => 'setDryRun',
            'servers' => 'setServers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newPassword  新密码。  当dry_run字段为true时，该字段为非必填字段，否则为必填字段。  新密码的校验规则：  - 允许输入的字符包括：!@%-_=+[]:./? - 禁止输入的字符包括：汉字及【】：；“”‘’、，。《》？￥…（）—— ·！~`#&^,{}*();\"'<>|\\ $ - 复杂度上必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）、以及允许的特殊字符中的3种以上搭配 - 不能包含用户名 \"Administrator\" 和“root”及逆序字符 - 不能包含用户名 \"Administrator\" 中连续3个字符
    * dryRun  是否只预检此次请求。  - true：发送检查请求，不会重置密码。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 - false：发送正常请求，通过检查后并且进行重置密码请求。  默认值：false
    * servers  待批量重置密码的弹性云服务器ID信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'newPassword' => 'getNewPassword',
            'dryRun' => 'getDryRun',
            'servers' => 'getServers'
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
        $this->container['newPassword'] = isset($data['newPassword']) ? $data['newPassword'] : null;
        $this->container['dryRun'] = isset($data['dryRun']) ? $data['dryRun'] : null;
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['newPassword'] === null) {
            $invalidProperties[] = "'newPassword' can't be null";
        }
        if ($this->container['servers'] === null) {
            $invalidProperties[] = "'servers' can't be null";
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
    * Gets newPassword
    *  新密码。  当dry_run字段为true时，该字段为非必填字段，否则为必填字段。  新密码的校验规则：  - 允许输入的字符包括：!@%-_=+[]:./? - 禁止输入的字符包括：汉字及【】：；“”‘’、，。《》？￥…（）—— ·！~`#&^,{}*();\"'<>|\\ $ - 复杂度上必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）、以及允许的特殊字符中的3种以上搭配 - 不能包含用户名 \"Administrator\" 和“root”及逆序字符 - 不能包含用户名 \"Administrator\" 中连续3个字符
    *
    * @return string
    */
    public function getNewPassword()
    {
        return $this->container['newPassword'];
    }

    /**
    * Sets newPassword
    *
    * @param string $newPassword 新密码。  当dry_run字段为true时，该字段为非必填字段，否则为必填字段。  新密码的校验规则：  - 允许输入的字符包括：!@%-_=+[]:./? - 禁止输入的字符包括：汉字及【】：；“”‘’、，。《》？￥…（）—— ·！~`#&^,{}*();\"'<>|\\ $ - 复杂度上必须包含大写字母（A-Z）、小写字母（a-z）、数字（0-9）、以及允许的特殊字符中的3种以上搭配 - 不能包含用户名 \"Administrator\" 和“root”及逆序字符 - 不能包含用户名 \"Administrator\" 中连续3个字符
    *
    * @return $this
    */
    public function setNewPassword($newPassword)
    {
        $this->container['newPassword'] = $newPassword;
        return $this;
    }

    /**
    * Gets dryRun
    *  是否只预检此次请求。  - true：发送检查请求，不会重置密码。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 - false：发送正常请求，通过检查后并且进行重置密码请求。  默认值：false
    *
    * @return bool|null
    */
    public function getDryRun()
    {
        return $this->container['dryRun'];
    }

    /**
    * Sets dryRun
    *
    * @param bool|null $dryRun 是否只预检此次请求。  - true：发送检查请求，不会重置密码。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回响应结果。 - false：发送正常请求，通过检查后并且进行重置密码请求。  默认值：false
    *
    * @return $this
    */
    public function setDryRun($dryRun)
    {
        $this->container['dryRun'] = $dryRun;
        return $this;
    }

    /**
    * Gets servers
    *  待批量重置密码的弹性云服务器ID信息。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerId[]
    */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
    * Sets servers
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerId[] $servers 待批量重置密码的弹性云服务器ID信息。
    *
    * @return $this
    */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;
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

