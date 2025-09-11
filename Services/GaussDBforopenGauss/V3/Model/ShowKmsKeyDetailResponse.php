<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKmsKeyDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKmsKeyDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  **参数解释**: 秘钥ID。 **取值范围**: 不涉及。
    * keyAlias  **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    * keyState  **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'keyAlias' => 'string',
            'domainId' => 'string',
            'keyState' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  **参数解释**: 秘钥ID。 **取值范围**: 不涉及。
    * keyAlias  **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    * keyState  **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'keyAlias' => null,
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
    * keyAlias  **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    * keyState  **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'keyAlias' => 'key_alias',
            'domainId' => 'domain_id',
            'keyState' => 'key_state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  **参数解释**: 秘钥ID。 **取值范围**: 不涉及。
    * keyAlias  **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    * keyState  **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'keyAlias' => 'setKeyAlias',
            'domainId' => 'setDomainId',
            'keyState' => 'setKeyState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  **参数解释**: 秘钥ID。 **取值范围**: 不涉及。
    * keyAlias  **参数解释**: 密钥别名。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 用户域ID。 **取值范围**: 不涉及。
    * keyState  **参数解释**: 秘钥状态。 **取值范围**: - “1”表示待激活状态。 - “2”表示启用状态。 - “3”表示禁用状态。 - “4”表示计划删除状态。 - “5”表示等待导入状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'keyAlias' => 'getKeyAlias',
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
        $this->container['keyAlias'] = isset($data['keyAlias']) ? $data['keyAlias'] : null;
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

