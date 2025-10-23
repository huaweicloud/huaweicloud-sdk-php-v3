<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommitRuleCreateBodyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommitRuleCreateBodyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 规则名称。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支规则。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * commitMessageRegex  **参数解释：** 提交信息匹配规则。 所有提交消息都必须进行正则表达式匹配， 例如: \\d+\\..*。 若符合正则匹配，则允许提交。若此字段为空，则允许任何提交消息。 您也可以设置在提交信息中必须包含工作项单号，实现代码的E2E追溯。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * commitMessageNegativeRegex  **参数解释：** 提交信息负面匹配规则。 所有提交消息都必须进行正则表达式匹配，例如: \\d+\\..*。 符合正则匹配，则不允许提交。若此字段为空，则允许任何提交消息。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * authorRegex  **参数解释：** 提交人的正则表达式。 提交人必须进行正则表达式匹配， 例如: /([a-zA-Z]\\d){7}/。如果此字段为空，则允许任何提交人。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * authorEmailRegex  **参数解释：** 提交人邮箱地址的正则表达式。 所有提交者邮箱地址都必须进行正则表达式匹配， 例如: @my-company.com$。如果此字段为空，则允许任何提交邮箱地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * prohibitedFileNameRegex  **参数解释：** 禁止提交的文件名称的正则表达式。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * maxFileSize  **参数解释：** 单文件大小限制（MB）。 单文件大小超过上述规格的添加或更新推送将被拒绝，Repo建议的最佳上限值为50MB。 系统支持单文件提交的最大值为300MB。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 50
    * binaryGateEnabled  **参数解释：** 禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。 **默认取值：** 不涉及。
    * allowedModifyBinary  **参数解释：** 允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。 **默认取值：** 不涉及。
    * allowedBinaryFileNameRegex  **参数解释：** 二进制文件白名单（可直接入库的文件）。 所有被推送的二进制文件名必须进行正则表达式匹配， 例如: (\\.png|\\.xls|\\.xlsx|\\.docx|\\.doc)$ 。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * privilegedUserIds  **参数解释：** 特权用户ID列表（特权用户可直接推送所有二进制文件入库。 只有特权用户能推送二进制文件。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * effectiveDate  **参数解释：** 规则生效时间， 例如: 2025-8-19。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleCheck  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleEndDate  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19 10:00:00。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'branchName' => 'string',
            'commitMessageRegex' => 'string',
            'commitMessageNegativeRegex' => 'string',
            'authorRegex' => 'string',
            'authorEmailRegex' => 'string',
            'prohibitedFileNameRegex' => 'string',
            'maxFileSize' => 'int',
            'binaryGateEnabled' => 'bool',
            'allowedModifyBinary' => 'bool',
            'allowedBinaryFileNameRegex' => 'string',
            'privilegedUserIds' => 'int[]',
            'effectiveDate' => 'string',
            'skipRuleCheck' => 'bool',
            'skipRuleEndDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 规则名称。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支规则。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * commitMessageRegex  **参数解释：** 提交信息匹配规则。 所有提交消息都必须进行正则表达式匹配， 例如: \\d+\\..*。 若符合正则匹配，则允许提交。若此字段为空，则允许任何提交消息。 您也可以设置在提交信息中必须包含工作项单号，实现代码的E2E追溯。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * commitMessageNegativeRegex  **参数解释：** 提交信息负面匹配规则。 所有提交消息都必须进行正则表达式匹配，例如: \\d+\\..*。 符合正则匹配，则不允许提交。若此字段为空，则允许任何提交消息。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * authorRegex  **参数解释：** 提交人的正则表达式。 提交人必须进行正则表达式匹配， 例如: /([a-zA-Z]\\d){7}/。如果此字段为空，则允许任何提交人。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * authorEmailRegex  **参数解释：** 提交人邮箱地址的正则表达式。 所有提交者邮箱地址都必须进行正则表达式匹配， 例如: @my-company.com$。如果此字段为空，则允许任何提交邮箱地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * prohibitedFileNameRegex  **参数解释：** 禁止提交的文件名称的正则表达式。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * maxFileSize  **参数解释：** 单文件大小限制（MB）。 单文件大小超过上述规格的添加或更新推送将被拒绝，Repo建议的最佳上限值为50MB。 系统支持单文件提交的最大值为300MB。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 50
    * binaryGateEnabled  **参数解释：** 禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。 **默认取值：** 不涉及。
    * allowedModifyBinary  **参数解释：** 允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。 **默认取值：** 不涉及。
    * allowedBinaryFileNameRegex  **参数解释：** 二进制文件白名单（可直接入库的文件）。 所有被推送的二进制文件名必须进行正则表达式匹配， 例如: (\\.png|\\.xls|\\.xlsx|\\.docx|\\.doc)$ 。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * privilegedUserIds  **参数解释：** 特权用户ID列表（特权用户可直接推送所有二进制文件入库。 只有特权用户能推送二进制文件。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * effectiveDate  **参数解释：** 规则生效时间， 例如: 2025-8-19。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleCheck  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleEndDate  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19 10:00:00。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'branchName' => null,
        'commitMessageRegex' => null,
        'commitMessageNegativeRegex' => null,
        'authorRegex' => null,
        'authorEmailRegex' => null,
        'prohibitedFileNameRegex' => null,
        'maxFileSize' => 'int32',
        'binaryGateEnabled' => null,
        'allowedModifyBinary' => null,
        'allowedBinaryFileNameRegex' => null,
        'privilegedUserIds' => null,
        'effectiveDate' => null,
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
    * name  **参数解释：** 规则名称。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支规则。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * commitMessageRegex  **参数解释：** 提交信息匹配规则。 所有提交消息都必须进行正则表达式匹配， 例如: \\d+\\..*。 若符合正则匹配，则允许提交。若此字段为空，则允许任何提交消息。 您也可以设置在提交信息中必须包含工作项单号，实现代码的E2E追溯。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * commitMessageNegativeRegex  **参数解释：** 提交信息负面匹配规则。 所有提交消息都必须进行正则表达式匹配，例如: \\d+\\..*。 符合正则匹配，则不允许提交。若此字段为空，则允许任何提交消息。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * authorRegex  **参数解释：** 提交人的正则表达式。 提交人必须进行正则表达式匹配， 例如: /([a-zA-Z]\\d){7}/。如果此字段为空，则允许任何提交人。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * authorEmailRegex  **参数解释：** 提交人邮箱地址的正则表达式。 所有提交者邮箱地址都必须进行正则表达式匹配， 例如: @my-company.com$。如果此字段为空，则允许任何提交邮箱地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * prohibitedFileNameRegex  **参数解释：** 禁止提交的文件名称的正则表达式。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * maxFileSize  **参数解释：** 单文件大小限制（MB）。 单文件大小超过上述规格的添加或更新推送将被拒绝，Repo建议的最佳上限值为50MB。 系统支持单文件提交的最大值为300MB。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 50
    * binaryGateEnabled  **参数解释：** 禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。 **默认取值：** 不涉及。
    * allowedModifyBinary  **参数解释：** 允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。 **默认取值：** 不涉及。
    * allowedBinaryFileNameRegex  **参数解释：** 二进制文件白名单（可直接入库的文件）。 所有被推送的二进制文件名必须进行正则表达式匹配， 例如: (\\.png|\\.xls|\\.xlsx|\\.docx|\\.doc)$ 。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * privilegedUserIds  **参数解释：** 特权用户ID列表（特权用户可直接推送所有二进制文件入库。 只有特权用户能推送二进制文件。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * effectiveDate  **参数解释：** 规则生效时间， 例如: 2025-8-19。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleCheck  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleEndDate  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19 10:00:00。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'branchName' => 'branch_name',
            'commitMessageRegex' => 'commit_message_regex',
            'commitMessageNegativeRegex' => 'commit_message_negative_regex',
            'authorRegex' => 'author_regex',
            'authorEmailRegex' => 'author_email_regex',
            'prohibitedFileNameRegex' => 'prohibited_file_name_regex',
            'maxFileSize' => 'max_file_size',
            'binaryGateEnabled' => 'binary_gate_enabled',
            'allowedModifyBinary' => 'allowed_modify_binary',
            'allowedBinaryFileNameRegex' => 'allowed_binary_file_name_regex',
            'privilegedUserIds' => 'privileged_user_ids',
            'effectiveDate' => 'effective_date',
            'skipRuleCheck' => 'skip_rule_check',
            'skipRuleEndDate' => 'skip_rule_end_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 规则名称。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支规则。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * commitMessageRegex  **参数解释：** 提交信息匹配规则。 所有提交消息都必须进行正则表达式匹配， 例如: \\d+\\..*。 若符合正则匹配，则允许提交。若此字段为空，则允许任何提交消息。 您也可以设置在提交信息中必须包含工作项单号，实现代码的E2E追溯。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * commitMessageNegativeRegex  **参数解释：** 提交信息负面匹配规则。 所有提交消息都必须进行正则表达式匹配，例如: \\d+\\..*。 符合正则匹配，则不允许提交。若此字段为空，则允许任何提交消息。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * authorRegex  **参数解释：** 提交人的正则表达式。 提交人必须进行正则表达式匹配， 例如: /([a-zA-Z]\\d){7}/。如果此字段为空，则允许任何提交人。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * authorEmailRegex  **参数解释：** 提交人邮箱地址的正则表达式。 所有提交者邮箱地址都必须进行正则表达式匹配， 例如: @my-company.com$。如果此字段为空，则允许任何提交邮箱地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * prohibitedFileNameRegex  **参数解释：** 禁止提交的文件名称的正则表达式。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * maxFileSize  **参数解释：** 单文件大小限制（MB）。 单文件大小超过上述规格的添加或更新推送将被拒绝，Repo建议的最佳上限值为50MB。 系统支持单文件提交的最大值为300MB。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 50
    * binaryGateEnabled  **参数解释：** 禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。 **默认取值：** 不涉及。
    * allowedModifyBinary  **参数解释：** 允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。 **默认取值：** 不涉及。
    * allowedBinaryFileNameRegex  **参数解释：** 二进制文件白名单（可直接入库的文件）。 所有被推送的二进制文件名必须进行正则表达式匹配， 例如: (\\.png|\\.xls|\\.xlsx|\\.docx|\\.doc)$ 。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * privilegedUserIds  **参数解释：** 特权用户ID列表（特权用户可直接推送所有二进制文件入库。 只有特权用户能推送二进制文件。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * effectiveDate  **参数解释：** 规则生效时间， 例如: 2025-8-19。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleCheck  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleEndDate  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19 10:00:00。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'branchName' => 'setBranchName',
            'commitMessageRegex' => 'setCommitMessageRegex',
            'commitMessageNegativeRegex' => 'setCommitMessageNegativeRegex',
            'authorRegex' => 'setAuthorRegex',
            'authorEmailRegex' => 'setAuthorEmailRegex',
            'prohibitedFileNameRegex' => 'setProhibitedFileNameRegex',
            'maxFileSize' => 'setMaxFileSize',
            'binaryGateEnabled' => 'setBinaryGateEnabled',
            'allowedModifyBinary' => 'setAllowedModifyBinary',
            'allowedBinaryFileNameRegex' => 'setAllowedBinaryFileNameRegex',
            'privilegedUserIds' => 'setPrivilegedUserIds',
            'effectiveDate' => 'setEffectiveDate',
            'skipRuleCheck' => 'setSkipRuleCheck',
            'skipRuleEndDate' => 'setSkipRuleEndDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 规则名称。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * branchName  **参数解释：** 分支规则。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * commitMessageRegex  **参数解释：** 提交信息匹配规则。 所有提交消息都必须进行正则表达式匹配， 例如: \\d+\\..*。 若符合正则匹配，则允许提交。若此字段为空，则允许任何提交消息。 您也可以设置在提交信息中必须包含工作项单号，实现代码的E2E追溯。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * commitMessageNegativeRegex  **参数解释：** 提交信息负面匹配规则。 所有提交消息都必须进行正则表达式匹配，例如: \\d+\\..*。 符合正则匹配，则不允许提交。若此字段为空，则允许任何提交消息。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * authorRegex  **参数解释：** 提交人的正则表达式。 提交人必须进行正则表达式匹配， 例如: /([a-zA-Z]\\d){7}/。如果此字段为空，则允许任何提交人。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * authorEmailRegex  **参数解释：** 提交人邮箱地址的正则表达式。 所有提交者邮箱地址都必须进行正则表达式匹配， 例如: @my-company.com$。如果此字段为空，则允许任何提交邮箱地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * prohibitedFileNameRegex  **参数解释：** 禁止提交的文件名称的正则表达式。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * maxFileSize  **参数解释：** 单文件大小限制（MB）。 单文件大小超过上述规格的添加或更新推送将被拒绝，Repo建议的最佳上限值为50MB。 系统支持单文件提交的最大值为300MB。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 50
    * binaryGateEnabled  **参数解释：** 禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。 **默认取值：** 不涉及。
    * allowedModifyBinary  **参数解释：** 允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。 **默认取值：** 不涉及。
    * allowedBinaryFileNameRegex  **参数解释：** 二进制文件白名单（可直接入库的文件）。 所有被推送的二进制文件名必须进行正则表达式匹配， 例如: (\\.png|\\.xls|\\.xlsx|\\.docx|\\.doc)$ 。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * privilegedUserIds  **参数解释：** 特权用户ID列表（特权用户可直接推送所有二进制文件入库。 只有特权用户能推送二进制文件。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * effectiveDate  **参数解释：** 规则生效时间， 例如: 2025-8-19。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleCheck  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * skipRuleEndDate  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19 10:00:00。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'branchName' => 'getBranchName',
            'commitMessageRegex' => 'getCommitMessageRegex',
            'commitMessageNegativeRegex' => 'getCommitMessageNegativeRegex',
            'authorRegex' => 'getAuthorRegex',
            'authorEmailRegex' => 'getAuthorEmailRegex',
            'prohibitedFileNameRegex' => 'getProhibitedFileNameRegex',
            'maxFileSize' => 'getMaxFileSize',
            'binaryGateEnabled' => 'getBinaryGateEnabled',
            'allowedModifyBinary' => 'getAllowedModifyBinary',
            'allowedBinaryFileNameRegex' => 'getAllowedBinaryFileNameRegex',
            'privilegedUserIds' => 'getPrivilegedUserIds',
            'effectiveDate' => 'getEffectiveDate',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['branchName'] = isset($data['branchName']) ? $data['branchName'] : null;
        $this->container['commitMessageRegex'] = isset($data['commitMessageRegex']) ? $data['commitMessageRegex'] : null;
        $this->container['commitMessageNegativeRegex'] = isset($data['commitMessageNegativeRegex']) ? $data['commitMessageNegativeRegex'] : null;
        $this->container['authorRegex'] = isset($data['authorRegex']) ? $data['authorRegex'] : null;
        $this->container['authorEmailRegex'] = isset($data['authorEmailRegex']) ? $data['authorEmailRegex'] : null;
        $this->container['prohibitedFileNameRegex'] = isset($data['prohibitedFileNameRegex']) ? $data['prohibitedFileNameRegex'] : null;
        $this->container['maxFileSize'] = isset($data['maxFileSize']) ? $data['maxFileSize'] : null;
        $this->container['binaryGateEnabled'] = isset($data['binaryGateEnabled']) ? $data['binaryGateEnabled'] : null;
        $this->container['allowedModifyBinary'] = isset($data['allowedModifyBinary']) ? $data['allowedModifyBinary'] : null;
        $this->container['allowedBinaryFileNameRegex'] = isset($data['allowedBinaryFileNameRegex']) ? $data['allowedBinaryFileNameRegex'] : null;
        $this->container['privilegedUserIds'] = isset($data['privilegedUserIds']) ? $data['privilegedUserIds'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 200)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['branchName'] === null) {
            $invalidProperties[] = "'branchName' can't be null";
        }
            if ((mb_strlen($this->container['branchName']) > 500)) {
                $invalidProperties[] = "invalid value for 'branchName', the character length must be smaller than or equal to 500.";
            }
            if ((mb_strlen($this->container['branchName']) < 1)) {
                $invalidProperties[] = "invalid value for 'branchName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitMessageRegex']) && (mb_strlen($this->container['commitMessageRegex']) > 500)) {
                $invalidProperties[] = "invalid value for 'commitMessageRegex', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['commitMessageRegex']) && (mb_strlen($this->container['commitMessageRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitMessageRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitMessageNegativeRegex']) && (mb_strlen($this->container['commitMessageNegativeRegex']) > 500)) {
                $invalidProperties[] = "invalid value for 'commitMessageNegativeRegex', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['commitMessageNegativeRegex']) && (mb_strlen($this->container['commitMessageNegativeRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitMessageNegativeRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorRegex']) && (mb_strlen($this->container['authorRegex']) > 200)) {
                $invalidProperties[] = "invalid value for 'authorRegex', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['authorRegex']) && (mb_strlen($this->container['authorRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authorEmailRegex']) && (mb_strlen($this->container['authorEmailRegex']) > 200)) {
                $invalidProperties[] = "invalid value for 'authorEmailRegex', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['authorEmailRegex']) && (mb_strlen($this->container['authorEmailRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorEmailRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['prohibitedFileNameRegex']) && (mb_strlen($this->container['prohibitedFileNameRegex']) > 2000)) {
                $invalidProperties[] = "invalid value for 'prohibitedFileNameRegex', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['prohibitedFileNameRegex']) && (mb_strlen($this->container['prohibitedFileNameRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'prohibitedFileNameRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxFileSize']) && ($this->container['maxFileSize'] > 300)) {
                $invalidProperties[] = "invalid value for 'maxFileSize', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['maxFileSize']) && ($this->container['maxFileSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxFileSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['allowedBinaryFileNameRegex']) && (mb_strlen($this->container['allowedBinaryFileNameRegex']) > 2000)) {
                $invalidProperties[] = "invalid value for 'allowedBinaryFileNameRegex', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['allowedBinaryFileNameRegex']) && (mb_strlen($this->container['allowedBinaryFileNameRegex']) < 1)) {
                $invalidProperties[] = "invalid value for 'allowedBinaryFileNameRegex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['effectiveDate']) && (mb_strlen($this->container['effectiveDate']) > 255)) {
                $invalidProperties[] = "invalid value for 'effectiveDate', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['effectiveDate']) && (mb_strlen($this->container['effectiveDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'effectiveDate', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  **参数解释：** 规则名称。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释：** 规则名称。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 分支规则。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string $branchName **参数解释：** 分支规则。 **约束限制：** 必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setBranchName($branchName)
    {
        $this->container['branchName'] = $branchName;
        return $this;
    }

    /**
    * Gets commitMessageRegex
    *  **参数解释：** 提交信息匹配规则。 所有提交消息都必须进行正则表达式匹配， 例如: \\d+\\..*。 若符合正则匹配，则允许提交。若此字段为空，则允许任何提交消息。 您也可以设置在提交信息中必须包含工作项单号，实现代码的E2E追溯。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $commitMessageRegex **参数解释：** 提交信息匹配规则。 所有提交消息都必须进行正则表达式匹配， 例如: \\d+\\..*。 若符合正则匹配，则允许提交。若此字段为空，则允许任何提交消息。 您也可以设置在提交信息中必须包含工作项单号，实现代码的E2E追溯。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 提交信息负面匹配规则。 所有提交消息都必须进行正则表达式匹配，例如: \\d+\\..*。 符合正则匹配，则不允许提交。若此字段为空，则允许任何提交消息。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $commitMessageNegativeRegex **参数解释：** 提交信息负面匹配规则。 所有提交消息都必须进行正则表达式匹配，例如: \\d+\\..*。 符合正则匹配，则不允许提交。若此字段为空，则允许任何提交消息。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCommitMessageNegativeRegex($commitMessageNegativeRegex)
    {
        $this->container['commitMessageNegativeRegex'] = $commitMessageNegativeRegex;
        return $this;
    }

    /**
    * Gets authorRegex
    *  **参数解释：** 提交人的正则表达式。 提交人必须进行正则表达式匹配， 例如: /([a-zA-Z]\\d){7}/。如果此字段为空，则允许任何提交人。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getAuthorRegex()
    {
        return $this->container['authorRegex'];
    }

    /**
    * Sets authorRegex
    *
    * @param string|null $authorRegex **参数解释：** 提交人的正则表达式。 提交人必须进行正则表达式匹配， 例如: /([a-zA-Z]\\d){7}/。如果此字段为空，则允许任何提交人。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAuthorRegex($authorRegex)
    {
        $this->container['authorRegex'] = $authorRegex;
        return $this;
    }

    /**
    * Gets authorEmailRegex
    *  **参数解释：** 提交人邮箱地址的正则表达式。 所有提交者邮箱地址都必须进行正则表达式匹配， 例如: @my-company.com$。如果此字段为空，则允许任何提交邮箱地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $authorEmailRegex **参数解释：** 提交人邮箱地址的正则表达式。 所有提交者邮箱地址都必须进行正则表达式匹配， 例如: @my-company.com$。如果此字段为空，则允许任何提交邮箱地址。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAuthorEmailRegex($authorEmailRegex)
    {
        $this->container['authorEmailRegex'] = $authorEmailRegex;
        return $this;
    }

    /**
    * Gets prohibitedFileNameRegex
    *  **参数解释：** 禁止提交的文件名称的正则表达式。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $prohibitedFileNameRegex **参数解释：** 禁止提交的文件名称的正则表达式。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setProhibitedFileNameRegex($prohibitedFileNameRegex)
    {
        $this->container['prohibitedFileNameRegex'] = $prohibitedFileNameRegex;
        return $this;
    }

    /**
    * Gets maxFileSize
    *  **参数解释：** 单文件大小限制（MB）。 单文件大小超过上述规格的添加或更新推送将被拒绝，Repo建议的最佳上限值为50MB。 系统支持单文件提交的最大值为300MB。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 50
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
    * @param int|null $maxFileSize **参数解释：** 单文件大小限制（MB）。 单文件大小超过上述规格的添加或更新推送将被拒绝，Repo建议的最佳上限值为50MB。 系统支持单文件提交的最大值为300MB。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 50
    *
    * @return $this
    */
    public function setMaxFileSize($maxFileSize)
    {
        $this->container['maxFileSize'] = $maxFileSize;
        return $this;
    }

    /**
    * Gets binaryGateEnabled
    *  **参数解释：** 禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。 **默认取值：** 不涉及。
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
    * @param bool|null $binaryGateEnabled **参数解释：** 禁止新增二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，禁止新增二进制文件。 - false，允许新增二进制文件。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setBinaryGateEnabled($binaryGateEnabled)
    {
        $this->container['binaryGateEnabled'] = $binaryGateEnabled;
        return $this;
    }

    /**
    * Gets allowedModifyBinary
    *  **参数解释：** 允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。 **默认取值：** 不涉及。
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
    * @param bool|null $allowedModifyBinary **参数解释：** 允许修改二进制文件（对特权用户无效）。 **约束限制：** 不涉及。 **取值范围：** - true，允许修改二进制文件。 - false，禁止修改二进制文件。 **默认取值：** 不涉及。
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
    *  **参数解释：** 二进制文件白名单（可直接入库的文件）。 所有被推送的二进制文件名必须进行正则表达式匹配， 例如: (\\.png|\\.xls|\\.xlsx|\\.docx|\\.doc)$ 。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $allowedBinaryFileNameRegex **参数解释：** 二进制文件白名单（可直接入库的文件）。 所有被推送的二进制文件名必须进行正则表达式匹配， 例如: (\\.png|\\.xls|\\.xlsx|\\.docx|\\.doc)$ 。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAllowedBinaryFileNameRegex($allowedBinaryFileNameRegex)
    {
        $this->container['allowedBinaryFileNameRegex'] = $allowedBinaryFileNameRegex;
        return $this;
    }

    /**
    * Gets privilegedUserIds
    *  **参数解释：** 特权用户ID列表（特权用户可直接推送所有二进制文件入库。 只有特权用户能推送二进制文件。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return int[]|null
    */
    public function getPrivilegedUserIds()
    {
        return $this->container['privilegedUserIds'];
    }

    /**
    * Sets privilegedUserIds
    *
    * @param int[]|null $privilegedUserIds **参数解释：** 特权用户ID列表（特权用户可直接推送所有二进制文件入库。 只有特权用户能推送二进制文件。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPrivilegedUserIds($privilegedUserIds)
    {
        $this->container['privilegedUserIds'] = $privilegedUserIds;
        return $this;
    }

    /**
    * Gets effectiveDate
    *  **参数解释：** 规则生效时间， 例如: 2025-8-19。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $effectiveDate **参数解释：** 规则生效时间， 例如: 2025-8-19。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setEffectiveDate($effectiveDate)
    {
        $this->container['effectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
    * Gets skipRuleCheck
    *  **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param bool|null $skipRuleCheck **参数解释：** 跳过规则检测。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19 10:00:00。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $skipRuleEndDate **参数解释：** 跳过规则检测失效时间， 例如: 2025-8-19 10:00:00。 **约束限制：** 仅CR仓库支持此参数。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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

