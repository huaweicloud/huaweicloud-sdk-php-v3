<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RenameFileBodyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RenameFileBodyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filePath  **参数解释：** 文件路径 **取值范围：** 不涉及。
    * branchName  **参数解释：** 分支名 **取值范围：** 不涉及。
    * commitMessage  **参数解释：** 提交信息 **取值范围：** 不涉及。
    * startBranch  **参数解释：** 基于分支名（即基于某分支，向其他分支进行推送） **取值范围：** 不涉及。
    * authorEmail  **参数解释：** 作者邮箱 **取值范围：** 不涉及。
    * authorName  **参数解释：** 作者名称 **取值范围：** 不涉及。
    * previousPath  **参数解释：** 改名前地址 **取值范围：** 不涉及。
    * inferContent  **参数解释：** 是否迁移内容（与content字段不能同时为空） **取值范围：** 不涉及。
    * content  **参数解释：** 文件内容（与infer_content字段不能同时为空） **取值范围：** 不涉及。
    * encoding  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    * lastCommitId  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filePath' => 'string',
            'branchName' => 'string',
            'commitMessage' => 'string',
            'startBranch' => 'string',
            'authorEmail' => 'string',
            'authorName' => 'string',
            'previousPath' => 'string',
            'inferContent' => 'bool',
            'content' => 'string',
            'encoding' => 'string',
            'lastCommitId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filePath  **参数解释：** 文件路径 **取值范围：** 不涉及。
    * branchName  **参数解释：** 分支名 **取值范围：** 不涉及。
    * commitMessage  **参数解释：** 提交信息 **取值范围：** 不涉及。
    * startBranch  **参数解释：** 基于分支名（即基于某分支，向其他分支进行推送） **取值范围：** 不涉及。
    * authorEmail  **参数解释：** 作者邮箱 **取值范围：** 不涉及。
    * authorName  **参数解释：** 作者名称 **取值范围：** 不涉及。
    * previousPath  **参数解释：** 改名前地址 **取值范围：** 不涉及。
    * inferContent  **参数解释：** 是否迁移内容（与content字段不能同时为空） **取值范围：** 不涉及。
    * content  **参数解释：** 文件内容（与infer_content字段不能同时为空） **取值范围：** 不涉及。
    * encoding  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    * lastCommitId  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filePath' => null,
        'branchName' => null,
        'commitMessage' => null,
        'startBranch' => null,
        'authorEmail' => null,
        'authorName' => null,
        'previousPath' => null,
        'inferContent' => null,
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
    * filePath  **参数解释：** 文件路径 **取值范围：** 不涉及。
    * branchName  **参数解释：** 分支名 **取值范围：** 不涉及。
    * commitMessage  **参数解释：** 提交信息 **取值范围：** 不涉及。
    * startBranch  **参数解释：** 基于分支名（即基于某分支，向其他分支进行推送） **取值范围：** 不涉及。
    * authorEmail  **参数解释：** 作者邮箱 **取值范围：** 不涉及。
    * authorName  **参数解释：** 作者名称 **取值范围：** 不涉及。
    * previousPath  **参数解释：** 改名前地址 **取值范围：** 不涉及。
    * inferContent  **参数解释：** 是否迁移内容（与content字段不能同时为空） **取值范围：** 不涉及。
    * content  **参数解释：** 文件内容（与infer_content字段不能同时为空） **取值范围：** 不涉及。
    * encoding  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    * lastCommitId  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filePath' => 'file_path',
            'branchName' => 'branch_name',
            'commitMessage' => 'commit_message',
            'startBranch' => 'start_branch',
            'authorEmail' => 'author_email',
            'authorName' => 'author_name',
            'previousPath' => 'previous_path',
            'inferContent' => 'infer_content',
            'content' => 'content',
            'encoding' => 'encoding',
            'lastCommitId' => 'last_commit_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filePath  **参数解释：** 文件路径 **取值范围：** 不涉及。
    * branchName  **参数解释：** 分支名 **取值范围：** 不涉及。
    * commitMessage  **参数解释：** 提交信息 **取值范围：** 不涉及。
    * startBranch  **参数解释：** 基于分支名（即基于某分支，向其他分支进行推送） **取值范围：** 不涉及。
    * authorEmail  **参数解释：** 作者邮箱 **取值范围：** 不涉及。
    * authorName  **参数解释：** 作者名称 **取值范围：** 不涉及。
    * previousPath  **参数解释：** 改名前地址 **取值范围：** 不涉及。
    * inferContent  **参数解释：** 是否迁移内容（与content字段不能同时为空） **取值范围：** 不涉及。
    * content  **参数解释：** 文件内容（与infer_content字段不能同时为空） **取值范围：** 不涉及。
    * encoding  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    * lastCommitId  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'filePath' => 'setFilePath',
            'branchName' => 'setBranchName',
            'commitMessage' => 'setCommitMessage',
            'startBranch' => 'setStartBranch',
            'authorEmail' => 'setAuthorEmail',
            'authorName' => 'setAuthorName',
            'previousPath' => 'setPreviousPath',
            'inferContent' => 'setInferContent',
            'content' => 'setContent',
            'encoding' => 'setEncoding',
            'lastCommitId' => 'setLastCommitId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filePath  **参数解释：** 文件路径 **取值范围：** 不涉及。
    * branchName  **参数解释：** 分支名 **取值范围：** 不涉及。
    * commitMessage  **参数解释：** 提交信息 **取值范围：** 不涉及。
    * startBranch  **参数解释：** 基于分支名（即基于某分支，向其他分支进行推送） **取值范围：** 不涉及。
    * authorEmail  **参数解释：** 作者邮箱 **取值范围：** 不涉及。
    * authorName  **参数解释：** 作者名称 **取值范围：** 不涉及。
    * previousPath  **参数解释：** 改名前地址 **取值范围：** 不涉及。
    * inferContent  **参数解释：** 是否迁移内容（与content字段不能同时为空） **取值范围：** 不涉及。
    * content  **参数解释：** 文件内容（与infer_content字段不能同时为空） **取值范围：** 不涉及。
    * encoding  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
    * lastCommitId  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'filePath' => 'getFilePath',
            'branchName' => 'getBranchName',
            'commitMessage' => 'getCommitMessage',
            'startBranch' => 'getStartBranch',
            'authorEmail' => 'getAuthorEmail',
            'authorName' => 'getAuthorName',
            'previousPath' => 'getPreviousPath',
            'inferContent' => 'getInferContent',
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['commitMessage'] = isset($data['commitMessage']) ? $data['commitMessage'] : null;
        $this->container['startBranch'] = isset($data['startBranch']) ? $data['startBranch'] : null;
        $this->container['authorEmail'] = isset($data['authorEmail']) ? $data['authorEmail'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['previousPath'] = isset($data['previousPath']) ? $data['previousPath'] : null;
        $this->container['inferContent'] = isset($data['inferContent']) ? $data['inferContent'] : null;
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
        if ($this->container['branchName'] === null) {
            $invalidProperties[] = "'branchName' can't be null";
        }
        if ($this->container['commitMessage'] === null) {
            $invalidProperties[] = "'commitMessage' can't be null";
        }
        if ($this->container['previousPath'] === null) {
            $invalidProperties[] = "'previousPath' can't be null";
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
    * Gets filePath
    *  **参数解释：** 文件路径 **取值范围：** 不涉及。
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
    * @param string $filePath **参数解释：** 文件路径 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets branchName
    *  **参数解释：** 分支名 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getBranchName()
    {
        return $this->container['branchName'];
    }

    /**
    * Sets branchName
    *
    * @param string $branchName **参数解释：** 分支名 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;
        return $this;
    }

    /**
    * Gets commitMessage
    *  **参数解释：** 提交信息 **取值范围：** 不涉及。
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
    * @param string $commitMessage **参数解释：** 提交信息 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCommitMessage($commitMessage)
    {
        $this->container['commitMessage'] = $commitMessage;
        return $this;
    }

    /**
    * Gets startBranch
    *  **参数解释：** 基于分支名（即基于某分支，向其他分支进行推送） **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getStartBranch()
    {
        return $this->container['startBranch'];
    }

    /**
    * Sets startBranch
    *
    * @param string|null $startBranch **参数解释：** 基于分支名（即基于某分支，向其他分支进行推送） **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStartBranch($startBranch)
    {
        $this->container['startBranch'] = $startBranch;
        return $this;
    }

    /**
    * Gets authorEmail
    *  **参数解释：** 作者邮箱 **取值范围：** 不涉及。
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
    * @param string|null $authorEmail **参数解释：** 作者邮箱 **取值范围：** 不涉及。
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
    *  **参数解释：** 作者名称 **取值范围：** 不涉及。
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
    * @param string|null $authorName **参数解释：** 作者名称 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets previousPath
    *  **参数解释：** 改名前地址 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getPreviousPath()
    {
        return $this->container['previousPath'];
    }

    /**
    * Sets previousPath
    *
    * @param string $previousPath **参数解释：** 改名前地址 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPreviousPath($previousPath)
    {
        $this->container['previousPath'] = $previousPath;
        return $this;
    }

    /**
    * Gets inferContent
    *  **参数解释：** 是否迁移内容（与content字段不能同时为空） **取值范围：** 不涉及。
    *
    * @return bool|null
    */
    public function getInferContent()
    {
        return $this->container['inferContent'];
    }

    /**
    * Sets inferContent
    *
    * @param bool|null $inferContent **参数解释：** 是否迁移内容（与content字段不能同时为空） **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setInferContent($inferContent)
    {
        $this->container['inferContent'] = $inferContent;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释：** 文件内容（与infer_content字段不能同时为空） **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content **参数解释：** 文件内容（与infer_content字段不能同时为空） **取值范围：** 不涉及。
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
    *  **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
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
    * @param string|null $encoding **参数解释：** 编码方式。 **取值范围：** - text。 - base64.
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
    *  **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
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
    * @param string|null $lastCommitId **参数解释：** 上次已知的文件提交ID。 **取值范围：** 不涉及。
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

