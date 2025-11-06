<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRefCompareRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRefCompareRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * from  **参数解释：** 要开始比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    * to  **参数解释：** 要停止比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    * compareType  **参数解释：** 对比类型。 **取值范围：** - branch，分支。 - commit，提交。 - tag，标签。
    * targetId  **参数解释：** 合并请求的目标仓库，默认为仓库ID。
    * straight  **参数解释：** 比较方法。 **取值范围：** - true，用于`from`和`to`之间的直接比较(`from`..`to`)。 - false，使用merge base进行比较(`from`...`to`)。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * view  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - count，数量。 - commits，提交信息。 - diffs，差异信息。 - files，文件信息。 - commits,diffs，提交信息和差异信息。
    * onlyCount  **参数解释：** 是否仅返回带有提交计数和diffs计数的结果。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    * filePath  **参数解释：** 根据给定的文件路径返回不同的结果。如果文件已重命名，则file_path应包括old_path和new_path，如“file_path=old_path,new_path”。 **取值范围：** 字符串长度不少于1，不超过100000。
    * additionalFields  **参数解释：** 根据给定的参数返回不同的结果。 **取值范围：** - change_lines，变更行数。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'from' => 'string',
            'to' => 'string',
            'compareType' => 'string',
            'targetId' => 'int',
            'straight' => 'bool',
            'ignoreWhitespaceChange' => 'bool',
            'view' => 'string',
            'onlyCount' => 'bool',
            'filePath' => 'string',
            'additionalFields' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * from  **参数解释：** 要开始比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    * to  **参数解释：** 要停止比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    * compareType  **参数解释：** 对比类型。 **取值范围：** - branch，分支。 - commit，提交。 - tag，标签。
    * targetId  **参数解释：** 合并请求的目标仓库，默认为仓库ID。
    * straight  **参数解释：** 比较方法。 **取值范围：** - true，用于`from`和`to`之间的直接比较(`from`..`to`)。 - false，使用merge base进行比较(`from`...`to`)。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * view  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - count，数量。 - commits，提交信息。 - diffs，差异信息。 - files，文件信息。 - commits,diffs，提交信息和差异信息。
    * onlyCount  **参数解释：** 是否仅返回带有提交计数和diffs计数的结果。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    * filePath  **参数解释：** 根据给定的文件路径返回不同的结果。如果文件已重命名，则file_path应包括old_path和new_path，如“file_path=old_path,new_path”。 **取值范围：** 字符串长度不少于1，不超过100000。
    * additionalFields  **参数解释：** 根据给定的参数返回不同的结果。 **取值范围：** - change_lines，变更行数。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'from' => null,
        'to' => null,
        'compareType' => null,
        'targetId' => null,
        'straight' => null,
        'ignoreWhitespaceChange' => null,
        'view' => null,
        'onlyCount' => null,
        'filePath' => null,
        'additionalFields' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * from  **参数解释：** 要开始比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    * to  **参数解释：** 要停止比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    * compareType  **参数解释：** 对比类型。 **取值范围：** - branch，分支。 - commit，提交。 - tag，标签。
    * targetId  **参数解释：** 合并请求的目标仓库，默认为仓库ID。
    * straight  **参数解释：** 比较方法。 **取值范围：** - true，用于`from`和`to`之间的直接比较(`from`..`to`)。 - false，使用merge base进行比较(`from`...`to`)。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * view  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - count，数量。 - commits，提交信息。 - diffs，差异信息。 - files，文件信息。 - commits,diffs，提交信息和差异信息。
    * onlyCount  **参数解释：** 是否仅返回带有提交计数和diffs计数的结果。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    * filePath  **参数解释：** 根据给定的文件路径返回不同的结果。如果文件已重命名，则file_path应包括old_path和new_path，如“file_path=old_path,new_path”。 **取值范围：** 字符串长度不少于1，不超过100000。
    * additionalFields  **参数解释：** 根据给定的参数返回不同的结果。 **取值范围：** - change_lines，变更行数。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'from' => 'from',
            'to' => 'to',
            'compareType' => 'compare_type',
            'targetId' => 'target_id',
            'straight' => 'straight',
            'ignoreWhitespaceChange' => 'ignore_whitespace_change',
            'view' => 'view',
            'onlyCount' => 'only_count',
            'filePath' => 'file_path',
            'additionalFields' => 'additional_fields',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * from  **参数解释：** 要开始比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    * to  **参数解释：** 要停止比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    * compareType  **参数解释：** 对比类型。 **取值范围：** - branch，分支。 - commit，提交。 - tag，标签。
    * targetId  **参数解释：** 合并请求的目标仓库，默认为仓库ID。
    * straight  **参数解释：** 比较方法。 **取值范围：** - true，用于`from`和`to`之间的直接比较(`from`..`to`)。 - false，使用merge base进行比较(`from`...`to`)。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * view  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - count，数量。 - commits，提交信息。 - diffs，差异信息。 - files，文件信息。 - commits,diffs，提交信息和差异信息。
    * onlyCount  **参数解释：** 是否仅返回带有提交计数和diffs计数的结果。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    * filePath  **参数解释：** 根据给定的文件路径返回不同的结果。如果文件已重命名，则file_path应包括old_path和new_path，如“file_path=old_path,new_path”。 **取值范围：** 字符串长度不少于1，不超过100000。
    * additionalFields  **参数解释：** 根据给定的参数返回不同的结果。 **取值范围：** - change_lines，变更行数。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'from' => 'setFrom',
            'to' => 'setTo',
            'compareType' => 'setCompareType',
            'targetId' => 'setTargetId',
            'straight' => 'setStraight',
            'ignoreWhitespaceChange' => 'setIgnoreWhitespaceChange',
            'view' => 'setView',
            'onlyCount' => 'setOnlyCount',
            'filePath' => 'setFilePath',
            'additionalFields' => 'setAdditionalFields',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * from  **参数解释：** 要开始比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    * to  **参数解释：** 要停止比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    * compareType  **参数解释：** 对比类型。 **取值范围：** - branch，分支。 - commit，提交。 - tag，标签。
    * targetId  **参数解释：** 合并请求的目标仓库，默认为仓库ID。
    * straight  **参数解释：** 比较方法。 **取值范围：** - true，用于`from`和`to`之间的直接比较(`from`..`to`)。 - false，使用merge base进行比较(`from`...`to`)。
    * ignoreWhitespaceChange  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    * view  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - count，数量。 - commits，提交信息。 - diffs，差异信息。 - files，文件信息。 - commits,diffs，提交信息和差异信息。
    * onlyCount  **参数解释：** 是否仅返回带有提交计数和diffs计数的结果。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    * filePath  **参数解释：** 根据给定的文件路径返回不同的结果。如果文件已重命名，则file_path应包括old_path和new_path，如“file_path=old_path,new_path”。 **取值范围：** 字符串长度不少于1，不超过100000。
    * additionalFields  **参数解释：** 根据给定的参数返回不同的结果。 **取值范围：** - change_lines，变更行数。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'from' => 'getFrom',
            'to' => 'getTo',
            'compareType' => 'getCompareType',
            'targetId' => 'getTargetId',
            'straight' => 'getStraight',
            'ignoreWhitespaceChange' => 'getIgnoreWhitespaceChange',
            'view' => 'getView',
            'onlyCount' => 'getOnlyCount',
            'filePath' => 'getFilePath',
            'additionalFields' => 'getAdditionalFields',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const COMPARE_TYPE_BRANCH = 'branch';
    const COMPARE_TYPE_COMMIT = 'commit';
    const COMPARE_TYPE_TAG = 'tag';
    const VIEW_COUNT = 'count';
    const VIEW_COMMITS = 'commits';
    const VIEW_DIFFS = 'diffs';
    const VIEW_FILES = 'files';
    const VIEW_COMMITSDIFFS = 'commits,diffs';
    const ADDITIONAL_FIELDS_CHANGE_LINES = 'change_lines';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCompareTypeAllowableValues()
    {
        return [
            self::COMPARE_TYPE_BRANCH,
            self::COMPARE_TYPE_COMMIT,
            self::COMPARE_TYPE_TAG,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getViewAllowableValues()
    {
        return [
            self::VIEW_COUNT,
            self::VIEW_COMMITS,
            self::VIEW_DIFFS,
            self::VIEW_FILES,
            self::VIEW_COMMITSDIFFS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAdditionalFieldsAllowableValues()
    {
        return [
            self::ADDITIONAL_FIELDS_CHANGE_LINES,
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['straight'] = isset($data['straight']) ? $data['straight'] : null;
        $this->container['ignoreWhitespaceChange'] = isset($data['ignoreWhitespaceChange']) ? $data['ignoreWhitespaceChange'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['onlyCount'] = isset($data['onlyCount']) ? $data['onlyCount'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['additionalFields'] = isset($data['additionalFields']) ? $data['additionalFields'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repositoryId'] === null) {
            $invalidProperties[] = "'repositoryId' can't be null";
        }
            if (($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
            if ((mb_strlen($this->container['from']) > 100000)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be smaller than or equal to 100000.";
            }
            if ((mb_strlen($this->container['from']) < 1)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
            if ((mb_strlen($this->container['to']) > 100000)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be smaller than or equal to 100000.";
            }
            if ((mb_strlen($this->container['to']) < 1)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getCompareTypeAllowableValues();
                if (!is_null($this->container['compareType']) && !in_array($this->container['compareType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'compareType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['targetId']) && ($this->container['targetId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'targetId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['targetId']) && ($this->container['targetId'] < 1)) {
                $invalidProperties[] = "invalid value for 'targetId', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getViewAllowableValues();
                if (!is_null($this->container['view']) && !in_array($this->container['view'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'view', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 100000)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getAdditionalFieldsAllowableValues();
                if (!is_null($this->container['additionalFields']) && !in_array($this->container['additionalFields'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'additionalFields', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets repositoryId
    *  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return int
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int $repositoryId **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释：** 要开始比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    *
    * @return string
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param string $from **参数解释：** 要开始比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  **参数解释：** 要停止比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    *
    * @return string
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param string $to **参数解释：** 要停止比较的分支名称、标签名称或者commitid。 **取值范围：** 字符串长度不少于1，不超过100000。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets compareType
    *  **参数解释：** 对比类型。 **取值范围：** - branch，分支。 - commit，提交。 - tag，标签。
    *
    * @return string|null
    */
    public function getCompareType()
    {
        return $this->container['compareType'];
    }

    /**
    * Sets compareType
    *
    * @param string|null $compareType **参数解释：** 对比类型。 **取值范围：** - branch，分支。 - commit，提交。 - tag，标签。
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets targetId
    *  **参数解释：** 合并请求的目标仓库，默认为仓库ID。
    *
    * @return int|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param int|null $targetId **参数解释：** 合并请求的目标仓库，默认为仓库ID。
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets straight
    *  **参数解释：** 比较方法。 **取值范围：** - true，用于`from`和`to`之间的直接比较(`from`..`to`)。 - false，使用merge base进行比较(`from`...`to`)。
    *
    * @return bool|null
    */
    public function getStraight()
    {
        return $this->container['straight'];
    }

    /**
    * Sets straight
    *
    * @param bool|null $straight **参数解释：** 比较方法。 **取值范围：** - true，用于`from`和`to`之间的直接比较(`from`..`to`)。 - false，使用merge base进行比较(`from`...`to`)。
    *
    * @return $this
    */
    public function setStraight($straight)
    {
        $this->container['straight'] = $straight;
        return $this;
    }

    /**
    * Gets ignoreWhitespaceChange
    *  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    *
    * @return bool|null
    */
    public function getIgnoreWhitespaceChange()
    {
        return $this->container['ignoreWhitespaceChange'];
    }

    /**
    * Sets ignoreWhitespaceChange
    *
    * @param bool|null $ignoreWhitespaceChange **参数解释：** 是否忽略空白数量更改。 **取值范围：** - true，忽略空白数量的更改。 - false，不会忽略空白数量的更改。
    *
    * @return $this
    */
    public function setIgnoreWhitespaceChange($ignoreWhitespaceChange)
    {
        $this->container['ignoreWhitespaceChange'] = $ignoreWhitespaceChange;
        return $this;
    }

    /**
    * Gets view
    *  **参数解释：** 是否忽略空白数量更改。 **取值范围：** - count，数量。 - commits，提交信息。 - diffs，差异信息。 - files，文件信息。 - commits,diffs，提交信息和差异信息。
    *
    * @return string|null
    */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
    * Sets view
    *
    * @param string|null $view **参数解释：** 是否忽略空白数量更改。 **取值范围：** - count，数量。 - commits，提交信息。 - diffs，差异信息。 - files，文件信息。 - commits,diffs，提交信息和差异信息。
    *
    * @return $this
    */
    public function setView($view)
    {
        $this->container['view'] = $view;
        return $this;
    }

    /**
    * Gets onlyCount
    *  **参数解释：** 是否仅返回带有提交计数和diffs计数的结果。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    *
    * @return bool|null
    */
    public function getOnlyCount()
    {
        return $this->container['onlyCount'];
    }

    /**
    * Sets onlyCount
    *
    * @param bool|null $onlyCount **参数解释：** 是否仅返回带有提交计数和diffs计数的结果。 **取值范围：** - true，仅返回带有提交计数和diffs计数的结果。 - false，按照compare_view参数返回结果信息。
    *
    * @return $this
    */
    public function setOnlyCount($onlyCount)
    {
        $this->container['onlyCount'] = $onlyCount;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释：** 根据给定的文件路径返回不同的结果。如果文件已重命名，则file_path应包括old_path和new_path，如“file_path=old_path,new_path”。 **取值范围：** 字符串长度不少于1，不超过100000。
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
    * @param string|null $filePath **参数解释：** 根据给定的文件路径返回不同的结果。如果文件已重命名，则file_path应包括old_path和new_path，如“file_path=old_path,new_path”。 **取值范围：** 字符串长度不少于1，不超过100000。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets additionalFields
    *  **参数解释：** 根据给定的参数返回不同的结果。 **取值范围：** - change_lines，变更行数。
    *
    * @return string|null
    */
    public function getAdditionalFields()
    {
        return $this->container['additionalFields'];
    }

    /**
    * Sets additionalFields
    *
    * @param string|null $additionalFields **参数解释：** 根据给定的参数返回不同的结果。 **取值范围：** - change_lines，变更行数。
    *
    * @return $this
    */
    public function setAdditionalFields($additionalFields)
    {
        $this->container['additionalFields'] = $additionalFields;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量，从0开始。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释：** 偏移量，从0开始。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 返回数量。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释：** 返回数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

