<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIpdProjectIssuesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIpdProjectIssuesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  devcloud项目的32位id
    * isBacklog  是否backlog查询
    * issueType  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    * srcDomainId  提出项目Id
    * view  视图模式[tree,list]
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'isBacklog' => 'bool',
            'issueType' => 'string',
            'srcDomainId' => 'string',
            'view' => 'string',
            'body' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\SearchIpdIssuesRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  devcloud项目的32位id
    * isBacklog  是否backlog查询
    * issueType  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    * srcDomainId  提出项目Id
    * view  视图模式[tree,list]
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'isBacklog' => null,
        'issueType' => null,
        'srcDomainId' => null,
        'view' => null,
        'body' => null
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
    * projectId  devcloud项目的32位id
    * isBacklog  是否backlog查询
    * issueType  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    * srcDomainId  提出项目Id
    * view  视图模式[tree,list]
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'isBacklog' => 'is_backlog',
            'issueType' => 'issue_type',
            'srcDomainId' => 'src_domain_id',
            'view' => 'view',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  devcloud项目的32位id
    * isBacklog  是否backlog查询
    * issueType  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    * srcDomainId  提出项目Id
    * view  视图模式[tree,list]
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'isBacklog' => 'setIsBacklog',
            'issueType' => 'setIssueType',
            'srcDomainId' => 'setSrcDomainId',
            'view' => 'setView',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  devcloud项目的32位id
    * isBacklog  是否backlog查询
    * issueType  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    * srcDomainId  提出项目Id
    * view  视图模式[tree,list]
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'isBacklog' => 'getIsBacklog',
            'issueType' => 'getIssueType',
            'srcDomainId' => 'getSrcDomainId',
            'view' => 'getView',
            'body' => 'getBody'
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
        $this->container['isBacklog'] = isset($data['isBacklog']) ? $data['isBacklog'] : null;
        $this->container['issueType'] = isset($data['issueType']) ? $data['issueType'] : null;
        $this->container['srcDomainId'] = isset($data['srcDomainId']) ? $data['srcDomainId'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
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
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['issueType'] === null) {
            $invalidProperties[] = "'issueType' can't be null";
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
    *  devcloud项目的32位id
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
    * @param string $projectId devcloud项目的32位id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets isBacklog
    *  是否backlog查询
    *
    * @return bool|null
    */
    public function getIsBacklog()
    {
        return $this->container['isBacklog'];
    }

    /**
    * Sets isBacklog
    *
    * @param bool|null $isBacklog 是否backlog查询
    *
    * @return $this
    */
    public function setIsBacklog($isBacklog)
    {
        $this->container['isBacklog'] = $isBacklog;
        return $this;
    }

    /**
    * Gets issueType
    *  工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    *
    * @return string
    */
    public function getIssueType()
    {
        return $this->container['issueType'];
    }

    /**
    * Sets issueType
    *
    * @param string $issueType 工作项分类：[Epic,FE,IR,RR,SR,US,AR,Bug,Task]
    *
    * @return $this
    */
    public function setIssueType($issueType)
    {
        $this->container['issueType'] = $issueType;
        return $this;
    }

    /**
    * Gets srcDomainId
    *  提出项目Id
    *
    * @return string|null
    */
    public function getSrcDomainId()
    {
        return $this->container['srcDomainId'];
    }

    /**
    * Sets srcDomainId
    *
    * @param string|null $srcDomainId 提出项目Id
    *
    * @return $this
    */
    public function setSrcDomainId($srcDomainId)
    {
        $this->container['srcDomainId'] = $srcDomainId;
        return $this;
    }

    /**
    * Gets view
    *  视图模式[tree,list]
    *
    * @return string|null
    */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
    * Sets view
    *
    * @param string|null $view 视图模式[tree,list]
    *
    * @return $this
    */
    public function setView($view)
    {
        $this->container['view'] = $view;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\SearchIpdIssuesRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\SearchIpdIssuesRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

