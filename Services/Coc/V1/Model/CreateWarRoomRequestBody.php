<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWarRoomRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWarRoomRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * warRoomName  WarRoom名称
    * description  WarRoom描述
    * regionCodeList  区域id
    * applicationIdList  影响应用id
    * incidentNumber  事件单号
    * scheduleGroup  排班分组
    * participant  参与者
    * warRoomAdmin  WarRoom管理员
    * applicationNames  应用名称列表
    * regionNames  region名称列表
    * enterpriseProjectId  企业项目id
    * notificationType  创建群组方式
    * notificationModes  发送通知的方式，支持多个通知方式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'warRoomName' => 'string',
            'description' => 'string',
            'regionCodeList' => 'string[]',
            'applicationIdList' => 'string[]',
            'incidentNumber' => 'string',
            'scheduleGroup' => '\HuaweiCloud\SDK\Coc\V1\Model\ScheduleGroupInfo[]',
            'participant' => 'string[]',
            'warRoomAdmin' => 'string',
            'applicationNames' => 'string[]',
            'regionNames' => 'string[]',
            'enterpriseProjectId' => 'string',
            'notificationType' => 'string',
            'notificationModes' => '\HuaweiCloud\SDK\Coc\V1\Model\NotificationMode[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * warRoomName  WarRoom名称
    * description  WarRoom描述
    * regionCodeList  区域id
    * applicationIdList  影响应用id
    * incidentNumber  事件单号
    * scheduleGroup  排班分组
    * participant  参与者
    * warRoomAdmin  WarRoom管理员
    * applicationNames  应用名称列表
    * regionNames  region名称列表
    * enterpriseProjectId  企业项目id
    * notificationType  创建群组方式
    * notificationModes  发送通知的方式，支持多个通知方式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'warRoomName' => null,
        'description' => null,
        'regionCodeList' => null,
        'applicationIdList' => null,
        'incidentNumber' => null,
        'scheduleGroup' => null,
        'participant' => null,
        'warRoomAdmin' => null,
        'applicationNames' => null,
        'regionNames' => null,
        'enterpriseProjectId' => null,
        'notificationType' => null,
        'notificationModes' => null
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
    * warRoomName  WarRoom名称
    * description  WarRoom描述
    * regionCodeList  区域id
    * applicationIdList  影响应用id
    * incidentNumber  事件单号
    * scheduleGroup  排班分组
    * participant  参与者
    * warRoomAdmin  WarRoom管理员
    * applicationNames  应用名称列表
    * regionNames  region名称列表
    * enterpriseProjectId  企业项目id
    * notificationType  创建群组方式
    * notificationModes  发送通知的方式，支持多个通知方式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'warRoomName' => 'war_room_name',
            'description' => 'description',
            'regionCodeList' => 'region_code_list',
            'applicationIdList' => 'application_id_list',
            'incidentNumber' => 'incident_number',
            'scheduleGroup' => 'schedule_group',
            'participant' => 'participant',
            'warRoomAdmin' => 'war_room_admin',
            'applicationNames' => 'application_names',
            'regionNames' => 'region_names',
            'enterpriseProjectId' => 'enterprise_project_id',
            'notificationType' => 'notification_type',
            'notificationModes' => 'notification_modes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * warRoomName  WarRoom名称
    * description  WarRoom描述
    * regionCodeList  区域id
    * applicationIdList  影响应用id
    * incidentNumber  事件单号
    * scheduleGroup  排班分组
    * participant  参与者
    * warRoomAdmin  WarRoom管理员
    * applicationNames  应用名称列表
    * regionNames  region名称列表
    * enterpriseProjectId  企业项目id
    * notificationType  创建群组方式
    * notificationModes  发送通知的方式，支持多个通知方式。
    *
    * @var string[]
    */
    protected static $setters = [
            'warRoomName' => 'setWarRoomName',
            'description' => 'setDescription',
            'regionCodeList' => 'setRegionCodeList',
            'applicationIdList' => 'setApplicationIdList',
            'incidentNumber' => 'setIncidentNumber',
            'scheduleGroup' => 'setScheduleGroup',
            'participant' => 'setParticipant',
            'warRoomAdmin' => 'setWarRoomAdmin',
            'applicationNames' => 'setApplicationNames',
            'regionNames' => 'setRegionNames',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'notificationType' => 'setNotificationType',
            'notificationModes' => 'setNotificationModes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * warRoomName  WarRoom名称
    * description  WarRoom描述
    * regionCodeList  区域id
    * applicationIdList  影响应用id
    * incidentNumber  事件单号
    * scheduleGroup  排班分组
    * participant  参与者
    * warRoomAdmin  WarRoom管理员
    * applicationNames  应用名称列表
    * regionNames  region名称列表
    * enterpriseProjectId  企业项目id
    * notificationType  创建群组方式
    * notificationModes  发送通知的方式，支持多个通知方式。
    *
    * @var string[]
    */
    protected static $getters = [
            'warRoomName' => 'getWarRoomName',
            'description' => 'getDescription',
            'regionCodeList' => 'getRegionCodeList',
            'applicationIdList' => 'getApplicationIdList',
            'incidentNumber' => 'getIncidentNumber',
            'scheduleGroup' => 'getScheduleGroup',
            'participant' => 'getParticipant',
            'warRoomAdmin' => 'getWarRoomAdmin',
            'applicationNames' => 'getApplicationNames',
            'regionNames' => 'getRegionNames',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'notificationType' => 'getNotificationType',
            'notificationModes' => 'getNotificationModes'
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
        $this->container['warRoomName'] = isset($data['warRoomName']) ? $data['warRoomName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['regionCodeList'] = isset($data['regionCodeList']) ? $data['regionCodeList'] : null;
        $this->container['applicationIdList'] = isset($data['applicationIdList']) ? $data['applicationIdList'] : null;
        $this->container['incidentNumber'] = isset($data['incidentNumber']) ? $data['incidentNumber'] : null;
        $this->container['scheduleGroup'] = isset($data['scheduleGroup']) ? $data['scheduleGroup'] : null;
        $this->container['participant'] = isset($data['participant']) ? $data['participant'] : null;
        $this->container['warRoomAdmin'] = isset($data['warRoomAdmin']) ? $data['warRoomAdmin'] : null;
        $this->container['applicationNames'] = isset($data['applicationNames']) ? $data['applicationNames'] : null;
        $this->container['regionNames'] = isset($data['regionNames']) ? $data['regionNames'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['notificationType'] = isset($data['notificationType']) ? $data['notificationType'] : null;
        $this->container['notificationModes'] = isset($data['notificationModes']) ? $data['notificationModes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['warRoomName'] === null) {
            $invalidProperties[] = "'warRoomName' can't be null";
        }
            if ((mb_strlen($this->container['warRoomName']) > 255)) {
                $invalidProperties[] = "invalid value for 'warRoomName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['warRoomName']) < 1)) {
                $invalidProperties[] = "invalid value for 'warRoomName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['applicationIdList'] === null) {
            $invalidProperties[] = "'applicationIdList' can't be null";
        }
        if ($this->container['incidentNumber'] === null) {
            $invalidProperties[] = "'incidentNumber' can't be null";
        }
            if ((mb_strlen($this->container['incidentNumber']) > 255)) {
                $invalidProperties[] = "invalid value for 'incidentNumber', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['incidentNumber']) < 1)) {
                $invalidProperties[] = "invalid value for 'incidentNumber', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['scheduleGroup'] === null) {
            $invalidProperties[] = "'scheduleGroup' can't be null";
        }
        if ($this->container['warRoomAdmin'] === null) {
            $invalidProperties[] = "'warRoomAdmin' can't be null";
        }
            if ((mb_strlen($this->container['warRoomAdmin']) > 255)) {
                $invalidProperties[] = "invalid value for 'warRoomAdmin', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['warRoomAdmin']) < 1)) {
                $invalidProperties[] = "invalid value for 'warRoomAdmin', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notificationType']) && (mb_strlen($this->container['notificationType']) > 64)) {
                $invalidProperties[] = "invalid value for 'notificationType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['notificationType']) && (mb_strlen($this->container['notificationType']) < 0)) {
                $invalidProperties[] = "invalid value for 'notificationType', the character length must be bigger than or equal to 0.";
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
    * Gets warRoomName
    *  WarRoom名称
    *
    * @return string
    */
    public function getWarRoomName()
    {
        return $this->container['warRoomName'];
    }

    /**
    * Sets warRoomName
    *
    * @param string $warRoomName WarRoom名称
    *
    * @return $this
    */
    public function setWarRoomName($warRoomName)
    {
        $this->container['warRoomName'] = $warRoomName;
        return $this;
    }

    /**
    * Gets description
    *  WarRoom描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description WarRoom描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets regionCodeList
    *  区域id
    *
    * @return string[]|null
    */
    public function getRegionCodeList()
    {
        return $this->container['regionCodeList'];
    }

    /**
    * Sets regionCodeList
    *
    * @param string[]|null $regionCodeList 区域id
    *
    * @return $this
    */
    public function setRegionCodeList($regionCodeList)
    {
        $this->container['regionCodeList'] = $regionCodeList;
        return $this;
    }

    /**
    * Gets applicationIdList
    *  影响应用id
    *
    * @return string[]
    */
    public function getApplicationIdList()
    {
        return $this->container['applicationIdList'];
    }

    /**
    * Sets applicationIdList
    *
    * @param string[] $applicationIdList 影响应用id
    *
    * @return $this
    */
    public function setApplicationIdList($applicationIdList)
    {
        $this->container['applicationIdList'] = $applicationIdList;
        return $this;
    }

    /**
    * Gets incidentNumber
    *  事件单号
    *
    * @return string
    */
    public function getIncidentNumber()
    {
        return $this->container['incidentNumber'];
    }

    /**
    * Sets incidentNumber
    *
    * @param string $incidentNumber 事件单号
    *
    * @return $this
    */
    public function setIncidentNumber($incidentNumber)
    {
        $this->container['incidentNumber'] = $incidentNumber;
        return $this;
    }

    /**
    * Gets scheduleGroup
    *  排班分组
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScheduleGroupInfo[]
    */
    public function getScheduleGroup()
    {
        return $this->container['scheduleGroup'];
    }

    /**
    * Sets scheduleGroup
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScheduleGroupInfo[] $scheduleGroup 排班分组
    *
    * @return $this
    */
    public function setScheduleGroup($scheduleGroup)
    {
        $this->container['scheduleGroup'] = $scheduleGroup;
        return $this;
    }

    /**
    * Gets participant
    *  参与者
    *
    * @return string[]|null
    */
    public function getParticipant()
    {
        return $this->container['participant'];
    }

    /**
    * Sets participant
    *
    * @param string[]|null $participant 参与者
    *
    * @return $this
    */
    public function setParticipant($participant)
    {
        $this->container['participant'] = $participant;
        return $this;
    }

    /**
    * Gets warRoomAdmin
    *  WarRoom管理员
    *
    * @return string
    */
    public function getWarRoomAdmin()
    {
        return $this->container['warRoomAdmin'];
    }

    /**
    * Sets warRoomAdmin
    *
    * @param string $warRoomAdmin WarRoom管理员
    *
    * @return $this
    */
    public function setWarRoomAdmin($warRoomAdmin)
    {
        $this->container['warRoomAdmin'] = $warRoomAdmin;
        return $this;
    }

    /**
    * Gets applicationNames
    *  应用名称列表
    *
    * @return string[]|null
    */
    public function getApplicationNames()
    {
        return $this->container['applicationNames'];
    }

    /**
    * Sets applicationNames
    *
    * @param string[]|null $applicationNames 应用名称列表
    *
    * @return $this
    */
    public function setApplicationNames($applicationNames)
    {
        $this->container['applicationNames'] = $applicationNames;
        return $this;
    }

    /**
    * Gets regionNames
    *  region名称列表
    *
    * @return string[]|null
    */
    public function getRegionNames()
    {
        return $this->container['regionNames'];
    }

    /**
    * Sets regionNames
    *
    * @param string[]|null $regionNames region名称列表
    *
    * @return $this
    */
    public function setRegionNames($regionNames)
    {
        $this->container['regionNames'] = $regionNames;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets notificationType
    *  创建群组方式
    *
    * @return string|null
    */
    public function getNotificationType()
    {
        return $this->container['notificationType'];
    }

    /**
    * Sets notificationType
    *
    * @param string|null $notificationType 创建群组方式
    *
    * @return $this
    */
    public function setNotificationType($notificationType)
    {
        $this->container['notificationType'] = $notificationType;
        return $this;
    }

    /**
    * Gets notificationModes
    *  发送通知的方式，支持多个通知方式。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\NotificationMode[]|null
    */
    public function getNotificationModes()
    {
        return $this->container['notificationModes'];
    }

    /**
    * Sets notificationModes
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\NotificationMode[]|null $notificationModes 发送通知的方式，支持多个通知方式。
    *
    * @return $this
    */
    public function setNotificationModes($notificationModes)
    {
        $this->container['notificationModes'] = $notificationModes;
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

