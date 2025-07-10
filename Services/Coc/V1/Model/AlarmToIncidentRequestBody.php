<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmToIncidentRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmToIncidentRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmIds  告警id，多个以”，分隔“
    * enterpriseProjectId  企业项目id
    * assignee  责任人（个人）
    * assigneeRole  责任人（排班角色）
    * assigneeScene  责任人（排版场景）
    * attachment  附件
    * currentCloudServiceId  归属应用
    * description  事件描述
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  业务是否中断
    * levelId  事件等级
    * mtmRegion  region
    * mtmType  事件类别
    * sourceId  资源id
    * title  事件名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmIds' => 'string',
            'enterpriseProjectId' => 'string',
            'assignee' => 'string',
            'assigneeRole' => 'string',
            'assigneeScene' => 'string',
            'attachment' => 'string',
            'currentCloudServiceId' => 'string',
            'description' => 'string',
            'isChangeEvent' => 'bool',
            'isServiceInterrupt' => 'bool',
            'levelId' => 'string',
            'mtmRegion' => 'string',
            'mtmType' => 'string',
            'sourceId' => 'string',
            'title' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmIds  告警id，多个以”，分隔“
    * enterpriseProjectId  企业项目id
    * assignee  责任人（个人）
    * assigneeRole  责任人（排班角色）
    * assigneeScene  责任人（排版场景）
    * attachment  附件
    * currentCloudServiceId  归属应用
    * description  事件描述
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  业务是否中断
    * levelId  事件等级
    * mtmRegion  region
    * mtmType  事件类别
    * sourceId  资源id
    * title  事件名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmIds' => null,
        'enterpriseProjectId' => null,
        'assignee' => null,
        'assigneeRole' => null,
        'assigneeScene' => null,
        'attachment' => null,
        'currentCloudServiceId' => null,
        'description' => null,
        'isChangeEvent' => null,
        'isServiceInterrupt' => null,
        'levelId' => null,
        'mtmRegion' => null,
        'mtmType' => null,
        'sourceId' => null,
        'title' => null
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
    * alarmIds  告警id，多个以”，分隔“
    * enterpriseProjectId  企业项目id
    * assignee  责任人（个人）
    * assigneeRole  责任人（排班角色）
    * assigneeScene  责任人（排版场景）
    * attachment  附件
    * currentCloudServiceId  归属应用
    * description  事件描述
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  业务是否中断
    * levelId  事件等级
    * mtmRegion  region
    * mtmType  事件类别
    * sourceId  资源id
    * title  事件名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmIds' => 'alarm_ids',
            'enterpriseProjectId' => 'enterprise_project_id',
            'assignee' => 'assignee',
            'assigneeRole' => 'assignee_role',
            'assigneeScene' => 'assignee_scene',
            'attachment' => 'attachment',
            'currentCloudServiceId' => 'current_cloud_service_id',
            'description' => 'description',
            'isChangeEvent' => 'is_change_event',
            'isServiceInterrupt' => 'is_service_interrupt',
            'levelId' => 'level_id',
            'mtmRegion' => 'mtm_region',
            'mtmType' => 'mtm_type',
            'sourceId' => 'source_id',
            'title' => 'title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmIds  告警id，多个以”，分隔“
    * enterpriseProjectId  企业项目id
    * assignee  责任人（个人）
    * assigneeRole  责任人（排班角色）
    * assigneeScene  责任人（排版场景）
    * attachment  附件
    * currentCloudServiceId  归属应用
    * description  事件描述
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  业务是否中断
    * levelId  事件等级
    * mtmRegion  region
    * mtmType  事件类别
    * sourceId  资源id
    * title  事件名称
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmIds' => 'setAlarmIds',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'assignee' => 'setAssignee',
            'assigneeRole' => 'setAssigneeRole',
            'assigneeScene' => 'setAssigneeScene',
            'attachment' => 'setAttachment',
            'currentCloudServiceId' => 'setCurrentCloudServiceId',
            'description' => 'setDescription',
            'isChangeEvent' => 'setIsChangeEvent',
            'isServiceInterrupt' => 'setIsServiceInterrupt',
            'levelId' => 'setLevelId',
            'mtmRegion' => 'setMtmRegion',
            'mtmType' => 'setMtmType',
            'sourceId' => 'setSourceId',
            'title' => 'setTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmIds  告警id，多个以”，分隔“
    * enterpriseProjectId  企业项目id
    * assignee  责任人（个人）
    * assigneeRole  责任人（排班角色）
    * assigneeScene  责任人（排版场景）
    * attachment  附件
    * currentCloudServiceId  归属应用
    * description  事件描述
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  业务是否中断
    * levelId  事件等级
    * mtmRegion  region
    * mtmType  事件类别
    * sourceId  资源id
    * title  事件名称
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmIds' => 'getAlarmIds',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'assignee' => 'getAssignee',
            'assigneeRole' => 'getAssigneeRole',
            'assigneeScene' => 'getAssigneeScene',
            'attachment' => 'getAttachment',
            'currentCloudServiceId' => 'getCurrentCloudServiceId',
            'description' => 'getDescription',
            'isChangeEvent' => 'getIsChangeEvent',
            'isServiceInterrupt' => 'getIsServiceInterrupt',
            'levelId' => 'getLevelId',
            'mtmRegion' => 'getMtmRegion',
            'mtmType' => 'getMtmType',
            'sourceId' => 'getSourceId',
            'title' => 'getTitle'
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
        $this->container['alarmIds'] = isset($data['alarmIds']) ? $data['alarmIds'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['assigneeRole'] = isset($data['assigneeRole']) ? $data['assigneeRole'] : null;
        $this->container['assigneeScene'] = isset($data['assigneeScene']) ? $data['assigneeScene'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
        $this->container['currentCloudServiceId'] = isset($data['currentCloudServiceId']) ? $data['currentCloudServiceId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isChangeEvent'] = isset($data['isChangeEvent']) ? $data['isChangeEvent'] : null;
        $this->container['isServiceInterrupt'] = isset($data['isServiceInterrupt']) ? $data['isServiceInterrupt'] : null;
        $this->container['levelId'] = isset($data['levelId']) ? $data['levelId'] : null;
        $this->container['mtmRegion'] = isset($data['mtmRegion']) ? $data['mtmRegion'] : null;
        $this->container['mtmType'] = isset($data['mtmType']) ? $data['mtmType'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmIds'] === null) {
            $invalidProperties[] = "'alarmIds' can't be null";
        }
            if ((mb_strlen($this->container['alarmIds']) > 2700)) {
                $invalidProperties[] = "invalid value for 'alarmIds', the character length must be smaller than or equal to 2700.";
            }
            if ((mb_strlen($this->container['alarmIds']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmIds', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 100)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assignee']) && (mb_strlen($this->container['assignee']) > 255)) {
                $invalidProperties[] = "invalid value for 'assignee', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['assignee']) && (mb_strlen($this->container['assignee']) < 0)) {
                $invalidProperties[] = "invalid value for 'assignee', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assigneeRole']) && (mb_strlen($this->container['assigneeRole']) > 255)) {
                $invalidProperties[] = "invalid value for 'assigneeRole', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['assigneeRole']) && (mb_strlen($this->container['assigneeRole']) < 0)) {
                $invalidProperties[] = "invalid value for 'assigneeRole', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assigneeScene']) && (mb_strlen($this->container['assigneeScene']) > 255)) {
                $invalidProperties[] = "invalid value for 'assigneeScene', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['assigneeScene']) && (mb_strlen($this->container['assigneeScene']) < 0)) {
                $invalidProperties[] = "invalid value for 'assigneeScene', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attachment']) && (mb_strlen($this->container['attachment']) > 1024)) {
                $invalidProperties[] = "invalid value for 'attachment', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['attachment']) && (mb_strlen($this->container['attachment']) < 0)) {
                $invalidProperties[] = "invalid value for 'attachment', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['currentCloudServiceId'] === null) {
            $invalidProperties[] = "'currentCloudServiceId' can't be null";
        }
            if ((mb_strlen($this->container['currentCloudServiceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['currentCloudServiceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['isServiceInterrupt'] === null) {
            $invalidProperties[] = "'isServiceInterrupt' can't be null";
        }
        if ($this->container['levelId'] === null) {
            $invalidProperties[] = "'levelId' can't be null";
        }
            if ((mb_strlen($this->container['levelId']) > 255)) {
                $invalidProperties[] = "invalid value for 'levelId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['levelId']) < 1)) {
                $invalidProperties[] = "invalid value for 'levelId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mtmRegion']) && (mb_strlen($this->container['mtmRegion']) > 255)) {
                $invalidProperties[] = "invalid value for 'mtmRegion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['mtmRegion']) && (mb_strlen($this->container['mtmRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'mtmRegion', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['mtmType'] === null) {
            $invalidProperties[] = "'mtmType' can't be null";
        }
            if ((mb_strlen($this->container['mtmType']) > 255)) {
                $invalidProperties[] = "invalid value for 'mtmType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['mtmType']) < 1)) {
                $invalidProperties[] = "invalid value for 'mtmType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
            if ((mb_strlen($this->container['title']) > 255)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
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
    * Gets alarmIds
    *  告警id，多个以”，分隔“
    *
    * @return string
    */
    public function getAlarmIds()
    {
        return $this->container['alarmIds'];
    }

    /**
    * Sets alarmIds
    *
    * @param string $alarmIds 告警id，多个以”，分隔“
    *
    * @return $this
    */
    public function setAlarmIds($alarmIds)
    {
        $this->container['alarmIds'] = $alarmIds;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets assignee
    *  责任人（个人）
    *
    * @return string|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param string|null $assignee 责任人（个人）
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets assigneeRole
    *  责任人（排班角色）
    *
    * @return string|null
    */
    public function getAssigneeRole()
    {
        return $this->container['assigneeRole'];
    }

    /**
    * Sets assigneeRole
    *
    * @param string|null $assigneeRole 责任人（排班角色）
    *
    * @return $this
    */
    public function setAssigneeRole($assigneeRole)
    {
        $this->container['assigneeRole'] = $assigneeRole;
        return $this;
    }

    /**
    * Gets assigneeScene
    *  责任人（排版场景）
    *
    * @return string|null
    */
    public function getAssigneeScene()
    {
        return $this->container['assigneeScene'];
    }

    /**
    * Sets assigneeScene
    *
    * @param string|null $assigneeScene 责任人（排版场景）
    *
    * @return $this
    */
    public function setAssigneeScene($assigneeScene)
    {
        $this->container['assigneeScene'] = $assigneeScene;
        return $this;
    }

    /**
    * Gets attachment
    *  附件
    *
    * @return string|null
    */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
    * Sets attachment
    *
    * @param string|null $attachment 附件
    *
    * @return $this
    */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;
        return $this;
    }

    /**
    * Gets currentCloudServiceId
    *  归属应用
    *
    * @return string
    */
    public function getCurrentCloudServiceId()
    {
        return $this->container['currentCloudServiceId'];
    }

    /**
    * Sets currentCloudServiceId
    *
    * @param string $currentCloudServiceId 归属应用
    *
    * @return $this
    */
    public function setCurrentCloudServiceId($currentCloudServiceId)
    {
        $this->container['currentCloudServiceId'] = $currentCloudServiceId;
        return $this;
    }

    /**
    * Gets description
    *  事件描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 事件描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isChangeEvent
    *  是否变更事件
    *
    * @return bool|null
    */
    public function getIsChangeEvent()
    {
        return $this->container['isChangeEvent'];
    }

    /**
    * Sets isChangeEvent
    *
    * @param bool|null $isChangeEvent 是否变更事件
    *
    * @return $this
    */
    public function setIsChangeEvent($isChangeEvent)
    {
        $this->container['isChangeEvent'] = $isChangeEvent;
        return $this;
    }

    /**
    * Gets isServiceInterrupt
    *  业务是否中断
    *
    * @return bool
    */
    public function getIsServiceInterrupt()
    {
        return $this->container['isServiceInterrupt'];
    }

    /**
    * Sets isServiceInterrupt
    *
    * @param bool $isServiceInterrupt 业务是否中断
    *
    * @return $this
    */
    public function setIsServiceInterrupt($isServiceInterrupt)
    {
        $this->container['isServiceInterrupt'] = $isServiceInterrupt;
        return $this;
    }

    /**
    * Gets levelId
    *  事件等级
    *
    * @return string
    */
    public function getLevelId()
    {
        return $this->container['levelId'];
    }

    /**
    * Sets levelId
    *
    * @param string $levelId 事件等级
    *
    * @return $this
    */
    public function setLevelId($levelId)
    {
        $this->container['levelId'] = $levelId;
        return $this;
    }

    /**
    * Gets mtmRegion
    *  region
    *
    * @return string|null
    */
    public function getMtmRegion()
    {
        return $this->container['mtmRegion'];
    }

    /**
    * Sets mtmRegion
    *
    * @param string|null $mtmRegion region
    *
    * @return $this
    */
    public function setMtmRegion($mtmRegion)
    {
        $this->container['mtmRegion'] = $mtmRegion;
        return $this;
    }

    /**
    * Gets mtmType
    *  事件类别
    *
    * @return string
    */
    public function getMtmType()
    {
        return $this->container['mtmType'];
    }

    /**
    * Sets mtmType
    *
    * @param string $mtmType 事件类别
    *
    * @return $this
    */
    public function setMtmType($mtmType)
    {
        $this->container['mtmType'] = $mtmType;
        return $this;
    }

    /**
    * Gets sourceId
    *  资源id
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 资源id
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets title
    *  事件名称
    *
    * @return string
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string $title 事件名称
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
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

