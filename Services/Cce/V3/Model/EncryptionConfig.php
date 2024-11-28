<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EncryptionConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EncryptionConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mode  **参数解释**： 加密模式，取值为Default或KMS。默认为Default，即使用cce本地密钥加密。若使用KMS加密模式则使用用户自定义密钥或默认密钥加密secret资源。 若用户在创建时未填写，则集群查询接口中默认会返回Default。 **约束限制**： 不涉及 **取值范围**： 取值范围：[Default, KMS]; **默认取值**： Default
    * kmsKeyId  **参数解释**： kms密钥ID - 集群创建API中，如果mode字段设置为Default，无需填写该字段；如果mode字段设置为KMS，则支持填写该字段。若字段为空，则默认使用KMS默认密钥进行填充，默认密钥不存在时云服务将自动为用户创建cce/default默认密钥。 用户需使用真实存在的KMS密钥，并且在集群生命周期结束前，禁止删除、禁用密钥等操作，防止集群功能异常（集群设置该密钥后不允许修改）。  - 集群查询API中，如果mode字段设置为Default，则该字段返回为空；若mode字段设置为KMS，则该字段为具体的密钥ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mode' => 'string',
            'kmsKeyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mode  **参数解释**： 加密模式，取值为Default或KMS。默认为Default，即使用cce本地密钥加密。若使用KMS加密模式则使用用户自定义密钥或默认密钥加密secret资源。 若用户在创建时未填写，则集群查询接口中默认会返回Default。 **约束限制**： 不涉及 **取值范围**： 取值范围：[Default, KMS]; **默认取值**： Default
    * kmsKeyId  **参数解释**： kms密钥ID - 集群创建API中，如果mode字段设置为Default，无需填写该字段；如果mode字段设置为KMS，则支持填写该字段。若字段为空，则默认使用KMS默认密钥进行填充，默认密钥不存在时云服务将自动为用户创建cce/default默认密钥。 用户需使用真实存在的KMS密钥，并且在集群生命周期结束前，禁止删除、禁用密钥等操作，防止集群功能异常（集群设置该密钥后不允许修改）。  - 集群查询API中，如果mode字段设置为Default，则该字段返回为空；若mode字段设置为KMS，则该字段为具体的密钥ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mode' => null,
        'kmsKeyId' => null
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
    * mode  **参数解释**： 加密模式，取值为Default或KMS。默认为Default，即使用cce本地密钥加密。若使用KMS加密模式则使用用户自定义密钥或默认密钥加密secret资源。 若用户在创建时未填写，则集群查询接口中默认会返回Default。 **约束限制**： 不涉及 **取值范围**： 取值范围：[Default, KMS]; **默认取值**： Default
    * kmsKeyId  **参数解释**： kms密钥ID - 集群创建API中，如果mode字段设置为Default，无需填写该字段；如果mode字段设置为KMS，则支持填写该字段。若字段为空，则默认使用KMS默认密钥进行填充，默认密钥不存在时云服务将自动为用户创建cce/default默认密钥。 用户需使用真实存在的KMS密钥，并且在集群生命周期结束前，禁止删除、禁用密钥等操作，防止集群功能异常（集群设置该密钥后不允许修改）。  - 集群查询API中，如果mode字段设置为Default，则该字段返回为空；若mode字段设置为KMS，则该字段为具体的密钥ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mode' => 'mode',
            'kmsKeyId' => 'kmsKeyID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mode  **参数解释**： 加密模式，取值为Default或KMS。默认为Default，即使用cce本地密钥加密。若使用KMS加密模式则使用用户自定义密钥或默认密钥加密secret资源。 若用户在创建时未填写，则集群查询接口中默认会返回Default。 **约束限制**： 不涉及 **取值范围**： 取值范围：[Default, KMS]; **默认取值**： Default
    * kmsKeyId  **参数解释**： kms密钥ID - 集群创建API中，如果mode字段设置为Default，无需填写该字段；如果mode字段设置为KMS，则支持填写该字段。若字段为空，则默认使用KMS默认密钥进行填充，默认密钥不存在时云服务将自动为用户创建cce/default默认密钥。 用户需使用真实存在的KMS密钥，并且在集群生命周期结束前，禁止删除、禁用密钥等操作，防止集群功能异常（集群设置该密钥后不允许修改）。  - 集群查询API中，如果mode字段设置为Default，则该字段返回为空；若mode字段设置为KMS，则该字段为具体的密钥ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'mode' => 'setMode',
            'kmsKeyId' => 'setKmsKeyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mode  **参数解释**： 加密模式，取值为Default或KMS。默认为Default，即使用cce本地密钥加密。若使用KMS加密模式则使用用户自定义密钥或默认密钥加密secret资源。 若用户在创建时未填写，则集群查询接口中默认会返回Default。 **约束限制**： 不涉及 **取值范围**： 取值范围：[Default, KMS]; **默认取值**： Default
    * kmsKeyId  **参数解释**： kms密钥ID - 集群创建API中，如果mode字段设置为Default，无需填写该字段；如果mode字段设置为KMS，则支持填写该字段。若字段为空，则默认使用KMS默认密钥进行填充，默认密钥不存在时云服务将自动为用户创建cce/default默认密钥。 用户需使用真实存在的KMS密钥，并且在集群生命周期结束前，禁止删除、禁用密钥等操作，防止集群功能异常（集群设置该密钥后不允许修改）。  - 集群查询API中，如果mode字段设置为Default，则该字段返回为空；若mode字段设置为KMS，则该字段为具体的密钥ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'mode' => 'getMode',
            'kmsKeyId' => 'getKmsKeyId'
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
    const MODE__DEFAULT = 'Default';
    const MODE_KMS = 'KMS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE__DEFAULT,
            self::MODE_KMS,
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['kmsKeyId'] = isset($data['kmsKeyId']) ? $data['kmsKeyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
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
    * Gets mode
    *  **参数解释**： 加密模式，取值为Default或KMS。默认为Default，即使用cce本地密钥加密。若使用KMS加密模式则使用用户自定义密钥或默认密钥加密secret资源。 若用户在创建时未填写，则集群查询接口中默认会返回Default。 **约束限制**： 不涉及 **取值范围**： 取值范围：[Default, KMS]; **默认取值**： Default
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
    * @param string|null $mode **参数解释**： 加密模式，取值为Default或KMS。默认为Default，即使用cce本地密钥加密。若使用KMS加密模式则使用用户自定义密钥或默认密钥加密secret资源。 若用户在创建时未填写，则集群查询接口中默认会返回Default。 **约束限制**： 不涉及 **取值范围**： 取值范围：[Default, KMS]; **默认取值**： Default
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets kmsKeyId
    *  **参数解释**： kms密钥ID - 集群创建API中，如果mode字段设置为Default，无需填写该字段；如果mode字段设置为KMS，则支持填写该字段。若字段为空，则默认使用KMS默认密钥进行填充，默认密钥不存在时云服务将自动为用户创建cce/default默认密钥。 用户需使用真实存在的KMS密钥，并且在集群生命周期结束前，禁止删除、禁用密钥等操作，防止集群功能异常（集群设置该密钥后不允许修改）。  - 集群查询API中，如果mode字段设置为Default，则该字段返回为空；若mode字段设置为KMS，则该字段为具体的密钥ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getKmsKeyId()
    {
        return $this->container['kmsKeyId'];
    }

    /**
    * Sets kmsKeyId
    *
    * @param string|null $kmsKeyId **参数解释**： kms密钥ID - 集群创建API中，如果mode字段设置为Default，无需填写该字段；如果mode字段设置为KMS，则支持填写该字段。若字段为空，则默认使用KMS默认密钥进行填充，默认密钥不存在时云服务将自动为用户创建cce/default默认密钥。 用户需使用真实存在的KMS密钥，并且在集群生命周期结束前，禁止删除、禁用密钥等操作，防止集群功能异常（集群设置该密钥后不允许修改）。  - 集群查询API中，如果mode字段设置为Default，则该字段返回为空；若mode字段设置为KMS，则该字段为具体的密钥ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setKmsKeyId($kmsKeyId)
    {
        $this->container['kmsKeyId'] = $kmsKeyId;
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

