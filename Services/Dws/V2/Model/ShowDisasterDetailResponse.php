<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDisasterDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDisasterDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  容灾ID
    * name  容灾名称
    * drType  容灾类型
    * status  容灾状态
    * primaryCluster  primaryCluster
    * standbyCluster  standbyCluster
    * drSyncPeriod  容灾同步周期
    * startTime  容灾启动时间
    * createTime  容灾创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'drType' => 'string',
            'status' => 'string',
            'primaryCluster' => '\HuaweiCloud\SDK\Dws\V2\Model\DisasterRecoveryCluster',
            'standbyCluster' => '\HuaweiCloud\SDK\Dws\V2\Model\DisasterRecoveryCluster',
            'drSyncPeriod' => 'string',
            'startTime' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  容灾ID
    * name  容灾名称
    * drType  容灾类型
    * status  容灾状态
    * primaryCluster  primaryCluster
    * standbyCluster  standbyCluster
    * drSyncPeriod  容灾同步周期
    * startTime  容灾启动时间
    * createTime  容灾创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'drType' => null,
        'status' => null,
        'primaryCluster' => null,
        'standbyCluster' => null,
        'drSyncPeriod' => null,
        'startTime' => null,
        'createTime' => null
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
    * id  容灾ID
    * name  容灾名称
    * drType  容灾类型
    * status  容灾状态
    * primaryCluster  primaryCluster
    * standbyCluster  standbyCluster
    * drSyncPeriod  容灾同步周期
    * startTime  容灾启动时间
    * createTime  容灾创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'drType' => 'dr_type',
            'status' => 'status',
            'primaryCluster' => 'primary_cluster',
            'standbyCluster' => 'standby_cluster',
            'drSyncPeriod' => 'dr_sync_period',
            'startTime' => 'start_time',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  容灾ID
    * name  容灾名称
    * drType  容灾类型
    * status  容灾状态
    * primaryCluster  primaryCluster
    * standbyCluster  standbyCluster
    * drSyncPeriod  容灾同步周期
    * startTime  容灾启动时间
    * createTime  容灾创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'drType' => 'setDrType',
            'status' => 'setStatus',
            'primaryCluster' => 'setPrimaryCluster',
            'standbyCluster' => 'setStandbyCluster',
            'drSyncPeriod' => 'setDrSyncPeriod',
            'startTime' => 'setStartTime',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  容灾ID
    * name  容灾名称
    * drType  容灾类型
    * status  容灾状态
    * primaryCluster  primaryCluster
    * standbyCluster  standbyCluster
    * drSyncPeriod  容灾同步周期
    * startTime  容灾启动时间
    * createTime  容灾创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'drType' => 'getDrType',
            'status' => 'getStatus',
            'primaryCluster' => 'getPrimaryCluster',
            'standbyCluster' => 'getStandbyCluster',
            'drSyncPeriod' => 'getDrSyncPeriod',
            'startTime' => 'getStartTime',
            'createTime' => 'getCreateTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['drType'] = isset($data['drType']) ? $data['drType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['primaryCluster'] = isset($data['primaryCluster']) ? $data['primaryCluster'] : null;
        $this->container['standbyCluster'] = isset($data['standbyCluster']) ? $data['standbyCluster'] : null;
        $this->container['drSyncPeriod'] = isset($data['drSyncPeriod']) ? $data['drSyncPeriod'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets id
    *  容灾ID
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
    * @param string|null $id 容灾ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  容灾名称
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
    * @param string|null $name 容灾名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets drType
    *  容灾类型
    *
    * @return string|null
    */
    public function getDrType()
    {
        return $this->container['drType'];
    }

    /**
    * Sets drType
    *
    * @param string|null $drType 容灾类型
    *
    * @return $this
    */
    public function setDrType($drType)
    {
        $this->container['drType'] = $drType;
        return $this;
    }

    /**
    * Gets status
    *  容灾状态
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
    * @param string|null $status 容灾状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets primaryCluster
    *  primaryCluster
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\DisasterRecoveryCluster|null
    */
    public function getPrimaryCluster()
    {
        return $this->container['primaryCluster'];
    }

    /**
    * Sets primaryCluster
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\DisasterRecoveryCluster|null $primaryCluster primaryCluster
    *
    * @return $this
    */
    public function setPrimaryCluster($primaryCluster)
    {
        $this->container['primaryCluster'] = $primaryCluster;
        return $this;
    }

    /**
    * Gets standbyCluster
    *  standbyCluster
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\DisasterRecoveryCluster|null
    */
    public function getStandbyCluster()
    {
        return $this->container['standbyCluster'];
    }

    /**
    * Sets standbyCluster
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\DisasterRecoveryCluster|null $standbyCluster standbyCluster
    *
    * @return $this
    */
    public function setStandbyCluster($standbyCluster)
    {
        $this->container['standbyCluster'] = $standbyCluster;
        return $this;
    }

    /**
    * Gets drSyncPeriod
    *  容灾同步周期
    *
    * @return string|null
    */
    public function getDrSyncPeriod()
    {
        return $this->container['drSyncPeriod'];
    }

    /**
    * Sets drSyncPeriod
    *
    * @param string|null $drSyncPeriod 容灾同步周期
    *
    * @return $this
    */
    public function setDrSyncPeriod($drSyncPeriod)
    {
        $this->container['drSyncPeriod'] = $drSyncPeriod;
        return $this;
    }

    /**
    * Gets startTime
    *  容灾启动时间
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
    * @param string|null $startTime 容灾启动时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets createTime
    *  容灾创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 容灾创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

