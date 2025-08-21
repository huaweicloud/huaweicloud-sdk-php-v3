<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommitParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommitParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * branch  **参数解释：** 分支名称。 **取值范围：** 不涉及。
    * commitMessage  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    * actions  **参数解释：** 在提交时执行的操作。 **取值范围：** 不涉及。
    * startBranch  **参数解释：** 从该分支开始新的提交。  **取值范围：** 不涉及。
    * authorEmail  **参数解释：** 作者邮箱。  **取值范围：** 不涉及。
    * authorName  **参数解释：** 作者名称。  **取值范围：** 不涉及。
    * stats  **参数解释：** 是否包括提交统计信息。 **取值范围：** - true，包括提交统计信息。 - false，不包括提交统计信息
    * force  **参数解释：** 是否强制提交。 **取值范围：** - true，强制提交。 - false，非强制提交
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'branch' => 'string',
            'commitMessage' => 'string',
            'actions' => '\HuaweiCloud\SDK\CodeHub\V4\Model\ActionDto[]',
            'startBranch' => 'string',
            'authorEmail' => 'string',
            'authorName' => 'string',
            'stats' => 'bool',
            'force' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * branch  **参数解释：** 分支名称。 **取值范围：** 不涉及。
    * commitMessage  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    * actions  **参数解释：** 在提交时执行的操作。 **取值范围：** 不涉及。
    * startBranch  **参数解释：** 从该分支开始新的提交。  **取值范围：** 不涉及。
    * authorEmail  **参数解释：** 作者邮箱。  **取值范围：** 不涉及。
    * authorName  **参数解释：** 作者名称。  **取值范围：** 不涉及。
    * stats  **参数解释：** 是否包括提交统计信息。 **取值范围：** - true，包括提交统计信息。 - false，不包括提交统计信息
    * force  **参数解释：** 是否强制提交。 **取值范围：** - true，强制提交。 - false，非强制提交
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'branch' => null,
        'commitMessage' => null,
        'actions' => null,
        'startBranch' => null,
        'authorEmail' => null,
        'authorName' => null,
        'stats' => null,
        'force' => null
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
    * branch  **参数解释：** 分支名称。 **取值范围：** 不涉及。
    * commitMessage  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    * actions  **参数解释：** 在提交时执行的操作。 **取值范围：** 不涉及。
    * startBranch  **参数解释：** 从该分支开始新的提交。  **取值范围：** 不涉及。
    * authorEmail  **参数解释：** 作者邮箱。  **取值范围：** 不涉及。
    * authorName  **参数解释：** 作者名称。  **取值范围：** 不涉及。
    * stats  **参数解释：** 是否包括提交统计信息。 **取值范围：** - true，包括提交统计信息。 - false，不包括提交统计信息
    * force  **参数解释：** 是否强制提交。 **取值范围：** - true，强制提交。 - false，非强制提交
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'branch' => 'branch',
            'commitMessage' => 'commit_message',
            'actions' => 'actions',
            'startBranch' => 'start_branch',
            'authorEmail' => 'author_email',
            'authorName' => 'author_name',
            'stats' => 'stats',
            'force' => 'force'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * branch  **参数解释：** 分支名称。 **取值范围：** 不涉及。
    * commitMessage  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    * actions  **参数解释：** 在提交时执行的操作。 **取值范围：** 不涉及。
    * startBranch  **参数解释：** 从该分支开始新的提交。  **取值范围：** 不涉及。
    * authorEmail  **参数解释：** 作者邮箱。  **取值范围：** 不涉及。
    * authorName  **参数解释：** 作者名称。  **取值范围：** 不涉及。
    * stats  **参数解释：** 是否包括提交统计信息。 **取值范围：** - true，包括提交统计信息。 - false，不包括提交统计信息
    * force  **参数解释：** 是否强制提交。 **取值范围：** - true，强制提交。 - false，非强制提交
    *
    * @var string[]
    */
    protected static $setters = [
            'branch' => 'setBranch',
            'commitMessage' => 'setCommitMessage',
            'actions' => 'setActions',
            'startBranch' => 'setStartBranch',
            'authorEmail' => 'setAuthorEmail',
            'authorName' => 'setAuthorName',
            'stats' => 'setStats',
            'force' => 'setForce'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * branch  **参数解释：** 分支名称。 **取值范围：** 不涉及。
    * commitMessage  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    * actions  **参数解释：** 在提交时执行的操作。 **取值范围：** 不涉及。
    * startBranch  **参数解释：** 从该分支开始新的提交。  **取值范围：** 不涉及。
    * authorEmail  **参数解释：** 作者邮箱。  **取值范围：** 不涉及。
    * authorName  **参数解释：** 作者名称。  **取值范围：** 不涉及。
    * stats  **参数解释：** 是否包括提交统计信息。 **取值范围：** - true，包括提交统计信息。 - false，不包括提交统计信息
    * force  **参数解释：** 是否强制提交。 **取值范围：** - true，强制提交。 - false，非强制提交
    *
    * @var string[]
    */
    protected static $getters = [
            'branch' => 'getBranch',
            'commitMessage' => 'getCommitMessage',
            'actions' => 'getActions',
            'startBranch' => 'getStartBranch',
            'authorEmail' => 'getAuthorEmail',
            'authorName' => 'getAuthorName',
            'stats' => 'getStats',
            'force' => 'getForce'
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
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['commitMessage'] = isset($data['commitMessage']) ? $data['commitMessage'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['startBranch'] = isset($data['startBranch']) ? $data['startBranch'] : null;
        $this->container['authorEmail'] = isset($data['authorEmail']) ? $data['authorEmail'] : null;
        $this->container['authorName'] = isset($data['authorName']) ? $data['authorName'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['force'] = isset($data['force']) ? $data['force'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['branch'] === null) {
            $invalidProperties[] = "'branch' can't be null";
        }
        if ($this->container['commitMessage'] === null) {
            $invalidProperties[] = "'commitMessage' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
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
    * Gets branch
    *  **参数解释：** 分支名称。 **取值范围：** 不涉及。
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
    * @param string $branch **参数解释：** 分支名称。 **取值范围：** 不涉及。
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
    *  **参数解释：** 提交信息。 **取值范围：** 不涉及。
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
    * @param string $commitMessage **参数解释：** 提交信息。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCommitMessage($commitMessage)
    {
        $this->container['commitMessage'] = $commitMessage;
        return $this;
    }

    /**
    * Gets actions
    *  **参数解释：** 在提交时执行的操作。 **取值范围：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\ActionDto[]
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\ActionDto[] $actions **参数解释：** 在提交时执行的操作。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets startBranch
    *  **参数解释：** 从该分支开始新的提交。  **取值范围：** 不涉及。
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
    * @param string|null $startBranch **参数解释：** 从该分支开始新的提交。  **取值范围：** 不涉及。
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
    *  **参数解释：** 作者邮箱。  **取值范围：** 不涉及。
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
    * @param string|null $authorEmail **参数解释：** 作者邮箱。  **取值范围：** 不涉及。
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
    *  **参数解释：** 作者名称。  **取值范围：** 不涉及。
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
    * @param string|null $authorName **参数解释：** 作者名称。  **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAuthorName($authorName)
    {
        $this->container['authorName'] = $authorName;
        return $this;
    }

    /**
    * Gets stats
    *  **参数解释：** 是否包括提交统计信息。 **取值范围：** - true，包括提交统计信息。 - false，不包括提交统计信息
    *
    * @return bool|null
    */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
    * Sets stats
    *
    * @param bool|null $stats **参数解释：** 是否包括提交统计信息。 **取值范围：** - true，包括提交统计信息。 - false，不包括提交统计信息
    *
    * @return $this
    */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;
        return $this;
    }

    /**
    * Gets force
    *  **参数解释：** 是否强制提交。 **取值范围：** - true，强制提交。 - false，非强制提交
    *
    * @return bool|null
    */
    public function getForce()
    {
        return $this->container['force'];
    }

    /**
    * Sets force
    *
    * @param bool|null $force **参数解释：** 是否强制提交。 **取值范围：** - true，强制提交。 - false，非强制提交
    *
    * @return $this
    */
    public function setForce($force)
    {
        $this->container['force'] = $force;
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

