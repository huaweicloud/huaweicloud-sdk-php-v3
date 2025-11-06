<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFileBodyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFileBodyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  用户名
    * filePath  文件路径
    * branch  分支名
    * commitMessage  提交信息
    * authorEmail  作者邮箱
    * authorName  作者名称
    * content  文件内容
    * encoding  编码方式
    * lastCommitId  最新提交commit
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'filePath' => 'string',
            'branch' => 'string',
            'commitMessage' => 'string',
            'authorEmail' => 'string',
            'authorName' => 'string',
            'content' => 'string',
            'encoding' => 'string',
            'lastCommitId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  用户名
    * filePath  文件路径
    * branch  分支名
    * commitMessage  提交信息
    * authorEmail  作者邮箱
    * authorName  作者名称
    * content  文件内容
    * encoding  编码方式
    * lastCommitId  最新提交commit
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'filePath' => null,
        'branch' => null,
        'commitMessage' => null,
        'authorEmail' => null,
        'authorName' => null,
        'content' => null,
        'encoding' => null,
        'lastCommitId' => null
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
    * name  用户名
    * filePath  文件路径
    * branch  分支名
    * commitMessage  提交信息
    * authorEmail  作者邮箱
    * authorName  作者名称
    * content  文件内容
    * encoding  编码方式
    * lastCommitId  最新提交commit
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'filePath' => 'file_path',
            'branch' => 'branch',
            'commitMessage' => 'commit_message',
            'authorEmail' => 'author_email',
            'authorName' => 'author_name',
            'content' => 'content',
            'encoding' => 'encoding',
            'lastCommitId' => 'last_commit_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  用户名
    * filePath  文件路径
    * branch  分支名
    * commitMessage  提交信息
    * authorEmail  作者邮箱
    * authorName  作者名称
    * content  文件内容
    * encoding  编码方式
    * lastCommitId  最新提交commit
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'filePath' => 'setFilePath',
            'branch' => 'setBranch',
            'commitMessage' => 'setCommitMessage',
            'authorEmail' => 'setAuthorEmail',
            'authorName' => 'setAuthorName',
            'content' => 'setContent',
            'encoding' => 'setEncoding',
            'lastCommitId' => 'setLastCommitId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  用户名
    * filePath  文件路径
    * branch  分支名
    * commitMessage  提交信息
    * authorEmail  作者邮箱
    * authorName  作者名称
    * content  文件内容
    * encoding  编码方式
    * lastCommitId  最新提交commit
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'filePath' => 'getFilePath',
            'branch' => 'getBranch',
            'commitMessage' => 'getCommitMessage',
            'authorEmail' => 'getAuthorEmail',
            'authorName' => 'getAuthorName',
            'content' => 'getContent',
            'encoding' => 'getEncoding',
            'lastCommitId' => 'getLastCommitId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['commitMessage'] = isset($data['commitMessage']) ? $data['commitMessage'] : null;
        $this->container['authorEmail'] = isset($data['authorEmail']) ? $data['authorEmail'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['lastCommitId'] = isset($data['lastCommitId']) ? $data['lastCommitId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['filePath'] === null) {
            $invalidProperties[] = "'filePath' can't be null";
        }
        if ($this->container['branch'] === null) {
            $invalidProperties[] = "'branch' can't be null";
        }
        if ($this->container['commitMessage'] === null) {
            $invalidProperties[] = "'commitMessage' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
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
    * Gets name
    *  用户名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 用户名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets filePath
    *  文件路径
    *
    * @return string
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string $filePath 文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets branch
    *  分支名
    *
    * @return string
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string $branch 分支名
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets commitMessage
    *  提交信息
    *
    * @return string
    */
    public function getCommitMessage()
    {
        return $this->container['commitMessage'];
    }

    /**
    * Sets commitMessage
    *
    * @param string $commitMessage 提交信息
    *
    * @return $this
    */
    public function setCommitMessage($commitMessage)
    {
        $this->container['commitMessage'] = $commitMessage;
        return $this;
    }

    /**
    * Gets authorEmail
    *  作者邮箱
    *
    * @return string|null
    */
    public function getAuthorEmail()
    {
        return $this->container['authorEmail'];
    }

    /**
    * Sets authorEmail
    *
    * @param string|null $authorEmail 作者邮箱
    *
    * @return $this
    */
    public function setAuthorEmail($authorEmail)
    {
        $this->container['authorEmail'] = $authorEmail;
        return $this;
    }

    /**
    * Gets authorName
    *  作者名称
    *
    * @return string|null
    */
    public function getAuthorName()
    {
        return $this->container['authorName'];
    }

    /**
    * Sets authorName
    *
    * @param string|null $authorName 作者名称
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets content
    *  文件内容
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 文件内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets encoding
    *  编码方式
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
    * @param string|null $encoding 编码方式
    *
    * @return $this
    */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;
        return $this;
    }

    /**
    * Gets lastCommitId
    *  最新提交commit
    *
    * @return string|null
    */
    public function getLastCommitId()
    {
        return $this->container['lastCommitId'];
    }

    /**
    * Sets lastCommitId
    *
    * @param string|null $lastCommitId 最新提交commit
    *
    * @return $this
    */
    public function setLastCommitId($lastCommitId)
    {
        $this->container['lastCommitId'] = $lastCommitId;
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

