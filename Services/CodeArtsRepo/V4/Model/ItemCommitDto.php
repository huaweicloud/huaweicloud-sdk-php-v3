<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ItemCommitDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ItemCommitDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 关联Id。 **取值范围：** 不涉及
    * title  **参数解释：** 合并请求标题。 **取值范围：** 不涉及。
    * result  **参数解释：** 仓库状态。 **取值范围：** - 1，关联成功。 - 2，关联失败。 - 3，流转成功。
    * type  **参数解释：** 关联提交类型。 **取值范围：** - commit，提交。 - branch，分支。 - mergerequest，合并请求。
    * message  **参数解释：** 关联失败的失败原因。 **取值范围：** 不涉及。
    * itemId  **参数解释：** 工作项Id。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    * branchName  **参数解释：** 分支名。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * commitId  **参数解释：** 提交Id。 **取值范围：** 不涉及。
    * commitShortId  **参数解释：** 提交短Id。 **取值范围：** 不涉及。
    * commitMsg  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    * commitUrl  **参数解释：** 提交访问地址。 **取值范围：** 不涉及。
    * iamId  **参数解释：** iamId。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    * itemUrl  **参数解释：** 工作项访问地址。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'title' => 'string',
            'result' => 'int',
            'type' => 'string',
            'message' => 'string',
            'itemId' => 'string',
            'repositoryId' => 'string',
            'branchName' => 'string',
            'userName' => 'string',
            'commitId' => 'string',
            'commitShortId' => 'string',
            'commitMsg' => 'string',
            'commitUrl' => 'string',
            'iamId' => 'string',
            'createAt' => 'string',
            'updateAt' => 'string',
            'itemUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 关联Id。 **取值范围：** 不涉及
    * title  **参数解释：** 合并请求标题。 **取值范围：** 不涉及。
    * result  **参数解释：** 仓库状态。 **取值范围：** - 1，关联成功。 - 2，关联失败。 - 3，流转成功。
    * type  **参数解释：** 关联提交类型。 **取值范围：** - commit，提交。 - branch，分支。 - mergerequest，合并请求。
    * message  **参数解释：** 关联失败的失败原因。 **取值范围：** 不涉及。
    * itemId  **参数解释：** 工作项Id。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    * branchName  **参数解释：** 分支名。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * commitId  **参数解释：** 提交Id。 **取值范围：** 不涉及。
    * commitShortId  **参数解释：** 提交短Id。 **取值范围：** 不涉及。
    * commitMsg  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    * commitUrl  **参数解释：** 提交访问地址。 **取值范围：** 不涉及。
    * iamId  **参数解释：** iamId。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    * itemUrl  **参数解释：** 工作项访问地址。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'result' => null,
        'type' => null,
        'message' => null,
        'itemId' => null,
        'repositoryId' => null,
        'branchName' => null,
        'userName' => null,
        'commitId' => null,
        'commitShortId' => null,
        'commitMsg' => null,
        'commitUrl' => null,
        'iamId' => null,
        'createAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'updateAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'itemUrl' => null
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
    * id  **参数解释：** 关联Id。 **取值范围：** 不涉及
    * title  **参数解释：** 合并请求标题。 **取值范围：** 不涉及。
    * result  **参数解释：** 仓库状态。 **取值范围：** - 1，关联成功。 - 2，关联失败。 - 3，流转成功。
    * type  **参数解释：** 关联提交类型。 **取值范围：** - commit，提交。 - branch，分支。 - mergerequest，合并请求。
    * message  **参数解释：** 关联失败的失败原因。 **取值范围：** 不涉及。
    * itemId  **参数解释：** 工作项Id。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    * branchName  **参数解释：** 分支名。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * commitId  **参数解释：** 提交Id。 **取值范围：** 不涉及。
    * commitShortId  **参数解释：** 提交短Id。 **取值范围：** 不涉及。
    * commitMsg  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    * commitUrl  **参数解释：** 提交访问地址。 **取值范围：** 不涉及。
    * iamId  **参数解释：** iamId。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    * itemUrl  **参数解释：** 工作项访问地址。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'title' => 'title',
            'result' => 'result',
            'type' => 'type',
            'message' => 'message',
            'itemId' => 'item_id',
            'repositoryId' => 'repository_id',
            'branchName' => 'branch_name',
            'userName' => 'user_name',
            'commitId' => 'commit_id',
            'commitShortId' => 'commit_short_id',
            'commitMsg' => 'commit_msg',
            'commitUrl' => 'commit_url',
            'iamId' => 'iam_id',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'itemUrl' => 'item_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 关联Id。 **取值范围：** 不涉及
    * title  **参数解释：** 合并请求标题。 **取值范围：** 不涉及。
    * result  **参数解释：** 仓库状态。 **取值范围：** - 1，关联成功。 - 2，关联失败。 - 3，流转成功。
    * type  **参数解释：** 关联提交类型。 **取值范围：** - commit，提交。 - branch，分支。 - mergerequest，合并请求。
    * message  **参数解释：** 关联失败的失败原因。 **取值范围：** 不涉及。
    * itemId  **参数解释：** 工作项Id。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    * branchName  **参数解释：** 分支名。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * commitId  **参数解释：** 提交Id。 **取值范围：** 不涉及。
    * commitShortId  **参数解释：** 提交短Id。 **取值范围：** 不涉及。
    * commitMsg  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    * commitUrl  **参数解释：** 提交访问地址。 **取值范围：** 不涉及。
    * iamId  **参数解释：** iamId。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    * itemUrl  **参数解释：** 工作项访问地址。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'title' => 'setTitle',
            'result' => 'setResult',
            'type' => 'setType',
            'message' => 'setMessage',
            'itemId' => 'setItemId',
            'repositoryId' => 'setRepositoryId',
            'branchName' => 'setBranchName',
            'userName' => 'setUserName',
            'commitId' => 'setCommitId',
            'commitShortId' => 'setCommitShortId',
            'commitMsg' => 'setCommitMsg',
            'commitUrl' => 'setCommitUrl',
            'iamId' => 'setIamId',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'itemUrl' => 'setItemUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 关联Id。 **取值范围：** 不涉及
    * title  **参数解释：** 合并请求标题。 **取值范围：** 不涉及。
    * result  **参数解释：** 仓库状态。 **取值范围：** - 1，关联成功。 - 2，关联失败。 - 3，流转成功。
    * type  **参数解释：** 关联提交类型。 **取值范围：** - commit，提交。 - branch，分支。 - mergerequest，合并请求。
    * message  **参数解释：** 关联失败的失败原因。 **取值范围：** 不涉及。
    * itemId  **参数解释：** 工作项Id。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    * branchName  **参数解释：** 分支名。 **取值范围：** 不涉及。
    * userName  **参数解释：** 用户名。 **取值范围：** 不涉及。
    * commitId  **参数解释：** 提交Id。 **取值范围：** 不涉及。
    * commitShortId  **参数解释：** 提交短Id。 **取值范围：** 不涉及。
    * commitMsg  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    * commitUrl  **参数解释：** 提交访问地址。 **取值范围：** 不涉及。
    * iamId  **参数解释：** iamId。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    * itemUrl  **参数解释：** 工作项访问地址。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'title' => 'getTitle',
            'result' => 'getResult',
            'type' => 'getType',
            'message' => 'getMessage',
            'itemId' => 'getItemId',
            'repositoryId' => 'getRepositoryId',
            'branchName' => 'getBranchName',
            'userName' => 'getUserName',
            'commitId' => 'getCommitId',
            'commitShortId' => 'getCommitShortId',
            'commitMsg' => 'getCommitMsg',
            'commitUrl' => 'getCommitUrl',
            'iamId' => 'getIamId',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'itemUrl' => 'getItemUrl'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['commitShortId'] = isset($data['commitShortId']) ? $data['commitShortId'] : null;
        $this->container['commitMsg'] = isset($data['commitMsg']) ? $data['commitMsg'] : null;
        $this->container['commitUrl'] = isset($data['commitUrl']) ? $data['commitUrl'] : null;
        $this->container['iamId'] = isset($data['iamId']) ? $data['iamId'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['itemUrl'] = isset($data['itemUrl']) ? $data['itemUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 200)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['result']) && ($this->container['result'] > 10)) {
                $invalidProperties[] = "invalid value for 'result', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['result']) && ($this->container['result'] < 0)) {
                $invalidProperties[] = "invalid value for 'result', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 200)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['itemId']) && (mb_strlen($this->container['itemId']) > 64)) {
                $invalidProperties[] = "invalid value for 'itemId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['itemId']) && (mb_strlen($this->container['itemId']) < 1)) {
                $invalidProperties[] = "invalid value for 'itemId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryId']) && (mb_strlen($this->container['repositoryId']) > 200)) {
                $invalidProperties[] = "invalid value for 'repositoryId', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['repositoryId']) && (mb_strlen($this->container['repositoryId']) < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['branchName']) && (mb_strlen($this->container['branchName']) > 2000)) {
                $invalidProperties[] = "invalid value for 'branchName', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['branchName']) && (mb_strlen($this->container['branchName']) < 1)) {
                $invalidProperties[] = "invalid value for 'branchName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 200)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitId']) && (mb_strlen($this->container['commitId']) > 200)) {
                $invalidProperties[] = "invalid value for 'commitId', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['commitId']) && (mb_strlen($this->container['commitId']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitShortId']) && (mb_strlen($this->container['commitShortId']) > 200)) {
                $invalidProperties[] = "invalid value for 'commitShortId', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['commitShortId']) && (mb_strlen($this->container['commitShortId']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitShortId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitMsg']) && (mb_strlen($this->container['commitMsg']) > 2000)) {
                $invalidProperties[] = "invalid value for 'commitMsg', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['commitMsg']) && (mb_strlen($this->container['commitMsg']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitMsg', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitUrl']) && (mb_strlen($this->container['commitUrl']) > 2000)) {
                $invalidProperties[] = "invalid value for 'commitUrl', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['commitUrl']) && (mb_strlen($this->container['commitUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamId']) && (mb_strlen($this->container['iamId']) > 2000)) {
                $invalidProperties[] = "invalid value for 'iamId', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['iamId']) && (mb_strlen($this->container['iamId']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['itemUrl']) && (mb_strlen($this->container['itemUrl']) > 2000)) {
                $invalidProperties[] = "invalid value for 'itemUrl', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['itemUrl']) && (mb_strlen($this->container['itemUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'itemUrl', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  **参数解释：** 关联Id。 **取值范围：** 不涉及
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 关联Id。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets title
    *  **参数解释：** 合并请求标题。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释：** 合并请求标题。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets result
    *  **参数解释：** 仓库状态。 **取值范围：** - 1，关联成功。 - 2，关联失败。 - 3，流转成功。
    *
    * @return int|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param int|null $result **参数解释：** 仓库状态。 **取值范围：** - 1，关联成功。 - 2，关联失败。 - 3，流转成功。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 关联提交类型。 **取值范围：** - commit，提交。 - branch，分支。 - mergerequest，合并请求。
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
    * @param string|null $type **参数解释：** 关联提交类型。 **取值范围：** - commit，提交。 - branch，分支。 - mergerequest，合并请求。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释：** 关联失败的失败原因。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释：** 关联失败的失败原因。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets itemId
    *  **参数解释：** 工作项Id。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
    * Sets itemId
    *
    * @param string|null $itemId **参数解释：** 工作项Id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
    * Gets repositoryId
    *  **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param string|null $repositoryId **参数解释：** 仓库Id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets branchName
    *  **参数解释：** 分支名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getBranchName()
    {
        return $this->container['branchName'];
    }

    /**
    * Sets branchName
    *
    * @param string|null $branchName **参数解释：** 分支名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释：** 用户名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets commitId
    *  **参数解释：** 提交Id。 **取值范围：** 不涉及。
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
    * @param string|null $commitId **参数解释：** 提交Id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
        return $this;
    }

    /**
    * Gets commitShortId
    *  **参数解释：** 提交短Id。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCommitShortId()
    {
        return $this->container['commitShortId'];
    }

    /**
    * Sets commitShortId
    *
    * @param string|null $commitShortId **参数解释：** 提交短Id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCommitShortId($commitShortId)
    {
        $this->container['commitShortId'] = $commitShortId;
        return $this;
    }

    /**
    * Gets commitMsg
    *  **参数解释：** 提交信息。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCommitMsg()
    {
        return $this->container['commitMsg'];
    }

    /**
    * Sets commitMsg
    *
    * @param string|null $commitMsg **参数解释：** 提交信息。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCommitMsg($commitMsg)
    {
        $this->container['commitMsg'] = $commitMsg;
        return $this;
    }

    /**
    * Gets commitUrl
    *  **参数解释：** 提交访问地址。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCommitUrl()
    {
        return $this->container['commitUrl'];
    }

    /**
    * Sets commitUrl
    *
    * @param string|null $commitUrl **参数解释：** 提交访问地址。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCommitUrl($commitUrl)
    {
        $this->container['commitUrl'] = $commitUrl;
        return $this;
    }

    /**
    * Gets iamId
    *  **参数解释：** iamId。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getIamId()
    {
        return $this->container['iamId'];
    }

    /**
    * Sets iamId
    *
    * @param string|null $iamId **参数解释：** iamId。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIamId($iamId)
    {
        $this->container['iamId'] = $iamId;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt **参数解释：** 创建时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets itemUrl
    *  **参数解释：** 工作项访问地址。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getItemUrl()
    {
        return $this->container['itemUrl'];
    }

    /**
    * Sets itemUrl
    *
    * @param string|null $itemUrl **参数解释：** 工作项访问地址。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setItemUrl($itemUrl)
    {
        $this->container['itemUrl'] = $itemUrl;
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

