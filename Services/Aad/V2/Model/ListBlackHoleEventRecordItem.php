<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBlackHoleEventRecordItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBlackHoleEventRecordItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id
    * tenantName  租户名
    * vip  高防ip
    * vipId  ip id
    * instanceId  实例id
    * eventType  事件类型 block-黑洞中，unblock-黑洞结束
    * startTime  封堵开始时间
    * endTime  封堵结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'tenantName' => 'string',
            'vip' => 'string',
            'vipId' => 'string',
            'instanceId' => 'string',
            'eventType' => 'string',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id
    * tenantName  租户名
    * vip  高防ip
    * vipId  ip id
    * instanceId  实例id
    * eventType  事件类型 block-黑洞中，unblock-黑洞结束
    * startTime  封堵开始时间
    * endTime  封堵结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'tenantName' => null,
        'vip' => null,
        'vipId' => null,
        'instanceId' => null,
        'eventType' => null,
        'startTime' => 'int32',
        'endTime' => 'int32'
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
    * projectId  项目id
    * tenantName  租户名
    * vip  高防ip
    * vipId  ip id
    * instanceId  实例id
    * eventType  事件类型 block-黑洞中，unblock-黑洞结束
    * startTime  封堵开始时间
    * endTime  封堵结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'tenantName' => 'tenant_name',
            'vip' => 'vip',
            'vipId' => 'vip_id',
            'instanceId' => 'instance_id',
            'eventType' => 'event_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id
    * tenantName  租户名
    * vip  高防ip
    * vipId  ip id
    * instanceId  实例id
    * eventType  事件类型 block-黑洞中，unblock-黑洞结束
    * startTime  封堵开始时间
    * endTime  封堵结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'tenantName' => 'setTenantName',
            'vip' => 'setVip',
            'vipId' => 'setVipId',
            'instanceId' => 'setInstanceId',
            'eventType' => 'setEventType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id
    * tenantName  租户名
    * vip  高防ip
    * vipId  ip id
    * instanceId  实例id
    * eventType  事件类型 block-黑洞中，unblock-黑洞结束
    * startTime  封堵开始时间
    * endTime  封堵结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'tenantName' => 'getTenantName',
            'vip' => 'getVip',
            'vipId' => 'getVipId',
            'instanceId' => 'getInstanceId',
            'eventType' => 'getEventType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
        $this->container['vipId'] = isset($data['vipId']) ? $data['vipId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32768)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['tenantName'] === null) {
            $invalidProperties[] = "'tenantName' can't be null";
        }
            if ((mb_strlen($this->container['tenantName']) > 32768)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['tenantName']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vip'] === null) {
            $invalidProperties[] = "'vip' can't be null";
        }
            if ((mb_strlen($this->container['vip']) > 32768)) {
                $invalidProperties[] = "invalid value for 'vip', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['vip']) < 0)) {
                $invalidProperties[] = "invalid value for 'vip', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vipId'] === null) {
            $invalidProperties[] = "'vipId' can't be null";
        }
            if ((mb_strlen($this->container['vipId']) > 32768)) {
                $invalidProperties[] = "invalid value for 'vipId', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['vipId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vipId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 32768)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
            if ((mb_strlen($this->container['eventType']) > 32768)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['eventType']) < 0)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (($this->container['startTime'] > 2000)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 2000.";
            }
            if (($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 2000)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
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
    * Gets projectId
    *  项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets tenantName
    *  租户名
    *
    * @return string
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string $tenantName 租户名
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets vip
    *  高防ip
    *
    * @return string
    */
    public function getVip()
    {
        return $this->container['vip'];
    }

    /**
    * Sets vip
    *
    * @param string $vip 高防ip
    *
    * @return $this
    */
    public function setVip($vip)
    {
        $this->container['vip'] = $vip;
        return $this;
    }

    /**
    * Gets vipId
    *  ip id
    *
    * @return string
    */
    public function getVipId()
    {
        return $this->container['vipId'];
    }

    /**
    * Sets vipId
    *
    * @param string $vipId ip id
    *
    * @return $this
    */
    public function setVipId($vipId)
    {
        $this->container['vipId'] = $vipId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型 block-黑洞中，unblock-黑洞结束
    *
    * @return string
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string $eventType 事件类型 block-黑洞中，unblock-黑洞结束
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets startTime
    *  封堵开始时间
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 封堵开始时间
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
    *  封堵结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 封堵结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

