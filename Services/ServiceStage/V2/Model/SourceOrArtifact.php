<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceOrArtifact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceOrArtifact';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * storage  存储方式，支持软件仓库swr和对象存储obs。
    * type  类别，支持package。
    * url  软件包源码地址，如https://{IP}:20202/xxx/xxx.jar。
    * webUrl  软件包/源码仓库地址
    * auth  认证方式，支持iam，none，默认是iam。
    * properties  properties
    * repoType  repoType
    * repoUrl  代码仓url，如：https://github.com/example/demo.git
    * repoRef  代码分支或者Tag，默认是master。
    * repoAuth  授权名称，在授权列表获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'storage' => 'string',
            'type' => 'string',
            'url' => 'string',
            'webUrl' => 'string',
            'auth' => 'string',
            'properties' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ObsProperties',
            'repoType' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\SourceRepoType',
            'repoUrl' => 'string',
            'repoRef' => 'string',
            'repoAuth' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * storage  存储方式，支持软件仓库swr和对象存储obs。
    * type  类别，支持package。
    * url  软件包源码地址，如https://{IP}:20202/xxx/xxx.jar。
    * webUrl  软件包/源码仓库地址
    * auth  认证方式，支持iam，none，默认是iam。
    * properties  properties
    * repoType  repoType
    * repoUrl  代码仓url，如：https://github.com/example/demo.git
    * repoRef  代码分支或者Tag，默认是master。
    * repoAuth  授权名称，在授权列表获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'storage' => null,
        'type' => null,
        'url' => null,
        'webUrl' => null,
        'auth' => null,
        'properties' => null,
        'repoType' => null,
        'repoUrl' => null,
        'repoRef' => null,
        'repoAuth' => null
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
    * storage  存储方式，支持软件仓库swr和对象存储obs。
    * type  类别，支持package。
    * url  软件包源码地址，如https://{IP}:20202/xxx/xxx.jar。
    * webUrl  软件包/源码仓库地址
    * auth  认证方式，支持iam，none，默认是iam。
    * properties  properties
    * repoType  repoType
    * repoUrl  代码仓url，如：https://github.com/example/demo.git
    * repoRef  代码分支或者Tag，默认是master。
    * repoAuth  授权名称，在授权列表获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'storage' => 'storage',
            'type' => 'type',
            'url' => 'url',
            'webUrl' => 'webUrl',
            'auth' => 'auth',
            'properties' => 'properties',
            'repoType' => 'repo_type',
            'repoUrl' => 'repo_url',
            'repoRef' => 'repo_ref',
            'repoAuth' => 'repo_auth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * storage  存储方式，支持软件仓库swr和对象存储obs。
    * type  类别，支持package。
    * url  软件包源码地址，如https://{IP}:20202/xxx/xxx.jar。
    * webUrl  软件包/源码仓库地址
    * auth  认证方式，支持iam，none，默认是iam。
    * properties  properties
    * repoType  repoType
    * repoUrl  代码仓url，如：https://github.com/example/demo.git
    * repoRef  代码分支或者Tag，默认是master。
    * repoAuth  授权名称，在授权列表获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'storage' => 'setStorage',
            'type' => 'setType',
            'url' => 'setUrl',
            'webUrl' => 'setWebUrl',
            'auth' => 'setAuth',
            'properties' => 'setProperties',
            'repoType' => 'setRepoType',
            'repoUrl' => 'setRepoUrl',
            'repoRef' => 'setRepoRef',
            'repoAuth' => 'setRepoAuth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * storage  存储方式，支持软件仓库swr和对象存储obs。
    * type  类别，支持package。
    * url  软件包源码地址，如https://{IP}:20202/xxx/xxx.jar。
    * webUrl  软件包/源码仓库地址
    * auth  认证方式，支持iam，none，默认是iam。
    * properties  properties
    * repoType  repoType
    * repoUrl  代码仓url，如：https://github.com/example/demo.git
    * repoRef  代码分支或者Tag，默认是master。
    * repoAuth  授权名称，在授权列表获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'storage' => 'getStorage',
            'type' => 'getType',
            'url' => 'getUrl',
            'webUrl' => 'getWebUrl',
            'auth' => 'getAuth',
            'properties' => 'getProperties',
            'repoType' => 'getRepoType',
            'repoUrl' => 'getRepoUrl',
            'repoRef' => 'getRepoRef',
            'repoAuth' => 'getRepoAuth'
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
    const STORAGE_SWR = 'swr';
    const STORAGE_OBS = 'obs';
    const TYPE_PACKAGE = 'package';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageAllowableValues()
    {
        return [
            self::STORAGE_SWR,
            self::STORAGE_OBS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PACKAGE,
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
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['auth'] = isset($data['auth']) ? $data['auth'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['repoType'] = isset($data['repoType']) ? $data['repoType'] : null;
        $this->container['repoUrl'] = isset($data['repoUrl']) ? $data['repoUrl'] : null;
        $this->container['repoRef'] = isset($data['repoRef']) ? $data['repoRef'] : null;
        $this->container['repoAuth'] = isset($data['repoAuth']) ? $data['repoAuth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStorageAllowableValues();
                if (!is_null($this->container['storage']) && !in_array($this->container['storage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['repoUrl']) && (mb_strlen($this->container['repoUrl']) > 256)) {
                $invalidProperties[] = "invalid value for 'repoUrl', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['repoRef']) && (mb_strlen($this->container['repoRef']) > 32)) {
                $invalidProperties[] = "invalid value for 'repoRef', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['repoAuth']) && (mb_strlen($this->container['repoAuth']) > 32)) {
                $invalidProperties[] = "invalid value for 'repoAuth', the character length must be smaller than or equal to 32.";
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
    * Gets storage
    *  存储方式，支持软件仓库swr和对象存储obs。
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
    * @param string|null $storage 存储方式，支持软件仓库swr和对象存储obs。
    *
    * @return $this
    */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;
        return $this;
    }

    /**
    * Gets type
    *  类别，支持package。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类别，支持package。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets url
    *  软件包源码地址，如https://{IP}:20202/xxx/xxx.jar。
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
    * @param string|null $url 软件包源码地址，如https://{IP}:20202/xxx/xxx.jar。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets webUrl
    *  软件包/源码仓库地址
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
    * @param string|null $webUrl 软件包/源码仓库地址
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets auth
    *  认证方式，支持iam，none，默认是iam。
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
    * @param string|null $auth 认证方式，支持iam，none，默认是iam。
    *
    * @return $this
    */
    public function setAuth($auth)
    {
        $this->container['auth'] = $auth;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ObsProperties|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ObsProperties|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets repoType
    *  repoType
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\SourceRepoType|null
    */
    public function getRepoType()
    {
        return $this->container['repoType'];
    }

    /**
    * Sets repoType
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\SourceRepoType|null $repoType repoType
    *
    * @return $this
    */
    public function setRepoType($repoType)
    {
        $this->container['repoType'] = $repoType;
        return $this;
    }

    /**
    * Gets repoUrl
    *  代码仓url，如：https://github.com/example/demo.git
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
    * @param string|null $repoUrl 代码仓url，如：https://github.com/example/demo.git
    *
    * @return $this
    */
    public function setRepoUrl($repoUrl)
    {
        $this->container['repoUrl'] = $repoUrl;
        return $this;
    }

    /**
    * Gets repoRef
    *  代码分支或者Tag，默认是master。
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
    * @param string|null $repoRef 代码分支或者Tag，默认是master。
    *
    * @return $this
    */
    public function setRepoRef($repoRef)
    {
        $this->container['repoRef'] = $repoRef;
        return $this;
    }

    /**
    * Gets repoAuth
    *  授权名称，在授权列表获取。
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
    * @param string|null $repoAuth 授权名称，在授权列表获取。
    *
    * @return $this
    */
    public function setRepoAuth($repoAuth)
    {
        $this->container['repoAuth'] = $repoAuth;
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

