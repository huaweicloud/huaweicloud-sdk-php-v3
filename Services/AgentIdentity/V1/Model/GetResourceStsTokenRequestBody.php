<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetResourceStsTokenRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetResourceStsTokenRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceCredentialProviderName  Name of the STS credential provider to retrieve STS credentials from
    * workloadAccessToken  Identity token of the workload requesting the STS token
    * agencySessionName  An identifier for the assumed agency session
    * durationSeconds  The duration, in seconds, of the agency session
    * policy  An IAM policy in JSON format that you want to use as an inline session policy
    * sourceIdentity  The source identity specified by the principal that is calling the operation
    * tags  A list of tags
    * transitiveTagKeys  A list of keys for session tags that you want to set as transitive
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceCredentialProviderName' => 'string',
            'workloadAccessToken' => 'string',
            'agencySessionName' => 'string',
            'durationSeconds' => 'int',
            'policy' => 'string',
            'sourceIdentity' => 'string',
            'tags' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\StsTag[]',
            'transitiveTagKeys' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceCredentialProviderName  Name of the STS credential provider to retrieve STS credentials from
    * workloadAccessToken  Identity token of the workload requesting the STS token
    * agencySessionName  An identifier for the assumed agency session
    * durationSeconds  The duration, in seconds, of the agency session
    * policy  An IAM policy in JSON format that you want to use as an inline session policy
    * sourceIdentity  The source identity specified by the principal that is calling the operation
    * tags  A list of tags
    * transitiveTagKeys  A list of keys for session tags that you want to set as transitive
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceCredentialProviderName' => null,
        'workloadAccessToken' => null,
        'agencySessionName' => null,
        'durationSeconds' => 'int32',
        'policy' => null,
        'sourceIdentity' => null,
        'tags' => null,
        'transitiveTagKeys' => null
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
    * resourceCredentialProviderName  Name of the STS credential provider to retrieve STS credentials from
    * workloadAccessToken  Identity token of the workload requesting the STS token
    * agencySessionName  An identifier for the assumed agency session
    * durationSeconds  The duration, in seconds, of the agency session
    * policy  An IAM policy in JSON format that you want to use as an inline session policy
    * sourceIdentity  The source identity specified by the principal that is calling the operation
    * tags  A list of tags
    * transitiveTagKeys  A list of keys for session tags that you want to set as transitive
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceCredentialProviderName' => 'resource_credential_provider_name',
            'workloadAccessToken' => 'workload_access_token',
            'agencySessionName' => 'agency_session_name',
            'durationSeconds' => 'duration_seconds',
            'policy' => 'policy',
            'sourceIdentity' => 'source_identity',
            'tags' => 'tags',
            'transitiveTagKeys' => 'transitive_tag_keys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceCredentialProviderName  Name of the STS credential provider to retrieve STS credentials from
    * workloadAccessToken  Identity token of the workload requesting the STS token
    * agencySessionName  An identifier for the assumed agency session
    * durationSeconds  The duration, in seconds, of the agency session
    * policy  An IAM policy in JSON format that you want to use as an inline session policy
    * sourceIdentity  The source identity specified by the principal that is calling the operation
    * tags  A list of tags
    * transitiveTagKeys  A list of keys for session tags that you want to set as transitive
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceCredentialProviderName' => 'setResourceCredentialProviderName',
            'workloadAccessToken' => 'setWorkloadAccessToken',
            'agencySessionName' => 'setAgencySessionName',
            'durationSeconds' => 'setDurationSeconds',
            'policy' => 'setPolicy',
            'sourceIdentity' => 'setSourceIdentity',
            'tags' => 'setTags',
            'transitiveTagKeys' => 'setTransitiveTagKeys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceCredentialProviderName  Name of the STS credential provider to retrieve STS credentials from
    * workloadAccessToken  Identity token of the workload requesting the STS token
    * agencySessionName  An identifier for the assumed agency session
    * durationSeconds  The duration, in seconds, of the agency session
    * policy  An IAM policy in JSON format that you want to use as an inline session policy
    * sourceIdentity  The source identity specified by the principal that is calling the operation
    * tags  A list of tags
    * transitiveTagKeys  A list of keys for session tags that you want to set as transitive
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceCredentialProviderName' => 'getResourceCredentialProviderName',
            'workloadAccessToken' => 'getWorkloadAccessToken',
            'agencySessionName' => 'getAgencySessionName',
            'durationSeconds' => 'getDurationSeconds',
            'policy' => 'getPolicy',
            'sourceIdentity' => 'getSourceIdentity',
            'tags' => 'getTags',
            'transitiveTagKeys' => 'getTransitiveTagKeys'
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
        $this->container['resourceCredentialProviderName'] = isset($data['resourceCredentialProviderName']) ? $data['resourceCredentialProviderName'] : null;
        $this->container['workloadAccessToken'] = isset($data['workloadAccessToken']) ? $data['workloadAccessToken'] : null;
        $this->container['agencySessionName'] = isset($data['agencySessionName']) ? $data['agencySessionName'] : null;
        $this->container['durationSeconds'] = isset($data['durationSeconds']) ? $data['durationSeconds'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['sourceIdentity'] = isset($data['sourceIdentity']) ? $data['sourceIdentity'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['transitiveTagKeys'] = isset($data['transitiveTagKeys']) ? $data['transitiveTagKeys'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
            if (!is_null($this->container['workloadAccessToken']) && (mb_strlen($this->container['workloadAccessToken']) > 131072)) {
                $invalidProperties[] = "invalid value for 'workloadAccessToken', the character length must be smaller than or equal to 131072.";
            }
            if (!is_null($this->container['workloadAccessToken']) && (mb_strlen($this->container['workloadAccessToken']) < 1)) {
                $invalidProperties[] = "invalid value for 'workloadAccessToken', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['agencySessionName'] === null) {
            $invalidProperties[] = "'agencySessionName' can't be null";
        }
            if ((mb_strlen($this->container['agencySessionName']) > 64)) {
                $invalidProperties[] = "invalid value for 'agencySessionName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['agencySessionName']) < 2)) {
                $invalidProperties[] = "invalid value for 'agencySessionName', the character length must be bigger than or equal to 2.";
            }
            if (!preg_match("/^[\\w+=,.@-]*$/", $this->container['agencySessionName'])) {
                $invalidProperties[] = "invalid value for 'agencySessionName', must be conform to the pattern /^[\\w+=,.@-]*$/.";
            }
            if (!is_null($this->container['durationSeconds']) && ($this->container['durationSeconds'] > 43200)) {
                $invalidProperties[] = "invalid value for 'durationSeconds', must be smaller than or equal to 43200.";
            }
            if (!is_null($this->container['durationSeconds']) && ($this->container['durationSeconds'] < 900)) {
                $invalidProperties[] = "invalid value for 'durationSeconds', must be bigger than or equal to 900.";
            }
            if (!is_null($this->container['policy']) && (mb_strlen($this->container['policy']) > 2048)) {
                $invalidProperties[] = "invalid value for 'policy', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['policy']) && (mb_strlen($this->container['policy']) < 2)) {
                $invalidProperties[] = "invalid value for 'policy', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceIdentity']) && (mb_strlen($this->container['sourceIdentity']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceIdentity']) && (mb_strlen($this->container['sourceIdentity']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceIdentity']) && !preg_match("/^[\\w+=,.@-]*$/", $this->container['sourceIdentity'])) {
                $invalidProperties[] = "invalid value for 'sourceIdentity', must be conform to the pattern /^[\\w+=,.@-]*$/.";
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
    * Gets resourceCredentialProviderName
    *  Name of the STS credential provider to retrieve STS credentials from
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
    * @param string $resourceCredentialProviderName Name of the STS credential provider to retrieve STS credentials from
    *
    * @return $this
    */
    public function setResourceCredentialProviderName($resourceCredentialProviderName)
    {
        $this->container['resourceCredentialProviderName'] = $resourceCredentialProviderName;
        return $this;
    }

    /**
    * Gets workloadAccessToken
    *  Identity token of the workload requesting the STS token
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
    * @param string|null $workloadAccessToken Identity token of the workload requesting the STS token
    *
    * @return $this
    */
    public function setWorkloadAccessToken($workloadAccessToken)
    {
        $this->container['workloadAccessToken'] = $workloadAccessToken;
        return $this;
    }

    /**
    * Gets agencySessionName
    *  An identifier for the assumed agency session
    *
    * @return string
    */
    public function getAgencySessionName()
    {
        return $this->container['agencySessionName'];
    }

    /**
    * Sets agencySessionName
    *
    * @param string $agencySessionName An identifier for the assumed agency session
    *
    * @return $this
    */
    public function setAgencySessionName($agencySessionName)
    {
        $this->container['agencySessionName'] = $agencySessionName;
        return $this;
    }

    /**
    * Gets durationSeconds
    *  The duration, in seconds, of the agency session
    *
    * @return int|null
    */
    public function getDurationSeconds()
    {
        return $this->container['durationSeconds'];
    }

    /**
    * Sets durationSeconds
    *
    * @param int|null $durationSeconds The duration, in seconds, of the agency session
    *
    * @return $this
    */
    public function setDurationSeconds($durationSeconds)
    {
        $this->container['durationSeconds'] = $durationSeconds;
        return $this;
    }

    /**
    * Gets policy
    *  An IAM policy in JSON format that you want to use as an inline session policy
    *
    * @return string|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param string|null $policy An IAM policy in JSON format that you want to use as an inline session policy
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets sourceIdentity
    *  The source identity specified by the principal that is calling the operation
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
    * @param string|null $sourceIdentity The source identity specified by the principal that is calling the operation
    *
    * @return $this
    */
    public function setSourceIdentity($sourceIdentity)
    {
        $this->container['sourceIdentity'] = $sourceIdentity;
        return $this;
    }

    /**
    * Gets tags
    *  A list of tags
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\StsTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\StsTag[]|null $tags A list of tags
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets transitiveTagKeys
    *  A list of keys for session tags that you want to set as transitive
    *
    * @return string[]|null
    */
    public function getTransitiveTagKeys()
    {
        return $this->container['transitiveTagKeys'];
    }

    /**
    * Sets transitiveTagKeys
    *
    * @param string[]|null $transitiveTagKeys A list of keys for session tags that you want to set as transitive
    *
    * @return $this
    */
    public function setTransitiveTagKeys($transitiveTagKeys)
    {
        $this->container['transitiveTagKeys'] = $transitiveTagKeys;
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

