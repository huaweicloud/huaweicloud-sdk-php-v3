<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Execution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Execution';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  记录ID
    * policyId  策略ID
    * status  状态
    * statusText  状态详情
    * total  总数
    * failed  失败数
    * succeed  成功数
    * inProgress  进行中的数量
    * stopped  停止数
    * trigger  触发类型
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'policyId' => 'int',
            'status' => 'string',
            'statusText' => 'string',
            'total' => 'int',
            'failed' => 'int',
            'succeed' => 'int',
            'inProgress' => 'int',
            'stopped' => 'int',
            'trigger' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  记录ID
    * policyId  策略ID
    * status  状态
    * statusText  状态详情
    * total  总数
    * failed  失败数
    * succeed  成功数
    * inProgress  进行中的数量
    * stopped  停止数
    * trigger  触发类型
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'policyId' => null,
        'status' => null,
        'statusText' => null,
        'total' => null,
        'failed' => null,
        'succeed' => null,
        'inProgress' => null,
        'stopped' => null,
        'trigger' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * id  记录ID
    * policyId  策略ID
    * status  状态
    * statusText  状态详情
    * total  总数
    * failed  失败数
    * succeed  成功数
    * inProgress  进行中的数量
    * stopped  停止数
    * trigger  触发类型
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'policyId' => 'policy_id',
            'status' => 'status',
            'statusText' => 'status_text',
            'total' => 'total',
            'failed' => 'failed',
            'succeed' => 'succeed',
            'inProgress' => 'in_progress',
            'stopped' => 'stopped',
            'trigger' => 'trigger',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  记录ID
    * policyId  策略ID
    * status  状态
    * statusText  状态详情
    * total  总数
    * failed  失败数
    * succeed  成功数
    * inProgress  进行中的数量
    * stopped  停止数
    * trigger  触发类型
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'policyId' => 'setPolicyId',
            'status' => 'setStatus',
            'statusText' => 'setStatusText',
            'total' => 'setTotal',
            'failed' => 'setFailed',
            'succeed' => 'setSucceed',
            'inProgress' => 'setInProgress',
            'stopped' => 'setStopped',
            'trigger' => 'setTrigger',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  记录ID
    * policyId  策略ID
    * status  状态
    * statusText  状态详情
    * total  总数
    * failed  失败数
    * succeed  成功数
    * inProgress  进行中的数量
    * stopped  停止数
    * trigger  触发类型
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'policyId' => 'getPolicyId',
            'status' => 'getStatus',
            'statusText' => 'getStatusText',
            'total' => 'getTotal',
            'failed' => 'getFailed',
            'succeed' => 'getSucceed',
            'inProgress' => 'getInProgress',
            'stopped' => 'getStopped',
            'trigger' => 'getTrigger',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusText'] = isset($data['statusText']) ? $data['statusText'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['succeed'] = isset($data['succeed']) ? $data['succeed'] : null;
        $this->container['inProgress'] = isset($data['inProgress']) ? $data['inProgress'] : null;
        $this->container['stopped'] = isset($data['stopped']) ? $data['stopped'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['statusText'] === null) {
            $invalidProperties[] = "'statusText' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['failed'] === null) {
            $invalidProperties[] = "'failed' can't be null";
        }
        if ($this->container['succeed'] === null) {
            $invalidProperties[] = "'succeed' can't be null";
        }
        if ($this->container['inProgress'] === null) {
            $invalidProperties[] = "'inProgress' can't be null";
        }
        if ($this->container['stopped'] === null) {
            $invalidProperties[] = "'stopped' can't be null";
        }
        if ($this->container['trigger'] === null) {
            $invalidProperties[] = "'trigger' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    *  记录ID
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 记录ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID
    *
    * @return int
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param int $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusText
    *  状态详情
    *
    * @return string
    */
    public function getStatusText()
    {
        return $this->container['statusText'];
    }

    /**
    * Sets statusText
    *
    * @param string $statusText 状态详情
    *
    * @return $this
    */
    public function setStatusText($statusText)
    {
        $this->container['statusText'] = $statusText;
        return $this;
    }

    /**
    * Gets total
    *  总数
    *
    * @return int
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int $total 总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets failed
    *  失败数
    *
    * @return int
    */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
    * Sets failed
    *
    * @param int $failed 失败数
    *
    * @return $this
    */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;
        return $this;
    }

    /**
    * Gets succeed
    *  成功数
    *
    * @return int
    */
    public function getSucceed()
    {
        return $this->container['succeed'];
    }

    /**
    * Sets succeed
    *
    * @param int $succeed 成功数
    *
    * @return $this
    */
    public function setSucceed($succeed)
    {
        $this->container['succeed'] = $succeed;
        return $this;
    }

    /**
    * Gets inProgress
    *  进行中的数量
    *
    * @return int
    */
    public function getInProgress()
    {
        return $this->container['inProgress'];
    }

    /**
    * Sets inProgress
    *
    * @param int $inProgress 进行中的数量
    *
    * @return $this
    */
    public function setInProgress($inProgress)
    {
        $this->container['inProgress'] = $inProgress;
        return $this;
    }

    /**
    * Gets stopped
    *  停止数
    *
    * @return int
    */
    public function getStopped()
    {
        return $this->container['stopped'];
    }

    /**
    * Sets stopped
    *
    * @param int $stopped 停止数
    *
    * @return $this
    */
    public function setStopped($stopped)
    {
        $this->container['stopped'] = $stopped;
        return $this;
    }

    /**
    * Gets trigger
    *  触发类型
    *
    * @return string
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param string $trigger 触发类型
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

