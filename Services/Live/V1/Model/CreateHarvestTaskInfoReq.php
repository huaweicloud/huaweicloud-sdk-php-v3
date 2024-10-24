<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHarvestTaskInfoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHarvestTaskInfoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * startTime  开始时间。Unix时间戳：单位是秒
    * endTime  结束时间。Unix时间戳：单位是秒
    * eventName  事件名称。必选配置
    * taskDesc  任务描述，可选配置
    * packageInfo  packageInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'appName' => 'string',
            'id' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'eventName' => 'string',
            'taskDesc' => 'string',
            'packageInfo' => '\HuaweiCloud\SDK\Live\V1\Model\VodPackageInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * startTime  开始时间。Unix时间戳：单位是秒
    * endTime  结束时间。Unix时间戳：单位是秒
    * eventName  事件名称。必选配置
    * taskDesc  任务描述，可选配置
    * packageInfo  packageInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'appName' => null,
        'id' => null,
        'startTime' => null,
        'endTime' => null,
        'eventName' => null,
        'taskDesc' => null,
        'packageInfo' => null
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
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * startTime  开始时间。Unix时间戳：单位是秒
    * endTime  结束时间。Unix时间戳：单位是秒
    * eventName  事件名称。必选配置
    * taskDesc  任务描述，可选配置
    * packageInfo  packageInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'appName' => 'app_name',
            'id' => 'id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'eventName' => 'event_name',
            'taskDesc' => 'task_desc',
            'packageInfo' => 'package_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * startTime  开始时间。Unix时间戳：单位是秒
    * endTime  结束时间。Unix时间戳：单位是秒
    * eventName  事件名称。必选配置
    * taskDesc  任务描述，可选配置
    * packageInfo  packageInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'id' => 'setId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'eventName' => 'setEventName',
            'taskDesc' => 'setTaskDesc',
            'packageInfo' => 'setPackageInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  频道推流域名
    * appName  组名或应用名
    * id  频道ID。频道唯一标识，为必填项。
    * startTime  开始时间。Unix时间戳：单位是秒
    * endTime  结束时间。Unix时间戳：单位是秒
    * eventName  事件名称。必选配置
    * taskDesc  任务描述，可选配置
    * packageInfo  packageInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'id' => 'getId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'eventName' => 'getEventName',
            'taskDesc' => 'getTaskDesc',
            'packageInfo' => 'getPackageInfo'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['taskDesc'] = isset($data['taskDesc']) ? $data['taskDesc'] : null;
        $this->container['packageInfo'] = isset($data['packageInfo']) ? $data['packageInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['appName'] === null) {
            $invalidProperties[] = "'appName' can't be null";
        }
            if ((mb_strlen($this->container['appName']) > 255)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['id']) < 2)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (($this->container['startTime'] > 32535086400)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 32535086400.";
            }
            if (($this->container['startTime'] < 978177600)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 978177600.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (($this->container['endTime'] > 32535086400)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 32535086400.";
            }
            if (($this->container['endTime'] < 978177600)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 978177600.";
            }
        if ($this->container['eventName'] === null) {
            $invalidProperties[] = "'eventName' can't be null";
        }
            if ((mb_strlen($this->container['eventName']) > 255)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['eventName']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskDesc']) && (mb_strlen($this->container['taskDesc']) > 255)) {
                $invalidProperties[] = "invalid value for 'taskDesc', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['taskDesc']) && (mb_strlen($this->container['taskDesc']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskDesc', the character length must be bigger than or equal to 1.";
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
    * Gets domain
    *  频道推流域名
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 频道推流域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  组名或应用名
    *
    * @return string
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string $appName 组名或应用名
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets id
    *  频道ID。频道唯一标识，为必填项。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 频道ID。频道唯一标识，为必填项。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。Unix时间戳：单位是秒
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
    * @param int $startTime 开始时间。Unix时间戳：单位是秒
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
    *  结束时间。Unix时间戳：单位是秒
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 结束时间。Unix时间戳：单位是秒
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets eventName
    *  事件名称。必选配置
    *
    * @return string
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string $eventName 事件名称。必选配置
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets taskDesc
    *  任务描述，可选配置
    *
    * @return string|null
    */
    public function getTaskDesc()
    {
        return $this->container['taskDesc'];
    }

    /**
    * Sets taskDesc
    *
    * @param string|null $taskDesc 任务描述，可选配置
    *
    * @return $this
    */
    public function setTaskDesc($taskDesc)
    {
        $this->container['taskDesc'] = $taskDesc;
        return $this;
    }

    /**
    * Gets packageInfo
    *  packageInfo
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\VodPackageInfo|null
    */
    public function getPackageInfo()
    {
        return $this->container['packageInfo'];
    }

    /**
    * Sets packageInfo
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\VodPackageInfo|null $packageInfo packageInfo
    *
    * @return $this
    */
    public function setPackageInfo($packageInfo)
    {
        $this->container['packageInfo'] = $packageInfo;
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

