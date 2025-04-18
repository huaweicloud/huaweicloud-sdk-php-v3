<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThirdPartyModelConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThirdPartyModelConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  第三方语言模型应用ID。
    * appKey  第三方语言模型应用密钥。
    * llmUrl  第三方语言模型地址。
    * isStream  是否采用流式响应。
    * chatRounds  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词（asr_type选择EI_SIS时生效）
    * asrType  asrType
    * asrAccount  ASR帐号（asr_type选择EI_SIS时不需要配置）。
    * asrSecret  ASR密钥（asr_type选择EI_SIS时不需要配置）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'appKey' => 'string',
            'llmUrl' => 'string',
            'isStream' => 'bool',
            'chatRounds' => 'int',
            'sisRegion' => 'int',
            'sisProjectId' => 'string',
            'enableHotWords' => 'bool',
            'asrType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AsrTypeEnum',
            'asrAccount' => 'string',
            'asrSecret' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  第三方语言模型应用ID。
    * appKey  第三方语言模型应用密钥。
    * llmUrl  第三方语言模型地址。
    * isStream  是否采用流式响应。
    * chatRounds  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词（asr_type选择EI_SIS时生效）
    * asrType  asrType
    * asrAccount  ASR帐号（asr_type选择EI_SIS时不需要配置）。
    * asrSecret  ASR密钥（asr_type选择EI_SIS时不需要配置）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'appKey' => null,
        'llmUrl' => null,
        'isStream' => null,
        'chatRounds' => null,
        'sisRegion' => null,
        'sisProjectId' => null,
        'enableHotWords' => null,
        'asrType' => null,
        'asrAccount' => null,
        'asrSecret' => null
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
    * appId  第三方语言模型应用ID。
    * appKey  第三方语言模型应用密钥。
    * llmUrl  第三方语言模型地址。
    * isStream  是否采用流式响应。
    * chatRounds  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词（asr_type选择EI_SIS时生效）
    * asrType  asrType
    * asrAccount  ASR帐号（asr_type选择EI_SIS时不需要配置）。
    * asrSecret  ASR密钥（asr_type选择EI_SIS时不需要配置）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'appKey' => 'app_key',
            'llmUrl' => 'llm_url',
            'isStream' => 'is_stream',
            'chatRounds' => 'chat_rounds',
            'sisRegion' => 'sis_region',
            'sisProjectId' => 'sis_project_id',
            'enableHotWords' => 'enable_hot_words',
            'asrType' => 'asr_type',
            'asrAccount' => 'asr_account',
            'asrSecret' => 'asr_secret'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  第三方语言模型应用ID。
    * appKey  第三方语言模型应用密钥。
    * llmUrl  第三方语言模型地址。
    * isStream  是否采用流式响应。
    * chatRounds  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词（asr_type选择EI_SIS时生效）
    * asrType  asrType
    * asrAccount  ASR帐号（asr_type选择EI_SIS时不需要配置）。
    * asrSecret  ASR密钥（asr_type选择EI_SIS时不需要配置）。
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'appKey' => 'setAppKey',
            'llmUrl' => 'setLlmUrl',
            'isStream' => 'setIsStream',
            'chatRounds' => 'setChatRounds',
            'sisRegion' => 'setSisRegion',
            'sisProjectId' => 'setSisProjectId',
            'enableHotWords' => 'setEnableHotWords',
            'asrType' => 'setAsrType',
            'asrAccount' => 'setAsrAccount',
            'asrSecret' => 'setAsrSecret'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  第三方语言模型应用ID。
    * appKey  第三方语言模型应用密钥。
    * llmUrl  第三方语言模型地址。
    * isStream  是否采用流式响应。
    * chatRounds  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词（asr_type选择EI_SIS时生效）
    * asrType  asrType
    * asrAccount  ASR帐号（asr_type选择EI_SIS时不需要配置）。
    * asrSecret  ASR密钥（asr_type选择EI_SIS时不需要配置）。
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'appKey' => 'getAppKey',
            'llmUrl' => 'getLlmUrl',
            'isStream' => 'getIsStream',
            'chatRounds' => 'getChatRounds',
            'sisRegion' => 'getSisRegion',
            'sisProjectId' => 'getSisProjectId',
            'enableHotWords' => 'getEnableHotWords',
            'asrType' => 'getAsrType',
            'asrAccount' => 'getAsrAccount',
            'asrSecret' => 'getAsrSecret'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['llmUrl'] = isset($data['llmUrl']) ? $data['llmUrl'] : null;
        $this->container['isStream'] = isset($data['isStream']) ? $data['isStream'] : null;
        $this->container['chatRounds'] = isset($data['chatRounds']) ? $data['chatRounds'] : null;
        $this->container['sisRegion'] = isset($data['sisRegion']) ? $data['sisRegion'] : null;
        $this->container['sisProjectId'] = isset($data['sisProjectId']) ? $data['sisProjectId'] : null;
        $this->container['enableHotWords'] = isset($data['enableHotWords']) ? $data['enableHotWords'] : null;
        $this->container['asrType'] = isset($data['asrType']) ? $data['asrType'] : null;
        $this->container['asrAccount'] = isset($data['asrAccount']) ? $data['asrAccount'] : null;
        $this->container['asrSecret'] = isset($data['asrSecret']) ? $data['asrSecret'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 64)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appKey']) && (mb_strlen($this->container['appKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'appKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appKey']) && (mb_strlen($this->container['appKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'appKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['llmUrl']) && (mb_strlen($this->container['llmUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'llmUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['llmUrl']) && (mb_strlen($this->container['llmUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'llmUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chatRounds']) && ($this->container['chatRounds'] > 10)) {
                $invalidProperties[] = "invalid value for 'chatRounds', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['chatRounds']) && ($this->container['chatRounds'] < 1)) {
                $invalidProperties[] = "invalid value for 'chatRounds', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sisRegion']) && ($this->container['sisRegion'] > 32)) {
                $invalidProperties[] = "invalid value for 'sisRegion', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sisRegion']) && ($this->container['sisRegion'] < 0)) {
                $invalidProperties[] = "invalid value for 'sisRegion', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['asrAccount']) && (mb_strlen($this->container['asrAccount']) > 64)) {
                $invalidProperties[] = "invalid value for 'asrAccount', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['asrAccount']) && (mb_strlen($this->container['asrAccount']) < 0)) {
                $invalidProperties[] = "invalid value for 'asrAccount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['asrSecret']) && (mb_strlen($this->container['asrSecret']) > 128)) {
                $invalidProperties[] = "invalid value for 'asrSecret', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['asrSecret']) && (mb_strlen($this->container['asrSecret']) < 0)) {
                $invalidProperties[] = "invalid value for 'asrSecret', the character length must be bigger than or equal to 0.";
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
    * Gets appId
    *  第三方语言模型应用ID。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 第三方语言模型应用ID。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appKey
    *  第三方语言模型应用密钥。
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
    * @param string|null $appKey 第三方语言模型应用密钥。
    *
    * @return $this
    */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;
        return $this;
    }

    /**
    * Gets llmUrl
    *  第三方语言模型地址。
    *
    * @return string|null
    */
    public function getLlmUrl()
    {
        return $this->container['llmUrl'];
    }

    /**
    * Sets llmUrl
    *
    * @param string|null $llmUrl 第三方语言模型地址。
    *
    * @return $this
    */
    public function setLlmUrl($llmUrl)
    {
        $this->container['llmUrl'] = $llmUrl;
        return $this;
    }

    /**
    * Gets isStream
    *  是否采用流式响应。
    *
    * @return bool|null
    */
    public function getIsStream()
    {
        return $this->container['isStream'];
    }

    /**
    * Sets isStream
    *
    * @param bool|null $isStream 是否采用流式响应。
    *
    * @return $this
    */
    public function setIsStream($isStream)
    {
        $this->container['isStream'] = $isStream;
        return $this;
    }

    /**
    * Gets chatRounds
    *  支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    *
    * @return int|null
    */
    public function getChatRounds()
    {
        return $this->container['chatRounds'];
    }

    /**
    * Sets chatRounds
    *
    * @param int|null $chatRounds 支持的多轮对话数量，取值大于1时，请求第三方语言模型时将携带历史对话信息。
    *
    * @return $this
    */
    public function setChatRounds($chatRounds)
    {
        $this->container['chatRounds'] = $chatRounds;
        return $this;
    }

    /**
    * Gets sisRegion
    *  SIS所在区域
    *
    * @return int|null
    */
    public function getSisRegion()
    {
        return $this->container['sisRegion'];
    }

    /**
    * Sets sisRegion
    *
    * @param int|null $sisRegion SIS所在区域
    *
    * @return $this
    */
    public function setSisRegion($sisRegion)
    {
        $this->container['sisRegion'] = $sisRegion;
        return $this;
    }

    /**
    * Gets sisProjectId
    *  SIS所在区域的projectId
    *
    * @return string|null
    */
    public function getSisProjectId()
    {
        return $this->container['sisProjectId'];
    }

    /**
    * Sets sisProjectId
    *
    * @param string|null $sisProjectId SIS所在区域的projectId
    *
    * @return $this
    */
    public function setSisProjectId($sisProjectId)
    {
        $this->container['sisProjectId'] = $sisProjectId;
        return $this;
    }

    /**
    * Gets enableHotWords
    *  是否开启热词（asr_type选择EI_SIS时生效）
    *
    * @return bool|null
    */
    public function getEnableHotWords()
    {
        return $this->container['enableHotWords'];
    }

    /**
    * Sets enableHotWords
    *
    * @param bool|null $enableHotWords 是否开启热词（asr_type选择EI_SIS时生效）
    *
    * @return $this
    */
    public function setEnableHotWords($enableHotWords)
    {
        $this->container['enableHotWords'] = $enableHotWords;
        return $this;
    }

    /**
    * Gets asrType
    *  asrType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AsrTypeEnum|null
    */
    public function getAsrType()
    {
        return $this->container['asrType'];
    }

    /**
    * Sets asrType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AsrTypeEnum|null $asrType asrType
    *
    * @return $this
    */
    public function setAsrType($asrType)
    {
        $this->container['asrType'] = $asrType;
        return $this;
    }

    /**
    * Gets asrAccount
    *  ASR帐号（asr_type选择EI_SIS时不需要配置）。
    *
    * @return string|null
    */
    public function getAsrAccount()
    {
        return $this->container['asrAccount'];
    }

    /**
    * Sets asrAccount
    *
    * @param string|null $asrAccount ASR帐号（asr_type选择EI_SIS时不需要配置）。
    *
    * @return $this
    */
    public function setAsrAccount($asrAccount)
    {
        $this->container['asrAccount'] = $asrAccount;
        return $this;
    }

    /**
    * Gets asrSecret
    *  ASR密钥（asr_type选择EI_SIS时不需要配置）。
    *
    * @return string|null
    */
    public function getAsrSecret()
    {
        return $this->container['asrSecret'];
    }

    /**
    * Sets asrSecret
    *
    * @param string|null $asrSecret ASR密钥（asr_type选择EI_SIS时不需要配置）。
    *
    * @return $this
    */
    public function setAsrSecret($asrSecret)
    {
        $this->container['asrSecret'] = $asrSecret;
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

