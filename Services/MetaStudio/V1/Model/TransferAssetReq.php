<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransferAssetReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransferAssetReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * transferType  transferType
    * assetIds  资产ID列表
    * destProjectId  目标用户ID
    * memo  备注信息
    * autoAccept  是否自动接收,管理员可用
    * autoActive  是否自动激活,管理员可用
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    * transferJobId  转移任务ID，仅在transfer_type=TRANSFER_BACK时需要填写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'transferType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TransferTypeEnum',
            'assetIds' => 'string[]',
            'destProjectId' => 'string',
            'memo' => 'string',
            'autoAccept' => 'bool',
            'autoActive' => 'bool',
            'isNeedBilling' => 'bool',
            'transferJobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * transferType  transferType
    * assetIds  资产ID列表
    * destProjectId  目标用户ID
    * memo  备注信息
    * autoAccept  是否自动接收,管理员可用
    * autoActive  是否自动激活,管理员可用
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    * transferJobId  转移任务ID，仅在transfer_type=TRANSFER_BACK时需要填写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'transferType' => null,
        'assetIds' => null,
        'destProjectId' => null,
        'memo' => null,
        'autoAccept' => null,
        'autoActive' => null,
        'isNeedBilling' => null,
        'transferJobId' => null
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
    * transferType  transferType
    * assetIds  资产ID列表
    * destProjectId  目标用户ID
    * memo  备注信息
    * autoAccept  是否自动接收,管理员可用
    * autoActive  是否自动激活,管理员可用
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    * transferJobId  转移任务ID，仅在transfer_type=TRANSFER_BACK时需要填写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'transferType' => 'transfer_type',
            'assetIds' => 'asset_ids',
            'destProjectId' => 'dest_project_id',
            'memo' => 'memo',
            'autoAccept' => 'auto_accept',
            'autoActive' => 'auto_active',
            'isNeedBilling' => 'is_need_billing',
            'transferJobId' => 'transfer_job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * transferType  transferType
    * assetIds  资产ID列表
    * destProjectId  目标用户ID
    * memo  备注信息
    * autoAccept  是否自动接收,管理员可用
    * autoActive  是否自动激活,管理员可用
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    * transferJobId  转移任务ID，仅在transfer_type=TRANSFER_BACK时需要填写。
    *
    * @var string[]
    */
    protected static $setters = [
            'transferType' => 'setTransferType',
            'assetIds' => 'setAssetIds',
            'destProjectId' => 'setDestProjectId',
            'memo' => 'setMemo',
            'autoAccept' => 'setAutoAccept',
            'autoActive' => 'setAutoActive',
            'isNeedBilling' => 'setIsNeedBilling',
            'transferJobId' => 'setTransferJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * transferType  transferType
    * assetIds  资产ID列表
    * destProjectId  目标用户ID
    * memo  备注信息
    * autoAccept  是否自动接收,管理员可用
    * autoActive  是否自动激活,管理员可用
    * isNeedBilling  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    * transferJobId  转移任务ID，仅在transfer_type=TRANSFER_BACK时需要填写。
    *
    * @var string[]
    */
    protected static $getters = [
            'transferType' => 'getTransferType',
            'assetIds' => 'getAssetIds',
            'destProjectId' => 'getDestProjectId',
            'memo' => 'getMemo',
            'autoAccept' => 'getAutoAccept',
            'autoActive' => 'getAutoActive',
            'isNeedBilling' => 'getIsNeedBilling',
            'transferJobId' => 'getTransferJobId'
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
        $this->container['transferType'] = isset($data['transferType']) ? $data['transferType'] : null;
        $this->container['assetIds'] = isset($data['assetIds']) ? $data['assetIds'] : null;
        $this->container['destProjectId'] = isset($data['destProjectId']) ? $data['destProjectId'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['autoAccept'] = isset($data['autoAccept']) ? $data['autoAccept'] : null;
        $this->container['autoActive'] = isset($data['autoActive']) ? $data['autoActive'] : null;
        $this->container['isNeedBilling'] = isset($data['isNeedBilling']) ? $data['isNeedBilling'] : null;
        $this->container['transferJobId'] = isset($data['transferJobId']) ? $data['transferJobId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['assetIds'] === null) {
            $invalidProperties[] = "'assetIds' can't be null";
        }
        if ($this->container['destProjectId'] === null) {
            $invalidProperties[] = "'destProjectId' can't be null";
        }
            if ((mb_strlen($this->container['destProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'destProjectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['destProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'destProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) > 256)) {
                $invalidProperties[] = "invalid value for 'memo', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) < 0)) {
                $invalidProperties[] = "invalid value for 'memo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['transferJobId']) && (mb_strlen($this->container['transferJobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'transferJobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['transferJobId']) && (mb_strlen($this->container['transferJobId']) < 0)) {
                $invalidProperties[] = "invalid value for 'transferJobId', the character length must be bigger than or equal to 0.";
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
    * Gets transferType
    *  transferType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TransferTypeEnum|null
    */
    public function getTransferType()
    {
        return $this->container['transferType'];
    }

    /**
    * Sets transferType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TransferTypeEnum|null $transferType transferType
    *
    * @return $this
    */
    public function setTransferType($transferType)
    {
        $this->container['transferType'] = $transferType;
        return $this;
    }

    /**
    * Gets assetIds
    *  资产ID列表
    *
    * @return string[]
    */
    public function getAssetIds()
    {
        return $this->container['assetIds'];
    }

    /**
    * Sets assetIds
    *
    * @param string[] $assetIds 资产ID列表
    *
    * @return $this
    */
    public function setAssetIds($assetIds)
    {
        $this->container['assetIds'] = $assetIds;
        return $this;
    }

    /**
    * Gets destProjectId
    *  目标用户ID
    *
    * @return string
    */
    public function getDestProjectId()
    {
        return $this->container['destProjectId'];
    }

    /**
    * Sets destProjectId
    *
    * @param string $destProjectId 目标用户ID
    *
    * @return $this
    */
    public function setDestProjectId($destProjectId)
    {
        $this->container['destProjectId'] = $destProjectId;
        return $this;
    }

    /**
    * Gets memo
    *  备注信息
    *
    * @return string|null
    */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
    * Sets memo
    *
    * @param string|null $memo 备注信息
    *
    * @return $this
    */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;
        return $this;
    }

    /**
    * Gets autoAccept
    *  是否自动接收,管理员可用
    *
    * @return bool|null
    */
    public function getAutoAccept()
    {
        return $this->container['autoAccept'];
    }

    /**
    * Sets autoAccept
    *
    * @param bool|null $autoAccept 是否自动接收,管理员可用
    *
    * @return $this
    */
    public function setAutoAccept($autoAccept)
    {
        $this->container['autoAccept'] = $autoAccept;
        return $this;
    }

    /**
    * Gets autoActive
    *  是否自动激活,管理员可用
    *
    * @return bool|null
    */
    public function getAutoActive()
    {
        return $this->container['autoActive'];
    }

    /**
    * Sets autoActive
    *
    * @param bool|null $autoActive 是否自动激活,管理员可用
    *
    * @return $this
    */
    public function setAutoActive($autoActive)
    {
        $this->container['autoActive'] = $autoActive;
        return $this;
    }

    /**
    * Gets isNeedBilling
    *  资产转移时，是否需要从接收方扣减资源（产生计费话单）
    *
    * @return bool|null
    */
    public function getIsNeedBilling()
    {
        return $this->container['isNeedBilling'];
    }

    /**
    * Sets isNeedBilling
    *
    * @param bool|null $isNeedBilling 资产转移时，是否需要从接收方扣减资源（产生计费话单）
    *
    * @return $this
    */
    public function setIsNeedBilling($isNeedBilling)
    {
        $this->container['isNeedBilling'] = $isNeedBilling;
        return $this;
    }

    /**
    * Gets transferJobId
    *  转移任务ID，仅在transfer_type=TRANSFER_BACK时需要填写。
    *
    * @return string|null
    */
    public function getTransferJobId()
    {
        return $this->container['transferJobId'];
    }

    /**
    * Sets transferJobId
    *
    * @param string|null $transferJobId 转移任务ID，仅在transfer_type=TRANSFER_BACK时需要填写。
    *
    * @return $this
    */
    public function setTransferJobId($transferJobId)
    {
        $this->container['transferJobId'] = $transferJobId;
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

