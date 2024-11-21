<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeploymentTargets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'deployment_targets';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regions  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    * domainIds  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri 有且仅有一个存在。
    * domainIdsUri  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分隔，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。链接文件内容用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri有且仅有一个存在。
    * organizationalUnitIds  组织单元（Organizational Unit，缩写OU）ID列表，仅在资源栈集权限模型是SERVICE_MANAGED时，才允许指定该参数。  用户指定的Organization组织部署的ID列表，可以是根组织（Root）ID，也可以是某些组织单元的ID。  创建资源栈实例 （CreateStackInstances）API 必须指定该参数，该API 会异步校验OU IDs 的合法性，校验有效的OU IDs 及其所有非空子OU ID 都会被资源栈集记录管理。该API允许指定没有或者已经被资源栈集管理的OU IDs。   * 若资源栈集不自动部署，空子OU不会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号）。*   * 【暂不支持】若资源栈集开启自动部署，空子OU也会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号），自动部署仅针对成员账号变动，不针对其他组织结构变化，例如新增OU等，新增OU不会自动被资源栈集管理。*  部署或删除资源栈实例（DeployStackSet、UpdateStackInstances、DeleteStackInstances） API，只允许指定已经被资源栈集管理的OU IDs。若指定了没有被资源栈集记录管理的OU IDs，则会报错。  删除资源栈实例 （DeleteStackInstances）API 必须指定该参数。  用户可以通过获取资源栈集元数据（ShowStackSetMetadata）API ，获取通过创建资源栈实例（CreateStackInstances）API 请求指定过的OU IDs。  资源栈集不仅会部署到目标 OU 中的用户，同时还会部署所有子 OU 下的用户。指定该参数后，资源栈集会根据用户输入的 OU 列表下所有的用户信息（包含子 OU 下的用户）和region列表，以笛卡尔积的形式，选择资源栈实例进行创建或部署。  *资源栈集不会选择组织管理员作为部署目标，进行资源栈实例的创建或部署，即使组织管理员位于给与的组织或组织的 OU 中。*
    * domainIdFilterType  租户ID筛选类型，仅支持资源栈集权限模型是SERVICE_MANAGED时指定该参数。默认为NONE  用户可以指定不同的筛选类型，通过domain_ids或domain_ids_uri 指定或排除部署的用户信息，以增加或限制部署目标用户范围，实现不同的部署策略。     * `INTERSECTION` - 从所提供的 OUs 中选择指定用户进行部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `DIFFERENCE` - 从所提供的 OUs 中排除指定用户部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `UNION` - 除了部署到提供的 OUs 外，还将部署到指定的账户中。用户可以通过同时指定organizational_unit_ids 和 domain_ids/domain_ids_uri 以实现在同一请求中部署整个OU和来自不同OU的特定个人账户。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。创建资源栈实例（CreateStackInstances）除外，该API 不允许指定使用该类型。    * `NONE` - 只部署在指定 OUs 中的所有账户。该类型下domain_ids和domain_ids_uri字段必须为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regions' => 'string[]',
            'domainIds' => 'string[]',
            'domainIdsUri' => 'string',
            'organizationalUnitIds' => 'string[]',
            'domainIdFilterType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regions  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    * domainIds  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri 有且仅有一个存在。
    * domainIdsUri  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分隔，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。链接文件内容用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri有且仅有一个存在。
    * organizationalUnitIds  组织单元（Organizational Unit，缩写OU）ID列表，仅在资源栈集权限模型是SERVICE_MANAGED时，才允许指定该参数。  用户指定的Organization组织部署的ID列表，可以是根组织（Root）ID，也可以是某些组织单元的ID。  创建资源栈实例 （CreateStackInstances）API 必须指定该参数，该API 会异步校验OU IDs 的合法性，校验有效的OU IDs 及其所有非空子OU ID 都会被资源栈集记录管理。该API允许指定没有或者已经被资源栈集管理的OU IDs。   * 若资源栈集不自动部署，空子OU不会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号）。*   * 【暂不支持】若资源栈集开启自动部署，空子OU也会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号），自动部署仅针对成员账号变动，不针对其他组织结构变化，例如新增OU等，新增OU不会自动被资源栈集管理。*  部署或删除资源栈实例（DeployStackSet、UpdateStackInstances、DeleteStackInstances） API，只允许指定已经被资源栈集管理的OU IDs。若指定了没有被资源栈集记录管理的OU IDs，则会报错。  删除资源栈实例 （DeleteStackInstances）API 必须指定该参数。  用户可以通过获取资源栈集元数据（ShowStackSetMetadata）API ，获取通过创建资源栈实例（CreateStackInstances）API 请求指定过的OU IDs。  资源栈集不仅会部署到目标 OU 中的用户，同时还会部署所有子 OU 下的用户。指定该参数后，资源栈集会根据用户输入的 OU 列表下所有的用户信息（包含子 OU 下的用户）和region列表，以笛卡尔积的形式，选择资源栈实例进行创建或部署。  *资源栈集不会选择组织管理员作为部署目标，进行资源栈实例的创建或部署，即使组织管理员位于给与的组织或组织的 OU 中。*
    * domainIdFilterType  租户ID筛选类型，仅支持资源栈集权限模型是SERVICE_MANAGED时指定该参数。默认为NONE  用户可以指定不同的筛选类型，通过domain_ids或domain_ids_uri 指定或排除部署的用户信息，以增加或限制部署目标用户范围，实现不同的部署策略。     * `INTERSECTION` - 从所提供的 OUs 中选择指定用户进行部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `DIFFERENCE` - 从所提供的 OUs 中排除指定用户部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `UNION` - 除了部署到提供的 OUs 外，还将部署到指定的账户中。用户可以通过同时指定organizational_unit_ids 和 domain_ids/domain_ids_uri 以实现在同一请求中部署整个OU和来自不同OU的特定个人账户。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。创建资源栈实例（CreateStackInstances）除外，该API 不允许指定使用该类型。    * `NONE` - 只部署在指定 OUs 中的所有账户。该类型下domain_ids和domain_ids_uri字段必须为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regions' => null,
        'domainIds' => null,
        'domainIdsUri' => null,
        'organizationalUnitIds' => null,
        'domainIdFilterType' => null
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
    * regions  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    * domainIds  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri 有且仅有一个存在。
    * domainIdsUri  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分隔，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。链接文件内容用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri有且仅有一个存在。
    * organizationalUnitIds  组织单元（Organizational Unit，缩写OU）ID列表，仅在资源栈集权限模型是SERVICE_MANAGED时，才允许指定该参数。  用户指定的Organization组织部署的ID列表，可以是根组织（Root）ID，也可以是某些组织单元的ID。  创建资源栈实例 （CreateStackInstances）API 必须指定该参数，该API 会异步校验OU IDs 的合法性，校验有效的OU IDs 及其所有非空子OU ID 都会被资源栈集记录管理。该API允许指定没有或者已经被资源栈集管理的OU IDs。   * 若资源栈集不自动部署，空子OU不会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号）。*   * 【暂不支持】若资源栈集开启自动部署，空子OU也会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号），自动部署仅针对成员账号变动，不针对其他组织结构变化，例如新增OU等，新增OU不会自动被资源栈集管理。*  部署或删除资源栈实例（DeployStackSet、UpdateStackInstances、DeleteStackInstances） API，只允许指定已经被资源栈集管理的OU IDs。若指定了没有被资源栈集记录管理的OU IDs，则会报错。  删除资源栈实例 （DeleteStackInstances）API 必须指定该参数。  用户可以通过获取资源栈集元数据（ShowStackSetMetadata）API ，获取通过创建资源栈实例（CreateStackInstances）API 请求指定过的OU IDs。  资源栈集不仅会部署到目标 OU 中的用户，同时还会部署所有子 OU 下的用户。指定该参数后，资源栈集会根据用户输入的 OU 列表下所有的用户信息（包含子 OU 下的用户）和region列表，以笛卡尔积的形式，选择资源栈实例进行创建或部署。  *资源栈集不会选择组织管理员作为部署目标，进行资源栈实例的创建或部署，即使组织管理员位于给与的组织或组织的 OU 中。*
    * domainIdFilterType  租户ID筛选类型，仅支持资源栈集权限模型是SERVICE_MANAGED时指定该参数。默认为NONE  用户可以指定不同的筛选类型，通过domain_ids或domain_ids_uri 指定或排除部署的用户信息，以增加或限制部署目标用户范围，实现不同的部署策略。     * `INTERSECTION` - 从所提供的 OUs 中选择指定用户进行部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `DIFFERENCE` - 从所提供的 OUs 中排除指定用户部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `UNION` - 除了部署到提供的 OUs 外，还将部署到指定的账户中。用户可以通过同时指定organizational_unit_ids 和 domain_ids/domain_ids_uri 以实现在同一请求中部署整个OU和来自不同OU的特定个人账户。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。创建资源栈实例（CreateStackInstances）除外，该API 不允许指定使用该类型。    * `NONE` - 只部署在指定 OUs 中的所有账户。该类型下domain_ids和domain_ids_uri字段必须为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regions' => 'regions',
            'domainIds' => 'domain_ids',
            'domainIdsUri' => 'domain_ids_uri',
            'organizationalUnitIds' => 'organizational_unit_ids',
            'domainIdFilterType' => 'domain_id_filter_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regions  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    * domainIds  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri 有且仅有一个存在。
    * domainIdsUri  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分隔，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。链接文件内容用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri有且仅有一个存在。
    * organizationalUnitIds  组织单元（Organizational Unit，缩写OU）ID列表，仅在资源栈集权限模型是SERVICE_MANAGED时，才允许指定该参数。  用户指定的Organization组织部署的ID列表，可以是根组织（Root）ID，也可以是某些组织单元的ID。  创建资源栈实例 （CreateStackInstances）API 必须指定该参数，该API 会异步校验OU IDs 的合法性，校验有效的OU IDs 及其所有非空子OU ID 都会被资源栈集记录管理。该API允许指定没有或者已经被资源栈集管理的OU IDs。   * 若资源栈集不自动部署，空子OU不会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号）。*   * 【暂不支持】若资源栈集开启自动部署，空子OU也会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号），自动部署仅针对成员账号变动，不针对其他组织结构变化，例如新增OU等，新增OU不会自动被资源栈集管理。*  部署或删除资源栈实例（DeployStackSet、UpdateStackInstances、DeleteStackInstances） API，只允许指定已经被资源栈集管理的OU IDs。若指定了没有被资源栈集记录管理的OU IDs，则会报错。  删除资源栈实例 （DeleteStackInstances）API 必须指定该参数。  用户可以通过获取资源栈集元数据（ShowStackSetMetadata）API ，获取通过创建资源栈实例（CreateStackInstances）API 请求指定过的OU IDs。  资源栈集不仅会部署到目标 OU 中的用户，同时还会部署所有子 OU 下的用户。指定该参数后，资源栈集会根据用户输入的 OU 列表下所有的用户信息（包含子 OU 下的用户）和region列表，以笛卡尔积的形式，选择资源栈实例进行创建或部署。  *资源栈集不会选择组织管理员作为部署目标，进行资源栈实例的创建或部署，即使组织管理员位于给与的组织或组织的 OU 中。*
    * domainIdFilterType  租户ID筛选类型，仅支持资源栈集权限模型是SERVICE_MANAGED时指定该参数。默认为NONE  用户可以指定不同的筛选类型，通过domain_ids或domain_ids_uri 指定或排除部署的用户信息，以增加或限制部署目标用户范围，实现不同的部署策略。     * `INTERSECTION` - 从所提供的 OUs 中选择指定用户进行部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `DIFFERENCE` - 从所提供的 OUs 中排除指定用户部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `UNION` - 除了部署到提供的 OUs 外，还将部署到指定的账户中。用户可以通过同时指定organizational_unit_ids 和 domain_ids/domain_ids_uri 以实现在同一请求中部署整个OU和来自不同OU的特定个人账户。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。创建资源栈实例（CreateStackInstances）除外，该API 不允许指定使用该类型。    * `NONE` - 只部署在指定 OUs 中的所有账户。该类型下domain_ids和domain_ids_uri字段必须为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'regions' => 'setRegions',
            'domainIds' => 'setDomainIds',
            'domainIdsUri' => 'setDomainIdsUri',
            'organizationalUnitIds' => 'setOrganizationalUnitIds',
            'domainIdFilterType' => 'setDomainIdFilterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regions  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    * domainIds  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri 有且仅有一个存在。
    * domainIdsUri  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分隔，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。链接文件内容用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri有且仅有一个存在。
    * organizationalUnitIds  组织单元（Organizational Unit，缩写OU）ID列表，仅在资源栈集权限模型是SERVICE_MANAGED时，才允许指定该参数。  用户指定的Organization组织部署的ID列表，可以是根组织（Root）ID，也可以是某些组织单元的ID。  创建资源栈实例 （CreateStackInstances）API 必须指定该参数，该API 会异步校验OU IDs 的合法性，校验有效的OU IDs 及其所有非空子OU ID 都会被资源栈集记录管理。该API允许指定没有或者已经被资源栈集管理的OU IDs。   * 若资源栈集不自动部署，空子OU不会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号）。*   * 【暂不支持】若资源栈集开启自动部署，空子OU也会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号），自动部署仅针对成员账号变动，不针对其他组织结构变化，例如新增OU等，新增OU不会自动被资源栈集管理。*  部署或删除资源栈实例（DeployStackSet、UpdateStackInstances、DeleteStackInstances） API，只允许指定已经被资源栈集管理的OU IDs。若指定了没有被资源栈集记录管理的OU IDs，则会报错。  删除资源栈实例 （DeleteStackInstances）API 必须指定该参数。  用户可以通过获取资源栈集元数据（ShowStackSetMetadata）API ，获取通过创建资源栈实例（CreateStackInstances）API 请求指定过的OU IDs。  资源栈集不仅会部署到目标 OU 中的用户，同时还会部署所有子 OU 下的用户。指定该参数后，资源栈集会根据用户输入的 OU 列表下所有的用户信息（包含子 OU 下的用户）和region列表，以笛卡尔积的形式，选择资源栈实例进行创建或部署。  *资源栈集不会选择组织管理员作为部署目标，进行资源栈实例的创建或部署，即使组织管理员位于给与的组织或组织的 OU 中。*
    * domainIdFilterType  租户ID筛选类型，仅支持资源栈集权限模型是SERVICE_MANAGED时指定该参数。默认为NONE  用户可以指定不同的筛选类型，通过domain_ids或domain_ids_uri 指定或排除部署的用户信息，以增加或限制部署目标用户范围，实现不同的部署策略。     * `INTERSECTION` - 从所提供的 OUs 中选择指定用户进行部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `DIFFERENCE` - 从所提供的 OUs 中排除指定用户部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `UNION` - 除了部署到提供的 OUs 外，还将部署到指定的账户中。用户可以通过同时指定organizational_unit_ids 和 domain_ids/domain_ids_uri 以实现在同一请求中部署整个OU和来自不同OU的特定个人账户。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。创建资源栈实例（CreateStackInstances）除外，该API 不允许指定使用该类型。    * `NONE` - 只部署在指定 OUs 中的所有账户。该类型下domain_ids和domain_ids_uri字段必须为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'regions' => 'getRegions',
            'domainIds' => 'getDomainIds',
            'domainIdsUri' => 'getDomainIdsUri',
            'organizationalUnitIds' => 'getOrganizationalUnitIds',
            'domainIdFilterType' => 'getDomainIdFilterType'
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
    const DOMAIN_ID_FILTER_TYPE_INTERSECTION = 'INTERSECTION';
    const DOMAIN_ID_FILTER_TYPE_DIFFERENCE = 'DIFFERENCE';
    const DOMAIN_ID_FILTER_TYPE_UNION = 'UNION';
    const DOMAIN_ID_FILTER_TYPE_NONE = 'NONE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDomainIdFilterTypeAllowableValues()
    {
        return [
            self::DOMAIN_ID_FILTER_TYPE_INTERSECTION,
            self::DOMAIN_ID_FILTER_TYPE_DIFFERENCE,
            self::DOMAIN_ID_FILTER_TYPE_UNION,
            self::DOMAIN_ID_FILTER_TYPE_NONE,
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
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['domainIds'] = isset($data['domainIds']) ? $data['domainIds'] : null;
        $this->container['domainIdsUri'] = isset($data['domainIdsUri']) ? $data['domainIdsUri'] : null;
        $this->container['organizationalUnitIds'] = isset($data['organizationalUnitIds']) ? $data['organizationalUnitIds'] : null;
        $this->container['domainIdFilterType'] = isset($data['domainIdFilterType']) ? $data['domainIdFilterType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regions'] === null) {
            $invalidProperties[] = "'regions' can't be null";
        }
            if (!is_null($this->container['domainIdsUri']) && (mb_strlen($this->container['domainIdsUri']) > 2048)) {
                $invalidProperties[] = "invalid value for 'domainIdsUri', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['domainIdsUri']) && (mb_strlen($this->container['domainIdsUri']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainIdsUri', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainIdsUri']) && !preg_match("/^(http|https):\/\/[\\S]*(\\.csv){1}(\\?[\\S]+)?$/", $this->container['domainIdsUri'])) {
                $invalidProperties[] = "invalid value for 'domainIdsUri', must be conform to the pattern /^(http|https):\/\/[\\S]*(\\.csv){1}(\\?[\\S]+)?$/.";
            }
            $allowedValues = $this->getDomainIdFilterTypeAllowableValues();
                if (!is_null($this->container['domainIdFilterType']) && !in_array($this->container['domainIdFilterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'domainIdFilterType', must be one of '%s'",
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
    * Gets regions
    *  用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    *
    * @return string[]
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param string[] $regions 用户指定资源栈集操作所涉及的区域。  *在DeployStackSet API中，根据用户输入regions和domain_ids列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的region，则会报错。*
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
        return $this;
    }

    /**
    * Gets domainIds
    *  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri 有且仅有一个存在。
    *
    * @return string[]|null
    */
    public function getDomainIds()
    {
        return $this->container['domainIds'];
    }

    /**
    * Sets domainIds
    *
    * @param string[]|null $domainIds 当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids列表和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果指定了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri 有且仅有一个存在。
    *
    * @return $this
    */
    public function setDomainIds($domainIds)
    {
        $this->container['domainIds'] = $domainIds;
        return $this;
    }

    /**
    * Gets domainIdsUri
    *  当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分隔，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。链接文件内容用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri有且仅有一个存在。
    *
    * @return string|null
    */
    public function getDomainIdsUri()
    {
        return $this->container['domainIdsUri'];
    }

    /**
    * Sets domainIdsUri
    *
    * @param string|null $domainIdsUri 当资源栈集权限模型是SELF_MANAGED时，用户指定包含本次操作涉及到的租户ID内容文件的OBS地址。  内容格式要求每个租户ID以逗号（,）分隔，支持换行。当前仅支持csv文件，且文件的编码格式须为UTF-8。文件内容大小不超过100KB。  上传的csv文件应尽量避免Excel操作，以防出现读取内容不一致的问题。推荐使用记事本打开确认内容是否符合预期。  *在DeployStackSet API中，如果指定该参数，根据用户输入的domain_ids_uri文件内容和regions列表，以笛卡尔积的形式选择资源栈集中存在的资源栈实例进行部署。如果内容包含了没有被资源栈集所管理的domain_id，则会报错。*  当资源栈集权限模型是SERVICE_MANAGED时，该参数需结合domain_id_filter_type使用。链接文件内容用于指定资源栈集操作涉及到的，从所提供的OU中指定或排除部署的租户ID信息，或除提供的OU外，还进行额外部署的租户ID信息。  domain_ids和domain_ids_uri有且仅有一个存在。
    *
    * @return $this
    */
    public function setDomainIdsUri($domainIdsUri)
    {
        $this->container['domainIdsUri'] = $domainIdsUri;
        return $this;
    }

    /**
    * Gets organizationalUnitIds
    *  组织单元（Organizational Unit，缩写OU）ID列表，仅在资源栈集权限模型是SERVICE_MANAGED时，才允许指定该参数。  用户指定的Organization组织部署的ID列表，可以是根组织（Root）ID，也可以是某些组织单元的ID。  创建资源栈实例 （CreateStackInstances）API 必须指定该参数，该API 会异步校验OU IDs 的合法性，校验有效的OU IDs 及其所有非空子OU ID 都会被资源栈集记录管理。该API允许指定没有或者已经被资源栈集管理的OU IDs。   * 若资源栈集不自动部署，空子OU不会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号）。*   * 【暂不支持】若资源栈集开启自动部署，空子OU也会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号），自动部署仅针对成员账号变动，不针对其他组织结构变化，例如新增OU等，新增OU不会自动被资源栈集管理。*  部署或删除资源栈实例（DeployStackSet、UpdateStackInstances、DeleteStackInstances） API，只允许指定已经被资源栈集管理的OU IDs。若指定了没有被资源栈集记录管理的OU IDs，则会报错。  删除资源栈实例 （DeleteStackInstances）API 必须指定该参数。  用户可以通过获取资源栈集元数据（ShowStackSetMetadata）API ，获取通过创建资源栈实例（CreateStackInstances）API 请求指定过的OU IDs。  资源栈集不仅会部署到目标 OU 中的用户，同时还会部署所有子 OU 下的用户。指定该参数后，资源栈集会根据用户输入的 OU 列表下所有的用户信息（包含子 OU 下的用户）和region列表，以笛卡尔积的形式，选择资源栈实例进行创建或部署。  *资源栈集不会选择组织管理员作为部署目标，进行资源栈实例的创建或部署，即使组织管理员位于给与的组织或组织的 OU 中。*
    *
    * @return string[]|null
    */
    public function getOrganizationalUnitIds()
    {
        return $this->container['organizationalUnitIds'];
    }

    /**
    * Sets organizationalUnitIds
    *
    * @param string[]|null $organizationalUnitIds 组织单元（Organizational Unit，缩写OU）ID列表，仅在资源栈集权限模型是SERVICE_MANAGED时，才允许指定该参数。  用户指定的Organization组织部署的ID列表，可以是根组织（Root）ID，也可以是某些组织单元的ID。  创建资源栈实例 （CreateStackInstances）API 必须指定该参数，该API 会异步校验OU IDs 的合法性，校验有效的OU IDs 及其所有非空子OU ID 都会被资源栈集记录管理。该API允许指定没有或者已经被资源栈集管理的OU IDs。   * 若资源栈集不自动部署，空子OU不会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号）。*   * 【暂不支持】若资源栈集开启自动部署，空子OU也会被资源栈集记录管理（特指子OU下无成员账号或部署排除其下所有成员账号），自动部署仅针对成员账号变动，不针对其他组织结构变化，例如新增OU等，新增OU不会自动被资源栈集管理。*  部署或删除资源栈实例（DeployStackSet、UpdateStackInstances、DeleteStackInstances） API，只允许指定已经被资源栈集管理的OU IDs。若指定了没有被资源栈集记录管理的OU IDs，则会报错。  删除资源栈实例 （DeleteStackInstances）API 必须指定该参数。  用户可以通过获取资源栈集元数据（ShowStackSetMetadata）API ，获取通过创建资源栈实例（CreateStackInstances）API 请求指定过的OU IDs。  资源栈集不仅会部署到目标 OU 中的用户，同时还会部署所有子 OU 下的用户。指定该参数后，资源栈集会根据用户输入的 OU 列表下所有的用户信息（包含子 OU 下的用户）和region列表，以笛卡尔积的形式，选择资源栈实例进行创建或部署。  *资源栈集不会选择组织管理员作为部署目标，进行资源栈实例的创建或部署，即使组织管理员位于给与的组织或组织的 OU 中。*
    *
    * @return $this
    */
    public function setOrganizationalUnitIds($organizationalUnitIds)
    {
        $this->container['organizationalUnitIds'] = $organizationalUnitIds;
        return $this;
    }

    /**
    * Gets domainIdFilterType
    *  租户ID筛选类型，仅支持资源栈集权限模型是SERVICE_MANAGED时指定该参数。默认为NONE  用户可以指定不同的筛选类型，通过domain_ids或domain_ids_uri 指定或排除部署的用户信息，以增加或限制部署目标用户范围，实现不同的部署策略。     * `INTERSECTION` - 从所提供的 OUs 中选择指定用户进行部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `DIFFERENCE` - 从所提供的 OUs 中排除指定用户部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `UNION` - 除了部署到提供的 OUs 外，还将部署到指定的账户中。用户可以通过同时指定organizational_unit_ids 和 domain_ids/domain_ids_uri 以实现在同一请求中部署整个OU和来自不同OU的特定个人账户。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。创建资源栈实例（CreateStackInstances）除外，该API 不允许指定使用该类型。    * `NONE` - 只部署在指定 OUs 中的所有账户。该类型下domain_ids和domain_ids_uri字段必须为空。
    *
    * @return string|null
    */
    public function getDomainIdFilterType()
    {
        return $this->container['domainIdFilterType'];
    }

    /**
    * Sets domainIdFilterType
    *
    * @param string|null $domainIdFilterType 租户ID筛选类型，仅支持资源栈集权限模型是SERVICE_MANAGED时指定该参数。默认为NONE  用户可以指定不同的筛选类型，通过domain_ids或domain_ids_uri 指定或排除部署的用户信息，以增加或限制部署目标用户范围，实现不同的部署策略。     * `INTERSECTION` - 从所提供的 OUs 中选择指定用户进行部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `DIFFERENCE` - 从所提供的 OUs 中排除指定用户部署。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。    * `UNION` - 除了部署到提供的 OUs 外，还将部署到指定的账户中。用户可以通过同时指定organizational_unit_ids 和 domain_ids/domain_ids_uri 以实现在同一请求中部署整个OU和来自不同OU的特定个人账户。指定该类型时，domain_ids和domain_ids_uri 有且仅能有一个存在。创建资源栈实例（CreateStackInstances）除外，该API 不允许指定使用该类型。    * `NONE` - 只部署在指定 OUs 中的所有账户。该类型下domain_ids和domain_ids_uri字段必须为空。
    *
    * @return $this
    */
    public function setDomainIdFilterType($domainIdFilterType)
    {
        $this->container['domainIdFilterType'] = $domainIdFilterType;
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

