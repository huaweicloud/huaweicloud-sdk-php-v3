<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Workitems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Workitems';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  工作项id
    * description  工作项描述
    * actualWorkHours  实际工时
    * assignedUser  assignedUser
    * author  author
    * beginTime  工作项开始时间
    * createdTime  创建时间
    * tags  标签
    * developer  developer
    * assignedCcUser  抄送人
    * discoverVersion  发现问题的版本
    * endTime  工作项结束时间
    * doneRatio  工作项进度值
    * expectedWorkHours  预计工时
    * order  顺序
    * parentWorkItemId  父工作项的id
    * releaseVersion  发布的版本
    * storyPoint  故事点
    * domain  domain
    * iteration  iteration
    * module  module
    * priority  工作项优先级
    * severity  严重的程度 \"提示\", \"一般\", \"严重\", \"致命\"
    * status  status
    * subject  工作项标题
    * updatedTime  更新时间
    * sequence  工作项编号
    * important  重要程度 \"关键\", \"重要\", \"一般\", \"提示\"
    * customFields  用户自定义字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'description' => 'string',
            'actualWorkHours' => 'double',
            'assignedUser' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser',
            'author' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser',
            'beginTime' => 'string',
            'createdTime' => 'string',
            'tags' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsTags[]',
            'developer' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser',
            'assignedCcUser' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser[]',
            'discoverVersion' => 'string',
            'endTime' => 'string',
            'doneRatio' => 'string',
            'expectedWorkHours' => 'double',
            'order' => 'string',
            'parentWorkItemId' => 'string',
            'releaseVersion' => 'string',
            'storyPoint' => 'string',
            'domain' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsDomain',
            'iteration' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsIteration',
            'module' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsModule',
            'priority' => 'string',
            'severity' => 'string',
            'status' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsStatus',
            'subject' => 'string',
            'updatedTime' => 'string',
            'sequence' => 'string',
            'important' => 'string',
            'customFields' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemCustomField[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  工作项id
    * description  工作项描述
    * actualWorkHours  实际工时
    * assignedUser  assignedUser
    * author  author
    * beginTime  工作项开始时间
    * createdTime  创建时间
    * tags  标签
    * developer  developer
    * assignedCcUser  抄送人
    * discoverVersion  发现问题的版本
    * endTime  工作项结束时间
    * doneRatio  工作项进度值
    * expectedWorkHours  预计工时
    * order  顺序
    * parentWorkItemId  父工作项的id
    * releaseVersion  发布的版本
    * storyPoint  故事点
    * domain  domain
    * iteration  iteration
    * module  module
    * priority  工作项优先级
    * severity  严重的程度 \"提示\", \"一般\", \"严重\", \"致命\"
    * status  status
    * subject  工作项标题
    * updatedTime  更新时间
    * sequence  工作项编号
    * important  重要程度 \"关键\", \"重要\", \"一般\", \"提示\"
    * customFields  用户自定义字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'actualWorkHours' => 'double',
        'assignedUser' => null,
        'author' => null,
        'beginTime' => null,
        'createdTime' => null,
        'tags' => null,
        'developer' => null,
        'assignedCcUser' => null,
        'discoverVersion' => null,
        'endTime' => 'int64',
        'doneRatio' => null,
        'expectedWorkHours' => 'double',
        'order' => null,
        'parentWorkItemId' => null,
        'releaseVersion' => null,
        'storyPoint' => null,
        'domain' => null,
        'iteration' => null,
        'module' => null,
        'priority' => null,
        'severity' => null,
        'status' => null,
        'subject' => null,
        'updatedTime' => null,
        'sequence' => null,
        'important' => null,
        'customFields' => null
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
    * id  工作项id
    * description  工作项描述
    * actualWorkHours  实际工时
    * assignedUser  assignedUser
    * author  author
    * beginTime  工作项开始时间
    * createdTime  创建时间
    * tags  标签
    * developer  developer
    * assignedCcUser  抄送人
    * discoverVersion  发现问题的版本
    * endTime  工作项结束时间
    * doneRatio  工作项进度值
    * expectedWorkHours  预计工时
    * order  顺序
    * parentWorkItemId  父工作项的id
    * releaseVersion  发布的版本
    * storyPoint  故事点
    * domain  domain
    * iteration  iteration
    * module  module
    * priority  工作项优先级
    * severity  严重的程度 \"提示\", \"一般\", \"严重\", \"致命\"
    * status  status
    * subject  工作项标题
    * updatedTime  更新时间
    * sequence  工作项编号
    * important  重要程度 \"关键\", \"重要\", \"一般\", \"提示\"
    * customFields  用户自定义字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'actualWorkHours' => 'actual_work_hours',
            'assignedUser' => 'assigned_user',
            'author' => 'author',
            'beginTime' => 'begin_time',
            'createdTime' => 'created_time',
            'tags' => 'tags',
            'developer' => 'developer',
            'assignedCcUser' => 'assigned_cc_user',
            'discoverVersion' => 'discover_version',
            'endTime' => 'end_time',
            'doneRatio' => 'done_ratio',
            'expectedWorkHours' => 'expected_work_hours',
            'order' => 'order',
            'parentWorkItemId' => 'parent_work_item_id',
            'releaseVersion' => 'release_version',
            'storyPoint' => 'story_point',
            'domain' => 'domain',
            'iteration' => 'iteration',
            'module' => 'module',
            'priority' => 'priority',
            'severity' => 'severity',
            'status' => 'status',
            'subject' => 'subject',
            'updatedTime' => 'updated_time',
            'sequence' => 'sequence',
            'important' => 'important',
            'customFields' => 'custom_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  工作项id
    * description  工作项描述
    * actualWorkHours  实际工时
    * assignedUser  assignedUser
    * author  author
    * beginTime  工作项开始时间
    * createdTime  创建时间
    * tags  标签
    * developer  developer
    * assignedCcUser  抄送人
    * discoverVersion  发现问题的版本
    * endTime  工作项结束时间
    * doneRatio  工作项进度值
    * expectedWorkHours  预计工时
    * order  顺序
    * parentWorkItemId  父工作项的id
    * releaseVersion  发布的版本
    * storyPoint  故事点
    * domain  domain
    * iteration  iteration
    * module  module
    * priority  工作项优先级
    * severity  严重的程度 \"提示\", \"一般\", \"严重\", \"致命\"
    * status  status
    * subject  工作项标题
    * updatedTime  更新时间
    * sequence  工作项编号
    * important  重要程度 \"关键\", \"重要\", \"一般\", \"提示\"
    * customFields  用户自定义字段
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'actualWorkHours' => 'setActualWorkHours',
            'assignedUser' => 'setAssignedUser',
            'author' => 'setAuthor',
            'beginTime' => 'setBeginTime',
            'createdTime' => 'setCreatedTime',
            'tags' => 'setTags',
            'developer' => 'setDeveloper',
            'assignedCcUser' => 'setAssignedCcUser',
            'discoverVersion' => 'setDiscoverVersion',
            'endTime' => 'setEndTime',
            'doneRatio' => 'setDoneRatio',
            'expectedWorkHours' => 'setExpectedWorkHours',
            'order' => 'setOrder',
            'parentWorkItemId' => 'setParentWorkItemId',
            'releaseVersion' => 'setReleaseVersion',
            'storyPoint' => 'setStoryPoint',
            'domain' => 'setDomain',
            'iteration' => 'setIteration',
            'module' => 'setModule',
            'priority' => 'setPriority',
            'severity' => 'setSeverity',
            'status' => 'setStatus',
            'subject' => 'setSubject',
            'updatedTime' => 'setUpdatedTime',
            'sequence' => 'setSequence',
            'important' => 'setImportant',
            'customFields' => 'setCustomFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  工作项id
    * description  工作项描述
    * actualWorkHours  实际工时
    * assignedUser  assignedUser
    * author  author
    * beginTime  工作项开始时间
    * createdTime  创建时间
    * tags  标签
    * developer  developer
    * assignedCcUser  抄送人
    * discoverVersion  发现问题的版本
    * endTime  工作项结束时间
    * doneRatio  工作项进度值
    * expectedWorkHours  预计工时
    * order  顺序
    * parentWorkItemId  父工作项的id
    * releaseVersion  发布的版本
    * storyPoint  故事点
    * domain  domain
    * iteration  iteration
    * module  module
    * priority  工作项优先级
    * severity  严重的程度 \"提示\", \"一般\", \"严重\", \"致命\"
    * status  status
    * subject  工作项标题
    * updatedTime  更新时间
    * sequence  工作项编号
    * important  重要程度 \"关键\", \"重要\", \"一般\", \"提示\"
    * customFields  用户自定义字段
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'actualWorkHours' => 'getActualWorkHours',
            'assignedUser' => 'getAssignedUser',
            'author' => 'getAuthor',
            'beginTime' => 'getBeginTime',
            'createdTime' => 'getCreatedTime',
            'tags' => 'getTags',
            'developer' => 'getDeveloper',
            'assignedCcUser' => 'getAssignedCcUser',
            'discoverVersion' => 'getDiscoverVersion',
            'endTime' => 'getEndTime',
            'doneRatio' => 'getDoneRatio',
            'expectedWorkHours' => 'getExpectedWorkHours',
            'order' => 'getOrder',
            'parentWorkItemId' => 'getParentWorkItemId',
            'releaseVersion' => 'getReleaseVersion',
            'storyPoint' => 'getStoryPoint',
            'domain' => 'getDomain',
            'iteration' => 'getIteration',
            'module' => 'getModule',
            'priority' => 'getPriority',
            'severity' => 'getSeverity',
            'status' => 'getStatus',
            'subject' => 'getSubject',
            'updatedTime' => 'getUpdatedTime',
            'sequence' => 'getSequence',
            'important' => 'getImportant',
            'customFields' => 'getCustomFields'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['actualWorkHours'] = isset($data['actualWorkHours']) ? $data['actualWorkHours'] : null;
        $this->container['assignedUser'] = isset($data['assignedUser']) ? $data['assignedUser'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['developer'] = isset($data['developer']) ? $data['developer'] : null;
        $this->container['assignedCcUser'] = isset($data['assignedCcUser']) ? $data['assignedCcUser'] : null;
        $this->container['discoverVersion'] = isset($data['discoverVersion']) ? $data['discoverVersion'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['doneRatio'] = isset($data['doneRatio']) ? $data['doneRatio'] : null;
        $this->container['expectedWorkHours'] = isset($data['expectedWorkHours']) ? $data['expectedWorkHours'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['parentWorkItemId'] = isset($data['parentWorkItemId']) ? $data['parentWorkItemId'] : null;
        $this->container['releaseVersion'] = isset($data['releaseVersion']) ? $data['releaseVersion'] : null;
        $this->container['storyPoint'] = isset($data['storyPoint']) ? $data['storyPoint'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['iteration'] = isset($data['iteration']) ? $data['iteration'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['important'] = isset($data['important']) ? $data['important'] : null;
        $this->container['customFields'] = isset($data['customFields']) ? $data['customFields'] : null;
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
    *  工作项id
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
    * @param string|null $id 工作项id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  工作项描述
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
    * @param string|null $description 工作项描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets actualWorkHours
    *  实际工时
    *
    * @return double|null
    */
    public function getActualWorkHours()
    {
        return $this->container['actualWorkHours'];
    }

    /**
    * Sets actualWorkHours
    *
    * @param double|null $actualWorkHours 实际工时
    *
    * @return $this
    */
    public function setActualWorkHours($actualWorkHours)
    {
        $this->container['actualWorkHours'] = $actualWorkHours;
        return $this;
    }

    /**
    * Gets assignedUser
    *  assignedUser
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser|null
    */
    public function getAssignedUser()
    {
        return $this->container['assignedUser'];
    }

    /**
    * Sets assignedUser
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser|null $assignedUser assignedUser
    *
    * @return $this
    */
    public function setAssignedUser($assignedUser)
    {
        $this->container['assignedUser'] = $assignedUser;
        return $this;
    }

    /**
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets beginTime
    *  工作项开始时间
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 工作项开始时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsTags[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets developer
    *  developer
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser|null
    */
    public function getDeveloper()
    {
        return $this->container['developer'];
    }

    /**
    * Sets developer
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser|null $developer developer
    *
    * @return $this
    */
    public function setDeveloper($developer)
    {
        $this->container['developer'] = $developer;
        return $this;
    }

    /**
    * Gets assignedCcUser
    *  抄送人
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser[]|null
    */
    public function getAssignedCcUser()
    {
        return $this->container['assignedCcUser'];
    }

    /**
    * Sets assignedCcUser
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemUser[]|null $assignedCcUser 抄送人
    *
    * @return $this
    */
    public function setAssignedCcUser($assignedCcUser)
    {
        $this->container['assignedCcUser'] = $assignedCcUser;
        return $this;
    }

    /**
    * Gets discoverVersion
    *  发现问题的版本
    *
    * @return string|null
    */
    public function getDiscoverVersion()
    {
        return $this->container['discoverVersion'];
    }

    /**
    * Sets discoverVersion
    *
    * @param string|null $discoverVersion 发现问题的版本
    *
    * @return $this
    */
    public function setDiscoverVersion($discoverVersion)
    {
        $this->container['discoverVersion'] = $discoverVersion;
        return $this;
    }

    /**
    * Gets endTime
    *  工作项结束时间
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
    * @param string|null $endTime 工作项结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets doneRatio
    *  工作项进度值
    *
    * @return string|null
    */
    public function getDoneRatio()
    {
        return $this->container['doneRatio'];
    }

    /**
    * Sets doneRatio
    *
    * @param string|null $doneRatio 工作项进度值
    *
    * @return $this
    */
    public function setDoneRatio($doneRatio)
    {
        $this->container['doneRatio'] = $doneRatio;
        return $this;
    }

    /**
    * Gets expectedWorkHours
    *  预计工时
    *
    * @return double|null
    */
    public function getExpectedWorkHours()
    {
        return $this->container['expectedWorkHours'];
    }

    /**
    * Sets expectedWorkHours
    *
    * @param double|null $expectedWorkHours 预计工时
    *
    * @return $this
    */
    public function setExpectedWorkHours($expectedWorkHours)
    {
        $this->container['expectedWorkHours'] = $expectedWorkHours;
        return $this;
    }

    /**
    * Gets order
    *  顺序
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 顺序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets parentWorkItemId
    *  父工作项的id
    *
    * @return string|null
    */
    public function getParentWorkItemId()
    {
        return $this->container['parentWorkItemId'];
    }

    /**
    * Sets parentWorkItemId
    *
    * @param string|null $parentWorkItemId 父工作项的id
    *
    * @return $this
    */
    public function setParentWorkItemId($parentWorkItemId)
    {
        $this->container['parentWorkItemId'] = $parentWorkItemId;
        return $this;
    }

    /**
    * Gets releaseVersion
    *  发布的版本
    *
    * @return string|null
    */
    public function getReleaseVersion()
    {
        return $this->container['releaseVersion'];
    }

    /**
    * Sets releaseVersion
    *
    * @param string|null $releaseVersion 发布的版本
    *
    * @return $this
    */
    public function setReleaseVersion($releaseVersion)
    {
        $this->container['releaseVersion'] = $releaseVersion;
        return $this;
    }

    /**
    * Gets storyPoint
    *  故事点
    *
    * @return string|null
    */
    public function getStoryPoint()
    {
        return $this->container['storyPoint'];
    }

    /**
    * Sets storyPoint
    *
    * @param string|null $storyPoint 故事点
    *
    * @return $this
    */
    public function setStoryPoint($storyPoint)
    {
        $this->container['storyPoint'] = $storyPoint;
        return $this;
    }

    /**
    * Gets domain
    *  domain
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsDomain|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsDomain|null $domain domain
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets iteration
    *  iteration
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsIteration|null
    */
    public function getIteration()
    {
        return $this->container['iteration'];
    }

    /**
    * Sets iteration
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsIteration|null $iteration iteration
    *
    * @return $this
    */
    public function setIteration($iteration)
    {
        $this->container['iteration'] = $iteration;
        return $this;
    }

    /**
    * Gets module
    *  module
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsModule|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsModule|null $module module
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets priority
    *  工作项优先级
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority 工作项优先级
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets severity
    *  严重的程度 \"提示\", \"一般\", \"严重\", \"致命\"
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 严重的程度 \"提示\", \"一般\", \"严重\", \"致命\"
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemsStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subject
    *  工作项标题
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 工作项标题
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets sequence
    *  工作项编号
    *
    * @return string|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param string|null $sequence 工作项编号
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets important
    *  重要程度 \"关键\", \"重要\", \"一般\", \"提示\"
    *
    * @return string|null
    */
    public function getImportant()
    {
        return $this->container['important'];
    }

    /**
    * Sets important
    *
    * @param string|null $important 重要程度 \"关键\", \"重要\", \"一般\", \"提示\"
    *
    * @return $this
    */
    public function setImportant($important)
    {
        $this->container['important'] = $important;
        return $this;
    }

    /**
    * Gets customFields
    *  用户自定义字段
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemCustomField[]|null
    */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
    * Sets customFields
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkitemCustomField[]|null $customFields 用户自定义字段
    *
    * @return $this
    */
    public function setCustomFields($customFields)
    {
        $this->container['customFields'] = $customFields;
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

