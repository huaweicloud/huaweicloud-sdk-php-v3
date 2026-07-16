<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Credentials implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Credentials';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessKeyId  **参数解释**： 临时安全凭证的AK **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * secretAccessKey  **参数解释：** 临时安全凭证的SK **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityToken  **参数解释**： 临时安全凭证的security_token **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expiration  **参数解释：** 临时安全凭证的失效时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessKeyId' => 'string',
            'secretAccessKey' => 'string',
            'securityToken' => 'string',
            'expiration' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessKeyId  **参数解释**： 临时安全凭证的AK **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * secretAccessKey  **参数解释：** 临时安全凭证的SK **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityToken  **参数解释**： 临时安全凭证的security_token **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expiration  **参数解释：** 临时安全凭证的失效时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessKeyId' => null,
        'secretAccessKey' => null,
        'securityToken' => null,
        'expiration' => null
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
    * accessKeyId  **参数解释**： 临时安全凭证的AK **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * secretAccessKey  **参数解释：** 临时安全凭证的SK **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityToken  **参数解释**： 临时安全凭证的security_token **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expiration  **参数解释：** 临时安全凭证的失效时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessKeyId' => 'accessKeyId',
            'secretAccessKey' => 'secretAccessKey',
            'securityToken' => 'securityToken',
            'expiration' => 'expiration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessKeyId  **参数解释**： 临时安全凭证的AK **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * secretAccessKey  **参数解释：** 临时安全凭证的SK **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityToken  **参数解释**： 临时安全凭证的security_token **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expiration  **参数解释：** 临时安全凭证的失效时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'accessKeyId' => 'setAccessKeyId',
            'secretAccessKey' => 'setSecretAccessKey',
            'securityToken' => 'setSecurityToken',
            'expiration' => 'setExpiration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessKeyId  **参数解释**： 临时安全凭证的AK **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * secretAccessKey  **参数解释：** 临时安全凭证的SK **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * securityToken  **参数解释**： 临时安全凭证的security_token **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expiration  **参数解释：** 临时安全凭证的失效时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'accessKeyId' => 'getAccessKeyId',
            'secretAccessKey' => 'getSecretAccessKey',
            'securityToken' => 'getSecurityToken',
            'expiration' => 'getExpiration'
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
        $this->container['accessKeyId'] = isset($data['accessKeyId']) ? $data['accessKeyId'] : null;
        $this->container['secretAccessKey'] = isset($data['secretAccessKey']) ? $data['secretAccessKey'] : null;
        $this->container['securityToken'] = isset($data['securityToken']) ? $data['securityToken'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
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
    * Gets accessKeyId
    *  **参数解释**： 临时安全凭证的AK **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAccessKeyId()
    {
        return $this->container['accessKeyId'];
    }

    /**
    * Sets accessKeyId
    *
    * @param string|null $accessKeyId **参数解释**： 临时安全凭证的AK **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAccessKeyId($accessKeyId)
    {
        $this->container['accessKeyId'] = $accessKeyId;
        return $this;
    }

    /**
    * Gets secretAccessKey
    *  **参数解释：** 临时安全凭证的SK **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSecretAccessKey()
    {
        return $this->container['secretAccessKey'];
    }

    /**
    * Sets secretAccessKey
    *
    * @param string|null $secretAccessKey **参数解释：** 临时安全凭证的SK **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSecretAccessKey($secretAccessKey)
    {
        $this->container['secretAccessKey'] = $secretAccessKey;
        return $this;
    }

    /**
    * Gets securityToken
    *  **参数解释**： 临时安全凭证的security_token **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSecurityToken()
    {
        return $this->container['securityToken'];
    }

    /**
    * Sets securityToken
    *
    * @param string|null $securityToken **参数解释**： 临时安全凭证的security_token **约束限制**： 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSecurityToken($securityToken)
    {
        $this->container['securityToken'] = $securityToken;
        return $this;
    }

    /**
    * Gets expiration
    *  **参数解释：** 临时安全凭证的失效时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
    * Sets expiration
    *
    * @param string|null $expiration **参数解释：** 临时安全凭证的失效时间 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;
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

