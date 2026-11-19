<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDefenderPluginManualCommandResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDefenderPluginManualCommandResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * opt  **参数解释**： 操作类型，回显请求的opt值 **取值范围**： - install：安装 - uninstall：卸载
    * clawPluginCommand  **参数解释**： 完整的手动操作命令，可直接复制到终端执行 **取值范围**： 字符长度为1-4096位
    * scriptUrl  **参数解释**： 脚本下载地址 **取值范围**： 字符长度为1-512位
    * installKey  **参数解释**： 安装凭证 **取值范围**： 字符长度为1-256位
    * pluginPkgUrl  **参数解释**： 插件包下载地址 **取值范围**： 字符长度为1-512位
    * endpoint  **参数解释**： AI Defender服务端地址 **取值范围**： 字符长度为1-512位
    * expireTime  **参数解释**： 安装凭证过期时间，毫秒时间戳，过期后需重新获取 **取值范围**： 最小值0，最大值9223372036854775807
    * queryResultCmd  **参数解释**： 查询安装结果命令 **取值范围**： \"openclaw plugins info AgentDR_OpenClaw\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'opt' => 'string',
            'clawPluginCommand' => 'string',
            'scriptUrl' => 'string',
            'installKey' => 'string',
            'pluginPkgUrl' => 'string',
            'endpoint' => 'string',
            'expireTime' => 'int',
            'queryResultCmd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * opt  **参数解释**： 操作类型，回显请求的opt值 **取值范围**： - install：安装 - uninstall：卸载
    * clawPluginCommand  **参数解释**： 完整的手动操作命令，可直接复制到终端执行 **取值范围**： 字符长度为1-4096位
    * scriptUrl  **参数解释**： 脚本下载地址 **取值范围**： 字符长度为1-512位
    * installKey  **参数解释**： 安装凭证 **取值范围**： 字符长度为1-256位
    * pluginPkgUrl  **参数解释**： 插件包下载地址 **取值范围**： 字符长度为1-512位
    * endpoint  **参数解释**： AI Defender服务端地址 **取值范围**： 字符长度为1-512位
    * expireTime  **参数解释**： 安装凭证过期时间，毫秒时间戳，过期后需重新获取 **取值范围**： 最小值0，最大值9223372036854775807
    * queryResultCmd  **参数解释**： 查询安装结果命令 **取值范围**： \"openclaw plugins info AgentDR_OpenClaw\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'opt' => null,
        'clawPluginCommand' => null,
        'scriptUrl' => null,
        'installKey' => null,
        'pluginPkgUrl' => null,
        'endpoint' => null,
        'expireTime' => 'int64',
        'queryResultCmd' => null
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
    * opt  **参数解释**： 操作类型，回显请求的opt值 **取值范围**： - install：安装 - uninstall：卸载
    * clawPluginCommand  **参数解释**： 完整的手动操作命令，可直接复制到终端执行 **取值范围**： 字符长度为1-4096位
    * scriptUrl  **参数解释**： 脚本下载地址 **取值范围**： 字符长度为1-512位
    * installKey  **参数解释**： 安装凭证 **取值范围**： 字符长度为1-256位
    * pluginPkgUrl  **参数解释**： 插件包下载地址 **取值范围**： 字符长度为1-512位
    * endpoint  **参数解释**： AI Defender服务端地址 **取值范围**： 字符长度为1-512位
    * expireTime  **参数解释**： 安装凭证过期时间，毫秒时间戳，过期后需重新获取 **取值范围**： 最小值0，最大值9223372036854775807
    * queryResultCmd  **参数解释**： 查询安装结果命令 **取值范围**： \"openclaw plugins info AgentDR_OpenClaw\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'opt' => 'opt',
            'clawPluginCommand' => 'claw_plugin_command',
            'scriptUrl' => 'script_url',
            'installKey' => 'install_key',
            'pluginPkgUrl' => 'plugin_pkg_url',
            'endpoint' => 'endpoint',
            'expireTime' => 'expire_time',
            'queryResultCmd' => 'query_result_cmd'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * opt  **参数解释**： 操作类型，回显请求的opt值 **取值范围**： - install：安装 - uninstall：卸载
    * clawPluginCommand  **参数解释**： 完整的手动操作命令，可直接复制到终端执行 **取值范围**： 字符长度为1-4096位
    * scriptUrl  **参数解释**： 脚本下载地址 **取值范围**： 字符长度为1-512位
    * installKey  **参数解释**： 安装凭证 **取值范围**： 字符长度为1-256位
    * pluginPkgUrl  **参数解释**： 插件包下载地址 **取值范围**： 字符长度为1-512位
    * endpoint  **参数解释**： AI Defender服务端地址 **取值范围**： 字符长度为1-512位
    * expireTime  **参数解释**： 安装凭证过期时间，毫秒时间戳，过期后需重新获取 **取值范围**： 最小值0，最大值9223372036854775807
    * queryResultCmd  **参数解释**： 查询安装结果命令 **取值范围**： \"openclaw plugins info AgentDR_OpenClaw\"
    *
    * @var string[]
    */
    protected static $setters = [
            'opt' => 'setOpt',
            'clawPluginCommand' => 'setClawPluginCommand',
            'scriptUrl' => 'setScriptUrl',
            'installKey' => 'setInstallKey',
            'pluginPkgUrl' => 'setPluginPkgUrl',
            'endpoint' => 'setEndpoint',
            'expireTime' => 'setExpireTime',
            'queryResultCmd' => 'setQueryResultCmd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * opt  **参数解释**： 操作类型，回显请求的opt值 **取值范围**： - install：安装 - uninstall：卸载
    * clawPluginCommand  **参数解释**： 完整的手动操作命令，可直接复制到终端执行 **取值范围**： 字符长度为1-4096位
    * scriptUrl  **参数解释**： 脚本下载地址 **取值范围**： 字符长度为1-512位
    * installKey  **参数解释**： 安装凭证 **取值范围**： 字符长度为1-256位
    * pluginPkgUrl  **参数解释**： 插件包下载地址 **取值范围**： 字符长度为1-512位
    * endpoint  **参数解释**： AI Defender服务端地址 **取值范围**： 字符长度为1-512位
    * expireTime  **参数解释**： 安装凭证过期时间，毫秒时间戳，过期后需重新获取 **取值范围**： 最小值0，最大值9223372036854775807
    * queryResultCmd  **参数解释**： 查询安装结果命令 **取值范围**： \"openclaw plugins info AgentDR_OpenClaw\"
    *
    * @var string[]
    */
    protected static $getters = [
            'opt' => 'getOpt',
            'clawPluginCommand' => 'getClawPluginCommand',
            'scriptUrl' => 'getScriptUrl',
            'installKey' => 'getInstallKey',
            'pluginPkgUrl' => 'getPluginPkgUrl',
            'endpoint' => 'getEndpoint',
            'expireTime' => 'getExpireTime',
            'queryResultCmd' => 'getQueryResultCmd'
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
        $this->container['opt'] = isset($data['opt']) ? $data['opt'] : null;
        $this->container['clawPluginCommand'] = isset($data['clawPluginCommand']) ? $data['clawPluginCommand'] : null;
        $this->container['scriptUrl'] = isset($data['scriptUrl']) ? $data['scriptUrl'] : null;
        $this->container['installKey'] = isset($data['installKey']) ? $data['installKey'] : null;
        $this->container['pluginPkgUrl'] = isset($data['pluginPkgUrl']) ? $data['pluginPkgUrl'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['queryResultCmd'] = isset($data['queryResultCmd']) ? $data['queryResultCmd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['opt']) && (mb_strlen($this->container['opt']) > 64)) {
                $invalidProperties[] = "invalid value for 'opt', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['opt']) && (mb_strlen($this->container['opt']) < 1)) {
                $invalidProperties[] = "invalid value for 'opt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clawPluginCommand']) && (mb_strlen($this->container['clawPluginCommand']) > 4096)) {
                $invalidProperties[] = "invalid value for 'clawPluginCommand', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['clawPluginCommand']) && (mb_strlen($this->container['clawPluginCommand']) < 1)) {
                $invalidProperties[] = "invalid value for 'clawPluginCommand', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scriptUrl']) && (mb_strlen($this->container['scriptUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'scriptUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['scriptUrl']) && (mb_strlen($this->container['scriptUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['installKey']) && (mb_strlen($this->container['installKey']) > 256)) {
                $invalidProperties[] = "invalid value for 'installKey', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['installKey']) && (mb_strlen($this->container['installKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'installKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pluginPkgUrl']) && (mb_strlen($this->container['pluginPkgUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'pluginPkgUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['pluginPkgUrl']) && (mb_strlen($this->container['pluginPkgUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'pluginPkgUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endpoint']) && (mb_strlen($this->container['endpoint']) > 512)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['endpoint']) && (mb_strlen($this->container['endpoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'endpoint', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['queryResultCmd']) && (mb_strlen($this->container['queryResultCmd']) > 128)) {
                $invalidProperties[] = "invalid value for 'queryResultCmd', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['queryResultCmd']) && (mb_strlen($this->container['queryResultCmd']) < 1)) {
                $invalidProperties[] = "invalid value for 'queryResultCmd', the character length must be bigger than or equal to 1.";
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
    * Gets opt
    *  **参数解释**： 操作类型，回显请求的opt值 **取值范围**： - install：安装 - uninstall：卸载
    *
    * @return string|null
    */
    public function getOpt()
    {
        return $this->container['opt'];
    }

    /**
    * Sets opt
    *
    * @param string|null $opt **参数解释**： 操作类型，回显请求的opt值 **取值范围**： - install：安装 - uninstall：卸载
    *
    * @return $this
    */
    public function setOpt($opt)
    {
        $this->container['opt'] = $opt;
        return $this;
    }

    /**
    * Gets clawPluginCommand
    *  **参数解释**： 完整的手动操作命令，可直接复制到终端执行 **取值范围**： 字符长度为1-4096位
    *
    * @return string|null
    */
    public function getClawPluginCommand()
    {
        return $this->container['clawPluginCommand'];
    }

    /**
    * Sets clawPluginCommand
    *
    * @param string|null $clawPluginCommand **参数解释**： 完整的手动操作命令，可直接复制到终端执行 **取值范围**： 字符长度为1-4096位
    *
    * @return $this
    */
    public function setClawPluginCommand($clawPluginCommand)
    {
        $this->container['clawPluginCommand'] = $clawPluginCommand;
        return $this;
    }

    /**
    * Gets scriptUrl
    *  **参数解释**： 脚本下载地址 **取值范围**： 字符长度为1-512位
    *
    * @return string|null
    */
    public function getScriptUrl()
    {
        return $this->container['scriptUrl'];
    }

    /**
    * Sets scriptUrl
    *
    * @param string|null $scriptUrl **参数解释**： 脚本下载地址 **取值范围**： 字符长度为1-512位
    *
    * @return $this
    */
    public function setScriptUrl($scriptUrl)
    {
        $this->container['scriptUrl'] = $scriptUrl;
        return $this;
    }

    /**
    * Gets installKey
    *  **参数解释**： 安装凭证 **取值范围**： 字符长度为1-256位
    *
    * @return string|null
    */
    public function getInstallKey()
    {
        return $this->container['installKey'];
    }

    /**
    * Sets installKey
    *
    * @param string|null $installKey **参数解释**： 安装凭证 **取值范围**： 字符长度为1-256位
    *
    * @return $this
    */
    public function setInstallKey($installKey)
    {
        $this->container['installKey'] = $installKey;
        return $this;
    }

    /**
    * Gets pluginPkgUrl
    *  **参数解释**： 插件包下载地址 **取值范围**： 字符长度为1-512位
    *
    * @return string|null
    */
    public function getPluginPkgUrl()
    {
        return $this->container['pluginPkgUrl'];
    }

    /**
    * Sets pluginPkgUrl
    *
    * @param string|null $pluginPkgUrl **参数解释**： 插件包下载地址 **取值范围**： 字符长度为1-512位
    *
    * @return $this
    */
    public function setPluginPkgUrl($pluginPkgUrl)
    {
        $this->container['pluginPkgUrl'] = $pluginPkgUrl;
        return $this;
    }

    /**
    * Gets endpoint
    *  **参数解释**： AI Defender服务端地址 **取值范围**： 字符长度为1-512位
    *
    * @return string|null
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string|null $endpoint **参数解释**： AI Defender服务端地址 **取值范围**： 字符长度为1-512位
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets expireTime
    *  **参数解释**： 安装凭证过期时间，毫秒时间戳，过期后需重新获取 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime **参数解释**： 安装凭证过期时间，毫秒时间戳，过期后需重新获取 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets queryResultCmd
    *  **参数解释**： 查询安装结果命令 **取值范围**： \"openclaw plugins info AgentDR_OpenClaw\"
    *
    * @return string|null
    */
    public function getQueryResultCmd()
    {
        return $this->container['queryResultCmd'];
    }

    /**
    * Sets queryResultCmd
    *
    * @param string|null $queryResultCmd **参数解释**： 查询安装结果命令 **取值范围**： \"openclaw plugins info AgentDR_OpenClaw\"
    *
    * @return $this
    */
    public function setQueryResultCmd($queryResultCmd)
    {
        $this->container['queryResultCmd'] = $queryResultCmd;
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

