<?php

namespace HuaweiCloud\SDK\Sts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssumeAgencyWithOIDCResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssumeAgencyWithOIDCResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceIdentity  **参数解释**： 身份提供商返回的OIDC令牌中所申明的身份。  **取值范围**： 不涉及。
    * assumedAgency  assumedAgency
    * credentials  credentials
    * audience  **参数解释**： OIDC令牌的预期受众（也称为客户端ID），通常是分发给应用程序的客户端标识符。  **取值范围**： 不涉及。
    * provider  **参数解释**： 身份提供商的URN。  **取值范围**： 不涉及。
    * subjectFromIdToken  **参数解释**： 由身份提供商返回的唯一用户标识符，即OIDC令牌中的sub(Subject)声明的值。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceIdentity' => 'string',
            'assumedAgency' => '\HuaweiCloud\SDK\Sts\V1\Model\AssumedAgencyWithFederationDto',
            'credentials' => '\HuaweiCloud\SDK\Sts\V1\Model\CredentialsDto',
            'audience' => 'string',
            'provider' => 'string',
            'subjectFromIdToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceIdentity  **参数解释**： 身份提供商返回的OIDC令牌中所申明的身份。  **取值范围**： 不涉及。
    * assumedAgency  assumedAgency
    * credentials  credentials
    * audience  **参数解释**： OIDC令牌的预期受众（也称为客户端ID），通常是分发给应用程序的客户端标识符。  **取值范围**： 不涉及。
    * provider  **参数解释**： 身份提供商的URN。  **取值范围**： 不涉及。
    * subjectFromIdToken  **参数解释**： 由身份提供商返回的唯一用户标识符，即OIDC令牌中的sub(Subject)声明的值。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceIdentity' => null,
        'assumedAgency' => null,
        'credentials' => null,
        'audience' => null,
        'provider' => null,
        'subjectFromIdToken' => null
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
    * sourceIdentity  **参数解释**： 身份提供商返回的OIDC令牌中所申明的身份。  **取值范围**： 不涉及。
    * assumedAgency  assumedAgency
    * credentials  credentials
    * audience  **参数解释**： OIDC令牌的预期受众（也称为客户端ID），通常是分发给应用程序的客户端标识符。  **取值范围**： 不涉及。
    * provider  **参数解释**： 身份提供商的URN。  **取值范围**： 不涉及。
    * subjectFromIdToken  **参数解释**： 由身份提供商返回的唯一用户标识符，即OIDC令牌中的sub(Subject)声明的值。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceIdentity' => 'source_identity',
            'assumedAgency' => 'assumed_agency',
            'credentials' => 'credentials',
            'audience' => 'audience',
            'provider' => 'provider',
            'subjectFromIdToken' => 'subject_from_id_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceIdentity  **参数解释**： 身份提供商返回的OIDC令牌中所申明的身份。  **取值范围**： 不涉及。
    * assumedAgency  assumedAgency
    * credentials  credentials
    * audience  **参数解释**： OIDC令牌的预期受众（也称为客户端ID），通常是分发给应用程序的客户端标识符。  **取值范围**： 不涉及。
    * provider  **参数解释**： 身份提供商的URN。  **取值范围**： 不涉及。
    * subjectFromIdToken  **参数解释**： 由身份提供商返回的唯一用户标识符，即OIDC令牌中的sub(Subject)声明的值。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceIdentity' => 'setSourceIdentity',
            'assumedAgency' => 'setAssumedAgency',
            'credentials' => 'setCredentials',
            'audience' => 'setAudience',
            'provider' => 'setProvider',
            'subjectFromIdToken' => 'setSubjectFromIdToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceIdentity  **参数解释**： 身份提供商返回的OIDC令牌中所申明的身份。  **取值范围**： 不涉及。
    * assumedAgency  assumedAgency
    * credentials  credentials
    * audience  **参数解释**： OIDC令牌的预期受众（也称为客户端ID），通常是分发给应用程序的客户端标识符。  **取值范围**： 不涉及。
    * provider  **参数解释**： 身份提供商的URN。  **取值范围**： 不涉及。
    * subjectFromIdToken  **参数解释**： 由身份提供商返回的唯一用户标识符，即OIDC令牌中的sub(Subject)声明的值。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceIdentity' => 'getSourceIdentity',
            'assumedAgency' => 'getAssumedAgency',
            'credentials' => 'getCredentials',
            'audience' => 'getAudience',
            'provider' => 'getProvider',
            'subjectFromIdToken' => 'getSubjectFromIdToken'
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
        $this->container['sourceIdentity'] = isset($data['sourceIdentity']) ? $data['sourceIdentity'] : null;
        $this->container['assumedAgency'] = isset($data['assumedAgency']) ? $data['assumedAgency'] : null;
        $this->container['credentials'] = isset($data['credentials']) ? $data['credentials'] : null;
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['subjectFromIdToken'] = isset($data['subjectFromIdToken']) ? $data['subjectFromIdToken'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceIdentity']) && (mb_strlen($this->container['sourceIdentity']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceIdentity']) && (mb_strlen($this->container['sourceIdentity']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceIdentity']) && !preg_match("/^[\\w+=,.@-]*$/", $this->container['sourceIdentity'])) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', must be conform to the pattern /^[\\w+=,.@-]*$/.";
            }
            if (!is_null($this->container['subjectFromIdToken']) && (mb_strlen($this->container['subjectFromIdToken']) > 255)) {
                $invalidProperties[] = "invalid value for 'subjectFromIdToken', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['subjectFromIdToken']) && (mb_strlen($this->container['subjectFromIdToken']) < 6)) {
                $invalidProperties[] = "invalid value for 'subjectFromIdToken', the character length must be bigger than or equal to 6.";
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
    * Gets sourceIdentity
    *  **参数解释**： 身份提供商返回的OIDC令牌中所申明的身份。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSourceIdentity()
    {
        return $this->container['sourceIdentity'];
    }

    /**
    * Sets sourceIdentity
    *
    * @param string|null $sourceIdentity **参数解释**： 身份提供商返回的OIDC令牌中所申明的身份。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSourceIdentity($sourceIdentity)
    {
        $this->container['sourceIdentity'] = $sourceIdentity;
        return $this;
    }

    /**
    * Gets assumedAgency
    *  assumedAgency
    *
    * @return \HuaweiCloud\SDK\Sts\V1\Model\AssumedAgencyWithFederationDto|null
    */
    public function getAssumedAgency()
    {
        return $this->container['assumedAgency'];
    }

    /**
    * Sets assumedAgency
    *
    * @param \HuaweiCloud\SDK\Sts\V1\Model\AssumedAgencyWithFederationDto|null $assumedAgency assumedAgency
    *
    * @return $this
    */
    public function setAssumedAgency($assumedAgency)
    {
        $this->container['assumedAgency'] = $assumedAgency;
        return $this;
    }

    /**
    * Gets credentials
    *  credentials
    *
    * @return \HuaweiCloud\SDK\Sts\V1\Model\CredentialsDto|null
    */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
    * Sets credentials
    *
    * @param \HuaweiCloud\SDK\Sts\V1\Model\CredentialsDto|null $credentials credentials
    *
    * @return $this
    */
    public function setCredentials($credentials)
    {
        $this->container['credentials'] = $credentials;
        return $this;
    }

    /**
    * Gets audience
    *  **参数解释**： OIDC令牌的预期受众（也称为客户端ID），通常是分发给应用程序的客户端标识符。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
    * Sets audience
    *
    * @param string|null $audience **参数解释**： OIDC令牌的预期受众（也称为客户端ID），通常是分发给应用程序的客户端标识符。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;
        return $this;
    }

    /**
    * Gets provider
    *  **参数解释**： 身份提供商的URN。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider **参数解释**： 身份提供商的URN。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets subjectFromIdToken
    *  **参数解释**： 由身份提供商返回的唯一用户标识符，即OIDC令牌中的sub(Subject)声明的值。  **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSubjectFromIdToken()
    {
        return $this->container['subjectFromIdToken'];
    }

    /**
    * Sets subjectFromIdToken
    *
    * @param string|null $subjectFromIdToken **参数解释**： 由身份提供商返回的唯一用户标识符，即OIDC令牌中的sub(Subject)声明的值。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSubjectFromIdToken($subjectFromIdToken)
    {
        $this->container['subjectFromIdToken'] = $subjectFromIdToken;
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

