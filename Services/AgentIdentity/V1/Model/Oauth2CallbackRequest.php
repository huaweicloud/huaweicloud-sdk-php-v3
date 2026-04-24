<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Oauth2CallbackRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Oauth2CallbackRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * credentialProviderId  Unique identifier of the credential provider
    * code  OAuth2.0 Standard Authorization Code - one-time use, short-lived token for access token exchange. Present ONLY on successful authorization.
    * state  OAuth2.0 Standard CSRF Protection State - opaque string, echo of original request state. PRESENT FOR BOTH SUCCESS AND ERROR.
    * error  OAuth2.0 Standard Error Code - present ONLY on authorization failure (denial/expiry/invalid). e.g. access_denied, invalid_scope, server_error
    * errorDescription  OAuth2.0 Standard Error Description - human-readable error message, paired with error param, URL-encoded for safe transmission
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'credentialProviderId' => 'string',
            'code' => 'string',
            'state' => 'string',
            'error' => 'string',
            'errorDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * credentialProviderId  Unique identifier of the credential provider
    * code  OAuth2.0 Standard Authorization Code - one-time use, short-lived token for access token exchange. Present ONLY on successful authorization.
    * state  OAuth2.0 Standard CSRF Protection State - opaque string, echo of original request state. PRESENT FOR BOTH SUCCESS AND ERROR.
    * error  OAuth2.0 Standard Error Code - present ONLY on authorization failure (denial/expiry/invalid). e.g. access_denied, invalid_scope, server_error
    * errorDescription  OAuth2.0 Standard Error Description - human-readable error message, paired with error param, URL-encoded for safe transmission
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'credentialProviderId' => 'uuid',
        'code' => null,
        'state' => null,
        'error' => null,
        'errorDescription' => null
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
    * credentialProviderId  Unique identifier of the credential provider
    * code  OAuth2.0 Standard Authorization Code - one-time use, short-lived token for access token exchange. Present ONLY on successful authorization.
    * state  OAuth2.0 Standard CSRF Protection State - opaque string, echo of original request state. PRESENT FOR BOTH SUCCESS AND ERROR.
    * error  OAuth2.0 Standard Error Code - present ONLY on authorization failure (denial/expiry/invalid). e.g. access_denied, invalid_scope, server_error
    * errorDescription  OAuth2.0 Standard Error Description - human-readable error message, paired with error param, URL-encoded for safe transmission
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'credentialProviderId' => 'credential_provider_id',
            'code' => 'code',
            'state' => 'state',
            'error' => 'error',
            'errorDescription' => 'error_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * credentialProviderId  Unique identifier of the credential provider
    * code  OAuth2.0 Standard Authorization Code - one-time use, short-lived token for access token exchange. Present ONLY on successful authorization.
    * state  OAuth2.0 Standard CSRF Protection State - opaque string, echo of original request state. PRESENT FOR BOTH SUCCESS AND ERROR.
    * error  OAuth2.0 Standard Error Code - present ONLY on authorization failure (denial/expiry/invalid). e.g. access_denied, invalid_scope, server_error
    * errorDescription  OAuth2.0 Standard Error Description - human-readable error message, paired with error param, URL-encoded for safe transmission
    *
    * @var string[]
    */
    protected static $setters = [
            'credentialProviderId' => 'setCredentialProviderId',
            'code' => 'setCode',
            'state' => 'setState',
            'error' => 'setError',
            'errorDescription' => 'setErrorDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * credentialProviderId  Unique identifier of the credential provider
    * code  OAuth2.0 Standard Authorization Code - one-time use, short-lived token for access token exchange. Present ONLY on successful authorization.
    * state  OAuth2.0 Standard CSRF Protection State - opaque string, echo of original request state. PRESENT FOR BOTH SUCCESS AND ERROR.
    * error  OAuth2.0 Standard Error Code - present ONLY on authorization failure (denial/expiry/invalid). e.g. access_denied, invalid_scope, server_error
    * errorDescription  OAuth2.0 Standard Error Description - human-readable error message, paired with error param, URL-encoded for safe transmission
    *
    * @var string[]
    */
    protected static $getters = [
            'credentialProviderId' => 'getCredentialProviderId',
            'code' => 'getCode',
            'state' => 'getState',
            'error' => 'getError',
            'errorDescription' => 'getErrorDescription'
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
        $this->container['credentialProviderId'] = isset($data['credentialProviderId']) ? $data['credentialProviderId'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['errorDescription'] = isset($data['errorDescription']) ? $data['errorDescription'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['credentialProviderId'] === null) {
            $invalidProperties[] = "'credentialProviderId' can't be null";
        }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 8192)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 1)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            if ((mb_strlen($this->container['state']) > 4096)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) > 128)) {
                $invalidProperties[] = "invalid value for 'error', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) < 1)) {
                $invalidProperties[] = "invalid value for 'error', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorDescription']) && (mb_strlen($this->container['errorDescription']) > 2048)) {
                $invalidProperties[] = "invalid value for 'errorDescription', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['errorDescription']) && (mb_strlen($this->container['errorDescription']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorDescription', the character length must be bigger than or equal to 1.";
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
    * Gets credentialProviderId
    *  Unique identifier of the credential provider
    *
    * @return string
    */
    public function getCredentialProviderId()
    {
        return $this->container['credentialProviderId'];
    }

    /**
    * Sets credentialProviderId
    *
    * @param string $credentialProviderId Unique identifier of the credential provider
    *
    * @return $this
    */
    public function setCredentialProviderId($credentialProviderId)
    {
        $this->container['credentialProviderId'] = $credentialProviderId;
        return $this;
    }

    /**
    * Gets code
    *  OAuth2.0 Standard Authorization Code - one-time use, short-lived token for access token exchange. Present ONLY on successful authorization.
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code OAuth2.0 Standard Authorization Code - one-time use, short-lived token for access token exchange. Present ONLY on successful authorization.
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets state
    *  OAuth2.0 Standard CSRF Protection State - opaque string, echo of original request state. PRESENT FOR BOTH SUCCESS AND ERROR.
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state OAuth2.0 Standard CSRF Protection State - opaque string, echo of original request state. PRESENT FOR BOTH SUCCESS AND ERROR.
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets error
    *  OAuth2.0 Standard Error Code - present ONLY on authorization failure (denial/expiry/invalid). e.g. access_denied, invalid_scope, server_error
    *
    * @return string|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param string|null $error OAuth2.0 Standard Error Code - present ONLY on authorization failure (denial/expiry/invalid). e.g. access_denied, invalid_scope, server_error
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets errorDescription
    *  OAuth2.0 Standard Error Description - human-readable error message, paired with error param, URL-encoded for safe transmission
    *
    * @return string|null
    */
    public function getErrorDescription()
    {
        return $this->container['errorDescription'];
    }

    /**
    * Sets errorDescription
    *
    * @param string|null $errorDescription OAuth2.0 Standard Error Description - human-readable error message, paired with error param, URL-encoded for safe transmission
    *
    * @return $this
    */
    public function setErrorDescription($errorDescription)
    {
        $this->container['errorDescription'] = $errorDescription;
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

