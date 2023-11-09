<?php

namespace HuaweiCloud\SDK\ServiceStage\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kind  kind
    * url  url
    * version  软件包版本
    * storage  storage
    * auth  auth
    * repoAuth  repoAuth
    * repoNamespace  repoNamespace
    * repoRef  repoRef
    * repoType  repoType
    * webUrl  webUrl
    * repoUrl  repoUrl
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kind' => '\HuaweiCloud\SDK\ServiceStage\V3\Model\SourceKind',
            'url' => 'string',
            'version' => 'string',
            'storage' => 'string',
            'auth' => 'string',
            'repoAuth' => 'string',
            'repoNamespace' => 'string',
            'repoRef' => 'string',
            'repoType' => 'string',
            'webUrl' => 'string',
            'repoUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kind  kind
    * url  url
    * version  软件包版本
    * storage  storage
    * auth  auth
    * repoAuth  repoAuth
    * repoNamespace  repoNamespace
    * repoRef  repoRef
    * repoType  repoType
    * webUrl  webUrl
    * repoUrl  repoUrl
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kind' => null,
        'url' => null,
        'version' => null,
        'storage' => null,
        'auth' => null,
        'repoAuth' => null,
        'repoNamespace' => null,
        'repoRef' => null,
        'repoType' => null,
        'webUrl' => null,
        'repoUrl' => null
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
    * kind  kind
    * url  url
    * version  软件包版本
    * storage  storage
    * auth  auth
    * repoAuth  repoAuth
    * repoNamespace  repoNamespace
    * repoRef  repoRef
    * repoType  repoType
    * webUrl  webUrl
    * repoUrl  repoUrl
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kind' => 'kind',
            'url' => 'url',
            'version' => 'version',
            'storage' => 'storage',
            'auth' => 'auth',
            'repoAuth' => 'repo_auth',
            'repoNamespace' => 'repo_namespace',
            'repoRef' => 'repo_ref',
            'repoType' => 'repo_type',
            'webUrl' => 'web_url',
            'repoUrl' => 'repo_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kind  kind
    * url  url
    * version  软件包版本
    * storage  storage
    * auth  auth
    * repoAuth  repoAuth
    * repoNamespace  repoNamespace
    * repoRef  repoRef
    * repoType  repoType
    * webUrl  webUrl
    * repoUrl  repoUrl
    *
    * @var string[]
    */
    protected static $setters = [
            'kind' => 'setKind',
            'url' => 'setUrl',
            'version' => 'setVersion',
            'storage' => 'setStorage',
            'auth' => 'setAuth',
            'repoAuth' => 'setRepoAuth',
            'repoNamespace' => 'setRepoNamespace',
            'repoRef' => 'setRepoRef',
            'repoType' => 'setRepoType',
            'webUrl' => 'setWebUrl',
            'repoUrl' => 'setRepoUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kind  kind
    * url  url
    * version  软件包版本
    * storage  storage
    * auth  auth
    * repoAuth  repoAuth
    * repoNamespace  repoNamespace
    * repoRef  repoRef
    * repoType  repoType
    * webUrl  webUrl
    * repoUrl  repoUrl
    *
    * @var string[]
    */
    protected static $getters = [
            'kind' => 'getKind',
            'url' => 'getUrl',
            'version' => 'getVersion',
            'storage' => 'getStorage',
            'auth' => 'getAuth',
            'repoAuth' => 'getRepoAuth',
            'repoNamespace' => 'getRepoNamespace',
            'repoRef' => 'getRepoRef',
            'repoType' => 'getRepoType',
            'webUrl' => 'getWebUrl',
            'repoUrl' => 'getRepoUrl'
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
    const STORAGE_OBS = 'obs';
    const STORAGE_SWR = 'swr';
    const STORAGE_DEVCLOUD = 'devcloud';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageAllowableValues()
    {
        return [
            self::STORAGE_OBS,
            self::STORAGE_SWR,
            self::STORAGE_DEVCLOUD,
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
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['auth'] = isset($data['auth']) ? $data['auth'] : null;
        $this->container['repoAuth'] = isset($data['repoAuth']) ? $data['repoAuth'] : null;
        $this->container['repoNamespace'] = isset($data['repoNamespace']) ? $data['repoNamespace'] : null;
        $this->container['repoRef'] = isset($data['repoRef']) ? $data['repoRef'] : null;
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['repoUrl'] = isset($data['repoUrl']) ? $data['repoUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
            $allowedValues = $this->getStorageAllowableValues();
                if (!is_null($this->container['storage']) && !in_array($this->container['storage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storage', must be one of '%s'",
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
    * Gets kind
    *  kind
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V3\Model\SourceKind
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V3\Model\SourceKind $kind kind
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets url
    *  url
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url url
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets version
    *  软件包版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 软件包版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets storage
    *  storage
    *
    * @return string|null
    */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
    * Sets storage
    *
    * @param string|null $storage storage
    *
    * @return $this
    */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;
        return $this;
    }

    /**
    * Gets auth
    *  auth
    *
    * @return string|null
    */
    public function getAuth()
    {
        return $this->container['auth'];
    }

    /**
    * Sets auth
    *
    * @param string|null $auth auth
    *
    * @return $this
    */
    public function setAuth($auth)
    {
        $this->container['auth'] = $auth;
        return $this;
    }

    /**
    * Gets repoAuth
    *  repoAuth
    *
    * @return string|null
    */
    public function getRepoAuth()
    {
        return $this->container['repoAuth'];
    }

    /**
    * Sets repoAuth
    *
    * @param string|null $repoAuth repoAuth
    *
    * @return $this
    */
    public function setRepoAuth($repoAuth)
    {
        $this->container['repoAuth'] = $repoAuth;
        return $this;
    }

    /**
    * Gets repoNamespace
    *  repoNamespace
    *
    * @return string|null
    */
    public function getRepoNamespace()
    {
        return $this->container['repoNamespace'];
    }

    /**
    * Sets repoNamespace
    *
    * @param string|null $repoNamespace repoNamespace
    *
    * @return $this
    */
    public function setRepoNamespace($repoNamespace)
    {
        $this->container['repoNamespace'] = $repoNamespace;
        return $this;
    }

    /**
    * Gets repoRef
    *  repoRef
    *
    * @return string|null
    */
    public function getRepoRef()
    {
        return $this->container['repoRef'];
    }

    /**
    * Sets repoRef
    *
    * @param string|null $repoRef repoRef
    *
    * @return $this
    */
    public function setRepoRef($repoRef)
    {
        $this->container['repoRef'] = $repoRef;
        return $this;
    }

    /**
    * Gets repoType
    *  repoType
    *
    * @return string|null
    */
    public function getRepoType()
    {
        return $this->container['repoType'];
    }

    /**
    * Sets repoType
    *
    * @param string|null $repoType repoType
    *
    * @return $this
    */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;
        return $this;
    }

    /**
    * Gets webUrl
    *  webUrl
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl webUrl
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets repoUrl
    *  repoUrl
    *
    * @return string|null
    */
    public function getRepoUrl()
    {
        return $this->container['repoUrl'];
    }

    /**
    * Sets repoUrl
    *
    * @param string|null $repoUrl repoUrl
    *
    * @return $this
    */
    public function setRepoUrl($repoUrl)
    {
        $this->container['repoUrl'] = $repoUrl;
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

