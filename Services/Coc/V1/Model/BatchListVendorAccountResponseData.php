<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchListVendorAccountResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchListVendorAccountResponse_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** CMDB分配的云厂商账户ID。 **取值范围：** 不涉及。
    * vendor  **参数解释：** 云广商信息。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。
    * accountId  **参数解释：** 供应商的账户ID。 **取值范围：** 字符串，长度0到64个字符。
    * domainId  **参数解释：** 租户id。 **取值范围：** 不涉及。
    * accountName  **参数解释：** 账户名。 **取值范围：** 字符串，长度0到64个字符。
    * ak  **参数解释：** 账户ak。 **取值范围：** 字符串，长度0到64个字符。
    * syncStatus  **参数解释：** 任务状态。 **取值范围：** - waiting：待启动。 - running：同步中。 - success：同步成功。 - failed：同步失败。
    * failureMsg  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    * syncDate  **参数解释：** 同步时间。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'vendor' => 'string',
            'accountId' => 'string',
            'domainId' => 'string',
            'accountName' => 'string',
            'ak' => 'string',
            'syncStatus' => 'string',
            'failureMsg' => 'string',
            'syncDate' => '\DateTime',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** CMDB分配的云厂商账户ID。 **取值范围：** 不涉及。
    * vendor  **参数解释：** 云广商信息。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。
    * accountId  **参数解释：** 供应商的账户ID。 **取值范围：** 字符串，长度0到64个字符。
    * domainId  **参数解释：** 租户id。 **取值范围：** 不涉及。
    * accountName  **参数解释：** 账户名。 **取值范围：** 字符串，长度0到64个字符。
    * ak  **参数解释：** 账户ak。 **取值范围：** 字符串，长度0到64个字符。
    * syncStatus  **参数解释：** 任务状态。 **取值范围：** - waiting：待启动。 - running：同步中。 - success：同步成功。 - failed：同步失败。
    * failureMsg  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    * syncDate  **参数解释：** 同步时间。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'vendor' => null,
        'accountId' => null,
        'domainId' => null,
        'accountName' => null,
        'ak' => null,
        'syncStatus' => null,
        'failureMsg' => null,
        'syncDate' => 'date-time',
        'createTime' => 'date-time',
        'updateTime' => 'date-time'
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
    * id  **参数解释：** CMDB分配的云厂商账户ID。 **取值范围：** 不涉及。
    * vendor  **参数解释：** 云广商信息。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。
    * accountId  **参数解释：** 供应商的账户ID。 **取值范围：** 字符串，长度0到64个字符。
    * domainId  **参数解释：** 租户id。 **取值范围：** 不涉及。
    * accountName  **参数解释：** 账户名。 **取值范围：** 字符串，长度0到64个字符。
    * ak  **参数解释：** 账户ak。 **取值范围：** 字符串，长度0到64个字符。
    * syncStatus  **参数解释：** 任务状态。 **取值范围：** - waiting：待启动。 - running：同步中。 - success：同步成功。 - failed：同步失败。
    * failureMsg  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    * syncDate  **参数解释：** 同步时间。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'vendor' => 'vendor',
            'accountId' => 'account_id',
            'domainId' => 'domain_id',
            'accountName' => 'account_name',
            'ak' => 'ak',
            'syncStatus' => 'sync_status',
            'failureMsg' => 'failure_msg',
            'syncDate' => 'sync_date',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** CMDB分配的云厂商账户ID。 **取值范围：** 不涉及。
    * vendor  **参数解释：** 云广商信息。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。
    * accountId  **参数解释：** 供应商的账户ID。 **取值范围：** 字符串，长度0到64个字符。
    * domainId  **参数解释：** 租户id。 **取值范围：** 不涉及。
    * accountName  **参数解释：** 账户名。 **取值范围：** 字符串，长度0到64个字符。
    * ak  **参数解释：** 账户ak。 **取值范围：** 字符串，长度0到64个字符。
    * syncStatus  **参数解释：** 任务状态。 **取值范围：** - waiting：待启动。 - running：同步中。 - success：同步成功。 - failed：同步失败。
    * failureMsg  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    * syncDate  **参数解释：** 同步时间。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'vendor' => 'setVendor',
            'accountId' => 'setAccountId',
            'domainId' => 'setDomainId',
            'accountName' => 'setAccountName',
            'ak' => 'setAk',
            'syncStatus' => 'setSyncStatus',
            'failureMsg' => 'setFailureMsg',
            'syncDate' => 'setSyncDate',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** CMDB分配的云厂商账户ID。 **取值范围：** 不涉及。
    * vendor  **参数解释：** 云广商信息。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。
    * accountId  **参数解释：** 供应商的账户ID。 **取值范围：** 字符串，长度0到64个字符。
    * domainId  **参数解释：** 租户id。 **取值范围：** 不涉及。
    * accountName  **参数解释：** 账户名。 **取值范围：** 字符串，长度0到64个字符。
    * ak  **参数解释：** 账户ak。 **取值范围：** 字符串，长度0到64个字符。
    * syncStatus  **参数解释：** 任务状态。 **取值范围：** - waiting：待启动。 - running：同步中。 - success：同步成功。 - failed：同步失败。
    * failureMsg  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    * syncDate  **参数解释：** 同步时间。 **取值范围：** 不涉及。
    * createTime  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateTime  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'vendor' => 'getVendor',
            'accountId' => 'getAccountId',
            'domainId' => 'getDomainId',
            'accountName' => 'getAccountName',
            'ak' => 'getAk',
            'syncStatus' => 'getSyncStatus',
            'failureMsg' => 'getFailureMsg',
            'syncDate' => 'getSyncDate',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
    const SYNC_STATUS_WAITING = 'waiting';
    const SYNC_STATUS_RUNNING = 'running';
    const SYNC_STATUS_SUCCESS = 'success';
    const SYNC_STATUS_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSyncStatusAllowableValues()
    {
        return [
            self::SYNC_STATUS_WAITING,
            self::SYNC_STATUS_RUNNING,
            self::SYNC_STATUS_SUCCESS,
            self::SYNC_STATUS_FAILED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['ak'] = isset($data['ak']) ? $data['ak'] : null;
        $this->container['syncStatus'] = isset($data['syncStatus']) ? $data['syncStatus'] : null;
        $this->container['failureMsg'] = isset($data['failureMsg']) ? $data['failureMsg'] : null;
        $this->container['syncDate'] = isset($data['syncDate']) ? $data['syncDate'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vendor']) && (mb_strlen($this->container['vendor']) > 64)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vendor']) && (mb_strlen($this->container['vendor']) < 1)) {
                $invalidProperties[] = "invalid value for 'vendor', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) < 0)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['accountName']) && (mb_strlen($this->container['accountName']) < 0)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ak']) && (mb_strlen($this->container['ak']) > 64)) {
                $invalidProperties[] = "invalid value for 'ak', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ak']) && (mb_strlen($this->container['ak']) < 0)) {
                $invalidProperties[] = "invalid value for 'ak', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSyncStatusAllowableValues();
                if (!is_null($this->container['syncStatus']) && !in_array($this->container['syncStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'syncStatus', must be one of '%s'",
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
    * Gets id
    *  **参数解释：** CMDB分配的云厂商账户ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** CMDB分配的云厂商账户ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets vendor
    *  **参数解释：** 云广商信息。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。
    *
    * @return string|null
    */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
    * Sets vendor
    *
    * @param string|null $vendor **参数解释：** 云广商信息。 **取值范围：** - RMS： 华为云。 - AWS：亚马逊。 - AZURE：微软。 - ALI：阿里云。 - VMWARE：VMware。 - OPENSTACK：openstack云平台。 - HCS：Huawei Cloud Stack。 - OTHER：其他云广商。
    *
    * @return $this
    */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;
        return $this;
    }

    /**
    * Gets accountId
    *  **参数解释：** 供应商的账户ID。 **取值范围：** 字符串，长度0到64个字符。
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId **参数解释：** 供应商的账户ID。 **取值范围：** 字符串，长度0到64个字符。
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释：** 租户id。 **取值范围：** 不涉及。
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
    * @param string|null $domainId **参数解释：** 租户id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets accountName
    *  **参数解释：** 账户名。 **取值范围：** 字符串，长度0到64个字符。
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName **参数解释：** 账户名。 **取值范围：** 字符串，长度0到64个字符。
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets ak
    *  **参数解释：** 账户ak。 **取值范围：** 字符串，长度0到64个字符。
    *
    * @return string|null
    */
    public function getAk()
    {
        return $this->container['ak'];
    }

    /**
    * Sets ak
    *
    * @param string|null $ak **参数解释：** 账户ak。 **取值范围：** 字符串，长度0到64个字符。
    *
    * @return $this
    */
    public function setAk($ak)
    {
        $this->container['ak'] = $ak;
        return $this;
    }

    /**
    * Gets syncStatus
    *  **参数解释：** 任务状态。 **取值范围：** - waiting：待启动。 - running：同步中。 - success：同步成功。 - failed：同步失败。
    *
    * @return string|null
    */
    public function getSyncStatus()
    {
        return $this->container['syncStatus'];
    }

    /**
    * Sets syncStatus
    *
    * @param string|null $syncStatus **参数解释：** 任务状态。 **取值范围：** - waiting：待启动。 - running：同步中。 - success：同步成功。 - failed：同步失败。
    *
    * @return $this
    */
    public function setSyncStatus($syncStatus)
    {
        $this->container['syncStatus'] = $syncStatus;
        return $this;
    }

    /**
    * Gets failureMsg
    *  **参数解释：** 错误信息。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getFailureMsg()
    {
        return $this->container['failureMsg'];
    }

    /**
    * Sets failureMsg
    *
    * @param string|null $failureMsg **参数解释：** 错误信息。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFailureMsg($failureMsg)
    {
        $this->container['failureMsg'] = $failureMsg;
        return $this;
    }

    /**
    * Gets syncDate
    *  **参数解释：** 同步时间。 **取值范围：** 不涉及。
    *
    * @return \DateTime|null
    */
    public function getSyncDate()
    {
        return $this->container['syncDate'];
    }

    /**
    * Sets syncDate
    *
    * @param \DateTime|null $syncDate **参数解释：** 同步时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSyncDate($syncDate)
    {
        $this->container['syncDate'] = $syncDate;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime **参数解释：** 创建时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime **参数解释：** 更新时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

