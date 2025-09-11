<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListKmsTdeKeyResponseBodyKeyDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListKmsTdeKeyResponseBody_key_details';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  **参数解释**: 秘钥ID。 **取值范围**: 不涉及。
    * defaultKeyFlag  **参数解释**: 默认主密钥标识。 **取值范围**: 默认主密钥标识为1，非默认标识为0。
    * keyAlias  **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    * keySpec  **参数解释**: 密钥生成算法。 **取值范围**: - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2 - ALL
    * domainId  **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    * keyState  **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'defaultKeyFlag' => 'string',
            'keyAlias' => 'string',
            'keySpec' => 'string',
            'domainId' => 'string',
            'keyState' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  **参数解释**: 秘钥ID。 **取值范围**: 不涉及。
    * defaultKeyFlag  **参数解释**: 默认主密钥标识。 **取值范围**: 默认主密钥标识为1，非默认标识为0。
    * keyAlias  **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    * keySpec  **参数解释**: 密钥生成算法。 **取值范围**: - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2 - ALL
    * domainId  **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    * keyState  **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'defaultKeyFlag' => null,
        'keyAlias' => null,
        'keySpec' => null,
        'domainId' => null,
        'keyState' => null
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
    * keyId  **参数解释**: 秘钥ID。 **取值范围**: 不涉及。
    * defaultKeyFlag  **参数解释**: 默认主密钥标识。 **取值范围**: 默认主密钥标识为1，非默认标识为0。
    * keyAlias  **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    * keySpec  **参数解释**: 密钥生成算法。 **取值范围**: - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2 - ALL
    * domainId  **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    * keyState  **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'defaultKeyFlag' => 'default_key_flag',
            'keyAlias' => 'key_alias',
            'keySpec' => 'key_spec',
            'domainId' => 'domain_id',
            'keyState' => 'key_state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  **参数解释**: 秘钥ID。 **取值范围**: 不涉及。
    * defaultKeyFlag  **参数解释**: 默认主密钥标识。 **取值范围**: 默认主密钥标识为1，非默认标识为0。
    * keyAlias  **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    * keySpec  **参数解释**: 密钥生成算法。 **取值范围**: - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2 - ALL
    * domainId  **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    * keyState  **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'defaultKeyFlag' => 'setDefaultKeyFlag',
            'keyAlias' => 'setKeyAlias',
            'keySpec' => 'setKeySpec',
            'domainId' => 'setDomainId',
            'keyState' => 'setKeyState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  **参数解释**: 秘钥ID。 **取值范围**: 不涉及。
    * defaultKeyFlag  **参数解释**: 默认主密钥标识。 **取值范围**: 默认主密钥标识为1，非默认标识为0。
    * keyAlias  **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    * keySpec  **参数解释**: 密钥生成算法。 **取值范围**: - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2 - ALL
    * domainId  **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    * keyState  **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'defaultKeyFlag' => 'getDefaultKeyFlag',
            'keyAlias' => 'getKeyAlias',
            'keySpec' => 'getKeySpec',
            'domainId' => 'getDomainId',
            'keyState' => 'getKeyState'
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['defaultKeyFlag'] = isset($data['defaultKeyFlag']) ? $data['defaultKeyFlag'] : null;
        $this->container['keyAlias'] = isset($data['keyAlias']) ? $data['keyAlias'] : null;
        $this->container['keySpec'] = isset($data['keySpec']) ? $data['keySpec'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['keyState'] = isset($data['keyState']) ? $data['keyState'] : null;
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
    * Gets keyId
    *  **参数解释**: 秘钥ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId **参数解释**: 秘钥ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets defaultKeyFlag
    *  **参数解释**: 默认主密钥标识。 **取值范围**: 默认主密钥标识为1，非默认标识为0。
    *
    * @return string|null
    */
    public function getDefaultKeyFlag()
    {
        return $this->container['defaultKeyFlag'];
    }

    /**
    * Sets defaultKeyFlag
    *
    * @param string|null $defaultKeyFlag **参数解释**: 默认主密钥标识。 **取值范围**: 默认主密钥标识为1，非默认标识为0。
    *
    * @return $this
    */
    public function setDefaultKeyFlag($defaultKeyFlag)
    {
        $this->container['defaultKeyFlag'] = $defaultKeyFlag;
        return $this;
    }

    /**
    * Gets keyAlias
    *  **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getKeyAlias()
    {
        return $this->container['keyAlias'];
    }

    /**
    * Sets keyAlias
    *
    * @param string|null $keyAlias **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setKeyAlias($keyAlias)
    {
        $this->container['keyAlias'] = $keyAlias;
        return $this;
    }

    /**
    * Gets keySpec
    *  **参数解释**: 密钥生成算法。 **取值范围**: - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2 - ALL
    *
    * @return string|null
    */
    public function getKeySpec()
    {
        return $this->container['keySpec'];
    }

    /**
    * Sets keySpec
    *
    * @param string|null $keySpec **参数解释**: 密钥生成算法。 **取值范围**: - AES_256 - SM4 - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2 - ALL
    *
    * @return $this
    */
    public function setKeySpec($keySpec)
    {
        $this->container['keySpec'] = $keySpec;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets keyState
    *  **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @return string|null
    */
    public function getKeyState()
    {
        return $this->container['keyState'];
    }

    /**
    * Sets keyState
    *
    * @param string|null $keyState **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @return $this
    */
    public function setKeyState($keyState)
    {
        $this->container['keyState'] = $keyState;
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

