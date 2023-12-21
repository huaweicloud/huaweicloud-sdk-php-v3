<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeVulStatusRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeVulStatusRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateType  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    * remark  备注
    * selectType  选择全部漏洞类型 - all_vul : 选择全部漏洞 - all_host : 选择全部主机漏洞
    * type  漏洞类型，默认为linux_vul，包括如下：   - linux_vul : 漏洞类型-linux漏洞   - windows_vul : 漏洞类型-windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    * dataList  漏洞列表
    * hostDataList  主机维度漏洞列表
    * backupInfoId  本次漏洞处理的备份信息id，若不传该参数，则不进行备份
    * customBackupHosts  自定义备份主机使用的存储库及备份名称；不在该列表中的主机备份时系统会自动选取剩余空间最大的存储库，并自动生成备份名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateType' => 'string',
            'remark' => 'string',
            'selectType' => 'string',
            'type' => 'string',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\VulOperateInfo[]',
            'hostDataList' => '\HuaweiCloud\SDK\Hss\V5\Model\HostVulOperateInfo[]',
            'backupInfoId' => 'string',
            'customBackupHosts' => '\HuaweiCloud\SDK\Hss\V5\Model\ChangeVulStatusRequestInfoCustomBackupHosts[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateType  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    * remark  备注
    * selectType  选择全部漏洞类型 - all_vul : 选择全部漏洞 - all_host : 选择全部主机漏洞
    * type  漏洞类型，默认为linux_vul，包括如下：   - linux_vul : 漏洞类型-linux漏洞   - windows_vul : 漏洞类型-windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    * dataList  漏洞列表
    * hostDataList  主机维度漏洞列表
    * backupInfoId  本次漏洞处理的备份信息id，若不传该参数，则不进行备份
    * customBackupHosts  自定义备份主机使用的存储库及备份名称；不在该列表中的主机备份时系统会自动选取剩余空间最大的存储库，并自动生成备份名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateType' => null,
        'remark' => null,
        'selectType' => null,
        'type' => null,
        'dataList' => null,
        'hostDataList' => null,
        'backupInfoId' => null,
        'customBackupHosts' => null
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
    * operateType  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    * remark  备注
    * selectType  选择全部漏洞类型 - all_vul : 选择全部漏洞 - all_host : 选择全部主机漏洞
    * type  漏洞类型，默认为linux_vul，包括如下：   - linux_vul : 漏洞类型-linux漏洞   - windows_vul : 漏洞类型-windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    * dataList  漏洞列表
    * hostDataList  主机维度漏洞列表
    * backupInfoId  本次漏洞处理的备份信息id，若不传该参数，则不进行备份
    * customBackupHosts  自定义备份主机使用的存储库及备份名称；不在该列表中的主机备份时系统会自动选取剩余空间最大的存储库，并自动生成备份名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateType' => 'operate_type',
            'remark' => 'remark',
            'selectType' => 'select_type',
            'type' => 'type',
            'dataList' => 'data_list',
            'hostDataList' => 'host_data_list',
            'backupInfoId' => 'backup_info_id',
            'customBackupHosts' => 'custom_backup_hosts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateType  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    * remark  备注
    * selectType  选择全部漏洞类型 - all_vul : 选择全部漏洞 - all_host : 选择全部主机漏洞
    * type  漏洞类型，默认为linux_vul，包括如下：   - linux_vul : 漏洞类型-linux漏洞   - windows_vul : 漏洞类型-windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    * dataList  漏洞列表
    * hostDataList  主机维度漏洞列表
    * backupInfoId  本次漏洞处理的备份信息id，若不传该参数，则不进行备份
    * customBackupHosts  自定义备份主机使用的存储库及备份名称；不在该列表中的主机备份时系统会自动选取剩余空间最大的存储库，并自动生成备份名称
    *
    * @var string[]
    */
    protected static $setters = [
            'operateType' => 'setOperateType',
            'remark' => 'setRemark',
            'selectType' => 'setSelectType',
            'type' => 'setType',
            'dataList' => 'setDataList',
            'hostDataList' => 'setHostDataList',
            'backupInfoId' => 'setBackupInfoId',
            'customBackupHosts' => 'setCustomBackupHosts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateType  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    * remark  备注
    * selectType  选择全部漏洞类型 - all_vul : 选择全部漏洞 - all_host : 选择全部主机漏洞
    * type  漏洞类型，默认为linux_vul，包括如下：   - linux_vul : 漏洞类型-linux漏洞   - windows_vul : 漏洞类型-windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    * dataList  漏洞列表
    * hostDataList  主机维度漏洞列表
    * backupInfoId  本次漏洞处理的备份信息id，若不传该参数，则不进行备份
    * customBackupHosts  自定义备份主机使用的存储库及备份名称；不在该列表中的主机备份时系统会自动选取剩余空间最大的存储库，并自动生成备份名称
    *
    * @var string[]
    */
    protected static $getters = [
            'operateType' => 'getOperateType',
            'remark' => 'getRemark',
            'selectType' => 'getSelectType',
            'type' => 'getType',
            'dataList' => 'getDataList',
            'hostDataList' => 'getHostDataList',
            'backupInfoId' => 'getBackupInfoId',
            'customBackupHosts' => 'getCustomBackupHosts'
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
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['selectType'] = isset($data['selectType']) ? $data['selectType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
        $this->container['hostDataList'] = isset($data['hostDataList']) ? $data['hostDataList'] : null;
        $this->container['backupInfoId'] = isset($data['backupInfoId']) ? $data['backupInfoId'] : null;
        $this->container['customBackupHosts'] = isset($data['customBackupHosts']) ? $data['customBackupHosts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operateType'] === null) {
            $invalidProperties[] = "'operateType' can't be null";
        }
            if ((mb_strlen($this->container['operateType']) > 64)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['operateType']) < 1)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 512)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 0)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['selectType']) && (mb_strlen($this->container['selectType']) > 64)) {
                $invalidProperties[] = "invalid value for 'selectType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['selectType']) && (mb_strlen($this->container['selectType']) < 1)) {
                $invalidProperties[] = "invalid value for 'selectType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dataList'] === null) {
            $invalidProperties[] = "'dataList' can't be null";
        }
            if (!is_null($this->container['backupInfoId']) && (mb_strlen($this->container['backupInfoId']) > 128)) {
                $invalidProperties[] = "invalid value for 'backupInfoId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['backupInfoId']) && (mb_strlen($this->container['backupInfoId']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupInfoId', the character length must be bigger than or equal to 1.";
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
    * Gets operateType
    *  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    *
    * @return string
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string $operateType 操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets remark
    *  备注
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 备注
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets selectType
    *  选择全部漏洞类型 - all_vul : 选择全部漏洞 - all_host : 选择全部主机漏洞
    *
    * @return string|null
    */
    public function getSelectType()
    {
        return $this->container['selectType'];
    }

    /**
    * Sets selectType
    *
    * @param string|null $selectType 选择全部漏洞类型 - all_vul : 选择全部漏洞 - all_host : 选择全部主机漏洞
    *
    * @return $this
    */
    public function setSelectType($selectType)
    {
        $this->container['selectType'] = $selectType;
        return $this;
    }

    /**
    * Gets type
    *  漏洞类型，默认为linux_vul，包括如下：   - linux_vul : 漏洞类型-linux漏洞   - windows_vul : 漏洞类型-windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
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
    * @param string|null $type 漏洞类型，默认为linux_vul，包括如下：   - linux_vul : 漏洞类型-linux漏洞   - windows_vul : 漏洞类型-windows漏洞   - web_cms : Web-CMS漏洞   - app_vul : 应用漏洞   - urgent_vul : 应急漏洞
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets dataList
    *  漏洞列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulOperateInfo[]
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulOperateInfo[] $dataList 漏洞列表
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
        return $this;
    }

    /**
    * Gets hostDataList
    *  主机维度漏洞列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostVulOperateInfo[]|null
    */
    public function getHostDataList()
    {
        return $this->container['hostDataList'];
    }

    /**
    * Sets hostDataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostVulOperateInfo[]|null $hostDataList 主机维度漏洞列表
    *
    * @return $this
    */
    public function setHostDataList($hostDataList)
    {
        $this->container['hostDataList'] = $hostDataList;
        return $this;
    }

    /**
    * Gets backupInfoId
    *  本次漏洞处理的备份信息id，若不传该参数，则不进行备份
    *
    * @return string|null
    */
    public function getBackupInfoId()
    {
        return $this->container['backupInfoId'];
    }

    /**
    * Sets backupInfoId
    *
    * @param string|null $backupInfoId 本次漏洞处理的备份信息id，若不传该参数，则不进行备份
    *
    * @return $this
    */
    public function setBackupInfoId($backupInfoId)
    {
        $this->container['backupInfoId'] = $backupInfoId;
        return $this;
    }

    /**
    * Gets customBackupHosts
    *  自定义备份主机使用的存储库及备份名称；不在该列表中的主机备份时系统会自动选取剩余空间最大的存储库，并自动生成备份名称
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ChangeVulStatusRequestInfoCustomBackupHosts[]|null
    */
    public function getCustomBackupHosts()
    {
        return $this->container['customBackupHosts'];
    }

    /**
    * Sets customBackupHosts
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ChangeVulStatusRequestInfoCustomBackupHosts[]|null $customBackupHosts 自定义备份主机使用的存储库及备份名称；不在该列表中的主机备份时系统会自动选取剩余空间最大的存储库，并自动生成备份名称
    *
    * @return $this
    */
    public function setCustomBackupHosts($customBackupHosts)
    {
        $this->container['customBackupHosts'] = $customBackupHosts;
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

