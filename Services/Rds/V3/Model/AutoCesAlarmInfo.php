<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoCesAlarmInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoCesAlarmInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  告警记录唯一标识符。  **约束限制**：  不涉及。
    * domainId  **参数解释**：  租户ID。  **约束限制**：  不涉及。
    * domainName  **参数解释**：  租户名称。  **约束限制**：  不涉及。
    * userId  **参数解释**：  用户ID。  **约束限制**：  不涉及。
    * userName  **参数解释**：  用户名称。  **约束限制**：  不涉及。
    * projectId  **参数解释**：  项目ID。  **约束限制**：  不涉及。
    * projectName  **参数解释**：  项目名称。  **约束限制**：  不涉及。
    * engineName  **参数解释**：  数据库引擎名称。  **约束限制**：  不涉及。
    * newInstanceDefault  **参数解释**：  新实例是否默认开启自动告警。  **约束限制**：  不涉及。
    * switchStatus  **参数解释**：  自动告警状态转换。  **约束限制**：  不涉及。
    * alarmId  **参数解释**：  告警规则唯一标识符。  **约束限制**：  不涉及。
    * topicUrn  **参数解释**：  主题URN。  **约束限制**：  不涉及。
    * createdAt  **参数解释**：  记录被创建的时间戳。  **约束限制**：  不涉及。
    * updatedAt  **参数解释**：  记录最后一次被更新的时间戳。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'engineName' => 'string',
            'newInstanceDefault' => 'bool',
            'switchStatus' => 'string',
            'alarmId' => 'string',
            'topicUrn' => 'string',
            'createdAt' => 'int',
            'updatedAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  告警记录唯一标识符。  **约束限制**：  不涉及。
    * domainId  **参数解释**：  租户ID。  **约束限制**：  不涉及。
    * domainName  **参数解释**：  租户名称。  **约束限制**：  不涉及。
    * userId  **参数解释**：  用户ID。  **约束限制**：  不涉及。
    * userName  **参数解释**：  用户名称。  **约束限制**：  不涉及。
    * projectId  **参数解释**：  项目ID。  **约束限制**：  不涉及。
    * projectName  **参数解释**：  项目名称。  **约束限制**：  不涉及。
    * engineName  **参数解释**：  数据库引擎名称。  **约束限制**：  不涉及。
    * newInstanceDefault  **参数解释**：  新实例是否默认开启自动告警。  **约束限制**：  不涉及。
    * switchStatus  **参数解释**：  自动告警状态转换。  **约束限制**：  不涉及。
    * alarmId  **参数解释**：  告警规则唯一标识符。  **约束限制**：  不涉及。
    * topicUrn  **参数解释**：  主题URN。  **约束限制**：  不涉及。
    * createdAt  **参数解释**：  记录被创建的时间戳。  **约束限制**：  不涉及。
    * updatedAt  **参数解释**：  记录最后一次被更新的时间戳。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainId' => null,
        'domainName' => null,
        'userId' => null,
        'userName' => null,
        'projectId' => null,
        'projectName' => null,
        'engineName' => null,
        'newInstanceDefault' => null,
        'switchStatus' => null,
        'alarmId' => null,
        'topicUrn' => null,
        'createdAt' => 'int64',
        'updatedAt' => 'int64'
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
    * id  **参数解释**：  告警记录唯一标识符。  **约束限制**：  不涉及。
    * domainId  **参数解释**：  租户ID。  **约束限制**：  不涉及。
    * domainName  **参数解释**：  租户名称。  **约束限制**：  不涉及。
    * userId  **参数解释**：  用户ID。  **约束限制**：  不涉及。
    * userName  **参数解释**：  用户名称。  **约束限制**：  不涉及。
    * projectId  **参数解释**：  项目ID。  **约束限制**：  不涉及。
    * projectName  **参数解释**：  项目名称。  **约束限制**：  不涉及。
    * engineName  **参数解释**：  数据库引擎名称。  **约束限制**：  不涉及。
    * newInstanceDefault  **参数解释**：  新实例是否默认开启自动告警。  **约束限制**：  不涉及。
    * switchStatus  **参数解释**：  自动告警状态转换。  **约束限制**：  不涉及。
    * alarmId  **参数解释**：  告警规则唯一标识符。  **约束限制**：  不涉及。
    * topicUrn  **参数解释**：  主题URN。  **约束限制**：  不涉及。
    * createdAt  **参数解释**：  记录被创建的时间戳。  **约束限制**：  不涉及。
    * updatedAt  **参数解释**：  记录最后一次被更新的时间戳。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'engineName' => 'engine_name',
            'newInstanceDefault' => 'new_instance_default',
            'switchStatus' => 'switch_status',
            'alarmId' => 'alarm_id',
            'topicUrn' => 'topic_urn',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  告警记录唯一标识符。  **约束限制**：  不涉及。
    * domainId  **参数解释**：  租户ID。  **约束限制**：  不涉及。
    * domainName  **参数解释**：  租户名称。  **约束限制**：  不涉及。
    * userId  **参数解释**：  用户ID。  **约束限制**：  不涉及。
    * userName  **参数解释**：  用户名称。  **约束限制**：  不涉及。
    * projectId  **参数解释**：  项目ID。  **约束限制**：  不涉及。
    * projectName  **参数解释**：  项目名称。  **约束限制**：  不涉及。
    * engineName  **参数解释**：  数据库引擎名称。  **约束限制**：  不涉及。
    * newInstanceDefault  **参数解释**：  新实例是否默认开启自动告警。  **约束限制**：  不涉及。
    * switchStatus  **参数解释**：  自动告警状态转换。  **约束限制**：  不涉及。
    * alarmId  **参数解释**：  告警规则唯一标识符。  **约束限制**：  不涉及。
    * topicUrn  **参数解释**：  主题URN。  **约束限制**：  不涉及。
    * createdAt  **参数解释**：  记录被创建的时间戳。  **约束限制**：  不涉及。
    * updatedAt  **参数解释**：  记录最后一次被更新的时间戳。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'engineName' => 'setEngineName',
            'newInstanceDefault' => 'setNewInstanceDefault',
            'switchStatus' => 'setSwitchStatus',
            'alarmId' => 'setAlarmId',
            'topicUrn' => 'setTopicUrn',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  告警记录唯一标识符。  **约束限制**：  不涉及。
    * domainId  **参数解释**：  租户ID。  **约束限制**：  不涉及。
    * domainName  **参数解释**：  租户名称。  **约束限制**：  不涉及。
    * userId  **参数解释**：  用户ID。  **约束限制**：  不涉及。
    * userName  **参数解释**：  用户名称。  **约束限制**：  不涉及。
    * projectId  **参数解释**：  项目ID。  **约束限制**：  不涉及。
    * projectName  **参数解释**：  项目名称。  **约束限制**：  不涉及。
    * engineName  **参数解释**：  数据库引擎名称。  **约束限制**：  不涉及。
    * newInstanceDefault  **参数解释**：  新实例是否默认开启自动告警。  **约束限制**：  不涉及。
    * switchStatus  **参数解释**：  自动告警状态转换。  **约束限制**：  不涉及。
    * alarmId  **参数解释**：  告警规则唯一标识符。  **约束限制**：  不涉及。
    * topicUrn  **参数解释**：  主题URN。  **约束限制**：  不涉及。
    * createdAt  **参数解释**：  记录被创建的时间戳。  **约束限制**：  不涉及。
    * updatedAt  **参数解释**：  记录最后一次被更新的时间戳。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'engineName' => 'getEngineName',
            'newInstanceDefault' => 'getNewInstanceDefault',
            'switchStatus' => 'getSwitchStatus',
            'alarmId' => 'getAlarmId',
            'topicUrn' => 'getTopicUrn',
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['newInstanceDefault'] = isset($data['newInstanceDefault']) ? $data['newInstanceDefault'] : null;
        $this->container['switchStatus'] = isset($data['switchStatus']) ? $data['switchStatus'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 128)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 128)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 0)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['engineName']) && (mb_strlen($this->container['engineName']) > 36)) {
                $invalidProperties[] = "invalid value for 'engineName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['engineName']) && (mb_strlen($this->container['engineName']) < 0)) {
                $invalidProperties[] = "invalid value for 'engineName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['switchStatus']) && (mb_strlen($this->container['switchStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'switchStatus', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['switchStatus']) && (mb_strlen($this->container['switchStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'switchStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alarmId']) && (mb_strlen($this->container['alarmId']) > 512)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['alarmId']) && (mb_strlen($this->container['alarmId']) < 0)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) > 256)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdAt']) && ($this->container['createdAt'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createdAt', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createdAt']) && ($this->container['createdAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedAt']) && ($this->container['updatedAt'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updatedAt', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updatedAt']) && ($this->container['updatedAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', must be bigger than or equal to 0.";
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
    *  **参数解释**：  告警记录唯一标识符。  **约束限制**：  不涉及。
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
    * @param string|null $id **参数解释**：  告警记录唯一标识符。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**：  租户ID。  **约束限制**：  不涉及。
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
    * @param string|null $domainId **参数解释**：  租户ID。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释**：  租户名称。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName **参数解释**：  租户名称。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**：  用户ID。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId **参数解释**：  用户ID。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**：  用户名称。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**：  用户名称。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：  项目ID。  **约束限制**：  不涉及。
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
    * @param string|null $projectId **参数解释**：  项目ID。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释**：  项目名称。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName **参数解释**：  项目名称。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets engineName
    *  **参数解释**：  数据库引擎名称。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName **参数解释**：  数据库引擎名称。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets newInstanceDefault
    *  **参数解释**：  新实例是否默认开启自动告警。  **约束限制**：  不涉及。
    *
    * @return bool|null
    */
    public function getNewInstanceDefault()
    {
        return $this->container['newInstanceDefault'];
    }

    /**
    * Sets newInstanceDefault
    *
    * @param bool|null $newInstanceDefault **参数解释**：  新实例是否默认开启自动告警。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setNewInstanceDefault($newInstanceDefault)
    {
        $this->container['newInstanceDefault'] = $newInstanceDefault;
        return $this;
    }

    /**
    * Gets switchStatus
    *  **参数解释**：  自动告警状态转换。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getSwitchStatus()
    {
        return $this->container['switchStatus'];
    }

    /**
    * Sets switchStatus
    *
    * @param string|null $switchStatus **参数解释**：  自动告警状态转换。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setSwitchStatus($switchStatus)
    {
        $this->container['switchStatus'] = $switchStatus;
        return $this;
    }

    /**
    * Gets alarmId
    *  **参数解释**：  告警规则唯一标识符。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId **参数解释**：  告警规则唯一标识符。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets topicUrn
    *  **参数解释**：  主题URN。  **约束限制**：  不涉及。
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn **参数解释**：  主题URN。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**：  记录被创建的时间戳。  **约束限制**：  不涉及。
    *
    * @return int|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int|null $createdAt **参数解释**：  记录被创建的时间戳。  **约束限制**：  不涉及。
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
    *  **参数解释**：  记录最后一次被更新的时间戳。  **约束限制**：  不涉及。
    *
    * @return int|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param int|null $updatedAt **参数解释**：  记录最后一次被更新的时间戳。  **约束限制**：  不涉及。
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

