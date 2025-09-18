<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplicationRecordsExtraInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplicationRecordsExtraInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * progress  复制进度
    * failCode  失败错误码，成功时为空
    * failReason  错误原因
    * autoTrigger  是否为自动调度复制
    * destinationVaultId  目标端的存储库id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'progress' => 'int',
            'failCode' => 'string',
            'failReason' => 'string',
            'autoTrigger' => 'bool',
            'destinationVaultId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * progress  复制进度
    * failCode  失败错误码，成功时为空
    * failReason  错误原因
    * autoTrigger  是否为自动调度复制
    * destinationVaultId  目标端的存储库id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'progress' => 'int32',
        'failCode' => null,
        'failReason' => null,
        'autoTrigger' => null,
        'destinationVaultId' => null
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
    * progress  复制进度
    * failCode  失败错误码，成功时为空
    * failReason  错误原因
    * autoTrigger  是否为自动调度复制
    * destinationVaultId  目标端的存储库id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'progress' => 'progress',
            'failCode' => 'fail_code',
            'failReason' => 'fail_reason',
            'autoTrigger' => 'auto_trigger',
            'destinationVaultId' => 'destination_vault_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * progress  复制进度
    * failCode  失败错误码，成功时为空
    * failReason  错误原因
    * autoTrigger  是否为自动调度复制
    * destinationVaultId  目标端的存储库id
    *
    * @var string[]
    */
    protected static $setters = [
            'progress' => 'setProgress',
            'failCode' => 'setFailCode',
            'failReason' => 'setFailReason',
            'autoTrigger' => 'setAutoTrigger',
            'destinationVaultId' => 'setDestinationVaultId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * progress  复制进度
    * failCode  失败错误码，成功时为空
    * failReason  错误原因
    * autoTrigger  是否为自动调度复制
    * destinationVaultId  目标端的存储库id
    *
    * @var string[]
    */
    protected static $getters = [
            'progress' => 'getProgress',
            'failCode' => 'getFailCode',
            'failReason' => 'getFailReason',
            'autoTrigger' => 'getAutoTrigger',
            'destinationVaultId' => 'getDestinationVaultId'
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
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['failCode'] = isset($data['failCode']) ? $data['failCode'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['autoTrigger'] = isset($data['autoTrigger']) ? $data['autoTrigger'] : null;
        $this->container['destinationVaultId'] = isset($data['destinationVaultId']) ? $data['destinationVaultId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets progress
    *  复制进度
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 复制进度
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets failCode
    *  失败错误码，成功时为空
    *
    * @return string|null
    */
    public function getFailCode()
    {
        return $this->container['failCode'];
    }

    /**
    * Sets failCode
    *
    * @param string|null $failCode 失败错误码，成功时为空
    *
    * @return $this
    */
    public function setFailCode($failCode)
    {
        $this->container['failCode'] = $failCode;
        return $this;
    }

    /**
    * Gets failReason
    *  错误原因
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 错误原因
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets autoTrigger
    *  是否为自动调度复制
    *
    * @return bool|null
    */
    public function getAutoTrigger()
    {
        return $this->container['autoTrigger'];
    }

    /**
    * Sets autoTrigger
    *
    * @param bool|null $autoTrigger 是否为自动调度复制
    *
    * @return $this
    */
    public function setAutoTrigger($autoTrigger)
    {
        $this->container['autoTrigger'] = $autoTrigger;
        return $this;
    }

    /**
    * Gets destinationVaultId
    *  目标端的存储库id
    *
    * @return string|null
    */
    public function getDestinationVaultId()
    {
        return $this->container['destinationVaultId'];
    }

    /**
    * Sets destinationVaultId
    *
    * @param string|null $destinationVaultId 目标端的存储库id
    *
    * @return $this
    */
    public function setDestinationVaultId($destinationVaultId)
    {
        $this->container['destinationVaultId'] = $destinationVaultId;
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

