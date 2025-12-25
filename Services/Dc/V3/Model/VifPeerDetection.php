<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VifPeerDetection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VifPeerDetection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  虚拟接口对等体连通性探测实例uuid
    * vifPeerId  虚拟接口对等体实例uuid
    * projectId  租户id
    * domainId  账号id
    * startTime  探测开始时间
    * endTime  探测结束时间
    * status  探测状态，取值范围： - processing: 探测处理中 - complete: 探测完成 - error: 探测异常退出
    * lossRatio  丢包率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'vifPeerId' => 'string',
            'projectId' => 'string',
            'domainId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'lossRatio' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  虚拟接口对等体连通性探测实例uuid
    * vifPeerId  虚拟接口对等体实例uuid
    * projectId  租户id
    * domainId  账号id
    * startTime  探测开始时间
    * endTime  探测结束时间
    * status  探测状态，取值范围： - processing: 探测处理中 - complete: 探测完成 - error: 探测异常退出
    * lossRatio  丢包率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'vifPeerId' => null,
        'projectId' => null,
        'domainId' => null,
        'startTime' => null,
        'endTime' => null,
        'status' => null,
        'lossRatio' => null
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
    * id  虚拟接口对等体连通性探测实例uuid
    * vifPeerId  虚拟接口对等体实例uuid
    * projectId  租户id
    * domainId  账号id
    * startTime  探测开始时间
    * endTime  探测结束时间
    * status  探测状态，取值范围： - processing: 探测处理中 - complete: 探测完成 - error: 探测异常退出
    * lossRatio  丢包率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'vifPeerId' => 'vif_peer_id',
            'projectId' => 'project_id',
            'domainId' => 'domain_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'lossRatio' => 'loss_ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  虚拟接口对等体连通性探测实例uuid
    * vifPeerId  虚拟接口对等体实例uuid
    * projectId  租户id
    * domainId  账号id
    * startTime  探测开始时间
    * endTime  探测结束时间
    * status  探测状态，取值范围： - processing: 探测处理中 - complete: 探测完成 - error: 探测异常退出
    * lossRatio  丢包率
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'vifPeerId' => 'setVifPeerId',
            'projectId' => 'setProjectId',
            'domainId' => 'setDomainId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'lossRatio' => 'setLossRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  虚拟接口对等体连通性探测实例uuid
    * vifPeerId  虚拟接口对等体实例uuid
    * projectId  租户id
    * domainId  账号id
    * startTime  探测开始时间
    * endTime  探测结束时间
    * status  探测状态，取值范围： - processing: 探测处理中 - complete: 探测完成 - error: 探测异常退出
    * lossRatio  丢包率
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'vifPeerId' => 'getVifPeerId',
            'projectId' => 'getProjectId',
            'domainId' => 'getDomainId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'lossRatio' => 'getLossRatio'
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
    const STATUS_PROCESSING = 'processing';
    const STATUS_COMPLETE = 'complete';
    const STATUS_ERROR = 'error';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROCESSING,
            self::STATUS_COMPLETE,
            self::STATUS_ERROR,
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
        $this->container['vifPeerId'] = isset($data['vifPeerId']) ? $data['vifPeerId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lossRatio'] = isset($data['lossRatio']) ? $data['lossRatio'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vifPeerId']) && (mb_strlen($this->container['vifPeerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vifPeerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vifPeerId']) && (mb_strlen($this->container['vifPeerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vifPeerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['lossRatio']) && ($this->container['lossRatio'] > 100)) {
                $invalidProperties[] = "invalid value for 'lossRatio', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['lossRatio']) && ($this->container['lossRatio'] < 0)) {
                $invalidProperties[] = "invalid value for 'lossRatio', must be bigger than or equal to 0.";
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
    *  虚拟接口对等体连通性探测实例uuid
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
    * @param string|null $id 虚拟接口对等体连通性探测实例uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets vifPeerId
    *  虚拟接口对等体实例uuid
    *
    * @return string|null
    */
    public function getVifPeerId()
    {
        return $this->container['vifPeerId'];
    }

    /**
    * Sets vifPeerId
    *
    * @param string|null $vifPeerId 虚拟接口对等体实例uuid
    *
    * @return $this
    */
    public function setVifPeerId($vifPeerId)
    {
        $this->container['vifPeerId'] = $vifPeerId;
        return $this;
    }

    /**
    * Gets projectId
    *  租户id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 租户id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets domainId
    *  账号id
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
    * @param string|null $domainId 账号id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets startTime
    *  探测开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 探测开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  探测结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 探测结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  探测状态，取值范围： - processing: 探测处理中 - complete: 探测完成 - error: 探测异常退出
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
    * @param string|null $status 探测状态，取值范围： - processing: 探测处理中 - complete: 探测完成 - error: 探测异常退出
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets lossRatio
    *  丢包率
    *
    * @return int|null
    */
    public function getLossRatio()
    {
        return $this->container['lossRatio'];
    }

    /**
    * Sets lossRatio
    *
    * @param int|null $lossRatio 丢包率
    *
    * @return $this
    */
    public function setLossRatio($lossRatio)
    {
        $this->container['lossRatio'] = $lossRatio;
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

