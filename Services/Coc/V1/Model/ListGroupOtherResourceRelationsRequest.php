<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGroupOtherResourceRelationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGroupOtherResourceRelationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationId  **参数解释：** 分组关联的应用id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的应用id。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 组件id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的组件id。 **默认取值：** 不涉及。
    * groupId  **参数解释：** 分组id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 厂商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    * limit  **参数解释：** 用于分页查询，查询数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * offset  **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    * resourceIdList  **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    * name  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id列表。 **约束限制：** 不涉及。 **取值范围：** 区域id列表，最大值100。 **默认取值：** 不涉及。
    * azId  **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipType  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** fixed：内网IP。 floating：弹性公网IP。 **默认取值：** 不涉及。
    * ip  **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    * status  **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
    * agentState  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - 运行中。 - 异常。 - 安装中。 - 安装失败。 - 已卸载。 - 未安装。 **默认取值：** 不涉及。
    * imageName  **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * osType  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tag  **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
    * chargingMode  **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    * flavorName  **参数解释：** 规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipList  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * isCollected  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：查询已收藏分组管理的资源关联。 - false：查询未收藏分组管理的资源关联。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationId' => 'string',
            'componentId' => 'string',
            'groupId' => 'string',
            'vendor' => 'string',
            'type' => 'string',
            'limit' => 'int',
            'offset' => 'string',
            'resourceIdList' => 'string[]',
            'name' => 'string',
            'regionId' => 'string',
            'azId' => 'string',
            'ipType' => 'string',
            'ip' => 'string',
            'status' => 'string',
            'agentState' => 'string',
            'imageName' => 'string',
            'osType' => 'string',
            'tag' => 'string',
            'chargingMode' => 'string',
            'flavorName' => 'string',
            'ipList' => 'string[]',
            'isCollected' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationId  **参数解释：** 分组关联的应用id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的应用id。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 组件id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的组件id。 **默认取值：** 不涉及。
    * groupId  **参数解释：** 分组id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 厂商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    * limit  **参数解释：** 用于分页查询，查询数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * offset  **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    * resourceIdList  **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    * name  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id列表。 **约束限制：** 不涉及。 **取值范围：** 区域id列表，最大值100。 **默认取值：** 不涉及。
    * azId  **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipType  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** fixed：内网IP。 floating：弹性公网IP。 **默认取值：** 不涉及。
    * ip  **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    * status  **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
    * agentState  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - 运行中。 - 异常。 - 安装中。 - 安装失败。 - 已卸载。 - 未安装。 **默认取值：** 不涉及。
    * imageName  **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * osType  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tag  **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
    * chargingMode  **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    * flavorName  **参数解释：** 规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipList  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * isCollected  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：查询已收藏分组管理的资源关联。 - false：查询未收藏分组管理的资源关联。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationId' => null,
        'componentId' => null,
        'groupId' => null,
        'vendor' => null,
        'type' => null,
        'limit' => 'int32',
        'offset' => null,
        'resourceIdList' => null,
        'name' => null,
        'regionId' => null,
        'azId' => null,
        'ipType' => null,
        'ip' => null,
        'status' => null,
        'agentState' => null,
        'imageName' => null,
        'osType' => null,
        'tag' => null,
        'chargingMode' => null,
        'flavorName' => null,
        'ipList' => null,
        'isCollected' => null
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
    * applicationId  **参数解释：** 分组关联的应用id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的应用id。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 组件id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的组件id。 **默认取值：** 不涉及。
    * groupId  **参数解释：** 分组id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 厂商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    * limit  **参数解释：** 用于分页查询，查询数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * offset  **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    * resourceIdList  **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    * name  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id列表。 **约束限制：** 不涉及。 **取值范围：** 区域id列表，最大值100。 **默认取值：** 不涉及。
    * azId  **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipType  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** fixed：内网IP。 floating：弹性公网IP。 **默认取值：** 不涉及。
    * ip  **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    * status  **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
    * agentState  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - 运行中。 - 异常。 - 安装中。 - 安装失败。 - 已卸载。 - 未安装。 **默认取值：** 不涉及。
    * imageName  **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * osType  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tag  **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
    * chargingMode  **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    * flavorName  **参数解释：** 规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipList  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * isCollected  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：查询已收藏分组管理的资源关联。 - false：查询未收藏分组管理的资源关联。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationId' => 'application_id',
            'componentId' => 'component_id',
            'groupId' => 'group_id',
            'vendor' => 'vendor',
            'type' => 'type',
            'limit' => 'limit',
            'offset' => 'offset',
            'resourceIdList' => 'resource_id_list',
            'name' => 'name',
            'regionId' => 'region_id',
            'azId' => 'az_id',
            'ipType' => 'ip_type',
            'ip' => 'ip',
            'status' => 'status',
            'agentState' => 'agent_state',
            'imageName' => 'image_name',
            'osType' => 'os_type',
            'tag' => 'tag',
            'chargingMode' => 'charging_mode',
            'flavorName' => 'flavor_name',
            'ipList' => 'ip_list',
            'isCollected' => 'is_collected'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationId  **参数解释：** 分组关联的应用id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的应用id。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 组件id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的组件id。 **默认取值：** 不涉及。
    * groupId  **参数解释：** 分组id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 厂商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    * limit  **参数解释：** 用于分页查询，查询数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * offset  **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    * resourceIdList  **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    * name  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id列表。 **约束限制：** 不涉及。 **取值范围：** 区域id列表，最大值100。 **默认取值：** 不涉及。
    * azId  **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipType  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** fixed：内网IP。 floating：弹性公网IP。 **默认取值：** 不涉及。
    * ip  **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    * status  **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
    * agentState  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - 运行中。 - 异常。 - 安装中。 - 安装失败。 - 已卸载。 - 未安装。 **默认取值：** 不涉及。
    * imageName  **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * osType  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tag  **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
    * chargingMode  **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    * flavorName  **参数解释：** 规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipList  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * isCollected  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：查询已收藏分组管理的资源关联。 - false：查询未收藏分组管理的资源关联。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationId' => 'setApplicationId',
            'componentId' => 'setComponentId',
            'groupId' => 'setGroupId',
            'vendor' => 'setVendor',
            'type' => 'setType',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'resourceIdList' => 'setResourceIdList',
            'name' => 'setName',
            'regionId' => 'setRegionId',
            'azId' => 'setAzId',
            'ipType' => 'setIpType',
            'ip' => 'setIp',
            'status' => 'setStatus',
            'agentState' => 'setAgentState',
            'imageName' => 'setImageName',
            'osType' => 'setOsType',
            'tag' => 'setTag',
            'chargingMode' => 'setChargingMode',
            'flavorName' => 'setFlavorName',
            'ipList' => 'setIpList',
            'isCollected' => 'setIsCollected'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationId  **参数解释：** 分组关联的应用id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的应用id。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 组件id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的组件id。 **默认取值：** 不涉及。
    * groupId  **参数解释：** 分组id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * vendor  **参数解释：** 厂商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    * limit  **参数解释：** 用于分页查询，查询数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * offset  **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    * resourceIdList  **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    * name  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id列表。 **约束限制：** 不涉及。 **取值范围：** 区域id列表，最大值100。 **默认取值：** 不涉及。
    * azId  **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipType  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** fixed：内网IP。 floating：弹性公网IP。 **默认取值：** 不涉及。
    * ip  **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    * status  **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
    * agentState  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - 运行中。 - 异常。 - 安装中。 - 安装失败。 - 已卸载。 - 未安装。 **默认取值：** 不涉及。
    * imageName  **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * osType  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * tag  **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
    * chargingMode  **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    * flavorName  **参数解释：** 规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipList  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * isCollected  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：查询已收藏分组管理的资源关联。 - false：查询未收藏分组管理的资源关联。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationId' => 'getApplicationId',
            'componentId' => 'getComponentId',
            'groupId' => 'getGroupId',
            'vendor' => 'getVendor',
            'type' => 'getType',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'resourceIdList' => 'getResourceIdList',
            'name' => 'getName',
            'regionId' => 'getRegionId',
            'azId' => 'getAzId',
            'ipType' => 'getIpType',
            'ip' => 'getIp',
            'status' => 'getStatus',
            'agentState' => 'getAgentState',
            'imageName' => 'getImageName',
            'osType' => 'getOsType',
            'tag' => 'getTag',
            'chargingMode' => 'getChargingMode',
            'flavorName' => 'getFlavorName',
            'ipList' => 'getIpList',
            'isCollected' => 'getIsCollected'
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
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['resourceIdList'] = isset($data['resourceIdList']) ? $data['resourceIdList'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['azId'] = isset($data['azId']) ? $data['azId'] : null;
        $this->container['ipType'] = isset($data['ipType']) ? $data['ipType'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['agentState'] = isset($data['agentState']) ? $data['agentState'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['flavorName'] = isset($data['flavorName']) ? $data['flavorName'] : null;
        $this->container['ipList'] = isset($data['ipList']) ? $data['ipList'] : null;
        $this->container['isCollected'] = isset($data['isCollected']) ? $data['isCollected'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vendor'] === null) {
            $invalidProperties[] = "'vendor' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
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
    * Gets applicationId
    *  **参数解释：** 分组关联的应用id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的应用id。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId **参数解释：** 分组关联的应用id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的应用id。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets componentId
    *  **参数解释：** 组件id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的组件id。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId **参数解释：** 组件id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 分组关联的组件id。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释：** 分组id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释：** 分组id。 **约束限制：** 应用id和分组id，组件id不能共存,且必填其中一个。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets vendor
    *  **参数解释：** 厂商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
    * Sets vendor
    *
    * @param string $vendor **参数解释：** 厂商信息。 **约束限制：** 不涉及。 **取值范围：** - RMS：华为云厂商。 - ALI：阿里云厂商。 - OTHER：其他厂商。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 自定义，云资源类型。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 用于分页查询，查询数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释：** 用于分页查询，查询数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets resourceIdList
    *  **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    *
    * @return string[]|null
    */
    public function getResourceIdList()
    {
        return $this->container['resourceIdList'];
    }

    /**
    * Sets resourceIdList
    *
    * @param string[]|null $resourceIdList **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setResourceIdList($resourceIdList)
    {
        $this->container['resourceIdList'] = $resourceIdList;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
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
    * @param string|null $name **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 自定义，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets regionId
    *  **参数解释：** 区域id列表。 **约束限制：** 不涉及。 **取值范围：** 区域id列表，最大值100。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId **参数解释：** 区域id列表。 **约束限制：** 不涉及。 **取值范围：** 区域id列表，最大值100。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets azId
    *  **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getAzId()
    {
        return $this->container['azId'];
    }

    /**
    * Sets azId
    *
    * @param string|null $azId **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAzId($azId)
    {
        $this->container['azId'] = $azId;
        return $this;
    }

    /**
    * Gets ipType
    *  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** fixed：内网IP。 floating：弹性公网IP。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getIpType()
    {
        return $this->container['ipType'];
    }

    /**
    * Sets ipType
    *
    * @param string|null $ipType **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** fixed：内网IP。 floating：弹性公网IP。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setIpType($ipType)
    {
        $this->container['ipType'] = $ipType;
        return $this;
    }

    /**
    * Gets ip
    *  **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
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
    * @param string|null $status **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets agentState
    *  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - 运行中。 - 异常。 - 安装中。 - 安装失败。 - 已卸载。 - 未安装。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getAgentState()
    {
        return $this->container['agentState'];
    }

    /**
    * Sets agentState
    *
    * @param string|null $agentState **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - 运行中。 - 异常。 - 安装中。 - 安装失败。 - 已卸载。 - 未安装。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAgentState($agentState)
    {
        $this->container['agentState'] = $agentState;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets tag
    *  **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
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
    * @param string|null $tag **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets flavorName
    *  **参数解释：** 规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getFlavorName()
    {
        return $this->container['flavorName'];
    }

    /**
    * Sets flavorName
    *
    * @param string|null $flavorName **参数解释：** 规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setFlavorName($flavorName)
    {
        $this->container['flavorName'] = $flavorName;
        return $this;
    }

    /**
    * Gets ipList
    *  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]|null
    */
    public function getIpList()
    {
        return $this->container['ipList'];
    }

    /**
    * Sets ipList
    *
    * @param string[]|null $ipList **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setIpList($ipList)
    {
        $this->container['ipList'] = $ipList;
        return $this;
    }

    /**
    * Gets isCollected
    *  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：查询已收藏分组管理的资源关联。 - false：查询未收藏分组管理的资源关联。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getIsCollected()
    {
        return $this->container['isCollected'];
    }

    /**
    * Sets isCollected
    *
    * @param bool|null $isCollected **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：查询已收藏分组管理的资源关联。 - false：查询未收藏分组管理的资源关联。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setIsCollected($isCollected)
    {
        $this->container['isCollected'] = $isCollected;
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

