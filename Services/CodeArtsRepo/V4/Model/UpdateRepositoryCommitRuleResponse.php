<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRepositoryCommitRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRepositoryCommitRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 主键ID。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * commitMessageRegex  **参数解释：** 提交信息匹配规则。
    * commitMessageNegativeRegex  **参数解释：** 提交信息负面匹配规则。
    * prohibitedFileNameRegex  **参数解释：** 禁止提交的文件名称。
    * authorEmailRegex  **参数解释：** 提交人邮箱地址。
    * maxFileSize  **参数解释：** 单文件大小限制（MB）。
    * allowedMaxFileSize  **参数解释：** 允许的最大单文件大小（MB）。
    * effectiveDate  **参数解释：** 规则生效时间。
    * binaryGateEnabled  **参数解释：** 是否禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。
    * privilegedUsers  **参数解释：** 特权用户（特权用户可直接推送所有二进制文件入库）。
    * allowedModifyBinary  **参数解释：** 是否允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。
    * allowedBinaryFileNameRegex  **参数解释：** 二进制文件白名单（可直接入库的文件）。
    * authorRegex  **参数解释：** 提交人。
    * updatedAt  **参数解释：** 更新时间。
    * name  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleCheck  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。
    * skipRuleEndDate  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19。 **约束限制：** 仅CR仓库支持此参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'repositoryId' => 'int',
            'commitMessageRegex' => 'string',
            'commitMessageNegativeRegex' => 'string',
            'prohibitedFileNameRegex' => 'string',
            'authorEmailRegex' => 'string',
            'maxFileSize' => 'int',
            'allowedMaxFileSize' => 'int',
            'effectiveDate' => 'string',
            'binaryGateEnabled' => 'bool',
            'privilegedUsers' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryUserBasicDto[]',
            'allowedModifyBinary' => 'bool',
            'allowedBinaryFileNameRegex' => 'string',
            'authorRegex' => 'object',
            'updatedAt' => 'string',
            'name' => 'string',
            'branchName' => 'string',
            'createdAt' => 'string',
            'skipRuleCheck' => 'bool',
            'skipRuleEndDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 主键ID。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * commitMessageRegex  **参数解释：** 提交信息匹配规则。
    * commitMessageNegativeRegex  **参数解释：** 提交信息负面匹配规则。
    * prohibitedFileNameRegex  **参数解释：** 禁止提交的文件名称。
    * authorEmailRegex  **参数解释：** 提交人邮箱地址。
    * maxFileSize  **参数解释：** 单文件大小限制（MB）。
    * allowedMaxFileSize  **参数解释：** 允许的最大单文件大小（MB）。
    * effectiveDate  **参数解释：** 规则生效时间。
    * binaryGateEnabled  **参数解释：** 是否禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。
    * privilegedUsers  **参数解释：** 特权用户（特权用户可直接推送所有二进制文件入库）。
    * allowedModifyBinary  **参数解释：** 是否允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。
    * allowedBinaryFileNameRegex  **参数解释：** 二进制文件白名单（可直接入库的文件）。
    * authorRegex  **参数解释：** 提交人。
    * updatedAt  **参数解释：** 更新时间。
    * name  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleCheck  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。
    * skipRuleEndDate  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19。 **约束限制：** 仅CR仓库支持此参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'repositoryId' => 'int32',
        'commitMessageRegex' => null,
        'commitMessageNegativeRegex' => null,
        'prohibitedFileNameRegex' => null,
        'authorEmailRegex' => null,
        'maxFileSize' => 'int32',
        'allowedMaxFileSize' => 'int32',
        'effectiveDate' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'binaryGateEnabled' => null,
        'privilegedUsers' => null,
        'allowedModifyBinary' => null,
        'allowedBinaryFileNameRegex' => null,
        'authorRegex' => null,
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'name' => null,
        'branchName' => null,
        'createdAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'skipRuleCheck' => null,
        'skipRuleEndDate' => null
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
    * id  **参数解释：** 主键ID。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * commitMessageRegex  **参数解释：** 提交信息匹配规则。
    * commitMessageNegativeRegex  **参数解释：** 提交信息负面匹配规则。
    * prohibitedFileNameRegex  **参数解释：** 禁止提交的文件名称。
    * authorEmailRegex  **参数解释：** 提交人邮箱地址。
    * maxFileSize  **参数解释：** 单文件大小限制（MB）。
    * allowedMaxFileSize  **参数解释：** 允许的最大单文件大小（MB）。
    * effectiveDate  **参数解释：** 规则生效时间。
    * binaryGateEnabled  **参数解释：** 是否禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。
    * privilegedUsers  **参数解释：** 特权用户（特权用户可直接推送所有二进制文件入库）。
    * allowedModifyBinary  **参数解释：** 是否允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。
    * allowedBinaryFileNameRegex  **参数解释：** 二进制文件白名单（可直接入库的文件）。
    * authorRegex  **参数解释：** 提交人。
    * updatedAt  **参数解释：** 更新时间。
    * name  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleCheck  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。
    * skipRuleEndDate  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19。 **约束限制：** 仅CR仓库支持此参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'repositoryId' => 'repository_id',
            'commitMessageRegex' => 'commit_message_regex',
            'commitMessageNegativeRegex' => 'commit_message_negative_regex',
            'prohibitedFileNameRegex' => 'prohibited_file_name_regex',
            'authorEmailRegex' => 'author_email_regex',
            'maxFileSize' => 'max_file_size',
            'allowedMaxFileSize' => 'allowed_max_file_size',
            'effectiveDate' => 'effective_date',
            'binaryGateEnabled' => 'binary_gate_enabled',
            'privilegedUsers' => 'privileged_users',
            'allowedModifyBinary' => 'allowed_modify_binary',
            'allowedBinaryFileNameRegex' => 'allowed_binary_file_name_regex',
            'authorRegex' => 'author_regex',
            'updatedAt' => 'updated_at',
            'name' => 'name',
            'branchName' => 'branch_name',
            'createdAt' => 'created_at',
            'skipRuleCheck' => 'skip_rule_check',
            'skipRuleEndDate' => 'skip_rule_end_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 主键ID。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * commitMessageRegex  **参数解释：** 提交信息匹配规则。
    * commitMessageNegativeRegex  **参数解释：** 提交信息负面匹配规则。
    * prohibitedFileNameRegex  **参数解释：** 禁止提交的文件名称。
    * authorEmailRegex  **参数解释：** 提交人邮箱地址。
    * maxFileSize  **参数解释：** 单文件大小限制（MB）。
    * allowedMaxFileSize  **参数解释：** 允许的最大单文件大小（MB）。
    * effectiveDate  **参数解释：** 规则生效时间。
    * binaryGateEnabled  **参数解释：** 是否禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。
    * privilegedUsers  **参数解释：** 特权用户（特权用户可直接推送所有二进制文件入库）。
    * allowedModifyBinary  **参数解释：** 是否允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。
    * allowedBinaryFileNameRegex  **参数解释：** 二进制文件白名单（可直接入库的文件）。
    * authorRegex  **参数解释：** 提交人。
    * updatedAt  **参数解释：** 更新时间。
    * name  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleCheck  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。
    * skipRuleEndDate  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19。 **约束限制：** 仅CR仓库支持此参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'repositoryId' => 'setRepositoryId',
            'commitMessageRegex' => 'setCommitMessageRegex',
            'commitMessageNegativeRegex' => 'setCommitMessageNegativeRegex',
            'prohibitedFileNameRegex' => 'setProhibitedFileNameRegex',
            'authorEmailRegex' => 'setAuthorEmailRegex',
            'maxFileSize' => 'setMaxFileSize',
            'allowedMaxFileSize' => 'setAllowedMaxFileSize',
            'effectiveDate' => 'setEffectiveDate',
            'binaryGateEnabled' => 'setBinaryGateEnabled',
            'privilegedUsers' => 'setPrivilegedUsers',
            'allowedModifyBinary' => 'setAllowedModifyBinary',
            'allowedBinaryFileNameRegex' => 'setAllowedBinaryFileNameRegex',
            'authorRegex' => 'setAuthorRegex',
            'updatedAt' => 'setUpdatedAt',
            'name' => 'setName',
            'branchName' => 'setBranchName',
            'createdAt' => 'setCreatedAt',
            'skipRuleCheck' => 'setSkipRuleCheck',
            'skipRuleEndDate' => 'setSkipRuleEndDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 主键ID。 **取值范围：** 不涉及。
    * repositoryId  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    * commitMessageRegex  **参数解释：** 提交信息匹配规则。
    * commitMessageNegativeRegex  **参数解释：** 提交信息负面匹配规则。
    * prohibitedFileNameRegex  **参数解释：** 禁止提交的文件名称。
    * authorEmailRegex  **参数解释：** 提交人邮箱地址。
    * maxFileSize  **参数解释：** 单文件大小限制（MB）。
    * allowedMaxFileSize  **参数解释：** 允许的最大单文件大小（MB）。
    * effectiveDate  **参数解释：** 规则生效时间。
    * binaryGateEnabled  **参数解释：** 是否禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。
    * privilegedUsers  **参数解释：** 特权用户（特权用户可直接推送所有二进制文件入库）。
    * allowedModifyBinary  **参数解释：** 是否允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。
    * allowedBinaryFileNameRegex  **参数解释：** 二进制文件白名单（可直接入库的文件）。
    * authorRegex  **参数解释：** 提交人。
    * updatedAt  **参数解释：** 更新时间。
    * name  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * createdAt  **参数解释：** 创建时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleCheck  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。
    * skipRuleEndDate  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19。 **约束限制：** 仅CR仓库支持此参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'repositoryId' => 'getRepositoryId',
            'commitMessageRegex' => 'getCommitMessageRegex',
            'commitMessageNegativeRegex' => 'getCommitMessageNegativeRegex',
            'prohibitedFileNameRegex' => 'getProhibitedFileNameRegex',
            'authorEmailRegex' => 'getAuthorEmailRegex',
            'maxFileSize' => 'getMaxFileSize',
            'allowedMaxFileSize' => 'getAllowedMaxFileSize',
            'effectiveDate' => 'getEffectiveDate',
            'binaryGateEnabled' => 'getBinaryGateEnabled',
            'privilegedUsers' => 'getPrivilegedUsers',
            'allowedModifyBinary' => 'getAllowedModifyBinary',
            'allowedBinaryFileNameRegex' => 'getAllowedBinaryFileNameRegex',
            'authorRegex' => 'getAuthorRegex',
            'updatedAt' => 'getUpdatedAt',
            'name' => 'getName',
            'branchName' => 'getBranchName',
            'createdAt' => 'getCreatedAt',
            'skipRuleCheck' => 'getSkipRuleCheck',
            'skipRuleEndDate' => 'getSkipRuleEndDate'
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['commitMessageRegex'] = isset($data['commitMessageRegex']) ? $data['commitMessageRegex'] : null;
        $this->container['commitMessageNegativeRegex'] = isset($data['commitMessageNegativeRegex']) ? $data['commitMessageNegativeRegex'] : null;
        $this->container['prohibitedFileNameRegex'] = isset($data['prohibitedFileNameRegex']) ? $data['prohibitedFileNameRegex'] : null;
        $this->container['authorEmailRegex'] = isset($data['authorEmailRegex']) ? $data['authorEmailRegex'] : null;
        $this->container['maxFileSize'] = isset($data['maxFileSize']) ? $data['maxFileSize'] : null;
        $this->container['allowedMaxFileSize'] = isset($data['allowedMaxFileSize']) ? $data['allowedMaxFileSize'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['binaryGateEnabled'] = isset($data['binaryGateEnabled']) ? $data['binaryGateEnabled'] : null;
        $this->container['privilegedUsers'] = isset($data['privilegedUsers']) ? $data['privilegedUsers'] : null;
        $this->container['allowedModifyBinary'] = isset($data['allowedModifyBinary']) ? $data['allowedModifyBinary'] : null;
        $this->container['allowedBinaryFileNameRegex'] = isset($data['allowedBinaryFileNameRegex']) ? $data['allowedBinaryFileNameRegex'] : null;
        $this->container['authorRegex'] = isset($data['authorRegex']) ? $data['authorRegex'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['skipRuleCheck'] = isset($data['skipRuleCheck']) ? $data['skipRuleCheck'] : null;
        $this->container['skipRuleEndDate'] = isset($data['skipRuleEndDate']) ? $data['skipRuleEndDate'] : null;
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
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitMessageRegex']) && (mb_strlen($this->container['commitMessageRegex']) > 255)) {
                $invalidProperties[] = "invalid value for 'commitMessageRegex', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['commitMessageRegex']) && (mb_strlen($this->container['commitMessageRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitMessageRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitMessageNegativeRegex']) && (mb_strlen($this->container['commitMessageNegativeRegex']) > 255)) {
                $invalidProperties[] = "invalid value for 'commitMessageNegativeRegex', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['commitMessageNegativeRegex']) && (mb_strlen($this->container['commitMessageNegativeRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitMessageNegativeRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['prohibitedFileNameRegex']) && (mb_strlen($this->container['prohibitedFileNameRegex']) > 2000)) {
                $invalidProperties[] = "invalid value for 'prohibitedFileNameRegex', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['prohibitedFileNameRegex']) && (mb_strlen($this->container['prohibitedFileNameRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'prohibitedFileNameRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorEmailRegex']) && (mb_strlen($this->container['authorEmailRegex']) > 255)) {
                $invalidProperties[] = "invalid value for 'authorEmailRegex', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['authorEmailRegex']) && (mb_strlen($this->container['authorEmailRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorEmailRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxFileSize']) && ($this->container['maxFileSize'] > 300)) {
                $invalidProperties[] = "invalid value for 'maxFileSize', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['maxFileSize']) && ($this->container['maxFileSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxFileSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['allowedMaxFileSize']) && ($this->container['allowedMaxFileSize'] > 300)) {
                $invalidProperties[] = "invalid value for 'allowedMaxFileSize', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['allowedMaxFileSize']) && ($this->container['allowedMaxFileSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'allowedMaxFileSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['allowedBinaryFileNameRegex']) && (mb_strlen($this->container['allowedBinaryFileNameRegex']) > 2000)) {
                $invalidProperties[] = "invalid value for 'allowedBinaryFileNameRegex', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['allowedBinaryFileNameRegex']) && (mb_strlen($this->container['allowedBinaryFileNameRegex']) < 0)) {
                $invalidProperties[] = "invalid value for 'allowedBinaryFileNameRegex', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['branchName']) && (mb_strlen($this->container['branchName']) > 255)) {
                $invalidProperties[] = "invalid value for 'branchName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['branchName']) && (mb_strlen($this->container['branchName']) < 1)) {
                $invalidProperties[] = "invalid value for 'branchName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['skipRuleEndDate']) && (mb_strlen($this->container['skipRuleEndDate']) > 255)) {
                $invalidProperties[] = "invalid value for 'skipRuleEndDate', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['skipRuleEndDate']) && (mb_strlen($this->container['skipRuleEndDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'skipRuleEndDate', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 主键ID。 **取值范围：** 不涉及。
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
    * @param int|null $id **参数解释：** 主键ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets repositoryId
    *  **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int|null $repositoryId **参数解释：** 仓库ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets commitMessageRegex
    *  **参数解释：** 提交信息匹配规则。
    *
    * @return string|null
    */
    public function getCommitMessageRegex()
    {
        return $this->container['commitMessageRegex'];
    }

    /**
    * Sets commitMessageRegex
    *
    * @param string|null $commitMessageRegex **参数解释：** 提交信息匹配规则。
    *
    * @return $this
    */
    public function setCommitMessageRegex($commitMessageRegex)
    {
        $this->container['commitMessageRegex'] = $commitMessageRegex;
        return $this;
    }

    /**
    * Gets commitMessageNegativeRegex
    *  **参数解释：** 提交信息负面匹配规则。
    *
    * @return string|null
    */
    public function getCommitMessageNegativeRegex()
    {
        return $this->container['commitMessageNegativeRegex'];
    }

    /**
    * Sets commitMessageNegativeRegex
    *
    * @param string|null $commitMessageNegativeRegex **参数解释：** 提交信息负面匹配规则。
    *
    * @return $this
    */
    public function setCommitMessageNegativeRegex($commitMessageNegativeRegex)
    {
        $this->container['commitMessageNegativeRegex'] = $commitMessageNegativeRegex;
        return $this;
    }

    /**
    * Gets prohibitedFileNameRegex
    *  **参数解释：** 禁止提交的文件名称。
    *
    * @return string|null
    */
    public function getProhibitedFileNameRegex()
    {
        return $this->container['prohibitedFileNameRegex'];
    }

    /**
    * Sets prohibitedFileNameRegex
    *
    * @param string|null $prohibitedFileNameRegex **参数解释：** 禁止提交的文件名称。
    *
    * @return $this
    */
    public function setProhibitedFileNameRegex($prohibitedFileNameRegex)
    {
        $this->container['prohibitedFileNameRegex'] = $prohibitedFileNameRegex;
        return $this;
    }

    /**
    * Gets authorEmailRegex
    *  **参数解释：** 提交人邮箱地址。
    *
    * @return string|null
    */
    public function getAuthorEmailRegex()
    {
        return $this->container['authorEmailRegex'];
    }

    /**
    * Sets authorEmailRegex
    *
    * @param string|null $authorEmailRegex **参数解释：** 提交人邮箱地址。
    *
    * @return $this
    */
    public function setAuthorEmailRegex($authorEmailRegex)
    {
        $this->container['authorEmailRegex'] = $authorEmailRegex;
        return $this;
    }

    /**
    * Gets maxFileSize
    *  **参数解释：** 单文件大小限制（MB）。
    *
    * @return int|null
    */
    public function getMaxFileSize()
    {
        return $this->container['maxFileSize'];
    }

    /**
    * Sets maxFileSize
    *
    * @param int|null $maxFileSize **参数解释：** 单文件大小限制（MB）。
    *
    * @return $this
    */
    public function setMaxFileSize($maxFileSize)
    {
        $this->container['maxFileSize'] = $maxFileSize;
        return $this;
    }

    /**
    * Gets allowedMaxFileSize
    *  **参数解释：** 允许的最大单文件大小（MB）。
    *
    * @return int|null
    */
    public function getAllowedMaxFileSize()
    {
        return $this->container['allowedMaxFileSize'];
    }

    /**
    * Sets allowedMaxFileSize
    *
    * @param int|null $allowedMaxFileSize **参数解释：** 允许的最大单文件大小（MB）。
    *
    * @return $this
    */
    public function setAllowedMaxFileSize($allowedMaxFileSize)
    {
        $this->container['allowedMaxFileSize'] = $allowedMaxFileSize;
        return $this;
    }

    /**
    * Gets effectiveDate
    *  **参数解释：** 规则生效时间。
    *
    * @return string|null
    */
    public function getEffectiveDate()
    {
        return $this->container['effectiveDate'];
    }

    /**
    * Sets effectiveDate
    *
    * @param string|null $effectiveDate **参数解释：** 规则生效时间。
    *
    * @return $this
    */
    public function setEffectiveDate($effectiveDate)
    {
        $this->container['effectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
    * Gets binaryGateEnabled
    *  **参数解释：** 是否禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。
    *
    * @return bool|null
    */
    public function getBinaryGateEnabled()
    {
        return $this->container['binaryGateEnabled'];
    }

    /**
    * Sets binaryGateEnabled
    *
    * @param bool|null $binaryGateEnabled **参数解释：** 是否禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。
    *
    * @return $this
    */
    public function setBinaryGateEnabled($binaryGateEnabled)
    {
        $this->container['binaryGateEnabled'] = $binaryGateEnabled;
        return $this;
    }

    /**
    * Gets privilegedUsers
    *  **参数解释：** 特权用户（特权用户可直接推送所有二进制文件入库）。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryUserBasicDto[]|null
    */
    public function getPrivilegedUsers()
    {
        return $this->container['privilegedUsers'];
    }

    /**
    * Sets privilegedUsers
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\RepositoryUserBasicDto[]|null $privilegedUsers **参数解释：** 特权用户（特权用户可直接推送所有二进制文件入库）。
    *
    * @return $this
    */
    public function setPrivilegedUsers($privilegedUsers)
    {
        $this->container['privilegedUsers'] = $privilegedUsers;
        return $this;
    }

    /**
    * Gets allowedModifyBinary
    *  **参数解释：** 是否允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。
    *
    * @return bool|null
    */
    public function getAllowedModifyBinary()
    {
        return $this->container['allowedModifyBinary'];
    }

    /**
    * Sets allowedModifyBinary
    *
    * @param bool|null $allowedModifyBinary **参数解释：** 是否允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。
    *
    * @return $this
    */
    public function setAllowedModifyBinary($allowedModifyBinary)
    {
        $this->container['allowedModifyBinary'] = $allowedModifyBinary;
        return $this;
    }

    /**
    * Gets allowedBinaryFileNameRegex
    *  **参数解释：** 二进制文件白名单（可直接入库的文件）。
    *
    * @return string|null
    */
    public function getAllowedBinaryFileNameRegex()
    {
        return $this->container['allowedBinaryFileNameRegex'];
    }

    /**
    * Sets allowedBinaryFileNameRegex
    *
    * @param string|null $allowedBinaryFileNameRegex **参数解释：** 二进制文件白名单（可直接入库的文件）。
    *
    * @return $this
    */
    public function setAllowedBinaryFileNameRegex($allowedBinaryFileNameRegex)
    {
        $this->container['allowedBinaryFileNameRegex'] = $allowedBinaryFileNameRegex;
        return $this;
    }

    /**
    * Gets authorRegex
    *  **参数解释：** 提交人。
    *
    * @return object|null
    */
    public function getAuthorRegex()
    {
        return $this->container['authorRegex'];
    }

    /**
    * Sets authorRegex
    *
    * @param object|null $authorRegex **参数解释：** 提交人。
    *
    * @return $this
    */
    public function setAuthorRegex($authorRegex)
    {
        $this->container['authorRegex'] = $authorRegex;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $name **参数解释：** 规则名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets branchName
    *  **参数解释：** 分支规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $branchName **参数解释：** 分支规则。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets skipRuleCheck
    *  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。
    *
    * @return bool|null
    */
    public function getSkipRuleCheck()
    {
        return $this->container['skipRuleCheck'];
    }

    /**
    * Sets skipRuleCheck
    *
    * @param bool|null $skipRuleCheck **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。
    *
    * @return $this
    */
    public function setSkipRuleCheck($skipRuleCheck)
    {
        $this->container['skipRuleCheck'] = $skipRuleCheck;
        return $this;
    }

    /**
    * Gets skipRuleEndDate
    *  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19。 **约束限制：** 仅CR仓库支持此参数。
    *
    * @return string|null
    */
    public function getSkipRuleEndDate()
    {
        return $this->container['skipRuleEndDate'];
    }

    /**
    * Sets skipRuleEndDate
    *
    * @param string|null $skipRuleEndDate **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19。 **约束限制：** 仅CR仓库支持此参数。
    *
    * @return $this
    */
    public function setSkipRuleEndDate($skipRuleEndDate)
    {
        $this->container['skipRuleEndDate'] = $skipRuleEndDate;
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

