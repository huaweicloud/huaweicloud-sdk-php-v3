<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * httpsUrl  http地址
    * webUrl  存储库链接
    * repoStatus  存储库状态
    * errorMsg  报错信息
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'httpsUrl' => 'string',
            'webUrl' => 'string',
            'repoStatus' => 'string',
            'errorMsg' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * httpsUrl  http地址
    * webUrl  存储库链接
    * repoStatus  存储库状态
    * errorMsg  报错信息
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'httpsUrl' => null,
        'webUrl' => null,
        'repoStatus' => null,
        'errorMsg' => null,
        'projectId' => null
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
    * httpsUrl  http地址
    * webUrl  存储库链接
    * repoStatus  存储库状态
    * errorMsg  报错信息
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'httpsUrl' => 'https_url',
            'webUrl' => 'web_url',
            'repoStatus' => 'repo_status',
            'errorMsg' => 'error_msg',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * httpsUrl  http地址
    * webUrl  存储库链接
    * repoStatus  存储库状态
    * errorMsg  报错信息
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'httpsUrl' => 'setHttpsUrl',
            'webUrl' => 'setWebUrl',
            'repoStatus' => 'setRepoStatus',
            'errorMsg' => 'setErrorMsg',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * httpsUrl  http地址
    * webUrl  存储库链接
    * repoStatus  存储库状态
    * errorMsg  报错信息
    * projectId  项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'httpsUrl' => 'getHttpsUrl',
            'webUrl' => 'getWebUrl',
            'repoStatus' => 'getRepoStatus',
            'errorMsg' => 'getErrorMsg',
            'projectId' => 'getProjectId'
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
        $this->container['httpsUrl'] = isset($data['httpsUrl']) ? $data['httpsUrl'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['repoStatus'] = isset($data['repoStatus']) ? $data['repoStatus'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
    * Gets httpsUrl
    *  http地址
    *
    * @return string|null
    */
    public function getHttpsUrl()
    {
        return $this->container['httpsUrl'];
    }

    /**
    * Sets httpsUrl
    *
    * @param string|null $httpsUrl http地址
    *
    * @return $this
    */
    public function setHttpsUrl($httpsUrl)
    {
        $this->container['httpsUrl'] = $httpsUrl;
        return $this;
    }

    /**
    * Gets webUrl
    *  存储库链接
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
    * @param string|null $webUrl 存储库链接
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets repoStatus
    *  存储库状态
    *
    * @return string|null
    */
    public function getRepoStatus()
    {
        return $this->container['repoStatus'];
    }

    /**
    * Sets repoStatus
    *
    * @param string|null $repoStatus 存储库状态
    *
    * @return $this
    */
    public function setRepoStatus($repoStatus)
    {
        $this->container['repoStatus'] = $repoStatus;
        return $this;
    }

    /**
    * Gets errorMsg
    *  报错信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 报错信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

