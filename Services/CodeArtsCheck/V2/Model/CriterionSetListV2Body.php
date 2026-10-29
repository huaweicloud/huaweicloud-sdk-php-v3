<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CriterionSetListV2Body implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CriterionSetListV2Body';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 规则集ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 规则集中文名称。 **取值范围：** 任意中英文字符，数字，点，连字符和下划线组成的字符串，长度为[1~128]个字符。
    * comments  **参数解释：** 规则集中文描述。 **取值范围：** 不涉及。
    * type  **参数解释：** 规则集类型。 **取值范围：** - system：系统规则集。 - custom：自定义规则集。
    * creator  **参数解释：** 规则集创建者。 **取值范围：** 用户名。
    * createTime  **参数解释：** 规则集创建时间。 **取值范围：** 0时区标准时间。
    * lastReviser  **参数解释：** 规则集最近一次更新的操作人。 **取值范围：** 用户名。
    * lastUpdateTime  **参数解释：** 规则集最近一次更新的时间。 **取值范围：** 0时区标准时间。
    * language  **参数解释：** 规则集语言。 **取值范围：** - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * parentId  **参数解释：** 父规则集ID。 **取值范围：** 32位UUID组成的字符串。多个ID之间用逗号分隔。
    * numCriterion  **参数解释：** 规则集中已启用的规则数量。 **取值范围：** ≥0
    * canEdit  **参数解释：** 当前用户是否具有修改该规则集的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canDelete  **参数解释：** 当前用户是否具有删除该规则集的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * managers  **参数解释：** 规则集管理员。 **取值范围：** 用户ID。多个ID用逗号分隔。
    * parentSetNames  **参数解释：** 父规则集的名称。 **取值范围：** 多个规则集名称之间用逗号分隔。
    * domainId  **参数解释：** 租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 32位UUID。
    * inheritMode  **参数解释：** 规则集创建时候的继承类型。 **取值范围：** - strong：规则集创建的时候来源于继承。 - null：规则集创建的时候来源于非继承。
    * creatorId  **参数解释：** 创建者用户ID。 **取值范围：** 32位UUID。
    * isSystemDefault  **参数解释：** 是否为系统默认规则集。 **取值范围：** - 0：否。 - 1：是。
    * isProjectDefault  **参数解释：** 是否为项目默认规则集。 **取值范围：** - 0：否。 - 1：是。
    * isSystemSet  **参数解释：** 是否为系统规则集。 **取值范围：** - 0：否。 - 1：是。
    * ruleIds  **参数解释：** 规则集中已启用的能力规则unique_id。 **取值范围：** unique_id为32位UUID。多个unique_id之间用逗号分隔。
    * region  **参数解释：** 规则集所在局点。 **取值范围：** 不涉及。
    * canSetDefault  **参数解释：** 是否具有设置默认规则集的权限。 **取值范围：** - true：有权限。 - false：没有权限。
    * isUsed  **参数解释：** 规则集是否被使用。 **取值范围：** - true：规则集被使用。 - false：规则集未被使用。
    * childSets  **参数解释：** 子规则集。 **取值范围：** 不涉及。
    * isReliable  **参数解释：** 是否为可信规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    * isRecommand  **参数解释：** 是否为推荐规则集。该字段已弃用。 **取值范围：** - 1：是。 - 0：否。
    * isDefault  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    * defaultSet  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - \"true\"：是。 - \"false\"：否。
    * deptId  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * deptName  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * reliableTag  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * recommandType  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'comments' => 'string',
            'type' => 'string',
            'creator' => 'string',
            'createTime' => 'string',
            'lastReviser' => 'string',
            'lastUpdateTime' => 'string',
            'language' => 'string',
            'parentId' => 'string',
            'numCriterion' => 'int',
            'canEdit' => 'bool',
            'canDelete' => 'bool',
            'managers' => 'string',
            'parentSetNames' => 'string',
            'domainId' => 'string',
            'inheritMode' => 'string',
            'creatorId' => 'string',
            'isSystemDefault' => 'string',
            'isProjectDefault' => 'string',
            'isSystemSet' => 'string',
            'ruleIds' => 'string',
            'region' => 'string',
            'canSetDefault' => 'bool',
            'isUsed' => 'bool',
            'childSets' => 'string[]',
            'isReliable' => 'bool',
            'isRecommand' => 'string',
            'isDefault' => 'bool',
            'defaultSet' => 'string',
            'deptId' => 'string',
            'deptName' => 'string',
            'reliableTag' => 'string',
            'recommandType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 规则集ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 规则集中文名称。 **取值范围：** 任意中英文字符，数字，点，连字符和下划线组成的字符串，长度为[1~128]个字符。
    * comments  **参数解释：** 规则集中文描述。 **取值范围：** 不涉及。
    * type  **参数解释：** 规则集类型。 **取值范围：** - system：系统规则集。 - custom：自定义规则集。
    * creator  **参数解释：** 规则集创建者。 **取值范围：** 用户名。
    * createTime  **参数解释：** 规则集创建时间。 **取值范围：** 0时区标准时间。
    * lastReviser  **参数解释：** 规则集最近一次更新的操作人。 **取值范围：** 用户名。
    * lastUpdateTime  **参数解释：** 规则集最近一次更新的时间。 **取值范围：** 0时区标准时间。
    * language  **参数解释：** 规则集语言。 **取值范围：** - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * parentId  **参数解释：** 父规则集ID。 **取值范围：** 32位UUID组成的字符串。多个ID之间用逗号分隔。
    * numCriterion  **参数解释：** 规则集中已启用的规则数量。 **取值范围：** ≥0
    * canEdit  **参数解释：** 当前用户是否具有修改该规则集的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canDelete  **参数解释：** 当前用户是否具有删除该规则集的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * managers  **参数解释：** 规则集管理员。 **取值范围：** 用户ID。多个ID用逗号分隔。
    * parentSetNames  **参数解释：** 父规则集的名称。 **取值范围：** 多个规则集名称之间用逗号分隔。
    * domainId  **参数解释：** 租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 32位UUID。
    * inheritMode  **参数解释：** 规则集创建时候的继承类型。 **取值范围：** - strong：规则集创建的时候来源于继承。 - null：规则集创建的时候来源于非继承。
    * creatorId  **参数解释：** 创建者用户ID。 **取值范围：** 32位UUID。
    * isSystemDefault  **参数解释：** 是否为系统默认规则集。 **取值范围：** - 0：否。 - 1：是。
    * isProjectDefault  **参数解释：** 是否为项目默认规则集。 **取值范围：** - 0：否。 - 1：是。
    * isSystemSet  **参数解释：** 是否为系统规则集。 **取值范围：** - 0：否。 - 1：是。
    * ruleIds  **参数解释：** 规则集中已启用的能力规则unique_id。 **取值范围：** unique_id为32位UUID。多个unique_id之间用逗号分隔。
    * region  **参数解释：** 规则集所在局点。 **取值范围：** 不涉及。
    * canSetDefault  **参数解释：** 是否具有设置默认规则集的权限。 **取值范围：** - true：有权限。 - false：没有权限。
    * isUsed  **参数解释：** 规则集是否被使用。 **取值范围：** - true：规则集被使用。 - false：规则集未被使用。
    * childSets  **参数解释：** 子规则集。 **取值范围：** 不涉及。
    * isReliable  **参数解释：** 是否为可信规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    * isRecommand  **参数解释：** 是否为推荐规则集。该字段已弃用。 **取值范围：** - 1：是。 - 0：否。
    * isDefault  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    * defaultSet  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - \"true\"：是。 - \"false\"：否。
    * deptId  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * deptName  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * reliableTag  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * recommandType  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'comments' => null,
        'type' => null,
        'creator' => null,
        'createTime' => null,
        'lastReviser' => null,
        'lastUpdateTime' => null,
        'language' => null,
        'parentId' => null,
        'numCriterion' => null,
        'canEdit' => null,
        'canDelete' => null,
        'managers' => null,
        'parentSetNames' => null,
        'domainId' => null,
        'inheritMode' => null,
        'creatorId' => null,
        'isSystemDefault' => null,
        'isProjectDefault' => null,
        'isSystemSet' => null,
        'ruleIds' => null,
        'region' => null,
        'canSetDefault' => null,
        'isUsed' => null,
        'childSets' => null,
        'isReliable' => null,
        'isRecommand' => null,
        'isDefault' => null,
        'defaultSet' => null,
        'deptId' => null,
        'deptName' => null,
        'reliableTag' => null,
        'recommandType' => null
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
    * id  **参数解释：** 规则集ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 规则集中文名称。 **取值范围：** 任意中英文字符，数字，点，连字符和下划线组成的字符串，长度为[1~128]个字符。
    * comments  **参数解释：** 规则集中文描述。 **取值范围：** 不涉及。
    * type  **参数解释：** 规则集类型。 **取值范围：** - system：系统规则集。 - custom：自定义规则集。
    * creator  **参数解释：** 规则集创建者。 **取值范围：** 用户名。
    * createTime  **参数解释：** 规则集创建时间。 **取值范围：** 0时区标准时间。
    * lastReviser  **参数解释：** 规则集最近一次更新的操作人。 **取值范围：** 用户名。
    * lastUpdateTime  **参数解释：** 规则集最近一次更新的时间。 **取值范围：** 0时区标准时间。
    * language  **参数解释：** 规则集语言。 **取值范围：** - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * parentId  **参数解释：** 父规则集ID。 **取值范围：** 32位UUID组成的字符串。多个ID之间用逗号分隔。
    * numCriterion  **参数解释：** 规则集中已启用的规则数量。 **取值范围：** ≥0
    * canEdit  **参数解释：** 当前用户是否具有修改该规则集的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canDelete  **参数解释：** 当前用户是否具有删除该规则集的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * managers  **参数解释：** 规则集管理员。 **取值范围：** 用户ID。多个ID用逗号分隔。
    * parentSetNames  **参数解释：** 父规则集的名称。 **取值范围：** 多个规则集名称之间用逗号分隔。
    * domainId  **参数解释：** 租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 32位UUID。
    * inheritMode  **参数解释：** 规则集创建时候的继承类型。 **取值范围：** - strong：规则集创建的时候来源于继承。 - null：规则集创建的时候来源于非继承。
    * creatorId  **参数解释：** 创建者用户ID。 **取值范围：** 32位UUID。
    * isSystemDefault  **参数解释：** 是否为系统默认规则集。 **取值范围：** - 0：否。 - 1：是。
    * isProjectDefault  **参数解释：** 是否为项目默认规则集。 **取值范围：** - 0：否。 - 1：是。
    * isSystemSet  **参数解释：** 是否为系统规则集。 **取值范围：** - 0：否。 - 1：是。
    * ruleIds  **参数解释：** 规则集中已启用的能力规则unique_id。 **取值范围：** unique_id为32位UUID。多个unique_id之间用逗号分隔。
    * region  **参数解释：** 规则集所在局点。 **取值范围：** 不涉及。
    * canSetDefault  **参数解释：** 是否具有设置默认规则集的权限。 **取值范围：** - true：有权限。 - false：没有权限。
    * isUsed  **参数解释：** 规则集是否被使用。 **取值范围：** - true：规则集被使用。 - false：规则集未被使用。
    * childSets  **参数解释：** 子规则集。 **取值范围：** 不涉及。
    * isReliable  **参数解释：** 是否为可信规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    * isRecommand  **参数解释：** 是否为推荐规则集。该字段已弃用。 **取值范围：** - 1：是。 - 0：否。
    * isDefault  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    * defaultSet  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - \"true\"：是。 - \"false\"：否。
    * deptId  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * deptName  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * reliableTag  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * recommandType  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'comments' => 'comments',
            'type' => 'type',
            'creator' => 'creator',
            'createTime' => 'createTime',
            'lastReviser' => 'lastReviser',
            'lastUpdateTime' => 'lastUpdateTime',
            'language' => 'language',
            'parentId' => 'parentId',
            'numCriterion' => 'numCriterion',
            'canEdit' => 'canEdit',
            'canDelete' => 'canDelete',
            'managers' => 'managers',
            'parentSetNames' => 'parentSetNames',
            'domainId' => 'domainId',
            'inheritMode' => 'inheritMode',
            'creatorId' => 'creatorId',
            'isSystemDefault' => 'isSystemDefault',
            'isProjectDefault' => 'isProjectDefault',
            'isSystemSet' => 'isSystemSet',
            'ruleIds' => 'ruleIds',
            'region' => 'region',
            'canSetDefault' => 'canSetDefault',
            'isUsed' => 'isUsed',
            'childSets' => 'childSets',
            'isReliable' => 'isReliable',
            'isRecommand' => 'isRecommand',
            'isDefault' => 'isDefault',
            'defaultSet' => 'defaultSet',
            'deptId' => 'deptId',
            'deptName' => 'deptName',
            'reliableTag' => 'reliableTag',
            'recommandType' => 'recommandType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 规则集ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 规则集中文名称。 **取值范围：** 任意中英文字符，数字，点，连字符和下划线组成的字符串，长度为[1~128]个字符。
    * comments  **参数解释：** 规则集中文描述。 **取值范围：** 不涉及。
    * type  **参数解释：** 规则集类型。 **取值范围：** - system：系统规则集。 - custom：自定义规则集。
    * creator  **参数解释：** 规则集创建者。 **取值范围：** 用户名。
    * createTime  **参数解释：** 规则集创建时间。 **取值范围：** 0时区标准时间。
    * lastReviser  **参数解释：** 规则集最近一次更新的操作人。 **取值范围：** 用户名。
    * lastUpdateTime  **参数解释：** 规则集最近一次更新的时间。 **取值范围：** 0时区标准时间。
    * language  **参数解释：** 规则集语言。 **取值范围：** - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * parentId  **参数解释：** 父规则集ID。 **取值范围：** 32位UUID组成的字符串。多个ID之间用逗号分隔。
    * numCriterion  **参数解释：** 规则集中已启用的规则数量。 **取值范围：** ≥0
    * canEdit  **参数解释：** 当前用户是否具有修改该规则集的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canDelete  **参数解释：** 当前用户是否具有删除该规则集的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * managers  **参数解释：** 规则集管理员。 **取值范围：** 用户ID。多个ID用逗号分隔。
    * parentSetNames  **参数解释：** 父规则集的名称。 **取值范围：** 多个规则集名称之间用逗号分隔。
    * domainId  **参数解释：** 租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 32位UUID。
    * inheritMode  **参数解释：** 规则集创建时候的继承类型。 **取值范围：** - strong：规则集创建的时候来源于继承。 - null：规则集创建的时候来源于非继承。
    * creatorId  **参数解释：** 创建者用户ID。 **取值范围：** 32位UUID。
    * isSystemDefault  **参数解释：** 是否为系统默认规则集。 **取值范围：** - 0：否。 - 1：是。
    * isProjectDefault  **参数解释：** 是否为项目默认规则集。 **取值范围：** - 0：否。 - 1：是。
    * isSystemSet  **参数解释：** 是否为系统规则集。 **取值范围：** - 0：否。 - 1：是。
    * ruleIds  **参数解释：** 规则集中已启用的能力规则unique_id。 **取值范围：** unique_id为32位UUID。多个unique_id之间用逗号分隔。
    * region  **参数解释：** 规则集所在局点。 **取值范围：** 不涉及。
    * canSetDefault  **参数解释：** 是否具有设置默认规则集的权限。 **取值范围：** - true：有权限。 - false：没有权限。
    * isUsed  **参数解释：** 规则集是否被使用。 **取值范围：** - true：规则集被使用。 - false：规则集未被使用。
    * childSets  **参数解释：** 子规则集。 **取值范围：** 不涉及。
    * isReliable  **参数解释：** 是否为可信规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    * isRecommand  **参数解释：** 是否为推荐规则集。该字段已弃用。 **取值范围：** - 1：是。 - 0：否。
    * isDefault  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    * defaultSet  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - \"true\"：是。 - \"false\"：否。
    * deptId  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * deptName  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * reliableTag  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * recommandType  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'comments' => 'setComments',
            'type' => 'setType',
            'creator' => 'setCreator',
            'createTime' => 'setCreateTime',
            'lastReviser' => 'setLastReviser',
            'lastUpdateTime' => 'setLastUpdateTime',
            'language' => 'setLanguage',
            'parentId' => 'setParentId',
            'numCriterion' => 'setNumCriterion',
            'canEdit' => 'setCanEdit',
            'canDelete' => 'setCanDelete',
            'managers' => 'setManagers',
            'parentSetNames' => 'setParentSetNames',
            'domainId' => 'setDomainId',
            'inheritMode' => 'setInheritMode',
            'creatorId' => 'setCreatorId',
            'isSystemDefault' => 'setIsSystemDefault',
            'isProjectDefault' => 'setIsProjectDefault',
            'isSystemSet' => 'setIsSystemSet',
            'ruleIds' => 'setRuleIds',
            'region' => 'setRegion',
            'canSetDefault' => 'setCanSetDefault',
            'isUsed' => 'setIsUsed',
            'childSets' => 'setChildSets',
            'isReliable' => 'setIsReliable',
            'isRecommand' => 'setIsRecommand',
            'isDefault' => 'setIsDefault',
            'defaultSet' => 'setDefaultSet',
            'deptId' => 'setDeptId',
            'deptName' => 'setDeptName',
            'reliableTag' => 'setReliableTag',
            'recommandType' => 'setRecommandType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 规则集ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 规则集中文名称。 **取值范围：** 任意中英文字符，数字，点，连字符和下划线组成的字符串，长度为[1~128]个字符。
    * comments  **参数解释：** 规则集中文描述。 **取值范围：** 不涉及。
    * type  **参数解释：** 规则集类型。 **取值范围：** - system：系统规则集。 - custom：自定义规则集。
    * creator  **参数解释：** 规则集创建者。 **取值范围：** 用户名。
    * createTime  **参数解释：** 规则集创建时间。 **取值范围：** 0时区标准时间。
    * lastReviser  **参数解释：** 规则集最近一次更新的操作人。 **取值范围：** 用户名。
    * lastUpdateTime  **参数解释：** 规则集最近一次更新的时间。 **取值范围：** 0时区标准时间。
    * language  **参数解释：** 规则集语言。 **取值范围：** - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    * parentId  **参数解释：** 父规则集ID。 **取值范围：** 32位UUID组成的字符串。多个ID之间用逗号分隔。
    * numCriterion  **参数解释：** 规则集中已启用的规则数量。 **取值范围：** ≥0
    * canEdit  **参数解释：** 当前用户是否具有修改该规则集的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    * canDelete  **参数解释：** 当前用户是否具有删除该规则集的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    * managers  **参数解释：** 规则集管理员。 **取值范围：** 用户ID。多个ID用逗号分隔。
    * parentSetNames  **参数解释：** 父规则集的名称。 **取值范围：** 多个规则集名称之间用逗号分隔。
    * domainId  **参数解释：** 租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 32位UUID。
    * inheritMode  **参数解释：** 规则集创建时候的继承类型。 **取值范围：** - strong：规则集创建的时候来源于继承。 - null：规则集创建的时候来源于非继承。
    * creatorId  **参数解释：** 创建者用户ID。 **取值范围：** 32位UUID。
    * isSystemDefault  **参数解释：** 是否为系统默认规则集。 **取值范围：** - 0：否。 - 1：是。
    * isProjectDefault  **参数解释：** 是否为项目默认规则集。 **取值范围：** - 0：否。 - 1：是。
    * isSystemSet  **参数解释：** 是否为系统规则集。 **取值范围：** - 0：否。 - 1：是。
    * ruleIds  **参数解释：** 规则集中已启用的能力规则unique_id。 **取值范围：** unique_id为32位UUID。多个unique_id之间用逗号分隔。
    * region  **参数解释：** 规则集所在局点。 **取值范围：** 不涉及。
    * canSetDefault  **参数解释：** 是否具有设置默认规则集的权限。 **取值范围：** - true：有权限。 - false：没有权限。
    * isUsed  **参数解释：** 规则集是否被使用。 **取值范围：** - true：规则集被使用。 - false：规则集未被使用。
    * childSets  **参数解释：** 子规则集。 **取值范围：** 不涉及。
    * isReliable  **参数解释：** 是否为可信规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    * isRecommand  **参数解释：** 是否为推荐规则集。该字段已弃用。 **取值范围：** - 1：是。 - 0：否。
    * isDefault  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    * defaultSet  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - \"true\"：是。 - \"false\"：否。
    * deptId  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * deptName  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * reliableTag  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    * recommandType  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'comments' => 'getComments',
            'type' => 'getType',
            'creator' => 'getCreator',
            'createTime' => 'getCreateTime',
            'lastReviser' => 'getLastReviser',
            'lastUpdateTime' => 'getLastUpdateTime',
            'language' => 'getLanguage',
            'parentId' => 'getParentId',
            'numCriterion' => 'getNumCriterion',
            'canEdit' => 'getCanEdit',
            'canDelete' => 'getCanDelete',
            'managers' => 'getManagers',
            'parentSetNames' => 'getParentSetNames',
            'domainId' => 'getDomainId',
            'inheritMode' => 'getInheritMode',
            'creatorId' => 'getCreatorId',
            'isSystemDefault' => 'getIsSystemDefault',
            'isProjectDefault' => 'getIsProjectDefault',
            'isSystemSet' => 'getIsSystemSet',
            'ruleIds' => 'getRuleIds',
            'region' => 'getRegion',
            'canSetDefault' => 'getCanSetDefault',
            'isUsed' => 'getIsUsed',
            'childSets' => 'getChildSets',
            'isReliable' => 'getIsReliable',
            'isRecommand' => 'getIsRecommand',
            'isDefault' => 'getIsDefault',
            'defaultSet' => 'getDefaultSet',
            'deptId' => 'getDeptId',
            'deptName' => 'getDeptName',
            'reliableTag' => 'getReliableTag',
            'recommandType' => 'getRecommandType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastReviser'] = isset($data['lastReviser']) ? $data['lastReviser'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['numCriterion'] = isset($data['numCriterion']) ? $data['numCriterion'] : null;
        $this->container['canEdit'] = isset($data['canEdit']) ? $data['canEdit'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['managers'] = isset($data['managers']) ? $data['managers'] : null;
        $this->container['parentSetNames'] = isset($data['parentSetNames']) ? $data['parentSetNames'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['inheritMode'] = isset($data['inheritMode']) ? $data['inheritMode'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['isSystemDefault'] = isset($data['isSystemDefault']) ? $data['isSystemDefault'] : null;
        $this->container['isProjectDefault'] = isset($data['isProjectDefault']) ? $data['isProjectDefault'] : null;
        $this->container['isSystemSet'] = isset($data['isSystemSet']) ? $data['isSystemSet'] : null;
        $this->container['ruleIds'] = isset($data['ruleIds']) ? $data['ruleIds'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['canSetDefault'] = isset($data['canSetDefault']) ? $data['canSetDefault'] : null;
        $this->container['isUsed'] = isset($data['isUsed']) ? $data['isUsed'] : null;
        $this->container['childSets'] = isset($data['childSets']) ? $data['childSets'] : null;
        $this->container['isReliable'] = isset($data['isReliable']) ? $data['isReliable'] : null;
        $this->container['isRecommand'] = isset($data['isRecommand']) ? $data['isRecommand'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['defaultSet'] = isset($data['defaultSet']) ? $data['defaultSet'] : null;
        $this->container['deptId'] = isset($data['deptId']) ? $data['deptId'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['reliableTag'] = isset($data['reliableTag']) ? $data['reliableTag'] : null;
        $this->container['recommandType'] = isset($data['recommandType']) ? $data['recommandType'] : null;
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
    * Gets id
    *  **参数解释：** 规则集ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** 规则集ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 规则集中文名称。 **取值范围：** 任意中英文字符，数字，点，连字符和下划线组成的字符串，长度为[1~128]个字符。
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
    * @param string|null $name **参数解释：** 规则集中文名称。 **取值范围：** 任意中英文字符，数字，点，连字符和下划线组成的字符串，长度为[1~128]个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets comments
    *  **参数解释：** 规则集中文描述。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
    * Sets comments
    *
    * @param string|null $comments **参数解释：** 规则集中文描述。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 规则集类型。 **取值范围：** - system：系统规则集。 - custom：自定义规则集。
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
    * @param string|null $type **参数解释：** 规则集类型。 **取值范围：** - system：系统规则集。 - custom：自定义规则集。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets creator
    *  **参数解释：** 规则集创建者。 **取值范围：** 用户名。
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator **参数解释：** 规则集创建者。 **取值范围：** 用户名。
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 规则集创建时间。 **取值范围：** 0时区标准时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime **参数解释：** 规则集创建时间。 **取值范围：** 0时区标准时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastReviser
    *  **参数解释：** 规则集最近一次更新的操作人。 **取值范围：** 用户名。
    *
    * @return string|null
    */
    public function getLastReviser()
    {
        return $this->container['lastReviser'];
    }

    /**
    * Sets lastReviser
    *
    * @param string|null $lastReviser **参数解释：** 规则集最近一次更新的操作人。 **取值范围：** 用户名。
    *
    * @return $this
    */
    public function setLastReviser($lastReviser)
    {
        $this->container['lastReviser'] = $lastReviser;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  **参数解释：** 规则集最近一次更新的时间。 **取值范围：** 0时区标准时间。
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime **参数解释：** 规则集最近一次更新的时间。 **取值范围：** 0时区标准时间。
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets language
    *  **参数解释：** 规则集语言。 **取值范围：** - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language **参数解释：** 规则集语言。 **取值范围：** - ARKTS - C# - CANGJIE - C++ - CSS - GO - HTML - JAVA - JAVASCRIPT - KOTLIN - LUA - PHP - PYTHON - RUST - SCALA - SHELL - SQL - TERRAFORM - TYPESCRIPT - AZURERESOURCEMANAGER - DOCKER - KUBERNETES
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释：** 父规则集ID。 **取值范围：** 32位UUID组成的字符串。多个ID之间用逗号分隔。
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId **参数解释：** 父规则集ID。 **取值范围：** 32位UUID组成的字符串。多个ID之间用逗号分隔。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets numCriterion
    *  **参数解释：** 规则集中已启用的规则数量。 **取值范围：** ≥0
    *
    * @return int|null
    */
    public function getNumCriterion()
    {
        return $this->container['numCriterion'];
    }

    /**
    * Sets numCriterion
    *
    * @param int|null $numCriterion **参数解释：** 规则集中已启用的规则数量。 **取值范围：** ≥0
    *
    * @return $this
    */
    public function setNumCriterion($numCriterion)
    {
        $this->container['numCriterion'] = $numCriterion;
        return $this;
    }

    /**
    * Gets canEdit
    *  **参数解释：** 当前用户是否具有修改该规则集的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    *
    * @return bool|null
    */
    public function getCanEdit()
    {
        return $this->container['canEdit'];
    }

    /**
    * Sets canEdit
    *
    * @param bool|null $canEdit **参数解释：** 当前用户是否具有修改该规则集的权限。 **取值范围：** - true：有编辑的权限。 - false：没有编辑的权限。
    *
    * @return $this
    */
    public function setCanEdit($canEdit)
    {
        $this->container['canEdit'] = $canEdit;
        return $this;
    }

    /**
    * Gets canDelete
    *  **参数解释：** 当前用户是否具有删除该规则集的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    *
    * @return bool|null
    */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
    * Sets canDelete
    *
    * @param bool|null $canDelete **参数解释：** 当前用户是否具有删除该规则集的权限。 **取值范围：** - true：有删除的权限。 - false：没有删除的权限。
    *
    * @return $this
    */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;
        return $this;
    }

    /**
    * Gets managers
    *  **参数解释：** 规则集管理员。 **取值范围：** 用户ID。多个ID用逗号分隔。
    *
    * @return string|null
    */
    public function getManagers()
    {
        return $this->container['managers'];
    }

    /**
    * Sets managers
    *
    * @param string|null $managers **参数解释：** 规则集管理员。 **取值范围：** 用户ID。多个ID用逗号分隔。
    *
    * @return $this
    */
    public function setManagers($managers)
    {
        $this->container['managers'] = $managers;
        return $this;
    }

    /**
    * Gets parentSetNames
    *  **参数解释：** 父规则集的名称。 **取值范围：** 多个规则集名称之间用逗号分隔。
    *
    * @return string|null
    */
    public function getParentSetNames()
    {
        return $this->container['parentSetNames'];
    }

    /**
    * Sets parentSetNames
    *
    * @param string|null $parentSetNames **参数解释：** 父规则集的名称。 **取值范围：** 多个规则集名称之间用逗号分隔。
    *
    * @return $this
    */
    public function setParentSetNames($parentSetNames)
    {
        $this->container['parentSetNames'] = $parentSetNames;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释：** 租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 32位UUID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释：** 租户ID，租户ID的值来源于IAM的租户ID。 **取值范围：** 32位UUID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets inheritMode
    *  **参数解释：** 规则集创建时候的继承类型。 **取值范围：** - strong：规则集创建的时候来源于继承。 - null：规则集创建的时候来源于非继承。
    *
    * @return string|null
    */
    public function getInheritMode()
    {
        return $this->container['inheritMode'];
    }

    /**
    * Sets inheritMode
    *
    * @param string|null $inheritMode **参数解释：** 规则集创建时候的继承类型。 **取值范围：** - strong：规则集创建的时候来源于继承。 - null：规则集创建的时候来源于非继承。
    *
    * @return $this
    */
    public function setInheritMode($inheritMode)
    {
        $this->container['inheritMode'] = $inheritMode;
        return $this;
    }

    /**
    * Gets creatorId
    *  **参数解释：** 创建者用户ID。 **取值范围：** 32位UUID。
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId **参数解释：** 创建者用户ID。 **取值范围：** 32位UUID。
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets isSystemDefault
    *  **参数解释：** 是否为系统默认规则集。 **取值范围：** - 0：否。 - 1：是。
    *
    * @return string|null
    */
    public function getIsSystemDefault()
    {
        return $this->container['isSystemDefault'];
    }

    /**
    * Sets isSystemDefault
    *
    * @param string|null $isSystemDefault **参数解释：** 是否为系统默认规则集。 **取值范围：** - 0：否。 - 1：是。
    *
    * @return $this
    */
    public function setIsSystemDefault($isSystemDefault)
    {
        $this->container['isSystemDefault'] = $isSystemDefault;
        return $this;
    }

    /**
    * Gets isProjectDefault
    *  **参数解释：** 是否为项目默认规则集。 **取值范围：** - 0：否。 - 1：是。
    *
    * @return string|null
    */
    public function getIsProjectDefault()
    {
        return $this->container['isProjectDefault'];
    }

    /**
    * Sets isProjectDefault
    *
    * @param string|null $isProjectDefault **参数解释：** 是否为项目默认规则集。 **取值范围：** - 0：否。 - 1：是。
    *
    * @return $this
    */
    public function setIsProjectDefault($isProjectDefault)
    {
        $this->container['isProjectDefault'] = $isProjectDefault;
        return $this;
    }

    /**
    * Gets isSystemSet
    *  **参数解释：** 是否为系统规则集。 **取值范围：** - 0：否。 - 1：是。
    *
    * @return string|null
    */
    public function getIsSystemSet()
    {
        return $this->container['isSystemSet'];
    }

    /**
    * Sets isSystemSet
    *
    * @param string|null $isSystemSet **参数解释：** 是否为系统规则集。 **取值范围：** - 0：否。 - 1：是。
    *
    * @return $this
    */
    public function setIsSystemSet($isSystemSet)
    {
        $this->container['isSystemSet'] = $isSystemSet;
        return $this;
    }

    /**
    * Gets ruleIds
    *  **参数解释：** 规则集中已启用的能力规则unique_id。 **取值范围：** unique_id为32位UUID。多个unique_id之间用逗号分隔。
    *
    * @return string|null
    */
    public function getRuleIds()
    {
        return $this->container['ruleIds'];
    }

    /**
    * Sets ruleIds
    *
    * @param string|null $ruleIds **参数解释：** 规则集中已启用的能力规则unique_id。 **取值范围：** unique_id为32位UUID。多个unique_id之间用逗号分隔。
    *
    * @return $this
    */
    public function setRuleIds($ruleIds)
    {
        $this->container['ruleIds'] = $ruleIds;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释：** 规则集所在局点。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释：** 规则集所在局点。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets canSetDefault
    *  **参数解释：** 是否具有设置默认规则集的权限。 **取值范围：** - true：有权限。 - false：没有权限。
    *
    * @return bool|null
    */
    public function getCanSetDefault()
    {
        return $this->container['canSetDefault'];
    }

    /**
    * Sets canSetDefault
    *
    * @param bool|null $canSetDefault **参数解释：** 是否具有设置默认规则集的权限。 **取值范围：** - true：有权限。 - false：没有权限。
    *
    * @return $this
    */
    public function setCanSetDefault($canSetDefault)
    {
        $this->container['canSetDefault'] = $canSetDefault;
        return $this;
    }

    /**
    * Gets isUsed
    *  **参数解释：** 规则集是否被使用。 **取值范围：** - true：规则集被使用。 - false：规则集未被使用。
    *
    * @return bool|null
    */
    public function getIsUsed()
    {
        return $this->container['isUsed'];
    }

    /**
    * Sets isUsed
    *
    * @param bool|null $isUsed **参数解释：** 规则集是否被使用。 **取值范围：** - true：规则集被使用。 - false：规则集未被使用。
    *
    * @return $this
    */
    public function setIsUsed($isUsed)
    {
        $this->container['isUsed'] = $isUsed;
        return $this;
    }

    /**
    * Gets childSets
    *  **参数解释：** 子规则集。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getChildSets()
    {
        return $this->container['childSets'];
    }

    /**
    * Sets childSets
    *
    * @param string[]|null $childSets **参数解释：** 子规则集。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setChildSets($childSets)
    {
        $this->container['childSets'] = $childSets;
        return $this;
    }

    /**
    * Gets isReliable
    *  **参数解释：** 是否为可信规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getIsReliable()
    {
        return $this->container['isReliable'];
    }

    /**
    * Sets isReliable
    *
    * @param bool|null $isReliable **参数解释：** 是否为可信规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    *
    * @return $this
    */
    public function setIsReliable($isReliable)
    {
        $this->container['isReliable'] = $isReliable;
        return $this;
    }

    /**
    * Gets isRecommand
    *  **参数解释：** 是否为推荐规则集。该字段已弃用。 **取值范围：** - 1：是。 - 0：否。
    *
    * @return string|null
    */
    public function getIsRecommand()
    {
        return $this->container['isRecommand'];
    }

    /**
    * Sets isRecommand
    *
    * @param string|null $isRecommand **参数解释：** 是否为推荐规则集。该字段已弃用。 **取值范围：** - 1：是。 - 0：否。
    *
    * @return $this
    */
    public function setIsRecommand($isRecommand)
    {
        $this->container['isRecommand'] = $isRecommand;
        return $this;
    }

    /**
    * Gets isDefault
    *  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - true：是。 - false：否。
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets defaultSet
    *  **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - \"true\"：是。 - \"false\"：否。
    *
    * @return string|null
    */
    public function getDefaultSet()
    {
        return $this->container['defaultSet'];
    }

    /**
    * Sets defaultSet
    *
    * @param string|null $defaultSet **参数解释：** 是否为默认规则集。该字段已弃用。 **取值范围：** - \"true\"：是。 - \"false\"：否。
    *
    * @return $this
    */
    public function setDefaultSet($defaultSet)
    {
        $this->container['defaultSet'] = $defaultSet;
        return $this;
    }

    /**
    * Gets deptId
    *  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDeptId()
    {
        return $this->container['deptId'];
    }

    /**
    * Sets deptId
    *
    * @param string|null $deptId **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDeptId($deptId)
    {
        $this->container['deptId'] = $deptId;
        return $this;
    }

    /**
    * Gets deptName
    *  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDeptName()
    {
        return $this->container['deptName'];
    }

    /**
    * Sets deptName
    *
    * @param string|null $deptName **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets reliableTag
    *  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getReliableTag()
    {
        return $this->container['reliableTag'];
    }

    /**
    * Sets reliableTag
    *
    * @param string|null $reliableTag **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setReliableTag($reliableTag)
    {
        $this->container['reliableTag'] = $reliableTag;
        return $this;
    }

    /**
    * Gets recommandType
    *  **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRecommandType()
    {
        return $this->container['recommandType'];
    }

    /**
    * Sets recommandType
    *
    * @param string|null $recommandType **参数解释：** 该字段已弃用。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRecommandType($recommandType)
    {
        $this->container['recommandType'] = $recommandType;
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

