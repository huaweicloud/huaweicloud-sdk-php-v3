<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetResourceOauth2TokenResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetResourceOauth2TokenResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessToken  OAuth2.0 access token to use (embedded with RAR authorization details claims if rich_authorization_details were requested)
    * authorizationUrl  URL to initiate authorization (provided when user authorization is required, includes encoded RAR details for user consent)
    * sessionStatus  Status of the user's authorization session (determines next steps in OAuth2 flow)
    * sessionUri  Unique identifier for the user's authentication session (matches request session_uri)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessToken' => 'string',
            'authorizationUrl' => 'string',
            'sessionStatus' => 'string',
            'sessionUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessToken  OAuth2.0 access token to use (embedded with RAR authorization details claims if rich_authorization_details were requested)
    * authorizationUrl  URL to initiate authorization (provided when user authorization is required, includes encoded RAR details for user consent)
    * sessionStatus  Status of the user's authorization session (determines next steps in OAuth2 flow)
    * sessionUri  Unique identifier for the user's authentication session (matches request session_uri)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessToken' => null,
        'authorizationUrl' => null,
        'sessionStatus' => null,
        'sessionUri' => null
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
    * accessToken  OAuth2.0 access token to use (embedded with RAR authorization details claims if rich_authorization_details were requested)
    * authorizationUrl  URL to initiate authorization (provided when user authorization is required, includes encoded RAR details for user consent)
    * sessionStatus  Status of the user's authorization session (determines next steps in OAuth2 flow)
    * sessionUri  Unique identifier for the user's authentication session (matches request session_uri)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessToken' => 'access_token',
            'authorizationUrl' => 'authorization_url',
            'sessionStatus' => 'session_status',
            'sessionUri' => 'session_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessToken  OAuth2.0 access token to use (embedded with RAR authorization details claims if rich_authorization_details were requested)
    * authorizationUrl  URL to initiate authorization (provided when user authorization is required, includes encoded RAR details for user consent)
    * sessionStatus  Status of the user's authorization session (determines next steps in OAuth2 flow)
    * sessionUri  Unique identifier for the user's authentication session (matches request session_uri)
    *
    * @var string[]
    */
    protected static $setters = [
            'accessToken' => 'setAccessToken',
            'authorizationUrl' => 'setAuthorizationUrl',
            'sessionStatus' => 'setSessionStatus',
            'sessionUri' => 'setSessionUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessToken  OAuth2.0 access token to use (embedded with RAR authorization details claims if rich_authorization_details were requested)
    * authorizationUrl  URL to initiate authorization (provided when user authorization is required, includes encoded RAR details for user consent)
    * sessionStatus  Status of the user's authorization session (determines next steps in OAuth2 flow)
    * sessionUri  Unique identifier for the user's authentication session (matches request session_uri)
    *
    * @var string[]
    */
    protected static $getters = [
            'accessToken' => 'getAccessToken',
            'authorizationUrl' => 'getAuthorizationUrl',
            'sessionStatus' => 'getSessionStatus',
            'sessionUri' => 'getSessionUri'
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
    const SESSION_STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const SESSION_STATUS_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSessionStatusAllowableValues()
    {
        return [
            self::SESSION_STATUS_IN_PROGRESS,
            self::SESSION_STATUS_FAILED,
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
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['authorizationUrl'] = isset($data['authorizationUrl']) ? $data['authorizationUrl'] : null;
        $this->container['sessionStatus'] = isset($data['sessionStatus']) ? $data['sessionStatus'] : null;
        $this->container['sessionUri'] = isset($data['sessionUri']) ? $data['sessionUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accessToken']) && (mb_strlen($this->container['accessToken']) > 131072)) {
                $invalidProperties[] = "invalid value for 'accessToken', the character length must be smaller than or equal to 131072.";
            }
            if (!is_null($this->container['accessToken']) && (mb_strlen($this->container['accessToken']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessToken', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorizationUrl']) && (mb_strlen($this->container['authorizationUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorizationUrl', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSessionStatusAllowableValues();
                if (!is_null($this->container['sessionStatus']) && !in_array($this->container['sessionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sessionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sessionUri']) && (mb_strlen($this->container['sessionUri']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sessionUri', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sessionUri']) && (mb_strlen($this->container['sessionUri']) < 1)) {
                $invalidProperties[] = "invalid value for 'sessionUri', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sessionUri']) && !preg_match("/^urn:ietf:params:oauth:request_uri:[a-zA-Z0-9-._~]+$/", $this->container['sessionUri'])) {
                $invalidProperties[] = "invalid value for 'sessionUri', must be conform to the pattern /^urn:ietf:params:oauth:request_uri:[a-zA-Z0-9-._~]+$/.";
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
    * Gets accessToken
    *  OAuth2.0 access token to use (embedded with RAR authorization details claims if rich_authorization_details were requested)
    *
    * @return string|null
    */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
    * Sets accessToken
    *
    * @param string|null $accessToken OAuth2.0 access token to use (embedded with RAR authorization details claims if rich_authorization_details were requested)
    *
    * @return $this
    */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;
        return $this;
    }

    /**
    * Gets authorizationUrl
    *  URL to initiate authorization (provided when user authorization is required, includes encoded RAR details for user consent)
    *
    * @return string|null
    */
    public function getAuthorizationUrl()
    {
        return $this->container['authorizationUrl'];
    }

    /**
    * Sets authorizationUrl
    *
    * @param string|null $authorizationUrl URL to initiate authorization (provided when user authorization is required, includes encoded RAR details for user consent)
    *
    * @return $this
    */
    public function setAuthorizationUrl($authorizationUrl)
    {
        $this->container['authorizationUrl'] = $authorizationUrl;
        return $this;
    }

    /**
    * Gets sessionStatus
    *  Status of the user's authorization session (determines next steps in OAuth2 flow)
    *
    * @return string|null
    */
    public function getSessionStatus()
    {
        return $this->container['sessionStatus'];
    }

    /**
    * Sets sessionStatus
    *
    * @param string|null $sessionStatus Status of the user's authorization session (determines next steps in OAuth2 flow)
    *
    * @return $this
    */
    public function setSessionStatus($sessionStatus)
    {
        $this->container['sessionStatus'] = $sessionStatus;
        return $this;
    }

    /**
    * Gets sessionUri
    *  Unique identifier for the user's authentication session (matches request session_uri)
    *
    * @return string|null
    */
    public function getSessionUri()
    {
        return $this->container['sessionUri'];
    }

    /**
    * Sets sessionUri
    *
    * @param string|null $sessionUri Unique identifier for the user's authentication session (matches request session_uri)
    *
    * @return $this
    */
    public function setSessionUri($sessionUri)
    {
        $this->container['sessionUri'] = $sessionUri;
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

