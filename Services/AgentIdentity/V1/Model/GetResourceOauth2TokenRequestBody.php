<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetResourceOauth2TokenRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetResourceOauth2TokenRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customParameters  Additional custom parameters for the authorization request (does not override standard OAuth2 parameters)
    * customState  Opaque string for CSRF protection (returned in callback URL response as standard state parameter)
    * forceAuthentication  Whether to initiate a new 3LO flow regardless of existing sessions
    * oauth2Flow  Type of OAuth2 flow to perform
    * resourceCredentialProviderName  Name of the resource's credential provider
    * resourceOauth2ReturnUrl  Callback URL to redirect after token retrieval (must be configured for workload identity)
    * scopes  OAuth scopes being requested (coarse-grained permissions, supplemented by rich_authorization_details for fine-grained control)
    * sessionUri  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    * workloadAccessToken  Identity token of the workload requesting the OAuth2 token
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customParameters' => 'map[string,string]',
            'customState' => 'string',
            'forceAuthentication' => 'bool',
            'oauth2Flow' => 'string',
            'resourceCredentialProviderName' => 'string',
            'resourceOauth2ReturnUrl' => 'string',
            'scopes' => 'string[]',
            'sessionUri' => 'string',
            'workloadAccessToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customParameters  Additional custom parameters for the authorization request (does not override standard OAuth2 parameters)
    * customState  Opaque string for CSRF protection (returned in callback URL response as standard state parameter)
    * forceAuthentication  Whether to initiate a new 3LO flow regardless of existing sessions
    * oauth2Flow  Type of OAuth2 flow to perform
    * resourceCredentialProviderName  Name of the resource's credential provider
    * resourceOauth2ReturnUrl  Callback URL to redirect after token retrieval (must be configured for workload identity)
    * scopes  OAuth scopes being requested (coarse-grained permissions, supplemented by rich_authorization_details for fine-grained control)
    * sessionUri  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    * workloadAccessToken  Identity token of the workload requesting the OAuth2 token
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customParameters' => null,
        'customState' => null,
        'forceAuthentication' => null,
        'oauth2Flow' => null,
        'resourceCredentialProviderName' => null,
        'resourceOauth2ReturnUrl' => null,
        'scopes' => null,
        'sessionUri' => null,
        'workloadAccessToken' => null
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
    * customParameters  Additional custom parameters for the authorization request (does not override standard OAuth2 parameters)
    * customState  Opaque string for CSRF protection (returned in callback URL response as standard state parameter)
    * forceAuthentication  Whether to initiate a new 3LO flow regardless of existing sessions
    * oauth2Flow  Type of OAuth2 flow to perform
    * resourceCredentialProviderName  Name of the resource's credential provider
    * resourceOauth2ReturnUrl  Callback URL to redirect after token retrieval (must be configured for workload identity)
    * scopes  OAuth scopes being requested (coarse-grained permissions, supplemented by rich_authorization_details for fine-grained control)
    * sessionUri  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    * workloadAccessToken  Identity token of the workload requesting the OAuth2 token
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customParameters' => 'custom_parameters',
            'customState' => 'custom_state',
            'forceAuthentication' => 'force_authentication',
            'oauth2Flow' => 'oauth2_flow',
            'resourceCredentialProviderName' => 'resource_credential_provider_name',
            'resourceOauth2ReturnUrl' => 'resource_oauth2_return_url',
            'scopes' => 'scopes',
            'sessionUri' => 'session_uri',
            'workloadAccessToken' => 'workload_access_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customParameters  Additional custom parameters for the authorization request (does not override standard OAuth2 parameters)
    * customState  Opaque string for CSRF protection (returned in callback URL response as standard state parameter)
    * forceAuthentication  Whether to initiate a new 3LO flow regardless of existing sessions
    * oauth2Flow  Type of OAuth2 flow to perform
    * resourceCredentialProviderName  Name of the resource's credential provider
    * resourceOauth2ReturnUrl  Callback URL to redirect after token retrieval (must be configured for workload identity)
    * scopes  OAuth scopes being requested (coarse-grained permissions, supplemented by rich_authorization_details for fine-grained control)
    * sessionUri  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    * workloadAccessToken  Identity token of the workload requesting the OAuth2 token
    *
    * @var string[]
    */
    protected static $setters = [
            'customParameters' => 'setCustomParameters',
            'customState' => 'setCustomState',
            'forceAuthentication' => 'setForceAuthentication',
            'oauth2Flow' => 'setOauth2Flow',
            'resourceCredentialProviderName' => 'setResourceCredentialProviderName',
            'resourceOauth2ReturnUrl' => 'setResourceOauth2ReturnUrl',
            'scopes' => 'setScopes',
            'sessionUri' => 'setSessionUri',
            'workloadAccessToken' => 'setWorkloadAccessToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customParameters  Additional custom parameters for the authorization request (does not override standard OAuth2 parameters)
    * customState  Opaque string for CSRF protection (returned in callback URL response as standard state parameter)
    * forceAuthentication  Whether to initiate a new 3LO flow regardless of existing sessions
    * oauth2Flow  Type of OAuth2 flow to perform
    * resourceCredentialProviderName  Name of the resource's credential provider
    * resourceOauth2ReturnUrl  Callback URL to redirect after token retrieval (must be configured for workload identity)
    * scopes  OAuth scopes being requested (coarse-grained permissions, supplemented by rich_authorization_details for fine-grained control)
    * sessionUri  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    * workloadAccessToken  Identity token of the workload requesting the OAuth2 token
    *
    * @var string[]
    */
    protected static $getters = [
            'customParameters' => 'getCustomParameters',
            'customState' => 'getCustomState',
            'forceAuthentication' => 'getForceAuthentication',
            'oauth2Flow' => 'getOauth2Flow',
            'resourceCredentialProviderName' => 'getResourceCredentialProviderName',
            'resourceOauth2ReturnUrl' => 'getResourceOauth2ReturnUrl',
            'scopes' => 'getScopes',
            'sessionUri' => 'getSessionUri',
            'workloadAccessToken' => 'getWorkloadAccessToken'
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
    const OAUTH2_FLOW_USER_FEDERATION = 'USER_FEDERATION';
    const OAUTH2_FLOW_M2_M = 'M2M';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOauth2FlowAllowableValues()
    {
        return [
            self::OAUTH2_FLOW_USER_FEDERATION,
            self::OAUTH2_FLOW_M2_M,
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
        $this->container['customParameters'] = isset($data['customParameters']) ? $data['customParameters'] : null;
        $this->container['customState'] = isset($data['customState']) ? $data['customState'] : null;
        $this->container['forceAuthentication'] = isset($data['forceAuthentication']) ? $data['forceAuthentication'] : null;
        $this->container['oauth2Flow'] = isset($data['oauth2Flow']) ? $data['oauth2Flow'] : null;
        $this->container['resourceCredentialProviderName'] = isset($data['resourceCredentialProviderName']) ? $data['resourceCredentialProviderName'] : null;
        $this->container['resourceOauth2ReturnUrl'] = isset($data['resourceOauth2ReturnUrl']) ? $data['resourceOauth2ReturnUrl'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['sessionUri'] = isset($data['sessionUri']) ? $data['sessionUri'] : null;
        $this->container['workloadAccessToken'] = isset($data['workloadAccessToken']) ? $data['workloadAccessToken'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['customState']) && (mb_strlen($this->container['customState']) > 4096)) {
                $invalidProperties[] = "invalid value for 'customState', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['customState']) && (mb_strlen($this->container['customState']) < 1)) {
                $invalidProperties[] = "invalid value for 'customState', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['oauth2Flow'] === null) {
            $invalidProperties[] = "'oauth2Flow' can't be null";
        }
            $allowedValues = $this->getOauth2FlowAllowableValues();
                if (!is_null($this->container['oauth2Flow']) && !in_array($this->container['oauth2Flow'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'oauth2Flow', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['resourceCredentialProviderName'] === null) {
            $invalidProperties[] = "'resourceCredentialProviderName' can't be null";
        }
            if ((mb_strlen($this->container['resourceCredentialProviderName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceCredentialProviderName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['resourceCredentialProviderName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceCredentialProviderName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\-_]+$/", $this->container['resourceCredentialProviderName'])) {
                $invalidProperties[] = "invalid value for 'resourceCredentialProviderName', must be conform to the pattern /^[a-zA-Z0-9\\-_]+$/.";
            }
            if (!is_null($this->container['resourceOauth2ReturnUrl']) && (mb_strlen($this->container['resourceOauth2ReturnUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'resourceOauth2ReturnUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['resourceOauth2ReturnUrl']) && (mb_strlen($this->container['resourceOauth2ReturnUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceOauth2ReturnUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceOauth2ReturnUrl']) && !preg_match("/^\\w+:(\/?\/?)[^\\s]+$/", $this->container['resourceOauth2ReturnUrl'])) {
                $invalidProperties[] = "invalid value for 'resourceOauth2ReturnUrl', must be conform to the pattern /^\\w+:(\/?\/?)[^\\s]+$/.";
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
            if (!is_null($this->container['workloadAccessToken']) && (mb_strlen($this->container['workloadAccessToken']) > 131072)) {
                $invalidProperties[] = "invalid value for 'workloadAccessToken', the character length must be smaller than or equal to 131072.";
            }
            if (!is_null($this->container['workloadAccessToken']) && (mb_strlen($this->container['workloadAccessToken']) < 1)) {
                $invalidProperties[] = "invalid value for 'workloadAccessToken', the character length must be bigger than or equal to 1.";
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
    * Gets customParameters
    *  Additional custom parameters for the authorization request (does not override standard OAuth2 parameters)
    *
    * @return map[string,string]|null
    */
    public function getCustomParameters()
    {
        return $this->container['customParameters'];
    }

    /**
    * Sets customParameters
    *
    * @param map[string,string]|null $customParameters Additional custom parameters for the authorization request (does not override standard OAuth2 parameters)
    *
    * @return $this
    */
    public function setCustomParameters($customParameters)
    {
        $this->container['customParameters'] = $customParameters;
        return $this;
    }

    /**
    * Gets customState
    *  Opaque string for CSRF protection (returned in callback URL response as standard state parameter)
    *
    * @return string|null
    */
    public function getCustomState()
    {
        return $this->container['customState'];
    }

    /**
    * Sets customState
    *
    * @param string|null $customState Opaque string for CSRF protection (returned in callback URL response as standard state parameter)
    *
    * @return $this
    */
    public function setCustomState($customState)
    {
        $this->container['customState'] = $customState;
        return $this;
    }

    /**
    * Gets forceAuthentication
    *  Whether to initiate a new 3LO flow regardless of existing sessions
    *
    * @return bool|null
    */
    public function getForceAuthentication()
    {
        return $this->container['forceAuthentication'];
    }

    /**
    * Sets forceAuthentication
    *
    * @param bool|null $forceAuthentication Whether to initiate a new 3LO flow regardless of existing sessions
    *
    * @return $this
    */
    public function setForceAuthentication($forceAuthentication)
    {
        $this->container['forceAuthentication'] = $forceAuthentication;
        return $this;
    }

    /**
    * Gets oauth2Flow
    *  Type of OAuth2 flow to perform
    *
    * @return string
    */
    public function getOauth2Flow()
    {
        return $this->container['oauth2Flow'];
    }

    /**
    * Sets oauth2Flow
    *
    * @param string $oauth2Flow Type of OAuth2 flow to perform
    *
    * @return $this
    */
    public function setOauth2Flow($oauth2Flow)
    {
        $this->container['oauth2Flow'] = $oauth2Flow;
        return $this;
    }

    /**
    * Gets resourceCredentialProviderName
    *  Name of the resource's credential provider
    *
    * @return string
    */
    public function getResourceCredentialProviderName()
    {
        return $this->container['resourceCredentialProviderName'];
    }

    /**
    * Sets resourceCredentialProviderName
    *
    * @param string $resourceCredentialProviderName Name of the resource's credential provider
    *
    * @return $this
    */
    public function setResourceCredentialProviderName($resourceCredentialProviderName)
    {
        $this->container['resourceCredentialProviderName'] = $resourceCredentialProviderName;
        return $this;
    }

    /**
    * Gets resourceOauth2ReturnUrl
    *  Callback URL to redirect after token retrieval (must be configured for workload identity)
    *
    * @return string|null
    */
    public function getResourceOauth2ReturnUrl()
    {
        return $this->container['resourceOauth2ReturnUrl'];
    }

    /**
    * Sets resourceOauth2ReturnUrl
    *
    * @param string|null $resourceOauth2ReturnUrl Callback URL to redirect after token retrieval (must be configured for workload identity)
    *
    * @return $this
    */
    public function setResourceOauth2ReturnUrl($resourceOauth2ReturnUrl)
    {
        $this->container['resourceOauth2ReturnUrl'] = $resourceOauth2ReturnUrl;
        return $this;
    }

    /**
    * Gets scopes
    *  OAuth scopes being requested (coarse-grained permissions, supplemented by rich_authorization_details for fine-grained control)
    *
    * @return string[]|null
    */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
    * Sets scopes
    *
    * @param string[]|null $scopes OAuth scopes being requested (coarse-grained permissions, supplemented by rich_authorization_details for fine-grained control)
    *
    * @return $this
    */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;
        return $this;
    }

    /**
    * Gets sessionUri
    *  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
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
    * @param string|null $sessionUri Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    *
    * @return $this
    */
    public function setSessionUri($sessionUri)
    {
        $this->container['sessionUri'] = $sessionUri;
        return $this;
    }

    /**
    * Gets workloadAccessToken
    *  Identity token of the workload requesting the OAuth2 token
    *
    * @return string|null
    */
    public function getWorkloadAccessToken()
    {
        return $this->container['workloadAccessToken'];
    }

    /**
    * Sets workloadAccessToken
    *
    * @param string|null $workloadAccessToken Identity token of the workload requesting the OAuth2 token
    *
    * @return $this
    */
    public function setWorkloadAccessToken($workloadAccessToken)
    {
        $this->container['workloadAccessToken'] = $workloadAccessToken;
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

