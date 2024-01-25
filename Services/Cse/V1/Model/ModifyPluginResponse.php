<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyPluginResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyPluginResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imagePullPolicy  拉取OCI镜像的行为
    * imagePullSecret  拉取OCI 镜像的凭据
    * phase  确定插件将在过滤器链中的何处注入。
    * pluginConfig  传递给插件的配置。
    * pluginName  插件名。
    * priority  插件的调用优先级。
    * sha256  用于校验插件和容器的校验和。
    * url  插件或容器的下载地址。
    * verificationKey  校验值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imagePullPolicy' => 'string',
            'imagePullSecret' => 'string',
            'phase' => 'string',
            'pluginConfig' => 'object',
            'pluginName' => 'string',
            'priority' => 'int',
            'sha256' => 'string',
            'url' => 'string',
            'verificationKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imagePullPolicy  拉取OCI镜像的行为
    * imagePullSecret  拉取OCI 镜像的凭据
    * phase  确定插件将在过滤器链中的何处注入。
    * pluginConfig  传递给插件的配置。
    * pluginName  插件名。
    * priority  插件的调用优先级。
    * sha256  用于校验插件和容器的校验和。
    * url  插件或容器的下载地址。
    * verificationKey  校验值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imagePullPolicy' => null,
        'imagePullSecret' => null,
        'phase' => null,
        'pluginConfig' => null,
        'pluginName' => null,
        'priority' => null,
        'sha256' => null,
        'url' => null,
        'verificationKey' => null
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
    * imagePullPolicy  拉取OCI镜像的行为
    * imagePullSecret  拉取OCI 镜像的凭据
    * phase  确定插件将在过滤器链中的何处注入。
    * pluginConfig  传递给插件的配置。
    * pluginName  插件名。
    * priority  插件的调用优先级。
    * sha256  用于校验插件和容器的校验和。
    * url  插件或容器的下载地址。
    * verificationKey  校验值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imagePullPolicy' => 'imagePullPolicy',
            'imagePullSecret' => 'imagePullSecret',
            'phase' => 'phase',
            'pluginConfig' => 'pluginConfig',
            'pluginName' => 'pluginName',
            'priority' => 'priority',
            'sha256' => 'sha256',
            'url' => 'url',
            'verificationKey' => 'verificationKey'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imagePullPolicy  拉取OCI镜像的行为
    * imagePullSecret  拉取OCI 镜像的凭据
    * phase  确定插件将在过滤器链中的何处注入。
    * pluginConfig  传递给插件的配置。
    * pluginName  插件名。
    * priority  插件的调用优先级。
    * sha256  用于校验插件和容器的校验和。
    * url  插件或容器的下载地址。
    * verificationKey  校验值。
    *
    * @var string[]
    */
    protected static $setters = [
            'imagePullPolicy' => 'setImagePullPolicy',
            'imagePullSecret' => 'setImagePullSecret',
            'phase' => 'setPhase',
            'pluginConfig' => 'setPluginConfig',
            'pluginName' => 'setPluginName',
            'priority' => 'setPriority',
            'sha256' => 'setSha256',
            'url' => 'setUrl',
            'verificationKey' => 'setVerificationKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imagePullPolicy  拉取OCI镜像的行为
    * imagePullSecret  拉取OCI 镜像的凭据
    * phase  确定插件将在过滤器链中的何处注入。
    * pluginConfig  传递给插件的配置。
    * pluginName  插件名。
    * priority  插件的调用优先级。
    * sha256  用于校验插件和容器的校验和。
    * url  插件或容器的下载地址。
    * verificationKey  校验值。
    *
    * @var string[]
    */
    protected static $getters = [
            'imagePullPolicy' => 'getImagePullPolicy',
            'imagePullSecret' => 'getImagePullSecret',
            'phase' => 'getPhase',
            'pluginConfig' => 'getPluginConfig',
            'pluginName' => 'getPluginName',
            'priority' => 'getPriority',
            'sha256' => 'getSha256',
            'url' => 'getUrl',
            'verificationKey' => 'getVerificationKey'
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
    const IMAGE_PULL_POLICY_UNSPECIFIED_POLICY = 'UNSPECIFIED_POLICY';
    const IMAGE_PULL_POLICY_IF_NOT_PRESENT = 'IfNotPresent';
    const IMAGE_PULL_POLICY_ALWAYS = 'Always';
    const PHASE_UNSPECIFIED_PHASE = 'UNSPECIFIED_PHASE';
    const PHASE_AUTHN = 'AUTHN';
    const PHASE_AUTHZ = 'AUTHZ';
    const PHASE_STATS = 'STATS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getImagePullPolicyAllowableValues()
    {
        return [
            self::IMAGE_PULL_POLICY_UNSPECIFIED_POLICY,
            self::IMAGE_PULL_POLICY_IF_NOT_PRESENT,
            self::IMAGE_PULL_POLICY_ALWAYS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPhaseAllowableValues()
    {
        return [
            self::PHASE_UNSPECIFIED_PHASE,
            self::PHASE_AUTHN,
            self::PHASE_AUTHZ,
            self::PHASE_STATS,
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
        $this->container['imagePullPolicy'] = isset($data['imagePullPolicy']) ? $data['imagePullPolicy'] : null;
        $this->container['imagePullSecret'] = isset($data['imagePullSecret']) ? $data['imagePullSecret'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['pluginConfig'] = isset($data['pluginConfig']) ? $data['pluginConfig'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['sha256'] = isset($data['sha256']) ? $data['sha256'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['verificationKey'] = isset($data['verificationKey']) ? $data['verificationKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getImagePullPolicyAllowableValues();
                if (!is_null($this->container['imagePullPolicy']) && !in_array($this->container['imagePullPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'imagePullPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPhaseAllowableValues();
                if (!is_null($this->container['phase']) && !in_array($this->container['phase'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'phase', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets imagePullPolicy
    *  拉取OCI镜像的行为
    *
    * @return string|null
    */
    public function getImagePullPolicy()
    {
        return $this->container['imagePullPolicy'];
    }

    /**
    * Sets imagePullPolicy
    *
    * @param string|null $imagePullPolicy 拉取OCI镜像的行为
    *
    * @return $this
    */
    public function setImagePullPolicy($imagePullPolicy)
    {
        $this->container['imagePullPolicy'] = $imagePullPolicy;
        return $this;
    }

    /**
    * Gets imagePullSecret
    *  拉取OCI 镜像的凭据
    *
    * @return string|null
    */
    public function getImagePullSecret()
    {
        return $this->container['imagePullSecret'];
    }

    /**
    * Sets imagePullSecret
    *
    * @param string|null $imagePullSecret 拉取OCI 镜像的凭据
    *
    * @return $this
    */
    public function setImagePullSecret($imagePullSecret)
    {
        $this->container['imagePullSecret'] = $imagePullSecret;
        return $this;
    }

    /**
    * Gets phase
    *  确定插件将在过滤器链中的何处注入。
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase 确定插件将在过滤器链中的何处注入。
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets pluginConfig
    *  传递给插件的配置。
    *
    * @return object|null
    */
    public function getPluginConfig()
    {
        return $this->container['pluginConfig'];
    }

    /**
    * Sets pluginConfig
    *
    * @param object|null $pluginConfig 传递给插件的配置。
    *
    * @return $this
    */
    public function setPluginConfig($pluginConfig)
    {
        $this->container['pluginConfig'] = $pluginConfig;
        return $this;
    }

    /**
    * Gets pluginName
    *  插件名。
    *
    * @return string|null
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string|null $pluginName 插件名。
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets priority
    *  插件的调用优先级。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 插件的调用优先级。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets sha256
    *  用于校验插件和容器的校验和。
    *
    * @return string|null
    */
    public function getSha256()
    {
        return $this->container['sha256'];
    }

    /**
    * Sets sha256
    *
    * @param string|null $sha256 用于校验插件和容器的校验和。
    *
    * @return $this
    */
    public function setSha256($sha256)
    {
        $this->container['sha256'] = $sha256;
        return $this;
    }

    /**
    * Gets url
    *  插件或容器的下载地址。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 插件或容器的下载地址。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets verificationKey
    *  校验值。
    *
    * @return string|null
    */
    public function getVerificationKey()
    {
        return $this->container['verificationKey'];
    }

    /**
    * Sets verificationKey
    *
    * @param string|null $verificationKey 校验值。
    *
    * @return $this
    */
    public function setVerificationKey($verificationKey)
    {
        $this->container['verificationKey'] = $verificationKey;
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

