<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * provider  **参数解释：** 云服务名称。 **约束限制：** - 创建的云资源数量（count字段对应的值）大于1时，可以使用“自动排序”和“正则排序”设置有序的云资源名称。 - 创建的云资源数量（count字段对应的值）大于1时，为区分不同云资源，创建过程中系统会自动在名称后加“-0000”的类似标记。若用户在名称后已指定“-0000”的类似标记，系统将从该标记后继续顺序递增编号。故此时名称的长度为[1-59]个字符。 **取值范围：** - 只能由中文字符、英文字母、数字及“_”、“-”、“.”组成，且长度为[1-128]个英文字符或[1-64]个中文字符。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    * limit  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * marker  **参数解释：** 用于分页查询。 **约束限制：** 不涉及。 **取值范围：** 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页。 **默认取值：** 不涉及。
    * resourceIdList  **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    * ipList  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 列表，最大值100。 **默认取值：** 不涉及。
    * name  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 关联的区域region的id。 **默认取值：** 不涉及。
    * azId  **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipType  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** - fixed：内网IP。 - floating：弹性公网IP。 **默认取值：** 不涉及。
    * ip  **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    * status  **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
    * agentState  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。 **默认取值：** 不涉及。
    * imageName  **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * osType  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** - windows：windows操作系统类型。 - linux：linux操作系统类型。 **默认取值：** 不涉及。
    * tag  **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
    * tagKey  **参数解释：** 云资源的标签key。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * groupId  **参数解释：** 云资源下的分组ID。 **约束限制：** 传分组id，就查询分组下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 云资源下组件ID。 **约束限制：** 传组件id，就查询组件下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * applicationId  **参数解释：** 云资源下应用ID。 **约束限制：** 传应用id，就查询应用下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cceClusterId  **参数解释：** cce集群ID。 **约束限制：** 不涉及。 **取值范围：** 资源属于的cce的ID。 **默认取值：** 不涉及。
    * vpcId  **参数解释：** 待创建云资源所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * epId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    * isDelegated  **参数解释：** 是否已托管。 **约束限制：** 不涉及。 **取值范围：** - true：已经托管。 - false：未托管。 **默认取值：** 不涉及。
    * isCollected  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：已收藏的企业项目。 - false：未收藏的企业项目。 **默认取值：** 不涉及。
    * flavorName  **参数解释：** 云资源规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * chargingMode  **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    * offset  **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    * enterpriseProjectId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * orderField  **参数解释：** 根据排序字段对资源进行排序显示。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * direction  **参数解释：** 排序。 **约束限制：** 不涉及。 **取值范围：** - DESC:倒序。 - ASC:正序。 **默认取值：** 不涉及。
    * showAssociatedGroups  **参数解释：** 显示关联应用。 **约束限制：** 不涉及。 **取值范围：** - true：显示关联应用信息。 - false：不显示关联应用信息。 **默认取值：** 不涉及。
    * operable  **参数解释：** 用户定义资源是否可运维实例。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。 **默认取值：** 不涉及。
    * createSince  **参数解释：** 创建时间中的开始日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * createUntil  **参数解释：** 创建时间中的结束日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'provider' => 'string',
            'type' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'resourceIdList' => 'string[]',
            'ipList' => 'string[]',
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
            'tagKey' => 'string',
            'groupId' => 'string',
            'componentId' => 'string',
            'applicationId' => 'string',
            'cceClusterId' => 'string',
            'vpcId' => 'string',
            'epId' => 'string',
            'isDelegated' => 'bool',
            'isCollected' => 'bool',
            'flavorName' => 'string',
            'chargingMode' => 'string',
            'offset' => 'string',
            'enterpriseProjectId' => 'string',
            'orderField' => 'string',
            'direction' => 'string',
            'showAssociatedGroups' => 'string',
            'operable' => 'string',
            'createSince' => 'string',
            'createUntil' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * provider  **参数解释：** 云服务名称。 **约束限制：** - 创建的云资源数量（count字段对应的值）大于1时，可以使用“自动排序”和“正则排序”设置有序的云资源名称。 - 创建的云资源数量（count字段对应的值）大于1时，为区分不同云资源，创建过程中系统会自动在名称后加“-0000”的类似标记。若用户在名称后已指定“-0000”的类似标记，系统将从该标记后继续顺序递增编号。故此时名称的长度为[1-59]个字符。 **取值范围：** - 只能由中文字符、英文字母、数字及“_”、“-”、“.”组成，且长度为[1-128]个英文字符或[1-64]个中文字符。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    * limit  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * marker  **参数解释：** 用于分页查询。 **约束限制：** 不涉及。 **取值范围：** 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页。 **默认取值：** 不涉及。
    * resourceIdList  **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    * ipList  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 列表，最大值100。 **默认取值：** 不涉及。
    * name  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 关联的区域region的id。 **默认取值：** 不涉及。
    * azId  **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipType  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** - fixed：内网IP。 - floating：弹性公网IP。 **默认取值：** 不涉及。
    * ip  **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    * status  **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
    * agentState  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。 **默认取值：** 不涉及。
    * imageName  **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * osType  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** - windows：windows操作系统类型。 - linux：linux操作系统类型。 **默认取值：** 不涉及。
    * tag  **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
    * tagKey  **参数解释：** 云资源的标签key。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * groupId  **参数解释：** 云资源下的分组ID。 **约束限制：** 传分组id，就查询分组下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 云资源下组件ID。 **约束限制：** 传组件id，就查询组件下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * applicationId  **参数解释：** 云资源下应用ID。 **约束限制：** 传应用id，就查询应用下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cceClusterId  **参数解释：** cce集群ID。 **约束限制：** 不涉及。 **取值范围：** 资源属于的cce的ID。 **默认取值：** 不涉及。
    * vpcId  **参数解释：** 待创建云资源所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * epId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    * isDelegated  **参数解释：** 是否已托管。 **约束限制：** 不涉及。 **取值范围：** - true：已经托管。 - false：未托管。 **默认取值：** 不涉及。
    * isCollected  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：已收藏的企业项目。 - false：未收藏的企业项目。 **默认取值：** 不涉及。
    * flavorName  **参数解释：** 云资源规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * chargingMode  **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    * offset  **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    * enterpriseProjectId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * orderField  **参数解释：** 根据排序字段对资源进行排序显示。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * direction  **参数解释：** 排序。 **约束限制：** 不涉及。 **取值范围：** - DESC:倒序。 - ASC:正序。 **默认取值：** 不涉及。
    * showAssociatedGroups  **参数解释：** 显示关联应用。 **约束限制：** 不涉及。 **取值范围：** - true：显示关联应用信息。 - false：不显示关联应用信息。 **默认取值：** 不涉及。
    * operable  **参数解释：** 用户定义资源是否可运维实例。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。 **默认取值：** 不涉及。
    * createSince  **参数解释：** 创建时间中的开始日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * createUntil  **参数解释：** 创建时间中的结束日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'provider' => null,
        'type' => null,
        'limit' => 'int32',
        'marker' => null,
        'resourceIdList' => null,
        'ipList' => null,
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
        'tagKey' => null,
        'groupId' => null,
        'componentId' => null,
        'applicationId' => null,
        'cceClusterId' => null,
        'vpcId' => null,
        'epId' => null,
        'isDelegated' => null,
        'isCollected' => null,
        'flavorName' => null,
        'chargingMode' => null,
        'offset' => null,
        'enterpriseProjectId' => null,
        'orderField' => null,
        'direction' => null,
        'showAssociatedGroups' => null,
        'operable' => null,
        'createSince' => null,
        'createUntil' => null
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
    * provider  **参数解释：** 云服务名称。 **约束限制：** - 创建的云资源数量（count字段对应的值）大于1时，可以使用“自动排序”和“正则排序”设置有序的云资源名称。 - 创建的云资源数量（count字段对应的值）大于1时，为区分不同云资源，创建过程中系统会自动在名称后加“-0000”的类似标记。若用户在名称后已指定“-0000”的类似标记，系统将从该标记后继续顺序递增编号。故此时名称的长度为[1-59]个字符。 **取值范围：** - 只能由中文字符、英文字母、数字及“_”、“-”、“.”组成，且长度为[1-128]个英文字符或[1-64]个中文字符。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    * limit  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * marker  **参数解释：** 用于分页查询。 **约束限制：** 不涉及。 **取值范围：** 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页。 **默认取值：** 不涉及。
    * resourceIdList  **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    * ipList  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 列表，最大值100。 **默认取值：** 不涉及。
    * name  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 关联的区域region的id。 **默认取值：** 不涉及。
    * azId  **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipType  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** - fixed：内网IP。 - floating：弹性公网IP。 **默认取值：** 不涉及。
    * ip  **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    * status  **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
    * agentState  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。 **默认取值：** 不涉及。
    * imageName  **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * osType  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** - windows：windows操作系统类型。 - linux：linux操作系统类型。 **默认取值：** 不涉及。
    * tag  **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
    * tagKey  **参数解释：** 云资源的标签key。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * groupId  **参数解释：** 云资源下的分组ID。 **约束限制：** 传分组id，就查询分组下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 云资源下组件ID。 **约束限制：** 传组件id，就查询组件下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * applicationId  **参数解释：** 云资源下应用ID。 **约束限制：** 传应用id，就查询应用下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cceClusterId  **参数解释：** cce集群ID。 **约束限制：** 不涉及。 **取值范围：** 资源属于的cce的ID。 **默认取值：** 不涉及。
    * vpcId  **参数解释：** 待创建云资源所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * epId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    * isDelegated  **参数解释：** 是否已托管。 **约束限制：** 不涉及。 **取值范围：** - true：已经托管。 - false：未托管。 **默认取值：** 不涉及。
    * isCollected  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：已收藏的企业项目。 - false：未收藏的企业项目。 **默认取值：** 不涉及。
    * flavorName  **参数解释：** 云资源规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * chargingMode  **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    * offset  **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    * enterpriseProjectId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * orderField  **参数解释：** 根据排序字段对资源进行排序显示。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * direction  **参数解释：** 排序。 **约束限制：** 不涉及。 **取值范围：** - DESC:倒序。 - ASC:正序。 **默认取值：** 不涉及。
    * showAssociatedGroups  **参数解释：** 显示关联应用。 **约束限制：** 不涉及。 **取值范围：** - true：显示关联应用信息。 - false：不显示关联应用信息。 **默认取值：** 不涉及。
    * operable  **参数解释：** 用户定义资源是否可运维实例。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。 **默认取值：** 不涉及。
    * createSince  **参数解释：** 创建时间中的开始日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * createUntil  **参数解释：** 创建时间中的结束日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'provider' => 'provider',
            'type' => 'type',
            'limit' => 'limit',
            'marker' => 'marker',
            'resourceIdList' => 'resource_id_list',
            'ipList' => 'ip_list',
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
            'tagKey' => 'tag_key',
            'groupId' => 'group_id',
            'componentId' => 'component_id',
            'applicationId' => 'application_id',
            'cceClusterId' => 'cce_cluster_id',
            'vpcId' => 'vpc_id',
            'epId' => 'ep_id',
            'isDelegated' => 'is_delegated',
            'isCollected' => 'is_collected',
            'flavorName' => 'flavor_name',
            'chargingMode' => 'charging_mode',
            'offset' => 'offset',
            'enterpriseProjectId' => 'enterprise_project_id',
            'orderField' => 'order_field',
            'direction' => 'direction',
            'showAssociatedGroups' => 'show_associated_groups',
            'operable' => 'operable',
            'createSince' => 'create_since',
            'createUntil' => 'create_until'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * provider  **参数解释：** 云服务名称。 **约束限制：** - 创建的云资源数量（count字段对应的值）大于1时，可以使用“自动排序”和“正则排序”设置有序的云资源名称。 - 创建的云资源数量（count字段对应的值）大于1时，为区分不同云资源，创建过程中系统会自动在名称后加“-0000”的类似标记。若用户在名称后已指定“-0000”的类似标记，系统将从该标记后继续顺序递增编号。故此时名称的长度为[1-59]个字符。 **取值范围：** - 只能由中文字符、英文字母、数字及“_”、“-”、“.”组成，且长度为[1-128]个英文字符或[1-64]个中文字符。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    * limit  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * marker  **参数解释：** 用于分页查询。 **约束限制：** 不涉及。 **取值范围：** 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页。 **默认取值：** 不涉及。
    * resourceIdList  **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    * ipList  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 列表，最大值100。 **默认取值：** 不涉及。
    * name  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 关联的区域region的id。 **默认取值：** 不涉及。
    * azId  **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipType  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** - fixed：内网IP。 - floating：弹性公网IP。 **默认取值：** 不涉及。
    * ip  **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    * status  **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
    * agentState  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。 **默认取值：** 不涉及。
    * imageName  **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * osType  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** - windows：windows操作系统类型。 - linux：linux操作系统类型。 **默认取值：** 不涉及。
    * tag  **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
    * tagKey  **参数解释：** 云资源的标签key。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * groupId  **参数解释：** 云资源下的分组ID。 **约束限制：** 传分组id，就查询分组下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 云资源下组件ID。 **约束限制：** 传组件id，就查询组件下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * applicationId  **参数解释：** 云资源下应用ID。 **约束限制：** 传应用id，就查询应用下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cceClusterId  **参数解释：** cce集群ID。 **约束限制：** 不涉及。 **取值范围：** 资源属于的cce的ID。 **默认取值：** 不涉及。
    * vpcId  **参数解释：** 待创建云资源所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * epId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    * isDelegated  **参数解释：** 是否已托管。 **约束限制：** 不涉及。 **取值范围：** - true：已经托管。 - false：未托管。 **默认取值：** 不涉及。
    * isCollected  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：已收藏的企业项目。 - false：未收藏的企业项目。 **默认取值：** 不涉及。
    * flavorName  **参数解释：** 云资源规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * chargingMode  **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    * offset  **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    * enterpriseProjectId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * orderField  **参数解释：** 根据排序字段对资源进行排序显示。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * direction  **参数解释：** 排序。 **约束限制：** 不涉及。 **取值范围：** - DESC:倒序。 - ASC:正序。 **默认取值：** 不涉及。
    * showAssociatedGroups  **参数解释：** 显示关联应用。 **约束限制：** 不涉及。 **取值范围：** - true：显示关联应用信息。 - false：不显示关联应用信息。 **默认取值：** 不涉及。
    * operable  **参数解释：** 用户定义资源是否可运维实例。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。 **默认取值：** 不涉及。
    * createSince  **参数解释：** 创建时间中的开始日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * createUntil  **参数解释：** 创建时间中的结束日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'provider' => 'setProvider',
            'type' => 'setType',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'resourceIdList' => 'setResourceIdList',
            'ipList' => 'setIpList',
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
            'tagKey' => 'setTagKey',
            'groupId' => 'setGroupId',
            'componentId' => 'setComponentId',
            'applicationId' => 'setApplicationId',
            'cceClusterId' => 'setCceClusterId',
            'vpcId' => 'setVpcId',
            'epId' => 'setEpId',
            'isDelegated' => 'setIsDelegated',
            'isCollected' => 'setIsCollected',
            'flavorName' => 'setFlavorName',
            'chargingMode' => 'setChargingMode',
            'offset' => 'setOffset',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'orderField' => 'setOrderField',
            'direction' => 'setDirection',
            'showAssociatedGroups' => 'setShowAssociatedGroups',
            'operable' => 'setOperable',
            'createSince' => 'setCreateSince',
            'createUntil' => 'setCreateUntil'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * provider  **参数解释：** 云服务名称。 **约束限制：** - 创建的云资源数量（count字段对应的值）大于1时，可以使用“自动排序”和“正则排序”设置有序的云资源名称。 - 创建的云资源数量（count字段对应的值）大于1时，为区分不同云资源，创建过程中系统会自动在名称后加“-0000”的类似标记。若用户在名称后已指定“-0000”的类似标记，系统将从该标记后继续顺序递增编号。故此时名称的长度为[1-59]个字符。 **取值范围：** - 只能由中文字符、英文字母、数字及“_”、“-”、“.”组成，且长度为[1-128]个英文字符或[1-64]个中文字符。 **默认取值：** 不涉及。
    * type  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
    * limit  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * marker  **参数解释：** 用于分页查询。 **约束限制：** 不涉及。 **取值范围：** 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页。 **默认取值：** 不涉及。
    * resourceIdList  **参数解释：** 资源id列表。 **约束限制：** 不涉及。 **取值范围：** 资源id列表，最大值100。 **默认取值：** 不涉及。
    * ipList  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 列表，最大值100。 **默认取值：** 不涉及。
    * name  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
    * regionId  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 关联的区域region的id。 **默认取值：** 不涉及。
    * azId  **参数解释：** 可用区id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ipType  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** - fixed：内网IP。 - floating：弹性公网IP。 **默认取值：** 不涉及。
    * ip  **参数解释：** 云资源IP。 **约束限制：** 不涉及。 **取值范围：** IPv4地址过滤结果，匹配规则为模糊匹配。 **默认取值：** 不涉及。
    * status  **参数解释：** 云资源状态。 **约束限制：** 不涉及。 **取值范围：** 请选择[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws)[[弹性云服务器 ECS](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)](tag:hws_hk)中存在的云服务器状态。 **默认取值：** 不涉及。
    * agentState  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。 **默认取值：** 不涉及。
    * imageName  **参数解释：** 镜像名称，模糊匹配。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * osType  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** - windows：windows操作系统类型。 - linux：linux操作系统类型。 **默认取值：** 不涉及。
    * tag  **参数解释：** 云资源的标签。 **约束限制：** 标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。 **取值范围：** 标签命名时，需满足如下要求：标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）以及中文字符。 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（）、中划线（-）、小数点（.）以及中文字符。 **默认取值：** 不涉及。
    * tagKey  **参数解释：** 云资源的标签key。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * groupId  **参数解释：** 云资源下的分组ID。 **约束限制：** 传分组id，就查询分组下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * componentId  **参数解释：** 云资源下组件ID。 **约束限制：** 传组件id，就查询组件下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * applicationId  **参数解释：** 云资源下应用ID。 **约束限制：** 传应用id，就查询应用下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * cceClusterId  **参数解释：** cce集群ID。 **约束限制：** 不涉及。 **取值范围：** 资源属于的cce的ID。 **默认取值：** 不涉及。
    * vpcId  **参数解释：** 待创建云资源所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * epId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    * isDelegated  **参数解释：** 是否已托管。 **约束限制：** 不涉及。 **取值范围：** - true：已经托管。 - false：未托管。 **默认取值：** 不涉及。
    * isCollected  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：已收藏的企业项目。 - false：未收藏的企业项目。 **默认取值：** 不涉及。
    * flavorName  **参数解释：** 云资源规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * chargingMode  **参数解释：** 云服务器的计费类型。 **约束限制：** 不涉及。 **取值范围：** 计费模式： - 0：按需计费。 - 1：包年包月。 - 2：竞价计费。 **默认取值：** 不涉及。
    * offset  **参数解释：** 分页查询偏移量，表示从此偏移量开始查询。 **约束限制：** 不涉及。 **取值范围：** 0-2147483647。 **默认取值：** 0。
    * enterpriseProjectId  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * orderField  **参数解释：** 根据排序字段对资源进行排序显示。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * direction  **参数解释：** 排序。 **约束限制：** 不涉及。 **取值范围：** - DESC:倒序。 - ASC:正序。 **默认取值：** 不涉及。
    * showAssociatedGroups  **参数解释：** 显示关联应用。 **约束限制：** 不涉及。 **取值范围：** - true：显示关联应用信息。 - false：不显示关联应用信息。 **默认取值：** 不涉及。
    * operable  **参数解释：** 用户定义资源是否可运维实例。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。 **默认取值：** 不涉及。
    * createSince  **参数解释：** 创建时间中的开始日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * createUntil  **参数解释：** 创建时间中的结束日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'provider' => 'getProvider',
            'type' => 'getType',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'resourceIdList' => 'getResourceIdList',
            'ipList' => 'getIpList',
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
            'tagKey' => 'getTagKey',
            'groupId' => 'getGroupId',
            'componentId' => 'getComponentId',
            'applicationId' => 'getApplicationId',
            'cceClusterId' => 'getCceClusterId',
            'vpcId' => 'getVpcId',
            'epId' => 'getEpId',
            'isDelegated' => 'getIsDelegated',
            'isCollected' => 'getIsCollected',
            'flavorName' => 'getFlavorName',
            'chargingMode' => 'getChargingMode',
            'offset' => 'getOffset',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'orderField' => 'getOrderField',
            'direction' => 'getDirection',
            'showAssociatedGroups' => 'getShowAssociatedGroups',
            'operable' => 'getOperable',
            'createSince' => 'getCreateSince',
            'createUntil' => 'getCreateUntil'
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
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['resourceIdList'] = isset($data['resourceIdList']) ? $data['resourceIdList'] : null;
        $this->container['ipList'] = isset($data['ipList']) ? $data['ipList'] : null;
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
        $this->container['tagKey'] = isset($data['tagKey']) ? $data['tagKey'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['cceClusterId'] = isset($data['cceClusterId']) ? $data['cceClusterId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['epId'] = isset($data['epId']) ? $data['epId'] : null;
        $this->container['isDelegated'] = isset($data['isDelegated']) ? $data['isDelegated'] : null;
        $this->container['isCollected'] = isset($data['isCollected']) ? $data['isCollected'] : null;
        $this->container['flavorName'] = isset($data['flavorName']) ? $data['flavorName'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['orderField'] = isset($data['orderField']) ? $data['orderField'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['showAssociatedGroups'] = isset($data['showAssociatedGroups']) ? $data['showAssociatedGroups'] : null;
        $this->container['operable'] = isset($data['operable']) ? $data['operable'] : null;
        $this->container['createSince'] = isset($data['createSince']) ? $data['createSince'] : null;
        $this->container['createUntil'] = isset($data['createUntil']) ? $data['createUntil'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (($this->container['limit'] < 1)) {
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
    * Gets provider
    *  **参数解释：** 云服务名称。 **约束限制：** - 创建的云资源数量（count字段对应的值）大于1时，可以使用“自动排序”和“正则排序”设置有序的云资源名称。 - 创建的云资源数量（count字段对应的值）大于1时，为区分不同云资源，创建过程中系统会自动在名称后加“-0000”的类似标记。若用户在名称后已指定“-0000”的类似标记，系统将从该标记后继续顺序递增编号。故此时名称的长度为[1-59]个字符。 **取值范围：** - 只能由中文字符、英文字母、数字及“_”、“-”、“.”组成，且长度为[1-128]个英文字符或[1-64]个中文字符。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string $provider **参数解释：** 云服务名称。 **约束限制：** - 创建的云资源数量（count字段对应的值）大于1时，可以使用“自动排序”和“正则排序”设置有序的云资源名称。 - 创建的云资源数量（count字段对应的值）大于1时，为区分不同云资源，创建过程中系统会自动在名称后加“-0000”的类似标记。若用户在名称后已指定“-0000”的类似标记，系统将从该标记后继续顺序递增编号。故此时名称的长度为[1-59]个字符。 **取值范围：** - 只能由中文字符、英文字母、数字及“_”、“-”、“.”组成，且长度为[1-128]个英文字符或[1-64]个中文字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
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
    * @param string $type **参数解释：** 资源类型。 **约束限制：** 不涉及。 **取值范围：** 资源类型较多，根据实际业务选择资源类型、常用资源类型如下： - cloudservers：弹性云服务器。 - servers：裸金属服务器。 - clusters：云容器引擎。 - instances：云数据库。 **默认取值：** 不涉及。
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
    *  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
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
    * @param int $limit **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  **参数解释：** 用于分页查询。 **约束限制：** 不涉及。 **取值范围：** 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker **参数解释：** 用于分页查询。 **约束限制：** 不涉及。 **取值范围：** 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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
    * Gets ipList
    *  **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 列表，最大值100。 **默认取值：** 不涉及。
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
    * @param string[]|null $ipList **参数解释：** ip列表。 **约束限制：** 不涉及。 **取值范围：** 列表，最大值100。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setIpList($ipList)
    {
        $this->container['ipList'] = $ipList;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
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
    * @param string|null $name **参数解释：** 云资源名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，可参考：裸金属服务器BMS。 **默认取值：** 不涉及。
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
    *  **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 关联的区域region的id。 **默认取值：** 不涉及。
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
    * @param string|null $regionId **参数解释：** 区域id。 **约束限制：** 不涉及。 **取值范围：** 关联的区域region的id。 **默认取值：** 不涉及。
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
    *  **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** - fixed：内网IP。 - floating：弹性公网IP。 **默认取值：** 不涉及。
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
    * @param string|null $ipType **参数解释：** ip类型。 **约束限制：** 不涉及。 **取值范围：** - fixed：内网IP。 - floating：弹性公网IP。 **默认取值：** 不涉及。
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
    *  **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。 **默认取值：** 不涉及。
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
    * @param string|null $agentState **参数解释：** agent状态。 **约束限制：** 不涉及。 **取值范围：** - ONLINE：运行中。 - OFFLINE：异常。 - INSTALLING：安装中。 - FAILED：安装失败。 - UNINSTALLED：已卸载。 - null：未安装。 **默认取值：** 不涉及。
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
    *  **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** - windows：windows操作系统类型。 - linux：linux操作系统类型。 **默认取值：** 不涉及。
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
    * @param string|null $osType **参数解释：** 系统类型。 **约束限制：** 不涉及。 **取值范围：** - windows：windows操作系统类型。 - linux：linux操作系统类型。 **默认取值：** 不涉及。
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
    * Gets tagKey
    *  **参数解释：** 云资源的标签key。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getTagKey()
    {
        return $this->container['tagKey'];
    }

    /**
    * Sets tagKey
    *
    * @param string|null $tagKey **参数解释：** 云资源的标签key。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setTagKey($tagKey)
    {
        $this->container['tagKey'] = $tagKey;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释：** 云资源下的分组ID。 **约束限制：** 传分组id，就查询分组下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $groupId **参数解释：** 云资源下的分组ID。 **约束限制：** 传分组id，就查询分组下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets componentId
    *  **参数解释：** 云资源下组件ID。 **约束限制：** 传组件id，就查询组件下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $componentId **参数解释：** 云资源下组件ID。 **约束限制：** 传组件id，就查询组件下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets applicationId
    *  **参数解释：** 云资源下应用ID。 **约束限制：** 传应用id，就查询应用下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $applicationId **参数解释：** 云资源下应用ID。 **约束限制：** 传应用id，就查询应用下的资源数量。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets cceClusterId
    *  **参数解释：** cce集群ID。 **约束限制：** 不涉及。 **取值范围：** 资源属于的cce的ID。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getCceClusterId()
    {
        return $this->container['cceClusterId'];
    }

    /**
    * Sets cceClusterId
    *
    * @param string|null $cceClusterId **参数解释：** cce集群ID。 **约束限制：** 不涉及。 **取值范围：** 资源属于的cce的ID。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCceClusterId($cceClusterId)
    {
        $this->container['cceClusterId'] = $cceClusterId;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释：** 待创建云资源所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId **参数解释：** 待创建云资源所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets epId
    *  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getEpId()
    {
        return $this->container['epId'];
    }

    /**
    * Sets epId
    *
    * @param string|null $epId **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 请选择[[企业管理](https://support.huaweicloud.com/usermanual-em/em_eps_qs_0400.html)](tag:hws)[[企业管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-em/em_eps_qs_0400.html)](tag:hws_hk)中存在的项目ID。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setEpId($epId)
    {
        $this->container['epId'] = $epId;
        return $this;
    }

    /**
    * Gets isDelegated
    *  **参数解释：** 是否已托管。 **约束限制：** 不涉及。 **取值范围：** - true：已经托管。 - false：未托管。 **默认取值：** 不涉及。
    *
    * @return bool|null
    */
    public function getIsDelegated()
    {
        return $this->container['isDelegated'];
    }

    /**
    * Sets isDelegated
    *
    * @param bool|null $isDelegated **参数解释：** 是否已托管。 **约束限制：** 不涉及。 **取值范围：** - true：已经托管。 - false：未托管。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setIsDelegated($isDelegated)
    {
        $this->container['isDelegated'] = $isDelegated;
        return $this;
    }

    /**
    * Gets isCollected
    *  **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：已收藏的企业项目。 - false：未收藏的企业项目。 **默认取值：** 不涉及。
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
    * @param bool|null $isCollected **参数解释：** 是否已收藏。 **约束限制：** 不涉及。 **取值范围：** - true：已收藏的企业项目。 - false：未收藏的企业项目。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setIsCollected($isCollected)
    {
        $this->container['isCollected'] = $isCollected;
        return $this;
    }

    /**
    * Gets flavorName
    *  **参数解释：** 云资源规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string|null $flavorName **参数解释：** 云资源规格名称。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setFlavorName($flavorName)
    {
        $this->container['flavorName'] = $flavorName;
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
    * Gets enterpriseProjectId
    *  **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释：** 企业项目id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets orderField
    *  **参数解释：** 根据排序字段对资源进行排序显示。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getOrderField()
    {
        return $this->container['orderField'];
    }

    /**
    * Sets orderField
    *
    * @param string|null $orderField **参数解释：** 根据排序字段对资源进行排序显示。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOrderField($orderField)
    {
        $this->container['orderField'] = $orderField;
        return $this;
    }

    /**
    * Gets direction
    *  **参数解释：** 排序。 **约束限制：** 不涉及。 **取值范围：** - DESC:倒序。 - ASC:正序。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction **参数解释：** 排序。 **约束限制：** 不涉及。 **取值范围：** - DESC:倒序。 - ASC:正序。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets showAssociatedGroups
    *  **参数解释：** 显示关联应用。 **约束限制：** 不涉及。 **取值范围：** - true：显示关联应用信息。 - false：不显示关联应用信息。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getShowAssociatedGroups()
    {
        return $this->container['showAssociatedGroups'];
    }

    /**
    * Sets showAssociatedGroups
    *
    * @param string|null $showAssociatedGroups **参数解释：** 显示关联应用。 **约束限制：** 不涉及。 **取值范围：** - true：显示关联应用信息。 - false：不显示关联应用信息。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setShowAssociatedGroups($showAssociatedGroups)
    {
        $this->container['showAssociatedGroups'] = $showAssociatedGroups;
        return $this;
    }

    /**
    * Gets operable
    *  **参数解释：** 用户定义资源是否可运维实例。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getOperable()
    {
        return $this->container['operable'];
    }

    /**
    * Sets operable
    *
    * @param string|null $operable **参数解释：** 用户定义资源是否可运维实例。 **约束限制：** 不涉及。 **取值范围：** - ENABLE：可运维实例。 - DISABLE：不可运维实例operable字段不存在。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setOperable($operable)
    {
        $this->container['operable'] = $operable;
        return $this;
    }

    /**
    * Gets createSince
    *  **参数解释：** 创建时间中的开始日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getCreateSince()
    {
        return $this->container['createSince'];
    }

    /**
    * Sets createSince
    *
    * @param string|null $createSince **参数解释：** 创建时间中的开始日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCreateSince($createSince)
    {
        $this->container['createSince'] = $createSince;
        return $this;
    }

    /**
    * Gets createUntil
    *  **参数解释：** 创建时间中的结束日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getCreateUntil()
    {
        return $this->container['createUntil'];
    }

    /**
    * Sets createUntil
    *
    * @param string|null $createUntil **参数解释：** 创建时间中的结束日期，参考ISO8601标准格式。 **约束限制：** 开始日期和结束日期，至少有一个日期存在。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCreateUntil($createUntil)
    {
        $this->container['createUntil'] = $createUntil;
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

