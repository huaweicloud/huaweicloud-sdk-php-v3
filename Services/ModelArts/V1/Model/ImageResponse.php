<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * arch  **参数解释**：该镜像所支持处理器架构类型。 **取值范围**：枚举类型，取值如下： - X86_64：x86处理器架构。 - AARCH64：ARM体系架构。
    * createAt  **参数解释**：镜像创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * description  **参数解释**：该镜像所对应的描述信息，长度限制512个字符。 **取值范围**：不涉及。
    * devServices  **参数解释**：镜像支持的服务。元素为枚举类型，取值如下： - NOTEBOOK：镜像支持通过https协议访问Notebook。 - SSH：镜像支持本地IDE通过SSH协议远程连接Notebook。
    * id  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID，ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。预置镜像的ID参考[查询支持的镜像列表](ListImage.xml)获取。 **取值范围**：不涉及。
    * name  **参数解释**：镜像名称。 **取值范围**：长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    * namespace  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **取值范围**：不涉及。
    * origin  **参数解释**：指定镜像来源。 **取值范围**：枚举类型，取值如下： - CUSTOMIZE: 用户自定义构建镜像。 - IMAGE_SAVE：Notebook实例保存镜像。
    * resourceCategories  **参数解释**：镜像支持的规格。元素为枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    * serviceType  **参数解释**：镜像支持服务类型。 **取值范围**：枚举类型，取值如下： - COMMON：通用镜像。 - INFERENCE: 建议仅在推理部署场景使用。 - TRAIN: 建议仅在训练任务场景使用。 - DEV: 建议仅在开发调测场景使用。 - UNKNOWN: 未明确设置的镜像支持的服务类型。
    * size  **参数解释**：镜像大小（单位KB）。 **取值范围**：不涉及。
    * status  **参数解释**：镜像状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化。 - CREATING：镜像保存中，此时Notebook不可用。 - CREATE_FAILED：镜像保存失败。 - ERROR：错误。 - DELETED：已删除。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建Notebook实例。
    * statusMessage  **参数解释**：镜像保存操作过程中，构建信息展示。 **取值范围**：不涉及。
    * swrPath  **参数解释**：SWR镜像地址。 **取值范围**：不涉及。
    * tag  **参数解释**：镜像Tag。 **取值范围**：不涉及。
    * type  **参数解释**：镜像类型。 **取值范围**：枚举类型，取值如下： - BUILD_IN：系统内置镜像。 - DEDICATED：用户保存的镜像。
    * updateAt  **参数解释**：镜像最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * visibility  **参数解释**：镜像可见度。 **取值范围**：枚举类型，取值如下： - PRIVATE：私有镜像。 - PUBLIC: 所有用户可以根据image_id来进行只读使用。
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * flavorType  **参数解释**：镜像的资源类型。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。
    * swrInstanceId  **参数解释**：SWR企业仓库ID。未使用SWR企业仓时该字段为null。 **约束限制**：不涉及。 **取值范围**：128位UUID。 **默认取值**：null。
    * showName  **参数解释**：镜像展示名称，仅预置镜像具备该字段。
    * showTag  **参数解释**：镜像展示版本号，仅预置镜像具备该字段。
    * tags  **参数解释**：镜像标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'arch' => 'string',
            'createAt' => 'int',
            'description' => 'string',
            'devServices' => 'string[]',
            'id' => 'string',
            'name' => 'string',
            'namespace' => 'string',
            'origin' => 'string',
            'resourceCategories' => 'string[]',
            'serviceType' => 'string',
            'size' => 'int',
            'status' => 'string',
            'statusMessage' => 'string',
            'swrPath' => 'string',
            'tag' => 'string',
            'type' => 'string',
            'updateAt' => 'int',
            'visibility' => 'string',
            'workspaceId' => 'string',
            'flavorType' => 'string',
            'swrInstanceId' => 'string',
            'showName' => 'string',
            'showTag' => 'string',
            'tags' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TmsTagResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * arch  **参数解释**：该镜像所支持处理器架构类型。 **取值范围**：枚举类型，取值如下： - X86_64：x86处理器架构。 - AARCH64：ARM体系架构。
    * createAt  **参数解释**：镜像创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * description  **参数解释**：该镜像所对应的描述信息，长度限制512个字符。 **取值范围**：不涉及。
    * devServices  **参数解释**：镜像支持的服务。元素为枚举类型，取值如下： - NOTEBOOK：镜像支持通过https协议访问Notebook。 - SSH：镜像支持本地IDE通过SSH协议远程连接Notebook。
    * id  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID，ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。预置镜像的ID参考[查询支持的镜像列表](ListImage.xml)获取。 **取值范围**：不涉及。
    * name  **参数解释**：镜像名称。 **取值范围**：长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    * namespace  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **取值范围**：不涉及。
    * origin  **参数解释**：指定镜像来源。 **取值范围**：枚举类型，取值如下： - CUSTOMIZE: 用户自定义构建镜像。 - IMAGE_SAVE：Notebook实例保存镜像。
    * resourceCategories  **参数解释**：镜像支持的规格。元素为枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    * serviceType  **参数解释**：镜像支持服务类型。 **取值范围**：枚举类型，取值如下： - COMMON：通用镜像。 - INFERENCE: 建议仅在推理部署场景使用。 - TRAIN: 建议仅在训练任务场景使用。 - DEV: 建议仅在开发调测场景使用。 - UNKNOWN: 未明确设置的镜像支持的服务类型。
    * size  **参数解释**：镜像大小（单位KB）。 **取值范围**：不涉及。
    * status  **参数解释**：镜像状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化。 - CREATING：镜像保存中，此时Notebook不可用。 - CREATE_FAILED：镜像保存失败。 - ERROR：错误。 - DELETED：已删除。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建Notebook实例。
    * statusMessage  **参数解释**：镜像保存操作过程中，构建信息展示。 **取值范围**：不涉及。
    * swrPath  **参数解释**：SWR镜像地址。 **取值范围**：不涉及。
    * tag  **参数解释**：镜像Tag。 **取值范围**：不涉及。
    * type  **参数解释**：镜像类型。 **取值范围**：枚举类型，取值如下： - BUILD_IN：系统内置镜像。 - DEDICATED：用户保存的镜像。
    * updateAt  **参数解释**：镜像最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * visibility  **参数解释**：镜像可见度。 **取值范围**：枚举类型，取值如下： - PRIVATE：私有镜像。 - PUBLIC: 所有用户可以根据image_id来进行只读使用。
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * flavorType  **参数解释**：镜像的资源类型。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。
    * swrInstanceId  **参数解释**：SWR企业仓库ID。未使用SWR企业仓时该字段为null。 **约束限制**：不涉及。 **取值范围**：128位UUID。 **默认取值**：null。
    * showName  **参数解释**：镜像展示名称，仅预置镜像具备该字段。
    * showTag  **参数解释**：镜像展示版本号，仅预置镜像具备该字段。
    * tags  **参数解释**：镜像标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'arch' => null,
        'createAt' => 'int64',
        'description' => null,
        'devServices' => null,
        'id' => null,
        'name' => null,
        'namespace' => null,
        'origin' => null,
        'resourceCategories' => null,
        'serviceType' => null,
        'size' => 'int64',
        'status' => null,
        'statusMessage' => null,
        'swrPath' => null,
        'tag' => null,
        'type' => null,
        'updateAt' => 'int64',
        'visibility' => null,
        'workspaceId' => null,
        'flavorType' => null,
        'swrInstanceId' => null,
        'showName' => null,
        'showTag' => null,
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
    * arch  **参数解释**：该镜像所支持处理器架构类型。 **取值范围**：枚举类型，取值如下： - X86_64：x86处理器架构。 - AARCH64：ARM体系架构。
    * createAt  **参数解释**：镜像创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * description  **参数解释**：该镜像所对应的描述信息，长度限制512个字符。 **取值范围**：不涉及。
    * devServices  **参数解释**：镜像支持的服务。元素为枚举类型，取值如下： - NOTEBOOK：镜像支持通过https协议访问Notebook。 - SSH：镜像支持本地IDE通过SSH协议远程连接Notebook。
    * id  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID，ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。预置镜像的ID参考[查询支持的镜像列表](ListImage.xml)获取。 **取值范围**：不涉及。
    * name  **参数解释**：镜像名称。 **取值范围**：长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    * namespace  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **取值范围**：不涉及。
    * origin  **参数解释**：指定镜像来源。 **取值范围**：枚举类型，取值如下： - CUSTOMIZE: 用户自定义构建镜像。 - IMAGE_SAVE：Notebook实例保存镜像。
    * resourceCategories  **参数解释**：镜像支持的规格。元素为枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    * serviceType  **参数解释**：镜像支持服务类型。 **取值范围**：枚举类型，取值如下： - COMMON：通用镜像。 - INFERENCE: 建议仅在推理部署场景使用。 - TRAIN: 建议仅在训练任务场景使用。 - DEV: 建议仅在开发调测场景使用。 - UNKNOWN: 未明确设置的镜像支持的服务类型。
    * size  **参数解释**：镜像大小（单位KB）。 **取值范围**：不涉及。
    * status  **参数解释**：镜像状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化。 - CREATING：镜像保存中，此时Notebook不可用。 - CREATE_FAILED：镜像保存失败。 - ERROR：错误。 - DELETED：已删除。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建Notebook实例。
    * statusMessage  **参数解释**：镜像保存操作过程中，构建信息展示。 **取值范围**：不涉及。
    * swrPath  **参数解释**：SWR镜像地址。 **取值范围**：不涉及。
    * tag  **参数解释**：镜像Tag。 **取值范围**：不涉及。
    * type  **参数解释**：镜像类型。 **取值范围**：枚举类型，取值如下： - BUILD_IN：系统内置镜像。 - DEDICATED：用户保存的镜像。
    * updateAt  **参数解释**：镜像最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * visibility  **参数解释**：镜像可见度。 **取值范围**：枚举类型，取值如下： - PRIVATE：私有镜像。 - PUBLIC: 所有用户可以根据image_id来进行只读使用。
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * flavorType  **参数解释**：镜像的资源类型。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。
    * swrInstanceId  **参数解释**：SWR企业仓库ID。未使用SWR企业仓时该字段为null。 **约束限制**：不涉及。 **取值范围**：128位UUID。 **默认取值**：null。
    * showName  **参数解释**：镜像展示名称，仅预置镜像具备该字段。
    * showTag  **参数解释**：镜像展示版本号，仅预置镜像具备该字段。
    * tags  **参数解释**：镜像标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'arch' => 'arch',
            'createAt' => 'create_at',
            'description' => 'description',
            'devServices' => 'dev_services',
            'id' => 'id',
            'name' => 'name',
            'namespace' => 'namespace',
            'origin' => 'origin',
            'resourceCategories' => 'resource_categories',
            'serviceType' => 'service_type',
            'size' => 'size',
            'status' => 'status',
            'statusMessage' => 'status_message',
            'swrPath' => 'swr_path',
            'tag' => 'tag',
            'type' => 'type',
            'updateAt' => 'update_at',
            'visibility' => 'visibility',
            'workspaceId' => 'workspace_id',
            'flavorType' => 'flavor_type',
            'swrInstanceId' => 'swr_instance_id',
            'showName' => 'show_name',
            'showTag' => 'show_tag',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * arch  **参数解释**：该镜像所支持处理器架构类型。 **取值范围**：枚举类型，取值如下： - X86_64：x86处理器架构。 - AARCH64：ARM体系架构。
    * createAt  **参数解释**：镜像创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * description  **参数解释**：该镜像所对应的描述信息，长度限制512个字符。 **取值范围**：不涉及。
    * devServices  **参数解释**：镜像支持的服务。元素为枚举类型，取值如下： - NOTEBOOK：镜像支持通过https协议访问Notebook。 - SSH：镜像支持本地IDE通过SSH协议远程连接Notebook。
    * id  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID，ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。预置镜像的ID参考[查询支持的镜像列表](ListImage.xml)获取。 **取值范围**：不涉及。
    * name  **参数解释**：镜像名称。 **取值范围**：长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    * namespace  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **取值范围**：不涉及。
    * origin  **参数解释**：指定镜像来源。 **取值范围**：枚举类型，取值如下： - CUSTOMIZE: 用户自定义构建镜像。 - IMAGE_SAVE：Notebook实例保存镜像。
    * resourceCategories  **参数解释**：镜像支持的规格。元素为枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    * serviceType  **参数解释**：镜像支持服务类型。 **取值范围**：枚举类型，取值如下： - COMMON：通用镜像。 - INFERENCE: 建议仅在推理部署场景使用。 - TRAIN: 建议仅在训练任务场景使用。 - DEV: 建议仅在开发调测场景使用。 - UNKNOWN: 未明确设置的镜像支持的服务类型。
    * size  **参数解释**：镜像大小（单位KB）。 **取值范围**：不涉及。
    * status  **参数解释**：镜像状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化。 - CREATING：镜像保存中，此时Notebook不可用。 - CREATE_FAILED：镜像保存失败。 - ERROR：错误。 - DELETED：已删除。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建Notebook实例。
    * statusMessage  **参数解释**：镜像保存操作过程中，构建信息展示。 **取值范围**：不涉及。
    * swrPath  **参数解释**：SWR镜像地址。 **取值范围**：不涉及。
    * tag  **参数解释**：镜像Tag。 **取值范围**：不涉及。
    * type  **参数解释**：镜像类型。 **取值范围**：枚举类型，取值如下： - BUILD_IN：系统内置镜像。 - DEDICATED：用户保存的镜像。
    * updateAt  **参数解释**：镜像最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * visibility  **参数解释**：镜像可见度。 **取值范围**：枚举类型，取值如下： - PRIVATE：私有镜像。 - PUBLIC: 所有用户可以根据image_id来进行只读使用。
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * flavorType  **参数解释**：镜像的资源类型。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。
    * swrInstanceId  **参数解释**：SWR企业仓库ID。未使用SWR企业仓时该字段为null。 **约束限制**：不涉及。 **取值范围**：128位UUID。 **默认取值**：null。
    * showName  **参数解释**：镜像展示名称，仅预置镜像具备该字段。
    * showTag  **参数解释**：镜像展示版本号，仅预置镜像具备该字段。
    * tags  **参数解释**：镜像标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'arch' => 'setArch',
            'createAt' => 'setCreateAt',
            'description' => 'setDescription',
            'devServices' => 'setDevServices',
            'id' => 'setId',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'origin' => 'setOrigin',
            'resourceCategories' => 'setResourceCategories',
            'serviceType' => 'setServiceType',
            'size' => 'setSize',
            'status' => 'setStatus',
            'statusMessage' => 'setStatusMessage',
            'swrPath' => 'setSwrPath',
            'tag' => 'setTag',
            'type' => 'setType',
            'updateAt' => 'setUpdateAt',
            'visibility' => 'setVisibility',
            'workspaceId' => 'setWorkspaceId',
            'flavorType' => 'setFlavorType',
            'swrInstanceId' => 'setSwrInstanceId',
            'showName' => 'setShowName',
            'showTag' => 'setShowTag',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * arch  **参数解释**：该镜像所支持处理器架构类型。 **取值范围**：枚举类型，取值如下： - X86_64：x86处理器架构。 - AARCH64：ARM体系架构。
    * createAt  **参数解释**：镜像创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * description  **参数解释**：该镜像所对应的描述信息，长度限制512个字符。 **取值范围**：不涉及。
    * devServices  **参数解释**：镜像支持的服务。元素为枚举类型，取值如下： - NOTEBOOK：镜像支持通过https协议访问Notebook。 - SSH：镜像支持本地IDE通过SSH协议远程连接Notebook。
    * id  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID，ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。预置镜像的ID参考[查询支持的镜像列表](ListImage.xml)获取。 **取值范围**：不涉及。
    * name  **参数解释**：镜像名称。 **取值范围**：长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    * namespace  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **取值范围**：不涉及。
    * origin  **参数解释**：指定镜像来源。 **取值范围**：枚举类型，取值如下： - CUSTOMIZE: 用户自定义构建镜像。 - IMAGE_SAVE：Notebook实例保存镜像。
    * resourceCategories  **参数解释**：镜像支持的规格。元素为枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    * serviceType  **参数解释**：镜像支持服务类型。 **取值范围**：枚举类型，取值如下： - COMMON：通用镜像。 - INFERENCE: 建议仅在推理部署场景使用。 - TRAIN: 建议仅在训练任务场景使用。 - DEV: 建议仅在开发调测场景使用。 - UNKNOWN: 未明确设置的镜像支持的服务类型。
    * size  **参数解释**：镜像大小（单位KB）。 **取值范围**：不涉及。
    * status  **参数解释**：镜像状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化。 - CREATING：镜像保存中，此时Notebook不可用。 - CREATE_FAILED：镜像保存失败。 - ERROR：错误。 - DELETED：已删除。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建Notebook实例。
    * statusMessage  **参数解释**：镜像保存操作过程中，构建信息展示。 **取值范围**：不涉及。
    * swrPath  **参数解释**：SWR镜像地址。 **取值范围**：不涉及。
    * tag  **参数解释**：镜像Tag。 **取值范围**：不涉及。
    * type  **参数解释**：镜像类型。 **取值范围**：枚举类型，取值如下： - BUILD_IN：系统内置镜像。 - DEDICATED：用户保存的镜像。
    * updateAt  **参数解释**：镜像最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * visibility  **参数解释**：镜像可见度。 **取值范围**：枚举类型，取值如下： - PRIVATE：私有镜像。 - PUBLIC: 所有用户可以根据image_id来进行只读使用。
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * flavorType  **参数解释**：镜像的资源类型。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。
    * swrInstanceId  **参数解释**：SWR企业仓库ID。未使用SWR企业仓时该字段为null。 **约束限制**：不涉及。 **取值范围**：128位UUID。 **默认取值**：null。
    * showName  **参数解释**：镜像展示名称，仅预置镜像具备该字段。
    * showTag  **参数解释**：镜像展示版本号，仅预置镜像具备该字段。
    * tags  **参数解释**：镜像标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'arch' => 'getArch',
            'createAt' => 'getCreateAt',
            'description' => 'getDescription',
            'devServices' => 'getDevServices',
            'id' => 'getId',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'origin' => 'getOrigin',
            'resourceCategories' => 'getResourceCategories',
            'serviceType' => 'getServiceType',
            'size' => 'getSize',
            'status' => 'getStatus',
            'statusMessage' => 'getStatusMessage',
            'swrPath' => 'getSwrPath',
            'tag' => 'getTag',
            'type' => 'getType',
            'updateAt' => 'getUpdateAt',
            'visibility' => 'getVisibility',
            'workspaceId' => 'getWorkspaceId',
            'flavorType' => 'getFlavorType',
            'swrInstanceId' => 'getSwrInstanceId',
            'showName' => 'getShowName',
            'showTag' => 'getShowTag',
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
    const ARCH_AARCH64 = 'AARCH64';
    const ARCH_X86_64 = 'X86_64';
    const DEV_SERVICES_NOTEBOOK = 'NOTEBOOK';
    const DEV_SERVICES_SSH = 'SSH';
    const ORIGIN_CUSTOMIZE = 'CUSTOMIZE';
    const ORIGIN_IMAGE_SAVE = 'IMAGE_SAVE';
    const RESOURCE_CATEGORIES_ASCEND = 'ASCEND';
    const RESOURCE_CATEGORIES_CPU = 'CPU';
    const RESOURCE_CATEGORIES_GPU = 'GPU';
    const SERVICE_TYPE_COMMON = 'COMMON';
    const SERVICE_TYPE_DEV = 'DEV';
    const SERVICE_TYPE_INFERENCE = 'INFERENCE';
    const SERVICE_TYPE_TRAIN = 'TRAIN';
    const SERVICE_TYPE_UNKNOWN = 'UNKNOWN';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const STATUS_CREATING = 'CREATING';
    const STATUS_DELETED = 'DELETED';
    const STATUS_ERROR = 'ERROR';
    const STATUS_INIT = 'INIT';
    const TYPE_BUILD_IN = 'BUILD_IN';
    const TYPE_DEDICATED = 'DEDICATED';
    const VISIBILITY_HIDDEN = 'HIDDEN';
    const VISIBILITY__PRIVATE = 'PRIVATE';
    const VISIBILITY__PUBLIC = 'PUBLIC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getArchAllowableValues()
    {
        return [
            self::ARCH_AARCH64,
            self::ARCH_X86_64,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDevServicesAllowableValues()
    {
        return [
            self::DEV_SERVICES_NOTEBOOK,
            self::DEV_SERVICES_SSH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_CUSTOMIZE,
            self::ORIGIN_IMAGE_SAVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceCategoriesAllowableValues()
    {
        return [
            self::RESOURCE_CATEGORIES_ASCEND,
            self::RESOURCE_CATEGORIES_CPU,
            self::RESOURCE_CATEGORIES_GPU,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE_COMMON,
            self::SERVICE_TYPE_DEV,
            self::SERVICE_TYPE_INFERENCE,
            self::SERVICE_TYPE_TRAIN,
            self::SERVICE_TYPE_UNKNOWN,
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
            self::STATUS_ACTIVE,
            self::STATUS_CREATE_FAILED,
            self::STATUS_CREATING,
            self::STATUS_DELETED,
            self::STATUS_ERROR,
            self::STATUS_INIT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BUILD_IN,
            self::TYPE_DEDICATED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY_HIDDEN,
            self::VISIBILITY__PRIVATE,
            self::VISIBILITY__PUBLIC,
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
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['devServices'] = isset($data['devServices']) ? $data['devServices'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['resourceCategories'] = isset($data['resourceCategories']) ? $data['resourceCategories'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
        $this->container['swrPath'] = isset($data['swrPath']) ? $data['swrPath'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['flavorType'] = isset($data['flavorType']) ? $data['flavorType'] : null;
        $this->container['swrInstanceId'] = isset($data['swrInstanceId']) ? $data['swrInstanceId'] : null;
        $this->container['showName'] = isset($data['showName']) ? $data['showName'] : null;
        $this->container['showTag'] = isset($data['showTag']) ? $data['showTag'] : null;
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
            $allowedValues = $this->getArchAllowableValues();
                if (!is_null($this->container['arch']) && !in_array($this->container['arch'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'arch', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOriginAllowableValues();
                if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getServiceTypeAllowableValues();
                if (!is_null($this->container['serviceType']) && !in_array($this->container['serviceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getVisibilityAllowableValues();
                if (!is_null($this->container['visibility']) && !in_array($this->container['visibility'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'visibility', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['swrInstanceId']) && (mb_strlen($this->container['swrInstanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'swrInstanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['swrInstanceId']) && (mb_strlen($this->container['swrInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'swrInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['showName']) && (mb_strlen($this->container['showName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'showName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['showName']) && (mb_strlen($this->container['showName']) < 0)) {
                $invalidProperties[] = "invalid value for 'showName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['showTag']) && (mb_strlen($this->container['showTag']) > 1024)) {
                $invalidProperties[] = "invalid value for 'showTag', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['showTag']) && (mb_strlen($this->container['showTag']) < 0)) {
                $invalidProperties[] = "invalid value for 'showTag', the character length must be bigger than or equal to 0.";
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
    * Gets arch
    *  **参数解释**：该镜像所支持处理器架构类型。 **取值范围**：枚举类型，取值如下： - X86_64：x86处理器架构。 - AARCH64：ARM体系架构。
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch **参数解释**：该镜像所支持处理器架构类型。 **取值范围**：枚举类型，取值如下： - X86_64：x86处理器架构。 - AARCH64：ARM体系架构。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释**：镜像创建的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释**：镜像创建的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：该镜像所对应的描述信息，长度限制512个字符。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**：该镜像所对应的描述信息，长度限制512个字符。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets devServices
    *  **参数解释**：镜像支持的服务。元素为枚举类型，取值如下： - NOTEBOOK：镜像支持通过https协议访问Notebook。 - SSH：镜像支持本地IDE通过SSH协议远程连接Notebook。
    *
    * @return string[]|null
    */
    public function getDevServices()
    {
        return $this->container['devServices'];
    }

    /**
    * Sets devServices
    *
    * @param string[]|null $devServices **参数解释**：镜像支持的服务。元素为枚举类型，取值如下： - NOTEBOOK：镜像支持通过https协议访问Notebook。 - SSH：镜像支持本地IDE通过SSH协议远程连接Notebook。
    *
    * @return $this
    */
    public function setDevServices($devServices)
    {
        $this->container['devServices'] = $devServices;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID，ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。预置镜像的ID参考[查询支持的镜像列表](ListImage.xml)获取。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID，ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。预置镜像的ID参考[查询支持的镜像列表](ListImage.xml)获取。 **取值范围**：不涉及。
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
    *  **参数解释**：镜像名称。 **取值范围**：长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
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
    * @param string|null $name **参数解释**：镜像名称。 **取值范围**：长度限制512个字符，支持小写字母、数字、中划线、下划线和点。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**：镜像所属组织，可以在SWR控制台“组织管理”创建和查看。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets origin
    *  **参数解释**：指定镜像来源。 **取值范围**：枚举类型，取值如下： - CUSTOMIZE: 用户自定义构建镜像。 - IMAGE_SAVE：Notebook实例保存镜像。
    *
    * @return string|null
    */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
    * Sets origin
    *
    * @param string|null $origin **参数解释**：指定镜像来源。 **取值范围**：枚举类型，取值如下： - CUSTOMIZE: 用户自定义构建镜像。 - IMAGE_SAVE：Notebook实例保存镜像。
    *
    * @return $this
    */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;
        return $this;
    }

    /**
    * Gets resourceCategories
    *  **参数解释**：镜像支持的规格。元素为枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    *
    * @return string[]|null
    */
    public function getResourceCategories()
    {
        return $this->container['resourceCategories'];
    }

    /**
    * Sets resourceCategories
    *
    * @param string[]|null $resourceCategories **参数解释**：镜像支持的规格。元素为枚举类型，取值如下： - CPU - GPU - [ASCEND](tag:hc,hk,fcs_super)
    *
    * @return $this
    */
    public function setResourceCategories($resourceCategories)
    {
        $this->container['resourceCategories'] = $resourceCategories;
        return $this;
    }

    /**
    * Gets serviceType
    *  **参数解释**：镜像支持服务类型。 **取值范围**：枚举类型，取值如下： - COMMON：通用镜像。 - INFERENCE: 建议仅在推理部署场景使用。 - TRAIN: 建议仅在训练任务场景使用。 - DEV: 建议仅在开发调测场景使用。 - UNKNOWN: 未明确设置的镜像支持的服务类型。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType **参数解释**：镜像支持服务类型。 **取值范围**：枚举类型，取值如下： - COMMON：通用镜像。 - INFERENCE: 建议仅在推理部署场景使用。 - TRAIN: 建议仅在训练任务场景使用。 - DEV: 建议仅在开发调测场景使用。 - UNKNOWN: 未明确设置的镜像支持的服务类型。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**：镜像大小（单位KB）。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释**：镜像大小（单位KB）。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：镜像状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化。 - CREATING：镜像保存中，此时Notebook不可用。 - CREATE_FAILED：镜像保存失败。 - ERROR：错误。 - DELETED：已删除。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建Notebook实例。
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
    * @param string|null $status **参数解释**：镜像状态。 **取值范围**：枚举类型，取值如下： - INIT：初始化。 - CREATING：镜像保存中，此时Notebook不可用。 - CREATE_FAILED：镜像保存失败。 - ERROR：错误。 - DELETED：已删除。 - ACTIVE：镜像保存成功，保存的镜像可以在SWR控制台查看，同时可以基于保存的镜像创建Notebook实例。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusMessage
    *  **参数解释**：镜像保存操作过程中，构建信息展示。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
    * Sets statusMessage
    *
    * @param string|null $statusMessage **参数解释**：镜像保存操作过程中，构建信息展示。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
        return $this;
    }

    /**
    * Gets swrPath
    *  **参数解释**：SWR镜像地址。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSwrPath()
    {
        return $this->container['swrPath'];
    }

    /**
    * Sets swrPath
    *
    * @param string|null $swrPath **参数解释**：SWR镜像地址。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSwrPath($swrPath)
    {
        $this->container['swrPath'] = $swrPath;
        return $this;
    }

    /**
    * Gets tag
    *  **参数解释**：镜像Tag。 **取值范围**：不涉及。
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
    * @param string|null $tag **参数解释**：镜像Tag。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：镜像类型。 **取值范围**：枚举类型，取值如下： - BUILD_IN：系统内置镜像。 - DEDICATED：用户保存的镜像。
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
    * @param string|null $type **参数解释**：镜像类型。 **取值范围**：枚举类型，取值如下： - BUILD_IN：系统内置镜像。 - DEDICATED：用户保存的镜像。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释**：镜像最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt **参数解释**：镜像最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets visibility
    *  **参数解释**：镜像可见度。 **取值范围**：枚举类型，取值如下： - PRIVATE：私有镜像。 - PUBLIC: 所有用户可以根据image_id来进行只读使用。
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility **参数解释**：镜像可见度。 **取值范围**：枚举类型，取值如下： - PRIVATE：私有镜像。 - PUBLIC: 所有用户可以根据image_id来进行只读使用。
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
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
    * @param string|null $workspaceId **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets flavorType
    *  **参数解释**：镜像的资源类型。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。
    *
    * @return string|null
    */
    public function getFlavorType()
    {
        return $this->container['flavorType'];
    }

    /**
    * Sets flavorType
    *
    * @param string|null $flavorType **参数解释**：镜像的资源类型。 **取值范围**：枚举类型，取值如下： -ASCEND_SNT9：昇腾910芯片。 -ASCEND_SNT9B：昇腾910B芯片。 -ASCEND_SNT3：昇腾310芯片。
    *
    * @return $this
    */
    public function setFlavorType($flavorType)
    {
        $this->container['flavorType'] = $flavorType;
        return $this;
    }

    /**
    * Gets swrInstanceId
    *  **参数解释**：SWR企业仓库ID。未使用SWR企业仓时该字段为null。 **约束限制**：不涉及。 **取值范围**：128位UUID。 **默认取值**：null。
    *
    * @return string|null
    */
    public function getSwrInstanceId()
    {
        return $this->container['swrInstanceId'];
    }

    /**
    * Sets swrInstanceId
    *
    * @param string|null $swrInstanceId **参数解释**：SWR企业仓库ID。未使用SWR企业仓时该字段为null。 **约束限制**：不涉及。 **取值范围**：128位UUID。 **默认取值**：null。
    *
    * @return $this
    */
    public function setSwrInstanceId($swrInstanceId)
    {
        $this->container['swrInstanceId'] = $swrInstanceId;
        return $this;
    }

    /**
    * Gets showName
    *  **参数解释**：镜像展示名称，仅预置镜像具备该字段。
    *
    * @return string|null
    */
    public function getShowName()
    {
        return $this->container['showName'];
    }

    /**
    * Sets showName
    *
    * @param string|null $showName **参数解释**：镜像展示名称，仅预置镜像具备该字段。
    *
    * @return $this
    */
    public function setShowName($showName)
    {
        $this->container['showName'] = $showName;
        return $this;
    }

    /**
    * Gets showTag
    *  **参数解释**：镜像展示版本号，仅预置镜像具备该字段。
    *
    * @return string|null
    */
    public function getShowTag()
    {
        return $this->container['showTag'];
    }

    /**
    * Sets showTag
    *
    * @param string|null $showTag **参数解释**：镜像展示版本号，仅预置镜像具备该字段。
    *
    * @return $this
    */
    public function setShowTag($showTag)
    {
        $this->container['showTag'] = $showTag;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：镜像标签。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TmsTagResponse[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TmsTagResponse[]|null $tags **参数解释**：镜像标签。
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

