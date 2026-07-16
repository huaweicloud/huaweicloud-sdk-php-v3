<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NotebookCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NotebookCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  **参数解释**：实例描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制为512字符，且不能包含字符&<>\"'/。 **默认取值**：不涉及。
    * endpoints  **参数解释**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端接入Notebook。 **约束限制**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    * feature  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    * flavor  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 - modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 - modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。  **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * customSpec  customSpec
    * imageId  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    * name  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线和下划线，名称可重复。 **默认取值**：不涉及。
    * poolId  **参数解释**：专属资源池ID，若需要指定专属资源池创建实例时必填。专属资源池ID可通过[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取的合法资源池ID列表。 **默认取值**：不涉及。
    * volume  volume
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：0或32位仅包含字符0-9或小写字母a-z的字符串。 **默认取值**：0。
    * hooks  hooks
    * lease  lease
    * affinity  affinity
    * runUser  runUser
    * dataVolumes  **参数解释**：实例存储配置。 **约束限制**：不涉及。
    * userVpc  userVpc
    * duration  **参数解释**：定时停止，以当前时刻为起点，运行的时长（到期后自动停止）。单位：毫秒。 **约束限制**：不涉及。 **取值范围**：3600000-259200000。 **默认取值**：3600000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'endpoints' => '\HuaweiCloud\SDK\ModelArts\V1\Model\EndpointsReq[]',
            'feature' => 'string',
            'flavor' => 'string',
            'customSpec' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NotebookCustomSpec',
            'imageId' => 'string',
            'name' => 'string',
            'poolId' => 'string',
            'volume' => '\HuaweiCloud\SDK\ModelArts\V1\Model\VolumeMountRequest',
            'workspaceId' => 'string',
            'hooks' => '\HuaweiCloud\SDK\ModelArts\V1\Model\CustomHooks',
            'lease' => '\HuaweiCloud\SDK\ModelArts\V1\Model\LeaseReq',
            'affinity' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AffinityType',
            'runUser' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RunUserRequest',
            'dataVolumes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\VolumeMountRequest[]',
            'userVpc' => '\HuaweiCloud\SDK\ModelArts\V1\Model\UserVpcRequest',
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  **参数解释**：实例描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制为512字符，且不能包含字符&<>\"'/。 **默认取值**：不涉及。
    * endpoints  **参数解释**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端接入Notebook。 **约束限制**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    * feature  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    * flavor  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 - modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 - modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。  **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * customSpec  customSpec
    * imageId  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    * name  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线和下划线，名称可重复。 **默认取值**：不涉及。
    * poolId  **参数解释**：专属资源池ID，若需要指定专属资源池创建实例时必填。专属资源池ID可通过[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取的合法资源池ID列表。 **默认取值**：不涉及。
    * volume  volume
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：0或32位仅包含字符0-9或小写字母a-z的字符串。 **默认取值**：0。
    * hooks  hooks
    * lease  lease
    * affinity  affinity
    * runUser  runUser
    * dataVolumes  **参数解释**：实例存储配置。 **约束限制**：不涉及。
    * userVpc  userVpc
    * duration  **参数解释**：定时停止，以当前时刻为起点，运行的时长（到期后自动停止）。单位：毫秒。 **约束限制**：不涉及。 **取值范围**：3600000-259200000。 **默认取值**：3600000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'endpoints' => null,
        'feature' => null,
        'flavor' => null,
        'customSpec' => null,
        'imageId' => null,
        'name' => null,
        'poolId' => null,
        'volume' => null,
        'workspaceId' => null,
        'hooks' => null,
        'lease' => null,
        'affinity' => null,
        'runUser' => null,
        'dataVolumes' => null,
        'userVpc' => null,
        'duration' => 'int32'
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
    * description  **参数解释**：实例描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制为512字符，且不能包含字符&<>\"'/。 **默认取值**：不涉及。
    * endpoints  **参数解释**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端接入Notebook。 **约束限制**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    * feature  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    * flavor  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 - modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 - modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。  **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * customSpec  customSpec
    * imageId  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    * name  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线和下划线，名称可重复。 **默认取值**：不涉及。
    * poolId  **参数解释**：专属资源池ID，若需要指定专属资源池创建实例时必填。专属资源池ID可通过[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取的合法资源池ID列表。 **默认取值**：不涉及。
    * volume  volume
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：0或32位仅包含字符0-9或小写字母a-z的字符串。 **默认取值**：0。
    * hooks  hooks
    * lease  lease
    * affinity  affinity
    * runUser  runUser
    * dataVolumes  **参数解释**：实例存储配置。 **约束限制**：不涉及。
    * userVpc  userVpc
    * duration  **参数解释**：定时停止，以当前时刻为起点，运行的时长（到期后自动停止）。单位：毫秒。 **约束限制**：不涉及。 **取值范围**：3600000-259200000。 **默认取值**：3600000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'endpoints' => 'endpoints',
            'feature' => 'feature',
            'flavor' => 'flavor',
            'customSpec' => 'custom_spec',
            'imageId' => 'image_id',
            'name' => 'name',
            'poolId' => 'pool_id',
            'volume' => 'volume',
            'workspaceId' => 'workspace_id',
            'hooks' => 'hooks',
            'lease' => 'lease',
            'affinity' => 'affinity',
            'runUser' => 'run_user',
            'dataVolumes' => 'data_volumes',
            'userVpc' => 'user_vpc',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  **参数解释**：实例描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制为512字符，且不能包含字符&<>\"'/。 **默认取值**：不涉及。
    * endpoints  **参数解释**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端接入Notebook。 **约束限制**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    * feature  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    * flavor  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 - modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 - modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。  **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * customSpec  customSpec
    * imageId  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    * name  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线和下划线，名称可重复。 **默认取值**：不涉及。
    * poolId  **参数解释**：专属资源池ID，若需要指定专属资源池创建实例时必填。专属资源池ID可通过[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取的合法资源池ID列表。 **默认取值**：不涉及。
    * volume  volume
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：0或32位仅包含字符0-9或小写字母a-z的字符串。 **默认取值**：0。
    * hooks  hooks
    * lease  lease
    * affinity  affinity
    * runUser  runUser
    * dataVolumes  **参数解释**：实例存储配置。 **约束限制**：不涉及。
    * userVpc  userVpc
    * duration  **参数解释**：定时停止，以当前时刻为起点，运行的时长（到期后自动停止）。单位：毫秒。 **约束限制**：不涉及。 **取值范围**：3600000-259200000。 **默认取值**：3600000。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'endpoints' => 'setEndpoints',
            'feature' => 'setFeature',
            'flavor' => 'setFlavor',
            'customSpec' => 'setCustomSpec',
            'imageId' => 'setImageId',
            'name' => 'setName',
            'poolId' => 'setPoolId',
            'volume' => 'setVolume',
            'workspaceId' => 'setWorkspaceId',
            'hooks' => 'setHooks',
            'lease' => 'setLease',
            'affinity' => 'setAffinity',
            'runUser' => 'setRunUser',
            'dataVolumes' => 'setDataVolumes',
            'userVpc' => 'setUserVpc',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  **参数解释**：实例描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制为512字符，且不能包含字符&<>\"'/。 **默认取值**：不涉及。
    * endpoints  **参数解释**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端接入Notebook。 **约束限制**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    * feature  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    * flavor  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 - modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 - modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。  **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * customSpec  customSpec
    * imageId  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    * name  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线和下划线，名称可重复。 **默认取值**：不涉及。
    * poolId  **参数解释**：专属资源池ID，若需要指定专属资源池创建实例时必填。专属资源池ID可通过[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取的合法资源池ID列表。 **默认取值**：不涉及。
    * volume  volume
    * workspaceId  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：0或32位仅包含字符0-9或小写字母a-z的字符串。 **默认取值**：0。
    * hooks  hooks
    * lease  lease
    * affinity  affinity
    * runUser  runUser
    * dataVolumes  **参数解释**：实例存储配置。 **约束限制**：不涉及。
    * userVpc  userVpc
    * duration  **参数解释**：定时停止，以当前时刻为起点，运行的时长（到期后自动停止）。单位：毫秒。 **约束限制**：不涉及。 **取值范围**：3600000-259200000。 **默认取值**：3600000。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'endpoints' => 'getEndpoints',
            'feature' => 'getFeature',
            'flavor' => 'getFlavor',
            'customSpec' => 'getCustomSpec',
            'imageId' => 'getImageId',
            'name' => 'getName',
            'poolId' => 'getPoolId',
            'volume' => 'getVolume',
            'workspaceId' => 'getWorkspaceId',
            'hooks' => 'getHooks',
            'lease' => 'getLease',
            'affinity' => 'getAffinity',
            'runUser' => 'getRunUser',
            'dataVolumes' => 'getDataVolumes',
            'userVpc' => 'getUserVpc',
            'duration' => 'getDuration'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['customSpec'] = isset($data['customSpec']) ? $data['customSpec'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['hooks'] = isset($data['hooks']) ? $data['hooks'] : null;
        $this->container['lease'] = isset($data['lease']) ? $data['lease'] : null;
        $this->container['affinity'] = isset($data['affinity']) ? $data['affinity'] : null;
        $this->container['runUser'] = isset($data['runUser']) ? $data['runUser'] : null;
        $this->container['dataVolumes'] = isset($data['dataVolumes']) ? $data['dataVolumes'] : null;
        $this->container['userVpc'] = isset($data['userVpc']) ? $data['userVpc'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
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

            if (!is_null($this->container['flavor']) && !preg_match("/^[a-zA-Z0-9.]{1,128}$/", $this->container['flavor'])) {
                $invalidProperties[] = "invalid value for 'flavor', must be conform to the pattern /^[a-zA-Z0-9.]{1,128}$/.";
            }
        if ($this->container['imageId'] === null) {
            $invalidProperties[] = "'imageId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['imageId'])) {
                $invalidProperties[] = "invalid value for 'imageId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/(^[a-z][-a-z0-9]{2,62}[a-z0-9]$)/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /(^[a-z][-a-z0-9]{2,62}[a-z0-9]$)/.";
            }
            if (!is_null($this->container['poolId']) && !preg_match("/^pool[0-9a-z]{8}$/", $this->container['poolId'])) {
                $invalidProperties[] = "invalid value for 'poolId', must be conform to the pattern /^pool[0-9a-z]{8}$/.";
            }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
            if (!is_null($this->container['workspaceId']) && !preg_match("/^[0-9a-z]{32}|0$/", $this->container['workspaceId'])) {
                $invalidProperties[] = "invalid value for 'workspaceId', must be conform to the pattern /^[0-9a-z]{32}|0$/.";
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
    * Gets description
    *  **参数解释**：实例描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制为512字符，且不能包含字符&<>\"'/。 **默认取值**：不涉及。
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
    * @param string|null $description **参数解释**：实例描述信息。 **约束限制**：不涉及。 **取值范围**：长度限制为512字符，且不能包含字符&<>\"'/。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets endpoints
    *  **参数解释**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端接入Notebook。 **约束限制**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\EndpointsReq[]|null
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\EndpointsReq[]|null $endpoints **参数解释**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端接入Notebook。 **约束限制**：仅在本地IDE（如PyCharm、VS Code）或SSH客户端，通过SSH远程接入Notebook实例时需要的相关配置。
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets feature
    *  **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
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
    * @param string|null $feature **参数解释**：实例类别。 **约束限制**：不涉及。 **取值范围**： - DEFAULT：CodeLab免费规格实例，每个用户最多只能创建一个。 - NOTEBOOK：计费规格实例。  **默认取值**：NOTEBOOK。
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets flavor
    *  **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 - modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 - modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。  **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $flavor **参数解释**：实例的机器规格。如下规格仅供参考，实际支持的规格以具体区域为准。 - modelarts.vm.cpu.2u：Intel CPU通用规格，用于快速数据探索和实验。 - modelarts.vm.cpu.8u：Intel CPU算力增强型，适用于密集计算场景下运算。  **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets customSpec
    *  customSpec
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NotebookCustomSpec|null
    */
    public function getCustomSpec()
    {
        return $this->container['customSpec'];
    }

    /**
    * Sets customSpec
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NotebookCustomSpec|null $customSpec customSpec
    *
    * @return $this
    */
    public function setCustomSpec($customSpec)
    {
        $this->container['customSpec'] = $customSpec;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string $imageId **参数解释**：待创建Notebook实例的镜像，需要指定镜像ID。ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。镜像的ID可通过调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询支持的镜像列表](https://support.huaweicloud.com/api-modelarts/ListImage.html)](tag:hc)[[查询支持的镜像列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListImage.html)](tag:hk)接口获取的合法镜像ID列表。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线和下划线，名称可重复。 **默认取值**：不涉及。
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
    * @param string $name **参数解释**：实例名称。 **约束限制**：不涉及。 **取值范围**：长度限制为128个字符，支持大小写字母、数字、中划线和下划线，名称可重复。 **默认取值**：不涉及。
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
    *  **参数解释**：专属资源池ID，若需要指定专属资源池创建实例时必填。专属资源池ID可通过[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取的合法资源池ID列表。 **默认取值**：不涉及。
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
    * @param string|null $poolId **参数解释**：专属资源池ID，若需要指定专属资源池创建实例时必填。专属资源池ID可通过[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取。 **约束限制**：不涉及。 **取值范围**：调用[[查询资源池列表](https://support.huaweicloud.com/api-modelarts/ListPools.html)](tag:hc)[[查询资源池列表](https://support.huaweicloud.com/intl/zh-cn/api-modelarts/ListPools.html)](tag:hk)接口获取的合法资源池ID列表。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeMountRequest
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeMountRequest $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：0或32位仅包含字符0-9或小写字母a-z的字符串。 **默认取值**：0。
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
    * @param string|null $workspaceId **参数解释**：工作空间ID。未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **约束限制**：不涉及。 **取值范围**：0或32位仅包含字符0-9或小写字母a-z的字符串。 **默认取值**：0。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets hooks
    *  hooks
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\CustomHooks|null
    */
    public function getHooks()
    {
        return $this->container['hooks'];
    }

    /**
    * Sets hooks
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\CustomHooks|null $hooks hooks
    *
    * @return $this
    */
    public function setHooks($hooks)
    {
        $this->container['hooks'] = $hooks;
        return $this;
    }

    /**
    * Gets lease
    *  lease
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\LeaseReq|null
    */
    public function getLease()
    {
        return $this->container['lease'];
    }

    /**
    * Sets lease
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\LeaseReq|null $lease lease
    *
    * @return $this
    */
    public function setLease($lease)
    {
        $this->container['lease'] = $lease;
        return $this;
    }

    /**
    * Gets affinity
    *  affinity
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AffinityType|null
    */
    public function getAffinity()
    {
        return $this->container['affinity'];
    }

    /**
    * Sets affinity
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AffinityType|null $affinity affinity
    *
    * @return $this
    */
    public function setAffinity($affinity)
    {
        $this->container['affinity'] = $affinity;
        return $this;
    }

    /**
    * Gets runUser
    *  runUser
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RunUserRequest|null
    */
    public function getRunUser()
    {
        return $this->container['runUser'];
    }

    /**
    * Sets runUser
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RunUserRequest|null $runUser runUser
    *
    * @return $this
    */
    public function setRunUser($runUser)
    {
        $this->container['runUser'] = $runUser;
        return $this;
    }

    /**
    * Gets dataVolumes
    *  **参数解释**：实例存储配置。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeMountRequest[]|null
    */
    public function getDataVolumes()
    {
        return $this->container['dataVolumes'];
    }

    /**
    * Sets dataVolumes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\VolumeMountRequest[]|null $dataVolumes **参数解释**：实例存储配置。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setDataVolumes($dataVolumes)
    {
        $this->container['dataVolumes'] = $dataVolumes;
        return $this;
    }

    /**
    * Gets userVpc
    *  userVpc
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\UserVpcRequest|null
    */
    public function getUserVpc()
    {
        return $this->container['userVpc'];
    }

    /**
    * Sets userVpc
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\UserVpcRequest|null $userVpc userVpc
    *
    * @return $this
    */
    public function setUserVpc($userVpc)
    {
        $this->container['userVpc'] = $userVpc;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释**：定时停止，以当前时刻为起点，运行的时长（到期后自动停止）。单位：毫秒。 **约束限制**：不涉及。 **取值范围**：3600000-259200000。 **默认取值**：3600000。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration **参数解释**：定时停止，以当前时刻为起点，运行的时长（到期后自动停止）。单位：毫秒。 **约束限制**：不涉及。 **取值范围**：3600000-259200000。 **默认取值**：3600000。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

