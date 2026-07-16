<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNotebooksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNotebooksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * feature  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    * limit  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：[10,20,50]。 **默认取值**：10。
    * name  **参数解释**：实例名称，支持模糊匹配查询。 **约束限制**：不涉及。 **取值范围**：长度限制128个字符，支持大小写字母、数字、中划线和下划线。 **默认取值**：不涉及。
    * poolId  **参数解释**：专属资源池ID。 **约束限制**：不涉及。 **取值范围**：长度最长为64个字符，最短为4个字符，支持小写字母、数字、中划线，且必须是小写字母开头，小写字母或数字结尾。 **默认取值**：不涉及。
    * offset  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * owner  **参数解释**：实例归属的用户ID，在大账号/有admin权限场景下生效，值通常为当前登录用户ID。 **约束限制**：不涉及。 **取值范围**：长度为32位小写字母、数字。 **默认取值**：不涉及。
    * sortDir  **参数解释**：实例排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    * sortKey  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    * status  **参数解释**：实例状态。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结  **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * flavor  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * imageId  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    * id  **参数解释**：Notebook实例ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID），可通过调用[[查询Notebook实例列表接口](https://support.huaweicloud.com/api-modelarts/ListNotebooks.html#section0)](tag:hc)[[查询Notebook实例列表接口](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListNotebooks.html#section0)](tag:hk)获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * billing  **参数解释**：实例计费类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - COMPUTE：计算资源计费 - STORAGE：存储资源计费 - ALL：所有计费类型  **默认取值**：不涉及。
    * tags  **参数解释**：实例标签信息。 **约束限制**：不涉及。 **取值范围**：不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分割。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'feature' => 'string',
            'limit' => 'int',
            'name' => 'string',
            'poolId' => 'string',
            'offset' => 'int',
            'owner' => 'string',
            'sortDir' => 'string',
            'sortKey' => 'string',
            'status' => 'string',
            'workspaceId' => 'string',
            'flavor' => 'string',
            'imageId' => 'string',
            'id' => 'string',
            'billing' => 'string',
            'tags' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * feature  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    * limit  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：[10,20,50]。 **默认取值**：10。
    * name  **参数解释**：实例名称，支持模糊匹配查询。 **约束限制**：不涉及。 **取值范围**：长度限制128个字符，支持大小写字母、数字、中划线和下划线。 **默认取值**：不涉及。
    * poolId  **参数解释**：专属资源池ID。 **约束限制**：不涉及。 **取值范围**：长度最长为64个字符，最短为4个字符，支持小写字母、数字、中划线，且必须是小写字母开头，小写字母或数字结尾。 **默认取值**：不涉及。
    * offset  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * owner  **参数解释**：实例归属的用户ID，在大账号/有admin权限场景下生效，值通常为当前登录用户ID。 **约束限制**：不涉及。 **取值范围**：长度为32位小写字母、数字。 **默认取值**：不涉及。
    * sortDir  **参数解释**：实例排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    * sortKey  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    * status  **参数解释**：实例状态。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结  **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * flavor  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * imageId  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    * id  **参数解释**：Notebook实例ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID），可通过调用[[查询Notebook实例列表接口](https://support.huaweicloud.com/api-modelarts/ListNotebooks.html#section0)](tag:hc)[[查询Notebook实例列表接口](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListNotebooks.html#section0)](tag:hk)获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * billing  **参数解释**：实例计费类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - COMPUTE：计算资源计费 - STORAGE：存储资源计费 - ALL：所有计费类型  **默认取值**：不涉及。
    * tags  **参数解释**：实例标签信息。 **约束限制**：不涉及。 **取值范围**：不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分割。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'feature' => null,
        'limit' => 'int32',
        'name' => null,
        'poolId' => null,
        'offset' => 'int32',
        'owner' => null,
        'sortDir' => null,
        'sortKey' => null,
        'status' => null,
        'workspaceId' => null,
        'flavor' => null,
        'imageId' => null,
        'id' => null,
        'billing' => null,
        'tags' => null
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
    * feature  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    * limit  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：[10,20,50]。 **默认取值**：10。
    * name  **参数解释**：实例名称，支持模糊匹配查询。 **约束限制**：不涉及。 **取值范围**：长度限制128个字符，支持大小写字母、数字、中划线和下划线。 **默认取值**：不涉及。
    * poolId  **参数解释**：专属资源池ID。 **约束限制**：不涉及。 **取值范围**：长度最长为64个字符，最短为4个字符，支持小写字母、数字、中划线，且必须是小写字母开头，小写字母或数字结尾。 **默认取值**：不涉及。
    * offset  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * owner  **参数解释**：实例归属的用户ID，在大账号/有admin权限场景下生效，值通常为当前登录用户ID。 **约束限制**：不涉及。 **取值范围**：长度为32位小写字母、数字。 **默认取值**：不涉及。
    * sortDir  **参数解释**：实例排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    * sortKey  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    * status  **参数解释**：实例状态。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结  **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * flavor  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * imageId  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    * id  **参数解释**：Notebook实例ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID），可通过调用[[查询Notebook实例列表接口](https://support.huaweicloud.com/api-modelarts/ListNotebooks.html#section0)](tag:hc)[[查询Notebook实例列表接口](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListNotebooks.html#section0)](tag:hk)获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * billing  **参数解释**：实例计费类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - COMPUTE：计算资源计费 - STORAGE：存储资源计费 - ALL：所有计费类型  **默认取值**：不涉及。
    * tags  **参数解释**：实例标签信息。 **约束限制**：不涉及。 **取值范围**：不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分割。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'feature' => 'feature',
            'limit' => 'limit',
            'name' => 'name',
            'poolId' => 'pool_id',
            'offset' => 'offset',
            'owner' => 'owner',
            'sortDir' => 'sort_dir',
            'sortKey' => 'sort_key',
            'status' => 'status',
            'workspaceId' => 'workspace_id',
            'flavor' => 'flavor',
            'imageId' => 'image_id',
            'id' => 'id',
            'billing' => 'billing',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * feature  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    * limit  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：[10,20,50]。 **默认取值**：10。
    * name  **参数解释**：实例名称，支持模糊匹配查询。 **约束限制**：不涉及。 **取值范围**：长度限制128个字符，支持大小写字母、数字、中划线和下划线。 **默认取值**：不涉及。
    * poolId  **参数解释**：专属资源池ID。 **约束限制**：不涉及。 **取值范围**：长度最长为64个字符，最短为4个字符，支持小写字母、数字、中划线，且必须是小写字母开头，小写字母或数字结尾。 **默认取值**：不涉及。
    * offset  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * owner  **参数解释**：实例归属的用户ID，在大账号/有admin权限场景下生效，值通常为当前登录用户ID。 **约束限制**：不涉及。 **取值范围**：长度为32位小写字母、数字。 **默认取值**：不涉及。
    * sortDir  **参数解释**：实例排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    * sortKey  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    * status  **参数解释**：实例状态。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结  **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * flavor  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * imageId  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    * id  **参数解释**：Notebook实例ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID），可通过调用[[查询Notebook实例列表接口](https://support.huaweicloud.com/api-modelarts/ListNotebooks.html#section0)](tag:hc)[[查询Notebook实例列表接口](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListNotebooks.html#section0)](tag:hk)获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * billing  **参数解释**：实例计费类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - COMPUTE：计算资源计费 - STORAGE：存储资源计费 - ALL：所有计费类型  **默认取值**：不涉及。
    * tags  **参数解释**：实例标签信息。 **约束限制**：不涉及。 **取值范围**：不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分割。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'feature' => 'setFeature',
            'limit' => 'setLimit',
            'name' => 'setName',
            'poolId' => 'setPoolId',
            'offset' => 'setOffset',
            'owner' => 'setOwner',
            'sortDir' => 'setSortDir',
            'sortKey' => 'setSortKey',
            'status' => 'setStatus',
            'workspaceId' => 'setWorkspaceId',
            'flavor' => 'setFlavor',
            'imageId' => 'setImageId',
            'id' => 'setId',
            'billing' => 'setBilling',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * feature  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    * limit  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：[10,20,50]。 **默认取值**：10。
    * name  **参数解释**：实例名称，支持模糊匹配查询。 **约束限制**：不涉及。 **取值范围**：长度限制128个字符，支持大小写字母、数字、中划线和下划线。 **默认取值**：不涉及。
    * poolId  **参数解释**：专属资源池ID。 **约束限制**：不涉及。 **取值范围**：长度最长为64个字符，最短为4个字符，支持小写字母、数字、中划线，且必须是小写字母开头，小写字母或数字结尾。 **默认取值**：不涉及。
    * offset  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * owner  **参数解释**：实例归属的用户ID，在大账号/有admin权限场景下生效，值通常为当前登录用户ID。 **约束限制**：不涉及。 **取值范围**：长度为32位小写字母、数字。 **默认取值**：不涉及。
    * sortDir  **参数解释**：实例排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    * sortKey  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    * status  **参数解释**：实例状态。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结  **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    * flavor  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * imageId  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    * id  **参数解释**：Notebook实例ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID），可通过调用[[查询Notebook实例列表接口](https://support.huaweicloud.com/api-modelarts/ListNotebooks.html#section0)](tag:hc)[[查询Notebook实例列表接口](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListNotebooks.html#section0)](tag:hk)获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * billing  **参数解释**：实例计费类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - COMPUTE：计算资源计费 - STORAGE：存储资源计费 - ALL：所有计费类型  **默认取值**：不涉及。
    * tags  **参数解释**：实例标签信息。 **约束限制**：不涉及。 **取值范围**：不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分割。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'feature' => 'getFeature',
            'limit' => 'getLimit',
            'name' => 'getName',
            'poolId' => 'getPoolId',
            'offset' => 'getOffset',
            'owner' => 'getOwner',
            'sortDir' => 'getSortDir',
            'sortKey' => 'getSortKey',
            'status' => 'getStatus',
            'workspaceId' => 'getWorkspaceId',
            'flavor' => 'getFlavor',
            'imageId' => 'getImageId',
            'id' => 'getId',
            'billing' => 'getBilling',
            'tags' => 'getTags'
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
    const FEATURE__DEFAULT = 'DEFAULT';
    const FEATURE_NOTEBOOK = 'NOTEBOOK';
    const SORT_DIR_ASC = 'ASC';
    const SORT_DIR_DESC = 'DESC';
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const STATUS_CREATING = 'CREATING';
    const STATUS_DELETED = 'DELETED';
    const STATUS_DELETE_FAILED = 'DELETE_FAILED';
    const STATUS_DELETING = 'DELETING';
    const STATUS_ERROR = 'ERROR';
    const STATUS_FROZEN = 'FROZEN';
    const STATUS_INIT = 'INIT';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_SNAPSHOTTING = 'SNAPSHOTTING';
    const STATUS_STARTING = 'STARTING';
    const STATUS_START_FAILED = 'START_FAILED';
    const STATUS_STOPPED = 'STOPPED';
    const STATUS_STOPPING = 'STOPPING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFeatureAllowableValues()
    {
        return [
            self::FEATURE__DEFAULT,
            self::FEATURE_NOTEBOOK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_ASC,
            self::SORT_DIR_DESC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATE_FAILED,
            self::STATUS_CREATING,
            self::STATUS_DELETED,
            self::STATUS_DELETE_FAILED,
            self::STATUS_DELETING,
            self::STATUS_ERROR,
            self::STATUS_FROZEN,
            self::STATUS_INIT,
            self::STATUS_RUNNING,
            self::STATUS_SNAPSHOTTING,
            self::STATUS_STARTING,
            self::STATUS_START_FAILED,
            self::STATUS_STOPPED,
            self::STATUS_STOPPING,
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
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFeatureAllowableValues();
                if (!is_null($this->container['feature']) && !in_array($this->container['feature'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'feature', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['name']) && !preg_match("/^[-_a-zA-Z0-9]{1,128}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[-_a-zA-Z0-9]{1,128}$/.";
            }
            if (!is_null($this->container['poolId']) && !preg_match("/(^[a-z][-a-z0-9]{2,62}[a-z0-9]$)/", $this->container['poolId'])) {
                $invalidProperties[] = "invalid value for 'poolId', must be conform to the pattern /(^[a-z][-a-z0-9]{2,62}[a-z0-9]$)/.";
            }
            if (!is_null($this->container['owner']) && !preg_match("/^[0-9a-z]{32}$/", $this->container['owner'])) {
                $invalidProperties[] = "invalid value for 'owner', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sortKey']) && !preg_match("/^[-_a-zA-Z0-9,]{0,128}$/", $this->container['sortKey'])) {
                $invalidProperties[] = "invalid value for 'sortKey', must be conform to the pattern /^[-_a-zA-Z0-9,]{0,128}$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets feature
    *  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    *
    * @return string|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string|null $feature **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：[10,20,50]。 **默认取值**：10。
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
    * @param int|null $limit **参数解释**：每一页显示实例的数量。 **约束限制**：不涉及。 **取值范围**：[10,20,50]。 **默认取值**：10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：实例名称，支持模糊匹配查询。 **约束限制**：不涉及。 **取值范围**：长度限制128个字符，支持大小写字母、数字、中划线和下划线。 **默认取值**：不涉及。
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
    * @param string|null $name **参数解释**：实例名称，支持模糊匹配查询。 **约束限制**：不涉及。 **取值范围**：长度限制128个字符，支持大小写字母、数字、中划线和下划线。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释**：专属资源池ID。 **约束限制**：不涉及。 **取值范围**：长度最长为64个字符，最短为4个字符，支持小写字母、数字、中划线，且必须是小写字母开头，小写字母或数字结尾。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId **参数解释**：专属资源池ID。 **约束限制**：不涉及。 **取值范围**：长度最长为64个字符，最短为4个字符，支持小写字母、数字、中划线，且必须是小写字母开头，小写字母或数字结尾。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
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
    * @param int|null $offset **参数解释**：分页记录的起始位置偏移量。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets owner
    *  **参数解释**：实例归属的用户ID，在大账号/有admin权限场景下生效，值通常为当前登录用户ID。 **约束限制**：不涉及。 **取值范围**：长度为32位小写字母、数字。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner **参数解释**：实例归属的用户ID，在大账号/有admin权限场景下生效，值通常为当前登录用户ID。 **约束限制**：不涉及。 **取值范围**：长度为32位小写字母、数字。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释**：实例排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释**：实例排序方式。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - ASC：升序 - DESC：降序  **默认取值**：DESC。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释**：排序的字段，多个字段使用(“,”)逗号分隔。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线、下划线和逗号。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：实例状态。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：实例状态。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - INIT：初始化 - CREATING：创建中 - STARTING：启动中 - STOPPING：停止中 - DELETING：删除中 - RUNNING：运行中 - STOPPED：已停止 - SNAPSHOTTING：快照中(保存镜像时的状态) - CREATE_FAILED：创建失败 - START_FAILED：启动失败 - DELETE_FAILED：删除失败 - ERROR：错误 - DELETED：已删除 - FROZEN：冻结  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId **参数解释**：工作空间ID。获取方法请参见[[查询工作空间列表](ListWorkspace.xml)](tag:hc,hk)。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：0。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets flavor
    *  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：Notebook实例ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID），可通过调用[[查询Notebook实例列表接口](https://support.huaweicloud.com/api-modelarts/ListNotebooks.html#section0)](tag:hc)[[查询Notebook实例列表接口](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListNotebooks.html#section0)](tag:hk)获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $id **参数解释**：Notebook实例ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID），可通过调用[[查询Notebook实例列表接口](https://support.huaweicloud.com/api-modelarts/ListNotebooks.html#section0)](tag:hc)[[查询Notebook实例列表接口](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListNotebooks.html#section0)](tag:hk)获取。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets billing
    *  **参数解释**：实例计费类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - COMPUTE：计算资源计费 - STORAGE：存储资源计费 - ALL：所有计费类型  **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
    * Sets billing
    *
    * @param string|null $billing **参数解释**：实例计费类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - COMPUTE：计算资源计费 - STORAGE：存储资源计费 - ALL：所有计费类型  **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：实例标签信息。 **约束限制**：不涉及。 **取值范围**：不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分割。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags **参数解释**：实例标签信息。 **约束限制**：不涉及。 **取值范围**：不以逗号，竖划线开头，不以逗号结尾，不出现连续的竖划线和逗号，允许中文、西文、葡文等语言以及空格_.:/=+-@特殊字符，且字符间以逗号或者竖划线分割。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

