<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSupabaseApplicationAuthConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSupabaseApplicationAuthConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * updatedTime  updatedTime
    * enableAccountSignUp  enableAccountSignUp
    * enableAnonymousUsers  enableAnonymousUsers
    * apiExternalUrl  apiExternalUrl
    * siteUrl  siteUrl
    * allowRedirectUrls  allowRedirectUrls
    * githubOauthProvider  githubOauthProvider
    * emailOauthProvider  emailOauthProvider
    * emailTemplateConfig  emailTemplateConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'updatedTime' => 'int',
            'enableAccountSignUp' => 'bool',
            'enableAnonymousUsers' => 'bool',
            'apiExternalUrl' => 'string',
            'siteUrl' => 'string',
            'allowRedirectUrls' => 'string',
            'githubOauthProvider' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseApiGitHubOAuthProvider',
            'emailOauthProvider' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseApiEmailOAuthProvider',
            'emailTemplateConfig' => '\HuaweiCloud\SDK\Rds\V3\Model\SupabaseApiEmailTemplate'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * updatedTime  updatedTime
    * enableAccountSignUp  enableAccountSignUp
    * enableAnonymousUsers  enableAnonymousUsers
    * apiExternalUrl  apiExternalUrl
    * siteUrl  siteUrl
    * allowRedirectUrls  allowRedirectUrls
    * githubOauthProvider  githubOauthProvider
    * emailOauthProvider  emailOauthProvider
    * emailTemplateConfig  emailTemplateConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'updatedTime' => 'int64',
        'enableAccountSignUp' => null,
        'enableAnonymousUsers' => null,
        'apiExternalUrl' => null,
        'siteUrl' => null,
        'allowRedirectUrls' => null,
        'githubOauthProvider' => null,
        'emailOauthProvider' => null,
        'emailTemplateConfig' => null
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
    * updatedTime  updatedTime
    * enableAccountSignUp  enableAccountSignUp
    * enableAnonymousUsers  enableAnonymousUsers
    * apiExternalUrl  apiExternalUrl
    * siteUrl  siteUrl
    * allowRedirectUrls  allowRedirectUrls
    * githubOauthProvider  githubOauthProvider
    * emailOauthProvider  emailOauthProvider
    * emailTemplateConfig  emailTemplateConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'updatedTime' => 'updated_time',
            'enableAccountSignUp' => 'enable_account_sign_up',
            'enableAnonymousUsers' => 'enable_anonymous_users',
            'apiExternalUrl' => 'api_external_url',
            'siteUrl' => 'site_url',
            'allowRedirectUrls' => 'allow_redirect_urls',
            'githubOauthProvider' => 'github_oauth_provider',
            'emailOauthProvider' => 'email_oauth_provider',
            'emailTemplateConfig' => 'email_template_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * updatedTime  updatedTime
    * enableAccountSignUp  enableAccountSignUp
    * enableAnonymousUsers  enableAnonymousUsers
    * apiExternalUrl  apiExternalUrl
    * siteUrl  siteUrl
    * allowRedirectUrls  allowRedirectUrls
    * githubOauthProvider  githubOauthProvider
    * emailOauthProvider  emailOauthProvider
    * emailTemplateConfig  emailTemplateConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'updatedTime' => 'setUpdatedTime',
            'enableAccountSignUp' => 'setEnableAccountSignUp',
            'enableAnonymousUsers' => 'setEnableAnonymousUsers',
            'apiExternalUrl' => 'setApiExternalUrl',
            'siteUrl' => 'setSiteUrl',
            'allowRedirectUrls' => 'setAllowRedirectUrls',
            'githubOauthProvider' => 'setGithubOauthProvider',
            'emailOauthProvider' => 'setEmailOauthProvider',
            'emailTemplateConfig' => 'setEmailTemplateConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * updatedTime  updatedTime
    * enableAccountSignUp  enableAccountSignUp
    * enableAnonymousUsers  enableAnonymousUsers
    * apiExternalUrl  apiExternalUrl
    * siteUrl  siteUrl
    * allowRedirectUrls  allowRedirectUrls
    * githubOauthProvider  githubOauthProvider
    * emailOauthProvider  emailOauthProvider
    * emailTemplateConfig  emailTemplateConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'updatedTime' => 'getUpdatedTime',
            'enableAccountSignUp' => 'getEnableAccountSignUp',
            'enableAnonymousUsers' => 'getEnableAnonymousUsers',
            'apiExternalUrl' => 'getApiExternalUrl',
            'siteUrl' => 'getSiteUrl',
            'allowRedirectUrls' => 'getAllowRedirectUrls',
            'githubOauthProvider' => 'getGithubOauthProvider',
            'emailOauthProvider' => 'getEmailOauthProvider',
            'emailTemplateConfig' => 'getEmailTemplateConfig'
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
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['enableAccountSignUp'] = isset($data['enableAccountSignUp']) ? $data['enableAccountSignUp'] : null;
        $this->container['enableAnonymousUsers'] = isset($data['enableAnonymousUsers']) ? $data['enableAnonymousUsers'] : null;
        $this->container['apiExternalUrl'] = isset($data['apiExternalUrl']) ? $data['apiExternalUrl'] : null;
        $this->container['siteUrl'] = isset($data['siteUrl']) ? $data['siteUrl'] : null;
        $this->container['allowRedirectUrls'] = isset($data['allowRedirectUrls']) ? $data['allowRedirectUrls'] : null;
        $this->container['githubOauthProvider'] = isset($data['githubOauthProvider']) ? $data['githubOauthProvider'] : null;
        $this->container['emailOauthProvider'] = isset($data['emailOauthProvider']) ? $data['emailOauthProvider'] : null;
        $this->container['emailTemplateConfig'] = isset($data['emailTemplateConfig']) ? $data['emailTemplateConfig'] : null;
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
    * Gets updatedTime
    *  updatedTime
    *
    * @return int|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param int|null $updatedTime updatedTime
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets enableAccountSignUp
    *  enableAccountSignUp
    *
    * @return bool|null
    */
    public function getEnableAccountSignUp()
    {
        return $this->container['enableAccountSignUp'];
    }

    /**
    * Sets enableAccountSignUp
    *
    * @param bool|null $enableAccountSignUp enableAccountSignUp
    *
    * @return $this
    */
    public function setEnableAccountSignUp($enableAccountSignUp)
    {
        $this->container['enableAccountSignUp'] = $enableAccountSignUp;
        return $this;
    }

    /**
    * Gets enableAnonymousUsers
    *  enableAnonymousUsers
    *
    * @return bool|null
    */
    public function getEnableAnonymousUsers()
    {
        return $this->container['enableAnonymousUsers'];
    }

    /**
    * Sets enableAnonymousUsers
    *
    * @param bool|null $enableAnonymousUsers enableAnonymousUsers
    *
    * @return $this
    */
    public function setEnableAnonymousUsers($enableAnonymousUsers)
    {
        $this->container['enableAnonymousUsers'] = $enableAnonymousUsers;
        return $this;
    }

    /**
    * Gets apiExternalUrl
    *  apiExternalUrl
    *
    * @return string|null
    */
    public function getApiExternalUrl()
    {
        return $this->container['apiExternalUrl'];
    }

    /**
    * Sets apiExternalUrl
    *
    * @param string|null $apiExternalUrl apiExternalUrl
    *
    * @return $this
    */
    public function setApiExternalUrl($apiExternalUrl)
    {
        $this->container['apiExternalUrl'] = $apiExternalUrl;
        return $this;
    }

    /**
    * Gets siteUrl
    *  siteUrl
    *
    * @return string|null
    */
    public function getSiteUrl()
    {
        return $this->container['siteUrl'];
    }

    /**
    * Sets siteUrl
    *
    * @param string|null $siteUrl siteUrl
    *
    * @return $this
    */
    public function setSiteUrl($siteUrl)
    {
        $this->container['siteUrl'] = $siteUrl;
        return $this;
    }

    /**
    * Gets allowRedirectUrls
    *  allowRedirectUrls
    *
    * @return string|null
    */
    public function getAllowRedirectUrls()
    {
        return $this->container['allowRedirectUrls'];
    }

    /**
    * Sets allowRedirectUrls
    *
    * @param string|null $allowRedirectUrls allowRedirectUrls
    *
    * @return $this
    */
    public function setAllowRedirectUrls($allowRedirectUrls)
    {
        $this->container['allowRedirectUrls'] = $allowRedirectUrls;
        return $this;
    }

    /**
    * Gets githubOauthProvider
    *  githubOauthProvider
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseApiGitHubOAuthProvider|null
    */
    public function getGithubOauthProvider()
    {
        return $this->container['githubOauthProvider'];
    }

    /**
    * Sets githubOauthProvider
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseApiGitHubOAuthProvider|null $githubOauthProvider githubOauthProvider
    *
    * @return $this
    */
    public function setGithubOauthProvider($githubOauthProvider)
    {
        $this->container['githubOauthProvider'] = $githubOauthProvider;
        return $this;
    }

    /**
    * Gets emailOauthProvider
    *  emailOauthProvider
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseApiEmailOAuthProvider|null
    */
    public function getEmailOauthProvider()
    {
        return $this->container['emailOauthProvider'];
    }

    /**
    * Sets emailOauthProvider
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseApiEmailOAuthProvider|null $emailOauthProvider emailOauthProvider
    *
    * @return $this
    */
    public function setEmailOauthProvider($emailOauthProvider)
    {
        $this->container['emailOauthProvider'] = $emailOauthProvider;
        return $this;
    }

    /**
    * Gets emailTemplateConfig
    *  emailTemplateConfig
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SupabaseApiEmailTemplate|null
    */
    public function getEmailTemplateConfig()
    {
        return $this->container['emailTemplateConfig'];
    }

    /**
    * Sets emailTemplateConfig
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SupabaseApiEmailTemplate|null $emailTemplateConfig emailTemplateConfig
    *
    * @return $this
    */
    public function setEmailTemplateConfig($emailTemplateConfig)
    {
        $this->container['emailTemplateConfig'] = $emailTemplateConfig;
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

