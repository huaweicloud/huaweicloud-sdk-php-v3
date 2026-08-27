<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProtocolConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProtocolConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocolId  **参数说明**：泛协议配置ID。
    * port  **参数说明**：泛协议配置的端口号。
    * keepaliveTimeout  **参数说明**：连接空闲断链时间，单位（s）。
    * protocolType  **参数说明**：协议类型。 **取值范围**： - TCP：通用TCP协议接入
    * description  **参数说明**：泛协议的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * sslEnable  **参数说明**：是否开启tls加密传输。
    * frameDecodeConfigs  **参数说明**：码流拆包组包配置列表。
    * codecMode  **参数说明**：编解码类型。 **取值范围**： - FGS：将编解码插件以函数形式部署到FunctionGraph。 - PLUGIN：将编解码插件以OSGI插件形式部署到设备接入平台，使用该方式需提工单联系技术支持。
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，采用FGS进行编解码的对应函数地址。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、分隔符（:）的组合。
    * createTime  **参数说明**：在物联网平台查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  **参数说明**：在物联网平台更新查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocolId' => 'string',
            'port' => 'int',
            'keepaliveTimeout' => 'int',
            'protocolType' => 'string',
            'description' => 'string',
            'sslEnable' => 'bool',
            'frameDecodeConfigs' => '\HuaweiCloud\SDK\IoTDA\V5\Model\FrameDecodeConfig[]',
            'codecMode' => 'string',
            'funcUrn' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocolId  **参数说明**：泛协议配置ID。
    * port  **参数说明**：泛协议配置的端口号。
    * keepaliveTimeout  **参数说明**：连接空闲断链时间，单位（s）。
    * protocolType  **参数说明**：协议类型。 **取值范围**： - TCP：通用TCP协议接入
    * description  **参数说明**：泛协议的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * sslEnable  **参数说明**：是否开启tls加密传输。
    * frameDecodeConfigs  **参数说明**：码流拆包组包配置列表。
    * codecMode  **参数说明**：编解码类型。 **取值范围**： - FGS：将编解码插件以函数形式部署到FunctionGraph。 - PLUGIN：将编解码插件以OSGI插件形式部署到设备接入平台，使用该方式需提工单联系技术支持。
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，采用FGS进行编解码的对应函数地址。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、分隔符（:）的组合。
    * createTime  **参数说明**：在物联网平台查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  **参数说明**：在物联网平台更新查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocolId' => null,
        'port' => 'int32',
        'keepaliveTimeout' => 'int32',
        'protocolType' => null,
        'description' => null,
        'sslEnable' => null,
        'frameDecodeConfigs' => null,
        'codecMode' => null,
        'funcUrn' => null,
        'createTime' => null,
        'updateTime' => null
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
    * protocolId  **参数说明**：泛协议配置ID。
    * port  **参数说明**：泛协议配置的端口号。
    * keepaliveTimeout  **参数说明**：连接空闲断链时间，单位（s）。
    * protocolType  **参数说明**：协议类型。 **取值范围**： - TCP：通用TCP协议接入
    * description  **参数说明**：泛协议的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * sslEnable  **参数说明**：是否开启tls加密传输。
    * frameDecodeConfigs  **参数说明**：码流拆包组包配置列表。
    * codecMode  **参数说明**：编解码类型。 **取值范围**： - FGS：将编解码插件以函数形式部署到FunctionGraph。 - PLUGIN：将编解码插件以OSGI插件形式部署到设备接入平台，使用该方式需提工单联系技术支持。
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，采用FGS进行编解码的对应函数地址。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、分隔符（:）的组合。
    * createTime  **参数说明**：在物联网平台查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  **参数说明**：在物联网平台更新查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocolId' => 'protocol_id',
            'port' => 'port',
            'keepaliveTimeout' => 'keepalive_timeout',
            'protocolType' => 'protocol_type',
            'description' => 'description',
            'sslEnable' => 'ssl_enable',
            'frameDecodeConfigs' => 'frame_decode_configs',
            'codecMode' => 'codec_mode',
            'funcUrn' => 'func_urn',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocolId  **参数说明**：泛协议配置ID。
    * port  **参数说明**：泛协议配置的端口号。
    * keepaliveTimeout  **参数说明**：连接空闲断链时间，单位（s）。
    * protocolType  **参数说明**：协议类型。 **取值范围**： - TCP：通用TCP协议接入
    * description  **参数说明**：泛协议的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * sslEnable  **参数说明**：是否开启tls加密传输。
    * frameDecodeConfigs  **参数说明**：码流拆包组包配置列表。
    * codecMode  **参数说明**：编解码类型。 **取值范围**： - FGS：将编解码插件以函数形式部署到FunctionGraph。 - PLUGIN：将编解码插件以OSGI插件形式部署到设备接入平台，使用该方式需提工单联系技术支持。
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，采用FGS进行编解码的对应函数地址。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、分隔符（:）的组合。
    * createTime  **参数说明**：在物联网平台查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  **参数说明**：在物联网平台更新查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'protocolId' => 'setProtocolId',
            'port' => 'setPort',
            'keepaliveTimeout' => 'setKeepaliveTimeout',
            'protocolType' => 'setProtocolType',
            'description' => 'setDescription',
            'sslEnable' => 'setSslEnable',
            'frameDecodeConfigs' => 'setFrameDecodeConfigs',
            'codecMode' => 'setCodecMode',
            'funcUrn' => 'setFuncUrn',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocolId  **参数说明**：泛协议配置ID。
    * port  **参数说明**：泛协议配置的端口号。
    * keepaliveTimeout  **参数说明**：连接空闲断链时间，单位（s）。
    * protocolType  **参数说明**：协议类型。 **取值范围**： - TCP：通用TCP协议接入
    * description  **参数说明**：泛协议的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * sslEnable  **参数说明**：是否开启tls加密传输。
    * frameDecodeConfigs  **参数说明**：码流拆包组包配置列表。
    * codecMode  **参数说明**：编解码类型。 **取值范围**： - FGS：将编解码插件以函数形式部署到FunctionGraph。 - PLUGIN：将编解码插件以OSGI插件形式部署到设备接入平台，使用该方式需提工单联系技术支持。
    * funcUrn  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，采用FGS进行编解码的对应函数地址。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、分隔符（:）的组合。
    * createTime  **参数说明**：在物联网平台查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    * updateTime  **参数说明**：在物联网平台更新查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'protocolId' => 'getProtocolId',
            'port' => 'getPort',
            'keepaliveTimeout' => 'getKeepaliveTimeout',
            'protocolType' => 'getProtocolType',
            'description' => 'getDescription',
            'sslEnable' => 'getSslEnable',
            'frameDecodeConfigs' => 'getFrameDecodeConfigs',
            'codecMode' => 'getCodecMode',
            'funcUrn' => 'getFuncUrn',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['protocolId'] = isset($data['protocolId']) ? $data['protocolId'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['keepaliveTimeout'] = isset($data['keepaliveTimeout']) ? $data['keepaliveTimeout'] : null;
        $this->container['protocolType'] = isset($data['protocolType']) ? $data['protocolType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['frameDecodeConfigs'] = isset($data['frameDecodeConfigs']) ? $data['frameDecodeConfigs'] : null;
        $this->container['codecMode'] = isset($data['codecMode']) ? $data['codecMode'] : null;
        $this->container['funcUrn'] = isset($data['funcUrn']) ? $data['funcUrn'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['protocolId']) && (mb_strlen($this->container['protocolId']) > 256)) {
                $invalidProperties[] = "invalid value for 'protocolId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['protocolId']) && (mb_strlen($this->container['protocolId']) < 0)) {
                $invalidProperties[] = "invalid value for 'protocolId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocolId']) && !preg_match("/^[a-zA-Z0-9_-]{0,36}$/", $this->container['protocolId'])) {
                $invalidProperties[] = "invalid value for 'protocolId', must be conform to the pattern /^[a-zA-Z0-9_-]{0,36}$/.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 1024)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1024.";
            }
            if (!is_null($this->container['keepaliveTimeout']) && ($this->container['keepaliveTimeout'] > 3600)) {
                $invalidProperties[] = "invalid value for 'keepaliveTimeout', must be smaller than or equal to 3600.";
            }
            if (!is_null($this->container['keepaliveTimeout']) && ($this->container['keepaliveTimeout'] < 30)) {
                $invalidProperties[] = "invalid value for 'keepaliveTimeout', must be bigger than or equal to 30.";
            }
            if (!is_null($this->container['protocolType']) && !preg_match("/(TCP)/", $this->container['protocolType'])) {
                $invalidProperties[] = "invalid value for 'protocolType', must be conform to the pattern /(TCP)/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2048)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/.";
            }
            if (!is_null($this->container['codecMode']) && !preg_match("/(FGS|PLUGIN)/", $this->container['codecMode'])) {
                $invalidProperties[] = "invalid value for 'codecMode', must be conform to the pattern /(FGS|PLUGIN)/.";
            }
            if (!is_null($this->container['funcUrn']) && !preg_match("/^[a-zA-Z0-9_:-]{0,256}$/", $this->container['funcUrn'])) {
                $invalidProperties[] = "invalid value for 'funcUrn', must be conform to the pattern /^[a-zA-Z0-9_:-]{0,256}$/.";
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
    * Gets protocolId
    *  **参数说明**：泛协议配置ID。
    *
    * @return string|null
    */
    public function getProtocolId()
    {
        return $this->container['protocolId'];
    }

    /**
    * Sets protocolId
    *
    * @param string|null $protocolId **参数说明**：泛协议配置ID。
    *
    * @return $this
    */
    public function setProtocolId($protocolId)
    {
        $this->container['protocolId'] = $protocolId;
        return $this;
    }

    /**
    * Gets port
    *  **参数说明**：泛协议配置的端口号。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port **参数说明**：泛协议配置的端口号。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets keepaliveTimeout
    *  **参数说明**：连接空闲断链时间，单位（s）。
    *
    * @return int|null
    */
    public function getKeepaliveTimeout()
    {
        return $this->container['keepaliveTimeout'];
    }

    /**
    * Sets keepaliveTimeout
    *
    * @param int|null $keepaliveTimeout **参数说明**：连接空闲断链时间，单位（s）。
    *
    * @return $this
    */
    public function setKeepaliveTimeout($keepaliveTimeout)
    {
        $this->container['keepaliveTimeout'] = $keepaliveTimeout;
        return $this;
    }

    /**
    * Gets protocolType
    *  **参数说明**：协议类型。 **取值范围**： - TCP：通用TCP协议接入
    *
    * @return string|null
    */
    public function getProtocolType()
    {
        return $this->container['protocolType'];
    }

    /**
    * Sets protocolType
    *
    * @param string|null $protocolType **参数说明**：协议类型。 **取值范围**： - TCP：通用TCP协议接入
    *
    * @return $this
    */
    public function setProtocolType($protocolType)
    {
        $this->container['protocolType'] = $protocolType;
        return $this;
    }

    /**
    * Gets description
    *  **参数说明**：泛协议的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
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
    * @param string|null $description **参数说明**：泛协议的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets sslEnable
    *  **参数说明**：是否开启tls加密传输。
    *
    * @return bool|null
    */
    public function getSslEnable()
    {
        return $this->container['sslEnable'];
    }

    /**
    * Sets sslEnable
    *
    * @param bool|null $sslEnable **参数说明**：是否开启tls加密传输。
    *
    * @return $this
    */
    public function setSslEnable($sslEnable)
    {
        $this->container['sslEnable'] = $sslEnable;
        return $this;
    }

    /**
    * Gets frameDecodeConfigs
    *  **参数说明**：码流拆包组包配置列表。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\FrameDecodeConfig[]|null
    */
    public function getFrameDecodeConfigs()
    {
        return $this->container['frameDecodeConfigs'];
    }

    /**
    * Sets frameDecodeConfigs
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\FrameDecodeConfig[]|null $frameDecodeConfigs **参数说明**：码流拆包组包配置列表。
    *
    * @return $this
    */
    public function setFrameDecodeConfigs($frameDecodeConfigs)
    {
        $this->container['frameDecodeConfigs'] = $frameDecodeConfigs;
        return $this;
    }

    /**
    * Gets codecMode
    *  **参数说明**：编解码类型。 **取值范围**： - FGS：将编解码插件以函数形式部署到FunctionGraph。 - PLUGIN：将编解码插件以OSGI插件形式部署到设备接入平台，使用该方式需提工单联系技术支持。
    *
    * @return string|null
    */
    public function getCodecMode()
    {
        return $this->container['codecMode'];
    }

    /**
    * Sets codecMode
    *
    * @param string|null $codecMode **参数说明**：编解码类型。 **取值范围**： - FGS：将编解码插件以函数形式部署到FunctionGraph。 - PLUGIN：将编解码插件以OSGI插件形式部署到设备接入平台，使用该方式需提工单联系技术支持。
    *
    * @return $this
    */
    public function setCodecMode($codecMode)
    {
        $this->container['codecMode'] = $codecMode;
        return $this;
    }

    /**
    * Gets funcUrn
    *  **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，采用FGS进行编解码的对应函数地址。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、分隔符（:）的组合。
    *
    * @return string|null
    */
    public function getFuncUrn()
    {
        return $this->container['funcUrn'];
    }

    /**
    * Sets funcUrn
    *
    * @param string|null $funcUrn **参数说明**：函数的URN（Uniform Resource Name），唯一标识函数，采用FGS进行编解码的对应函数地址。 **取值范围**：长度不超过256，只允许字母、数字、下划线（_）、连接符（-）、分隔符（:）的组合。
    *
    * @return $this
    */
    public function setFuncUrn($funcUrn)
    {
        $this->container['funcUrn'] = $funcUrn;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数说明**：在物联网平台查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime **参数说明**：在物联网平台查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
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
    *  **参数说明**：在物联网平台更新查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime **参数说明**：在物联网平台更新查询自定义鉴权的时间。格式：yyyyMMdd'T'HHmmss'Z'，如：20151212T121212Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

