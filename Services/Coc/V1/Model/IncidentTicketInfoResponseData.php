<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IncidentTicketInfoResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IncidentTicketInfoResponseData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * incidentNum  事件单号
    * region  区域Code，如果自动拉起WarRoom则为必填，现在只支持1个
    * enterpriseProject  企业项目ID，现在只支持1个
    * currentCloudService  归属应用ID，现在只支持1个
    * incidentLevel  事件级别 参考：枚举 事件级别incident_level
    * isServiceInterrupt  业务是否中断，取值：true/false
    * incidentType  事件类别 参考：枚举 事件类别incident_type
    * incidentTitle  事件标题，最大长度：200
    * incidentDescription  事件描述，最大长度：600
    * incidentSource  单据来源 参考：枚举 事件来源incident_source
    * incidentAssignee  责任人，排班场景和排班角色不能同时为空，现在只支持1个
    * assigneeScene  排班场景，责任人和排班角色不能同时为空
    * assigneeRole  排班角色，排班场景和责任人不能同时为空
    * warroomId  warroom_id
    * handleTime  最后一次提交解决方案时间戳
    * status  状态KEY
    * createTime  创单时间戳
    * creator  创单人
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'incidentNum' => 'string',
            'region' => 'string[]',
            'enterpriseProject' => 'string[]',
            'currentCloudService' => 'string[]',
            'incidentLevel' => 'string',
            'isServiceInterrupt' => 'bool',
            'incidentType' => 'string',
            'incidentTitle' => 'string',
            'incidentDescription' => 'string',
            'incidentSource' => 'string',
            'incidentAssignee' => 'string[]',
            'assigneeScene' => 'string',
            'assigneeRole' => 'string',
            'warroomId' => 'string',
            'handleTime' => 'int',
            'status' => 'string',
            'createTime' => 'int',
            'creator' => 'string',
            'enumDataList' => '\HuaweiCloud\SDK\Coc\V1\Model\TicketInfoEnumData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * incidentNum  事件单号
    * region  区域Code，如果自动拉起WarRoom则为必填，现在只支持1个
    * enterpriseProject  企业项目ID，现在只支持1个
    * currentCloudService  归属应用ID，现在只支持1个
    * incidentLevel  事件级别 参考：枚举 事件级别incident_level
    * isServiceInterrupt  业务是否中断，取值：true/false
    * incidentType  事件类别 参考：枚举 事件类别incident_type
    * incidentTitle  事件标题，最大长度：200
    * incidentDescription  事件描述，最大长度：600
    * incidentSource  单据来源 参考：枚举 事件来源incident_source
    * incidentAssignee  责任人，排班场景和排班角色不能同时为空，现在只支持1个
    * assigneeScene  排班场景，责任人和排班角色不能同时为空
    * assigneeRole  排班角色，排班场景和责任人不能同时为空
    * warroomId  warroom_id
    * handleTime  最后一次提交解决方案时间戳
    * status  状态KEY
    * createTime  创单时间戳
    * creator  创单人
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'incidentNum' => null,
        'region' => null,
        'enterpriseProject' => null,
        'currentCloudService' => null,
        'incidentLevel' => null,
        'isServiceInterrupt' => null,
        'incidentType' => null,
        'incidentTitle' => null,
        'incidentDescription' => null,
        'incidentSource' => null,
        'incidentAssignee' => null,
        'assigneeScene' => null,
        'assigneeRole' => null,
        'warroomId' => null,
        'handleTime' => 'int64',
        'status' => null,
        'createTime' => 'int64',
        'creator' => null,
        'enumDataList' => null
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
    * incidentNum  事件单号
    * region  区域Code，如果自动拉起WarRoom则为必填，现在只支持1个
    * enterpriseProject  企业项目ID，现在只支持1个
    * currentCloudService  归属应用ID，现在只支持1个
    * incidentLevel  事件级别 参考：枚举 事件级别incident_level
    * isServiceInterrupt  业务是否中断，取值：true/false
    * incidentType  事件类别 参考：枚举 事件类别incident_type
    * incidentTitle  事件标题，最大长度：200
    * incidentDescription  事件描述，最大长度：600
    * incidentSource  单据来源 参考：枚举 事件来源incident_source
    * incidentAssignee  责任人，排班场景和排班角色不能同时为空，现在只支持1个
    * assigneeScene  排班场景，责任人和排班角色不能同时为空
    * assigneeRole  排班角色，排班场景和责任人不能同时为空
    * warroomId  warroom_id
    * handleTime  最后一次提交解决方案时间戳
    * status  状态KEY
    * createTime  创单时间戳
    * creator  创单人
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'incidentNum' => 'incident_num',
            'region' => 'region',
            'enterpriseProject' => 'enterprise_project',
            'currentCloudService' => 'current_cloud_service',
            'incidentLevel' => 'incident_level',
            'isServiceInterrupt' => 'is_service_interrupt',
            'incidentType' => 'incident_type',
            'incidentTitle' => 'incident_title',
            'incidentDescription' => 'incident_description',
            'incidentSource' => 'incident_source',
            'incidentAssignee' => 'incident_assignee',
            'assigneeScene' => 'assignee_scene',
            'assigneeRole' => 'assignee_role',
            'warroomId' => 'warroom_id',
            'handleTime' => 'handle_time',
            'status' => 'status',
            'createTime' => 'create_time',
            'creator' => 'creator',
            'enumDataList' => 'enum_data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * incidentNum  事件单号
    * region  区域Code，如果自动拉起WarRoom则为必填，现在只支持1个
    * enterpriseProject  企业项目ID，现在只支持1个
    * currentCloudService  归属应用ID，现在只支持1个
    * incidentLevel  事件级别 参考：枚举 事件级别incident_level
    * isServiceInterrupt  业务是否中断，取值：true/false
    * incidentType  事件类别 参考：枚举 事件类别incident_type
    * incidentTitle  事件标题，最大长度：200
    * incidentDescription  事件描述，最大长度：600
    * incidentSource  单据来源 参考：枚举 事件来源incident_source
    * incidentAssignee  责任人，排班场景和排班角色不能同时为空，现在只支持1个
    * assigneeScene  排班场景，责任人和排班角色不能同时为空
    * assigneeRole  排班角色，排班场景和责任人不能同时为空
    * warroomId  warroom_id
    * handleTime  最后一次提交解决方案时间戳
    * status  状态KEY
    * createTime  创单时间戳
    * creator  创单人
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $setters = [
            'incidentNum' => 'setIncidentNum',
            'region' => 'setRegion',
            'enterpriseProject' => 'setEnterpriseProject',
            'currentCloudService' => 'setCurrentCloudService',
            'incidentLevel' => 'setIncidentLevel',
            'isServiceInterrupt' => 'setIsServiceInterrupt',
            'incidentType' => 'setIncidentType',
            'incidentTitle' => 'setIncidentTitle',
            'incidentDescription' => 'setIncidentDescription',
            'incidentSource' => 'setIncidentSource',
            'incidentAssignee' => 'setIncidentAssignee',
            'assigneeScene' => 'setAssigneeScene',
            'assigneeRole' => 'setAssigneeRole',
            'warroomId' => 'setWarroomId',
            'handleTime' => 'setHandleTime',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'creator' => 'setCreator',
            'enumDataList' => 'setEnumDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * incidentNum  事件单号
    * region  区域Code，如果自动拉起WarRoom则为必填，现在只支持1个
    * enterpriseProject  企业项目ID，现在只支持1个
    * currentCloudService  归属应用ID，现在只支持1个
    * incidentLevel  事件级别 参考：枚举 事件级别incident_level
    * isServiceInterrupt  业务是否中断，取值：true/false
    * incidentType  事件类别 参考：枚举 事件类别incident_type
    * incidentTitle  事件标题，最大长度：200
    * incidentDescription  事件描述，最大长度：600
    * incidentSource  单据来源 参考：枚举 事件来源incident_source
    * incidentAssignee  责任人，排班场景和排班角色不能同时为空，现在只支持1个
    * assigneeScene  排班场景，责任人和排班角色不能同时为空
    * assigneeRole  排班角色，排班场景和责任人不能同时为空
    * warroomId  warroom_id
    * handleTime  最后一次提交解决方案时间戳
    * status  状态KEY
    * createTime  创单时间戳
    * creator  创单人
    * enumDataList  枚举列表
    *
    * @var string[]
    */
    protected static $getters = [
            'incidentNum' => 'getIncidentNum',
            'region' => 'getRegion',
            'enterpriseProject' => 'getEnterpriseProject',
            'currentCloudService' => 'getCurrentCloudService',
            'incidentLevel' => 'getIncidentLevel',
            'isServiceInterrupt' => 'getIsServiceInterrupt',
            'incidentType' => 'getIncidentType',
            'incidentTitle' => 'getIncidentTitle',
            'incidentDescription' => 'getIncidentDescription',
            'incidentSource' => 'getIncidentSource',
            'incidentAssignee' => 'getIncidentAssignee',
            'assigneeScene' => 'getAssigneeScene',
            'assigneeRole' => 'getAssigneeRole',
            'warroomId' => 'getWarroomId',
            'handleTime' => 'getHandleTime',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'creator' => 'getCreator',
            'enumDataList' => 'getEnumDataList'
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
        $this->container['incidentNum'] = isset($data['incidentNum']) ? $data['incidentNum'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
        $this->container['currentCloudService'] = isset($data['currentCloudService']) ? $data['currentCloudService'] : null;
        $this->container['incidentLevel'] = isset($data['incidentLevel']) ? $data['incidentLevel'] : null;
        $this->container['isServiceInterrupt'] = isset($data['isServiceInterrupt']) ? $data['isServiceInterrupt'] : null;
        $this->container['incidentType'] = isset($data['incidentType']) ? $data['incidentType'] : null;
        $this->container['incidentTitle'] = isset($data['incidentTitle']) ? $data['incidentTitle'] : null;
        $this->container['incidentDescription'] = isset($data['incidentDescription']) ? $data['incidentDescription'] : null;
        $this->container['incidentSource'] = isset($data['incidentSource']) ? $data['incidentSource'] : null;
        $this->container['incidentAssignee'] = isset($data['incidentAssignee']) ? $data['incidentAssignee'] : null;
        $this->container['assigneeScene'] = isset($data['assigneeScene']) ? $data['assigneeScene'] : null;
        $this->container['assigneeRole'] = isset($data['assigneeRole']) ? $data['assigneeRole'] : null;
        $this->container['warroomId'] = isset($data['warroomId']) ? $data['warroomId'] : null;
        $this->container['handleTime'] = isset($data['handleTime']) ? $data['handleTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['enumDataList'] = isset($data['enumDataList']) ? $data['enumDataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['incidentNum']) && (mb_strlen($this->container['incidentNum']) > 255)) {
                $invalidProperties[] = "invalid value for 'incidentNum', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['incidentNum']) && (mb_strlen($this->container['incidentNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'incidentNum', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['incidentLevel']) && (mb_strlen($this->container['incidentLevel']) > 255)) {
                $invalidProperties[] = "invalid value for 'incidentLevel', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['incidentLevel']) && (mb_strlen($this->container['incidentLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'incidentLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['incidentType']) && (mb_strlen($this->container['incidentType']) > 255)) {
                $invalidProperties[] = "invalid value for 'incidentType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['incidentType']) && (mb_strlen($this->container['incidentType']) < 0)) {
                $invalidProperties[] = "invalid value for 'incidentType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['incidentTitle']) && (mb_strlen($this->container['incidentTitle']) > 200)) {
                $invalidProperties[] = "invalid value for 'incidentTitle', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['incidentTitle']) && (mb_strlen($this->container['incidentTitle']) < 0)) {
                $invalidProperties[] = "invalid value for 'incidentTitle', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['incidentDescription']) && (mb_strlen($this->container['incidentDescription']) > 600)) {
                $invalidProperties[] = "invalid value for 'incidentDescription', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['incidentDescription']) && (mb_strlen($this->container['incidentDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'incidentDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['incidentSource']) && (mb_strlen($this->container['incidentSource']) > 255)) {
                $invalidProperties[] = "invalid value for 'incidentSource', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['incidentSource']) && (mb_strlen($this->container['incidentSource']) < 0)) {
                $invalidProperties[] = "invalid value for 'incidentSource', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assigneeScene']) && (mb_strlen($this->container['assigneeScene']) > 255)) {
                $invalidProperties[] = "invalid value for 'assigneeScene', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['assigneeScene']) && (mb_strlen($this->container['assigneeScene']) < 0)) {
                $invalidProperties[] = "invalid value for 'assigneeScene', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assigneeRole']) && (mb_strlen($this->container['assigneeRole']) > 255)) {
                $invalidProperties[] = "invalid value for 'assigneeRole', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['assigneeRole']) && (mb_strlen($this->container['assigneeRole']) < 0)) {
                $invalidProperties[] = "invalid value for 'assigneeRole', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['warroomId']) && (mb_strlen($this->container['warroomId']) > 255)) {
                $invalidProperties[] = "invalid value for 'warroomId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['warroomId']) && (mb_strlen($this->container['warroomId']) < 0)) {
                $invalidProperties[] = "invalid value for 'warroomId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['handleTime']) && ($this->container['handleTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'handleTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 255)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 255)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 0)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 0.";
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
    * Gets incidentNum
    *  事件单号
    *
    * @return string|null
    */
    public function getIncidentNum()
    {
        return $this->container['incidentNum'];
    }

    /**
    * Sets incidentNum
    *
    * @param string|null $incidentNum 事件单号
    *
    * @return $this
    */
    public function setIncidentNum($incidentNum)
    {
        $this->container['incidentNum'] = $incidentNum;
        return $this;
    }

    /**
    * Gets region
    *  区域Code，如果自动拉起WarRoom则为必填，现在只支持1个
    *
    * @return string[]|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string[]|null $region 区域Code，如果自动拉起WarRoom则为必填，现在只支持1个
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets enterpriseProject
    *  企业项目ID，现在只支持1个
    *
    * @return string[]|null
    */
    public function getEnterpriseProject()
    {
        return $this->container['enterpriseProject'];
    }

    /**
    * Sets enterpriseProject
    *
    * @param string[]|null $enterpriseProject 企业项目ID，现在只支持1个
    *
    * @return $this
    */
    public function setEnterpriseProject($enterpriseProject)
    {
        $this->container['enterpriseProject'] = $enterpriseProject;
        return $this;
    }

    /**
    * Gets currentCloudService
    *  归属应用ID，现在只支持1个
    *
    * @return string[]|null
    */
    public function getCurrentCloudService()
    {
        return $this->container['currentCloudService'];
    }

    /**
    * Sets currentCloudService
    *
    * @param string[]|null $currentCloudService 归属应用ID，现在只支持1个
    *
    * @return $this
    */
    public function setCurrentCloudService($currentCloudService)
    {
        $this->container['currentCloudService'] = $currentCloudService;
        return $this;
    }

    /**
    * Gets incidentLevel
    *  事件级别 参考：枚举 事件级别incident_level
    *
    * @return string|null
    */
    public function getIncidentLevel()
    {
        return $this->container['incidentLevel'];
    }

    /**
    * Sets incidentLevel
    *
    * @param string|null $incidentLevel 事件级别 参考：枚举 事件级别incident_level
    *
    * @return $this
    */
    public function setIncidentLevel($incidentLevel)
    {
        $this->container['incidentLevel'] = $incidentLevel;
        return $this;
    }

    /**
    * Gets isServiceInterrupt
    *  业务是否中断，取值：true/false
    *
    * @return bool|null
    */
    public function getIsServiceInterrupt()
    {
        return $this->container['isServiceInterrupt'];
    }

    /**
    * Sets isServiceInterrupt
    *
    * @param bool|null $isServiceInterrupt 业务是否中断，取值：true/false
    *
    * @return $this
    */
    public function setIsServiceInterrupt($isServiceInterrupt)
    {
        $this->container['isServiceInterrupt'] = $isServiceInterrupt;
        return $this;
    }

    /**
    * Gets incidentType
    *  事件类别 参考：枚举 事件类别incident_type
    *
    * @return string|null
    */
    public function getIncidentType()
    {
        return $this->container['incidentType'];
    }

    /**
    * Sets incidentType
    *
    * @param string|null $incidentType 事件类别 参考：枚举 事件类别incident_type
    *
    * @return $this
    */
    public function setIncidentType($incidentType)
    {
        $this->container['incidentType'] = $incidentType;
        return $this;
    }

    /**
    * Gets incidentTitle
    *  事件标题，最大长度：200
    *
    * @return string|null
    */
    public function getIncidentTitle()
    {
        return $this->container['incidentTitle'];
    }

    /**
    * Sets incidentTitle
    *
    * @param string|null $incidentTitle 事件标题，最大长度：200
    *
    * @return $this
    */
    public function setIncidentTitle($incidentTitle)
    {
        $this->container['incidentTitle'] = $incidentTitle;
        return $this;
    }

    /**
    * Gets incidentDescription
    *  事件描述，最大长度：600
    *
    * @return string|null
    */
    public function getIncidentDescription()
    {
        return $this->container['incidentDescription'];
    }

    /**
    * Sets incidentDescription
    *
    * @param string|null $incidentDescription 事件描述，最大长度：600
    *
    * @return $this
    */
    public function setIncidentDescription($incidentDescription)
    {
        $this->container['incidentDescription'] = $incidentDescription;
        return $this;
    }

    /**
    * Gets incidentSource
    *  单据来源 参考：枚举 事件来源incident_source
    *
    * @return string|null
    */
    public function getIncidentSource()
    {
        return $this->container['incidentSource'];
    }

    /**
    * Sets incidentSource
    *
    * @param string|null $incidentSource 单据来源 参考：枚举 事件来源incident_source
    *
    * @return $this
    */
    public function setIncidentSource($incidentSource)
    {
        $this->container['incidentSource'] = $incidentSource;
        return $this;
    }

    /**
    * Gets incidentAssignee
    *  责任人，排班场景和排班角色不能同时为空，现在只支持1个
    *
    * @return string[]|null
    */
    public function getIncidentAssignee()
    {
        return $this->container['incidentAssignee'];
    }

    /**
    * Sets incidentAssignee
    *
    * @param string[]|null $incidentAssignee 责任人，排班场景和排班角色不能同时为空，现在只支持1个
    *
    * @return $this
    */
    public function setIncidentAssignee($incidentAssignee)
    {
        $this->container['incidentAssignee'] = $incidentAssignee;
        return $this;
    }

    /**
    * Gets assigneeScene
    *  排班场景，责任人和排班角色不能同时为空
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
    * @param string|null $assigneeScene 排班场景，责任人和排班角色不能同时为空
    *
    * @return $this
    */
    public function setAssigneeScene($assigneeScene)
    {
        $this->container['assigneeScene'] = $assigneeScene;
        return $this;
    }

    /**
    * Gets assigneeRole
    *  排班角色，排班场景和责任人不能同时为空
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
    * @param string|null $assigneeRole 排班角色，排班场景和责任人不能同时为空
    *
    * @return $this
    */
    public function setAssigneeRole($assigneeRole)
    {
        $this->container['assigneeRole'] = $assigneeRole;
        return $this;
    }

    /**
    * Gets warroomId
    *  warroom_id
    *
    * @return string|null
    */
    public function getWarroomId()
    {
        return $this->container['warroomId'];
    }

    /**
    * Sets warroomId
    *
    * @param string|null $warroomId warroom_id
    *
    * @return $this
    */
    public function setWarroomId($warroomId)
    {
        $this->container['warroomId'] = $warroomId;
        return $this;
    }

    /**
    * Gets handleTime
    *  最后一次提交解决方案时间戳
    *
    * @return int|null
    */
    public function getHandleTime()
    {
        return $this->container['handleTime'];
    }

    /**
    * Sets handleTime
    *
    * @param int|null $handleTime 最后一次提交解决方案时间戳
    *
    * @return $this
    */
    public function setHandleTime($handleTime)
    {
        $this->container['handleTime'] = $handleTime;
        return $this;
    }

    /**
    * Gets status
    *  状态KEY
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
    * @param string|null $status 状态KEY
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  创单时间戳
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创单时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creator
    *  创单人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创单人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets enumDataList
    *  枚举列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\TicketInfoEnumData[]|null
    */
    public function getEnumDataList()
    {
        return $this->container['enumDataList'];
    }

    /**
    * Sets enumDataList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\TicketInfoEnumData[]|null $enumDataList 枚举列表
    *
    * @return $this
    */
    public function setEnumDataList($enumDataList)
    {
        $this->container['enumDataList'] = $enumDataList;
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

