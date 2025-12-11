<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportWebTamperHostRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportWebTamperHostRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * agentId  **参数解释**: Agent ID。（已废弃，请使用host_id） **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * protectStatus  防护状态。（已废弃，请使用wtp_status）
    * agentStatus  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。  **默认取值**: 不涉及。
    * raspProtectStatus  动态网页防篡改防护状态   - opened : 防护中   - closed : 未防护
    * wtpStatus  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。
    * offset  偏移量。（已废弃，请使用export_size）
    * limit  每页显示个数。（已废弃，请使用export_size）
    * exportHeaders  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 - host_name：服务器名称。 - host_id：服务器ID。 - public_ip：弹性公网IP地址。 - private_ip：私有IP地址。 - charging_mode：计费模式。 - agent_status：Agent状态。 - protect_status：防护状态。 - protect_dir_num：防护目录数。 - rasp_protect_status：动态防篡改状态。 - anti_tampering_times：静态防篡改攻击（近七天）。 - detect_tampering_times：动态防篡改攻击（近七天）。 - protect_dir：防护目录。 - exclude_child_dir：排除子目录。 - exclude_file_list：排除文件路径列表。 - local_backup_dir：本地备份路径。 - exclude_file_type：排除文件类型。 - dir_protect_status：防护目录状态。 - error：错误信息。  **默认取值**: 不涉及
    * exportSize  **参数解释**: 导出数据条数上限 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostIdList' => 'string[]',
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'agentId' => 'string',
            'osType' => 'string',
            'assetValue' => 'string',
            'groupName' => 'string',
            'protectStatus' => 'string',
            'agentStatus' => 'string',
            'raspProtectStatus' => 'string',
            'wtpStatus' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'exportHeaders' => 'string[][]',
            'exportSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * agentId  **参数解释**: Agent ID。（已废弃，请使用host_id） **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * protectStatus  防护状态。（已废弃，请使用wtp_status）
    * agentStatus  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。  **默认取值**: 不涉及。
    * raspProtectStatus  动态网页防篡改防护状态   - opened : 防护中   - closed : 未防护
    * wtpStatus  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。
    * offset  偏移量。（已废弃，请使用export_size）
    * limit  每页显示个数。（已废弃，请使用export_size）
    * exportHeaders  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 - host_name：服务器名称。 - host_id：服务器ID。 - public_ip：弹性公网IP地址。 - private_ip：私有IP地址。 - charging_mode：计费模式。 - agent_status：Agent状态。 - protect_status：防护状态。 - protect_dir_num：防护目录数。 - rasp_protect_status：动态防篡改状态。 - anti_tampering_times：静态防篡改攻击（近七天）。 - detect_tampering_times：动态防篡改攻击（近七天）。 - protect_dir：防护目录。 - exclude_child_dir：排除子目录。 - exclude_file_list：排除文件路径列表。 - local_backup_dir：本地备份路径。 - exclude_file_type：排除文件类型。 - dir_protect_status：防护目录状态。 - error：错误信息。  **默认取值**: 不涉及
    * exportSize  **参数解释**: 导出数据条数上限 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostIdList' => null,
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'agentId' => null,
        'osType' => null,
        'assetValue' => null,
        'groupName' => null,
        'protectStatus' => null,
        'agentStatus' => null,
        'raspProtectStatus' => null,
        'wtpStatus' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'exportHeaders' => null,
        'exportSize' => 'int32'
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
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * agentId  **参数解释**: Agent ID。（已废弃，请使用host_id） **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * protectStatus  防护状态。（已废弃，请使用wtp_status）
    * agentStatus  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。  **默认取值**: 不涉及。
    * raspProtectStatus  动态网页防篡改防护状态   - opened : 防护中   - closed : 未防护
    * wtpStatus  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。
    * offset  偏移量。（已废弃，请使用export_size）
    * limit  每页显示个数。（已废弃，请使用export_size）
    * exportHeaders  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 - host_name：服务器名称。 - host_id：服务器ID。 - public_ip：弹性公网IP地址。 - private_ip：私有IP地址。 - charging_mode：计费模式。 - agent_status：Agent状态。 - protect_status：防护状态。 - protect_dir_num：防护目录数。 - rasp_protect_status：动态防篡改状态。 - anti_tampering_times：静态防篡改攻击（近七天）。 - detect_tampering_times：动态防篡改攻击（近七天）。 - protect_dir：防护目录。 - exclude_child_dir：排除子目录。 - exclude_file_list：排除文件路径列表。 - local_backup_dir：本地备份路径。 - exclude_file_type：排除文件类型。 - dir_protect_status：防护目录状态。 - error：错误信息。  **默认取值**: 不涉及
    * exportSize  **参数解释**: 导出数据条数上限 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostIdList' => 'host_id_list',
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'agentId' => 'agent_id',
            'osType' => 'os_type',
            'assetValue' => 'asset_value',
            'groupName' => 'group_name',
            'protectStatus' => 'protect_status',
            'agentStatus' => 'agent_status',
            'raspProtectStatus' => 'rasp_protect_status',
            'wtpStatus' => 'wtp_status',
            'offset' => 'offset',
            'limit' => 'limit',
            'exportHeaders' => 'export_headers',
            'exportSize' => 'export_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * agentId  **参数解释**: Agent ID。（已废弃，请使用host_id） **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * protectStatus  防护状态。（已废弃，请使用wtp_status）
    * agentStatus  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。  **默认取值**: 不涉及。
    * raspProtectStatus  动态网页防篡改防护状态   - opened : 防护中   - closed : 未防护
    * wtpStatus  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。
    * offset  偏移量。（已废弃，请使用export_size）
    * limit  每页显示个数。（已废弃，请使用export_size）
    * exportHeaders  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 - host_name：服务器名称。 - host_id：服务器ID。 - public_ip：弹性公网IP地址。 - private_ip：私有IP地址。 - charging_mode：计费模式。 - agent_status：Agent状态。 - protect_status：防护状态。 - protect_dir_num：防护目录数。 - rasp_protect_status：动态防篡改状态。 - anti_tampering_times：静态防篡改攻击（近七天）。 - detect_tampering_times：动态防篡改攻击（近七天）。 - protect_dir：防护目录。 - exclude_child_dir：排除子目录。 - exclude_file_list：排除文件路径列表。 - local_backup_dir：本地备份路径。 - exclude_file_type：排除文件类型。 - dir_protect_status：防护目录状态。 - error：错误信息。  **默认取值**: 不涉及
    * exportSize  **参数解释**: 导出数据条数上限 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostIdList' => 'setHostIdList',
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'agentId' => 'setAgentId',
            'osType' => 'setOsType',
            'assetValue' => 'setAssetValue',
            'groupName' => 'setGroupName',
            'protectStatus' => 'setProtectStatus',
            'agentStatus' => 'setAgentStatus',
            'raspProtectStatus' => 'setRaspProtectStatus',
            'wtpStatus' => 'setWtpStatus',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'exportHeaders' => 'setExportHeaders',
            'exportSize' => 'setExportSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * agentId  **参数解释**: Agent ID。（已废弃，请使用host_id） **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * protectStatus  防护状态。（已废弃，请使用wtp_status）
    * agentStatus  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。  **默认取值**: 不涉及。
    * raspProtectStatus  动态网页防篡改防护状态   - opened : 防护中   - closed : 未防护
    * wtpStatus  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。
    * offset  偏移量。（已废弃，请使用export_size）
    * limit  每页显示个数。（已废弃，请使用export_size）
    * exportHeaders  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 - host_name：服务器名称。 - host_id：服务器ID。 - public_ip：弹性公网IP地址。 - private_ip：私有IP地址。 - charging_mode：计费模式。 - agent_status：Agent状态。 - protect_status：防护状态。 - protect_dir_num：防护目录数。 - rasp_protect_status：动态防篡改状态。 - anti_tampering_times：静态防篡改攻击（近七天）。 - detect_tampering_times：动态防篡改攻击（近七天）。 - protect_dir：防护目录。 - exclude_child_dir：排除子目录。 - exclude_file_list：排除文件路径列表。 - local_backup_dir：本地备份路径。 - exclude_file_type：排除文件类型。 - dir_protect_status：防护目录状态。 - error：错误信息。  **默认取值**: 不涉及
    * exportSize  **参数解释**: 导出数据条数上限 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200000 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostIdList' => 'getHostIdList',
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'agentId' => 'getAgentId',
            'osType' => 'getOsType',
            'assetValue' => 'getAssetValue',
            'groupName' => 'getGroupName',
            'protectStatus' => 'getProtectStatus',
            'agentStatus' => 'getAgentStatus',
            'raspProtectStatus' => 'getRaspProtectStatus',
            'wtpStatus' => 'getWtpStatus',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'exportHeaders' => 'getExportHeaders',
            'exportSize' => 'getExportSize'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['raspProtectStatus'] = isset($data['raspProtectStatus']) ? $data['raspProtectStatus'] : null;
        $this->container['wtpStatus'] = isset($data['wtpStatus']) ? $data['wtpStatus'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['exportHeaders'] = isset($data['exportHeaders']) ? $data['exportHeaders'] : null;
        $this->container['exportSize'] = isset($data['exportSize']) ? $data['exportSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['agentId']) && !preg_match("/^.*$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['raspProtectStatus']) && (mb_strlen($this->container['raspProtectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'raspProtectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['raspProtectStatus']) && (mb_strlen($this->container['raspProtectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'raspProtectStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['wtpStatus']) && (mb_strlen($this->container['wtpStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'wtpStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['wtpStatus']) && (mb_strlen($this->container['wtpStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'wtpStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
        if ($this->container['exportHeaders'] === null) {
            $invalidProperties[] = "'exportHeaders' can't be null";
        }
        if ($this->container['exportSize'] === null) {
            $invalidProperties[] = "'exportSize' can't be null";
        }
            if (($this->container['exportSize'] > 200000)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be smaller than or equal to 200000.";
            }
            if (($this->container['exportSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be bigger than or equal to 1.";
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
    * Gets hostId
    *  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**: Agent ID。（已废弃，请使用host_id） **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId **参数解释**: Agent ID。（已废弃，请使用host_id） **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
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
    * @param string|null $osType **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets protectStatus
    *  防护状态。（已废弃，请使用wtp_status）
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus 防护状态。（已废弃，请使用wtp_status）
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。  **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed：未安装。 - online：在线。 - offline：离线。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets raspProtectStatus
    *  动态网页防篡改防护状态   - opened : 防护中   - closed : 未防护
    *
    * @return string|null
    */
    public function getRaspProtectStatus()
    {
        return $this->container['raspProtectStatus'];
    }

    /**
    * Sets raspProtectStatus
    *
    * @param string|null $raspProtectStatus 动态网页防篡改防护状态   - opened : 防护中   - closed : 未防护
    *
    * @return $this
    */
    public function setRaspProtectStatus($raspProtectStatus)
    {
        $this->container['raspProtectStatus'] = $raspProtectStatus;
        return $this;
    }

    /**
    * Gets wtpStatus
    *  **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。
    *
    * @return string|null
    */
    public function getWtpStatus()
    {
        return $this->container['wtpStatus'];
    }

    /**
    * Sets wtpStatus
    *
    * @param string|null $wtpStatus **参数解释**: 网页防篡改防护状态 **取值范围**: - opening : 开启中。 - opened : 防护中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。
    *
    * @return $this
    */
    public function setWtpStatus($wtpStatus)
    {
        $this->container['wtpStatus'] = $wtpStatus;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量。（已废弃，请使用export_size）
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
    * @param int|null $offset 偏移量。（已废弃，请使用export_size）
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
    *  每页显示个数。（已废弃，请使用export_size）
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
    * @param int|null $limit 每页显示个数。（已废弃，请使用export_size）
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets exportHeaders
    *  **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 - host_name：服务器名称。 - host_id：服务器ID。 - public_ip：弹性公网IP地址。 - private_ip：私有IP地址。 - charging_mode：计费模式。 - agent_status：Agent状态。 - protect_status：防护状态。 - protect_dir_num：防护目录数。 - rasp_protect_status：动态防篡改状态。 - anti_tampering_times：静态防篡改攻击（近七天）。 - detect_tampering_times：动态防篡改攻击（近七天）。 - protect_dir：防护目录。 - exclude_child_dir：排除子目录。 - exclude_file_list：排除文件路径列表。 - local_backup_dir：本地备份路径。 - exclude_file_type：排除文件类型。 - dir_protect_status：防护目录状态。 - error：错误信息。  **默认取值**: 不涉及
    *
    * @return string[][]
    */
    public function getExportHeaders()
    {
        return $this->container['exportHeaders'];
    }

    /**
    * Sets exportHeaders
    *
    * @param string[][] $exportHeaders **参数解释**: 导出数据表头信息详情 **约束限制**: 表头信息应为如下格式[[字段1,表头1显示名称],[字段2,表头2显示名称],[字段3,表头3显示名称]] **取值范围**: 可从如下取值中选取部分或全部组成表头信息 - host_name：服务器名称。 - host_id：服务器ID。 - public_ip：弹性公网IP地址。 - private_ip：私有IP地址。 - charging_mode：计费模式。 - agent_status：Agent状态。 - protect_status：防护状态。 - protect_dir_num：防护目录数。 - rasp_protect_status：动态防篡改状态。 - anti_tampering_times：静态防篡改攻击（近七天）。 - detect_tampering_times：动态防篡改攻击（近七天）。 - protect_dir：防护目录。 - exclude_child_dir：排除子目录。 - exclude_file_list：排除文件路径列表。 - local_backup_dir：本地备份路径。 - exclude_file_type：排除文件类型。 - dir_protect_status：防护目录状态。 - error：错误信息。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setExportHeaders($exportHeaders)
    {
        $this->container['exportHeaders'] = $exportHeaders;
        return $this;
    }

    /**
    * Gets exportSize
    *  **参数解释**: 导出数据条数上限 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200000 **默认取值**: 不涉及
    *
    * @return int
    */
    public function getExportSize()
    {
        return $this->container['exportSize'];
    }

    /**
    * Sets exportSize
    *
    * @param int $exportSize **参数解释**: 导出数据条数上限 **约束限制**: 不涉及 **取值范围**: 最小值1，最大值200000 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setExportSize($exportSize)
    {
        $this->container['exportSize'] = $exportSize;
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

