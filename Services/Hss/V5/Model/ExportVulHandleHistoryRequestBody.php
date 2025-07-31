<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportVulHandleHistoryRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportVulHandleHistoryRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  漏洞状态 vul_status_unfix : 未处理 vul_status_ignored : 已忽略 vul_status_verified : 验证中 vul_status_fixing : 修复中 vul_status_fixed : 修复成功 vul_status_reboot : 修复成功待重启 vul_status_failed : 修复失败 vul_status_fix_after_reboot : 请重启主机再次修复
    * vulId  漏洞ID
    * vulType  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * assetValue  资产重要性，包含如下3种 important ：重要资产 common ：一般资产 test ：测试资产
    * groupName  服务器组
    * hostName  服务器名称
    * hostIp  服务器ip
    * exportSize  导出数据条数
    * exportHeaderList  导出漏洞数据的表头信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'vulId' => 'string',
            'vulType' => 'string',
            'assetValue' => 'string',
            'groupName' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'exportSize' => 'int',
            'exportHeaderList' => 'string[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  漏洞状态 vul_status_unfix : 未处理 vul_status_ignored : 已忽略 vul_status_verified : 验证中 vul_status_fixing : 修复中 vul_status_fixed : 修复成功 vul_status_reboot : 修复成功待重启 vul_status_failed : 修复失败 vul_status_fix_after_reboot : 请重启主机再次修复
    * vulId  漏洞ID
    * vulType  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * assetValue  资产重要性，包含如下3种 important ：重要资产 common ：一般资产 test ：测试资产
    * groupName  服务器组
    * hostName  服务器名称
    * hostIp  服务器ip
    * exportSize  导出数据条数
    * exportHeaderList  导出漏洞数据的表头信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'vulId' => null,
        'vulType' => null,
        'assetValue' => null,
        'groupName' => null,
        'hostName' => null,
        'hostIp' => null,
        'exportSize' => 'int32',
        'exportHeaderList' => null
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
    * status  漏洞状态 vul_status_unfix : 未处理 vul_status_ignored : 已忽略 vul_status_verified : 验证中 vul_status_fixing : 修复中 vul_status_fixed : 修复成功 vul_status_reboot : 修复成功待重启 vul_status_failed : 修复失败 vul_status_fix_after_reboot : 请重启主机再次修复
    * vulId  漏洞ID
    * vulType  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * assetValue  资产重要性，包含如下3种 important ：重要资产 common ：一般资产 test ：测试资产
    * groupName  服务器组
    * hostName  服务器名称
    * hostIp  服务器ip
    * exportSize  导出数据条数
    * exportHeaderList  导出漏洞数据的表头信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'vulId' => 'vul_id',
            'vulType' => 'vul_type',
            'assetValue' => 'asset_value',
            'groupName' => 'group_name',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'exportSize' => 'export_size',
            'exportHeaderList' => 'export_header_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  漏洞状态 vul_status_unfix : 未处理 vul_status_ignored : 已忽略 vul_status_verified : 验证中 vul_status_fixing : 修复中 vul_status_fixed : 修复成功 vul_status_reboot : 修复成功待重启 vul_status_failed : 修复失败 vul_status_fix_after_reboot : 请重启主机再次修复
    * vulId  漏洞ID
    * vulType  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * assetValue  资产重要性，包含如下3种 important ：重要资产 common ：一般资产 test ：测试资产
    * groupName  服务器组
    * hostName  服务器名称
    * hostIp  服务器ip
    * exportSize  导出数据条数
    * exportHeaderList  导出漏洞数据的表头信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'vulId' => 'setVulId',
            'vulType' => 'setVulType',
            'assetValue' => 'setAssetValue',
            'groupName' => 'setGroupName',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'exportSize' => 'setExportSize',
            'exportHeaderList' => 'setExportHeaderList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  漏洞状态 vul_status_unfix : 未处理 vul_status_ignored : 已忽略 vul_status_verified : 验证中 vul_status_fixing : 修复中 vul_status_fixed : 修复成功 vul_status_reboot : 修复成功待重启 vul_status_failed : 修复失败 vul_status_fix_after_reboot : 请重启主机再次修复
    * vulId  漏洞ID
    * vulType  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * assetValue  资产重要性，包含如下3种 important ：重要资产 common ：一般资产 test ：测试资产
    * groupName  服务器组
    * hostName  服务器名称
    * hostIp  服务器ip
    * exportSize  导出数据条数
    * exportHeaderList  导出漏洞数据的表头信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'vulId' => 'getVulId',
            'vulType' => 'getVulType',
            'assetValue' => 'getAssetValue',
            'groupName' => 'getGroupName',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'exportSize' => 'getExportSize',
            'exportHeaderList' => 'getExportHeaderList'
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
    const STATUS_VUL_STATUS_UNFIX = 'vul_status_unfix';
    const STATUS_VUL_STATUS_IGNORED = 'vul_status_ignored';
    const STATUS_VUL_STATUS_VERIFIED = 'vul_status_verified';
    const STATUS_VUL_STATUS_FIXING = 'vul_status_fixing';
    const STATUS_VUL_STATUS_FIXED = 'vul_status_fixed';
    const STATUS_VUL_STATUS_REBOOT = 'vul_status_reboot';
    const STATUS_VUL_STATUS_FAILED = 'vul_status_failed';
    const STATUS_VUL_STATUS_FIX_AFTER_REBOOT = 'vul_status_fix_after_reboot';
    const VUL_TYPE_LINUX_VUL = 'linux_vul';
    const VUL_TYPE_WINDOWS_VUL = 'windows_vul';
    const VUL_TYPE_WEB_CMS = 'web_cms';
    const VUL_TYPE_APP_VUL = 'app_vul';
    const VUL_TYPE_URGENT_VUL = 'urgent_vul';
    const ASSET_VALUE_IMPORTANT = 'important';
    const ASSET_VALUE_COMMON = 'common';
    const ASSET_VALUE_TEST = 'test';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_VUL_STATUS_UNFIX,
            self::STATUS_VUL_STATUS_IGNORED,
            self::STATUS_VUL_STATUS_VERIFIED,
            self::STATUS_VUL_STATUS_FIXING,
            self::STATUS_VUL_STATUS_FIXED,
            self::STATUS_VUL_STATUS_REBOOT,
            self::STATUS_VUL_STATUS_FAILED,
            self::STATUS_VUL_STATUS_FIX_AFTER_REBOOT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVulTypeAllowableValues()
    {
        return [
            self::VUL_TYPE_LINUX_VUL,
            self::VUL_TYPE_WINDOWS_VUL,
            self::VUL_TYPE_WEB_CMS,
            self::VUL_TYPE_APP_VUL,
            self::VUL_TYPE_URGENT_VUL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetValueAllowableValues()
    {
        return [
            self::ASSET_VALUE_IMPORTANT,
            self::ASSET_VALUE_COMMON,
            self::ASSET_VALUE_TEST,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulType'] = isset($data['vulType']) ? $data['vulType'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['exportSize'] = isset($data['exportSize']) ? $data['exportSize'] : null;
        $this->container['exportHeaderList'] = isset($data['exportHeaderList']) ? $data['exportHeaderList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getVulTypeAllowableValues();
                if (!is_null($this->container['vulType']) && !in_array($this->container['vulType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'vulType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAssetValueAllowableValues();
                if (!is_null($this->container['assetValue']) && !in_array($this->container['assetValue'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetValue', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['exportSize']) && ($this->container['exportSize'] > 200000)) {
                $invalidProperties[] = "invalid value for 'exportSize', must be smaller than or equal to 200000.";
            }
            if (!is_null($this->container['exportSize']) && ($this->container['exportSize'] < 1)) {
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
    * Gets status
    *  漏洞状态 vul_status_unfix : 未处理 vul_status_ignored : 已忽略 vul_status_verified : 验证中 vul_status_fixing : 修复中 vul_status_fixed : 修复成功 vul_status_reboot : 修复成功待重启 vul_status_failed : 修复失败 vul_status_fix_after_reboot : 请重启主机再次修复
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
    * @param string|null $status 漏洞状态 vul_status_unfix : 未处理 vul_status_ignored : 已忽略 vul_status_verified : 验证中 vul_status_fixing : 修复中 vul_status_fixed : 修复成功 vul_status_reboot : 修复成功待重启 vul_status_failed : 修复失败 vul_status_fix_after_reboot : 请重启主机再次修复
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vulId
    *  漏洞ID
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId 漏洞ID
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets vulType
    *  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    *
    * @return string|null
    */
    public function getVulType()
    {
        return $this->container['vulType'];
    }

    /**
    * Sets vulType
    *
    * @param string|null $vulType 漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    *
    * @return $this
    */
    public function setVulType($vulType)
    {
        $this->container['vulType'] = $vulType;
        return $this;
    }

    /**
    * Gets assetValue
    *  资产重要性，包含如下3种 important ：重要资产 common ：一般资产 test ：测试资产
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
    * @param string|null $assetValue 资产重要性，包含如下3种 important ：重要资产 common ：一般资产 test ：测试资产
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
    *  服务器组
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
    * @param string|null $groupName 服务器组
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets hostName
    *  服务器名称
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
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  服务器ip
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 服务器ip
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets exportSize
    *  导出数据条数
    *
    * @return int|null
    */
    public function getExportSize()
    {
        return $this->container['exportSize'];
    }

    /**
    * Sets exportSize
    *
    * @param int|null $exportSize 导出数据条数
    *
    * @return $this
    */
    public function setExportSize($exportSize)
    {
        $this->container['exportSize'] = $exportSize;
        return $this;
    }

    /**
    * Gets exportHeaderList
    *  导出漏洞数据的表头信息列表
    *
    * @return string[][]|null
    */
    public function getExportHeaderList()
    {
        return $this->container['exportHeaderList'];
    }

    /**
    * Sets exportHeaderList
    *
    * @param string[][]|null $exportHeaderList 导出漏洞数据的表头信息列表
    *
    * @return $this
    */
    public function setExportHeaderList($exportHeaderList)
    {
        $this->container['exportHeaderList'] = $exportHeaderList;
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

