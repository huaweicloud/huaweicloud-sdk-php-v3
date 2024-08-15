<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportCustomEventRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportCustomEventRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmId  告警id
    * alarmName  告警名称
    * alarmLevel  告警级别。取值为Critical（紧急）, Major（重要）, Minor（次要）, Info（提示）
    * time  告警发生时间
    * nameSpace  告警发生时间
    * regionId  告警发生区域
    * applicationId  应用id
    * resourceName  资源名称
    * resourceId  资源ID
    * alarmDesc  告警描述
    * url  原始告警URL
    * alarmStatus  告警状态。一般取值为alarm（告警中）和ok（已恢复）
    * alarmSource  告警源
    * additional  告警附加信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmId' => 'string',
            'alarmName' => 'string',
            'alarmLevel' => 'string',
            'time' => 'int',
            'nameSpace' => 'string',
            'regionId' => 'string',
            'applicationId' => 'string',
            'resourceName' => 'string',
            'resourceId' => 'string',
            'alarmDesc' => 'string',
            'url' => 'string',
            'alarmStatus' => 'string',
            'alarmSource' => 'string',
            'additional' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmId  告警id
    * alarmName  告警名称
    * alarmLevel  告警级别。取值为Critical（紧急）, Major（重要）, Minor（次要）, Info（提示）
    * time  告警发生时间
    * nameSpace  告警发生时间
    * regionId  告警发生区域
    * applicationId  应用id
    * resourceName  资源名称
    * resourceId  资源ID
    * alarmDesc  告警描述
    * url  原始告警URL
    * alarmStatus  告警状态。一般取值为alarm（告警中）和ok（已恢复）
    * alarmSource  告警源
    * additional  告警附加信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmId' => null,
        'alarmName' => null,
        'alarmLevel' => null,
        'time' => 'int64',
        'nameSpace' => null,
        'regionId' => null,
        'applicationId' => null,
        'resourceName' => null,
        'resourceId' => null,
        'alarmDesc' => null,
        'url' => null,
        'alarmStatus' => null,
        'alarmSource' => null,
        'additional' => null
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
    * alarmId  告警id
    * alarmName  告警名称
    * alarmLevel  告警级别。取值为Critical（紧急）, Major（重要）, Minor（次要）, Info（提示）
    * time  告警发生时间
    * nameSpace  告警发生时间
    * regionId  告警发生区域
    * applicationId  应用id
    * resourceName  资源名称
    * resourceId  资源ID
    * alarmDesc  告警描述
    * url  原始告警URL
    * alarmStatus  告警状态。一般取值为alarm（告警中）和ok（已恢复）
    * alarmSource  告警源
    * additional  告警附加信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmId' => 'alarmId',
            'alarmName' => 'alarmName',
            'alarmLevel' => 'alarmLevel',
            'time' => 'time',
            'nameSpace' => 'nameSpace',
            'regionId' => 'regionId',
            'applicationId' => 'applicationId',
            'resourceName' => 'resourceName',
            'resourceId' => 'resourceId',
            'alarmDesc' => 'alarmDesc',
            'url' => 'URL',
            'alarmStatus' => 'alarmStatus',
            'alarmSource' => 'alarmSource',
            'additional' => 'additional'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmId  告警id
    * alarmName  告警名称
    * alarmLevel  告警级别。取值为Critical（紧急）, Major（重要）, Minor（次要）, Info（提示）
    * time  告警发生时间
    * nameSpace  告警发生时间
    * regionId  告警发生区域
    * applicationId  应用id
    * resourceName  资源名称
    * resourceId  资源ID
    * alarmDesc  告警描述
    * url  原始告警URL
    * alarmStatus  告警状态。一般取值为alarm（告警中）和ok（已恢复）
    * alarmSource  告警源
    * additional  告警附加信息
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmId' => 'setAlarmId',
            'alarmName' => 'setAlarmName',
            'alarmLevel' => 'setAlarmLevel',
            'time' => 'setTime',
            'nameSpace' => 'setNameSpace',
            'regionId' => 'setRegionId',
            'applicationId' => 'setApplicationId',
            'resourceName' => 'setResourceName',
            'resourceId' => 'setResourceId',
            'alarmDesc' => 'setAlarmDesc',
            'url' => 'setUrl',
            'alarmStatus' => 'setAlarmStatus',
            'alarmSource' => 'setAlarmSource',
            'additional' => 'setAdditional'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmId  告警id
    * alarmName  告警名称
    * alarmLevel  告警级别。取值为Critical（紧急）, Major（重要）, Minor（次要）, Info（提示）
    * time  告警发生时间
    * nameSpace  告警发生时间
    * regionId  告警发生区域
    * applicationId  应用id
    * resourceName  资源名称
    * resourceId  资源ID
    * alarmDesc  告警描述
    * url  原始告警URL
    * alarmStatus  告警状态。一般取值为alarm（告警中）和ok（已恢复）
    * alarmSource  告警源
    * additional  告警附加信息
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmId' => 'getAlarmId',
            'alarmName' => 'getAlarmName',
            'alarmLevel' => 'getAlarmLevel',
            'time' => 'getTime',
            'nameSpace' => 'getNameSpace',
            'regionId' => 'getRegionId',
            'applicationId' => 'getApplicationId',
            'resourceName' => 'getResourceName',
            'resourceId' => 'getResourceId',
            'alarmDesc' => 'getAlarmDesc',
            'url' => 'getUrl',
            'alarmStatus' => 'getAlarmStatus',
            'alarmSource' => 'getAlarmSource',
            'additional' => 'getAdditional'
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
    const ALARM_LEVEL_CRITICAL = 'Critical';
    const ALARM_LEVEL_MAJOR = 'Major';
    const ALARM_LEVEL_MINOR = 'Minor';
    const ALARM_LEVEL_INFO = 'Info';
    const ALARM_STATUS_ALARM = 'alarm';
    const ALARM_STATUS_OK = 'ok';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmLevelAllowableValues()
    {
        return [
            self::ALARM_LEVEL_CRITICAL,
            self::ALARM_LEVEL_MAJOR,
            self::ALARM_LEVEL_MINOR,
            self::ALARM_LEVEL_INFO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmStatusAllowableValues()
    {
        return [
            self::ALARM_STATUS_ALARM,
            self::ALARM_STATUS_OK,
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
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['alarmName'] = isset($data['alarmName']) ? $data['alarmName'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['nameSpace'] = isset($data['nameSpace']) ? $data['nameSpace'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['alarmDesc'] = isset($data['alarmDesc']) ? $data['alarmDesc'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['alarmStatus'] = isset($data['alarmStatus']) ? $data['alarmStatus'] : null;
        $this->container['alarmSource'] = isset($data['alarmSource']) ? $data['alarmSource'] : null;
        $this->container['additional'] = isset($data['additional']) ? $data['additional'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmId'] === null) {
            $invalidProperties[] = "'alarmId' can't be null";
        }
            if ((mb_strlen($this->container['alarmId']) > 255)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['alarmId']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['alarmName'] === null) {
            $invalidProperties[] = "'alarmName' can't be null";
        }
            if ((mb_strlen($this->container['alarmName']) > 255)) {
                $invalidProperties[] = "invalid value for 'alarmName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['alarmName']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['alarmLevel'] === null) {
            $invalidProperties[] = "'alarmLevel' can't be null";
        }
            $allowedValues = $this->getAlarmLevelAllowableValues();
                if (!is_null($this->container['alarmLevel']) && !in_array($this->container['alarmLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['alarmLevel']) > 255)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['alarmLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['nameSpace'] === null) {
            $invalidProperties[] = "'nameSpace' can't be null";
        }
            if ((mb_strlen($this->container['nameSpace']) > 255)) {
                $invalidProperties[] = "invalid value for 'nameSpace', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['nameSpace']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameSpace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['applicationId']) && (mb_strlen($this->container['applicationId']) > 255)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['applicationId']) && (mb_strlen($this->container['applicationId']) < 1)) {
                $invalidProperties[] = "invalid value for 'applicationId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 255)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['alarmDesc'] === null) {
            $invalidProperties[] = "'alarmDesc' can't be null";
        }
            if ((mb_strlen($this->container['alarmDesc']) > 255)) {
                $invalidProperties[] = "invalid value for 'alarmDesc', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['alarmDesc']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmDesc', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 255)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 0)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAlarmStatusAllowableValues();
                if (!is_null($this->container['alarmStatus']) && !in_array($this->container['alarmStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['alarmStatus']) && (mb_strlen($this->container['alarmStatus']) > 255)) {
                $invalidProperties[] = "invalid value for 'alarmStatus', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['alarmStatus']) && (mb_strlen($this->container['alarmStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'alarmStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['alarmSource'] === null) {
            $invalidProperties[] = "'alarmSource' can't be null";
        }
            if ((mb_strlen($this->container['alarmSource']) > 255)) {
                $invalidProperties[] = "invalid value for 'alarmSource', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['alarmSource']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmSource', the character length must be bigger than or equal to 1.";
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
    * Gets alarmId
    *  告警id
    *
    * @return string
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string $alarmId 告警id
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets alarmName
    *  告警名称
    *
    * @return string
    */
    public function getAlarmName()
    {
        return $this->container['alarmName'];
    }

    /**
    * Sets alarmName
    *
    * @param string $alarmName 告警名称
    *
    * @return $this
    */
    public function setAlarmName($alarmName)
    {
        $this->container['alarmName'] = $alarmName;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  告警级别。取值为Critical（紧急）, Major（重要）, Minor（次要）, Info（提示）
    *
    * @return string
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param string $alarmLevel 告警级别。取值为Critical（紧急）, Major（重要）, Minor（次要）, Info（提示）
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets time
    *  告警发生时间
    *
    * @return int
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int $time 告警发生时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets nameSpace
    *  告警发生时间
    *
    * @return string
    */
    public function getNameSpace()
    {
        return $this->container['nameSpace'];
    }

    /**
    * Sets nameSpace
    *
    * @param string $nameSpace 告警发生时间
    *
    * @return $this
    */
    public function setNameSpace($nameSpace)
    {
        $this->container['nameSpace'] = $nameSpace;
        return $this;
    }

    /**
    * Gets regionId
    *  告警发生区域
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 告警发生区域
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets applicationId
    *  应用id
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId 应用id
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets alarmDesc
    *  告警描述
    *
    * @return string
    */
    public function getAlarmDesc()
    {
        return $this->container['alarmDesc'];
    }

    /**
    * Sets alarmDesc
    *
    * @param string $alarmDesc 告警描述
    *
    * @return $this
    */
    public function setAlarmDesc($alarmDesc)
    {
        $this->container['alarmDesc'] = $alarmDesc;
        return $this;
    }

    /**
    * Gets url
    *  原始告警URL
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 原始告警URL
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets alarmStatus
    *  告警状态。一般取值为alarm（告警中）和ok（已恢复）
    *
    * @return string|null
    */
    public function getAlarmStatus()
    {
        return $this->container['alarmStatus'];
    }

    /**
    * Sets alarmStatus
    *
    * @param string|null $alarmStatus 告警状态。一般取值为alarm（告警中）和ok（已恢复）
    *
    * @return $this
    */
    public function setAlarmStatus($alarmStatus)
    {
        $this->container['alarmStatus'] = $alarmStatus;
        return $this;
    }

    /**
    * Gets alarmSource
    *  告警源
    *
    * @return string
    */
    public function getAlarmSource()
    {
        return $this->container['alarmSource'];
    }

    /**
    * Sets alarmSource
    *
    * @param string $alarmSource 告警源
    *
    * @return $this
    */
    public function setAlarmSource($alarmSource)
    {
        $this->container['alarmSource'] = $alarmSource;
        return $this;
    }

    /**
    * Gets additional
    *  告警附加信息
    *
    * @return object|null
    */
    public function getAdditional()
    {
        return $this->container['additional'];
    }

    /**
    * Sets additional
    *
    * @param object|null $additional 告警附加信息
    *
    * @return $this
    */
    public function setAdditional($additional)
    {
        $this->container['additional'] = $additional;
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

