<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionsManualRunPipelineDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionsManualRunPipelineDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * httpsUrl  **参数解释**： 触发URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * filePath  **参数解释**： 文件存储路径。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * fileContent  **参数解释**： 文件详情。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * branch  **参数解释**： 代码源分支名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * encoding  **参数解释**： 文件编码方式。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tag  **参数解释**： 代码源标签。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * commitId  **参数解释**： 代码源提交记录id。 **约束限制**： 不涉及。 **取值范围**： 40位字符。 **默认取值**： 不涉及。
    * accessToken  **参数解释**： 代码源访问权限token。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'httpsUrl' => 'string',
            'filePath' => 'string',
            'fileContent' => 'string',
            'branch' => 'string',
            'encoding' => 'string',
            'tag' => 'string',
            'commitId' => 'string',
            'accessToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * httpsUrl  **参数解释**： 触发URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * filePath  **参数解释**： 文件存储路径。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * fileContent  **参数解释**： 文件详情。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * branch  **参数解释**： 代码源分支名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * encoding  **参数解释**： 文件编码方式。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tag  **参数解释**： 代码源标签。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * commitId  **参数解释**： 代码源提交记录id。 **约束限制**： 不涉及。 **取值范围**： 40位字符。 **默认取值**： 不涉及。
    * accessToken  **参数解释**： 代码源访问权限token。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'httpsUrl' => null,
        'filePath' => null,
        'fileContent' => null,
        'branch' => null,
        'encoding' => null,
        'tag' => null,
        'commitId' => null,
        'accessToken' => null
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
    * httpsUrl  **参数解释**： 触发URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * filePath  **参数解释**： 文件存储路径。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * fileContent  **参数解释**： 文件详情。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * branch  **参数解释**： 代码源分支名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * encoding  **参数解释**： 文件编码方式。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tag  **参数解释**： 代码源标签。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * commitId  **参数解释**： 代码源提交记录id。 **约束限制**： 不涉及。 **取值范围**： 40位字符。 **默认取值**： 不涉及。
    * accessToken  **参数解释**： 代码源访问权限token。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'httpsUrl' => 'https_url',
            'filePath' => 'file_path',
            'fileContent' => 'file_content',
            'branch' => 'branch',
            'encoding' => 'encoding',
            'tag' => 'tag',
            'commitId' => 'commit_id',
            'accessToken' => 'access_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * httpsUrl  **参数解释**： 触发URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * filePath  **参数解释**： 文件存储路径。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * fileContent  **参数解释**： 文件详情。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * branch  **参数解释**： 代码源分支名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * encoding  **参数解释**： 文件编码方式。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tag  **参数解释**： 代码源标签。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * commitId  **参数解释**： 代码源提交记录id。 **约束限制**： 不涉及。 **取值范围**： 40位字符。 **默认取值**： 不涉及。
    * accessToken  **参数解释**： 代码源访问权限token。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'httpsUrl' => 'setHttpsUrl',
            'filePath' => 'setFilePath',
            'fileContent' => 'setFileContent',
            'branch' => 'setBranch',
            'encoding' => 'setEncoding',
            'tag' => 'setTag',
            'commitId' => 'setCommitId',
            'accessToken' => 'setAccessToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * httpsUrl  **参数解释**： 触发URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * filePath  **参数解释**： 文件存储路径。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * fileContent  **参数解释**： 文件详情。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * branch  **参数解释**： 代码源分支名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * encoding  **参数解释**： 文件编码方式。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tag  **参数解释**： 代码源标签。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * commitId  **参数解释**： 代码源提交记录id。 **约束限制**： 不涉及。 **取值范围**： 40位字符。 **默认取值**： 不涉及。
    * accessToken  **参数解释**： 代码源访问权限token。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'httpsUrl' => 'getHttpsUrl',
            'filePath' => 'getFilePath',
            'fileContent' => 'getFileContent',
            'branch' => 'getBranch',
            'encoding' => 'getEncoding',
            'tag' => 'getTag',
            'commitId' => 'getCommitId',
            'accessToken' => 'getAccessToken'
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileContent'] = isset($data['fileContent']) ? $data['fileContent'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
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
    *  **参数解释**： 触发URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $httpsUrl **参数解释**： 触发URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setHttpsUrl($httpsUrl)
    {
        $this->container['httpsUrl'] = $httpsUrl;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释**： 文件存储路径。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath **参数解释**： 文件存储路径。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileContent
    *  **参数解释**： 文件详情。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getFileContent()
    {
        return $this->container['fileContent'];
    }

    /**
    * Sets fileContent
    *
    * @param string|null $fileContent **参数解释**： 文件详情。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setFileContent($fileContent)
    {
        $this->container['fileContent'] = $fileContent;
        return $this;
    }

    /**
    * Gets branch
    *  **参数解释**： 代码源分支名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string|null $branch **参数解释**： 代码源分支名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets encoding
    *  **参数解释**： 文件编码方式。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
    * Sets encoding
    *
    * @param string|null $encoding **参数解释**： 文件编码方式。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;
        return $this;
    }

    /**
    * Gets tag
    *  **参数解释**： 代码源标签。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag **参数解释**： 代码源标签。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets commitId
    *  **参数解释**： 代码源提交记录id。 **约束限制**： 不涉及。 **取值范围**： 40位字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
    * Sets commitId
    *
    * @param string|null $commitId **参数解释**： 代码源提交记录id。 **约束限制**： 不涉及。 **取值范围**： 40位字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
        return $this;
    }

    /**
    * Gets accessToken
    *  **参数解释**： 代码源访问权限token。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $accessToken **参数解释**： 代码源访问权限token。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;
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

